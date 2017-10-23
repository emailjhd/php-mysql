<<<<<<< HEAD
<?php
session_start();
$servername = "pm01tprmdb01v";
 if (isset($_POST['user'])) {
$username=$_POST['user'];
$password=$_POST['password'];
$dbname="db_ccardcfg";
mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die( "Please enter the correct credentials...");
$_SESSION['username']=$username;
$_SESSION['password']=$password;
$_SESSION['auth1frg34']=rand()*100;
include 'menu.php';
} else {
  echo " 
<form action='index.php' method='post' autocomplete='no'>
<h2>CI Tech Query Pages.</h2>
Username <input type='Username' name='user' placeholder='Your Username'  maxlength='40' >
Password <input type='password' name='password' placeholder='Your Password' maxlength='15' >
<button class = 'btn btn-lg btn-primary btn-block' type ='submit' name ='Login'>Sign In</button>
</form>";
}
?>
=======
<!DOCTYPE html>
<html>
<body>
<h3>Fetch 'Merchant Number'  'Amex Merchant' and  'Diners Merchant' from 'Merchant Table'</h3>

<form action="process.php" method="post">
<b>Merchant Number</b>:<textarea name="fld_merchant_no" rows="5" cols="40"></textarea><br><br>
<input type="Submit" />
</form>
</body>
</html>
>>>>>>> 69018d645f844338d43ae19317f14407df0977b8
