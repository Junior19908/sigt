<?php
error_reporting(0);
ini_set("display_errors", 0 );
//Verifica se o usuário esta logado
define('ROOT_PATH', dirname(__FILE__));
require_once '../../../../../../include/verifica_user.php';
require('../../../../../../controller/fpdf/fpdf.php');
require_once '../../../../../../class/Conexao.class.php';
session_start();
include_once('../../../../../../controller/user.php');
define('FPDF_FONTPATH','font/');
class PDF extends FPDF
{
  function Header(){
      $this->Image('../../../../../../css/logo/usga.png',120,12,17);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../../css/logo/Logomarca_Bonsucro_2016.png',137,12,19);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../../css/logo/DNV-GL-Certification-logo.png',157,11,15);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../../css/logo/bulb-s.png',173,11,20);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->SetFont('Arial','B',15);//Definir Fonte e Tamanho
      $this->Cell(-1);//Mover para esquerda ou Direita
      $this->Cell(30,10,'USINA SERRA GRANDE S/A',0,1,'L');
      $this->Ln(-4);//Quebra de Página
  //***********************************************************//
      $this->SetFont('Arial','I',10);
      $this->Cell(-1);
      $this->Cell(30,11, utf8_decode('AÇÚCAR, ÁLCOOL & ENERGIA'),0,0,'L');
      $this->Ln(6);
  //***********************************************************//
      $this->SetFont('Arial','I',10);
      $this->Cell(-1);
      $this->Cell(30,12, utf8_decode('DEMONSTRATIVO DE COMBUSTÍVEL FORNECIDO Á FUNCINÁRIOS'),0,0,'L');
      $this->Ln(12);
  //***********************************************************//
  }
}
$inicio=$_POST['calendarioINICIO'];
$fim=$_POST['calendarioFIM'];

$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,0,utf8_decode('PROGRAMA:'),0,0,'P');
$pdf->Cell(5,0,utf8_decode('SistemaGSG - PHP/HTML'));
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,6,utf8_decode('USUÁRIO:'),0,0,'P');
$pdf->Cell(5,6,utf8_decode($nome),0,0,'L');
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,0,utf8_decode('DATA:'),0,0,'P');
$pdf->Cell(5,0,date("d/m/Y"));
$pdf->Ln();
$pdf->Sety(29.8);
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,26,utf8_decode('PERÍODO:'),0,0,'P');
$pdf->Cell(5,26,date("d/m/Y",strtotime($inicio)));
$pdf->SetX(46);
$pdf->Cell(18,26,utf8_decode('Até'),0,0,'P');
$pdf->SetX(54);
$pdf->Cell(5,26,date("d/m/Y",strtotime($fim)));
$pdf->Ln();
//set width for each column
$pdf->SetWidths(Array(100,20,15,17,15,25,25));
$pdf->SetAligns(Array('L','C','C','R','R','R','R'));

//set line heigth
$pdf->SetLineHeight(4);
//DataBase Mysql

$pdf->SetXY(10, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(100,4,utf8_decode('NOME'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(110, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,utf8_decode('VEÍCULO'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(130, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(15,4,utf8_decode('PREÇO'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(145, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(17,4,utf8_decode('LITROS'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(162, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(15,4,utf8_decode('VALOR'),1,2,'C');
$pdf->Ln();
$pdf->SetFont('Arial','',6);


foreach ($_POST["MultiplosSelect"] as $selectedOption) {
  //SELECT imp.*, FORNEC.*,SUM(litros) AS fornclitros,SUM(valor) AS forncvalor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNEC ON IMP.fornecedor_cod_veiculo = FORNEC.cod_veiculo WHERE imp.date BETWEEN '$inicio' AND '$fim' AND IMP.fornecedor_cod_veiculo IS NOT NULL GROUP BY FORNEC.cod_veiculo ORDER BY FORNEC.nome_fornecedor ASC
  //SELECT * FROM `tb_import` WHERE fornecedor_cod_veiculo IN ($selectedOption)   GROUP BY fornecedor_cod_veiculo
  $QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT imp.*, FORNEC.*,SUM(litros) AS fornclitros,SUM(valor) AS forncvalor FROM tb_import AS IMP LEFT JOIN tb_funcionario AS FORNEC ON IMP.funcionario_cod_veiculo = FORNEC.cod_veiculo WHERE imp.date BETWEEN '$inicio' AND '$fim' AND FORNEC.func_matricula IN ($selectedOption) GROUP BY FORNEC.cod_veiculo ORDER BY FORNEC.nome_funcionario ASC");
  $CONSULT = mysqli_num_rows($QUERY);
  if ($CONSULT > 0) {
  	while($row = $QUERY->fetch_array()){
  		$pdf->Row(Array(
        utf8_decode($row['nome_funcionario']),
        $row['funcionario_cod_veiculo'],
        number_format($row['forncvalor']/$row['fornclitros'], 2, ',', '.'),
        number_format($row['fornclitros'], 2, ',', '.'),
        number_format($row['forncvalor'], 2, ',', '.'),
        ));
      }
    }
}

$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
$pdf->Cell(25,4,utf8_decode(' '),0,2,'C');

$pdf->OutPut();
?>
