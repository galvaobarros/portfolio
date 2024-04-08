<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
        
    </head>
    <body>
        <div id="principal">
			<div id="topo">
				<div id="logo">
					<h1> Portal de Notícias </h1>
					<h4> Desenvolvimento Web II</h4>
					<h4> Técnico em Informática</h4>
				</div>
				<div id="menu_global"  class="menu-items">
					


				<ul>
					 	 <!-- Segurança das Páginas restritas do site  -->
                        <li> Olá <?php include "valida_login.php"; ?> </li>
                        <li><a href="logout.php"> Sair </a></li> 
				</ul>



					
				</div>
			</div>
			<div id="conteudo_especifico_area_restrita">
			
				<div id="menu_local"class = "menu-central">
					<center>
					<h2> <a href="cadastro_noticia.php" class="active">Cadastra Notícia</a> <h2>
					<h2> <a href="altera_exclui_noticia.php" class="active">Altera/Exclui Notícia</a> <h2>
					<h2> <a href="cadastra_user.php" class="active">Cadastra Usuário</a> <h2>
					<h2> <a href="altera_inativa_user.php" class="active">Altera/Inativa Usuário</a> <h2>
					</center>
						
				</div>	
				<div id="funcionalidade">
					<h1> ALTERA/INATIVA USUÁRIO</h1>
					<br>
					<br>
					<br>
					<h3> AQUI VIRÁ O FORMULÁRIO PARA CADASTRO DE USUÁRIO </H3>					
				</div>	
			</div>
			<div id="rodape">
				<div id="texto_institucional">
					<p> aqui virá o texto institucional </p>
				</div>
				<div id="redes_sociais">
					<p> aqui virão os ícones para redes sociais </p>
				</div>
			</div>
		</div>
    </body>
</html>