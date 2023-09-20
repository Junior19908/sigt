<?php
error_reporting(0);
ini_set("display_errors", 0 );
define('ROOT_PATH', dirname(__FILE__));
require('../../../../../controller/fpdf/rotation.php'); 
define('FPDF_FONTPATH','font/');
class PDF extends FPDF
{
  function Header(){
    //DNV-GL-Certification-logo.png
      $this->Image('../../../../../css/logo/usga.png',222,10,20);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../css/logo/DNV-GL-Certification-logo.png',245,10,17);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
      $this->Image('../../../../../css/logo/Logomarca_Bonsucro_2016.png',262,8.5,25);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
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
      $this->Cell(30,10, utf8_decode('RELATÓRIO GERAL DE ENTRADA POR FORNECEDOR'),0,0,'L');
      $this->Ln(12);
  //***********************************************************//
        $this->SetFont('Arial','B',50);
        $this->SetTextColor(255,192,203);
        //$this->Image('../../../../../css/logo/usga.png',222,10,20);//Logo Mover para esquerda ou direita, Cima e Baixo & Tamanho.
        $this->RotatedText(100,175,utf8_decode('Avaliação de Testes'),45);
    }
    var $angleL=0;
    function Rotate($angleL,$xL=-1,$yL=-1)
{
    if($xL==-1)
        $xL=$this->xL;
    if($yL==-1)
        $yL=$this->yL;
    if($this->angleL!=0)
        $this->_out('Q');
    $this->angleL=$angleL;
    if($angleL!=0)
    {
        $angleL*=M_PI/180;
        $c=cos($angleL);
        $s=sin($angleL);
        $cxL=$xL*$this->k;
        $cyL=($this->h-$yL)*$this->k;
        $this->_out(sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm',$c,$s,-$s,$c,$cxL,$cyL,-$cxL,-$cyL));
    }
}

function _endpage()
{
    if($this->angleL!=0)
    {
        $this->angleL=0;
        $this->_out('Q');
    }
    parent::_endpage();
}
  function RotatedText($xL, $yL, $txt, $angleL){
        //Text rotated around its origin
        $this->Rotate($angleL, $xL,$yL);
        $this->Text($xL,$yL,$txt);
        $this->Rotate(0);
    }
  function Footer(){
      $this->SetY(-20);
      $this->SetFont('Arial','I',8);
      $this->Cell(0,10,utf8_decode('Página ').$this->PageNo(),0,0,'C');
      //$this->Image('../../../../../css/logo/bulb-s.png',280,192,10);
      $this->Image('../../../../../css/logo/sap-s4-Hana.png',10,193,7);
    }
    var $widths;
    var $aligns;
    function SetWidths($w)
    {
        //Set the array of column widths
        $this->widths=$w;
    }
    function SetAligns($a)
    {
        //Set the array of column alignments
        $this->aligns=$a;
    }
    function Row($data)
    {
        //Calculate the height of the row
        $nb=0;
        for($i=0;$i<count($data);$i++)
            $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
        $h=5*$nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        for($i=0;$i<count($data);$i++)
        {
            $w=$this->widths[$i];
            $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x=$this->GetX();
            $y=$this->GetY();
            //Draw the border
            $this->Rect($x,$y,$w,$h);
            //Print the text
            $this->MultiCell($w,5,$data[$i],0,$a);
            //Put the position to the right of the cell
            $this->SetXY($x+$w,$y);
        }
        //Go to the next line
        $this->Ln($h);
    }
    function CheckPageBreak($h)
    {
        //If the height h would cause an overflow, add a new page immediately
        if($this->GetY()+$h>$this->PageBreakTrigger)

        $this->AddPage($this->CurOrientation);
    }
    function NbLines($w,$txt)
    {
        //Computes the number of lines a MultiCell of width w will take
        $cw=&$this->CurrentFont['cw'];
        if($w==0)
            $w=$this->w-$this->rMargin-$this->x;
        $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
        $s=str_replace("\r",'',$txt);
        $nb=strlen($s);
        if($nb>0 and $s[$nb-1]=="\n")
            $nb--;
        $sep=-1;
        $i=0;
        $j=0;
        $l=0;
        $nl=1;
        while($i<$nb)
        {
            $c=$s[$i];
            if($c=="\n")
            {
                $i++;
                $sep=-1;
                $j=$i;
                $l=0;
                $nl++;
                continue;
            }
            if($c==' ')
                $sep=$i;
            $l+=$cw[$c];
            if($l>$wmax)
            {
                if($sep==-1)
                {
                    if($i==$j)
                        $i++;
                }
                else
                    $i=$sep+1;
                $sep=-1;
                $j=$i;
                $l=0;
                $nl++;
            }
            else
                $i++;
        }
        return $nl;
    }






protected $T128;                                         // Tableau des codes 128
protected $ABCset = "";                                  // jeu des caractères éligibles au C128
protected $Aset = "";                                    // Set A du jeu des caractères éligibles
protected $Bset = "";                                    // Set B du jeu des caractères éligibles
protected $Cset = "";                                    // Set C du jeu des caractères éligibles
protected $SetFrom;                                      // Convertisseur source des jeux vers le tableau
protected $SetTo;                                        // Convertisseur destination des jeux vers le tableau
protected $JStart = array("A"=>103, "B"=>104, "C"=>105); // Caractères de sélection de jeu au début du C128
protected $JSwap = array("A"=>101, "B"=>100, "C"=>99);   // Caractères de changement de jeu

//____________________________ Extension du constructeur _______________________
function __construct($orientation='P', $unit='mm', $format='A4') {

    parent::__construct($orientation,$unit,$format);

    $this->T128[] = array(2, 1, 2, 2, 2, 2);           //0 : [ ]               // composition des caractères
    $this->T128[] = array(2, 2, 2, 1, 2, 2);           //1 : [!]
    $this->T128[] = array(2, 2, 2, 2, 2, 1);           //2 : ["]
    $this->T128[] = array(1, 2, 1, 2, 2, 3);           //3 : [#]
    $this->T128[] = array(1, 2, 1, 3, 2, 2);           //4 : [$]
    $this->T128[] = array(1, 3, 1, 2, 2, 2);           //5 : [%]
    $this->T128[] = array(1, 2, 2, 2, 1, 3);           //6 : [&]
    $this->T128[] = array(1, 2, 2, 3, 1, 2);           //7 : [']
    $this->T128[] = array(1, 3, 2, 2, 1, 2);           //8 : [(]
    $this->T128[] = array(2, 2, 1, 2, 1, 3);           //9 : [)]
    $this->T128[] = array(2, 2, 1, 3, 1, 2);           //10 : [*]
    $this->T128[] = array(2, 3, 1, 2, 1, 2);           //11 : [+]
    $this->T128[] = array(1, 1, 2, 2, 3, 2);           //12 : [,]
    $this->T128[] = array(1, 2, 2, 1, 3, 2);           //13 : [-]
    $this->T128[] = array(1, 2, 2, 2, 3, 1);           //14 : [.]
    $this->T128[] = array(1, 1, 3, 2, 2, 2);           //15 : [/]
    $this->T128[] = array(1, 2, 3, 1, 2, 2);           //16 : [0]
    $this->T128[] = array(1, 2, 3, 2, 2, 1);           //17 : [1]
    $this->T128[] = array(2, 2, 3, 2, 1, 1);           //18 : [2]
    $this->T128[] = array(2, 2, 1, 1, 3, 2);           //19 : [3]
    $this->T128[] = array(2, 2, 1, 2, 3, 1);           //20 : [4]
    $this->T128[] = array(2, 1, 3, 2, 1, 2);           //21 : [5]
    $this->T128[] = array(2, 2, 3, 1, 1, 2);           //22 : [6]
    $this->T128[] = array(3, 1, 2, 1, 3, 1);           //23 : [7]
    $this->T128[] = array(3, 1, 1, 2, 2, 2);           //24 : [8]
    $this->T128[] = array(3, 2, 1, 1, 2, 2);           //25 : [9]
    $this->T128[] = array(3, 2, 1, 2, 2, 1);           //26 : [:]
    $this->T128[] = array(3, 1, 2, 2, 1, 2);           //27 : [;]
    $this->T128[] = array(3, 2, 2, 1, 1, 2);           //28 : [<]
    $this->T128[] = array(3, 2, 2, 2, 1, 1);           //29 : [=]
    $this->T128[] = array(2, 1, 2, 1, 2, 3);           //30 : [>]
    $this->T128[] = array(2, 1, 2, 3, 2, 1);           //31 : [?]
    $this->T128[] = array(2, 3, 2, 1, 2, 1);           //32 : [@]
    $this->T128[] = array(1, 1, 1, 3, 2, 3);           //33 : [A]
    $this->T128[] = array(1, 3, 1, 1, 2, 3);           //34 : [B]
    $this->T128[] = array(1, 3, 1, 3, 2, 1);           //35 : [C]
    $this->T128[] = array(1, 1, 2, 3, 1, 3);           //36 : [D]
    $this->T128[] = array(1, 3, 2, 1, 1, 3);           //37 : [E]
    $this->T128[] = array(1, 3, 2, 3, 1, 1);           //38 : [F]
    $this->T128[] = array(2, 1, 1, 3, 1, 3);           //39 : [G]
    $this->T128[] = array(2, 3, 1, 1, 1, 3);           //40 : [H]
    $this->T128[] = array(2, 3, 1, 3, 1, 1);           //41 : [I]
    $this->T128[] = array(1, 1, 2, 1, 3, 3);           //42 : [J]
    $this->T128[] = array(1, 1, 2, 3, 3, 1);           //43 : [K]
    $this->T128[] = array(1, 3, 2, 1, 3, 1);           //44 : [L]
    $this->T128[] = array(1, 1, 3, 1, 2, 3);           //45 : [M]
    $this->T128[] = array(1, 1, 3, 3, 2, 1);           //46 : [N]
    $this->T128[] = array(1, 3, 3, 1, 2, 1);           //47 : [O]
    $this->T128[] = array(3, 1, 3, 1, 2, 1);           //48 : [P]
    $this->T128[] = array(2, 1, 1, 3, 3, 1);           //49 : [Q]
    $this->T128[] = array(2, 3, 1, 1, 3, 1);           //50 : [R]
    $this->T128[] = array(2, 1, 3, 1, 1, 3);           //51 : [S]
    $this->T128[] = array(2, 1, 3, 3, 1, 1);           //52 : [T]
    $this->T128[] = array(2, 1, 3, 1, 3, 1);           //53 : [U]
    $this->T128[] = array(3, 1, 1, 1, 2, 3);           //54 : [V]
    $this->T128[] = array(3, 1, 1, 3, 2, 1);           //55 : [W]
    $this->T128[] = array(3, 3, 1, 1, 2, 1);           //56 : [X]
    $this->T128[] = array(3, 1, 2, 1, 1, 3);           //57 : [Y]
    $this->T128[] = array(3, 1, 2, 3, 1, 1);           //58 : [Z]
    $this->T128[] = array(3, 3, 2, 1, 1, 1);           //59 : [[]
    $this->T128[] = array(3, 1, 4, 1, 1, 1);           //60 : [\]
    $this->T128[] = array(2, 2, 1, 4, 1, 1);           //61 : []]
    $this->T128[] = array(4, 3, 1, 1, 1, 1);           //62 : [^]
    $this->T128[] = array(1, 1, 1, 2, 2, 4);           //63 : [_]
    $this->T128[] = array(1, 1, 1, 4, 2, 2);           //64 : [`]
    $this->T128[] = array(1, 2, 1, 1, 2, 4);           //65 : [a]
    $this->T128[] = array(1, 2, 1, 4, 2, 1);           //66 : [b]
    $this->T128[] = array(1, 4, 1, 1, 2, 2);           //67 : [c]
    $this->T128[] = array(1, 4, 1, 2, 2, 1);           //68 : [d]
    $this->T128[] = array(1, 1, 2, 2, 1, 4);           //69 : [e]
    $this->T128[] = array(1, 1, 2, 4, 1, 2);           //70 : [f]
    $this->T128[] = array(1, 2, 2, 1, 1, 4);           //71 : [g]
    $this->T128[] = array(1, 2, 2, 4, 1, 1);           //72 : [h]
    $this->T128[] = array(1, 4, 2, 1, 1, 2);           //73 : [i]
    $this->T128[] = array(1, 4, 2, 2, 1, 1);           //74 : [j]
    $this->T128[] = array(2, 4, 1, 2, 1, 1);           //75 : [k]
    $this->T128[] = array(2, 2, 1, 1, 1, 4);           //76 : [l]
    $this->T128[] = array(4, 1, 3, 1, 1, 1);           //77 : [m]
    $this->T128[] = array(2, 4, 1, 1, 1, 2);           //78 : [n]
    $this->T128[] = array(1, 3, 4, 1, 1, 1);           //79 : [o]
    $this->T128[] = array(1, 1, 1, 2, 4, 2);           //80 : [p]
    $this->T128[] = array(1, 2, 1, 1, 4, 2);           //81 : [q]
    $this->T128[] = array(1, 2, 1, 2, 4, 1);           //82 : [r]
    $this->T128[] = array(1, 1, 4, 2, 1, 2);           //83 : [s]
    $this->T128[] = array(1, 2, 4, 1, 1, 2);           //84 : [t]
    $this->T128[] = array(1, 2, 4, 2, 1, 1);           //85 : [u]
    $this->T128[] = array(4, 1, 1, 2, 1, 2);           //86 : [v]
    $this->T128[] = array(4, 2, 1, 1, 1, 2);           //87 : [w]
    $this->T128[] = array(4, 2, 1, 2, 1, 1);           //88 : [x]
    $this->T128[] = array(2, 1, 2, 1, 4, 1);           //89 : [y]
    $this->T128[] = array(2, 1, 4, 1, 2, 1);           //90 : [z]
    $this->T128[] = array(4, 1, 2, 1, 2, 1);           //91 : [{]
    $this->T128[] = array(1, 1, 1, 1, 4, 3);           //92 : [|]
    $this->T128[] = array(1, 1, 1, 3, 4, 1);           //93 : [}]
    $this->T128[] = array(1, 3, 1, 1, 4, 1);           //94 : [~]
    $this->T128[] = array(1, 1, 4, 1, 1, 3);           //95 : [DEL]
    $this->T128[] = array(1, 1, 4, 3, 1, 1);           //96 : [FNC3]
    $this->T128[] = array(4, 1, 1, 1, 1, 3);           //97 : [FNC2]
    $this->T128[] = array(4, 1, 1, 3, 1, 1);           //98 : [SHIFT]
    $this->T128[] = array(1, 1, 3, 1, 4, 1);           //99 : [Cswap]
    $this->T128[] = array(1, 1, 4, 1, 3, 1);           //100 : [Bswap]                
    $this->T128[] = array(3, 1, 1, 1, 4, 1);           //101 : [Aswap]
    $this->T128[] = array(4, 1, 1, 1, 3, 1);           //102 : [FNC1]
    $this->T128[] = array(2, 1, 1, 4, 1, 2);           //103 : [Astart]
    $this->T128[] = array(2, 1, 1, 2, 1, 4);           //104 : [Bstart]
    $this->T128[] = array(2, 1, 1, 2, 3, 2);           //105 : [Cstart]
    $this->T128[] = array(2, 3, 3, 1, 1, 1);           //106 : [STOP]
    $this->T128[] = array(2, 1);                       //107 : [END BAR]

    for ($i = 32; $i <= 95; $i++) {                                            // jeux de caractères
        $this->ABCset .= chr($i);
    }
    $this->Aset = $this->ABCset;
    $this->Bset = $this->ABCset;
    
    for ($i = 0; $i <= 31; $i++) {
        $this->ABCset .= chr($i);
        $this->Aset .= chr($i);
    }
    for ($i = 96; $i <= 127; $i++) {
        $this->ABCset .= chr($i);
        $this->Bset .= chr($i);
    }
    for ($i = 200; $i <= 210; $i++) {                                           // controle 128
        $this->ABCset .= chr($i);
        $this->Aset .= chr($i);
        $this->Bset .= chr($i);
    }
    $this->Cset="0123456789".chr(206);

    for ($i=0; $i<96; $i++) {                                                   // convertisseurs des jeux A & B
        @$this->SetFrom["A"] .= chr($i);
        @$this->SetFrom["B"] .= chr($i + 32);
        @$this->SetTo["A"] .= chr(($i < 32) ? $i+64 : $i-32);
        @$this->SetTo["B"] .= chr($i);
    }
    for ($i=96; $i<107; $i++) {                                                 // contrôle des jeux A & B
        @$this->SetFrom["A"] .= chr($i + 104);
        @$this->SetFrom["B"] .= chr($i + 104);
        @$this->SetTo["A"] .= chr($i);
        @$this->SetTo["B"] .= chr($i);
    }
}

//________________ Fonction encodage et dessin du code 128 _____________________
function Code128($x, $y, $code, $w, $h) {
    $Aguid = "";                                                                      // Création des guides de choix ABC
    $Bguid = "";
    $Cguid = "";
    for ($i=0; $i < strlen($code); $i++) {
        $needle = substr($code,$i,1);
        $Aguid .= ((strpos($this->Aset,$needle)===false) ? "N" : "O"); 
        $Bguid .= ((strpos($this->Bset,$needle)===false) ? "N" : "O"); 
        $Cguid .= ((strpos($this->Cset,$needle)===false) ? "N" : "O");
    }

    $SminiC = "OOOO";
    $IminiC = 4;

    $crypt = "";
    while ($code > "") {
                                                                                    // BOUCLE PRINCIPALE DE CODAGE
        $i = strpos($Cguid,$SminiC);                                                // forçage du jeu C, si possible
        if ($i!==false) {
            $Aguid [$i] = "N";
            $Bguid [$i] = "N";
        }

        if (substr($Cguid,0,$IminiC) == $SminiC) {                                  // jeu C
            $crypt .= chr(($crypt > "") ? $this->JSwap["C"] : $this->JStart["C"]);  // début Cstart, sinon Cswap
            $made = strpos($Cguid,"N");                                             // étendu du set C
            if ($made === false) {
                $made = strlen($Cguid);
            }
            if (fmod($made,2)==1) {
                $made--;                                                            // seulement un nombre pair
            }
            for ($i=0; $i < $made; $i += 2) {
                $crypt .= chr(strval(substr($code,$i,2)));                          // conversion 2 par 2
            }
            $jeu = "C";
        } else {
            $madeA = strpos($Aguid,"N");                                            // étendu du set A
            if ($madeA === false) {
                $madeA = strlen($Aguid);
            }
            $madeB = strpos($Bguid,"N");                                            // étendu du set B
            if ($madeB === false) {
                $madeB = strlen($Bguid);
            }
            $made = (($madeA < $madeB) ? $madeB : $madeA );                         // étendu traitée
            $jeu = (($madeA < $madeB) ? "B" : "A" );                                // Jeu en cours

            $crypt .= chr(($crypt > "") ? $this->JSwap[$jeu] : $this->JStart[$jeu]); // début start, sinon swap

            $crypt .= strtr(substr($code, 0,$made), $this->SetFrom[$jeu], $this->SetTo[$jeu]); // conversion selon jeu

        }
        $code = substr($code,$made);                                           // raccourcir légende et guides de la zone traitée
        $Aguid = substr($Aguid,$made);
        $Bguid = substr($Bguid,$made);
        $Cguid = substr($Cguid,$made);
    }                                                                          // FIN BOUCLE PRINCIPALE

    $check = ord($crypt[0]);                                                   // calcul de la somme de contrôle
    for ($i=0; $i<strlen($crypt); $i++) {
        $check += (ord($crypt[$i]) * $i);
    }
    $check %= 103;

    $crypt .= chr($check) . chr(106) . chr(107);                               // Chaine cryptée complète

    $i = (strlen($crypt) * 11) - 8;                                            // calcul de la largeur du module
    $modul = $w/$i;

    for ($i=0; $i<strlen($crypt); $i++) {                                      // BOUCLE D'IMPRESSION
        $c = $this->T128[ord($crypt[$i])];
        for ($j=0; $j<count($c); $j++) {
            $this->Rect($x,$y,$c[$j]*$modul,$h,"F");
            $x += ($c[$j++]+$c[$j])*$modul;
        }
    }
}


}


date_default_timezone_set('America/Maceio');
$DATAHJ = strftime('%d de %B de %Y', strtotime('today'));
//COLOCAR OS DEVIDOS NOMES NAS VARIAVEIS
$linhaDeTitulo = 50;
$linhaFornecedor = 55;
$linhaItens = 60;
$primeiroColuna = 10; $primeiroColunaTamanho = 14;
$sgundaColuna = 24; $sgundaColunaTamanho = 65;
$depositoColuna = 89; $depositoColunaTamanho = 15;
$marcaColuna = 104; $marcaColunaTamanho = 32.5;
$referenciaColuna = 136.5; $referenciaColunaTamanho = 27.5;
$pedido = 164; $pedidoTamanho = 15;
$notaFiscal = 179; $notaFiscalTamanho = 12;
$requisicao = 191; $requisicaoTamanho = 12;
$depto = 203; $deptoTamanho = 10;
$requisitante = 213; $requisitanteTamanho = 20;
$ddataPedido = 233; $ddataPedidoTamanho = 13;
$quantidadePedido = 246; $quantidadePedidoTamanho = 12;
$unidadeMedida = 258; $unidadeMedidaTamanho = 7;
$valorTotalItemPedido = 265; $valorTotalItemPedidoTamanho = 22;
//------------------------------------------------------------//
$CONNECTIONINCLUDE = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgalmoxarifado');
include_once('reqPer.php');

$datainicio = $DATAINI;
$datafim = $DATAFIM;
$nomeUser = "CARLOS JOSE DE SOUZA BRITO JUNIOR";
$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','',8);
$pdf->Cell(18,0,utf8_decode('PROGRAMA:'),0,0,'L');
$pdf->Cell(5,0,utf8_decode('SAP'));
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,6,utf8_decode('USUÁRIO:'),0,0,'L');
$pdf->Cell(5,6,utf8_decode($nomeUser),0,0,'L');
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,0,utf8_decode('DATA:'),0,0,'L');
$pdf->Cell(5, 0, date("d/m/Y"));
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,7,utf8_decode('PERÍODO:'),0,0,'P');
$pdf->Cell(5,7,date("d/m/Y",strtotime($datainicio)));
$pdf->SetX(46);
$pdf->Cell(18,7,utf8_decode('Até'),0,0,'P');
$pdf->SetX(54);
$pdf->Cell(5,7,date("d/m/Y",strtotime($datafim)));
$pdf->Ln();


