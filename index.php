<?

?>
<!DOCTYPE HTML>
<html> 
    <head>
        <title>ChatAll | Bem-vindo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/landing.css" media="(min-width: 1000px)">
        <link rel="stylesheet" type="text/css" href="css/geral/geral.css" media="(min-width: 1000px)">
        <link rel="stylesheet" type="text/css" href="css/paginas/tarefas.css" media="(min-width: 1000px)">
<!--        <link rel="stylesheet" href="cssmobile/landing.css" media="(max-width: 999px)">-->
<!--        <link rel="stylesheet" href="cssmobile/geral.css" media="(max-width: 999px)">-->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        <header id="topo">
            <div>
                <h3><img src="img/logo-branca.png">ChatAll</h3>

    <!--            <img src="img/menu.png" id="menu-toogle">-->
                <div id="menu-toogle">
                    <span id="bar-1"></span>
                    <span id="bar-2"></span>
                    <span id="bar-3"></span>
                </div>

                <nav>
                    <ul>
                        <li id="inicio-menu" class="selecionado"><a href="#inicio">Inicio</a></li>
                        <li id="funciona-menu"><a href="#funciona">Como</a></li>
                        <li id="tarefas-menu"><a href="#tarefas">Tarefas</a></li>
                        <li id="criptografia-menu"><a href="#seguranca">Segurança</a></li>
                        <li id="login"><a href="login" class="botao2">Login<i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <section id="inicio">
            <div id="borda"></div>
            
            <h1><img src="img/logo-branca.png">ChatAll</h1>
            
            <h3>Junte-se a nós e descubra uma nova maneira de gerenciar projetos e empresas.</h3>
            
            <a href="cadastro" class="botao">Faça seu Cadastro</a>
        </section>
        
<!--        <div class="conexao"></div>-->
        
        <section id="funciona">
            <h2 class="titulo"><i class="fa fa-question" aria-hidden="true"></i><span>Como começar a usar a ferramenta</span></h2>
            <p class="descricao">A baixo serão listados os passos para que você tira o máximo de proveito da nossa plataforma.</p>
            <div id="">
<!--
                <div id="imagens">
                    <span></span>
                    <div><img src="img/logo-colorida.png"></div>
                    <div><img src="img/logo-colorida.png"></div>
                    <div><img src="img/logo-colorida.png"></div>
                    <div><img src="img/logo-colorida.png"></div>
                    <span></span>
                </div>
                
                <div id="linha"></div>
                
                <div id="textos">
                    <span></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <span></span>
                </div>
