<?php
/*
Funções para números

number_format
round
ceil
floor
rand
*/
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";

echo "<hr>";

echo round(3.6);
echo "<br>";
echo ceil(5.10);
echo "<br>";
echo floor(8.90);
echo "<br>";
echo rand(1,20); // gera numeros aleatórios a partir de 1 a 20
?>