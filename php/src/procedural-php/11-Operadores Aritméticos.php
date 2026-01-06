<?php
/*
Operadores Aritméticos

São usados com valores numéricos para executar operações aritméticas comuns, como adição, subtração, multiplicação e etc.

Adição +
Subtração -
Divisão / 
Multiplicação *
Módulo %
Exponenciação **
*/

$n1 = 7;
$n2 = 7;

echo "<center><b>7 oa 7 =</b></center>";
echo "<hr>";
echo "soma = ";
echo $n1 + $n2;
echo "<hr>";
echo "subtração = ";
echo $n1 - $n2;
echo "<hr>";
echo "multiplicação = ";
echo $n1 * $n2;
echo "<hr>";
echo "divisão = ";
echo $n1 / $n2;
echo "<hr>";
echo "exponenciação = ";
echo $n1 ** $n2;
echo "<hr>";

////////////////////Outra maneira////////////////////////
$soma = $n1 + $n2;
echo $soma;
///////////////////////Média//////////////////////////////
echo "<hr>";
// Com o parênteses definimos a prioridade dos operadores, visto que a divisão é a primeira a ser processada
echo (2+2+2+2)/4;
?>