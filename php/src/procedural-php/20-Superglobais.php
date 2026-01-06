<?php
// Superglobais são utilizadas em qualquer parte do código
/*
$GLOBALS - Usada para acessar variáveis globais de qualquer lugar script php. Ela armazena todas as variáveis globais em um array;
$_SERVER - Contém informações sobre cabeçalho, caminho e script. Server para processar a página php no mesmo html enviado;
$_REQUEST -
$_POST - 
$_GET - envia os dados via URL
$_FILES - 
$_ENV -
$_COOKIE -
$_SESSION -
*/

$x = 10;
$y = 15;

function soma(){
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();

echo "<hr>";

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>"; // porta do servidor web
echo $_SERVER['REMOTE_ADDR']."<br>"; //retorna o endereço IP que o usuário está vizualisando a página

echo "<hr>";


?>