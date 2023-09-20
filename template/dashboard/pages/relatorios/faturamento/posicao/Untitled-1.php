

include_once('ligacoes/vendaciasemanaquit.php');
include_once('ligacoes/ovalterada.php');

$pdf->SetX(10);
$pdf->SetFont('Arial', 'BI', 7);
$pdf->SetWidths(Array(91,18,15,17,15.5,20,18.5));
$pdf->SetAligns(Array('C','C','C','C','C','C','C','C'));
$pdf->SetLineHeight(4);

$pdf->Row(Array(
    utf8_decode('Vendas a Representantes - Quitadas'),
    utf8_decode('Contrato/OV'),
    utf8_decode('Data'),
    utf8_decode('Preço'),
    utf8_decode('Quant.'),
    utf8_decode('Saída'),
    utf8_decode('Saldo')
));
$pdf->Ln(0.7);

$pdf->SetFont('Arial','',5);
$pdf->SetWidths(Array(91,18,15,17,15.5,20,18.5));
$pdf->SetAligns(Array('L','C','C','R','R','R','R','R'));
$pdf->SetLineHeight(4);
include_once('ligacoes/requires/40000.php');
include_once('ligacoes/requires/40001.php');
include_once('ligacoes/requires/40002.php');
include_once('ligacoes/requires/40003.php');
include_once('ligacoes/requires/40004.php');
include_once('ligacoes/requires/40005.php');
include_once('ligacoes/requires/40006.php');
include_once('ligacoes/requires/40007.php');
include_once('ligacoes/requires/40008.php');
include_once('ligacoes/requires/40009.php');
include_once('ligacoes/requires/40010.php');
include_once('ligacoes/requires/40011.php');
include_once('ligacoes/requires/40012.php');
include_once('ligacoes/requires/40013.php');
include_once('ligacoes/requires/40014.php');
include_once('ligacoes/requires/40015.php');
include_once('ligacoes/requires/40016.php');
include_once('ligacoes/requires/40017.php');
include_once('ligacoes/requires/40018.php');
include_once('ligacoes/requires/40019.php');
include_once('ligacoes/requires/40020.php');
include_once('ligacoes/requires/40021.php');
include_once('ligacoes/requires/40022.php');
include_once('ligacoes/requires/40023.php');
include_once('ligacoes/requires/40024.php');
include_once('ligacoes/requires/40025.php');
include_once('ligacoes/requires/40026.php');
include_once('ligacoes/requires/40027.php');
include_once('ligacoes/requires/40028.php');
include_once('ligacoes/requires/40029.php');
include_once('ligacoes/requires/40030.php');
include_once('ligacoes/requires/40031.php');
include_once('ligacoes/requires/40032.php');
include_once('ligacoes/requires/40033.php');
include_once('ligacoes/requires/40034.php');
include_once('ligacoes/requires/40035.php');
include_once('ligacoes/requires/40036.php');
include_once('ligacoes/requires/40037.php');
include_once('ligacoes/requires/40038.php');
include_once('ligacoes/requires/40039.php');
include_once('ligacoes/requires/40040.php');
include_once('ligacoes/requires/40041.php');
include_once('ligacoes/requires/40042.php');
include_once('ligacoes/requires/40043.php');
include_once('ligacoes/requires/40044.php');
include_once('ligacoes/requires/40045.php');
include_once('ligacoes/requires/40046.php');
include_once('ligacoes/requires/40047.php');
include_once('ligacoes/requires/40048.php');
include_once('ligacoes/requires/40049.php');
include_once('ligacoes/requires/40050.php');
include_once('ligacoes/requires/40051.php');
include_once('ligacoes/requires/40052.php');
include_once('ligacoes/requires/40053.php');
include_once('ligacoes/requires/40054.php');
include_once('ligacoes/requires/40055.php');
include_once('ligacoes/requires/40056.php');
include_once('ligacoes/requires/40057.php');
include_once('ligacoes/requires/40058.php');
include_once('ligacoes/requires/40059.php');
include_once('ligacoes/requires/40060.php');
include_once('ligacoes/requires/40061.php');
include_once('ligacoes/requires/40062.php');
include_once('ligacoes/requires/40063.php');
include_once('ligacoes/requires/40064.php');
include_once('ligacoes/requires/40065.php');
include_once('ligacoes/requires/40066.php');
include_once('ligacoes/requires/40067.php');
include_once('ligacoes/requires/40068.php');
include_once('ligacoes/requires/40069.php');
include_once('ligacoes/requires/40070.php');
include_once('ligacoes/requires/40071.php');
include_once('ligacoes/requires/40072.php');
include_once('ligacoes/requires/40073.php');
include_once('ligacoes/requires/40074.php');
include_once('ligacoes/requires/40075.php');
include_once('ligacoes/requires/40076.php');
include_once('ligacoes/requires/40077.php');
include_once('ligacoes/requires/40078.php');
include_once('ligacoes/requires/40079.php');
include_once('ligacoes/requires/40080.php');
include_once('ligacoes/requires/40081.php');
include_once('ligacoes/requires/40082.php');
include_once('ligacoes/requires/40083.php');
include_once('ligacoes/requires/40084.php');
include_once('ligacoes/requires/40085.php');
include_once('ligacoes/requires/40086.php');
include_once('ligacoes/requires/40087.php');
include_once('ligacoes/requires/40088.php');
include_once('ligacoes/requires/40089.php');
include_once('ligacoes/requires/40090.php');
include_once('ligacoes/requires/40091.php');
include_once('ligacoes/requires/40092.php');
include_once('ligacoes/requires/40093.php');
include_once('ligacoes/requires/40094.php');
include_once('ligacoes/requires/40095.php');
include_once('ligacoes/requires/40096.php');
include_once('ligacoes/requires/40097.php');
include_once('ligacoes/requires/40098.php');
include_once('ligacoes/requires/40099.php');
include_once('ligacoes/requires/40100.php');
$RESULTADO = $S40000+$S40001+$S40002+$S40003+$S40004+$S40005+$S40006+$S40007+$S40008+$S40009+$S40010+$S40011+$S40012+$S40013+$S40014+$S40015+$S40016+$S40017+$S40018+$S40019+$S40020+$S40021+$S40022;
$pdf->SetX(101);
$pdf->SetFont('Arial', '', 6);
$pdf->Cell(104  , 4, utf8_decode('Sub-Total Venda a Representante na Semana:                           ') . number_format('0', 0, ',', '.') . '                                                         ' . number_format($RESULTADO, 0, ',', '.'), 1, 2, '');
$pdf->Cell(25, 4, utf8_decode(' '), 0, 2, 'C');
$pdf->SetX(10);
$pdf->Ln();

