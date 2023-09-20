<?php
$pasta ='../ligacoes/requires/';
$nome_arquivo = $_POST['exampleInputEmail1'] . '.php';

$arquivo = fopen($nome_arquivo, 'w+');
fwrite($arquivo, '
<?php


?>' . PHP_EOL);
fclose($arquivo);