<?php
        $QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT imp.*,imp.funcionario_cod_veiculo, fun.*, imp.id_cupom AS CUPOM FROM tb_import AS imp LEFT JOIN tb_funcionario AS FUN ON IMP.funcionario_cod_veiculo = fun.cod_veiculo WHERE fun.sistemagsg = '80000' AND imp.date BETWEEN '$datainicio' AND '$datafim' AND imp.status_cupom !='2' ORDER BY FUN.nome_funcionario ASC");
        $CONSULT = mysqli_num_rows($QUERY);

        $pdf->SetXY(10, 50);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(18,4,utf8_decode('MATRICULA'),1,2,'C');
        $pdf->Ln();
        $pdf->SetXY(28, 50);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(60,4,utf8_decode('NOME'),1,2,'C');
        $pdf->Ln();
        $pdf->SetXY(88, 50);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(13,4,utf8_decode('CUPOM'),1,2,'C');
        $pdf->Ln();
        $pdf->SetXY(101, 50);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(18,4,utf8_decode('DATA'),1,2,'C');
        $pdf->Ln();
        $pdf->SetXY(119, 50);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(15,4,utf8_decode('HORA'),1,2,'C');
        $pdf->Ln();
        $pdf->SetXY(134, 50);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(15,4,utf8_decode('VEICULO'),1,2,'C');
        $pdf->Ln();
        $pdf->SetXY(149, 50);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(15.5,4,utf8_decode('PLACA'),1,2,'C');
        $pdf->Ln();
        $pdf->SetXY(164.5, 50);
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(10,4,utf8_decode('BOMBA'),1,2,'C');
        $pdf->Ln();
        $pdf->SetXY(174.5, 50);
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(15,4,utf8_decode('LITROS'),1,2,'C');
        $pdf->Ln();
        $pdf->SetXY(189.5, 50);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(16,4,utf8_decode('VALOR'),1,2,'C');
        $pdf->Ln();
        $pdf->SetFont('Arial','',8);

        //loop the data
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
        $sql = mysqli_query($CONNECTIONINCLUDE, "SELECT imp.*,imp.funcionario_cod_veiculo, fun.*, imp.id_cupom AS CUPOM, SUM(imp.litros) AS somalitros, SUM(imp.valor) AS somavalor FROM tb_import AS imp LEFT JOIN tb_funcionario AS FUN ON IMP.funcionario_cod_veiculo = fun.cod_veiculo WHERE fun.sistemagsg = '80000' AND imp.date BETWEEN '$datainicio' AND '$datafim' AND imp.status_cupom !='2' ORDER BY FUN.nome_funcionario ASC");
        $row = mysqli_num_rows($sql);
        if ($row > 0){
                while($sqline = mysqli_fetch_array($sql)){
                        $L80000 = $sqline['somalitros'];
                        $v80000 = $sqline['somavalor'];
                }
        }
        $pdf->SetX(189.5);
        $pdf->Cell(16,4,number_format($v80000, 2, ',', '.'),1,2,'R');
        $pdf->Ln();
}else{

}

$QUERYDESATIVADOS = mysqli_query($CONNECTIONINCLUDE, "SELECT imp.*,imp.funcionario_cod_veiculo, fun.*, imp.id_cupom AS CUPOM FROM tb_import AS imp LEFT JOIN tb_funcionario AS FUN ON IMP.funcionario_cod_veiculo = fun.cod_veiculo WHERE fun.col_status = '2' AND imp.date BETWEEN '$datainicio' AND '$datafim' AND imp.status_cupom !='2' ORDER BY FUN.nome_funcionario ASC");
$CONSULTDESATIVADOS = mysqli_num_rows($QUERYDESATIVADOS);

?>