$pdf->SetX(10);
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(91, 4, utf8_decode('Vendas a Representantes na Semana - A quitar'), 1, 2, 'C');
$pdf->SetFont('Arial','',5);
$pdf->SetWidths(Array(91,18,15,17,15.5,20,18.5));
$pdf->SetAligns(Array('L','C','C','R','R','R','R','R'));
$pdf->SetLineHeight(4);
include_once('ligacoes/vendarepresemanaquit.php');
$pdf->SetX(101);
$pdf->SetFont('Arial', '', 6);
$pdf->Cell(104  , 4, utf8_decode('Sub-Total Venda a Representante na Semana:                           ') . number_format($TesteSOMA, 0, ',', '.') . '             ' . number_format('0', 0, ',', '.'), 1, 2, '');
$pdf->Cell(25, 4, utf8_decode(' '), 0, 2, 'C');
$pdf->SetX(10);
$pdf->AddPage();
$pdf->SetXY(10, 58);
$pdf->Cell(191, 52, utf8_decode(''), 1, 2, 'C');
$pdf->SetXY(10, 50);
$pdf->SetFont('Arial','',8);
$pdf->Cell(191,4,utf8_decode('AÇÚCAR CRISTAL'),1,2,'C');
$pdf->Ln();
$pdf->Cell(75.5,4,utf8_decode("Saldo das OV's do Mês /Semana Anterior"),1,2,'L');
$pdf->Cell(75.5,4,utf8_decode("Disponível na Semana Anterior"),1,2,'L');
$pdf->Cell(75.5,4,utf8_decode("Produção na Semana"),1,2,'L');
$pdf->Cell(75.5,4,utf8_decode("Vendas na Semana"),1,2,'L');
$pdf->Cell(75.5,4,utf8_decode("Alterações Ord. de Venda na Semana"),1,2,'L');
$pdf->Cell(75.5,4,utf8_decode("-x-"),1,2,'C');
$pdf->Cell(75.5,4,utf8_decode("Vendas Exportação"),1,2,'L');
$pdf->Cell(75.5,4,utf8_decode("Vendas a Representantes na Semana (quitadas)"),1,2,'L');
$pdf->Cell(75.5,4,utf8_decode("Vendas a Representantes na Semana (a quitar)"),1,2,'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(75.5,4,utf8_decode("Sub-Total"),1,2,'L');
$pdf->SetXY(85.5, 58);
$pdf->SetFont('Arial','',8);
$pdf->Cell(24.5,4,number_format("0", 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format("1248599", 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format("0", 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format("10610", 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format("2213", 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format("0", 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format("0", 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format("2090", 0, ',', '.'),1,2,'R');
$pdf->Cell(24.5,4,number_format("1500", 0, ',', '.'),1,2,'R');
$subtotal1 = "1232186";
$subtotal2 = "1232186";
$RESULTADO_DIF = $subtotal1 - $subtotal2;
$pdf->SetFont('Arial','B',8);
if ($subtotal1>$subtotal2) {
    $pdf->SetFillColor(242, 15, 15);
    $pdf->Cell(24.5,4,number_format($subtotal1, 0, ',', '.'),1,2,'R',true);
    $pdf->SetFillColor(242, 235, 15);
    $pdf->Cell(24.5,4,number_format($RESULTADO_DIF, 0, ',', '.'),1,2,'R',true);
}else{
    $pdf->Cell(24.5,4,number_format($subtotal1, 0, ',', '.'),1,2,'R');
}
$pdf->Ln();
$pdf->SetXY(110, 58);
$pdf->SetFont('Arial','',8);
$pdf->Cell(70,4,utf8_decode(' '),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Produção de Açúcar'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Saídas Para Venda'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Estoque Físico'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Saldo OV p/ Cia ( a quitar )'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Saldo OV p/ Cia ( quitadas )'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Saldo Vendas Exportação'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Saldo Vendas a Representantes (quitadas)'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Saldo Vendas a Representantes (a quitar)'),1,2,'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(70,4,utf8_decode('Sub-Total'),1,2,'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(70,4,utf8_decode('Saldo dos Contratos das Cias M.Interno'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Saldo dos Contratos M. Externo'),1,2,'L');
$pdf->Cell(70,4,utf8_decode('Disponível para Venda'),1,2,'L');
$pdf->Ln();
$pdf->SetXY(180, 58);
$pdf->SetFont('Arial','',8);
$pdf->Cell(21,4,utf8_decode(" "),1,2,'R');
$pdf->Cell(21,4,number_format("2080433", 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format("770591", 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format("1309842", 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format("62436", 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format("0", 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format("0", 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format("13200", 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format("2020", 0, ',', '.'),1,2,'R');
$pdf->SetFont('Arial','B',8);
if ($subtotal2>$subtotal1) {
    $pdf->SetFillColor(242, 15, 15);
    $pdf->Cell(21,4,number_format($subtotal2, 0, ',', '.'),1,2,'R',true);
    $pdf->SetXY(201, 94);
    $pdf->SetFillColor(242, 235, 15);
    $pdf->Cell(9,4,number_format($RESULTADO_DIF, 0, ',', '.'),1,2,'R',true);
}else{
    $pdf->SetXY(180, 94);
    $pdf->Cell(21,4,number_format($subtotal2, 0, ',', '.'),1,2,'R');
}
$pdf->SetXY(180, 98);
$pdf->SetFont('Arial','',8);
$pdf->Cell(21,4,number_format("8567", 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format("0", 0, ',', '.'),1,2,'R');
$pdf->Cell(21,4,number_format("1223619", 0, ',', '.'),1,2,'R');
$pdf->Ln();
/************************************************************************************/
$pdf->SetXY(10, 112);
$pdf->Cell(125, 90, utf8_decode(''), 1, 2, 'C');
$pdf->SetXY(10, 112);
$pdf->SetFont('Arial','',8);
$pdf->Cell(125,4,utf8_decode('Açúcar Cristal Mercado Interno Safra '. $SAFRA_ANT),0,2,'C');
$pdf->Cell(65,4,utf8_decode('Contratos'),0,2,'C');
$pdf->Cell(65,4,utf8_decode('Contrato Coca Cola ( Solar ) - Ret. Jan/Dez 2020'),0,2,'C');
/************************************************************************************/
$pdf->SetXY(75, 116);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,utf8_decode('Quant.'),0,2,'C');
$pdf->Cell(20,4,number_format('109229', 0, ',', '.'),0,2,'C');
/************************************************************************************/
$pdf->SetXY(95, 116);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,utf8_decode("OV's"),0,2,'C');
$pdf->Cell(20,4,number_format('100662', 0, ',', '.'),0,2,'C');
/************************************************************************************/
$pdf->SetXY(115, 116);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,utf8_decode("Saldo"),0,2,'C');
$pdf->Cell(20,4,number_format('8567', 0, ',', '.'),0,2,'C');
/************************************************************************************/
$pdf->SetXY(135, 112);
$pdf->Cell(66, 90, utf8_decode(''), 1, 2, 'C');
$pdf->SetXY(135, 112);
$pdf->SetFont('Arial','',8);
$pdf->Cell(66,4,utf8_decode('Açúcar V.H.P.'),0,2,'C');
$pdf->Cell(45,4,utf8_decode('Rem. Safra '. $SAFRA_ANT),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Produção '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Compra trapiche '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Total '),0,2,'L');
/************************************************************************************/
$pdf->SetXY(180, 116);
$pdf->SetFont('Arial','',8);
$pdf->Cell(21,4,number_format('4427', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('452137', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('456564', 0, ',', '.'),0,2,'R');
/************************************************************************************/
$pdf->SetXY(135, 132);
$pdf->SetFont('Arial','',8);
$pdf->Cell(66,4,utf8_decode('Estoques'),0,2,'C');
$pdf->Cell(45,4,utf8_decode('Estoque USGA '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Perdas Operacionais '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Estoque USGA '),0,2,'L');
/************************************************************************************/
$pdf->SetXY(180, 132);
$pdf->SetFont('Arial','',8);
$pdf->Cell(21,4,number_format(' '),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
/************************************************************************************/
$pdf->SetXY(135, 148);
$pdf->SetFont('Arial','',8);
$pdf->Cell(66,4,utf8_decode('Saídas'),0,2,'C');
$pdf->Cell(45,4,utf8_decode('Cota Americana '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Cota Europeia '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Venda ED&F Man '),0,2,'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(45,4,utf8_decode('Quantidade Entregue '),0,2,'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(45,4,utf8_decode('Remessa para EMPAT '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Saldo dos Contratos '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Perdas Operacionais '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Penalização '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Ajustes de penalização '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Rateio Empat '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Venda Caté ( Empre. ) '),0,2,'L');
$pdf->Cell(45,4,utf8_decode('Rateio Receb. Empat '),0,2,'L');
/************************************************************************************/
$pdf->SetXY(180, 148);
$pdf->SetFont('Arial','',8);
$pdf->Cell(21,4,number_format(' '),0,2,'R');
$pdf->Cell(21,4,number_format('268286', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('160264', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('27886', 0, ',', '.'),0,2,'R');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(21,4,number_format('456436', 0, ',', '.'),0,2,'R');
$pdf->SetFont('Arial','',8);
$pdf->Cell(21,4,number_format('452137', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('951', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
$pdf->Cell(21,4,number_format('823', 0, ',', '.'),0,2,'R');
/************************************************************************************/
$pdf->SetXY(10, 202);
$pdf->SetFont('Arial','BI',8);
$pdf->Cell(125,4,utf8_decode('Sub-total de Contratos '),1,2,'L');
/************************************************************************************/
$pdf->SetXY(75, 202);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,number_format('109229', 0, ',', '.'),0,2,'C');
/************************************************************************************/
$pdf->SetXY(95, 202);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,number_format('100662', 0, ',', '.'),0,2,'C');
/************************************************************************************/
$pdf->SetXY(115, 202);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,number_format('8567', 0, ',', '.'),0,2,'C');
/************************************************************************************/
$pdf->SetXY(135, 202);
$pdf->SetFont('Arial','BI',8);
$pdf->Cell(66,4,utf8_decode('Estoque Disponível '),1,2,'L');
/************************************************************************************/
$pdf->SetXY(180, 202);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(21,4,number_format('0', 0, ',', '.'),0,2,'R');
/************************************************************************************/
include_once('ligacoes/mercexterno.php');
$pdf->SetXY(10, 206);
$pdf->Cell(191, 8, utf8_decode(''), TLR, 2, 'C');
$pdf->SetXY(10, 206);
$pdf->SetFont('Arial','BI',8);
$pdf->Cell(191,4,utf8_decode('Açúcar Cristal Mercado Externo Safra '. $DESC_SAFRA),0,2,'C');
$pdf->Ln();

$pdf->SetXY(10, 210);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(40,4,utf8_decode('Contratos'), RBT,2,'C');

$pdf->SetXY(50, 210);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Pedido'), RBT,2,'C');

$pdf->SetXY(70, 210);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode('Qtd. Contrato'), RBT,2,'C');

$pdf->SetXY(90, 210);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode("Faturado"), RBT,2,'C');

$pdf->SetXY(110, 210);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode("A Faturar"), RBT,2,'C');

$pdf->SetXY(130, 210);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode("Entregue"), RBT,2,'C');

$pdf->SetXY(150, 210);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,4,utf8_decode("À Entreguar"), RBT,2,'C');
if ($MCARDOEXTENO7 > 0) {
    while ($LINIHA = $MCARDOEXTENO7->fetch_array()) {
        $pdf->SetXY(10, 214);
        $pdf->Cell(191, $LINIHA['HEIG']*4, utf8_decode(''), LRB, 2, 'C');
    }
}
$pdf->SetXY(10, 214);
$pdf->SetFont('Arial','',5);
if ($MCARDOEXTENO > 0) {
    while ($LINIHA = $MCARDOEXTENO->fetch_array()) {
        $pdf->Cell(40,4,utf8_decode($LINIHA['col_nome']), B,2,'L');
    }
}
$pdf->SetXY(50, 214);
if ($MCARDOEXTENO1 > 0) {
    while ($LINIHA = $MCARDOEXTENO1->fetch_array()) {
        $pdf->Cell(20,4,utf8_decode($LINIHA['col_nocontrato_cliente']), B,2,'C');
    }
}
$pdf->SetXY(70, 214);
if ($MCARDOEXTENO6 > 0) {
    while ($LINIHA = $MCARDOEXTENO6->fetch_array()) {
        $pdf->Cell(20,4,number_format($LINIHA['col_qtd_contrato'], 0, ',', '.'), B,2,'R');
    }
}
$pdf->SetXY(90, 214);
if ($MCARDOEXTENO2 > 0) {
    while ($LINIHA = $MCARDOEXTENO2->fetch_array()) {
        $pdf->Cell(20,4,number_format('0', 0, ',', '.'), B,2,'R');
    }
}

$pdf->SetXY(110, 214);
if ($MCARDOEXTENO3 > 0) {
    while ($LINIHA = $MCARDOEXTENO3->fetch_array()) {
        $pdf->Cell(20,4,number_format($LINIHA['col_qtd_pendente'], 0, ',', '.'), B,2,'R');
    }
}

$pdf->SetXY(130, 214);
if ($MCARDOEXTENO4 > 0) {
    while ($LINIHA = $MCARDOEXTENO4->fetch_array()) {
        $pdf->Cell(20,4,number_format('0', 0, ',', '.'), B,2,'R');
    }
}
$pdf->SetXY(150, 214);
if ($MCARDOEXTENO5 > 0) {
    while ($LINIHA = $MCARDOEXTENO5->fetch_array()) {
        $pdf->Cell(20,4,number_format('0', 0, ',', '.'), RB,2,'R');
    }
}
include_once('ligacoes/mercinternovhp.php');
if ($MCARDOEXTENO8 > 0) {
    while ($LINIHA = $MCARDOEXTENO8->fetch_array()) {
        /*Se a tabela Mercado Exteno tiver 4 Linhas ele adiciona a tabela VHP externo*/
        if ($LINIHA['HEIG']>0) {

            $pdf->SetXY(10, 230);
            $pdf->Cell(191, 8, utf8_decode(''), TLR, 2, 'C');

            $pdf->SetXY(10, 230);
            $pdf->SetFont('Arial','BI',8);
            $pdf->Cell(191,4,utf8_decode('Açúcar V.H.P. Mercado Externo Safra '. $DESC_SAFRA),0,2,'C');
            $pdf->Ln();

            $pdf->SetXY(10, 234);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(40,4,utf8_decode('Contratos'), RBT,2,'C');

            $pdf->SetXY(50, 234);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(20,4,utf8_decode('Pedido'), RBT,2,'C');

            $pdf->SetXY(70, 234);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(20,4,utf8_decode('Qtd. Contrato'), RBT,2,'C');

            $pdf->SetXY(90, 234);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(20,4,utf8_decode("Faturado"), RBT,2,'C');

            $pdf->SetXY(110, 234);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(20,4,utf8_decode("A Faturar"), RBT,2,'C');

            $pdf->SetXY(130, 234);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(20,4,utf8_decode("Entregue"), RBT,2,'C');

            $pdf->SetXY(150, 234);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(20,4,utf8_decode("À Entreguar"), RBT,2,'C');


            /*Fecha a tabela VHP com uma última linha */

            if ($MCARDOINTERNO7 > 0) {
                while ($LINIHA = $MCARDOINTERNO7->fetch_array()) {
                    $pdf->SetXY(10, 234);
                    $pdf->Cell(191, $LINIHA['HEIG']*4, utf8_decode(''), LRB, 2, 'C');
                }
            }
            $pdf->SetXY(10, 238);
            $pdf->SetFont('Arial','',5);
            if ($MCARDOINTERNO > 0) {
                while ($LINIHA = $MCARDOINTERNO->fetch_array()) {
                    $pdf->Cell(40,4,utf8_decode($LINIHA['col_nome']), B,2,'L');//Nome Contrato
                }
            }
            $pdf->SetXY(50, 238);
            if ($MCARDOINTERNO1 > 0) {
                while ($LINIHA = $MCARDOINTERNO1->fetch_array()) {
                    $pdf->Cell(20,4,utf8_decode($LINIHA['col_nocontrato_cliente']), B,2,'C');//Nome/Nº Pedido
                }
            }
            $pdf->SetXY(70, 238);
            if ($MCARDOINTERNO6 > 0) {
                while ($LINIHA = $MCARDOINTERNO6->fetch_array()) {
                    $pdf->Cell(20,4,number_format($LINIHA['col_qtd_contrato'], 0, ',', '.'), B,2,'R');//Quantidade Contrato
                }
            }

            $pdf->SetXY(90, 238);
            if ($MCARDOINTERNO2 > 0) {
                while ($LINIHA = $MCARDOINTERNO2->fetch_array()) {
                    $pdf->Cell(20,4,number_format('0', 0, ',', '.'), B,2,'R');
                }
            }
            
            $pdf->SetXY(110, 238);
            if ($MCARDOINTERNO3 > 0) {
                while ($LINIHA = $MCARDOINTERNO3->fetch_array()) {
                    $pdf->Cell(20,4,number_format($LINIHA['col_qtd_pendente'], 0, ',', '.'), B,2,'R');//Quantidade Entregue
                }
            }
            
            $pdf->SetXY(130, 238);
            if ($MCARDOINTERNO4 > 0) {
                while ($LINIHA = $MCARDOINTERNO4->fetch_array()) {
                    $pdf->Cell(20,4,number_format('0', 0, ',', '.'), B,2,'R');
                }
            }
            $pdf->SetXY(150, 238);
            if ($MCARDOINTERNO5 > 0) {
                while ($LINIHA = $MCARDOINTERNO5->fetch_array()) {
                    $pdf->Cell(20,4,number_format('0', 0, ',', '.'), RB,2,'R');
                }
            }
        }
        if ($LINIHA['HEIG']==5) {
            # code...
        }
    }
}
