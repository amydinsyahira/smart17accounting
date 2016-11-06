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
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
	header('Location: index.php');
	die();
}
if ($_GET['id'] == 'add_transaction_jog') {
include('action_jog.php');
} elseif ($_GET['id'] == 'add_transaction_bdg') {
include('action_bdg.php');
} elseif ($_GET['id'] == 'add_transaction_djj') {
include('action_djj.php');
}
?>