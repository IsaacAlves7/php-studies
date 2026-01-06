<?php
//Criptography
$senha = "123456";

//base64 criptography
$novasenha = base64_encode($senha);
echo "base64: ".$novasenha."<br>";
echo "Sua senha é:". base64_decode($novasenha);

echo "<hr>";

//md5 criptography
echo "md5: ".md5($senha);

echo "<hr>";

//char1
echo "sha1 ".sha1($senha);
?>