<?php
class Login{
	public function logar($cod, $senha){
		$conn = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgposto');
		$buscar=mysqli_query($conn, "SELECT * FROM tb_user WHERE login_user='$cod' AND pass_user='$senha' LIMIT 1" );
		if(mysqli_num_rows($buscar)==1){
			$dados=mysqli_fetch_array($buscar);
			if($dados["status_user"]==1){
			$_SESSION["username"]=$dados["login_user"];
			$_SESSION["password"]=$dados["pass_user"];
			$_SESSION["type_user"]=$dados["type_user"];
			setcookie("SistemaGSG", "Logado", time() + (86400 * 1), "/");
			$log=1;
		}else{
			$flash="Seu Cadastro encontra-se em analise, Aguarde a nossa aprovação!";
			}
		}
		if(isset($log)){
				$flash="Login efetuado com sucesso!";
		}else{
			if(empty($flash)){
				$flash="Certifique-se de ter digitado os dados corretos, correspondente a Usuário e Senha!";
			}
		}
		echo($flash);
	}
}
?>
