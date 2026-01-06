<?php
// Secure password
echo "<h1>Senha segura com password hash</h1>";
$senha = "123456";
$senha_db = '$2y$10$EbhJ1aKYSTJMHaraRJcnV.UtC8jQhgnXeWSNiECKkPBpJ13v9iGwm'; // hash precisa conter aspas simples na variável

$options = [
    'cost' => 10, // Quanto maior o valor, requer mais custo de hardware, 10 é o valor padrão
];

if(password_verify($senha, $senha_db)):
    echo "Senha válida"."<br>";
else:
    echo "Senha inválida"."<br>";
endif;

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo $senhaSegura."<br>";

?>