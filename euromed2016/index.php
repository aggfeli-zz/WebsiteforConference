<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/carousel.css">
  
  
  <!-- To bgazw pros to paron giati xalaei th morfopoihsh ths panw mparas -->
  <!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->
  
<!-- Alternative color for top-right bar: #ffffd8-->
  
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

<!-- Countdown Clock -->

<p style="margin-left:45px; margin-top: 10px;"><b>Time remaining:</b></p>
	<div id="clockdiv">
		  <div>
			    <span class="days"></span>
			    <script src="js/countdownclock.js"></script>
			    <div class="smalltext">D</div>
		  </div>

		  <div>
			    <span class="hours"></span>
			    <script src="countdownclock.js"></script>
			    <div class="smalltext">H</div>
		  </div>
		  <div>

			    <span class="minutes"></span>
			    <script src="countdownclock.js"></script>
			    <div class="smalltext">Min</div>
		  </div>

		  <div>
			    <span class="seconds"></span>
			    <script src="countdownclock.js"></script>
			    <div class="smalltext">Sec</div>
		  </div>
</div>

<!-- Intoductory Message -->
<p style = "text-align: center; margin-left: 270px; margin-right: 270px; margin-top: -60px;"><b><i>EuroMed2016</i></b> is an annual conference held in Nicosia, Cyprus from October 31st to November 5th 2016. The conference is focused on <i>conservation, massive digitalisation, modelling, archiving, visualisation and preservation of tangible and intagible cultural heritage</i>. The event is also focusing on <i>documentation</i> and <i>modelling of knowledge</i>.</p>

<!-- Sponsors on the Right -->

<div id="wrapper">
	<div id="sponsors" style="float: right; margin-top:-150px;">
		<div style="float: right; margin-right: 50px;"><b>Platinum Sponsors:</b></div>
		<div style="float: right; margin-top: 40px; width: 40px;"><a target="_blank" href="http://cablenet.com.cy/"><img style="width: 200px;" src="Images\cablenet.gif"></div>
		<div style="float: right; margin-top: 150px; width: 10px;"><a target="_blank" href="http://www.dsahellas.gr/"><img style="width: 220px;" src="Images\interlease.png"></div>
		<div style="float: right; margin-top: 260px; width: 4px;"><a target="_blank" href="http://research.org.cy/el/home/"><img style="width: 220px;" src="Images\Research-Promotion-Foundation.jpg"></div>
		<div style="float: right; margin-top: 370px; margin-right: -200px;"><a target="_blank" href="http://www.agisoft.com/"><img style="width: 180px;" src="Images\PhotoScan.jpg"></div>
	</div>
</div>


<!-- Carousel -->

