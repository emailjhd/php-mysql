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



$fld_merchant_no = "$_POST[fld_id2]";
$fld_groupid = "$_POST[fld_id2]";
$fld_service_type = "$_POST[fld_id1]";


$sql_header=array("Service Type", "Group ID");
$queryupdate="UPDATE tbl_merchant SET fld_service_type =  $fld_service_type  WHERE fld_groupid in ($fld_groupid);";
$result=mysql_query($queryupdate) or trigger_error(mysql_error().$queryupdate);
$query="SELECT `fld_service_type`, `fld_groupid` FROM `tbl_merchant` WHERE `fld_groupid` in ($fld_groupid);";


$rowno=mysql_num_rows($result);
if ($rowno > 0) 
	{
echo "<table><tr><th>Service Type</th><th>Group ID</th></tr>";	
while($row = mysql_fetch_array($result))
{

echo "<tr><td>".$row["fld_service_type"]."</td><td>".$row["fld_groupid"]."</td><tr>";

}

}

mysql_close();

?>

</body>
</html>
