<?php
namespace Controller;

class UsuarioController{

	public function login($array){
		$model = new \Model\usuarioModel();
		$r = $model->check($array);
		
		if ($r == false){
			echo "login incorreto";
		}else{
			
			return true;
		}
	}
}