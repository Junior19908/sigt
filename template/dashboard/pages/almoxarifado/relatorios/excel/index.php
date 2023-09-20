<?php
	session_start();
	include_once '../../../../../../class/Conexao.class.php';
	
						$arquivo='Registros.xls';

						$html = '';
						$html = '<meta charset="utf-8">';
						$html = '<style>
										table, th, td {
										border: 1px solid black;
										border-collapse: collapse;
										border-style: dotted;
						  			}
					  			</style>';
						$html .='<table>';
						$html .='<tr>';
						$html .='<td colspan="12" style="text-align:center"><b>Livro de Atividades</b></td>';
						$html .='</tr>';
						$html .='</table>';



						$html .='<table border"2">';
						$html .='<tr>';
						$html .='<td style="text-align:center"><b>Material</b></td>';
						$html .='<td style="text-align:center"><b>Descrição do Material</b></td>';
						$html .='<td style="text-align:center"><b>Depósito</b></td>';
						$html .='<td style="text-align:center"><b>Data</b></td>';
                        $html .='<td style="text-align:center"><b>Histórico</b></td>';
                        $html .='<td style="text-align:center"><b>Número do Lote</b></td>';
                        $html .='<td style="text-align:center"><b>Vencimento</b></td>';
                        $html .='<td style="text-align:center"><b>Quantidade</b></td>';
                        $html .='<td style="text-align:center"><b>Pedido</b></td>';
                        $html .='<td style="text-align:center"><b>Nota Fiscal</b></td>';
                        $html .='<td style="text-align:center"><b>Status</b></td>';
						$html .='<td style="text-align:center"><b>Imagem</b></td>';
						$html .='</tr>';
						$html .='</table>';

				foreach($_POST['SQL'] as $id => $SQL){
					//echo("ID do item: $id <br>");
					$selecao = "SELECT * FROM `tb_registroatividades` LEFT JOIN tb_materiais ON tb_registroatividades.col_material=tb_materiais.col_codigoMaterial WHERE tb_registroatividades.col_id='$id'";
					$resultadoselecao = mysqli_query($CONNALMOXARIFADO, $selecao);

					while($row_resultado = mysqli_fetch_assoc($resultadoselecao)){
						$html .= '<table border"2">' ;
						$html .= '<tr>' ;
						$html .= '<td>'.$row_resultado["col_material"].'</td>' ;
						$html .= '<td>'.$row_resultado["col_descricaoMaterial"].'</td>' ;
                        $html .= '<td>'.$row_resultado["col_depositoMaterial"].'</td>' ;
                        $html .= '<td>'.date("d/m/Y H:m:s",strtotime($row_resultado['col_isercaoBanco'])).'</td>' ;
                        $html .= '<td>'.$row_resultado["col_historicoAtividade"].'</td>' ;
                        $html .= '<td>'.$row_resultado["col_numeroLote"].'</td>' ;
                        $html .= '<td>'.date("d/m/Y",strtotime($row_resultado['col_vencimentoLote'])).'</td>' ;
                        $html .= '<td>'.$row_resultado["col_quantidade"].'</td>' ;
                        $html .= '<td>'.$row_resultado["col_pedido"].'</td>' ;
                        $html .= '<td>'.$row_resultado["col_requisicao"].'</td>' ;
                        if($row_resultado["col_status"]==1){
                            $html .= '<td style="text-align:center; background-color: green;"> Aprovado </td>' ;
                        }elseif($row_resultado["col_status"]==2){
                            $html .= '<td style="text-align:center; background-color: red;"> Reprovado </td>' ;
                        }elseif($row_resultado["col_status"]==3){
                            $html .= '<td style="text-align:center; background-color: orange;"> Analisando </td>' ;
                        }else{
                            $html .= '<td> Status Inválido </td>' ;
                        }
						$html .= '<td><a href="'.$row_resultado["col_pathBD"].'">Link da Imagem</a></td>';
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
						header('Content-Type: text/html; charset=utf-8');

						echo($html);
						exit();
	?>
