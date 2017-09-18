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




$fld_merchant_no = "$_POST[fld_id1]";
$fld_groupidold = "$_POST[fld_id2]";
$fld_groupidnew = "$_POST[fld_id3]";

$sql_header=array("Group ID", "Merchant Number");
$queryupdate="UPDATE tbl_merchant SET fld_groupid = $fld_groupidnew WHERE fld_merchant_no = $fld_merchant_no and fld_groupid = $fld_groupidold;";
echo $queryupdate;
$result1=mysql_query($queryupdate) or trigger_error(mysql_error().$query);
$query="SELECT `fld_groupid`, `fld_merchant_no` FROM `tbl_merchant` WHERE `fld_groupid` = $fld_groupidnew and fld_merchant_no = $fld_merchant_no;";

$rowno=mysql_num_rows($result);
if ($rowno > 0) 
	{
echo "<table><tr><th>Group ID</th><th>Merchant Number</th></tr>";	
while($row = mysql_fetch_array($result))
{

echo "<tr><td>".$row["fld_merchant_no"]."</td><td>".$row["fld_groupid"]."</td><tr>";

}

}


mysql_close();

?>

</body>
</html>
