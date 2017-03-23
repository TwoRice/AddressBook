<?php	
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	$connection = new PDO('sqlite:'.$root.'/db/AddressBook.db') or die("connection to database failed");
?>