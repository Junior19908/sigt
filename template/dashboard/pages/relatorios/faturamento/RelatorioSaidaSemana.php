<?php
error_reporting(0);
ini_set("display_errors", 0);
define('ROOT_PATH', dirname(__FILE__));
require_once '../../../../../include/verifica_user.php';
require('../../../../../controller/fpdf/fpdf.php');
include_once('ligacoes/acucar.php');
include_once('ligacoes/carregamento.php');
include_once('ligacoes/dias.php');
include_once('ligacoes/alcool.php');
include_once('ligacoes/containers.php');
session_start();
include_once('../../../../../controller/user.php');
define('FPDF_FONTPATH', 'font/');
class PDF extends FPDF
{
    function Header()
    {
        $this->Image('../../../../../css/logo/usga.png', 120, 12, 17); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
        $this->Image('../../../../../css/logo/Logomarca_Bonsucro_2016.png', 137, 12, 19); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
        $this->Image('../../../../../css/logo/DNV-GL-Certification-logo.png', 157, 11, 15); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
        $this->Image('../../../../../css/logo/bulb-s.png', 173, 11, 20); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
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
        $this->Cell(30, 10, utf8_decode('DEMONSTRATIVO DE SAÍDA NA SEMANA'), 0, 0, 'L');
        $this->Ln(12);
        //***********************************************************//
    }
}
date_default_timezone_set('America/Maceio');
$hora = date("h:i:s");

