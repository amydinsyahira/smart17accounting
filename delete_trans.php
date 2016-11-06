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
include("header.php");

if ($_SESSION['level'] <> 'superadmin')
{
	echo "<br /><br /><b>OOPS, You don't have permission to Delete Transaction</b><br><br>
	<a href='jurnal.php'>Please return to the main menu now.</a>";
	include "footer.php";
	die();
}
if ($_SESSION['branch'] == 'Yogyakarta') {
	$z = mysql_fetch_array(mysql_query('SELECT * FROM trans_jogja WHERE id_jog = "'.$_GET['id'].'"'));
	if (!empty($z['code_tkt'])) {
	mysql_query("DELETE FROM trans_tiket WHERE code_tkt=".$z['code_tkt']."");
	} elseif (!empty($z['code_tur'])) {
	mysql_query("DELETE FROM trans_tour WHERE code_tur=".$z['code_tur']."");
	}
	mysql_query("DELETE FROM trans_jogja WHERE id_jog=".$z['id_jog']."");
} elseif ($_SESSION['branch'] == 'Bandung') {
	$z = mysql_fetch_array(mysql_query('SELECT * FROM trans_bandung WHERE id_bdg = "'.$_GET['id'].'"'));
	if (!empty($z['code_tkt'])) {
	mysql_query("DELETE FROM trans_tiket WHERE code_tkt=".$z['code_tkt']."");
	} elseif (!empty($z['code_tur'])) {
	mysql_query("DELETE FROM trans_tour WHERE code_tur=".$z['code_tur']."");
	}
	mysql_query("DELETE FROM trans_bandung WHERE id_bdg=".$z['id_bdg']."");
} elseif ($_SESSION['branch'] == 'Jayapura') {
	$z = mysql_fetch_array(mysql_query('SELECT * FROM trans_jayapura WHERE id_djj = "'.$_GET['id'].'"'));
	if (!empty($z['code_tkt'])) {
	mysql_query("DELETE FROM trans_tiket WHERE code_tkt=".$z['code_tkt']."");
	} elseif (!empty($z['code_tur'])) {
	mysql_query("DELETE FROM trans_tour WHERE code_tur=".$z['code_tur']."");
	}
	mysql_query("DELETE FROM trans_jayapura WHERE id_djj=".$z['id_djj']."");
}

echo "Transaction ".$id." has been Deleted<br /><br />";

include "footer.php";
?>