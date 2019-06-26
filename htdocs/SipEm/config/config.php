<?php

$config['db_host'] = "localhost";
$config['db_port'] = "";
$config['db_user'] = "admin";
$config['db_pass'] = "";
$config['db_name'] = "bd1";
try
{
  $pdo = new PDO('mysql:dbname=bd1;host=localhost', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
  echo 'Error: ' . $e->getMessage();
}

?>