<?php

/************** ESCALARES ***************/

// string
$nome = "Isaac";
var_dump($nome); // a função var_dump da mais informações sobre a variável inserida (Isaac)
if (is_string($nome)):
    echo "Yes, is a string :)";
else:
    echo "Sorry, isn't a string :(";
endif;
echo "<hr>";

// int
$idade = 27;
var_dump($idade);
if(is_int($idade)):
    echo "$idade é um número inteiro";
else:
    echo "$idade não é um número inteiro";
endif;
echo "<hr>";

// float
$altura = 7.7;
var_dump($altura);
if(is_float($altura)):
    echo "$altura é um número real";
else:
    echo "$altura não é um número real";
endif;
echo "<hr>";


// boolean
$verdadeiro = true;
var_dump($verdadeiro);
if (is_bool($verdadeiro)):
    echo "$verdadeiro é um dado lógico";
else:
    echo "$verdadeiro não é um dado lógico";
endif;
echo "<hr>";

/************** COMPOSTOS ***************/

// Array
$carros = array("Gol", "Uno", "Civic", "Camaro", "New Beetle",12,20.6,true);
var_dump($carros);
if(is_array($carros)):
    echo "È um array";
else:
    echo "Não é um array";
endif;

echo "<hr>";

// Object
class Cliente {
    public $nome;
    public function atribuirNome($nome) {
        $this->$nome = $nome;
    }
}

$cliente = new Cliente(); // Classe instanciada como objeto
$cliente->atribuirNome("Rodrigo");
var_dump($cliente);

echo "<hr>";

if(is_object($cliente)):
    echo "È um objeto";
else:
    echo "Não é um array";
endif;
echo "<hr>";

/***************** ESPECIAIS *******************/

// Null
$cidade = NULL;
var_dump($cidade);

// Resource
/*Específica para Banco de Dados */
?>