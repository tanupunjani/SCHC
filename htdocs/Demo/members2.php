<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" type="text/css" href="styletest.css">
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
	<title>Members</title>
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

<table class="member-table" align="center">
	<tr>
		<td class="cell">
			<li><a href="https://www.schcontario.ca/" target="_blank">Scarborough Centre for Healthy Communities <br><img class="logocell" src="logos/schc.png"></a></li>
			<li><a href="https://www.cmha.ca/" target="_blank">Canadian Mental Health Association Toronto <br><img class="logos" src="logos/cmha.jpg"></a></li>
			<li><a href="https://www.salvationarmy.ca" target="_blank">The Salvation Army <br><img class="logocell" src="logos/salvarmy.png"></a></li>
			<li><a href="https://www.fredvictor.org" target="_blank">Fred Victor Centre <br><img class="logos" src="logos/fredv.jpg"></a></li>
			<li><a href="https://www.frontiercollege.ca" target="_blank">Frontier College <br><img class="logocell" src="logos/fcollage.png"></a></li>
			<li><a href="http://www.wardenwoods.com/" target="_blank">Warden Wood Community Centre<br><img src="logos/woods.png"></a></li>
			<li><a href="http://www.cotainspires.ca/" target="_blank">Cota<br></a></li>
		</td>
		<td class="cell">
			<li><a href="http://johnhoward.on.ca/toronto/services/" target="_blank">John Howard Society of Toronto <br><img class="logos" src="logos/johnhoward.png"></a></li>
			<li><a href="https://www.scarboroughcommunitylegal.ca" target="_blank">Scarborough Community Legal Services <br><img class="logocell" src="logos/legal.png"></a></li>
			<li><a href="https://aboriginalhsc.org" target="_blank">Aboriginal Housing Support Centre <br><img class="logocell" src="logos/ahsc.png"></a></li>
			<li><a href="http://mfrc.org" target="_blank">Malvern Family Resource Centre <br><img class="logocell" src="logos/MFRC.png"></a></li>
			<li><a href="https://www1.toronto.ca/wps/portal/contentonly?vgnextoid=c0aeab2cedfb0410VgnVCM10000071d60f89RCRD" target="_blank">City of Toronto <br><img class="logocell" src="logos/toronto.png"></a></li>
			<li><a href="http://tropicanacommunity.org/" target="_blank">Tropicana Community Services<br></a></li>
			<li><a href="http://icha-toronto.ca/" target="_blank">Homes First Society<br></a></li>
		</td>
		<td class="cell">				
			<li><a href="https://www.agincourtcommunityservices.com/" target="_blank">Agincourt Community Services Association <br><img class="logos" src="logos/ACSA.jpg"></a></li>
			<li><a href="http://homesfirst.on.ca/" target="_blank">Homes First <br><img class="logocell" src="logos/homesfirst.png"></a></li>
			<li><a href="http://www.redcross.ca/" target="_blank">Canadian Red Cross <br><img class="logocell" src="logos/redcross.png"></a></li>
			<li><a href="http://www.housinghelpcentre.ca/" target="_blank">The Housing Help Centre <br><img class="logocell" src="logos/housinghelp.png"></a></li>
			<li><a href="http://www.homesfirst.on.ca/" target="_blank">Inner City Health Associates<br><img src="logos/innercity.png"></a></li>
			<li><a href="http://www.homesfirst.on.ca/" target="_blank">Elizabeth Fry Toronto<br><img src="logos/fry.png"></a></li>
		</td>
	</tr>
</table>

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