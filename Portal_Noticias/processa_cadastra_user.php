<?php
	
	session_start();
	/* conectando ao banco de dados */
	$conectar = mysqli_connect("localhost", "root", "", "bd_gagal");

	/* recebendo os dados que veio pelo formulário */
	$nome = $_POST["nome"];
	$perfil = $_POST["perfil"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	/* $imagem se torna um vetor */
	$imagem = $_FILES["imagem"];

	/* atribuindo a variável o código em mysql para consultar o banco de dados */
	$sql_consulta = "select login_user from usuarios
						where login_user = '$login';";

	/* atribuindo a variável a função para manipular o banco de dados */
	$resultado_consulta = mysqli_query($conectar, $sql_consulta);

	/* atribuindo a varíavel a função contador de linhas de uma tabela */
	$linha = mysqli_num_rows($resultado_consulta);

	/* se o contador de linhas achar uma linha o login já existe */
	if ($linha == 1) {
		
		/* aviso de login existente */
		echo "<script> alert('Login Existente, Tente Novamente Com um Novo Login !') </script>";

		/* manda para a página cadastro_usuário.php */
		echo "<script> location.href = ('cadastra_user.php') </script>";

	}
	/* se o contador não contar nenhuma linha o login não existe */
	else {
		
		/* atribuindo a variável a localização onde estará a imagem */
		$imagem_nome = "img/".$imagem["name"];

		/* função que faz upload da imagem para a pasta desejada */
		move_uploaded_file($imagem["tmp_name"], $imagem_nome);

		/* atribuindo a variável o código em sql para inserir dados no banco de dados */
		$sql_cadastrar = "insert into usuarios
							(nome_user, perfil_user, login_user, senha_user, imagem_user)
						values
							('$nome', '$perfil', '$login', '$senha', '$imagem_nome');";

		/* atribuindo a variável a função de manipular o banco de dados */
		$resultado_cadastro = mysqli_query($conectar, $sql_cadastrar);

		/* se tiver inserido dados com sucesso no banco de dados */
		if ($resultado_cadastro == true) {
			
			/* aviso de sucesso */
			echo "<script> alert('$nome Cadastrado com Sucesso !') </script>";

			/* redirecionamento para cadastro_usuário.php */
			echo "<script> location.href = ('cadastra_user.php') </script>";

		} 
		/* se não tiver inserido dados com sucesso no banco de dados */
		else {
			
			/* mensagem de ERRO */
			echo "<script> alert('Ocorreu um erro no servidor, Tente Novamente !') </script>";

			/* redirecionamento para cadastra_user.php */
			echo "<script> location.href = ('cadastra_user.php') </script>";

		}
		

	}
	

?>