-->
            </div>
            
            <div id="fluxo">
               <div id="container">
                   <div class="selecionado" data-id="0">
                        <h3>TITULO DO COISA</h3>
                        <img src="img/como-diagrama.png">
                   </div>
                   <div data-id="1">
                        <h3>TITULO DO COISA</h3>
                        <img src="img/como-chat.png">
                   </div>
                   <div data-id="2">
                        <h3>TITULO DO COISA</h3>
                        <img src="img/como-diagrama2.png">
                   </div>
                   <div data-id="3">
                        <h3>TITULO DO COISA</h3>
                        <img src="img/como-apresentacao.png">
                   </div>
               </div>
               
               <aside>
                    <h2>TITULO DO COISA</h2>
                    <p id="primeira" class="mensagem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti porro molestias provident corporis, at quo saepe, odit. Autem tempora numquam hic sapiente a aut incidunt, quidem, similique, veritatis harum fuga.</p>
                    <p id="segunda" class="mensagem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet molestias amet laborum tenetur a aliquid sapiente dolorum quibusdam atque, magnam cum, totam animi officiis illo laudantium aperiam eligendi ut voluptate.</p>

                    <button class="botao2">Próximo</button>
                </aside>
            </div>
            <i class="fa fa-question" aria-hidden="true"></i>
        </section>
        
        <section id="tarefas">
            <h2 class="titulo"><i class="fa fa-check" aria-hidden="true"></i><span>Registre as atividades</span></h2>
            <p class="descricao">Organize seus projetos criando atividades e mantendo registro de tudo que foi ou será feito.</p>
            
            <div>
                <aside>
                    <h2>Atividades</h2>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo incidunt tempore at ducimus quis alias ipsum a dicta, exercitationem illum beatae dolor repellendus amet omnis, facere assumenda maiores aspernatur consectetur.</p>
                </aside>
                
                <div class="coluna">
                	<h2>Minhas tarefas <span>4 Tasks</span></h2>

                	<ul class="transition-filhos">
                		<i class="nova-tarefa fa fa-plus"></i>

                		<li class="tarefa">
                			<label>
	                        <i class="fa fa-check" aria-hidden="true"></i></label>
	                        <h4>Nome da atividade</h4>
	                        <i class="excluir fa fa-trash"></i>
							<span class="data">25.10.2018</span>
                		</li>
                		<li class="tarefa">
                			<label>
	                        <i class="fa fa-check" aria-hidden="true"></i></label>
	                        <h4>Nome da atividade</h4>
	                        <i class="excluir fa fa-trash"></i>
							<span class="data">25.10.2018</span>
                		</li>
                		<li class="tarefa">
                			<label>
	                        <i class="fa fa-check" aria-hidden="true"></i></label>
	                        <h4>Nome da atividade</h4>
	                        <i class="excluir fa fa-trash"></i>
							<span class="data">25.10.2018</span>
                		</li>
                		<li class="tarefa">
                			<label>
	                        <i class="fa fa-check" aria-hidden="true"></i></label>
	                        <h4>Nome da atividade</h4>
	                        <i class="excluir fa fa-trash"></i>
							<span class="data">25.10.2018</span>
                		</li>
                	</ul>
                </div>
                
                <div class="coluna">
                	<h2>Feito <span>4 Tasks</span></h2>

                	<ul class="transition-filhos">
                		<i class="nova-tarefa fa fa-plus"></i>

                		<li class="tarefa marcada">
                			<label>
	                        <i class="fa fa-check" aria-hidden="true"></i></label>
	                        <h4>Nome da atividade</h4>
	                        <i class="excluir fa fa-trash"></i>
							<span class="data">25.10.2018</span>
                		</li>
                		<li class="tarefa marcada">
                			<label>
	                        <i class="fa fa-check" aria-hidden="true"></i></label>
	                        <h4>Nome da atividade</h4>
	                        <i class="excluir fa fa-trash"></i>
							<span class="data">25.10.2018</span>
                		</li>
                	</ul>
                </div>
            </div>
            
            <i class="fa fa-check-square-o" aria-hidden="true"></i>
        </section>
        
        <section id="seguranca">
            <h2 class="titulo"><i class="fa fa-shield" aria-hidden="true"></i><span>Segurança em suas mensagens</span></h2>
            <p class="descricao">Não se preocupe quanto a privacidade de suas conversas pois criptografamos suas mensagens.</p>
            
            <div>
                <div id="fluxograma">
                    <img src="img/seguranca-chat%201.png" id="seguranca-chat1">
                    <span id="barra1" class="barra"><div></div></span>
                    <img src="img/seguranca-servidor.png" id="seguranca-servidor">
                    <img src="img/seguranca-cadeado.png" id="seguranca-cadeado">
                    <span id="barra2" class="barra"><div></div></span>
                    <img src="img/seguranca-chat%202.png" id="seguranca-chat2">
                </div>
                <aside>
                    <h2>Criptografia</h2>
                    
                    <p class="mensagem" id="segunda">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus ex dolorum, nam voluptates distinctio repellendus sunt fugit accusamus! Rem tempora vitae dolores tenetur distinctio adipisci, a saepe sed unde voluptate!</p>
                    
                    <p class="mensagem" id="terceira">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est tenetur minus laudantium nobis vel earum, soluta iste odio alias, blanditiis rerum quam beatae voluptate accusamus deleniti itaque veritatis obcaecati. Officiis?
                    </p>
                </aside>
            </div>
            
            <i class="fa fa-user-secret" aria-hidden="true"></i>
        </section>
        
        <section id="cadastrar">
            <div id="fundo">
                <h2 class="titulo"><i class="fa fa-user-plus" aria-hidden="true"></i><span>Cria sua conta agora e de um UP em seus projetos!</span></h2>

                <a href="login?funcao=cadastro" class="botao">Cadastrar</a>
            </div>
        </section>
        
        <footer>
            <div>
                <div id="redes-sociais">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
                
                <a href="">Ferramenta desenvolvido pela ItSoftwares<img src="img/itsoftwares.png"></a>
            </div>
        </footer>
        
        <div id="subir"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
    </body>
    
    <script src="js/landing.js?<? echo time(); ?>"></script>
</html>