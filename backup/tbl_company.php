<!doctype html>

<html lang="en">

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
<center><h1> Scheduled Company Data </h1></center>
    <p> 
     <font size="5" face="aerial" color="blue">	
     <b>Results View from 'tbl_company' table:  
</font>
</p>


<?php

$servername = "pm01tprmdb01v";
$username = "sgarcia";
$password = "nu98pa34ss4r";
$dbname = "db_psp";
$fld_id_no = "$_POST[fld_id]";

mysql_connect("$servername",$username,$password);
mysql_select_db($dbname) or die( "Unable to select database");

$query= "SELECT  `fld_id`,`fld_company_name`,`fld_export`,`fld_email_type`,`fld_status`,`fld_batch_priority` FROM `tbl_company` WHERE `fld_id` in ($fld_id_no);";

$result=mysql_query($query) or trigger_error(mysql_error().$query);
$rowno=mysql_num_rows($result);
if ($rowno > 0) {

echo "<table><tr><th>ID</th><th>Company Name</th><th>Export</th><th>Email Type</th><th>Status</th><th>Batch Priority</th></tr>";

    while($row = mysql_fetch_array($result))
{
    echo "<tr><td>".$row['fld_id']."</td><td>".$row["fld_company_name"]."</td><td>".$row["fld_export"]."</td><td>".$row["fld_email_type"]."</td><td>".$row["fld_status"]."</td><td>".$row["fld_batch_priority"]."</td><tr>";

}

} else {

echo "0 results";


}
mysql_close();

?>

</body>
</html>
