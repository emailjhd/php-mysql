<!DOCTYPE html>
 
<html>
<body>
<a href="index.html">Home Page</a>
<?php


$mode = $_POST[mode];
//        echo "i equals $mode";

switch ($mode) {
case 0:
	$input="textarea";
        $header="Search for Scheduled MID Data";
        $advice="Pre-Go Live Daily Checks - Verify Merchant data entered via AdminTool is correct";
        $dest="process.php";
        $Label="MID list:";
        break;
case 1:
	$input="textarea";
        $header="Search for Scheduled Company Data";
        $advice="Pre-Go Live Daily Checks - Verify GID data entered via AdminTool is correct";
        $dest="process.php";
        $Label="GID list:";
        break;
case 2:
	$input="textarea";
	$header="Search for Scheduled emails";
        $advice="Pre-Go Live Daily Checks - Verify emials have been added for submission of daily reports";
        $dest="process.php";
	$Label="GID List:";
        break;
case 3:
	$input="textarea";
        $header="Clear Monitoring Flag";
        $advice="Disable monitoring flag for new merchants that have gone live";
        $dest="process.php";
	$Label="MID List:";
        break;

case 4:
	$input="textarea";
        $header="Set Status Flag";
        $advice="Set the monitoring flag on merchant numbers that need to be monitored";
        $dest="process.php";
	$Label="MID List:";
        break;
case 18:
        $input="textarea";
        $header="Clear Nursery Flag";
        $advice="Clear Nursery Flag";
        $dest="process.php";
        $Label="MID List:";
        break;

case 5:
	$input="textarea";
	$header="Ad-Hoc Merchant Exports";
	$advice="Export Merchant data for specific GID(s)";
	$dest="process.php";
	$Label="GID List:";
	break;
case 6:
	$input="3textbox";
	$label1="Merchant ID:";
	$label2="Old GID:";
	$label3="New GID:";
	$header="Move MIDS from one GID to another";
	$advice="Transfer MIDs from their current allocated GID to another";
      	$dest="process.php";
        break;

case 7:
	$input="textareatextbox";
        $label2="New Merchant Capabilities:";
	$Label="<b>MID List</b>";
        $header="Change Merchant Capabilities En Mass (By Merchant Number)";
        $advice="Update multiple MIDs 'Merchant Capabilities' flag. Once done raise a task to TSG to resync the EM database";
        $dest="process.php";
        break;


case 8:
        $input="textareatextbox";
        $label2="New Merchant Capabilities:";
        $Label="<b>GID List</b>";
        $header="Change Merchant Capabilities En Mass (By Group)";
        $advice="Update the 'Service Types' of all MIDs assigned to a group. Once done raise a task to TSG to resync the EM database";
        $dest="process.php";
        break;

case 9:
        $input="textareatextbox";
        $label2="Service Type:";
        $Label="<b>MID List</b>";
        $header="Change Service Type En Mass (By Merchant Number)";
        $advice="Update multiple MIDs 'Service Types'. Once done raise a task to TSG to resync the EM database";
        $dest="process.php";
        break;

case 10:
        $input="textareatextbox";
        $label1="Old Merchant Capabilities:";
        $label2="New Merchant Capabilities:";
        $Label="<b>GID List</b>";
        $header="Change Service Type En Mass (By Group)";
        $advice="Update the 'Service Types' of all MIDs assigned to a group. Once done raise a task to TSG to resync the EM database";
        $dest="process.php";
        break;

case 11:
        $input="textareatextbox";
        $label2="Card Accepted:";
        $Label="<b>MID List</b>";
        $header="Change Accepted Card Types En Mass (By Merchant Number)";
        $advice="Update accepted cards on multiple MIDs";
        $dest="process.php";
        break;

case 12:
        $input="textareatextbox";
        $label2="Card Accepted:";
        $Label="<b>GID List</b>";
        $header="Change Accepted Card Types En Mass (By Group)";
        $advice="Update the accepted cards of all MIDs assigned to a group.";
        $dest="process.php";
        break;

case 13:
        $input="dropdown";
        $servername = "pm01tprmdb01v";
        $username = "sgarcia";
        $password = "nu98pa34ss4r";
        $dbname = "db_psp";
// 	$query="select fld_id, fld_company_name from tbl_company where fld_trader_lnk=$fld_id order by fld_id;";
        $Label="<b>Partner List</b>";
        $header="Ad-Hoc Company Export";
        $advice="We receive requests from CIADmin and Sales to export a list of companies linked to a specfic partner";
	$dest="process.php";
        break;

case 14:
        $input="textarea";
        $header="Correct Export Times";
        $advice="When a customer changes their export times via MIS the fld_last_export is not reset so if we do not update manually the next export run does not execute";
        $dest="process.php";
        $Label="<b>MID list:<b>";
        break;

case 15:
        $input="textarea";
        $header="Transaction Counts Real Time";
        $advice="Do a count of transactions taken on specfic MIDs";
        $dest="process.php";
        $Label="<b>MID list:<b>";
        break;

case 16:
        $input="textbox";
        $header="Update Transaction Status for Export (SUCCESS)";
        $advice="Normally a support task but where we are workingwith a customer if we need to release pending transactions or want to stop a transaction from exporting we will update the fld_authorised and fld_payment";
        $dest="process.php";
        $label1="<b>Transaction ID:<b>";
        break;

case 17:
        $input="textbox";
        $header="Update Transaction Status for Export (FAILURE)";
        $advice="Normally a support task but where we are workingwith a customer if we need to release pending transactions or want to stop a transaction from exporting we will update the fld_authorised and fld_payment";
        $dest="process.php";
        $label1="<b>Transaction IDs:<b>";
        break;


case 19:
        $input="3textboxtextarea";
        $header="Change Account Details En Mass";
        $advice="A customer may change bank account and if they have a large number of MIDs then rather than this be completed manually we will update via the database. The change can be the same details for all MIDs our differenet details for each MID or Group of MIDs";
        $dest="process.php";
        $Label="<b>MID List:<b>";
	$label1="<b>Bank Code:<b>";
        $label2="<b>Sort Code:<b>";
        $label3="<b>Account Number:<b>";
        break;
case 20:
        $input="textarea";
        $header="Morning Count Transaction Check";
        $advice="Morning Count Transaction Check";
        $dest="process.php";
        $Label="<b>MID list:<b>";
        break;

}


