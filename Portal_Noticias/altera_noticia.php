<!-- iniciando a sessão para as variáveis de sessão funcionarem -->
<?php
    session_start();
?>
<!-- fim da sessão -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Acesso Restrito / Alteração de Notícias</title>
    <link rel="stylesheet" type="text/css" href="_css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" />
    <link rel="stylesheet" type="text/css" href="css/menu.css" />
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet" />
</head>

<body>
    <div id="principal">
        <div id="topo">
            <div id="logo">
                <h1> Portal de Notícias </h1>
                <h4> Desenvolvimento Web II</h4>
                <h4> Técnico em Informática</h4>
            </div>
            <div id="menu_global" class="menu_global">
                <ul>
                    <li> Olá <?php include "valida_login.php"; ?> </li>
                    <li><a href="logout.php"> Sair </a></li>
                </ul>
            </div>
        </div>
        <div class="centralizar">
            <div class="central">
                <h1> ALTERAÇÃO DE NOTÍCIA </h1>
            </div>
        </div>
        <div id="conteudo_especifico">
            <div class="div_esquerda">
                <div id="menu_local" class="menu_local">
                    <?php include "menu_local.php"; ?>
                </div>
            </div>
            <div class="div_direita">
                <?php
                $conectar = mysqli_connect("localhost", "root", "", "bd_gagal");
                $codigo_not = $_GET["codigo_not"];
                $sql_consulta = "SELECT manchete_not, resumo_not, texto_not, imagem_not, categoria_not FROM noticias WHERE cod_not = '$codigo_not'";
                $resultado_consulta = mysqli_query($conectar, $sql_consulta);
                $registro = mysqli_fetch_row($resultado_consulta);
                ?>
                <form method="post" action="processa_altera_noticia.php" enctype="multipart/form-data">
                    <input type="hidden" name="codigo" value="<?php echo $codigo_not; ?>">
                    <table class="centralizar" border="2">
                        <tr>
                            <td>
                                <p> Manchete: </p>
                            </td>
                            <td>
                                <p> <input type="text" name="manchete" value="<?php echo isset($registro[0]) ? $registro[0] : ''; ?>" required> </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p> Resumo: </p>
                            </td>
                            <td>
                                <p> <input type="text" name="resumo" value="<?php echo isset($registro[1]) ? $registro[1] : ''; ?>" required> </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p> Texto: </p>
                            </td>
                            <td>
                                <p> <textarea name="texto" required><?php echo isset($registro[2]) ? $registro[2] : ''; ?></textarea> </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p> Imagem: </p>
                            </td>
                            <td>
                                <p> <input type="file" name="foto"> <?php echo isset($registro[3]) ? $registro[3] : ''; ?></textarea></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p> Categoria: </p>
                            </td>
                            <td>
                                <select name="categoria" required>
                                    <option value="Software" <?php echo (!empty($registro) && isset($registro[4]) && $registro[4] == 'Software') ? 'selected' : ''; ?>>Software</option>
                                    <option value="Hardware" <?php echo (!empty($registro) && isset($registro[4]) && $registro[4] == 'Hardware') ? 'selected' : ''; ?>>Hardware</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p> <input type="submit" value="Alterar Notícia"> </p>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div id="rodape">
            <div id="texto_institucional">
                <h6> ETB - Escola Técnica de Brasília </h6>
                <h6> Curso - Técnico em Informática </h6>
                <h6> Disciplina - Desenvolvimento Web II </h6>
            </div>
        </div>
    </div>
</body>

</html>
