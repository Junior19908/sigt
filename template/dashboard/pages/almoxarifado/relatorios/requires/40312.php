
<?php
$QUERYMATERIAL = mysqli_query($CONNECTIONINCLUDE, "SELECT tb_relatorioentradafornecedor.*, tb_marcareferencia.col_marcaDescricao,tb_marcareferencia.col_referenciaDescricao,tb_materiais.col_depositoMaterial
FROM `tb_relatorioentradafornecedor`
LEFT JOIN `tb_marcareferencia` ON tb_relatorioentradafornecedor.col_materialCodigoSAP = tb_marcareferencia.col_materialCodigoSAP
LEFT JOIN `tb_materiais` ON tb_relatorioentradafornecedor.col_materialCodigoSAP = tb_materiais.col_codigoMaterial
WHERE col_posicao=40312 AND tb_relatorioentradafornecedor.col_materialCodigoSAP NOT BETWEEN 270000 AND 279999
ORDER BY `tb_relatorioentradafornecedor`.`col_descricaoFornecedor` ASC, `tb_relatorioentradafornecedor`.`col_textoBreveMaterial` ASC");
$CONSULTAQUERY = mysqli_num_rows($QUERYMATERIAL);

if ($CONSULTAQUERY > 0) {
    //$pdf->SetXY($primeiroColuna, $linhaFornecedor);

    $MATERIAL = mysqli_query($CONNECTIONINCLUDE, "SELECT col_codigoFornecedor,col_descricaoFornecedor,COUNT(col_codigoFornecedor) AS CONTAGEMCOD2
    FROM `tb_relatorioentradafornecedor` WHERE col_posicao=40312");
    $COSULTORDQUIT = mysqli_num_rows($MATERIAL);
    if($COSULTORDQUIT >= 0){
        while ($Linha = $MATERIAL->fetch_array()){
            $nomeDoFornecedor = $Linha["col_descricaoFornecedor"];
            $codigoDoFornecedor = $Linha["col_codigoFornecedor"];
        }
    }

    $pdf->SetFont("Arial", "B", 10);
    $pdf->Cell(0, 4, utf8_decode($codigoDoFornecedor." - ".$nomeDoFornecedor), 1, 2, "C");

    while ($row = mysqli_fetch_assoc($QUERYMATERIAL)) {    
        $pdf->SetFont("Arial", "", 6);
        $pdf->Row(Array(
            utf8_decode($row["col_materialCodigoSAP"]),
            utf8_decode($row["col_textoBreveMaterial"]),
            utf8_decode($row["col_depositoMaterial"]),
            utf8_decode($row["col_marcaDescricao"]),
            utf8_decode($row["col_referenciaDescricao"]),
            utf8_decode($row["col_pedido"]),
            utf8_decode($row["col_numeroNotaFiscal"]),
            utf8_decode($row["col_requisicao"]),
            utf8_decode($row["col_grupoDeCompradores"]),
            utf8_decode($row["col_requisitanteRC"]),
            date("d/m/Y",strtotime($row["col_dataImportacao"])),
            number_format($row["col_quantidade"], 2,",","."),
            utf8_decode($row["col_unidadeMedida"]),
            "R$: ". number_format($row["col_valorMaterialSAP"], 2,",","."),
        ));

    }
    $sql = mysqli_query($CONNECTIONINCLUDE, "SELECT SUM(col_quantidade) AS SOMAQUANTIDADE, SUM(col_valorMaterialSAP) AS SOMAVALORMATERIAL
    FROM `tb_relatorioentradafornecedor` WHERE col_posicao=40312 AND col_materialCodigoSAP NOT BETWEEN 270000 AND 279999");
    $row = mysqli_num_rows($sql);
    if ($row > 0){
            while($sqline = mysqli_fetch_array($sql)){
                    $v40312 = $sqline["SOMAVALORMATERIAL"];
            }
    }
    $pdf->SetX(265);
    $pdf->Cell(22,4,"R$: ".number_format($v40312, 2, ",", "."),1,2,"R");
    $pdf->Ln();
}
