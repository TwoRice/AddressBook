<?php
	require_once 'sqlConnection.php';

	$ps = $connection->prepare("INSERT INTO Organisation (name, address1, address2, city, county, postcode, email ,phone) VALUES(?,?,?,?,?,?,?,?)");
	$ps->execute(array($name, $add1, $add2, $city, $county, $postcode, $email, $phone));
	print_r($ps->errorInfo());
?>