<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alterar/Inativar Usuários</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="_css/reset.css" />
    <link rel="Stylesheet" type="text/css" href="css/layout.css">
    <link rel="Stylesheet" type="text/css" href="css/menu.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet" />
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
                <ul>
                    <li> Olá <?php include "valida_login.php"; ?> </li>
                    <li><a href="logout.php"> Sair </a></li>
                </ul>
            </div>
        </div>

        <div id="conteudo_especifico">
            <div class="div_central">
                <div class="centralizar">
                    <h1> ALTERAR E/OU INATIVAR USUÁRIOS </h1>
                </div>
            </div>

            <div class="div_esquerda">
                <div id="menu_local" class="menu_local">
                    <?php include "menu_local.php"; ?>
                </div>
            </div>

            <div class="div_direita">
                <?php
                $conectar = mysqli_connect("localhost", "root", "", "bd_gagal");

                /* recebendo o código */
                $cod = $_GET["codigo_user"];

                $sql_consulta = "SELECT 
                                        nome_user,
                                        login_user,
                                        perfil_user,
                                        status_user,
                                        imagem_user
                                FROM usuarios
                                WHERE cod_user = '$cod'";

                $resultado_consulta = mysqli_query($conectar, $sql_consulta);

                $registro = mysqli_fetch_row($resultado_consulta);

                ?>

                <table class="esquerda">
                    <tr>
                        <td>
                            <!-- Mostra a imagem do usuário -->
                            <?php
                            echo "<p> <img src=" . $registro[4] . "></p>";
                            ?>
                        </td>
                        <td>
                            <?php
                            /* Mostra nome, login, perfil e status do usuário */
                            echo "<p> Nome: $registro[0] </p>";
                            echo "<p> Login: $registro[1] </p>";
                            echo "<p> Perfil: $registro[2] </p>";
                            echo "<p> " . ($registro[3] == "a" ? "Ativo" : "Inativo") . " </p>";
                            ?>
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
