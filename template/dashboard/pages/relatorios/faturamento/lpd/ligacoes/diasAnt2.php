<?php
if($Mes==1){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoPassado-01-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoPassado-01-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoPassado-01-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}

}elseif($Mes==2){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-02-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-02-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-02-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}

}elseif($Mes==3){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-03-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-03-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-03-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}
}elseif($Mes==4){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-04-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-04-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-04-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}

}elseif($Mes==5){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-05-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-05-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-05-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}

}elseif($Mes==6){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-06-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-06-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-06-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}

}elseif($Mes==7){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-07-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-07-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-07-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}
}elseif($Mes==8){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-08-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-08-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-08-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}

}elseif($Mes==9){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-09-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-09-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-09-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}

}elseif($Mes==10){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-10-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-10-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-10-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE1 = $MYSQLINHA['CanaEstoqueVLDIA'];
				$ESTOQUE2 = $MYSQLINHA['CanaEstoqueVLSEM'];
		}
	}

}elseif($Mes==11){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-11-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['CanaTotal'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-11-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['CanaTotal'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-11-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}
}elseif($Mes==12){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-12-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-12-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-12-15'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}
}
?>
