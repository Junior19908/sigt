<?php
        $QUERY = mysqli_query($CONNECTIONFATURAMENTO, "SELECT CONTRATO.*, OV.*, SAIDA.* FROM tb_contratos AS CONTRATO LEFT JOIN tb_ordem_venda AS OV on CONTRATO.col_docvendas=OV.N_pedido LEFT JOIN tb_saida_semana AS SAIDA ON OV.Doc_SD=SAIDA.ORDEM WHERE OV.col_TipoOV='Venda Representante' AND CONTRATO.col_repres='10' AND CONTRATO.col_position='40003' AND SAIDA.SAFRA='$SAFRA' GROUP BY OV.Doc_SD ORDER BY `CONTRATO`.`col_nome` ASC");
        $CONSULT = mysqli_num_rows($QUERY);

        if ($CONSULT > 0) {
            $QUERY1 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT CONTRATO.*, OV.*, SAIDA.* FROM tb_contratos AS CONTRATO LEFT JOIN tb_ordem_venda AS OV on CONTRATO.col_docvendas=OV.N_pedido LEFT JOIN tb_saida_semana AS SAIDA ON OV.Doc_SD=SAIDA.ORDEM WHERE OV.col_TipoOV='Venda Representante' AND CONTRATO.col_repres='10' AND CONTRATO.col_position='40003' AND SAIDA.SAFRA='$SAFRA' GROUP BY OV.Doc_SD ORDER BY `CONTRATO`.`col_nome` ASC");
            $ROW1 = mysqli_num_rows($QUERY1);
            if($ROW1 > 0){
                while ($Linha = $QUERY1->fetch_array()){
                    $NOME_SEMANA_AQUITAR = $Linha['col_nome'];
                    $CONTRATO_SEMANA_AQUITAR = $Linha['col_docvendas'];
                    if ($Linha['col_un']=='KG') {
                        $QTDCONTRATO40003_SEMANA_AQUITAR = $Linha['col_qtd_contrato']/50;
                    }elseif($Linha['col_un']=='SC') {
                        $QTDCONTRATO40003_SEMANA_AQUITAR = $Linha['col_qtd_contrato'];
                    }elseif($Linha['col_un']=='TM'){
                        $QTDCONTRATO40003_SEMANA_AQUITAR = $Linha['col_qtd_contrato']*20;
                    }
                    $DATACONTRATO_SEMANA_AQUITAR = $Linha['col_data'];
                }
            }

            $SOMAQUANTIORDQUITADA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT OV.*,CONTRATO.*, SUM(Qtd_conf) AS SOMASE FROM tb_ordem_venda AS OV LEFT JOIN tb_contratos AS CONTRATO ON ov.N_pedido=contrato.col_docvendas WHERE contrato.col_position='40003' AND CONTRATO.col_repres='10' AND OV.SAFRA='$SAFRA'");
            $COSULTORDQUIT = mysqli_num_rows($SOMAQUANTIORDQUITADA);
            if($COSULTORDQUIT = 1){
                while ($Linha = $SOMAQUANTIORDQUITADA->fetch_array()){
                    if ($row['UNIDADE']=='KG') {
                        $Q40003_SEMANA_AQUITAR = $Linha['SOMASE']/50;
                    }else{
                        $Q40003_SEMANA_AQUITAR = $Linha['SOMASE'];
                    }
                }
            }

            $S40003_SEMANA_AQUITAR =  $QTDCONTRATO40003_SEMANA_AQUITAR - $QTDCONTRATO40003KG_SEMANA_AQUITAR - $Q40003_SEMANA_AQUITAR;

            $pdf->SetX(10);
            $pdf->SetFont('Arial', 'BI', 6);
            $pdf->SetFillColor(181, 181, 181);
            $pdf->Cell(195, 1,utf8_decode(' - '), 1, 2, 'R',true);
            $pdf->Row(Array(
                utf8_decode($NOME_SEMANA_AQUITAR),
                $CONTRATO_SEMANA_AQUITAR,
                date("d/m/Y",strtotime($DATACONTRATO_SEMANA_AQUITAR)),
                ' ',
                number_format($QTDCONTRATO40003_SEMANA_AQUITAR, 0,',','.'),
                number_format($Q40003_SEMANA_AQUITAR, 0,',','.'),
                number_format($S40003_SEMANA_AQUITAR, 0,',','.')
            ));
            $pdf->SetX(10);
            $pdf->SetFont('Arial','',5);
    
	while($row = $QUERY->fetch_array()){
        $ORDS = $row['Doc_SD'];
        $SOMAQUANTIORDQUITADA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT SUM(QUANTIDADE) AS SOMASE, SUM(VL_BRUTO) AS SOMABRUTO FROM `tb_saida_semana` WHERE ORDEM='$ORDS' AND TRANSPORTADORA!='' AND SAFRA='$SAFRA'");
        $COSULTORDQUIT = mysqli_num_rows($SOMAQUANTIORDQUITADA);
        if($COSULTORDQUIT > 0){
            while ($Linha = $SOMAQUANTIORDQUITADA->fetch_array()){
                if ($row['UNIDADE']=='KG') {
                    $OVREPQUIT_SEMANA_AQUITAR = $Linha['SOMASE']/50;
                }else{
                    $OVREPQUIT_SEMANA_AQUITAR = $Linha['SOMASE'];
                }
                $BRUTOVLOVQUITADA_SEMANA_AQUITAR = $Linha['SOMABRUTO'];
            }
        }
        $QUERYOVQUITADA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_ordem_venda` WHERE Doc_SD='$ORDS' AND SAFRA='$SAFRA' AND UM='10'");
        $ROWOVQUITADA = mysqli_num_rows($QUERYOVQUITADA);
        if($ROWOVQUITADA > 0){
            while ($Linha = $QUERYOVQUITADA->fetch_array()){
                if($row['UMB'] == 'KG'){
                    $QUERYORDQUITADA40003_SEMANA_AQUITAR = $Linha['Qtd_conf']/50;
                }else {
                    $QUERYORDQUITADA40003_SEMANA_AQUITAR = $Linha['Qtd_conf'];
                } 
            }
        }

		$pdf->Row(Array(
            utf8_decode('   => '.$row['COD_RECEB']),
            $row['Doc_SD'],
            date("d/m/Y",strtotime($row['Data_doc'])),
            number_format($BRUTOVLOVQUITADA_SEMANA_AQUITAR / $OVREPQUIT_SEMANA_AQUITAR, 2,',','.'),
            number_format($QUERYORDQUITADA40003_SEMANA_AQUITAR, 0,',','.'),
            number_format($OVREPQUIT_SEMANA_AQUITAR, 0,',','.'),
            number_format($QUERYORDQUITADA40003_SEMANA_AQUITAR - $OVREPQUIT_SEMANA_AQUITAR, 0,',','.'),
        ));
	}
    $pdf->Ln(2);
    }else{
    $QUERYMYSQL = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM tb_contratos WHERE col_position='40003' AND SAFRA='$SAFRA' AND col_repres='10'  ORDER BY `col_nome` ASC");
    $CONSULTMYSQL = mysqli_num_rows($QUERYMYSQL);

    if ($CONSULTMYSQL > 0) {
        $QUERY2 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_contratos` WHERE col_position='40003' AND SAFRA='$SAFRA' AND col_repres='10'");
        $ROW2 = mysqli_num_rows($QUERY2);
        if($ROW2 > 0){
            while ($Linha = $QUERY2->fetch_array()){
                $NOME_SEMANA_AQUITAR = $Linha['col_nome'];
                $CONTRATO_SEMANA_AQUITAR = $Linha['col_docvendas'];
                $QTDCONTRATO40003_SEMANA_AQUITAR = $Linha['col_qtd_contrato'];
            }
        }
        $pdf->SetFont('Arial', 'BI', 6);
        $pdf->SetFillColor(181, 181, 181);
        $pdf->Cell(91, 3, $NOME_SEMANA_AQUITAR.' - '.$CONTRATO_SEMANA_AQUITAR, 1, 2, 'L');
        $pdf->SetFont('Arial', 'BI', 6);
        $pdf->Cell(195, 3,utf8_decode('CONTRATO REFERENTE À - ') .number_format($QTDCONTRATO40003_SEMANA_AQUITAR, 0, ',', '.'). utf8_decode(' SC'), 1, 2, 'R',true);
        $pdf->SetX(10);
        $pdf->SetFont('Arial','',5);
        $pdf->Ln(2);
    }
}
?>