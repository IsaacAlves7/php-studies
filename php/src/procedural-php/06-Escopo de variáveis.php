<?php
// Escopo Global
$name = "Escopo Global";

function exibirName(){
    global $name;
    echo $name;
}
exibirName();

echo "<hr>";

// Escopo de bloco
function exibeNome(){
    $nome = "Escopo de bloco";
    echo $nome;
}
exibeNome();

echo "<hr>";

///////////////////////////////////

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    // é o mesmo que echo $a + $b + $c;
}

soma();
?>