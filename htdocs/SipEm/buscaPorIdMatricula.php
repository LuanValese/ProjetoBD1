<?php
include_once("config/config.php");

if (isset($_GET['cpf'])) {
    $cpf = $_GET['cpf'];
}
$busca = $pdo->prepare("SELECT id, cpf, curso, preco FROM matricula WHERE cpf=:cpf");
$busca->bindValue(":cpf", $cpf);

try
{
    $busca->execute();

    while ($linha = $busca->fetch(PDO::FETCH_ASSOC)) {
        $idMatricula = $linha['id'];
        $cpf = $linha['cpf'];
        $curso = $linha['curso'];
        $preco = $linha['preco'];
    }
}
catch (Exception $e)
{
    echo 'Error: ' . $e->getMessage();
}