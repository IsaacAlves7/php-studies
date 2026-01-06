<?php
/* Herança é um recurso que permite que classes compartilhem atributos e métodos, afim de reaproveitar códigos ou comportamentos generalizados*/
class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "Andou <br>";
    }

    public function Parar() {
        echo "Parou <br>";
    }
}

/*Modo Classe serve para especificar um determinado objeto*/

// class Carro{
//     public $modelo;
//     public $cor;
//     public $ano;

//     public function Andar() {
//     }

//     public function Parar() {
//     }
// }


// class Moto{
//     public $modelo;
//     public $cor;
//     public $ano;

//     public function Andar(){
//     }

//     public function Parar(){
//     }
// }

/*MODO HERANÇA serve para atribuir caracteristicas comuns de varias classes*/
class Carro extends Veiculo { // Classe herdeira
    public function ligarLimpador () {
        echo "Limpando em 321 <br>";
    }
}

class Moto extends Veiculo{
    public function darGrau () {
        echo "Dando grau em 321 <br>";
    }
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
var_dump($carro);

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "azul";
$moto->ano = 2017;
$moto->Parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);
