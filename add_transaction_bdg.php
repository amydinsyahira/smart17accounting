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
<form method="post" name="formadd" id="formadd" action="action.php?id=add_transaction_bdg">
<table border="0">
<tr><td>Client</td><td>:&nbsp;<input name="client" type="text" id="client" onkeyup="setupper(this);" size="25" maxlength="20" /></td></tr>
<tr><td>Handphone</td><td>:&nbsp;<input name="handphone" type="text" id="handphone" size="25" maxlength="20" /></td></tr>
</table><hr size="1px" color="#999999" noshade="noshade" width="70%" />
<table border="0" id="datatable">
<tr><td>Date</td>
<td>:&nbsp;<input name="tanggal" type="text" id="tanggal" size="10" maxlength="10" /></td>
<td>Time:&nbsp;<input name="time" type="text" id="time" size="8" maxlength="8" /></td>
</tr>
<tr><td>Transaction</td>
<td colspan="2">:&nbsp;<input type="text" name="trans" id="trans" size="45" maxlength="25" onkeyup="setupper(this);" /></td>
</tr>
<tr>
<td>Total Rekening</td>
<td colspan="2">:&nbsp;
<select name="ttlrekening" id="ttlrekening" onkeyup="rek();" onchange="rek();">
<option value="2" selected="selected">02</option>
<option value="3">03</option>
<option value="4">04</option>
</select>
</td>
</tr>
<tr><td>Rekening</td>
<td colspan="2">:
<select name="rekening" id="rekening" onkeyup="javascript: fticket();" onchange="javascript: fticket();" />
            <option value="" selected="selected">Select Transaction:</option>
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
</select></td>
</tr>
<tr id="hide" style="display: none;">
<td>&nbsp;</td>
<td>Ticket:&nbsp;
<select name="ticket" id="ticket">
<option value="" selected="selected">Select Ticket:</option>
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
</select></td>
<td>Profit:&nbsp;
<input type="text" name="profit" id="profit" size="7" maxlength="20" /></td>
</tr>
<tr id="hide5" style="display: none;">
<td>&nbsp;</td>
<td>Tour:&nbsp;
<select name="tour" id="tour">
<option value="" selected="selected">Select Tour:</option>
<optgroup label="------ Tour ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_tour ORDER BY id_rek_tur ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_tur = $lz['no_rek_tur'];
			$rek_tur = $lz['rek_tur'];
			?>
            <option value="<?=$no_rek_tur?>"><?=$rek_tur?></option>
            <?php } ?>
</optgroup>
</select></td>
<td>Profit:&nbsp;
<input type="text" name="profit2" id="profit2" size="7" maxlength="20" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="radio" name="debkre" id="debkre" value="debit" checked="checked" />&nbsp;Debit&nbsp;<input type="radio" name="debkre" id="debkre" value="kredit" />&nbsp;Kredit</td>
<td>Total:&nbsp;<input type="text" name="total" id="total" size="8" maxlength="20" /></td>
</tr>
<tr><td>&nbsp;</td>
<td colspan="2">:
<select name="rekening2" id="rekening2" onkeyup="javascript: fticket2();" onchange="javascript: fticket2();" />
            <option value="" selected="selected">Select Transaction:</option>
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
</select></td>
</tr>
<tr id="hide2" style="display: none;">
<td>&nbsp;</td>
<td>Ticket:&nbsp;
<select name="ticket2" id="ticket2">
<option value="" selected="selected">Select Ticket:</option>
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
</select></td>
<td>Profit:&nbsp;
<input type="text" name="profit3" id="profit3" size="7" maxlength="20" /></td>
</tr>
<tr id="hide6" style="display: none;">
<td>&nbsp;</td>
<td>Tour:&nbsp;
<select name="tour2" id="tour2">
<option value="" selected="selected">Select Tour:</option>
<optgroup label="------ Tour ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_tour ORDER BY id_rek_tur ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_tur = $lz['no_rek_tur'];
			$rek_tur = $lz['rek_tur'];
			?>
            <option value="<?=$no_rek_tur?>"><?=$rek_tur?></option>
            <?php } ?>
