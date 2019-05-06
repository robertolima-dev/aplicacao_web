<?php

session_start();

/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/

$_POST['email'];
$_POST['senha'];

$autenticado = false;

include '../../../aplicacao_web_Off/conexao.php';

$query="
SELECT 
*
FROM 
tb_cadastro
";

$stmt = $conexao->query($query);
$usuarios = $stmt->FetchAll(PDO::FETCH_ASSOC);

/*
echo '<pre>';
print_r($usuarios);
echo '</pre>';
*/

foreach($usuarios as $usuario) {
	if($usuario['email'] == $_POST['email'] && $usuario['senha'] == md5($_POST['senha'])) {

		$autenticado = true;

		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario['id_usuario'];
		$_SESSION['status'] = $usuario['status'];

	} 
}

if($autenticado == true) {
	header('location: ../../app/dashboard?login=sucesso');
} else {
	header('location: ../../login?login=erro');
}