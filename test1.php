<html>
<body>
echo "<h3>Enter a mysql query into the text box.</h3>"; 
echo "<form method='post' action='$SERVER[PHP_SELF]' />"; 
echo "Type Here: <input type='text' name='userQuery' value='' size='80'><br />"; 
echo "<input type='submit' value='Submit' />"; 
echo "</form>"; 
echo "<br />"; 
<?php
$queryString = $_POST['userQuery']; 

if (empty($queryString)) { 
echo "Enter a query"; 
echo "<br />"; 
} else if (!empty($queryString)) { 
include "../lo2_db_connection.inc"; 
$query = $queryString; 
if (mysql_query($query)) { 
echo "Success"; 
} 
else { 
echo "Error: ".mysql_error(); 
} 
} 
?>
</body>
</html>
