<?php
$OVENDAQUITDA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT CONTRATO.*, OV.*, SAIDA.* FROM tb_contratos AS CONTRATO LEFT JOIN tb_ordem_venda AS OV on CONTRATO.col_docvendas=OV.N_pedido LEFT JOIN tb_saida_semana AS SAIDA ON OV.Doc_SD=SAIDA.ORDEM WHERE OV.col_TipoOV='Venda Representante' AND OV.UM='7' AND SAFRA='$SAFRA' GROUP BY OV.Doc_SD ORDER BY `CONTRATO`.`col_nome` ASC");
$COSULTQUITADA = mysqli_num_rows($OVENDAQUITDA);
if ($COSULTQUITADA > 0) {
    while($row = $OVENDAQUITDA->fetch_array()){
                $ORDS = $row['Doc_SD'];
                $SOMAQUANTIORDQUITADA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT SUM(QUANTIDADE) AS SOMASE, SUM(VL_BRUTO) AS SOMABRUTO FROM `tb_saida_semana` WHERE ORDEM='$ORDS' AND TRANSPORTADORA!='' AND SAFRA='$SAFRA'");
                $COSULTORDQUIT = mysqli_num_rows($SOMAQUANTIORDQUITADA);
                if($COSULTORDQUIT > 0){
                    while ($Linha = $SOMAQUANTIORDQUITADA->fetch_array()){
                        if ($row['UNIDADE']=='KG') {
                            $OVREPQUIT = $Linha['SOMASE']/50;
                        }else{
                            $OVREPQUIT = $Linha['SOMASE'];
                        }
                        $BRUTOVLOVQUITADA = $Linha['SOMABRUTO'];
                    }
                }
                $QUERYOVQUITADA = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_ordem_venda` WHERE Doc_SD='$ORDS' AND SAFRA='$SAFRA'");
                $ROWOVQUITADA = mysqli_num_rows($QUERYOVQUITADA);
                if($ROWOVQUITADA > 0){
                    while ($Linha = $QUERYOVQUITADA->fetch_array()){
                        if($row['UMB'] == 'KG'){
                            $QUERYORDQUITADA = $Linha['Qtd_conf']/50;
                        }else {
                            $QUERYORDQUITADA = $Linha['Qtd_conf'];
                        } 
                    }
                }

                if ($row['N_pedido'] >= 40000000) {
                    $pdf->Row(Array(
                        utf8_decode(' ----> '.$row['COD_RECEB']),
                        utf8_decode($row['Doc_SD']),
                        date("d/m/Y",strtotime($row['DATA_EMISS'])),
                        '-',
                        number_format($row['col_qtd_contrato'], 0,',','.'),
                        number_format($OVREPQUIT, 0,',','.'),
                    ),
                    $pdf->Row(Array(
                        utf8_decode($row['Nome_1']),
                        utf8_decode($row['N_pedido']),
                        date("d/m/Y",strtotime($row['Data_doc'])),
                        '-',
                        number_format($row['col_qtd_contrato'], 0,',','.'),
                        number_format($row['col_qtd_contrato'], 0,',','.'),
                )));
            }elseif($row['N_pedido'] < 40000000) {
                $pdf->Row(Array(
                    utf8_decode(' ----> '.$row['COD_RECEB']),
                    utf8_decode($row['Doc_SD']),
                    date("d/m/Y",strtotime($row['DATA_EMISS'])),
                    '-',
                    number_format($row['col_qtd_contrato'], 0,',','.'),
                    number_format($OVREPQUIT, 0,',','.'),
                ),
                $pdf->Row(Array(
                    utf8_decode($row['Nome_1']),
                    utf8_decode($row['N_pedido']),
                    date("d/m/Y",strtotime($row['Data_doc'])),
                    '-',
                    number_format($row['col_qtd_contrato'], 0,',','.'),
                    number_format($row['col_qtd_contrato'], 0,',','.'),
            )));
            }
        }
    }
