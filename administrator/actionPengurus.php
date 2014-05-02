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
	
	if($act=="") {
		$struktur=$_POST["struktur"];
		$url=$_POST["url"];
		$struktur=tag_html($struktur);
		$url=tag_html($url);
		
		$query="INSERT INTO app_pengurus(pengurus_name,url,active_flag)
				VALUES('$struktur','$url',1)";
	}
	else {
		if($act=="edit") {
			$struktur=$_POST["struktur"];
			$url=$_POST["url"];
			$struktur=tag_html($struktur);
			$url=tag_html($url);
			
			$query="UPDATE app_pengurus SET pengurus_name='$struktur', url='$url' WHERE pengurus_id='$id'";
		} else if($act=="setactiveflag") {
			if($flag==1) $flag=0;
			else $flag=1;
			$query="UPDATE app_pengurus SET active_flag='$flag' WHERE pengurus_id='$id'";
		} else {
			$query="DELETE FROM app_pengurus WHERE pengurus_id='$id'";
		}	
	}
	
	mysql_query($query);
	mysql_close($connect);
	
	header("location: pengurus.php");
?>