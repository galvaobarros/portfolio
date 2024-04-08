<!-- Iniciando a sessão para as variáveis de sessão funcionarem
================================ -->
<?php

 	session_start(); 

 ?>
 <!-- Fim da sessão 
 -------------------------------- -->
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible"content="IE=edge">
		<title> Acesso Restrito / Administração </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="_css/reset.css"/>
		<link rel="Stylesheet"type="text/css" href="css/layout.css">
		<link rel="Stylesheet"type="text/css" href="css/menu.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet"/>
	</head>
	

	<body>
			<div id="principal">
				<div id="topo">
					
					<div id="logo">
					
							<h1>Portal de Notícias</h1>
							<h4> Desenvolvimento Web II</h4>
							<h4> Técnico em Informática</h4>
					
					</div>
										
					<div id="menu_global" class="menu_global">			
						
					<ul>
					 	<!-- Segurança das Páginas restritas do site  -->
                       <li> Olá <?php include "valida_login.php"; ?> </li>
                       <li><a href="logout.php"> Sair </a></li> 
					
					</ul>
						
					</div>
					</div>
									

						<div id="conteudo_especifico">
							
						<div class="div_central">
							
						<div class="centralizar">
						<div id="menu_local" class="menu_local">

						<h1><b>ADMINISTRAÇÃO</b></h1> <br>
						
						<?php
						include "menu_local.php";
						?>
						
						
						</div>
						</div>
						</div>
										
						<div class="div_esquerda">
		
							

						</div>
						<div class="div_direita">

						</div>
						</div>  

					<div id="rodape">
					<div id="texto_intitucional">
					<h6> ETB - Escola Técnica de Brasília </h6>
					<h6> Curso - Técnico em Informática </h6>
					<h6> Disciplina - Desenvolvimento Web II </h6>
				</div>
				</div>
				</div>			
	</body>
</html>



