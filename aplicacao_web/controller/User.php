<?php

if(!isset($_SESSION)) {
	include '../../aplicacao_web_Off/validador.php';
}

include '../../aplicacao_web_Off/consultar/usuarios.php';

class User 
{
	public $id_usuario = null;
	public $nome = null;
	public $email = null;
	public $status = null;
	public $perfil = null;
	public $data = null;

	function __set($attribute, $value) {
		$this->$attribute = $value;
	}

	function __get($attribute) {
		return $this->$attribute;
	}
}

$user = new User();

foreach($usuarios as $usuario) {
	if($usuario['id_usuario'] == $_SESSION['id']) {

		$user->__set('id_usuario', $usuario['id_usuario']);
		$user->__set('nome', $usuario['nome']);
		$user->__set('email', $usuario['email']);
		$user->__set('status', $usuario['status']);
		$user->__set('perfil', $usuario['perfil']);
		$user->__set('data', $usuario['data']);

	}
}