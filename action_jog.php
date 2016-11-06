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
 if (!empty($_POST['ticket']) or !empty($_POST['ticket2']) or !empty($_POST['ticket3']) or !empty($_POST['ticket4'])) {
	//--------- TRANSACTION TICKET ------------//
	// membaca kode anggota terbaru berdasarkan jenis keanggotaan
	$query = "SELECT notrans_tkt, code_tkt FROM trans_tiket ORDER BY id_tkt DESC LIMIT 1";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$idLast = $data['notrans_tkt'];
	$thnLast = substr($idLast, 0, 2);
	$blnLast = substr($idLast, 2, 2);
	$tglLast = substr($idLast, 4, 2);
	$thnSkrg = substr($_POST['tanggal'], 2, 2);
	$blnSkrg = substr($_POST['tanggal'], 5, 2);
	$tglSkrg = substr($_POST['tanggal'], 8, 2);
	// mengambil angka atau bilangan dalam kode anggota terbesar,
	// dengan cara mengambil substring mulai dari karakter ke-3 diambil 4 karakter
	// misal 'JOG1701', akan diambil '1701'
	// setelah substring bilangan diambil lantas dicasting menjadi integer
		if (strlen($idLast) == 10) {
	$noUrut = (int) substr($idLast, 6, 4);
		} elseif (strlen($idLast) == 11) {
	$noUrut = (int) substr($idLast, 6, 5);
		} elseif (strlen($idLast) == 12) {
	$noUrut = (int) substr($idLast, 6, 6);
		} elseif (strlen($idLast) == 13) {
	$noUrut = (int) substr($idLast, 6, 7);
		} elseif (strlen($idLast) == 14) {
	$noUrut = (int) substr($idLast, 6, 8);
		} elseif (strlen($idLast) == 15) {
	$noUrut = (int) substr($idLast, 6, 9);
		}
		if (strlen($data['code_tkt']) == 4) {
	$code = (int) substr($data['code_tkt'], 0, 4);
		} elseif (strlen($data['code_tkt']) == 5) {
	$code = (int) substr($data['code_tkt'], 0, 5);
		} elseif (strlen($data['code_tkt']) == 6) {
	$code = (int) substr($data['code_tkt'], 0, 6);
		} elseif (strlen($data['code_tkt']) == 7) {
	$code = (int) substr($data['code_tkt'], 0, 7);
		}
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya 
	
	$noUrut++;
	$code++;
	
	// membentuk kode anggota baru
	// perintah sprintf("%04s", $noUrut); digunakan untuk memformat string sebanyak 4 karakter
	// misal sprintf("%04s", 12); maka akan dihasilkan '1712'
	// atau misal sprintf("%04s", 1); maka akan dihasilkan string '1701'
		if (empty($idLast) || ($thnLast <> $thnSkrg || $blnLast <> $blnSkrg || $tglLast <> $tglSkrg)) {
	$orderID = $thnSkrg . $blnSkrg . $tglSkrg . sprintf("%04s", "0001");
		} elseif (strlen($idLast) == 10) {
	$orderID = $thnSkrg . $blnSkrg . $tglSkrg . sprintf("%04s", $noUrut);
		} elseif (strlen($idLast) == 11) {
	$orderID = $thnSkrg . $blnSkrg . $tglSkrg . sprintf("%05s", $noUrut);
		} elseif (strlen($idLast) == 12) {
	$orderID = $thnSkrg . $blnSkrg . $tglSkrg . sprintf("%06s", $noUrut);
		} elseif (strlen($idLast) == 13) {
	$orderID = $thnSkrg . $blnSkrg . $tglSkrg . sprintf("%07s", $noUrut);
		} elseif (strlen($idLast) == 14) {
	$orderID = $thnSkrg . $blnSkrg . $tglSkrg . sprintf("%08s", $noUrut);
		} elseif (strlen($idLast) == 15) {
	$orderID = $thnSkrg . $blnSkrg . $tglSkrg . sprintf("%09s", $noUrut);
		}
		if (empty($data['code_tkt'])) {
	$codetkt = sprintf("%04s", "0001");
		} elseif (strlen($data['code_tkt']) == 4) {
	$codetkt = sprintf("%04s", $code);
		} elseif (strlen($data['code_tkt']) == 5) {
	$codetkt = sprintf("%05s", $code);
		} elseif (strlen($data['code_tkt']) == 6) {
	$codetkt = sprintf("%06s", $code);
		} elseif (strlen($data['code_tkt']) == 7) {
	$codetkt = sprintf("%07s", $code);
		}
	
			if ($_POST['debkre'] == 'debit') {
				$rek_debit = $_POST['ticket'];
				$total_debit = $_POST['total'];
				$rek_kredit = '';
				$total_kredit = '';
			} elseif ($_POST['debkre'] == 'kredit') {
				$rek_debit = '';
				$total_debit = ''; 
				$rek_kredit = $_POST['ticket'];
				$total_kredit = $_POST['total'];
			} if ($_POST['debkre2'] == 'debit') {
				$rek_debit2 = $_POST['ticket2'];
				$total_debit2 = $_POST['total2'];
				$rek_kredit2 = '';
				$total_kredit2 = '';
			} elseif ($_POST['debkre2'] == 'kredit') {
				$rek_debit2 = '';
				$total_debit2 = '';
				$rek_kredit2 = $_POST['ticket2'];
				$total_kredit2 = $_POST['total2'];
			} if ($_POST['debkre3'] == 'debit') {
				$rek_debit3 = $_POST['ticket3'];
				$total_debit3 = $_POST['total3']; 
				$rek_kredit3 = '';
				$total_kredit3 = '';
			} elseif ($_POST['debkre3'] == 'kredit') {
				$rek_debit3 = '';
				$total_debit3 = '';
				$rek_kredit3 = $_POST['ticket3'];
				$total_kredit3 = $_POST['total3']; 
			} if ($_POST['debkre4'] == 'debit') {
				$rek_debit4 = $_POST['ticket4'];
				$total_debit4 = $_POST['total4']; 
				$rek_kredit4 = '';
				$total_kredit4 = ''; 
			} elseif ($_POST['debkre4'] == 'kredit') {
				$rek_debit4 = '';
				$total_debit4 = ''; 
				$rek_kredit4 = $_POST['ticket4'];
				$total_kredit4 = $_POST['total4']; 
			}
			if (!empty($_POST['profit'])) {
				$profit = $_POST['profit'];
			} elseif (!empty($_POST['profit3'])) {
				$profit = $_POST['profit3'];
			} elseif (!empty($_POST['profit5'])) {
				$profit = $_POST['profit5'];
			} elseif (!empty($_POST['profit7'])) {
				$profit = $_POST['profit7'];
			}
			mysql_query("INSERT INTO trans_tiket (client_tkt, hp_tkt, code_tkt, notrans_tkt, tgltrans_tkt, jamtrans_tkt, ket_tkt, deb_ref_tkt, deb_ref2_tkt, deb_ref3_tkt, deb_ref4_tkt, deb_jml_tkt, deb_jml2_tkt, deb_jml3_tkt, deb_jml4_tkt, kre_ref_tkt, kre_ref2_tkt, kre_ref3_tkt, kre_ref4_tkt, kre_jml_tkt, kre_jml2_tkt, kre_jml3_tkt, kre_jml4_tkt, profit_tkt, branch_tkt, operator_tkt) VALUES ('".$_POST['client']."','".$_POST['handphone']."','".$codetkt."','".$orderID."','".$_POST['tanggal']."','".$_POST['time']."','".$_POST['trans']."','".$rek_debit."','".$rek_debit2."','".$rek_debit3."','".$rek_debit4."','".$total_debit."','".$total_debit2."','".$total_debit3."','".$total_debit4."','".$rek_kredit."','".$rek_kredit2."','".$rek_kredit3."','".$rek_kredit4."','".$total_kredit."','".$total_kredit2."','".$total_kredit3."','".$total_kredit4."','".$profit."','".$_SESSION['branch']."','".$_SESSION['username']."')");
 } elseif (!empty($_POST['tour']) or !empty($_POST['tour2']) or !empty($_POST['tour3']) or !empty($_POST['tour4'])) {
	//--------- TRANSACTION TOUR ------------//
	// membaca kode anggota terbaru berdasarkan jenis keanggotaan
	$query = "SELECT notrans_tur, code_tur FROM trans_tour ORDER BY id_tur DESC LIMIT 1";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$idLast = $data['notrans_tur'];
	$thnLast = substr($idLast, 0, 2);
	$blnLast = substr($idLast, 2, 2);
	$tglLast = substr($idLast, 4, 2);
	$thnSkrg = substr($_POST['tanggal'], 2, 2);
	$blnSkrg = substr($_POST['tanggal'], 5, 2);
	$tglSkrg = substr($_POST['tanggal'], 8, 2);
	// mengambil angka atau bilangan dalam kode anggota terbesar,
	// dengan cara mengambil substring mulai dari karakter ke-3 diambil 4 karakter
	// misal 'JOG1701', akan diambil '1701'
	// setelah substring bilangan diambil lantas dicasting menjadi integer
		if (strlen($idLast) == 10) {
	$noUrut = (int) substr($idLast, 6, 4);
		} elseif (strlen($idLast) == 11) {
	$noUrut = (int) substr($idLast, 6, 5);
		} elseif (strlen($idLast) == 12) {
	$noUrut = (int) substr($idLast, 6, 6);
		} elseif (strlen($idLast) == 13) {
	$noUrut = (int) substr($idLast, 6, 7);
		} elseif (strlen($idLast) == 14) {
	$noUrut = (int) substr($idLast, 6, 8);
		} elseif (strlen($idLast) == 15) {
	$noUrut = (int) substr($idLast, 6, 9);
		}
		if (strlen($data['code_tur']) == 4) {
	$code = (int) substr($data['code_tur'], 0, 4);
		} elseif (strlen($data['code_tur']) == 5) {
	$code = (int) substr($data['code_tur'], 0, 5);
		} elseif (strlen($data['code_tur']) == 6) {
	$code = (int) substr($data['code_tur'], 0, 6);
		} elseif (strlen($data['code_tur']) == 7) {
	$code = (int) substr($data['code_tur'], 0, 7);
		}
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya 
	
	$noUrut++;
	$code++;
	
	// membentuk kode anggota baru
	// perintah sprintf("%04s", $noUrut); digunakan untuk memformat string sebanyak 4 karakter
	// misal sprintf("%04s", 12); maka akan dihasilkan '1712'
	// atau misal sprintf("%04s", 1); maka akan dihasilkan string '1701'
		if (empty($idLast) || ($thnLast <> $thnSkrg || $blnLast <> $blnSkrg || $tglLast <> $tglSkrg)) {
	$orderID = $thnSkrg . $blnSkrg . $tglSkrg . sprintf("%04s", "0001");
		} elseif (strlen($idLast) == 10) {
	$orderID = $thnSkrg . $blnSkrg . $tglSkrg . sprintf("%04s", $noUrut);
		} elseif (strlen($idLast) == 11) {
	$orderID = $thnSkrg . $blnSkrg . $tglSkrg . sprintf("%05s", $noUrut);
		} elseif (strlen($idLast) == 12) {
	$orderID = $thnSkrg . $blnSkrg . $tglSkrg . sprintf("%06s", $noUrut);
		} elseif (strlen($idLast) == 13) {
	$orderID = $thnSkrg . $blnSkrg . $tglSkrg . sprintf("%07s", $noUrut);
		} elseif (strlen($idLast) == 14) {
	$orderID = $thnSkrg . $blnSkrg . $tglSkrg . sprintf("%08s", $noUrut);
		} elseif (strlen($idLast) == 15) {
	$orderID = $thnSkrg . $blnSkrg . $tglSkrg . sprintf("%09s", $noUrut);
		}
		if (empty($data['code_tur'])) {
	$codetur = sprintf("%04s", "0001");
		} elseif (strlen($data['code_tur']) == 4) {
	$codetur = sprintf("%04s", $code);
		} elseif (strlen($data['code_tur']) == 5) {
	$codetur = sprintf("%05s", $code);
		} elseif (strlen($data['code_tur']) == 6) {
	$codetur = sprintf("%06s", $code);
		} elseif (strlen($data['code_tur']) == 7) {
	$codetur = sprintf("%07s", $code);
		}
	
			if ($_POST['debkre'] == 'debit') {
				$rek_debit = $_POST['tour'];
				$total_debit = $_POST['total'];
				$rek_kredit = '';
				$total_kredit = '';
			} elseif ($_POST['debkre'] == 'kredit') {
				$rek_debit = '';
				$total_debit = ''; 
				$rek_kredit = $_POST['tour'];
				$total_kredit = $_POST['total'];
			} if ($_POST['debkre2'] == 'debit') {
				$rek_debit2 = $_POST['tour2'];
				$total_debit2 = $_POST['total2'];
				$rek_kredit2 = '';
				$total_kredit2 = '';
			} elseif ($_POST['debkre2'] == 'kredit') {
				$rek_debit2 = '';
				$total_debit2 = '';
				$rek_kredit2 = $_POST['tour2'];
				$total_kredit2 = $_POST['total2'];
			} if ($_POST['debkre3'] == 'debit') {
				$rek_debit3 = $_POST['tour3'];
				$total_debit3 = $_POST['total3']; 
				$rek_kredit3 = '';
				$total_kredit3 = '';
			} elseif ($_POST['debkre3'] == 'kredit') {
				$rek_debit3 = '';
				$total_debit3 = '';
				$rek_kredit3 = $_POST['tour3'];
				$total_kredit3 = $_POST['total3']; 
			} if ($_POST['debkre4'] == 'debit') {
				$rek_debit4 = $_POST['tour4'];
				$total_debit4 = $_POST['total4']; 
				$rek_kredit4 = '';
				$total_kredit4 = ''; 
			} elseif ($_POST['debkre4'] == 'kredit') {
				$rek_debit4 = '';
				$total_debit4 = ''; 
				$rek_kredit4 = $_POST['tour4'];
				$total_kredit4 = $_POST['total4']; 
			}
			if (!empty($_POST['profit2'])) {
				$profit = $_POST['profit2'];
			} elseif (!empty($_POST['profit4'])) {
				$profit = $_POST['profit4'];
			} elseif (!empty($_POST['profit6'])) {
				$profit = $_POST['profit6'];
			} elseif (!empty($_POST['profit8'])) {
				$profit = $_POST['profit8'];
			}
			mysql_query("INSERT INTO trans_tour (client_tur, hp_tur, code_tur, notrans_tur, tgltrans_tur, jamtrans_tur, ket_tur, deb_ref_tur, deb_ref2_tur, deb_ref3_tur, deb_ref4_tur, deb_jml_tur, deb_jml2_tur, deb_jml3_tur, deb_jml4_tur, kre_ref_tur, kre_ref2_tur, kre_ref3_tur, kre_ref4_tur, kre_jml_tur, kre_jml2_tur, kre_jml3_tur, kre_jml4_tur, profit_tur, branch_tur, operator_tur) VALUES ('".$_POST['client']."','".$_POST['handphone']."','".$codetur."','".$orderID."','".$_POST['tanggal']."','".$_POST['time']."','".$_POST['trans']."','".$rek_debit."','".$rek_debit2."','".$rek_debit3."','".$rek_debit4."','".$total_debit."','".$total_debit2."','".$total_debit3."','".$total_debit4."','".$rek_kredit."','".$rek_kredit2."','".$rek_kredit3."','".$rek_kredit4."','".$total_kredit."','".$total_kredit2."','".$total_kredit3."','".$total_kredit4."','".$profit."','".$_SESSION['branch']."','".$_SESSION['username']."')");
 }
	//--------- TRANSACTION YOGYAKARTA ------------//
	// membaca kode anggota terbaru berdasarkan jenis keanggotaan
	$query2 = "SELECT notrans_jog FROM trans_jogja ORDER BY id_jog DESC LIMIT 1";
	$hasil2 = mysql_query($query2);
	$data2  = mysql_fetch_array($hasil2);
	$idLast2 = $data2['notrans_jog'];
	$thnLast2 = substr($idLast2, 0, 2);
	$blnLast2 = substr($idLast2, 2, 2);
	$tglLast2 = substr($idLast2, 4, 2);
	$thnSkrg2 = substr($_POST['tanggal'], 2, 2);
	$blnSkrg2 = substr($_POST['tanggal'], 5, 2);
	$tglSkrg2 = substr($_POST['tanggal'], 8, 2);
	// mengambil angka atau bilangan dalam kode anggota terbesar,
	// dengan cara mengambil substring mulai dari karakter ke-3 diambil 4 karakter
	// misal 'JOG1701', akan diambil '1701'
	// setelah substring bilangan diambil lantas dicasting menjadi integer
		if (strlen($idLast2) == 10) {
	$noUrut2 = (int) substr($idLast2, 6, 4);
		} elseif (strlen($idLast2) == 11) {
	$noUrut2 = (int) substr($idLast2, 6, 5);
		} elseif (strlen($idLast2) == 12) {
	$noUrut2 = (int) substr($idLast2, 6, 6);
		} elseif (strlen($idLast2) == 13) {
	$noUrut2 = (int) substr($idLast2, 6, 7);
		} elseif (strlen($idLast2) == 14) {
	$noUrut2 = (int) substr($idLast2, 6, 8);
		} elseif (strlen($idLast2) == 15) {
	$noUrut2 = (int) substr($idLast2, 6, 9);
		}
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya 
	
	$noUrut2++;
	
	// membentuk kode anggota baru
	// perintah sprintf("%04s", $noUrut); digunakan untuk memformat string sebanyak 4 karakter
	// misal sprintf("%04s", 12); maka akan dihasilkan '1712'
	// atau misal sprintf("%04s", 1); maka akan dihasilkan string '1701'
		if (empty($idLast2) || ($thnLast2 <> $thnSkrg2 || $blnLast2 <> $blnSkrg2 || $tglLast2 <> $tglSkrg2)) {
	$orderID2 = $thnSkrg2 . $blnSkrg2 . $tglSkrg2 . sprintf("%04s", "0001");
		} elseif (strlen($idLast2) == 10) {
	$orderID2 = $thnSkrg2 . $blnSkrg2 . $tglSkrg2 . sprintf("%04s", $noUrut2);
		} elseif (strlen($idLast2) == 11) {
	$orderID2 = $thnSkrg2 . $blnSkrg2 . $tglSkrg2 . sprintf("%05s", $noUrut2);
		} elseif (strlen($idLast2) == 12) {
	$orderID2 = $thnSkrg2 . $blnSkrg2 . $tglSkrg2 . sprintf("%06s", $noUrut2);
		} elseif (strlen($idLast2) == 13) {
	$orderID2 = $thnSkrg2 . $blnSkrg2 . $tglSkrg2 . sprintf("%07s", $noUrut2);
		} elseif (strlen($idLast2) == 14) {
	$orderID2 = $thnSkrg2 . $blnSkrg2 . $tglSkrg2 . sprintf("%08s", $noUrut2);
		} elseif (strlen($idLast2) == 15) {
	$orderID2 = $thnSkrg2 . $blnSkrg2 . $tglSkrg2 . sprintf("%09s", $noUrut2);
		}
	
			if ($_POST['debkre'] == 'debit') {
				$rek_debit5 = $_POST['rekening'];
				$total_debit5 = $_POST['total'];
				$rek_kredit5 = '';
				$total_kredit5 = '';
			} elseif ($_POST['debkre'] == 'kredit') {
				$rek_debit5 = '';
				$total_debit5 = ''; 
				$rek_kredit5 = $_POST['rekening'];
				$total_kredit5 = $_POST['total'];
			} if ($_POST['debkre2'] == 'debit') {
				$rek_debit6 = $_POST['rekening2'];
				$total_debit6 = $_POST['total2'];
				$rek_kredit6 = '';
				$total_kredit6 = '';
			} elseif ($_POST['debkre2'] == 'kredit') {
				$rek_debit6 = '';
				$total_debit6 = '';
				$rek_kredit6 = $_POST['rekening2'];
				$total_kredit6 = $_POST['total2'];
			} if ($_POST['debkre3'] == 'debit') {
				$rek_debit7 = $_POST['rekening3'];
				$total_debit7 = $_POST['total3']; 
				$rek_kredit7 = '';
				$total_kredit7 = '';
			} elseif ($_POST['debkre3'] == 'kredit') {
				$rek_debit7 = '';
				$total_debit7 = '';
				$rek_kredit7 = $_POST['rekening3'];
				$total_kredit7 = $_POST['total3']; 
			} if ($_POST['debkre4'] == 'debit') {
				$rek_debit8 = $_POST['rekening4'];
				$total_debit8 = $_POST['total4']; 
				$rek_kredit8 = '';
				$total_kredit8 = ''; 
			} elseif ($_POST['debkre4'] == 'kredit') {
				$rek_debit8 = '';
				$total_debit8 = ''; 
				$rek_kredit8 = $_POST['rekening4'];
				$total_kredit8 = $_POST['total4']; 
			}
			mysql_query("INSERT INTO trans_jogja (client_jog, hp_jog, code_tkt, code_tur, notrans_jog, tgltrans_jog, jamtrans_jog, ket_jog, deb_ref_jog, deb_ref2_jog, deb_ref3_jog, deb_ref4_jog, deb_jml_jog, deb_jml2_jog, deb_jml3_jog, deb_jml4_jog, kre_ref_jog, kre_ref2_jog, kre_ref3_jog, kre_ref4_jog, kre_jml_jog, kre_jml2_jog, kre_jml3_jog, kre_jml4_jog, operator_jog) VALUES ('".$_POST['client']."','".$_POST['handphone']."','".$codetkt."','".$codetur."','".$orderID2."','".$_POST['tanggal']."','".$_POST['time']."','".$_POST['trans']."','".$rek_debit5."','".$rek_debit6."','".$rek_debit7."','".$rek_debit8."','".$total_debit5."','".$total_debit6."','".$total_debit7."','".$total_debit8."','".$rek_kredit5."','".$rek_kredit6."','".$rek_kredit7."','".$rek_kredit8."','".$total_kredit5."','".$total_kredit6."','".$total_kredit7."','".$total_kredit8."','".$_SESSION['username']."')") or die("Error: ".mysql_error());
			echo "<meta http-equiv='refresh' content='0; url=jurnal.php'>";
?>