<?php
///////////////////ESTRUTURAS CONDICIONAIS/////////////////
//if
//else
//elseif
//endif

$numero = 50;
if ($numero == 10):
    echo "É igual a 10";
elseif($numero <= 9):
    echo "É menor que ou igual a 9";
elseif($numero > 10):
    echo "É maior que 10";
else:
    echo "É diferente de 10";
endif;

echo "<hr>";

//////////////////OPERADOR TERNÁRIO/////////////////////
// ?
// :
$media = 7;
echo ($media >= 7) ? /*? representa o if*/ "Aprovado" : "Reprovado"/* : representa o else */ ;

echo "<hr>";

//////////////////////SWITCH/////////////////////////
$cor = "não sei";
switch ($cor):
    case "vermelho": // if ($cor == vermelho):
    echo "Sua cor preferida é o vermelho.";
    break; // Pausa a execução no case
    case "verde";
    echo "Sua cor preferida é o verde.";
    default: // senão
    echo " Sua cor preferida não é vermelho ou verde.";
endswitch;
?>