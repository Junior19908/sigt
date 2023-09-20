<?php
$OVENDAQUIT = mysqli_query($CONNECTIONFATURAMENTO, "SELECT OV.*, SAIDA.* FROM tb_ordem_venda AS OV LEFT JOIN tb_saida_semana AS SAIDA on OV.Doc_SD=SAIDA.ORDEM WHERE OV.Data_doc BETWEEN '$DATAINICIO' AND '$DATAFIM' AND col_TipoOV='Venda Representante' AND OV.UM NOT IN(0,1,2,3,4,5,6,7,8,9,12,13,14,15) AND OV.SAFRA='$SAFRA' GROUP BY OV.Doc_SD ORDER BY OV.Nome_1 ASC");
$COSULT = mysqli_num_rows($OVENDAQUIT);
if ($COSULT > 0) {
    while($row = $OVENDAQUIT->fetch_array()){
                $ORDS = $row['Doc_SD'];
                $SOMAQUANTIORD = mysqli_query($CONNECTIONFATURAMENTO, "SELECT *,SUM(QUANTIDADE) AS SOMASE, SUM(VL_BRUTO) AS SOMABRUTO FROM `tb_saida_semana` WHERE ORDEM='$ORDS' AND DATA_EMISS BETWEEN '$DATAINICIO' AND '$DATAFIM' AND SAFRA='$SAFRA'");
                $COSULTORD = mysqli_num_rows($SOMAQUANTIORD);
                if($COSULTORD > 0){
                    while ($Linha = $SOMAQUANTIORD->fetch_array()){
                        if ($row['UNIDADE']=='KG') {
                            $quantsoma = $Linha['SOMASE']/50;
                        }else{
                            $quantsoma = $Linha['SOMASE'];
                        }
                        $BRUTOVL = $Linha['SOMABRUTO'];
                    }
                }
                $SELECORD = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_ordem_venda` WHERE Doc_SD='$ORDS' AND Data_doc BETWEEN '$DATAINICIO' AND '$DATAFIM' AND SAFRA='$SAFRA'");
                $ROWSELEC = mysqli_num_rows($SELECORD);
                if($ROWSELEC > 0){
                    while ($Linha = $SELECORD->fetch_array()){
                        if($row['UMB'] == 'KG'){
                            $SELECQTDORD = $Linha['Qtd_conf']/50;
                        }else {
                            $SELECQTDORD = $Linha['Qtd_conf'];
                        } 
                    }
                }
                if ($row['N_pedido'] >= 40000000) {
                   
                }else {
                        $pdf->Row(Array(
                            utf8_decode(' => '.$row['COD_RECEB']),
                            $row['Doc_SD'],
                            date("d/m/Y",strtotime($row['Data_doc'])),
                            number_format($BRUTOVL / $quantsoma, 2,',','.'),
                            number_format($SELECQTDORD,0,',','.'),
                            number_format($quantsoma,0,',','.'),
                            number_format($SELECQTDORD - $quantsoma,0,',','.'),
                        ),
                    $pdf->Row(Array(
                        utf8_decode($row['Nome_1']),
                    )));
           }
        }
    }else{

    }

    $SELECORDSUM = mysqli_query($CONNECTIONFATURAMENTO, "SELECT SUM(Qtd_conf) AS SOMASEQ,UMB FROM `tb_ordem_venda` WHERE Data_doc BETWEEN '$DATAINICIO' AND '$DATAFIM' AND col_TipoOV='Venda Representante' AND SAFRA='$SAFRA' AND UM = '10' GROUP BY UMB");
    $ROWSELECSUM = mysqli_num_rows($SELECORDSUM);
    if($ROWSELECSUM > 0){
        while ($Linha = $SELECORDSUM->fetch_array()){
            if($Linha['UMB'] == 'KG'){
                $SELECQTDORD3 = $Linha['SOMASEQ']/50;
            }
            if($Linha['UMB'] == 'SC') {
                $SELECQTDORD4 = $Linha['SOMASEQ'];
            }
        }
    }
    $SELECORDSUM = mysqli_query($CONNECTIONFATURAMENTO, "SELECT OV.*, SAIDA.*, CONTRATO.*,SUM(SAIDA.QUANTIDADE) AS SOMAQUANTIDAE FROM tb_ordem_venda AS OV LEFT JOIN tb_saida_semana AS SAIDA on OV.Doc_SD=SAIDA.ORDEM LEFT JOIN tb_contratos AS CONTRATO ON OV.N_pedido=CONTRATO.col_docvendas WHERE OV.UM='8' AND SAIDA.DATA_EMISS BETWEEN '$DATAINICIO' AND '$DATAFIM' AND OV.SAFRA='$SAFRA' GROUP BY SAIDA.UNIDADE ORDER BY OV.Nome_1 ASC;");
    $ROWSELECSUM = mysqli_num_rows($SELECORDSUM);
    if($ROWSELECSUM > 0){
        while ($Linha = $SELECORDSUM->fetch_array()){
            if($Linha['UMB'] == 'KG'){
                $SELECQTDORDQUITADA3 = $Linha['SOMAQUANTIDAE']/50;
            }
            if($Linha['UMB'] == 'SC') {
                $SELECQTDORDQUITADA4 = $Linha['SOMAQUANTIDAE'];
            }
        }
    }

    $VENDASEMANAAQUITARQUANTIDADE = $SELECQTDORD4 + $SELECQTDORD3;
    $VENDASEMANAAQUITARSAIDA = $SELECQTDORDQUITADA3 + $SELECQTDORDQUITADA4;
    $VENDASEMANAAQUITARSALDO = $VENDASEMANAAQUITARQUANTIDADE - $VENDASEMANAAQUITARSAIDA;