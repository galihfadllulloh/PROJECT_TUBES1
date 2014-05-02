<?php 
	session_start();
	include "../connection.php"; 
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
    <td width="170" height="525" valign="top">
	<?php 
		if($_SESSION["user"]!="") include "leftmenu.php"; 
	?></td>
    <td align="center" valign="top" background="images/bg_center.gif"><table width="95%"  border="0" cellpadding="0" cellspacing="0" class="mini-font">
        <tr>
          <td height="39" valign="top" background="images/bg_header.gif"><h3>HOME</h3></td>
        </tr>
        <tr>
          <td valign="top"><div align="justify">
            <table width="90%"  border="0" cellspacing="0" cellpadding="0" class="mini-font">
              <tr>
                <td colspan="2"><div align="justify">LPPN bertujuan memajukan seni budaya Kristiani, khususnya di bidang musik dan paduan suara gerejawi. Tujuan tersebut telah mengkristal dan menjadi daya dorong untuk menghasilkan kader-kader yang berdaya guna di bidang seni budaya kristiani, khususnya di bidang musik dan paduan suara Gerejawi.</div></td>
                </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
                </tr>
              <tr>
                <td colspan="2">Bentuk pelayanan musik dan paduan suara gerejawi :</td>
                </tr>
              <tr valign="top">
                <td width="7%" align="center">-</td>
                <td width="93%">Pelatihan vocal</td>
              </tr>
              <tr valign="top">
                <td align="center">-</td>
                <td>Pelatihan piano</td>
              </tr>
              <tr valign="top">
                <td align="center">-</td>
                <td>Pelatihan organ</td>
              </tr>
              <tr valign="top">
                <td align="center">-</td>
                <td>Pelatihan keyboard</td>
              </tr>
              <tr valign="top">
                <td align="center">-</td>
                <td>Pelatihan vocal group</td>
              </tr>
              <tr valign="top">
                <td align="center">-</td>
                <td>Komposisi</td>
              </tr>
              <tr valign="top">
                <td align="center">-</td>
                <td>Pelatihan dirigen (teori dan praktek)</td>
              </tr>
              <tr valign="top">
                <td align="center">-</td>
                <td>Kelas Instrumen tradisional</td>
              </tr>
              <tr valign="top">
                <td align="center">-</td>
                <td>Pelatihan gitar</td>
              </tr>
              <tr valign="top">
                <td align="center">-</td>
                <td><div align="justify">Pelatihan paduan suara (paduan suara dewasa campuran, paduan suara pemuda / remaja, paduan suara anak, paduan suara kaum bapak, paduan suara kaum ibu) </div></td>
              </tr>
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
<?php unset($_SESSION["error"]); ?>
