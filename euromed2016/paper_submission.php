<!DOCTYPE html>
<html lang="en">
<head>
  <title>Paper Submission</title>
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


<!-- The Navigation Bar -->
  <div id="wrapper">
		<div id="navMenu">
			<div class="dropdown">
				<a href="index.php" style="color:white;"><button class="dropbtn">Homepage</button></a>
			</div>

			<div class="dropdown">
				<button class="dropbtn">Participants</button>
					<div class="dropdown-content">
						<a href="#">Welcome</a>
					    	<a href="infoparticipants.php">Info for Participants</a>
					    	<a href="#">Call for Participation</a>
					</div>


			</div>

			<div class="dropdown">
				<button class="dropbtn">Speakers</button>
					<div class="dropdown-content">
						<a href="infospeakers.php">Info for Speakers</a>
					    	<a href="infopapers.php">Info for Papers</a>
					    	<a href="verification_process.php">Paper Submission</a>
					</div>


			</div>

			<div class="dropdown">
				<button class="dropbtn">Exhibitors</button>
					<div class="dropdown-content">
						<a href="infoexhibitors.php">Info for Exhibitors</a>
					    	<a href="registration_form.php">Exhibitor Registration</a>
					    	<a href="#">Our Exhibitors</a>
					</div>


			</div>

			<div class="dropdown">
				<button class="dropbtn">Registration</button>
					<div class="dropdown-content">
						<a href="registration_form.php">Registration Form</a>
					    	<a href="infopay.php">Payment Info</a>
					</div>


			</div>

			<div class="dropdown">
				<button class="dropbtn">Conference</button>
					<div class="dropdown-content">
						<a href="#">Commitee</a>
					    	<a href="#">Panel Discussion</a>
						<a href="#">Keynote Speakers</a>
						<a href="#">Event Photos/Media</a>
						<a href="#">e-Posters</a>
						<a href="#">Past Events</a>
						<a href="#">Sponsors & Supporters</a>
					</div>


			</div>

			<div class="dropdown">
				<button class="dropbtn">Venue</button>
					<div class="dropdown-content">
						<a href="#">Conference Venue</a>
					    	<a href="#">Travelling to Cyprus</a>
						<a href="#">About Cyprus</a>
						<a href="#">Practical Info</a>
						<a href="#">Conference Excursions</a>
						<a href="#">Useful Links</a>
						<a href="#">Emergency Numbers</a>
					</div>


			</div>

			<div class="dropdown">
				<button class="dropbtn">Programme</button>
					<div class="dropdown-content">
						<a href="#">Programme Timetable</a>
					    	<a href="#">e-Agenda</a>
					</div>


			</div>

			<div class="dropdown">
				<button class="dropbtn">Contact Us</button>
			</div>

			<br class="clearFloat" />
		</div>
	</div><br>
<!-- ========================================= -->
<center style="color: red; margin-top: 30px;"><?php
if(isset($_FILES['file'])) {
	$file = $_FILES['file'];
	
	//File properties
	$file_name = $file['name'];
	$file_tmp = $file['tmp_name'];
	$file_size = $file['size'];
	$file_error = $file['error'];
	
	//File extension .pdf
	$file_ext = explode('.', $file_name);
	$file_ext = strtolower(end($file_ext));
	$allowed = array('pdf');
	if(in_array($file_ext, $allowed)) {
		if($file_error === 0) {
			if ($file_size <= 20971520) {	//20 MB = 20971520 bytes
				$file_name_new = $file_name . '.' . $file_ext;
				$file_destination = 'uploads/' . $file_name_new;
			
				if(move_uploaded_file($file_tmp, $file_destination)) {
					echo '<span style="color: green;">Your paper with name: '; echo  $file_name_new; echo '<span style="color: green;"> has been submitted! Thank you for your contribution!</span><br>' ;
					echo '<span style="color: black;">Click on the banner to return to the Homepage.</span>';
					header('Location: paper_submission.php?success');
					exit();					
				}				
			} else echo 'The maximum size of files is 20 MB!';
		} else echo 'Error in uploading your file. Please, try again!';
	} else echo 'You can only upload files with the .pdf extension!';
}
?></center>

<p style="text-align: center;"><b>Here, you can submit your paper. We <u>only</u> accept .pdf files.</b></p>
<p style="text-align: center;"><b>Maximum file size is 20 MB.</b></p><br>



<center><form action="paper_submission.php" method = "post" enctype="multipart/form-data" style="margin-top: 10px;">
	<input type="file" name="file"><br>
	<a href="index.php" class="btn btn-warning" style="background-color: red; border: none; margin-right: 10px;">Cancel <span class="glyphicon glyphicon-remove"></span></a>
	<button type="submit" class="btn btn-warning" style="width: 100px; height: 40px; background-color: green; border: none;">Submit <span class="glyphicon glyphicon-ok"></span></button>
</form></center>
<!-- ========================================= -->

<!-- <div class="container">
  <h3>Testing the Homepage</h3>
  <p>Added: social media, register/sign in, banner.</p>
</div> -->

</body>
</html>
