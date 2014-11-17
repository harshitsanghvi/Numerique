<?php
/**
 * Description of DBConnection
 *
 * @author Harshit
 */

    $conn = mysql_connect('localhost', 'root', '');
	if(!$conn)
		die("Not Connected:" . mysql_error());
    $db = mysql_select_db('numerique');
	if(!$db)
		die("No database selected:" . mysql_error());
?>
