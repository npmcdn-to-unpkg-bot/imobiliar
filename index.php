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
$app->get('/teste', function(){
	$model = new \Model\Database();
	$data = [
	'email' => 'adnilton@linkfort.com.br',
	'senha'	=>	'123',
	'nome'	=>	'adnilton',
	'sobrenome'	=>	'Silva',

	];

	 $model->insert("usuario", $data);
});
$app->run();
