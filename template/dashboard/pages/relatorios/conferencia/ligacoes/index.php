<?php
include_once ROOT_PATH. '../../../../../../class/Conexao.class.php';
error_reporting(0);
ini_set("display_errors", 0 );
$busca=$_POST['calendario'];
$CupomSession = $_SESSION['calendario'];
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
//////////////////////////////////////////////////////////////////////////////--Tanque--///////////////////////////////////////////////////////////////////////////////////

$sql = mysqli_query($conn, "SELECT * FROM tb_tanque WHERE date = '$busca'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$tanque_2 = $sqline['tanque2'];
		$tanque_3 = $sqline['tanque3'];
		$tanque_4 = $sqline['tanque4'];
		$tanque_5 = $sqline['tanque5'];
		$tanque_61 = $sqline['tanque6'];
	}
}
//////////////////////////////////////////////////////////////////////////////----------///////////////////////////////////////////////////////////////////////////////////
$SQL = mysqli_query($conn, "SELECT * FROM tb_tanque WHERE date = '$busca'");
$ROW = mysqli_num_rows($SQL);
if ($ROW > 0){
	while($sqline = mysqli_fetch_array($SQL)){
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

$movimentodiesel = mysqli_query($conn, "SELECT * FROM tb_movimentos WHERE date = '$busca' AND cod_produto = '404'");
$rowmovimentdiesel = mysqli_num_rows($movimentodiesel);
if ($rowmovimentdiesel > 0){
	while($sqline = mysqli_fetch_array($movimentodiesel)){
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
/*................................................................................................PROPRIO................................................................................................*/
$SQL = mysqli_query($conn, "SELECT SUM(litros) AS TOTAL FROM tb_import WHERE date = '$busca' AND proprio_cod_veiculo BETWEEN '20010001' AND '44054027' AND cod_produto = '403'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINEPROPRIOG = $sqline['TOTAL'];
		}
}
$SQL = mysqli_query($conn, "SELECT SUM(litros) AS somapropriodois FROM tb_import WHERE date = '$busca' AND proprio_cod_veiculo BETWEEN '20010001' AND '44054027' AND cod_produto = '404'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINEPROPRIOD = $sqline['somapropriodois'];
		}
}
/*................................................................................................FUNCIONÁRIO.............................................................................................*/
$SQL = mysqli_query($conn, "SELECT SUM(litros) AS TOTAL FROM tb_import WHERE date = '$busca' AND funcionario_cod_veiculo IS NOT NULL AND cod_produto = '403'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINEFUNCIONARIOG = $sqline['TOTAL'];
		}
}
$SQL = mysqli_query($conn, "SELECT SUM(litros) AS TOTAL FROM tb_import WHERE date = '$busca' AND funcionario_cod_veiculo IS NOT NULL AND cod_produto = '404'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINEFUNCIONARIOD = $sqline['TOTAL'];
		}
}
/*................................................................................................USINA...................................................................................................*/
$SQL = mysqli_query($conn, "SELECT SUM(litros) AS TOTAL FROM tb_import WHERE date = '$busca' AND proprio_cod_veiculo BETWEEN '4000' AND '4600' AND cod_produto = '403'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINEUSINAG = $sqline['TOTAL'];
		}
}
$SQL = mysqli_query($conn, "SELECT SUM(litros) AS TOTAL FROM tb_import WHERE date = '$busca' AND proprio_cod_veiculo BETWEEN '4000' AND '4600' AND cod_produto = '404'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINEUSINAD = $sqline['TOTAL'];
		}
}
/*................................................................................................OUTROS...................................................................................................*/
$SQL = mysqli_query($conn, "SELECT SUM(litros) AS TOTAL FROM tb_import WHERE date = '$busca' AND proprio_cod_veiculo BETWEEN '9000' AND '9010' AND cod_produto = '403'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINEOUTROG = $sqline['TOTAL'];
		}
}
$SQL = mysqli_query($conn, "SELECT SUM(litros) AS TOTAL FROM tb_import WHERE date = '$busca' AND proprio_cod_veiculo BETWEEN '9000' AND '9010' AND cod_produto = '404'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINEOUTROD = $sqline['TOTAL'];
		}
}
/*................................................................................................AFERIÇÃO................................................................................................*/
$SQL = mysqli_query($conn, "SELECT SUM(litros) AS TOTAL FROM tb_import WHERE date = '$busca' AND proprio_cod_veiculo BETWEEN '9991' AND '9996' AND cod_produto = '403'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINEAFERICAOG = $sqline['TOTAL'];
		}
}
$SQL = mysqli_query($conn, "SELECT SUM(litros) AS TOTAL FROM tb_import WHERE date = '$busca' AND proprio_cod_veiculo BETWEEN '9991' AND '9996' AND cod_produto = '404'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINEAFERICAOD = $sqline['TOTAL'];
		}
}
/*................................................................................................FORNECEDOR DE CANA.......................................................................................*/
$SQL = mysqli_query($conn, "SELECT SUM(litros) AS TOTAL FROM tb_import WHERE date = '$busca' AND fornecedor_cod_veiculo IS NOT NULL AND cod_produto = '404'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINEFORNECEDORD = $sqline['TOTAL'];
		}
}

