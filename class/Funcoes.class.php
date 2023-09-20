<?php

class Funcoes {
    
    public function tratarCaracter($vlr, $tipo){
	switch($tipo){
            case 1: $rst = utf8_decode($vlr); break;
            case 2: $rst = utf8_encode($vlr); break;    
			case 3: $rst = htmlentities($vlr, ENT_QUOTES, "ISO-8859-1"); break; 
        }
        return $rst;
    }	
    
    public function dataAtual($tipo){
	switch($tipo){
            case 1: $rst = date("Y-m-d"); break;
            case 2: $rst = date("Y-m-d H:i:s"); break;
            case 3: $rst = date("d/m/Y"); break;
        }
        return $rst;
    }
    
    public function base64($vlr, $tipo){
        switch($tipo){
            case 1: $rst = base64_encode($vlr); break;
            case 2: $rst = base64_decode($vlr); break;
        }
        return $rst;
    }
    
}
/**
 * Conecta com o MySQL usando PDO
 */
function ConexaoDB()
{
	try{
		
    $PDO = new PDO('mysql:host=localhost;dbname=sistemagsgposto;charset=utf8', SISTEMAGSG_DB_USER, SISTEMAGSG_DB_PASS);
	
	return $PDO;
	
	}catch (PDOException $ex) {
			echo $ex->getMessage();
        }
}
function ConexaoAlmoxarifado()
{
	try{
		
    $PDO = new PDO('mysql:host=localhost;dbname=sistemagsgalmoxarifado;charset=utf8', SISTEMAGSG_DB_USER, SISTEMAGSG_DB_PASS);
	
	return $PDO;
	
	}catch (PDOException $ex) {
			echo $ex->getMessage();
        }
}
function ConexaoDBFaturamentos()
{
	try{
		
    $PDO = new PDO('mysql:host=localhost;dbname=sistemagsgfaturamento;charset=utf8', SISTEMAGSG_DB_USER, SISTEMAGSG_DB_PASS);
	
	return $PDO;
	
	}catch (PDOException $ex) {
			echo $ex->getMessage();
        }
}

function FaturamentoDB()
{
	try{
		
    $PDO = new PDO('mysql:host=localhost;dbname=sistemagsgfaturamento;charset=utf8', SISTEMAGSG_DB_USER, SISTEMAGSG_DB_PASS);
	
	return $PDO;
	
	}catch (PDOException $ex) {
			echo $ex->getMessage();
        }
}
?>
