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
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
	header('Location: index.php');
	die();
}
include('../inc/config.php');
include ("../inc/date.php");
$result = mysql_query("SELECT invoices.*,clients.* FROM invoices,clients WHERE invoices.clientid=clients.clientid && invoices.id = '$id'");
while ($row = mysql_fetch_array($result))
{
	$invoiceid = $row["id"];
	$clientid = $row["clientid"];
	$client_title = $row["company"];
	$date = $row["date"];
	$bill_date = $row["bill_date"];
	$due_date = $row["due_date"];
	$paid_date = $row["paid_date"];
	$dateshow = fixDate($date);
	$dateshow1 = fixDate($bill_date);
	$dateshow2 = fixDate($due_date);
	$dateshow3 = fixDate($paid_date);
	$dateshow4 = fixdate($today);
	$shipping = $row["shipping"];
	$salestax = $row["salestax"];
	$subtotal = $row["subtotal"];

	$total = $row["total"];
	$misc = $row["misc"];
	$note = $row["note"];
	$status = $row["status"];
	$purchaseorder=$row["purchaseorder"];
	$taxid = $row["taxid"];
	$spa = $row["spa"];
	$first_name = $row["first_name"];
    $last_name = $row["last_name"];
    $company = $row["company"];
    $address = $row["address"];
    $city = $row["city"];
	$night_phone_a = $row["night_phone_a"];
    $state = $row["state"];
    $zip = $row["zip"];
    $shiptoname = $row["shiptoname"];
    $shiptoaddr = $row["shiptoaddr"];
    $shiptocity = $row["shiptocity"];
    $shiptostate = $row["shiptostate"];
    $shiptozip = $row["shiptozip"];

    $spa1 = $row["spa1"];
	$spa2 = $row["spa2"];
	$spa3 = $row["spa3"];
	$spa4 = $row["spa4"];
	$spa5 = $row["spa5"];
	$spa6 = $row["spa6"];
	$spa7 = $row["spa7"];
	$spa8 = $row["spa8"];
	$spa9 = $row["spa9"];
	
	$pass_nem1 = $row["pass_nem1"];
	$pass_nem2 = $row["pass_nem2"];
	$pass_nem3 = $row["pass_nem3"];
	$pass_nem4 = $row["pass_nem4"];
	$pass_nem5 = $row["pass_nem5"];
	$pass_nem6 = $row["pass_nem6"];
	$pass_nem7 = $row["pass_nem7"];
	$pass_nem8 = $row["pass_nem8"];
	$pass_nem9 = $row["pass_nem9"];
	
	$docnum = $row["docnum"];
    $serv1qty = $row["serv1qty"];
    $serv1amt = $row["serv1amt"];
    $serv1tax = $row["serv1tax"];
    $serv1rate = $row["serv1rate"];
	
	$serv2qty = $row["serv2qty"];
    $serv2amt = $row["serv2amt"];
    $serv2tax = $row["serv2tax"];
    $serv2rate = $row["serv2rate"];
	
	$serv3qty = $row["serv3qty"];

    $place = $row["place"];
	$payb = $row["payb"];
	$app = $row["app"];
	$prepr = $row["prepr"];
	
	$airline = $row["airline"];
	$fr = $row["fr"];
	$fr2 = $row["fr2"];
	$fr3 = $row["fr3"];
	$fr4 = $row["fr4"];
	$fr5 = $row["fr5"];
	$t = $row["t"];
	$t2 = $row["t2"];
	$t3 = $row["t3"];
	$t4 = $row["t4"];
	$t5 = $row["t5"];
	
	$timefr = $row["timefr"];
	$timefr2 = $row["timefr2"];
	$timefr3 = $row["timefr3"];
	$timefr4 = $row["timefr4"];
	$timefr5 = $row["timefr5"];
	$timeto = $row["timeto"];
	$timeto2 = $row["timeto2"];
	$timeto3 = $row["timeto3"];
	$timeto4 = $row["timeto4"];
	$timeto5 = $row["timeto5"];
	
	$tgl = $row["tgl"];
	$tgl2 = $row["tgl2"];
	$tgl3 = $row["tgl3"];
	$tgl4 = $row["tgl4"];
	$tgl5 = $row["tgl5"];
	$airtipe = $row["airtipe"];
	$airtipe2 = $row["airtipe2"];
	$airtipe3 = $row["airtipe3"];
	$airtipe4 = $row["airtipe4"];
	
	
	$kt = $row["kt"];
	$kt2 = $row["kt2"];
}
?>
<html>
<head>
<title></title>
<style type="text/css">
<!--

