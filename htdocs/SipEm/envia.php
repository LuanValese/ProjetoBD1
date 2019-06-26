<?php
include_once("config/config.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$mensalidade = $_POST['mensalidade'];

if(isset($id) && $id != NULL) {
    $stmt = $pdo->prepare('UPDATE alunos SET nome=:nome, cpf=:cpf, telefone=:telefone, mensalidade=:mensalidade WHERE id=:id');
    $stmt->bindValue(":id", $id);
} else {
    $stmt = $pdo->prepare('INSERT INTO alunos (nome, cpf, telefone, mensalidade) VALUES(:nome, :cpf, :telefone, :mensalidade)');
}

$stmt->bindValue(":nome", $nome);
$stmt->bindValue(":cpf", $cpf);
$stmt->bindValue(":telefone", $telefone);
$stmt->bindValue(":mensalidade", $mensalidade);

try
{
    $stmt->execute();
    header("Location: index.php");
}
catch (Exception $e)
{
	echo 'Error: ' . $e->getMessage();
}