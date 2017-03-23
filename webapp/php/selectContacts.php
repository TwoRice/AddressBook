<?php
	require_once 'sqlConnection.php';
	
	$ps = $connection->prepare('SELECT ID, name FROM Contact');
	$ps->execute();
	$contacts = $ps->fetchAll();
?>