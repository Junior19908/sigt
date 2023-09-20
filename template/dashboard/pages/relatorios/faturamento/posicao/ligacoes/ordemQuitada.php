<?php
$OVENDAQUIT = mysqli_query($CONNECTIONFATURAMENTO, "SELECT *,SUM(QUANTIDADE) AS SOMASAIDA FROM `tb_saida_semana` WHERE SAFRA='$SAFRA' AND TIPO_ORDEM='ZVIN' AND GRUPO_MERC='9410'AND CANCELADA='X' GROUP BY ORDEM ORDER BY DATA_EMISS ASC");
$COSULT = mysqli_num_rows($OVENDAQUIT);
if ($COSULT > 0) {
    while($row = $OVENDAQUIT->fetch_array()){
$pdf->Row(Array(
            utf8_decode($row['COD_RECEB']),
            utf8_decode($row['CIDADE']),
            $row['ORDEM'],
            '-',
            //date("d/m/Y",strtotime($row['DATA_EMISS'])),
            '-',
            '-',
            '-',
            '-',
        ));
    }//Fim
}