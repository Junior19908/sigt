<?php
include_once ROOT_PATH. '../../../../../../class/Conexao.class.php';
error_reporting(0);
ini_set("display_errors", 0 );
$inicio=$_POST['calendarioINICIO'];
$fim=$_POST['calendarioFIM'];
$SelecaoCombustivel=$_POST['SelectComb'];
//-------Busca por data & categoria---------//
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='01'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI1 = $sqline['saldo_inicial'];
		$ENTRADA1 = $sqline['entrada'];
		$PROPRIO1 = $sqline['abast_proprio'];
		$AFERICAO1 = $sqline['afericao'];
		$COMBOIO1 = $sqline['comboio'];
		$FORNECEDOR1 = $sqline['fornec_cana'];
		$FUNCIONARIO1 = $sqline['funcionarios'];
		$USINA1 = $sqline['usina'];
		$TERCEIROS1 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='02'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI2 = $sqline['saldo_inicial'];
		$ENTRADA2 = $sqline['entrada'];
		$PROPRIO2 = $sqline['abast_proprio'];
		$AFERICAO2 = $sqline['afericao'];
		$COMBOIO2 = $sqline['comboio'];
		$FORNECEDOR2 = $sqline['fornec_cana'];
		$FUNCIONARIO2 = $sqline['funcionarios'];
		$USINA2 = $sqline['usina'];
		$TERCEIROS2 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='03'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI3 = $sqline['saldo_inicial'];
		$ENTRADA3 = $sqline['entrada'];
		$PROPRIO3 = $sqline['abast_proprio'];
		$AFERICAO3 = $sqline['afericao'];
		$COMBOIO3 = $sqline['comboio'];
		$FORNECEDOR3 = $sqline['fornec_cana'];
		$FUNCIONARIO3 = $sqline['funcionarios'];
		$USINA3 = $sqline['usina'];
		$TERCEIROS3 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='04'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI4 = $sqline['saldo_inicial'];
		$ENTRADA4 = $sqline['entrada'];
		$PROPRIO4 = $sqline['abast_proprio'];
		$AFERICAO4 = $sqline['afericao'];
		$COMBOIO4 = $sqline['comboio'];
		$FORNECEDOR4 = $sqline['fornec_cana'];
		$FUNCIONARIO4 = $sqline['funcionarios'];
		$USINA4 = $sqline['usina'];
		$TERCEIROS4 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='05'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI5 = $sqline['saldo_inicial'];
		$ENTRADA5 = $sqline['entrada'];
		$PROPRIO5 = $sqline['abast_proprio'];
		$AFERICAO5 = $sqline['afericao'];
		$COMBOIO5 = $sqline['comboio'];
		$FORNECEDOR5 = $sqline['fornec_cana'];
		$FUNCIONARIO5 = $sqline['funcionarios'];
		$USINA5 = $sqline['usina'];
		$TERCEIROS5 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='06'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI6 = $sqline['saldo_inicial'];
		$ENTRADA6 = $sqline['entrada'];
		$PROPRIO6 = $sqline['abast_proprio'];
		$AFERICAO6 = $sqline['afericao'];
		$COMBOIO6 = $sqline['comboio'];
		$FORNECEDOR6 = $sqline['fornec_cana'];
		$FUNCIONARIO6 = $sqline['funcionarios'];
		$USINA6 = $sqline['usina'];
		$TERCEIROS6 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='07'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI7= $sqline['saldo_inicial'];
		$ENTRADA7= $sqline['entrada'];
		$PROPRIO7= $sqline['abast_proprio'];
		$AFERICAO7 = $sqline['afericao'];
		$COMBOIO7 = $sqline['comboio'];
		$FORNECEDOR7 = $sqline['fornec_cana'];
		$FUNCIONARIO7 = $sqline['funcionarios'];
		$USINA7 = $sqline['usina'];
		$TERCEIROS7 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='08'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI8 = $sqline['saldo_inicial'];
		$ENTRADA8= $sqline['entrada'];
		$PROPRIO8= $sqline['abast_proprio'];
		$AFERICAO8 = $sqline['afericao'];
		$COMBOIO8 = $sqline['comboio'];
		$FORNECEDOR8 = $sqline['fornec_cana'];
		$FUNCIONARIO8 = $sqline['funcionarios'];
		$USINA8 = $sqline['usina'];
		$TERCEIROS8 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='09'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI9 = $sqline['saldo_inicial'];
		$ENTRADA9= $sqline['entrada'];
		$PROPRIO9 = $sqline['abast_proprio'];
		$AFERICAO9 = $sqline['afericao'];
		$COMBOIO9 = $sqline['comboio'];
		$FORNECEDOR9 = $sqline['fornec_cana'];
		$FUNCIONARIO9 = $sqline['funcionarios'];
		$USINA9 = $sqline['usina'];
		$TERCEIROS9 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='10'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI10 = $sqline['saldo_inicial'];
		$ENTRADA10= $sqline['entrada'];
		$PROPRIO10= $sqline['abast_proprio'];
		$AFERICAO10 = $sqline['afericao'];
		$COMBOIO10 = $sqline['comboio'];
		$FORNECEDOR10 = $sqline['fornec_cana'];
		$FUNCIONARIO10 = $sqline['funcionarios'];
		$USINA10 = $sqline['usina'];
		$TERCEIROS10 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='11'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI11 = $sqline['saldo_inicial'];
		$ENTRADA11= $sqline['entrada'];
		$PROPRIO11= $sqline['abast_proprio'];
		$AFERICAO11 = $sqline['afericao'];
		$COMBOIO11 = $sqline['comboio'];
		$FORNECEDOR11 = $sqline['fornec_cana'];
		$FUNCIONARIO11 = $sqline['funcionarios'];
		$USINA11 = $sqline['usina'];
		$TERCEIROS11 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='12'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI12 = $sqline['saldo_inicial'];
		$ENTRADA12= $sqline['entrada'];
		$PROPRIO12= $sqline['abast_proprio'];
		$AFERICAO12 = $sqline['afericao'];
		$COMBOIO12 = $sqline['comboio'];
		$FORNECEDOR12 = $sqline['fornec_cana'];
		$FUNCIONARIO12 = $sqline['funcionarios'];
		$USINA12 = $sqline['usina'];
		$TERCEIROS12 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='13'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI13 = $sqline['saldo_inicial'];
		$ENTRADA13= $sqline['entrada'];
		$PROPRIO13= $sqline['abast_proprio'];
		$AFERICAO13 = $sqline['afericao'];
		$COMBOIO13 = $sqline['comboio'];
		$FORNECEDOR13 = $sqline['fornec_cana'];
		$FUNCIONARIO13 = $sqline['funcionarios'];
		$USINA13 = $sqline['usina'];
		$TERCEIROS13 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='14'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI14 = $sqline['saldo_inicial'];
		$ENTRADA14= $sqline['entrada'];
		$PROPRIO14= $sqline['abast_proprio'];
		$AFERICAO14 = $sqline['afericao'];
		$COMBOIO14 = $sqline['comboio'];
		$FORNECEDOR14 = $sqline['fornec_cana'];
		$FUNCIONARIO14 = $sqline['funcionarios'];
		$USINA14 = $sqline['usina'];
		$TERCEIROS14 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='15'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI15 = $sqline['saldo_inicial'];
		$ENTRADA15= $sqline['entrada'];
		$PROPRIO15= $sqline['abast_proprio'];
		$AFERICAO15 = $sqline['afericao'];
		$COMBOIO15 = $sqline['comboio'];
		$FORNECEDOR15 = $sqline['fornec_cana'];
		$FUNCIONARIO15 = $sqline['funcionarios'];
		$USINA15 = $sqline['usina'];
		$TERCEIROS15 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='16'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI16 = $sqline['saldo_inicial'];
		$ENTRADA16= $sqline['entrada'];
		$PROPRIO16= $sqline['abast_proprio'];
		$AFERICAO16 = $sqline['afericao'];
		$COMBOIO16 = $sqline['comboio'];
		$FORNECEDOR16 = $sqline['fornec_cana'];
		$FUNCIONARIO16 = $sqline['funcionarios'];
		$USINA16 = $sqline['usina'];
		$TERCEIROS16 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='17'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI17 = $sqline['saldo_inicial'];
		$ENTRADA17= $sqline['entrada'];
		$PROPRIO17= $sqline['abast_proprio'];
		$AFERICAO17 = $sqline['afericao'];
		$COMBOIO17 = $sqline['comboio'];
		$FORNECEDOR17 = $sqline['fornec_cana'];
		$FUNCIONARIO17 = $sqline['funcionarios'];
		$USINA17 = $sqline['usina'];
		$TERCEIROS17 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='18'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI18 = $sqline['saldo_inicial'];
		$ENTRADA18= $sqline['entrada'];
		$PROPRIO18= $sqline['abast_proprio'];
		$AFERICAO18 = $sqline['afericao'];
		$COMBOIO18 = $sqline['comboio'];
		$FORNECEDOR18 = $sqline['fornec_cana'];
		$FUNCIONARIO18 = $sqline['funcionarios'];
		$USINA18 = $sqline['usina'];
		$TERCEIROS18 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='19'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI19 = $sqline['saldo_inicial'];
		$ENTRADA19= $sqline['entrada'];
		$PROPRIO19= $sqline['abast_proprio'];
		$AFERICAO19 = $sqline['afericao'];
		$COMBOIO19 = $sqline['comboio'];
		$FORNECEDOR19 = $sqline['fornec_cana'];
		$FUNCIONARIO19 = $sqline['funcionarios'];
		$USINA19 = $sqline['usina'];
		$TERCEIROS19 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='20'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI20 = $sqline['saldo_inicial'];
		$ENTRADA20= $sqline['entrada'];
		$PROPRIO20= $sqline['abast_proprio'];
		$AFERICAO20 = $sqline['afericao'];
		$COMBOIO20 = $sqline['comboio'];
		$FORNECEDOR20 = $sqline['fornec_cana'];
		$FUNCIONARIO20 = $sqline['funcionarios'];
		$USINA20 = $sqline['usina'];
		$TERCEIROS20 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='21'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI21 = $sqline['saldo_inicial'];
		$ENTRADA21= $sqline['entrada'];
		$PROPRIO21= $sqline['abast_proprio'];
		$AFERICAO21 = $sqline['afericao'];
		$COMBOIO21 = $sqline['comboio'];
		$FORNECEDOR21 = $sqline['fornec_cana'];
		$FUNCIONARIO21 = $sqline['funcionarios'];
		$USINA21 = $sqline['usina'];
		$TERCEIROS21 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='22'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI22 = $sqline['saldo_inicial'];
		$ENTRADA22= $sqline['entrada'];
		$PROPRIO22= $sqline['abast_proprio'];
		$AFERICAO22 = $sqline['afericao'];
		$COMBOIO22 = $sqline['comboio'];
		$FORNECEDOR22 = $sqline['fornec_cana'];
		$FUNCIONARIO22 = $sqline['funcionarios'];
		$USINA22 = $sqline['usina'];
		$TERCEIROS22 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='23'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI23 = $sqline['saldo_inicial'];
		$ENTRADA23= $sqline['entrada'];
		$PROPRIO23= $sqline['abast_proprio'];
		$AFERICAO23 = $sqline['afericao'];
		$COMBOIO23 = $sqline['comboio'];
		$FORNECEDOR23 = $sqline['fornec_cana'];
		$FUNCIONARIO23 = $sqline['funcionarios'];
		$USINA23 = $sqline['usina'];
		$TERCEIROS23 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='24'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI24 = $sqline['saldo_inicial'];
		$ENTRADA24= $sqline['entrada'];
		$PROPRIO24= $sqline['abast_proprio'];
		$AFERICAO24 = $sqline['afericao'];
		$COMBOIO24 = $sqline['comboio'];
		$FORNECEDOR24 = $sqline['fornec_cana'];
		$FUNCIONARIO24 = $sqline['funcionarios'];
		$USINA24 = $sqline['usina'];
		$TERCEIROS24 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='25'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI25 = $sqline['saldo_inicial'];
		$ENTRADA25= $sqline['entrada'];
		$PROPRIO25= $sqline['abast_proprio'];
		$AFERICAO25 = $sqline['afericao'];
		$COMBOIO25 = $sqline['comboio'];
		$FORNECEDOR25 = $sqline['fornec_cana'];
		$FUNCIONARIO25 = $sqline['funcionarios'];
		$USINA25 = $sqline['usina'];
		$TERCEIROS25 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='26'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI26 = $sqline['saldo_inicial'];
		$ENTRADA26= $sqline['entrada'];
		$PROPRIO26= $sqline['abast_proprio'];
		$AFERICAO26 = $sqline['afericao'];
		$COMBOIO26 = $sqline['comboio'];
		$FORNECEDOR26 = $sqline['fornec_cana'];
		$FUNCIONARIO26 = $sqline['funcionarios'];
		$USINA26 = $sqline['usina'];
		$TERCEIROS26 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='27'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI27 = $sqline['saldo_inicial'];
		$ENTRADA27= $sqline['entrada'];
		$PROPRIO27= $sqline['abast_proprio'];
		$AFERICAO27 = $sqline['afericao'];
		$COMBOIO27 = $sqline['comboio'];
		$FORNECEDOR27 = $sqline['fornec_cana'];
		$FUNCIONARIO27 = $sqline['funcionarios'];
		$USINA27 = $sqline['usina'];
		$TERCEIROS27 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='28'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI28 = $sqline['saldo_inicial'];
		$ENTRADA28= $sqline['entrada'];
		$PROPRIO28= $sqline['abast_proprio'];
		$AFERICAO28 = $sqline['afericao'];
		$COMBOIO28 = $sqline['comboio'];
		$FORNECEDOR28 = $sqline['fornec_cana'];
		$FUNCIONARIO28 = $sqline['funcionarios'];
		$USINA28 = $sqline['usina'];
		$TERCEIROS28 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='29'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI29 = $sqline['saldo_inicial'];
		$ENTRADA29= $sqline['entrada'];
		$PROPRIO29= $sqline['abast_proprio'];
		$AFERICAO29 = $sqline['afericao'];
		$COMBOIO29 = $sqline['comboio'];
		$FORNECEDOR29 = $sqline['fornec_cana'];
		$FUNCIONARIO29 = $sqline['funcionarios'];
		$USINA29 = $sqline['usina'];
		$TERCEIROS29 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='30'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI30 = $sqline['saldo_inicial'];
		$ENTRADA30= $sqline['entrada'];
		$PROPRIO30= $sqline['abast_proprio'];
		$AFERICAO30 = $sqline['afericao'];
		$COMBOIO30 = $sqline['comboio'];
		$FORNECEDOR30 = $sqline['fornec_cana'];
		$FUNCIONARIO30 = $sqline['funcionarios'];
		$USINA30 = $sqline['usina'];
		$TERCEIROS30 = $sqline['terceiros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_movimentos WHERE cod_produto='$SelecaoCombustivel' AND date BETWEEN '$inicio' AND '$fim' AND dia='31'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SALDOINI31 = $sqline['saldo_inicial'];
		$ENTRADA31= $sqline['entrada'];
		$PROPRIO31= $sqline['abast_proprio'];
		$AFERICAO31 = $sqline['afericao'];
		$COMBOIO31 = $sqline['comboio'];
		$FORNECEDOR31 = $sqline['fornec_cana'];
		$FUNCIONARIO31 = $sqline['funcionarios'];
		$USINA31 = $sqline['usina'];
		$TERCEIROS31 = $sqline['terceiros'];
	}
}
$TOTALDIA1 = $PROPRIO1 + $COMBOIO1 + $FORNECEDOR1 + $FUNCIONARIO1 + $USINA1 + $TERCEIROS1;
$TOTALDIA2 = $PROPRIO2 + $COMBOIO2 + $FORNECEDOR2 + $FUNCIONARIO2 + $USINA2 + $TERCEIROS2;
$TOTALDIA3 = $PROPRIO3 + $COMBOIO3 + $FORNECEDOR3 + $FUNCIONARIO3 + $USINA3 + $TERCEIROS3;
$TOTALDIA4 = $PROPRIO4 + $COMBOIO4 + $FORNECEDOR4 + $FUNCIONARIO4 + $USINA4 + $TERCEIROS4;
$TOTALDIA5 = $PROPRIO5 + $COMBOIO5 + $FORNECEDOR5 + $FUNCIONARIO5 + $USINA5 + $TERCEIROS5;
$TOTALDIA6 = $PROPRIO6 + $COMBOIO6 + $FORNECEDOR6 + $FUNCIONARIO6 + $USINA6 + $TERCEIROS6;
$TOTALDIA7 = $PROPRIO7 + $COMBOIO7 + $FORNECEDOR7 + $FUNCIONARIO7 + $USINA7 + $TERCEIROS7;
$TOTALDIA8 = $PROPRIO8 + $COMBOIO8 + $FORNECEDOR8 + $FUNCIONARIO8 + $USINA8 + $TERCEIROS8;
$TOTALDIA9 = $PROPRIO9 + $COMBOIO9 + $FORNECEDOR9 + $FUNCIONARIO9 + $USINA9 + $TERCEIROS9;
$TOTALDIA10 = $PROPRIO10 + $COMBOIO10 + $FORNECEDOR10 + $FUNCIONARIO10 + $USINA10 + $TERCEIROS10;
$TOTALDIA11 = $PROPRIO11 + $COMBOIO11 + $FORNECEDOR11 + $FUNCIONARIO11 + $USINA11 + $TERCEIROS11;
$TOTALDIA12 = $PROPRIO12 + $COMBOIO12 + $FORNECEDOR12 + $FUNCIONARIO12 + $USINA12 + $TERCEIROS12;
$TOTALDIA13 = $PROPRIO13 + $COMBOIO13 + $FORNECEDOR13 + $FUNCIONARIO13 + $USINA13 + $TERCEIROS13;
$TOTALDIA14 = $PROPRIO14 + $COMBOIO14 + $FORNECEDOR14 + $FUNCIONARIO14 + $USINA14 + $TERCEIROS14;
$TOTALDIA15 = $PROPRIO15 + $COMBOIO15 + $FORNECEDOR15 + $FUNCIONARIO15 + $USINA15 + $TERCEIROS15;
$TOTALDIA16 = $PROPRIO16 + $COMBOIO16 + $FORNECEDOR16 + $FUNCIONARIO16 + $USINA16 + $TERCEIROS16;
$TOTALDIA17 = $PROPRIO17 + $COMBOIO17 + $FORNECEDOR17 + $FUNCIONARIO17 + $USINA17 + $TERCEIROS17;
$TOTALDIA18 = $PROPRIO18 + $COMBOIO18 + $FORNECEDOR18 + $FUNCIONARIO18 + $USINA18 + $TERCEIROS18;
$TOTALDIA19 = $PROPRIO19 + $COMBOIO19 + $FORNECEDOR19 + $FUNCIONARIO19 + $USINA19 + $TERCEIROS19;
$TOTALDIA20 = $PROPRIO20 + $COMBOIO20 + $FORNECEDOR20 + $FUNCIONARIO20 + $USINA20 + $TERCEIROS20;
$TOTALDIA21 = $PROPRIO21 + $COMBOIO21 + $FORNECEDOR21 + $FUNCIONARIO21 + $USINA21 + $TERCEIROS21;
$TOTALDIA22 = $PROPRIO22 + $COMBOIO22 + $FORNECEDOR22 + $FUNCIONARIO22 + $USINA22 + $TERCEIROS22;
$TOTALDIA23 = $PROPRIO23 + $COMBOIO23 + $FORNECEDOR23 + $FUNCIONARIO23 + $USINA23 + $TERCEIROS23;
$TOTALDIA24 = $PROPRIO24 + $COMBOIO24 + $FORNECEDOR24 + $FUNCIONARIO24 + $USINA24 + $TERCEIROS24;
$TOTALDIA25 = $PROPRIO25 + $COMBOIO25 + $FORNECEDOR25 + $FUNCIONARIO25 + $USINA25 + $TERCEIROS25;
$TOTALDIA26 = $PROPRIO26 + $COMBOIO26 + $FORNECEDOR26 + $FUNCIONARIO26 + $USINA26 + $TERCEIROS26;
$TOTALDIA27 = $PROPRIO27 + $COMBOIO27 + $FORNECEDOR27 + $FUNCIONARIO27 + $USINA27 + $TERCEIROS27;
$TOTALDIA28 = $PROPRIO28 + $COMBOIO28 + $FORNECEDOR28 + $FUNCIONARIO28 + $USINA28 + $TERCEIROS28;
$TOTALDIA29 = $PROPRIO29 + $COMBOIO29 + $FORNECEDOR29 + $FUNCIONARIO29 + $USINA29 + $TERCEIROS29;
$TOTALDIA30 = $PROPRIO30 + $COMBOIO30 + $FORNECEDOR30 + $FUNCIONARIO30 + $USINA30 + $TERCEIROS30;
$TOTALDIA31 = $PROPRIO31 + $COMBOIO31 + $FORNECEDOR31 + $FUNCIONARIO31 + $USINA31 + $TERCEIROS31;

