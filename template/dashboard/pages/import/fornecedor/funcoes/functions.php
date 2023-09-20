<?php
/*Inclusão das conexões com o banco de dados*/
$conn = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgalmoxarifado');
/* Esse bloco de código em php verifica se existe a sessão,
pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho
para a página principal do site (sistema), burlando assim a obrigação de fazer um login,
com isso se ele não estiver feito o login não será criado a session,
então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/
//session_start();
/*Aqui pega a sessão criada do usuário e forma uma string com o nome de logado*/

/*Neste ponto criei uma conexão com o servidor para verificar o nome do usuário logado, preciso melhorar isso.*/


//.........................................................................................//
/* Apartir deste ponto é verificado o arquivo TXT, retirando / e trocando para -, no caso isto serve para a inserção da data no servidor
verifica linha por linha */
if(!empty($arquivos_tmp = $_FILES['arquivo']['tmp_name'])){
$dados = file($arquivos_tmp);


foreach($dados as $linha){
$linha = trim($linha);
$valor = explode('|', $linha);

$valor1 = $valor[0];
$valor2 = $valor[1];



    echo "    <!-- TABLE: LATEST ORDERS -->
    <div class='card'>
      <div class='card-header border-transparent'>
        <h3 class='card-title'>Fornecedor Importado</h3>
      </div>
      <!-- /.card-header -->
      <div class='card-body p-0'>
        <div class='table-responsive'>
          <table class='table m-0'>
            <thead>
            <tr>
              <th><center>Veículo</center></th>
              <th><center>Nome do Fornecedor</center></th>
            </tr>
            </thead>
            <tbody>
";

echo "<td><center>$valor1</center></td>";
echo "<td><center>$valor2</center></td>";
echo "                    </tbody>
          </table>
          </div>
        </div></div>";


//$mysql = "INSERT INTO `tb_fornecedor` (`cod_veiculo`, `nome_fornecedor`, `placa_veiculo`, `cod_fornecedor`, `contrato_fornecedor`, `nome_fazenda`, `centro_custo`, `id_cupom`, `id_user`) VALUES ('$veiculo', '$nome_fornecedor', '$placa_veiculo', '$cod_fornecedor', '$contrato_fornecedor', '$nome_fazenda', '$centro_custo', '2', '$ID_USER')";
//$insert = mysqli_query($conn,$mysql);

}
}

?>
