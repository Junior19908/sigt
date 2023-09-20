<?php
//Start's
ob_start();
//includes
include_once '../class/Conexao.class.php';
//Class
require_once '../class/Funcoes.class.php';
require_once '../class/Funcionario.class.php';
$objFc = new Funcoes ();
$objFn = new Funcionario();