$SALDODIA1 = ($SALDOINI1 + $ENTRADA1) - $TOTALDIA1;
$SALDODIA2 = ($SALDOINI2 + $ENTRADA2) - $TOTALDIA2;
$SALDODIA3 = ($SALDOINI3 + $ENTRADA3) - $TOTALDIA3;
$SALDODIA4 = ($SALDOINI4 + $ENTRADA4) - $TOTALDIA4;
$SALDODIA5 = ($SALDOINI5 + $ENTRADA5) - $TOTALDIA5;
$SALDODIA6 = ($SALDOINI6 + $ENTRADA6) - $TOTALDIA6;
$SALDODIA7 = ($SALDOINI7 + $ENTRADA7) - $TOTALDIA7;
$SALDODIA8 = ($SALDOINI8 + $ENTRADA8) - $TOTALDIA8;
$SALDODIA9 = ($SALDOINI9 + $ENTRADA9) - $TOTALDIA9;
$SALDODIA10 = ($SALDOINI10 + $ENTRADA10) - $TOTALDIA10;
$SALDODIA11 = ($SALDOINI11 + $ENTRADA11) - $TOTALDIA11;
$SALDODIA12 = ($SALDOINI12 + $ENTRADA12) - $TOTALDIA12;
$SALDODIA13 = ($SALDOINI13 + $ENTRADA13) - $TOTALDIA13;
$SALDODIA14 = ($SALDOINI14 + $ENTRADA14) - $TOTALDIA14;
$SALDODIA15 = ($SALDOINI15 + $ENTRADA15) - $TOTALDIA15;
$SALDODIA16 = ($SALDOINI16 + $ENTRADA16) - $TOTALDIA16;
$SALDODIA17 = ($SALDOINI17 + $ENTRADA17) - $TOTALDIA17;
$SALDODIA18 = ($SALDOINI18 + $ENTRADA18) - $TOTALDIA18;
$SALDODIA19 = ($SALDOINI19 + $ENTRADA19) - $TOTALDIA19;
$SALDODIA20 = ($SALDOINI20 + $ENTRADA20) - $TOTALDIA20;
$SALDODIA21 = ($SALDOINI21 + $ENTRADA21) - $TOTALDIA21;
$SALDODIA22 = ($SALDOINI22 + $ENTRADA22) - $TOTALDIA22;
$SALDODIA23 = ($SALDOINI23 + $ENTRADA23) - $TOTALDIA23;
$SALDODIA24 = ($SALDOINI24 + $ENTRADA24) - $TOTALDIA24;
$SALDODIA25 = ($SALDOINI25 + $ENTRADA25) - $TOTALDIA25;
$SALDODIA26 = ($SALDOINI26 + $ENTRADA26) - $TOTALDIA26;
$SALDODIA27 = ($SALDOINI27 + $ENTRADA27) - $TOTALDIA27;
$SALDODIA28 = ($SALDOINI28 + $ENTRADA28) - $TOTALDIA28;
$SALDODIA29 = ($SALDOINI29 + $ENTRADA29) - $TOTALDIA29;
$SALDODIA30 = ($SALDOINI30 + $ENTRADA30) - $TOTALDIA30;
$SALDODIA31 = ($SALDOINI31 + $ENTRADA31) - $TOTALDIA31;

