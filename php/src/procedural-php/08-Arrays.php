<?php
// Arrays
$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
print_r($carros); // Imprime um array todo com os índices, diferente do echo
echo "<hr>";
echo $carros[2]; // Imprime o array especificado pelo índice
echo "<hr>";
$carros[] = "Amarok"; // Com isso o Amarok vai para a posição 4
print_r($carros);
echo "<hr>";
$carros[10] = "Camaro";
print_r($carros);
echo "<hr>";
/////////////////////////////
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";

print_r($motos);
////////////////////////////

// Count
echo count($motos);
$totalMotos = count($motos); // Count sendo atribuida a uma variável
echo "<hr>";
echo $totalMotos;

// Foreach
foreach($motos as $valor) {
    echo $valor."<br>";
}
echo "<hr>";

////////////////////////////

// Arrays associativos
$pessoa = array("nome"=>"Rodrigo", "idade" => 23, "altura"=> 1.75); // => atribui a um dado no array
$pessoa["cidade"] = "Itabuna"; // especifica o índice
print_r($pessoa);
echo $pessoa ["altura"];

foreach($pessoa as $indice => $valor){
    echo $indice.":".$valor."<br>";
}

echo "<hr>";

// Arrays Multidimensionais
$times = array(
    "cariocas" => array("campeão"=>"vasco", "vice"=>"flamengo", "terceiro"=>"botafogo"),
    "paulistas"=> array("santos", "sao paulo", "palmeiras"),
    "baianos"=> array("bahia", "vitoria", "itabuna")
);
echo $times["paulistas"][1];
echo "<br>";

foreach($times["cariocas"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
?>