.style18 {
	font-size: 15px;
	font-family: "Times New Roman", Times, serif;
}
.style23 {
	font-size: 20px;
	font-family: Elephant;
}
.style26 {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
}
.style32 {
	font-size: 24px;
	font-weight: bold;
}
.style33 {font-size: 24px}
.style34 {font-family: Arial, Helvetica, sans-serif; font-size: 18px;}
.garis2 {
	border-top-width: 5px;
	border-left-width: 4px;
	border-top-style: solid;
	border-left-style: solid;
	border-top-color: #000000;
	border-left-color: #000000;
}
.garis3 {
	border: 4px solid #000000;
}
-->
</style>
<script type="text/javascript" src="development-bundle/jquery-1.4.js"></script>
	<script type="text/javascript" src="development-bundle/jquery.numberformatter-1.1.0.js"></script>
        <script>
        $(document).ready(function() {
            $(".numbers").each(function() {
                $(this).format({format:"#,###", locale:"us"});
            });
        });
        </script>
<script type="text/javascript">
<!--
function delayer(){
    window.print();
}
//-->
</script>
</head>
<body text="#000000" onLoad="setTimeout('delayer()', 1000);">

<center>

 <table width="94%" height="50%" border="0" cellspacing="0" cellpadding="0" >

    <tr valign="top">
      <td align="right">
      <table width="907" height="179" border="0" align="center">
        <tr>
          <td width="463" rowspan="6" align="center"><img src="images/smart.png" width="463" height="97"><font size="2"><br>
            </font>  <span class="style18">PT. Smartindo Sinar Mulia<br>
              <font style="border-bottom:1px solid #000000">Head Office</font>: Jl. RE Martadinata 28 Yogyakarta (0274) 551997<br>
              <font style="border-bottom:1px solid #000000">Branch Office</font>: Jl. Surapati 55 Bandung (022) 2531246<br>
            Website: <a href="http://www.smart17tour.com/" target="_blank">www.smart17tour.com</a> &nbsp;Email: <a href="mailto:smart17tour@yahoo.com" target="_blank">smart17tour@yahoo.com</a></span></td>
          <td height="2" colspan="2" valign="bottom"></td>
        </tr>
        <tr>
          <td width="52" height="21" nowrap></td>
          <td width="378" nowrap>&nbsp;</td>
        </tr>
        <tr>
          <td height="47"></td>
          <td height="47"><span class="style33"><font face="Century Gothic">INVOICE NO.</font></span> <span class="style33"><strong><font face="Bookman Old Style">BA</font></strong></span>&nbsp;&nbsp;<font style="border-bottom:1px dotted #000000" size="5" face="Letter Gothic Std"><strong><?=$purchaseorder?></strong></font></td>
        </tr>
        
        <tr>
          <td height="36"></td>
          <td height="36"><font size="4" face="Arial, Helvetica, sans-serif">
		  <?=$spa?>&nbsp;<?=$first_name?>&nbsp;<?=$last_name?>&nbsp;(<?=$night_phone_a?>)&nbsp;&nbsp;&nbsp;&nbsp;</font><hr color="#666666" size="1px" noshade="noshade" /></td>
        </tr>
        <tr>
          <td height="9">&nbsp;</td>
          <td height="9"><font size="4" face="Arial, Helvetica, sans-serif">
            <?=$city?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font><hr color="#666666" size="1px" noshade="noshade" /></td>
        </tr>
        <tr>
          <td height="21" colspan="2">&nbsp;</td>
        </tr>
      </table>
        <table width="898" height="514" border="1" align="center" cellspacing="0" bordercolor="#000000" class="garis3">
          <tr>
            <td width="310" height="38" align="center"><span class="style32"><font face="Arial, Helvetica, sans-serif">NAME</font></span></td>
            <td width="207" align="center"><span class="style32"><font face="Arial, Helvetica, sans-serif">DOC. NUMBER</font></span></td>
            <td width="355" align="center"><span class="style32"><font face="Arial, Helvetica, sans-serif">REMARKS</font></span></td>
            <td width="206" align="center"><span class="style32"><font face="Arial, Helvetica, sans-serif">AMOUNT</font></span></td>
          </tr>
          <tr>
            <td height="356" align="left" valign="top">
            <font size="4" face="Arial, Helvetica, sans-serif"><strong>
            &nbsp;<?=$spa1?>&nbsp;<?=$pass_nem1?></strong></font><br><br>
            <font size="4" face="Arial, Helvetica, sans-serif"><strong>
            &nbsp;<?=$spa2?>&nbsp;<?=$pass_nem2?></strong></font><br><br>
            <font size="4" face="Arial, Helvetica, sans-serif"><strong>
            &nbsp;<?=$spa3?>&nbsp;<?=$pass_nem3?></strong></font><br><br>
            <font size="4" face="Arial, Helvetica, sans-serif"><strong>
            &nbsp;<?=$spa4?>&nbsp;<?=$pass_nem4?></strong></font><br><br>
            <font size="4" face="Arial, Helvetica, sans-serif"><strong>
            &nbsp;<?=$spa5?>&nbsp;<?=$pass_nem5?></strong></font><br><br>
            <font size="4" face="Arial, Helvetica, sans-serif"><strong>
            &nbsp;<?=$spa6?>&nbsp;<?=$pass_nem6?></strong></font><br /><br>
            <font size="4" face="Arial, Helvetica, sans-serif"><strong>
            &nbsp;<?=$spa7?>&nbsp;<?=$pass_nem7?></strong></font><br /><br>
            <font size="4" face="Arial, Helvetica, sans-serif"><strong>
            &nbsp;<?=$spa8?>&nbsp;<?=$pass_nem8?></strong></font><br /><br>
            <font size="4" face="Arial, Helvetica, sans-serif"><strong>
            &nbsp;<?=$spa9?>&nbsp;<?=$pass_nem9?></strong></font>
            </td>
            <td align="center" valign="top"><font size="4" color="#3366FF" face="Arial, Helvetica, sans-serif"><strong><?=$airline?></strong></font><br><br><font size="6" color="#3366FF" face="Cooper Black"><strong><?=$docnum?></strong></font></td>
            
            <td align="center" valign="top"><font size="4" face="Arial, Helvetica, sans-serif"><strong><?=$tgl?></strong></font><font size="4" face="Arial, Helvetica, sans-serif"><strong>
              <?=$tgl5?>
            </strong></font><br>
            <br>
            <font size="4"  face="Arial, Helvetica, sans-serif"><?=$airtipe?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$fr?><?=$fr5?>
            </font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$timefr?><?=$timefr5?>
            </font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$t?><?=$t5?>
            </font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$timeto?><?=$timeto5?>
            </font><br /><br>
            
            <font size="4" face="Arial, Helvetica, sans-serif"><strong><?=$tgl2?></strong></font><br><br>
            <font size="4" face="Arial, Helvetica, sans-serif"><?=$airtipe2?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$fr2?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$timefr2?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$t2?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$timeto2?></font><br /><br>
            
            <font size="4" face="Arial, Helvetica, sans-serif"><strong><?=$tgl3?></strong></font><br><br>
            <font size="4" face="Arial, Helvetica, sans-serif"><?=$airtipe3?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$fr3?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$timefr3?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$t3?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$timeto3?></font><br /><br>
            
            <font size="4" face="Arial, Helvetica, sans-serif"><strong><?=$tgl4?></strong></font><br><br>
            <font size="4" face="Arial, Helvetica, sans-serif"><?=$airtipe4?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$fr4?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$timefr4?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$t4?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$timeto4?></font><br /><br>
            <br>
            <br>            &nbsp;&nbsp;&nbsp;</td>
            
            <td align="right" valign="top"><font size="4" face="Arial, Helvetica, sans-serif" class="numbers"><?=$subtotal?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$currency?></font>&nbsp;<br><font size="4">&nbsp;</font><br>
            <font size="4">&nbsp;</font><br>
            <font size="4">&nbsp;</font><br>
            <font size="4">&nbsp;</font></td>
          </tr>
          <tr>
            <td height="33" align="left"><font size="4" face="Arial, Helvetica, sans-serif">&nbsp;<?=$serv3qty?>&nbsp;</font><span class="style34">PAX&nbsp;/</span><font size="4" face="Arial, Helvetica, sans-serif">&nbsp;
                <?=$kt?>
            </font></td>
            <td>&nbsp;</td>
            <td align="right"><font size="4" face="Arial, Helvetica, sans-serif"><?=$kt2?>&nbsp;</font></td>
            <td align="right"><font size="4" face="Arial, Helvetica, sans-serif" class="numbers"><?=$misc?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$currency?></font>&nbsp;</td>
          </tr>
          <tr>
            <td height="33" colspan="3" align="right"><strong><span class="style23">TOTAL</span><font face="Bookman Old Style" size="4">&nbsp;</font></strong></td>
            <td align="right" class="garis2"><font size="4" face="Arial, Helvetica, sans-serif" class="numbers"><?=$total?></font>&nbsp;<font size="4" face="Arial, Helvetica, sans-serif"><?=$currency?></font>&nbsp;</td>
          </tr>
        </table>
        <table width="888" height="74" border="0" align="center">
          <tr>
            <td width="833" rowspan="2" valign="top"><span class="style26">Note :<br>
            Payment by Cheque / Giro / Credit - Debet Card is considered valid after it had been credited to our Bank account<br>
