<?php

$busca = $pdo->prepare("SELECT id, curso, precoatual FROM modalidade");

try
{
	$busca->execute();
}
catch (Exception $e)
{
	echo 'Error: ' . $e->getMessage();
}

?>