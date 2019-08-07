<?php
require 'configDB.php';
require 'queries.php';

$id = $_GET['id'];

$sql = $pdo->prepare(SQL_DELETE_PERSON);
$sql->execute([$id]);

header("Location: /");

?>
