<?

?>
<!DOCTYPE HTML>
<html> 
	<head>
		<title>Meus Projetos | ChatAll</title>
		<meta charset="utf-8">
		<base href="http://localhost/chatall/">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/paginas/projetos.css?<? echo time(); ?>" media="(min-width: 1000px)">
		<link rel="stylesheet" type="text/css" href="css/geral/geral.css" media="(min-width: 1000px)">
        <!-- <link rel="stylesheet" href="cssmobile/geral.css" media="(max-width: 999px)"> -->
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
		<aside>
			<section id="perfil">
				<div id="superior">
					<i class="fa fa-chevron-left" id="sair"></i>
					<span id="edit">Editar Perfil</span>
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJrKe8qGxq4q3xkJcV2cYaoc493bueM1oEYczh-JgH7vgmEcfERw" id="foto-perfil">
					
					<h3>Nome do Usuário</h3>

					<ul id="redes">
						<li id="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li id="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li id="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
					</ul>

					<p id="descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>

				<ul id="resumo">
					<li data-titulo='Projetos'>2</li>
					<li data-titulo='Plano'>Grátis</li>
					<li data-titulo='Tasks'>550</li>
					<li data-titulo='Mb Restante'>558</li>
				</ul>
			</section>
		</aside>

		<div id="projetos">
			<section>
				<h1>Meus Projetos</h1>
				
				<ul>
					<li class="projeto">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJrKe8qGxq4q3xkJcV2cYaoc493bueM1oEYczh-JgH7vgmEcfERw" class="dono">

						<i class="fa fa-ellipsis-v menu"></i>
						
						<span class="tasks">15 Tasks</span>
						<h2 class="titulo">Trabalho</h2>

						<div class="porcentagem">
							<span class="valor">35%</span>
							<div class="barra">
								<div class="barra-concluido"></div>
							</div>
						</div>

						<p class="mensagens">
							<i class="fa fa-comment"></i>
							<span>25</span>
						</p>
					</li>
				</ul>
			</section>
		</div>
	</body>

	<script src="js/paginas/projetos.js?<? echo time(); ?>"></script>
</html>