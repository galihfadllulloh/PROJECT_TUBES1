<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="box">
        <tr>
          <td height="39" valign="top" background="images/menu_header.gif"><h3>PENGURUS</h3></td>
        </tr>
        <?php
		$query="SELECT * FROM app_pengurus WHERE active_flag=1 ORDER BY pengurus_id";
		$sql=mysql_query($query);
		while($out=mysql_fetch_array($sql)) {
	?>
        <tr>
          <td>
		  <?php echo "<a class='left-text' href='pengurus.php?p=".$out["pengurus_id"]."&menu=".$out["url"]."'>".$out["pengurus_name"]."</a>"; ?>
		  </td>
        </tr>
        <?php
		}
	?>
    </table>