$TOTALDIA = $TOTALDIA1 + $TOTALDIA2 + $TOTALDIA3 + $TOTALDIA4 + $TOTALDIA5 + $TOTALDIA6 + $TOTALDIA7 + $TOTALDIA8 + $TOTALDIA9 + $TOTALDIA10 + $TOTALDIA11 + $TOTALDIA12 + $TOTALDIA13 + $TOTALDIA14 + $TOTALDIA15 + $TOTALDIA16 + $TOTALDIA17 + $TOTALDIA18 + $TOTALDIA19 + $TOTALDIA20 + $TOTALDIA21 + $TOTALDIA22 + $TOTALDIA23 + $TOTALDIA24 + $TOTALDIA25 + $TOTALDIA26 + $TOTALDIA27 + $TOTALDIA28 + $TOTALDIA29 + $TOTALDIA30 + $TOTALDIA31;

$SALDODIATOTAL = $SALDODIA1 + $SALDODIA2 + $SALDODIA3 + $SALDODIA4 + $SALDODIA5 + $SALDODIA6 + $SALDODIA7 + $SALDODIA8 + $SALDODIA9 + $SALDODIA10 + $SALDODIA11 + $SALDODIA12 + $SALDODIA13 + $SALDODIA14 + $SALDODIA15 + $SALDODIA16 + $SALDODIA17 + $SALDODIA18 + $SALDODIA19 + $SALDODIA20 + $SALDODIA21 + $SALDODIA22 + $SALDODIA23 + $SALDODIA24 + $SALDODIA25 + $SALDODIA26 + $SALDODIA27 + $SALDODIA28 + $SALDODIA29 + $SALDODIA30 + $SALDODIA31;