$SQL = mysqli_query($conn, "SELECT SUM(litros) AS TOTAL FROM tb_import WHERE date = '$busca' AND fornecedor_cod_veiculo IS NOT NULL AND cod_produto = '403'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINEFORNECEDORG = $sqline['TOTAL'];
		}
}

/*................................................................................................COMBOIO.................................................................................................*/
$SQL = mysqli_query($conn, "SELECT SUM(litros) AS TOTAL FROM tb_import WHERE date = '$busca' AND proprio_cod_veiculo BETWEEN '3000' AND '3999' AND cod_produto = '403'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINECOMBOIOG = $sqline['TOTAL'];
		}
}
$SQL = mysqli_query($conn, "SELECT SUM(litros) AS TOTAL FROM tb_import WHERE date = '$busca' AND proprio_cod_veiculo BETWEEN '3000' AND '3999' AND cod_produto = '404'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINECOMBOIOD = $sqline['TOTAL'];
		}
}
/*................................................................................................NOTAFISCAL.................................................................................................*/
$SQL = mysqli_query($conn, "SELECT SUM(qtd) AS TOTAL FROM tb_notafiscal WHERE data = '$busca' AND cod_produto = '404'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINESOMANFD = $sqline['TOTAL'];
		}
}
$SQL = mysqli_query($conn, "SELECT SUM(qtd) AS TOTAL FROM tb_notafiscal WHERE data = '$busca' AND cod_produto = '403'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINESOMANFG = $sqline['TOTAL'];
		}
}
$SQL = mysqli_query($conn, "INSERT INTO `tb_tarefas` (`id_tarefa`, `titulo`, `marqCheck`, `data`, `date_now`, `hora`, `id_user`) VALUES (NULL, 'Relatório de Conferência Gerado', 'checked', '$busca', NOW(), NOW(), '$id_userr')");
/*................................................................................................SOMAS...................................................................................................*/
$totalsomabomba_1 = $bomba_1_final - $bomba_1_inicio;
$totalsomabomba_2 = $bomba_2_final - $bomba_2_inicio;
$totalsomabomba_3 = $bomba_3_final - $bomba_3_inicio;
$totalsomabomba_4 = $bomba_4_final - $bomba_4_inicio;
$totalsomabomba_5 = $bomba_5_final - $bomba_5_inicio;
$totalsomabomba_7 = $bomba_7_final - $bomba_7_inicio;
$totalsomabomba_8 = $bomba_8_final - $bomba_8_inicio;

$totals10 = $totalsomabomba_1 + $totalsomabomba_2 + $totalsomabomba_3 + $totalsomabomba_4 + $totalsomabomba_5;

$TOTALSAIDASG = $SQLINEPROPRIOG + $SQLINEFUNCIONARIOG + $SQLINEUSINAG + $SQLINECOMBOIOG + $SQLINEFORNECEDORG + $SQLINEOUTROG + $movimentodiagasolina4;
$TOTALSALDOATUALG = ($movimentodiagasolina11 + $movimentodiagasolina3 + $SQLINESOMANFG - ($TOTALSAIDASG));

$TOTALSAIDASD = $SQLINEPROPRIOD + $SQLINEFUNCIONARIOD + $SQLINEUSINAD + $SQLINECOMBOIOD + $SQLINEFORNECEDORD + $SQLINEOUTROD + $movimentodiadieselss4;
$TOTALSALDOATUALD = ($movimentodiadieselss11 + $movimentodiadieselss3 + $SQLINESOMANFD - ($TOTALSAIDASD));

$TOTALTANQUED = $tanque_2 + $tanque_3 + $tanque_4 + $tanque_5 + $tanque_61;

/**....................................................Update da Tabela Movimentos - Quando Terminar criar um php para sempre executar essas query's...................................................**/

$QUERYMYSQL = "UPDATE `tb_movimentos` SET `fornec_cana` = '$SQLINEFORNECEDORD' WHERE `date` = '$busca' AND `cod_produto`= '404' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);
$QUERYMYSQL = "UPDATE `tb_movimentos` SET `abast_proprio` = '$SQLINEPROPRIOD' WHERE `date` = '$busca' AND `cod_produto`= '404' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);
$QUERYMYSQL = "UPDATE `tb_movimentos` SET `funcionarios` = '$SQLINEFUNCIONARIOD' WHERE `date` = '$busca' AND `cod_produto`= '404' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);
$QUERYMYSQL = "UPDATE `tb_movimentos` SET `usina` = '$SQLINEUSINAD' WHERE `date` = '$busca' AND `cod_produto`= '404' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);
$QUERYMYSQL = "UPDATE `tb_movimentos` SET `terceiros` = '$SQLINEOUTROD' WHERE `date` = '$busca' AND `cod_produto`= '404' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);
$QUERYMYSQL = "UPDATE `tb_movimentos` SET `comboio` = '$SQLINECOMBOIOD' WHERE `date` = '$busca' AND `cod_produto`= '404' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);
$QUERYMYSQL = "UPDATE `tb_movimentos` SET `entrada` = '$SQLINESOMANFD' WHERE `date` = '$busca' AND `cod_produto`= '404' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);
$QUERYMYSQL = "UPDATE `tb_movimentos` SET `afericao` = '$SQLINEAFERICAOD' WHERE `date` = '$busca' AND `cod_produto`= '404' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);


