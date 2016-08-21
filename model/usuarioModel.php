<?php
namespace Model;
use PDO;
class usuarioModel extends Database{
	
	private $idUsuario;
	private $email;
	private $senha;
	private $nome;
	private $sobrenome;
	private $telefone;
	private $creci; 
	private $ativo;

	public function getIdUsuario(){
		return $this->idUsuario;
	}
	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}	
	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getSobrenome(){
		return $this->sobrenome;
	}

	public function setSobrenome($sobrenome){
		$this->sobrenome = $sobrenome;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function getAtivo(){
		return $this->ativo;
	}
	public function setAtivo($ativo){
		$this->ativo = $ativo;
	}

	public function check($array){
		//Sql para checar o usuario
		$sql = "SELECT * FROM usuario where email='".$array['email']."' and senha='".$array['senha']."'";
		$response = Database::getInstance()->query($sql);
		$response = $response->fetch(PDO::FETCH_ASSOC);
		if(empty($response)){
			return false;
		}else{
			session_start();
			$_SESSION['nome'] = $response['nome'];
			$_SESSION['sobrenome'] = $response['sobrenome'];
			$_SESSION['email'] = $response['email'];
		
			
			return $response;
		}

	}
}