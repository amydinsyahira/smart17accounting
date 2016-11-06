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
$rt = mysql_fetch_array(mysql_query('SELECT * FROM rek_tiket WHERE no_rek_tkt = "'.$_POST['rekening'].'" OR rek_tkt = "'.$_GET['ID'].'"'));
echo '<h1>Rekening '.$rt['rek_tkt'].'</h1>';
?>
<div style="border:4px ridge #CCFF00; background-color: #FFCC00; width: 45%;">
<form method="post" action="<?=$_SERVER['PHP_SELF']?>" name="form17" id="form17">
<select name="rekening" id="rekening">
	<?php if($_POST['update'] or $_POST['submit'] or $_POST['search']){ 
				if (empty($rt['no_rek_tkt'])) { ?>
            <option value="" selected="selected">Select Transaction:</option>
				<?php } else {?>
            <option value="<?=$rt['no_rek_tkt']?>" selected="selected"><?=$rt['rek_tkt']?></option>
				<?php } ?>
	<?php } else { ?>
            <option value="" selected="selected">Select Transaction:</option>
	<?php } ?>
            <optgroup label="------ Ticket ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_tiket ORDER BY id_rek_tkt ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_tkt = $lz['no_rek_tkt'];
			$rek_tkt = $lz['rek_tkt'];
			?>
            <option value="<?=$no_rek_tkt?>"><?=$rek_tkt?></option>
            <?php } ?>
            </optgroup>
