<?php 
use Slim\Views\PhpRenderer;

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
	*
	*/
	$app->post('/home', function($request,$response) use ($app){
		$phpView = new PhpRenderer("view/painel/");
		return $phpView->render($response,"home.php");
	});
	/*
	*	Rota para cadastro de novo usuario
	*/
	$app->post('/usuario', new \Controller\UsuarioController());
});

/*
*	Rota criada para fins de teste do backend da aplicação
*/	
$app->get('/teste', function($response, $request) use ($app){
	$phpView = new PhpRenderer("view/painel/");
	return $phpView->render($response,"teste.php");
});
$app->post('/teste', function(){
	$controller = new \Controller\UsuarioController();
	$controller->forgotPassword($_POST);
});