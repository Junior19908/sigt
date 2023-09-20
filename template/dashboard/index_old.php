<?php
//error_reporting(0);
//ini_set("display_errors", 0 );

session_start();
//Inicia a Sessão
require_once '../../class/Funcionario.class.php';
//Verifica se o usuário esta logado
require_once '../../include/verifica_user.php';
require_once '../../include/painel.php';
//Inclusão das Funcões
require_once '../../class/Conexao.class.php';
require_once '../../controller/user.php';
require_once '../../class/ligacoes.class.php';
//Gráficos
require_once 'dist/js/pages/dashboard.php';

if ($rowvisitas == 0){

	$ip = $_SERVER['REMOTE_ADDR'];
	$port = $_SERVER['REMOTE_PORT'];
	$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

	$SQLINSERT = "INSERT INTO tb_visitas VALUES";
	$SQLINSERT .= "(NULL, '$ip', '$port', CURDATE(), NOW(), '$hostname', '$id_userr')";

	$QUERY = mysqli_query($conn, $SQLINSERT);

	}else{
    while($sqline = mysqli_fetch_array($query_visitas)){
      $IDVIST = $sqline['id'];
      }
    $SQLINSERT = "UPDATE `tb_visitas` SET `time` = NOW() WHERE `tb_visitas`.`id` = '$IDVIST'";
    $QUERY = mysqli_query($conn, $SQLINSERT);
    }
//Visitas no Site

