<?php
/*Polimorfismo = reescrever ou substituir um método herdado. */
class Animal {
    public function Andar() {
        echo "O animal andou";
    }
}

class Cavalo extends Animal{
    public function Andar() { // polimorfismo
        echo "O cavalo andou";
    }
}

$animal = new Cavalo();
$animal->Andar();