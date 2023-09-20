<?php
$logado = $_SESSION['username'];
$servidorUsado="127.0.0.1";
$link = "http://$servidorUsado/SistemaGSGv2.0/template/dashboard/";
$linkBooking = "http://$servidorUsado/SistemaGSGv2.0/template/dashboard/pages/relatorios/faturamento/booking/booking.php";
$linkBookingInserir = "http://$servidorUsado/SistemaGSGv2.0/template/dashboard/pages/relatorios/faturamento/booking/";
$CONEXAOPOSTO = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgposto');
$query = mysqli_query($CONEXAOPOSTO, "SELECT * FROM tb_user WHERE login_user = '$logado'");
$row1 = mysqli_num_rows($query);
if ($row1 > 0){
	while($sqline = mysqli_fetch_array($query)){
		$nome = $sqline['nome_user'];
		$nick = $sqline['login_user'];
		$type = $sqline['type_user'];
		$id_userr = $sqline['id_user'];
		$avatar = $sqline['avatar'];
		$DataCadastro = $sqline['date'];
		$WellcomeMesage = $sqline['updategsg'];
	}
}
$CONNECTIONINCLUDE = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgposto');
$CONNECTIONFATURAMENTO = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgfaturamento');
$queryNavio = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_booking` WHERE col_status='1'");
$rowNavio = mysqli_num_rows($queryNavio);


$QUERYDATA = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_import` ORDER BY date DESC LIMIT 1");
$ROWDATA = mysqli_num_rows($QUERYDATA);
if ($ROWDATA > 0){
	while($sqline = mysqli_fetch_array($QUERYDATA)){
			$VERIFICADATA = $sqline['date'];
		}
	}


	$GETFUNCIONARIO=mysqli_query($CONNECTIONINCLUDE,"SELECT * FROM tb_funcionario ORDER BY nome_funcionario ASC");
	$funcionario = '';
	 while($row = mysqli_fetch_assoc($GETFUNCIONARIO))
	{
	  $funcionario .= '<option value = "'.$row['cod_veiculo'].'">'.$row['func_matricula']. ' | ' .$row['nome_funcionario'].'</option>';
	}


	$get=mysqli_query($CONNECTIONINCLUDE,"SELECT * FROM tb_fornecedor GROUP BY nome_fornecedor ORDER BY nome_fornecedor ASC");
	$option = '';
	 while($row = mysqli_fetch_assoc($get))
	{
	  $option .= '<option value = "'.$row['cod_fornecedor'].'">'.$row['cod_fornecedor']. ' | ' .$row['nome_fornecedor'].'</option>';
	}

	$gett=mysqli_query($CONNECTIONINCLUDE,"SELECT * FROM tb_mes ORDER BY id_mes ASC");
	$option2 = '';
	 while($row = mysqli_fetch_assoc($gett))
	{
	  $option2 .= '<option value = "'.$row['id_mes'].'">'.$row['descricao_mes'].'</option>';
	}

	$PERIODO=mysqli_query($CONNECTIONINCLUDE,"SELECT * FROM tb_status_periodo ORDER BY id_status_periodo ASC");
	$optionfornecedor = '';
	 while($row = mysqli_fetch_assoc($PERIODO))
	{
	  $optionfornecedor .= '<option value = "'.$row['id_status_periodo'].'">'.$row['desc_status'].'</option>';
	}

	$gett=mysqli_query($CONNECTIONINCLUDE,"SELECT * FROM tb_safra WHERE STATUS!='2' ORDER BY id_safra ASC");
	$option3 = '';
	 while($row = mysqli_fetch_assoc($gett))
	{
	  $option3 .= '<option value = "'.$row['id_safra'].'">'.$row['inicio'].'</option>';
	}

	
	$QUERY_POSITION_REP=mysqli_query($CONNECTIONFATURAMENTO,"SELECT * FROM tb_tipo ORDER BY `tb_tipo`.`col_desc` ASC");
	$OPTION_POSITION_REP = '';
	 while($row = mysqli_fetch_assoc($QUERY_POSITION_REP))
	{
	  $OPTION_POSITION_REP .= '<option value = "'.$row['col_id'].'">'.$row['col_desc'].'</option>';
	}

	$QUERY_POSITION_OV=mysqli_query($CONNECTIONFATURAMENTO,"SELECT * FROM tb_tipo ORDER BY `tb_tipo`.`col_desc` ASC");
	$OPTION_POSITION_OV = '';
	 while($row = mysqli_fetch_assoc($QUERY_POSITION_OV))
	{
	  $OPTION_POSITION_OV .= '<option value = "'.$row['col_id'].'">'.$row['col_desc'].'</option>';
	}



	$QUERYEXCEL=mysqli_query($CONNECTIONINCLUDE,"SELECT * FROM tb_safra WHERE STATUS != 2 ORDER BY id_safra ASC");
	$optionEXCEL = '';
	 while($row = mysqli_fetch_assoc($QUERYEXCEL))
	{
	  $optionEXCEL .= '<option value = "'.$row['id_safra'].'">'.$row['inicio'].'</option>';
	}
	$QUERYPERIODOEXCEL=mysqli_query($CONNECTIONINCLUDE,"SELECT * FROM tb_export_fornecedor_cana GROUP BY date ORDER BY id_export DESC");
	$PERIODOEXCEL = '';
	 while($row = mysqli_fetch_assoc($QUERYPERIODOEXCEL))
	{
	  $PERIODOEXCEL .= '<option value = "'.$row['date'].'">'. date("d/m/Y",strtotime($row['date'])).' - '. date("d/m/Y",strtotime($row['date_fim'])).'</option>';
	}

	$QUERYTERCEIROS = mysqli_query($CONNECTIONINCLUDE,"SELECT * FROM `tb_proprio` WHERE cod_veiculo BETWEEN '9000' AND '9010' ORDER BY `tb_proprio`.`desc_veiculo`  ASC;");
	$PTERCEIROS = '';
	 while($row = mysqli_fetch_assoc($QUERYTERCEIROS))
	{
	  $PTERCEIROS .= '<option value = "'.$row['cod_veiculo'].'">'.$row['desc_veiculo'].'</option>';
	}


