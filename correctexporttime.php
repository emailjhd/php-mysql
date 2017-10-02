<?php

$servername = "pm01tprmdb01v";
$username = "sgarcia";
$password = "nu98pa34ss4r";
$dbname = "db_ccardcfg";

// Create database connection

mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die( "Unable to select database");




$fld_merchant_no = "$_POST[fld_id]";
$header="Correct Export Times";
<<<<<<< HEAD
$sql_header=array("Merchant Number", "Export Time");
$queryupdate="UPDATE db_ccardcfg.tbl_export_times set fld_last_export='2001-01-01 00:00:01' where fld_lnk in (select fld_id from db_ccardcfg.tbl_merchant where fld_merchant_no in ($fld_merchant_no));";
$result=mysql_query($queryupdate) or trigger_error(mysql_error().$queryupdate);
//$query="SELECT `fld_lnk`,`fld_last_export` FROM `tbl_export_times` WHERE `fld_last_export` = '2001-01-01 00:00:00'";
$query="select tm.fld_merchant_no, et.fld_last_export from tbl_merchant as tm, tbl_export_times as et where tm.fld_id=et.fld_lnk and tm.fld_merchant_no in ($fld_merchant_no)";
$rowno=mysql_num_rows($result);
if ($rowno > 0) 
	{
echo "<table><tr><th>Link ID</th><th>Export Time</th></tr>";	
while($row = mysql_fetch_array($result))
{

echo "<tr><td>".$row["fld_merchant_no"]."</td><td>".$row["fld_last_export"]."</td><tr>";
=======
$sql_header=array("Link ID", "Export Time");
$queryupdate="UPDATE db_ccardcfg.tbl_export_times set fld_last_export='2001-01-01 00:00:01' where fld_lnk in (select fld_id from db_ccardcfg.tbl_merchant where fld_merchant_no in ($fld_merchant_no);";

$result=mysql_query($queryupdate) or trigger_error(mysql_error().$queryupdate);
//$query="SELECT `fld_lnk`,`fld_last_export` FROM `tbl_export_times` WHERE `fld_last_export` = '2001-01-01 00:00:01'";
$query="select tm.fld_merchant_no, et.fld_last_export from tbl_merchant as tm, tbl_export_times as et where tm.fld_id=et.fld_lnk and tm.fld_merchant_no in ($fld_merchant_no)";
echo $query;
$rowno=mysql_num_rows($result);
if ($rowno > 0) 
	{
echo "<table><tr><th>Link</th><th>Last Export Time</th></tr>";	
while($row = mysql_fetch_array($result))
{

echo "<tr><td>".$row["fld_lnk"]."</td><td>".$row["fld_last_export"]."</td><tr>";
>>>>>>> 04e9115ed2bc211763254c34a3cb4993db9988cf
}

} 
mysql_close();
?>
