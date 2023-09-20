<?php
session_start();
/*****************************************************************/
$DATAINICIO = $_POST['calendarioINICIO'];
$DATAFIM = $_POST['calendarioFIM'];
$SAFRA = $_POST['safra'];
$NOME_USUARIO = $_SESSION['NOME_USER'];
/*****************************************************************/
/***********************Inclusões*********************************/
define('ROOT_PATH', dirname(__FILE__));
require_once('../../../../../../controller/fpdf/fpdf.php');
require_once('../../../../../../class/Conexao.class.php');
/*****************************************************************/
error_reporting(0);
ini_set("display_errors", 0);
define('FPDF_FONTPATH', 'font/');
class PDF extends FPDF
{
    function Header()
    {
        $this->Image('../../../../../../css/logo/usga.png', 120, 12, 17); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
        $this->Image('../../../../../../css/logo/DNV-GL-Certification-logo.png', 139, 11, 15); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
        $this->Image('../../../../../../css/logo/Logomarca_Bonsucro_2016.png', 154, 12, 19); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
        $this->Image('../../../../../../css/logo/bulb-s.png', 173, 11, 20); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
        $this->SetFont('Arial', 'B', 15); //Definir Fonte e Tamanho
        $this->Cell(-1); //Mover para esquerda ou Direita
        $this->Cell(30, 10, 'USINA SERRA GRANDE S/A', 0, 1, 'L');
        $this->Ln(-4); //Quebra de Página
        //***********************************************************//
        $this->SetFont('Arial', 'I', 10);
        $this->Cell(-1);
        $this->Cell(30, 10, utf8_decode('AÇÚCAR, ÁLCOOL & ENERGIA'), 0, 0, 'L');
        $this->Ln(6);
        //***********************************************************//
        $this->SetFont('Arial', 'I', 10);
        $this->Cell(-1);
        $this->Cell(30, 10, utf8_decode('DEMONSTRATIVO DA POSIÇÃO DE AÇÚCAR NA SEMANA'), 0, 0, 'L');
        $this->Ln(12);
        //***********************************************************//
    }
	function Footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','I',8);
		$this->Cell(0,10,'SistemaGSGV2.0 ',0,0,'C');
	}
}

$pdf = new PDF('P', 'mm', 'A4');
$pdf->AliasNbPages();

