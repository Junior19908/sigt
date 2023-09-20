<?php

$OVENDAQUITOVQUIT = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_contratos` WHERE col_repres=8 ORDER BY `col_id` ASC");
$COSULTOVQUIT = mysqli_num_rows($OVENDAQUITOVQUIT);
if ($COSULTOVQUIT > 0) {

$pdf->SetX(10);                                                          ##
$pdf->SetFont('Arial', 'BI', 7);                                         ##
$pdf->SetWidths(Array(91,18,15,17,15.5,20,18.5));                        ##
$pdf->SetAligns(Array('C','C','C','C','C','C','C','C'));                 ##
$pdf->SetLineHeight(4);                                                  ##
##                                                                       ##
$pdf->Row(Array(                                                         ##
    utf8_decode('Vendas a Representantes - A Quitar'),                   ##
    utf8_decode('Contrato/OV'),                                          ##
    utf8_decode('Data'),                                                 ##
    utf8_decode('Preço'),                                                ##
    utf8_decode('Quant.'),                                               ##
    utf8_decode('Saída'),                                                ##
    utf8_decode('Saldo')                                                 ##
));                                                                      ##
$pdf->Ln(0.7);                                                           ##
$pdf->SetFont('Arial','',5);                                             ##
$pdf->SetWidths(Array(91,18,15,17,15.5,20,18.5));                        ##
$pdf->SetAligns(Array('L','C','C','R','R','R','R','R'));                 ##
$pdf->SetLineHeight(4);                                                  ##

}else {
    # code...
}
?>