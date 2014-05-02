<?php
	include "connection.php";
	
	$today=date("d-m-y h:i A");
	$topic=$_POST["topic"];
	$content=$_POST["content"];
	$createdBy=$_POST["creator"];
	$query="INSERT INTO app_thread_header(thread_name,count_read,reply,created_by,creation_date,active_flag) 
			VALUES('$topic',0,0,'$createdBy','$today',1)";
	mysql_query($query);
	
	$query="select thread_id from app_thread_header where thread_name='$topic' and created_by='$createdBy' and creation_date='$today'";
	$sql=mysql_query($query);
	$out=mysql_fetch_array($sql);
	
	$query="insert into app_thread_reply(thread_id,content,created_by,creation_date) values('$out[thread_id]','$content','$createdBy','$today')";
	mysql_query($query);
	mysql_close($connect);
	header("location: showtopic.php?t=$out[thread_id]");  
?>