&rArr; Bank MANDIRI : 1370006684829 a.n. PT. SMARTINDO SINAR MULIA</span></td>
            <td width="277" align="right"><span class="style26">
            <?=$place?>
            ,&nbsp;
            <?=$dateshow2?>
            </span></td>
          </tr>
          <tr>
            <td height="48">&nbsp;</td>
          </tr>
        </table>
        <table width="892" height="105" border="0" align="center">
          <tr>
            <td width="116" height="21"><span class="style26">DUE DATE</span></td>
            <td width="147"><span class="style26">:&nbsp;
                <?=$dateshow2?>
            </span></td>
            <td width="262" align="center"><span class="style26">Approve By,</span></td>
            <td width="302" align="center"><span class="style26">Received By,</span></td>
            <td width="251" align="center"><span class="style26">Prepared By,</span></td>
          </tr>
          <tr>
            <td height="78" align="left" valign="top"><span class="style26">Payment by</span></td>
            <td height="78" align="left" valign="top"><font size="3">:</font><span class="style26">&nbsp;
                <?=$payb?>
            </span> </td>
            <td align="center" valign="bottom"><span class="style26">(&nbsp;
                <?=$app?>
            </span>            <span class="style26">&nbsp;)</span></td>
            <td align="center" valign="bottom"><span class="style26">(&nbsp;
                <?=$first_name?>
              &nbsp;
              <?=$last_name?>
            &nbsp;)</span></td>
            <td align="center" valign="bottom"><span class="style26">(&nbsp;
                <?=$prepr?>
            </span>            <span class="style26">&nbsp;)</span></td>
          </tr>
      </table></td>
    </tr>
  </table>

</center>
</body>
</html>