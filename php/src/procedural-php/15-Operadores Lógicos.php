<?php
// Operadores Lógicos

// Nos permitem fazer comparações 

// e (&& - and) As duas proposições são verdadeiras então o resultado é verdadeiro, se uma proposição é falsa as duas são falsas.
// ou (|| - or) Se uma proposição é verdadeira as duas são verdadeiras, se as duas forem falsas o resultado retorna para falso
// ou exclusivo (xor) Só aceita uma expressão exclusiva para ser verdadeira
// negação (!) Nega a expressão

$idade = 25;
$nome = "Rodrigo";

if(($idade == 25) && ($nome == "Rodrigo")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;

?>