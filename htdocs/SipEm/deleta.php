<?php
include("config/config.php");
$id = $_GET['id'];
$stmt = $pdo->prepare('DELETE FROM alunos WHERE id = :id');
$stmt->bindValue(':id', $id);

try
{
    $stmt->execute();
    header("Location: index.php");
}
catch (Exception $e)
{
    echo 'Error: ' . $e->getMessage();
}