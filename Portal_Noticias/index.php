<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="_css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
</head>

<body>
    <div id="principal">
        <div id="topo">
            <div id="logo">
                <h1>Portal de Notícias</h1>
                <h4> Desenvolvimento Web II</h4>
                <h4> Técnico em Informática</h4>
            </div>

            <div id="menu_global" class="menu_global">
                <?php
                // Inclui o menu global
                include "menu_global.php";
                ?>
            </div>
        </div>

        <div id="conteudo_especifico">
            <?php
            // Conecta ao banco de dados
            $conectar = mysqli_connect("localhost", "root", "", "bd_gagal");

            // Consulta a primeira notícia
            $sql_pesquisa_noticia = "select manchete_not, resumo_not, texto_not, imagem_not, cod_not from noticias order by cod_not desc limit 1 ;";
            $resultado_pesquisa_noticia = mysqli_query($conectar, $sql_pesquisa_noticia);
            $registro_noticia = mysqli_fetch_row($resultado_pesquisa_noticia);
            ?>

            <div class="div_central">
                <table>
                    <tr>
                        <td> <img src="<?php echo "$registro_noticia[3]"; ?>"> </td>
                        <td>
                            <h2> <?php echo "$registro_noticia[0]"; ?> </h2>
                            <h3> <?php echo "$registro_noticia[1]"; ?> </h3>
                            <?php $texto = substr($registro_noticia[2], 0, 130); ?>
                            <p>
                                <?php echo "$texto"; ?>
                                <a href="mostra_noticia.php?codigo_not=<?php echo $registro_noticia[4] ?>">
                                    Leia mais ...
                                </a>
                            </p>
                        </td>
                    </tr>
                </table>
            </div>

            <?php
            // Consulta a segunda notícia
            $sql_pesquisa_noticia = "select manchete_not, resumo_not, texto_not, imagem_not, cod_not from noticias order by cod_not desc limit 1, 1;";
            $resultado_pesquisa_noticia = mysqli_query($conectar, $sql_pesquisa_noticia);
            $registro_noticia = mysqli_fetch_row($resultado_pesquisa_noticia);
            ?>

            <div class="div_esquerda">
                <table>
                    <tr>
                        <td> <img src="<?php echo "$registro_noticia[3]"; ?>"> </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h2> <?php echo "$registro_noticia[0]"; ?> </h2>
                            <h3> <?php echo "$registro_noticia[1]"; ?> </h3>
                            <?php $texto = substr($registro_noticia[2], 0, 70); ?>
                            <p>
                                <?php echo "$texto"; ?>
                                <a href="mostra_noticia.php?codigo_not=<?php echo $registro_noticia[4] ?>">
                                    Leia mais ...
                                </a>
                            </p>
                        </td>
                    </tr>
                </table>
            </div>

            <?php
            // Consulta a terceira notícia
            $sql_pesquisa_noticia = "select manchete_not, resumo_not, texto_not, imagem_not, cod_not from noticias order by cod_not desc limit 2, 1;";
            $resultado_pesquisa_noticia = mysqli_query($conectar, $sql_pesquisa_noticia);
            $registro_noticia = mysqli_fetch_row($resultado_pesquisa_noticia);
            ?>

            <div class="div_direita">
                <table>
                    <tr>
                        <td> <img src="<?php echo "$registro_noticia[3]"; ?>"> </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h2> <?php echo "$registro_noticia[0]"; ?> </h2>
                            <h3> <?php echo "$registro_noticia[1]"; ?> </h3>
                            <?php $texto = substr($registro_noticia[2], 0, 70); ?>
                            <p>
                                <?php echo "$texto"; ?>
                                <a href="mostra_noticia.php?codigo_not=<?php echo $registro_noticia[4] ?>">
                                    Leia mais ...
                                </a>
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div id="rodape">
            <div id="texto_intitucional">
                <h6> ETB - Escola Técnica de Brasília </h6>
                <h6> Curso - Técnico em Informática </h6>
                <h6> Disciplina - Desenvolvimento Web II </h6>
            </div>
        </div>
    </div>
</body>

</html>

