<?php
	$conectar = mysqli_connect("localhost", "root", "", "bd_gagal");
	mysqli_fetch_row($conectar, "UTF8");
	$cod = $_GET['codigo']

	$sql_excluir = "DELETE FROM noticias WHERE cod_user = '$cod'";
	$sql_resultado_excluir = mysqli_query($conectar,$sql_excluir)

	if ($sql_resultado_excluir == true)
	{
			echo "<script> alert ('Notícia excluída!') </script>";
			echo "<script> location.href = ('lista_noticias_backend.php') </script>";
	}
	else
		{	
			echo "<script> alert ('Problemas no Banco de Dados') </script>";
			echo "<script> location.href = ('lista_noticias_backend.php') </script>";
		}
?>