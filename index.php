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
<title><?=$yourcompany?> - Administrator</title>
<link rel="shortcut icon" href="amicon.ico">
<link rel="stylesheet" href="inc/style.css" type="text/css">
<link href="inc/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
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
  <?php
     if(empty($_GET['Error'])) {
		$echo='<font color="orange">Please Insert Username &amp; Password</font>';
	 } else {
		$echo="<font color='red'>LOGIN FAILED !<br />Your Username Or Password Is Incorrect.</font>";
	 }
  ?>
   <b style="font-size: 24px;">Login Administrator</b>
  <form action="login.php" method="post" name="login">
  <div class="form-block">
  <?=$echo;?><br /><br />
    <div class="inputlabel">Username</div>
      <div><input name="username" id="username" class="inputbox" size="15" type="text" maxlength="15"></div>      
    <div class="inputlabel">Password</div>     
      <div><input name="password" id="password" class="inputbox" size="15" type="password" maxlength="20"></div>
	  <div align="left"><input name="submit" class="button" value="Login" type="Submit"></div>
  </div>
  </form>
		</div>
		<div class="login-text">
			<div class="ctr"><img src="images/controlpanel17.png" alt="security" width="64" height="64"></div>
			<p><div align="center">SMART 17 ACCOUNTING<br />
		    Web Based Accounting System</div></p>
		  </div>
		<div class="clr"></div>
	</div>
</div>
<div align="center"> 
<?php
include('footer.php');
?>
</div>