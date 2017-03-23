<?php
	require_once 'sqlConnection.php';

	$ps = $connection->prepare('DELETE FROM Contact WHERE ID = ?');
	$ps->execute(array($contactID));
?>