<?php 

$controller = new Controller\UsuarioController();
/*
*	Index da aplicação Painel que ira redirecionar diretamente para 
*	tela de login; 
*/
$app->group('/painel', function() use ($app,$controller) {
	/*
	*	Index (Tela de Login)
	*/
	$app->get('', function( $request, $response) use ($app){
		// Renderiza a tela de login
		return $this->view->render($response, "index.php");
	});

	/*
	*	Recebe uma requisição $_POST para fazer login do usuario
	*/
	$app->post('/home', function($resquest,$response) use ($app,$controller){
		
		$r = $controller->login($_POST);
		if ($r){
			//renderiza
			return $this->view->render($response, "home.php");
		}
	});

	$app->get('/home', function($resquest,$response) use ($app){
			return $this->view->render($response, "home.php");
	});

	/*
	*	Rota para cadastro de novo usuario
	*/
	$app->post('/newconta', function() use ($app,$controller){
		var_dump($_POST);
		//$r = $controller->insertUser($_POST);
		if ($r){
			echo "cadastro efetuado com sucesso!";
		}else{
			echo "deu bosta";
		}
	});

});

/*
*	Rota criada para fins de teste do backend da aplicação
*/	
$app->get('/teste', function($request,$response){
	$phpView = new PhpRenderer("view/painel/");
	return $phpView->render($response,"teste.php");
});
$app->post('/teste', function(){
	$controller = new \Controller\UsuarioController();
	$controller->forgotPassword($_POST);
});