<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration Form </title>
	
	
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
<body style="background-color: #FEE5AC;">

<?php include 'core/init.php'; ?> 

<?php 
	if (logged_in() === true) { 	//If the user is logged in, show a different nav bar ?>	
		<nav class="navbar navbar-inverse" style="background-color: #ffffd8; border: none;">
			<div class="container-fluid">

			<ul class="nav navbar-nav navbar-right">
			<li style="margin-right: -10px;"><a target="_blank" title="Find us on Facebook" href="https://www.facebook.com/EuroMed2016-666633476791951/"><img alt="Find us on facebook" src="Images\facebook.png" height="30" width="30" border=0></a></a></li>
			<li style="margin-right: -15px;"><a target="_blank" title="Follow us on Twitter" href="https://twitter.com/EuroMed2016"><img alt="Follow us on Twitter" height="30" width="30" src="Images\twitter.png" border=0></a></li>
		<!--	<li style="margin-right: 10px; margin-left: 0px;"><a href="edit_profile.php"><button type="profile" class="btn btn-warning" style="background-color: #4CAF50; border: none; margin-right: -22px; margin-top: -1px;">Edit Profile <span class="glyphicon glyphicon-pencil"></span></button></a></li> -->
			
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


<?php
if (empty($_POST) === false) {
	$required_fields = array('first_name', 'surname', 'username', 'password' , 're-enter_password' , 'email', 'country', 'role');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Fields marked with * are required!';
			break 1;
		}
	}
	 if (empty($errors === true)) {
		if (participant_exists($_POST['username']) === true) {
			$errors[] = 'Sorry, the username \'' . htmlentities($_POST['username']) . '\' is already being used!';
		}	
		if(preg_match("/\\s/", $_POST['username']) == true) {	//Are there spaces in the username?
			$errors[] = 'Username should not have spaces!';
		}
		if(strlen($_POST['username']) > 20 ) {
			$errors[] = 'Username shouldn\'t be longer than 20 characters!';
		}
		if(strlen($_POST['password']) < 8) {
			$errors[] = 'Password must be at least 8 characters!';
		}
		if($_POST['password'] !== $_POST['re-enter_password']) {
			$errors[] = 'Passwords don\'t match!';
		}
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'Email address is not valid!';
		}
		if(participant_email_exists($_POST['email']) === true) {
			$errors[] = 'Sorry, the email \'' . htmlentities($_POST['email']) . '\' is already being used!';
		}
		if(strlen($_POST['phone']) > 20) {
			$errors[] = 'Phone number shouldn\'t be larger than 20 characters!';
		}
		if(strlen($_POST['zip_code']) > 10) {
			$errors[] = 'ZIP-code shouldn\'t be larger than 10 characters!';
		}
		
	}
			/*if(isset($_POST['role'])) {
						echo "You have selected :".$_POST['role'];  //  Displaying the role of the user
					}		*/

}

//print_r($errors);
?>

<!-- The Contact Form --> 
<div class="container">

<form class="well form-horizontal" action=" " method="post"  id="registration_form">
<fieldset>

<center style="color: red;"><?php


//if(isset($_GET['success']) && empty($_GET['success'])) {}

	
if (empty($_POST) === false && empty($errors) === true) {
	//Proceed with the payment forms for each participant
	$participation_data = array(
		'first_name' => $_POST['first_name'],
		'surname' => $_POST['surname'],
		'username' => $_POST['username'],
		'password' => $_POST['password'],
		'email' => $_POST['email'],
		'phone' => $_POST['phone'],
		'country' => $_POST['country'],
		'city' => $_POST['city'],
		'address' => $_POST['address'],
		'zip_code' => $_POST['zip_code'],
		'role' => $_POST['role']
	);
	
	participant_registration($participation_data);
	//redirect
	/*$role = $_POST['role'];
	
	if($role == 'Participant' || $role == 'Paper Submission/Speaker') {
		header('Location: participantspeaker_form.php');
		exit();
	}
	else {
		header('Location: exhibitor_form.php');
		exit();
	} */
	
	switch($_POST['role'])
    {
        case "Exhibitor":  header("Location: exhibitor_form.php");  break;
        default:       header("Location: participantspeaker_form.php");  break;
    }
	

} else if(empty($errors) === false){
	//errors
	echo output_errors($errors);
}


