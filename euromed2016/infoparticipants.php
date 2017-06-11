<!DOCTYPE html>
<html lang="en">
<head>
  <title>Info for Participants</title>
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


<!-- Info for Participants -->


	<span class="title"> Info for Participants </span>


	<span class="call"> Call for Participation </span>


	<p style = "text-align: justify; margin-left: 220px; margin-right: 220px; margin-top: 160px;">The International Conference on Cultural 		Heritage (CH) brings together researchers, policy makers, professionals and practitioners to explore some of the more pressing issues 		concerning cultural heritage today. In particular, the main goal of the conference is to focus on interdisciplinary and multi-disciplinary 		research on tangible and intangible Cultural Heritage, the use of cutting edge technologies for the protection, restoration, preservation, 		massive digitalization, documentation and presentation of the CH content. At the same time, the event is intended to cover topics of research 		ready for exploitation, demonstrating the acceptability of new sustainable approaches and new technologies by the user community, SME’s, 		owners, managers and conservators of cultural patrimony.</p>

	<p style = "text-align: justify; margin-left: 220px; margin-right: 220px; margin-top: 20px;">Several organizations have decided to join 	together in order to create an optimal environment for the discussion, explanation of new technologies, exchange of modern ideas and in 	general to allow the transfer of knowledge between a maximum number of professionals and participants during one common time period.
	<a href="#">Read more</a></p>


	<span class="call"> Frequently Asked Questions for Participants </span>


	<ul class="mytabs">
	<script src="js/openinfo.js"></script>
   	<li><a2 href="javascript:void(0)" class="tablinks" onclick="openinfo(event, 'Location')">About the Location</a></li>		
   	<li><a2 href="javascript:void(0)" class="tablinks" onclick="openinfo(event, 'Drive')">What should I do to come</a></li>
   	<li><a2 href="javascript:void(0)" class="tablinks" onclick="openinfo(event, 'Programme')">Programme</a></li>
	<li><a2 href="javascript:void(0)" class="tablinks" onclick="openinfo(event, 'Speakers')">Keynote Speakers</a></li>
	<li><a2 href="javascript:void(0)" class="tablinks" onclick="openinfo(event, 'Register')">How can I register</a></li>
	<li><a2 href="javascript:void(0)" class="tablinks" onclick="openinfo(event, 'Pay')">How can I pay</a></li>
	<li><a2 href="javascript:void(0)" class="tablinks" onclick="openinfo(event, 'Help')">Help</a></li>
	<div id="Drive" class="tabcontent">
		<h4>Travelling to Cyprus</h4>
		<h5>Airports</h5>
		<p>The best way to travel to Cyprus is by airplaine. A number of air companies are flying to and from Cyprus, but we recomend AEGEAN 			Airlines. The nearest airport to Nicosia is Larnaca Airport(code LCA) wich is 40km or 30min drive away and has scheduled flights from 			and to all major European cities. Further away, the smaller Paphos Airport (code PFO) is a 140km(or 1h40km drive) from Nicosia.</p>
		<h5>From ant to AIRPORT(Larnaca os Paphos):</h5>
		<p>An airport shuttle bus operates between Larnaca Airport and Nicosia. You can rent a car in Cyprus from all major car rental 			companies. You can search  through here: <a href="https://www.rentalcars.com">www.rentalcars.com</a> . Don't forget that in Cyprus we 			are driving on the left side of the road. You can also take a taxi from the airport but keep in mind that this is the most expensive 			way to travel in Cyprus(around 50 euro). For more info here. </p>
		<span onclick="this.parentElement.style.display='none'"><b>Close</b></span>
	</div>
	<div id="Location" class="tabcontent">
		<p>You can find info about the location <a href="#">here</a></p>
		<span onclick="this.parentElement.style.display='none'"><b>Close</b></span>
	</div>
	<div id="Programme" class="tabcontent">
		<p>You can find information about the Programme <a href="#" >here</a></p>
		<span onclick="this.parentElement.style.display='none'"><b>Close</b></span>
	</div>
	<div id="Speakers" class="tabcontent">
		<p>You can find information about the Keynote Speakers <a href="#">here</a></p>
		<span onclick="this.parentElement.style.display='none'"><b>Close</b></span>
	</div>
	<div id="Register" class="tabcontent">
		<p>For your complete registration, please do the following:</p>

		<p>Step 1: Register as a participant <a href="#">here</a></p>

		<p>Step 2: Complete the Registration Form <a href="#">here</a></p>

		<p>Step 3: Payment - Bank Transfer</p>
		<p>This year, we do accept only e-banking payments on the account of the Registration Management Company and no credit cards 			payments.</p>

		<p>You can find more information about the registration fees by choosing <a href="#">payment info</a>.</p> 
		<span onclick="this.parentElement.style.display='none'"><b>Close</b></span>
	</div>
	<div id="Pay" class="tabcontent">
		<p>This year, we do accept only e-banking payments on the account of the Registration Management Company and no credit cards 			payments.</p>
		<p>You have too choose for each person one of the two following programs: Daily or Entire.</p>
		<p>You can find more information about the registration fees by choosing <a href="#">payment info</a>.</p> 
		<span onclick="this.parentElement.style.display='none'"><b>Close</b></span>
	</div>
	<div id="Help" class="tabcontent">
		<p>If you have any further questions you can click <a href="#">here</a> and send us your question. Our team will reply soon.</p>
		<span onclick="this.parentElement.style.display='none'"><b>Close</b></span>
	</div>
	</ul>

	<br><br>


<!-- ========================================= -->



</body>
</html>
