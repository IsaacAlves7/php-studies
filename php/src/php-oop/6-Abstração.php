<?php
/*
  Abstração = modelo abstrato para as classes.
*/
// Classe abstrata
abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s){ // setter
        $this->saldo = $s;
    }

    public function getSaldo(){ // getter
        return $this->saldo;
    }

// Métodos abstratos
    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class Itau extends Banco{
    public function Sacar($s){
        $this->saldo -= $s;
        echo "Sacou <br>".$s;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo "Depositou <br>".$d;
    }
}

class Bradesco extends Banco{
    public function Sacar($s){
        $this->saldo -= $s;
        echo "Sacou <br>".$s;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo "Depositou".$d;
    }
}

class Santander extends Banco{
    public function Sacar($s){
        $this->saldo -= $s;
        echo "Sacou <br>".$s;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo "Depositou <br>".$d;
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Depositar(700);
echo "<hr> Saldo: ".$itau->getSaldo();

$bradesco = new Bradesco();
$bradesco->setSaldo(1500);
echo "<hr> Saldo: ".$bradesco->getSaldo();
$bradesco->Sacar(300);

$santander = new Santander();
$santander->setSaldo(2000);
echo "<hr> Saldo: ".$santander->getSaldo();
$bradesco->Sacar(100);