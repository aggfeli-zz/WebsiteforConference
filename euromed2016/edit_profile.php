<!DOCTYPE html>
<html lang="en">
<head>
  <title>Change Profile Info</title>
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
<?php protect_page(); 		//If you are not logged in, you won't see this page!->Redirect to restricted access?>	

<?php
if(empty($_POST) === false) {
	$required_fields = array('first_name', 'surname', 'username', 'email');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Fields marked with * are required!';
			break 1;
		}
	}
	if(empty($errors) === true) {
		if (user_exists($_POST['username']) === true && $user_data['username'] !== $_POST['username']) {
			$errors[] = 'Sorry, the username \'' . htmlentities($_POST['username']) . '\' is already being used!';
		}	
		if(preg_match("/\\s/", $_POST['username']) == true) {	//Are there spaces in the username?
			$errors[] = 'Username should not have spaces!';
		}
		if(strlen($_POST['username']) > 20 ) {
			$errors[] = 'Username shouldn\'t be longer than 20 characters!';
		}
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'Email address is not valid!';
		}else if(email_exists($_POST['email']) === true  && $user_data['email'] !== $_POST['email']) { //den mou xtupaei la8os otan bazw idio email me ton mike...
			$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already being used!';
		}
	}
	//print_r($errors);
}
?>

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

<!-- ================================================ -->

<!-- The banner -->
<a href="index.php" >
	<center><img src="Images\banner_2016.png" alt="euromed cover" width="1000" height="250" align="middle" style="margin-top:-15px; border:0;" /></center>
</a>

<!-- ========================================= -->

<!-- Edit Form -->

<div class="container">

<form class="well form-horizontal" action=" " method="post"  id="signup_form">
<fieldset>

	<center style="color: red;"><?php
	if(isset($_GET['success']) === true && empty($_GET['success']) === true) {
		echo '<span style="color: green;">Your profile has been updated!</span><br>';
		echo '<span style="color: black;">Click on the banner to return to the Homepage.</span>';
	} else {
		if (empty($_POST) === false && empty($errors) === true) {
			// Update!
			$update_data = array(
			'username'=> $_POST['username'],
			'first_name'=> $_POST['first_name'],
			'surname'=> $_POST['surname'],
			'email'=> $_POST['email']
			);
			
			update_user($update_data);
			header('Location: edit_profile.php?success');
			exit();
			
		}else if(empty($errors) === false) {
			echo output_errors($errors);
		}
	?></center>
	<p style="text-align: center;"><i>Required fields are tagged with * </i></p>
	<!-- Form Name -->
	<legend style="text-align: center;" >Change your profile information</legend>



		<!-- First Name-->
		<div class="form-group">
		  <label class="col-md-4 control-label">First Name *</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input  name="first_name" value="<?php echo $user_data['first_name'];?>" class="form-control"  type="text">
		   </div>
		  </div>
		</div>

		<!-- Surname-->
		<div class="form-group">
		  <label class="col-md-4 control-label" >Surname *</label> 
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input name="surname" value="<?php echo $user_data['surname'];?>" class="form-control"  type="text">
			</div>
			</div>
		</div>

		<!-- Username-->
		<div class="form-group">
		  <label class="col-md-4 control-label">Username *</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input  name="username" value="<?php echo $user_data['username'];?>" class="form-control"  type="text">
		   </div>
		  </div>
		  (up to 20 characters)
		</div>	

		<!-- E-mail-->
		<div class="form-group">
		  <label class="col-md-4 control-label">e-Mail Address *</label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
			<input name="email" value="<?php echo $user_data['email'];?>" class="form-control"  type="text">
			</div>
			</div>
		</div>

		<!-- Success message -->
		<!-- <div class="alert alert-success" role="alert" id="success_submission">Success <i class="glyphicon glyphicon-thumbs-up"></i>You have successfully signed up to our website!</div> -->

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label"></label>
		  <div class="col-md-4">
			<center><a href="index.php" class="btn btn-warning" style="background-color: red; border: none; margin-right: 10px;">Cancel <span class="glyphicon glyphicon-remove"></span></a>
			<button type="submit" class="btn btn-warning" style="width: 130px; height: 40px; background-color: green; border: none;">Update <span class="glyphicon glyphicon-ok"></span></button></center>
		  </div>
		</div>

		</fieldset>
		</form>
<?php	} ?>
<!-- ========================================= -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

<!-- ========================================= -->



<!-- <div class="container">
  <h3>Testing the Homepage</h3>
  <p>Added: social media, register/sign in, banner.</p>
</div> -->

</body>
</html>
