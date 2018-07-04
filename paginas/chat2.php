<?

?>
<!DOCTYPE HTML>
<html> 
	<head>
		<title>Nome da Sala | ChatAll</title>
		<meta charset="utf-8">
		<base href="http://localhost/chatall/">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/paginas/room3.css?<? echo time(); ?>" media="(min-width: 1000px)">
		<link rel="stylesheet" type="text/css" href="css/geral/geral.css" media="(min-width: 1000px)">
        <!-- <link rel="stylesheet" href="cssmobile/geral.css" media="(max-width: 999px)"> -->
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	
	<body>
		<div id="loading">
			<div class="lds-dual-ring"></div>
		</div>

		<div id="centro">
			<aside id="contatos">
				<!-- <div id="busca" class="aberto">
					<div class="input">
						<i class="fa fa-search"></i>
						<input type="text" id="campo-busca" placeholder="Buscar">
					</div>
				</div> -->
				<img src="img/logo-colorida2.png" id="logo">

				<div id="labels" class="transition-filhos">
					<span id="label-grupos" class="selecionado">Grupos</span>
					<span id="label-usuarios">Conversas</span>
				</div>

				<ul id="grupos" class="lista">
					<li class="contato geral">
						<img src="img/foto-padrao.jpg">

						<div class="dados">
							<h3>Nome do Grupo <span class="hora">02:10 AM</span></h3>

							<p class="preview">Última Mensagem escrita :D</p>
							<span class="qtd-msg">5</span>
						</div>
					</li>
					<li class="contato nova">
						<img src="img/foto-padrao.jpg">

						<div class="dados">
							<h3>Nome do Grupo <span class="hora">02:10 AM</span></h3>

							<p class="preview">Última Mensagem escrita :D</p>
							<span class="qtd-msg">5</span>
						</div>
					</li>
					<?
					for ($i=0; $i < 2; $i++) { 
					?>
					<li class="contato">
						<img src="img/foto-padrao.jpg">

						<div class="dados">
							<h3>Nome do Grupo <span class="hora">02:10 AM</span></h3>

							<p class="preview">Última Mensagem escrita :D</p>
							<span class="qtd-msg">5</span>
						</div>
					</li>
					<?
					}
					?>
					<li class="contato selecionado nova">
						<img src="img/foto-padrao.jpg">

						<div class="dados">
							<h3>Nome do Grupo <span class="hora">02:10 AM</span></h3>

							<p class="preview">Última Mensagem escrita :D</p>
							<span class="qtd-msg">5</span>
						</div>
					</li>
				</ul>

				<div id="botoes" class="transition-filhos lista-icons">
					<!-- <i class="fa fa-plus" id="icon-novo-grupo" title="Novo Grupo"></i> -->
					<i class="fa fa-comments" id="icon-nova-conversa" title="Nova Conversa"></i>
					<i class="fa fa-ellipsis-h" id="icon-menu" title="Menu"></i>

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
						<!-- <i class="fa fa-tasks tarefas" title="Atividades"></i> -->
						<i class="fa fa-info info" title="Info"></i>
						<i class="fa fa-chevron-left esconder" title="Esconder Conversa"></i>
					</div>
				</header>

				<div id="mensagens" class="scroll">
					<div class="lds-dual-ring"></div>
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

					<p class="aviso">Fulano acabou de entrar</p>

					<ul class="outra">
						<li class="mensagem"><header>Nome do usuário</header><img src="img/teste.jpg"><span class="data transition">10:25</span></li>
						<li class="mensagem tarefa">
							<header>Nome do usuário</header>
							<div class="detalhes">
								<div class="prazo">
									<p class="dia">8</p>
									<p class="mes">OUT</p>
								</div>
								<p class="conteudo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt...</p>
								<img src="img/foto-padrao.jpg">
							</div>
						</li>
					</ul>

					<?
					// }
					?>
				</div>

				<div id="enviar-mensagem" class="lista-icons transition-filhos">
					<!-- <i class="fa fa-smile" id="icon-emoticons"></i> -->
					<textarea name="mensagem" placeholder="Escreva algo" rows="1"></textarea>
					<i class="fa fa-paper-plane" id="icon-enviar"></i>
				</div>
			</section>

			<aside id="direita">
				<div id="tarefas" class="scroll">
					<? for ($i=0; $i < 2; $i++) {?>
					<div class="coluna">
						<h2>Minhas Tarefas <span>12 Tasks</span></h2>

						<ul class="transition-filhos">
							<i class="nova-tarefa fa fa-plus"></i>
							<? if ($i==0) {for ($j=0; $j < 2; $j++) {?>
							<li class="tarefa azul">
								<div class="detalhes">
									<label>
										<i class="fa fa-check" aria-hidden="true"></i>
									</label>
									<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.</h4>
									<img src="img/teste.jpg">
									<span class="data">25.10.2018</span>
								</div>

								<div class="acoes">
									<div class="usuario">
										<img src="img/foto-padrao.jpg">
										<span>Izac</span>
									</div>
									<div>
										<i class="excluir fa fa-trash"></i>
										<i class="editar fa fa-edit"></i>
									</div>
								</div>
							</li>
							<? }} ?>
							<li class="tarefa azul">
								<div class="detalhes">
									<label>
										<i class="fa fa-check" aria-hidden="true"></i>
									</label>
									<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.</h4>
									<span class="data">25.10.2018</span>
								</div>

								<div class="acoes">
									<div class="usuario">
										<img src="img/foto-padrao.jpg">
										<span>Izac</span>
									</div>
									<div>
										<i class="excluir fa fa-trash"></i>
										<i class="editar fa fa-edit"></i>
									</div>
								</div>
							</li>
							<li class="tarefa marcada azul">
								<div class="detalhes">
									<label>
										<i class="fa fa-check" aria-hidden="true"></i>
									</label>
									<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.</h4>
									<span class="data">25.10.2018</span>
								</div>

								<div class="acoes">
									<div class="usuario">
										<img src="img/foto-padrao.jpg">
										<span>Izac</span>
									</div>
									<div>
										<i class="excluir fa fa-trash"></i>
										<i class="editar fa fa-edit"></i>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<? } ?>
					<div class="coluna nova">
						<h2>Nova Sessão<span>Clique no + para iniciar</span></h2>


						<ul class="transition-filhos">
							<i class="nova-tarefa fa fa-plus"></i>
						</ul>
					</div>

					<!-- <button class="botao">Novo Bloco</button> -->
				</div>
			</aside>
		</div>

	</body>
	
	<script src="js/paginas/room.js?<? echo time(); ?>"></script>
	<script src="js/libs/autosize.min.js"></script>
</html>