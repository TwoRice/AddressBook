<?php	
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	$connection = new PDO('sqlite:'.$root.'/db/AddressBook.db') or die("connection to database failed");
	$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

	$ps = $connection->prepare('CREATE TABLE IF NOT EXISTS "Contact" ( `ID` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, `name` TEXT NOT NULL, `address1` TEXT, `address2` TEXT, `city` TEXT, `county` TEXT, `postcode` TEXT, `email` TEXT, `mobile` TEXT, `home` TEXT, `work` TEXT, `organisationID` INTEGER, FOREIGN KEY(`organisationID`) REFERENCES `Organisation`(`ID`) )');
	$ps->execute();
	$ps = $connection->prepare('CREATE TABLE IF NOT EXISTS Organisation ( ID INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, name TEXT NOT NULL, address1 TEXT, address2 TEXT, city TEXT, county TEXT, postcode TEXT, email TEXT, phone TEXT)');
	$ps->execute();
?>