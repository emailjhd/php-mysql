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
   <center><h1> E-mail Search  Results </h1></center>
    <p> 
     <font size="5" face="aerial" color="blue">	
     <b>Results View from 'tbl_email' table:  
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

$query= "SELECT `fld_ID`,`fld_email`,`fld_email_type`  FROM `tbl_email` WHERE `fld_ID` in ($fld_id_no);";

$result=mysql_query($query);
$rowno=mysql_num_rows($result);
if ($rowno > 0) {

echo "<table><tr><th>ID</th><th>Email</th><th>Email Type</th></tr>";

    while($row = mysql_fetch_array($result))
{
    echo "<tr><td>".$row['fld_ID']."</td><td>".$row["fld_email"]."</td><td>".$row["fld_email_type"]."</td><tr>";

}

} else {

echo "0 results";


}
mysql_close();

?>

</body>
</html>
