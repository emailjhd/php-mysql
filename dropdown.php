<!docttype html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="css/viewstyle.css">
  <title>Database Query Result</title>
</head>
<body>


 
<?php

$servername = "pm01tprmdb01v";
$username = "sgarcia";
$password = "nu98pa34ss4r";
$dbname = "db_psp";

// Create database connection

mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die( "Unable to select database");


$fld_id = "$_POST[fld_id]";
$fld_trader = "$_POST[fld_trader]";

$query="select fld_id, fld_trader from tbl_trader where fld_trader in ($fld_trader) order by fld_trader;";
$result=mysql_query($query);
while($row = mysql_fetch_array($result)) 

{

$fld_id=$row["fld_id"];
$fld_trader=$row["fld_trader"];

	echo "<option value=$fld_id>$fld_trader</option>";
}

?>

 </select>
<br><br>
<input type="submit">
</form>


</body>
</html>