$pdf->SetXY($primeiroColuna, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($primeiroColunaTamanho, 4, utf8_decode('MATERIAL'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($sgundaColuna, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($sgundaColunaTamanho, 4, utf8_decode('DESCRIÇÃO'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($depositoColuna, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($depositoColunaTamanho, 4, utf8_decode('DEPÓSITO'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($marcaColuna, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($marcaColunaTamanho, 4, utf8_decode('MARCA'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($referenciaColuna, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($referenciaColunaTamanho, 4, utf8_decode('REFERÊNCIA'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($pedido, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($pedidoTamanho, 4, utf8_decode('PEDIDO'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($notaFiscal, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($notaFiscalTamanho, 4, utf8_decode('NF'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($requisicao, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 6.5);
$pdf->Cell($requisicaoTamanho, 4, utf8_decode('RC'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($depto, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($deptoTamanho, 4, utf8_decode('DEPTO'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($requisitante, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($requisitanteTamanho, 4, utf8_decode('REQUISIT.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($ddataPedido, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($ddataPedidoTamanho, 4, utf8_decode('DATA'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($quantidadePedido, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($quantidadePedidoTamanho, 4, utf8_decode('QTD.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($unidadeMedida, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($unidadeMedidaTamanho, 4, utf8_decode('UN.'), 1, 2, 'C');
$pdf->Ln();
$pdf->SetXY($valorTotalItemPedido, $linhaDeTitulo);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell($valorTotalItemPedidoTamanho, 4, utf8_decode('VALOR TOTAL'), 1, 2, 'C');
$pdf->Ln();
//-----------------------------------------------------------------------------------------------------------------------------------
$pdf->SetWidths(array($primeiroColunaTamanho, $sgundaColunaTamanho, $depositoColunaTamanho, $marcaColunaTamanho, $referenciaColunaTamanho, $pedidoTamanho, $notaFiscalTamanho,$requisicaoTamanho,$deptoTamanho,$requisitanteTamanho,$ddataPedidoTamanho,$quantidadePedidoTamanho,$unidadeMedidaTamanho,$valorTotalItemPedidoTamanho,20,20,20,20,20,20));
$pdf->SetAligns(array('C', 'L', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'R', 'R', 'C', 'R'));
//-----------------------------------------------------------------------------------------------------------------------------------
$MATERIAL = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_relatorioentradafornecedor` ORDER BY `col_descricaoFornecedor` ASC");
$COSULTORDQUIT = mysqli_num_rows($MATERIAL);
$pf = 40000 + $COSULTORDQUIT;
for ($i=40000; $i < $pf; $i++) { 
    include_once('requires/'.$i.'.php');
}
require('SomaRel.php');
$pdf->Ln();
$pdf->Ln();
//$pdf->SetY(-70);
$pdf->SetX(126);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(40,4,utf8_decode('Valor Total de Materiais:'),1,2,'C');
$pdf->Cell(40,4,'R$: '.number_format($TOTALMATERIAL, 2, ',', '.'),1,2,'C');
$pdf->Ln();



$pdf->SetXY(10, 170);
$pdf->SetFont('Arial','',8);
$pdf->Cell(65,4,utf8_decode('--------------------------------------------------'),0,1,'C',false);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(65,4,utf8_decode('Conferente'),0,1,'C',false);
$pdf->Cell(65,4,utf8_decode('Glebson Teixeira da Silva'),0,1,'C',false);


$pdf->SetXY(235, 170);
$pdf->SetFont('Arial','',8);
$pdf->Cell(50,4,utf8_decode('--------------------------------------------------'),0,1,'C');
$pdf->SetXY(235, 174);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(50,4,utf8_decode('Almoxarife'),0,1,'C');
$pdf->SetXY(235, 178);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(50,4,utf8_decode('Rodolfo Valerio da Silva'),0,1,'C');

$pdf->AddPage('L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,0,utf8_decode('PROGRAMA:'),0,0,'L');
$pdf->Cell(5,0,utf8_decode('SistemaGSG - PHP/HTML'));
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,6,utf8_decode('USUÁRIO:'),0,0,'L');
$pdf->Cell(5,6,utf8_decode($nomeUser),0,0,'L');
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,0,utf8_decode('DATA:'),0,0,'L');
$pdf->Cell(5, 0, date("d/m/Y"));
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(18,7,utf8_decode('PERÍODO:'),0,0,'P');
$pdf->Cell(5,7,date("d/m/Y",strtotime($datainicio)));
$pdf->SetX(46);
$pdf->Cell(18,7,utf8_decode('Até'),0,0,'P');
$pdf->SetX(54);
$pdf->Cell(5,7,date("d/m/Y",strtotime($datafim)));
$pdf->Ln();
$pdf->SetXY($primeiroColuna, $linhaDeTitulo);
$pdf->SetFont('Arial', 'BI',21);
$pdf->Cell(277, 10, utf8_decode('RELATÓRIO DE SERVIÇOS'), 1, 2, 'C');
$pdf->Ln(3);
$pdf->SetWidths(array(10, 130, $depositoColunaTamanho, $pedidoTamanho, 25,20,10,20,32));
$pdf->SetAligns(array('C', 'L', 'C', 'C', 'C', 'C', 'C', 'C', 'R'));
for ($i=40000; $i < $pf; $i++) { 
    include_once('requires/servico/'.$i.'.php');
}
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
//$pdf->SetY(-70);
$pdf->SetX(126);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(40,4,utf8_decode('Valor Total de Serviços:'),1,2,'C');
$pdf->Cell(40,4,'R$: '.number_format($TOTALSERVICO, 2, ',', '.'),1,2,'C');


$pdf->SetXY(10, 170);
$pdf->SetFont('Arial','',8);
$pdf->Cell(65,4,utf8_decode('--------------------------------------------------'),0,1,'C',false);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(65,4,utf8_decode('Conferente'),0,1,'C',false);
$pdf->Cell(65,4,utf8_decode('Glebson Teixeira da Silva'),0,1,'C',false);


$pdf->SetXY(235, 170);
$pdf->SetFont('Arial','',8);
$pdf->Cell(50,4,utf8_decode('--------------------------------------------------'),0,1,'C');
$pdf->SetXY(235, 174);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(50,4,utf8_decode('Almoxarife'),0,1,'C');
$pdf->SetXY(235, 178);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(50,4,utf8_decode('Rodolfo Valerio da Silva'),0,1,'C');

//$CodigoBarras = $datainicio. ' ' .$datafim. ' ' .Rand(). ' ' . $nomeUser;

$CodigoBarras = $datainicio. ' ' .$datafim. ' ' .Rand();

$pdf->Code128(75,170,$CodigoBarras,150,12);



//$SQL = mysqli_query($CONNECTIONINCLUDE, "INSERT INTO `tb_urlpasta` (`col_nomeArquivo`, `col_dataGeracao`) VALUES ('$CodigoBarras', NOW())");
//$SQL1 = mysqli_query($CONNECTIONINCLUDE, "INSERT INTO `tb_pasta` (`col_UrlPasta`) VALUES ('$URLPASTAQ')");


//$pdf->OutPut(F,"$URLPASTAQ".$CodigoBarras.".pdf");
//header("Refresh:0; url=../");
$pdf->OutPut(I,"".$CodigoBarras.".pdf");
?>
