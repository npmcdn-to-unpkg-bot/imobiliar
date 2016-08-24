<?php
require_once "vendor/autoload.php";
$app = new Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);
//inclui os arquivos de rotas 
include "conf/route.php";
// executa a aplicação
$app->run();
