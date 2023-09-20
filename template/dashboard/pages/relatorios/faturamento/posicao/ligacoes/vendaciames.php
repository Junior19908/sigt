<?php
$OVENDAMES = mysqli_query($CONNECTIONFATURAMENTO, "SELECT OV.*, SAIDA.*, CONTRATO.* FROM tb_ordem_venda AS OV LEFT JOIN tb_saida_semana AS SAIDA on OV.Doc_SD=SAIDA.ORDEM LEFT JOIN tb_contratos AS CONTRATO ON OV.N_pedido=CONTRATO.col_docvendas WHERE OV.UM='1' AND OV.SAFRA='$SAFRA' GROUP BY OV.Doc_SD ORDER BY OV.Nome_1 ASC");
$COSULTOVMES = mysqli_num_rows($OVENDAMES);
if ($COSULTOVMES > 0) {
    while ($row = $OVENDAMES->fetch_array()) {
        $ORDS = $row['Doc_SD'];

        /*CONTAGEM DAS ORDENS DE VENDA*/
        $QUERY = mysqli_query($CONNECTIONFATURAMENTO, "SELECT COUNT(Div_ITEM) AS CONTAGEM FROM `tb_ordem_venda` WHERE Doc_SD='$ORDS' AND SAFRA='$SAFRA'");
        $ROWQUERY = mysqli_num_rows($QUERY);
        if ($ROWQUERY > 0) {
            while ($RESULTADO = $QUERY->fetch_array()) {
                $MAIORCONT = $RESULTADO['CONTAGEM'];
            }
        }

        /*SOMA DOS VALORES NO BANCO DE SAÍDA*/
        $QUERY2 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT *,SUM(QUANTIDADE) AS SOMASEQUANT FROM `tb_saida_semana` WHERE ORDEM='$ORDS' AND SAFRA='$SAFRA'");
        $ROWQUERY2 = mysqli_num_rows($QUERY2);
        if ($ROWQUERY2 > 0) {
            while ($RESULTADO = $QUERY2->fetch_array()) {
                if ($row['UM'] == 'KG') {
                    $SOMAQUANTIDADE = $RESULTADO['SOMASEQUANT']/50;
                }else {
                    $SOMAQUANTIDADE = $RESULTADO['SOMASEQUANT'];
                }
            }
        }

        if ($MAIORCONT==1) {
            $SOMAQUANTIORDMES = mysqli_query($CONNECTIONFATURAMENTO, "SELECT SUM(QUANTIDADE) AS SOMASE, SUM(VL_BRUTO) AS SOMABRUTO FROM tb_saida_semana WHERE ORDEM='$ORDS' AND SAFRA='$SAFRA' AND TRANSPORTADORA!=''");
            $COSULTORDMES = mysqli_num_rows($SOMAQUANTIORDMES);
            if($COSULTORDMES > 0){
                while ($Linha = $SOMAQUANTIORDMES->fetch_array()){
                    if ($row['UNIDADE']=='KG') {
                        $QUANTSDK = $Linha['SOMASE']/50;
                    }else{
                        $QUANTSDK = $Linha['SOMASE'];
                    }
                    $BRUTOVL = $Linha['SOMABRUTO'];
                }
            }
        }
        if ($row['UMB']=='KG') {
            $QUANTSDK1 = $row['Qtd_conf']/50;
        }else{
            $QUANTSDK1 = $row['Qtd_conf'];
        }

        if ($MAIORCONT==2) {
            $SOMAQUANTIORDMES = mysqli_query($CONNECTIONFATURAMENTO, "SELECT SUM(QUANTIDADE) AS SOMASE, SUM(VL_BRUTO) AS SOMABRUTO FROM tb_saida_semana WHERE ORDEM='$ORDS' AND SAFRA='$SAFRA' AND TRANSPORTADORA!=''");
            $COSULTORDMES = mysqli_num_rows($SOMAQUANTIORDMES);
            if($COSULTORDMES > 0){
                if ($SOMAQUANTIDADE < $QUANTSDK1) {
                    while ($Linha = $SOMAQUANTIORDMES->fetch_array()){
                        if ($row['UNIDADE']=='KG') {
                            $QUANTSDK = $Linha['SOMASE']/50;
                        }else{
                            $QUANTSDK = $Linha['SOMASE'];
                        }
                        $BRUTOVL = $Linha['SOMABRUTO'];
                    }
                }else {
                    if ($row['UMB']=='KG') {
                        $QUANTSDK = $row['Qtd_conf']/50;
                    }else{
                        $QUANTSDK = $row['Qtd_conf'];
                    }
                    $BRUTOVL = $Linha['SOMABRUTO'];
                }
            }
        }

        $SELECORDMES = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_ordem_venda` WHERE Doc_SD='$ORDS' AND SAFRA='$SAFRA' AND UM='1'");
        $ROWSELECMES = mysqli_num_rows($SELECORDMES);
        if($ROWSELECMES > 0){
            while ($Linha = $SELECORDMES->fetch_array()){
                if($row['UMB'] == 'KG'){
                    $QUANTOVK = $Linha['Qtd_conf']/50;
                }else {
                    $QUANTOVK = $Linha['Qtd_conf'];
                }
            }
        }
        if ($row['col_position']<=1) {
            $pdf->Row(Array(
                utf8_decode($row['Nome_1']),
                utf8_decode($row['CIDADE']),
                $row['Doc_SD'],
                date("d/m/Y",strtotime($row['Data_doc'])),
                number_format($BRUTOVL / $QUANTSDK, 2,',','.'),
                number_format($QUANTOVK,0,',','.'),
                number_format($QUANTSDK,0,',','.'),
                number_format($QUANTOVK - $QUANTSDK,0,',','.'),
            ));         
        }
    }
}
        $SELECORDSUM = mysqli_query($CONNECTIONFATURAMENTO, "SELECT UMB,SUM(Qtd_conf) AS SOMASEQ FROM `tb_ordem_venda` WHERE UM='1' AND SAFRA='$SAFRA' GROUP BY UMB");
        $ROWSELECSUM = mysqli_num_rows($SELECORDSUM);
        if($ROWSELECSUM > 0){
            while ($Linha = $SELECORDSUM->fetch_array()){
                if($Linha['UMB'] == 'KG'){
                    $SELECQTDORD1_MES = $Linha['SOMASEQ']/50;
                }
                if($Linha['UMB'] == 'SC') {
                    $SELECQTDORD2_MES = $Linha['SOMASEQ'];
                }
            }
        }

        $ORDALTERADA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT *,SUM(Preco_liq) AS SOMATUDO FROM `tb_ordem_venda` WHERE UM='4' AND SAFRA='$SAFRA' AND Data_doc BETWEEN '$DATAINICIO' AND '$DATAFIM'");
        $ROWORDALTERADA = mysqli_num_rows($ORDALTERADA);
        if($ROWORDALTERADA > 0){
            while ($ROW = $ORDALTERADA->fetch_array()){
                if($ROW['UMB'] == 'KG'){
                    $SELECTORDALTERADANOMES1 = $ROW['SOMATUDO']/50;
                }
                if($ROW['UMB'] == 'SC') {
                    $SELECTORDALTERADANOMES2 = $ROW['SOMATUDO'];
                }
            }
        }


        $SELECORDSUMSAIDA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT OV.*, SAIDA.*, CONTRATO.*,SUM(SAIDA.QUANTIDADE) AS SOMAQUANTIDAE FROM tb_ordem_venda AS OV LEFT JOIN tb_saida_semana AS SAIDA on OV.Doc_SD=SAIDA.ORDEM LEFT JOIN tb_contratos AS CONTRATO ON OV.N_pedido=CONTRATO.col_docvendas WHERE OV.UM='1' AND SAIDA.SAFRA='$SAFRA' AND OV.SAFRA='$SAFRA' GROUP BY SAIDA.UNIDADE;");
        $ROWSELECSUMSAIDA = mysqli_num_rows($SELECORDSUMSAIDA);
        if($ROWSELECSUMSAIDA > 0){
            while ($Linha = $SELECORDSUMSAIDA->fetch_array()){
                if($Linha['UNIDADE'] == 'KG'){
                    if($Linha['UNIDADE'] == 'KG'){

                    }
                    $SELECQTDORDSAIDA1_MES = $Linha['SOMAQUANTIDAE']/50;
                }
                if($Linha['UNIDADE'] == 'SC') {
                    $SELECQTDORDSAIDA2_MES = $Linha['SOMAQUANTIDAE'];
                }
            }
        }




        $SELECORDSUM1 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT UMB,SUM(Qtd_conf) AS SOMASEQ FROM `tb_ordem_venda` WHERE Data_doc BETWEEN '$DATAINICIO' AND '$DATAFIM' AND col_TipoOV='V. Mercado Interno' AND UM='4' AND SAFRA='$SAFRA' GROUP BY UMB;");
        $ROWSELECSUM1 = mysqli_num_rows($SELECORDSUM1);
        if($ROWSELECSUM1 > 0){
            while ($Linha = $SELECORDSUM1->fetch_array()){
                if($Linha['UMB'] == 'KG'){
                    $OVALTERADACIAQTDSKG1 = $Linha['SOMASEQ']/50;
                }
                if($Linha['UMB'] == 'SC') {
                    $OVALTERADACIAQTDSSC1 = $Linha['SOMASEQ'];
                }
            }
        }

$SOMAQUANTCIAMES = $SELECQTDORD1_MES+$SELECQTDORD2_MES;
$SOMAQUANTCIAMESAIDAS = $SELECQTDORDSAIDA1_MES+$SELECQTDORDSAIDA2_MES - ($SELECTORDALTERADANOMES1-$SELECTORDALTERADANOMES2);
$SOMAQUANTCIAMESSALDO =$SOMAQUANTCIAMES-$SOMAQUANTCIAMESAIDAS;

$QUERYOLINHA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_linha`");
$ROWOLINHA = mysqli_num_rows($QUERYOLINHA);


?>