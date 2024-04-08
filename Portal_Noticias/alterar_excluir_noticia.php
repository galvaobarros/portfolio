<?php

	session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible"content="IE=edge">
		<title> Alterar/Inativar Usuários </title>
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
								<h1> ALTERAR/EXCLUIR NOTÍCIAS </h1>

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
										
						<form method ="post" action="processa_cadastra_noticia.php" enctype="multipart/form-data">							
						<table >
						<tr>
						<td>
						 	<p>Manchete:</p>										
						</td>
						
						<td>
							<p><input type="text" name="manchete" required></p>
						</td>
						</tr>
						
						<tr>
						<td>
							<p>Resumo: </p>
						</td>
						<td>
							<p><input type="text" name="resumo" required></p>
						</td>
						</tr>
						<tr>
						<td>
							<p>Texto:</p>
						</td>
						<td>
							<p><textarea name="texto" required></textarea></p>
						</td>
						</tr>
						<tr>
						<td>
							<p>Imagem:  </p>
						</td>
						<td>
							<p><input type="file" name="imagem" required></p>
						</td>
						</tr>
						<tr>
						<td>
							<p>Categoria:</p>
						</td>
						<td>
							<p><select name="categoria" >
							<option value="hardware"> Hardware </option>
							<option value="software"> Software </option>
							</select></p>
						</td>
						
						</tr>
						
						<tr>
						<td colspan="2">
						<p><input type="submit" value="Cadastrar Noticia" ></p>
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
