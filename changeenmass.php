<!docttype html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="css/viewstyle.css">
  <title>Database Query Result</title>
</head>

<style>
table, th, td {
        background-color:#eee;border-collapse:collapse;
        padding: 5px;
        border: 1px solid black;
}
</style>

<body>
<?php

$servername = "pm01tprmdb01v";
$username = "sgarcia";
$password = "nu98pa34ss4r";
$dbname = "db_ccardcfg";

// Create database connection

mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die( "Unable to select database");



$fld_merchant_capabilities_old = "$_POST[fld_id1]";
$fld_merchant_capabilities_new = "$_POST[fld_id2]";
$fld_merchant_type = "$_POST[fld_id]";
$fld_merchant_no = "$_POST[fld_id3]";

$sql_header=array("Merchant Capabilities", "Merchant Number");
$queryupdate="UPDATE tbl_merchant SET fld_merchant_capabilities =  $fld_merchant_capabilities_new  WHERE fld_merchant_no in ($fld_merchant_no);";
echo $queryupdate;
$result=mysql_query($queryupdate) or trigger_error(mysql_error().$query);
$query="SELECT `fld_merchant_capabilities`, `fld_merchant_no` FROM `tbl_merchant` WHERE `fld_merchant_no` in ($fld_merchant_no);";

$rowno=mysql_num_rows($result);
if ($rowno > 0) 
	{
echo "<table><tr><th>Merchant Capabilities</th><th>Merchant Number</th></tr>";	
while($row = mysql_fetch_array($result))
{

echo "<tr><td>".$row["fld_merchant_capabilities"]."</td><td>".$row["fld_merchant_no"]."</td><tr>";

}

}


mysql_close();

?>

</body>
</html>
