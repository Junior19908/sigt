<?php
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *, SUM(litros) AS somalitros, SUM(valor) AS somavalor FROM `tb_import` WHERE status_cupom='1' AND date BETWEEN '$datainicio' AND '$datafim' AND funcionario_cod_veiculo IS NOT NULL AND cod_produto = '404'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$DIESELLITROS = $sqline['somalitros'];
		$DIESELVALOR = $sqline['somavalor'];
	}
}

$TOTALGERALDIESEL = mysqli_query($CONNECTIONINCLUDE, "SELECT *, SUM(litros) AS somalitros, SUM(valor) AS somavalor FROM `tb_import` WHERE status_cupom='1' AND date BETWEEN '$datainicio' AND '$datafim' AND funcionario_cod_veiculo IS NOT NULL");
$GERALDIESELROW = mysqli_num_rows($TOTALGERALDIESEL);
if ($GERALDIESELROW > 0){
	while($sqline = mysqli_fetch_array($TOTALGERALDIESEL)){
		$TOTALDIESEL = $sqline['somalitros'];
		$TOTALVALOR = $sqline['somavalor'];
	}
}

$QUERYGASOLINA = mysqli_query($CONNECTIONINCLUDE, "SELECT *, SUM(litros) AS somalitros, SUM(valor) AS somavalor FROM `tb_import` WHERE status_cupom='1' AND date BETWEEN '$datainicio' AND '$datafim' AND funcionario_cod_veiculo IS NOT NULL AND cod_produto = '403'");
$ROWGASOLINA = mysqli_num_rows($QUERYGASOLINA);
if ($ROWGASOLINA > 0){
	while($sqline = mysqli_fetch_array($QUERYGASOLINA)){
		$GASOLINALITROS = $sqline['somalitros'];
		$GASOLINAVALOR = $sqline['somavalor'];
	}
}
?>