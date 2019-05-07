<?php

include '../../aplicacao_web_Off/conexao.php';

$query="
SELECT 
*
FROM 
tb_cadastro
";

$stmt = $conexao->query($query);
$usuarios = $stmt->FetchAll(PDO::FETCH_ASSOC);