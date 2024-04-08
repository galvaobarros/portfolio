<?php

	session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible"content="IE=edge">
		<title>Cadastro Usuários</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="_css/reset.css"/>
		<link rel="Stylesheet"type="text/css" href="css/layout.css">
		<link rel="Stylesheet"type="text/css" href="css/menu.css">
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
								<h1>CADASTRO DE USUÁRIOS</h1>		

						</div>
						</div>

						<div class="div_esquerda">
						<div id="menu_local" class="menu_local">
						<?php
						include "menu_local.php";
						?>	
						</div>
						</div>
						<div class="div_direita">
										
						<form method ="post" action="processa_cadastra_user.php" enctype="multipart/form-data">
						
						<table>
							<tr>
							<td>
							 	<p>Nome:</p> 										
							</td>
							<td>
								<p><input type="text" name="nome" required></p>
							</td>
							</tr>
							<tr>
							<td>
								<p>Perfil:</p>
							</td>
							<td>
								<p><input type="radio" name="perfil" value="Operador" checked> Operador
								<input type="radio" name="perfil" value="Jornalista"> Jornalista
								</p>
							</td>
							</tr>
							<tr>

							<td>
								<p>Login:</p> 
							</td>
							<td>
								<p><input type="text" name="login" required></p>
							</td>
							</tr>
							<tr>
							<td>
								<p>Senha: </p> 
							</td>
							<td>
								<p><input type="password" name="senha" required></p>
							</td>
							</tr>
							<tr>
							<td>
								<p>Foto:</p>
							</td>
							<td>
								<p><input type="file" name="imagem" required></p>
							</td>
							</tr>
							
							<tr>
							<td colspan="2">
							<input type="submit" value="Cadastrar Usuário" >
							</td>
							</tr>
						</table>
						</form>
						

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
