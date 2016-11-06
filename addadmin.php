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
?>
  <form method="post" action="actionadmin.php?Action=Add">
  <table border="0" width="30%">
  <tr align="left">
  <td>Admin Username</td>
  <td>: <input type="text" size="20" name="name" maxlength="15" /></td>
  </tr>
  <tr align="left">
  <td>Branch</td>
  <td>: <select name="branch">
  <?php if ($_SESSION['branch'] == 'Yogyakarta' or $_SESSION['level'] == 'superadmin') { ?>
  <option value="Yogyakarta">Yogyakarta</option>
  <?php } elseif ($_SESSION['branch'] == 'Bandung' or $_SESSION['level'] == 'superadmin') { ?>
  <option value="Bandung">Bandung</option>
  <?php } elseif ($_SESSION['branch'] == 'Jayapura' or $_SESSION['level'] == 'superadmin') { ?>
  <option value="Jayapura">Jayapura</option>
  <?php } ?>
  </select></td>
  </tr>
  <tr align="left">
  <td>Password</td>
  <td>: <input type="password" name="passwd" size="20" maxlength="20"/></td>
  </tr>
  <tr align="left">
  <td>Re-type Password</td>
  <td>: <input type="password" name="passwd2" size="20" maxlength="20"/></td>
  </tr>
  <tr align="left">
  <td>Level</td>
  <td>: <select name="level">
  <?php if ($_SESSION['level'] == 'superadmin') { ?>
  <option value="superadmin">Super Admin</option>
  <?php } ?>
  <option value="admin">Admin</option>
  <option value="operator">Operator</option>
  </select></td>
  </tr>
  <tr align="left">
  <td>Email</td>
  <td>: <input type="text" name="email" size="20"/></td>
  </tr>
  <tr align="center"><td colspan="2"><input type="Submit" name="submit" value="Enter Information"/></td></tr>
  </table>
</form>
<?php
include "footer.php";
?>