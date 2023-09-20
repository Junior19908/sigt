<?php
unset($_COOKIE['SistemaGSG']);
setcookie('SistemaGSG', null, -1, '/');
require_once '../../include/global.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="5; url=http://10.2.1.4/SistemaGSGv2.0/index.php?acao=logout">
    <link rel="stylesheet" href="../../css/logout.css">
    <title>SistemaGSG | Logout</title>
</head>
<body>
    <a class="btn" id="fade" href="#ex9"></a>

    <div id="ex9" class="modal">
        <p><center>Aguarde a sessão ser encerrada!</center></p>
    </div>
</body>
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script>
    $("#fade").modal({
        fadeDuration: 1000,
        fadeDelay: 1.75 // Will fade in 750ms after the overlay finishes.
});
 $('a[href="#ex9"]').click(function(event) {
      event.preventDefault();
      $(this).modal({
        fadeDuration: 1000,
        fadeDelay: 1.75
      });
    });
</script>
</html>
