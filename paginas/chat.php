<?

?>
<!DOCTYPE HTML>
<html> 
	<head>
		<title>Nome da Sala | ChatAll</title>
		<meta charset="utf-8">
		<base href="http://localhost/chatall/">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <link rel="stylesheet" type="text/css" href="css/paginas/room2.css" media="(min-width: 1000px)"> -->
		<link rel="stylesheet" type="text/css" href="css/paginas/room.css" media="(min-width: 1000px)">
		<link rel="stylesheet" type="text/css" href="css/paginas/chat.css" media="(min-width: 1000px)">
		<link rel="stylesheet" type="text/css" href="css/paginas/tarefas.css" media="(min-width: 1000px)">
		<link rel="stylesheet" type="text/css" href="css/geral/geral.css" media="(min-width: 1000px)">
<!--        <link rel="stylesheet" href="cssmobile/landing.css" media="(max-width: 999px)">-->
<!--        <link rel="stylesheet" href="cssmobile/geral.css" media="(max-width: 999px)">-->
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	
	<body>
		<header id="topo">
			<img id="logo" src="img/logo-colorida.png">

			<!-- <div id="botoes" class="transition-filhos lista-icons">
				<i class="fa fa-plus" id="icon-novo-grupo" title="Novo Grupo"></i>
				<i class="fa fa-comment" id="icon-nova-conversa" title="Nova Conversa"></i>
				<i class="fa fa-ellipsis-v" id="icon-menu" title="Menu"></i>

				<ul id="menu">
					<li>Configurações</li>
					<li>Sair</li>
				</ul>
			</div> -->

			<img src="img/foto-padrao.jpg" id="foto-perfil">
		</header>
		<div id="centro">

			<aside id="contatos">
				<div id="busca">
					<div class="input">
						<i class="fa fa-search"></i>
						<input type="text" id="campo-busca" placeholder="Buscar">
					</div>
				</div>

				<div id="labels" class="transition-filhos">
					<span id="label-grupos" class="selecionado">Grupos</span>
					<span id="label-usuarios">Conversas</span>
				</div>

				<ul id="grupos" class="lista scroll">
					<li class="contato nova">
						<img src="img/foto-padrao.jpg">

						<div class="dados">
							<h3>Nome do Grupo <span class="hora">02:10 AM</span></h3>

							<p class="preview">Última Mensagem escrita :D <span class="qtd-msg">5</span></p>
						</div>
					</li>
					<?
					for ($i=0; $i < 2; $i++) { 
					?>
					<li class="contato transition">
						<img src="img/foto-padrao.jpg">

						<div class="dados">
							<h3>Nome do Grupo <span class="hora">02:10 AM</span></h3>

							<p class="preview">Última Mensagem escrita :D <span class="qtd-msg">5</span></p>
						</div>
					</li>
					<?
					}
					?>
					<li class="contato selecionado">
						<img src="img/foto-padrao.jpg">

						<div class="dados">
							<h3>Nome do Grupo <span class="hora">02:10 AM</span></h3>

							<p class="preview">Última Mensagem escrita :D <span class="qtd-msg">5</span></p>
						</div>
					</li>
				</ul>

				<div id="botoes" class="transition-filhos lista-icons">
					<i class="fa fa-plus" id="icon-novo-grupo" title="Novo Grupo"></i>
					<i class="fa fa-comments" id="icon-nova-conversa" title="Nova Conversa"></i>
					<i class="fa fa-ellipsis-v" id="icon-menu" title="Menu"></i>

					<ul id="menu">
						<li>Configurações</li>
						<li>Sair</li>
					</ul>
				</div>
			</aside>

			<section id="chat">
				<header>
					<div id="quem">
						<img src="img/foto-padrao.jpg">

						<div>
							<h3>Nome do Grupo</h3>
							<p>10 Pessoas no grupo</p>
						</div>
					</div>

					<div id="acoes" class="transition-filhos lista-icons">
						<i class="fa fa-paperclip anexar" title="Anexar Arquivos"></i>
						<i class="fa fa-tasks tarefas" title="Atividades"></i>
						<i class="fa fa-info info" title="Info"></i>
					</div>
				</header>

				<div id="mensagens" class="scroll">
					<!-- <div id="fundo"></div> -->
					<? 
					// for ($i=0; $i < 5; $i++) {
					?>
					<ul class="minha">
						<li class="mensagem"><header>Nome do usuário</header><article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium obcaecati delectus, atque molestias sapiente architecto tempora eius debitis, laborum est necessitatibus, commodi vitae temporibus suscipit consequuntur dolorum quia laboriosam ab.</article></li>
						<li class="mensagem"><header>Nome do usuário</header><article>Outra Mensagem</article></li>
						<li class="mensagem"><header>Nome do usuário</header><article>Outra Mensagem</article></li>
						<li class="mensagem"><header>Nome do usuário</header><img src="img/teste.jpg"><article>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</article><span class="data transition">10:25</span></li>
					</ul>
					<div class="divisao-dia"><span>Hoje</span></div>

					<ul class="outra">
						<li class="mensagem"><header>Nome do usuário</header><article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium obcaecati delectus, atque molestias sapiente architecto tempora eius debitis, laborum est necessitatibus, commodi vitae temporibus suscipit consequuntur dolorum quia laboriosam ab.</article></li>
						<li class="mensagem"><header>Nome do usuário</header><article>Outra Mensagem</article></li>
						<li class="mensagem"><header>Nome do usuário</header><article>Outra Mensagem</article></li>
					</ul>

					<ul class="outra">
						<li class="mensagem"><header>Nome do usuário</header><img src="img/teste.jpg"><span class="data transition">10:25</span></li>
					</ul>

					<?
					// }
					?>
				</div>

				<div id="enviar-mensagem" class="lista-icons transition-filhos">
					<i class="fa fa-smile" id="icon-emoticons"></i>
					<textarea name="mensagem" placeholder="Escreva algo" rows="1"></textarea>
					<i class="fa fa-paper-plane" id="icon-enviar"></i>
				</div>
			</section>

			<aside id="direita">
				<div id="tarefas">
					<? for ($i=0; $i < 2; $i++) {?>
					<div class="coluna">
						<h2>Minhas Tarefas <span>12 Tasks</span></h2>


						<ul class="transition-filhos">
							<i class="nova-tarefa fa fa-plus"></i>

							<li class="tarefa azul">
								<label>
									<i class="fa fa-check" aria-hidden="true"></i>
								</label>
								<h4>Error neque ipsam</h4>
								<i class="excluir fa fa-trash"></i>
								<span class="data">25.10.2018</span>
							</li>

							<li class="tarefa marcada verde">
								<label>
									<i class="fa fa-check" aria-hidden="true"></i>
								</label>
								<h4>Lorem ipsum dolor sit amet</h4>
								<i class="excluir fa fa-trash"></i>
								<span class="data">25.10.2018</span>
							</li>
						</ul>
					</div>
					<? } ?>

					<button class="botao">Novo Bloco</button>
				</div>
			</aside>
		</div>

	</body>
	
	<script src="js/paginas/room.js?<? echo time(); ?>"></script>
</html>