<?php
	require_once 'sqlConnection.php';

	$ps = $connection->prepare("UPDATE Contact SET name=?, address1 = ?, address2=?, city=?, county=?, postcode=?, email=?, mobile=?, home=?, work=? WHERE ID=?");
	$ps->execute(array($name, $add1, $add2, $city, $county, $postcode, $email, $mobile, $home, $work, $ID));
	print_r($ps->errorInfo());
?>