<!DOCTYPE html>
<html lang="en">
<head>
  <title>Change Password</title>
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

<?php
if(empty($_POST) === false) {
	$required_fields = array('current_password', 'new_password', 're-enter_new_password');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Fields marked with * are required!';
			break 1;
		}
	}
	if($_POST['current_password'] === $user_data['password']) {
		if(trim($_POST['new_password']) !== trim($_POST['re-enter_new_password'])) {
			$errors[] = 'New passwords don\'t match!';
		}else if(strlen($_POST['new_password']) < 8) {
			$errors[] = 'Password must be at least 8 characters!';
		}
	} else {
		$errors[] = 'Your current password is incorrect!';
	}
	
	//print_r($errors);
}

?>

<!-- Edit Form -->

<div class="container">

<form class="well form-horizontal" action=" " method="post"  id="signup_form">
<fieldset>

<center style="color: red;"> <?php
if(isset($_GET['success']) === true && empty($_GET['success']) === true) {
	echo '<span style="color: green;">Your password has been updated!</span><br>';
	echo '<span style="color: black;">Click on the banner to return to the Homepage.</span>';
} else {
	if(empty($_POST) === false && empty($errors) === true) {
		//no errors!
		change_password($session_user_id,$_POST['new_password']);
		header('Location: change_password.php?success');
	} else if (empty($errors) === false) {
		//errors!
		echo output_errors($errors);
	}
	?></center>

		<p style="text-align: center;"><i>Required fields are tagged with * </i></p>
		<!-- Form Name -->
		<legend style="text-align: center;" >Change your Password</legend>



			<!-- First Name-->
			<div class="form-group">
			  <label class="col-md-4 control-label">Current password *</label>  
			  <div class="col-md-4 inputGroupContainer">
			  <div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input  name="current_password" class="form-control"  type="password">
			   </div>
			  </div>
			</div>

			<!-- Surname-->
			<div class="form-group">
			  <label class="col-md-4 control-label" >New password *</label> 
				<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			  <input name="new_password" class="form-control"  type="password">
				</div>
				</div>
			</div>

			<!-- Username-->
			<div class="form-group">
			  <label class="col-md-4 control-label">Re-enter new password *</label>  
			  <div class="col-md-4 inputGroupContainer">
			  <div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input  name="re-enter_new_password" class="form-control"  type="password">
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
				<button type="submit" class="btn btn-warning" style="width: 130px; height: 40px; background-color: green; border: none;">Apply Changes <span class="glyphicon glyphicon-ok"></span></button></center>
			  </div>
			</div>

			</fieldset>
			</form>
<?php } ?>
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
