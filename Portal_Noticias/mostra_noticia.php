<?php

	session_start();

?>

<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<title> Administração / Exibição de Notícia </title>

		<link rel="stylesheet" type="text/css" href="_css/reset.cs"/>
		<link rel="stylesheet" type="text/css" href="css/layout.css"/>
		<link rel="stylesheet" type="text/css" href="css/menu.css"/>
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet"/>

		

	</head>

	<body>

		<!-- todo o conteudo da página web
		================================================================================================== -->
		<div id="principal">

			<!-- Topo, toda a parte preta de cima do site
			============================================================================== -->
			<div id="topo">

				<!-- Logo, parte esquerda do topo
				============================================== -->
				<div id="logo">

					<h1> Portal de Notícias </h1>
					<h4> Desenvolvimento Web II</h4>
					<h4> Técnico em Informática</h4>

				</div>
				<!-- fim do logo
				--------------------------------------------- -->

				<!-- menu global, lado direito do topo
				=================================================================== -->
				<div id="menu_global"  class="menu_global">

					<ul>

					 		     <!-- Segurança das páginas restritas do site -->
                        <li> Olá <?php include "valida_login.php"; ?> </li>
                        <li><a href="logout.php"> Sair </a></li> 

                    </ul> 

				</div>
				<!-- fim do menu global
				--------------------------------------------------------------------- -->

			</div>
			<!-- fim do topo
			--------------------------------------------------------------------------------- -->

			<!-- todo a parte entre o topo e o rodapé
			====================================================== -->
			<div id="conteudo_especifico">
				
				<?php

						/* conectando ao banco de dados */
						$conectar = mysqli_connect("localhost", "root", "", "bd_gagal");
						
						
						/* recebendo o código */
						$codigo_noticia = $_GET["codigo_not"];

						/* atribuindo a uma variável o código em mysql */
						$sql_consulta = "select manchete_not, resumo_not, texto_not, imagem_not from noticias
										 where cod_not = '$codigo_noticia';";

						/* atribuindo a uma variável a função que manipula o banco de dados */
						$resultado_pesquisa_noticia = mysqli_query($conectar, $sql_consulta);

						/* atribuindo a uma variável a função que extrai todo um registro selecionado */
						$registro_noticia = mysqli_fetch_row($resultado_pesquisa_noticia);

					?>	

				<!-- parte superior central da parte entre o topo e o rodapé
				============================================= -->
				<div class="div_central">

					<table>
						
						<tr>
							
								 <!-- exibindo a imagem da noticia -->
							<td> <img src="<?php echo $registro_noticia[3]; ?>"> </td>
							<td> 

								<!-- exibindo a manchete da notícia -->
								<h2> <?php echo $registro_noticia[0]; ?> </h2>
								<!-- exibindo o resumo da notícia -->
								<h3> <?php echo $registro_noticia[1]; ?> </h3>

							</td>

						</tr>

						<tr>
							
							<td colspan="2">

									<!-- exibindo o texto completo da notícia -->
								<p> <?php echo $registro_noticia[2]; ?> </p> 

							</td>

						</tr>

					</table>				
					
				</div>
				<!-- fim da parte superior central
				--------------------------------------------- -->			
				
				<!-- parte inferior esquerda da parte entre o topo e o rodapé
				===================================== -->
				<div class="div_esquerda">

					<p>  </p>
					
				</div>	
				<!-- fim da parte inferior esquerda
				-------------------------------------- -->

				<!-- parte inferior direita da parte entre o topo e o rodapé
				======================================== -->
				<div class="div_direita">

					<p>  </p>
					
				</div> 
				<!-- fim da parte inferior direita
				---------------------------------------- -->

			</div>
			<!-- fim da parte entre o topo e o rodapé
			------------------------------------------------------- -->

			<!-- Rodapé, parte preta na parte de baixo no site
			============================================================= -->
			<div id="rodape">

				<div id="texto_institucional">

					<h6> ETB - Escola Técnica de Brasília </h6> 
					<h6> Curso - Técnico em Informática </h6> 
					<h6> Disciplina - Desenvolvimento Web II </h6> 
					
				</div>

			</div>
			<!-- fim do rodapé
			------------------------------------------------------------- -->
			
		</div>
		<!-- fim de todo o conteudo da página web
		--------------------------------------------------------------------------------------------------- -->

	</body>

</html>	