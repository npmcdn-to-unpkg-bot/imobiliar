<?php
namespace Controller;
use Slim\Views\PhpRenderer;
use \Model\Utils;

class UsuarioController{
	public $model;
	public $app;
	/*
	*	Metodo para login
	*/
	public function login($array){
		$model = new \Model\usuarioModel();
		$r = $model->checkLogin($array);
		
		if ($r == false){
			echo "login incorreto";
		}else{
			
			return true;
		}
	}
	/*
	*	Metodo para recuperação de senha
	*/
	public function forgotPassword($email){
		$model = new \Model\usuarioModel();
		$model->forgotPass($email);
	}
	/*
	*	Metodo para insersão de usuario
	*	@param é um array com as informações que serão adicionadas no banco
	*	@return true ou false
	*/
	public function insertUser($array){
		$createdAt = $_SERVER['REQUEST_TIME'];
		$util = new Utils();
		$util->changeIndex($array, "0", 'createdAt');
		$model = new \Model\UsuarioModel();
		 return $model->insert("usuario",$array);

	}
}