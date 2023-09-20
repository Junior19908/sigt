<?php
$OVALT = mysqli_query($CONNECTIONFATURAMENTO, "SELECT OV.*, SAIDA.* FROM tb_ordem_venda AS OV LEFT JOIN tb_saida_semana AS SAIDA on OV.Doc_SD=SAIDA.ORDEM WHERE OV.Data_doc BETWEEN '$DATAINICIO' AND '$DATAFIM' AND col_TipoOV='V. Mercado Interno' AND OV.UM='4' GROUP BY OV.Doc_SD ORDER BY OV.Nome_1 ASC");
$COSULTALT = mysqli_num_rows($OVALT);
if ($COSULTALT > 0) {
    while($row = $OVALT->fetch_array()){
                $ORDS = $row['Doc_SD'];

                $SOMAQUANTIORD = mysqli_query($CONNECTIONFATURAMENTO, "SELECT SUM(QUANTIDADE) AS SOMASE, SUM(VL_BRUTO) AS SOMABRUTO FROM `tb_saida_semana` WHERE ORDEM='$ORDS' AND DATA_EMISS BETWEEN '$DATAINICIO' AND '$DATAFIM'");
                $COSULTORD = mysqli_num_rows($SOMAQUANTIORD);
                if($COSULTORD > 0){
                    while ($Linha = $SOMAQUANTIORD->fetch_array()){
                        if ($row['UNIDADE']=='KG') {
                            $quantsoma = $Linha['SOMASE']/50;
                        }else{
                            $quantsoma = $Linha['SOMASE'];
                        }
                        $BRUTOVL = $Linha['SOMABRUTO'];
                    }
                }
                $SELECORD = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_ordem_venda` WHERE Doc_SD='$ORDS' AND Data_doc BETWEEN '$DATAINICIO' AND '$DATAFIM' AND UM='4'");
                $ROWSELEC = mysqli_num_rows($SELECORD);
                if($ROWSELEC > 0){
                    while ($Linha = $SELECORD->fetch_array()){
                        if($row['UMB'] == 'KG'){
                            $SELECQTDORD = $Linha['Qtd_conf']/50;
                        }else {
                            $SELECQTDORD = $Linha['Qtd_conf'];
                        }        
                    }
                }
                
            $pdf->Row(Array(
                utf8_decode($row['Nome_1']),
                $row['Doc_SD'],
                date("d/m/Y",strtotime($row['Data_doc'])),
                number_format($BRUTOVL / $quantsoma, 2,',','.'),
                number_format($SELECQTDORD,0,',','.'),
                number_format($quantsoma,0,',','.'),
                number_format($SELECQTDORD - $quantsoma,0,',','.'),
            ));
        }
    }
