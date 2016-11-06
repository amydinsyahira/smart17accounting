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
include('header.php');
?>
  <blockquote>
 <h1>System Administrators</h1>
 <?php
echo '[<a href="addadmin.php">- Add an Administrator -</a>]<br /><br />';
echo "<table border=1 cellspacing=3 cellpadding=2 bordercolor=cccccc>";
echo "<tr align='center'><td><b>Login Name</b></td><td><b>Email</b></td><td><b>Branch</b></td><td><b>Level</b></td></tr>";
// jumlah data yang akan ditampilkan per halaman
$dataPerPage = 10;
// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
// sedangkan apabila belum, nomor halamannya 1.
if(isset($_GET['page']))
{
    $noPage = $_GET['page'];
}
else $noPage = 1;
// perhitungan offset
$offset = ($noPage - 1) * $dataPerPage;
if ($_SESSION['level'] == 'superadmin') {
$result = mysql_query("SELECT * FROM admins ORDER BY adminid ASC LIMIT ".$offset.", ".$dataPerPage."");
} else {
$result = mysql_query("SELECT * FROM admins WHERE adminid <> 1 AND branch = '".$_SESSION['branch']."' ORDER BY adminid ASC LIMIT ".$offset.", ".$dataPerPage."");
}
while ($row = mysql_fetch_array($result)) 
{
	$id = $row["adminid"]; 
	$name = $row["name"]; 
	$email = $row["email"];
	
	if ($alternate == "1") { 
	$color = "#ffffff"; 
	$alternate = "2"; 
	} 
	else { 
	$color = "#dedede"; 
	$alternate = "1"; 
	} 
	echo "<tr valign='top' bgcolor=".$color."><td><b>".$name."</b></td><td>".$email."</td><td>".$row["branch"]."</td><td>".$row["level"]."</td>";
	echo "<td>[ <a href='editadmin.php?id=".$id."'>edit</a> ]</td><td>[ <a href='deleteadmin.php?id=".$id."' onClick=\"return confirm('Are you sure you want to delete this admin?')\">delete</a> ]</td></tr>"; 
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
// mencari jumlah semua data dalam tabel guestbook
if ($_SESSION['level'] == 'superadmin') {
$query   = "SELECT COUNT(*) AS jumData FROM admins";
} else {
$query   = "SELECT COUNT(*) AS jumData FROM admins WHERE adminid <> 1 AND branch = '".$_SESSION['branch']."'";
}
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
?>
</blockquote>
<?php
include "footer.php";
?>