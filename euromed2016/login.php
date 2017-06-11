<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Log In</title>
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
	<!-- <link rel="stylesheet" href="css/main.css"> -->
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body style="background-color: #FEE5AC;" >  

<?php 
include 'core/init.php'; 


if (empty($_POST) === false) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if (empty($username) || empty($password)){
		$errors[] = 'You need to enter a username/password!';
	} else if (user_exists($username) === false){
		$errors[] = 'No users found with that username!';
	} else {
		
		if (strlen($password) > 32){
			$errors[] = 'Password is too long!';
		}
		
		$login = login($username, $password);
		if ($login === false) {
			$errors[] = 'Incorrect password!';
		} else {
			//echo 'ok!';
			$_SESSION['user_id'] = $login;	//Logged in successfully
			header('Location: index.php');	//Return to index.php
			exit();
		}
	}
} else {
	$errors[] = 'No data received';
}

?>


<!-- The top right bar for Social Media & Log In/Sign Up -->
<nav class="navbar navbar-inverse" style="background-color: #ffffd8; border: none;">
  <div class="container-fluid">

    <ul class="nav navbar-nav navbar-right">
	  <li style="margin-right: -10px;"><a target="_blank" title="Find us on Facebook" href="https://www.facebook.com/EuroMed2016-666633476791951/"><img alt="Find us on facebook" src="Images\facebook.png" height="30" width="30" border=0></a></a></li>
	  <li style="margin-right: -15px;"><a target="_blank" title="Follow us on Twitter" href="https://twitter.com/EuroMed2016"><img alt="Follow us on Twitter" height="30" width="30" src="Images\twitter.png" border=0></a></li>
	  <li style="margin-right: 10px; margin-left: 0px;"><a href="login.php"><button type="profile" class="btn btn-warning" style="background-color: #8080ff; border: none; margin-right: -5px; margin-top: -1px;">Log In <span class="glyphicon glyphicon-log-in"></span></button></a></li>
	  <li style="margin-right: 50px; margin-left: -20px;"><a href="signup.php"><button type="profile" class="btn btn-warning" style="background-color: #8080ff; border: none; margin-right: 28px; margin-top: -1px;">Sign Up <span class="glyphicon glyphicon-registration-mark"></span></button></a></li>

    </ul>
  </div>
</nav>
<!-- ================================================ -->

<!-- The banner -->
<a href="index.php" >
	<center><img src="Images\banner_2016.png" alt="euromed cover" width="1000" height="250" align="middle" style="margin-top:-15px; border:0;" /></center>
</a>



<!-- The Login Form --> 
<div class="container">

<form class="well form-horizontal" action=" " method="post"  id="log_in">
<fieldset>

<!-- Form Name -->
<legend style="text-align: center;" >Log In</legend>

<center style="color: red;"><?php 
echo output_errors($errors);
?></center>

<!-- Username-->
<div class="form-group">
  <label class="col-md-4 control-label">Username </label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	<input  name="username" placeholder="Username" class="form-control"  type="text">
   </div>
  </div>
</div>

<!-- Password -->
<div class="form-group">
  <label class="col-md-4 control-label">Password </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	<input name="password" placeholder="Password" class="form-control"  type="password">
    </div>
	</div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <center><a href="index.php" type="submit" class="btn btn-warning" style="background-color: red; border: none; margin-right: 10px;">Cancel <span class="glyphicon glyphicon-remove"></span></a>
	<button type="submit" class="btn btn-warning" style="width: 130px; height: 40px; background-color: green; border: none;">Log In <span class="glyphicon glyphicon-ok"></span></button></center>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
	
	
	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>