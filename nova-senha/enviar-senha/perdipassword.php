<?php
require_once '../../class/Conexao.class.php';
$Usuario = $_POST['user'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SistemaGSG | Redefinir Senha</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../template/dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../template/dashboard/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="../../index2.html"><b>SistemaGSG</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name"><?php echo $Usuario; ?></div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="../../template/dashboard/dist/img/avatar5.png" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->
    <!-- lockscreen credentials (contains the form) -->
    <?php
      if( !empty($_POST) ){
        // processar o pedido
      
        $user = $_POST['user'];
        $q = mysqli_query($CONNECTIONINCLUDE,"SELECT * FROM tb_user WHERE login_user = '$user'");
      
        if( mysqli_num_rows($q) == 1 ){
          // o utilizador existe, vamos gerar um link único e enviá-lo para o e-mail
      
          // gerar a chave
          // exemplo adaptado de http://snipplr.com/view/20236/
          $chave = sha1(uniqid(mt_rand()."fire@usga#SistemaGSGV2.00", true));
          //$this->password = sha1($dados['password']."fire@usga#SistemaGSG");
      
          // guardar este par de valores na tabela para confirmar mais tarde
          $conf = mysqli_query($CONNECTIONINCLUDE,"INSERT INTO tb_recuperacao VALUES ('$user', '$chave', NOW())");
      
          if( mysqli_affected_rows($CONNECTIONINCLUDE) == 1 ){
      
            $link = "http://10.2.1.4/SistemaGSGv2.0/nova-senha/enviar-senha/recuperar.php?utilizador=$user&confirmacao=$chave";
      
        // Apenas para testar o link, no caso do e-mail falhar
        echo '
          <div class="input-group" align="right">
            <a href="'.$link.'" ><center>..............  Clique Aqui!</center></a>
          </div>        
        ';
      
          } else {
            echo '<p>Não foi possível gerar o endereço único</p>';
      
          }
        } else {
        echo '<p>.............. Esse usuário não existe</p>';
      }
      } else {
        // mostrar formulário de recuperação
      }
    ?>
    <!-- /.lockscreen credentials -->

  </div><br>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2014-2021 <b><a href="#" class="text-black">SistemaGSG</a></b><br>
  </div>
</div>
<!-- /.center -->

<!-- jQuery -->
<script src="../../template/dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../template/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
