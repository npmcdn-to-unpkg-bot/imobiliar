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
	*	Recebe uma requisição $_POST para fazer login do usuario
	*/
	$app->post('', function($resquest,$response) use ($app){

		$controller = new Controller\UsuarioController();
		$r = $controller->login($_POST);
		if ($r){
			//renderiza
			$phpView = new PhpRenderer("view/painel/");
			return $phpView->render($response,"home.php");
		}
	});

	/*
	*	Rota para cadastro de novo usuario
	*/
	$app->post('/newconta', function() use ($app){
		$controller = new Controller\UsuarioController();
		$r = $controller->insertUser($_POST);
		if ($r){
			echo "cadastro efetuado com sucesso!";
		}else{
			echo "deu bosta";
		}
	});
	$app->get('/home',function($request, $response){
		$phpView = new PhpRenderer("view/painel/");
		return $phpView->render($response,"home.php");
	});
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