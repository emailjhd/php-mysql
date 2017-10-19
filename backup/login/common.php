<?php
if isset($_SESSION['auth1frg34']) {
if $_SESSION['auth1frg34'] > 0 {
$username=$_SESSION['user'];
$password=$_SESSION['password'];
} else {
exit("Authorisation rejected")
} else {
include 'login.php';
}
?>
