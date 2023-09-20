<?php 
$arquivos_tmp = $_FILES['arquivo'];

$dados = file($arquivos_tmp);

var_dump($dados);

/*
if(!empty($arquivos_tmp = $_FILES['arquivo']['tmp_name'])){
	$dados = file($arquivos_tmp);
	foreach($dados as $linha){
		$valor = explode('|', $linha);
	

		$MATERIAL = $valor[0];



		echo "<table style='width:100%'>";
		echo "<tr>
				<td> 
					$MATERIAL -
				</td>
			</tr>";
		echo " <BR>";
		echo "</table>";
//$mysql = "INSERT INTO `tb_almox_reserva` (`ID_ITEM`, `RESERVA`, `ITEM`, `DATA`, `TPMOVIMETNO`, `MATERIAL`, `QTDPEDIDA`, `QDTSOLICITADA`, `UMB`, `CUSTO`, `DEPOSITO`, `TPNEC`, `RECEBEDOR`, `USUARIOSAP`) VALUES (NULL, '$RESERVA', '$ITEM', '$DATAINVERTIDA', '$TPMOVI', '$MATERIAL', '$QTDPED', '0', '$UMBS', '$CUSTO', '$DEPOS', '$TPNEC', '$RECEBEDOR', '$USERSAP')";
//$insert = mysqli_query($conn,$mysql);
	}
}else{
	echo("<h2 style='background-color:Tomato; color:white'>Dados Não Encontrados.<br>Volte e Escolha um arquivo para Importar!</h2>");
}*/
?>