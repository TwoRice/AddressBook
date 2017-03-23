<?php
	require_once 'sqlConnection.php';
	
	$ps = $connection->prepare('SELECT ID, name FROM Contact');
	$ps->execute();
	$resultAll = $ps->fetchAll();
?>