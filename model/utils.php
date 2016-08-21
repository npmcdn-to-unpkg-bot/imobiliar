<?php
namespace Model;

class Utils{
	protected static $instance;
	
	public function __construct(){

	}
	/*
	*	Classe segue o padrão Singleton
	*/
	public static function getInstance(){
		if (!isset(self::$instance)){
			self::$instance = new Utils();
		}
		return self::$instance;
	}
	/*
	*	Função para separar os campos key e value de um vetor
	*	OBS: o campo key tem que ser igual ao campo do Banco.
	*	@param Array com as informações que serão separadas
	*	@return array com as informações $retorno['key'] é chave,
	*	$retorno['value'] é o valor desta chave;
	*/
	public function makeSql($array){
		$size = count($array);
		$chave = "("; // irá receber o campo
		$valor = "("; // irá receber o valor do campo
		foreach ($array as $key => $value) {
			if(next($array)){
				$chave 	.= $key.", "; 
				$valor	.= "'".$value."', ";
			}else{
				$chave	.= $key.") "; 
				$valor	.= "'".$value."') ";
			}
		}
		$retorno = ["key" 	=> $chave,
					"value" => $valor ];
		return $retorno;
	}
	
	

}