<?php	
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "db_lppn";
	
	$connect = mysql_connect($hostname, $username, $password);
	if(!$connect)
	{
		die('Could not connect: '. mysql_error());
	}
	else
	{
		mysql_select_db($database);
	}
?>