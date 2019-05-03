<?php 

session_start();

date_default_timezone_set('America/Sao_Paulo');

$_POST['nome'];
$_POST['email'];
$_POST['senha'];
$_POST['status'];
$data = date('Y-m-d H:i:s');

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
	echo 'deu certo!';
} else {
	echo 'houve um erro!';
}