<?php
$QUERYMATERIAL = mysqli_query($CONNECTIONINCLUDE, "SELECT SUM(col_valorMaterialSAP) AS SOMAVALORMATERIAL FROM `tb_relatorioentradafornecedor` WHERE `col_materialCodigoSAP` NOT BETWEEN 270000 AND 279999");
$LINHAMATERIAL = mysqli_num_rows($QUERYMATERIAL);
if ($LINHAMATERIAL > 0){
        while($sqline = mysqli_fetch_array($QUERYMATERIAL)){
                $TOTALMATERIAL = $sqline['SOMAVALORMATERIAL'];
        }
}

$QUERYSERVICO = mysqli_query($CONNECTIONINCLUDE, "SELECT SUM(col_valorMaterialSAP) AS SOMAVALORSERVICO FROM `tb_relatorioentradafornecedor` WHERE `col_materialCodigoSAP` BETWEEN 270000 AND 279999");
$LINHASERVICO = mysqli_num_rows($QUERYSERVICO);
if ($LINHASERVICO > 0){
        while($sqline = mysqli_fetch_array($QUERYSERVICO)){
                $TOTALSERVICO = $sqline['SOMAVALORSERVICO'];
        }
}

$URLPASTA = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_pasta` ORDER BY col_id DESC LIMIT 1");
$LINHAURL = mysqli_num_rows($URLPASTA);
if ($LINHAURL > 0){
        while($sqline = mysqli_fetch_array($URLPASTA)){
                $URLPASTAQ = $sqline['col_UrlPasta'];
        }
}
