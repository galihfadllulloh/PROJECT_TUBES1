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
          <td height="20" valign="bottom"><a href="addsong.php">Add Song </a></td>
        </tr>
        <tr>
          <td valign="top"><div align="justify">
            <table width="100%"  border="1" cellspacing="0" cellpadding="1" class="mini-font">
              <tr>
                <td width="23" align="center">NO</td>
                <td width="232">TITLE</td>
                <td width="213"> SONGWRITER </td>
                <td width="44" align="center">ACTIVE</td>
                <td colspan="3" align="center">ACTION</td>
              </tr>
			  <?php
			  	$query="SELECT music_id,title,songwriter,active_flag FROM app_music";
				$sql=mysql_query($query);
				while($out=mysql_fetch_array($sql)) {
					if($out["active_flag"]==1) $flag="Y";
					else $flag="N";
			  ?>
              <tr>
                <td valign="top">1</td>
                <td valign="top"><?= $out["title"]; ?></td>
                <td valign="top"><?= $out["songwriter"]; ?></td>
                <td align="center" valign="top"><?= $flag; ?></td>
                <td width="16" align="center" valign="top"><a href="editsong.php?<?= "n=".$out["music_id"]; ?>"><img src="images/i_edit.png" width="16" height="16" border="0" title="edit"></a></td>
                <td width="16" align="center" valign="top"><a href="actionSong.php?<?= "n=".$out["music_id"]."&act=setactiveflag&flag=".$out["active_flag"]; ?>"><img src="images/i_lock.png" width="16" height="16" border="0" title="active flag"></a></td>
                <td width="16" align="center" valign="top"><a href="actionSong.php?<?= "n=".$out["music_id"]."&act=delete"; ?>"><img src="images/i_delete.png" width="16" height="16" border="0" title="delete"></a></td>
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
