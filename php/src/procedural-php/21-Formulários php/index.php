<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
</head>
<body>
  <!--  <form action="dados.php" method="POST">
      Nome: <input type="text" name="nome"> <br>
      Email: <input type="text" name="email"> <br>
      <button type="submit">Enviar POST</button>
    </form> -->

    <form action="dados.php" method="GET">
      Nome: <input type="text" name="nome"> <br>
      Email: <input type="text" name="email"> <br>
      <button type="submit">Enviar GET</button> <br>
    </form>

    <a href="dados.php?idade=25&sobrenome=Pinheiro">Enviar dados</a>
</body>
</html>