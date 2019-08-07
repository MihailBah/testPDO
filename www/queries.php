<?php

const SQL_INSERT_PERSON = '
	INSERT INTO person (name, year) VALUES (:name, :year)
';


const SQL_GET_PERSONS = '
	SELECT * FROM person ORDER BY id DESC
';


const SQL_DELETE_PERSON = '
	DELETE FROM person WHERE id = ?
'
?>
