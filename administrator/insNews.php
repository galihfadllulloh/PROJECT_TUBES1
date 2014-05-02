<?php
	session_start();
	include "../connection.php";
	include "validation.php";
	
	function tag_html($kalimat){
	    $va = ereg_replace("<","&lt;",$kalimat);
	    $va = ereg_replace(">","&gt;",$va);
	    $va = ereg_replace("&","&amp;",$va);
	    $va = html_entity_decode($va);
    	return $va;
	}

	$desc=$_POST["description"];
	$title=$_POST["title"];
	$today=date("d-m-y h:i A");
	
	$userId=$_SESSION["user"];
	
	$desc=tag_html($desc);
	$title=tag_html($title);

	$query="INSERT INTO app_news(title,description,created_by,creation_date,last_updated_by,last_update_date,active_flag) 
			VALUES('$title','$desc','$userId','$today','$userId','$today',1)";
	mysql_query($query);
	mysql_close($connect);
	
	header("location: news.php");
?>