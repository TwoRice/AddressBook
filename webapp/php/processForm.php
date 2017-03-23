<?php

	session_start();
	
	if(isset($_POST['viewDetails'])){
		$value = explode(",", $_POST['viewDetails']);
		if(strcmp($value[0], "org") == 0){
			$orgID = $value[1];
			require 'selectOrgByID.php';			
		}
		else{
			echo "Hello";
			$contactID = $value[1];
			require 'selectContactByID.php';
			
		}
		$_SESSION['result'] = $result;
		header('Location: ../edit.php');
	}
	else if(isset($_POST['viewPeople'])){

	}
	else if(isset($_POST['delete'])){
		$value = explode(",", $_POST['viewDetails']);
	}	

?>