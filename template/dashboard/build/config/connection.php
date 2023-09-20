<?php

$servername =   "localhost";
$username   =  "root";
$password   =   "02984646#Lua";

//Criando a conexão
try{
    $conn = new PDO("mysql:host=$servername;dbname=dbpostocomb",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo    "Conexão Feita com Sucesso!";
}
catch(PDOException $e){
    echo "Falha de Conexão: " . $e->getMessage();
}
?>