<?php
require_once 'Funcoes.class.php';
require_once 'Funcionario.class.php';
$objFn = new Funcionario();

if (isset($_POST['btnCadastro'])) {
    if ($objFn->queryCadastroGeral($_POST) == 'funcionario') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Funcionário inserido, tenha um bom dia!'
                })
            });
        </script>";
    } elseif ($objFn->queryCadastroGeral($_POST) == 'proprio') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Próprio inserido, tenha um bom dia!'
                })
            });
        </script>";
    } elseif ($objFn->queryCadastroGeral($_POST) == 'fornecedor') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Fornecedor inserido, tenha um bom dia!'
                })
            });
        </script>";
    } elseif ($objFn->queryCadastroGeral($_POST) == 'usina') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Veículo da Industria inserido, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Contate o Administrador do Sistema ou verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}

if (isset($_POST['btnContaines'])) {
    if ($objFn->queryContainers($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Tanque Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Tanque Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Tanque não Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Tanque não Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnBooking'])) {
    if ($objFn->queryBooking($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro enviado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Booking Inserido com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro!, Registro não enviado.',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Booking não Inserido, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnEventoNF'])) {
    if ($objFn->queryEvento($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro enviado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Evento Inserido com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro!, Registro não enviado.',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Evento não Inserido, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnBookingManual'])) {
    if ($objFn->queryBookingManual($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro enviado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Informações Inseridas com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro!, Registro não enviado.',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Informação não Inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnFilaCarregamento'])) {
    if ($objFn->queryCarregaMentoManual($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro enviado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Informações Inseridas com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro!, Registro não enviado.',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Informação não Inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateTanques'])) {
    if ($objFn->queryUpdateTanques($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Tanque Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Tanque Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Tanque não Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Tanque não Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnSolcRequisicao'])) {
    if ($objFn->querySolcRequisicao($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Solicitação Enviada!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Solicitação enviada com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } elseif ($objFn->querySolcRequisicao($_POST) == 'erro') {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! em sua solicitação',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Solicitação não enviada, verifique os dados e tente novamente.'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-warning', 
                    title: 'Alerta! Não Registrado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Reserva já solicitada, outro usuário está fazendo ou já fez esse registro.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnChat'])) {
    if ($objFn->queryChat($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='plugins/moment/moment.min.js'></script>
        <script src='plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Mensagem Enviada!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Mensagem Enviada, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='plugins/moment/moment.min.js'></script>
        <script src='plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Chat',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Chat não Enviado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateCadastro'])) {
    if ($objFn->queryUpdateCadastro($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Cadastro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro de Funcionário Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Cadastro não Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro não Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateCadastroFornecedor'])) {
    if ($objFn->queryUpdateCadastroFornecedor($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Cadastro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro de Fornecedor Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Cadastro não Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro não Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateCadastroUsina'])) {
    if ($objFn->queryUpdateCadastroUsina($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Cadastro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Cadastro não Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro não Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnAlterarUser'])) {
    if ($objFn->queryUpdateCadastroUser($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Cadastro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Cadastro não Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro não Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}

if (isset($_POST['btnCadastroUser'])) {
    if ($objFn->CadastroUser($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Cadastro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Cadastro não Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cadastro não Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateCupom'])) {
    if ($objFn->queryUpdateCupom($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Cupom Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cupom Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Cupom não Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cupom não Atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateBombas'])) {
    if ($objFn->queryUpdateBombas($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Leitura alterada com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Bomba Não Alterada',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Leitura não inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateOvCia'])) {
    if ($objFn->ModfOvsMesCIA($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../..//dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Vendas alterada com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Ordem de Vendas não Alterada',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Vendas não inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateOvSaida'])) {
    if ($objFn->ModfOvsSaida($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../..//dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Vendas alterada com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Ordem de Vendas não Alterada',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Vendas não inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnDeleteOv'])) {
    if ($objFn->DeletarOvs($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../..//dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Venda deletada com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Ordem de Vendas não Alterada',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Vendas não deletada, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateContrato'])) {
    if ($objFn->ModfContratos($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../..//dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Contrato Atualizado com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Contrato não Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Contrato não atualizado, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnEnviarOrdem'])) {
    if ($objFn->InserirOV($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../..//dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Vendas inserida com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Ordem de Venda não Inserida',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Ordem de Vendas não inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnEnviarSaida'])) {
    if ($objFn->InserirSaidaOV($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../..//dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Saída inserida com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Saída não Inserida',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Saída não inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnEnviarContrato'])) {
    if ($objFn->InserirContratoOV($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../..//dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-primary', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Contrato inserido com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../../../plugins/moment/moment.min.js'></script>
        <script src='../../../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='../../../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Contrato Não Inserido',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Contrato não inserido, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnUpdateMovimentos'])) {
    if ($objFn->queryUpdateMovimentos($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Atualizado!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Movimentos Atualizados com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Movimento Não Atualizado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Movimentos não Atualizados, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnRequisicao'])) {
    if ($objFn->queryRequisicao($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Material inserida com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } elseif ($objFn->queryRequisicao($_POST) == 'outro') {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-warning', 
                    title: 'Alerta! Não Registrado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Material não inserido, outro usuário está fazendo ou já fez esse registro.'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Não Registrado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Material não inserido, você já fez essa baixa.'
                })
            });
        </script>";
    }
}

if (isset($_POST['btnBombas'])) {
    if ($objFn->queryBombas($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Leitura inserida com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Não Registrado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Leitura não inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnRegistroAtividade'])) {
    if ($objFn->queryRegistroAtividade($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido! ',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Atividade registrada com sucesso!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../../plugins/moment/moment.min.js'></script>
        <script src='../../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Registro não inserido.',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Atividade não inserida, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnTanque'])) {
    if ($objFn->queryTanque($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Tanque inserido com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Não Registrado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Tanque não inserido, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnMovimentos'])) {
    if ($objFn->queryInsertMovimentos($_POST) == 'ok') {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Movimento inserido com sucesso, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='../../plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='../../plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='../../plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='../../plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='../../plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='../../plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='../../plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='../../plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='../../plugins/moment/moment.min.js'></script>
        <script src='../../plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='../../plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='../../dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=''../../dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='../../dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro! Não Registrado',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Movimento não inserido, verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
if (isset($_POST['btnEnviarCupom'])) {
    if ($objFn->queryCupom($_POST) == 'funcionario') {
        echo "
        <!-- jQuery -->
        <script src='plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='plugins/moment/moment.min.js'></script>
        <script src='plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cupom de Funcionário inserido, tenha um bom dia!'
                })
            });
        </script>";
    } elseif ($objFn->queryCupom($_POST) == 'proprio') {
        echo "
        <!-- jQuery -->
        <script src='plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='plugins/moment/moment.min.js'></script>
        <script src='plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cupom da Indústria inserido, tenha um bom dia!'
                })
            });
        </script>";
    } elseif ($objFn->queryCupom($_POST) == 'fornecedor') {
        echo "
        <!-- jQuery -->
        <script src='plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='plugins/moment/moment.min.js'></script>
        <script src='plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-success', 
                    title: 'Registro Inserido!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Cupom de Fornecedor inserido, tenha um bom dia!'
                })
            });
        </script>";
    } else {
        echo "
        <!-- jQuery -->
        <script src='plugins/jquery/jquery.min.js'></script>
        <!-- jQuery UI 1.11.4 -->
        <script src='plugins/jquery-ui/jquery-ui.min.js'></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src='plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <!-- ChartJS -->
        <script src='plugins/chart.js/Chart.min.js'></script>
        <!-- Sparkline -->
        <script src='plugins/sparklines/sparkline.js'></script>
        <!-- JQVMap -->
        <script src='plugins/jqvmap/jquery.vmap.min.js'></script>
        <script src='plugins/jqvmap/maps/jquery.vmap.usa.js'></script>
        <!-- jQuery Knob Chart -->
        <script src='plugins/jquery-knob/jquery.knob.min.js'></script>
        <!-- daterangepicker -->
        <script src='plugins/moment/moment.min.js'></script>
        <script src='plugins/daterangepicker/daterangepicker.js'></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src='plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
        <!-- Summernote -->
        <script src='plugins/summernote/summernote-bs4.min.js'></script>
        <!-- overlayScrollbars -->
        <script src='plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
        <!-- AdminLTE App -->
        <script src='dist/js/adminlte.js'></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src='dist/js/pages/dashboard.js'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='dist/js/demo.js'></script>
        <script type='text/javascript'>
            $(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger', 
                    title: 'Erro!',
                    subtitle: 'SistemaGSG V2.0',
                    body: 'Contate o Administrador do Sistema ou verifique os dados e tente novamente.'
                })
            });
        </script>";
    }
}
