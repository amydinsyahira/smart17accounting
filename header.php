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
include("inc/config.php");
include ("inc/date.php");
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
	header('Location: index.php');
	die();
}
?>
<html>
<head>
<title><?=$yourcompany?></title>
<link rel="stylesheet" href="inc/style.css" type="text/css">
<link type="text/css" href="development-bundle/themes/base/ui.all.css" rel="stylesheet" />
<link type="text/css" href="development-bundle/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<style type="text/css">@import url(css/calendar-system.css);</style>
<script type="text/javascript" src="js/calendar.js"></script>
<script type="text/javascript" src="lang/calendar-en.js"></script>
<script type="text/javascript" src="js/calendar-setup.js"></script>
<script type="text/javascript" src="development-bundle/jquery-1.4.js"></script>
<script type="text/javascript" src="development-bundle/jquery.numberformatter-1.1.0.js"></script>
<script type="text/javascript" src="development-bundle/ui/jquery-ui-1.7.2.custom.js"></script>
                	<script type="text/javascript" src="js/upperfont.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#tanggal").datepicker({
			dateFormat		:"yy-mm-dd",
			showAnim		:"drop",
			showOptions		:{direction:"up"},
			showButtonPanel	: true
		});
		$("#invdate").datepicker({
			dateFormat		:"yy-mm-dd",
			showAnim		:"drop",
			showOptions		:{direction:"up"},
			showButtonPanel	: true
		});
		$("#invdate2").datepicker({
			dateFormat		:"yy-mm-dd",
			showAnim		:"drop",
			showOptions		:{direction:"up"},
			showButtonPanel	: true
		});
	});
</script>
<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript">
$(function() {
    $('#time').timepicker({
		timeFormat: 'hh:mm:ss'
    });
});
</script>
<script type="text/javascript">
   $(document).ready(function() {
      $(".numbers").each(function() {
         $(this).format({format:"#,###", locale:"us"});
      });
   });
</script>
<script type="text/javascript">
$(document).ready(function(){
	
	//hide message_body after the first one
	$(".message_list .message_body:gt(0)").hide();
	
	//hide message li after the 10th
	$(".message_list li:gt(2)").hide();

	
	//toggle message_body
	$(".message_head").click(function(){
		$(this).next(".message_body").slideToggle(500)
		return false;
	});

	//collapse all messages
	$(".collpase_all_message").click(function(){
		$(".message_body").slideUp(500)
		return false;
	});

	//show all messages
	$(".show_all_message").click(function(){
		$(this).hide()
		$(".show_recent_only").show()
		$(".message_list li:gt(2)").slideDown()
		return false;
	});

	//show recent messages only
	$(".show_recent_only").click(function(){
		$(this).hide()
		$(".show_all_message").show()
		$(".message_list li:gt(2)").slideUp()
		return false;
	});

});
</script>
</head>
<body  text="#800000" leftmargin="10" topmargin="0" marginwidth="0" marginheight="0" background="images/bkglobe2.gif">
<table width="<?=$main_table_width?>" height="<?=$main_table_height?>" id="table1" style="border: <?=$main_table_borderwidth?>px solid #<?=$main_table_bordercolor?>">
<tr>
		<td align="center" valign="top" style="border: <?=$main_cell_borderwidth?>px solid #<?=$main_cell_bordercolor?>" width="98%" height="98%">
<h1><b><?=$yourcompany?> Accounting System</b></h1>
<blockquote>
<style type="text/css">
#style {
	font-size: 14px;
}
#style2 {
	font-size: 14px;
	color: #FF0000;
}
</style>
<?php
echo "
<p align='center' style='width: 100%;'>
	<a href='jurnal.php' id='style'>Daily Jurnal</a>&nbsp;|&nbsp;";
if ($_SESSION['level'] == 'admin' or $_SESSION['level'] == 'superadmin') {
echo "
	<a href='rekening.php' id='style'>Rekening</a>&nbsp;|&nbsp;";
} if ($_SESSION['level'] == 'superadmin') {
echo "
	<a href='rekening_ticket.php' id='style'>Rekening Ticket</a>&nbsp;|&nbsp;
	<a href='rekening_tour.php' id='style'>Rekening Tour</a>&nbsp;|&nbsp;
";
} if ($_SESSION['level'] == 'admin' or $_SESSION['level'] == 'superadmin') {
echo "
	<a href='trans_chart.php' id='style'>Transaction Chart</a><br>
	
	<a href='admins.php' id='style'>Manage Admin</a>&nbsp;|&nbsp;
";
} if ($_SESSION['level'] == 'superadmin') {
echo "<a href='../inc/phpmysqlautobackup/run.php' id='style2' onClick=\"return confirm('Only Admin who has the right to do this ! Are you Admin ?')\">[Backup Data]*</a>&nbsp;|&nbsp";
}
echo "
	<a href='logout.php' id='style' onClick=\"return confirm('Are you sure ?')\">Logout</a> 
</p>";
include "icon.php";
/*
$url_access = $_SERVER['REQUEST_URI'];
$ip = $_SERVER['REMOTE_ADDR'];
$isql = "INSERT INTO admin_access (adminid,admin_name,ipaddr,date,timein,url_viewed)
VALUES ('".$_SESSION['adminid']."','".$_SESSION['username']."','".$ip."','".$date_now."','".$time_now."','".$url_access."')";
$result = mysql_query($isql);
*/
?>
</blockquote>