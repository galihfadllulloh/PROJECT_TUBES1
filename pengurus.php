<?php include "connection.php"; ?>
<html>
<head>
<title>Lembaga Pengembangan PESPARAWI Nasional (LPPN)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<table width="798" height="677"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" align="center" valign="top" bgcolor="#24A2D3" height="150"><img src="images/banner.jpg" width="798" height="148"></td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="top" bgcolor="#24A2D3" height="30"><?php include "topmenu.php"; ?></td>
  </tr>
  <tr>
    <td width="170" height="435" valign="top"><?php include "leftmenu.php"; ?></td>
    <td width="468" align="center" valign="top" background="images/bg_center.gif">
	<?php
		$menu=$_GET["menu"];
		include "$menu.php";
	?>
	</td>
    <td width="160" valign="top"><?php include "rightmenu.php"; ?></td>
  </tr>
  <tr align="center">
    <td colspan="3"><?php include "footer.php"; ?></td>
  </tr>
</table>
</body>
</html>
