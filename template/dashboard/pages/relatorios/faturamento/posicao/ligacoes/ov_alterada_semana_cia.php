<?php
$OVENDAQUIT = mysqli_query($CONNECTIONFATURAMENTO, "SELECT OV.*, SAIDA.* FROM tb_ordem_venda AS OV LEFT JOIN tb_saida_semana AS SAIDA on OV.Doc_SD=SAIDA.ORDEM WHERE OV.Data_doc BETWEEN '$DATAINICIO' AND '$DATAFIM' AND OV.SAFRA='$SAFRA' AND col_TipoOV='V. Mercado Interno' AND OV.UM='4' GROUP BY OV.Doc_SD ORDER BY OV.Nome_1 ASC");
$COSULT = mysqli_num_rows($OVENDAQUIT);
if ($COSULT > 0) {

$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(91, 4, utf8_decode('Ordens de Venda Alterada na Semana(Cia.)'), 1, 2, 'C'); 
$pdf->SetFont('Arial','',5);
$pdf->SetWidths(Array(91,18,15,17,15.5,20,18.5));
$pdf->SetAligns(Array('L','C','C','R','R','R','R','R'));
$pdf->SetLineHeight(5);

    while($row = $OVENDAQUIT->fetch_array()){
                $ORDS = $row['Doc_SD'];
                $PREC_LIQ = $row['Preco_liq'];
                $VALOR_SC = $row['Val_liq'];

                $SOMAQUANTIORD = mysqli_query($CONNECTIONFATURAMENTO, "SELECT SUM(QUANTIDADE) AS SOMASE, SUM(VL_BRUTO) AS SOMABRUTO FROM `tb_saida_semana` WHERE ORDEM='$ORDS' AND SAFRA='$SAFRA'");
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

                if (empty($PREC_LIQ)) {

                }else{
                    $SOMAQUANTIORD = mysqli_query($CONNECTIONFATURAMENTO, "SELECT SUM(Preco_liq) AS SOMASE FROM `tb_ordem_venda` WHERE Doc_SD='$ORDS' AND Data_doc BETWEEN '$DATAINICIO' AND '$DATAFIM' AND SAFRA='$SAFRA' AND UM='4'");
                    $COSULTORD = mysqli_num_rows($SOMAQUANTIORD);
                    if($COSULTORD > 0){
                        while ($Linha = $SOMAQUANTIORD->fetch_array()){
                            if ($row['UMB']=='KG') {
                                $quantsoma_ATELR = $Linha['SOMASE']/50;
                            }else{
                                $quantsoma_ATELR = $Linha['SOMASE'];
                            }
                        }
                    }
                }

                
            $pdf->Row(Array(
                utf8_decode($row['Nome_1']),
                $row['Doc_SD'],
                date("d/m/Y",strtotime($row['Data_doc'])),
                number_format($BRUTOVL / $quantsoma, 2,',','.'),
                number_format($SELECQTDORD,0,',','.'),
                number_format($quantsoma_ATELR,0,',','.'),
                number_format($SELECQTDORD - $quantsoma_ATELR,0,',','.'),
            ));
        }
        $SELECORDSUM = mysqli_query($CONNECTIONFATURAMENTO, "SELECT UMB,SUM(Qtd_conf) AS SOMASEQ FROM `tb_ordem_venda` WHERE Data_doc BETWEEN '$DATAINICIO' AND '$DATAFIM' AND col_TipoOV='V. Mercado Interno' AND UM='4' AND SAFRA='$SAFRA' GROUP BY UMB;");
        $ROWSELECSUM = mysqli_num_rows($SELECORDSUM);
        if($ROWSELECSUM > 0){
            while ($Linha = $SELECORDSUM->fetch_array()){
                if($Linha['UMB'] == 'KG'){
                    $OVALTERADACIAQTDSKG = $Linha['SOMASEQ']/50;
                }
                if($Linha['UMB'] == 'SC') {
                    $OVALTERADACIAQTDSSC = $Linha['SOMASEQ'];
                }
            }
        }
        $SELECORDSUM = mysqli_query($CONNECTIONFATURAMENTO, "SELECT UMB,SUM(Preco_liq) AS SOMAQUANTIDAE FROM `tb_ordem_venda` WHERE Data_doc BETWEEN '$DATAINICIO' AND '$DATAFIM' AND col_TipoOV='V. Mercado Interno' AND UM='4' AND SAFRA='$SAFRA' GROUP BY UMB;");
        $ROWSELECSUM = mysqli_num_rows($SELECORDSUM);
        if($ROWSELECSUM > 0){
            while ($Linha = $SELECORDSUM->fetch_array()){
                if($Linha['UMB'] == 'KG'){
                    $OVALTERADACIAQTDKG = $Linha['SOMAQUANTIDAE']/50;
                }
                if($Linha['UMB'] == 'SC') {
                    $OVALTERADACIAQTDSC = $Linha['SOMAQUANTIDAE'];
                }
            }
        }
    
    
    $OVALTERADASEMANACIA = $OVALTERADACIAQTDSKG+$OVALTERADACIAQTDSSC;
    $OVALTERADASEMANACIASAIDA = $OVALTERADACIAQTDKG+$OVALTERADACIAQTDSC;
    $OVALTERADASEMANACIASALDO = $OVALTERADASEMANACIA-$OVALTERADASEMANACIASAIDA;
    
    $pdf->SetX(10);                                                          ##
    $pdf->SetFont('Arial', 'B', 6);                                          ##
    $pdf->SetWidths(array(124,17,15.5,20,18.5));                             ##
    $pdf->SetAligns(array('R', 'R', 'R', 'R', 'R'));                         ##
    $pdf->SetLineHeight(4);                                                  ##
    $pdf->Row(Array(                                                         ##
        utf8_decode('Total de alteração de Ordem de Venda na Semana'),       ##
        utf8_decode(' '),                                                    ##
        number_format($OVALTERADASEMANACIA, 0, ',', '.'),                    ##
        number_format($OVALTERADASEMANACIASAIDA, 0, ',', '.'),               ##
        number_format($OVALTERADASEMANACIASALDO, 0, ',', '.')                ##
    ));       
    }
?>
    