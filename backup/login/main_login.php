<?php

if ($_SESSION['auth1frg34'] > 0) {
if (isset($_post['user'])) {
$username=$_post['user'];
$password=$_post['password'];
mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die( "Unable to select database");
$_SESSION['user']=$username;
$_SESSION['password']=$password;
$_SESSION['auth1frg34']=random()*100;
include menu.php
} else {
<form action="login.php method="post" autocomplete="no">
Username <input name="user" type="text">
Password <input name="password" type="password">
<input type="submit">
</form>
	    }
	  }


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div class="container">

 <div id="login-form">
<!--     <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off"> -->
    
     <div class="col-md-12">
        
         <div class="form-group">
		<form class="form-signin" name="form1" method="post" action="checklogin.php">
             <h2 class="">CI Tech Query Pages.</h2>
            </div>
        
         <div class="form-group">
             <hr />
            </div>
            
            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-danger">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
             <input type="user" name="user" class="form-control" placeholder="Your Username"  maxlength="40" />
                </div>
                <span class="text-danger"><?php echo $user; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="password" class="form-control" placeholder="Your Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
        
        </div>
   
    </form>
    </div> 

</div>

</body>
</html>
<?php ob_end_flush(); ?>
