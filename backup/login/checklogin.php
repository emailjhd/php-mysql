<?php
//DO NOT ECHO ANYTHING ON THIS PAGE OTHER THAN RESPONSE
//'true' triggers login success
ob_start();
include 'config.php';
 // require 'includes/functions.php';
// Define $myusername and $mypassword
$username = $_POST['user'];
$password = $_POST['password'];
$response = '';
echo "$username";
echo "$password";
$loginCtl = new LoginForm;
$conf = new GlobalConf;
$lastAttempt = checkAttempts($username);
$max_attempts = $conf->max_attempts;
//First Attempt

echo "1";
if ($lastAttempt['lastlogin'] == '') {
    $lastlogin = 'never';
    $loginCtl->insertAttempt($username);
    $response = $loginCtl->checkLogin($username, $password);
echo "1A";
} elseif ($lastAttempt['attempts'] >= $max_attempts) {
echo "2";
    //Exceeded max attempts
    $loginCtl->updateAttempts($username);
    $response = $loginCtl->checkLogin($username, $password);
} else {
    $response = $loginCtl->checkLogin($username, $password);
echo "3";
};
if ($lastAttempt['attempts'] < $max_attempts && $response != 'true') {
    $loginCtl->updateAttempts($username);
    $resp = new RespObj($username, $response);
    $jsonResp = json_encode($resp);
    echo $jsonResp;
echo "4";
} else {
    $resp = new RespObj($username, $response);
    $jsonResp = json_encode($resp);
    echo $jsonResp;
echo "5";
}
unset($resp, $jsonResp);
ob_end_flush();
