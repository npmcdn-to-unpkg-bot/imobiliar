<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require_once "vendor/autoload.php";

$app = new Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);


$container  = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer("view/painel/");

//inclui os arquivos de rotas 
include "conf/route.php";

// executa a aplicação
$app->run();