$objFc = new Funcoes ();
$objFn = new Funcionario();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SistemaGSG | Painel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
  <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
  <script>
    $(function() {
        $( "#calendario" ).datepicker({ dateFormat: 'yy-mm-dd'}).val();
    });
    </script>
    <link href="vendor/emoji-picker/lib/css/emoji.css" rel="stylesheet">
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/emoji-picker/lib/js/config.js"></script>
<script src="vendor/emoji-picker/lib/js/util.js"></script>
<script src="vendor/emoji-picker/lib/js/jquery.emojiarea.js"></script>
<script src="vendor/emoji-picker/lib/js/emoji-picker.js"></script>
<link rel="shortcut icon" href="../../css/ico/favicon.ico" type="image/x-icon"/>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-green navbar-light">

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="../../controller/logout/">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/LogoUSGA.png" alt="USGA Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SistemaGSG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/<?php echo ''.$avatar.'' ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="pages/profile/" class="d-block"><?php echo ''.$nick.''; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fab fa-connectdevelop nav-icon"></i>
                  <p>Painel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/backup/" class="nav-link">
                  <i class="fas fa-save nav-icon"></i>
                  <p>Backup</p>
                </a>
              </li>
              <!--<li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>-->
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/relatorios/diretoria/" class="nav-link">
              <i class="nav-icon fas fa-industry"></i>
              <p>
                Diretoria
                <span class="right badge badge-warning">Novo</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Administrativo
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-success right">8</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/bombas/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Entrada de Bombas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/bombas/alterar-cadastro-bombas/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Alterar Bombas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/fisico/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Entrada Estoque Fisico</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/fisico/alterar-cadastro-fisico/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Alterar Entrada Fisíco</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/movimentos/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Entrada de Movimento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/movimentos/alterar-cadastro-movimentos/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Alterar Ent. de Movimento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/cupom/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Registrar Cupom Avulso</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/cupom/alterar-cadastro-cupom/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Alterar Ent. de Terceiros</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/almoxarifado/" class="nav-link">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Almoxarifado
                <span class="right badge badge-danger">Novo</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Relatórios
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-success right">7</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/relatorios/conferencia/" class="nav-link">
                  <i class="fas fa-chart-area nav-icon"></i>
                  <p>Conferência</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/relatorios/faturamento/" class="nav-link">
                  <i class="fas fa-chart-bar nav-icon"></i>
                  <p>Faturamento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/relatorios/mapa/" class="nav-link">
                  <i class="fas fa-globe-americas nav-icon"></i>
                  <p>Mapa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/relatorios/funcionarios/" class="nav-link">
                  <i class="fas fa-car nav-icon"></i>
                  <p>Funcionários</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/relatorios/custo/" class="nav-link">
                  <i class="fas fa-donate nav-icon"></i>
                  <p>Custo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/relatorios/terceiros/" class="nav-link">
                  <i class="fas fa-truck-moving nav-icon"></i>
                  <p>Terceiros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/relatorios/fornecedor/" class="nav-link">
                  <i class="fab fa-pagelines nav-icon"></i>
                  <p>Fornecedor de Cana</p>
                </a>
              </li>
            </ul>
          </li>
					<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Consultas
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-success right">1</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
							<li class="nav-item">
                <a href="pages/consultas/baixas/" class="nav-link">
                  <i class="fas fa-search nav-icon"></i>
                  <p>Funcionários</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Cadastros
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-success right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/matricula/" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Criar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/matricula/alterar/" class="nav-link">
                  <i class="fas fa-user-edit nav-icon"></i>
                  <p>Alterar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-download"></i>
              <p>
                Baixar Arquivo
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-success right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="pages/arquivo/conciliar/" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Conciliar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/arquivo/excel/" class="nav-link">
                  <i class="far fa-file-excel nav-icon"></i>
                  <p>Excel</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cloud-upload-alt"></i>
              <p>
                Importar Arquivo
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-success right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/import/cupom/" class="nav-link">
                  <i class="fas fa-server nav-icon"></i>
                  <p>Cupom</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/import/fornecedor/" class="nav-link">
                  <i class="fas fa-server nav-icon"></i>
                  <p>Fornecedor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/import/funcionario/" class="nav-link">
                  <i class="fas fa-server nav-icon"></i>
                  <p>Funcionário</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/import/proprio/" class="nav-link">
                  <i class="fas fa-server nav-icon"></i>
                  <p>Próprio</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="../../controller/logout/" class="nav-link">
              <i class="nav-icon fas fa-external-link-alt"></i>
              <p>
                Sair
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Painel de Controle</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Painel</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo($contagemcupom); ?></h3>

                <p>Cupons Importados Hoje</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-invoice"></i>
              </div>
              <a href="pages/cupom/data/" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo number_format($RESULTADO4,0,'.',''); ?><sup style="font-size: 20px"> %</sup></h3>

                <p>Taxa de rejeição</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="pages/cupom/alterar-cadastro-cupom/" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo($contagemuser); ?></h3>

                <p>Usuários Registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="pages/matricula/alterar-cadastro-user/" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo($visitascont); ?></h3>

                <p>Visitas no SistemaGSG</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="pages/visitas/site/" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Gráficos
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="chart_div" style="position: relative; height: 400px;">
                      <canvas id="chart_div-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chartjs-size-monitor" id="piechart" style="position: relative; height: 400px;">
                    <canvas id="piechart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Cupons Importados</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
                <?php
                  require_once '../../class/Conexao.class.php';
                  // abre a conexão
                  $PDO = ConexaoDB();
                  // SQL para selecionar os registros
                  $sql_msg = "SELECT imp.*,imp.proprio_cod_veiculo,PROP.desc_veiculo, fun.nome_funcionario, forn.nome_fornecedor,USERR.nome_user FROM tb_import AS imp LEFT JOIN tb_proprio AS PROP ON imp.proprio_cod_veiculo = prop.cod_veiculo LEFT JOIN tb_funcionario AS FUN ON IMP.funcionario_cod_veiculo = fun.cod_veiculo LEFT JOIN tb_fornecedor AS forn ON imp.fornecedor_cod_veiculo = forn.cod_veiculo LEFT JOIN tb_user AS USERR ON IMP.id_user=USERR.id_user WHERE imp.date_now = curdate() GROUP BY imp.id_cupom ORDER BY `date` DESC LIMIT 10";
                  // seleciona os registros
                  $resultado_msg = $PDO->prepare($sql_msg);

                  $resultado_msg->execute();
                ?>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th><center>Cupom</center></th>
                      <th><center>Descrição</center></th>
                      <th><center>Status</center></th>
                      <th><center>Produto</center></th>
                      <th><center>Litros</center></th>
                      <th><center>Valor</center></th>
                      <th><center>Data</center></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
								//Para obter os dados pode ser utilizado um while percorrendo assim cada linha retornada do banco de dados:
								while ($SQL = $resultado_msg->fetch(PDO::FETCH_ASSOC)): ?>
									<tr>
                    <td><center><a tabindex="0" title="Importado por" data-toggle="popover" data-placement="top" data-content="<?php echo $SQL['nome_user']; ?>"><?php echo $SQL['id_cupom']; ?></a></center></td>
                    <td><?php if($SQL['desc_veiculo'] != NULL){
                      echo $SQL['desc_veiculo'];
                    }elseif($SQL['nome_funcionario'] != NULL){
                      echo $SQL['nome_funcionario'];
                    }elseif($SQL['nome_fornecedor'] != NULL){
                      echo $SQL['nome_fornecedor'];
                    } ?></td>
                    <td><center><span class="badge badge-pill badge-<?php if($SQL['status_cupom']==1){echo"success";}elseif($SQL['status_cupom']==2){echo"warning";}elseif($SQL['status_cupom']==3){echo"danger";}elseif($SQL['status_cupom']==4){echo"info";}else{echo"other";}?>"><?php if($SQL['status_cupom']==1){
                      echo "Sucesso";
                    }elseif($SQL['status_cupom']==2){
                      echo "Pendente";
                    }elseif($SQL['status_cupom']==3){
                      echo  "Cancelado";
                    }else{
                      echo  "Processando";
                    } ?></span></center></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><center><?php if($SQL['cod_produto']==403){
                          echo "Gasolina";
                        }elseif($SQL['cod_produto']==404){
                          echo  "Diesel S10";
                        }else{
                          echo "Não Identificado";
                        } ?></center></div>
                      </td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><center><?php echo number_format($SQL['litros'],2,",","."); ?></center></div>
                      </td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><center><?php echo number_format($SQL['valor'],2,",","."); ?></center></div>
                      </td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><center><?php echo date("d/m/Y",strtotime($SQL['date'])); ?></center></div>
                      </td>
									</tr>
								<?php endwhile; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="" class="btn btn-sm btn-success float-left" data-toggle="modal" data-target="#exampleModal">Inserir Cupom</a>
                <a href="" class="btn btn-sm btn-secondary float-right" data-toggle="modal" data-target=".bd-example-modal-lg">Visualizar todos Cupons</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
              <!-- Modal grande -->
              <?php
                  require_once '../../class/Conexao.class.php';
                  // abre a conexão
                  $PDO = ConexaoDB();
                  // SQL para selecionar os registros
                  $sql_msg = "SELECT imp.*,imp.proprio_cod_veiculo,PROP.desc_veiculo, fun.nome_funcionario, forn.nome_fornecedor,USERR.nome_user FROM tb_import AS imp LEFT JOIN tb_proprio AS PROP ON imp.proprio_cod_veiculo = prop.cod_veiculo LEFT JOIN tb_funcionario AS FUN ON IMP.funcionario_cod_veiculo = fun.cod_veiculo LEFT JOIN tb_fornecedor AS forn ON imp.fornecedor_cod_veiculo = forn.cod_veiculo LEFT JOIN tb_user AS USERR ON IMP.id_user=USERR.id_user WHERE imp.date_now = curdate() GROUP BY imp.id_cupom ORDER BY `date` DESC LIMIT 1000";
                  // seleciona os registros
                  $resultado_msg = $PDO->prepare($sql_msg);

                  $resultado_msg->execute();
                ?>
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title h4" id="myLargeModalLabel">Lista de Cupons no SistemaGSG</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <table class="table m-0">
                    <thead>
                    <tr>
                      <th><center>Cupom</center></th>
                      <th><center>Descrição</center></th>
                      <th><center>Status</center></th>
                      <th><center>Produto</center></th>
                      <th><center>Litros</center></th>
                      <th><center>Valor</center></th>
                      <th><center>Data</center></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
								//Para obter os dados pode ser utilizado um while percorrendo assim cada linha retornada do banco de dados:
								while ($SQL = $resultado_msg->fetch(PDO::FETCH_ASSOC)): ?>
									<tr>
                    <td><center><a tabindex="0" title="Importado por" data-toggle="popover" data-placement="top" data-content="<?php echo $SQL['nome_user']; ?>"><?php echo $SQL['id_cupom']; ?></a></center></td>
                    <td><?php if($SQL['desc_veiculo'] != NULL){
                      echo $SQL['desc_veiculo'];
                    }elseif($SQL['nome_funcionario'] != NULL){
                      echo $SQL['nome_funcionario'];
                    }elseif($SQL['nome_fornecedor'] != NULL){
                      echo $SQL['nome_fornecedor'];
                    } ?></td>
                    <td><center><span class="badge badge-pill badge-<?php if($SQL['status_cupom']==1){echo"success";}elseif($SQL['status_cupom']==2){echo"warning";}elseif($SQL['status_cupom']==3){echo"danger";}elseif($SQL['status_cupom']==4){echo"info";}else{echo"other";}?>"><?php if($SQL['status_cupom']==1){
                      echo "Sucesso";
                    }elseif($SQL['status_cupom']==2){
                      echo "Pendente";
                    }elseif($SQL['status_cupom']==3){
                      echo  "Cancelado";
                    }else{
                      echo  "Processando";
                    } ?></span></center></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><center><?php if($SQL['cod_produto']==403){
                          echo "Gasolina";
                        }elseif($SQL['cod_produto']==404){
                          echo  "Diesel S10";
                        }else{
                          echo "Não Identificado";
                        } ?></center></div>
                      </td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><center><?php echo number_format($SQL['litros'],2,",","."); ?></center></div>
                      </td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><center><?php echo number_format($SQL['valor'],2,",","."); ?></center></div>
                      </td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><center><?php echo date("d/m/Y",strtotime($SQL['date'])); ?></center></div>
                      </td>
									</tr>
								<?php endwhile; ?>
                    </tbody>
                  </table>
                  </div>
                </div>
                </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendário
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-success">
              <div class="card-header">
                <h3 class="card-title">Chat Direto</h3>
                <?php
                  require_once '../../class/Conexao.class.php';
                  // abre a conexão
                  $PDO = ConexaoDB();
                  // SQL para selecionar os registros
                  $QUERYSELECTCHAT = "SELECT * FROM tb_chat AS chatt LEFT JOIN tb_user AS userr ON chatt.id_user=userr.id_user ORDER BY `chatt`.`id`  DESC";
                  // seleciona os registros
                  $QUERYRESULTCHAT = $PDO->prepare($QUERYSELECTCHAT);

                  $QUERYRESULTCHAT->execute();
                ?>
                <div class="card-tools">
                  <span data-toggle="tooltip" title="<?php echo "$chatcont"; ?> Mensagens" class="badge badge-pill badge-success"><?php echo "$chatcont"; ?></span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Emojis - Cópie o código e acrecente no inicio &"
                          data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <?php while ($QUERYSQLCHAT = $QUERYRESULTCHAT->fetch(PDO::FETCH_ASSOC)): ?>
                  <!-- Mensagens do Usuário -->
                  <?php if ($QUERYSQLCHAT['type_user']==2) { ?>
                    <div class="direct-chat-msg">
                  <?php }else{ ?>
                    <div class="direct-chat-msg right">
                  <?php } ?>
                    <div class="direct-chat-infos clearfix">
                  <?php if ($QUERYSQLCHAT['type_user']==2) { ?>
                    <span class="direct-chat-name float-left"><?php if ($QUERYSQLCHAT['type_user']==2) { echo $QUERYSQLCHAT['login_user']; } ?></span>
                  <?php }else{ ?>
                    <span class="direct-chat-name float-right"><?php if ($QUERYSQLCHAT['type_user']==1) { echo $QUERYSQLCHAT['login_user']; } ?></span>
                  <?php } ?>
                  <?php if ($QUERYSQLCHAT['type_user']==2) { ?>
                    <span class="direct-chat-timestamp float-right"><?php if ($QUERYSQLCHAT['type_user']==2) { echo $QUERYSQLCHAT['hora']; } ?> <?php if ($QUERYSQLCHAT['type_user']==2) { echo date("d/m/Y",strtotime($QUERYSQLCHAT['data'])); } ?></span>
                  <?php }else{ ?>
                    <span class="direct-chat-timestamp float-left"><?php if ($QUERYSQLCHAT['type_user']==1) { echo $QUERYSQLCHAT['hora']; } ?> <?php if ($QUERYSQLCHAT['type_user']==1) { echo date("d/m/Y",strtotime($QUERYSQLCHAT['data'])); } ?></span>
                    <?php } ?>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <?php if ($QUERYSQLCHAT['type_user']==2) { ?>
                    <img class="direct-chat-img" src="dist/img/<?php if ($QUERYSQLCHAT['type_user']==2) { echo $QUERYSQLCHAT['avatar']; } ?>" alt="message user image">
                    <?php }else{ ?>
                    <img class="direct-chat-img" src="dist/img/<?php if ($QUERYSQLCHAT['type_user']==1) { echo $QUERYSQLCHAT['avatar']; } ?>" alt="message user image">
                      <?php } ?>
                    <!-- /.direct-chat-img -->
                    <?php if ($QUERYSQLCHAT['type_user']==2) { ?>
                    <div class="direct-chat-text">
                      <?php if ($QUERYSQLCHAT['type_user']==2) { echo $QUERYSQLCHAT['chat']; } ?>
                    </div>
                    <?php }else{ ?>
                    <div class="direct-chat-text">
                      <?php if ($QUERYSQLCHAT['type_user']==1) { echo $QUERYSQLCHAT['chat']; } ?>
                    </div>
                    <?php } ?>
                    <!-- /.direct-chat-text -->
                  </div>
                  <?php endwhile; ?>
                  <!-- /.direct-chat-msg -->
                </div>
                <!--/.direct-chat-messages-->
                <!-- Contacts are loaded here -->
                <?php require_once 'emoji/emoji.html'; ?>
                </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="" method="post">
                  <div class="input-group">
                    <input type="text" name="message" data-emojiable="true" data-emoji-input="unicode" placeholder="Envie uma Mensagem ..." class="form-control">
                    <input type="text" name="user_id" hidden value="<?php echo "$id_userr"; ?>" class="form-control">
                    <span class="input-group-append">
                      <button type="submit" name="btnChat" class="btn btn-success">Chat</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
            <?php
                  require_once '../../class/Conexao.class.php';
                  // abre a conexão
                  $PDO = ConexaoDB();
                  // SQL para selecionar os registros
                  $QUERYSELECT = "SELECT * FROM `tb_tarefas` WHERE date_now = CURDATE() GROUP BY hora ORDER BY `tb_tarefas`.`id_tarefa` DESC LIMIT 5";
                  // seleciona os registros
                  $QUERYRESULT = $PDO->prepare($QUERYSELECT);

                  $QUERYRESULT->execute();
                ?>
            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Lista de Tarefas
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                <?php while ($QUERYSQL = $QUERYRESULT->fetch(PDO::FETCH_ASSOC)): ?>
                <li>
                  <div  class="icheck-success d-inline ml-2">
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                      <input type="checkbox" value="" name="todo<?php echo $QUERYSQL['id_tarefa']; ?>" id="todoCheck<?php echo $QUERYSQL['id_tarefa']; ?>" <?php echo $QUERYSQL['marqCheck']; ?>>
                      <label for="todoCheck<?php echo $QUERYSQL['id_tarefa']; ?>"></label>
                    </div>
                    <?php
                    $hora1 = date('06:00:00');
                    $hora2 = date('09:59:59');
                    $hora3 = date('10:00:00');
                    $hora4 = date('13:59:59');
                    $hora5 = date('14:00:00');
                    $hora6 = date('15:39:59');
                    ?>
                    <span class="text"><?php echo $QUERYSQL['titulo']; ?></span>
                    <small class="badge badge-pill badge-<?php if($QUERYSQL['hora'] > $hora1 && $QUERYSQL['hora'] < $hora2 ){echo"success";} elseif($QUERYSQL['hora'] > $hora3 && $QUERYSQL['hora'] < $hora4 ){echo"info";} elseif($QUERYSQL['hora'] > $hora5 && $QUERYSQL['hora'] < $hora6 ){echo"danger";} else {echo"warning";} ?>"><i class="far fa-clock"></i> <?php echo $QUERYSQL['hora']; ?></small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <?php endwhile; ?>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
            <!-- Map card -->
            <div class="card bg-gradient-success collapsed-card">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button"
                          class="btn btn-success btn-sm daterange"
                          data-toggle="tooltip"
                          title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button"
                          class="btn btn-success btn-sm"
                          data-card-widget="collapse"
                          data-toggle="tooltip"
                          title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo ''.$ANOINICIO.''; ?>-<?php echo ''.$ANOFIM.''; ?> <a href="#">SistemaGSG</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> <?php echo ''.$VERSIONPROG.''; ?>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  //Gráfico em Barra
  google.charts.load('current', { 'packages': ['bar'] });
  google.charts.setOnLoadCallback(drawChartBar);
