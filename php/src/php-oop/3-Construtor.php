<?php

class Login {
    public $email; // private $atributo = atributo privado da classe.
    public $senha; // public $atributo = atributo público da classe.
    private $nome;

    public function __construct($email, $senha, $nome)
    {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e) {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($s) {
        $this->senha = $s;
    }


    public function Logar(){ 
        // teste@teste.com dentro do database
        if($this->email == "teste@teste.com" and $this->senha == "1234567"):
            echo "Logado com sucesso";
        else:
            echo "Dados inválidos";
        endif;
    }
}

$logado = new Login("teste@teste.com","1234567","Isaac Alves"); // inicia o constutor
$logado->setEmail("teste@teste.com");
$logado->setSenha("1234567");
$logado->Logar();
echo "<br>";
echo $logado->getNome();