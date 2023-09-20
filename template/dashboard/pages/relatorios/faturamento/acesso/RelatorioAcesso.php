<?php
/***********************Inclusões*********************************/
define('ROOT_PATH', dirname(__FILE__));
require_once('../../../../../../controller/fpdf/fpdf.php');
require_once('../../../../../../class/Conexao.class.php');
/*****************************************************************/
include_once('ligacoes/acesso.php');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$DATAHJ = strftime('%d de %B de %Y', strtotime('today'));
define('FPDF_FONTPATH', 'font/');
class PDF extends FPDF
{
    function Header()
    {
        $this->Image('../../../../../../css/logo/usga.png', 120, 12, 17); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
        $this->Image('../../../../../../css/logo/Logomarca_Bonsucro_2016.png', 153, 12, 19); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
        $this->Image('../../../../../../css/logo/DNV-GL-Certification-logo.png', 137.8, 11, 15); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
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
        $this->Cell(30, 10, utf8_decode('ACESSO BALANÇA SAÍDA'), 0, 0, 'L');
        $this->Ln(12);
        //***********************************************************//
    }
    function Footer(){
        //$this->Image('../../../../../../css/logo/bulb-s.png', 190, 280, 15); //Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
        $this->SetY(-15);
        $this->SetFont('Arial','I', 6);
        //$this->Cell(0,10,'JACKSON S. SANTOS',0,0,'L');
        $this->Cell(0,10,'CARLOS J S BRITO JR',0,0,'L');
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
$pdf->Cell(5, 6, utf8_decode($NOME_USER), 0, 0, 'L');
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
$pdf->Cell(18, 0, utf8_decode('DATA:'), 0, 0, 'P');
$pdf->Cell(5, 0, date("d/m/Y",strtotime($DATAAC)));
$pdf->Ln();
$pdf->SetXY(115, 50);
$pdf->SetFont('Arial','',16);
$pdf->Cell(30,4,utf8_decode('NR. ACESSO USINA:'),0,2,'C');
$pdf->Ln();
$pdf->SetXY(160, 50);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(30,4,utf8_decode($NACESSO),0,2,'C');
$pdf->Ln();
$pdf->SetXY(10, 60);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(182, 4, utf8_decode('DADOS DO CLIENTE'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY(10, 70);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('CLIENTE:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(47, 70);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($CLIENTE), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(10, 75);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('CNPJ:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(47, 75);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($CNPJ), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(148, 75);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('I. ESTADUAL:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(172, 75);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($IESTADUAL), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(10, 80);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('RUA:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(47, 80);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($RUA), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(10, 85);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('CIDADE:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(47, 85);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($CIDADE), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(148, 85);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('ESTADO:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(172, 85);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($ESTADO), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(10, 90);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(182, 4, utf8_decode('PRODUTO TRANSPORTADO'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY(10, 100);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('PRODUTO:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(47, 100);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode('AÇÚCAR ESPECIAL EXTRA'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(10, 105);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('TIPO DA SACARIA:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(47, 105);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($TPSAC), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(10, 110);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('QUANTIDADE:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(47, 110);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($QUANT), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(132, 110);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('SACARIA:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(152, 110);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($SACARIA_INICIO), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(170, 110);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('A'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(178, 110);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($SACARIA_FIM), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(10, 115);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('ORD. DO CLIENTE:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(47, 115);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($ORDEM), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(132, 121);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('SAFRA:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(151, 120);
$pdf->SetFont('Arial', 'B', 25);
$pdf->Cell(15, 4, utf8_decode($SAFRA), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(10, 126);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(182, 4, utf8_decode('DADOS DO TRANSPORTADOR'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY(10, 135);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('TRANSPORTADORA:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(47, 135);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($NTRANSPORT), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(10, 140);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('MOTORISTA:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(47, 140);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($MOTORISTA), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(10, 145);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('CNPJ:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(47, 145);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($CNPJ_TRANSP), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(148, 145);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('I. ESTADUAL:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(172, 145);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($IETRANSPORT), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(10, 150);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(15, 4, utf8_decode('PLACAS:'), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(47, 150);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 4, utf8_decode($PLACA_1.' - ' .$PLACA_2. ' - ' .$PLACA_3.' - '.$PLACA_4), 0, 2, 'L');
$pdf->Ln();
$pdf->SetXY(10, 155);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(182, 4, utf8_decode('INFORMAÇÕES ADICIONAIS'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY(10, 160);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->MultiCell(182, 5, utf8_decode(' Obs.: '. $OBSAC), 0, 'L',false);
$pdf->Ln();
$pdf->SetXY(10, 210);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(182, 4, utf8_decode('***'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY(10, 240);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(182, 4, utf8_decode('USINA SERRA GRANDE S/A, '. strtoupper($DATAHJ)), 0, 2, 'C');
$pdf->Ln();
$pdf->SetXY(70, 271);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(65,0.1,utf8_decode(''),1,2,'C');
$pdf->Ln();
$pdf->SetXY(10, 271);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(182, 4, utf8_decode('Assinatura do Responsável'), 0, 2, 'C');
$pdf->Ln();/*
require '../../../../../../controller/phpmail/PHPMailerAutoload.php';
$Mailer = new PHPMailer();
//Define o Tipo de Conexão
$Mailer->isSMTP();
//Enviar email em HTML
$Mailer->isHTML(true);
//Aceitar Caracteres Especiais
$Mailer->Charset = 'UTF-8';

//Configurações
$Mailer->SMTPAuth = true;
$Mailer->SMTPSecure = 'tsl';

//Nome do Servidor
$Mailer->Host = 'smtp.gmail.com';
$Mailer->Port = 587;

//Dados do E-mail de Saída	
$Mailer->Username = 'testephpemailsistema@gmail.com';
$Mailer->Password = '02984646#Lua';
//Nome Remetente
$Mailer->FromName = 'SISTEMAGSG - FATURAMENTO';

//Assunto
$Mailer->Subject = 'Acesso Placa - '.$PLACA_1.' | SistemaGSGV2.0';

$Mailer->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
//Conteúdo do Email
$Mailer->Body ="<strong> Registro inserido com sucesso!</strong> <br /><br />
<br /><br />

<strong>Chegada Usina</strong><br />
<strong>Acesso:</strong>	 $NACESSO <br />
<strong>Data:</strong>	 $DATAHJ <br />
<strong>Hora:</strong>  Teste <br />
<br />
Tenha um bom dia!<br /> <br />

Webmaster<br />
Esta é uma mensagem automática, por favor não responda!";

//Destinatário
$Mailer->AddAddress('junior@usga.com.br');
$Mailer->AddAttachment();
$Mailer->Send();*/
$pdf->OutPut();
?>
