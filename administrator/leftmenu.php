<table width="100%"  border="0" cellpadding="0" cellspacing="0" class="box">
        <tr>
          <td height="39" valign="top" background="images/menu_header.gif"><h3>MENU</h3></td>
        </tr>
        
		<?php
			$query="SELECT menu_id,menu_name,url FROM app_admin_menus WHERE active_flag=1";
			$sql=mysql_query($query);
			while($out=mysql_fetch_array($sql)) {
				echo "<tr><td>";
				echo "<a href='".$out["url"]."' class='left-text'>".$out["menu_name"]."</a>";
				echo "</td></tr>";
			}
		?>  
        
    </table>