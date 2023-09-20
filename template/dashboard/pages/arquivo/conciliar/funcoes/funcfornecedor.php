<?php
/*Inclusão das conexões com o banco de dados*/
require_once '../../../../../../class/Conexao.class.php';
$inicio=$_POST['calendarioINICIO'];
$fim=$_POST['calendarioFIM'];
$MES=$_POST['SelectMes'];
$SAFRA=$_POST['SelectSafra'];
/*Elimina os erros*/
//error_reporting(0);
//ini_set(“display_errors”, 0 );

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

$QUERYCONT = mysqli_query($conn, "SELECT COUNT(*) AS CONT FROM tb_import WHERE date BETWEEN '$inicio' AND '$fim' AND fornecedor_cod_veiculo IS NOT NULL");
$ROWCONT = mysqli_num_rows($QUERYCONT);
if ($ROWCONT > 0){
  while($sqline = mysqli_fetch_array($QUERYCONT)){
    $CONTAGEM = $sqline['CONT'];
  }
}

$QUERYEXCEL = mysqli_query($conn, "SELECT * FROM tb_export_fornecedor_cana WHERE tp_periodo ='$MES' AND safra = '$SAFRA' AND date = '$inicio' OR date_fim = '$fim';");
$ROWCONT = mysqli_num_rows($QUERYEXCEL);
if ($ROWCONT == 0){
  
  $QUERYCONT = mysqli_query($conn, "SELECT IMP.*, FUNC.*, SUM(litros) AS SOMALITROS, SUM(valor) AS SOMAVALOR FROM tb_import AS IMP LEFT JOIN tb_fornecedor AS FUNC ON imp.fornecedor_cod_veiculo = FUNC.cod_veiculo WHERE IMP.date BETWEEN '$inicio' AND '$fim' AND IMP.fornecedor_cod_veiculo IS NOT NULL GROUP BY IMP.fornecedor_cod_veiculo");
if (mysqli_num_rows($QUERYCONT) > 0){
  while($row = mysqli_fetch_array($QUERYCONT)){
        echo "
  <!-- TABLE: LATEST ORDERS -->
    <div class='card'>
      <div class='card-header border-transparent'>
        <h3 class='card-title'>Conciliação Feita</h3>
      </div>
      <!-- /.card-header -->
      <div class='card-body p-0'>
        <div class='table-responsive'>
          <table class='table m-0'>
            <thead>
            <tr>
              <th><center>Nome</center></th>
              <th><center>Matrícula</center></th>
              <th><center>Litros</center></th>
              <th><center>Valor</center></th>
              <th><center>Status</center></th>
            </tr>
            </thead>
            <tbody>

";

$NOME = $row["nome_fornecedor"];
$VEICULO = $row["fornecedor_cod_veiculo"];
$LITROSD = $row["SOMALITROS"];
$VALORD = $row["SOMAVALOR"];

  echo "<td><center>".$NOME."</center></td>";
  echo "<td><center>".$VEICULO."</center></td>";
  echo "<td><center>".number_format($LITROSD,2,',','.')."</center></td>";
  echo "<td><center>".number_format($VALORD,2,',','.')."</center></td>";
  echo "<td><center><span class='badge badge-success'>Sucesso</span></center></td>";
  echo "</tbody>
          </table>
          </div>
        </div>
        </div>";



    $mysql = "INSERT INTO `tb_export_fornecedor_cana` (`id_export`, `fornecedor`, `litros`, `valor`, `date`, `date_fim`,`now_date`, `tp_periodo`,`id_user`, `safra`) VALUES (NULL, '$VEICULO', '$LITROSD', '$VALORD', '$inicio', '$fim', NOW(),'$MES', '$ID_USER', '$SAFRA')";
    $insert = mysqli_query($conn,$mysql);
    }
    $mysql = "INSERT INTO `tb_tarefas` (`id_tarefa`, `titulo`, `marqCheck`, `data`, `date_now`, `hora`, `id_user`) VALUES (NULL, 'Conciliação feita para Fornecedor de Cana, arquivo excel pronto.', NULL, CURDATE(), CURDATE(), NOW(), '$ID_USER')";
    $insert = mysqli_query($conn,$mysql);
  }else{

  }
}else{
  echo "<h1><center>Período já conciliado</center></h1>";
}
?>