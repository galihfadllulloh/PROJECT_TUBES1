<?php
	session_start();
	include "../connection.php";
	include "validation.php";
	
	session_destroy();
	header("location: index.php");
?>