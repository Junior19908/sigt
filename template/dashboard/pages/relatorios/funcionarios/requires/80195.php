<?php
        $QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT imp.*,imp.funcionario_cod_veiculo, fun.*, imp.id_cupom AS CUPOM FROM tb_import AS imp LEFT JOIN tb_funcionario AS FUN ON IMP.funcionario_cod_veiculo = fun.cod_veiculo WHERE fun.sistemagsg = '80195' AND imp.date BETWEEN '$datainicio' AND '$datafim' AND imp.status_cupom ='1' ORDER BY FUN.nome_funcionario ASC");
        $CONSULT = mysqli_num_rows($QUERY);

if ($CONSULT > 0) {
	while($row = $QUERY->fetch_array()){
		$pdf->Row(Array(
			$row['func_matricula'],
			$row['nome_funcionario'],
			$row['CUPOM'],
			date("d/m/Y",strtotime($row['date'])),
			$row['time'],
			$row['funcionario_cod_veiculo'],
			$row['placa_veiculo'],
			$row['bomba'],
			number_format($row['litros'], 2, ',', '.'),
			number_format($row['valor'], 2, ',', '.'),
                ));
		}

$sql = mysqli_query($CONNECTIONINCLUDE, "SELECT imp.*,imp.funcionario_cod_veiculo, fun.*, imp.id_cupom AS CUPOM, SUM(imp.litros) AS somalitros, SUM(imp.valor) AS somavalor FROM tb_import AS imp LEFT JOIN tb_funcionario AS FUN ON IMP.funcionario_cod_veiculo = fun.cod_veiculo WHERE fun.sistemagsg = '80195' AND imp.date BETWEEN '$datainicio' AND '$datafim' AND imp.status_cupom ='1' ORDER BY FUN.nome_funcionario ASC");
$row = mysqli_num_rows($sql);
if ($row > 0){
	while($sqline = mysqli_fetch_array($sql)){
		$L80195 = $sqline['somalitros'];
		$v80195 = $sqline['somavalor'];
	}
}
		$pdf->SetX(189.5);
        $pdf->Cell(16,4,number_format($v80195, 2, ',', '.'),1,2,'R');
        $pdf->Ln();
}else{

}


?>