$query_atualiz = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_import WHERE date < CURDATE()");
$row2 = mysqli_num_rows($query_atualiz);
if ($row2 > 0){
	while($sqline = mysqli_fetch_array($query_atualiz)){
		$serv_update = $sqline['date'];
		}
	}

$querychat = mysqli_query($CONNECTIONINCLUDE, "SELECT COUNT(id) AS contmsgchat FROM tb_chat");
$rowchat = mysqli_num_rows($querychat);
if ($rowchat > 0){
	while($sqline = mysqli_fetch_array($querychat)){
		$chatcont = $sqline['contmsgchat'];
		}
	}

$QUERYCBIO = mysqli_query($CONNECTIONFATURAMENTO, "SELECT COUNT(col_id) AS CONTAGEMCON FROM tb_nota_consultar WHERE col_status='2'");
$ROWCBIO = mysqli_num_rows($QUERYCBIO);
if ($ROWCBIO > 0){
	while($sqline = mysqli_fetch_array($QUERYCBIO)){
			$CONCLUIDA = $sqline['CONTAGEMCON'];
		}
	}
$QUERYCBIO2 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT COUNT(col_id) AS CONTAGEMCON FROM tb_nota_consultar WHERE col_status IN(1,143)");
$ROWCBIO2 = mysqli_num_rows($QUERYCBIO2);
if ($ROWCBIO2 > 0){
	while($sqline = mysqli_fetch_array($QUERYCBIO2)){
			$PENDENTES = $sqline['CONTAGEMCON'];
		}
	}
$QUERYCBIO3 = mysqli_query($CONNECTIONFATURAMENTO, "SELECT COUNT(col_id) AS CONTAGEMCON FROM tb_nota_consultar WHERE col_status=142");	
$ROWCBIO3 = mysqli_num_rows($QUERYCBIO2);
if ($ROWCBIO3 > 0){
	while($sqline = mysqli_fetch_array($QUERYCBIO3)){
			$SMANIFEST = $sqline['CONTAGEMCON'];
		}
	}


