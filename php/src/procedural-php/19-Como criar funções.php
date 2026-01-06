<?php
// Criando funções 
function exibirNome($nome) /*variável no parâmetro da função*/{
    echo "Meu nome é $nome"; /*recebe a função */
}

exibirNome("Isaac Alves"); // o parâmetro é inserido o valor da variável da função

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4)/4;
    if($media >= 6):
        echo "$nome aprovado com a média de $media pontos! <br>";
    else:
        echo "$nome reprovado <br>";
    endif;
}

calcularMedia("Isaac", 5, 6, 10, 6, 10);
calcularMedia("Matheus", 5, 6, 10, 6, 10);
?>