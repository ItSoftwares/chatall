<?

?>
<!DOCTYPE HTML>
<html> 
    <head>
        <title>Login | ChatAl</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/geral/loginCadastro.css" media="(min-width: 1000px)">
        <link rel="stylesheet" type="text/css" href="css/geral/geral.css" media="(min-width: 1000px)">
<!--        <link rel="stylesheet" href="cssmobile/landing.css" media="(max-width: 999px)">-->
<!--        <link rel="stylesheet" href="cssmobile/geral.css" media="(max-width: 999px)">-->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
		<div id="fundo"></div>
		<section id="centro">
			
			<!-- <img id="logo" src="img/logo-branca.png"></img> -->
			<h1 id="titulo">ChatAll</h1>

			<div id="login-cadastro">
				<form id="login" class="transition-filhos">
					<h2>Login</h2>

					<input type="text" name="usuario" placeholder="Usuário" required autocomplete="off">
					<input type="password" name="senha" placeholder="Senha" required autocomplete="off">

					<button>ACESSAR <i class="fa fa-paper-plane"></i></button>

					<a href="">Esqueci a Senha</a>

					<div class="clear"></div>

					<span id="ir-cadastro">Cadastrar-se <i class="fa fa-angle-right"></i></span>
				</form>

				<form id="cadastro" class="transition-filhos">
					<h2>Cadastro</h2>

					<input type="text" name="usuario" placeholder="Usuário" autocomplete="off" required>
					<input type="email" name="email" placeholder="E-mail" autocomplete="off" required>
					<input type="text" name="senha" placeholder="Senha" autocomplete="off" required>

					<button>CADASTRAR <i class="fa fa-paper-plane"></i></button>

					<p>Ao cadastrar-se você está concordando com nosso termos!</p>

					<div class="clear"></div>

					<span id="ir-login"><i class="fa fa-angle-left"></i> Login</span>
				</form>
			</div>

		</section>

    </body>
    
    <script src="js/geral/loginCadastro.js?<? echo time(); ?>"></script>
</html>