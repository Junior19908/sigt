<?php
require_once('../../../../../../../class/Conexao.class.php');

echo "Funcionando!";

$QUERYSEMANA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_saida_semana` WHERE `ORDEM` = '22798' AND DATA_EMISS BETWEEN '2021-03-01' AND '2021-04-04' GROUP BY SAFRA");

					$ROWSEMANA = mysqli_num_rows($QUERYSEMANA);
					if ($ROWSEMANA == 2) {
						echo "Teste Semana";
					    $QUERYVENDA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_ordem_venda` WHERE `Doc_SD` = '22798' AND `Criado_a` BETWEEN '2021-03-01' AND '2021-04-04'");
					    $ROWVENDA = mysqli_num_rows($QUERYVENDA);
					//Caso tenha um item só na tabela venda ele segue fazendo o update da safra e adiciona um novo item com a Safra posterior.
					    if($ROWVENDA == 1){
					        /*
								INSERT COM A SAFRA NOVA COLOCAR O SALDO RESTANTE AQUI!
								CONSERTAR O VALOR REF. A SAFRA DEIXAR ELE DINÂMICO NÃO FIXO.
					        */	
					        //$QUERYMYSQLINSERT = "INSERT INTO `tb_ordem_venda` (`ID`, `Doc_SD`, `Itm`, `Div_ITEM`, `Denominacao`, `TpDV`, `Data_doc`, `Qtd_conf`, `N_pedido`, `Criado_a`, `Qtd_ordem`, `Dep`, `UMB`, `Nome_1`, `Preco_liq`, `SAFRA`, `UM`, `Val_liq`, `MATERIAL`) VALUES (NULL, '22798', '10', '2', NULL, NULL, NULL, NULL, NULL, '2021-04-04', NULL, NULL, NULL, NULL, NULL, '2021/22', NULL, NULL, '100001')";
					        //$INSERTD = mysqli_query($CONNECTIONFATURAMENTO, $QUERYMYSQLINSERT);
								echo "Teste Venda";
					    }
					}
					/*

    $QUERYMYSQLINSERT = "INSERT INTO `tb_ordem_venda` (`ID`, `Doc_SD`, `Itm`, `Div_ITEM`, `Denominacao`, `TpDV`, `Data_doc`, `Qtd_conf`, `N_pedido`, `Criado_a`, `Qtd_ordem`, `Dep`, `UMB`, `Nome_1`, `Preco_liq`, `SAFRA`, `UM`, `Val_liq`, `MATERIAL`) VALUES (NULL, '22798', '10', '2', NULL, NULL, NULL, NULL, NULL, '2021-04-04', NULL, NULL, NULL, NULL, NULL, '2020/21', NULL, NULL, '100001')";
if (mysqli_query($CONNECTIONFATURAMENTO, $QUERYMYSQLINSERT)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $QUERYMYSQLINSERT . "<br>" . mysqli_error($CONNECTIONFATURAMENTO);
}

*/


?>