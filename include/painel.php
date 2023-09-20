<?php
$connection = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgposto');

$query = mysqli_query($connection, "SELECT COUNT(id_cupom) AS contagem FROM `tb_import` WHERE date_now=curdate()");
$row2 = mysqli_num_rows($query);
if ($row2 > 0){
	while($sqline = mysqli_fetch_array($query)){
		$contagemcupom = $sqline['contagem'];
		}
	}

$query = mysqli_query($connection, "SELECT COUNT(id_user) AS contagem FROM `tb_user`");
$row2 = mysqli_num_rows($query);
if ($row2 > 0){
	while($sqline = mysqli_fetch_array($query)){
		$contagemuser = $sqline['contagem'];
		}
	}

$CEMPORCENTO = 100;

$MYSQLQUERY = mysqli_query($connection, "SELECT COUNT(id_cupom) AS somase FROM `tb_import` WHERE date_now=CURDATE() AND status_cupom!='1'");
$MYSQLROW = mysqli_num_rows($MYSQLQUERY);
if ($MYSQLROW > 0){
	while($sqline = mysqli_fetch_array($MYSQLQUERY)){
		$PENDENTES = $sqline['somase'];
		}
	}
$query = mysqli_query($connection, "SELECT COUNT(id_cupom) AS somase FROM `tb_import` WHERE date_now=CURDATE()");
$row2 = mysqli_num_rows($query);
if ($row2 > 0){
	while($sqline = mysqli_fetch_array($query)){
		$TODOS = $sqline['somase'];
		}
	}

$MYSQLQUERYVERIFICA = mysqli_query($connection, "SELECT * FROM `tb_import` WHERE date_now=CURDATE()");
$MYSQLROWVERIFICA = mysqli_num_rows($MYSQLQUERYVERIFICA);
if ($MYSQLROWVERIFICA == 0){
	$RESULTADO4 = 0;

	}else{

		$RESULTADO1 = $TODOS - $PENDENTES;
		$RESULTADO2 = $RESULTADO1 / $TODOS;
		$RESULTADO3 = $CEMPORCENTO * $RESULTADO2;
		$RESULTADO4 = 100 - $RESULTADO3;
	}

?>