$TERCEIROSTOTAL = $TERCEIROS1 + $TERCEIROS2 + $TERCEIROS3 + $TERCEIROS4 + $TERCEIROS5 + $TERCEIROS6 + $TERCEIROS7 + $TERCEIROS8 + $TERCEIROS9 + $TERCEIROS10 + $TERCEIROS11 + $TERCEIROS12 + $TERCEIROS13 + $TERCEIROS14 + $TERCEIROS15 + $TERCEIROS16 + $TERCEIROS17 + $TERCEIROS18 + $TERCEIROS19 + $TERCEIROS20 + $TERCEIROS21 + $TERCEIROS22 + $TERCEIROS23 + $TERCEIROS24 + $TERCEIROS25 + $TERCEIROS26 + $TERCEIROS27 + $TERCEIROS28 + $TERCEIROS29 + $TERCEIROS30 + $TERCEIROS31;

$USINATOTAL = $USINA1 + $USINA2 + $USINA3 + $USINA4 + $USINA5 + $USINA6 + $USINA7 + $USINA8 + $USINA9 + $USINA10 + $USINA11 + $USINA12 + $USINA13 + $USINA14 + $USINA15 + $USINA16 + $USINA17 + $USINA18 + $USINA19 + $USINA20 + $USINA21 + $USINA22 + $USINA23 + $USINA24 + $USINA25 + $USINA26 + $USINA27 + $USINA28 + $USINA29 + $USINA30 + $USINA31;

