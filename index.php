<?php
use Slim\Views\PhpRenderer;
require_once "vendor/autoload.php";

$app = new Slim\App();
/*
*	Index da aplicação Painel que ira redirecionar diretamente para 
*	tela de login; 
*/
$app->group('/painel', function() use ($app) {
	/*
	*	Index (Tela de Login)
	*/
	$app->get('', function($request,$response) use ($app){

		// Renderiza a View
		$phpView = new PhpRenderer("view/painel/");
		return $phpView->render($response,"index.php");
	});
	/*
	*	Recebe uma requisição $_POST para fazer login do usuario
	*/
	$app->post('', function() use ($app){	
	});
});	
$app->run();
