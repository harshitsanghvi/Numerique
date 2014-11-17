<?php
	session_start();
	
	// set session data to an empty array
	$_SESSION = array();
	
	// Destroy the session variables
	session_destroy();
	
	// Close Database connection
	include_once('closeDB.php');
	
	// Double check if the session still exists
	if(isset($_SESSION['username'])){
		echo "Logout Failed";
		//header("location: message.php");
	}
	else
		header("location: ../index.php");
	
?>