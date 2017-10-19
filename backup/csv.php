<?php
session_start();

$rows=$_SESSION['mysql_data'];
 //create csv header row, to contain table headers
 //with database field names

    header("Content-Type: text/csv");
    header("Content-disposition: attachment; filename=csv" . date("Y-m-d") . ".csv");
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
//    header( "Content-disposition: filename=".$file_name.".csv");
    header("Pragma: no-cache"); // HTTP 1.0
    header("Expires: 0"); // Proxies

    $output = fopen("php://output", "w"); //Opens and clears the contents of file; or creates a new file if it doesn't exist

    foreach($rows as $row)
      {
        fputcsv($output, $row); // here you can change delimiter/enclosure
      }
	fclose($output); // Closing the File

?>

