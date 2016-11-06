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

if($_POST['delete']) {

foreach($_POST as $id) { // This will loop through the checked checkboxes

mysql_query("DELETE FROM admin_access WHERE id='$_GET[id]' LIMIT 1");
echo ("<script language=javascript>document.location.href = 'admin_access_log.php?message=Log has been deleted!'</script>");
}
}
?>
<link rel="stylesheet" href="print.css" type="text/css" media="print" />
 
  <h1>WEB Access Records</h1> 
  <br><font color=red size=4><?php if (isset($_GET['message'])) { echo ' - '.$_GET['message']; } ?></font><BR>

<table width="93%" border="0">
<form method="post" name="form1" action="<?=$_SERVER['PHP_SELF']?>" class="noPrint">
<input type="hidden" name="searching" value="yes" />
<tr align="center">
<td>Start Date:&nbsp;<input type="text" name="invdate" id="invdate" />&nbsp;
End Date:&nbsp;<input type="text" name="invdate2" id="invdate2" />&nbsp;
<input type="Submit" name="update" value="Search By Date"></form></td></tr></table>
<?php
//This is only displayed if they have submitted the form 
if ($searching =="yes") 
{ 
echo "&nbsp;"; 

//If they did not enter a search term we give them an error 
if ($invdate == "" or $invdate2 == "") 
{ 
echo "<p>You forgot to enter a search term"; 
include('footer.php');
exit; 
}

echo '<br /><br /><input type="image" src="images/printhistory.png" onclick="javascript: print();" class="noPrint" />';

 echo "<p><table border=1 cellspacing=0 cellpadding=2 bordercolor=#000000 width=95%>";
 echo "<tr align=top>
 <td class=topHeadrow5>&nbsp;User name</td>
 <td class=topHeadrow5>&nbsp;IP Address</td>
 <td class=topHeadrow5>&nbsp;Login Date</td>
 <td class=topHeadrow5>&nbsp;Time</td>
 <td class=topHeadrow5>&nbsp;Invoices Viewed</td>
 <td class=topHeadrow5>&nbsp;</td>
 </tr>";

$results= mysql_query("SELECT * FROM admin_access WHERE date BETWEEN '".$invdate."' AND '".$invdate2."' ORDER BY date ASC");
while ($row = mysql_fetch_array($results)){
 $id = $row['id'];
 $adminname= $row['admin_name'];
 $ipaddr=$row['ipaddr'];
 $datein=$row['date'];
 $dateshow= fixDate($date);
 $timein=$row['timein'];
 $urlviewed=$row['url_viewed'];
 $isloggedin=$row['isloggedin'];
 
if ($alternate == "1") { 
	$color = "#ffffff"; 
	$alternate = "2"; 
	} 
	else { 
	$color = "#e5e5e5"; 
	$alternate = "1"; 
	}
 echo "<tr valign=top bgcolor=$color>
        <td width=10>$adminname</td>
        <td>$ipaddr</td>
        <td>$datein</td>
        <td>$timein</td>
        <td>$urlviewed</td>
        <td>
        <form name=\"action\" id=\"action\" method=\"post\" action=\"admin_access_log.php?id=$id\">
        <input type=\"checkbox\" name=\"$id\" id=\"$id\" value=\"$id\" /> Delete</td></tr>";
}        	
 echo "<tr><td colspan=8 align=right><input type=\"submit\" name=\"delete\" id=\"delete\" value=\"Delete Selected\" />
</td></tr></table></form>";
//This counts the number or results - and if there wasn't any it gives them a little message explaining that 
$anymatches=mysql_num_rows($results); 
if ($anymatches == 0) 
{ 
echo "Sorry, but we can not find an entry to match your query<br><br>"; 
} 

//And we remind them what they searched for 
echo "<b>Your Search was for:</b> " .$find; 
echo "<br><br>";

} else {

 echo "<p><table border=1 cellspacing=0 cellpadding=2 bordercolor=#000000 width=95%>";
 echo "<tr align=top>
 <td class=topHeadrow5>&nbsp;User name</td>
 <td class=topHeadrow5>&nbsp;IP Address</td>
 <td class=topHeadrow5>&nbsp;Login Date</td>
 <td class=topHeadrow5>&nbsp;Time</td>
 <td class=topHeadrow5>&nbsp;Invoices Viewed</td>
 <td class=topHeadrow5>&nbsp;</td>
 </tr>";
  echo "<tr valign=top bgcolor=$color>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
        <form name=\"action\" id=\"action\" method=\"post\" action=\"admin_access_log.php?id=$id\">
        <input type=\"checkbox\" name=\"$id\" id=\"$id\" value=\"$id\" /> Delete</td></tr>";
 echo "<tr><td colspan=8 align=right><input type=\"submit\" name=\"delete\" id=\"delete\" value=\"Delete Selected\" /></td></tr></table></p>";
}
include('footer.php');
?>