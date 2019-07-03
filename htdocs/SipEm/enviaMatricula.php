<?php
include_once("config/config.php");

if (isset($_POST['id']) && $_POST['id'] != null){
    $idMatricula = $_POST['id'];
}

$cpf = $_POST['cpf'];
$curso = $_POST['curso'];
$preco = $_POST['preco'];

if(isset($idMatricula) && $idMatricula != NULL) {
    $stmt = $pdo->prepare('UPDATE matricula SET curso=:curso, preco=:preco WHERE id=:id');
    $stmt->bindValue(":id", $idMatricula);
}else {
    $stmt = $pdo->prepare('INSERT INTO matricula (cpf, curso, preco) VALUES(:cpf, :curso, :preco)');
    $stmt->bindValue(":cpf", $cpf);
}

$stmt->bindValue(":curso", $curso);
$stmt->bindValue(":preco", $preco);

try
{
    $stmt->execute();

    $buscaMensalidade = $pdo->prepare("SELECT SUM(preco) as precoTotal, cpf FROM matricula WHERE cpf=:cpf");
    $buscaMensalidade->bindValue(":cpf", $cpf);
    $buscaMensalidade->execute();
    $linhaMensalidade = $buscaMensalidade->fetch(PDO::FETCH_ASSOC);

    $updateMensalidade = $pdo->prepare("UPDATE alunos SET mensalidade = :mensalidade WHERE cpf = :cpf");
    $updateMensalidade->bindValue(":cpf", $cpf);
    $updateMensalidade->bindValue(":mensalidade", $linhaMensalidade['precoTotal']);
    $updateMensalidade->execute();

    header("Location: index.php");
}
catch (Exception $e)
{
	echo 'Error: ' . $e->getMessage();
}