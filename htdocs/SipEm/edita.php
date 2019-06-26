<?php

include("config/config.php");
$id = $_GET['id'];
$stmt = $pdo->prepare(' FROM alunos WHERE id = :id');
$stmt->bindValue(':id', $id);