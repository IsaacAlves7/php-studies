<?php
/*
private = ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visível só e somente só pela classe que a declarou.
obs: O private só atende dentro do escopo da classe. Por isso é possivel acessá-lo fora do escopo com um novo método!
*/

class Veiculo{
    private $modelo;
    public $cor;
    public $ano;

    private function Andar() {
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

    public function showAction(){ // Acessando o modificador private pela classe herdeira
        $this->Andar();
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getModelo() {
        return $this->modelo;
    }
}

// private Veiculo
$carro = new Carro();
$carro->showAction();
