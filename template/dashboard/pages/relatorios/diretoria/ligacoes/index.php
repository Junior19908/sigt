<?php
$CONNECTIONINCLUDE = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgposto');



$SELECT_DEST=$_POST['SelectDest'];
$inicio=$_POST['calendarioINICIO'];
$fim=$_POST['calendarioFIM'];
$SelecaoCombustivel=$_POST['SelectComb'];
$SelecaoDestino=$_POST['SelectDest'];

//-------Busca por data & categoria---------//


if ($SelecaoDestino == 1) {
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT *, SUM(litros) AS litros, SUM(valor) AS valor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND proprio_cod_veiculo > 20000000 AND cod_produto='$SelecaoCombustivel' GROUP BY date ORDER BY date ASC");
$CONSULT = mysqli_num_rows($QUERY);

//Diesel S10
if ($SelecaoCombustivel == 404) {
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(litros) AS somalitros,SUM(valor) AS somavalor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND proprio_cod_veiculo > 20000000 AND cod_produto ='404'");
$row = mysqli_num_rows($sql);
if ($row > 0){
		while($sqline = mysqli_fetch_array($sql)){
				$SOMALITROSDIESEL = $sqline['somalitros'];
				$SOMAVALORDIESEL = $sqline['somavalor'];
		}
}
}
//Gasolina
if ($SelecaoCombustivel == 403) {
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(litros) AS somalitros,SUM(valor) AS somavalor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND proprio_cod_veiculo > 20000000 AND cod_produto='403'");
$row = mysqli_num_rows($sql);
if ($row > 0){
		while($sqline = mysqli_fetch_array($sql)){
				$SOMALITROSGASOLINA = $sqline['somalitros'];
				$SOMAVALORGASOLINA = $sqline['somavalor'];
		}
}
}
}elseif ($SelecaoDestino == 2) {
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT *, SUM(litros) AS litros, SUM(valor) AS valor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND fornecedor_cod_veiculo IS NOT NULL AND cod_produto='$SelecaoCombustivel' GROUP BY date ORDER BY date ASC");
$CONSULT = mysqli_num_rows($QUERY);


//Diesel S10
if ($SelecaoCombustivel == 404) {
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(litros) AS somalitros,SUM(valor) AS somavalor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND fornecedor_cod_veiculo IS NOT NULL AND cod_produto ='404'");
$row = mysqli_num_rows($sql);
if ($row > 0){
		while($sqline = mysqli_fetch_array($sql)){
				$SOMALITROSDIESEL = $sqline['somalitros'];
				$SOMAVALORDIESEL = $sqline['somavalor'];
		}
}
}
//Gasolina
if ($SelecaoCombustivel == 403) {
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(litros) AS somalitros,SUM(valor) AS somavalor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND fornecedor_cod_veiculo IS NOT NULL AND cod_produto='403'");
$row = mysqli_num_rows($sql);
if ($row > 0){
		while($sqline = mysqli_fetch_array($sql)){
				$SOMALITROSGASOLINA = $sqline['somalitros'];
				$SOMAVALORGASOLINA = $sqline['somavalor'];
		}
}
}
}elseif ($SelecaoDestino == 3) {
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT *, SUM(litros) AS litros, SUM(valor) AS valor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND funcionario_cod_veiculo IS NOT NULL AND cod_produto='$SelecaoCombustivel' GROUP BY date ORDER BY date ASC");
$CONSULT = mysqli_num_rows($QUERY);



//Diesel S10
if ($SelecaoCombustivel == 404) {
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(litros) AS somalitros,SUM(valor) AS somavalor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND funcionario_cod_veiculo IS NOT NULL AND cod_produto ='404'");
$row = mysqli_num_rows($sql);
if ($row > 0){
		while($sqline = mysqli_fetch_array($sql)){
				$SOMALITROSDIESEL = $sqline['somalitros'];
				$SOMAVALORDIESEL = $sqline['somavalor'];
		}
}
}
//Gasolina
if ($SelecaoCombustivel == 403) {
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(litros) AS somalitros,SUM(valor) AS somavalor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND funcionario_cod_veiculo IS NOT NULL AND cod_produto='403'");
$row = mysqli_num_rows($sql);
if ($row > 0){
		while($sqline = mysqli_fetch_array($sql)){
				$SOMALITROSGASOLINA = $sqline['somalitros'];
				$SOMAVALORGASOLINA = $sqline['somavalor'];
		}
}
}
}


$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_import` WHERE date BETWEEN '$inicio' AND '$fim'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SAFRA = $sqline['date_year'];
	}
}








?>