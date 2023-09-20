<?php
$inicio=$_POST['calendarioINICIO'];
$fim=$_POST['calendarioFIM'];
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_import` WHERE date BETWEEN '$inicio' AND '$fim'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$SAFRA = $sqline['date_year'];
	}
}
?>