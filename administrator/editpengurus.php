<?php 
	session_start();
	include "../connection.php"; 
	include "validation.php";
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
          <td height="39" valign="top" background="images/bg_header.gif"><h3>ADMINISTRATOR</h3></td>
        </tr>
        <tr>
          <td valign="top">
		  <?php
		  	$id=$_GET["n"];
		  	$query="SELECT * FROM app_pengurus WHERE pengurus_id='$id'";
			$sql=mysql_query($query);
			$out=mysql_fetch_array($sql);
		  ?>
		  <form action="actionPengurus.php?<?= "n=".$out["pengurus_id"]."&act=edit"; ?>" method="post" name="frmPengurus" id="frmPengurus">
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr valign="top">
                <td width="21%">Struktur Pengurus </td>
                <td width="3%" align="center">:</td>
                <td width="76%"><input name="struktur" type="text" id="struktur" value="<?= $out["pengurus_name"]; ?>" size="50" maxlength="50">                  </td>
              </tr>
              <tr valign="top">
                <td>Url</td>
                <td align="center">:</td>
                <td><input name="url" type="text" id="url" value="<?= $out["url"]; ?>" size="50" maxlength="50"></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="center">&nbsp;</td>
                <td><input name="Update" type="submit" id="Update" value="Update"></td>
              </tr>
            </table>
            </form></td>
        </tr>
    </table></td>
  </tr>
  <tr align="center">
    <td colspan="2" valign="top"><?php include "footer.php"; ?></td>
  </tr>
</table>
</body>
</html>
