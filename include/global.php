<?php
$home="http://10.2.1.4/SistemaGSGv2.0/index.php?acao=logout";
$title="GSG - Administração";
$startaction="";
$msg="";
if(isset($_GET["acao"])){
	$acao = $_GET["acao"];
	$startaction = 1;
}
?>
