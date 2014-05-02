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

	$id=$_GET["n"];
	$act=$_GET["act"];
	$flag=$_GET["flag"];
	$today=date("d-m-y h:i A");
	
	$userId=$_SESSION["user"];

	if($act=="edit") {
		$title=$_POST["title"];
		$desc=$_POST["description"];
		$desc=tag_html($desc);
		$title=tag_html($title);
		
		$query="UPDATE app_annoucement SET title='$title', description='$desc', last_updated_by='$userId', last_update_date='$today'
				WHERE annoucement_id='$id'";
	} else if($act=="setactiveflag") {
		if($flag==1) $flag=0;
		else $flag=1;
		$query="UPDATE app_annoucement SET active_flag='$flag' WHERE annoucement_id='$id'";
	} else {
		$query="DELETE FROM app_annoucement WHERE annoucement_id='$id'";
	}
	
	mysql_query($query);
	mysql_close($connect);
	
	header("location: annoucement.php");
?>