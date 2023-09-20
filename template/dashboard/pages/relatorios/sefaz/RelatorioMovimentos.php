<?php

//Verifica se o usuário esta logado
define('ROOT_PATH', dirname(__FILE__));
require_once '../../../../../include/verifica_user.php';
require('../../../../../controller/fpdf/fpdf.php');
session_start();
include_once('../../../../../controller/user.php');
define('FPDF_FONTPATH','font/');

$datafim = $_POST['calendario'];
$dateTime = new DateTime($datafim);
$mes = $dateTime->format('m');
$ano = $dateTime->format('Y');

$inicio = '2023-05-01';
$fim = '2023-05-31';

$dataInicioAvaliacao = DateTime::createFromFormat('d/m/Y', '02/09/2023');
$dataAtual = new DateTime();
$duracaoAvaliacao = $dataAtual->diff($dataInicioAvaliacao);
$duracaoAvaliacaolbl = $dataInicioAvaliacao->add(new DateInterval('P0D'))->diff($dataAtual);


if ($duracaoAvaliacaolbl->days > 0) {
// Calcula o número de dias restantes   
class PDF extends FPDF
{
  function Header(){
      $this->Image('../../../../../css/logo/usga.png',10,12,19);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../css/logo/DNV-GL-Certification-logo.png',210,13,18);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../css/logo/Logomarca_Bonsucro_2016.png',227,12,25);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../css/logo/renovabio.png',253,11,20);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->SetFont('Arial','B',15);//Definir Fonte e Tamanho
      $this->Cell(-1);//Mover para esquerda ou Direita
      $this->SetX(28);
      $this->Cell(30,10,'USINA SERRA GRANDE S/A',0,1,'L');
      $this->Ln(-4);//Quebra de Página
  //***********************************************************//
      $this->SetFont('Arial','I',10);
      $this->Cell(-1);
      $this->SetX(28);
      $this->Cell(30,10, utf8_decode('AÇÚCAR, ÁLCOOL & ENERGIA'),0,0,'L');
      $this->Ln(6);
  //***********************************************************//
      $this->SetFont('Arial','I',9);
      $this->Cell(-1);
      $this->SetX(28);
      $this->Cell(30,10, utf8_decode('DEMONSTRATIVO DE NOTAS FISCAIS NÃO REGISTRADAS NO SAP S/4 HANA'),0,0,'L');
      $this->Ln(12);
  //***********************************************************//

  }
    protected $widths;
    protected $aligns;

    function SetWidths($w)
    {
        // Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a)
    {
        // Set the array of column alignments
        $this->aligns = $a;
    }

    function Row($data)
    {
        // Calculate the height of the row
        $nb = 0;
        for($i=0;$i<count($data);$i++)
            $nb = max($nb,$this->NbLines($this->widths[$i],$data[$i]));
        $h = 5*$nb;
        // Issue a page break first if needed
        $this->CheckPageBreak($h);
        // Draw the cells of the row
        for($i=0;$i<count($data);$i++)
        {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            // Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            // Draw the border
            $this->Rect($x,$y,$w,$h);
            // Print the text
            $this->MultiCell($w,5,$data[$i],0,$a);
            // Put the position to the right of the cell
            $this->SetXY($x+$w,$y);
        }
        // Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h)
    {
        // If the height h would cause an overflow, add a new page immediately
        if($this->GetY()+$h>$this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt)
    {
        // Compute the number of lines a MultiCell of width w will take
        if(!isset($this->CurrentFont))
            $this->Error('No font has been set');
        $cw = $this->CurrentFont['cw'];
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $wmax = ($w-2*$this->cMargin)*1000/$this->FontSize;
        $s = str_replace("\r",'',(string)$txt);
        $nb = strlen($s);
        if($nb>0 && $s[$nb-1]=="\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while($i<$nb)
        {
            $c = $s[$i];
            if($c=="\n")
            {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if($c==' ')
                $sep = $i;
            $l += $cw[$c];
            if($l>$wmax)
            {
                if($sep==-1)
                {
                    if($i==$j)
                        $i++;
                }
                else
                    $i = $sep+1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            }
            else
                $i++;
        }
        return $nl;
    }
}


    // Calcula o número de dias restantes
    $lblperiodoAvaliacao = $duracaoAvaliacaolbl->days . " dias restantes";



$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,0,utf8_decode('PROGRAMA:'),0,0,'L');
$pdf->Cell(5,0,utf8_decode('SIGT - NOTAS FISCAIS EMITIDAS CONTRA SEU CNPJ'));
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,6,utf8_decode('USUÁRIO:'),0,0,'L');
$pdf->Cell(5,6,utf8_decode($nome),0,0,'L');
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,0,utf8_decode('DATA:'),0,0,'L');
$pdf->Cell(5,0,date("d/m/Y h:i:sa",strtotime(date("Y/m/d h:i:sa"))));
$pdf->Ln();

$pdf->SetY(43);
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,0,utf8_decode('MÊS REF.:'),0,0,'P');
$pdf->Cell(5,0,utf8_decode($mes.'/'.$ano));
$pdf->Ln();




$pdf->SetXY(11, 50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(15,4,utf8_decode('Nº NF-e'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(26, 50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(90,4,utf8_decode('EMPRESA'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(116, 50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(15,4,utf8_decode('EMISSÃO'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(131, 50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(65,4,utf8_decode('CHAVE DE ACESSO'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(196, 50);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(20, 4, utf8_decode('STATUS'), 1, 2, 'C'); 
// Use 'true' como último argumento para preencher a célula com a cor de fundo
//$pdf->SetFont('Arial', '', 8);
//$pdf->SetFillColor(235, 64, 52); // Cor laranja para a célula de "Status"
//$pdf->SetTextColor(255); // Cor do texto branca
//$pdf->Cell(30, 4, utf8_decode('NÃO LANÇADA'), 1, 2, 'C',true);
$pdf->Ln();
$pdf->SetFillColor(255); // Restaura a cor de fundo padrão (branca)
$pdf->SetTextColor(0); // Restaura a cor do texto padrão (preta)
$pdf->SetXY(216, 50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('NF-e R$'),1,2,'C');
$pdf->Ln();
$pdf->SetXY(236, 50);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,4,utf8_decode('NATUREZA DA OPERAÇÃO'),1,2,'C');
$pdf->Ln();

//$pdf->SetWidths(array(15, 83, 25, 70, 30, 30, 19));
//$pdf->SetAligns(array('C', 'L', 'C', 'C', 'C', 'C', 'R'));

// Configuração segura da conexão ao banco de dados
$servername = 'localhost';
$username = 'remoto';
$password = 'XTKfAFKPHNhWpSqW';
$dbname = 'sistemagsgxml';


$CONNECTIONINCLUDE = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($CONNECTIONINCLUDE->connect_error) {
    die('Falha na conexão: ' . $CONNECTIONINCLUDE->connect_error);
}

// Query usando Prepared Statement
$QUERY_CHAVE = $CONNECTIONINCLUDE->prepare("SELECT * FROM `tb_chave` WHERE MONTH(`emisao`) = ? AND YEAR(emisao) = ? AND status NOT IN ('CANCELADA','LANÇADA') ORDER BY `emisao` ASC");

// Define os parâmetros para a query


// Faz o bind dos parâmetros para o Prepared Statement
$QUERY_CHAVE->bind_param('ss', $mes,$ano);

// Executa a consulta
$QUERY_CHAVE->execute();

// Obtém os resultados
$result = $QUERY_CHAVE->get_result();

// Verifica se a consulta retornou resultados

// Restante do código para exibir os resultados
while ($row = $result->fetch_array()) {
    $pdf->SetFont('Arial','',7);
    $pdf->SetX(11);
    $pdf->Cell(15, 4, utf8_decode($row['n_nfe']), 1, 0, 'C');
    // Restante das células da linha
    $pdf->Cell(90, 4, utf8_decode($row['empresa']), 1, 0, 'L');
    $pdf->Cell(15, 4, date('d/m/Y', strtotime($row['emisao'])), 1, 0, 'C');
    // Cria um link na célula com o valor da chave
    $pdf->Cell(65, 4, utf8_decode($row['col_chave']), 1, 0, 'C', false, $row['col_link']);
    $pdf->Cell(20, 4, utf8_decode($row['status']), 1, 0, 'C');
    $pdf->Cell(20, 4, $row['vNF'], 1, 0, 'R');
    //$pdf->Cell(20, 4, 'R$: '.number_format($row['vNF'], 2, ',', '.'), 1, 0, 'R');
    $pdf->Cell(50, 4, strtoupper(substr(utf8_decode($row['natOp']), 0, 30)), 1, 2, 'L');
}

// Fecha o Prepared Statement
$QUERY_CHAVE->close();

// Query usando Prepared Statement
$QUERY_CHAVE = $CONNECTIONINCLUDE->prepare("SELECT COUNT(DISTINCT col_chave) AS total_chaves, SUM(REPLACE(REPLACE(REPLACE(vNF, 'R$', ''), '.', ''), ',', '.')) AS total_valores FROM tb_chave WHERE MONTH(`emisao`) = ? AND YEAR(emisao) = ? AND status NOT IN ('CANCELADA','LANÇADA')");

// Define os parâmetros para o Prepared Statement


// Faz o bind dos parâmetros para o Prepared Statement
$QUERY_CHAVE->bind_param('ss', $mes,$ano);

// Executa a consulta
$QUERY_CHAVE->execute();

// Obtém o resultado
$result = $QUERY_CHAVE->get_result();


// Verifica se a consulta retornou resultados
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_chaves = $row['total_chaves'];
    $total_valores = floatval($row['total_valores']);

    // Restante do código para exibir os resultados
    // Utilize as variáveis $total_chaves e $total_valores para obter a quantidade de chaves e o valor geral no período
    $pdf->Ln(1);
    $pdf->SetX(144);
    $pdf->SetFont('Arial', '', 7);
    $pdf->Cell(52, 4, 'Quantidade de Notas Fiscais', 1, 0, 'C');
    $pdf->Cell(20, 4, $total_chaves, 1, 0, 'C');
    $pdf->Cell(20, 4, 'R$: '.number_format($total_valores, 2, ',', '.'), 1, 0, 'C'); // Use 0 como último argumento para evitar a quebra de linha após a célula
    $pdf->Ln();
} else {
    echo 'Nenhum resultado encontrado';
}

// Fecha o Prepared Statement
$QUERY_CHAVE->close();





// Query usando Prepared Statement
$QUERY_CHAVE = $CONNECTIONINCLUDE->prepare("SELECT
c.ID,
c.col_chave,
c.empresa,
c.n_nfe,
c.emisao,
c.lancamento_sap,
c.protocolo,
c.user_sap,
c.status,
c.col_Downl,
c.col_link,
c.tpNF,
col_envioEmail,
c.vNF,
c.col_dataHoraCriacao,
h.col_historicoText
FROM
tb_chave c
INNER JOIN
tb_historiconfe h ON c.ID = h.col_nfe
WHERE
MONTH(c.emisao) = ? AND YEAR(c.emisao) = ?
AND c.status NOT IN ('CANCELADA', 'LANÇADA')
ORDER BY
c.empresa ASC");




// Faz o bind dos parâmetros para o Prepared Statement
$QUERY_CHAVE->bind_param('ii', $mes, $ano);

// Executa a consulta
$QUERY_CHAVE->execute();

// Obtém o resultado
$result = $QUERY_CHAVE->get_result();


// Verifica se a consulta retornou resultados
$y_position = 150; // Posição vertical inicial

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $texto_multilinha = $row['col_historicoText'];

        $largura_celula = 265;
        $altura_celula = 4;

        $pdf->SetXY(11, $y_position); // Define a posição
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->MultiCell($largura_celula, $altura_celula, utf8_decode($texto_multilinha), 1, 'L');

        $y_position += $altura_celula + 1; // Avança a posição vertical
    }
} 


// Fecha o Prepared Statement
$QUERY_CHAVE->close();

// Fecha a conexão com o banco de dados
$CONNECTIONINCLUDE->close();


//$texto_multilinha = "* Nota fiscal nº: 256839 - Capricche S.A., registrada no SAP com a chave de acesso incorreta.";


$pdf->OutPut(); 



} else {
    echo "Avaliação expirada";
}

?>
