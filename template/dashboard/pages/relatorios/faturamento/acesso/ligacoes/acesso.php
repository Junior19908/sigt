<?php
error_reporting(0);
ini_set("display_errors", 0);
$CONNECTIONINCLUDE = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgfaturamento');
$CONNECTIONPOSTO = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgposto');
//SELECT almox.*, userserv.nome_user FROM `tb_almox` AS almox LEFT JOIN tb_user AS userserv on almox.user=userserv.id_user ORDER BY `requisicao` ASC
$ACESSO = mysqli_query($CONNECTIONINCLUDE, "SELECT tb_acesso.*, tb_cliente.*, tb_motorista.* FROM ((tb_acesso INNER JOIN tb_cliente ON tb_acesso.col_cliente = tb_cliente.col_cod_id) INNER JOIN tb_motorista ON tb_acesso.col_motorista = tb_motorista.col_cod_id) ORDER BY `tb_acesso`.`id`  ASC");
$LINHA = mysqli_num_rows($ACESSO);
if ($LINHA > 0){
	while($sqline = mysqli_fetch_array($ACESSO)){
        $NACESSO = $sqline['col_acesso'];
        $DATAAC = $sqline['col_data_acesso'];
        $HORAAC = $sqline['col_hora_acesso'];
        $CLIENTE = $sqline['col_nome'];
        $CNPJ = $sqline['col_cnpj'];
        $RUA = $sqline['col_rua'];
        $CIDADE = $sqline['col_cidade'];
        $IESTADUAL = $sqline['col_iestadual'];
        $ESTADO = $sqline['col_estado'];
        $TPSAC = $sqline['col_tipo_sac'];
        $QUANT = $sqline['col_quant'];
        $ORDEM = $sqline['col_ov'];
        $SACARIA_INICIO = $sqline['col_sacaria_inicio'];
        $SACARIA_FIM = $sqline['col_sacaria_fim'];
        $SAFRA = $sqline['col_safra'];
        $TRANSPORT = $sqline['col_transport'];
        $MOTORISTA = $sqline['col_nome_mot'];
        $PLACA_1 = $sqline['col_placa_1'];
        $PLACA_2 = $sqline['col_placa_2'];
        $PLACA_3 = $sqline['col_placa_3'];
        $PLACA_4 = $sqline['col_placa_4'];
        $OBSAC = $sqline['Obs'];
        $ID_USER = $sqline['col_id_user'];
	}
}

$TRANSPORTT = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_transport` WHERE `col_cod_id` = '$TRANSPORT'");
$LINHA2 = mysqli_num_rows($TRANSPORTT);
if ($LINHA2 > 0){
	while($sqline = mysqli_fetch_array($TRANSPORTT)){
                $NTRANSPORT = $sqline['col_nome_transp'];
                $CNPJ_TRANSP = $sqline['col_cnpj_transp'];
                $IETRANSPORT = $sqline['col_iestadual_transp'];
	}
}

$TRANSPORTT = mysqli_query($CONNECTIONPOSTO, "SELECT * FROM `tb_user` WHERE `id_user` = '$ID_USER'");
$LINHA3 = mysqli_num_rows($TRANSPORTT);
if ($LINHA3 > 0){
	while($sqline = mysqli_fetch_array($TRANSPORTT)){
                $NOME_USER = $sqline['nome_user'];
	}
}


?>