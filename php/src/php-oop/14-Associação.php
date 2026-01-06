<?php
// Associação
// Acontece quando um objeto "utiliza" outro, porém, sem eles dependam um do outro.

class Pedido {
    public $numero;
    public $cliente;
}

class Cliente {
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Isaac Alves Pinheiro";
$cliente->endereco = "Rua Oslo 238 fundos, Vigário Geral, RJ";

$pedido = new Pedido();
$pedido->numero = "127";
$pedido->cliente = $cliente;

$dados = array (
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'numero' => $pedido->cliente->endereco
);

var_dump($dados);