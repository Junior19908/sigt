<?php

$PERIODODATA = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_periodos` ORDER BY `tb_periodos`.`col_id` DESC LIMIT 1");
$ROWPERIODO = mysqli_num_rows($PERIODODATA);
if ($ROWPERIODO > 0){
        while($sqline = mysqli_fetch_array($PERIODODATA)){
                $DATAINI = $sqline['col_inicio'];
                $DATAFIM = $sqline['col_fim'];
        }
}