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
<link rel="stylesheet" href="print.css" type="text/css" media="print" />
<style type="text/css">
<!--
.style4 {font-size: 18px; color: #990000; }
-->
</style>
<br /><br />
<a href="#" class="style4" onClick="javascript: cari();">Search by Date</a>&nbsp;<span class="style4">|</span>&nbsp;<a href="#" class="style4" onClick="javascript: cari2();">Search Based on All</a><br /><br />
<table width="93%" border="0" id="toggle77">
<form method="post" name="form1" action="<?=$_SERVER['PHP_SELF']?>" class="noPrint">
<tr align="center">
<td>Start Date:&nbsp;<input type="text" name="invdate" id="invdate" />&nbsp;
End Date:&nbsp;<input type="text" name="invdate2" id="invdate2" />&nbsp;
<input type="Submit" name="update" value="Search By Date"></form></td></tr></table>
<table width="93%" border="0" id="toggle78" style="display: none;">
<form name="search" method="post" action="<?=$PHP_SELF?>" class="noPrint">
<tr align="center">
<td>Search for: <input type="text" name="find" />&nbsp;&nbsp;by&nbsp;&nbsp;
<Select NAME="field">
<Option VALUE="client_djj">Client</option>
<Option VALUE="hp_djj">HP Client</option>
<Option VALUE="ket_djj">Transaction</option>
<Option VALUE="notrans_djj">No.Transaction</option>
<Option VALUE="operator_djj">Operator</option>
</Select>&nbsp;
<input type="submit" name="search" value="Search Based On All" /></form></td></tr></table>
<?php
if($update or $submit or $search){
echo '<br /><input type="image" src="images/printhistory.png" onclick="javascript: print();" class="noPrint" />';
} else {
echo '';
}
include('add_transaction.php');
// jumlah data yang akan ditampilkan per halaman
$dataPerPage = 20;
// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
// sedangkan apabila belum, nomor halamannya 1.
if(isset($_GET['page']))
{
    $noPage = $_GET['page'];
}
else $noPage = 1;
// perhitungan offset
$offset = ($noPage - 1) * $dataPerPage;
if ($_POST['update']){
	if (empty($_POST['invdate']) or empty($_POST['invdate2'])) {
		echo "<br /><br />You forgot to enter a search term";
	} else {
		echo "<br /><br />Your search was for ".$invdate." to ".$invdate2."";
	}
	$result = mysql_query("SELECT * FROM trans_jayapura WHERE tgltrans_djj BETWEEN '".$invdate."' AND '".$invdate2."' ORDER BY id_djj DESC");
	$result2 = mysql_query("SELECT sum(deb_jml_djj + deb_jml2_djj + deb_jml3_djj + deb_jml4_djj) AS deb FROM trans_jayapura WHERE tgltrans_djj BETWEEN '".$invdate."' AND '".$invdate2."'");
	$deb = mysql_result($result2,0,"deb");
	$result3 = mysql_query("SELECT sum(kre_jml_djj + kre_jml2_djj + kre_jml3_djj + kre_jml4_djj) AS kre FROM trans_jayapura WHERE tgltrans_djj BETWEEN '".$invdate."' AND '".$invdate2."'");
	$kre = mysql_result($result3,0,"kre");
} elseif ($_POST['search']){
	if (empty($_POST['find'])) {
		echo "<br /><br />You forgot to enter a search term";
	} else {
		echo '<br /><br />You search "'.$find.'"';
	}
// We preform a bit of filtering 
$find = strtoupper($find); 
$find = strip_tags($find); 
$find = trim ($find);
	$result = mysql_query("SELECT * FROM trans_jayapura WHERE upper(".$field.") LIKE '%".$find."%' ORDER BY id_djj DESC");
	$result2 = mysql_query("SELECT sum(deb_jml_djj + deb_jml2_djj + deb_jml3_djj + deb_jml4_djj) AS deb FROM trans_jayapura WHERE upper(".$field.") LIKE '%".$find."%'");
	$deb = mysql_result($result2,0,"deb");
	$result3 = mysql_query("SELECT sum(kre_jml_djj + kre_jml2_djj + kre_jml3_djj + kre_jml4_djj) AS kre FROM trans_jayapura WHERE upper(".$field.") LIKE '%".$find."%'");
	$kre = mysql_result($result3,0,"kre");
} else {
	$result = mysql_query("SELECT * FROM trans_jayapura WHERE tgltrans_djj ORDER BY id_djj DESC LIMIT ".$offset.", ".$dataPerPage."");
	$result2 = mysql_query("SELECT sum(deb_jml_djj + deb_jml2_djj + deb_jml3_djj + deb_jml4_djj) AS deb FROM trans_jayapura");
	$deb = mysql_result($result2,0,"deb");
	$result3 = mysql_query("SELECT sum(kre_jml_djj + kre_jml2_djj + kre_jml3_djj + kre_jml4_djj) AS kre FROM trans_jayapura");
	$kre = mysql_result($result3,0,"kre");
}
echo "<table border='1' cellspacing='0' cellpadding='2' bordercolor='#000000' width='95%'>";
echo "<tr align=\"center\">
<td class='topHeadrow5' rowspan='2'><b>No.Transaction</b></td>
<td class='topHeadrow5' rowspan='2'><b>Date</b></td>
<td class='topHeadrow5' rowspan='2'><b>Client</b></td>
<td class='topHeadrow5' rowspan='2'><b>Transaction</b></td>
<td class='topHeadrow5' colspan='2'><b>Debit&nbsp;(".$currency.")</b></td>
<td class='topHeadrow5' colspan='2'><b>Credit&nbsp;(".$currency.")</b></td>
<td class='topHeadrow5' rowspan='2'><b>Operator</b></td>
<td class='topHeadrow5' rowspan='2'><b>&nbsp;</b></td></tr>
<tr align='center'>
<td class='topHeadrow5'>Ref</td>
<td class='topHeadrow5'>&nbsp;</td>
<td class='topHeadrow5'>Ref</td>
<td class='topHeadrow5'>&nbsp;</td>
</tr>";
while ($r = mysql_fetch_array($result))
{
	$id_djj = $r['id_djj'];
	$client_djj = $r['client_djj'];
	$hp_djj = $r['hp_djj'];
	$notrans_djj = $r['notrans_djj'];
	$tgltrans_djj = $r['tgltrans_djj'];
	$jamtrans_djj = $r['jamtrans_djj'];
	$ket_djj = $r['ket_djj'];
	$deb_ref_djj = $r['deb_ref_djj'];
	$deb_ref2_djj = $r['deb_ref2_djj'];
	$deb_ref3_djj = $r['deb_ref3_djj'];
	$deb_ref4_djj = $r['deb_ref4_djj'];
	$deb_jml_djj = $r['deb_jml_djj'];
	$deb_jml2_djj = $r['deb_jml2_djj'];
	$deb_jml3_djj = $r['deb_jml3_djj'];
	$deb_jml4_djj = $r['deb_jml4_djj'];
	$kre_ref_djj = $r['kre_ref_djj'];
	$kre_ref2_djj = $r['kre_ref2_djj'];
	$kre_ref3_djj = $r['kre_ref3_djj'];
	$kre_ref4_djj = $r['kre_ref4_djj'];
	$kre_jml_djj = $r['kre_jml_djj'];
	$kre_jml2_djj = $r['kre_jml2_djj'];
	$kre_jml3_djj = $r['kre_jml3_djj'];
	$kre_jml4_djj = $r['kre_jml4_djj'];
	$operator_djj = $r['operator_djj'];

if ($alternate == "1") {
	$color = "#ffffff";
	$alternate = "2";
} else {
	$color = "#e5e5e5";
	$alternate = "1";
}
if (empty($deb_jml_djj) || $deb_jml_djj == 0) {
	$deb_jml_djj = '';
} else {
	$deb_jml_djj = "<font class='numbers'>".$deb_jml_djj."</font>";
} if (empty($deb_jml2_djj) || $deb_jml2_djj == 0) {
	$deb_jml2_djj = '';
} else {
	$deb_jml2_djj = "<font class='numbers'>".$deb_jml2_djj."</font>";
} if (empty($deb_jml3_djj) || $deb_jml3_djj == 0) {
	$deb_jml3_djj = '';
} else {
	$deb_jml3_djj = "<font class='numbers'>".$deb_jml3_djj."</font>";
} if (empty($deb_jml4_djj) || $deb_jml4_djj == 0) {
	$deb_jml4_djj = '';
} else {
	$deb_jml4_djj = "<font class='numbers'>".$deb_jml4_djj."</font>";
} if (empty($kre_jml_djj) || $kre_jml_djj == 0) {
	$kre_jml_djj = '';
} else {
	$kre_jml_djj = "<font class='numbers'>".$kre_jml_djj."</font>";
} if (empty($kre_jml2_djj) || $kre_jml2_djj == 0) {
	$kre_jml2_djj = '';
} else {
	$kre_jml2_djj = "<font class='numbers'>".$kre_jml2_djj."</font>";
} if (empty($kre_jml3_djj) || $kre_jml3_djj == 0) {
	$kre_jml3_djj = '';
} else {
	$kre_jml3_djj = "<font class='numbers'>".$kre_jml3_djj."</font>";
} if (empty($kre_jml4_djj) || $kre_jml4_djj == 0) {
	$kre_jml4_djj = '';
} else {
	$kre_jml4_djj = "<font class='numbers'>".$kre_jml4_djj."</font>";
}

echo "
<tr valign='top' bgcolor='".$color."' align='center'>
<td>".$notrans_djj."</td>
<td>".$tgltrans_djj."<br />".$jamtrans_djj."</td>
<td width='17%'>".$client_djj."<br />".$hp_djj."</td>
<td width='20%'>".$ket_djj."</td>
<td width='5%'>".$deb_ref_djj."<br />".$deb_ref2_djj."<br />".$deb_ref3_djj."<br />".$deb_ref4_djj."</td>
<td width='10%'>".$deb_jml_djj."<br />".$deb_jml2_djj."<br />".$deb_jml3_djj."<br />".$deb_jml4_djj."</td>
<td width='5%'>".$kre_ref_djj."<br />".$kre_ref2_djj."<br />".$kre_ref3_djj."<br />".$kre_ref4_djj."</td>
<td width='10%'>".$kre_jml_djj."<br />".$kre_jml2_djj."<br />".$kre_jml3_djj."<br />".$kre_jml4_djj."</td>
<td>".$operator_djj."</td>
";
echo "<td align=\"center\"><a href='edit_trans.php?id=".$id_djj."'>[edit]</a>&nbsp;
<a href='delete_trans.php?id=".$id_djj."' onClick=\"return confirm('Are you sure?')\">[delete]</a></td></tr>"; 
}

if ($sum == 1){
echo "<tr><td colspan='5'></td>
<td align='right'>Total: $0</td><td></td>
<td align='right'>Total: $0</td>
<td colspan='2'></td></tr>";
}else{
echo "<tr><td colspan='5'></td>
<td align='right'>Total: <font face='Verdana' size='1' color='red' class='numbers'>".$deb."</font>&nbsp;<font face='Verdana' size='1' color='red'>".$currency."</font></td><td></td>
<td align='right'>Total: <font face='Verdana' size='1' color='red' class='numbers'>".$kre."</font>&nbsp;<font face='Verdana' size='1' color='red'>".$currency."</font></td>
<td colspan='2'></td></tr>";
}
echo "</table><br />";
echo '
<style type="text/css">
b#pages{	
padding:5px; 
border:solid 1px #dddddd;
color:#0063DC; 
}
b#pages:hover
{ 
color:#FF0084; 
cursor: pointer; 
}
</style>
';
if($_POST['update']){
echo '';
} else {
// mencari jumlah semua data dalam tabel guestbook
$query   = "SELECT COUNT(*) AS jumData FROM trans_jayapura";
$hasil  = mysql_query($query);
$data     = mysql_fetch_array($hasil);

$jumData = $data['jumData'];

// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
$jumPage = ceil($jumData/$dataPerPage);
echo "<b>Page:</b>&nbsp;";
// menampilkan link previous
if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'><b id='pages'>&lt;&lt; Sebelumnya</b></a>";

// memunculkan nomor halaman dan linknya
for($page = 1; $page <= $jumPage; $page++)
{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
         {
            if (($showPage == 1) && ($page != 2))  echo "...";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            if ($page == $noPage) echo " <b id='pages'><font color='red'>".$page."</font></b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."'><b id='pages'>".$page."</b></a> ";
            $showPage = $page;
         }
}
// menampilkan link next
if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'><b id='pages'>Selanjutnya &gt;&gt;</b></a>";
}
echo '<br /><br />';
?>