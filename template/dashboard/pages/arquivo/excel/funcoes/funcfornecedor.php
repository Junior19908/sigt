<?php
	session_start();
	include_once '../../../../../../class/Conexao.class.php';
	
						$arquivo='PlanilhaFornecedores.xls';

						$html = '';
						$html = '<meta charset="utf-8">';
						$html .='<table border"1">';
						$html .='<tr>';
						$html .='<td colspan="5" style="text-align:center"><b>Planilha de Fornecedor de Cana</b></td>';
						$html .='</tr>';
						$html .='</table>';



						$html .='<table border"1">';
						$html .='<tr>';
						$html .='<td><center><b>Contrato</b></center></td>';
						$html .='<td><center><b>Código</b></center></td>';
						$html .='<td><center><b>Nome do Fornecedor</b></center></td>';
						$html .='<td><center><b>Litros</b></center></td>';
						$html .='<td><center><b>Valor</b></center></td>';
						$html .='</tr>';
						$html .='</table>';

				foreach($_POST['SQL'] as $id => $SQL){
					//echo("ID do item: $id <br>");
					$selecao = "SELECT EXP.*,FUNC.*,safra.*,mes.* FROM tb_export_fornecedor_cana AS EXP LEFT JOIN tb_fornecedor AS FUNC ON EXP.fornecedor=FUNC.cod_veiculo LEFT JOIN tb_safra as safra on exp.safra=safra.id_safra left join tb_status_periodo as mes on exp.tp_periodo=mes.id_status_periodo WHERE exp.id_export='$id' ORDER BY FUNC.nome_fornecedor ASC";
					$resultadoselecao = mysqli_query($conn, $selecao);

					while($row_resultado = mysqli_fetch_assoc($resultadoselecao)){
						$html .= '<table border"1">' ;
						$html .= '<tr>' ;
						$html .= '<td>'.$row_resultado["contrato_fornecedor"].'</td>' ;
						$html .= '<td>'.$row_resultado["cod_fornecedor"].'</td>' ;
						$html .= '<td>'.$row_resultado["nome_fornecedor"].'</td>' ;
						$html .= '<td>'.number_format($row_resultado["litros"],2,',','.').'</td>' ;
						$html .= '<td>'.number_format($row_resultado["valor"],2,',','.').'</td>' ;
						$html .= '</tr>';
						$html .= '</table>';
					}
	}
						header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
						header("Last-Modified:" . gmdate("D,d M YH:i:s") . "GMT");
						header("Cache-Control: no-cache, must-revalidate");
						header("Pragma: no-cache");
						header("Content-type: application/x-msexcel");
						header("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
						header("Content-Description: PHP Generated Data" );

						echo($html);
						exit();
	?>
