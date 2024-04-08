
//Apenas desenvolvendo ainda.

<?php
	$conectar = mysqli_connect("localhost", "root", "", "bd_gagal");

	$cod = $_POST["codigo"];

		if($perfil == "Administrador") {
			$senha = $_POST["senha"];
			$sql_altera = "UPDATE noticias
					   		SET
									manchete_not = '$manchete',
									resumo_not = '$resumo',
									texto_not = '$texto',
									categoria = '$categoria',
									imagem_not = '$imagem'
							WHERE	cod_not = '$cod'";

			$sql_resultado_altera = mysqli_query($conectar, $sql_altera);
		
		if ($sql_resultado_altera == true)
		{
			echo "<script>
						alert ('Senha do administrador alterada com sucesso')
				  </script>";

			echo "<script>
						location.href = ('lista_user.php')
				  </script>";
			exit();

		}
		else
		{
			echo "<script>
						alert ('Ocorreu um erro no servidor. Tente novamente')
				  </script>";
			echo "<script>
						location.href = ('lista_user.php')
				  </script>";

		}
		}
		else
		{

			$nome = $_POST["nome"];
			$perfil_comum = $_POST["perfil_comum"];
			$senha = $_POST["senha"];
			$status = $_POST["status"];
			$foto = $_FILES["imagem"];


	

	if ($foto["name"] <> "") {
		$foto_nome = "img/".$foto["name"];
		move_uploaded_file($foto["tmp_name"], $foto_nome);
	}
	else {
		$sql_pesquisar_foto = "SELECT 
							imagem_not
							FROM noticias
						  WHERE cod_not ='$cod'";
	
		$sql_resultado_foto = mysqli_query ($conectar, $sql_pesquisar_foto);

		$registro = mysqli_fetch_row($sql_resultado_foto);
		$foto_nome = $registro[0];
	}

	$sql_altera = "UPDATE noticias
				   SET 		manchete_not='$manchete',
				   			resumo_not='$resumo',
				   			texto_not ='$texto',
				   			categoria_not='$categoria',
				   			imagem_not='foto_nome'
				   	WHERE	cod_not='$cod'";
		
	$sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);

	if ($sql_resultado_alteracao == true)
	{
		echo "<script>
					alert ('$nome alterado com sucesso')
			  </script>";
		echo "<script>
					location.href = ('lista_user.php')
			  </script>";

	}
	else
	{
		echo "<script>
					alert ('Ocorreu um erro no servidor. Tente novamente')
			  </script>";
		echo "<script>
					location.href = ('lista_user.php')
			  </script>";

	}


}

?>