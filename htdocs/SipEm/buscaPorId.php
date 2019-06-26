<?php
include_once("config/config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$busca = $pdo->prepare("SELECT id, nome, cpf, telefone, mensalidade FROM alunos WHERE id=:id");
$busca->bindValue(":id", $id);

try
{
    $busca->execute();

    while ($linha = $busca->fetch(PDO::FETCH_ASSOC)) {
        $id = $linha['id'];
        $nome = $linha['nome'];
        $cpf = $linha['cpf'];
        $mensalidade = $linha['mensalidade'];
        $telefone = $linha['telefone'];
    }
}
catch (Exception $e)
{
    echo 'Error: ' . $e->getMessage();
}