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
    <td width="170" height="525" valign="top"><?php include "leftmenu.php"; ?></td>
    <td align="center" valign="top" background="images/bg_center.gif"><table width="95%"  border="0" cellpadding="0" cellspacing="0" class="mini-font">
        <tr>
          <td height="39" valign="top" background="images/bg_header.gif"><h3>ADMINISTRATOR</h3></td>
        </tr>
        <tr>
          <td valign="top"><form action="actionStrukturPengurus.php" method="post" name="frmNews" id="frmNews">
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr valign="top">
                <td width="24%">Nama</td>
                <td width="3%" align="center">:</td>
                <td width="73%"><input name="nama" type="text" id="nama" size="50" maxlength="50">
                  <input name="id" type="hidden" id="id" value="<?= $id; ?>"></td>
              </tr>
              <tr valign="top">
                <td>Alamat</td>
                <td align="center">:</td>
                <td>                  <textarea name="alamat" cols="38" rows="3" id="alamat"></textarea></td>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td align="center">:</td>
                <td><input name="jabatan" type="text" id="jabatan" size="50" maxlength="50"></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="center">&nbsp;</td>
                <td><input type="submit" name="Submit" value="Submit"></td>
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
