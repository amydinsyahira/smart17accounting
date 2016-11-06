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
// Your PHP Invoice URL to where the files are.
error_reporting(0);
$site = "http://www.smart17tour.com/akuntansi";

// Database Information

$database = "akuntansi"; // Database Name smart171_jaya
$user = "root";     // DB user name smart171_jaya
$pass = "";     // DB user password jayapura
$hostname = "localhost";   // Default is localhost

// Koneksi dan memilih database di server
mysql_connect($hostname,$user,$pass) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");


// Your Company Information

$yourcompany = "SMART17TOUR";
$c_address = "JL. RE MARTADINATA 28";
$c_city = "YOGYAKARTA";
$c_state = "INDONESIA";
$c_zip = "55123";
$c_companyphone = "0274-551997";

// Company Logo for Invoice

$uselogo = "yes";  // display a logo image use "no" if you do not want a logo image
$companylogo = "logo.jpg"; // the one shown is 250 width X 100 height

// Company or Your Email Address

$youremail = "smart17tour@yahoo.com";
$powerby = "smart17tour.com"; // --NO http://-- needed, just the domain name!!

// Currency Symbol
$currency = "IDR"; // Currency symbol

// Company Payee

$payee = "SMART17TOUR"; // this is who they will make checks payable to

// Payments are due within how many days?

$due = "30 days"; // you can also set this to words, like "Immediately" or "A.S.A.P"

// Your Paypal email account information

$usepaypal = "no"; // put no between the " " to not show paypal button
$paypal = "smart17tour@yahoo.com"; // YOUR_PAYPAL_EMAIL
$paypal_curr = "USD"; // PayPal Currency Code for your Country
$paypal_lang = "ID"; // Sets the locale (language) of the PayPal login page
$button = "inc/pay.gif";

//Set to "NO" if you dont want a Thank You email sent after an invoice is paid.

// $emailoption = 'no';

// Set main table and main cell width, height and border color

$main_table_width = "100%";
$main_table_height = "100%";
$main_table_bordercolor = "800000"; // just need the color number ex.. black is 000000
$main_table_borderwidth = "2";
$main_cell_bordercolor = "000000";
$main_cell_borderwidth = "2";

// set footer border width and color

$footer_cell_borderwidth = "2";
$footer_cell_bordercolor = "000000";
?>