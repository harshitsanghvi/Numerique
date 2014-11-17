<?php
session_start();
	// Connect to the Database
    include_once('DBConnection.php');
	
	$log_fname = "";
	$log_lname = "";
	$log_userok = false;
	
	// user verify function
	function checkUser($fname, $lname){
		$sql = "select count(*) from user where (fname = '".$fname."' AND lname = '".$lname."')";
		$res = mysql_query($sql);
		
		if($res == FALSE) {
    		die(mysql_error()); // TODO: better error handling
			exit();
		}
		
		$row = mysql_fetch_row($res);
		
		if($row[0] > 0){
			return true;
		}
	}
	
	if(isset($_SESSION["fname"]) && isset($_SESSION["lname"])){
		$log_fname = preg_replace('#[^a-z]#i', '', $_SESSION['fname']);
		$log_lname = preg_replace('#[^a-z]#i', '', $_SESSION['lname']);
		// verify the user
		$log_userok = checkuser($log_fname, $log_lname);
	}
?>