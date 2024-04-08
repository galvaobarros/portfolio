<?php
    $conectar = mysqli_connect("localhost", "root", "", "bd_gagal");    
    
    // Verifica se o código foi passado pelo formulário antes de acessá-lo
    $cod = isset($_POST["codigo"]) ? $_POST["codigo"] : '';
    $manchete = isset($_POST["manchete"]) ? $_POST["manchete"] : '';
    $resumo = isset($_POST["resumo"]) ? $_POST["resumo"] : '';
    $texto = isset($_POST["texto"]) ? $_POST["texto"] : '';

    // Verifica se o arquivo de imagem foi enviado antes de acessá-lo
    $foto = isset($_FILES["foto"]) ? $_FILES["foto"] : '';

    // Verifica se o código foi fornecido para evitar erro de consulta SQL
    if (!empty($cod)) {
        $sql_pesquisa_foto = "SELECT 
                                    imagem_not 
                              FROM  noticias 
                              WHERE cod_not = '$cod'";
        $sql_resultado_foto = mysqli_query($conectar, $sql_pesquisa_foto);
        $linhas = mysqli_num_rows($sql_resultado_foto);
                
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
                exit();
            }
        } else {
            // Nenhum arquivo foi enviado, mantém a foto anterior
            $sql_pesquisar_foto = "SELECT imagem_not FROM noticias WHERE cod_not ='$cod'";
            $sql_resultado_foto = mysqli_query($conectar, $sql_pesquisar_foto);

            $registro = mysqli_fetch_row($sql_resultado_foto);
            $foto_nome = $registro[0];
        }   
        
        // verificação de categoria, 
        $sql_altera = "UPDATE noticias       
                       SET manchete_not='$manchete', 
                           resumo_not ='$resumo', 
                           texto_not = '$texto',
                           imagem_not = '$foto_nome',
                           categoria_not = '".$_POST["categoria"]."'
                       WHERE cod_not = '$cod'";
        $sql_resultado_alteracao = mysqli_query($conectar, $sql_altera);

        if ($sql_resultado_alteracao == true) {
            echo "<script>
                    alert ('$manchete alterada com sucesso') 
                  </script>";
            echo "<script> 
                     location.href = ('lista_noticia_be.php') 
                  </script>";
            exit();
        } else {    
            echo "<script> 
                    alert ('Ocorreu um erro no servidor') 
                </script>";
            echo "<script> 
                    location.href ('lista_noticia_be.php') 
                 </script>";
        }
    } else {
        // Caso o código não tenha sido passado, exibe uma mensagem de erro
        echo "Código não fornecido.";
    }
?>
