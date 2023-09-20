<?php
$conn = mysqli_connect('localhost','id889153_id885499_junior19908','2613679cfc418651','sistemagsgposto');
$busca=$_POST['calendario'];
						//-------Busca por data & categoria---------
$sql = mysqli_query($conn, "SELECT * FROM tb_bomba WHERE date_bomba = '$busca' AND type_bomba = '2'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$bomba_1_final = $sqline['bomba1'];
		$bomba_2_final = $sqline['bomba2'];
		$bomba_3_final = $sqline['bomba3'];
		$bomba_4_final = $sqline['bomba4'];
		$bomba_5_final = $sqline['bomba5'];
		$bomba_7_final = $sqline['bomba7'];
		$bomba_8_final = $sqline['bomba8'];
	}
}
$sql1 = mysqli_query($conn, "SELECT * FROM tb_bomba WHERE date_bomba = '$busca' AND type_bomba = '1'");
$row1 = mysqli_num_rows($sql1);
if ($row1 > 0){
	while($sqline = mysqli_fetch_array($sql1)){
		$bomba_1_inicio = $sqline['bomba1'];
		$bomba_2_inicio = $sqline['bomba2'];
		$bomba_3_inicio = $sqline['bomba3'];
		$bomba_4_inicio = $sqline['bomba4'];
		$bomba_5_inicio = $sqline['bomba5'];
		$bomba_7_inicio = $sqline['bomba7'];
		$bomba_8_inicio = $sqline['bomba8'];
	}
}
//////////////////////////////////////////////////////////////////////////////----------///////////////////////////////////////////////////////////////////////////////////
$tanque_1 = mysqli_query($conn, "SELECT * FROM tb_tanque WHERE date = '$busca'");
$rowtanque_1 = mysqli_num_rows($tanque_1);
if ($rowtanque_1 > 0){
	while($sqline = mysqli_fetch_array($tanque_1)){
		$tanque_g = $sqline['tanque1'];
	}
}
$tanque_6 = mysqli_query($conn, "SELECT * FROM tb_tanque WHERE date = '$busca'");
$rowtanque_6 = mysqli_num_rows($tanque_6);
if ($rowtanque_6 > 0){
	while($sqline = mysqli_fetch_array($tanque_6)){
		$tanque_s10 = $sqline['tanque6'];
	}
}
$tanque_s500 = mysqli_query($conn, "SELECT SUM(tanque2 + tanque3 + tanque4 + tanque5) AS somatanque FROM tb_tanque WHERE date = '$busca'") or die(mysqli_error());
$cont9 = mysqli_fetch_array($tanque_s500);
$somatanque_s500 = $cont9['somatanque'];
//////////////////////////////////////////////////////////////////////////////----------///////////////////////////////////////////////////////////////////////////////////
$movimentogasolina = mysqli_query($conn, "SELECT * FROM tb_movimentos WHERE date = '$busca' AND cod_produto = '403'");
$rowmovimentgasolina = mysqli_num_rows($movimentogasolina);
if ($rowmovimentgasolina > 0){
	while($sqline = mysqli_fetch_array($movimentogasolina)){
		$movimentodiagasolina1 = $sqline['afericao'];
		$movimentodiagasolina2 = $sqline['entrada'];
		$movimentodiagasolina3 = $sqline['manutencao'];
		$movimentodiagasolina4 = $sqline['manutencao_saida'];
		$movimentodiagasolina5 = $sqline['abast_proprio'];
		$movimentodiagasolina6 = $sqline['fornec_cana'];
		$movimentodiagasolina7 = $sqline['funcionarios'];
		$movimentodiagasolina9 = $sqline['usina'];
		$movimentodiagasolina10 = $sqline['saldo_atual'];
		$movimentodiagasolina11 = $sqline['saldo_inicial'];
		$movimentodiagasolina12 = $sqline['terceiros'];
		$movimentodiagasolina13 = $sqline['comboio'];

	}
}

