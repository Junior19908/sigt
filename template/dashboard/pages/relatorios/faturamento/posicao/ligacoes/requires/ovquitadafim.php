<?php

$OVENDAQUITOVQUIT = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_contratos` WHERE col_repres=8 ORDER BY `col_id` ASC");
$COSULTOVQUIT = mysqli_num_rows($OVENDAQUITOVQUIT);
if ($COSULTOVQUIT > 0) {

    $pdf->SetX(10);                                                          ##
    $pdf->SetFont('Arial', 'B', 6);                                          ##
    $pdf->SetWidths(array(124,17,15.5,20,18.5));                             ##
    $pdf->SetAligns(array('R', 'R', 'R', 'R', 'R'));                         ##
    $pdf->SetLineHeight(4);                                                  ##
    $pdf->Row(Array(                                                         ##
        utf8_decode('Total de Vendas a Representante:'),                     ##
        utf8_decode(' '),                                                    ##
        number_format($RESULTADO_AQUITAR, 0, ',', '.'),                      ##
        number_format($RESULTADOQUITADASSAIDAS_AQUITAR, 0, ',', '.'),        ##
        number_format($TOTAL_AQUITAR, 0, ',', '.')                           ##
    ));                                                                      ##
    

}else {
    # code...
}
?>