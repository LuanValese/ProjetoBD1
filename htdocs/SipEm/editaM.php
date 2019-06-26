<?php

include("config/config.php");
$id = $_GET['id'];
$stmt = $pdo->prepare(' FROM matricula WHERE id = :id');
$stmt->bindValue(':id', $id);