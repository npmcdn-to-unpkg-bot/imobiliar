<?php
use Slim\Views\PhpRenderer;
require_once "vendor/autoload.php";

$app = new Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);
/*
*	Index da aplicação Painel que ira redirecionar diretamente para 
*	tela de login; 
*/
$app->group('/painel', function() use ($app) {
	/*
	*	Index (Tela de Login)
	*/
	$app->get('', function($request,$response) use ($app){

		// Renderiza a tela de login
		$phpView = new PhpRenderer("view/painel/");
		return $phpView->render($response,"index.php");
	});
	/*
	*	Recebe uma requisição $_POST para fazer login do usuario
	*/
	$app->post('/home', function($resquest,$response) use ($app){

		$controller = new Controller\UsuarioController();
		$r = $controller->login($_POST);
		if ($r){
			//renderiza
			$phpView = new PhpRenderer("view/painel/");
			return $phpView->render($response,"home.php");
		}
	});
	/*
	*
	*/
});	
$app->get('/teste', function($request,$response){
	/*$phpView = new PhpRenderer("view/painel/");
	return $phpView->render($response,"teste.php");
	*/
	// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: guilhermebritto.prof@gmail.com\r\n"; // remetente
$headers .= "Return-Path: eu@seudominio.com\r\n"; // return-path
$envio = mail("guilherme.brito@linkfort.com.br", "Email teste", "BLA BLA", $headers);
 
if($envio)
 echo "Mensagem enviada com sucesso";
else
 echo "A mensagem não pode ser enviada";
});

$app->post('/teste', function(){
	$controller = new \Controller\UsuarioController();
	$controller->forgotPassword($_POST);
});
$app->run();
