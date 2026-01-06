<?php
// Constantes
// Identificadores das constantes no PHP são sempre MAIÚSCULAS
define("NOME", "José Carlos");
define("IDADE", 24);
define("ALTURA", 1.89);
define("HUMANO", true);
define("TIMES", ['vasco', 'flamengo', 'santos']);

echo IDADE;
echo "<hr>";
echo NOME;
echo "<hr>";
echo ALTURA;
echo "<hr>";
echo HUMANO;
echo "<hr>";
echo TIMES[0];
echo "<hr>";

// Concatenação
echo 'Meu nome é '.NOME.' e minha idade é '.IDADE.' e minha altura é '.ALTURA.'.'; 

echo "<hr>";

// Função das Constantes
function exibeNome() {
    echo NOME;
}
exibeNome();
?>