$pdf = new PDF('P', 'mm', 'A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 7);
$pdf->Cell(18, 0, utf8_decode('PROGRAMA:'), 0, 0, 'P');
$pdf->Cell(5, 0, utf8_decode('SistemaGSG - PHP/HTML'));
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
$pdf->Cell(18, 6, utf8_decode('USUÁRIO:'), 0, 0, 'P');
$pdf->Cell(5, 6, utf8_decode($nome), 0, 0, 'L');
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
$pdf->Cell(18, 0, utf8_decode('DATA:'), 0, 0, 'P');
$pdf->Cell(5, 0, date("d/m/Y"));
$pdf->Ln();
$pdf->Sety(42.5);
$pdf->Cell(18, 1, utf8_decode('PERÍODO:'), 0, 0, 'P');
$pdf->Cell(5, 1, date("d/m/Y", strtotime($TO_BORN)));
$pdf->SetX(46);
$pdf->Cell(18, 1, utf8_decode('Até'), 0, 0, 'P');
$pdf->SetX(54);
$pdf->Cell(5, 1, date("d/m/Y", strtotime($TO_END)));
$pdf->Ln();

//set width for each column
$pdf->SetWidths(array(85, 50, 20, 22, 15.5, 20, 19));
$pdf->SetAligns(array('L', 'L', 'R', 'R', 'R', 'R', 'R'));
//set line heigth
$pdf->SetLineHeight(4);
//DataBase Mysql
$pdf->SetXY(10, 50);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(85, 4, utf8_decode('CLIENTE'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY(95, 50);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(50, 4, utf8_decode('CIDADE'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY(145, 50);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(20, 4, utf8_decode('QUANT.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY(165, 50);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(22, 4, utf8_decode('VALOR BRUTO'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY(187, 50);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(15.5, 4, utf8_decode('PREÇO'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetFont('Arial', '', 8);
if ($CONSULTAACUCAR >= 0) {
    while ($row = $ACUCAR->fetch_array()) {
        if ($row['UNIDADE'] == 'SC') {
            $QUANTIDADE = $row['SOMAQUANTIDADE'];
        }
        if ($row['UNIDADE'] == 'KG') {
            $QUANTIDADE = $row['SOMAQUANTIDADE'] / 50;
        }
        if ($row['UNIDADE'] == 'TM') {
            $QUANTIDADE = $row['SOMAQUANTIDADE'] * 20;
        }
        $pdf->Row(array(
            utf8_decode($row['COD_RECEB']),
            utf8_decode($row['CIDADE']),
            number_format($QUANTIDADE, 0, ',', '.'),
            number_format($row['SOMABRUTO'], 2, ',', '.'),
            number_format($row['SOMABRUTO'] / $QUANTIDADE, 2, ',', '.'),
        ));
    }


    $pdf->SetX(95);
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->SetWidths(Array(50,20,22));
    $pdf->SetAligns(Array('C','R','R'));
    $pdf->SetLineHeight(4);

    $pdf->Row(Array(
        utf8_decode('TOTAL'),
        number_format($SOMAKGESC, 0, ',', '.'),
        number_format($TOTALVALORBRUTO, 2, ',', '.'),
    ));


//set width for each column
$pdf->SetWidths(array(85, 50, 20, 22, 15.5, 20, 19));
$pdf->SetAligns(array('L', 'L', 'R', 'R', 'R', 'R', 'R'));
//set line heigth
$pdf->SetLineHeight(4);
//DataBase Mysql


$pdf->Ln();


    if ($CONSULTAACUCAREXPORTACAO > 0) {
        $pdf->SetFont('Arial', 'BI', 8);
        $pdf->Cell(192.5, 4, utf8_decode('Saídas de Açúcar - Mercado Externo'), 1, 2, 'C');
        $pdf->SetX(10);
        $pdf->SetFont('Arial', '', 8);
        while ($row = $ACUCAREXPORTACAO->fetch_array()) {
            if ($row['UNIDADE'] == 'SC') {
                $QUANTIDADE = $row['SOMAQUANTIDADE'];
            }
            if ($row['UNIDADE'] == 'TM') {
                $QUANTIDADE = $row['SOMAQUANTIDADE'] * 20;
            }
            if ($row['UNIDADE'] == 'KG') {
                $QUANTIDADE = $row['SOMAQUANTIDADE'] / 50;
            }
            if ($row['UNIDADE'] == 'TON') {
                $QUANTIDADE = $row['SOMAQUANTIDADE'] * 20;
            }
            $pdf->Row(array(
                utf8_decode($row['COD_RECEB']),
                utf8_decode($row['CIDADE']),
                number_format($QUANTIDADE, 0, ',', '.'),
                number_format($row['SOMABRUTO'], 2, ',', '.'),
                number_format($row['SOMABRUTO'] / $QUANTIDADE, 2, ',', '.'),
            ));
        }
        $pdf->SetX(95);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->SetWidths(Array(50,20,22));
        $pdf->SetAligns(Array('C','R','R'));
        $pdf->SetLineHeight(4);

        $pdf->Row(Array(
            utf8_decode('TOTAL'),
            number_format($TOTALEX * 20,0,',','.'),
            number_format($SOMAEX,2,',','.'),
        ));


        $pdf->Ln();

        $pdf->SetX(95);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->SetWidths(Array(50,20,22));
        $pdf->SetAligns(Array('C','R','R'));
        $pdf->Row(Array(
            utf8_decode('TOTAL'),
            number_format($TOTALEX * 20 + $SOMAKGESC,2,',','.'),
            number_format($TOTALVALORBRUTO + $SOMAEX,2,',','.'),
        ));

        //set width for each column
        $pdf->SetWidths(array(85, 50, 20, 22, 15.5, 20, 19));
        $pdf->SetAligns(array('L', 'L', 'R', 'R', 'R', 'R', 'R'));
        //set line heigth
        $pdf->SetLineHeight(4);
        //DataBase Mysql
        $pdf->Ln();
    }
    if ($CONSULTAALCOOL > 0) {
        $pdf->SetX(10);
        $pdf->SetFont('Arial', 'BI', 8);
        $pdf->Cell(192.5, 4, utf8_decode('Saídas de Álcool Anidro'), 1, 2, 'C');
        $pdf->SetX(10);
        $pdf->SetFont('Arial', '', 8);
        if ($CONSULTAALCOOL > 0) {
            while ($LINIHA = $ALCOOL->fetch_array()) {
                $pdf->Row(array(
                    utf8_decode($LINIHA['COD_RECEB']),
                    utf8_decode($LINIHA['CIDADE']),
                    number_format($LINIHA['SOMAQUANTIDADE'], 0, ',', '.'),
                    number_format($LINIHA['SOMABRUTO'], 2, ',', '.'),
                    number_format($LINIHA['SOMABRUTO'] / $LINIHA['SOMAQUANTIDADE'], 2, ',', '.'),
                ));
            }
        }
    }
    
    if ($CONSULTAALCOOLHIDRATADO > 0) {
        $pdf->SetX(10);
        $pdf->SetFont('Arial', 'BI', 8);
        
        $pdf->Cell(177, 4, utf8_decode('Saídas de Álcool Hidratado'), 1, 2, 'C');
        $pdf->SetX(10);
        $pdf->SetFont('Arial', '', 8);
        if ($CONSULTAALCOOLHIDRATADO > 0) {
            while ($LINIHA = $HIDRATADO->fetch_array()) {
                $pdf->Row(array(
                    utf8_decode($LINIHA['COD_RECEB']),
                    utf8_decode($LINIHA['CIDADE']),
                    number_format($LINIHA['SOMAQUANTIDADE'], 0, ',', '.'),
                    number_format($LINIHA['SOMABRUTO'], 2, ',', '.'),
                ));
            }
        }
    }
    
    if($CONSULTAALCOOL > 0 || $CONSULTAALCOOLHIDRATADO > 0){
        $pdf->SetX(95);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->SetWidths(Array(50,20,22));
        $pdf->SetAligns(Array('C','R','R'));
        $pdf->SetLineHeight(4);
        
        $pdf->Row(Array(
            utf8_decode('TOTAL'),
            number_format($TOTALQUANTIDADEALCOOL, 0, ',', '.'),
            number_format($TOTALVALORBRUTOALCOOL, 2, ',', '.'),
        ));
    }
}
$pdf->SetTextColor(0, 0, 0);
$pdf->AddPage();
$pdf->SetY(-250);
$pdf->SetX(10);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(177, 4, utf8_decode('Histórico de Carregamento de Veículos'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-246);
$pdf->SetX(10);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(60, 4, utf8_decode('Veículos Carregados'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-246);
$pdf->SetX(70);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(20, 4, utf8_decode('Cristal'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-246);
$pdf->SetX(90);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(20, 4, utf8_decode('VHP'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-246);
$pdf->SetX(110);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(77, 4, utf8_decode('Fila de  Carregamento às ' . $hora . 'Hs'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-242);
$pdf->SetX(10);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, utf8_decode('Dia'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-242);
$pdf->SetX(40);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, utf8_decode('Carretas'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-242);
$pdf->SetX(70);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(40, 4, utf8_decode('Quantidade'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-242);
$pdf->SetX(110);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(40, 4, utf8_decode('Veículos no Armazém'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-242);
$pdf->SetX(150);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(37, 4, utf8_decode('Veículos no Pátio'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-238);
$pdf->SetX(10);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, utf8_decode('Segunda'), 1, 2, 'L');
$pdf->Ln();
$pdf->SetY(-238);
$pdf->SetX(40);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, number_format($SEGUNDACARREGAMENTO, 0, ',', '.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-238);
$pdf->SetX(70);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($SEGUNDAFEIRAACUCAR, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-238);
$pdf->SetX(90);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($SEGUNDAFEIRAVHPACUCAR, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-238);
$pdf->SetX(110);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(40, 4, $ARMAZEM, 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-238);
$pdf->SetX(150);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(37, 4, $PATIO, 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-234);
$pdf->SetX(10);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, utf8_decode('Terça'), 1, 2, 'L');
$pdf->Ln();
$pdf->SetY(-234);
$pdf->SetX(40);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, number_format($TERÇACARREGAMENTO, 0, ',', '.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-234);
$pdf->SetX(70);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($TERÇAFEIRAACUCAR, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-234);
$pdf->SetX(90);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($TERÇAFEIRAVHPACUCAR, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-234);
$pdf->SetX(110);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, utf8_decode('Sacarias'), 1, 2, 'L');
$pdf->Ln();
$pdf->SetY(-234);
$pdf->SetX(130);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($COL_SACARIA_ARMAZEM, 0, ',', '.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-234);
$pdf->SetX(150);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(18.5, 4, utf8_decode('Sacarias'), 1, 2, 'L');
$pdf->Ln();
$pdf->SetY(-234);
$pdf->SetX(168.5);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(18.5, 4, number_format($COL_SACARIA_PATIO, 0, ',', '.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-230);
$pdf->SetX(10);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, utf8_decode('Quarta'), 1, 2, 'L');
$pdf->Ln();
$pdf->SetY(-230);
$pdf->SetX(40);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, number_format($QUARTACARREGAMENTO, 0, ',', '.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-230);
$pdf->SetX(70);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($QUARTAFEIRAACUCAR, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-230);
$pdf->SetX(90);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($QUARTAFEIRAVHPACUCAR, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-230);
$pdf->SetX(110);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, utf8_decode('Big-Bag'), 1, 2, 'L');
$pdf->Cell(20, 4, utf8_decode('Anidro'), 1, 2, 'L');
$pdf->Cell(20, 4, utf8_decode('Hidratado'), 1, 2, 'L');
$pdf->Ln();
$pdf->SetY(-230);
$pdf->SetX(130);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($COL_BAG_ARMAZEM, 0, ',', '.'), 1, 2, 'C');
$pdf->Cell(20, 4, number_format($COL_ALCOOL_ARMAZEM, 0, ',', '.'), 1, 2, 'C');
$pdf->Cell(20, 4, number_format($COL_HIDRATADO_ARMAZEM, 0, ',', '.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-230);
$pdf->SetX(150);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(18.5, 4, utf8_decode('Big-Bag'), 1, 2, 'L');
$pdf->Cell(18.5, 4, utf8_decode('Anidro'), 1, 2, 'L');
$pdf->Cell(18.5, 4, utf8_decode('Hidratado'), 1, 2, 'L');
$pdf->Ln();
$pdf->SetY(-230);
$pdf->SetX(168.5);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(18.5, 4, number_format($COL_BAG_PATIO, 0, ',', '.'), 1, 2, 'C');
$pdf->Cell(18.5, 4, number_format($COL_ALCOOL_PATIO, 0, ',', '.'), 1, 2, 'C');
$pdf->Cell(18.5, 4, number_format($COL_HIDRATADO_PATIO, 0, ',', '.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-226);
$pdf->SetX(10);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, utf8_decode('Quinta'), 1, 2, 'L');
$pdf->Ln();
$pdf->SetY(-226);
$pdf->SetX(40);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, number_format($QUINTACARREGAMENTO, 0, ',', '.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-226);
$pdf->SetX(70);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($QUINTAFEIRAACUCAR, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-226);
$pdf->SetX(90);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($QUINTAFEIRAVHPACUCAR, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-222);
$pdf->SetX(10);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, utf8_decode('Sexta'), 1, 2, 'L');
$pdf->Ln();
$pdf->SetY(-222);
$pdf->SetX(40);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, number_format($SEXTACARREGAMENTO, 0, ',', '.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-222);
$pdf->SetX(70);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($SEXTAFEIRAACUCAR, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-222);
$pdf->SetX(90);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($SEXTAFEIRAVHPACUCAR, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-218);
$pdf->SetX(10);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, utf8_decode('Sábado'), 1, 2, 'L');
$pdf->Ln();
$pdf->SetY(-218);
$pdf->SetX(40);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, number_format($SABADOCARREGAMENTO, 0, ',', '.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-218);
$pdf->SetX(70);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($SABADOACUCAR, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-218);
$pdf->SetX(90);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($SABADOVHPACUCAR, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-214);
$pdf->SetX(10);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, utf8_decode('Domingo'), 1, 2, 'L');
$pdf->Ln();
$pdf->SetY(-214);
$pdf->SetX(40);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(30, 4, number_format($DOMINGOCARREGAMENTO, 0, ',', '.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-214);
$pdf->SetX(70);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($DOMINGOACUCAR, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-214);
$pdf->SetX(90);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(20, 4, number_format($DOMINGOVHPACUCAR, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-214);
$pdf->SetX(10);
$pdf->Cell(25, 4, utf8_decode(' '), 0, 2, 'C');
$pdf->Cell(30, 4, utf8_decode('Total:'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-214);
$pdf->SetX(40);
$pdf->Cell(25, 4, utf8_decode(' '), 0, 2, 'C');
$pdf->Cell(30, 4, number_format($CARREGAMENTODIASSOMA, 0, ',', '.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetY(-210);
$pdf->SetX(70);
$pdf->Cell(20, 4, number_format($TOTALCRISTAL, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
$pdf->SetY(-210);
$pdf->SetX(90);
$pdf->Cell(20, 4, number_format($TOTALVHP, 0, ',', '.'), 1, 2, 'R');
$pdf->Ln();
//Inicia os Containers
if ($CONSULTACONTAINERS > 0) {
    $pdf->SetY(-200);
    $pdf->SetX(10);
    $pdf->SetFont('Arial', 'BI', 8);
    $pdf->Cell(177, 4, utf8_decode('Programação de Containers'), 1, 2, 'C');
    $pdf->SetX(10);
    $pdf->SetWidths(array(50, 25, 20, 10, 20, 52));
    $pdf->SetAligns(array('C', 'C', 'C', 'C', 'C', 'C'));
    $pdf->SetLineHeight(5);
    $pdf->SetFont('Arial', '', 8);
    if ($CONSULTACONTAINERS >= 0) {
        while ($LINIHA = $CONTAINERS->fetch_array()) {
            $pdf->Row(array(
                $LINIHA['col_navio'],
                $LINIHA['col_Booking'],
                date("d/m/Y", strtotime($LINIHA['dataBooking'])),
                $LINIHA['col_ctnrs'],
                utf8_decode($LINIHA['col_situacao']),
                utf8_decode(' '),
            ));
        }
    }
}
$pdf->Ln();
$pdf->OutPut();
