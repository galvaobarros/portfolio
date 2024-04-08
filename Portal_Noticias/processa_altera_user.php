<?php
    $conectar = mysqli_connect("localhost", "root", "", "bd_gagal");

    $cod = $_POST["codigo"];
    $perfil = $_POST["perfil"];
    $nome = $_POST["nome"];

    if ($perfil == "Administrador") {
        $senha = $_POST["senha"];
        $sql_altera = "UPDATE usuarios
                       SET senha_user = '$senha'
                       WHERE cod_user = '$cod'";

        $sql_resultado_altera = mysqli_query($conectar, $sql_altera);

        if ($sql_resultado_altera == true) {
            echo "<script>
                    alert ('Senha do administrador alterada com sucesso')
                  </script>";

            echo "<script>
                    location.href = ('lista_user.php')
                  </script>";
            exit();
        } else {
            echo "<script>
                    alert ('Ocorreu um erro no servidor. Tente novamente')
                  </script>";
            echo "<script>
                    location.href = ('lista_user.php')
                  </script>";
        }
    } else {
        $nome = $_POST["nome"];
        $perfil_comum = $_POST["perfil_comum"];
        $senha = $_POST["senha"];
        $status = $_POST["status"];
        $foto = $_FILES["imagem"];

        if ($foto["name"] <> "") {
            // Limita o tamanho do arquivo (por exemplo, 2MB)
            $tamanho_maximo = 2 * 1024 * 1024; // 2MB em bytes

            // Verifica se o arquivo é uma imagem
            $permitidos = array('image/jpeg', 'image/png', 'image/gif');

            if (in_array($foto['type'], $permitidos) && $foto['size'] <= $tamanho_maximo) {
                // Gera um nome único para o arquivo com prefixo de timestamp
                $foto_nome = "img/" . time() . "_" . $foto["name"];

                // Move o arquivo para o destino com o novo nome
                move_uploaded_file($foto["tmp_name"], $foto_nome);
            } else {
                // Mensagem de erro se o arquivo não for uma imagem ou exceder o tamanho máximo
                echo "Apenas arquivos de imagem são permitidos e o tamanho deve ser menor que 2MB.";
            }
        } else {
            $sql_pesquisar_foto = "SELECT imagem_user FROM usuarios WHERE cod_user ='$cod'";
            $sql_resultado_foto = mysqli_query($conectar, $sql_pesquisar_foto);

            $registro = mysqli_fetch_row($sql_resultado_foto);
            $foto_nome = $registro[0];
        }

        $sql_altera = "UPDATE usuarios
                       SET nome_user='$nome',
                           perfil_user='$perfil_comum',
                           senha_user='$senha',
                           status_user='$status',
                           imagem_user='$foto_nome'
                       WHERE cod_user='$cod'";

        $sql_resultado_alteracao = mysqli_query($conectar, $sql_altera);

        if ($sql_resultado_alteracao == true) {
            echo "<script>
                    alert ('$nome alterado com sucesso')
                  </script>";
            echo "<script>
                    location.href = ('lista_user.php')
                  </script>";
        } else {
            echo "<script>
                    alert ('Ocorreu um erro no servidor. Tente novamente')
                  </script>";
            echo "<script>
                    location.href = ('lista_user.php')
                  </script>";
        }
    }
?>
