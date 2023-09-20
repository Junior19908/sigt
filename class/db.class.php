<?php

  class DB{
	  public function conectar(){
		  $host="localhost"; //ConexÃ£o com o Servidor
		  $user="remoto"; //UsuÃ¡rio do Servidor
		  $pass="XTKfAFKPHNhWpSqW"; //Senha
		  $dbname="sistemagsgposto"; //Banco de Dados

		  $conexao=mysqli_connect($host,$user,$pass,$dbname);

		  return $conexao;

	  }

  }

?>