</select>
<input type="submit" name="submit" id="submit" value="Submit" />
</form></div>
<link rel="stylesheet" href="print.css" type="text/css" media="print" />
<style type="text/css">
<!--
.style4 {font-size: 18px; color: #990000; }
-->
</style>
<br /><br />
<?php if($_POST['submit'] or $_POST['update'] or $_GET['page'] or $_POST['search']){ ?>
<a href="#" class="style4" onClick="javascript: cari();">Search by Date</a>&nbsp;<span class="style4">|</span>&nbsp;<a href="#" class="style4" onClick="javascript: cari2();">Search Based on All</a><br /><br />
<table width="93%" border="0" id="toggle77">
<form method="post" name="form1" action="<?=$_SERVER['PHP_SELF']?>" class="noPrint">
<input type="hidden" name="rekening" id="rekening" value="<?=$rt['no_rek_tkt']?>" />
<tr align="center">
<td>Start Date:&nbsp;<input type="text" name="invdate" id="invdate" />&nbsp;
End Date:&nbsp;<input type="text" name="invdate2" id="invdate2" />&nbsp;
<input type="Submit" name="update" value="Search By Date"></form></td></tr></table>
<table width="93%" border="0" id="toggle78" style="display: none;">
<form name="search" method="post" action="<?=$PHP_SELF?>" class="noPrint">
<input type="hidden" name="rekening" id="rekening" value="<?=$rt['no_rek_tkt']?>" />
<tr align="center">
<td>Search for: <input type="text" name="find" />&nbsp;&nbsp;by&nbsp;&nbsp;
<Select NAME="field">
<Option VALUE="client_tkt">Client</option>
<Option VALUE="hp_tkt">HP Client</option>
<Option VALUE="ket_tkt">Transaction</option>
<Option VALUE="notrans_tkt">No.Transaction</option>
<Option VALUE="branch_tkt">Branch</option>
<Option VALUE="operator_tkt">Operator</option>
</Select>&nbsp;
<input type="submit" name="search" value="Search Based On All" /></form></td></tr></table>
<?php
}
if($_POST['update'] or $_POST['submit'] or $_POST['search']){
echo '<br /><input type="image" src="images/printhistory.png" onclick="javascript: print();" class="noPrint" />';
} else {
echo '';
}
include('add_transaction.php');
if ($_POST['rekening'] or $rt['no_rek_tkt']) {
 if (!empty($_POST['update'])){
		if (empty($_POST['invdate']) or empty($_POST['invdate2'])) {
			echo "You forgot to enter a search term";
		} else {
			echo 'Your search was for "'.$_POST['invdate'].'" to "'.$_POST['invdate2'].'"';
		}
	$xx = mysql_fetch_array(mysql_query("SELECT * FROM trans_tiket WHERE (deb_ref_tkt = '".$_POST['rekening']."' OR deb_ref2_tkt = '".$_POST['rekening']."' OR deb_ref3_tkt = '".$_POST['rekening']."' OR deb_ref4_tkt = '".$_POST['rekening']."') OR (kre_ref_tkt = '".$_POST['rekening']."' OR kre_ref2_tkt = '".$_POST['rekening']."' OR kre_ref3_tkt = '".$_POST['rekening']."' OR kre_ref4_tkt = '".$_POST['rekening']."')"));
	if (!empty($xx['deb_ref_tkt'])) {
		$deb_kre_tkt = "deb_ref_tkt = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref2_tkt'])) {
		$deb_kre_tkt = "deb_ref2_tkt = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref3_tkt'])) {
		$deb_kre_tkt = "deb_ref3_tkt = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref4_tkt'])) {
		$deb_kre_tkt = "deb_ref4_tkt = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref_tkt'])) {
		$deb_kre_tkt = "kre_ref_tkt = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref2_tkt'])) {
		$deb_kre_tkt = "kre_ref2_tkt = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref3_tkt'])) {
		$deb_kre_tkt = "kre_ref3_tkt = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref4_tkt'])) {
		$deb_kre_tkt = "kre_ref4_tkt = '".$_POST['rekening']."'";
	}
	$result = mysql_query("SELECT * FROM trans_tiket WHERE ".$deb_kre_tkt." AND tgltrans_tkt BETWEEN '".$_POST['invdate']."' AND '".$_POST['invdate2']."' ORDER BY id_tkt ASC");
 } elseif (!empty($_POST['search'])){
		if (empty($_POST['find'])) {
			echo "You forgot to enter a search term";
		} else {
			echo 'You search "'.$_POST['find'].'"';
		}
	$xx = mysql_fetch_array(mysql_query("SELECT * FROM trans_tiket WHERE (deb_ref_tkt = '".$_POST['rekening']."' OR deb_ref2_tkt = '".$_POST['rekening']."' OR deb_ref3_tkt = '".$_POST['rekening']."' OR deb_ref4_tkt = '".$_POST['rekening']."') OR (kre_ref_tkt = '".$_POST['rekening']."' OR kre_ref2_tkt = '".$_POST['rekening']."' OR kre_ref3_tkt = '".$_POST['rekening']."' OR kre_ref4_tkt = '".$_POST['rekening']."')"));
	if (!empty($xx['deb_ref_tkt'])) {
		$deb_kre_tkt = "deb_ref_tkt = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref2_tkt'])) {
		$deb_kre_tkt = "deb_ref2_tkt = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref3_tkt'])) {
		$deb_kre_tkt = "deb_ref3_tkt = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref4_tkt'])) {
		$deb_kre_tkt = "deb_ref4_tkt = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref_tkt'])) {
		$deb_kre_tkt = "kre_ref_tkt = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref2_tkt'])) {
		$deb_kre_tkt = "kre_ref2_tkt = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref3_tkt'])) {
		$deb_kre_tkt = "kre_ref3_tkt = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref4_tkt'])) {
		$deb_kre_tkt = "kre_ref4_tkt = '".$_POST['rekening']."'";
	}
// We preform a bit of filtering 
$find = strtoupper($find); 
$find = strip_tags($find); 
$find = trim ($find);
	$result = mysql_query("SELECT * FROM trans_tiket WHERE ".$deb_kre_tkt." AND upper(".$field.") LIKE '%".$find."%' ORDER BY id_tkt ASC");
 } else {
	$result = mysql_query("SELECT * FROM trans_tiket WHERE (deb_ref_tkt LIKE '".$_POST['rekening']."' OR deb_ref2_tkt LIKE '".$_POST['rekening']."' OR deb_ref3_tkt LIKE '".$_POST['rekening']."' OR deb_ref4_tkt LIKE '".$_POST['rekening']."') OR (kre_ref_tkt LIKE '".$_POST['rekening']."' OR kre_ref2_tkt LIKE '".$_POST['rekening']."' OR kre_ref3_tkt LIKE '".$_POST['rekening']."' OR kre_ref4_tkt LIKE '".$_POST['rekening']."') ORDER BY id_tkt ASC");
	}
	echo "<table border='1' cellspacing='0' cellpadding='2' bordercolor='#000000' width='100%'>";
	echo "<tr align=\"center\">
	<td class='topHeadrow5' rowspan='2'><b>No.<br />Transaction</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Date</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Client</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Transaction</b></td>
	<td class='topHeadrow5' rowspan='2'><b>F</b></td>
	<td class='topHeadrow5' colspan='2'><b>Debit&nbsp;(".$currency.")</b></td>
	<td class='topHeadrow5' colspan='2'><b>Credit&nbsp;(".$currency.")</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Profit<br />(".$currency.")</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Branch</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Operator</b></td></tr>
	<tr align='center'>
	<td class='topHeadrow5'>Ref</td>
	<td class='topHeadrow5'>&nbsp;</td>
	<td class='topHeadrow5'>Ref</td>
	<td class='topHeadrow5'>&nbsp;</td>
	</tr>";
	$saldo = 0;
	while ($r = mysql_fetch_array($result))
	{
		$id_tkt = $r['id_tkt'];
		$client_tkt = $r['client_tkt'];
		$hp_tkt = $r['hp_tkt'];
		$notrans_tkt = $r['notrans_tkt'];
		$tgltrans_tkt = $r['tgltrans_tkt'];
		$jamtrans_tkt = $r['jamtrans_tkt'];
		$ket_tkt = $r['ket_tkt'];
		$deb_ref_tkt = $r['deb_ref_tkt'];
		$deb_ref2_tkt = $r['deb_ref2_tkt'];
		$deb_ref3_tkt = $r['deb_ref3_tkt'];
		$deb_ref4_tkt = $r['deb_ref4_tkt'];
		$deb_jml_tkt = $r['deb_jml_tkt'];
		$deb_jml2_tkt = $r['deb_jml2_tkt'];
		$deb_jml3_tkt = $r['deb_jml3_tkt'];
		$deb_jml4_tkt = $r['deb_jml4_tkt'];
		$kre_ref_tkt = $r['kre_ref_tkt'];
		$kre_ref2_tkt = $r['kre_ref2_tkt'];
		$kre_ref3_tkt = $r['kre_ref3_tkt'];
		$kre_ref4_tkt = $r['kre_ref4_tkt'];
		$kre_jml_tkt = $r['kre_jml_tkt'];
		$kre_jml2_tkt = $r['kre_jml2_tkt'];
		$kre_jml3_tkt = $r['kre_jml3_tkt'];
		$kre_jml4_tkt = $r['kre_jml4_tkt'];
		$profit_tkt = $r['profit_tkt'];
		$branch_tkt = $r['branch_tkt'];
		$operator_tkt = $r['operator_tkt'];

	if ($alternate == "1") {
		$color = "#ffffff";
		$alternate = "2";
	} else {
		$color = "#e5e5e5";
		$alternate = "1";
	}
	if ($deb_ref_tkt == $_POST['rekening']) {
		$debkre_ref_tkt = $deb_ref_tkt;
		$debkre_jml_tkt = $deb_jml_tkt;
		$saldo = $saldo + $debkre_jml_tkt;
	} elseif ($deb_ref2_tkt == $_POST['rekening']) {
		$debkre_ref_tkt = $deb_ref2_tkt;
		$debkre_jml_tkt = $deb_jml2_tkt;
		$saldo = $saldo + $debkre_jml_tkt;
	} elseif ($deb_ref3_tkt == $_POST['rekening']) {
		$debkre_ref_tkt = $deb_ref3_tkt;
		$debkre_jml_tkt = $deb_jml3_tkt;
		$saldo = $saldo + $debkre_jml_tkt;
	} elseif ($deb_ref4_tkt == $_POST['rekening']) {
		$debkre_ref_tkt = $deb_ref4_tkt;
		$debkre_jml_tkt = $deb_jml4_tkt;
		$saldo = $saldo + $debkre_jml_tkt;
	} if ($kre_ref_tkt == $_POST['rekening']) {
		$debkre_ref2_tkt = $kre_ref_tkt;
		$debkre_jml2_tkt = $kre_jml_tkt;
		$saldo = $saldo - $debkre_jml2_tkt;
	} elseif ($kre_ref2_tkt == $_POST['rekening']) {
		$debkre_ref2_tkt = $kre_ref2_tkt;
		$debkre_jml2_tkt = $kre_jml2_tkt;
		$saldo = $saldo - $debkre_jml2_tkt;
	} elseif ($kre_ref3_tkt == $_POST['rekening']) {
		$debkre_ref2_tkt = $kre_ref3_tkt;
		$debkre_jml2_tkt = $kre_jml3_tkt;
		$saldo = $saldo - $debkre_jml2_tkt;
	} elseif ($kre_ref4_tkt == $_POST['rekening']) {
		$debkre_ref2_tkt = $kre_ref4_tkt;
		$debkre_jml2_tkt = $kre_jml4_tkt;
		$saldo = $saldo - $debkre_jml2_tkt;
	}

		if ($deb_ref_tkt == $_POST['rekening'] || $deb_ref2_tkt == $_POST['rekening'] || $deb_ref3_tkt == $_POST['rekening'] || $deb_ref4_tkt == $_POST['rekening']) {
	echo "
	<tr valign='top' bgcolor='".$color."' align='center'>
	<td>".$notrans_tkt."</td>
	<td>".$tgltrans_tkt."<br />".$jamtrans_tkt."</td>
	<td width='15%'>".$client_tkt."<br />".$hp_tkt."</td>
	<td width='15%'>".$ket_tkt."</td>
	<td width='3%'>R</td>
	<td width='3%'>".$debkre_ref_tkt."</td>
	<td width='10%' class='numbers'>".$debkre_jml_tkt."</td>
	<td width='3%'>&nbsp;</td>
	<td width='10%'>&nbsp;</td>
	<td width='5%' class='numbers'>".$profit_tkt."</td>
	<td>".$branch_tkt."</td>
	<td>".$operator_tkt."</td>
	</tr>";
		} else {
	echo "
	<tr valign='top' bgcolor='".$color."' align='center'>
	<td>".$notrans_tkt."</td>
	<td>".$tgltrans_tkt."<br />".$jamtrans_tkt."</td>
	<td width='15%'>".$client_tkt."<br />".$hp_tkt."</td>
	<td width='15%'>".$ket_tkt."</td>
	<td width='3%'>R</td>
	<td width='3%'>&nbsp;</td>
	<td width='10%'>&nbsp;</td>
	<td width='3%'>".$debkre_ref2_tkt."</td>
	<td width='10%' class='numbers'>".$debkre_jml2_tkt."</td>
	<td width='5%' class='numbers'>".$profit_tkt."</td>
	<td>".$branch_tkt."</td>
	<td>".$operator_tkt."</td>
	</tr>";
		}
	}
	echo "</table><br />";
} else {
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
$result7 = mysql_query("SELECT * FROM trans_tiket ORDER BY id_tkt ASC LIMIT ".$offset.", ".$dataPerPage."");
	echo "<table border='1' cellspacing='0' cellpadding='2' bordercolor='#000000' width='100%'>";
	echo "<tr align=\"center\">
	<td class='topHeadrow5' rowspan='2'><b>No.<br />Transaction</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Date</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Client</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Transaction</b></td>
	<td class='topHeadrow5' rowspan='2'><b>F</b></td>
	<td class='topHeadrow5' colspan='2'><b>Debit&nbsp;(".$currency.")</b></td>
	<td class='topHeadrow5' colspan='2'><b>Credit&nbsp;(".$currency.")</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Profit<br />(".$currency.")</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Branch</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Operator</b></td></tr>
	<tr align='center'>
	<td class='topHeadrow5'>Ref</td>
	<td class='topHeadrow5'>&nbsp;</td>
	<td class='topHeadrow5'>Ref</td>
	<td class='topHeadrow5'>&nbsp;</td>
	</tr>";
	while ($r = mysql_fetch_array($result7))
	{
		$id_tkt = $r['id_tkt'];
		$client_tkt = $r['client_tkt'];
		$hp_tkt = $r['hp_tkt'];
		$notrans_tkt = $r['notrans_tkt'];
		$tgltrans_tkt = $r['tgltrans_tkt'];
		$jamtrans_tkt = $r['jamtrans_tkt'];
		$ket_tkt = $r['ket_tkt'];
		$deb_ref_tkt = $r['deb_ref_tkt'];
		$deb_ref2_tkt = $r['deb_ref2_tkt'];
		$deb_ref3_tkt = $r['deb_ref3_tkt'];
		$deb_ref4_tkt = $r['deb_ref4_tkt'];
		$deb_jml_tkt = $r['deb_jml_tkt'];
		$deb_jml2_tkt = $r['deb_jml2_tkt'];
		$deb_jml3_tkt = $r['deb_jml3_tkt'];
		$deb_jml4_tkt = $r['deb_jml4_tkt'];
		$kre_ref_tkt = $r['kre_ref_tkt'];
		$kre_ref2_tkt = $r['kre_ref2_tkt'];
		$kre_ref3_tkt = $r['kre_ref3_tkt'];
		$kre_ref4_tkt = $r['kre_ref4_tkt'];
		$kre_jml_tkt = $r['kre_jml_tkt'];
		$kre_jml2_tkt = $r['kre_jml2_tkt'];
		$kre_jml3_tkt = $r['kre_jml3_tkt'];
		$kre_jml4_tkt = $r['kre_jml4_tkt'];
		$profit_tkt = $r['profit_tkt'];
		$branch_tkt = $r['branch_tkt'];
		$operator_tkt = $r['operator_tkt'];

	if ($alternate == "1") {
		$color = "#ffffff";
		$alternate = "2";
	} else {
		$color = "#e5e5e5";
		$alternate = "1";
	}
	if (!empty($deb_ref_tkt)) {
		$debkre_ref_tkt = $deb_ref_tkt;
		$debkre_jml_tkt = $deb_jml_tkt;
		$saldo = $saldo + $debkre_jml_tkt;
	} elseif (!empty($deb_ref2_tkt)) {
		$debkre_ref_tkt = $deb_ref2_tkt;
		$debkre_jml_tkt = $deb_jml2_tkt;
		$saldo = $saldo + $debkre_jml_tkt;
	} elseif (!empty($deb_ref3_tkt)) {
		$debkre_ref_tkt = $deb_ref3_tkt;
		$debkre_jml_tkt = $deb_jml3_tkt;
		$saldo = $saldo + $debkre_jml_tkt;
	} elseif (!empty($deb_ref4_tkt)) {
		$debkre_ref_tkt = $deb_ref4_tkt;
		$debkre_jml_tkt = $deb_jml4_tkt;
		$saldo = $saldo + $debkre_jml_tkt;
	} if (!empty($kre_ref_tkt)) {
		$debkre_ref2_tkt = $kre_ref_tkt;
		$debkre_jml2_tkt = $kre_jml_tkt;
		$saldo = $saldo - $debkre_jml2_tkt;
	} elseif (!empty($kre_ref2_tkt)) {
		$debkre_ref2_tkt = $kre_ref2_tkt;
		$debkre_jml2_tkt = $kre_jml2_tkt;
		$saldo = $saldo - $debkre_jml2_tkt;
	} elseif (!empty($kre_ref3_tkt)) {
		$debkre_ref2_tkt = $kre_ref3_tkt;
		$debkre_jml2_tkt = $kre_jml3_tkt;
		$saldo = $saldo - $debkre_jml2_tkt;
	} elseif (!empty($kre_ref4_tkt)) {
		$debkre_ref2_tkt = $kre_ref4_tkt;
		$debkre_jml2_tkt = $kre_jml4_tkt;
		$saldo = $saldo - $debkre_jml2_tkt;
	}

		if (!empty($deb_ref_tkt) || !empty($deb_ref2_tkt) || !empty($deb_ref3_tkt) || !empty($deb_ref4_tkt)) {
	echo "
	<tr valign='top' bgcolor='".$color."' align='center'>
	<td>".$notrans_tkt."</td>
	<td>".$tgltrans_tkt."<br />".$jamtrans_tkt."</td>
	<td width='15%'>".$client_tkt."<br />".$hp_tkt."</td>
	<td width='15%'>".$ket_tkt."</td>
	<td width='3%'>R</td>
	<td width='3%'>".$debkre_ref_tkt."</td>
	<td width='10%' class='numbers'>".$debkre_jml_tkt."</td>
	<td width='3%'>&nbsp;</td>
	<td width='10%'>&nbsp;</td>
	<td width='5%' class='numbers'>".$profit_tkt."</td>
	<td>".$branch_tkt."</td>
	<td>".$operator_tkt."</td>
	</tr>";
		} else {
	echo "
	<tr valign='top' bgcolor='".$color."' align='center'>
	<td>".$notrans_tkt."</td>
	<td>".$tgltrans_tkt."<br />".$jamtrans_tkt."</td>
	<td width='15%'>".$client_tkt."<br />".$hp_tkt."</td>
	<td width='15%'>".$ket_tkt."</td>
	<td width='3%'>R</td>
	<td width='3%'>&nbsp;</td>
	<td width='10%'>&nbsp;</td>
	<td width='3%'>".$debkre_ref2_tkt."</td>
	<td width='10%' class='numbers'>".$debkre_jml2_tkt."</td>
	<td width='5%' class='numbers'>".$profit_tkt."</td>
	<td>".$branch_tkt."</td>
	<td>".$operator_tkt."</td>
	</tr>";
		}
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
$query   = "SELECT COUNT(*) AS jumData FROM trans_tiket";
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