echo"<h3>$header</h3>";
echo"<p>$advice</p>";
echo"<form action='$dest' method='post'>";
echo"<table>";
switch ($input) {

case "textarea": 
	echo"<tr><td valign='top'>$Label</td>";
	echo"<td><textarea name='fld_id' rows='5' cols='40'></textarea></td></tr>";
	break;

case "textbox":
        echo"<tr><td>$label1</td><td><input type='text' name='fld_id1'></td></tr>";
	break;

case "2textbox":
	echo"<tr><td valign='top'>$Label</td>";
        echo"<td><textarea name='fld_id3' rows='5' cols='40'></textarea></td></tr>";
        echo"<tr><td>$label1</td><td><input type='text' name='fld_id1'></td></tr>";
        echo"<tr><td>$label2</td><td><input type='text' name='fld_id2'></td></tr>";
        break;

case "textareatextbox":
        echo"<tr><td valign='top'>$Label</td>";
        echo"<td><textarea name='fld_id2' rows='5' cols='40'></textarea></td></tr>";
        echo"<tr><td>$label2</td><td><input type='text' name='fld_id1'></td></tr>";
        break;

case "3textbox":
	echo"<tr><td>$label1</td><td><input type='text' name='fld_id1'></td></tr>";
	echo"<tr><td>$label2</td><td><input type='text' name='fld_id2'></td></tr>";
	echo"<tr><td>$label3</td><td><input type='text' name='fld_id3'></td></tr>";
	break;

case "textboxandtextarea":
        echo"<tr><td>$label1</td><td><input type='text' name='fld_id1'></td></tr>";
	echo"<td><textarea name='fld_id2' rows='5' cols='40'></textarea></td></tr>";
        echo"<tr><td>$label3</td><td><input type='text' name='fld_id3'></td></tr>";
        break;

case "4textbox":
	echo"<tr><td valign='top'>$Label</td>";
        echo"<td><textarea name='fld_id' rows='5' cols='40'></textarea></td></tr>";
        echo"<tr><td>$label1</td><td><input type='text' name='fld_id1'></td></tr>";
        echo"<tr><td>$label2</td><td><input type='text' name='fld_id2'></td></tr>";
        break;

case "3textboxtextarea":
        echo"<tr><td valign='top'>$Label</td>";
        echo"<td><textarea name='fld_id' rows='5' cols='40'></textarea></td></tr>";
        echo"<tr><td>$label1</td><td><input type='text' name='fld_id1'></td></tr>";
        echo"<tr><td>$label2</td><td><input type='text' name='fld_id2'></td></tr>";
	echo"<tr><td>$label3</td><td><input type='text' name='fld_id3'></td></tr>";
        break;


case "dropdown":


// Create database connection

	mysql_connect($servername,$username,$password);
	mysql_select_db($dbname) or die( "Unable to select database");



	$query="select fld_id, fld_trader from tbl_trader order by fld_trader;";

	$result=mysql_query($query);
	echo "<select name='fld_id'>";

	while($row = mysql_fetch_assoc($result))

	{


	$fld_trader=$row["fld_trader"];
	$fld_id=$row["fld_id"];
	echo "<option value='$fld_id'>$fld_trader</option>";

	}

	echo "</select>";
        break;
}
echo"</table>";
        echo"<input type='hidden' name='mode' value='$mode'>";
        echo"<input type='Submit' />";
        echo"</form>";

?>
</body>
</html>
