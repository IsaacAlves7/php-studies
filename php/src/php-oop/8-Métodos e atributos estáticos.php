<?php
// static não precisa mais instanciar a classe.
class Login {
    public static $user;

    public static function verificaLogin(){
        echo "O usuário está logado <br>".self::$user." está logado!"; // self para atributos estáticos
    }

    public function sairSistema() {
        echo "<br> O usuário deslogou";
    }
}

Login::$user = "admin";
Login::verificaLogin();
// Nem sempre funciona com o estático
$login = new Login();
$login->sairSistema();
