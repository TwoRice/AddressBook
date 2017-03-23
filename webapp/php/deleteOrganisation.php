<?php
	require_once 'sqlConnection.php';

	$ps = $connection->prepare('DELETE FROM Organisation WHERE ID = ?');
	$ps->execute(array($orgID));
?>