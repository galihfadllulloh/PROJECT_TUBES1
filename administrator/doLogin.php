<?php
	session_start();
	include "../connection.php";

	$userId=$_POST["user"];
	$pwd=$_POST["pass"];
	$today=date("d-m-y h:i A");
	
	$pwd=substr(MD5($pwd),0,25);
	$query="SELECT user_id,pwd FROM app_users_all WHERE user_id='$userId' AND pwd='$pwd'";
	$sql=mysql_query($query);
	if($out=mysql_fetch_array($sql)) {
		$_SESSION["user"] = $userId;
	}
	else {
		$_SESSION["error"] = "username and password invalid";
	}
	header("location: index.php");
?>