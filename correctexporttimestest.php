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
$sql_header=array("Link ID", "Export Time");
$fld_lnk="SELECT  fld_id from db_ccardcfg.tbl_merchant where fld_merchant_no in ($fld_merchant_no)";
$queryupdate="UPDATE db_ccardcfg.tbl_export_times set fld_last_export='2001-01-01 00:00:01' where fld_lnk in (select fld_id from db_ccardcfg.tbl_merchant where fld_merchant_no in ($fld_merchant_no);";

$result1=mysql_query($queryupdate) or trigger_error(mysql_error().$query);
//$query="SELECT `fld_lnk`,`fld_last_export` FROM `tbl_export_times` WHERE `fld_last_export` = '2001-01-01 00:00:01'";
$query="select tm.fld_merchant_no, et.fld_last_export from tbl_merchant as tm, tbl_last_export as et where tm.fld_id=et.fld_lnk and tm.fld_merchant_no in ($fld_merchant_no)";

mysql_close();

?>
