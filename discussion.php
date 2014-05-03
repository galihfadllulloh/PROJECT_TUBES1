<?php include "connection.php"; ?>
<html>
<head>
<title>JURUSAN TEKNIK INFORMATIKA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<script language="javascript">
	function validate() {
		var flag=true;
		if(flag==true && frmNew.creator.value=="") {
			alert ("Nama harus diisi");
			frmNew.creator.focus();
			frmNew.creator.select();
			flag=false;
		}
		if(flag==true && frmNew.topic.value=="") {
			alert ("Topik harus diisi");
			frmNew.topic.focus();
			frmNew.topic.select();
			flag=false;
		}
		if(flag==true && frmNew.content.value=="") {
			alert ("Content harus diisi");
			frmNew.content.focus();
			frmNew.content.select();
			flag=false;
		}
		if(flag==true) { 
			frmNew.submit();
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
        <tr>
          <td height="39" valign="top" background="images/bg_header.gif"><h3>DISCUSSION INFORMATIKA </h3></td>
        </tr>
        <tr>
          <td><table width="100%"  border="0" cellpadding="0" cellspacing="0" class="table">
              <tr class="toptable">
                <td width="8%" height="21" align="center" class="rtoptable">No</td>
                <td class="btoptable" width="70%">Topic</td>
                <td class="btoptable" width="11%" align="center"><em>Read</em></td>
                <td class="ltoptable" width="11%" align="center"><em>Reply</em></td>
              </tr>
			  <?php
			  	$query="SELECT * FROM app_thread_header WHERE active_flag=1 ORDER BY thread_id desc";
				$sql=mysql_query($query);
				$i=1;
				while($out=mysql_fetch_array($sql)) {
					if($i%2==0) echo "<tr bgcolor='#E3F6FC'>";
					else echo "<tr bgcolor='#ECFAFD'>";
					echo "<td align='center' class='bottable'>".$i."</td>
						  <td class='bottable'><a class='thread' href='showtopic.php?t=".$out["thread_id"]."'>".$out["thread_name"]."</a><br>
						  <span class='creator'><em>".$out["created_by"]." at ".$out["creation_date"]."</em></span></td>
						  <td align='center' class='bottable'>".$out["count_read"]."</td>
						  <td align='center' class='bottable'>".$out["reply"]."</td>
					    </tr>";
			  		$i++;
			  	}
			  ?>
            </table>
			</td>
        </tr>
        <tr>
          <td><form action="insTopic.php" method="post" name="frmNew" id="frmNew">
		  <table width="100%"  border="0" cellpadding="1" cellspacing="1" class="mini-font">
              <tr>
                <td width="13%">Name</td>
                <td width="2%" align="center"> :</td>
                <td width="85%"><input name="creator" type="text" id="creator" maxlength="50"></td>
              </tr>
              <tr>
                <td>Topic </td>
                <td align="center">:</td>
                <td><input name="topic" type="text" id="topic2" size="54" maxlength="50"></td>
              </tr>
              <tr align="left">
                <td colspan="3"><textarea name="content" cols="53" rows="5" wrap="PHYSICAL" id="content"></textarea></td>
                </tr>
              <tr>
                <td colspan="3" align="center"><input name="Submit" type="button" id="Submit" onClick="validate()" value="Submit">
                   &nbsp;<input type="reset" name="Reset" value="Reset"></td>
                </tr>
            </table>
          </form></td>
        </tr>
    </table></td>
    <td width="160" valign="top"><?php include "rightmenu.php"; ?></td>
  </tr>
  <tr align="center">
    <td colspan="3"><?php include "footer.php"; ?></td>
  </tr>
</table>
</body>
</html>
