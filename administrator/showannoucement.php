<?php 
	session_start();
	include "../connection.php"; 
	include "validation.php";
	
	$id=$_GET["n"];
?>
<html>
<head>
<title>Lembaga Pengembangan PESPARAWI Nasional (LPPN)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../style.css" rel="stylesheet" type="text/css">
</head>

<body>

<table width="798" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center" valign="top" bgcolor="#24A2D3"><?php include "header.php"; ?></td>
  </tr>
  <tr>
    <td width="170" height="435" valign="top"><?php include "leftmenu.php"; ?></td>
    <td align="center" valign="top" background="images/bg_center.gif"><table width="95%"  border="0" cellpadding="0" cellspacing="0" class="mini-font">
        <tr>
          <td height="39" colspan="2" valign="top" background="images/bg_header.gif"><h3>ADMINISTRATOR</h3></td>
        </tr>
		<?php
			$query="SELECT * FROM app_annoucement WHERE annoucement_id='$id'";
			$sql=mysql_query($query);
			$out=mysql_fetch_array($sql);
			$desc = str_replace("\r", "<br>", $out["description"]);
			
			$title = str_replace("<", "&lt;", $out["title"]);
			$title = str_replace(">", "&gt;", $out["title"]);
		?>
        <tr>
          <td colspan="2" valign="top"><?= $title; ?></td>
        </tr>
        <tr>
          <td colspan="2" valign="top">		  <div align="justify"><?= $desc; ?></div></td>
        </tr>
        <tr valign="bottom">
          <td height="24"><?= "Created by : ".$out["created_by"] ." at ". $out["creation_date"]; ?></td>
          <td rowspan="2" align="right">
		  		<a href="editannoucement.php?<?= "n=".$out["annoucement_id"]; ?>"><img src="images/i_edit.png" width="16" height="16" border="0" title="edit"></a>
                <a href="actionAnnoucement.php?<?= "n=".$out["annoucement_id"]."&act=setactiveflag&flag=".$out["active_flag"]; ?>"><img src="images/i_lock.png" width="16" height="16" border="0" title="active flag"></a>
                <a href="actionAnnoucement.php?<?= "n=".$out["annoucement_id"]."&act=delete"; ?>"><img src="images/i_delete.png" width="16" height="16" border="0" title="delete"></a>
        </tr>
        <tr valign="bottom">
          <td><?= "Last Updated by : ".$out["last_updated_by"] ." at ". $out["last_update_date"]; ?></td>
        </tr>
    </table></td>
  </tr>
  <tr align="center">
    <td colspan="2" valign="top"><?php include "footer.php"; ?></td>
  </tr>
</table>
</body>
</html>
