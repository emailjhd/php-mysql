<!DOCTYPE html>
 
<html>
<body>
<a href="index.html">Home Page</a>
<?php


$mode = "$_POST[mode]";
switch ($mode) {
    case 0:
        echo "i equals 0";
	$input="textarea";
        $header="Search for Scheduled MID Data";
        $advice="CIAdmin schedule customers each day we use this data to search and export key fields to import into a spreadsheet that verifys the data entered via Admintool is correct (e.g. Account details are correct, MID is live, Natwest Company ID is correct, etc.)";
        $dest="process.php";
        $Label="MID list:";
        break;
    case 1:
        echo "i equals 1";
	$input="textarea";
        $header="Search for Scheduled Company Data";
        $advice="CIAdmin schedule customers each day we use this data to search and export key fields to import into a spreadsheet that verifys the data entered via Admintool is correct e.g Export is enabled, the group is live etc...";
        $dest="process.php";
        $Label="ID list:";
        break;
    case 2:
        echo "i equals 2";
	$input="textarea";
	$header="Search for Scheduled emails";
        $advice="CIAdmin schedule customers each day we use this data to search and export to ensure an email address has been supplied to send reports to";
        $dest="process.php";
	$Label="ID List:";
        break;
    case 3:
        echo "i equals 3";
	$input="textarea";
        $header="Clear Monitoring Flag";
        $advice="Once a merchant has gone live and everything is working correctly they no longer need to be monitored so the flag is disabled so they no longer appear on the daily settlement report";
        $dest="process.php";
	$Label="MID List:";
        break;

case 4:
        echo "i equals 4";
	$input="textarea";
        $header="Set Status Flag";
        $advice="NursuryOnce a Natwest merchant has gone live as part of the Nursury file and it has been found to have no issues they are promoted to the live file
";
        $dest="process.php";
	$Label="Merchant ID:";
        break;
case 5:
	echo "i equals 5";
	$input="textarea";
	$header="Ad-Hoc Merchant Exports";
	$advice="CIAdmin require a list of merchant numbers under a specfic GID for a project that is being worked on or a customer has requested the data so we lookup the Merchants using the GID and then export the data. This may also be done on multiple groups if needed for a Partner";
	$dest="process.php";
	$Label="Group ID:";
	break;
case 6:
        echo "i equals 6";
	$input="3textbox";
	$label1="Merchant ID:";
	$label2="Old GID:";
	$label3="New GID:";
	$header="Move MIDS from one GID to another";
	$advice="If a customer decides that they want their merchants setup across multiple groups after CIAdmin have set them up under one group or CIADmin add a MID to the wrong group they need to be moved";
      	$dest="process.php";
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
case "3textbox":
	echo"<tr><td>$label1</td><td><input type='text' name='fld_id1'></td></tr>";
	echo"<tr><td>$label2</td><td><input type='text' name='fld_id2'></td></tr>";
	echo"<tr><td>$label3</td><td><input type='text' name='fld_id3'></td></tr>";
	break;
}
echo"</table>";
        echo"<input type='hidden' name='mode' value='$mode'>";
        echo"<input type='Submit' />";
        echo"</form>";



?>

</body>
</html>
