<?php

//Verifica se o usuário esta logado
define('ROOT_PATH', dirname(__FILE__));
require_once '../../../../../include/verifica_user.php';
require('../../../../../controller/fpdf/fpdf.php');
chmod ('ligacoes/index.php', 755);
include_once('ligacoes/index.php');
session_start();
include_once('../../../../../controller/user.php');
define('FPDF_FONTPATH','font/');
$date = $_POST['calendario'];

class PDF extends FPDF
{
  function Header(){
      $this->Image('../../../../../css/logo/usga.png',200,12,17);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../css/logo/Logomarca_Bonsucro_2016.png',217,12,19);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../css/logo/DNV-GL-Certification-logo.png',237,11,15);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../css/logo/bulb-s.png',253,11,20);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
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

$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,0,utf8_decode('PROGRAMA:'),0,0,'L');
$pdf->Cell(5,0,utf8_decode('SistemaGSG - PHP/HTML'));
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,6,utf8_decode('USUÁRIO:'),0,0,'L');
$pdf->Cell(5,6,utf8_decode($nome),0,0,'L');
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,0,utf8_decode('DATA:'),0,0,'L');
$pdf->Cell(5,0,date("d/m/Y",strtotime($date)));
$pdf->Ln();

$pdf->SetY(43);
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,0,utf8_decode('SAFRA:'),0,0,'P');
if($SAFRA=='1'){
    $pdf->Cell(5,0,utf8_decode('2016/2017'));
}elseif($SAFRA=='2'){
    $pdf->Cell(5,0,utf8_decode('2017/2018'));
}elseif($SAFRA=='3'){
    $pdf->Cell(5,0,utf8_decode('2018/2019'));
}elseif($SAFRA=='4'){
    $pdf->Cell(5,0,utf8_decode('2019/2020'));
}elseif($SAFRA=='5'){
    $pdf->Cell(5,0,utf8_decode('2020/2021'));
}elseif($SAFRA=='6'){
    $pdf->Cell(5,0,utf8_decode('2021/2022'));
}elseif($SAFRA=='7'){
    $pdf->Cell(5,0,utf8_decode('2022/2023'));
}elseif($SAFRA=='8'){
    $pdf->Cell(5,0,utf8_decode('2023/2024'));
}elseif($SAFRA=='9'){
    $pdf->Cell(5,0,utf8_decode('2024/2025'));
}elseif($SAFRA=='10'){
    $pdf->Cell(5,0,utf8_decode('2025/2026'));
}elseif($SAFRA=='11'){
    $pdf->Cell(5,0,utf8_decode('2026/2027'));
}elseif($SAFRA=='14'){
    $pdf->Cell(5,0,utf8_decode('2027/2028'));
}elseif($SAFRA=='15'){
    $pdf->Cell(5,0,utf8_decode('2028/2029'));
}elseif($SAFRA=='16'){
    $pdf->Cell(5,0,utf8_decode('2029/2030'));
}
$pdf->Ln();

