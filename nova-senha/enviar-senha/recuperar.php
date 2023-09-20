<?php
require_once '../../class/Funcoes.class.php';
require_once '../../class/Funcionario.class.php';
require_once '../../class/Conexao.class.php';

$objFc = new Funcoes ();
$objFn = new Funcionario();

$Usuario = $_GET['utilizador'];
if(isset($_POST['btnUpdatePassW'])){
  if($objFn->queryUpdatePassW($_POST) == 'ok'){
      echo'
      <head>
      <script type="text/javascript">alert("Sucesso!")</script>
      <meta http-equiv="refresh" content="0;url=http://10.2.1.4/SistemaGSGv2.0/" />
      </head>';

  }else{
      echo'<script type="text/javascript">alert("Erro em cadastrar")</script>';
  }
}
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
  require_once '../../class/Conexao.class.php';
  if( empty($_GET['utilizador']) || empty($_GET['confirmacao']) ){
    die('<p><center> Dados Inexistentes!</center></p>');
  }else{
  
  $SQL = mysqli_query($CONNECTIONINCLUDE, "SELECT id_user FROM `tb_user` WHERE login_user = '$Usuario'");
	$ROW = mysqli_num_rows($SQL);
	if ($ROW > 0){
		while($sqline = mysqli_fetch_array($SQL)){
			$SQLINELOGINID = $sqline['id_user'];
  		}
  }

  $user = $_GET['utilizador'];
  $hash = $_GET['confirmacao'];
 
  $q = mysqli_query($CONNECTIONINCLUDE,"SELECT * FROM tb_recuperacao WHERE utilizador = '$user' AND confirmacao = '$hash'");
  $ROW = mysqli_num_rows($q);
  if ($ROW == 0){

    echo '<a href="../../"><center>... Token não encontrado!</center></a>';

 }elseif($ROW == 1){
    mysqli_query($CONNECTIONINCLUDE,"DELETE FROM tb_recuperacao WHERE utilizador = '$user' AND confirmacao = '$hash'");
 
    echo '
    <form class="lockscreen-credentials" action="" method="post">
      <div class="input-group">
        <input type="password" class="form-control" name="password" id="password" placeholder="Digite a sua nova senha">
        <input type="text" hidden class="form-control" name="LoginID" id="LoginID" value="'.$SQLINELOGINID.'">
        <div class="input-group-append">
          <input type="submit" name="btnUpdatePassW" class="btn"></input>
        </div>
      </div>
    </form>
    ';
  }
}
?>
  </div><br><br>
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