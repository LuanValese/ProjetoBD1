<?php

$busca = $pdo->prepare("SELECT id, nome, cpf, modalidade, mensalidade FROM matricula");

try
{
	$busca->execute();
}
catch (Exception $e)
{
	echo 'Error: ' . $e->getMessage();
}

?>