</optgroup>
</select></td>
<td>Profit:&nbsp;
<input type="text" name="profit4" id="profit4" size="7" maxlength="20" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="radio" name="debkre2" id="debkre2" value="debit" />&nbsp;Debit&nbsp;<input type="radio" name="debkre2" id="debkre2" value="kredit" checked="checked" />&nbsp;Kredit</td>
<td>Total:&nbsp;<input type="text" name="total2" id="total2" size="8" maxlength="20" /></td>
</tr>
<tr id="toggle4" style="display: none;"><td>&nbsp;</td>
<td colspan="2">:
<select name="rekening3" id="rekening3" onkeyup="javascript: fticket3();" onchange="javascript: fticket3();" />
            <option value="" selected="selected">Select Transaction:</option>
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
</select></td>
</tr>
<tr id="hide3" style="display: none;">
<td>&nbsp;</td>
<td>Ticket:&nbsp;
<select name="ticket3" id="ticket3">
<option value="" selected="selected">Select Ticket:</option>
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
</select></td>
<td>Profit:&nbsp;
<input type="text" name="profit5" id="profit5" size="7" maxlength="20" /></td>
</tr>
<tr id="hide7" style="display: none;">
<td>&nbsp;</td>
<td>Tour:&nbsp;
<select name="tour3" id="tour3">
<option value="" selected="selected">Select Tour:</option>
<optgroup label="------ Tour ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_tour ORDER BY id_rek_tur ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_tur = $lz['no_rek_tur'];
			$rek_tur = $lz['rek_tur'];
			?>
            <option value="<?=$no_rek_tur?>"><?=$rek_tur?></option>
            <?php } ?>
</optgroup>
</select></td>
<td>Profit:&nbsp;
<input type="text" name="profit6" id="profit6" size="7" maxlength="20" /></td>
</tr>
<tr id="toggle5" style="display: none;">
<td>&nbsp;</td>
<td><input type="radio" name="debkre3" id="debkre3" value="debit" />&nbsp;Debit&nbsp;<input type="radio" name="debkre3" id="debkre3" value="kredit" checked="checked" />&nbsp;Kredit</td>
<td>Total:&nbsp;<input type="text" name="total3" id="total3" size="8" maxlength="20" /></td>
</tr>
<tr id="toggle6" style="display: none;"><td>&nbsp;</td>
<td colspan="2">:
<select name="rekening4" id="rekening4" onkeyup="javascript: fticket4();" onchange="javascript: fticket4();" />
            <option value="" selected="selected">Select Transaction:</option>
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
</select></td>
</tr>
<tr id="hide4" style="display: none;">
<td>&nbsp;</td>
<td>Ticket:&nbsp;
<select name="ticket4" id="ticket4">
<option value="" selected="selected">Select Ticket:</option>
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
</select></td>
<td>Profit:&nbsp;
<input type="text" name="profit7" id="profit7" size="7" maxlength="20" /></td>
</tr>
<tr id="hide8" style="display: none;">
<td>&nbsp;</td>
<td>Tour:&nbsp;
<select name="tour4" id="tour4">
<option value="" selected="selected">Select Tour:</option>
<optgroup label="------ Tour ------">
            <?php
			$result = mysql_query("SELECT * FROM rek_tour ORDER BY id_rek_tur ASC");
			while ($lz = mysql_fetch_array($result)) {
			$no_rek_tur = $lz['no_rek_tur'];
			$rek_tur = $lz['rek_tur'];
			?>
            <option value="<?=$no_rek_tur?>"><?=$rek_tur?></option>
            <?php } ?>
</optgroup>
</select></td>
<td>Profit:&nbsp;
<input type="text" name="profit8" id="profit8" size="7" maxlength="20" /></td>
</tr>
<tr id="toggle7" style="display: none;">
<td>&nbsp;</td>
<td><input type="radio" name="debkre4" id="debkre4" value="debit" />&nbsp;Debit&nbsp;<input type="radio" name="debkre4" id="debkre4" value="kredit" checked="checked" />&nbsp;Kredit</td>
<td>Total:&nbsp;<input type="text" name="total4" id="total4" size="8" maxlength="20" /></td>
</tr>
<tr align="center">
<td colspan="3"><hr size="1px" color="#999999" noshade="noshade" width="100%" />
<input type="submit" name="submit" id="submit" value="Submit" onclick="checkForm(form); return false;" />
</td></tr></table></form>