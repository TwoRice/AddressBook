<?php
	require_once 'sqlConnection.php';

	$ps = $connection->prepare('SELECT ID, name FROM Organisation');
	$ps->execute();
	$organisations = $ps->fetchAll();
?>