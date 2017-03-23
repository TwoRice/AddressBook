<?php
	require_once 'sqlConnection.php';

	$ps = $connection->prepare('SELECT * FROM Contact WHERE organisationID = ?');
	$ps->execute(array($orgID));
	$resultAll = $ps->fetchAll();
?>