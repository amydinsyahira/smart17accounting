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
if ($_SESSION['branch'] == 'Yogyakarta') {
include('rekening_jog.php');
} elseif ($_SESSION['branch'] == 'Bandung') {
include('rekening_bdg.php');
} elseif ($_SESSION['branch'] == 'Jayapura') {
include('rekening_djj.php');
}
echo '<script type="text/javascript" src="js/validation2.js"></script>';
include "footer.php";
?>