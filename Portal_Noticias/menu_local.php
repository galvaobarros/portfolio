<?php 
/* Caso o perfil seja "Administrador mostra o menu do administrador" */
    if ($_SESSION["perfil"] == "Administrador") { 
?>
    <nav>
        <p><a href="administracao.php">Administração</a></p>
        <p><a href="cadastra_user.php">Cadastrar Usuário</a></p>
        <p><a href="lista_user.php">Alterar Usuário</a></p>
        <p><a href="cadastro_noticia.php">Cadastrar Notícias</a></p>
        <p><a href="lista_noticia_be.php">Altera/Excluir Notícias</a></p>
    </nav>
<?php 
	/* Caso o perfil seja "Operador" mostra o menu do Operador */
    } elseif ($_SESSION["perfil"] == "Operador") { 
?>
    <nav>
		<p><a href="administracao.php">Administração</a></p>
        <p><a href="cadastra_user.php">Cadastrar Usuário</a></p>
        <p><a href="lista_user.php">Alterar Usuário</a></p>
        <p><a href="lista_noticia_be.php">Altera/Excluir Notícias</a></p>
    </nav>
<?php 
	/* Caso o perfil não seja nenhum dos 2 acima, mostra o menu do Jornalista */
    } else { 
?>
    <nav>
		<p><a href="administracao.php">Administração</a></p>
        <p><a href="cadastro_noticia.php">Cadastrar Notícias</a></p>
        <p><a href="lista_noticia_be.php">Altera/Excluir Notícias</a></p>
    </nav>
<?php
    }
?>

