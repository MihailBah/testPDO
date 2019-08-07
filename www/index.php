<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Persons</title>
  </head>
  <body>
	
	<div class='container'>
		<form action="/add.php" method="post">
		  <input type="text" name="name" id="name" placeholder="Enter your Name" class="form-control">
		  <input type="text" name="year" id="year" placeholder="Enter your birth year" class="form-control">
		  <button type="submit" name="sendPerson" class="btn btn-success">Send</button>
		</form>
		<?php

		require 'configDB.php';
		require 'queries.php';

		echo '<ul>';
		$query_persons = $pdo->prepare(SQL_GET_PERSONS);
		$query_persons->execute();

		while($row = $query_persons->fetch(PDO::FETCH_OBJ)) {
			echo '<li><b>'.$row->name.'-'.$row->year.'</b><a href="/delete.php?id='.$row->id.'"><button>Delete</button></a></li>';
		}
		echo '</ul>';
		?>
	</div>
  </body>
</html>


