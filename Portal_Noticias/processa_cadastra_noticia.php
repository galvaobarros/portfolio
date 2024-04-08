<?php
	session_start();

	$conectar = mysqli_connect ("localhost","root","", "bd_gagal");

	$manchete = $_POST["manchete"];
	$resumo = $_POST["resumo"];
	$texto = $_POST["texto"];
	$categoria = $_POST["categoria"];
	$imagem = $_FILES["imagem"];

	$codigo_usuario = $_SESSION["codigo_usuario"];

	$imagem_nome = "img/".$imagem["name"];

	move_uploaded_file($imagem["tmp_name"], $imagem_nome);

	$sql_cadastrar = "INSERT INTO noticias (manchete_not,
											resumo_not,
											texto_not,
											categoria_not,
											imagem_not,
											usuarios_cod_user)
					   VALUES    			('$manchete',
					   						'$resumo',
					   						'$texto',
					   						'$categoria',
					   						'$imagem_nome',
					   						'$codigo_usuario');";


	$sql_resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);

	if ($sql_resultado_cadastrar == true) {
		echo "<script>
					alert ('$manchete cadastro com sucesso')
			 </script>";

	    echo "<script>
					location.href = ('cadastro_noticia.php')
			 </script>"; 

	}
	else {
		echo "<script>
					alert ('ocorreu um erro no servidor ao tentar cadastrar')
			 </script>";

		echo "<script>
					location.href = ('cadastro_noticia.php')
			 </script>";

	}

?>