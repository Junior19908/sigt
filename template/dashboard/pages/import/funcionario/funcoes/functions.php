<?php
/*Inclusão das conexões com o banco de dados*/
$conn = mysqli_connect('localhost','id885499_junior19908','2613679cfc418651','sistemagsgposto');
/* Esse bloco de código em php verifica se existe a sessão, 
pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho 
para a página principal do site (sistema), burlando assim a obrigação de fazer um login, 
com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/
/*Aqui pega a sessão criada do usuário e forma uma string com o nome de logado*/
$logado = $_SESSION['username'];
/*Neste ponto criei uma conexão com o servidor para verificar o nome do usuário logado, preciso melhorar isso.*/
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE login_user = '$logado'");
$row1 = mysqli_num_rows($sql1);
if ($row1 > 0){
  while($sqline = mysqli_fetch_array($sql1)){
    $ID_USER = $sqline['id_user'];
    $NOME_USER = $sqline['login_user'];
  }
}
$STATUS = $_POST["SelectStatus"];
//.........................................................................................//
/* Apartir deste ponto é verificado o arquivo TXT, retirando / e trocando para -, no caso isto serve para a inserção da data no servidor
verifica linha por linha */
if(!empty($arquivos_tmp = $_FILES['arquivo']['tmp_name'])){
$dados = file($arquivos_tmp);
$str = array("/");
$srtt = array("-");
$junt_str = str_replace($str, $srtt, $dados);

foreach($junt_str as $linha){
$linha = trim($linha);
$valor = explode('@', $linha);

$DRT = $valor[0];
$NOME = $valor[1];
$CPF = $valor[2];




$CONSULTA_PER = mysqli_query($conn, "SELECT * FROM tb_funcionario WHERE func_matricula='$DRT'");
$RESULTADO_PER = mysqli_num_rows($CONSULTA_PER);
if ($RESULTADO_PER > 0){

  echo "    <!-- TABLE: LATEST ORDERS -->
    <div class='card'>
      <div class='card-header border-transparent'>
        <h3 class='card-title'>Funcionário Atualizado!</h3>
      </div>
      <!-- /.card-header -->
      <div class='card-body p-0'>
        <div class='table-responsive'>
          <table class='table m-0'>
            <thead>
            <tr>
              <th><center>Matricula</center></th>
              <th><center>Nome do Funcionário</center></th>
              <th><center>CPF</center></th>
              <th><center>Usuário da Importação</center></th>
            </tr>
            </thead>
            <tbody>
";

    echo "<td><center>$DRT</center></td>";
    echo "<td><center>$NOME</center></td>";
    echo "<td><center>$CPF</center></td>";
    echo "<td><center><span class='badge badge-success'>$NOME_USER</span></center></td>";
    echo "                    </tbody>
              </table>
              </div>
            </div></div>";

    $mysql = "UPDATE `tb_funcionario` SET `col_cpf` = '$CPF', col_status='$STATUS' WHERE `func_matricula` = '$DRT';";
    $insert = mysqli_query($conn,$mysql);

}else{

    echo "    <!-- TABLE: LATEST ORDERS -->
    <div class='card'>
      <div class='card-header border-transparent'>
        <h3 class='card-title'>Funcionário Novo Cadastrado</h3>
      </div>
      <!-- /.card-header -->
      <div class='card-body p-0'>
        <div class='table-responsive'>
          <table class='table m-0'>
            <thead>
            <tr>
              <th><center>Matricula</center></th>
              <th><center>Nome do Funcionário</center></th>
              <th><center>CPF</center></th>
              <th><center>Usuário da Importação</center></th>
            </tr>
            </thead>
            <tbody>
";

echo "<td><center>$DRT</center></td>";
echo "<td><center>$NOME</center></td>";
echo "<td><center>$CPF</center></td>";
echo "<td><center><span class='badge badge-success'>$NOME_USER</span></center></td>";
echo "                    </tbody>
          </table>
          </div>
        </div></div>";


//$mysql = "UPDATE `tb_funcionario` SET `func_matricula` = '$drt_nova' WHERE `func_matricula` = '$drt_ant';";
//$insert = mysqli_query($conn,$mysql);
}
}
}else{
  echo("<h1>Dados Não Encontrados.<br>Volte e Escolha um arquivo para Importar!</h1>");
}
?>