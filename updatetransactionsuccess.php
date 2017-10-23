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
$dbname = "db_ccard";

// Create database connection

mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die( "Unable to select database");


$fld_tran_id = "$_POST[fld_id1]";
$header="Update Transaction Status for Export";
$sql_header=array("Transaction ID", "Status", "Payment");
$queryupdate="UPDATE tbl_ccard_hash SET fld_authorised='SUCCESS', fld_payment='0'  WHERE fld_tran_id in ($fld_tran_id);";
$result1=mysql_query($queryupdate) or trigger_error(mysql_error().$query);
$query="SELECT `fld_tran_id`, `fld_authorised`,`fld_payment` FROM `tbl_ccard_hash` WHERE `fld_tran_id` in ($fld_tran_id);";
$rowno=mysql_num_rows($result);
if ($rowno > 0) 
	{
echo "<table><tr><th><Transaction ID></th><th>Status</th><th>Payment</th></tr>";	
while($row = mysql_fetch_array($result))
{

echo "<tr><td>".$row["fld_tran_id"]."</td><td>".$row["fld_authorised"]."</td><td>".$row["fld_payment"]."</td><tr>";


}


}




 
mysql_close();

?>

</body>
</html>
