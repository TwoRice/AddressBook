<?php
	require_once 'sqlConnection.php';

	$ps = $connection->prepare("UPDATE Organisation SET name=?, address1 = ?, address2=?, city=?, county=?, postcode=?, email=?, phone=? WHERE ID=?");
	$ps->execute(array($name, $add1, $add2, $city, $county, $postcode, $email, $phone, $ID));
	print_r($ps->errorInfo());
?>