<?php

$busca = $pdo->prepare("SELECT id, cpf, curso, preco FROM matricula WHERE cpf = :cpf");
$busca->bindValue(":cpf", $cpf);


try
{
	$busca->execute();
}
catch (Exception $e)
{
	echo 'Error: ' . $e->getMessage();
}

?>