$FUNCIONARIOTOTAL = $FUNCIONARIO1 + $FUNCIONARIO2 + $FUNCIONARIO3 + $FUNCIONARIO4 + $FUNCIONARIO5 + $FUNCIONARIO6 + $FUNCIONARIO7 + $FUNCIONARIO8 + $FUNCIONARIO9 + $FUNCIONARIO10 + $FUNCIONARIO11 + $FUNCIONARIO12 + $FUNCIONARIO13 + $FUNCIONARIO14 + $FUNCIONARIO15 + $FUNCIONARIO16 + $FUNCIONARIO17 + $FUNCIONARIO18 + $FUNCIONARIO19 + $FUNCIONARIO20 + $FUNCIONARIO21 + $FUNCIONARIO22 + $FUNCIONARIO23 + $FUNCIONARIO24 + $FUNCIONARIO25 + $FUNCIONARIO26 + $FUNCIONARIO27 + $FUNCIONARIO28 + $FUNCIONARIO29 + $FUNCIONARIO30 + $FUNCIONARIO31;

$FORNECEDORTOTAL = $FORNECEDOR1 + $FORNECEDOR2 + $FORNECEDOR3 + $FORNECEDOR4 + $FORNECEDOR5 + $FORNECEDOR6 + $FORNECEDOR7 + $FORNECEDOR8 + $FORNECEDOR9 + $FORNECEDOR10 + $FORNECEDOR11 + $FORNECEDOR12 + $FORNECEDOR13 + $FORNECEDOR14 + $FORNECEDOR15 + $FORNECEDOR16 + $FORNECEDOR17 + $FORNECEDOR18 + $FORNECEDOR19 + $FORNECEDOR20 + $FORNECEDOR21 + $FORNECEDOR22 + $FORNECEDOR23 + $FORNECEDOR24 + $FORNECEDOR25 + $FORNECEDOR26 + $FORNECEDOR27 + $FORNECEDOR28 + $FORNECEDOR29 + $FORNECEDOR30 + $FORNECEDOR31;

