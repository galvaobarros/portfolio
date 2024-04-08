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
								<h1> ALTERAR E/OU INATIVAR USUÁRIOS </h1>	

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
						
						<?php
							$conectar = mysqli_connect("localhost", "root","", "bd_gagal");
							$codigo_user=$_GET["codigo_user"];
							$sql_pesquisa = "SELECT nome_user,
													perfil_user,
													login_user,
													senha_user,
													status_user,
													imagem_user
											FROM usuarios
											WHERE cod_user = '$codigo_user'";

							$resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);

							$registro = mysqli_fetch_row($resultado_pesquisa);

						?>
						<form method="post" action="processa_altera_user.php" enctype="multipart/form-data">
							<!-- campo invisivel-->
							<input type="hidden" name="codigo" value="<?php echo "$codigo_user;" ?>">
							<input type="hidden" name="perfil" value="<?php echo "$registro[1];" ?>">
							<!---->
							<?php
								if ($registro[1] <> "Administrador")
								{
							?>

						<table class="centralizar">

							<tr>
								<td>
									<p>Nome: </p>	
								</td>
								<td>
									<p>
										<input type="text" name="nome" value="<?php echo "$registro[0]";?>" required>
									</p>	
								</td>
							</tr>
							<tr>
								<td>
									<p>Perfil: </p>	
								</td>
								<td>
									<p>
										<input type="radio" name="perfil_comum" value="Operador"
										<?php
											if ($registro[1] == "Operador") {
													echo "checked";
											}
										?>> Operador

										<input type="radio" name="perfil_comum" value="Jornalista"
										<?php
											if ($registro[1] == "Jornalista") {
													echo "checked";
											}
										?>> Jornalista
									</p>	
								</td>
							</tr>
							<tr>
								<td>
									<p>Login: </p>
								</td>
								<td>
									<p><?php echo "$registro[2]";?></p>
								</td>
							</tr>
							<tr>
								<td>
									<p>Senha: </p>
								</td>
								<td>
									<p>
										<input type="password" name="senha" value="<?php echo "$registro[3]";?>" requerid>
									</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>Status: </p>
								</td>
								<td>
									<p>
										<select name="status">
											<option value="a"
											<?php
												if ($registro[4] == "a") {
													echo "selected";
												}
											?> > Ativo
											</option>

											<option value="i"
											<?php
												if ($registro[4] == "i") {
													echo "selected";
												}
											?> > Inativo
											</option>
										</select>
									</p>
								</td>
							</tr>

							<tr>
								<td>
									<p> Foto: </p>
								</td>
								<td>
									<p>	<input type="file" name="imagem"> </p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p> <input type="submit" value="Alterar Usuario"> </p>
								</td>
							</tr>

						</table>

						<?php
						 	}
						 	else {
						 ?>
						 	
						 	<table class="centralizar">
						 		
						 	<tr>
								<td>
									<p>Nome: </p>	
								</td>
								<td>
									<p>
										<p><?php echo "$registro[0]";?></p>
									</p>	
								</td>
							</tr>
							<tr>
								<td>
									<p>Perfil: </p>	
								</td>
								<td>
									<p>
										<input type="radio" name="perfil" value="Operador"
										<?php
											if ($registro[1] == "Operador") {
													echo "checked";
											}
										?>> Operador

										<input type="radio" name="Perfil" value="Jornalista"
										<?php
											if ($registro[1] == "Jornalista") {
													echo "checked";
											}
										?>> Jornalista
									</p>	
								</td>
							</tr>
							<tr>
								<td>
									<p>Login: </p>
								</td>
								<td>
									<p><?php echo "$registro[2]";?></p>
								</td>
							</tr>
							<tr>
								<td>
									<p>Senha: </p>
								</td>
								<td>
									<p>
										<input type="password" name="senha" value="<?php echo "$registro[3]";?>" requerid>
									</p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p> <input type="submit" value="Alterar Usuario"> </p>
								</td>
							</tr>
							<?php 
						}
						?>
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