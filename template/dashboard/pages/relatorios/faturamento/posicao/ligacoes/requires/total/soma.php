<?php

$QUERY_ACUM = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM tb_acumulado WHERE SAFRA='$SAFRA' ORDER BY `tb_acumulado`.`col_id` DESC LIMIT 1;");
$COSULTORADQUIT = mysqli_num_rows($QUERY_ACUM);
if($COSULTORADQUIT > 0){
    while ($Linha = $QUERY_ACUM->fetch_array()){
        $ACUMULADO_GERAL = $Linha['col_acumulado'];
        $SALDO_OV_SEMANA_ANTERIOR_ACUM = $Linha['col_sem_ant'];
        $DISPONIVEL_SEMANA_ANTERIOR_ACUM = $Linha['col_disp_sem_ant'];
    }
}


$QUERY_TB_PROD = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM tb_producao_acucar WHERE SAFRA='$SAFRA';");
$COSULTORADQUIT = mysqli_num_rows($QUERY_TB_PROD);
if($COSULTORADQUIT > 0){
    while ($Linha = $QUERY_TB_PROD->fetch_array()){
        $PRODUCAO_ACUCAR = $Linha['col_producao_acucar'];
        $PRODUCAO_VHP = $Linha['col_producao_vhp'];
    }
}
?>