$COMBOIOTOTAL = $COMBOIO1 + $COMBOIO2 + $COMBOIO3 + $COMBOIO4 + $COMBOIO5 + $COMBOIO6 + $COMBOIO7 + $COMBOIO8 + $COMBOIO9 + $COMBOIO10 + $COMBOIO11 + $COMBOIO12 + $COMBOIO13 + $COMBOIO14 + $COMBOIO15 + $COMBOIO16 + $COMBOIO17 + $COMBOIO18 + $COMBOIO19 + $COMBOIO20 + $COMBOIO21 + $COMBOIO22 + $COMBOIO23 + $COMBOIO24 + $COMBOIO25 + $COMBOIO26 + $COMBOIO27 + $COMBOIO28 + $COMBOIO29 + $COMBOIO30 + $COMBOIO31;

$AFERICAOTOTAL = $AFERICAO1 + $AFERICAO2 + $AFERICAO3 + $AFERICAO4 + $AFERICAO5 + $AFERICAO6 + $AFERICAO7 + $AFERICAO8 + $AFERICAO9 + $AFERICAO10 + $AFERICAO11 + $AFERICAO12 + $AFERICAO13 + $AFERICAO14 + $AFERICAO15 + $AFERICAO16 + $AFERICAO17 + $AFERICAO18 + $AFERICAO19 + $AFERICAO20 + $AFERICAO21 + $AFERICAO22 + $AFERICAO23 + $AFERICAO24 + $AFERICAO25 + $AFERICAO26 + $AFERICAO27 + $AFERICAO28 + $AFERICAO29 + $AFERICAO30 + $AFERICAO31;

