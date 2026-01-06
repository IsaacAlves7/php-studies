<?php
// COOKIE
// Conselho: Use para armazenar informações simples, evite armazenar contas (login ou senha), pois ficará armazenado no computador dos usuários, podendo assim ser arriscado!
setcookie('user', 'Isaac Alves', time()+3600);
setcookie('email', 'isaac.07@gmail.com', time()-3600); // valor negativo ele é removido
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

var_dump($_COOKIE);
echo $_COOKIE['user']; // Acessando o cookie
?>