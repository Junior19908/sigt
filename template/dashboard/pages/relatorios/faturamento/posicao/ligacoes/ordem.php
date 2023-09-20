<?php
/******************************************************************
	CONSULTA NO SERVIDOR ÀS VENDAS NO MÊS
	INSERT COM A SAFRA NOVA COLOCAR O SALDO RESTANTE AQUI!
	CONSERTAR O VALOR REF. A SAFRA DEIXAR ELE DINÂMICO NÃO FIXO.
*******************************************************************/	
error_reporting(0);
ini_set("display_errors", 0 );
$OVENDA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT *,SUM(QUANTIDADE) AS SOMASAIDA FROM `tb_saida_semana` WHERE DATA_EMISS BETWEEN '$DATAINICIO' AND '$DATAFIM' AND SAFRA='$SAFRA' AND TIPO_ORDEM='ZVIN' AND GRUPO_MERC='9410'AND CANCELADA!='X' GROUP BY ORDEM ORDER BY DATA_EMISS ASC");
$CONSULTAVENDA = mysqli_num_rows($OVENDA);

if ($CONSULTAVENDA > 0) {
    while($row = $OVENDA->fetch_array()){
$ORDEMVENDA = $row['ORDEM'];
$MATERIALVENDA = $row['MATERIAL'];  	
$QUERYMYSQL = "UPDATE `tb_ordem_venda` SET `Criado_a` = '$DATAFIM' WHERE `Doc_SD` = '$ORDEMVENDA'";
$UPDATE = mysqli_query($CONNECTIONFATURAMENTO, $QUERYMYSQL);

        if ($row['UNIDADE'] == 'SC') {
            $SAIDAS = $row['SOMASAIDA'];
        }
        if ($row['UNIDADE'] == 'KG') {
            $SAIDAS = $row['SOMASAIDA'] / 50;
        }
        if ($row['UNIDADE'] == 'TM') {
            $SAIDAS = $row['SOMASAIDA'] * 20;
        }
        if($row['UNIDADE'] == 'TON'){
            $SAIDAS = $row['SOMASAIDA'] * 20;
        }
        if($row['UNIDADE']=='TM' && $row['MATERIAL']!='100014' && $row['MATERIAL']!='100035' && $row['MATERIAL']!='100145' && $row['MATERIAL']!='100180'){
            $SAIDAS = $row['SOMASAIDA'] * 20;
        }
        if($row['MATERIAL']=='100014'){
            $SAIDAS = $row['SOMASAIDA'] * 20;
        }

$QUERYQUANT = mysqli_query($CONNECTIONFATURAMENTO, "SELECT *, SUM(Qtd_conf) AS SOMAQUANTI FROM `tb_ordem_venda` WHERE Doc_SD='$ORDEMVENDA' AND Criado_a BETWEEN '$DATAINICIO' AND '$DATAFIM' GROUP BY Doc_SD ORDER BY ID ASC");
$ROWQUANT = mysqli_num_rows($QUERYQUANT);
if ($ROWQUANT > 0){
    while($SQLINEQ = mysqli_fetch_array($QUERYQUANT)){
        if ($SQLINEQ['UMB'] == 'SC') {
            $QUANTIDADE = $SQLINEQ['SOMAQUANTI'];
        }
        if ($SQLINEQ['UMB'] == 'KG') {
            $QUANTIDADE = $SQLINEQ['SOMAQUANTI'] / 50;
        }
        if ($SQLINEQ['UMB'] == 'TM') {
            $QUANTIDADE = $SQLINEQ['SOMAQUANTI'] * 20;
        }
        if($SQLINEQ['UMB'] == 'TON'){
            $QUANTIDADE = $SQLINEQ['SOMAQUANTI'] * 20;
        }
        if($SQLINEQ['UMB']=='TM' && $SQLINEQ['MATERIAL']!='100014' && $row['MATERIAL']!='100035' && $row['MATERIAL']!='100145' && $row['MATERIAL']!='100180'){
            $QUANTIDADE = $SQLINEQ['SOMAQUANTI'] * 20;
        }
        if($SQLINEQ['MATERIAL']=='100014'){
            $QUANTIDADE = $SQLINEQ['SOMAQUANTI'] * 20;
        }
    }
}

$QUERYSAFRAQUANTY1 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT *, SUM(Qtd_ordem) AS QTD FROM `tb_ordem_venda` WHERE Doc_SD='$ORDEMVENDA' AND `SAFRA` = '$SAFRA' AND `Criado_a` BETWEEN '$DATAINICIO' AND '$DATAFIM'");
$ROWSAFRAQUANTY = mysqli_num_rows($QUERYSAFRAQUANTY1);
if ($ROWSAFRAQUANTY > 0){
    while($SQLINESAFRAQUANTI1 = mysqli_fetch_array($QUERYSAFRAQUANTY1)){
        $QUANTIDADESOMASAFRADIFERENTE = $SQLINESAFRAQUANTI1['QTD'];
        $DATADOCORDVENDA = $SQLINESAFRAQUANTI1['Data_doc'];
    }
}

$SALDO = $QUANTIDADESOMASAFRADIFERENTE - $SAIDAS;
$VALORNOVA = $QUANTIDADE - $SAIDAS;
/*
	Se a tabela seman tiver duas safras, então faz o update da coluna Safra na tabela Venda para separar as Quantidades.
*/
					$QUERYSEMANA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_saida_semana` WHERE `ORDEM` = '$ORDEMVENDA' AND DATA_EMISS BETWEEN '$DATAINICIO' AND '$DATAFIM' GROUP BY SAFRA");
					$ROWSEMANA = mysqli_num_rows($QUERYSEMANA);
					if ($ROWSEMANA == 2) {
					    $QUERYVENDA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_ordem_venda` WHERE `Doc_SD` = '$ORDEMVENDA' AND `Criado_a` BETWEEN '$DATAINICIO' AND '$DATAFIM'");
					    $ROWVENDA = mysqli_num_rows($QUERYVENDA);
					    if($ROWVENDA == 1){
					        /*
								INSERT COM A SAFRA NOVA COLOCAR O SALDO RESTANTE AQUI!
								CONSERTAR O VALOR REF. A SAFRA DEIXAR ELE DINÂMICO NÃO FIXO.
					        */	
					        $QUERYMYSQLINSERT = "INSERT INTO `tb_ordem_venda` (`ID`, `Doc_SD`, `Itm`, `Div_ITEM`, `Denominacao`, `TpDV`, `Data_doc`, `Qtd_conf`, `N_pedido`, `Criado_a`, `Qtd_ordem`, `Dep`, `UMB`, `Nome_1`, `Preco_liq`, `SAFRA`, `UM`, `Val_liq`, `MATERIAL`) VALUES (NULL, '$ORDEMVENDA', '10', '2', NULL, NULL, NULL, NULL, NULL, '$DATAFIM', '$SALDO', NULL, NULL, NULL, NULL, '$SAFRA', NULL, NULL, '$MATERIALVENDA')";
					        $INSERTD = mysqli_query($CONNECTIONFATURAMENTO, $QUERYMYSQLINSERT);
					        /*					
								UPDATE COM A SAFRA VELHA COLOCAR O VALOR DA SAÍDA AQUI!
					        */
					        $QUERYMYSQL = "UPDATE `tb_ordem_venda` SET `SAFRA` = '$SAFRA', `Qtd_ordem` ='$SAIDAS' WHERE `Doc_SD` = '$ORDEMVENDA' AND `Criado_a` BETWEEN '$DATAINICIO' AND '$DATAFIM' AND Div_ITEM='1'";
					        $UPDATE = mysqli_query($CONNECTIONFATURAMENTO, $QUERYMYSQL);
						}elseif ($ROWVENDA == 2) {
					        /*
    							SE A TABELA SEMANA TIVER APENAS UM SAFRA O SISTEMA IRÁ FAZER A BUSCA NO BANCO DE DADOS DA TABELA VENDAS	
								UPDATE COM A SAFRA VELHA COLOCAR O VALOR DA SAÍDA AQUI!
					        */
					        $QUERYMYSQL = "UPDATE `tb_ordem_venda` SET `SAFRA` = '$SAFRA', `Qtd_ordem` ='$SAIDAS' WHERE `Doc_SD` = '$ORDEMVENDA' AND `Criado_a` BETWEEN '$DATAINICIO' AND '$DATAFIM' AND Div_ITEM='1'";
					        $UPDATE = mysqli_query($CONNECTIONFATURAMENTO, $QUERYMYSQL);

					        $QUERYMYSQL = "UPDATE `tb_ordem_venda` SET `SAFRA` = '2020/21', `Qtd_ordem` ='$VALORNOVA' WHERE `Doc_SD` = '$ORDEMVENDA' AND `Criado_a` BETWEEN '$DATAINICIO' AND '$DATAFIM' AND Div_ITEM='2'";
					        $UPDATE = mysqli_query($CONNECTIONFATURAMENTO, $QUERYMYSQL);
						}
						/*
							SE A TABELA SEMANA TIVER APENAS UM SAFRA O SISTEMA IRÁ FAZER A BUSCA NO BANCO DE DADOS DA TABELA VENDAS
						*/
					}elseif($ROWSEMANA == 1){
					    $QUERYVENDA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_ordem_venda` WHERE `Doc_SD` = '$ORDEMVENDA' AND `Criado_a` BETWEEN '$DATAINICIO' AND '$DATAFIM'");
					    $ROWVENDA = mysqli_num_rows($QUERYVENDA);
					    if ($ROWVENDA == 2) {
					        $QUERYMYSQL = "UPDATE `tb_ordem_venda` SET `SAFRA` = '$SAFRA', `Qtd_ordem` ='$QUANTIDADE' WHERE `Doc_SD` = '$ORDEMVENDA' AND Div_ITEM='1'";
					        $UPDATE = mysqli_query($CONNECTIONFATURAMENTO, $QUERYMYSQL);
					    }elseif($ROWVENDA == 1){
					        $QUERYMYSQL = "UPDATE `tb_ordem_venda` SET `SAFRA` = '$SAFRA', `Qtd_ordem` ='$QUANTIDADE' WHERE `Doc_SD` = '$ORDEMVENDA' AND Div_ITEM='1'";
					        $UPDATE = mysqli_query($CONNECTIONFATURAMENTO, $QUERYMYSQL);
					    }
					}
$pdf->Row(Array(
            utf8_decode($row['COD_RECEB']),
            utf8_decode($row['CIDADE']),
            $ORDEMVENDA,
            date("d/m/Y",strtotime($DATADOCORDVENDA)),
            '-',
            number_format($QUANTIDADESOMASAFRADIFERENTE, 0, ',', '.'),
            number_format($SAIDAS, 0, ',', '.'),
            number_format($SALDO, 0, ',', '.'),
        ));
    }//Fim
}
?>