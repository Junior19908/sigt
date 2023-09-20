<?php
error_reporting(0);
ini_set("display_errors", 0 );
$inicio=$_POST['calendarioINICIO'];
$fim=$_POST['calendarioFIM'];

$SelecFor=$_POST['SelectTerc'];
$SelecFunc=$_POST['SelectFunc'];
//-------Busca por data & categoria---------//

if ($SelecFor == 0) {

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT imp.*, FORNEC.*,SUM(litros) AS fornclitros,SUM(valor) AS forncvalor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNEC ON IMP.fornecedor_cod_veiculo = FORNEC.cod_veiculo WHERE imp.date BETWEEN '$inicio' AND '$fim' AND IMP.fornecedor_cod_veiculo IS NOT NULL GROUP BY FORNEC.cod_veiculo ORDER BY FORNEC.nome_fornecedor ASC");
$CONSULT = mysqli_num_rows($QUERY);

$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_import` WHERE date BETWEEN '$inicio' AND '$fim'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SAFRA = $sqline['date_year'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(litros) AS somalitros,SUM(valor) AS somavalor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND fornecedor_cod_veiculo IS NOT NULL AND cod_produto ='404'");
$row = mysqli_num_rows($sql);
if ($row > 0){
		while($sqline = mysqli_fetch_array($sql)){
				$SOMALITROSDIESEL = $sqline['somalitros'];
				$SOMAVALORDIESEL = $sqline['somavalor'];
		}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(litros) AS somalitros,SUM(valor) AS somavalor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND fornecedor_cod_veiculo IS NOT NULL AND cod_produto='403'");
$row = mysqli_num_rows($sql);
if ($row > 0){
		while($sqline = mysqli_fetch_array($sql)){
				$SOMALITROSGASOLINA = $sqline['somalitros'];
				$SOMAVALORGASOLINA = $sqline['somavalor'];
		}
}

}else{

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT imp.*, FORNEC.*,SUM(litros) AS fornclitros,SUM(valor) AS forncvalor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNEC ON IMP.fornecedor_cod_veiculo = FORNEC.cod_veiculo WHERE imp.date BETWEEN '$inicio' AND '$fim' AND FORNEC.cod_fornecedor = '$SelecFor' GROUP BY imp.fornecedor_cod_veiculo,imp.id_cupom ORDER BY FORNEC.nome_fornecedor ASC");
$CONSULT = mysqli_num_rows($QUERY);

$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_import` WHERE date BETWEEN '$inicio' AND '$fim'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SAFRA = $sqline['date_year'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT imp.*, FORNEC.*,SUM(litros) AS fornclitros,SUM(valor) AS forncvalor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNEC ON IMP.fornecedor_cod_veiculo = FORNEC.cod_veiculo WHERE imp.date BETWEEN '$inicio' AND '$fim' AND FORNEC.cod_fornecedor = '$SelecFor' AND imp.cod_produto='404'");
$row = mysqli_num_rows($sql);
if ($row > 0){
		while($sqline = mysqli_fetch_array($sql)){
				$SOMALITROSDIESEL = $sqline['fornclitros'];
				$SOMAVALORDIESEL = $sqline['forncvalor'];
		}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT imp.*, FORNEC.*,SUM(litros) AS fornclitros,SUM(valor) AS forncvalor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNEC ON IMP.fornecedor_cod_veiculo = FORNEC.cod_veiculo WHERE imp.date BETWEEN '$inicio' AND '$fim' AND FORNEC.cod_fornecedor = '$SelecFor' AND imp.cod_produto='403'");
$row = mysqli_num_rows($sql);
if ($row > 0){
		while($sqline = mysqli_fetch_array($sql)){
				$SOMALITROSGASOLINA = $sqline['fornclitros'];
				$SOMAVALORGASOLINA = $sqline['forncvalor'];
		}
}

}

if ($SelecFunc > 0) {

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT imp.*, FUNC.*,SUM(litros) AS fornclitros,SUM(valor) AS forncvalor FROM tb_import AS IMP LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo WHERE imp.date BETWEEN '$inicio' AND '$fim' AND IMP.funcionario_cod_veiculo = '$SelecFunc' GROUP BY FUNC.cod_veiculo ORDER BY FUNC.nome_funcionario ASC");
$CONSULT = mysqli_num_rows($QUERY);

$MYSQLQUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT imp.*, FUNC.* FROM tb_import AS IMP LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo WHERE imp.date BETWEEN '$inicio' AND '$fim' AND IMP.funcionario_cod_veiculo = '$SelecFunc' ORDER BY FUNC.nome_funcionario ASC");
$CONSULT = mysqli_num_rows($MYSQLQUERY);


$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_import` WHERE date BETWEEN '$inicio' AND '$fim'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SAFRA = $sqline['date_year'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(litros) AS somalitros,SUM(valor) AS somavalor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND funcionario_cod_veiculo = '$SelecFunc' AND cod_produto ='404'");
$row = mysqli_num_rows($sql);
if ($row > 0){
		while($sqline = mysqli_fetch_array($sql)){
				$SOMALITROSDIESEL = $sqline['somalitros'];
				$SOMAVALORDIESEL = $sqline['somavalor'];
		}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(litros) AS somalitros,SUM(valor) AS somavalor FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND funcionario_cod_veiculo ='$SelecFunc' AND cod_produto='403'");
$row = mysqli_num_rows($sql);
if ($row > 0){
		while($sqline = mysqli_fetch_array($sql)){
				$SOMALITROSGASOLINA = $sqline['somalitros'];
				$SOMAVALORGASOLINA = $sqline['somavalor'];
		}
}

}



?>