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




$fld_merchant_no = "$_POST[fld_id]";
$header="Clear Monitoring Flag";
$sql_header=array("Merchant name", "Merchant Number", "Flag Status");
$queryupdate="UPDATE tbl_merchant SET fld_status='L', fld_last_update=NOW() WHERE fld_merchant_no in ($fld_merchant_no);";
$result1=mysql_query($queryupdate) or trigger_error(mysql_error().$query);
$query="SELECT `fld_merchant_name`,`fld_merchant_no`,`fld_status` FROM `tbl_merchant` WHERE `fld_merchant_no` in ($fld_merchant_no);";

$rowno=mysql_num_rows($result);
if ($rowno > 0) 
	{
echo "<table><tr><th>Merchant Name</th><th>Merchant Number</th><th>Flag Status</th></tr>";	
while($row = mysql_fetch_array($result))
{

echo "<tr><td>".$row["fld_merchant_name"]."</td><td>".$row["fld_merchant_no"]."</td><td>".$row["fld_status"]."</td><tr>";


}

// } else {

// echo "Invalid Merchant Number";




}




 
mysql_close();

?>

</body>
</html>
