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
$fld_bank_code = "$_POST[fld_id1]";
$fld_sort_code = "$_POST[fld_id2]";
$fld_account_no = "$_POST[fld_id3]";
$header="Change Account Details En Mass";
$sql_header=array("Merchant Name", "Bank Code", "Sort Code", "Account Number");
$queryupdate="UPDATE tbl_merchant SET fld_bank_code=$fld_bank_code, fld_sort_code=$fld_sort_code, fld_account_no=$fld_account_no  WHERE fld_merchant_no in ($fld_merchant_no);";
$result1=mysql_query($queryupdate) or trigger_error(mysql_error().$query);
$query="SELECT `fld_merchant_name`,`fld_bank_code`,`fld_sort_code`,`fld_account_no` FROM `tbl_merchant` WHERE `fld_merchant_no` in ($fld_merchant_no);";

$rowno=mysql_num_rows($result);
if ($rowno > 0) 
	{
echo "<table><tr><th>Merchant Name</th><th>:w
Bank Code</th><th>Sort Code</th><th>Account Number</th></tr>";	
while($row = mysql_fetch_array($result))
{

echo "<tr><td>".$row["fld_merchant_name"]."</td><td>".$row["fld_bank_code"]."</td><td>".$row["fld_sort_code"]."</td><td>".$row["fld_account_no"]."</td><tr>";


}


}




 
mysql_close();

?>

</body>
</html>
