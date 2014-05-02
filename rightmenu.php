<script language="javascript">
	function clean()
	{
		frmSearch.txtSearch.value="";
		
	}
</script>

<table width="83%"  border="0" align="center" cellpadding="0" cellspacing="0">
   <tr>
     <td height="39" valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td align="center">
     	<script language="JavaScript" src="js/calendar.js"></script>
     	<script language="JavaScript1.2">setCal();</script>
     </td>
   </tr>
   <tr>
     <td align="center">&nbsp;</td>
   </tr>
   <tr>
     <td valign="top"><form action="" method="post" name="frmSearch" id="frmSearch">
       <table width="100%"  border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td align="center" valign="middle" background="images/bg_search.gif"><input name="txtSearch" type="text" class="calendar" id="txtSearch" onClick="clean()" value="search" size="13" maxlength="25"></td>
           <td align="center" valign="middle" background="images/bg_search.gif"><button class="but_search" type="submit" ><img src="images/but_search.png" width="15" height="15"></button></td>
         </tr>
       </table>   
     </form></td>
   </tr>
   <tr>
     <td valign="top"><form name="form1" method="post" action="">
       <table width="128" border="0" align="center" cellpadding="0" cellspacing="0" class="polling">
         <tr>
           <td background="images/i_polling.png"><img src="images/i_polling.png" width="128" height="26"></td>
         </tr>
         <tr>
           <td>Apakah situs ini cukup membantu </td>
         </tr>
         <tr>
           <td><input name="radiobutton" type="radio" value="radiobutton">
A</td>
         </tr>
         <tr>
           <td><input name="radiobutton" type="radio" value="radiobutton">
B</td>
         </tr>
         <tr>
           <td height="35" align="center"><input name="Vote" type="submit" class="button" id="Vote" value="Vote">
            <input name="Result" type="submit" id="Result" value="Result"></td>
         </tr>
       </table>   
     </form></td>
   </tr>
</table>
