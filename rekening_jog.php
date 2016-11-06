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
$rt = mysql_fetch_array(mysql_query('SELECT * FROM rek_jogja WHERE no_rek_jog = "'.$_POST['rekening'].'" OR no_rek_jog = "'.$_GET['ID'].'"'));
echo '<h1>Rekening '.$rt['rek_jog'].'</h1>';
?>
<div style="border:4px ridge #CCFF00; background-color: #FFCC00; width: 45%;">
<form method="post" action="<?=$_SERVER['PHP_SELF']?>" name="form17" id="form17">
<select name="rekening" id="rekening">
	<?php if($_POST['update'] or $_POST['submit'] or $_POST['search']){ 
				if (empty($rt['no_rek_jog'])) { ?>
            <option value="" selected="selected">Select Transaction:</option>
				<?php } else {?>
            <option value="<?=$rt['no_rek_jog']?>" selected="selected"><?=$rt['rek_jog']?></option>
				<?php } ?>
	<?php } else { ?>
            <option value="" selected="selected">Select Transaction:</option>
	<?php } ?>
            <optgroup label="------ Kas Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '1010%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Bank Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '1011%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Deposit Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '1012%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Piutang Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '1013%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Perlengkapan Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '1014%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Peralatan Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '1015%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Kendaraan Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '1017%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Gedung Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '1018%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Tanah Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '1019%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Utang Usaha Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '201%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Modal Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '301%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Pendapatan Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '401%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Biaya Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '501%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Pend.Non.OP Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '601%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
            <?php } ?>
            </optgroup>
            <optgroup label="------ Biaya.Non.OP Jogja ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_jogja WHERE no_rek_jog LIKE '701%' ORDER BY id_rek_jog ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_jog = $lz['no_rek_jog'];
			$rek_jog = $lz['rek_jog'];
			?>
            <option value="<?=$no_rek_jog?>"><?=$rek_jog?></option>
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
<input type="hidden" name="rekening" id="rekening" value="<?=$rt['no_rek_jog']?>" />
<tr align="center">
<td>Start Date:&nbsp;<input type="text" name="invdate" id="invdate" />&nbsp;
End Date:&nbsp;<input type="text" name="invdate2" id="invdate2" />&nbsp;
<input type="Submit" name="update" value="Search By Date"></form></td></tr></table>
<table width="93%" border="0" id="toggle78" style="display: none;">
<form name="search" method="post" action="<?=$PHP_SELF?>" class="noPrint">
<input type="hidden" name="rekening" id="rekening" value="<?=$rt['no_rek_jog']?>" />
<tr align="center">
<td>Search for: <input type="text" name="find" />&nbsp;&nbsp;by&nbsp;&nbsp;
<Select NAME="field">
<Option VALUE="client_jog">Client</option>
<Option VALUE="hp_jog">HP Client</option>
<Option VALUE="ket_jog">Transaction</option>
<Option VALUE="notrans_jog">No.Transaction</option>
<Option VALUE="operator_jog">Operator</option>
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
if ($_POST['rekening'] or $rt['no_rek_jog']) {
 if (!empty($_POST['update'])){
		if (empty($_POST['invdate']) or empty($_POST['invdate2'])) {
			echo "<br /><br />You forgot to enter a search term";
		} else {
			echo "<br /><br />Your search was for ".$invdate." to ".$invdate2."";
		}
	$xx = mysql_fetch_array(mysql_query("SELECT * FROM trans_jogja WHERE (deb_ref_jog = '".$_POST['rekening']."' OR deb_ref2_jog = '".$_POST['rekening']."' OR deb_ref3_jog = '".$_POST['rekening']."' OR deb_ref4_jog = '".$_POST['rekening']."') OR (kre_ref_jog = '".$_POST['rekening']."' OR kre_ref2_jog = '".$_POST['rekening']."' OR kre_ref3_jog = '".$_POST['rekening']."' OR kre_ref4_jog = '".$_POST['rekening']."')"));
	if (!empty($xx['deb_ref_jog'])) {
		$deb_kre_jog = "deb_ref_jog = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref2_jog'])) {
		$deb_kre_jog = "deb_ref2_jog = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref3_jog'])) {
		$deb_kre_jog = "deb_ref3_jog = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref4_jog'])) {
		$deb_kre_jog = "deb_ref4_jog = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref_jog'])) {
		$deb_kre_jog = "kre_ref_jog = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref2_jog'])) {
		$deb_kre_jog = "kre_ref2_jog = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref3_jog'])) {
		$deb_kre_jog = "kre_ref3_jog = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref4_jog'])) {
		$deb_kre_jog = "kre_ref4_jog = '".$_POST['rekening']."'";
	}
	$result = mysql_query("SELECT * FROM trans_jogja WHERE ".$deb_kre_jog." AND tgltrans_jog BETWEEN '".$_POST['invdate']."' AND '".$_POST['invdate2']."' ORDER BY id_jog ASC");
 } elseif (!empty($_POST['search'])){
		if (empty($_POST['find'])) {
			echo "You forgot to enter a search term";
		} else {
			echo 'You search "'.$_POST['find'].'"';
		}
	$xx = mysql_fetch_array(mysql_query("SELECT * FROM trans_jogja WHERE (deb_ref_jog = '".$_POST['rekening']."' OR deb_ref2_jog = '".$_POST['rekening']."' OR deb_ref3_jog = '".$_POST['rekening']."' OR deb_ref4_jog = '".$_POST['rekening']."') OR (kre_ref_jog = '".$_POST['rekening']."' OR kre_ref2_jog = '".$_POST['rekening']."' OR kre_ref3_jog = '".$_POST['rekening']."' OR kre_ref4_jog = '".$_POST['rekening']."')"));
	if (!empty($xx['deb_ref_jog'])) {
		$deb_kre_jog = "deb_ref_jog = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref2_jog'])) {
		$deb_kre_jog = "deb_ref2_jog = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref3_jog'])) {
		$deb_kre_jog = "deb_ref3_jog = '".$_POST['rekening']."'";
	} elseif (!empty($xx['deb_ref4_jog'])) {
		$deb_kre_jog = "deb_ref4_jog = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref_jog'])) {
		$deb_kre_jog = "kre_ref_jog = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref2_jog'])) {
		$deb_kre_jog = "kre_ref2_jog = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref3_jog'])) {
		$deb_kre_jog = "kre_ref3_jog = '".$_POST['rekening']."'";
	} elseif (!empty($xx['kre_ref4_jog'])) {
		$deb_kre_jog = "kre_ref4_jog = '".$_POST['rekening']."'";
	}
// We preform a bit of filtering 
$find = strtoupper($find); 
$find = strip_tags($find); 
$find = trim ($find);
	$result = mysql_query("SELECT * FROM trans_jogja WHERE ".$deb_kre_jog." AND upper(".$field.") LIKE '%".$find."%' ORDER BY id_jog ASC");
 } else {
	$result = mysql_query("SELECT * FROM trans_jogja WHERE (deb_ref_jog LIKE '".$_POST['rekening']."' OR deb_ref2_jog LIKE '".$_POST['rekening']."' OR deb_ref3_jog LIKE '".$_POST['rekening']."' OR deb_ref4_jog LIKE '".$_POST['rekening']."') OR (kre_ref_jog LIKE '".$_POST['rekening']."' OR kre_ref2_jog LIKE '".$_POST['rekening']."' OR kre_ref3_jog LIKE '".$_POST['rekening']."' OR kre_ref4_jog LIKE '".$_POST['rekening']."') ORDER BY id_jog ASC");
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
		$id_jog = $r['id_jog'];
		$client_jog = $r['client_jog'];
		$hp_jog = $r['hp_jog'];
		$notrans_jog = $r['notrans_jog'];
		$tgltrans_jog = $r['tgltrans_jog'];
		$jamtrans_jog = $r['jamtrans_jog'];
		$ket_jog = $r['ket_jog'];
		$deb_ref_jog = $r['deb_ref_jog'];
		$deb_ref2_jog = $r['deb_ref2_jog'];
		$deb_ref3_jog = $r['deb_ref3_jog'];
		$deb_ref4_jog = $r['deb_ref4_jog'];
		$deb_jml_jog = $r['deb_jml_jog'];
		$deb_jml2_jog = $r['deb_jml2_jog'];
		$deb_jml3_jog = $r['deb_jml3_jog'];
		$deb_jml4_jog = $r['deb_jml4_jog'];
		$kre_ref_jog = $r['kre_ref_jog'];
		$kre_ref2_jog = $r['kre_ref2_jog'];
		$kre_ref3_jog = $r['kre_ref3_jog'];
		$kre_ref4_jog = $r['kre_ref4_jog'];
		$kre_jml_jog = $r['kre_jml_jog'];
		$kre_jml2_jog = $r['kre_jml2_jog'];
		$kre_jml3_jog = $r['kre_jml3_jog'];
		$kre_jml4_jog = $r['kre_jml4_jog'];
		$operator_jog = $r['operator_jog'];

	if ($alternate == "1") {
		$color = "#ffffff";
		$alternate = "2";
	} else {
		$color = "#e5e5e5";
		$alternate = "1";
	}
	if ($deb_ref_jog == $_POST['rekening']) {
		$debkre_ref_jog = $deb_ref_jog;
		$debkre_jml_jog = $deb_jml_jog;
		$saldo = $saldo + $debkre_jml_jog;
	} elseif ($deb_ref2_jog == $_POST['rekening']) {
		$debkre_ref_jog = $deb_ref2_jog;
		$debkre_jml_jog = $deb_jml2_jog;
		$saldo = $saldo + $debkre_jml_jog;
	} elseif ($deb_ref3_jog == $_POST['rekening']) {
		$debkre_ref_jog = $deb_ref3_jog;
		$debkre_jml_jog = $deb_jml3_jog;
		$saldo = $saldo + $debkre_jml_jog;
	} elseif ($deb_ref4_jog == $_POST['rekening']) {
		$debkre_ref_jog = $deb_ref4_jog;
		$debkre_jml_jog = $deb_jml4_jog;
		$saldo = $saldo + $debkre_jml_jog;
	} if ($kre_ref_jog == $_POST['rekening']) {
		$debkre_ref2_jog = $kre_ref_jog;
		$debkre_jml2_jog = $kre_jml_jog;
		$saldo = $saldo - $debkre_jml2_jog;
	} elseif ($kre_ref2_jog == $_POST['rekening']) {
		$debkre_ref2_jog = $kre_ref2_jog;
		$debkre_jml2_jog = $kre_jml2_jog;
		$saldo = $saldo - $debkre_jml2_jog;
	} elseif ($kre_ref3_jog == $_POST['rekening']) {
		$debkre_ref2_jog = $kre_ref3_jog;
		$debkre_jml2_jog = $kre_jml3_jog;
		$saldo = $saldo - $debkre_jml2_jog;
	} elseif ($kre_ref4_jog == $_POST['rekening']) {
		$debkre_ref2_jog = $kre_ref4_jog;
		$debkre_jml2_jog = $kre_jml4_jog;
		$saldo = $saldo - $debkre_jml2_jog;
	}

		if ($deb_ref_jog == $_POST['rekening'] || $deb_ref2_jog == $_POST['rekening'] || $deb_ref3_jog == $_POST['rekening'] || $deb_ref4_jog == $_POST['rekening']) {
		$sql2 = mysql_query('SELECT * FROM rek_jogja WHERE no_rek_jog = "'.$debkre_ref_jog.'"');
		$www2 = mysql_fetch_array($sql2);
		$dk_jog = $www2['dk_jog'];
	echo "
	<tr valign='top' bgcolor='".$color."' align='center'>
	<td>".$notrans_jog."</td>
	<td>".$tgltrans_jog."<br />".$jamtrans_jog."</td>
	<td width='15%'>".$client_jog."<br />".$hp_jog."</td>
	<td width='15%'>".$ket_jog."</td>
	<td width='3%'>DJ</td>
	<td width='3%'>".$debkre_ref_jog."</td>
	<td width='10%' class='numbers'>".$debkre_jml_jog."</td>
	<td width='3%'>&nbsp;</td>
	<td width='10%'>&nbsp;</td>
	<td width='3%'>".$dk_jog."</td>
	<td width='10%' class='numbers'>".$saldo."</td>
	<td>".$operator_jog."</td>
	";
	echo "<td align=\"center\"><a href='edit_trans.php?id=".$id_jog."'>[edit]</a><br />
	<a href='delete_trans.php?id=".$id_jog."' onClick=\"return confirm('Are you sure?')\">[delete]</a></td></tr>"; 
		} else {
		$sql2 = mysql_query('SELECT * FROM rek_jogja WHERE no_rek_jog = "'.$debkre_ref2_jog.'"');
		$www2 = mysql_fetch_array($sql2);
		$dk_jog = $www2['dk_jog'];
	echo "
	<tr valign='top' bgcolor='".$color."' align='center'>
	<td>".$notrans_jog."</td>
	<td>".$tgltrans_jog."<br />".$jamtrans_jog."</td>
	<td width='15%'>".$client_jog."<br />".$hp_jog."</td>
	<td width='15%'>".$ket_jog."</td>
	<td width='3%'>DJ</td>
	<td width='3%'>&nbsp;</td>
	<td width='10%'>&nbsp;</td>
	<td width='3%'>".$debkre_ref2_jog."</td>
	<td width='10%' class='numbers'>".$debkre_jml2_jog."</td>
	<td width='3%'>".$dk_jog."</td>
	<td width='10%' class='numbers'>".$saldo."</td>
	<td>".$operator_jog."</td>
	";
	echo "<td align=\"center\"><a href='edit_trans.php?id=".$id_jog."'>[edit]</a><br />
	<a href='delete_trans.php?id=".$id_jog."' onClick=\"return confirm('Are you sure?')\">[delete]</a></td></tr>"; 
		}
	}
	echo "</table><br />";
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
$query   = "SELECT COUNT(*) AS jumData FROM trans_jogja";
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