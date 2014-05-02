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
          <td valign="top"><form action="insNews.php" method="post" name="frmNews" id="frmNews">
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr valign="top">
                <td width="15%">Title</td>
                <td width="3%" align="center">:</td>
                <td width="82%"><input name="title" type="text" id="title" size="50" maxlength="50"></td>
              </tr>
              <tr valign="top">
                <td>Description</td>
                <td align="center">:</td>
                <td><textarea name="description" cols="50" rows="20" wrap="VIRTUAL" id="description"></textarea></td>
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
