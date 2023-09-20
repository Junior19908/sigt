<?php
require_once 'include.inc.php';

if(isset($_POST['btnCadastrar'])){
    if($objFn->queryInsert($_POST) == 'ok'){
        echo'<head>
                <script type="text/javascript">alert("Sucesso!")</script>
                <meta http-equiv="refresh" content="0;url=http://10.2.1.4/SistemaGSGv2.0/" />
            </head>';
    }elseif($objFn->queryInsert($_POST) == 'senha'){
        echo'<head>
                <script type="text/javascript">alert("Sua senha dever ter no mínimo 7 Caracteres!")</script>
                <meta http-equiv="refresh" content="0;url=http://10.2.1.4/SistemaGSGv2.0/" />
            </head>';
    }else{
        echo'<head>
                <script type="text/javascript">alert("Já existe um cadastro com essa matricula!")</script>
                <meta http-equiv="refresh" content="0;url=http://10.2.1.4/SistemaGSGv2.0/" />
            </head>';
    }
}