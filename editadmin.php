<?php
/*
 * PT.SMARTINDO SINAR MULIA Web hosting
 * http://www.smart17tour.com
 *
 * Title: SMART17TOUR Accounting System
 * Version: 1.0
 * Author: Amydin Syahira, S.Kom
 * Date: 08-03-2011
 *
*/
include('header.php');
$r = mysql_fetch_array(mysql_query("SELECT * FROM admins WHERE adminid='".$_GET['id']."'"));
if ($r['branch'] == 'Yogyakarta') {
	$selected = 'selected="selected"';
} else if ($r['branch'] == 'Bandung') {
	$selected2 = 'selected="selected"';
} else {
	$selected3 = 'selected="selected"';
}
if ($r['level'] == 'superadmin') {
	$selected4 = 'selected="selected"';
} else if ($r['level'] == 'admin') {
	$selected5 = 'selected="selected"';
} else {
	$selected6 = 'selected="selected"';
}
?>
  <form method="post" action="actionadmin.php?Action=Edit">
  <input type="hidden" name="id" value="<?=$r['adminid'];?>" />
  <input name="token_session" type="hidden" id="token_session" value="<?=$r["password"];?>" />
  <table border="0" width="30%">
  <tr align="left">
  <td>Admin Username</td>
  <td>: <input type="text" size="20" name="name" maxlength="15" value="<?=$r['name'];?>" /></td>
  </tr>
  <tr align="left">
  <td>Branch</td>
  <td>: <select name="branch">
  <?php if ($_SESSION['branch'] == 'Yogyakarta' or $_SESSION['level'] == 'superadmin') { ?>
  <option value="Yogyakarta" <?=$selected;?>>Yogyakarta</option>
  <?php } elseif ($_SESSION['branch'] == 'Bandung' or $_SESSION['level'] == 'superadmin') { ?>
  <option value="Bandung" <?=$selected2;?>>Bandung</option>
  <?php } elseif ($_SESSION['branch'] == 'Jayapura' or $_SESSION['level'] == 'superadmin') { ?>
  <option value="Jayapura" <?=$selected3;?>>Jayapura</option>
  <?php } ?>
  </select></td>
  </tr>
  <tr align="left">
  <td>Enter New Password</td>
  <td>: <input type="password" name="passwd" size="20" maxlength="20"/>&nbsp;<font color="#FF0000"><b>)*</b></font></td>
  </tr>
  <tr align="left">
  <td>Re-type Password</td>
  <td>: <input type="password" name="passwd2" size="20" maxlength="20"/>&nbsp;<font color="#FF0000"><b>)*</b></font></td>
  </tr>
  <tr align="left">
  <td>Level</td>
  <td>: <select name="level">
  <?php if ($_SESSION['level'] == 'superadmin') { ?>
  <option value="superadmin" <?=$selected4;?>>Super Admin</option>
  <?php } ?>
  <option value="admin" <?=$selected5;?>>Admin</option>
  <option value="operator" <?=$selected6;?>>Operator</option>
  </select></td>
  </tr>
  <tr align="left">
  <td>Email</td>
  <td>: <input type="text" name="email" size="20" value="<?=$r['email'];?>"/></td>
  </tr>
  <tr align="left"><td colspan="2"><font color="#FF0000"><b>)* Password left blank if not replaced.</b></font></td></tr>
  <tr align="center"><td colspan="2"><input type="Submit" name="update" value="Update Information"/></td></tr>
  </table>
  </form>
<?php
include "footer.php";
?>