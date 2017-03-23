<?php

	error_reporting( E_ALL );
	if(isset($_POST['save'])){
		$value = explode(",", $_POST['save']);
		$name = $_POST['name'];
		$add1 = $_POST['address1'];
		$add2 = $_POST['address2'];
		$city = $_POST['city'];
		$county = $_POST['county'];
		$postcode = $_POST['postcode'];
		$email = $_POST['email'];
		if(strcmp($value[1], "org") == 0){
			$phone = $_POST['phone'];
			if(strcmp($value[0], "add") == 0){
				require 'insertOrganisation.php';
			}
			else{
				$ID = $value[2];
				require 'updateOrganisation.php';
			}
		}
		else{
			$mobile = $_POST['mobile'];
			$home = $_POST['home'];
			$work = $_POST['work'];
			$orgID = $_POST['organisation'];
			if(strcmp($value[0], "add")){
				require 'insertContact.php';
			}
			else{
				$ID = $value[2];
				require 'updateContact.php';	
			}
		}

		//header("Location: ../edit.php");
	}

?>