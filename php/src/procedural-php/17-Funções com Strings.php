<?php
/*
Funções para Strings

strtoupper
strtolower
substr
str_pad
str_repeat
strlen
str_replace
strpos
*/

// LETRAS MAIÚSCULAS

$nome = "rodrigo oliveira";
$novoNome = strtoupper($nome);
echo $novoNome;

echo "<hr>";

$mensagem = "Olá mundo";
echo substr($mensagem, 4, 6);

echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 10, "*"/*, STR_PAD_LEFT/BOTH/RIGHT muda a posição do caractere*/);
echo $novoObjeto;

echo "<hr>";

$string = str_repeat("Sucesso!", 7);
echo $string;

echo "<hr>";

$mensagem = "Olá mundo";
echo strlen($mensagem);

echo "<hr>";

$texto = "A seleção Argentina será campeã da copa do mundo de 2018.";
$novoTexto = str_replace("Argentina", "Brasil", $texto);
echo $novoTexto;

echo "<hr>";

echo strpos($texto, "copa");

?>