$pdf->AddPage();
$pdf->SetFont('Arial', '', 7);
$pdf->Cell(18, 0, utf8_decode('PROGRAMA:'), 0, 0, 'P');
$pdf->Cell(5, 0, utf8_decode('SistemaGSG - PHP/HTML'));
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
$pdf->Cell(18, 6, utf8_decode('USUÁRIO:'), 0, 0, 'P');
$pdf->Cell(5, 6, utf8_decode($_SESSION['NOME_USER']), 0, 0, 'L');
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
$pdf->Cell(18, 0, utf8_decode('DATA:'), 0, 0, 'P');
$pdf->Cell(5, 0, date("d/m/Y"));
$pdf->Ln();
$pdf->Sety(42.5);
$pdf->Cell(18, 1, utf8_decode('PERÍODO:'), 0, 0, 'P');
$pdf->Cell(5, 1, date("d/m/Y", strtotime($DATAINICIO)));
$pdf->SetX(46);
$pdf->Cell(18, 1, utf8_decode('Até'), 0, 0, 'P');
$pdf->SetX(54);
$pdf->Cell(5, 1, date("d/m/Y", strtotime($DATAFIM)));
$pdf->Ln();
if ($SAFRA==4) {
    $DESC_SAFRA = "2019/2020";
    $SAFRA_ANT = "2018/2019";
}elseif ($SAFRA==5) {
    $DESC_SAFRA = "2020/2021";
    $SAFRA_ANT = "2019/2020";
}elseif ($SAFRA==6) {
    $DESC_SAFRA = "2021/2022";
    $SAFRA_ANT = "2020/2021";
}elseif ($SAFRA==7) {
    $DESC_SAFRA = "2022/2023";
    $SAFRA_ANT = "2021/2022";
}elseif ($SAFRA==8) {
    $DESC_SAFRA = "2023/2024";
    $SAFRA_ANT = "2022/2023";
}elseif ($SAFRA==9) {
    $DESC_SAFRA = "2024/2025";
    $SAFRA_ANT = "2023/2024";
}elseif ($SAFRA==10) {
    $DESC_SAFRA = "2025/2026";
    $SAFRA_ANT = "2024/2025";
}elseif ($SAFRA==11) {
    $DESC_SAFRA = "2026/2027";
    $SAFRA_ANT = "2025/2026";
}elseif ($SAFRA==13) {
    $DESC_SAFRA = "2027/2028";
    $SAFRA_ANT = "2026/2027";
}elseif ($SAFRA==14) {
    $DESC_SAFRA = "2028/2029";
    $SAFRA_ANT = "2027/2028";
}elseif ($SAFRA==15) {
    $DESC_SAFRA = "2029/2030";
    $SAFRA_ANT = "2028/2029";
}elseif ($SAFRA==16) {
    $DESC_SAFRA = "2030/2031";
    $SAFRA_ANT = "2029/2030";
}
$pdf->Sety(45.5);
$pdf->Cell(18, 0, utf8_decode('SAFRA:'), 0, 0, 'P');
$pdf->Cell(5, 0, $DESC_SAFRA);
$pdf->Ln();
$pdf->SetXY(10, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(91,4,utf8_decode('CLIENTES (CIA.) - VENDAS NO MÊS'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(101, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,4,utf8_decode('O. VENDAS'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(119, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(15,4,utf8_decode('DATA'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(134, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(17,4,utf8_decode('PREÇOS'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(151, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(15.5,4,utf8_decode('QUANT.'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(166.5, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,utf8_decode('SAÍDA'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(186.5, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(18.5,4,utf8_decode('SALDO'),1,2,'C');
$pdf->Ln();
//set width for each column
$pdf->SetFont('Arial', '', 5);
$pdf->SetWidths(array(55, 36,18, 15, 17, 15.5, 20, 18.5));
$pdf->SetAligns(array('L', 'L', 'C', 'C', 'R', 'R', 'R', 'R'));
$pdf->SetLineHeight(4);

###########################################################################
##                     TABELA DE VENDAS NO MÊS                           ##
##                                                                       ##
include_once('ligacoes/vendaciames.php');                                ##
include_once('ligacoes/requires/cia/mes/00002.php');                     ##
include_once('ligacoes/requires/cia/mes/00003.php');                     ##
include_once('ligacoes/requires/cia/mes/00004.php');                     ##
include_once('ligacoes/requires/cia/mes/00005.php');                     ##
include_once('ligacoes/requires/cia/mes/00006.php');                     ##
include_once('ligacoes/requires/cia/mes/00007.php');                     ##
include_once('ligacoes/requires/cia/mes/00008.php');                     ##
include_once('ligacoes/requires/cia/mes/00009.php');                     ##
include_once('ligacoes/requires/cia/mes/00010.php');                     ##
$pdf->SetX(10);                                                          ##
$pdf->SetFont('Arial', 'B', 6);                                          ##
$pdf->SetWidths(array(124,17,15.5,20,18.5));                             ##
$pdf->SetAligns(array('R', 'R', 'R', 'R', 'R'));                         ##
$pdf->SetLineHeight(6);                                                  ##
$pdf->Row(Array(                                                         ##
    utf8_decode('Total de Vendas e Saídas Período Anterior:'),           ##
    utf8_decode(' '),                                                    ##
    number_format($SOMAQUANTCIAMES+$SM00002+$SM00003+$SM00004+$SM00005+$SM00006+$SM00007+$SM00008+$SM00009+$SM00010+$QTDCONTRATO00002+$QTDCONTRATO00003+$QTDCONTRATO00004+$QTDCONTRATO00005+$QTDCONTRATO00006+$QTDCONTRATO00007+$QTDCONTRATO00008+$QTDCONTRATO00009+$QTDCONTRATO00010, 0, ',', '.'),
    number_format($SOMAQUANTCIAMESAIDAS, 0, ',', '.'),                   ##
    number_format($SOMAQUANTCIAMESSALDO+$SM00002+$SM00003+$SM00004+$SM00005+$SM00006+$SM00007+$SM00008+$SM00009+$SM00010+$QTDCONTRATO00002+$QTDCONTRATO00003+$QTDCONTRATO00004+$QTDCONTRATO00005+$QTDCONTRATO00006+$QTDCONTRATO00007+$QTDCONTRATO00008+$QTDCONTRATO00009+$QTDCONTRATO00010, 0, ',', '.')
));                                                                      ##
$pdf->Ln(4);                                                                     ##
##                                                                       ##
###########################################################################
##             TABELA DE ORDENS DE VENDA QUITADA CIA                     ##
##                                                                       ##
include_once('ligacoes/ov_cia_quitada.php');                             ##
include_once('ligacoes/requires/cia/quitadas/00002.php');                ##
include_once('ligacoes/requires/cia/quitadas/00003.php');                ##
include_once('ligacoes/requires/cia/quitadas/00004.php');                ##
include_once('ligacoes/requires/cia/quitadas/00005.php');                ##
include_once('ligacoes/requires/cia/quitadas/00006.php');                ##
include_once('ligacoes/requires/cia/quitadas/00007.php');                ##
include_once('ligacoes/requires/cia/quitadas/00008.php');                ##
include_once('ligacoes/requires/cia/quitadas/00009.php');                ##
include_once('ligacoes/requires/cia/quitadas/00010.php');                ##
$pdf->SetX(10);                                                          ##
$pdf->SetFont('Arial', 'B', 6);                                          ##
$pdf->SetWidths(array(124,17,15.5,20,18.5));                             ##
$pdf->SetAligns(array('R', 'R', 'R', 'R', 'R'));                         ##
$pdf->SetLineHeight(4);                                                  ##
$pdf->Row(Array(                                                         ##
    utf8_decode('Sub-Total Venda a (CIA.) na Semana:'),                  ##
    utf8_decode(' '),                                                    ##
    number_format($SOMAQUANTSEMANACIA1, 0, ',', '.'),                    ##
    number_format($SOMAQUANTSEMANACIASAIDA, 0, ',', '.'),                ##
    number_format($SOMAQUANTSEMANACIASALDO, 0, ',', '.')                 ##
));                                                                      ##
##                                                                       ##
##                                                                       ##
###########################################################################
##             TABELA DE ORDENS DE VENDA SEMANA QUITADA CIA              ##
##                                                                       ##
include_once('ligacoes/ov_semana_quitada_cia.php');                      ##
##                                                                       ##
##                                                                       ##
###########################################################################
##             TABELA DE ORDENS DE VENDA NA SEMANA CIA                   ##
##                                                                       ##
$pdf->Ln();                                                              ##
$pdf->SetFont('Arial', '', 5);                                           ##
$pdf->SetWidths(array(55, 36,18, 15, 17, 15.5, 20, 18.5));               ##
$pdf->SetAligns(array('L', 'L', 'C', 'C', 'R', 'R', 'R', 'R'));          ##
$pdf->SetLineHeight(4);                                                  ##
include_once('ligacoes/ov_semana_cia.php');                              ##
##                                                                       ##
##                                                                       ##
###########################################################################
##          TABELA DE ORDENS DE VENDA ALTERADA NA SEMANA CIA             ##
##                                                                       ##
$pdf->Ln();                                                              ##
$pdf->SetFont('Arial', '', 5);                                           ##
$pdf->SetWidths(array(55, 36,18, 15, 17, 15.5, 20, 18.5));               ##
$pdf->SetAligns(array('L', 'L', 'C', 'C', 'R', 'R', 'R', 'R'));          ##
$pdf->SetLineHeight(4);                                                  ##
include_once('ligacoes/ov_alterada_semana_cia.php');                     ##
##                                                                       ##
##                                                                       ##
##                                                                       ##
###########################################################################
##                TABELAS REPRESENTANTES QUITADOS                        ##
##                                                                       ##
$pdf->Ln();                                                              ## 
$pdf->SetX(10);                                                          ## 
$pdf->SetFont('Arial', 'BI', 7);                                         ## 
$pdf->SetWidths(Array(91,18,15,17,15.5,20,18.5));                        ## 
$pdf->SetAligns(Array('C','C','C','C','C','C','C','C'));                 ##
$pdf->SetLineHeight(4);                                                  ##
$pdf->Row(Array(                                                         ##
    utf8_decode('Vendas a Representantes - Quitadas'),                   ##
    utf8_decode('Contrato/OV'),                                          ##
    utf8_decode('Data'),                                                 ##
    utf8_decode('Preço'),                                                ##
    utf8_decode('Quant.'),                                               ##
    utf8_decode('Saída'),                                                ##
    utf8_decode('Saldo')                                                 ##
));                                                                      ##
$pdf->Ln(0.7);                                                           ##
##                                                                       ##
##                                                                       ##
$pdf->SetFont('Arial','',5);                                             ##
$pdf->SetWidths(Array(91,18,15,17,15.5,20,18.5));                        ##
$pdf->SetAligns(Array('L','C','C','R','R','R','R','R'));                 ##
$pdf->SetLineHeight(4);                                                  ##
include_once('ligacoes/requires.php');                                   ##
include_once('ligacoes/soma_requires.php');                              ##
$pdf->SetX(10);                                                          ##
$pdf->SetFont('Arial', 'B', 6);                                          ##
$pdf->SetWidths(array(124,17,15.5,20,18.5));                             ##
$pdf->SetAligns(array('R', 'R', 'R', 'R', 'R'));                         ##
$pdf->SetLineHeight(4);                                                  ##
$pdf->Row(Array(                                                         ##
    utf8_decode('Total de Vendas a Representante:'),                     ##
    utf8_decode(' '),                                                    ##
    number_format($RESULTADO, 0, ',', '.'),                              ##
    number_format($RESULTADOQUITADASSAIDAS, 0, ',', '.'),                ##
    number_format($SALDO, 0, ',', '.')                                   ##
));                                                                      ##
##                                                                       ##
##                                                                       ##
###########################################################################
##                TABELAS REPRESENTANTES A QUITAR                        ##
##                                                                       ##
$pdf->SetX(10);                                                          ##
$pdf->Ln();                                                              ##
include_once('ligacoes/requires/ovquitada.php');                         ##
include_once('ligacoes/requires/representante/aquitar/40000.php');       ##
include_once('ligacoes/requires/representante/aquitar/40001.php');       ##
include_once('ligacoes/requires/representante/aquitar/40002.php');       ##
include_once('ligacoes/requires/representante/aquitar/40003.php');       ##
include_once('ligacoes/requires/representante/aquitar/40004.php');       ##
include_once('ligacoes/requires/representante/aquitar/40005.php');       ##
include_once('ligacoes/requires/representante/aquitar/40006.php');       ##
include_once('ligacoes/requires/representante/aquitar/40007.php');       ##
include_once('ligacoes/requires/representante/aquitar/40008.php');       ##
include_once('ligacoes/requires/representante/aquitar/40009.php');       ##
include_once('ligacoes/requires/representante/aquitar/40010.php');       ##
include_once('ligacoes/requires/representante/aquitar/40011.php');       ##
include_once('ligacoes/requires/representante/aquitar/40012.php');       ##
include_once('ligacoes/requires/representante/aquitar/40013.php');       ##
include_once('ligacoes/requires/representante/aquitar/40014.php');       ##
include_once('ligacoes/requires/representante/aquitar/40015.php');       ##
include_once('ligacoes/requires/representante/aquitar/40016.php');       ##
include_once('ligacoes/requires/representante/aquitar/40017.php');       ##
include_once('ligacoes/requires/representante/aquitar/40018.php');       ##
include_once('ligacoes/requires/representante/aquitar/40019.php');       ##
include_once('ligacoes/requires/representante/aquitar/40020.php');       ##
include_once('ligacoes/requires/representante/aquitar/40021.php');       ##
include_once('ligacoes/requires/representante/aquitar/40022.php');       ##
include_once('ligacoes/requires/representante/aquitar/40023.php');       ##
include_once('ligacoes/requires/representante/aquitar/40024.php');       ##
include_once('ligacoes/requires/representante/aquitar/40025.php');       ##
include_once('ligacoes/requires/representante/aquitar/40026.php');       ##
include_once('ligacoes/requires/representante/aquitar/40027.php');       ##
include_once('ligacoes/requires/representante/aquitar/40028.php');       ##
include_once('ligacoes/requires/representante/aquitar/40029.php');       ##
include_once('ligacoes/requires/representante/aquitar/40030.php');       ##
include_once('ligacoes/requires/representante/aquitar/40031.php');       ##
include_once('ligacoes/requires/representante/aquitar/40032.php');       ##
include_once('ligacoes/requires/representante/aquitar/40033.php');       ##
include_once('ligacoes/requires/representante/aquitar/40034.php');       ##
include_once('ligacoes/requires/representante/aquitar/40035.php');       ##
include_once('ligacoes/requires/representante/aquitar/40036.php');       ##
include_once('ligacoes/requires/representante/aquitar/40037.php');       ##
include_once('ligacoes/requires/representante/aquitar/40038.php');       ##
include_once('ligacoes/requires/representante/aquitar/40039.php');       ##
include_once('ligacoes/requires/representante/aquitar/40040.php');       ##
include_once('ligacoes/requires/representante/aquitar/40041.php');       ##
include_once('ligacoes/requires/representante/aquitar/40042.php');       ##
include_once('ligacoes/requires/representante/aquitar/40043.php');       ##
include_once('ligacoes/requires/representante/aquitar/40044.php');       ##
include_once('ligacoes/requires/representante/aquitar/40045.php');       ##
include_once('ligacoes/requires/representante/aquitar/40046.php');       ##
include_once('ligacoes/requires/representante/aquitar/40047.php');       ##
include_once('ligacoes/requires/representante/aquitar/40048.php');       ##
include_once('ligacoes/requires/representante/aquitar/40049.php');       ##
include_once('ligacoes/requires/representante/aquitar/40050.php');       ##
include_once('ligacoes/requires/representante/aquitar/40051.php');       ##
include_once('ligacoes/requires/representante/aquitar/40052.php');       ##
include_once('ligacoes/requires/representante/aquitar/40053.php');       ##
include_once('ligacoes/requires/representante/aquitar/40054.php');       ##
include_once('ligacoes/requires/representante/aquitar/40055.php');       ##
include_once('ligacoes/requires/representante/aquitar/40056.php');       ##
include_once('ligacoes/requires/representante/aquitar/40057.php');       ##
include_once('ligacoes/requires/representante/aquitar/40058.php');       ##
include_once('ligacoes/requires/representante/aquitar/40059.php');       ##
include_once('ligacoes/requires/representante/aquitar/40060.php');       ##
include_once('ligacoes/requires/representante/aquitar/40061.php');       ##
include_once('ligacoes/requires/representante/aquitar/40062.php');       ##
include_once('ligacoes/requires/representante/aquitar/40063.php');       ##
include_once('ligacoes/requires/representante/aquitar/40064.php');       ##
include_once('ligacoes/requires/representante/aquitar/40065.php');       ##
include_once('ligacoes/requires/representante/aquitar/40066.php');       ##
include_once('ligacoes/requires/representante/aquitar/40067.php');       ##
include_once('ligacoes/requires/representante/aquitar/40068.php');       ##
include_once('ligacoes/requires/representante/aquitar/40069.php');       ##
include_once('ligacoes/requires/representante/aquitar/40070.php');       ##
include_once('ligacoes/requires/representante/aquitar/40071.php');       ##
include_once('ligacoes/requires/representante/aquitar/40072.php');       ##
include_once('ligacoes/requires/representante/aquitar/40073.php');       ##
include_once('ligacoes/requires/representante/aquitar/40074.php');       ##
include_once('ligacoes/requires/representante/aquitar/40075.php');       ##
include_once('ligacoes/requires/representante/aquitar/40076.php');       ##
include_once('ligacoes/requires/representante/aquitar/40077.php');       ##
include_once('ligacoes/requires/representante/aquitar/40078.php');       ##
include_once('ligacoes/requires/representante/aquitar/40079.php');       ##
include_once('ligacoes/requires/representante/aquitar/40080.php');       ##
include_once('ligacoes/requires/representante/aquitar/soma_requires.php');##
include_once('ligacoes/requires/ovquitadafim.php');                      ##
##                                                                       ##
##                                                                       ##
###########################################################################
##                TABELAS REPRESENTANTES NA SEMANA QUITADOS              ##
##                                                                       ##
$pdf->Ln();                                                              ## 
##                                                                       ##
$pdf->SetX(10);                                                          ## 
$pdf->SetFont('Arial', 'BI', 7);                                         ## 
$pdf->SetWidths(Array(91,18,15,17,15.5,20,18.5));                        ## 
$pdf->SetAligns(Array('C','C','C','C','C','C','C','C'));                 ##
$pdf->SetLineHeight(4);                                                  ##
$pdf->Row(Array(                                                         ##
    utf8_decode('Vendas a Representantes na Semana - Quitadas'),         ##
    utf8_decode('Contrato/OV'),                                          ##
    utf8_decode('Data'),                                                 ##
    utf8_decode('Preço'),                                                ##
    utf8_decode('Quant.'),                                               ##
    utf8_decode('Saída'),                                                ##
    utf8_decode('Saldo')                                                 ##
));                                                                      ##
$pdf->Ln(0.7);                                                           ##
##                                                                       ##
##                                                                       ##
$pdf->SetFont('Arial','',5);                                             ##
$pdf->SetWidths(Array(91,18,15,17,15.5,20,18.5));                        ##
$pdf->SetAligns(Array('L','C','C','R','R','R','R','R'));                 ##
$pdf->SetLineHeight(4);                                                  ##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40000.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40001.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40002.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40003.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40004.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40005.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40006.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40007.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40008.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40009.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40010.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40011.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40012.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40013.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40014.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40015.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40016.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40017.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40018.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40019.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40020.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40021.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40022.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40023.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40024.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40025.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40026.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40027.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40028.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40029.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40030.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40031.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40032.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40033.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40034.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40035.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40036.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40037.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40038.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40039.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40040.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40041.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40042.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40043.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40044.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40045.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40046.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40047.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40048.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40049.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40050.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40051.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40052.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40053.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40054.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40055.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40056.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40057.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40058.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40059.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40060.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40061.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40062.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40063.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40064.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40065.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40066.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40067.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40068.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40069.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40070.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40071.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40072.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40073.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40074.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40075.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40076.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40077.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40078.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40079.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/40080.php');##
include_once('ligacoes/requires/representante/ov_semana_quitadas/soma_requires.php');  ##
$pdf->SetX(10);                                                          ##
$pdf->SetFont('Arial', 'B', 6);                                          ##
$pdf->SetWidths(array(124,17,15.5,20,18.5));                             ##
$pdf->SetAligns(array('R', 'R', 'R', 'R', 'R'));                         ##
$pdf->SetLineHeight(4);                                                  ##
$pdf->Row(Array(                                                         ##
    utf8_decode('Total de Vendas a Representante:'),                     ##
    utf8_decode(' '),                                                    ##
    number_format($RESULTADO_SEMANA_QUITADAS, 0, ',', '.'),              ##
    number_format($RESULTADOQUITADASSAIDAS_SEMANA_QUITADAS, 0, ',', '.'),##
    number_format($SALDO_SEMANA_QUITADAS, 0, ',', '.')                   ##
));                                                                      ##
##                                                                       ##
##                                                                       ##
###########################################################################
##            TABELA REPRESENTANTES NA SEMANA A QUITAR                   ##
##                                                                       ##
$pdf->Ln();                                                              ## 
$pdf->SetX(10);                                                          ##
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(91, 4, utf8_decode('Vendas a Representantes na Semana - A quitar'), 1, 2, 'C');
$pdf->SetFont('Arial','',5);
$pdf->SetWidths(Array(91,18,15,17,15.5,20,18.5));
$pdf->SetAligns(Array('L','C','C','R','R','R','R','R'));
$pdf->SetLineHeight(4);
include_once('ligacoes/vendarepresemanaquit.php');
include_once('ligacoes/requires/representante/ov_semana_aquitar/40000.php');##
include_once('ligacoes/requires/representante/ov_semana_aquitar/40001.php');##
include_once('ligacoes/requires/representante/ov_semana_aquitar/40002.php');##
include_once('ligacoes/requires/representante/ov_semana_aquitar/40003.php');##
include_once('ligacoes/requires/representante/ov_semana_aquitar/40004.php');##
include_once('ligacoes/requires/representante/ov_semana_aquitar/40005.php');##
include_once('ligacoes/requires/representante/ov_semana_aquitar/40006.php');##
include_once('ligacoes/requires/representante/ov_semana_aquitar/40007.php');##
include_once('ligacoes/requires/representante/ov_semana_aquitar/40008.php');##
include_once('ligacoes/requires/representante/ov_semana_aquitar/40009.php');##
include_once('ligacoes/requires/representante/ov_semana_aquitar/40010.php');##
include_once('ligacoes/requires/representante/ov_semana_aquitar/soma_requires.php');##
$pdf->SetX(10);
$pdf->SetFont('Arial', 'B', 6);
$pdf->SetWidths(array(124,17,15.5,20,18.5));
$pdf->SetAligns(array('R', 'R', 'R', 'R', 'R'));
$pdf->SetLineHeight(4);
$pdf->Row(Array(
    utf8_decode('Sub-Total Venda a Representante na Semana:'),
    utf8_decode(' '),
    number_format($RESULTADO_SEMANA_AQUITAR, 0, ',', '.'),
    number_format($RESULTADOQUITADASSAIDAS_SEMANA_AQUITAR, 0, ',', '.'),
    number_format($SALDO_SEMANA_AQUITAR, 0, ',', '.')
));

$SUBTOTAL_GERAL = $RESULTADO+$RESULTADO_AQUITAR+$RESULTADO_SEMANA_QUITADAS+$RESULTADO_SEMANA_AQUITAR;
$SUBTOTAL_GERAL_SAIDA = $RESULTADOQUITADASSAIDAS+$RESULTADOQUITADASSAIDAS_AQUITAR+$RESULTADOQUITADASSAIDAS_SEMANA_QUITADAS+$RESULTADOQUITADASSAIDAS_SEMANA_AQUITAR;
$SUBTOTAL_GERAL_SALDO = $SALDO+$TOTAL_AQUITAR+$SALDO_SEMANA_QUITADAS+$SALDO_SEMANA_AQUITAR;
$pdf->Ln(8);
$pdf->Ln(0.5);
$pdf->SetX(10);
$pdf->SetFont('Arial', 'B', 6);
$pdf->SetWidths(array(124,17,15.5,20,18.5));
$pdf->SetAligns(array('R', 'R', 'R', 'R', 'R'));
$pdf->SetLineHeight(4);
$pdf->Row(Array(
    utf8_decode('Sub-Total Geral de Vendas a Representantes:'),
    utf8_decode(' '),
    number_format($SUBTOTAL_GERAL, 0, ',', '.'),
    number_format($SUBTOTAL_GERAL_SAIDA, 0, ',', '.'),
    number_format($SUBTOTAL_GERAL_SALDO, 0, ',', '.')
));
//aqui
$GERALEXPORTVEND = $SUBTOTAL_GERAL+$OVSEMANAVENDACIA+$SOMAQUANTCIAMES+$SM00002+$SM00003+$SM00004+$SM00005+$SM00006+$SM00007+$SM00008+$SM00009+$SM00010+$SOMAQUANTSEMANACIA1+$OVALTERADASEMANACIA+$OVSEMANAQUITADACIA;
$GERALEXPORTVSAI = $SUBTOTAL_GERAL_SAIDA+$SOMAQUANTCIAMESAIDAS+$SOMAQUANTSEMANACIASAIDA+$OVSEMANAVENDACIA_SAIDA+$OVALTERADASEMANACIASAIDA;
$GERALEXPORTVSAL = $GERALEXPORTVEND - $GERALEXPORTVSAI;
$pdf->Ln(0.5);
$pdf->SetX(10);
$pdf->SetFont('Arial', 'B', 6);
$pdf->SetWidths(array(124,17,15.5,20,18.5));
$pdf->SetAligns(array('R', 'R', 'R', 'R', 'R'));
$pdf->SetLineHeight(4);
$pdf->Row(Array(
    utf8_decode('Total Geral de Vendas a CIA., Exportação e Representantes:'),
    utf8_decode(' '),
    number_format($GERALEXPORTVEND, 0, ',', '.'),
    number_format($GERALEXPORTVSAI, 0, ',', '.'),
    number_format($GERALEXPORTVSAL, 0, ',', '.')
));
include_once('ligacoes/requires/total/soma.php');
$pdf->SetX(10);
$pdf->AddPage();
$pdf->SetXY(10, 58);
$pdf->Cell(191, 52, utf8_decode(''), 1, 2, 'C');
$pdf->SetXY(10, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(191,4,utf8_decode('AÇÚCAR CRISTAL'),1,2,'C');
$pdf->Ln();
$pdf->Cell(75.5,4,utf8_decode("Saldo das OV's do Mês /Semana Anterior"),1,2,'L');
$pdf->Cell(75.5,4,utf8_decode("Disponível na Semana Anterior"),1,2,'L');
$pdf->Cell(75.5,4,utf8_decode("Produção na Semana"),1,2,'L');
$pdf->Cell(75.5,4,utf8_decode("Vendas na Semana"),1,2,'L');
$pdf->Cell(75.5,4,utf8_decode("Alterações Ord. de Venda na Semana"),1,2,'L');
$pdf->Cell(75.5,4,utf8_decode("-x-"),1,2,'C');
$pdf->Cell(75.5,4,utf8_decode("Vendas Exportação"),1,2,'L');
$pdf->Cell(75.5,4,utf8_decode("Vendas a Representantes na Semana (quitadas)"),1,2,'L');
$pdf->Cell(75.5,4,utf8_decode("Vendas a Representantes na Semana (a quitar)"),1,2,'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(75.5,4,utf8_decode("Sub-Total"),1,2,'L');
$pdf->SetXY(85.5, 58);
$pdf->SetFont('Arial','',8);
$pdf->Cell(24.5,4,number_format($SALDO_OV_SEMANA_ANTERIOR_ACUM, 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format($DISPONIVEL_SEMANA_ANTERIOR_ACUM, 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format("0", 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format($OVSEMANAVENDACIA, 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format($OVALTERADASEMANACIA, 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format("", 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format("0", 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format($RESULTADO_SEMANA_QUITADAS, 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format($RESULTADO_SEMANA_AQUITAR, 0, ',', '.'),1,2,'R');


$TOTAL_PROD_AC = ($PRODUCAO_ACUCAR - $PRODUCAO_VHP);
$TOTAL_ESTOQUE_FISC = $TOTAL_PROD_AC - ($ACUMULADO_GERAL+$SUBTOTAL_GERAL_SAIDA+$SOMAQUANTCIAMESAIDAS+$SOMAQUANTSEMANACIASAIDA+$OVSEMANAQUITADACIASAIDA+$OVSEMANAVENDACIA_SAIDA+$OVALTERADASEMANACIASAIDA);
$TOTAL_SUB_FIS = $TOTAL_ESTOQUE_FISC - ($SOMAQUANTCIAMESSALDO+$SOMAQUANTSEMANACIASALDO+$SALDO_SEMANA_QUITADAS+$SALDO+$SALDO_SEMANA_AQUITAR+$TOTAL_AQUITAR+$OVSEMANAVENDACIA_SALDO+$OVALTERADASEMANACIASALDO);

##################################################
## Melhorar a segunda coluna colocar para baixo ##
##################################################
$ARRED1 = 0;
$ARRED2 = 2;
$SUBTOTAL_GERAL_ESQUERDO = $SALDO_OV_SEMANA_ANTERIOR_ACUM + $DISPONIVEL_SEMANA_ANTERIOR_ACUM + $ARRED1;
$SUBTOTAL_GERAL_ESQUERDO_DIM = $OVSEMANAVENDACIA + $OVALTERADASEMANACIA + $RESULTADO_SEMANA_QUITADAS + $RESULTADO_SEMANA_AQUITAR;
$subtotal1 = $SUBTOTAL_GERAL_ESQUERDO - $SUBTOTAL_GERAL_ESQUERDO_DIM;
$subtotal2 = $TOTAL_SUB_FIS+$ARRED2;
$RESULTADO_DIF = $subtotal1 - $subtotal2;
$pdf->SetFont('Arial','B',8);
if ($subtotal1 >= $subtotal2) {
    if($RESULTADO_DIF = '-0' || $RESULTADO_DIF = '1' || $RESULTADO_DIF = '2' || $RESULTADO_DIF = '3'){
        $pdf->Cell(24.5,4,number_format($subtotal1, 0, ',', '.'),1,2,'R');
    }else{
        $pdf->SetFillColor(242, 15, 15);
        $pdf->Cell(24.5,4,number_format($subtotal1, 0, ',', '.'),1,2,'R',true);
        $pdf->SetFillColor(242, 235, 15);
        $pdf->Cell(24.5,4,number_format($RESULTADO_DIF, 0, ',', '.'),1,2,'R',true);
        $pdf->Cell(24.5,4,number_format($subtotal1, 0, ',', '.'),1,2,'R');
    }
}else{
    $pdf->Cell(24.5,4,number_format($subtotal1, 0, ',', '.'),1,2,'R');
}
$pdf->Ln();
$pdf->SetXY(110, 58);
$pdf->SetFont('Arial','',8);
$pdf->Cell(70,4,utf8_decode(' '),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Produção de Açúcar'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Saídas Para Venda'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Estoque Físico'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Saldo OV p/ Cia ( a quitar )'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Saldo OV p/ Cia ( quitadas )'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Saldo Vendas Exportação'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Saldo Vendas a Representantes (quitadas)'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Saldo Vendas a Representantes (a quitar)'),1,2,'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(70,4,utf8_decode('Sub-Total'),1,2,'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(70,4,utf8_decode('Saldo dos Contratos das Cias M.Interno'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Saldo dos Contratos M. Externo'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Disponível para Venda'),1,2,'L');
$pdf->Ln();

$pdf->SetXY(180, 58);
$pdf->SetFont('Arial','',8);
$pdf->Cell(21,4,utf8_decode(" "),1,2,'R');
$pdf->Cell(21,4,number_format($TOTAL_PROD_AC, 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format($ACUMULADO_GERAL+$SUBTOTAL_GERAL_SAIDA+$SOMAQUANTCIAMESAIDAS+$SOMAQUANTSEMANACIASAIDA+$OVSEMANAQUITADACIASAIDA+$OVSEMANAVENDACIA_SAIDA+$OVALTERADASEMANACIASAIDA, 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format($TOTAL_ESTOQUE_FISC, 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format($SOMAQUANTCIAMESSALDO+$OVSEMANAVENDACIA_SALDO+$OVALTERADASEMANACIASALDO, 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format($SOMAQUANTSEMANACIASALDO, 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format("0", 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format($SALDO_SEMANA_QUITADAS+$SALDO, 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format($SALDO_SEMANA_AQUITAR+$TOTAL_AQUITAR, 0, ',', '.'),1,2,'R');
$pdf->SetFont('Arial','B',8);
if ($subtotal2 >= $subtotal1) {
    if($RESULTADO_DIF = '-0' || $RESULTADO_DIF = '1' || $RESULTADO_DIF = '2' || $RESULTADO_DIF = '3'){
        $pdf->SetXY(180, 94);
        $pdf->Cell(21,4,number_format($subtotal2, 0, ',', '.'),1,2,'R');
    }else{
        $pdf->SetFillColor(242, 15, 15);
        $pdf->Cell(21,4,number_format($subtotal2, 0, ',', '.'),1,2,'R',true);
        $pdf->SetXY(201, 94);
        $pdf->SetFillColor(242, 235, 15);
        $pdf->Cell(9,4,number_format($RESULTADO_DIF, 0, ',', '.'),1,2,'R',true);
    }
}else{
    $pdf->SetXY(180, 94);
    $pdf->Cell(21,4,number_format($subtotal2, 0, ',', '.'),1,2,'R');
}
$pdf->SetXY(180, 98);
$pdf->SetFont('Arial','',8);
$pdf->Cell(21,4,number_format("0", 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format("0", 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format($subtotal2, 0, ',', '.'),1,2,'R');
$pdf->Ln();
/************************************************************************************/
$pdf->SetXY(10, 112);
$pdf->Cell(125, 90, utf8_decode(''), 1, 2, 'C');
$pdf->SetXY(10, 112);
$pdf->SetFont('Arial','',8);
$pdf->Cell(125,4,utf8_decode('Açúcar Cristal Mercado Interno Safra '. $SAFRA_ANT),0,2,'C');
$pdf->Cell(65,4,utf8_decode('Contratos'),0,2,'C');
$pdf->Cell(65,4,utf8_decode('Contrato Coca Cola ( Solar ) - Ret. Jan/Dez 2020'),0,2,'C');
/************************************************************************************/
$pdf->SetXY(75, 116);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,utf8_decode('Quant.'),0,2,'C');
$pdf->Cell(20,4,number_format('112001', 0, ',', '.'),0,2,'C');
/************************************************************************************/
$pdf->SetXY(95, 116);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,utf8_decode("OV's"),0,2,'C');
$pdf->Cell(20,4,number_format('112001', 0, ',', '.'),0,2,'C');
/************************************************************************************/
$pdf->SetXY(115, 116);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,utf8_decode("Saldo"),0,2,'C');
$pdf->Cell(20,4,number_format('0', 0, ',', '.'),0,2,'C');
/************************************************************************************/
$pdf->SetXY(135, 112);
$pdf->Cell(66, 90, utf8_decode(''), 1, 2, 'C');
$pdf->SetXY(135, 112);
$pdf->SetFont('Arial','',8);
$pdf->Cell(66,4,utf8_decode('Açúcar V.H.P.'),0,2,'C');
$pdf->Cell(45,4,utf8_decode('Rem. Safra '. $SAFRA_ANT),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Produção '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Compra trapiche '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Total '),0,2,'L');
/************************************************************************************/
$pdf->SetXY(180, 116);
$pdf->SetFont('Arial','',8);
$pdf->Cell(21,4,number_format('4427', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('452137', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('456564', 0, ',', '.'),0,2,'R');
/************************************************************************************/
$pdf->SetXY(135, 132);
$pdf->SetFont('Arial','',8);
$pdf->Cell(66,4,utf8_decode('Estoques'),0,2,'C');
$pdf->Cell(45,4,utf8_decode('Estoque USGA '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Perdas Operacionais '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Estoque USGA '),0,2,'L');
/************************************************************************************/
$pdf->SetXY(180, 132);
$pdf->SetFont('Arial','',8);
$pdf->Cell(21,4,number_format(' '),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
/************************************************************************************/
$pdf->SetXY(135, 148);
$pdf->SetFont('Arial','',8);
$pdf->Cell(66,4,utf8_decode('Saídas'),0,2,'C');
$pdf->Cell(45,4,utf8_decode('Cota Americana '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Cota Europeia '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Venda ED&F Man '),0,2,'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(45,4,utf8_decode('Quantidade Entregue '),0,2,'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(45,4,utf8_decode('Remessa para EMPAT '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Saldo dos Contratos '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Perdas Operacionais '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Penalização '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Ajustes de penalização '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Rateio Empat '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Venda Caté ( Empre. ) '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Rateio Receb. Empat '),0,2,'L');
/************************************************************************************/
$pdf->SetXY(180, 148);
$pdf->SetFont('Arial','',8);
$pdf->Cell(21,4,number_format(' '),0,2,'R');
$pdf->Cell(21,4,number_format('268286', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('160264', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('27886', 0, ',', '.'),0,2,'R');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(21,4,number_format('456436', 0, ',', '.'),0,2,'R');
$pdf->SetFont('Arial','',8);
$pdf->Cell(21,4,number_format('452137', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('951', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('823', 0, ',', '.'),0,2,'R');
/************************************************************************************/
$pdf->SetXY(10, 202);
$pdf->SetFont('Arial','BI',8);
$pdf->Cell(125,4,utf8_decode('Sub-total de Contratos '),1,2,'L');
/************************************************************************************/
$pdf->SetXY(75, 202);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,number_format('112001', 0, ',', '.'),0,2,'C');
/************************************************************************************/
$pdf->SetXY(95, 202);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,number_format('112001', 0, ',', '.'),0,2,'C');
/************************************************************************************/
$pdf->SetXY(115, 202);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,number_format('0', 0, ',', '.'),0,2,'C');
/************************************************************************************/
$pdf->SetXY(135, 202);
$pdf->SetFont('Arial','BI',8);
$pdf->Cell(66,4,utf8_decode('Estoque Disponível '),1,2,'L');
/************************************************************************************/
$pdf->SetXY(180, 202);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
/************************************************************************************/
include_once('ligacoes/mercexterno.php');
$pdf->SetXY(10, 206);
$pdf->Cell(191, 8, utf8_decode(''), TLR, 2, 'C');
$pdf->SetXY(10, 206);
$pdf->SetFont('Arial','BI',8);
$pdf->Cell(191,4,utf8_decode('Açúcar Cristal Mercado Externo Safra '. $DESC_SAFRA),0,2,'C');
$pdf->Ln();

$pdf->SetXY(10, 210);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(40,4,utf8_decode('Contratos'), RBT,2,'C');

$pdf->SetXY(50, 210);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Pedido'), RBT,2,'C');

$pdf->SetXY(70, 210);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Qtd. Contrato'), RBT,2,'C');

$pdf->SetXY(90, 210);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode("Faturado"), RBT,2,'C');

$pdf->SetXY(110, 210);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode("A Faturar"), RBT,2,'C');

$pdf->SetXY(130, 210);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode("Entregue"), RBT,2,'C');

$pdf->SetXY(150, 210);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode("À Entreguar"), RBT,2,'C');
if ($MCARDOEXTENO7 > 0) {
    while ($LINIHA = $MCARDOEXTENO7->fetch_array()) {
        $pdf->SetXY(10, 214);
        $pdf->Cell(191, $LINIHA['HEIG']*4, utf8_decode(''), LRB, 2, 'C');
    }
}
$pdf->SetXY(10, 214);
$pdf->SetFont('Arial','',5);
if ($MCARDOEXTENO > 0) {
    while ($LINIHA = $MCARDOEXTENO->fetch_array()) {
        $pdf->Cell(40,4,utf8_decode($LINIHA['col_nome']), B,2,'L');
    }
}
$pdf->SetXY(50, 214);
if ($MCARDOEXTENO1 > 0) {
    while ($LINIHA = $MCARDOEXTENO1->fetch_array()) {
        $pdf->Cell(20,4,utf8_decode($LINIHA['col_nocontrato_cliente']), B,2,'C');
    }
}
$pdf->SetXY(70, 214);
if ($MCARDOEXTENO6 > 0) {
    while ($LINIHA = $MCARDOEXTENO6->fetch_array()) {
        $pdf->Cell(20,4,number_format($LINIHA['col_qtd_contrato'], 0, ',', '.'), B,2,'R');
    }
}
$pdf->SetXY(90, 214);
if ($MCARDOEXTENO2 > 0) {
    while ($LINIHA = $MCARDOEXTENO2->fetch_array()) {
        $pdf->Cell(20,4,number_format('0', 0, ',', '.'), B,2,'R');
    }
}

$pdf->SetXY(110, 214);
if ($MCARDOEXTENO3 > 0) {
    while ($LINIHA = $MCARDOEXTENO3->fetch_array()) {
        $pdf->Cell(20,4,number_format($LINIHA['col_qtd_pendente'], 0, ',', '.'), B,2,'R');
    }
}

$pdf->SetXY(130, 214);
if ($MCARDOEXTENO4 > 0) {
    while ($LINIHA = $MCARDOEXTENO4->fetch_array()) {
        $pdf->Cell(20,4,number_format('0', 0, ',', '.'), B,2,'R');
    }
}
$pdf->SetXY(150, 214);
if ($MCARDOEXTENO5 > 0) {
    while ($LINIHA = $MCARDOEXTENO5->fetch_array()) {
        $pdf->Cell(20,4,number_format('0', 0, ',', '.'), RB,2,'R');
    }
}
include_once('ligacoes/mercinternovhp.php');
if ($MCARDOEXTENO8 > 0) {
    while ($LINIHA = $MCARDOEXTENO8->fetch_array()) {
        /*Se a tabela Mercado Exteno tiver 4 Linhas ele adiciona a tabela VHP externo*/
        if ($LINIHA['HEIG']>0) {
            $pdf->SetXY(10, 230);
            $pdf->SetFont('Arial','BI',8);
            $pdf->Cell(191,4,utf8_decode('Açúcar V.H.P. Mercado Externo Safra '. $DESC_SAFRA),TLBR,2,'C');
            $pdf->Ln();

            $pdf->SetXY(10, 234);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(71,4,utf8_decode('Contratos'), LRBT,2,'C');

            $pdf->SetXY(81, 234);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(20,4,utf8_decode('Pedido'), RBT,2,'C');

            $pdf->SetXY(101, 234);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(20,4,utf8_decode('Qtd. Contrato'), RBT,2,'C');

            $pdf->SetXY(121, 234);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(20,4,utf8_decode("Faturado"), RBT,2,'C');

            $pdf->SetXY(141, 234);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(20,4,utf8_decode("A Faturar"), RBT,2,'C');

            $pdf->SetXY(161, 234);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(20,4,utf8_decode("Entregue"), RBT,2,'C');

            $pdf->SetXY(181, 234);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(20,4,utf8_decode("À Entreguar"), RBT,2,'C');


            /*Fecha a tabela VHP com uma última linha */
            $pdf->SetXY(10, 238);
            $pdf->SetFont('Arial','',5);
            if ($MCARDOINTERNO > 0) {
                while ($LINIHA = $MCARDOINTERNO->fetch_array()) {
                    $pdf->Cell(71,4,utf8_decode($LINIHA['col_contrato']), LB,2,'L');//Nome Contrato
                }
            }
            $pdf->SetXY(81, 238);
            if ($MCARDOINTERNO1 > 0) {
                while ($LINIHA = $MCARDOINTERNO1->fetch_array()) {
                    $pdf->Cell(20,4,utf8_decode($LINIHA['col_pedido']), B,2,'C');//Nome/Nº Pedido
                }
            }
            $pdf->SetXY(101, 238);
            if ($MCARDOINTERNO6 > 0) {
                while ($LINIHA = $MCARDOINTERNO6->fetch_array()) {
                    $pdf->Cell(20,4,number_format($LINIHA['col_quantidade'], 0, ',', '.'), B,2,'R');//Quantidade Contrato
                }
            }

            $pdf->SetXY(121, 238);
            if ($MCARDOINTERNO2 > 0) {
                while ($LINIHA = $MCARDOINTERNO2->fetch_array()) {
                    $pdf->Cell(20,4,number_format($LINIHA['col_faturado'], 0, ',', '.'), B,2,'R');
                }
            }
            
            $pdf->SetXY(141, 238);
            if ($MCARDOINTERNO3 > 0) {
                while ($LINIHA = $MCARDOINTERNO3->fetch_array()) {
                    $pdf->Cell(20,4,number_format($LINIHA['col_afaturar'], 0, ',', '.'), B,2,'R');//Quantidade Entregue
                }
            }
            
            $pdf->SetXY(161, 238);
            if ($MCARDOINTERNO4 > 0) {
                while ($LINIHA = $MCARDOINTERNO4->fetch_array()) {
                    $pdf->Cell(20,4,number_format($LINIHA['col_entregue'], 0, ',', '.'), B,2,'R');
                }
            }
            $pdf->SetXY(181, 238);
            if ($MCARDOINTERNO5 > 0) {
                while ($LINIHA = $MCARDOINTERNO5->fetch_array()) {
                    $pdf->Cell(20,4,number_format($LINIHA['col_aentregar'], 0, ',', '.'), RB,2,'R');
                }
            }
        }
        if ($LINIHA['HEIG']==5) {
            # code...
        }
    }
}





$pdf->OutPut('POSICAO_ACUCAR.pdf','I');
?>
