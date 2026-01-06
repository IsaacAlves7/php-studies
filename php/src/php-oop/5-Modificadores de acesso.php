<?php
/*
public = fará com que não haja ocultação nenhuma, toda propriedade ou método declarado com public serão acessíveis por todos que quiserem acessá-los.
obs: O public serve tanto para o escopo da classe como fora dela.

protected = visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos protegidos como se fossem públicos.
obs: Só atende dentro do escopo da classe ou por meio do Getters and Setters.

private = ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visível só e somente só pela classe que a declarou.
obs: O private só atende dentro do escopo da classe.
*/

class Veiculo{
    private $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "Andou <br>";
    }

    public function Parar() {
        echo "Parou <br>";
    }
}

class Carro extends Veiculo {
    public function ligarLimpador () {
        echo "Limpando em 321 <br>";
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getModelo() {
        return $this->modelo;
    }
}

// class Moto extends Veiculo{
//     public function darGrau () {
//         echo "Dando grau em 321 <br>";
//     }
// }

// protected Veiculo
$carro = new Carro();
$carro->setModelo("FIAT");
echo $carro->getModelo(),"<br>";
var_dump($carro);

/* public Veiculo */
// $veiculo = new Veiculo();
// $veiculo->modelo = "FIAT";
// echo $veiculo->modelo;

/*
// public Carro
$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();

// public Moto
$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "azul";
$moto->ano = 2017;
$moto->Parar();
echo "<br>";
$moto->darGrau();
*/