</script>
<script>
    //Gráfico em Pizza
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChartPie);
</script>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Inserir Cupom Avulso</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="recipient-cupom" class="col-form-label">Cupom:</label>
              <input type="text" class="form-control" name="Cupom" id="Cupom">
            </div>
            <div class="form-group">
              <label for="recipient-veiculo" class="col-form-label">Veículo:</label>
              <input type="text" class="form-control" name="Veiculo" id="Veiculo">
            </div>
            <div class="form-group">
              <label for="recipient-quilometragem" class="col-form-label">Quilometragem:</label>
              <input type="text" class="form-control" name="Quilometragem" id="Quilometragem">
            </div>
            <div class="form-group">
              <label for="recipient-bomba" class="col-form-label">Bomba:</label>
              <input type="text" class="form-control" name="Bomba" id="Bomba">
            </div>
            <div class="form-group">
              <label for="recipient-servico" class="col-form-label">Serviço:</label>
              <input type="text" class="form-control" name="Servico" id="Servico">
            </div>
            <div class="form-group">
              <label for="recipient-litros" class="col-form-label">Litros:</label>
              <input type="text" class="form-control" name="Litros" id="Litros">
            </div>
            <div class="form-group">
              <label for="recipient-valor" class="col-form-label">Valor:</label>
              <input type="text" class="form-control" name="Valor" id="Valor">
            </div>
            <div class="form-group">
              <label for="recipient-produto" class="col-form-label">Produto:</label>
                <select name="selectCombust" class="form-control" id="selectCombust">
                  <option value="403">Gasolina</option>
                  <option value="404">Diesel S10</option>
                </select>
            </div>
            <div class="form-group">
              <label for="SelectSafra">Safra: </label>
                <select name="SelectSafra" class="form-control" id="SelectSafra">
                  <option value="4">2019/2020</option>
                  <option value="5">2020/2021</option>
                  <option value="6">2021/2022</option>
                  <option value="7">2022/2023</option>
                  <option value="8">2023/2024</option>
                  <option value="9">2024/2025</option>
                  <option value="10">2025/2026</option>
                  <option value="11">2026/2027</option>
                  <option value="14">2027/2028</option>
                  <option value="15">2028/2029</option>
                  <option value="16">2029/2030</option>
              </select>
          </div>
            <div class="form-group">
              <label for="recipient-data" class="col-form-label">Data:</label>
              <input type="text" class="form-control" name="calendario" id="calendario">
            </div>
            <div class="form-group">
              <label for="recipient-hora" class="col-form-label">Hora:</label>
              <input type="time" step="1" class="form-control" name="Hora" id="Hora">
            </div>
            <input type="text" name="User" id="User" hidden value="<?php echo($id_userr); ?>">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" name="btnEnviarCupom" id="btnEnviarCupom" class="btn btn-success">Enviar</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>
</body>
</html>
