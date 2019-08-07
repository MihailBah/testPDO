<?php

require 'queries.php';
require 'configDB.php';

$name = $_POST['name'];
$year = $_POST['year'];
if($name == '') {
	echo "Enter your name";
	exit();
}

$res = $pdo->prepare(SQL_INSERT_PERSON);
$res->execute(['name' => $name, 'year' => $year]);

header('Location: /');
?>
