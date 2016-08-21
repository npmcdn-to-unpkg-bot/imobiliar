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
	private $createAt;
	private $updatedAt;


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
	public function setCreatedAt(){
		return $this->createdAt;
	}
	public function getCreatedAt($createdAt){
		$this->createdAt = $createdAt;
	}

	/*
	*	Metodo verifica se o usuario existe, se existir ele retorna o array contendo 
	*	as informações que retornaram do banco, se não existir retorna false
	*	@param array('email', 'senha');
	*/
	public function checkLogin($array){
		$sql= "SELECT * FROM usuario WHERE email=:email AND senha=:senha";
		$conn = self::getInstance()->prepare($sql);
		$conn->bindValue(":email", $array['email']);
		$conn->bindValue(":senha", $array['senha']);
		$conn->execute();
		$r = $conn->fetch(PDO::FETCH_OBJ);
		//Se $r for vazio, logo, não há registros no banco então a informação não existe
		if(empty($r)){
			return false;
		}else{
			session_start();
			$_SESSION['nome'] = $r->nome;
			$_SESSION['sobrenome'] = $r->sobrenome;
			$_SESSION['email'] = $r->email;
			return $r;
		}
	}
	/*
	*	Metodo para recuperação de Senha
	*/
	public function forgotPass($email){
		//verifica se o email existe no banco
		$data = $this->listAll("usuario");
		while ($linha = $data->fetch(PDO::FETCH_OBJ)) {
		    var_dump($linha->email);
		}

	}

}