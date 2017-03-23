<?php

	if(isset($_POST['save'])){
		$value = explode(",", $_POST['save']);
		$name = $_POST['name'];
		$add1 = $_POST['address1'];
		$add2 = $_POST['address2'];
		$city = $_POST['city'];
		$county = $_POST['county'];
		$postcode = $_POST['postcode'];
		$email = $_POST['email'];
		if(strcmp($value[1], "org"){
			$phone = $_POST['phone'];
			if(strcmp($value[0], "add")){
				require 'insertOrganisation.php';
			}
			else{
				require 'updateOrganisation.php';
			}
		}
		else{
			$phone = $_POST['mobile'];
			$home = $_POST['home'];
			$work = $_POST['work'];
			$orgID = $_POST['organisation'];
			if(strcmp($value[0], "add")){
				require 'insertContact.php';
			}
			else{
				require 'updateContact.php';	
			}
		}
	}

?>