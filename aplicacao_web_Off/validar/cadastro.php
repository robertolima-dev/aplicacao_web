<?php 

session_start();

date_default_timezone_set('America/Sao_Paulo');

$_POST['nome'];
$_POST['email'];
$_POST['senha'];
$_POST['status'];
$data = date('Y-m-d H:i:s');

$autenticado = false;

include '../../../aplicacao_web_Off/conexao.php';

$query="
INSERT INTO 
tb_cadastro
(nome, email, senha, status, data) 
VALUES 
(:nome, :email, :senha, :status, :data)
";

$stmt = $conexao->prepare($query);

$stmt->bindValue(':nome', $_POST['nome'], PDO::PARAM_STR);
$stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$stmt->bindValue(':senha', md5($_POST['senha']), PDO::PARAM_STR);
$stmt->bindValue(':status', $_POST['status'], PDO::PARAM_INT);
$stmt->bindValue(':data', $data, PDO::PARAM_STR);

$stmt->execute();

$error = $stmt->errorInfo();

if($error[0] == 0) {

	$autenticado = true;
	
	$query_id="
	SELECT 
	*
	FROM 
	tb_cadastro
	ORDER BY id_usuario DESC LIMIT 1
	";

	$stmt = $conexao->query($query_id);
	$usuario = $stmt->FetchAll(PDO::FETCH_ASSOC);

	//print_r($usuario);
	//echo '<br />';

	$id_usuario = $usuario[0]['id_usuario'];
	$status_usuario = $usuario[0]['status'];

	//print_r($id_usuario);
	//echo '<br />';

	if($autenticado == true) {
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $id_usuario;
		$_SESSION['status'] = $status_usuario;

		/*
		echo '<pre>';
		print_r($_SESSION);
		echo '</pre>';
		*/

		header('location: ../../app/dashboard?cadastro=sucesso');

	} else {
		header('location: ../../cadastro?cadastro=erro');
	}
} else {
	header('location: ../../cadastro?cadastro=erro');
}