$movimentogasolina = mysqli_query($conn, "SELECT * FROM tb_movimentos WHERE date = '$busca' AND cod_produto = '404'");
$rowmovimentgasolina = mysqli_num_rows($movimentogasolina);
if ($rowmovimentgasolina > 0){
	while($sqline = mysqli_fetch_array($movimentogasolina)){
		$movimentodiadieselss1 = $sqline['afericao'];
		$movimentodiadieselss2 = $sqline['entrada'];
		$movimentodiadieselss3 = $sqline['manutencao'];
		$movimentodiadieselss4 = $sqline['manutencao_saida'];
		$movimentodiadieselss5 = $sqline['abast_proprio'];
		$movimentodiadieselss6 = $sqline['fornec_cana'];
		$movimentodiadieselss7 = $sqline['funcionarios'];
		$movimentodiadieselss9 = $sqline['usina'];
		$movimentodiadieselss10 = $sqline['saldo_atual'];
		$movimentodiadieselss11 = $sqline['saldo_inicial'];
		$movimentodiadieselss12 = $sqline['terceiros'];
		$movimentodiadieselss13 = $sqline['comboio'];

	}
}
////////////////////////////////////////////////////////////////////////////////////////////GASOLINA//////////////////////////////////////////////////////////////////////////////////////////////
$proprio3 = mysqli_query($conn, "SELECT SUM(litros) AS somapropriotres FROM tb_import WHERE date = '$busca' AND proprio_cod_veiculo BETWEEN '20010001' AND '44054027' AND cod_produto = '403'");
	$rowproprio3 = mysqli_num_rows($proprio3);
	if ($rowproprio3 > 0){
		while($sqline = mysqli_fetch_array($proprio3)){
			$proprio3_mov = $sqline['somapropriotres'];
		}
}
$funcionarios = mysqli_query($conn, "SELECT SUM(litros) AS somafuncionarios FROM tb_import WHERE date = '$busca' AND funcionario_cod_veiculo IS NOT NULL AND cod_produto = '403'");
	$rowfuncionarios = mysqli_num_rows($funcionarios);
	if ($rowfuncionarios > 0){
		while($sqline = mysqli_fetch_array($funcionarios)){
			$funcionarios_mov = $sqline['somafuncionarios'];
		}
}
$usina1 = mysqli_query($conn, "SELECT SUM(litros) AS totalafericao FROM tb_import WHERE date = '$busca' AND proprio_cod_veiculo BETWEEN '4000' AND '4600' AND cod_produto = '403'");
	$rowusina1 = mysqli_num_rows($usina1);
	if ($rowusina1 > 0){
		while($sqline = mysqli_fetch_array($usina1)){
			$usina1_mov = $sqline['totalafericao'];
		}
}
$outrosgasolina = mysqli_query($conn, "SELECT SUM(litros) AS somagasolina FROM tb_import WHERE date = '$busca' AND proprio_cod_veiculo BETWEEN '9001' AND '9009' AND cod_produto = '403'");
	$rowoutros403 = mysqli_num_rows($outrosgasolina);
	if ($rowoutros403 > 0){
		while($sqline = mysqli_fetch_array($outrosgasolina)){
			$outro403 = $sqline['somagasolina'];
		}
}
$AUTOSOMAAFERICAO2 = mysqli_query($conn, "SELECT SUM(litros) AS totalafericao FROM tb_import WHERE date = '$busca' AND proprio_cod_veiculo BETWEEN '9991' AND '9996' AND cod_produto = '403'");
	$rowafericao2 = mysqli_num_rows($AUTOSOMAAFERICAO2);
	if ($rowafericao2 > 0){
		while($sqline = mysqli_fetch_array($AUTOSOMAAFERICAO2)){
			$afericaosoma2 = $sqline['totalafericao'];
		}
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////SOMAS/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$totalsomabomba_1 = $bomba_1_final - $bomba_1_inicio;
$totalsomabomba_2 = $bomba_2_final - $bomba_2_inicio;
$totalsomabomba_3 = $bomba_3_final - $bomba_3_inicio;
$totalsomabomba_4 = $bomba_4_final - $bomba_4_inicio;
$totalsomabomba_5 = $bomba_5_final - $bomba_5_inicio;
$totalsomabomba_7 = $bomba_7_final - $bomba_7_inicio;
$totalsomabomba_8 = $bomba_8_final - $bomba_8_inicio;

$totals10 = $totalsomabomba_1 + $totalsomabomba_2 + $totalsomabomba_3 + $totalsomabomba_4 + $totalsomabomba_5;

//$totalsaldodia = $movimentodia3 + $movimentodia4 + $outro402 + $proprio_mov + $comboio +  $funcionariosdois_mov + $usina_mov;
$totalsaldodiagas = $outro403 + $movimentodiagasolina3 + $movimentodiagasolina4 + $proprio3_mov + $funcionarios_mov + $usina1_mov;
//$totalsaldodias10 = $movimentodias13 + $outro404 + $movimentodias14 + $proprio_mov2 + $comboios10 + $totalfornecedor + $usina2_mov + $funcionariostres_mov;
//$totalsaldoatual = $movimentodia11 + $movimentodia2 - ($movimentodia3 + $movimentodia4 + $proprio_mov + $comboio + $outro402 + $funcionariosdois_mov + $usina_mov);
$totalsaldoatualgas = ($movimentodiagasolina11 + $movimentodiagasolina2 - ($movimentodiagasolina3 + $movimentodiagasolina4 + $proprio3_mov + $funcionarios_mov + $outro403 + $usina1_mov));
//$totalsaldoatuals10 = ($movimentodiadieselss11 + $movimentodias12 - ($movimentodias13 + $movimentodias14 + $totalfornecedor + $proprio_mov2 + $comboios10 + $outro404 + $funcionariostres_mov + $usina2_mov));
//$saldoatual = ($movimentodia11 + $movimentodia2 - ($movimentodia3 + $movimentodia4 + $proprio_mov + $comboio + $outro402 + $funcionariosdois_mov + $usina_mov));
//$saldoatualgasolina = ($movimentodiagasolina11+$movimentodiagasolina2-($movimentodiagasolina3+$comboiogasolina+$movimentodiagasolina4+$proprio3_mov+$funcionarios_mov+$outro403+$usina1_mov));
//$saldoatuals10 = ($movimentodias11 + $movimentodias12 - ($movimentodias13 + $movimentodias14 + $comboios10 + $totalfornecedor + $proprio_mov2 + $outro404 + $funcionariostres_mov + $usina2_mov));