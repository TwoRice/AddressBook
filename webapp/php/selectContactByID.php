<?php
	require_once 'sqlConnection.php';

	$ps = $connection->prepare('SELECT * FROM Contact WHERE ID = ?');
	$ps->execute(array($contactID));
	$result = $ps->fetchAll();
?>