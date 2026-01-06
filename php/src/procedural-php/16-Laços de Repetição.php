<?php
// while - enquanto
// do while - faça enquanto, ele executa o trecho de código e depois faz a verificação
// for - executa um determinado trecho específico de loop
// foreach - 
$contador = 1; 
while ($contador <= 10):
    echo "Contador é $contador <br>";
    $contador++;
endwhile;

echo "<hr>";

$contador = 1;

do {
    echo "Contador é $contador <br>";
    $contador++;
} while($contador <= 10);

echo "<hr>";

for ($contador = 0; $contador <= 10; $contador++):
    echo "Contador é $contador <br>";
endfor;

echo "<hr>";
// Tabuada
for ($contador = 0; $contador <= 10; $contador++):
    echo "0 x $contador = ".($contador*0)."<br>";
    echo "1 x $contador = ".($contador*1)."<br>";
    echo "2 x $contador = ".($contador*2)."<br>";
    echo "3 x $contador = ".($contador*3)."<br>";
    echo "4 x $contador = ".($contador*4)."<br>";
    echo "5 x $contador = ".($contador*5)."<br>";
    echo "6 x $contador = ".($contador*6)."<br>";
    echo "7 x $contador = ".($contador*7)."<br>";
    echo "8 x $contador = ".($contador*8)."<br>";
    echo "9 x $contador = ".($contador*9)."<br>";
    echo "10 x $contador = ".($contador*10)."<br>";
endfor;

echo "<hr>";

$cores = array("Verde", "Vermelho", "Azul", "Preto");
foreach($cores as $indice => $valor):
    echo $indice."-".$valor."<br>";
endforeach;

echo "<hr>";


?>