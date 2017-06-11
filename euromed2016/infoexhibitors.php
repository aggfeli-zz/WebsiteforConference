<!DOCTYPE html>
<html lang="en">
<head>
  <title>Info for Exhibitors</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/info.css">

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

<!-- Info for Exhibitors -->


	<span class="title"> Information for Exhibitors </span>

	<p style = "text-align: justify; margin-left: 220px; margin-right: 220px; margin-top: 80px;">All those who want to expose their 		technological equipment or to show their work to the participants in the Conference are invited from the Organisation. For this reason, 	private or state companies, institutes, research laboratories, wanting in any way to show off their work, can join the Conference.</p>

	<p style = "text-align: justify; margin-left: 220px; margin-right: 220px; margin-top: 0px;">Desirable is the participation of exhibitors -       Representative Companies or Organizations who want to stand in the foyer of the Conference area in order to enable the participants to learn 		about new technologies that support the work of digitization globallyor updated for Research projects .For every interested exhibitor there 		are the following packages:</p>

	<div class="box">
	<h5 style="text-align: justify; margin-left: 50px; margin-right: 50px; margin-top: 0px;">Package 1: Price for each exhibitor : 200 euro for 		3 days</h5>

	<p style = "text-align: justify; margin-left: 50px; margin-right: 50px; margin-top: 0px;">Showroom 2.50 m dimensions x 2.00m. , which will 		have power supply, two tables and tow chairs( the set up and configuration of the stand will be made by the exhibitor's responsibility).</p>

	<p style = "text-align: justify; margin-left: 50px; margin-right: 50px; margin-top: 0px;">Shelf stand open: three (3) days from 31/10 up to 		2/11/2016.</p>

	</div>


	<div class="box2">
	<h5 style="text-align: justify; margin-left: 50px; margin-right: 50px; margin-top: 0px;">Package 2: Price for each exhibitor : 500 euro</h5>

	<p style = "text-align: justify; margin-left: 50px; margin-right: 50px; margin-top: 0px;">This package includes <b>all of the above services</b> 		for the three days of the conference plus:</p>

	<ol class="paperlist2">
			<li><p>Hosting LOGO exhibitor in the particular ares of Exhibitors-Supporters Conference Site <a href="https://www.euromed2016.eu" style="color:blue; ">www.euromed2016.eu</a></p>
			</li>
			<li><p>Show the LOGO exhibitor and the proceedings of the conference, printed or electronically to be issued.</p>
			</li>
			<li><p>Show the LOGO of Exhibitor-Supporter on video projections at the Congress premisses</p>
			</li>
	</ol>

	</div>
	<p style = "text-align: justify; margin-left: 220px; margin-right: 220px; margin-top: 50px;">Complete the <a href="registration_form.php" style="color:blue; ">Registration Form</a> in order to participate.</p>

	<p style = "text-align: justify; margin-left: 220px; margin-right: 220px; margin-top: 20px;">Check our Exhibitors <a href="#" style="color:blue; ">here</a>.</p>

	<p style = "text-align: justify; margin-left: 220px; margin-right: 220px; margin-top: 50px;"><b>Note!</b> The above prices do not include the cost of participation in the Conference and the Social Dinner.</p>

	<p style = "text-align: justify; margin-left: 220px; margin-right: 220px; margin-top: 20px;">If you have any further questions you can <a href="#" style="color:blue; ">Contact Us</a>.</p>
	<br><br>
<!-- ========================================= -->

</body>
</html>
