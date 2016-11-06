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
$rt = mysql_fetch_array(mysql_query('SELECT * FROM rek_tour WHERE no_rek_tur = "'.$_POST['rekening'].'" OR rek_tur = "'.$_GET['ID'].'"'));
echo '<h1>Rekening '.$rt['rek_tur'].'</h1>';
?>
<div style="border:4px ridge #CCFF00; background-color: #FFCC00; width: 45%;">
<form method="post" action="<?=$_SERVER['PHP_SELF']?>" name="form17" id="form17">
<select name="rekening" id="rekening">
	<?php if($_POST['update'] or $_POST['submit'] or $_POST['search']){ 
				if (empty($rt['no_rek_tur'])) { ?>
            <option value="" selected="selected">Select Transaction:</option>
				<?php } else {?>
            <option value="<?=$rt['no_rek_tur']?>" selected="selected"><?=$rt['rek_tur']?></option>
				<?php } ?>
	<?php } else { ?>
            <option value="" selected="selected">Select Transaction:</option>
	<?php } ?>
            <optgroup label="------ Ticket ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_tour ORDER BY id_rek_tur ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_tur = $lz['no_rek_tur'];
			$rek_tur = $lz['rek_tur'];
			?>
            <option value="<?=$no_rek_tur?>"><?=$rek_tur?></option>
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
<input type="hidden" name="rekening" id="rekening" value="<?=$rt['no_rek_tur']?>" />
<tr align="center">
<td>Start Date:&nbsp;<input type="text" name="invdate" id="invdate" />&nbsp;
End Date:&nbsp;<input type="text" name="invdate2" id="invdate2" />&nbsp;
<input type="Submit" name="update" value="Search By Date"></form></td></tr></table>
<table width="93%" border="0" id="toggle78" style="display: none;">
<form name="search" method="post" action="<?=$PHP_SELF?>" class="noPrint">
<input type="hidden" name="rekening" id="rekening" value="<?=$rt['no_rek_tur']?>" />
<tr align="center">
<td>Search for: <input type="text" name="find" />&nbsp;&nbsp;by&nbsp;&nbsp;
<Select NAME="field">
<Option VALUE="client_tur">Client</option>
<Option VALUE="hp_tur">HP Client</option>
<Option VALUE="ket_tur">Transaction</option>
<Option VALUE="notrans_tur">No.Transaction</option>
<Option VALUE="branch_tur">Branch</option>
<Option VALUE="operator_tur">Operator</option>
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
if ($_POST['rekening'] or $rt['no_rek_tur']) {
 if (!empty($_POST['update'])){
		if (empty($_POST['invdate']) or empty($_POST['invdate2'])) {
			echo "You forgot to enter a search term";
		} else {
			echo 'Your search was for "'.$_POST['invdate'].'" to "'.$_POST['invdate2'].'"';
		}
	$xx = mysql_fetch_array(mysql_query("SELECT * FROM trans_tour WHERE (deb_ref_tur = '".$_POST['rekening']."' OR deb_ref2_tur = '".$_POST['rekening']."' OR deb_ref3_tur = '".$_POST['rekening']."' OR deb_ref4_tur = '".$_POST['rekening']."') OR (kre_ref_tur = '".$_POST['rekening']."' OR kre_ref2_tur = '".$_POST['rekening']."' OR kre_ref3_tur = '".$_POST['rekening']."' OR kre_ref4_tur = '".$_POST['rekening']."')"));
	if (!empty($xx['deb_ref_tur'])) {
		$deb_kre_tur = "deb_ref_tur = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref2_tur'])) {
		$deb_kre_tur = "deb_ref2_tur = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref3_tur'])) {
		$deb_kre_tur = "deb_ref3_tur = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref4_tur'])) {
		$deb_kre_tur = "deb_ref4_tur = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref_tur'])) {
		$deb_kre_tur = "kre_ref_tur = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref2_tur'])) {
		$deb_kre_tur = "kre_ref2_tur = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref3_tur'])) {
		$deb_kre_tur = "kre_ref3_tur = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref4_tur'])) {
		$deb_kre_tur = "kre_ref4_tur = '".$_POST['rekening']."'";
	}
	$result = mysql_query("SELECT * FROM trans_tour WHERE ".$deb_kre_tur." AND tgltrans_tur BETWEEN '".$_POST['invdate']."' AND '".$_POST['invdate2']."' ORDER BY id_tur ASC");
 } elseif (!empty($_POST['search'])){
		if (empty($_POST['find'])) {
			echo "You forgot to enter a search term";
		} else {
			echo 'You search "'.$_POST['find'].'"';
		}
	$xx = mysql_fetch_array(mysql_query("SELECT * FROM trans_tour WHERE (deb_ref_tur = '".$_POST['rekening']."' OR deb_ref2_tur = '".$_POST['rekening']."' OR deb_ref3_tur = '".$_POST['rekening']."' OR deb_ref4_tur = '".$_POST['rekening']."') OR (kre_ref_tur = '".$_POST['rekening']."' OR kre_ref2_tur = '".$_POST['rekening']."' OR kre_ref3_tur = '".$_POST['rekening']."' OR kre_ref4_tur = '".$_POST['rekening']."')"));
	if (!empty($xx['deb_ref_tur'])) {
		$deb_kre_tur = "deb_ref_tur = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref2_tur'])) {
		$deb_kre_tur = "deb_ref2_tur = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref3_tur'])) {
		$deb_kre_tur = "deb_ref3_tur = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref4_tur'])) {
		$deb_kre_tur = "deb_ref4_tur = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref_tur'])) {
		$deb_kre_tur = "kre_ref_tur = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref2_tur'])) {
		$deb_kre_tur = "kre_ref2_tur = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref3_tur'])) {
		$deb_kre_tur = "kre_ref3_tur = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref4_tur'])) {
		$deb_kre_tur = "kre_ref4_tur = '".$_POST['rekening']."'";
	}
// We preform a bit of filtering 
$find = strtoupper($find); 
$find = strip_tags($find); 
$find = trim ($find);
	$result = mysql_query("SELECT * FROM trans_tour WHERE ".$deb_kre_tur." AND upper(".$field.") LIKE '%".$find."%' ORDER BY id_tur ASC");
 } else {
	$result = mysql_query("SELECT * FROM trans_tour WHERE (deb_ref_tur LIKE '".$_POST['rekening']."' OR deb_ref2_tur LIKE '".$_POST['rekening']."' OR deb_ref3_tur LIKE '".$_POST['rekening']."' OR deb_ref4_tur LIKE '".$_POST['rekening']."') OR (kre_ref_tur LIKE '".$_POST['rekening']."' OR kre_ref2_tur LIKE '".$_POST['rekening']."' OR kre_ref3_tur LIKE '".$_POST['rekening']."' OR kre_ref4_tur LIKE '".$_POST['rekening']."') ORDER BY id_tur ASC");
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
		$id_tur = $r['id_tur'];
		$client_tur = $r['client_tur'];
		$hp_tur = $r['hp_tur'];
		$notrans_tur = $r['notrans_tur'];
		$tgltrans_tur = $r['tgltrans_tur'];
		$jamtrans_tur = $r['jamtrans_tur'];
		$ket_tur = $r['ket_tur'];
		$deb_ref_tur = $r['deb_ref_tur'];
		$deb_ref2_tur = $r['deb_ref2_tur'];
		$deb_ref3_tur = $r['deb_ref3_tur'];
		$deb_ref4_tur = $r['deb_ref4_tur'];
		$deb_jml_tur = $r['deb_jml_tur'];
		$deb_jml2_tur = $r['deb_jml2_tur'];
		$deb_jml3_tur = $r['deb_jml3_tur'];
		$deb_jml4_tur = $r['deb_jml4_tur'];
		$kre_ref_tur = $r['kre_ref_tur'];
		$kre_ref2_tur = $r['kre_ref2_tur'];
		$kre_ref3_tur = $r['kre_ref3_tur'];
		$kre_ref4_tur = $r['kre_ref4_tur'];
		$kre_jml_tur = $r['kre_jml_tur'];
		$kre_jml2_tur = $r['kre_jml2_tur'];
		$kre_jml3_tur = $r['kre_jml3_tur'];
		$kre_jml4_tur = $r['kre_jml4_tur'];
		$profit_tur = $r['profit_tur'];
		$branch_tur = $r['branch_tur'];
		$operator_tur = $r['operator_tur'];

	if ($alternate == "1") {
		$color = "#ffffff";
		$alternate = "2";
	} else {
		$color = "#e5e5e5";
		$alternate = "1";
	}
	if ($deb_ref_tur == $_POST['rekening']) {
		$debkre_ref_tur = $deb_ref_tur;
		$debkre_jml_tur = $deb_jml_tur;
		$saldo = $saldo + $debkre_jml_tur;
	} elseif ($deb_ref2_tur == $_POST['rekening']) {
		$debkre_ref_tur = $deb_ref2_tur;
		$debkre_jml_tur = $deb_jml2_tur;
		$saldo = $saldo + $debkre_jml_tur;
	} elseif ($deb_ref3_tur == $_POST['rekening']) {
		$debkre_ref_tur = $deb_ref3_tur;
		$debkre_jml_tur = $deb_jml3_tur;
		$saldo = $saldo + $debkre_jml_tur;
	} elseif ($deb_ref4_tur == $_POST['rekening']) {
		$debkre_ref_tur = $deb_ref4_tur;
		$debkre_jml_tur = $deb_jml4_tur;
		$saldo = $saldo + $debkre_jml_tur;
	} if ($kre_ref_tur == $_POST['rekening']) {
		$debkre_ref2_tur = $kre_ref_tur;
		$debkre_jml2_tur = $kre_jml_tur;
		$saldo = $saldo - $debkre_jml2_tur;
	} elseif ($kre_ref2_tur == $_POST['rekening']) {
		$debkre_ref2_tur = $kre_ref2_tur;
		$debkre_jml2_tur = $kre_jml2_tur;
		$saldo = $saldo - $debkre_jml2_tur;
	} elseif ($kre_ref3_tur == $_POST['rekening']) {
		$debkre_ref2_tur = $kre_ref3_tur;
		$debkre_jml2_tur = $kre_jml3_tur;
		$saldo = $saldo - $debkre_jml2_tur;
	} elseif ($kre_ref4_tur == $_POST['rekening']) {
		$debkre_ref2_tur = $kre_ref4_tur;
		$debkre_jml2_tur = $kre_jml4_tur;
		$saldo = $saldo - $debkre_jml2_tur;
	}

		if ($deb_ref_tur == $_POST['rekening'] || $deb_ref2_tur == $_POST['rekening'] || $deb_ref3_tur == $_POST['rekening'] || $deb_ref4_tur == $_POST['rekening']) {
	echo "
	<tr valign='top' bgcolor='".$color."' align='center'>
	<td>".$notrans_tur."</td>
	<td>".$tgltrans_tur."<br />".$jamtrans_tur."</td>
	<td width='15%'>".$client_tur."<br />".$hp_tur."</td>
	<td width='15%'>".$ket_tur."</td>
	<td width='3%'>R</td>
	<td width='3%'>".$debkre_ref_tur."</td>
	<td width='10%' class='numbers'>".$debkre_jml_tur."</td>
	<td width='3%'>&nbsp;</td>
	<td width='10%'>&nbsp;</td>
	<td width='5%' class='numbers'>".$profit_tur."</td>
	<td>".$branch_tur."</td>
	<td>".$operator_tur."</td>
	</tr>";
		} else {
	echo "
	<tr valign='top' bgcolor='".$color."' align='center'>
	<td>".$notrans_tur."</td>
	<td>".$tgltrans_tur."<br />".$jamtrans_tur."</td>
	<td width='15%'>".$client_tur."<br />".$hp_tur."</td>
	<td width='15%'>".$ket_tur."</td>
	<td width='3%'>R</td>
	<td width='3%'>&nbsp;</td>
	<td width='10%'>&nbsp;</td>
	<td width='3%'>".$debkre_ref2_tur."</td>
	<td width='10%' class='numbers'>".$debkre_jml2_tur."</td>
	<td width='5%' class='numbers'>".$profit_tur."</td>
	<td>".$branch_tur."</td>
	<td>".$operator_tur."</td>
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
$result7 = mysql_query("SELECT * FROM trans_tour ORDER BY id_tur ASC LIMIT ".$offset.", ".$dataPerPage."");
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
		$id_tur = $r['id_tur'];
		$client_tur = $r['client_tur'];
		$hp_tur = $r['hp_tur'];
		$notrans_tur = $r['notrans_tur'];
		$tgltrans_tur = $r['tgltrans_tur'];
		$jamtrans_tur = $r['jamtrans_tur'];
		$ket_tur = $r['ket_tur'];
		$deb_ref_tur = $r['deb_ref_tur'];
		$deb_ref2_tur = $r['deb_ref2_tur'];
		$deb_ref3_tur = $r['deb_ref3_tur'];
		$deb_ref4_tur = $r['deb_ref4_tur'];
		$deb_jml_tur = $r['deb_jml_tur'];
		$deb_jml2_tur = $r['deb_jml2_tur'];
		$deb_jml3_tur = $r['deb_jml3_tur'];
		$deb_jml4_tur = $r['deb_jml4_tur'];
		$kre_ref_tur = $r['kre_ref_tur'];
		$kre_ref2_tur = $r['kre_ref2_tur'];
		$kre_ref3_tur = $r['kre_ref3_tur'];
		$kre_ref4_tur = $r['kre_ref4_tur'];
		$kre_jml_tur = $r['kre_jml_tur'];
		$kre_jml2_tur = $r['kre_jml2_tur'];
		$kre_jml3_tur = $r['kre_jml3_tur'];
		$kre_jml4_tur = $r['kre_jml4_tur'];
		$profit_tur = $r['profit_tur'];
		$branch_tur = $r['branch_tur'];
		$operator_tur = $r['operator_tur'];

	if ($alternate == "1") {
		$color = "#ffffff";
		$alternate = "2";
	} else {
		$color = "#e5e5e5";
		$alternate = "1";
	}
	if (!empty($deb_ref_tur)) {
		$debkre_ref_tur = $deb_ref_tur;
		$debkre_jml_tur = $deb_jml_tur;
		$saldo = $saldo + $debkre_jml_tur;
	} elseif (!empty($deb_ref2_tur)) {
		$debkre_ref_tur = $deb_ref2_tur;
		$debkre_jml_tur = $deb_jml2_tur;
		$saldo = $saldo + $debkre_jml_tur;
	} elseif (!empty($deb_ref3_tur)) {
		$debkre_ref_tur = $deb_ref3_tur;
		$debkre_jml_tur = $deb_jml3_tur;
		$saldo = $saldo + $debkre_jml_tur;
	} elseif (!empty($deb_ref4_tur)) {
		$debkre_ref_tur = $deb_ref4_tur;
		$debkre_jml_tur = $deb_jml4_tur;
		$saldo = $saldo + $debkre_jml_tur;
	} if (!empty($kre_ref_tur)) {
		$debkre_ref2_tur = $kre_ref_tur;
		$debkre_jml2_tur = $kre_jml_tur;
		$saldo = $saldo - $debkre_jml2_tur;
	} elseif (!empty($kre_ref2_tur)) {
		$debkre_ref2_tur = $kre_ref2_tur;
		$debkre_jml2_tur = $kre_jml2_tur;
		$saldo = $saldo - $debkre_jml2_tur;
	} elseif (!empty($kre_ref3_tur)) {
		$debkre_ref2_tur = $kre_ref3_tur;
		$debkre_jml2_tur = $kre_jml3_tur;
		$saldo = $saldo - $debkre_jml2_tur;
	} elseif (!empty($kre_ref4_tur)) {
		$debkre_ref2_tur = $kre_ref4_tur;
		$debkre_jml2_tur = $kre_jml4_tur;
		$saldo = $saldo - $debkre_jml2_tur;
	}

		if (!empty($deb_ref_tur) || !empty($deb_ref2_tur) || !empty($deb_ref3_tur) || !empty($deb_ref4_tur)) {
	echo "
	<tr valign='top' bgcolor='".$color."' align='center'>
	<td>".$notrans_tur."</td>
	<td>".$tgltrans_tur."<br />".$jamtrans_tur."</td>
	<td width='15%'>".$client_tur."<br />".$hp_tur."</td>
	<td width='15%'>".$ket_tur."</td>
	<td width='3%'>R</td>
	<td width='3%'>".$debkre_ref_tur."</td>
	<td width='10%' class='numbers'>".$debkre_jml_tur."</td>
	<td width='3%'>&nbsp;</td>
	<td width='10%'>&nbsp;</td>
	<td width='5%' class='numbers'>".$profit_tur."</td>
	<td>".$branch_tur."</td>
	<td>".$operator_tur."</td>
	</tr>";
		} else {
	echo "
	<tr valign='top' bgcolor='".$color."' align='center'>
	<td>".$notrans_tur."</td>
	<td>".$tgltrans_tur."<br />".$jamtrans_tur."</td>
	<td width='15%'>".$client_tur."<br />".$hp_tur."</td>
	<td width='15%'>".$ket_tur."</td>
	<td width='3%'>R</td>
	<td width='3%'>&nbsp;</td>
	<td width='10%'>&nbsp;</td>
	<td width='3%'>".$debkre_ref2_tur."</td>
	<td width='10%' class='numbers'>".$debkre_jml2_tur."</td>
	<td width='5%' class='numbers'>".$profit_tur."</td>
	<td>".$branch_tur."</td>
	<td>".$operator_tur."</td>
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
$query   = "SELECT COUNT(*) AS jumData FROM trans_tour";
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