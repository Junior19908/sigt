<?php
error_reporting(0);
ini_set("display_errors", 0 );
session_start();
?>
<?php require_once '../../../../../include/verifica_user.php';?>
<?php require_once '../../../../../class/ligacoes.class.php';?>
<?php require_once '../../../../../controller/user.php'; ?>
<?php
if($type == 1){

}elseif($type == 3){

}else{
  echo'<head>
            <script type="text/javascript">alert("Você não tem autorização!")</script>
            <meta http-equiv="refresh" content="0;url=http://'.$servidorUsado.'/SistemaGSGv2.0/template/dashboard/" />
        </head>';
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SistemaGSG | Registro de Atividade do Material</title>
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
  <script src="https://kit.fontawesome.com/f7cca744ca.js" crossorigin="anonymous"></script>
  <script>
    $(function() {
        $("#calendario").datepicker({ dateFormat: 'yy-mm-dd'}).val();
        $("#calend").datepicker({ dateFormat: 'yy-mm-dd'}).val();
        $("#calendcontrato").datepicker({ dateFormat: 'yy-mm-dd'}).val();
    });
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
      $(function () {
    $('[data-toggle="popover"]').popover();
  });
    </script>
    <link rel="shortcut icon" href="../../../../../css/ico/favicon.ico" type="image/x-icon"/>
</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
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
          <a class="nav-link" href="../../../../controller/logout/">
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-success elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../../../dist/img/LogoUSGA.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SistemaGSG</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../../dist/img/<?php echo '' . $avatar . '' ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
          <a href="../../profile/" class="d-block"><?php echo ($nick); ?></a>
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
                  <a href="../fisico/" class="nav-link">
                    <i class="fas fa-gas-pump"></i>
                    <p>Entrada Estoque Fisico</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../fisico/alterar-cadastro-fisico/" class="nav-link">
                    <i class="fas fa-gas-pump"></i>
                    <p>Alterar Entrada Fisíco</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../movimentos/" class="nav-link">
                    <i class="fas fa-gas-pump"></i>
                    <p>Entrada de Movimento</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../movimentos/alterar-cadastro-movimentos/" class="nav-link">
                    <i class="fas fa-gas-pump"></i>
                    <p>Alterar Ent. de Movimento</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../cupom/" class="nav-link">
                    <i class="fas fa-gas-pump"></i>
                    <p>Registrar Cupom Avulso</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../cupom/alterar-cadastro-cupom/" class="nav-link">
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
                  <a href="../registros/" class="nav-link">
                    <i class="fa fa-shopping-cart nav-icon"></i>
                    <p>Registro de Atividade</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="lista/" class="nav-link active">
                    <i class="fa fa-list-alt nav-icon"></i>
                    <p>Lista de Registros</p>
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
                  <a href="../relatorios/conferencia/" class="nav-link">
                    <i class="fas fa-chart-area nav-icon"></i>
                    <p>Conferência</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../relatorios/mapa/" class="nav-link">
                    <i class="fas fa-globe-americas nav-icon"></i>
                    <p>Mapa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../relatorios/funcionarios/" class="nav-link">
                    <i class="fas fa-car nav-icon"></i>
                    <p>Funcionários</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../relatorios/custo/" class="nav-link">
                    <i class="fas fa-donate nav-icon"></i>
                    <p>Custo</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../relatorios/terceiros/" class="nav-link">
                    <i class="fas fa-truck-moving nav-icon"></i>
                    <p>Terceiros</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../relatorios/fornecedor/" class="nav-link">
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
                  <a href="../matricula/" class="nav-link">
                    <i class="fas fa-user-plus nav-icon"></i>
                    <p>Criar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../matricula/alterar/" class="nav-link">
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
                  <a href="../arquivo/conciliar/" class="nav-link">
                    <i class="fas fa-file-alt nav-icon"></i>
                    <p>Conciliar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../arquivo/excel/" class="nav-link">
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
                  <a href="../import/cupom/" class="nav-link">
                    <i class="fas fa-server nav-icon"></i>
                    <p>Cupom</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../import/fornecedor/" class="nav-link">
                    <i class="fas fa-server nav-icon"></i>
                    <p>Fornecedor</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../import/funcionario/" class="nav-link">
                    <i class="fas fa-server nav-icon"></i>
                    <p>Funcionário</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../import/proprio/" class="nav-link">
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
                <li class="breadcrumb-item active">SAP</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <?php  
          // abre a conexão
          $PDO = ConexaoAlmoxarifado();
          // SQL para selecionar os registros
          $SQL_SELECT = "SELECT * FROM `tb_registroatividades` LEFT JOIN tb_materiais ON tb_registroatividades.col_material=tb_materiais.col_codigoMaterial";
          // seleciona os registros
          $resultado_conexao = $PDO->prepare($SQL_SELECT);

          $resultado_conexao->execute();
      ?>
    <form method="POST" action="excel/index.php">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lista de Registros</h3>
        </div>
        <div><center><input id="todos" type="checkbox" name="nameAll"/> Marcar Todos/Desmarcar</center></div>
        <button type="submit" class="btn btn-block btn-success btn-xs">Baixar</button>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-xl-2">
          <table id="example1" class="table table-head-fixed">
            <thead>
            <tr>
              <th><center>Código</center></th>
              <th><center>Descrição</center></th>
              <th><center>Depósito</center></th>
              <th><center>Data</center></th>
              <th><center>Status</center></th>
              <th><center>Histórico do Item</center></th>
              <th><center>Lote</center></th>
              <th><center>Vencimento</center></th>
              <th><center>Quantidade</center></th>
              <th><center>Un.</center></th>
              <th><center>Pedido</center></th>
              <th><center>NF</center></th>
              <th><center>Usuário</center></th>
              <th><center></center></th>
              <th><center></center></th>
            </tr>
            </thead>
            <tbody id="myTable">
              <?php
                //Para obter os dados pode ser utilizado um while percorrendo assim cada linha retornada do banco de dados:
                while ($SQL = $resultado_conexao->fetch(PDO::FETCH_ASSOC)): ?>

                <tr>
                  <?php $id = $SQL['col_id'] ?>
                    <td><center><?php echo $SQL['col_material']; ?></center></td>
                    <td><center><?php echo $SQL['col_descricaoMaterial']; ?></center></td>
                    <td><center><?php echo $SQL['col_depositoMaterial']; ?></center></td>
                    <td><center><?php echo date("d/m/Y H:i:s",strtotime($SQL['col_isercaoBanco'])); ?></center></td>
                    <td>
                      <center>
                        <?php if($SQL['col_status']==1){
                          echo '<i class="fas fa-check-circle" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Aprovado"></i>';
                        }elseif($SQL['col_status']==2){
                          echo '<i class="fa-solid fa-circle-xmark" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Reprovado"></i>';
                        }elseif($SQL['col_status']==3){
                          echo '<i class="fa-solid fa-circle-exclamation" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Analisando"></i>';
                        }else{
                        } ?>
                      </center>
                    </td>
                    <td><?php echo $SQL['col_historicoAtividade']; ?></td>
                    <td><center><?php echo $SQL['col_numeroLote']; ?></center></td>
                    <td><center><?php echo date("d/m/Y",strtotime($SQL['col_vencimentoLote'])); ?></center></td>
                    <td><center><?php echo $SQL['col_quantidade']; ?></center></td>
                    <td><center>L</center></td>
                    <td><center><?php echo $SQL['col_pedido']; ?></center></td>
                    <td><center><?php echo $SQL['col_requisicao']; ?></center></td>
                    <td><center><?php echo $SQL['col_user']; ?></center></td>
                    <td>
                    <style>
                        .image-container {
                          overflow: hidden;
                        }

                        .preview-image {
                          transition: transform 0.3s ease;
                        }

                        .preview-image:hover {
                          transform: scale(1.2);
                        }
                  </style>
                      <div class="image-container">
                        <center>
                          <?php if (!empty($SQL['col_path']) || !isset($SQL['col_path'])): ?>
                            <img src="<?php echo $SQL['col_path']; ?>" alt="Preview da Imagem" class="preview-image" style="max-width: 100%; max-height: 200px;">
                          <?php endif; ?>
                        </center>
                      </div>
                    </td>
                    <td><center><?php echo "<input type='checkbox' class='lista' name=SQL[$id] value='1'>" ?></center></td>
                    <td>
                      <center>
                        <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#edicaoLivroRegistros" data-lote="<?php echo $SQL['col_numeroLote']; ?>" data-deposito="<?php echo $SQL['col_depositoMaterial']; ?>" data-registrostatus="<?php echo $SQL['col_status']; ?>">Editar</button>
                      </center>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </form>
      <!-- /.card -->
    </div>
</div>
<!--/.row-->
</div>
<!--/.container-fluid-->
</section>
<!--/.content-->
</div>
    <div class="modal fade" id="edicaoLivroRegistros">
  <div class="modal-dialog">
    <div class="modal-content bg-success">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Registro no Banco de Dados - Editor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form role="form" name="formCad" action="" method="post">
          <div class="form-group">
              <label for="recipient-lote" class="col-form-label">Lote:</label>
              <input name="lote"  type="text" class="form-control" id="recipient-lote">
          </div>
          <div class="form-group">
              <label for="recipient-deposito" class="col-form-label">Depósito:</label>
              <input name="deposito" readonly  type="text" class="form-control" id="recipient-deposito">
          </div>
          <div class="form-group">
            <label for="recipient-status" class="col-form-label">Status:</label>
              <select name="status" class="form-control" id="recipient-status">
                <option value="1">Aprovado</option>
                <option value="2">Reprovado</option>
                <option value="3">Analisando</option>
              </select>
          </div>
          <div class="form-group">
              <label for="recipient-pedido" class="col-form-label">Pedido:</label>
              <input name="pedido"  type="text" class="form-control" id="recipient-pedido">
          </div>
          <div class="form-group">
              <label for="recipient-requis" class="col-form-label">Requisição:</label>
              <input name="requis"  type="text" class="form-control" id="recipient-requis">
          </div>
        </div>
        <input name="id" type="hidden" id="id_cupom">
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
          <button type="submit" name="btnUpdateBombas" class="btn btn-outline-light">Alterar</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy;  <a href="#">SistemaGSG</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 
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
        <script>
            $(document) .ready(function(){

            $('#todos') .click(function(){
              var val = this.checked;
              //alert(val);
              $('.lista') .each(function(){
                $(this) .prop('checked', val);
              });
               });
              });


    $('#edicaoLivroRegistros').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Botão que acionou o modal
    var recipientbmb1 = button.data('lote') // Extrai informação dos atributos data-*
    var recipientbmb2 = button.data('deposito')
    var recipientbmb3 = button.data('registrostatus')
    var recipientbmb4 = button.data('bomba4')
    var recipientbmb5 = button.data('bomba5')
    var recipientbmb7 = button.data('bomba7')
    var recipientbmb8 = button.data('bomba8')
    var recipienttipo = button.data('tipo')
    var recipientdtbmb = button.data('databomba')
    var recipientID = button.data('idbmb')
    // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
    // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
    var modal = $(this)
    modal.find('.modal-title').text('Id das Bombas Nº: ' + recipientID)
    modal.find('#id_cupom').val(recipientID)
    modal.find('#recipient-lote').val(recipientbmb1)
    modal.find('#recipient-deposito').val(recipientbmb2)
    modal.find('#recipient-status').val(recipientbmb3)
    modal.find('#recipient-Bomba4').val(recipientbmb4)
    modal.find('#recipient-Bomba5').val(recipientbmb5)
    modal.find('#recipient-Bomba7').val(recipientbmb7)
    modal.find('#recipient-Bomba8').val(recipientbmb8)
    modal.find('#recipient-databomba').val(recipientdtbmb)
  })

      </script>
</body>

</html>