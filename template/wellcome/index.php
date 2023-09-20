<?php
//Inicia a Sessão
session_start();
//Verifica se o usuário esta logado
require_once '../../include/verifica_user.php';
//Inclusão das Funcões
require_once '../../class/Funcionario.class.php';
require_once '../../controller/user.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../css/styleAnimated.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="../../css/animate.css" rel="stylesheet"/>
	<link href="../../css/waypoints.css" rel="stylesheet"/>
	<script src="../../js/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="../../js/waypoints.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="../../css/ico/favicon.ico" type="image/x-icon"/>
    <title>SistemaGSG V2.0</title>
</head>
<body>
    <section class="intro">
        <div class="inner">
            <div class="content">
                <section class="os-animation" data-os-animation="bounceInUp" data-os-animation-delay="0s">
                    <h1>Bem Vindo!</h1>
                </section>
                <section class="os-animation" data-os-animation="bounceInUp" data-os-animation-delay=".1s">
                    <a class="btn" href="../dashboard/"><?php echo ''.$nome.''; ?></a>
                </section>
            </div>
        </div>
    </section>
    <div class="middle">
        <div class="mouse">

        </div>
    </div>
    <p>Olá, <a class="btn" href="../dashboard/"> <?php echo ''.$nick.''; ?></a></p>
	<p>Essa atualização teve o proposito de corrigir bugs, centralizar relatórios & tornar a navegação pelo SistemaGSG mais rápida e simples.</p>
	<p>Layout de todo SistemaGSG modificação para melhor visualização.</p>
	<p>Correção em todos os relatórios.</p>
	<p>Todo o Banco de Dados foi remodelado e todas as tabelas interligadas para melhorar o desempenho, conforme é possivel ver abaixo.</p>
	<p><center><img src="../../css/frontend/SQL.png" alt=""/></center></p>
	<p>Sistema de conexão com o banco de dados também modificado, antes utilizava-se o Mysql puro agora utilizamos a biblioteca PDO, conta com conexões mais seguras e acessos rápidos.</p>
	<p>Não será mais necessário inserir o início das bombas, pois o sistema já identifica.</p>
    <p>Adicionado opção para recuperação de senha.</p>
    <p>Adicionado Status de processamento na importação dos Cupons.</p>
    <p>Adicionado Chat, onde será possivel a comunicação entre os usuários e administradores.</p>
    <p>Adicionado Gráficos de consumos.</p>
    <p>Adicionado Lista de tarefas, onde é possivel visualizar relatórios gerados no sistema e importações feitas.</p>
</body>
</html>
