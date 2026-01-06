<?php
/*
Métodos Mágicos

clone* 
construct*
invoke
tostring
get*
set*
*/

class Pessoa{
    private $dados = array();

    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }

    public function __get($nome){
        return $this->dados[$nome];
    }

    public function __tostring()
    {
        return "Tentei imprimir o objeto";
    }

    public function __invoke() {
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
// $pessoa->nome = "Isaac";
// $pessoa->idade = "20 anos";
// $pessoa->cordepele = "moreno escuro";
// $pessoa->sexo = "masculino";
// $pessoa->país = "Brasil";

// echo $pessoa->nome."<br>";
// echo $pessoa->idade."<br>";
// echo $pessoa->cordepele."<br>";
// echo $pessoa->sexo."<br>";
// echo $pessoa->país."<br>";

echo $pessoa();