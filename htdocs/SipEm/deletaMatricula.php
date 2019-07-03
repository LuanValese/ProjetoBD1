<?php
include("config/config.php");

$idMatricula = $_GET['id'];
$idAluno = $_GET['idAluno'];

$stmt = $pdo->prepare('DELETE FROM matricula WHERE id = :id');
$stmt->bindValue(':id', $idMatricula);

try
{
    $stmt->execute();
    header("Location: matricula.php?id=$idAluno");
}
catch (Exception $e)
{
    echo 'Error: ' . $e->getMessage();
}