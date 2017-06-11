<!DOCTYPE html>
<html lang="en">
<head>
  <title>Verification Process</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
  
  <!-- To bgazw pros to paron giati xalaei th morfopoihsh ths panw mparas -->
  <!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->
  

  
</head>
<body style="background-color: #FEE5AC;">

<?php include 'core/init.php'; ?> 

<?php
if (empty($_POST) === false) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if (empty($username) || empty($password)){
		$errors[] = 'You need to enter a username/password!';
	} else if (participant_exists($username) === false){
		$errors[] = 'No users found with that username!';
	} else if (verify_speaker($username) === false) {
		$errors[] = 'You don\'t have permission to submit a paper!';
	} else {
		
		if (strlen($password) > 32){
			$errors[] = 'Password is too long!';
		}
		
		$login = login_participant($username, $password);
		if ($login === false) {
			$errors[] = 'Incorrect password!';
		} else {
			//echo 'ok!';
			$_SESSION['participant_id'] = $login;	//User is authorized to submit a paper
			header('Location: paper_submission.php');	//Continue to next page
			exit();
		}
	}
} else {
	$errors[] = 'No data received';
}

?>

<?php 
	if (logged_in() === true) { ?>
		<nav class="navbar navbar-inverse" style="background-color: #ffffd8; border: none;">
			<div class="container-fluid">

			<ul class="nav navbar-nav navbar-right">
			<li style="margin-right: -10px;"><a target="_blank" title="Find us on Facebook" href="https://www.facebook.com/EuroMed2016-666633476791951/"><img alt="Find us on facebook" src="Images\facebook.png" height="30" width="30" border=0></a></a></li>
			<li style="margin-right: -15px;"><a target="_blank" title="Follow us on Twitter" href="https://twitter.com/EuroMed2016"><img alt="Follow us on Twitter" height="30" width="30" src="Images\twitter.png" border=0></a></li>
			<li style="margin-right: 20px; margin-left: 15px;">
			<div class="dropdown">
				<button type="profile" class="btn btn-warning" style="background-color: #8080ff; border: none; margin-right: -22px; margin-top: 14px;"><?php echo $user_data['first_name']; ?>'s Profile</button>
					<div class="dropdown-content">
						<a href="edit_profile.php">Change Profile Info</a>
					    <a href="change_password.php">Change Password</a>
					</div>
			</div>
			</li>
			<li style="margin-right: 10px; margin-left: 0px;"><a href="logout.php"><button type="profile" class="btn btn-warning" style="background-color: #8080ff; border: none; margin-right: -5px; margin-top: -1px;">Log Out <span class="glyphicon glyphicon-log-out"></span></button></a></li>
			<li style="margin-right: 50px; margin-left: -20px;"><a href="signup.php"><button type="profile" class="btn btn-warning" style="background-color: #8080ff; border: none; margin-right: 28px; margin-top: -1px;">Sign Up <span class="glyphicon glyphicon-registration-mark"></span></button></a></li>
			</ul>
		</div>
		</nav>
	<?php
	}
	else  { ?>
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
	<?php } ?>
	
<!-- ================================================ -->

<!-- The banner -->
<a href="index.php" >
	<center><img src="Images\banner_2016.png" alt="euromed cover" width="1000" height="250" align="middle" style="margin-top:-15px; border:0;" /></center>
</a>

<!-- ========================================= -->
<br>

<p style="text-align: center;"><b>First, we need to verify that you are elligible to submit a paper.</b></p>
<p style="text-align: center;"><b>Please, fill out the form below with the info you used for registering to EuroMed2016.</b></p><br>



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
<!-- ================= -->


<!-- ========================================= -->

<!-- <div class="container">
  <h3>Testing the Homepage</h3>
  <p>Added: social media, register/sign in, banner.</p>
</div> -->

</body>
</html>
