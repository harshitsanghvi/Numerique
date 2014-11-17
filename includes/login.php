<?php
	// Connect to the Database
    include_once('DBConnection.php');
	
	// Get the user posted data
    $username = mysql_real_escape_string($_POST["username"]);
    $password = mysql_real_escape_string($_POST["password"]);

	// Get the user IP Address
	$ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
	
	// Form data error handling: the if condition
	if($username == "" || $password == "")
	{
		echo 'Please fill both username and password!';
	}
	else{
		$sql = "select count(*) from logindetails where (username = '".$username."' AND password = 'md5(".$password.")')";
		$res = mysql_query($sql);

		if(!$res)
		{
			echo mysql_error();
		}

		$num_row = mysql_num_rows($res);
    }
	
    if($num_row > 0)
	{
		// @Harshit: Have to work on this for creating the user session
		$sql = "select fname, lname from user where username = '".$username."'";
		$res = mysql_query($sql);

		if(!$res)
		{
			echo mysql_error();
		}

		$row = mysql_fetch_row($res);

		$fname = $row[0];
		$lname = $row[1];
		session_start();
		$_SESSION["fname"] = $fname;
		$_SESSION["lname"] = $lname;
		$_SESSION["username"] = $username;
		
        echo 'Successful';
        echo mysql_error();	
	}
    else
	{
        echo 'failed';
	}
?>
