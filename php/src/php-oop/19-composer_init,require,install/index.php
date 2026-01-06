<?php
// composer init = inicializa 
// composer require <<pacote>> = instala um pacote
// composer update = atualiza o diretório e as mudanças feitas
// Para remover um pacote vá em composer.json e basta excluir o pacote na linha '"require":{}' e salve. Logo, é necessário ir no terminal e inserir o composer update para atualizar as alterações.
// composer install = instala as dependencias do pacote
// composer dump-autoload = gera os arquivos autoload

require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slug = new Slugify();
$slug->addRule('Olá', 'Hello');
$slug->addRule(',', '');
$slug->addRule('!', '');
$slug->addRule('mundo', 'world');
echo $slug->slugify('Olá, mundo!', ' ');
echo "<center><h1>Composer init e Require</h1></center>".'<br><center><a href="https://youtu.be/aANESnxLUK0" target="_blank">Link da Aula</a><br><img src="https://cdn.freebiesupply.com/logos/large/2x/composer-logo-png-transparent.png" width="200"/></center>';