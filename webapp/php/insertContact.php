<?php
	require_once 'sqlConnection.php';

	$ps = $connection->prepare("INSERT INTO Organisation (name, address1, address2, city, county, postcode, email ,mobile, home, work, orginsationID) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
	$result = $ps->execute(array($name, $add1, $add2, $city, $county, $postcode, $email, $mobile, $home, $work, $orgID));
	print_r($ps->errorInfo());
?>