<?php

$servername = "pm01tprmdb01v";
$username = "sgarcia";
$password = "nu98pa34ss4r";
$dbname = "db_psp";

// Create database connection

mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die( "Unable to select database");


//$fld_id = "$_POST[fld_id]";
// $fld_trader = "$_POST[fld_trader]";

// $query="select distinct fld_trader from tbl_trader where fld_trader in ($fld_trader) order by fld_trader;";
$query="select fld_id, fld_company_name from tbl_company where fld_trader_lnk=$fld_id order by fld_id;";
$query="select fld_id, fld_trader from tbl_trader order by fld_trader;";

$result=mysql_query($query);
echo "<select name='fld_id'>";
 
while($row = mysql_fetch_array($result)) 

{


	echo "<option value=$fld_id>$fld_trader</option>";
$fld_trader=$row["fld_trader"];
echo "<option value='$fld_id'>$fld_trader</option>";

}

echo "</select>";

mysql_close();

?>
