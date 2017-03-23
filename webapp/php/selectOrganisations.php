<?php
	$ps = $connection->prepare('SELECT ID, name FROM Organisation');
	$ps->execute();
	$result = $ps->fetchAll();
?>