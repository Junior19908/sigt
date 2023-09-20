<?php
//Starts
ob_start();
//Globais

include("global.php");

//Include das classes
include_once("class/DB.class.php");
include_once("class/Conexao.class.php");
include_once("class/Login.class.php");
//include_once("include/header_gsg.php");
//Conexão com o banco de dados
$conectar=new DB;
$conectar=$conectar->conectar();
//Métodos
/*
include("controllers/cadastro.php");

*/
include("controller/login.php");
/*
include("controllers/logout.php");
include("controllers/check.php");
include("controllers/aprovar.php");
include("controllers/bloquear.php");
include("controllers/style.php");
*/
?>
