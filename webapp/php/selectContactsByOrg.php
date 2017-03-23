<?php
	$ps = $connection->prepare('SELECT * FROM Contact WHERE organisationID = ?');
	$ps->execute();
	$result = $ps->fetchAll();
?>