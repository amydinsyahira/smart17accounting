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
include "header.php";
$url_access=$_SERVER['REQUEST_URI'] ;
if ($_SESSION['level'] == 'superadmin') {
?>
<h2><br>Hello&nbsp;<b>"<?=$_SESSION['username'];?>",&nbsp;you are logged in as Super Admin<br />
You are entitled to access all pages on this system</b></h2>
<?php } else if ($_SESSION['level'] == 'admin') { ?>
<h2><br>Hello&nbsp;<b>"<?=$_SESSION['username'];?>",&nbsp;you are logged in as Admin<br />
You are entitled to access all pages on this system</b></h2>
<?php } else { ?>
<h2><br>Hello&nbsp;<b>"<?=$_SESSION['username'];?>",&nbsp;you are logged in as Operator<br />
You are entitled to access some pages on this system</b></h2>
<?php
}
echo " This is the ".$dayofyear2." day of the year.<br>";
echo " Showing Accounting from ".$ytd."";
if ($_SESSION['branch'] == 'Yogyakarta') {
include('jurnal_jog.php');
} elseif ($_SESSION['branch'] == 'Bandung') {
include('jurnal_bdg.php');
} elseif ($_SESSION['branch'] == 'Jayapura') {
include('jurnal_djj.php');
}
include "footer.php";
?>
<script type="text/javascript">
function cari() {
		document.getElementById('toggle77').style.display = "";
		document.getElementById('toggle78').style.display = "none";
}
function cari2() {
		document.getElementById('toggle77').style.display = "none";
		document.getElementById('toggle78').style.display = "";
}
</script>