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
// Turn off all error reporting
error_reporting(0); 
function fixDate($val)
{
$dateArray = explode("-", $val);
$val = date("M j, Y", mktime(0,0,0, $dateArray[1], $dateArray[2], $dateArray[0]));
return $val;
}
$year = date (Y);
$mon = date (m);
$day = date (d);
$today = $year."-". $mon."-". $day;

$year = date (Y);
$mon = date (m)+1;
$day = date (d);
$p_due = $year."-". $mon."-". $day;

$lyear = date (Y)-1;
$lmon = date (m);
$lday = date (d);
$lastyear = $lyear."-". $lmon."-". $lday;

//--------day of year-----------------------
$dayofyear2 = date('z');
//-----------get year only-----------------
$dateyear = date('Y', $unix_time);
//-------days in a month------------------
$days_per_month = date('t', $unix_time);
//-------week number of year starts monday--------------
$date_week_number = date('W', $unix_time);
//------get the begining of year date---------------------
$ago = $dayofyear2; // days
$ytda = time() - ($ago * 86400);
$ytd = date("Y-m-d", $ytda);
$date_now = date('Y-m-d', time());
$time_now = date('H:i:s', time());
?>