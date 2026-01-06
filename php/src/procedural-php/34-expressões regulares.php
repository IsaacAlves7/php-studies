<?php
// Expressões regulares
// Define um padrão a ser usado para procurar ou substituir palavras ou grupos de palavras.
// ^ inicio da expressão, $ final da expressão - /i - case sensitive
// [] conjunto de caracteres
// {} ocorrências - ?{0,1} *{0,} +{1,} ou seja total de caracteres
// /^[a-z0-9.\-\_]+@[a-z0-9-\_]+\(com|br|com.br|net)$/
// /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/

/*
[A-Z] LETRAS MAIÚSCULAS
[a-z] letras minúsculas
[A-Za-z] LETRAS MAIÚSCULAS e minúsculas
[A-Za-z0-9] Letras e números
*/
// $string = "teste@gmail.com.br";
// $padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";

$string = "27/08/2020";
$padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

if(preg_match($padrao, $string)):
    echo "Válido";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido";
    echo "<hr>";
endif;