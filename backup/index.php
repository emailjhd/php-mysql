<?php
session_start();
$servername = "pm01tprmdb01v";
// if ($_SESSION['auth1frg34'] > 0) {
 if (isset($_POST['user'])) {
$username=$_POST['user'];
$password=$_POST['password'];
$dbname="db_ccardcfg";
mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die( "Please enter the correct credentials...");
$_SESSION['username']=$username;
$_SESSION['password']=$password;
$_SESSION['auth1frg34']=rand()*100;
include 'index.html';
} else {
  echo " 
<form action='index.php' method='post' autocomplete='no'>
<h2>CI Tech Query Pages.</h2>
Username <input type='Username' name='user' placeholder='Your Username'  maxlength='40' >
Password <input type='password' name='password' placeholder='Your Password' maxlength='15' >
<button class = 'btn btn-lg btn-primary btn-block' type ='submit' name ='Login'>Sign In</button>
</form>";
}
// }
?>
