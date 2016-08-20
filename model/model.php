<?php
namespace Model;

class Model{
	$hostname	=	'localhost';
 	$user		=	'root';
	$password	=	'vertrigo';
	$db			=	'imobiliar';

	/*
	*	Methodo de conexão com banco de dados
	*	@return $conn (conexão com banco)
	*/
	public function connection(){
		try {
			$conn = new PDO('mysql:host='.$hostname.';dbname='.$db.'', $username, $password);
		} catch(PDOException $e) {
	    	echo 'ERROR: ' . $e->getMessage();
		}
		return $conn;
	}

	public function insert(){

	}
	public function select($array){
		$sql = "SELECT * FROM "
		$conn = $this->connection();
		$data = $conn->query('')

	}
	public function update(){

	}
	public function delete(){

	}
	public function listAll(){

	}
}