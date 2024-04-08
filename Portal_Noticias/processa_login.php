<?php 

	/* iniciando a sessão */
	session_start();

	/* atribuindo a variavel a conexão para o banco de dados */
	$conectar = mysqli_connect("localhost", "root", "", "bd_gagal");

	/* recebendo o dados que veio de um formulário */
	$login = $_POST["login"];
	$senha = $_POST["senha"];

	/* atribuindo a variável um comendo em mysql para consultar o banco de dados */
	$sql_consulta = "select cod_user, login_user, senha_user, perfil_user from usuarios
						where login_user = '$login' and senha_user = '$senha'; ";

	/* atribuindo a variavel a função para manipular o banco de dados */
	$resultado_consulta = mysqli_query($conectar, $sql_consulta);

	/* atribuindo a variavel a função contador de linhas de uma tabela */
	$linha = mysqli_num_rows($resultado_consulta);

	/* se o contador contar uma linha, existe esse login e senha */
	if ($linha == 1) {

		/* atribui a uma variável de sessão o seu login */
		$_SESSION["login"] = $login ;

		/* atribuindo a variavel, que se tornará um vetor, a função que pega os dados de uma tabela  */
		$registro = mysqli_fetch_row($resultado_consulta);

		/* colocando na variável de sessão o perfil do usuário */
		$_SESSION["perfil"] = $registro[3] ;

		/* colocando na variável de sessão o código do usuário */
		$_SESSION["codigo_usuario"] = $registro[0];

		/* redirecionando o usuário a página administracao.php */
		echo "<script> location.href = ('administracao.php') </script>";

	} 
	/* se não o contador não contar uma linha, o login ou a senha não existem  */
	else {
		
		/* mandando uma mensagem de erro */
		echo "<script> alert ('Login ou Senha incorretos! Tente Novamente!') </script>";

		/* redirecionando para a página acesso_restrito.php */
		echo "<script> location.href = ('acesso_restrito.php') </script>";

	}
	

 ?>