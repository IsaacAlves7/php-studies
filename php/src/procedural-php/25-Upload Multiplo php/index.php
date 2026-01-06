<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Multiplo</title>
</head>
<body>
    <!-- php: condição  + array + variáveis superglobais + repetição + formulário com metodo POST-->
    <!-- a pasta arquivo recebe as imagens aceitas pelas extensões do array e do formulário -->
    <!-- Há um limite no servidor para a quantidade de arquivos enviados de uma vez e do peso de arquivos -->
<b><h3>Upload de arquivos de imagem</h3></b>
    <?php
    if(isset($_POST['enviar-formulario'])):

        $formatosPermitidos = array("png", "jpg", "jpeg", "svg", "gif", "ico", "webp", "bmp", "pcx", "pct", "dng", "psd", "rgb", "rgba", "dcm", "dds", "hdr", "3fr", "arm", "piskel", "avif", "jbg", "fax", "pcx", "tiff", "raw", "eps", "ppt");
        $quantidadeArquivos = count($_FILES['arquivo']['name']);
        $contador = 0;
        while ($contador < $quantidadeArquivos):

        $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

        if(in_array($extensao, $formatosPermitidos)):
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'][$contador];
            $novoNome = uniqid().".$extensao";

            if(move_uploaded_file($temporario, $pasta.$novoNome)):
                echo "<b>$pasta$novoNome</b> fez o upload com sucesso!<br>";
            else:
                echo "<b>$temporario</b> houve um erro, não foi possível fazer o upload";
            endif;
        
        else:
         echo "A extensão <b>.$extensao</b> não é permitida, formato inválido! <br>";
        endif;
    
    $contador++;
    endwhile;
    endif;

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple> <br>
        <button type="submit" name="enviar-formulario">Enviar</button>
    </form>
</body>
</html>