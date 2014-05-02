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
<script language="javascript" src="../js/alternate.js"></script>
<body>

<table width="798" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center" valign="top" bgcolor="#24A2D3"><?php include "header.php"; ?></td>
  </tr>
  <tr>
    <td width="170" height="525" valign="top"><?php include "leftmenu.php"; ?></td>
    <td align="center" valign="top" background="images/bg_center.gif"><table width="95%"  border="0" cellpadding="0" cellspacing="0" class="mini-font">
        <tr>
          <td height="39" valign="top" background="images/bg_header.gif"><h3>ADMINISTRATOR</h3></td>
        </tr>
        <tr>
          <td height="20" valign="bottom"><form action="actionPengurus.php" method="post" name="frmPengurus" id="frmPengurus">
            <table width="100%"  border="1" cellspacing="0" cellpadding="2">
              <tr valign="middle">
                <td width="15%" height="32">Struktur</td>
                <td width="22%"><input name="struktur" type="text" id="struktur" size="15" maxlength="50"></td>
                <td width="7%">Url</td>
                <td width="40%"><input name="url" type="text" id="title3" size="15" maxlength="50"></td>
                <td width="16%"><input type="submit" name="Submit" value="Submit"></td>
              </tr>
            </table>
            </form></td>
        </tr>
        <tr>
          <td valign="top"><div align="justify">
            <table width="100%"  border="1" cellspacing="0" cellpadding="1" class="mini-font">
              <tr>
                <td width="23" align="center">NO</td>
                <td width="266">STRUKTUR PENGURUS</td>
                <td width="164">URL</td>
                <td width="44" align="center">ACTIVE</td>
                <td colspan="4" align="center">ACTION</td>
              </tr>
			  <?php
			  	$query="SELECT * FROM app_pengurus ORDER BY pengurus_id";
				$sql=mysql_query($query);
				while($out=mysql_fetch_array($sql)) {
					if($out["active_flag"]==1) $flag="Y";
					else $flag="N";
			  ?>
              <tr onMouseOver="onMouse(this,1)" onMouseOut="onMouse(this,0)">
                <td valign="top">1</td>
                <td valign="top"><?= $out["pengurus_name"]; ?></td>
                <td valign="top"><?= $out["url"]; ?></td>
                <td align="center" valign="top"><?= $flag; ?></td>
                <td width="16" align="center" valign="top"><a href="showpengurus.php?n=<?= $out["pengurus_id"]. "&act=view"; ?>"><img src="images/i_look.png" width="16" height="16" border="0" title="view"></a></td>
                <td width="16" align="center" valign="top"><a href="editpengurus.php?<?= "n=".$out["pengurus_id"]. "&act=edit"; ?>"><img src="images/i_edit.png" width="16" height="16" border="0" title="edit"></a></td>
                <td width="16" align="center" valign="top"><a href="actionPengurus.php?<?= "n=".$out["pengurus_id"]."&act=setactiveflag&flag=".$out["active_flag"]; ?>"><img src="images/i_lock.png" width="16" height="16" border="0" title="active flag"></a></td>
                <td width="18" align="center" valign="top"><a href="actionPengurus.php?<?= "n=".$out["pengurus_id"]."&act=delete"; ?>"><img src="images/i_delete.png" width="16" height="16" border="0" title="delete"></a></td>
              </tr>
			  <?php
			  	}
			  ?>
            </table>
          </div></td>
        </tr>
    </table></td>
  </tr>
  <tr align="center">
    <td colspan="2" valign="top"><?php include "footer.php"; ?></td>
  </tr>
</table>
</body>
</html>
