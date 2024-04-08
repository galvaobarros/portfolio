<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible"content="IE=edge">
		<title> lista noticias </title>
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

                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="lista_noticias.php?categoria=hardware">Hardware</a></li>
                        <li><a href="lista_noticias.php?categoria=software">Software</a></li> 

                   		 </ul> 
						
						</div>
						</div>
									

					<div id="conteudo_especifico">
						
						<div class="div_central">
						
							<?php
		/* conectando ao banco de dados */			
		$conectar = mysqli_connect ("localhost", "root","","bd_gagal");
		/* recebendo a categoria */
		$categoria = $_GET["categoria"];

		/* atribuindo a uma variável o código em mysql que faz a pesquisa */
		$sql_consulta = "SELECT 
						 		cod_not,
						 		manchete_not,
						 		resumo_not,
						 		texto_not,
						 		imagem_not
						 FROM 
						 		noticias
						 WHERE 
						 		categoria_not = '$categoria'";

		/* atribuindo a uma variável a função para manipular o banco de dados */
		$resultado_consulta = mysqli_query ($conectar, $sql_consulta);

		/* atribuindo a uma variável a função de contagem de linhas de uma tabela do mysql */
		$linhas = mysqli_num_rows($resultado_consulta);

			/* imprimindo quantas linhas possuem na tabela do mysql */			 				
			echo	"<h3 $linhas noticias postadas!!! </h3>";


		/* se existir alguma linha na tabela o resultado é true */
		if($resultado_consulta) {

		?>

		<!-- exibindo o título, notícia de hardware ou software -->
		<h1> <?php echo "Notícias de $categoria"; ?> </h1>

		<table>
			<?php
					/* enquanto tiver linhas na tabela a função atribuirá a variável a cada loop */
					while ($registro_noticia = mysqli_fetch_row($resultado_consulta)) {
			?>

			<tr>
				<td>
					<!-- exibindo a imagem da notícia -->
					<img src=" <?php echo "$registro_noticia[4]"; ?>">
				</td>
				
				<td>
					<!-- exibindo a manchete da notícia -->
					<h2> <?php echo "$registro_noticia[1]"; ?> </h2>
					<!-- exibindo o resumo da notícia -->
					<h3> <?php echo "$registro_noticia[2]"; ?> </h3>

					<!-- atribuindo a variável a função que exibe apenas uma quantidade do texto que deseja -->
					<?php $texto = substr($registro_noticia[3], 0, 130)?>

					<p>
						<!-- exibindo uma prévia do texto na web -->
						<?php echo "$texto"; ?>
							<!-- enviando o código pelo link -->
						<a href="mostra_noticia.php?codigo_not=<?php echo $registro_noticia[0]; ?>">
						 	Leia mais...
						</a>

					</p>
				</td>
			</tr>

			<?php

			}
			}

			?>

		 </table>

				</div>
						<div class="div_esquerda">
						
							<p> </p>
						</div>
						<div class="div_direita">
							<p>	</p>	
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
