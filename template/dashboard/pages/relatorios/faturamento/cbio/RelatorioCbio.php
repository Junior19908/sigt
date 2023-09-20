<?php
error_reporting(0);
ini_set("display_errors", 0 );
session_start();
require_once '../../../../../../controller/user.php';
define('ROOT_PATH', dirname(__FILE__));
require('../../../../../../controller/fpdf/fpdf.php');
define('FPDF_FONTPATH', 'font/');
class PDF extends FPDF
{
    function Header()
    {
        $this->Image('../../../../../../css/logo/usga.png', 120, 12, 17); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
        $this->Image('../../../../../../css/logo/Logomarca_Bonsucro_2016.png', 137, 12, 19); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
        $this->Image('../../../../../../css/logo/DNV-GL-Certification-logo.png', 157, 11, 15); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
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
        $this->Cell(30, 10, utf8_decode('DEMONSTRATIVO NOTAS FISCAIS CBIO - CIÊNCIA DA OPERAÇÃO'), 0, 0, 'L');
        $this->Ln(12);
        //***********************************************************//
    }
}
date_default_timezone_set('America/Maceio');
$hora = date("h:i:s");

$pdf = new PDF('L', 'mm', 'A4');
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

$pdf->SetXY(10, 50);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(90, 4, utf8_decode('CHAVE DE ACESSO'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY(100, 50);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(70, 4, utf8_decode('CLIENTE'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY(170, 50);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(20, 4, utf8_decode('NOTA FISCAL'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY(190, 50);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(22, 4, utf8_decode('NOTA FISCAL'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY(212, 50);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(80, 4, utf8_decode('STATUS'), 1, 2, 'C');
$pdf->Ln();
//set width for each column
$pdf->SetWidths(array(90, 70, 20, 22, 80));
$pdf->SetAligns(array('L', 'L', 'C', 'C', 'C'));
//set line heigth
$pdf->SetLineHeight(4);
//DataBase Mysql

$pdf->SetFont('Arial', '', 8);
$CONNECTIONFATURAMENTO = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgfaturamento');
$QUERYCBIO = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_nota_consultar` WHERE col_status=143");
$CONSULTACBIO = mysqli_num_rows($QUERYCBIO);

if ($CONSULTACBIO >= 0) {
    while ($row = $QUERYCBIO->fetch_array()) {
        $pdf->Row(array(
            utf8_decode($row['col_chaveAcesso']),
            utf8_decode($row['col_nomeCliente']),
            number_format($row['col_Nfe'], 0, ',', '.'),
            date("d/m/Y", strtotime($row['col_dataNfe'])),
            utf8_decode('Ciência da Operação pelo Destinatário (Órgão Autor: AN)')
        ));
    }
}
$pdf->Ln();
$pdf->OutPut();