<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="styles/animate.css">
<link rel="stylesheet" type="text/css" href="styles/hover.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$('.slideoutbtn').click(function(){
				$('.container').toggleClass('active');
				$('.slideoutbtn').toggleClass('toggle');
			})
		})
</script>
	<title>Contact Us</title>
</head>
<header>
	<div class="container">
		<a href="index.php"><img src="pictures/shspnlogo.png" class="logo" alt="YOUR LOGO HERE"><img src="pictures/shspntext.png" class="logotext"></a> <!--menu bar logo here-->
		<nav>
			<ul>
			<li><a href='index.php'>Home</a></li>
			<li><a href='aboutus.php'>About Us</a></li>
			<li><a href='members.php'>Members</a></li>
			<li><a href='resources.php'>Resources</a></li>
			<li><a href='homelessness.php'>Ending Homelessness</a></li>
			<li><a href='contactus.php'>Contact Us</a></li>
			</ul>
			<button class='slideoutbtn'>
			<span></span>
			</button>
		
		</nav>
	</div>
</header>
<body>
<section class="banner">
	<div class="banner-wrapper">
		<img class="banner-pic" src="pictures/banner5.jpg">
	</div>
</section>

<div class="nav-login">
	<?php
		if (isset($_SESSION['u_id'])) {
			echo '<form action="includes/logout.php" method="POST">
			<button type="submit" name="submit">Log Out</button></form>';
	}
	?>
</div>

<div class="margin-wrapper">
<hr class="top-line">
<section class="map-section">
	<div class="address">
		<h2>Scarborough Centre for Healthy Communities</h2>
		<p>629 Markham Rd, Scarborough 416-642-9445</p>
		<p>Phone Number: 416-555-5555</p>
		<p>Fax: 416-555-5555</p>
		<p>Email: schc@exmaple.com</p>
	</div>
	<div class="google-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2881.592842420732!2d-79.2261376849321!3d43.76055115350102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d040550c06d7%3A0x864aab3d96441d9b!2sScarborough+Centre+for+Healthy+Communities!5e0!3m2!1sen!2sca!4v1502371511525" width="100" height="100" frameborder="0" style='border:0' allowfullscreen></iframe>
	</div>
</section>
<hr class="footer-line">
</div>

<footer class="footer1">
<div class="footer-container">			
	<div class="icons">
		<h1 class="footer-font">Check out our social media!<br>Example Text</h1>
		<hr class="footer-seperator">	
		<a href="#" class="fb"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
		<a href="#" class="linked"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
		<a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		<a href="#" class="insta"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		</div>
	</div>
</div>
</footer>

</body>
</div>

</html>