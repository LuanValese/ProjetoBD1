<?php
include_once("config/config.php");

$id = $_POST['id'];
$curso = $_POST['curso'];
$precoatual = $_POST['precoatual'];

if(isset($id) && $id != NULL) {
    $stmt = $pdo->prepare('UPDATE modalidade SET curso=:curso, precoatual=:precoatual WHERE id=:id');
    $stmt->bindValue(":id", $id);
} else {
    $stmt = $pdo->prepare('INSERT INTO modalidade (curso, precoatual) VALUES(:curso, :precoatual)');
}

$stmt->bindValue(":curso", $curso);
$stmt->bindValue(":precoatual", $precoatual);


try
{
    $stmt->execute();
    header("Location: indexM.php");
}
catch (Exception $e)
{
	echo 'Error: ' . $e->getMessage();
}