$QUERYMYSQL = "UPDATE `tb_movimentos` SET `fornec_cana` = '$SQLINEFORNECEDORG' WHERE `date` = '$busca' AND `cod_produto`= '403' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);
$QUERYMYSQL = "UPDATE `tb_movimentos` SET `abast_proprio` = '$SQLINEPROPRIOG' WHERE `date` = '$busca' AND `cod_produto`= '403' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);
$QUERYMYSQL = "UPDATE `tb_movimentos` SET `funcionarios` = '$SQLINEFUNCIONARIOG' WHERE `date` = '$busca' AND `cod_produto`= '403' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);
$QUERYMYSQL = "UPDATE `tb_movimentos` SET `usina` = '$SQLINEUSINAG' WHERE `date` = '$busca' AND `cod_produto`= '403' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);
$QUERYMYSQL = "UPDATE `tb_movimentos` SET `terceiros` = '$SQLINEOUTROG' WHERE `date` = '$busca' AND `cod_produto`= '403' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);
$QUERYMYSQL = "UPDATE `tb_movimentos` SET `comboio` = '$SQLINECOMBOIOG' WHERE `date` = '$busca' AND `cod_produto`= '403' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);
$QUERYMYSQL = "UPDATE `tb_movimentos` SET `entrada` = '$SQLINESOMANFG' WHERE `date` = '$busca' AND `cod_produto`= '403' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);
$QUERYMYSQL = "UPDATE `tb_movimentos` SET `afericao` = '$SQLINEAFERICAOG' WHERE `date` = '$busca' AND `cod_produto`= '403' ";
$UPDATE = mysqli_query($conn,$QUERYMYSQL);

//*****************Modificar Data********//
$DateDia = date('d', strtotime($busca . "+1 days"));
$DateT = date('y-m-d', strtotime($busca . "+1 days"));
//***************************************//
$SQL = mysqli_query($conn, "SELECT * FROM `tb_movimentos` WHERE date = '$DateT' AND cod_produto = '403'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW == 0){
		$QUERYMYSQL = "INSERT INTO `tb_movimentos` (`id_movimentos`, `afericao`, `entrada`, `manutencao`, `manutencao_saida`, `abast_proprio`, `fornec_cana`, `funcionarios`, `usina`, `terceiros`, `comboio`, `saldo_atual`, `saldo_inicial`, `cod_produto`, `date`, `dia`, `now_date`, `id_user`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$TOTALSALDOATUALG', '403', '$DateT', '$DateDia', NOW(), '1')";
		$INSERT = mysqli_query($conn,$QUERYMYSQL);
	}else{
		$QUERYMYSQLVERIFICACAOGASOLINA = "UPDATE `tb_movimentos` SET `saldo_inicial` = '$TOTALSALDOATUALG' WHERE `date` = '$DateT' AND `cod_produto`= '403' ";
		$UPDATE = mysqli_query($conn,$QUERYMYSQLVERIFICACAOGASOLINA);
	}
$SQL = mysqli_query($conn, "SELECT * FROM `tb_movimentos` WHERE date = '$DateT' AND cod_produto = '404'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW == 0){
		$QUERYMYSQL = "INSERT INTO `tb_movimentos` (`id_movimentos`, `afericao`, `entrada`, `manutencao`, `manutencao_saida`, `abast_proprio`, `fornec_cana`, `funcionarios`, `usina`, `terceiros`, `comboio`, `saldo_atual`, `saldo_inicial`, `cod_produto`, `date`, `dia`, `now_date`, `id_user`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$TOTALSALDOATUALD', '404', '$DateT', '$DateDia', NOW(), '1')";
		$INSERT = mysqli_query($conn,$QUERYMYSQL);
	}else{
		$QUERYMYSQLVERIFICACAODIESEL = "UPDATE `tb_movimentos` SET `saldo_inicial` = '$TOTALSALDOATUALD' WHERE `date` = '$DateT' AND `cod_produto`= '404' ";
		$UPDATE = mysqli_query($conn,$QUERYMYSQLVERIFICACAODIESEL);
	}

$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_import` WHERE date = '$busca'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SAFRA = $sqline['date_year'];
	}
}
?>