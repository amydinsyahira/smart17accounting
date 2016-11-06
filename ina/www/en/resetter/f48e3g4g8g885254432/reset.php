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
include('../../../../../inc/config.php');
$sql = mysql_query("SELECT * FROM clients WHERE password = '".$_GET['rand']."' AND id_session = '".$_GET['cookies_symphony']."'");
$x = mysql_num_rows($sql);
$xx = mysql_fetch_array($sql);
	if ($x == 0) {
		echo "<meta http-equiv='refresh' content='0; url=../../../../../forgotpassword.php?Error=".$xx['clientid']."'&cookies_symphony=".$_GET['cookies_symphony'].$_GET['rand']." />";
		die();
	} else {
		mysql_query("UPDATE clients SET password='".$_GET['session_token']."', id_session='".$_GET['session_token']."' WHERE password='".$xx['password']."'  AND id_session = '".$xx['id_session']."'");
		echo "<meta http-equiv='refresh' content='0; url=../../../../../index.php?Success=".$_GET['cookies_symphony'].$_GET['rand'].$xx['clientid']" />";
		die();
	}
?>