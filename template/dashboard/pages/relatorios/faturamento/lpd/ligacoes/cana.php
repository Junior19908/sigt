<?php
$CONNECTIONINCLUDE = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgfaturamento');
if ($selection==1) {
  include_once('diasAnt1.php');
}else {
  include_once('diasAnt2.php');
}

$ESTOQ = $PROPRIAANT - $ESTOQUE2;
$SOMACANA = $ESTOQ+$FORNECEDORANT;

/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-16'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA16 = $MYSQLINHA['CanaProp'];
						$VHP16 = $MYSQLINHA['VHP'];
						$EXTRA2A16 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR16 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP16 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG16 = $SOMASACO50KG15+$VHP16+$EXTRA2A16+$BOMSUCROVHP16+$BOMSUCROACUCAR16;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-16'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA16 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-16'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA16 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-17'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA17 = $MYSQLINHA['CanaProp'];
						$VHP17 = $MYSQLINHA['VHP'];
						$EXTRA2A17 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR17 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP17 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG17 = $SOMASACO50KG16+$VHP17+$EXTRA2A17+$BOMSUCROVHP17+$BOMSUCROACUCAR17;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-17'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA17 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-17'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA17 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-18'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA18 = $MYSQLINHA['CanaProp'];
						$VHP18 = $MYSQLINHA['VHP'];
						$EXTRA2A18 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR18 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP18 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG18 = $SOMASACO50KG17+$VHP18+$EXTRA2A18+$BOMSUCROVHP18+$BOMSUCROACUCAR18;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-18'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA18 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-18'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA18 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-19'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA19 = $MYSQLINHA['CanaProp'];
						$VHP19 = $MYSQLINHA['VHP'];
						$EXTRA2A19 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR19 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP19 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG19 = $SOMASACO50KG18+$VHP19+$EXTRA2A19+$BOMSUCROVHP19+$BOMSUCROACUCAR19;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-19'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA19 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-19'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA19 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-20'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA20 = $MYSQLINHA['CanaProp'];
						$VHP20 = $MYSQLINHA['VHP'];
						$EXTRA2A20 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR20 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP20 = $MYSQLINHA['BonsucroVHP'];

	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-20'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA20 = $MYSQLINHA['CanaForn'];
	}
}
$SOMASACO50KG20 = $SOMASACO50KG19+$VHP20+$EXTRA2A20+$BOMSUCROVHP20+$BOMSUCROACUCAR20;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-20'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA20 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-21'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA21 = $MYSQLINHA['CanaProp'];
						$VHP21 = $MYSQLINHA['VHP'];
						$EXTRA2A21 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR21 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP21 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG21 = $SOMASACO50KG20+$VHP21+$EXTRA2A21+$BOMSUCROVHP21+$BOMSUCROACUCAR21;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-21'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA21 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-21'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA21 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-22'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA22 = $MYSQLINHA['CanaProp'];
						$VHP22 = $MYSQLINHA['VHP'];
						$EXTRA2A22 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR22 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP22 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG22 = $SOMASACO50KG21+$VHP22+$EXTRA2A22+$BOMSUCROVHP22+$BOMSUCROACUCAR22;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-22'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA22 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-22'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA22 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-23'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA23 = $MYSQLINHA['CanaProp'];
						$VHP23 = $MYSQLINHA['VHP'];
						$EXTRA2A23 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR23 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP23 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG23 = $SOMASACO50KG22+$VHP23+$EXTRA2A23+$BOMSUCROVHP23+$BOMSUCROACUCAR23;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-23'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA23 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-23'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA23 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-24'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA24 = $MYSQLINHA['CanaProp'];
						$VHP24 = $MYSQLINHA['VHP'];
						$EXTRA2A24 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR24 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP24 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG24 = $SOMASACO50KG23+$VHP24+$EXTRA2A24+$BOMSUCROVHP24+$BOMSUCROACUCAR24;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-24'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA24 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-24'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA24 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-25'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA25 = $MYSQLINHA['CanaProp'];
						$VHP25 = $MYSQLINHA['VHP'];
						$EXTRA2A25 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR25 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP25 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG25 = $SOMASACO50KG24+$VHP25+$EXTRA2A25+$BOMSUCROVHP25+$BOMSUCROACUCAR25;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-25'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA25 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-25'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA25 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-26'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA26 = $MYSQLINHA['CanaProp'];
						$VHP26 = $MYSQLINHA['VHP'];
						$EXTRA2A26 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR26 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP26 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG26 = $SOMASACO50KG25+$VHP26+$EXTRA2A26+$BOMSUCROVHP26+$BOMSUCROACUCAR26;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-26'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA26 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-26'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA26 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-27'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA27 = $MYSQLINHA['CanaProp'];
						$VHP27 = $MYSQLINHA['VHP'];
						$EXTRA2A27 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR27 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP27 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG27 = $SOMASACO50KG26+$VHP27+$EXTRA2A27+$BOMSUCROVHP27+$BOMSUCROACUCAR27;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-27'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA27 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-27'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA27 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-28'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA28 = $MYSQLINHA['CanaProp'];
						$VHP28 = $MYSQLINHA['VHP'];
						$EXTRA2A28 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR28 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP28 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG28 = $SOMASACO50KG27+$VHP28+$EXTRA2A28+$BOMSUCROVHP28+$BOMSUCROACUCAR28;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-28'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA28 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-28'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA28 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-29'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA29 = $MYSQLINHA['CanaProp'];
						$VHP29 = $MYSQLINHA['VHP'];
						$EXTRA2A29 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR29 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP29 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG29 = $SOMASACO50KG28+$VHP29+$EXTRA2A29+$BOMSUCROVHP29+$BOMSUCROACUCAR29;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-29'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA29 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-29'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA29 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-30'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA30 = $MYSQLINHA['CanaProp'];
						$VHP30 = $MYSQLINHA['VHP'];
						$EXTRA2A30 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR30 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP30 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG30 = $SOMASACO50KG29+$VHP30+$EXTRA2A30+$BOMSUCROVHP30+$BOMSUCROACUCAR30;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-30'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA30 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-30'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA30 = $MYSQLINHA['CanaTotal'];
	}
}
/***************************************************************************************************************************************** */
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-31'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $PROPRIADIA31 = $MYSQLINHA['CanaProp'];
						$VHP31 = $MYSQLINHA['VHP'];
						$EXTRA2A31 = $MYSQLINHA['EspExtra2-A'];
						$BOMSUCROACUCAR31 = $MYSQLINHA['BonsicrpACUCAR'];
						$BOMSUCROVHP31 = $MYSQLINHA['BonsucroVHP'];

	}
}
$SOMASACO50KG31 = $SOMASACO50KG30+$VHP31+$EXTRA2A31+$BOMSUCROVHP31+$BOMSUCROACUCAR31;

$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-31'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $FORNECEDORDIA31 = $MYSQLINHA['CanaForn'];
	}
}
$QUERY = mysqli_query($CONNECTIONINCLUDE, "SELECT * FROM `tb_boletim` WHERE datadoDia='$AnoCorrente-$Mes-31'");
$LINHA = mysqli_num_rows($QUERY);
if ($LINHA > 0){
	while($MYSQLINHA = mysqli_fetch_array($QUERY)){
            $CANATOTALDIA31 = $MYSQLINHA['CanaTotal'];
	}
}

/***************************************************************************************************************************************** */
?>
