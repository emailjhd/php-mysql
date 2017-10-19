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



$fld_card_accepted = "$_POST[fld_id1]";
$fld_merchant_no = "$_POST[fld_id2]";



$sql_header=array("Merchant Number", "Card Accepted");
$queryupdate="UPDATE tbl_merchant SET fld_card_accepted =  $fld_card_accepted  WHERE fld_merchant_no in ($fld_merchant_no);";
$result=mysql_query($queryupdate) or trigger_error(mysql_error().$query);
$query="SELECT `fld_merchant_no`, `fld_card_accepted` FROM `tbl_merchant` WHERE `fld_merchant_no` in ($fld_merchant_no);";

$rowno=mysql_num_rows($result);
if ($rowno > 0) 
	{
echo "<table><tr><th>Merchant Number</th><th>Card Accepted</th></tr>";	
while($row = mysql_fetch_array($result))
{

echo "<tr><td>".$row["fld_merchant_no"]."</td><td>".$row["fld_card_accepted"]."</td><tr>";

}




}

mysql_close();

?>

</body>
</html>
