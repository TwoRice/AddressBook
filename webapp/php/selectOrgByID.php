<?php
	require_once 'sqlConnection.php';

	$ps = $connection->prepare('SELECT * FROM Organisation WHERE ID = ?');
	$ps->execute(array($orgID));
	$resultByID = $ps->fetchAll();
?>