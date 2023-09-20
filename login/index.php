<?php
require_once 'class/ligacoes.class.php';
?>
<body>
<div class="container" id="container">
    <!-- Inicio do FirstContainer -->
	<div class="form-container sign-up-container">
		<form action="include/signup.inc.php" method="POST">
            <h1>Crie Sua Conta</h1>
            <!-- Inicio do Social Media -->
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <!-- Fim do Social Media -->
                <span>ou use suas informações para se cadastrar</span>
            <!-- Inicio Input's -->
                <input type="text" required name="name" placeholder="Nome" />
                <input type="text" required name="registration" placeholder="Matricula">
                <input type="text" required name="username" placeholder="Usuário" />
                <input type="password" required name="password" placeholder="Senha" />
            <!-- Fim Input's -->
			<button name="btnCadastrar">Enviar</button>
		</form>
	</div>
    <!-- Fim do FirstContainer -->
    <!-- Inicio do SecondContainer -->
	<div class="form-container sign-in-container">
		<form action="index.php?acao=logar" method="POST">
			<h1>Conecte-se</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>ou use sua conta</span>
			<input type="text" name="username" placeholder="Usuário" />
			<input type="password" name="password" placeholder="Password" />
			<a href="nova-senha/">Redefinir senha?</a>
			<center><span class="response" style="background-color:Tomato; color:white"><?php echo $msg; ?></span></center>
			<button name="btnEnviar">Entrar</button>
		</form>
    </div>
    <!-- Fim do SecondContainer -->
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bem Vindo!</h1>
				<p>Para se manter conectado, faça o login com suas informações pessoais</p>
				<button class="ghost" id="signIn">Login</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Olá, Amigo!</h1>
				<p>Digite seus dados pessoais e comece a jornada conosco</p>
                <button class="ghost" id="signUp">Cadastre-se</button>
                <video autoplay loop width="320" height="240" poster="css/image/Poster/PosterAnimacao.png" controls>
                    <source src="css/video/Animations.mp4" type="video/MP4">
                </video>    
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Criado por Carlos Júnior para
		<a target="_blank" href="http://usinaserragrande.com.br/">Usina Serra Grande S/A</a><i class="fa fa-heart"></i>
		- gratuitamente, sua comercialização é proibida, todos os direitos reservados a 
		<a target="_blank" href="http://usinaserragrande.com.br/">USGA</a>.
	</p>
</footer>
<script src="js/app.js"></script>
</body>
</html>