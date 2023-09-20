<?php
$MCARDOINTERNO = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_merc_inter_exter` WHERE col_status ='145' AND col_tp_acucar='18' AND SAFRA='$SAFRA' GROUP BY col_contrato ORDER BY col_contrato ASC");
$ROWMCARDOINTERNO = mysqli_num_rows($MCARDOINTERNO);

$MCARDOINTERNO1 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_merc_inter_exter` WHERE col_status ='145' AND col_tp_acucar='18' AND SAFRA='$SAFRA' GROUP BY col_contrato ORDER BY col_contrato ASC");
$ROWMCARDOINTERNO1 = mysqli_num_rows($MCARDOINTERNO1);

$MCARDOINTERNO2 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_merc_inter_exter` WHERE col_status ='145' AND col_tp_acucar='18' AND SAFRA='$SAFRA' GROUP BY col_contrato ORDER BY col_contrato ASC");
$ROWMCARDOINTERNO2 = mysqli_num_rows($MCARDOINTERNO2);

$MCARDOINTERNO3 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_merc_inter_exter` WHERE col_status ='145' AND col_tp_acucar='18' AND SAFRA='$SAFRA' GROUP BY col_contrato ORDER BY col_contrato ASC");
$ROWMCARDOINTERNO3 = mysqli_num_rows($MCARDOINTERNO3);

$MCARDOINTERNO4 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_merc_inter_exter` WHERE col_status ='145' AND col_tp_acucar='18' AND SAFRA='$SAFRA' GROUP BY col_contrato ORDER BY col_contrato ASC");
$ROWMCARDOINTERNO4 = mysqli_num_rows($MCARDOINTERNO4);

$MCARDOINTERNO5 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_merc_inter_exter` WHERE col_status ='145' AND col_tp_acucar='18' AND SAFRA='$SAFRA' GROUP BY col_contrato ORDER BY col_contrato ASC");
$ROWMCARDOINTERNO5 = mysqli_num_rows($MCARDOINTERNO5);

$MCARDOINTERNO6 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_merc_inter_exter` WHERE col_status ='145' AND col_tp_acucar='18' AND SAFRA='$SAFRA' GROUP BY col_contrato ORDER BY col_contrato ASC");
$ROWMCARDOINTERNO6 = mysqli_num_rows($MCARDOINTERNO6);

$MCARDOINTERNO7 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT COUNT(col_contrato) AS HEIG FROM `tb_merc_inter_exter` WHERE col_status ='145' AND col_tp_acucar='18' AND SAFRA='$SAFRA'");
$ROWMCARDOINTERNO7 = mysqli_num_rows($MCARDOINTERNO7);

$MCARDOINTERNO8 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT COUNT(col_contrato) AS HEIG FROM `tb_merc_inter_exter` WHERE col_status ='145' AND col_tp_acucar='18' AND SAFRA='$SAFRA'");
$ROWMCARDOINTERNO8 = mysqli_num_rows($MCARDOINTERNO8);
?>