<?php
include_once("config/config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$busca = $pdo->prepare("SELECT id, nome, cpf, modalidade, mensalidade FROM matricula WHERE id=:id");
$busca->bindValue(":id", $id);

try
{
    $busca->execute();

    while ($linha = $busca->fetch(PDO::FETCH_ASSOC)) {
        $id = $linha['id'];
        $nome = $linha['nome'];
        $cpf = $linha['cpf'];
        $modalidade = $linha['modalidade'];
        $mensalidade = $linha['mensalidade'];
    }
}
catch (Exception $e)
{
    echo 'Error: ' . $e->getMessage();
}