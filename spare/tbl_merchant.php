<!doctype html>
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
<center><h1> Database Query Results from db_ccardconfig </h1></center>
   <p>
     <font size="5" face="aerial" color="blue">
     <b>Results View from 'tbl_merchant' table:
    </font>
   </p>

<?php

$servername = "pm01tprmdb01v";
$username = "sgarcia";
$password = "nu98pa34ss4r";
$dbname = "db_ccardcfg";

// Create database connection

mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die( "Unable to select database");

$query= "SELECT	`fld_merchant_no`,`fld_amex_merchant`,`fld_diners_merchant`,`fld_bank_code`,`fld_account_no`,`fld_sort_code`,`fld_company_id`,`fld_tid`,`fld_merchant_type`,`fld_auto_tid`,`fld_status` , `fld_multiple_cur` ,`fld_monitored`,`fld_groupid` 
FROM `tbl_merchant` WHERE `fld_merchant_no` in ('26906653','7560080009','9602523698','9422627414','9441794310','540436505632521') OR `fld_amex_merchant` in ('9444830954','7560080009','9602523698','9422627414','9441794310','540436505632521') OR 
`fld_diners_merchant` in ('7560080009','9602523698','9422627414','9441794310','540436505632521');";

$result=mysql_query($query);
$rowno=mysql_num_rows($result);
if ($rowno > 0) {
echo "<table><tr><th>Merchant Number</th><th>Amex Merchant</th><th>Diners Merchant</th><th>Bank Code</th><th>Account Number</th><th>Sort Code</th><th>Company ID</th><th>TID</th><th>Merchant Type</th><th>Auto TID</th><th>Status</th><th>Multiple Cur</th><th>Monitored</th><th>Group ID</th></tr>";

while($row = mysql_fetch_array($result))
{

	echo "<tr><td>".$row["fld_merchant_no"]."</td><td>".$row["fld_amex_merchant"]."</td><td>".$row["fld_diners_merchant"]."</td><td>".$row["fld_bank_code"]."</td><td>".$row["fld_account_no"]."</td><td>".$row["fld_sort_code"]."</td><td>".$row["fld_company_id"]."</td><td>".$row["fld_tid"]."</td><td>".$row["fld_merchant_type"]."</td><td>".$row["fld_auto_tid"]."</td><td>".$row["fld_status"]."</td><td>".$row["fld_multiple_cur"]."</td><td>".$row["fld_monitored"]."</td><td>".$row["fld_groupid"]."</td></tr>";


}
//echo "</table>";
} else {

echo " 0 results";

}
mysql_close();

?>

</body>
</html>
