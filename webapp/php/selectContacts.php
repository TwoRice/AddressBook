<?php
	$ps = $connection->prepare('SELECT ID, name FROM Contact');
	$ps->execute();
	$result = $ps->fetchAll();
?>