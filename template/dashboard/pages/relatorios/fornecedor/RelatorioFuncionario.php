<?php
error_reporting(0);
ini_set("display_errors", 0 );
//Verifica se o usuário esta logado
define('ROOT_PATH', dirname(__FILE__));
require_once '../../../../../include/verifica_user.php';
require('../../../../../controller/fpdf/fpdf.php');
require_once '../../../../../class/Conexao.class.php';
chmod ('ligacoes/index.php', 755);
include_once('ligacoes/index.php');
session_start();
include_once('../../../../../controller/user.php');
define('FPDF_FONTPATH','font/');
class PDF extends FPDF
{
  function Header(){
      $this->Image('../../../../../css/logo/usga.png',120,12,17);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../css/logo/Logomarca_Bonsucro_2016.png',137,12,19);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../css/logo/DNV-GL-Certification-logo.png',157,11,15);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../css/logo/bulb-s.png',173,11,20);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
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
      $this->Cell(30,12, utf8_decode('DEMONSTRATIVO DE COMBUSTÍVEL FORNECIDO À FUNCIONÁRIOS'),0,0,'L');
      $this->Ln(12);
  //***********************************************************//
  }
}

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
$pdf->Sety(46);
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
//set width for each column
$pdf->SetWidths(Array(70,20,15,17,15,25,25));
$pdf->SetAligns(Array('L','C','C','C','C','R', 'R'));

//set line heigth
$pdf->SetLineHeight(4);
//DataBase Mysql

$pdf->SetXY(10, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(70,4,utf8_decode('NOME'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(80, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(35,4,utf8_decode('MATRÍCULA / VEÍC'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(115, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(17,4,utf8_decode('DATA'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(132, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(15,4,utf8_decode('PREÇO'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(147, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(25,4,utf8_decode('LITROS'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(172, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(25,4,utf8_decode('VALOR'),1,2,'C');
$pdf->Ln();
$pdf->SetFont('Arial','',8);

if ($CONSULT > 0) {
	while($row = $MYSQLQUERY->fetch_array()){
		$pdf->Row(Array(
            utf8_decode($row['nome_funcionario']),
      $row['func_matricula'],
			$row['funcionario_cod_veiculo'],
			date("d/m/Y",strtotime($row['date'])),
            number_format($row['valor']/$row['litros'], 2, ',', '.'),
			number_format($row['litros'], 2, ',', '.'),
			number_format($row['valor'], 2, ',', '.'),
                ));
        }
    }

    $pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
    $pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
    $pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
    $pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
    
    $pdf->SetY(-70);
    $pdf->SetX(165);
    $pdf->Cell(40,4,utf8_decode('Total em Litros S10:'),1,2,'C');
    $pdf->Cell(40,4,number_format($SOMALITROSDIESEL, 2, ',', '.'),1,2,'R');
    $pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
    $pdf->Cell(40,4,utf8_decode('Total em Valor:'),1,2,'C');
    $pdf->Cell(40,4,'R$: '.number_format($SOMAVALORDIESEL, 2, ',', '.'),1,2,'R');
    $pdf->Ln();
    
    $pdf->SetY(-70);
    $pdf->SetX(10);
    $pdf->Cell(40,4,utf8_decode('Total em Litros Gasolina:'),1,2,'C');
    $pdf->Cell(40,4,number_format($SOMALITROSGASOLINA, 2, ',', '.'),1,2,'R');
    $pdf->Cell(40,4,utf8_decode(' '),0,2,'C');
    $pdf->Cell(40,4,utf8_decode('Total em Valor:'),1,2,'C');
    $pdf->Cell(40,4,'R$: '.number_format($SOMAVALORGASOLINA, 2, ',', '.'),1,2,'R');
    $pdf->Ln();
    
    $pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
    $pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
    $pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
    $pdf->Cell(25,4,utf8_decode(' '),0,2,'C');
    
    $pdf->SetY(271);
    $pdf->SetX(75);
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(65,0.1,utf8_decode(''),1,2,'C',true);
    $pdf->Ln();
    $pdf->SetY(271);
    $pdf->SetX(75);
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(65,4,utf8_decode('Assinatura do Responsável'),0,1,'C',false);
    $pdf->Ln();
    //output the pdf
    
$pdf->OutPut();
?>