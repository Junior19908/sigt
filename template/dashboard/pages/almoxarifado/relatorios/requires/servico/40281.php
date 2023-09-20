
<?php
$QUERYSERVICO = mysqli_query($CONNECTIONINCLUDE, "SELECT tb_relatorioentradafornecedor.*, tb_marcareferencia.col_marcaDescricao,tb_marcareferencia.col_referenciaDescricao,tb_materiais.col_depositoMaterial
FROM `tb_relatorioentradafornecedor`
LEFT JOIN `tb_marcareferencia` ON tb_relatorioentradafornecedor.col_materialCodigoSAP = tb_marcareferencia.col_materialCodigoSAP
LEFT JOIN `tb_materiais` ON tb_relatorioentradafornecedor.col_materialCodigoSAP = tb_materiais.col_codigoMaterial
WHERE col_posicao=40281 AND tb_relatorioentradafornecedor.col_materialCodigoSAP BETWEEN 270000 AND 279999
GROUP BY tb_relatorioentradafornecedor.col_codigoFornecedor,tb_relatorioentradafornecedor.col_materialCodigoSAP, tb_relatorioentradafornecedor.col_requisicao,tb_relatorioentradafornecedor.col_numeroNotaFiscal
ORDER BY `tb_relatorioentradafornecedor`.`col_descricaoFornecedor` ASC, `tb_relatorioentradafornecedor`.`col_textoBreveMaterial` ASC");
$CONSULTASERVICO = mysqli_num_rows($QUERYSERVICO);

if ($CONSULTASERVICO > 0) {
    //$pdf->SetXY($primeiroColuna, $linhaFornecedor);

    $SERVICO = mysqli_query($CONNECTIONINCLUDE, "SELECT col_codigoFornecedor,col_descricaoFornecedor,COUNT(col_codigoFornecedor) AS CONTAGEMCOD2
    FROM `tb_relatorioentradafornecedor` WHERE col_posicao=40281");
    $COSULTORDQUITSERV = mysqli_num_rows($SERVICO);
    if($COSULTORDQUITSERV >= 0){
        while ($Linha = $SERVICO->fetch_array()){
            $nomeDoFornecedor = $Linha["col_descricaoFornecedor"];
            $codigoDoFornecedor = $Linha["col_codigoFornecedor"];
        }
    }
    $pdf->SetFont("Arial", "B", 10);
    $pdf->Cell(0, 4, utf8_decode($codigoDoFornecedor." - ".$nomeDoFornecedor), 1, 2, "C");

    while ($row = mysqli_fetch_assoc($QUERYSERVICO)) {
        $pdf->SetFont("Arial", "", 6);
        $pdf->Row(Array(
            utf8_decode($row["col_materialCodigoSAP"]),
            utf8_decode($row["col_textoBreveMaterial"]),
            utf8_decode($row["col_pedido"]),
            utf8_decode($row["col_numeroNotaFiscal"]),
            utf8_decode($row["col_requisicao"]),
            utf8_decode($row["col_requisitanteRC"]),
            $row["col_quantidade"],
            date("d/m/Y",strtotime($row["col_dataImportacao"])),
            "R$: ". number_format($row["col_valorMaterialSAP"], 2,",","."),
        ));

    }
    $pdf->Ln();
}
