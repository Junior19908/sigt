<?php
$MCARDOEXTENO = mysqli_query($CONNECTIONFATURAMENTO, "SELECT col_nome FROM `tb_contratos` WHERE col_tpdv ='ZCME' AND SAFRA='$SAFRA' GROUP BY col_cliente ORDER BY col_nome ASC");
$ROWMCARDOEXTENO = mysqli_num_rows($MCARDOEXTENO);

$MCARDOEXTENO1 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT col_nocontrato_cliente FROM `tb_contratos` WHERE col_tpdv ='ZCME' AND SAFRA='$SAFRA' GROUP BY col_cliente ORDER BY col_nome ASC");
$ROWMCARDOEXTENO1 = mysqli_num_rows($MCARDOEXTENO1);

$MCARDOEXTENO2 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_contratos` WHERE col_tpdv ='ZCME' GROUP BY col_cliente AND SAFRA='$SAFRA' ORDER BY col_nome ASC");
$ROWMCARDOEXTENO2 = mysqli_num_rows($MCARDOEXTENO2);

$MCARDOEXTENO3 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT col_qtd_pendente FROM `tb_contratos` WHERE col_tpdv ='ZCME' AND SAFRA='$SAFRA' GROUP BY col_cliente ORDER BY col_nome ASC");
$ROWMCARDOEXTENO3 = mysqli_num_rows($MCARDOEXTENO3);

$MCARDOEXTENO4 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_contratos` WHERE col_tpdv ='ZCME' AND SAFRA='$SAFRA' GROUP BY col_cliente ORDER BY col_nome ASC");
$ROWMCARDOEXTENO4 = mysqli_num_rows($MCARDOEXTENO4);

$MCARDOEXTENO5 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_contratos` WHERE col_tpdv ='ZCME' AND SAFRA='$SAFRA' GROUP BY col_cliente ORDER BY col_nome ASC");
$ROWMCARDOEXTENO5 = mysqli_num_rows($MCARDOEXTENO5);

$MCARDOEXTENO6 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT col_qtd_contrato FROM `tb_contratos` WHERE col_tpdv ='ZCME' AND SAFRA='$SAFRA' GROUP BY col_cliente ORDER BY col_nome ASC");
$ROWMCARDOEXTENO6 = mysqli_num_rows($MCARDOEXTENO6);

$MCARDOEXTENO7 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT COUNT(col_nome) AS HEIG FROM `tb_contratos` WHERE col_tpdv ='ZCME' AND SAFRA='$SAFRA'");
$ROWMCARDOEXTENO7 = mysqli_num_rows($MCARDOEXTENO7);

$MCARDOEXTENO8 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT COUNT(col_nome) AS HEIG FROM `tb_contratos` WHERE col_tpdv ='ZCME' AND SAFRA='$SAFRA'");
$ROWMCARDOEXTENO8 = mysqli_num_rows($MCARDOEXTENO8);
?>