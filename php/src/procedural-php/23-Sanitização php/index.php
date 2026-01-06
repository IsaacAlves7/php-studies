<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitização PHP</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
        }

        p{
            color: limegreen;
        }

        b{
            color: red;
        }
    </style>
</head>
<body>
    <?php
    /* Sanitização (Sanitize Filters)
    FILTER_SANITIZE_SPECIAL_CHARS
    FILTER_SANITIZE_INT
    FILTER_SANITIZE_EMAIL
    FILTER_SANITIZE_URL
    */

    // Sanitize
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    if(isset($_POST['enviar-formulario'])):
        $erros = array();

        if (!$nomecompleto = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS)):
            $erros[] = "<b>Seu nome precisa ser um caractere de letras.</b> <br>";
        endif;

        if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT)):
            $erros[] = "<b>Sua idade precisa ser um número inteiro.</b> <br>";
        endif;

        if (!$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)):
            $erros[] = "<b>Seu email precisa conter um endereço válido , como por exemplo '\n@gmail.com' ou '\n@yahoo.com'.</b> <br>";
        endif;

        if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
            $erros[] = "<b>Seu email precisa conter um endereço válido , como por exemplo '\n@gmail.com' ou '\n@yahoo.com'.</b> <br>";
        endif;

        if (!$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL)):
            $erros[] = "<b>Sua URL precisa de uma terminação de domínio, como por exemplo '\n.com', '\n.net' ou '\n.org'.</b> <br>";
        endif;

        if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
            $erros[] = "<b>Seu email precisa conter um endereço válido , como por exemplo '\n@gmail.com' ou '\n@yahoo.com'.</b> <br>";
        endif;

        if(!empty($erros)):
            foreach($erros as $erro):
                echo "<li> $erro </li>";
            endforeach;
        else:
            echo "<p>Seus dados foram registrados com sucesso!</p> <br>";
            echo "Nome: $nome <br>";
            echo "Idade: $idade<br>";
            echo "Email: $email<br>";
            echo "URL: $url";
        endif;

        if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_INT)):
            $erros[] = "Idade precisa ser um inteiro";
        endif;
    endif;
    ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <strong>Nome Completo:</strong><input type="text" name="nome"> <br>
      <strong>Idade:</strong><input type="text" name="idade"> <br>
      <strong>Email:</strong><input type="text" name="email"> <br>
      <strong>URL:</strong><input type="text" name="url"> <br>
      <!-- Senha: <input type="text" name="senha">  <br> 
      Repetir Senha: <input type="text" name="repitir-senha"> <br>-->
 <button type="submit" name="enviar-formulario">Enviar</button><br>
</form>
</body>
</html>