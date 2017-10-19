<?php

if ( $_SERVER['REQUEST_METHO']== 'POST)

{

$servername = "pm01tprmdb01v";
$username = "sgarcia";
$password = "nu98pa34ss4r";
$dbname = "mysql";

mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die( "Unable to select database");

require ('home.php');

list ($check, $data) = validate ($_POST['user'], $_POST['password']);

if ($check)

{

session_start();

$_SESSION['user'] = $data ['user'];

load ('index.php');

}

else { $errors = $data;)

mysql_close();

include ('login.php');

}
