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
$rt = mysql_fetch_array(mysql_query('SELECT * FROM rek_bandung WHERE no_rek_bdg = "'.$_POST['rekening'].'" OR rek_bdg = "'.$_GET['ID'].'"'));
echo '<h1>Rekening '.$rt['rek_bdg'].'</h1>';
?>
<div style="border:4px ridge #CCFF00; background-color: #FFCC00; width: 45%;">
<form method="post" action="<?=$_SERVER['PHP_SELF']?>" name="form17" id="form17">
<select name="rekening" id="rekening">
	<?php if($_POST['update'] or $_POST['submit']){ 
				if (empty($rt['no_rek_bdg'])) { ?>
            <option value="" selected="selected">Select Transaction:</option>
				<?php } else {?>
            <option value="<?=$rt['no_rek_bdg']?>" selected="selected"><?=$rt['rek_bdg']?></option>
				<?php } ?>
	<?php } else { ?>
            <option value="" selected="selected">Select Transaction:</option>
	<?php } ?>
            <optgroup label="------ Kas Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '1020%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Bank Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '1011%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Deposit Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '1012%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Piutang Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '1023%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Perlengkapan Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '1024%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Peralatan Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '1025%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Kendaraan Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '1027%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Gedung Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '1028%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Tanah Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '1029%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Utang Usaha Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '202%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Modal Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '302%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Pendapatan Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '402%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Biaya Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '502%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Pend.Non.OP Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '601%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Biaya.Non.OP Bandung ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_bandung WHERE no_rek_bdg LIKE '701%' ORDER BY id_rek_bdg ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_bdg = $lz['no_rek_bdg'];
			$rek_bdg = $lz['rek_bdg'];
			?>
            <option value="<?=$no_rek_bdg?>"><?=$rek_bdg?></option>
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
<?php if($_POST['submit'] or $_POST['update'] or $_GET['page']){ ?>
<a href="rekening.php" class="style4">Search by Date</a>&nbsp;<span class="style4">|</span>&nbsp;<a href="rekening2.php" class="style4">Search Based on All</a><br /><br />
<table width="93%" border="0">
<form method="post" name="form1" action="<?=$_SERVER['PHP_SELF']?>" class="noPrint">
<input type="hidden" name="rekening" id="rekening" value="<?=$rt['no_rek_bdg']?>" />
<tr align="center">
<td>Start Date:&nbsp;<input type="text" name="invdate" id="invdate" />&nbsp;
End Date:&nbsp;<input type="text" name="invdate2" id="invdate2" />
</td></tr>
<tr align="center"><td>
<input type="Submit" name="update" value="Search Date"></form>
</td></tr></table>
<?php
}
if($_POST['update']){
echo '<br /><input type="image" src="images/printhistory.png" onclick="javascript: print();" class="noPrint" />';
} else {
echo '';
}
include('add_transaction.php');
if ($_POST['rekening'] or $rt['rek_bdg']) {
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
	if (!empty($_POST['update'])){
		if (empty($_POST['invdate']) or empty($_POST['invdate2'])) {
			echo "<br /><br />You forgot to enter a search term";
		} else {
			echo "<br /><br />Your search was for ".$invdate." to ".$invdate2."";
		}
	$result = mysql_query("SELECT * FROM trans_bandung WHERE (deb_ref_bdg LIKE '".$_POST['rekening']."' OR deb_ref2_bdg LIKE '".$_POST['rekening']."' OR deb_ref3_bdg LIKE '".$_POST['rekening']."' OR deb_ref4_bdg LIKE '".$_POST['rekening']."') OR (kre_ref_bdg LIKE '".$_POST['rekening']."' OR kre_ref2_bdg LIKE '".$_POST['rekening']."' OR kre_ref3_bdg LIKE '".$_POST['rekening']."' OR kre_ref4_bdg LIKE '".$_POST['rekening']."') AND tgltrans_bdg BETWEEN '".$invdate."' AND '".$invdate2."' ORDER BY id_bdg ASC");
	} else {
	$result = mysql_query("SELECT * FROM trans_bandung WHERE (deb_ref_bdg LIKE '".$_POST['rekening']."' OR deb_ref2_bdg LIKE '".$_POST['rekening']."' OR deb_ref3_bdg LIKE '".$_POST['rekening']."' OR deb_ref4_bdg LIKE '".$_POST['rekening']."') OR (kre_ref_bdg LIKE '".$_POST['rekening']."' OR kre_ref2_bdg LIKE '".$_POST['rekening']."' OR kre_ref3_bdg LIKE '".$_POST['rekening']."' OR kre_ref4_bdg LIKE '".$_POST['rekening']."') ORDER BY id_bdg ASC LIMIT ".$offset.", ".$dataPerPage."");
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
	<td class='topHeadrow5' rowspan='2'><b>D/K</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Saldo<br />(".$currency.")</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Operator</b></td>
	<td class='topHeadrow5' rowspan='2'><b>&nbsp;</b></td></tr>
	<tr align='center'>
	<td class='topHeadrow5'>Ref</td>
	<td class='topHeadrow5'>&nbsp;</td>
	<td class='topHeadrow5'>Ref</td>
	<td class='topHeadrow5'>&nbsp;</td>
	</tr>";
	$saldo = 0;
	while ($r = mysql_fetch_array($result))
	{
		$id_bdg = $r['id_bdg'];
		$client_bdg = $r['client_bdg'];
		$hp_bdg = $r['hp_bdg'];
		$notrans_bdg = $r['notrans_bdg'];
		$tgltrans_bdg = $r['tgltrans_bdg'];
		$jamtrans_bdg = $r['jamtrans_bdg'];
		$ket_bdg = $r['ket_bdg'];
		$deb_ref_bdg = $r['deb_ref_bdg'];
		$deb_ref2_bdg = $r['deb_ref2_bdg'];
		$deb_ref3_bdg = $r['deb_ref3_bdg'];
		$deb_ref4_bdg = $r['deb_ref4_bdg'];
		$deb_jml_bdg = $r['deb_jml_bdg'];
		$deb_jml2_bdg = $r['deb_jml2_bdg'];
		$deb_jml3_bdg = $r['deb_jml3_bdg'];
		$deb_jml4_bdg = $r['deb_jml4_bdg'];
		$kre_ref_bdg = $r['kre_ref_bdg'];
		$kre_ref2_bdg = $r['kre_ref2_bdg'];
		$kre_ref3_bdg = $r['kre_ref3_bdg'];
		$kre_ref4_bdg = $r['kre_ref4_bdg'];
		$kre_jml_bdg = $r['kre_jml_bdg'];
		$kre_jml2_bdg = $r['kre_jml2_bdg'];
		$kre_jml3_bdg = $r['kre_jml3_bdg'];
		$kre_jml4_bdg = $r['kre_jml4_bdg'];
		$operator_bdg = $r['operator_bdg'];

	if ($alternate == "1") {
		$color = "#ffffff";
		$alternate = "2";
	} else {
		$color = "#e5e5e5";
		$alternate = "1";
	}
	if ($deb_ref_bdg == $_POST['rekening']) {
		$debkre_ref_bdg = $deb_ref_bdg;
		$debkre_jml_bdg = $deb_jml_bdg;
		$saldo = $saldo + $debkre_jml_bdg;
	} elseif ($deb_ref2_bdg == $_POST['rekening']) {
		$debkre_ref_bdg = $deb_ref2_bdg;
		$debkre_jml_bdg = $deb_jml2_bdg;
		$saldo = $saldo + $debkre_jml_bdg;
	} elseif ($deb_ref3_bdg == $_POST['rekening']) {
		$debkre_ref_bdg = $deb_ref3_bdg;
		$debkre_jml_bdg = $deb_jml3_bdg;
		$saldo = $saldo + $debkre_jml_bdg;
	} elseif ($deb_ref4_bdg == $_POST['rekening']) {
		$debkre_ref_bdg = $deb_ref4_bdg;
		$debkre_jml_bdg = $deb_jml4_bdg;
		$saldo = $saldo + $debkre_jml_bdg;
	} if ($kre_ref_bdg == $_POST['rekening']) {
		$debkre_ref2_bdg = $kre_ref_bdg;
		$debkre_jml2_bdg = $kre_jml_bdg;
		$saldo = $saldo - $debkre_jml2_bdg;
	} elseif ($kre_ref2_bdg == $_POST['rekening']) {
		$debkre_ref2_bdg = $kre_ref2_bdg;
		$debkre_jml2_bdg = $kre_jml2_bdg;
		$saldo = $saldo - $debkre_jml2_bdg;
	} elseif ($kre_ref3_bdg == $_POST['rekening']) {
		$debkre_ref2_bdg = $kre_ref3_bdg;
		$debkre_jml2_bdg = $kre_jml3_bdg;
		$saldo = $saldo - $debkre_jml2_bdg;
	} elseif ($kre_ref4_bdg == $_POST['rekening']) {
		$debkre_ref2_bdg = $kre_ref4_bdg;
		$debkre_jml2_bdg = $kre_jml4_bdg;
		$saldo = $saldo - $debkre_jml2_bdg;
	}

		if ($deb_ref_bdg == $_POST['rekening'] || $deb_ref2_bdg == $_POST['rekening'] || $deb_ref3_bdg == $_POST['rekening'] || $deb_ref4_bdg == $_POST['rekening']) {
		$sql2 = mysql_query('SELECT * FROM rek_bandung WHERE no_rek_bdg = "'.$debkre_ref_bdg.'"');
		$www2 = mysql_fetch_array($sql2);
		$dk_bdg = $www2['dk_bdg'];
	echo "
	<tr valign='top' bgcolor='".$color."' align='center'>
	<td>".$notrans_bdg."</td>
	<td>".$tgltrans_bdg."<br />".$jamtrans_bdg."</td>
	<td width='15%'>".$client_bdg."<br />".$hp_bdg."</td>
	<td width='15%'>".$ket_bdg."</td>
	<td width='3%'>DJ</td>
	<td width='3%'>".$debkre_ref_bdg."</td>
	<td width='10%' class='numbers'>".$debkre_jml_bdg."</td>
	<td width='3%'>&nbsp;</td>
	<td width='10%'>&nbsp;</td>
	<td width='3%'>".$dk_bdg."</td>
	<td width='10%' class='numbers'>".$saldo."</td>
	<td>".$operator_bdg."</td>
	";
	echo "<td align=\"center\"><a href='edit_trans.php?id=".$id_bdg."'>[edit]</a><br />
	<a href='delete_trans.php?id=".$id_bdg."' onClick=\"return confirm('Are you sure?')\">[delete]</a></td></tr>"; 
		} else {
		$sql2 = mysql_query('SELECT * FROM rek_bandung WHERE no_rek_bdg = "'.$debkre_ref2_bdg.'"');
		$www2 = mysql_fetch_array($sql2);
		$dk_bdg = $www2['dk_bdg'];
	echo "
	<tr valign='top' bgcolor='".$color."' align='center'>
	<td>".$notrans_bdg."</td>
	<td>".$tgltrans_bdg."<br />".$jamtrans_bdg."</td>
	<td width='15%'>".$client_bdg."<br />".$hp_bdg."</td>
	<td width='15%'>".$ket_bdg."</td>
	<td width='3%'>DJ</td>
	<td width='3%'>&nbsp;</td>
	<td width='10%'>&nbsp;</td>
	<td width='3%'>".$debkre_ref2_bdg."</td>
	<td width='10%' class='numbers'>".$debkre_jml2_bdg."</td>
	<td width='3%'>".$dk_bdg."</td>
	<td width='10%' class='numbers'>".$saldo."</td>
	<td>".$operator_bdg."</td>
	";
	echo "<td align=\"center\"><a href='edit_trans.php?id=".$id_bdg."'>[edit]</a><br />
	<a href='delete_trans.php?id=".$id_bdg."' onClick=\"return confirm('Are you sure?')\">[delete]</a></td></tr>"; 
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
	if($_POST['update']){
	echo '';
	} else {
	// mencari jumlah semua data dalam tabel guestbook
	$query   = "SELECT COUNT(*) AS jumData FROM trans_bandung";
	$hasil  = mysql_query($query);
	$data     = mysql_fetch_array($hasil);

	$jumData = $data['jumData'];

	// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
	$jumPage = ceil($jumData/$dataPerPage);
	echo "<b>Page:</b>&nbsp;";
	// menampilkan link previous
	if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?ID=".$rt['rek_bdg']."&page=".($noPage-1)."'><b id='pages'>&lt;&lt; Sebelumnya</b></a>";

	// memunculkan nomor halaman dan linknya
	for($page = 1; $page <= $jumPage; $page++)
	{
			 if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
			 {
				if (($showPage == 1) && ($page != 2))  echo "...";
				if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
				if ($page == $noPage) echo " <b id='pages'><font color='red'>".$page."</font></b> ";
				else echo " <a href='".$_SERVER['PHP_SELF']."?ID=".$rt['rek_bdg']."&page=".$page."'><b id='pages'>".$page."</b></a> ";
				$showPage = $page;
			 }
	}
	// menampilkan link next
	if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?ID=".$rt['rek_bdg']."&page=".($noPage+1)."'><b id='pages'>Selanjutnya &gt;&gt;</b></a>";
	}
} else {
	echo "<table border='1' cellspacing='0' cellpadding='2' bordercolor='#000000' width='100%'>";
	echo "<tr align=\"center\">
	<td class='topHeadrow5' rowspan='2'><b>No.<br />Transaction</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Date</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Client</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Transaction</b></td>
	<td class='topHeadrow5' rowspan='2'><b>F</b></td>
	<td class='topHeadrow5' colspan='2'><b>Debit&nbsp;(".$currency.")</b></td>
	<td class='topHeadrow5' colspan='2'><b>Credit&nbsp;(".$currency.")</b></td>
	<td class='topHeadrow5' rowspan='2'><b>D/K</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Saldo<br />(".$currency.")</b></td>
	<td class='topHeadrow5' rowspan='2'><b>Operator</b></td>
	<td class='topHeadrow5' rowspan='2'><b>&nbsp;</b></td></tr>
	<tr align='center'>
	<td class='topHeadrow5'>Ref</td>
	<td class='topHeadrow5'>&nbsp;</td>
	<td class='topHeadrow5'>Ref</td>
	<td class='topHeadrow5'>&nbsp;</td>
	</tr>";
	echo "
	<tr valign='top' bgcolor='#ffffff' align='center'>
	<td colspan='13'>- Select Your Transaction -</td></tr>";
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
	$query   = "SELECT COUNT(*) AS jumData FROM trans_bandung";
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
				else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."'><b id='pages'>1</b></a> ";
				$showPage = $page;
			 }
	}
	// menampilkan link next
	if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'><b id='pages'>Selanjutnya &gt;&gt;</b></a>";
}
echo '<br /><br />';
?>