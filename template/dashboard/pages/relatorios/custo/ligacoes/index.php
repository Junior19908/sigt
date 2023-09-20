<?php
include_once ROOT_PATH. '../../../../../../class/Conexao.class.php';
$inicio=$_POST['calendarioINICIO'];
$fim=$_POST['calendarioFIM'];



//-------Busca por data & categoria---------//
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='9008' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINARTM = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='9008' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELRTM = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='4538' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELTRATORES = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='4538' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINATRATORES = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='4027' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAMAQSOLDA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='4027' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELMAQSOLDA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='4006' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELCOMPRESSOR = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='4006' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINACOMPRESSOR = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='4540' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAACUDECANAIS = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='4540' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELACUDECANAIS = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='4509' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELADM = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='4509' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAADM = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='4544' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAAGRICOLA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='4544' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELAGRICOLA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='4541' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELTRAPICHE = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo='4541' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINATRAPICHE = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.fornecedor_cod_veiculo IS NOT NULL AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAFORNECEDORDECANA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.fornecedor_cod_veiculo IS NOT NULL AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELFORNECEDORDECANA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo BETWEEN '3001' AND '3004' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINACOMBOIO = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo BETWEEN '3001' AND '3004' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELCOMBOIO = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4527' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELCERAMICA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4527' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINACERAMICA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4515' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAARMAZEM = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4515' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELARMAZEM = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4516' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAPATIO = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4516' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELPATIO = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4510' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELESTEIRA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4510' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAESTEIRA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4511' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAMOENDA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4511' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELMOENDA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4513' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELFABRICACAO = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4517' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELFABRICACAODESTILARIA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4513' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAFABRICACAO = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4514' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINATURBINA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4514' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELTURBINA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4522' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELVEICULOS = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4522' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAVEICULOS = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4512' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINACALDEIRAS = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4512' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELCALDEIRAS = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4520' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELENERGIA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4520' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAENERGIA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4529' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINACARPINTARIA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '4529' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELCARPINTARIA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '9004' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELHELIO = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '9004' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAHELIO = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '9003' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAMARINALDO = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '9003' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELMARINALDO = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '9001' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELGILSON = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '9001' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAGILSON = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '9005' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAJCRISTO = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '9005' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELJCRISTO = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '9006' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELJCSILVA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '9006' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAJCSILVA = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '9007' AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINACHRISTIANO = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.proprio_cod_veiculo = '9007' AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELCHRISTIANO = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.funcionario_cod_veiculo IS NOT NULL AND IMP.cod_produto='404' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSDIESELFUNCIONARIOS = $sqline['litros'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT IMP.id_cupom,IMP.litros,IMP.valor,IMP.date,IMP.proprio_cod_veiculo,IMP.funcionario_cod_veiculo,IMP.fornecedor_cod_veiculo,IMP.cod_produto,CUST.centro_custo,CUSTT.centro_custo,CUSTTT.centro_custo,SUM(IMP.litros) AS litros,SUM(imp.valor) AS valor FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FORNC ON IMP.fornecedor_cod_veiculo = FORNC.cod_veiculo LEFT JOIN tb_funcionario AS FUNC ON IMP.funcionario_cod_veiculo = FUNC.cod_veiculo LEFT JOIN tb_centro_custo AS CUST ON FUNC.centro_custo=CUST.id LEFT JOIN tb_centro_custo AS CUSTT ON FORNC.centro_custo=CUSTT.id LEFT JOIN tb_proprio AS PROP ON IMP.proprio_cod_veiculo=PROP.cod_veiculo LEFT JOIN tb_centro_custo AS CUSTTT ON PROP.centro_custo=CUSTTT.id WHERE IMP.funcionario_cod_veiculo IS NOT NULL AND IMP.cod_produto='403' AND IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.status_cupom='1'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$LITROSGASOLINAFUNCIONARIOS = $sqline['litros'];
	}
}

$TOTALLITROSGASOLINA = $LITROSGASOLINAARMAZEM+ $LITROSGASOLINAACUDECANAIS+$LITROSGASOLINAADM+$LITROSGASOLINAAGRICOLA+$LITROSGASOLINACALDEIRAS+$LITROSGASOLINACARPINTARIA+$LITROSGASOLINACERAMICA+$LITROSGASOLINACHRISTIANO+$LITROSGASOLINACOMPRESSOR+$LITROSGASOLINAENERGIA+$LITROSGASOLINAESTEIRA+$LITROSGASOLINAFABRICACAO+$LITROSGASOLINAFORNECEDORDECANA+$LITROSGASOLINAFUNCIONARIOS+$LITROSGASOLINAGILSON+$LITROSGASOLINAHELIO+$LITROSGASOLINAJCRISTO+$LITROSGASOLINAJCSILVA+$LITROSGASOLINAMAQSOLDA+$LITROSGASOLINAMARINALDO+$LITROSGASOLINAMOENDA+$LITROSGASOLINAPATIO+$LITROSGASOLINARTM+$LITROSGASOLINATRAPICHE+$LITROSGASOLINATRATORES+$LITROSGASOLINATURBINA+$LITROSGASOLINAVEICULOS;


$TOTALDIESEL = $LITROSDIESELARMAZEM + $LITROSDIESELACUDECANAIS+$LITROSDIESELADM+$LITROSDIESELAGRICOLA+$LITROSDIESELCALDEIRAS+$LITROSDIESELCARPINTARIA+$LITROSDIESELCERAMICA+$LITROSDIESELCHRISTIANO+$LITROSDIESELCOMPRESSOR+$LITROSDIESELENERGIA+$LITROSDIESELESTEIRA+$LITROSDIESELFABRICACAO+$LITROSDIESELFABRICACAODESTILARIA+$LITROSDIESELFORNECEDORDECANA+$LITROSDIESELFUNCIONARIOS+$LITROSDIESELGILSON+$LITROSDIESELHELIO+$LITROSDIESELJCRISTO+$LITROSDIESELJCSILVA+$LITROSDIESELMAQSOLDA+$LITROSDIESELMARINALDO+$LITROSDIESELMOENDA+$LITROSDIESELPATIO+$LITROSDIESELRTM+$LITROSDIESELTRAPICHE+$LITROSDIESELTRATORES+$LITROSDIESELTURBINA+$LITROSDIESELVEICULOS;


$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_import` WHERE date BETWEEN '$inicio' AND '$fim'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SAFRA = $sqline['date_year'];
	}
}

?>