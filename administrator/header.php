<table width="100%" height="101"  border="0" cellpadding="0" cellspacing="0" background="images/bg_banner.png">
      <tr>
        <td align="right" valign="bottom">
		<?php if($_SESSION["user"]=="") { ?>
		<form action="doLogin.php" method="post" name="frmLogin" id="frmLogin">
          <table width="30%"  border="0" cellpadding="0" cellspacing="0" class="mini-font">
            <tr valign="bottom">
              <td>Username</td>
              <td><input name="user" type="text" id="user"></td>
            </tr>
            <tr valign="bottom">
              <td>Password</td>
              <td><input name="pass" type="password" id="pass"></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="Login" type="submit" id="Login" value="Login"></td>
            </tr>
            <tr align="center">
              <td colspan="2">&nbsp;<span class="error"><?= $_SESSION["error"]; ?></span>&nbsp;</td>
            </tr>
          </table>
        </form>
		<?php 
			} else { 
		?> 
			<table width="30%"  border="0" cellpadding="0" cellspacing="0" class="mini-font">
            <tr valign="bottom">
              <td>Welcome, <?= $_SESSION["user"]; ?> <a href="doLogout.php">[ LOGOUT ]</a></td>
              </tr>
          </table>
		<?php
			}
		?>		</td>
      </tr>
    </table>