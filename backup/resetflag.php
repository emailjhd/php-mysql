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
//$username = "sgarcia";
// $password = "nu98pa34ss4r";
$dbname = "db_ccardcfg";

// Create database connection

mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die( "Unable to select database");


//$query="UPDATE tbl_merchant SET fld_monitored='0', fld_last_update=NOW() WHERE fld_merchant_no in ($fld_merchant);";
//$result1=mysql_query($query) or trigger_error(mysql_error().$query);
//$queries="SELECT `fld_merchant_no`,`fld_monitored` FROM `tbl_merchant` WHERE `fld_merchant_no` in ($fld_merchant);";


$fld_merchant_no = "$_POST[fld_id]";
$header="Clear Monitoring Flag";
$sql_header=array("Merchant Number", "Monitored Flag Status");
$queryupdate="UPDATE tbl_merchant SET fld_monitored='1', fld_last_update=NOW() WHERE fld_merchant_no in ($fld_merchant_no);";
$result1=mysql_query($queryupdate) or trigger_error(mysql_error().$query);
$query="SELECT `fld_merchant_no`,`fld_monitored` FROM `tbl_merchant` WHERE `fld_merchant_no` in ($fld_merchant_no);";

$rowno=mysql_num_rows($result);
if ($rowno > 0) 
	{
echo "<table><tr><th>Merchant Number</th><th>Monitored Flag Status</th></tr>";	
while($row = mysql_fetch_array($result))
{

echo "<tr><td>".$row["fld_merchant_no"]."</td><td>".$row["fld_monitored"]."</td><tr>";


}

// } else {

// echo "Invalid Merchant Number";




}




 
mysql_close();

?>

</body>
</html>
