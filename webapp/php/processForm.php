<?php

	session_start();
	
	if(isset($_POST['viewDetails'])){
		$value = explode(",", $_POST['viewDetails']);
		if(strcmp($value[0], "org") == 0){
			$orgID = $value[1];
			require 'selectOrgByID.php';
			$_SESSION['result'] = $resultByID;
			$_SESSION['type'] = $value[0];			
		}
		else{
			$contactID = $value[1];
			require 'selectContactByID.php';
			$_SESSION['result'] = $resultByID;
			$_SESSION['type'] = $value[0];
			
		}
		header('Location: ../edit.php');
	}
	else if(isset($_POST['viewPeople'])){

	}
	else if(isset($_POST['delete'])){
		$value = explode(",", $_POST['viewDetails']);
	}
	else if(isset($_POST['addNew'])){
		$value = $_POST['addNew'];
		$_SESSION['type'] = $value;
		$_SESSION['result'] = null;
		header('Location: ../edit.php');
	}	

?>