$querychat = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM tb_version");
$rowchat = mysqli_num_rows($querychat);
if ($rowchat > 0){
	while($sqline = mysqli_fetch_array($querychat)){
		$ANOINICIO = $sqline['inicio_ano'];
		$ANOFIM = $sqline['fim_ano'];
		$VERSIONPROG = $sqline['version'];
		}
	}
$querycountvisitas = mysqli_query($CONNECTIONINCLUDE, "SELECT COUNT(*) AS countvisitas FROM `tb_visitas`");
$rowvist = mysqli_num_rows($querycountvisitas);
if ($rowvist > 0){
	while($sqline = mysqli_fetch_array($querycountvisitas)){
		$visitascont = $sqline['countvisitas'];
		}
	}
$querycountvisitas = mysqli_query($CONNECTIONINCLUDE, "SELECT COUNT(*) AS countvisitas FROM `tb_visitas` WHERE id_user ='$id_userr'");
$rowvist = mysqli_num_rows($querycountvisitas);
if ($rowvist > 0){
	while($sqline = mysqli_fetch_array($querycountvisitas)){
		$visitasuser = $sqline['countvisitas'];
		}
	}

$querycountvisitas = mysqli_query($CONNECTIONINCLUDE, "SELECT COUNT(*) AS CountTrans FROM `tb_tarefas` WHERE id_user ='$id_userr'");
$rowvist = mysqli_num_rows($querycountvisitas);
if ($rowvist > 0){
	while($sqline = mysqli_fetch_array($querycountvisitas)){
		$Transacoes = $sqline['CountTrans'];
		}
	}

$QUERY_DATAPER = mysqli_query($CONNECTIONFATURAMENTO, "SELECT * FROM `tb_periodo` ORDER BY `tb_periodo`.`id` ASC");
$ROW_DATAPER = mysqli_num_rows($QUERY_DATAPER);
if ($ROW_DATAPER > 0){
	while($MYSQLINE = mysqli_fetch_array($QUERY_DATAPER)){
			$DT_INICIO = $MYSQLINE['col_inicio'];
			$DT_FIM___ = $MYSQLINE['col_fim'];
		}
	}

$query_visitas = mysqli_query($CONNECTIONINCLUDE, "SELECT visitas.*, usera.* FROM tb_visitas AS visitas LEFT JOIN tb_user AS usera ON visitas.id_user = usera.id_user WHERE visitas.date = CURDATE() AND usera.login_user='$logado'");
$rowvisitas = mysqli_num_rows($query_visitas);

$QUERY_POSITION=mysqli_query($CONNECTIONFATURAMENTO,"SELECT POSICAO.*, CONTRATO.col_docvendas,CONTRATO.col_position, TIPOOV.* FROM tb_ord_contratos_posicao AS POSICAO LEFT JOIN tb_contratos AS CONTRATO ON CONTRATO.col_id_position_tb=POSICAO.col_id LEFT JOIN tb_tipo AS TIPOOV ON CONTRATO.col_repres=TIPOOV.col_id ORDER BY POSICAO.col_id_position ASC, POSICAO.col_id ASC;");
$OPTION_POSITION = '';
 while($row = mysqli_fetch_assoc($QUERY_POSITION))
{
	if (empty($row['col_docvendas'])) {
		$OPTION_POSITION .= '<option value = "'.$row['col_id_position'].'" style="background-color:green;font-family:verdana;font-size:90%;text-align:center;color:white;">'.$row['col_id_position'].' | Livre'.'</option>';
	}else{
		$OPTION_POSITION .= '<option value = "'.$row['col_id_position'].'" style="background-color:grey;font-family:verdana;font-size:80%;color:white;">'.$row['col_id_position'].'_______'. $row['col_docvendas'] .'_______'. $row['col_desc'] .'</option>';
	}
}