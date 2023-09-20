<?php
require_once 'class/Conexao.class.php';
$logado = $_SESSION['username'];
$query = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_user WHERE login_user = '$logado'");
$row1 = mysqli_num_rows($query);
if ($row1 > 0){
	while($sqline = mysqli_fetch_array($query)){
        $id_userr = $sqline['id_user'];
		$WellcomeMesage = $sqline['updategsg'];
		}
    }
    if($WellcomeMesage == 1){
        $SQLINSERT = "UPDATE `tb_user` SET `updategsg` = '2' WHERE `tb_user`.`id_user` = '$id_userr'";
        $QUERY = mysqli_query($conn, $SQLINSERT);   
         
        header('location: template/wellcome/');
    }elseif($WellcomeMesage){
        header('location: template/dashboard/');
    }
?>