<div class="container-fluid" >
    <div class="col-xs-12">
    <center><h4 style="margin-top: 80px; color:black;">In Cooperation With:</h4></center>
		<div id="SponsorCarousel" class="carousel slide" data-ride="carousel" >
			<!-- Indicators -->
			<ol class="carousel-indicators" >
			<li data-target="#SponsorCarousel" data-slide-to="0" class="active" ></li>
			<li data-target="#SponsorCarousel" data-slide-to="1" ></li>
			<li data-target="#SponsorCarousel" data-slide-to="2" ></li>
			<li data-target="#SponsorCarousel" data-slide-to="3" ></li>
			<li data-target="#SponsorCarousel" data-slide-to="4" ></li>
			</ol>
            <!-- Carousel items -->
            <div class="carousel-inner" >
                <div class="item active" >
                    <div class="row" >
                        <div class="col-xs-3"><a target="_blank" href="https://ec.europa.eu/info/departments/research-executive-agency_en"><img src="Images\european-commission.jpg" alt="european-commission" class="img-responsive" style="height: 150px; width: 150px; margin-left: 150px;" ></a></div>
                        <div class="col-xs-3"><a target="_blank" href="https://en.aegeanair.com/"><img src="Images\aegean airlines.jpg" alt="aegean airlines" class="img-responsive" style="height: 150px; width: 150px; margin-left: 110px;"></a></div>
                        <div class="col-xs-3"><a target="_blank" href="http://www.cut.ac.cy/?languageId=1"><img src="Images\Cyprus_University_of_Technology_logo.png" alt="Cyprus_University_of_Technology_logo" style="height: 150px; width: 150px; margin-left: 60px;" class="img-responsive"></a></div>
                        <div class="col-xs-3"><a target="_blank" href="http://cipa.icomos.org/"><img src="Images\cipa_heritage_documentation.jpg" alt="cipa_heritage_documentation" style="height: 150px; width: 150px;" class="img-responsive"></a></div>
                    </div>
                        <!--/row-->
                </div>
				<!--/item-->
				<div class="item">
					<div class="row">
                        <div class="col-xs-3"><a target="_blank" href="http://www.dariah.eu/" ><img src="Images\dariah-eu.png" alt="dariah-eu" class="img-responsive"style="height: 150px; width: 150px; margin-left: 150px;"></a></div>
                        <div class="col-xs-3"><a target="_blank" href="http://www.itn-dch.org/" ><img src="Images\ITN-DCH.jpg" alt="ITN-DCH" class="img-responsive"style="height: 150px; width: 150px; margin-left: 110px;"></a></div>
                        <div class="col-xs-3"><a target="_blank" href="http://www.4d-ch-world.eu/" ><img src="Images\4d ch world.png" alt="4d ch world" style="height: 150px; width: 150px; margin-left: 60px;" class="img-responsive"></a></div>
                        <div class="col-xs-3"><a target="_blank" href="http://www.crosscult.eu/" ><img src="Images\CrossCultLogo.png" alt="CrossCultLogo" style="height: 150px; width: 150px;" class="img-responsive"></a></div>
                    </div>
                    <!--/row-->
                </div>
                <!--/item-->
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3"><a target="_blank" href="http://www.cys.org.cy/en/" ><img src="Images\cyprus-org-stand.png" alt="cyprus-org-stand" style="height: 150px; width: 150px; margin-left: 150px;" class="img-responsive"></a></div>
                        <div class="col-xs-3"><a target="_blank" href="http://dariah-cy.eu/" ><img src="Images\dariah cy.png" alt="dariah cy" style="height: 150px; width: 150px; margin-left: 110px;" class="img-responsive"></a></div>
                        <div class="col-xs-3"><a target="_blank" href="http://www.europeana.eu/portal/el" ><img src="Images\europeana.png" alt="europeana" style="height: 150px; width: 150px; margin-left: 60px;" class="img-responsive"></a></div>
                        <div class="col-xs-3"><a target="_blank" href="http://www.europeana-space.eu/" ><img src="Images\Europeana_Space.jpg" alt="Europeana_Space" style="height: 150px; width: 150px;" class="img-responsive"></a></div>
                    </div>
                    <!--/row-->
                </div>
                <!--/item-->
				<div class="item">
                    <div class="row">
                        <div class="col-xs-3"><a target="_blank" href="http://www.digitalheritagelab.eu/" ><img src="Images\lab university.png" alt="lab university" style="height: 150px; width: 150px; margin-left: 150px;" class="img-responsive"></a></div>
                        <div class="col-xs-3"><a target="_blank" href="http://i-treasures.eu/" ><img src="Images\i-treasures_logo.png" alt="i-treasures_logo" style="height: 150px; width: 150px; margin-left: 110px;" class="img-responsive"></a></div>
                        <div class="col-xs-3"><a target="_blank" href="http://www.locloud.eu/" ><img src="Images\locloud-logo.png" alt="locloud-logo" style="height: 150px; width: 150px; margin-left: 60px;" class="img-responsive"></a></div>
                        <div class="col-xs-3"><a target="_blank" href="http://vi-mm.eu/" ><img src="Images\VIMM_logo.png" alt="VIMM_logo" style="height: 150px; width: 150px;" class="img-responsive"></a></div>
                    </div>
                    <!--/row-->
                </div>
                <!--/item-->
				<div class="item">
                    <div class="row">
                        <div class="col-xs-3"><a target="_blank" href="http://www.tanzjahr2016.de/" ><img src="Images\deutchland.png" alt="deutchland" style="height: 150px; width: 150px; margin-left: 150px;" class="img-responsive"></a></div>
                        <div class="col-xs-3"><a target="_blank" href="http://www.digitale-rekonstruktion.info/" ><img src="Images\digitale-rekonstruktione.jpg" alt="digitale-rekonstruktione" style="height: 150px; width: 650px; margin-left: 130px;" class="img-responsive"></a></div>
						<div class="col-xs-3"><a target="_blank" href="http://thalisaeis.ntua.gr/" ><img src="Images\thalis ntua.jpg" alt="thalis ntua" style="height: 150px; width: 500px; margin-left: 180px;" class="img-responsive"></a></div>
                    </div>
                    <!--/row-->
                </div>
                <!--/item-->
            </div>
			<a class="left carousel-control" href="#SponsorCarousel" data-slide="prev" style="background-image: none;"><i class="glyphicon glyphicon-chevron-left"></i></a>
			<a class="right carousel-control" href="#SponsorCarousel" data-slide="next" style="background-image: none;"><i class="glyphicon glyphicon-chevron-right"></i></a>
	    </div>
    </div>
    </div>

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


<script>
$(document).ready(function() {
	$('#myCarousel').carousel({
	interval: 10000
	})
    
    $('#myCarousel').on('slid.bs.carousel', function() {
    	//alert("slid");
	});
    
    
});
</script>
