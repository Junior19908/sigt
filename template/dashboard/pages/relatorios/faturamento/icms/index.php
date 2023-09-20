<?php
/***********************Inclusões*********************************/
define('ROOT_PATH', dirname(__FILE__));
require_once('../../../../../../controller/fpdf/code128.php');
require_once('../../../../../../class/Conexao.class.php');
include_once('ligacoes/acesso.php');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$DATAHJ = strftime('%d de %B de %Y', strtotime('today'));
define('FPDF_FONTPATH', 'font/');
/*****************************************************************/


$ICMS = new PDF_Code128('P','mm','A4');
$ICMS->AliasNbPages();
$ICMS->AddPage();
$ICMS->SetFont('Arial', '', 7);
$ICMS->Cell(18, 0, utf8_decode('PROGRAMA:'), 0, 0, 'P');
$ICMS->Cell(5, 0, utf8_decode('SistemaGSG - PHP/HTML'));
$ICMS->Ln();
$ICMS->SetFont('Arial', '', 7);
$ICMS->Cell(18, 6, utf8_decode('USUÁRIO:'), 0, 0, 'P');
$ICMS->Cell(5, 6, utf8_decode('Carlos Teste'), 0, 0, 'L');
$ICMS->Ln();
$ICMS->SetFont('Arial', 'B', 7);
$ICMS->Cell(140, 5, utf8_decode('DOCUMENTO DE RECOLHIMENTO'), 1, 2, 'C');
$ICMS->Cell(20, 5, utf8_decode('Razão Social:'), 1, 2, 'L');
$ICMS->Cell(20, 5, utf8_decode('Endereço:'), 1, 2, 'L');
$ICMS->Cell(20, 5, utf8_decode('Município:'), 1, 2, 'L');
$ICMS->Cell(20, 5, utf8_decode('CEP:'), 1, 2, 'L');
$ICMS->Cell(20, 5, utf8_decode('Origem:'), 1, 2, 'L');
$ICMS->Cell(20, 5, utf8_decode('Destino:'), 1, 2, 'L');

$ICMS->SetXY(30, 45);
$ICMS->SetFont('Arial', '', 7);
$ICMS->Cell(120, 5, utf8_decode('LVA LOGISTICA E TRANSPORTE LTDA ME'), 1, 2, 'L');
$ICMS->Cell(120, 5, utf8_decode('AVENIDA RECIFE 1540, IPSEP'), 1, 2, 'L');
$ICMS->Cell(120, 5, utf8_decode('RECIFE'), 1, 2, 'L');
$ICMS->Cell(120, 5, utf8_decode('51350-670'), 1, 2, 'L');
$ICMS->Cell(50, 5, utf8_decode('ALAGOAS - São José da Laje'), 1, 2, 'L');
$ICMS->Cell(50, 5, utf8_decode('PERNAMBUCO - Garanhuns'), 1, 2, 'L');

$ICMS->SetXY(150, 40);
$ICMS->SetFont('Arial', ' ', 7);
$ICMS->Cell(25, 5, utf8_decode('UF Favorecida'), 1, 2, 'C');
$ICMS->SetXY(150, 45);
$ICMS->SetFont('Arial', '', 7);
$ICMS->Cell(25, 5, utf8_decode('AL'), 1, 2, 'C');
$ICMS->Cell(25, 5, utf8_decode('Nº de Controle'), 1, 2, 'C');
$ICMS->Cell(25, 5, utf8_decode('Data'), 1, 2, 'C');
$ICMS->Cell(25, 5, utf8_decode('Mês de Ref.:'), 1, 2, 'C');
$ICMS->Cell(25, 10, utf8_decode('Total a Recolher'), 1, 2, 'C');
$ICMS->SetXY(80, 65);
$ICMS->Cell(25, 10, utf8_decode('Distância'), 1, 2, 'C');
$ICMS->SetXY(105, 65);
$ICMS->SetFont('Arial', 'B', 10);
$ICMS->Cell(45, 10, utf8_decode('85 KM'), 1, 2, 'C');
$ICMS->SetXY(175, 40);
$ICMS->SetFont('Arial', 'B', 7);
$ICMS->Cell(25, 5, utf8_decode('Código do Tributo'), 1, 2, 'C');
$ICMS->SetXY(175, 45);
$ICMS->SetFont('Arial', '', 7);
$ICMS->Cell(25, 5, utf8_decode('13218'), 1, 2, 'C');
$ICMS->Cell(25, 5, utf8_decode('0000000059627339'), 1, 2, 'C');
$ICMS->Cell(25, 5, utf8_decode('17/07/2022'), 1, 2, 'C');
$ICMS->Cell(25, 5, utf8_decode('07/2022'), 1, 2, 'C');
$ICMS->SetFont('Arial', 'B', 10);
$ICMS->Cell(25, 10, utf8_decode('R$ 1.161,82'), 1, 2, 'C');
$code='85800000011 9 61820291183 8 16010000000 2 05962733900 0';
$ICMS->Code128(50,78,$code,100,10);


//B set
/*
$code='Code 128';
$ICMS->Code128(50,70,$code,80,20);
$ICMS->SetXY(50,95);
$ICMS->Write(5,'B set: "'.$code.'"');

//C set
$code='12345678901234567890';
$ICMS->Code128(50,120,$code,110,20);
$ICMS->SetXY(50,145);
$ICMS->Write(5,'C set: "'.$code.'"');

//A,C,B sets
$code='ABCDEFG1234567890AbCdEf';
$ICMS->Code128(50,170,$code,125,20);
$ICMS->SetXY(50,195);
$ICMS->Write(5,'ABC sets combined: "'.$code.'"');

*/

$ICMS->OutPut();