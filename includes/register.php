<?php
	// Connect to the Database
    include_once('DBConnection.php');
	
	// Get the user posted data
    $username = mysql_real_escape_string($_POST["username"]);
    $password = mysql_real_escape_string($_POST["password"]);

	// Get the user IP Address
	$ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
	
	// Encrypting the password
	$pass = MD5($password);

	// Form data error handling: the if condition
	if($username == "" || $password == "")
	{
		echo 'Please fill both username and password!';
	}
	else{
		$sql1 = "insert into logindetails (`username`, `password`) VALUES ('".$username."', '".$pass."')";
		$res1 = mysql_query($sql1);

		$sql2 = "insert into user (`username`) VALUES ('".$username."')";
		$res2 = mysql_query($sql2);

		$sql3 = "insert into userimage (`username`) VALUES ('".$username."');";
		$res3 = mysql_query($sql3);

		if(!$res1 || !$res2 || !$res3)
			echo "failed";

        echo 'Successful';
        echo mysql_error();	
	}
?>
