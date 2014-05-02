<?php 
	include "connection.php"; 
	$threadID = $_GET["t"];
	$query = "SELECT count_read FROM app_thread_header WHERE thread_id ='$threadID'";
	$sql = mysql_query($query);
	$out = mysql_fetch_array($sql);
	$read = $out["count_read"];
	$read = $read+1;
	
	mysql_query("UPDATE app_thread_header SET count_read = '$read' WHERE thread_id = '$threadID'");
	mysql_close($connect);
	include "connection.php"; 
?>
<html>
<head>
<title>Lembaga Pengembangan PESPARAWI Nasional (LPPN)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<script language="javascript">
	function validate() {
		var flag=true;
		if(flag==true && frmReply.name.value=="") {
			alert ("Nama harus diisi");
			frmReply.creator.focus();
			frmReply.creator.select();
			flag=false;
		}
		if(flag==true && frmReply.content.value=="") {
			alert ("Content harus diisi");
			frmReply.content.focus();
			frmReply.content.select();
			flag=false;
		}
		if(flag==true) { 
			frmReply.submit();
		}
	}

</script>
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
    <td width="468" align="center" valign="top" background="images/bg_center.gif"><table width="96%"  border="0" cellspacing="0" cellpadding="0">
        <tr valign="top" background="images/bg_header.gif">
          <td height="39" colspan="2"><h3>DISCUSSION BOARD </h3></td>
        </tr>
        <tr>
          <td colspan="2">
		  <?php
		  $query = "SELECT ath.thread_id,ath.thread_name,atr.content,atr.created_by,atr.creation_date,ath.count_read
		  			FROM app_thread_header ath, app_thread_reply atr
					WHERE ath.thread_id = atr.thread_id
					AND ath.thread_id ='$threadID'";
		  $sql=mysql_query($query);
		  $i=1;
		  $out=mysql_fetch_array($sql);
		  ?>
		  <table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table">
              <tr class="toptable">
                <td width="50%" align="left" class="date"><?= $out["creation_date"]; ?></td>
                <td width="50%" colspan="2" align="right" class="date">#<?= $i; ?></td>
              </tr>
			  <tr bgcolor="#ECFAFD">
				<td colspan="3" class="bbottable"><?= $out["thread_name"]; ?></td>
			  </tr>
			  <tr bgcolor="#ECFAFD">
				<td colspan="3" class="ubottable"><?= $out["content"]; ?></td>
			  </tr>
          </table>
		  <?php
		  while($out=mysql_fetch_array($sql)) {
		  	$i++;
		  ?>
		  <table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table">
              <tr class="toptable">
                <td width="50%" align="left" class="date"><?= $out["creation_date"]; ?></td>
                <td width="50%" colspan="2" align="right" class="date">#<?= $i; ?></td>
              </tr>
			  <tr bgcolor="#ECFAFD">
				<td colspan="3" class="bottable"><?= $out["content"]; ?>
			    <br><span class="creator"><?= "created by : ".$out["created_by"]; ?></td>
			  </tr>
          </table>
		  <?php
		  }
		  ?>
		  </td>
        </tr>
        <tr>
          <td width="50%"><a href="javascript:history.back()">back</a></td>
          <td width="50%" align="right">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><form name="frmReply" method="post" action="replyTopic.php">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0" class="mini-font">
              <tr>
                <td>Name : 
                  <input name="name" type="text" id="name" size="25" maxlength="25">
                  <input name="id" type="hidden" id="id" value="<?= $threadID ?>"></td>
              </tr>
              <tr>
                <td align="center"><textarea name="content" cols="53" rows="5" wrap="PHYSICAL" id="content"></textarea></td>
              </tr>
              <tr>
                <td align="center"><input name="Submit" type="button" id="Submit" onClick="validate()" value="Submit">
                  &nbsp;<input name="Cancel" type="reset" id="Cancel" value="Cancel"></td>
              </tr>
            </table>
          </form></td>
        </tr>
    </table>
    </td>
    <td width="160" valign="top"><?php include "rightmenu.php"; ?></td>
  </tr>
  <tr align="center">
    <td colspan="3"><?php include "footer.php"; ?></td>
  </tr>
</table>
</body>
</html>
