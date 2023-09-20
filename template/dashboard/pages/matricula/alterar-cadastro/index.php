<?php require_once '../../../../../include/verifica_user.php';?>
<?php require_once '../../../../../class/ligacoes.class.php';?>
<?php session_start(); require_once '../../../../../controller/user.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SistemaGSG | Alterar Cadastros</title>
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
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>
<link rel="shortcut icon" href="../../../../../css/ico/favicon.ico" type="image/x-icon"/>
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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../../" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input id="myInput" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
              <!--<li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./../../../" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>-->
            </ul>
          </li>
          <!--<li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>-->
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
                <a href="../../bombas/" class="nav-link">
                <i class="fas fa-gas-pump"></i>
                  <p>Entrada de Bombas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../bombas/alterar-cadastro-bombas/" class="nav-link">
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
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Cadastros
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-warning right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Criar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../alterar/" class="nav-link active">
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
              <li class="breadcrumb-item active">Alterar Cadastro</li>
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
    $SQL_SELECT = "SELECT * FROM tb_funcionario";
    // seleciona os registros
    $resultado_conexao = $PDO->prepare($SQL_SELECT);

    $resultado_conexao->execute();
?>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Funcionários</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th><center>Cód. Veículo</center></th>
          <th><center>Funcionário</center></th>
          <th><center>Placa</center></th>
          <th><center>Matricula</center></th>
          <th><center>Cód. SistemaGSG</center></th>
          <th><center>Centro de Custo</center></th>
          <th><center>Ações<center></th>
        </tr>
        </thead>
        <tbody  id="myTable">
        <?php 
        //Para obter os dados pode ser utilizado um while percorrendo assim cada linha retornada do banco de dados:
        while ($SQL = $resultado_conexao->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><center><?php echo $SQL['cod_veiculo']; ?></center></td>
                    <td><center><?php echo $SQL['nome_funcionario']; ?></center></td>
                    <td><center><?php echo $SQL['placa_veiculo']; ?></center></td>
                    <td><center><?php echo $SQL['func_matricula']; ?></center></td>
                    <td><center><?php echo $SQL['sistemagsg']; ?></center></td>
                    <td><center><?php echo $SQL['centro_custo']; ?></center></td>
                    <td>
                      <center>
                        <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $SQL['cod_veiculo']; ?>" data-whatevernome="<?php echo $SQL['nome_funcionario']; ?>" data-whateverplaca="<?php echo $SQL['placa_veiculo']; ?>" data-whateverStatus="<?php echo $SQL['col_status']; ?>" data-whatevermatricula="<?php echo $SQL['func_matricula']; ?>" data-whateversistemagsg="<?php echo $SQL['sistemagsg']; ?>" data-whatevercusto="<?php echo $SQL['centro_custo']; ?>" data-whateverr="<?php echo $SQL['id_cupom']; ?>">Alterar</button>
                      </center>
                    </td>
                </tr>
              <?php endwhile; ?>
        </tbody>
        <tfoot>
        <tr>
          <th><center>Cód. Veículo</center></th>
          <th><center>Funcionário</center></th>
          <th><center>Placa</center></th>
          <th><center>Matricula</center></th>
          <th><center>Cód. SistemaGSG</center></th>
          <th><center>Centro de Custo</center></th>
          <th><center>Ações<center></th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.Fim do card -->
  <!-- Main content -->
<?php  
    
    // abre a conexão
    $PDO = ConexaoDB();
    // SQL para selecionar os registros
    $SQL_SELECT = "SELECT * FROM tb_fornecedor";
    // seleciona os registros
    $resultado_conexao = $PDO->prepare($SQL_SELECT);

    $resultado_conexao->execute();
?>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Fornecedores de Cana</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th><center>Cód. Veículo</center></th>
          <th><center>Fornecedor</center></th>
          <th><center>Placa</center></th>
          <th><center>Código</center></th>
          <th><center>Contrato</center></th>
          <th><center>Nome Fazenda</center></th>
          <th><center>Centro de Custo</center></th>
          <th><center>Ações<center></th>
        </tr>
        </thead>
        <tbody  id="myTable">
        <?php 
        //Para obter os dados pode ser utilizado um while percorrendo assim cada linha retornada do banco de dados:
        while ($SQL = $resultado_conexao->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><center><?php echo $SQL['cod_veiculo']; ?></center></td>
                    <td><center><?php echo $SQL['nome_fornecedor']; ?></center></td>
                    <td><center><?php echo $SQL['placa_veiculo']; ?></center></td>
                    <td><center><?php echo $SQL['cod_fornecedor']; ?></center></td>
                    <td><center><?php echo $SQL['contrato_fornecedor']; ?></center></td>
                    <td><center><?php echo $SQL['nome_fazenda']; ?></center></td>
                    <td><center><?php echo $SQL['centro_custo']; ?></center></td>
                    <td>
                      <center>
                        <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#exampleModalFornecedor" data-whatever="<?php echo $SQL['cod_veiculo']; ?>" data-whatevernome="<?php echo $SQL['nome_fornecedor']; ?>" data-whateverplaca="<?php echo $SQL['placa_veiculo']; ?>" data-whatevercodigo="<?php echo $SQL['cod_fornecedor']; ?>" data-whatevercontrato="<?php echo $SQL['contrato_fornecedor']; ?>"data-whateverfazenda="<?php echo $SQL['nome_fazenda']; ?>" data-whatevercusto="<?php echo $SQL['centro_custo']; ?>" data-whateverr="<?php echo $SQL['id_cupom']; ?>">Alterar</button>
                      </center>
                    </td>
                </tr>
              <?php endwhile; ?>
        </tbody>
        <tfoot>
        <tr>
          <th><center>Cód. Veículo</center></th>
          <th><center>Fornecedor</center></th>
          <th><center>Placa</center></th>
          <th><center>Código</center></th>
          <th><center>Contrato</center></th>
          <th><center>Nome Fazenda</center></th>
          <th><center>Centro de Custo</center></th>
          <th><center>Ações<center></th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.Fim do card -->
  <!-- Main content -->
<?php  
    
    // abre a conexão
    $PDO = ConexaoDB();
    // SQL para selecionar os registros
    $SQL_SELECT = "SELECT * FROM tb_proprio";
    // seleciona os registros
    $resultado_conexao = $PDO->prepare($SQL_SELECT);

    $resultado_conexao->execute();
?>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Veículos Próprios</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th><center>Cód. Veículo</center></th>
          <th><center>Descrição do Veículo</center></th>
          <th><center>Placa</center></th>
          <th><center>Centro de Custo</center></th>
          <th><center>Ações<center></th>
        </tr>
        </thead>
        <tbody  id="myTable">
        <?php 
        //Para obter os dados pode ser utilizado um while percorrendo assim cada linha retornada do banco de dados:
        while ($SQL = $resultado_conexao->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><center><?php echo $SQL['cod_veiculo']; ?></center></td>
                    <td><center><?php echo $SQL['desc_veiculo']; ?></center></td>
                    <td><center><?php echo $SQL['placa_veiculo']; ?></center></td>
                    <td><center><?php echo $SQL['centro_custo']; ?></center></td>
                    <td>
                      <center>
                        <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#exampleModalUsina" data-whatever="<?php echo $SQL['cod_veiculo']; ?>" data-whatevernome="<?php echo $SQL['desc_veiculo']; ?>" data-whateverplaca="<?php echo $SQL['placa_veiculo']; ?>" data-whatevercusto="<?php echo $SQL['centro_custo']; ?>" data-whateverr="<?php echo $SQL['id_cupom']; ?>">Alterar</button>
                      </center>
                    </td>
                </tr>
              <?php endwhile; ?>
        </tbody>
        <tfoot>
        <tr>
          <th><center>Cód. Veículo</center></th>
          <th><center>Descrição do Veículo</center></th>
          <th><center>Placa</center></th>
          <th><center>Centro de Custo</center></th>
          <th><center>Ações<center></th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.Fim do card -->
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content bg-success">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Success Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form role="form" name="formCad" action="" method="post">
            <?php require_once '../../../../../controller/user.php'; ?>
          <div class="form-group">
              <label for="NomeFuncionario" class="col-form-label">Funcionário :</label>
              <input name="NomeFuncionario"  type="text" class="form-control" id="NomeFuncionario">
          </div>
          <div class="form-group">
              <label for="PlacaVeiculo" class="col-form-label">Placa :</label>
              <input name="PlacaVeiculo"  type="text" class="form-control" id="PlacaVeiculo">
          </div>
          <div class="form-group">
              <label for="FunciMatricula" class="col-form-label">Matricula :</label>
              <input name="FunciMatricula"  type="text" class="form-control" id="FunciMatricula">
          </div>
          <div class="form-group">
              <label for="SistemaGSG" class="col-form-label">Cód. SistemaGSG :</label>
              <input name="SistemaGSG"  type="text" class="form-control" id="SistemaGSG">
          </div>
          <div class="form-group">
              <label for="CentroCusto" class="col-form-label">Centro de Custo :</label>
              <input name="CentroCusto"  type="text" class="form-control" id="CentroCusto">
          </div>
          <div class="form-group">
              <label for="CupomIndet" class="col-form-label">Identificação :</label>
              <select  name="CupomIndet"  class="form-control" id="CupomIndet">
                <option value="1">Próprio</option>
                <option value="2">Fornecedor</option>
                <option value="3">Funcionário</option>
                <option value="4">Usina</option>
                <option value="5">Comboio</option>
                <option value="6">Terceiros</option>
                <option value="7">Aferição</option>
                <option value="10">NÃO CADASTRADO</option>
              </select>
          </div>
          <div class="form-group">
              <label for="colStatus" class="col-form-label">Status Funcionário :</label>
              <select  name="colStatus"  class="form-control" id="colStatus">
                <option value="1">Ativar</option>
                <option value="2">Desativar</option>
              </select>
        </div>
        <input name="id" type="hidden" id="id">
        <input type="text" name="id_user" hidden="" value="<?php echo($id_userr) ?>">
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
          <button type="submit" name="btnUpdateCadastro" class="btn btn-outline-light">Alterar</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalFornecedor">
  <div class="modal-dialog">
    <div class="modal-content bg-success">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Success Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form role="form" name="formCadFornecedor" action="" method="post">
            <?php require_once '../../../../../controller/user.php'; ?>
          <div class="form-group">
              <label for="NomeFornecedor" class="col-form-label">Funcionário :</label>
              <input name="NomeFornecedor"  type="text" class="form-control" id="NomeFornecedor">
          </div>
          <div class="form-group">
              <label for="PlacaVeiculo" class="col-form-label">Placa :</label>
              <input name="PlacaVeiculo"  type="text" class="form-control" id="PlacaVeiculo">
          </div>
          <div class="form-group">
              <label for="Codigo" class="col-form-label">Código :</label>
              <input name="Codigo"  type="text" class="form-control" id="Codigo">
          </div>
          <div class="form-group">
              <label for="Contrato" class="col-form-label">Contrato :</label>
              <input name="Contrato"  type="text" class="form-control" id="Contrato">
          </div>
          <div class="form-group">
              <label for="Fazenda" class="col-form-label">Nome Fazenda :</label>
              <input name="Fazenda"  type="text" class="form-control" id="Fazenda">
          </div>          
          <div class="form-group">
              <label for="CentroCusto" class="col-form-label">Centro de Custo :</label>
              <input name="CentroCusto"  type="text" class="form-control" id="CentroCusto">
          </div>
          <div class="form-group">
              <label for="CupomIndet" class="col-form-label">Identificação :</label>
              <select  name="CupomIndet"  class="form-control" id="CupomIndet">
                <option value="1">Próprio</option>
                <option value="2">Fornecedor</option>
                <option value="3">Funcionário</option>
                <option value="4">Usina</option>
                <option value="5">Comboio</option>
                <option value="6">Terceiros</option>
                <option value="7">Aferição</option>
                <option value="10">NÃO CADASTRADO</option>
              </select>
          </div>
          </div>

        </div>
        <input name="id" type="hidden" id="id">
        <input type="text" name="id_user" hidden="" value="<?php echo($id_userr) ?>">
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
          <button type="submit" name="btnUpdateCadastroFornecedor" class="btn btn-outline-light">Alterar</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalUsina">
  <div class="modal-dialog">
    <div class="modal-content bg-success">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Success Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form role="form" name="formCadUsina" action="" method="post">
            <?php require_once '../../../../../controller/user.php'; ?>
          <div class="form-group">
              <label for="Veiculo" class="col-form-label">Veículo :</label>
              <input name="Veiculo"  type="text" class="form-control" id="Veiculo">
          </div>
          <div class="form-group">
              <label for="PlacaVeiculo" class="col-form-label">Placa :</label>
              <input name="PlacaVeiculo"  type="text" class="form-control" id="PlacaVeiculo">
          </div>        
          <div class="form-group">
              <label for="CentroCusto" class="col-form-label">Centro de Custo :</label>
              <input name="CentroCusto"  type="text" class="form-control" id="CentroCusto">
          </div>
          <div class="form-group">
              <label for="CupomIndet" class="col-form-label">Identificação :</label>
              <select  name="CupomIndet"  class="form-control" id="CupomIndet">
                <option value="1">Próprio</option>
                <option value="2">Fornecedor</option>
                <option value="3">Funcionário</option>
                <option value="4">Usina</option>
                <option value="5">Comboio</option>
                <option value="6">Terceiros</option>
                <option value="7">Aferição</option>
                <option value="10">NÃO CADASTRADO</option>
              </select>
          </div>
        </div>
        <input name="id" type="hidden" id="id">
        <input type="text" name="id_user" hidden="" value="<?php echo($id_userr) ?>">
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
          <button type="submit" name="btnUpdateCadastroUsina" class="btn btn-outline-light">Alterar</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
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
<script type="text/javascript">
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Botão que acionou o modal
    var NomeFuncionario = button.data('whatevernome')
    var PlacaVeiculo = button.data('whateverplaca')
    var FunciMatricula = button.data('whatevermatricula')
    var SistemaGSG = button.data('whateversistemagsg')
    var CentroCusto = button.data('whatevercusto')
    var CodVeiculo = button.data('whatever')
    var CupomIndet = button.data('whateverr')
    var ColStatus = button.data('whateverStatus')

    // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
    // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
    var modal = $(this)
    modal.find('.modal-title').text('Id das Bombas Nº: ' + CodVeiculo)
    modal.find('#id').val(CodVeiculo)
    modal.find('#NomeFuncionario').val(NomeFuncionario)
    modal.find('#PlacaVeiculo').val(PlacaVeiculo)
    modal.find('#FunciMatricula').val(FunciMatricula)
    modal.find('#SistemaGSG').val(SistemaGSG)
    modal.find('#CentroCusto').val(CentroCusto)
    modal.find('#CupomIndet').val(CupomIndet)    
    modal.find('#colStatus').val(ColStatus) 
  })

  $('#exampleModalFornecedor').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Botão que acionou o modal
    var NomeFornecedor = button.data('whatevernome')
    var PlacaVeiculo = button.data('whateverplaca')
    var CodFornecedor = button.data('whatevercodigo')
    var Contrato = button.data('whatevercontrato')
    var CentroCusto = button.data('whatevercusto')
    var CodVeiculo = button.data('whatever')
    var NomeFazenda = button.data('whateverfazenda')
    var CupomIndet = button.data('whateverr')

    // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
    // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
    var modal = $(this)
    modal.find('.modal-title').text('Id das Bombas Nº: ' + CodVeiculo)
    modal.find('#id').val(CodVeiculo)
    modal.find('#NomeFornecedor').val(NomeFornecedor)
    modal.find('#PlacaVeiculo').val(PlacaVeiculo)
    modal.find('#Codigo').val(CodFornecedor)
    modal.find('#Contrato').val(Contrato)
    modal.find('#Fazenda').val(NomeFazenda)
    modal.find('#CentroCusto').val(CentroCusto)
    modal.find('#CupomIndet').val(CupomIndet)    
  })

    $('#exampleModalUsina').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Botão que acionou o modal
    var NomeFornecedor = button.data('whatevernome')
    var PlacaVeiculo = button.data('whateverplaca')
    var CentroCusto = button.data('whatevercusto')
    var CodVeiculo = button.data('whatever')
    var CupomIndet = button.data('whateverr')

    // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
    // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
    var modal = $(this)
    modal.find('.modal-title').text('Id das Bombas Nº: ' + CodVeiculo)
    modal.find('#id').val(CodVeiculo)
    modal.find('#Veiculo').val(NomeFornecedor)
    modal.find('#PlacaVeiculo').val(PlacaVeiculo)
    modal.find('#CentroCusto').val(CentroCusto)
    modal.find('#CupomIndet').val(CupomIndet)    
  })
</script>

    </body>
</html>