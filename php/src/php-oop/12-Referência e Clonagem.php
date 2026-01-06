<?php
// Referência e Clonagem de Objetos

class Pessoa {
    public $idade;

    public function __clone() { // atributo com parâmetro de clonagem
        echo "Clonagem de objetos"."<br>";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = $pessoa; // objeto referente a classe Pessoa
$pessoa2->idade = 35;
echo $pessoa->idade;

echo "<br>";

$pessoa2 = clone $pessoa; // clone do objeto pessoa
$pessoa2->idade = 35;
echo $pessoa2->idade;

