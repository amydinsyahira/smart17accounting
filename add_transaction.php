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
?>
<ol class="message_list">
	<div class="message_head"></div>
	<div class="message_body"></div>
	<div class="message_head" align="right" style=" width: 90%;"><a href="#"><img src="images/add.png" /></a></div>
<div class="message_body" style="border:4px ridge #CCFF00; background-color: #FFCC00; width: 55%;">
<h2>Add Transaction</h2><hr size="1px" color="#999999" noshade="noshade" width="70%" />
<?php
if ($_SESSION['branch'] == 'Yogyakarta') {
include('add_transaction_jog.php');
} elseif ($_SESSION['branch'] == 'Bandung') {
include('add_transaction_bdg.php');
} elseif ($_SESSION['branch'] == 'Jayapura') {
include('add_transaction_djj.php');
}
?>
</div></ol>
<script type="text/javascript" src="js/validation.js"></script>