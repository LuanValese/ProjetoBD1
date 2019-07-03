<?php
include_once("config/config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$busca = $pdo->prepare("SELECT id, curso, precoatual FROM modalidade WHERE id=:id");
$busca->bindValue(":id", $id);

try
{
    $busca->execute();

    while ($linha = $busca->fetch(PDO::FETCH_ASSOC)) {
        $id = $linha['id'];
        $curso = $linha['curso'];
        $precoatual = $linha['precoatual'];
    }
}
catch (Exception $e)
{
    echo 'Error: ' . $e->getMessage();
}