?></center>



<p style="text-align: center;"><b>Complete the form if you want to participate in our conference!</b></p>
<p style="text-align: center;"><b>In case of cancellation, contact us for your refund.</b></p><br>

<p style="text-align: center;"><i>Required fields are tagged with * </i></p>

<!-- Form Name -->
<legend style="text-align: center;" >Registration Form</legend>




<!-- First Name-->
<div class="form-group">
  <label class="col-md-4 control-label">First Name *</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	<input  name="first_name" placeholder="First Name" class="form-control"  type="text">
   </div>
  </div>
</div>

<!-- Surname-->
<div class="form-group">
  <label class="col-md-4 control-label" >Surname *</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="surname" placeholder="Surname" class="form-control"  type="text">
    </div>
	</div>
</div>

<!-- Username-->
<div class="form-group">
  <label class="col-md-4 control-label">Username * </label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	<input  name="username" placeholder="Username" class="form-control"  type="text">
   </div>
  </div>
  (up to 20 characters)
</div>

<!-- Password -->
<div class="form-group">
  <label class="col-md-4 control-label">Password * </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	<input name="password" placeholder="Password" class="form-control"  type="password">
    </div>
	</div>
	(8-32 characters)
</div>

<!-- Re-enter Password-->
<div class="form-group">
  <label class="col-md-4 control-label">Re-enter Password *</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	<input name="re-enter_password" placeholder="Re-enter Password" class="form-control"  type="password">
    </div>
	</div>
</div>

<!-- E-mail-->
<div class="form-group">
  <label class="col-md-4 control-label">e-Mail Address *</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
	<input name="email" placeholder="e-Mail Address" class="form-control"  type="text">
    </div>
	</div>
</div>

<!-- E-mail-->
<div class="form-group">
  <label class="col-md-4 control-label">Phone Number</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
	<input name="phone" placeholder="5855540408" class="form-control"  type="text">
    </div>
	</div>
</div>

<!-- Select Country from a list -->

<div class="form-group">
  <label class="col-md-4 control-label">Country *</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
	<input name="country" placeholder="Greece" class="form-control"  type="text">
    </div>
	</div>
</div>

<!-- <div class="form-group"> 
  <label class="col-md-4 control-label">Country *</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Please select your Country</option>
	  <option>Australia</option>
	  <option>Canada</option>
	  <option>China</option>
      <option>Cyprus</option>
	  <option>France</option>
      <option>Germany</option>
      <option>Greece</option>
	  <option>Italy</option>
      <option>Russia</option>
      <option>United Kingdom</option>
      <option>United States of America</option>
   Just a small sample of countries :)  

    </select>
  </div>
</div>
</div> --> 

<!-- City-->
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
	<input name="city" placeholder="City" class="form-control"  type="text">
    </div>
	</div>
</div>

<!-- Address-->
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
	<input name="address" placeholder="Address" class="form-control"  type="text">
    </div>
	</div>
</div>

<!-- ZIP code-->
<div class="form-group">
  <label class="col-md-4 control-label">ZIP Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
	<input name="zip_code" placeholder="ZIP Code" class="form-control"  type="text">
    </div>
	</div>
</div>



<div class="form-group"> 
  <label class="col-md-4 control-label" style="margin-top: 16px;">Role in EuroMed2016 *</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group" style="margin-left:40px;">
		<input value="Participant" type="radio" name="role" checked> Participant<br>
		<input value="Paper Submission/Speaker" type="radio" name="role" > Paper Submission/Speaker<br>
		<input value="Exhibitor" type="radio" name="role" > Exhibitor <br>
		</div>
</div>
</div>


<!-- Button -->
	<div class="form-group">
	  <label class="col-md-4 control-label"></label>
	  <div class="col-md-4">
		<center><a href="index.php" class="btn btn-warning" style="background-color: red; border: none; margin-right: 10px;">Cancel <span class="glyphicon glyphicon-remove"></span></a>
		<button type="submit" class="btn btn-warning" style="width: 130px; height: 40px; background-color: green; border: none;">Sign Up <span class="glyphicon glyphicon-ok"></span></button></center>
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