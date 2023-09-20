<?php

class Conexao{
    private $usuario;
    private $senha;
    private $banco;
    private $bancoFaturamento;
    private $bancoAlmoxarifado;
    private $usuarioAlmoxarifado;
    private $servidor;
    private static $pdo;

    public function __construct(){
        $this->servidor = "localhost";
        $this->banco = "sistemagsgposto";
        $this->bancoFaturamento = "sistemagsgfaturamento";
        $this->bancoAlmoxarifado = "sistemagsgalmoxarifado";
        $this->usuario = "remoto";
        $this->usuarioAlmoxarifado = "remoto";
        $this->senha = "XTKfAFKPHNhWpSqW";
    }

    public function conectar(){
        try{
            if(is_null(self::$pdo)){
                self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
            }
            return self::$pdo;
        } catch (PDOException $ex) {
			echo $ex->getMessage();
        }
    }
    public function conectarFaturamento(){
        try{
            if(is_null(self::$pdo)){
                self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->bancoFaturamento, $this->usuario, $this->senha);
            }
            return self::$pdo;
        } catch (PDOException $ex) {
			echo $ex->getMessage();
        }
    }
    public function conectarAlmoxarifado(){
        try{
            if(is_null(self::$pdo)){
                self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->bancoAlmoxarifado, $this->usuarioAlmoxarifado, $this->senha);
            }
            return self::$pdo;
        } catch (PDOException $ex) {
			echo $ex->getMessage();
        }
    }
}

//Conexões antigas
$CONNECTIONINCLUDE = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgposto');
$CONNECTIONFATURAMENTO = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgfaturamento');
$conn = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgposto');
$CONNALMOXARIFADO = mysqli_connect('localhost','remoto','XTKfAFKPHNhWpSqW','sistemagsgalmoxarifado');

// constantes com as credenciais de acesso ao banco MySQL
define('SISTEMAGSG_DB_HOST', 'localhost');
define('SISTEMAGSG_DB_USER', 'remoto');
define('SISTEMAGSG_DB_PASS', 'XTKfAFKPHNhWpSqW');
define('SISTEMAGSG_DB_NAME', 'sistemagsgposto');

// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
 
date_default_timezone_set('America/Sao_Paulo');

// inclui o arquivo de funçõees
require_once 'Funcoes.class.php';
