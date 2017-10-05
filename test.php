//new student.php
<html>
  <head>
  </head>
  <body>
     <h2>Your details</h2>
     <form name="frmdetails" action="sql.php" method="post">
        ID Number :
     <input name="txtid" type="text" />
        <br/>
    Password :
     <input name="txtpassword" type="text" />
        <br/>
    Date of Birth :
     <input name="txtdob" type="text" />
        <br/>
    First Name :
    <input name="txtfirstname" type="text" />
        <br/>
        Surname :
        <input name="txtlastname" type="text" />
    <br/>
        Number and Street :
    <input name="txthouse" type="text"   />
        <br/>
        Town :
        <input name="txttown" type="text"  />
    <br/>
        County :
    <input name="txtcounty" type="text"   />
        <br/>
         Country :
    <input name="txtcountry" type="text"   />
        <br/>
        Postcode :
        <input name="txtpostcode" type="text"   />
        <br/>
        <input type="submit" value="Save" name="submit"/>
      </form>
   </body>
   </html>

//sql.php
$conn=mysql_connect("localhost", "20915184", "mysqluser"); 
 mysql_select_db("db5_20915184", $conn);

// If the form has been submitted

$id=$_POST['txtstudentid'];
$password=$_POST['txtpassword'];
$dob=$_POST['txtdob'];
$firstname=$_POST['txtfirstname'];
$lastname=$_POST['txtlastname'];
$house=$_POST['txthouse'];
$town=$_POST['txttown'];
$county=$_POST['txtcounty'];
$country=$_POST['txtcountry'];
$postcode=$_POST['txtpostcode'];



    // Build an sql statment to add the student details
    $sql="INSERT INTO student

(studentid,password,dob,firstname,lastname,house,town,county,country,postcode) VALUES

('$id','$password','$dob','$firstname','$lastname','$house','$town','$county','$country','$postcode')";
    $result = mysql_query($sql,$conn);
        if($result){
echo"<br/>Your details have been updated";
echo "<BR>";
echo "<a href='Home.html'>Back to main page</a>";
}

else {
echo "ERROR";
}

// close connection 
mysql_close($conn);
?>
