<?php
/*
   Objeto é qualquer coisa material ou abstrata no universo, tudo pode ser um objeto!
   Classes (class) = instancia os objetos e define os atributos e métodos comuns quer serão compartilhados por um objeto.
*/

class Pessoa { // padrão da classe é a primeira letra maiúscula.
    public $nome; // Atributo (public) = é a característica desses objetos.
    public $idade;

    public function Falar(){ // Método (public function Métodar(){ }) = é a ação desses objetos.
        echo $this->nome." de ".$this->idade." Falou <br>"; // $this->variável = chamar a variável depois de instanciada pela classe.
    }

    public function Andar(){
        echo "Andou", "<br>";
    }
}

$isaac = new Pessoa(); // new ExampleClass(); = Instanciar uma classe.
$isaac->nome = 'Isaac Alves Pinheiro';
$isaac->idade = '20 anos';
$isaac->Falar(); // arrow function sem precisar do $ da função.
$isaac->Andar();
var_dump($isaac);