$ENTRADATOTAL = $ENTRADA1 + $ENTRADA2 + $ENTRADA3 + $ENTRADA4 + $ENTRADA5 + $ENTRADA6 + $ENTRADA7 + $ENTRADA8 + $ENTRADA9 + $ENTRADA10 + $ENTRADA11 + $ENTRADA12 + $ENTRADA13 + $ENTRADA14 + $ENTRADA15 + $ENTRADA16 + $ENTRADA17 + $ENTRADA18 + $ENTRADA19 + $ENTRADA20 + $ENTRADA21 + $ENTRADA22 + $ENTRADA23 + $ENTRADA24 + $ENTRADA25 + $ENTRADA26 + $ENTRADA27 + $ENTRADA28 + $ENTRADA29 + $ENTRADA30 + $ENTRADA31;

$PROPRIOTOTAL = $PROPRIO1 + $PROPRIO2 + $PROPRIO3 + $PROPRIO4 + $PROPRIO5 + $PROPRIO6 + $PROPRIO7 + $PROPRIO8 + $PROPRIO9 + $PROPRIO10 + $PROPRIO11 + $PROPRIO12 + $PROPRIO13 + $PROPRIO14 + $PROPRIO15 + $PROPRIO16 + $PROPRIO17 + $PROPRIO18 + $PROPRIO19 + $PROPRIO20 + $PROPRIO21 + $PROPRIO22 + $PROPRIO23 + $PROPRIO24 + $PROPRIO25 + $PROPRIO26 + $PROPRIO27 + $PROPRIO28 + $PROPRIO29 + $PROPRIO30 + $PROPRIO31;


$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_import` WHERE date BETWEEN '$inicio' AND '$fim'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SAFRA = $sqline['date_year'];
	}
}
?>