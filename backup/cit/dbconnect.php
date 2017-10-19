<?php

$servername = "pm01tprmdb01v";
$username = "sgarcia";
$password = "nu98pa34ss4r";
$dbname = "db_ccardcfg";

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);
if (!$conn) {
// Check connection
    die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully';

// $query = "SELECT  `fld_merchant_no`,`fld_amex_merchant`,`fld_bank_code`,`fld_account_no`,`fld_sort_code`, `fld_company_id`, `fld_tid`, `fld_merchant_type`,`fld_auto_tid`,`fld_status`, `fld_multiple_cur`, `fld_monitored`,`fld_groupid`  FROM `tbl_merchant WHERE 'fld_merchant_no' = '9447863788' limit 1";

$query = "select fld_groupid from tbl_merchant where fld_ID = 65017";

$row = mysql_fetch_assoc($result);

$result = $mysql_query($query);

// Check result

if (mysql_num_rows($result) >  0) {

while ($row = mysql_fetch_assoc($result)) {
    echo " <br> Group: ".  $row['fld_groupid'].  "<br>";
//    echo $row['ld_amex_merchant'];
//    echo $row['fld_diners_merchant'];
//    echo $row['fld_bank_code'];
//    echo $row['fld_account_no'];
//    echo $row['ld_sort_code'];
//    echo $row['fld_company_id'];
//    echo $row['fld_tid'];
//    echo $row['fld_merchant_type'];
//    echo $row['fld_auto_tid'];
//    echo $row['fld_multiple_cur'];
//    echo $row['fld_monitored'];
//    echo $row['fld_groupid'];

}

} else {

echo "0 results";

}

// Free the resources associated with the result set
// This is done automatically at the end of the script

mysql_close($conn);

?>
