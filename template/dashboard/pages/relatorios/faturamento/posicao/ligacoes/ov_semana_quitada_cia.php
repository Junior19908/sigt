<?php
$OVENDAQUIT = mysqli_query($CONNECTIONFATURAMENTO, "SELECT OV.*, SAIDA.* FROM tb_ordem_venda AS OV LEFT JOIN tb_saida_semana AS SAIDA on OV.Doc_SD=SAIDA.ORDEM WHERE col_TipoOV='V. Mercado Interno' AND OV.SAFRA='$SAFRA' AND UM='3' GROUP BY OV.Doc_SD ORDER BY OV.Nome_1 ASC");
$COSULT = mysqli_num_rows($OVENDAQUIT);
if ($COSULT > 0) {

    $pdf->Ln();                                                              ##
    $pdf->SetFont('Arial', 'BI', 8);                                         ##
    $pdf->Cell(91, 4, utf8_decode('Ordens de Venda Na Semana - Quitadas(CIA.)'), 1, 2, 'C');
    $pdf->SetFont('Arial','',5);
    $pdf->SetWidths(Array(91,18,15,17,15.5,20,18.5));
    $pdf->SetAligns(Array('L','C','C','R','R','R','R','R'));
    $pdf->SetLineHeight(5);

    while($row = $OVENDAQUIT->fetch_array()){
                $ORDS = $row['Doc_SD'];

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
                $SELECORD = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_ordem_venda` WHERE Doc_SD='$ORDS' AND SAFRA='$SAFRA'");
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
                
            $pdf->Row(Array(
                utf8_decode($row['Nome_1']),
                $row['Doc_SD'],
                date("d/m/Y",strtotime($row['Data_doc'])),
                number_format($BRUTOVL / $quantsoma, 2,',','.'),
                number_format($SELECQTDORD,0,',','.'),
                number_format($quantsoma,0,',','.'),
                number_format($SELECQTDORD - $quantsoma,0,',','.'),
            ));
        }



        $SELECORDSUMD = mysqli_query($CONNECTIONFATURAMENTO, "SELECT UMB,SUM(Qtd_conf) AS SOMASEQ FROM `tb_ordem_venda` WHERE col_TipoOV='V. Mercado Interno' AND UM='3' AND SAFRA='$SAFRA' GROUP BY UMB");
        $ROWSELECSUMD = mysqli_num_rows($SELECORDSUMD);
        if($ROWSELECSUMD > 0){
            while ($Linha = $SELECORDSUMD->fetch_array()){
                if($Linha['UMB'] == 'KG'){
                    $SELECQTDORDCIA1OVSEMANA = $Linha['SOMASEQ']/50;
                }
                if($Linha['UMB'] == 'SC') {
                    $SELECQTDORDCIA2OVSEMANA = $Linha['SOMASEQ'];
                }
            }
        }
    
        $SELECORDSUM = mysqli_query($CONNECTIONFATURAMENTO, "SELECT OV.*, SAIDA.*, CONTRATO.*,SUM(SAIDA.QUANTIDADE) AS SOMAQUANTIDAE FROM tb_ordem_venda AS OV LEFT JOIN tb_saida_semana AS SAIDA on OV.Doc_SD=SAIDA.ORDEM LEFT JOIN tb_contratos AS CONTRATO ON OV.N_pedido=CONTRATO.col_docvendas WHERE OV.UM='3' AND OV.SAFRA='$SAFRA' GROUP BY SAIDA.UNIDADE ORDER BY OV.Nome_1 ASC;");
        $ROWSELECSUM = mysqli_num_rows($SELECORDSUM);
        if($ROWSELECSUM > 0){
            while ($Linha = $SELECORDSUM->fetch_array()){
                if($Linha['UNIDADE'] == 'KG'){
                    $OVSEMANACIAQTDKGOVSEMANA = $Linha['SOMAQUANTIDAE']/50;
                }
                if($Linha['UNIDADE'] == 'SC') {
                    $OVSEMANACIAQTDSCOVSEMANA = $Linha['SOMAQUANTIDAE'];
                }
            }
        }
    
    $OVSEMANAQUITADACIA = $SELECQTDORDCIA1OVSEMANA+$SELECQTDORDCIA2OVSEMANA;
    $OVSEMANAQUITADACIASAIDA = $OVSEMANACIAQTDKGOVSEMANA+$OVSEMANACIAQTDSCOVSEMANA;
    $OVSEMANAQUITADACIASALDO = $OVSEMANAQUITADACIA-$OVSEMANAQUITADACIASAIDA;
    





$pdf->SetX(10);                                                          ##
$pdf->SetFont('Arial', 'B', 6);                                          ##
$pdf->SetWidths(array(124,17,15.5,20,18.5));                             ##
$pdf->SetAligns(array('R', 'R', 'R', 'R', 'R'));                         ##
$pdf->SetLineHeight(4);                                                  ##
$pdf->Row(Array(                                                         ##
    utf8_decode('Sub-Total Venda a (CIA.) na Semana:'),                  ##
    utf8_decode(' '),                                                    ##
    number_format($OVSEMANAQUITADACIA, 0, ',', '.'),                     ##
    number_format($OVSEMANAQUITADACIASAIDA, 0, ',', '.'),                ##
    number_format($OVSEMANAQUITADACIASALDO, 0, ',', '.')                 ##
));                                                                      ##

}
?>
