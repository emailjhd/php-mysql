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
switch ($mode) {
  case 0:
    $dbname = "db_ccardcfg";
    $fld_groupd = "$_POST[fld_groupid]";
    $query="SELECT `fld_groupid`, `fld_merchant_no`,`fld_amex_merchant`,`fld_diners_merchant`,`fld_merchant_name` FROM `tbl_merchant` WHERE fld_groupid in ($fld_groupd);";
    $header="Ad-Hoc Merchant Export";
    $sql_header=array("Group ID","Merchant No","Amex MID","Diners MID","Merchant Name");
    $explain="Ad-Hoc Merchants";
    break;
 }
echo"<center><h1>$header</h1></center> <p> <font size='5' face='aerial' color='blue'> <b>$explain</font> </p>";

// Create database connection

mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die( "Unable to select database");
echo $query;

$result=mysql_query($query) or trigger_error(mysql_error().$query);
$rowno=mysql_num_rows($result);
if ($rowno > 0) 
	{
echo "<table border=2><tr>";
echo "</tr>";

	
while($row = mysql_fetch_array($result))
{

echo "<tr>";
     foreach ($row as &$value) {
     echo "<td>$value</td>";
     }
     echo "</tr>";


}

 } else {

echo " 0 results";


}




 
mysql_close();

?>

</body>
</html>
