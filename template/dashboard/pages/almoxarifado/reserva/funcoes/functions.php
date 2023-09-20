<?php 
/*Inclusão das conexões com o banco de dados*/
require_once '../../../../../../class/Conexao.class.php';
/*Elimina os erros*/
error_reporting(0);
ini_set(“display_errors”, 0 );

/* Esse bloco de código em php verifica se existe a sessão, 
pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho 
para a página principal do site (sistema), burlando assim a obrigação de fazer um login, 
com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/
if((!isset ($_SESSION['username']) == true) and (!isset ($_SESSION['password']) == true))
{
unset($_SESSION['username']);
unset($_SESSION['password']);
header('location:../../index.php');
}
/*Aqui pega a sessão criada do usuário e forma uma string com o nome de logado*/
$logado = $_SESSION['username'];
/*Neste ponto criei uma conexão com o servidor para verificar o nome do usuário logado, preciso melhorar isso.*/
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE login_user = '$logado'");
$row1 = mysqli_num_rows($sql1);
if ($row1 > 0){
	while($sqline = mysqli_fetch_array($sql1)){
		$ID_USER = $sqline['id_user'];
	}
}
/*Essa Função inverte a data para os padrões do banco de dados*/
function inverteData($DATA){
  if(count(explode("/",$DATA)) > 1){
	  return implode("-",array_reverse(explode("/",$DATA)));
  }elseif(count(explode("-",$DATA)) > 1){
	  return implode("/",array_reverse(explode("-",$DATA)));
  }
}
//.........................................................................................//
/* Apartir deste ponto é verificado o arquivo TXT, retirando / e trocando para -, no caso isto serve para a inserção da data no servidor
verifica linha por linha */
if(!empty($arquivos_tmp = $_FILES['arquivo']['tmp_name'])){
$dados = file($arquivos_tmp);
$str = array(" ");
$srtt = array("");
$junt_str = str_replace($str, $srtt, $dados);

foreach($junt_str as $linha){
$linha = trim($linha);
$valor = explode('|', $linha);

$RESERVA = $valor[1];
$ITEM = $valor[2];
$DATASD = $valor[4];
$TPMOVI = $valor[5];
$MATERIAL = $valor[6];
$QTDPED = $valor[7];
$UMBS = $valor[8];
$CUSTO = $valor[9];
$DEPOS = $valor[10];
$TPNEC = $valor[11];
$RECEBEDOR = $valor[12];
$USERSAP = $valor[14];

echo "<table style='width:100%'>";
echo "<tr>
		<td> 
			$RESERVA -
			$ITEM -
			$DATASD -
			$TPMOVI -
			$MATERIAL -
			$QTDPED -
			$UMBS -
			$CUSTO -
			$DEPOS -
			$TPNEC -
			$RECEBEDOR -
			$USERSAP
		</td>
	</tr>";
echo " <BR>";
echo "</table>";


$mysql = "INSERT INTO `tb_almox_reserva` (`ID_ITEM`, `RESERVA`, `ITEM`, `DATA`, `TPMOVIMETNO`, `MATERIAL`, `QTDPEDIDA`, `QDTSOLICITADA`, `UMB`, `CUSTO`, `DEPOSITO`, `TPNEC`, `RECEBEDOR`, `USUARIOSAP`) VALUES (NULL, '$RESERVA', '$ITEM', '$DATASD', '$TPMOVI', '$MATERIAL', '$QTDPED', '0', '$UMBS', '$CUSTO', '$DEPOS', '$TPNEC', '$RECEBEDOR', '$USERSAP')";
$insert = mysqli_query($conn,$mysql);

}
}else{
	echo("<h2 style='background-color:Tomato; color:white'>Dados Não Encontrados.<br>Volte e Escolha um arquivo para Importar!</h2>");
}
?>