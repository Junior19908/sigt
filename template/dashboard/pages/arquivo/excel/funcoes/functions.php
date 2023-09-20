<?php
	session_start();
	include_once '../../../../../../class/Conexao.class.php';
	
						$arquivo='PlanilhaFuncionarios.xls';

						$html = '';
						$html = '<meta charset="utf-8">';
						$html .='<table border"2">';
						$html .='<tr>';
						$html .='<td colspan="4" style="text-align:center"><b>Planilha de Funcionarios</b></td>';
						$html .='</tr>';
						$html .='</table>';



						$html .='<table border"2">';
						$html .='<tr>';
						$html .='<td><b>Matricula</b></td>';
						$html .='<td><b>Nome</b></td>';
						$html .='<td><b>Litros</b></td>';
						$html .='<td><b>Valor</b></td>';
						$html .='</tr>';
						$html .='</table>';

				foreach($_POST['SQL'] as $id => $SQL){
					//echo("ID do item: $id <br>");
					$selecao = "SELECT EXP.*,FUNC.nome_funcionario,FUNC.func_matricula,safra.inicio,mes.descricao_mes FROM tb_export AS EXP LEFT JOIN tb_funcionario AS FUNC ON EXP.funcionario=FUNC.cod_veiculo LEFT JOIN tb_safra as safra on exp.safra=safra.id_safra left join tb_mes as mes on exp.mes=mes.id_mes WHERE exp.id_export='$id' ORDER BY FUNC.nome_funcionario ASC";
					$resultadoselecao = mysqli_query($conn, $selecao);

					while($row_resultado = mysqli_fetch_assoc($resultadoselecao)){
						$html .= '<table border"2">' ;
						$html .= '<tr>' ;
						$html .= '<td>'.$row_resultado["func_matricula"].'</td>' ;
						$html .= '<td>'.$row_resultado["nome_funcionario"].'</td>' ;
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
