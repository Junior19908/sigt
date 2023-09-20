<?php require_once '../../../../../include/verifica_user.php';?>
<?php require_once '../../../../../class/ligacoes.class.php';?>
<?php session_start(); require_once '../../../../../controller/user.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SistemaGSG | Reserva</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../../plugins/summernote/summernote-bs4.css">
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
			$(document).ready(function(){
			  $("#myInput").on("keyup", function() {
			    var value = $(this).val().toLowerCase();
			    $("#MinhaTabela tr").filter(function() {
			      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			    });
			  });
			});
		</script>  
<style>
  #myTableOk{
    float: left;
    margin: auto;
  }
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input id="myInput" class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

        <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="../../../../../controller/logout/">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Brand Logo -->
    <a href="../../../" class="brand-link">
      <img src="../../../dist/img/LogoUSGA.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SistemaGSG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../dist/img/<?php echo ''.$avatar.'' ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo ''.$nick.''; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../../" class="nav-link">
                  <i class="fab fa-connectdevelop nav-icon"></i>
                  <p>Painel</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
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
                <a href="../" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Entrada de Bombas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                <i class="fas fa-gas-pump"></i>
                  <p>Alterar Bombas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../fisico/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Entrada Estoque Fisico</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../fisico/alterar-cadastro-fisico/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Alterar Entrada Fisíco</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../movimentos/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Entrada de Movimento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../movimentos/alterar-cadastro-movimentos/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Alterar Ent. de Movimento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../cupom/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Registrar Cupom Avulso</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../cupom/alterar-cadastro-cupom/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Alterar Ent. de Terceiros</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Almoxarifado
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-warning right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fa fa-list-alt nav-icon"></i>
                  <p>Lista de Baixas</p>
                </a>
              </li>
            </ul>
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
                <a href="../../relatorios/conferencia/" class="nav-link">
                  <i class="fas fa-chart-area nav-icon"></i>
                  <p>Conferência</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../relatorios/mapa/" class="nav-link">
                  <i class="fas fa-globe-americas nav-icon"></i>
                  <p>Mapa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../relatorios/funcionarios/" class="nav-link">
                  <i class="fas fa-car nav-icon"></i>
                  <p>Funcionários</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../relatorios/custo/" class="nav-link">
                  <i class="fas fa-donate nav-icon"></i>
                  <p>Custo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../relatorios/terceiros/" class="nav-link">
                  <i class="fas fa-truck-moving nav-icon"></i>
                  <p>Terceiros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../relatorios/fornecedor/" class="nav-link">
                  <i class="fab fa-pagelines nav-icon"></i>
                  <p>Fornecedor de Cana</p>
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
                <a href="../../matricula/" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Criar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../matricula/alterar/" class="nav-link">
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
                <a href="../../arquivo/conciliar/" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Conciliar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../arquivo/excel/" class="nav-link">
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
                <a href="../../import/cupom/" class="nav-link">
                  <i class="fas fa-server nav-icon"></i>
                  <p>Cupom</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../import/fornecedor/" class="nav-link">
                  <i class="fas fa-server nav-icon"></i>
                  <p>Fornecedor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../import/funcionario/" class="nav-link">
                  <i class="fas fa-server nav-icon"></i>
                  <p>Funcionário</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../import/proprio/" class="nav-link">
                  <i class="fas fa-server nav-icon"></i>
                  <p>Próprio</p>
                </a>
              </li>
            </ul>
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
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Requisições</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<!-- /.content-header -->
<!-- Main content -->
<?php  
    // abre a conexão
    $PDO = ConexaoDB();
    // SQL para selecionar os registros
    $SQL_SELECT = "SELECT * FROM `tb_almox_reserva`";
    // seleciona os registros
    $resultado_conexao = $PDO->prepare($SQL_SELECT);

    $resultado_conexao->execute();
?>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Lista de Requisições</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="myTableOk" class="table table-bordered table-striped">
        <thead >
        <tr>
          <th><center>Requisição</center></th>
          <th><center>Quant. Pedida</center></th>
          <th><center>Quant. Atendida</center></th>
          <th><center>Código</center></th>
          <th><center>Requisitante</center></th>
          <th><center>Usuário</center></th>
        </tr>
        </thead>
        <tbody id="MinhaTabela">
        <?php 
        //Para obter os dados pode ser utilizado um while percorrendo assim cada linha retornada do banco de dados:
        while ($SQL = $resultado_conexao->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                  <?php $qtdreserva = $SQL['QDTSOLICITADA'];  ?>
                    <td><center><?php echo $SQL['RESERVA']; ?></center></td>
                    <td><center><?php echo $SQL['QTDPEDIDA']; ?></center></td>
                    <td><center><input type="text" name="QuantAdent" size="2" id="QuantAdent" style="text-align: center;" value="<?php echo($qtdreserva) ?>" maxlength="2"></center></td>
                    <td><center><?php echo $SQL['MATERIAL']; ?></center></td>
                    <td><center><?php echo $SQL['RECEBEDOR']; ?></center></td>
                    <td><center><?php echo $nome; ?></center></td>
                </tr>
              <?php endwhile; ?>
        </tbody>
        <tfoot id="myTable">
        <tr>
          <th><center>Requisição</center></th>
          <th><center>Quant. Pedida</center></th>
          <th><center>Quant. Atendida</center></th>
          <th><center>Código</center></th>
          <th><center>Requisitante</center></th>
          <th><center>Usuário</center></th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->    <!-- /.card -->
</div>
<!-- Modal -->
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
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../../plugins/moment/moment.min.js"></script>
<script src="../../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
    </body>
</html>