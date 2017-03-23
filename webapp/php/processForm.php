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
		$value = explode(",", $_POST['viewPeople']);
		$orgID = $value[1];
		header('Location: ../index.php?table=people&orgID='.$orgID);
	}
	else if(isset($_POST['delete'])){
		$value = explode(",", $_POST['delete']);
		if(strcmp($value[0], "org") == 0){
			$orgID = $value[1];
			require 'deleteOrganisation.php';
			header('Location: ../index.php?table=org');
		}
		else{
			$contactID = $value[1];
			require 'deleteContact.php';
			header('Location: ../index.php?table=people');
		}
	}
	else if(isset($_POST['addNew'])){
		$value = $_POST['addNew'];
		$_SESSION['type'] = $value;
		$_SESSION['result'] = null;
		header('Location: ../edit.php');
	}	

?>