<?php
error_reporting(0);
ini_set("display_errors", 0 );
if($startaction == 1 && $acao == "logar"){
		// Tratamento da execução do Login //
	$cod=addslashes($_POST["username"]);
	$senha=addslashes(sha1($_POST["password"]."fire@usga#SistemaGSG"));
	if(empty($cod) || empty($senha)){
			$msg="Preencha todos os campos!";
	}else{
		if(strlen($cod)<7){
			$msg="O Usuário deve ter no mínimo sete caracteres!";
		}else{
			//Se tudo estiver correto ele executa a busca pelo usuário//
			$login=new Login;
			echo "<center><span class=\"response\" style='background-color:Tomato; color:white'>";
				$login=$login->logar($cod, $senha);
			echo"</span></center>";
		}
	}
}
//Método de logout usuário
if($startaction == 1 && $acao == "logout"){
	setcookie("log", null, -1, "/");
	unset($_SESSION["username"],$_SESSION["password"],$_SESSION["type_user"]);
}
//Método de Checar usuário
if(isset($_SESSION["username"])&&isset($_SESSION["password"])){
	$logado=1;
	$nivel=$_SESSION["type_user"];
}
?>
