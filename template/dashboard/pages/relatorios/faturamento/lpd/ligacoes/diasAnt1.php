<?php
if($Mes==1){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoPassado-12-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoPassado-12-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoPassado-12-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}

}elseif($Mes==2){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-01-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-01-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-01-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}

}elseif($Mes==3){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-02-28'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-02-28'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-02-28'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}
}elseif($Mes==4){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-03-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-03-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-03-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}

}elseif($Mes==5){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-04-30'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-04-30'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-04-30'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}

}elseif($Mes==6){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-05-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-05-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-05-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}

}elseif($Mes==7){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-06-30'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-06-30'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-06-30'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}
}elseif($Mes==8){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-07-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-07-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-07-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}

}elseif($Mes==9){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-08-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-08-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-08-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}

}elseif($Mes==10){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-09-30'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-09-30'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-09-30'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE1 = $MYSQLINHA['CanaEstoqueVLDIA'];
				$ESTOQUE2 = $MYSQLINHA['CanaEstoqueVLSEM'];
		}
	}

}elseif($Mes==11){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-10-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['CanaTotal'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-10-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['CanaTotal'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-10-31'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}
}elseif($Mes==12){
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-11-30'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$PROPRIAANT = $MYSQLINHA['ValorMesProp'];
				$TOTALVHPANT = $MYSQLINHA['TotalSafraVHP'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-11-30'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$FORNECEDORANT = $MYSQLINHA['ValorMesForn'];
		}
	}
	$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-11-30'");
	$LINHA = mysqli_num_rows($QUERY);
	if ($LINHA > 0){
		while($MYSQLINHA = mysqli_fetch_array($QUERY)){
				$ESTOQUE = $MYSQLINHA['CanaProp'];
		}
	}
}
?>
