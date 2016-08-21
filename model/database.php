<?php
namespace Model;
use PDO;


class Database{
	
	protected static $instance;
	public static $util;

	public function __construct(){
		
	}
	/*
	*	Methodo de conexão com banco de dados
	*	@return $conn (conexão com banco)
	*/
	  public static function getInstance() {
          if (!isset(self::$instance)) {
              self::$instance = new PDO("mysql:host=localhost; dbname=imobiliar", "root", "vertrigo", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
              self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
          }
   
          return self::$instance;
      }
	

   /*
	*	Metodo para inserção no banco de dados;
	*	@param String $tabela é a tabela que será inserida
	*	@param array $dados são os dados que serão processados e inseridos no banco 
	*	de dados, os campos recebidos tem que ser por padrão, $dados = ["campoDoBanco" => 'valorDoCampo']
	*	caso contrario não irá funcionar.
	*	@return boolean true ou false
   */
	public function insert($tabela,$dados){
		self::$util =  Utils::getInstance();
		$array = self::$util->makeSql($dados);
		$sql = "INSERT INTO ".$tabela." ".$array['key']." values ".$array['value']."";
		return $this->getInstance()->prepare($sql)->execute();
	}
	public function update(){

	}
	public function delete(){

	}
	/*
	*	Metodo para select no banco
	*	@param $tabela é a tabela que será executado o select
	*	@return retorna um array (PDOStatemente) com o retorno do banco
	*/
	public function listAll($tabela){
		$sql = "SELECT * FROM ".$tabela."";
		return $this->getInstance()->query($sql);
	}
}