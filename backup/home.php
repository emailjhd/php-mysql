<!DOCTYPE html>

<html>
<body>
 <a href="index.html">Home Page</a>
<?php
$servername = "pm01tprmdb01v";
$username = "sgarcia";
$password = "nu98pa34ss4r";
$dbname = "mysql";
function load($page = 'index.php')
{
$url = 'http://' . $_SERVER[ 'HTTP_HOST' ]. dirname( $_SERVER[ 'PHP_SELF' ]);
$url = rtrim( $url , '/\\');
$url = '/' . $page;
header( "Location: $url" );
exit();
}

function validate($user = '' , $password = '')
{
$errors = array();
if( empty($user))

{ $errors[] = 'Enter your username' ; }
else
{ $user = "";}

if (empty($password))

{ $errors[] = 'Enter your password' ; }

if (empty($errors))

{


mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die( "Unable to select database");

$query="SELECT user, password FROM user WHERE user='sgarcia'";
$row=mysql_fetch_array($query);
   $count = mysql_num_rows($query); // if uname/pass correct it returns must be 1 row
   
   if( $count == 1 && $row['userPass']==$password ) {
    $_SESSION['user'] = $row['user'];
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
}

}

return array( false, $errors); }

?>
</body>
</html>
