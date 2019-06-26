<?php
include_once("config/config.php");

$idM = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$modalidade = $_POST['modalidade'];
$mensalidade = $_POST['mensalidade'];

if(isset($idM) && $idM != NULL) {
    $stmt = $pdo->prepare('UPDATE matricula SET nome=:nome, cpf=:cpf, modalidade=:modalidade, mensalidade=:mensalidade WHERE id=:id');
    $stmt->bindValue(":id", $idM);
} else {
    $stmt = $pdo->prepare('INSERT INTO matricula (nome, cpf, modalidade, mensalidade) VALUES(:nome, :cpf, :modalidade, :mensalidade)');
}

$stmt->bindValue(":nome", $nome);
$stmt->bindValue(":cpf", $cpf);
$stmt->bindValue(":modalidade", $modalidade);
$stmt->bindValue(":mensalidade", $mensalidade);

try
{
    $stmt->execute();
    header("Location: indexM.php");
}
catch (Exception $e)
{
	echo 'Error: ' . $e->getMessage();
}