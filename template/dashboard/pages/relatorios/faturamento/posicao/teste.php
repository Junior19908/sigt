<?php
/*****************************************************************/
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
//set width for each column
$pdf->SetFont('Arial', '', 5);
$pdf->SetWidths(array(55, 36,18, 15, 17, 15.5, 20, 18.5));
$pdf->SetAligns(array('L', 'L', 'C', 'C', 'R', 'R', 'R', 'R'));
//set line heigth
$pdf->SetLineHeight(4);
//DataBase Mysql
/*Resultado para os contratos, criar varios blocos de tables
para os <contratos></contratos>*/


//Ex.

/***************************************************************************************/
//
/***************************************************************************************/


$pdf->OutPut();
?>