<!DOCTYPE html>
<html lang="en">
<head>
  <title>Info for Papers</title>
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


<!-- Info for Papers -->


	<span class="title"> Info for Papers </span>

	<span class="call"> Instructions </span>
	
	<p style = "text-align: justify; margin-left: 220px; margin-right: 220px; margin-top: 160px;">Submissions for the joint event are 		<b>completely electronic</b>, and both the paper and all supplementary material must be submitted through the online submission website.</p>
	<p style = "text-align: justify; margin-left: 220px; margin-right: 220px; margin-top: 0px;">The EuroMed2016 Proceeding will be published by 		Springer Verlag in the Lecture Notes in Computer Science (LNCS) series (<a href="httpls://www.springer.com/lncs" style="color:blue; "> 		www.springer.com/lncs</a>).</p>



	<ul class="mytabs">
	<script src="js/openinfo.js"></script>
   	<li><a2 href="javascript:void(0)" class="tablinks" onclick="openinfo(event, 'Workshop')">A.Workshop Papers</a2></li>		
   	<li><a2 href="javascript:void(0)" class="tablinks" onclick="openinfo(event, 'Conference')">B.Conference Papers</a2></li>
   	<li><a2 href="javascript:void(0)" class="tablinks" onclick="openinfo(event, 'More')">C.More Information</a2></li>
	<li><a2 href="javascript:void(0)" class="tablinks" onclick="openinfo(event, 'Types')">D.Paper Types</a2></li>

	<div id="Workshop" class="tabcontent">
		<h5>On-line PAPERS Electronic Submission for the Workshops:</h5>
		<ul class="paperinfo">
			<li><p>"The 2nd International Workshop on ICT for the Preservation and Transmission of Intangible Cultural Heritage" </p>
			<p><a href="#" style="color:blue; ">Submit</a></p>
			</li>
			<li><p>"The 3rd International Workshop on 3D Research Challenges in Cultural Heritage" </p>
			<p><a href="#" style="color:blue; ">Submit</a></p>
			</li>
			<li><p>"The 1st International Workshop on Virtual Reality, Gamification and Cultural Heritage"  </p>
			<p><a href="#" style="color:blue; ">Submit</a></p>
			</li>
			<li><p>"Information and Communication Technologies for Cultural Heritage Applications" </p>
			<p><a href="#" style="color:blue; ">Submit</a></p>
			</li>
			<li><p>"Re-Thinking Management and Valorization of Middle East Cultural Heritage in the Post-War period: Where Disasters 				Turns to Opportunity, Development and Growth"  </p>
			<p><a href="#" style="color:blue; ">Submit</a></p>
			</li>
		</ul>
		<?php 
		for ($x = 0; $x <= 15; $x++) {
		    echo "<br>";
		} 
		?>
		<span onclick="this.parentElement.style.display='none'"><b>Close</b></span>
	</div>

	<div id="Conference" class="tabcontent">
		<p>The Symposium accepts only original, unpublished work written in English. All the papers will be published by <b>Springer Verlag 			in LNCS </b>. We are soliciting three types of contributions: The <b>FULL (Research)</b>, <b>PROJECT (on-going projects)</b> and 			<b>SHORT Papers (Posters)</b>.</p>
		<p>YHowever, the 15 best submitted papers will be published on a special issue of the International Journal Heritage in the Digital 			Era, published by <a href="https://uk.sagepub.com/en-gb/eur/hom" style="color:blue; ">SAGE Publisher, UK</a>( <a href="https://uk.sagepub.com/en-gb/eur/hom" style="color:blue; "> https://uk.sagepub.com/en-gb/eur/home)</a>.</p>
		<p>For your convenience, we have summarized in the Author Guidelines document how a proceeding paper should be structured, how 			elements (headings, figures, references) should be formatted using our predefined styles, etc.</p> 
		<p>We also give some insight on how your paper will be typeset at Springer.</p> 
		<p>The PDF of the Authors Guidelines can be downloaded <a href="http://www.euromed2016.eu/application/files/1914/5311/9460/EuroMed2016_Springer_Paper_Authors_guidelines_Feb_2015.pdf" style="color:blue; "> here </a> or as part of the zip files containing the complete sets 			of instructions and templates for the different text preparation systems.</p> 
		<span onclick="this.parentElement.style.display='none'"><b>Close</b></span>
	</div>

	<div id="More" class="tabcontent">
		<h5>Downloads:</h5>
		<ol class="paperinfo">
			<li><p>Template in MS Word Format: </p>
			<p><a href="#" style="color:blue; ">Download Springer Verlag guidelines for the EuroMed2016 papers in MS-WORD including the 				Copyright-Form</a></p>
			</li>
			<li><p>Template in Latex Format:</p>
			<p><a href="#" style="color:blue; ">Download Springer Verlag guidelines for the EuroMed2016 Latex including the Copyright-Form
			</a></p>
			</li>
		</ol>
		<?php 
		for ($x = 0; $x <= 5; $x++) {
		    echo "<br>";
		} 
		?>
		
		<h5>Copyright form</h5>
		<p>Each contribution must be accompanied by a Springer copyright form, a so-called 'Consent to Publish' form. Modified forms are not 			acceptable.</p>
		<p>Authors will be asked to transfer the copyright of the paper to the Springer. This will ensure the widest possible protection and 			dissemination of information under copyright laws.</p>
		<p>One author may sign on behalf of all of the authors of a particular paper. In this case, the author signs for and accepts 			responsibility for releasing the material on behalf of any and all co-authors.</p> 

		<h5>Permissions</h5>
		<p>Authors wishing to include figures, tables, or text passages that have already been published elsewhere are required to obtain 			permission from the copyright owner(s) for both the print and online format before their paper is submitted to Springer.</p>
		<span onclick="this.parentElement.style.display='none'"><b>Close</b></span>
	</div>
	
	</div>
	<div id="Types" class="tabcontent">
		<ol class="paperinfo">
			<li><p><b>Full Research Papers </b></p>
			<p>will be published by SPRINGER VERLAG in the <a href="http://www.springer.com/gp/computer-science/lncs" style="color:blue;"> Lecture Notes for Computer Science - LNCS </a>, presenting <b>new innovative results</b>. These papers will have a full-length oral presentation. Each 			submitted paper must not exceed 12 pages in total.</p>
			<p>On-line FULL PAPERS Electronic Submission: <a href="http://www.euromed2016.eu/full-research/openconf.php" style="color:blue; ">Electronic Submission</a></p>
			</li>

			<li><p><b>Project Papers </b></p>
			<p>will be published by SPRINGER VERLAG in the <a href="http://www.springer.com/gp/computer-science/lncs" style="color:blue;"> Lecture Notes for Computer Science - LNCS </a>, focusing on the description of project organization, use of technology, and lesson learned -- not 				innovative technical content. These papers will have a short oral presentation. Each submitted paper must not exceed 10 pages 				in total.</p>
			<p>On-line PROJECT PAPERS Electronic Submission: <a href="http://www.euromed2016.eu/full-research/openconf.php" style="color:blue; ">Electronic Submission</a></p>
			</li>

			<li><p><b>Short Papers </b></p>
			<p>will be published also by SPRINGER VERLAG in the <a href="http://www.springer.com/gp/computer-science/lncs" style="color:blue;"> Lecture Notes for Computer Science - LNCS </a>, presenting preliminary ideas and works-in-progress. These papers will have a short oral presentation and will be available as posters in conference breaks. They will be published in the "Short Papers" proceedings volume (<a href="http://www.euromed2016.eu/application/files/2014/5311/0900/EuroMed2016_Cyprus_Poster_presentations.pdf" style="color:blue;">Instructions for A0 poster</a>). Each submitted paper must not exceed 8 pages in total.</p>
			<p>Download: <a href="http://www.euromed2016.eu/application/files/2514/5499/7317/EuroMed2016_Cyprus_Poster_presentations_1.pdf" style="color:blue; "> Guidelines for the Poster Exhibition</a></p>
			<p>Download: Banner for Poster </p>
			<p>On-line SHORT PAPERS Electronic Submission: <a href="http://www.euromed2016.eu/full-research/openconf.php" style="color:blue; ">Electronic Submission</a></p>
			<p>Confirmations will be sent after completing a submission, but not after only submitting a paper.</p>
			<p>In addition, space will be available for <b>"Exhibition and Live Showcases"</b>. If you have a system you wish included in 				the exhibition or showcase area, please contact the organizers (email: <b>chairman@euromed2016.eu</b>) and see Important 				dates.</p>
			<p>Please note that it is imperative not to delay the submission until the last minute. Since we will publish your paper and 				not your additional material, please restrict additional material to a reasonable size, considering that the reviewers have 				to download it. If you experience long waiting times, still be patient. From our experience the submission server will be 				<b>heavily loaded in the very last days</b>.</p>
			</li>
			<?php 
		for ($x = 0; $x <= 33; $x++) {
		    echo "<br>";
		} 
		?>

		</ol>
		<span onclick="this.parentElement.style.display='none'"><b>Close</b></span>
	</div>

	</ul>

<br><br>
<!-- ========================================= -->

</body>
</html>
