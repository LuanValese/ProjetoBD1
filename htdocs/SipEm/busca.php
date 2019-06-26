<?php

$busca = $pdo->prepare("SELECT id, nome, cpf, telefone, mensalidade FROM alunos");

try
{
	$busca->execute();
}
catch (Exception $e)
{
	echo 'Error: ' . $e->getMessage();
}

?>