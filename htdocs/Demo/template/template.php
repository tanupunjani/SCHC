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

	<title>Temmplate</title>
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
				<button class="logout-btn" type="submit" name="submit">Log Out</button></form>';
		}
		?>
</div>

<div class="margin-wrapper">
<hr class="top-line">
<hr class="footer-line">
</div>
</body>

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

</html>