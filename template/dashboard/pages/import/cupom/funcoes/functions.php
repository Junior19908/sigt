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
$Ano = date("Y");
$Safra = $_POST["SelectSafra"];
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

$cupom = $valor[1];
$veiculos = $valor[2];
$km = $valor[4];
$DATA = $valor[5];
$hora = $valor[6];
$bomba = $valor[7];
$servico = $valor[8];
$cod_produto = $valor[12];
$litros = $valor[13];
$preco = $valor[14];
$CONSULTA_PER = mysqli_query($conn, "SELECT * FROM tb_import WHERE id_cupom='$cupom'");
$RESULTADO_PER = mysqli_num_rows($CONSULTA_PER);
if ($RESULTADO_PER > 0){



		$int_veiculos = (int)$veiculos;

        $DATAINVERTIDA = inverteData($DATA);

        $str_data = array("19/");
        $strr_data = str_replace($str_data, "2019/", $DATAINVERTIDA);

        $str_d = array("/");
        $strr_d = str_replace($str_d, "-", $strr_data);
        $str_esp = array(" ");
        $data_str = str_replace($str_esp, "", $strr_d);

    echo "    <!-- TABLE: LATEST ORDERS -->
    <div class='card'>
      <div class='card-header border-transparent'>
        <h3 class='card-title'>Cupom Já no SistemaGSG</h3>
      </div>
      <!-- /.card-header -->
      <div class='card-body p-0'>
        <div class='table-responsive'>
          <table class='table m-0'>
            <thead>
            <tr>
              <th><center>Cupom</center></th>
              <th><center>Veículo</center></th>
              <th><center>Data</center></th>
              <th><center>Hora</center></th>
              <th><center>Bomba</center></th>
              <th><center>Serviço</center></th>
              <th><center>Produto</center></th>
              <th><center>Litros</center></th>
              <th><center>Valor</center></th>
              <th><center>Status</center></th>
            </tr>
            </thead>
            <tbody>
";
echo "<td><center>$cupom</center></td>";
echo "<td><center>$int_veiculos</center></td>";
echo "<td><center>$data_str</center></td>";
echo "<td><center>$hora</center></td>";
echo "<td><center>$bomba</center></td>";
echo "<td><center>$servico</center></td>";
echo "<td><center>$cod_produto</center></td>";
echo "<td><center>$litros</center></td>";
echo "<td><center>$preco</center></td>";
echo "<td><center><span class='badge badge-success'>Cupom Já Importado!</span></center></td>";
echo "                    </tbody>
          </table>
          </div>
        </div></div>";

    }else{

            //Consulta Para Fornecedor de Cana
        $CONSULTA_PRO = mysqli_query($conn, "SELECT * FROM tb_proprio WHERE cod_veiculo='$veiculos'");
        $RESULTADO_PRO = mysqli_num_rows($CONSULTA_PRO);
            //Consulta Para Funcionário
        $CONSULTA_FUN = mysqli_query($conn, "SELECT * FROM tb_funcionario WHERE cod_veiculo='$veiculos'");
        $RESULTADO_FUN = mysqli_num_rows($CONSULTA_FUN);
            //Consulta Para Própios
        $CONSULTA_FOR = mysqli_query($conn, "SELECT * FROM tb_fornecedor WHERE cod_veiculo='$veiculos'");
        $RESULTADO_FOR = mysqli_num_rows($CONSULTA_FOR);

        $int_servicos = (int)$servico;
        $int_veiculos = (int)$veiculos;
        $int_km=(int)$km;
            
        $DATAINVERTIDA = inverteData($DATA);

        $str_data = array("19/");
        $strr_data = str_replace($str_data, "2019/", $DATAINVERTIDA);

        $str_d = array("/");
        $strr_d = str_replace($str_d, "-", $strr_data);
        $str_esp = array(" ");
        $data_str = str_replace($str_esp, "", $strr_d);


        if ($RESULTADO_FOR > 0) {

$QUERY = mysqli_query($conn, "SELECT * FROM tb_fornecedor WHERE cod_veiculo = '$veiculos'");
$ROW = mysqli_num_rows($QUERY);
if ($ROW > 0){
  while($SQLLINE = mysqli_fetch_array($QUERY)){
	$COD_NOMEFor = $SQLLINE['nome_fornecedor'];

  }
}

echo "    <!-- TABLE: LATEST ORDERS -->
    <div class='card'>
      <div class='card-header border-transparent'>
        <h3 class='card-title'>Cupom Importado</h3>
      </div>
      <!-- /.card-header -->
      <div class='card-body p-0'>
        <div class='table-responsive'>
          <table class='table m-0'>
            <thead>
            <tr>
              <th><center>Cupom</center></th>
              <th><center>Veículo</center></th>
              <th><center>Descrição</center></th>
              <th><center>Número do Peso na Balança</center></th>
              <th><center>Data</center></th>
              <th><center>Hora</center></th>
              <th><center>Bomba</center></th>
              <th><center>Serviço</center></th>
              <th><center>Produto</center></th>
              <th><center>Litros</center></th>
              <th><center>Valor</center></th>
              <th><center>Identificação</center></th>
              <th><center>Status</center></th>
            </tr>
            </thead>
            <tbody>
";
echo "<td><center>$cupom</center></td>";
echo "<td><center>$int_veiculos</center></td>";
echo "<td><center>$COD_NOMEFor</center></td>";
echo "<td><center>$int_km</center></td>";
echo "<td><center>$data_str</center></td>";
echo "<td><center>$hora</center></td>";
echo "<td><center>$bomba</center></td>";
echo "<td><center>$servico</center></td>";
echo "<td><center>$cod_produto</center></td>";
echo "<td><center>$litros</center></td>";
echo "<td><center>$preco</center></td>";
echo "<td><center><span class='badge badge-info'>Fornecedor</span></center></td>";
echo "<td><center><span class='badge badge-success'>Sucesso</span></center></td>";
echo "                    </tbody>
          </table>
          </div>
        </div></div>";
        $mysql = "INSERT INTO `tb_import` (`id_cupom`, `km`, `date`, `time`, `bomba`,`servico`, `cod_produto`, `litros`, `valor`, `id_preco`, `proprio_cod_veiculo`, `funcionario_cod_veiculo`, `fornecedor_cod_veiculo`, `id_user`, `date_now`, `date_hour`, `date_year`, `date_now_current`, `status_cupom`, `motivo_alt`) VALUES ('$cupom', '$int_km', '$data_str', '$hora', '$bomba', '$servico' , '$cod_produto', '$litros', '$preco', '$cod_produto', NULL, NULL, '$int_veiculos', '$ID_USER', NOW(), NOW(), '$Safra',NOW(), '1', NULL)";
        $insert = mysqli_query($conn,$mysql);

        }elseif ($RESULTADO_FUN > 0) {

$QUERY = mysqli_query($conn, "SELECT * FROM tb_funcionario WHERE cod_veiculo = '$veiculos'");
$ROW = mysqli_num_rows($QUERY);
if ($ROW > 0){
  while($SQLLINE = mysqli_fetch_array($QUERY)){
	$COD_NOME = $SQLLINE['nome_funcionario'];
	$MATR_FUNC = $SQLLINE['func_matricula'];
  }
}
echo "    <!-- TABLE: LATEST ORDERS -->
    <div class='card'>
      <div class='card-header border-transparent'>
        <h3 class='card-title'>Cupom Importado</h3>
      </div>
      <!-- /.card-header -->
      <div class='card-body p-0'>
        <div class='table-responsive'>
          <table class='table m-0'>
            <thead>
            <tr>
              <th><center>Cupom</center></th>
              <th><center>Veículo</center></th>
              <th><center>Descrição</center></th>
              <th><center>Matrícula</center></th>
              <th><center>Quilometragem</center></th>
              <th><center>Data</center></th>
              <th><center>Hora</center></th>
              <th><center>Bomba</center></th>
              <th><center>Serviço</center></th>
              <th><center>Produto</center></th>
              <th><center>Litros</center></th>
              <th><center>Valor</center></th>
              <th><center>Identificação</center></th>
              <th><center>Status</center></th>
            </tr>
            </thead>
            <tbody>

";
echo "<td><center>$cupom</center></td>";
echo "<td><center>$int_veiculos</center></td>";
echo "<td><center>$COD_NOME</center></td>";
echo "<td><center>$MATR_FUNC</center></td>";
echo "<td><center>$int_km</center></td>";
echo "<td><center>$data_str</center></td>";
echo "<td><center>$hora</center></td>";
echo "<td><center>$bomba</center></td>";
echo "<td><center>$servico</center></td>";
echo "<td><center>$cod_produto</center></td>";
echo "<td><center>$litros</center></td>";
echo "<td><center>$preco</center></td>";
echo "<td><center><span class='badge badge-info'>Funcionário</span></center></td>";
echo "<td><center><span class='badge badge-success'>Sucesso</span></center></td>";
echo "                    </tbody>
          </table>
          </div>
        </div></div>";

        $mysql = "INSERT INTO `tb_import` (`id_cupom`, `km`, `date`, `time`, `bomba`,`servico`, `cod_produto`, `litros`, `valor`, `id_preco`, `proprio_cod_veiculo`, `funcionario_cod_veiculo`, `fornecedor_cod_veiculo`, `id_user`, `date_now`, `date_hour`, `date_year`, `date_now_current`, `status_cupom`, `motivo_alt`) VALUES ('$cupom', '$int_km', '$data_str', '$hora', '$bomba', '$servico' , '$cod_produto', '$litros', '$preco', '$cod_produto', NULL, '$int_veiculos', NULL, '$ID_USER', NOW(), NOW(), '$Safra',NOW(), '1', NULL)";
        $insert = mysqli_query($conn,$mysql);

        }elseif ($RESULTADO_PRO > 0) {

$QUERY = mysqli_query($conn, "SELECT * FROM tb_proprio WHERE cod_veiculo = '$veiculos'");
$ROW = mysqli_num_rows($QUERY);
if ($ROW > 0){
  while($SQLLINE = mysqli_fetch_array($QUERY)){
	$COD_NOMEProp = $SQLLINE['desc_veiculo'];

  }
}
$QUERY = mysqli_query($conn, "SELECT * FROM tb_servicos WHERE id = '$int_servicos'");
$ROW = mysqli_num_rows($QUERY);
if ($ROW > 0){
  while($SQLLINE = mysqli_fetch_array($QUERY)){
	$SERV = $SQLLINE['desc_servico'];

  }
}
echo "    <!-- TABLE: LATEST ORDERS -->
    <div class='card'>
      <div class='card-header border-transparent'>
        <h3 class='card-title'>Cupom Importado</h3>
      </div>
      <!-- /.card-header -->
      <div class='card-body p-0'>
        <div class='table-responsive'>
          <table class='table m-0'>
            <thead>
            <tr>
              <th><center>Cupom</center></th>
              <th><center>Veículo</center></th>
              <th><center>Descrição</center></th>
              <th><center>Quilometragem</center></th>
              <th><center>Data</center></th>
              <th><center>Hora</center></th>
              <th><center>Bomba</center></th>
              <th><center>Serviço</center></th>
              <th><center>Produto</center></th>
              <th><center>Litros</center></th>
              <th><center>Valor</center></th>
              <th><center>Identificação</center></th>
              <th><center>Status</center></th>
            </tr>
            </thead>
            <tbody>

";
echo "<td><center>$cupom</center></td>";
echo "<td><center>$int_veiculos</center></td>";
echo "<td><center>$COD_NOMEProp</center></td>";
echo "<td><center>$int_km</center></td>";
echo "<td><center>$data_str</center></td>";
echo "<td><center>$hora</center></td>";
echo "<td><center>$bomba</center></td>";
echo "<td><center>$SERV</center></td>";
echo "<td><center>$cod_produto</center></td>";
echo "<td><center>$litros</center></td>";
echo "<td><center>$preco</center></td>";
echo "<td><center><span class='badge badge-info'>Indústria</span></center></td>";
echo "<td><center><span class='badge badge-success'>Sucesso</span></center></td>";
echo "                    </tbody>
          </table>
          </div>
        </div></div>";

        $mysql = "INSERT INTO `tb_import` (`id_cupom`, `km`, `date`, `time`, `bomba`,`servico`, `cod_produto`, `litros`, `valor`, `id_preco`, `proprio_cod_veiculo`, `funcionario_cod_veiculo`, `fornecedor_cod_veiculo`, `id_user`, `date_now`, `date_hour`, `date_year`, `date_now_current`, `status_cupom`, `motivo_alt`) VALUES ('$cupom', '$int_km', '$data_str', '$hora', '$bomba', '$servico' , '$cod_produto', '$litros', '$preco', '$cod_produto', '$int_veiculos', NULL, NULL, '$ID_USER', NOW(), NOW(), '$Safra', NOW(), '1', NULL)";
        $insert = mysqli_query($conn,$mysql);

        }else{

echo "    <!-- TABLE: LATEST ORDERS -->
    <div class='card'>
      <div class='card-header border-transparent'>
        <h3 class='card-title'>Cupom Importado</h3>
      </div>
      <!-- /.card-header -->
      <div class='card-body p-0'>
        <div class='table-responsive'>
          <table class='table m-0'>
            <thead>
            <tr>
              <th><center>Cupom</center></th>
              <th><center>Veículo</center></th>
              <th><center>Descrição</center></th>
              <th><center>Quilometragem</center></th>
              <th><center>Data</center></th>
              <th><center>Hora</center></th>
              <th><center>Bomba</center></th>
              <th><center>Serviço</center></th>
              <th><center>Produto</center></th>
              <th><center>Litros</center></th>
              <th><center>Valor</center></th>
              <th><center>Identificação</center></th>
              <th><center>Status</center></th>
            </tr>
            </thead>
            <tbody>

";
echo "<td><center>$cupom</center></td>";
echo "<td><center>$int_veiculos</center></td>";
echo "<td><center>-</center></td>";
echo "<td><center>$int_km</center></td>";
echo "<td><center>$data_str</center></td>";
echo "<td><center>$hora</center></td>";
echo "<td><center>$bomba</center></td>";
echo "<td><center>$servico</center></td>";
echo "<td><center>$cod_produto</center></td>";
echo "<td><center>$litros</center></td>";
echo "<td><center>$preco</center></td>";
echo "<td><center><span class='badge badge-warning'>Não Identificado</span></center></td>";
echo "<td><center><span class='badge badge-danger'>Cancelado</span></center></td>";
echo "                    </tbody>
          </table>
          </div>
        </div></div>";

        $mysql = "INSERT INTO `tb_import` (`id_cupom`, `km`, `date`, `time`, `bomba`,`servico`, `cod_produto`, `litros`, `valor`, `id_preco`, `proprio_cod_veiculo`, `funcionario_cod_veiculo`, `fornecedor_cod_veiculo`, `id_user`, `date_now`, `date_hour`, `date_year`, `date_now_current`, `status_cupom`, `motivo_alt`) VALUES ('$cupom', '$int_km', '$data_str', '$hora', '$bomba', '$servico' , '$cod_produto', '$litros', '$preco', '$cod_produto', NULL, NULL, NULL, '$ID_USER', NOW(), NOW(), '$Safra', NOW(), '3', 'Aguardando a analise pelo usuário, veículo nº $int_veiculos não identificado.')";
        $insert = mysqli_query($conn,$mysql);


        }
    }
}
$CONSULTA = mysqli_query($conn, "SELECT * FROM tb_tarefas WHERE data='$data_str'");
$RESULTADO = mysqli_num_rows($CONSULTA);
if($RESULTADO == 0){
    $DateT = date('d/m/Y', strtotime($data_str));
    $QUERYMYSQL = "INSERT INTO `tb_tarefas` (`id_tarefa`, `titulo`, `marqCheck`, `data`, `date_now`, `hora`, `id_user`) VALUES (NULL, 'Cupons Importados - Data: $DateT', 'Checked', '$data_str', NOW(), NOW(), '$ID_USER')";
    $UPDATE = mysqli_query($conn,$QUERYMYSQL);
}
}else{
	echo("<h2 style='background-color:Tomato; color:white'>Dados Não Encontrados.<br>Volte e Escolha um arquivo para Importar!</h2>");
}
?>