$pdf->SetXY(9, 50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Combustível'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(9, 55);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Diesel'),1,2,'L');
$pdf->Ln();
$pdf->SetXY(9, 59.1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,utf8_decode('-'),1,2,'L');
$pdf->Ln();
$pdf->SetXY(9, 63);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,utf8_decode('-'),1,2,'L');
$pdf->Ln();
$pdf->SetXY(9, 67);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,utf8_decode('-'),1,2,'L');
$pdf->Ln();
$pdf->SetXY(9, 71);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,utf8_decode('-'),1,2,'L');
$pdf->Ln();
$pdf->SetXY(29, 50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,utf8_decode('Bomba'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(29, 55);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,utf8_decode('1'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(29, 59.1);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,utf8_decode('2'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(29, 63);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,utf8_decode('3'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(29, 67);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,utf8_decode('4'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(29, 71);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,utf8_decode('5'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(39, 50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Leitura Inicial'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(39, 55);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4, number_format($bomba_1_inicio, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(39, 59.1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($bomba_2_inicio, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(39, 63);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($bomba_3_inicio, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(39, 67);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($bomba_4_inicio, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(39, 71);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($bomba_5_inicio, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(59, 50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Leitura Final'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(59, 55);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($bomba_1_final, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(59, 59.1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($bomba_2_final, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(59, 63);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($bomba_3_final, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(59, 67);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($bomba_4_final, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(59, 71);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($bomba_5_final, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(79, 50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Saídas'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(79, 55);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($totalsomabomba_1, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(79, 59.1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($totalsomabomba_2, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(79, 63);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($totalsomabomba_3, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(79, 67);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($totalsomabomba_4, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(79, 71);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($totalsomabomba_5, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(9, 75);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(70,4,utf8_decode('TOTAL DE DIESEL'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(79, 75);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($totals10, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(9, 79);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Gasolina'),1,2,'L');
$pdf->Ln();
$pdf->SetXY(29, 79);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,utf8_decode('8'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(39, 79);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($bomba_8_inicio, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(59, 79);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($bomba_8_final, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(79, 79);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($totalsomabomba_8, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(9, 83);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(70,4,utf8_decode('TOTAL DE GASOLINA'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(79, 83);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($totalsomabomba_8, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(9, 87);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Diesel S500'),1,2,'L');
$pdf->Ln();
$pdf->SetXY(29, 87);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,utf8_decode('7'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(39, 87);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($bomba_7_inicio, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(59, 87);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($bomba_7_final, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(79, 87);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($totalsomabomba_7, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(9, 91);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(70,4,utf8_decode('TOTAL DE DIESEL S500'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(79, 91);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($totalsomabomba_7, 2, ',', '.'),1,2,'R');
$pdf->Ln();

$pdf->SetXY(200, 50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Combustível'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(220, 50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Tanque'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(240, 50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Quantidade'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(200, 55);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Gasolina'),1,2,'L');
$pdf->Ln();
$pdf->SetXY(220, 55);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,utf8_decode('1'),1,2,'L');
$pdf->Ln();
$pdf->SetXY(240,55);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($tanque_g, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(200, 59.1);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Diesel S10'),1,2,'L');
$pdf->Ln();
$pdf->SetXY(220, 59.1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,utf8_decode('2, 3, 4, 5, 6'),1,2,'L');
$pdf->Ln();
$pdf->SetXY(240, 59.1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($TOTALTANQUED, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(200, 119);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(65,0.1,utf8_decode(''),1,2,'C',true);
$pdf->Ln();
$pdf->SetXY(200, 120);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(65,4,utf8_decode('Assinatura do Responsável'),0,1,'C',false);
$pdf->Ln();

$pdf->SetXY(9, 170);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,10,utf8_decode('Produto'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(9, 180);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Gasoilna'),1,2,'L');
$pdf->Ln();
$pdf->SetXY(9, 184);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Diesel S10'),1,2,'L');
$pdf->Ln();
$pdf->SetXY(29, 170);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,10,utf8_decode('Saldo Inicial'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(49, 170);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,10,utf8_decode('Aferição'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(69, 170);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,10,utf8_decode('Entradas'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(89, 170);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(20,10,utf8_decode('Transf. Entradas'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(109, 170);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(20,10,utf8_decode('Transf. Saídas'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(129, 170);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,10,utf8_decode('Abast. Próprio'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(149, 170);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,10,utf8_decode('Comboio'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(169, 170);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,10,utf8_decode('Fornec. Cana'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(189, 170);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,10,utf8_decode('Funcionários'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(209, 170);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,10,utf8_decode('Usina'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(229, 170);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,10,utf8_decode('Outros'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(249, 170);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,10,utf8_decode('Total Saídas'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(269, 170);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,10,utf8_decode('Saldo Atual'),1,2,'C');
$pdf->Ln();



$pdf->SetXY(29, 180);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($movimentodiagasolina11, 2, ',', '.'),1,2,'R');//Saldo Inicial
$pdf->Ln();
$pdf->SetXY(49, 180);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINEAFERICAOG, 2, ',', '.'),1,2,'R');//Aferição
$pdf->Ln();
$pdf->SetXY(69, 180);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINESOMANFG, 2, ',', '.'),1,2,'R',false, "https://google.com.br");//Entradas
$pdf->Ln();
$pdf->SetXY(89, 180);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($movimentodiagasolina3, 2, ',', '.'),1,2,'R');//Transf. Entradas
$pdf->Ln();
$pdf->SetXY(109, 180);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($movimentodiagasolina4, 2, ',', '.'),1,2,'R');//Transf. Saídas
$pdf->Ln();
$pdf->SetXY(129, 180);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINEPROPRIOG, 2, ',', '.'),1,2,'R',false, "https://google.com.br");//Proprio
$pdf->Ln();
$pdf->SetXY(149, 180);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINECOMBOIOG, 2, ',', '.'),1,2,'R',false, "http://10.2.1.83:8035/SistemaGSGv2.0/template/dashboard/pages/relatorios/conferencia/cupons/cupons.php");//Comboio
$pdf->Ln();
$pdf->SetXY(169, 180);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINEFORNECEDORG, 2, ',', '.'),1,2,'R',false, "https://google.com.br");//Fornecedor de Cana
$pdf->Ln();
$pdf->SetXY(189, 180);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINEFUNCIONARIOG, 2, ',', '.'),1,2,'R',false, "https://google.com.br");//Funcionários
$pdf->Ln();
$pdf->SetXY(209, 180);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINEUSINAG, 2, ',', '.'),1,2,'R',false, "https://google.com.br");//Usina
$pdf->Ln();
$pdf->SetXY(229, 180);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINEOUTROG, 2, ',', '.'),1,2,'R',false, "https://google.com.br");//Outros
$pdf->Ln();
$pdf->SetXY(249, 180);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($TOTALSAIDASG, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(269, 180);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($TOTALSALDOATUALG, 2, ',', '.'),1,2,'R');
$pdf->Ln();




$pdf->SetXY(29, 184);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($movimentodiadieselss11, 2, ',', '.'),1,2,'R');//Saldo Inicial
$pdf->Ln();
$pdf->SetXY(49, 184);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINEAFERICAOD, 2, ',', '.'),1,2,'R');//Aferição
$pdf->Ln();
$pdf->SetXY(69, 184);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINESOMANFD, 2, ',', '.'),1,2,'R',false, "https://google.com.br");//Entradas
$pdf->Ln();
$pdf->SetXY(89, 184);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($movimentodiadieselss3, 2, ',', '.'),1,2,'R');//Transf. entrada
$pdf->Ln();
$pdf->SetXY(109, 184);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($movimentodiadieselss4, 2, ',', '.'),1,2,'R');//Transf. Saídas
$pdf->Ln();
$pdf->SetXY(129, 184);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINEPROPRIOD, 2, ',', '.'),1,2,'R',false, "https://google.com.br");//Proprio
$pdf->Ln();
$pdf->SetXY(149, 184);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINECOMBOIOD, 2, ',', '.'),1,2,'R',false, "https://google.com.br");//Comboio
$pdf->Ln();
$pdf->SetXY(169, 184);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINEFORNECEDORD, 2, ',', '.'),1,2,'R',false, "https://google.com.br");//Fornecedor de Cana
$pdf->Ln();
$pdf->SetXY(189, 184);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINEFUNCIONARIOD, 2, ',', '.'),1,2,'R',false, "https://google.com.br");
$pdf->Ln();
$pdf->SetXY(209, 184);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINEUSINAD, 2, ',', '.'),1,2,'R',false, "https://google.com.br");//Usina
$pdf->Ln();
$pdf->SetXY(229, 184);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($SQLINEOUTROD, 2, ',', '.'),1,2,'R',false, "https://google.com.br");//Outros
$pdf->Ln();
$pdf->SetXY(249, 184);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($TOTALSAIDASD, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->SetXY(269, 184);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,number_format($TOTALSALDOATUALD, 2, ',', '.'),1,2,'R');
$pdf->Ln();
$pdf->OutPut(); 
?>
