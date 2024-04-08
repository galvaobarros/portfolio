<?php

	/* se tiver um login dentro dessa variável de sessão */
	if (isset($_SESSION["login"])) {
		
		/* mostrar login */
		echo $_SESSION["login"];

	} 
	/* se não tiver login dentro da variável de sessão */
	else {
		
		/* mensagem de erro */
		echo "<script> alert ('Você não está logado!!!') </script>";

		/* redirecionando para acesso_restrito.php */
		echo "<script> location.href = ('acesso_restrito.php') </script>";

	}
	
?>