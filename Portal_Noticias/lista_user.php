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
							$conectar = mysqli_connect("localhost", "root", "", "bd_gagal");

							$sql_consulta = "SELECT cod_user,
													nome_user,
													perfil_user,
													status_user
											FROM usuarios";

							$resultado_consulta = mysqli_query ($conectar, $sql_consulta);

						?>

						<table class="centralizar" border=1>

							<tr>
								<td class="esquerda">
									<p>Nome</p>	
								</td>
								<td>
									<p>Perfil</p>	
								</td>
								<td>
									<p>Status</p>	
								</td>
								<td class="direita">
									<p>Ação</p>	
								</td>
							</tr>

						<?php
							while ($registro = mysqli_fetch_row($resultado_consulta))

							 {
						?>

						<tr>
							<td class="esquerda">
								<p>
									<a href="exibe_user.php?codigo_user=<?php echo $registro[0]?>">
										<?php
											echo "$registro[1]";
										?>
									</a>

								</p>

							</td>

							<td>
								<p>
									 <?php echo "$registro[2]"; ?>
								</p>
							</td>
							<td>
								<p>
									<?php
										if ($registro[3] == "a") {
											echo "ativo";
										}
										else {
											echo "inativo";
										}
									?>

								</p>
							</td>


							<td class="direita">
								<p>
									<a href="altera_user.php?codigo_user=<?php echo $registro[0]?>">
										Alterar
									</a>
								</p>
							</td>
						</tr>
						<?php
							}
						?>
						</table>				
						
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
