<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_about_menu) return;
  window.mm_about_menu = new Menu("root",115,18,"Arial, Helvetica, sans-serif",12,"#FCFBF9","#000000","#24A2D3","#3195D9","left","middle",3,0,500,-5,7,true,true,true,0,true,true);
  mm_about_menu.addMenuItem("Visi&nbsp;dan&nbsp;Misi","location='visimisi.php'");
  mm_about_menu.addMenuItem("Sejarah","location='sejarah.php'");
  mm_about_menu.addMenuItem("Struktur&nbsp;Organisasi","location='struktur.php'");
   mm_about_menu.hideOnMouseOut=true;
   mm_about_menu.bgColor='#FFFFFF';
   mm_about_menu.menuBorder=1;
   mm_about_menu.menuLiteBgColor='#FFFFFF';
   mm_about_menu.menuBorderBgColor='#FFFFFF';

  window.mm_news_menu = new Menu("root",90,18,"Arial, Helvetica, sans-serif",12,"#FCFBF9","#000000","#24A2D3","#3195D9","left","middle",3,0,500,-5,7,true,true,true,0,true,true);
  mm_news_menu.addMenuItem("Annoucement","location='annoucement.php'");
   mm_news_menu.hideOnMouseOut=true;
   mm_news_menu.bgColor='#FFFFFF';
   mm_news_menu.menuBorder=1;
   mm_news_menu.menuLiteBgColor='#FFFFFF';
   mm_news_menu.menuBorderBgColor='#FFFFFF';

mm_news_menu.writeMenus();
} // mmLoadMenus()
//-->
</script>
<script language="JavaScript" src="js/mm_menu.js"></script>
<script language="JavaScript1.2">mmLoadMenus();</script>
<table  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td><a href="index.php"><img src="images/home.gif" border="0" width="45" height="28" class="noBrdr" onMouseOver="this.src='images/home_hover.gif'" onMouseOut="this.src='images/home.gif'"></a></td>
    <td><a href="aboutus.php" onMouseOver="MM_showMenu(window.mm_about_menu,0,28,null,'image1')" onMouseOut="MM_startTimeout();"><img src="images/about_us.gif" name="image1" width="55" height="28" border="0" class="noBrdr" id="image1" onMouseOver="this.src='images/about_us_hover.gif'" onMouseOut="this.src='images/about_us.gif'"></a></td>
    <td><a href="news.php" onMouseOver="MM_showMenu(window.mm_news_menu,0,28,null,'image2')" onMouseOut="MM_startTimeout();"><img src="images/news.gif" name="image2" width="34" height="28" border="0" class="noBrdr" id="image2" onMouseOver="this.src='images/news_hover.gif'" onMouseOut="this.src='images/news.gif'"></a></td>
    <td><a href="discussion.php"><img src="images/discussion_board.gif" width="108" height="28" border="0" class="noBrdr" onMouseOver="this.src='images/discussion_board_hover.gif'" onMouseOut="this.src='images/discussion_board.gif'"></a></td>
    <td><a href="download.php"><img src="images/download_lagu.gif" border="0" width="99" height="28" class="noBrdr" onMouseOver="this.src='images/download_lagu_hover.gif'" onMouseOut="this.src='images/download_lagu.gif'"></a></td>
    <td><a href="contact.php"><img src="images/contact_us.gif" border="0" width="72" height="28" class="noBrdr" onMouseOver="this.src='images/contact_us_hover.gif'" onMouseOut="this.src='images/contact_us.gif'"></a></td>
  </tr>
</table>
