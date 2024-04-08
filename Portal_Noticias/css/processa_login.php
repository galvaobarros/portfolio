<?php
	$conectar =	mysqli_connect ("localhost", "root", "", "bd_portal_noticias");

	$login  = $_POST["login"];
	$senha  = $_POST["senha"];

	$sql_consulta = "SELECT login_user, senha_user perfil_user FROM usuarios
					WHERE
						login_user = '$login'
					AND
						senha_user = '$senha'";

	$resultado_consulta = mysqli_query ($conetar,$sql_consulta);

	$linhas = mysqli_num_rows ($resultado_consulta);

	if ($linhas == 1) {

		echo "<script>
					location.href = ('administracao.php')
			 </script>";
		}
		else {
			echo "<script>
					alert ('Login ou Senha Incorretos! Digite Novamente!!')
				</script>";
			echo "<script> location.href = ('acesso_restrito.php') </script>"
	}
?>