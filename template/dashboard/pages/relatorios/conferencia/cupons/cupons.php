<?php
//Verifica se o usuário esta logado
require_once '../../../../../../include/verifica_user.php';
require('../../../../../../controller/fpdf/fpdf.php');
define('FPDF_FONTPATH','font/');
session_start();
class PDF extends FPDF
{
  function Header(){
      $this->Image('../../../../../../css/logo/usga.png',120,12,17);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../../css/logo/Logomarca_Bonsucro_2016.png',136,12,19);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../../css/logo/DNV-GL-Certification-logo.png',155,11,15);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../../css/logo/bulb-s.png',170,11,20);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->SetFont('Arial','B',15);//Definir Fonte e Tamanho
      $this->Cell(-1);//Mover para esquerda ou Direita
      $this->Cell(30,10,'USINA SERRA GRANDE S/A',0,1,'L');
      $this->Ln(-4);//Quebra de Página
  //***********************************************************//
      $this->SetFont('Arial','I',10);
      $this->Cell(-1);
      $this->Cell(30,10, utf8_decode('AÇÚCAR, ÁLCOOL & ENERGIA'),0,0,'L');
      $this->Ln(6);
  //***********************************************************//
      $this->SetFont('Arial','I',10);
      $this->Cell(-1);
      $this->Cell(30,10, utf8_decode('DEMONSTRATIVO DE CONFERÊNCIA DOS MOVIMENTOS'),0,0,'L');
      $this->Ln(12);
  //***********************************************************//

  }
}

$List = new PDF('P','mm','A4');
$List->AliasNbPages();
$List->AddPage();
$List->SetFont('Arial','',8);
$List->Cell(18,0,utf8_decode('PROGRAMA:'),0,0,'L');
$List->Cell(5,0,utf8_decode('SistemaGSG - PHP/HTML'));
$List->Ln();
$List->SetFont('Arial','',8);
$List->Cell(18,6,utf8_decode('USUÁRIO:'),0,0,'L');
$List->Cell(5,6,utf8_decode('Nome'),0,0,'L');
$List->Ln();
$List->SetFont('Arial','',8);
$List->Cell(18,0,utf8_decode('DATA:'),0,0,'L');
$List->Cell(5,0,date("d/m/Y",$_POST['calendario']));
$List->Ln();
$List->OutPut();
?>