<?php
$CONNECTIONINCLUDE = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgposto');

$inicio=$_POST['calendarioINICIO'];
$fim=$_POST['calendarioFIM'];
$SelecaoTerceiros=$_POST['SelectTerc'];
//-------Busca por data & categoria---------//
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT imp.*, PROP.desc_veiculo FROM tb_import AS IMP LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo = PROP.cod_veiculo WHERE imp.date BETWEEN '$inicio' AND '$fim' AND imp.proprio_cod_veiculo='$SelecaoTerceiros'");
$CONSULT = mysqli_num_rows($QUERY);

$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_import` WHERE date BETWEEN '$inicio' AND '$fim'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SAFRA = $sqline['date_year'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(litros) AS somalitros,SUM(valor) AS somavalor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND proprio_cod_veiculo='$SelecaoTerceiros' AND cod_produto ='404'");
$row = mysqli_num_rows($sql);
if ($row > 0){
		while($sqline = mysqli_fetch_array($sql)){
				$SOMALITROSDIESEL = $sqline['somalitros'];
				$SOMAVALORDIESEL = $sqline['somavalor'];
		}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(litros) AS somalitros,SUM(valor) AS somavalor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND proprio_cod_veiculo='$SelecaoTerceiros' AND cod_produto='403'");
$row = mysqli_num_rows($sql);
if ($row > 0){
		while($sqline = mysqli_fetch_array($sql)){
				$SOMALITROSGASOLINA = $sqline['somalitros'];
				$SOMAVALORGASOLINA = $sqline['somavalor'];
		}
}


?>