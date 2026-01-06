<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validade Filters</title>
</head>
<body>
    <!--Validações-->
    <?php
    // Validações (Validate Filters)
    /*
    Funções (filter_input - filter_var)
    FILTER_VALIDATE_INT
    FILTER_VALIDADE_EMAIL
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_URL
    */

    // isset - verifica se existe (dai ele retorna True ou se não existe retorna False)
    // empty - verifica se está vazio

    if(isset($_POST['enviar-formulario'])):
        $erros = array();

        if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
            $erros[] = "A sua idade precisa ser um inteiro";
        endif;

        if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
            $erros[] = "Seu email precisa conter um endereço de email válido, como '\n@gmail.com\n' ou '\n@yahoo.com\n', etc.";
        endif;

        if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
            $erros[] = "Seu peso precisa ser um número real positivo";
        endif;

        if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
            $erros[] = "Seu IP é inválido";
        endif;
        
        if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
            $erros[] = "Sua URL precisa conter um protocolo de hipertexto, como '\n https:// \n' ou '\n http:// \n'";
        endif;

        if(!empty($erros)):
            foreach($erros as $erro):
                echo "<li> $erro </li>";
            endforeach;
        else:
            echo "Parabéns, seus dados estão corretos!";
        endif;

        if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_INT)):
            $erros[] = "Idade precisa ser um inteiro";
        endif;
    endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      Idade: <input type="text" name="idade"> <br>
      Email: <input type="text" name="email"> <br>
      Peso:  <input type="text" name="peso">  <br>
      IP:    <input type="text" name="ip"> <br>
      URL:   <input type="text" name="url"> <br>
    <button type="submit" name="enviar-formulario">Enviar</button><br>
    </form>
</body>
</html>