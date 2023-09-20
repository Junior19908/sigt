<?php
require '../../../../../../controller/phpmail/PHPMailerAutoload.php';
$Mailer = new PHPMailer();

//Define o Tipo de Conexão
$Mailer->isSMTP();
//Enviar email em HTML
$Mailer->isHTML(true);
//Aceitar Caracteres Especiais
$Mailer->Charset = 'UTF-8';

//Configurações
$Mailer->SMTPAuth = true;
$Mailer->SMTPSecure = 'tsl';

//Nome do Servidor
$Mailer->Host = 'smtp.gmail.com';
$Mailer->Port = 587;

//Dados do E-mail de Saída	
$Mailer->Username = 'testephpemailsistema@gmail.com';
$Mailer->Password = '02984646#Lua';

//Email Remetente
$Mailer->From = 'sistemagsg@usga.com.br';

//Nome Remetente
$Mailer->FromName = 'SISTEMAGSG - POSTO';

//Assunto
$Mailer->Subject = 'Registro de Estoque Fisico! - SistemaGSG';

$Mailer->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
//Conteúdo do Email
$Mailer->Body =" Olá! registro inserido com sucesso, <br /><br />

<strong>Estoque para o Dia:</strong> Teste
<br /><br />
<strong>Gasolina:</strong>	 Teste <br />
<strong>Saída:</strong>	 Teste <br /><br /><br />
<strong>Diesel S10:</strong>  Teste <br />
<strong>Saída:</strong>  Teste <br /><br /><br />
<br />
Tenha um bom dia!<br /> <br />

Webmaster<br />
Esta é uma mensagem automática, por favor não responda!";

//Destinatário
$Mailer->AddAddress('junior@usga.com.br');

if($Mailer->Send()){

	echo("<div class='success'> <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span><center>
	E-mail,

	 Enviado com Sucesso!


	</center></div>");
}else{
	echo("<center><h1>Erro! Não foi possivel enviar o E-mail!</h1></center>").$Mailer->ErrorInfo;
}
?>
