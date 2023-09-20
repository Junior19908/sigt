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

$ESTOQ = $PROPRIAANT - $ESTOQUE2;
$SOMACANA = $ESTOQ+$FORNECEDORANT;

/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-01'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA1 = $MYSQLINHA['CanaProp'];
						$VHP1 = $MYSQLINHA['VHP'];
						$EXTRA2A1 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR1 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP1 = $MYSQLINHA['BonsucroVHP'];
	}
}
$PRIMEIR = $PROPRIADIA1 + $ESTOQUE2;
$SOMASACO50KG1 = $TOTALVHPANT+$VHP1+$EXTRA2A1+$BOMSUCROVHP1+$BOMSUCROACUCAR1;
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-01'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA1 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-01'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA1 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-02'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA2 = $MYSQLINHA['CanaProp'];
						$VHP2 = $MYSQLINHA['VHP'];
						$EXTRA2A2 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR2 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP2 = $MYSQLINHA['BonsucroVHP'];
	}
}
$SOMASACO50KG2 = $SOMASACO50KG1+$VHP2+$EXTRA2A2+$BOMSUCROACUCAR2+$BOMSUCROVHP2;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-02'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA2 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-02'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA2 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-03'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA3 = $MYSQLINHA['CanaProp'];
						$VHP3 = $MYSQLINHA['VHP'];
						$EXTRA2A3 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR3 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP3 = $MYSQLINHA['BonsucroVHP'];
	}
}
$SOMASACO50KG3 = $SOMASACO50KG2+$VHP3+$EXTRA2A3+$BOMSUCROVHP3+$BOMSUCROACUCAR3;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-03'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA3 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-03'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA3 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-04'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA4 = $MYSQLINHA['CanaProp'];
						$VHP4 = $MYSQLINHA['VHP'];
						$EXTRA2A4 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR4 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP4 = $MYSQLINHA['BonsucroVHP'];
	}
}
$SOMASACO50KG4 = $SOMASACO50KG3+$VHP4+$EXTRA2A4+$BOMSUCROVHP4+$BOMSUCROACUCAR4;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-04'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA4 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-04'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA4 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-05'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA5 = $MYSQLINHA['CanaProp'];
						$VHP5 = $MYSQLINHA['VHP'];
						$EXTRA2A5 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR5 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP5 = $MYSQLINHA['BonsucroVHP'];
	}
}
$SOMASACO50KG5 = $SOMASACO50KG4+$VHP5+$EXTRA2A5+$BOMSUCROVHP5+$BOMSUCROACUCAR5;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-05'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA5 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-05'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA5 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-06'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA6 = $MYSQLINHA['CanaProp'];
						$VHP6 = $MYSQLINHA['VHP'];
						$EXTRA2A6 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR6 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP6 = $MYSQLINHA['BonsucroVHP'];
	}
}
$SOMASACO50KG6 = $SOMASACO50KG5+$VHP6+$EXTRA2A6+$BOMSUCROVHP6+$BOMSUCROACUCAR6;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-06'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA6 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-06'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA6 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-07'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA7 = $MYSQLINHA['CanaProp'];
						$VHP7 = $MYSQLINHA['VHP'];
						$EXTRA2A7 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR7 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP7 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG7 = $SOMASACO50KG6+$VHP7+$EXTRA2A7+$BOMSUCROVHP7+$BOMSUCROACUCAR7;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-07'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA7 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-07''");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA7 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-08'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA8 = $MYSQLINHA['CanaProp'];
						$VHP8 = $MYSQLINHA['VHP'];
						$EXTRA2A8 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR8 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP8 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG8 = $SOMASACO50KG7+$VHP8+$EXTRA2A8+$BOMSUCROVHP8+$BOMSUCROACUCAR8;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-08'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA8 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-08'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA8 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-09'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA9 = $MYSQLINHA['CanaProp'];
						$VHP9 = $MYSQLINHA['VHP'];
						$EXTRA2A9 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR9 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP9 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG9 = $SOMASACO50KG8+$VHP9+$EXTRA2A9+$BOMSUCROVHP9+$BOMSUCROACUCAR9;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-09'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA9 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-09'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA9 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-10'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA10 = $MYSQLINHA['CanaProp'];
						$VHP10 = $MYSQLINHA['VHP'];
						$EXTRA2A10 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR10 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP10 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG10 = $SOMASACO50KG9+$VHP10+$EXTRA2A10+$BOMSUCROVHP10+$BOMSUCROACUCAR10;
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-10'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA10 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-10'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA10 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-11'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA11 = $MYSQLINHA['CanaProp'];
						$VHP11 = $MYSQLINHA['VHP'];
						$EXTRA2A11 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR11 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP11 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG11 = $SOMASACO50KG10+$VHP11+$EXTRA2A11+$BOMSUCROVHP11+$BOMSUCROACUCAR11;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-11'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA11 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-11'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA11 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-12'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA12 = $MYSQLINHA['CanaProp'];
						$VHP12 = $MYSQLINHA['VHP'];
						$EXTRA2A12 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR12 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP12 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG12 = $SOMASACO50KG11+$VHP12+$EXTRA2A12+$BOMSUCROVHP12+$BOMSUCROACUCAR12;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-12'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA12 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-12'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA12 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-13'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA13 = $MYSQLINHA['CanaProp'];
						$VHP13 = $MYSQLINHA['VHP'];
						$EXTRA2A13 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR13 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP13 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG13 = $SOMASACO50KG12+$VHP13+$EXTRA2A13+$BOMSUCROVHP13+$BOMSUCROACUCAR13;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-13'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA13 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-13'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA13 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-14'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA14 = $MYSQLINHA['CanaProp'];
						$VHP14 = $MYSQLINHA['VHP'];
						$EXTRA2A14 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR14 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP14 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG14 = $SOMASACO50KG13+$VHP14+$EXTRA2A14+$BOMSUCROVHP14+$BOMSUCROACUCAR14;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-14'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA14 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-14'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA14 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-15'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA15 = $MYSQLINHA['CanaProp'];
						$VHP15 = $MYSQLINHA['VHP'];
						$EXTRA2A15 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR15 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP15 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG15 = $SOMASACO50KG14+$VHP15+$EXTRA2A15+$BOMSUCROVHP15+$BOMSUCROACUCAR15;
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-15'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA15 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-15'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA15 = $MYSQLINHA['CanaTotal'];
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-01' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA1 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-02' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA2 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-03' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA3 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-04' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA4 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-05' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA5 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-06' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA6 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-07' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA7 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-08' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA8 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-09' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA9 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-10' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA10 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-11' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA11 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-12' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA12 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-13' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA13 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-14' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA14 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT UNIDADE,MATERIAL,TIPO_EMB,SUM(QUANTIDADE) AS SMQUANTIDADE FROM `tb_saida_semana` WHERE DATA_EMISS='$AnoCorrente-$Mes-15' and GRUPO_MERC='9410' AND DEPOSITO!='' AND TRANSPORTADORA!='' GROUP BY UNIDADE");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
        if($SQLINE['MATERIAL']=='100014'){
            $VHPDIA15 = $SQLINE['SMQUANTIDADE']*20;
        }
	}
}
$QUERYCRISTAL = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_ant` WHERE col_data='$AnoCorrente-$Mes-01'");
$ROWADIACRISTAL = mysqli_num_rows($QUERYCRISTAL);
if ($ROWADIACRISTAL > 0){
	while($SQLINE = mysqli_fetch_array($QUERYCRISTAL)){
            $VHPDIANT = $SQLINE['col_ant_vhp19'];
	}
}
$SOMAVHPDIA1 = $VHPDIA1 + $VHPDIANT;
$SOMAVHPDIA2 = $SOMAVHPDIA1 + $VHPDIA2;
$SOMAVHPDIA3 = $SOMAVHPDIA2 + $VHPDIA3;
$SOMAVHPDIA4 = $SOMAVHPDIA3 + $VHPDIA4;
$SOMAVHPDIA5 = $SOMAVHPDIA4 + $VHPDIA5;
$SOMAVHPDIA6 = $SOMAVHPDIA5 + $VHPDIA6;
$SOMAVHPDIA7 = $SOMAVHPDIA6 + $VHPDIA7;
$SOMAVHPDIA8 = $SOMAVHPDIA7 + $VHPDIA8;
$SOMAVHPDIA9 = $SOMAVHPDIA8 + $VHPDIA9;
$SOMAVHPDIA10 = $SOMAVHPDIA9 + $VHPDIA10;
$SOMAVHPDIA11 = $SOMAVHPDIA10 + $VHPDIA11;
$SOMAVHPDIA12 = $SOMAVHPDIA11 + $VHPDIA12;
$SOMAVHPDIA13 = $SOMAVHPDIA12 + $VHPDIA13;
$SOMAVHPDIA14 = $SOMAVHPDIA13 + $VHPDIA14;
$SOMAVHPDIA15 = $SOMAVHPDIA14 + $VHPDIA15;
?>
