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
include('inc/config.php');
?>
<html>
<head>
<title><?=$yourcompany?> - Client Invoice</title>
<link rel="shortcut icon" href="amicon.ico">
<link rel="stylesheet" href="inc/style.css" type="text/css">
<link href="inc/login.css" rel="stylesheet" type="text/css" />
<script language="">
<!--
function cursor(){document.login.username.focus();}
// -->
</script>
</head>
<body onLoad="cursor()";>
<div align="center"><img src="images/smart.png" width="712" height="160">
</div>
<div id="ctr" align="center">
		<div class="login">
		<div class="login-form">
			<img src="images/login.gif" alt="Login">
  <?php
     if(empty($_GET['Error'])) {
		$echo='<font color="orange">Please Insert Email.</font>';
	 } else if (!empty($_GET['Error']) && !empty($_GET['cookies_symphony'])) {
		$echo="<font color='red'>There was an error while resetting your password. We apologize for any inconvenience this may have caused.</font>";
	 } else {
		$echo="<font color='red'>FAILED to Send Email !<br />Your Email Is Incorrect.</font>";
	 }
  ?>
  <form action="forgotaction.php" method="post" name="forgot">
  <div class="form-block">
  <?=$echo;?>
  <br /><br />    
    <div class="inputlabel">Email</div>     
      <div><input name="email" id="email" class="inputbox" size="15" type="text" maxlength="40"></div>
	  <div align="left"><input name="submit" value="Send Email" type="Submit">&nbsp;
      <a href="index.php" style="font-size: 12px; font-weight: lighter;"><u>Back to Login &raquo;</u></a>
      </div>
  </div>
  </form>
		</div>
		<div class="login-text">
			<div class="ctr"><img src="images/controlpanel17.png" alt="security" width="64" height="64"></div>
			<p><div align="center">SMART 17 INVOICE<br>
		    Web Based Invoice System</div></p>
		  </div>
		<div class="clr"></div>
	</div>
</div>
<div align="center">     
<?php
include('footer.php');
?>
</div>