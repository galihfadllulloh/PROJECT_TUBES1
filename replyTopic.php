<?php
	include "connection.php";
	
	$today=date("d-m-y h:i A");
	$threadID=$_POST["id"];
	$content=$_POST["content"];
	$createdBy=$_POST["name"];
	
	$query = "SELECT reply FROM app_thread_header WHERE thread_id ='$threadID'";
	$sql=mysql_query($query);
	$out=mysql_fetch_array($sql);
	$reply=$out["reply"];
	$reply=$reply+1;
	
	$query = "SELECT reply,thread_id 
			 FROM app_thread_header 
			 WHERE thread_id = '$threadID'";
	$sql=mysql_query($query);
	$out=mysql_fetch_array($sql);
	
	$query = "INSERT INTO app_thread_reply(thread_id,content,created_by,creation_date) 
			 VALUES('$threadID','$content','$createdBy','$today')";
	mysql_query($query);
	mysql_query("UPDATE app_thread_header SET reply = '$reply' WHERE thread_id = '$threadID'");
	
	mysql_close($connect);
	header("location: showtopic.php?t=$out[thread_id]");
?>