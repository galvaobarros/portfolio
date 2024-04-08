<?php
	$conectar = mysqli_connect("localhost", "root", "", "bd_gagal");
	mysqli_set_charset($conectar, "UTF8");
	$cod = $_GET['codigo']

	$sql_consulta = "SELECT manchete_not FROM
									noticias
					WHERE cod_not = '$cod'";

	$sql_resultado_consulta = mysqli_query($conectar, $sql_consulta);

	$registro = mysqli_fetch_row ($sql_resultado_consulta);

?>

<script language="javascript">
	var msgchamado = window.confirm ("Tem certeza que deseja excluir a noticia <?php echo $registro[0]; ?>");

	if (msgchamado)
		{
		window.location.href = ("processa_exclui2_noticia.php?codigo_not=<?php echo $cod; ?>")	
		}
		else
		{
		window.history.go(-1);
		}

</script>