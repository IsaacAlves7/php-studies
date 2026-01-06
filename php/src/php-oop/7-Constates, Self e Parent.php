<?php
class Pessoa{
    const nome = "Isaac";

    public function exibirNome(){
        echo self::nome; // declarando a constante
    }
}

class Isaac extends Pessoa{
    const nome = "Alves";

    public function exibirNome(){ // parent é o que vem antes da ultima constante
        echo parent::nome." ".self::nome;
    }
}

$isaac = new Isaac();
$isaac->exibirNome();