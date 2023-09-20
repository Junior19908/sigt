<?php
$CONNECTIONINCLUDE = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgfaturamento');
$TO_BORN=$_POST['calendarioINICIO'];
$TO_END=$_POST['calendarioFIM'];
//-------Busca por data & categoria---------//
$ACUCAR = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(QUANTIDADE) AS SOMAQUANTIDADE,SUM(VL_BRUTO) AS SOMABRUTO FROM `tb_saida_semana` WHERE DATA_EMISS BETWEEN '$TO_BORN' AND '$TO_END' AND GRUPO_MERC='9410' AND CFOP NOT IN('6118/AA') AND TIPO_ORDEM NOT IN('ZVVF') AND ESTADO NOT BETWEEN 'EX' AND 'EX....' AND TIPO_FAT NOT IN('ZFCO') AND col_status NOT IN('5') GROUP BY CIDADE,UNIDADE,COD_RECEB ORDER BY COD_RECEB");
$CONSULTAACUCAR = mysqli_num_rows($ACUCAR);

$ACUCAREXPORTACAO = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(QUANTIDADE) AS SOMAQUANTIDADE,SUM(VL_BRUTO) AS SOMABRUTO FROM `tb_saida_semana` WHERE DATA_EMISS BETWEEN '$TO_BORN' AND '$TO_END' AND ESTADO='EX' AND TIPO_ORDEM!='ZVCF' GROUP BY COD_RECEB");
$CONSULTAACUCAREXPORTACAO = mysqli_num_rows($ACUCAREXPORTACAO);

$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *, SUM(QUANTIDADE) AS SOMAQUANTIDADE, SUM(VL_BRUTO) AS SOMABRUTO FROM `tb_saida_semana` WHERE DATA_EMISS BETWEEN '$TO_BORN' AND '$TO_END' AND GRUPO_MERC='9410' AND CFOP!='6118/AA' AND UNIDADE BETWEEN 'KG' AND 'SC' AND TIPO_ORDEM !='ZVVF' AND TIPO_FAT!='ZFCO' ORDER BY COD_RECEB");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
            $TOTALVALORBRUTO = $sqline['SOMABRUTO'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *,SUM(QUANTIDADE) AS SOMAQUANTIDADE,SUM(VL_BRUTO) AS SOMABRUTO FROM `tb_saida_semana` WHERE DATA_EMISS BETWEEN '$TO_BORN' AND '$TO_END' AND ESTADO='EX' AND TIPO_ORDEM!='ZVCF'");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
            $TOTALEX = $sqline['SOMAQUANTIDADE'];
            $SOMAEX = $sqline['SOMABRUTO'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *, SUM(QUANTIDADE) AS SOMAQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS BETWEEN '$TO_BORN' AND '$TO_END' AND GRUPO_MERC='9410' AND CFOP!='6118/AA' AND UNIDADE='SC' AND TIPO_ORDEM !='ZVVF' AND TIPO_FAT!='ZFCO' ORDER BY COD_RECEB");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
            $SC = $sqline['SOMAQUANTIDADE'];
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *, SUM(QUANTIDADE) AS SOMAQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS BETWEEN '$TO_BORN' AND '$TO_END' AND GRUPO_MERC='9410' AND CFOP!='6118/AA' AND UNIDADE='KG' AND TIPO_ORDEM !='ZVVF' AND TIPO_FAT!='ZFCO' ORDER BY COD_RECEB");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
            $KG = $sqline['SOMAQUANTIDADE']/50;
	}
}
$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT *, SUM(QUANTIDADE) AS SOMAQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS BETWEEN '$TO_BORN' AND '$TO_END' AND GRUPO_MERC='9410' AND CFOP!='6118/AA' AND UNIDADE='TM' AND TIPO_ORDEM !='ZVVF' AND TIPO_FAT!='ZFCO' ORDER BY COD_RECEB");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
            $TM = $sqline['SOMAQUANTIDADE']*20;
	}
}
$SOMAKGESC = $SC + $KG + $TM;




$QUERYVIAGEMPHP = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_filaphp WHERE dataPeriodo = '$TO_BORN'");
$ROWVIAGEMPHP = mysqli_num_rows($QUERYVIAGEMPHP);
if ($ROWVIAGEMPHP > 0) {
    while ($sqline = mysqli_fetch_array($QUERYVIAGEMPHP)) {
        $COL_ARMAZEM = $sqline['col_armazem'];
        $COL_PATIO = $sqline['col_patio'];
        $COL_SACARIA_ARMAZEM = $sqline['col_sacariaArmazem'];
        $COL_SACARIA_PATIO = $sqline['col_sacariaPatio'];
        $COL_BAG_ARMAZEM = $sqline['col_bagArmazem'];
        $COL_BAG_PATIO = $sqline['col_bagPatio'];
        $COL_ALCOOL_ARMAZEM = $sqline['col_alcoolArmazem'];
        $COL_ALCOOL_PATIO = $sqline['col_alcoolPatio'];
        $COL_HIDRATADO_ARMAZEM = $sqline['col_hidratadoArmazem'];
        $COL_HIDRATADO_PATIO = $sqline['col_hidratadoPatio'];
    }
}

$query = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_filasap`");
$row1 = mysqli_num_rows($query);
if ($row1 > 0) {
    while ($sqline = mysqli_fetch_array($query)) {
        $CARR = $sqline['CARRE_INI'];
        $BALA = $sqline['BALA'];
        $PORT = $sqline['PORT'];
        $EXPE = $sqline['EXPE'];
    }
}
$ARMAZEM = $COL_ARMAZEM + $CARR + $BALA;
$PATIO = $COL_PATIO + $PORT + $EXPE;
?>