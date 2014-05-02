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
	
	$userId=$_SESSION["user"];
	
	if($act=="") {
		$nama=$_POST["nama="];
		$alamat=$_POST["alamat"];
		$jabatan=$_POST["jabatan="];
		$id=$_POST["id"];
		$nama=tag_html($nama);
		$alamat=tag_html($alamat);
		$jabatan=tag_html($jabatan);
		
		$query="INSERT INTO app_struktur_pengurus(pengurus_id,nama,alamat,jabatan)
				VALUES('$id','$nama','$alamat','$jabatan')";
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