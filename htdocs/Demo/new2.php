<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" type="text/css" href="C:\Users\itvolunteer\Desktop\hello.css">
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
<div >
<table align="center">

	<tr >
		<td>
			<a href="https://www.schcontario.ca/" target="_blank"><img src="logos/schc.png" class="autoResizeImage"></a>
		</td>
		<td>
			<a href="https://www.salvationarmy.ca" target="_blank"><img src="logos/salvarmy.png"  class="autoResizeImage"></a>
		</td>
		<td>
			<a href="http://mfrc.org" target="_blank"><img src="logos/MFRC.png"  class="autoResizeImage"></a>	
		</td>
	</tr>

	<tr >
		<td>
			<a href="http://www.redcross.ca/" target="_blank"><img src="logos/redcross.png"  class="autoResizeImage"></a>
		</td>
		<td>
			<a href="http://johnhoward.on.ca/toronto/services/" target="_blank"><img src="logos/ahsc.png"  class="autoResizeImage"></a>
		</td>
		<td>
			<a href="https://www1.toronto.ca/wps/portal/contentonly?vgnextoid=c0aeab2cedfb0410VgnVCM10000071d60f89RCRD" target="_blank"><img src="logos/toronto.png" class="autoResizeImage"></a>
		</td>
	</tr>

	<tr >
		<td >
			<a href="https://www.frontiercollege.ca" target="_blank"><img src="logos/fcollage.png"  class="autoResizeImage"></a>
		</td>
		<td>
			<a href="http://www.housinghelpcentre.ca/" target="_blank"><img src="logos/housinghelp.png"  class="autoResizeImage"></a>
		</td>
		<td>
			<a href="http://homesfirst.on.ca/" target="_blank"><img src="logos/homesfirst.png"  class="autoResizeImage"></a>
		</td>
	</tr>

	<tr >
		<td>
			<a href="https://aboriginalhsc.org" target="_blank"><img src="logos/ACSA.jpg"  class="autoResizeImage"></a>
		</td>	
		<td>
			<a href="http://johnhoward.on.ca/toronto/services/" target="_blank"><img src="logos/johnhoward.png"  class="autoResizeImage"></a>			
		</td>
		<td>
			<a href="https://www.cmha.ca/" target="_blank"><img src="logos/cmha.jpg"  class="autoResizeImage"></a>
		</td>	
	</tr>

	<tr >
		<td>
			<a href="https://www.scarboroughcommunitylegal.ca" target="_blank"><img src="logos/legal.png" class="autoResizeImage"></a>
		</td>
		<td>
			<a href="https://www.fredvictor.org" target="_blank"><img src="logos/fredv.jpg" class="autoResizeImage"></a>
		</td>
		<td>
			<a href="http://icha-toronto.ca/" target="_blank"><img src="logos/innercity.png" class="autoResizeImage"></a>
		</td>
	</tr>

	<tr >
		<td>
			<a href="http://www.efrytoronto.org/" target="_blank"><img src="logos/fry.png"  class="autoResizeImage"></a>
		</td>
		<td>
			<a href="http://www.wardenwoods.com/" target="_blank"><img src="logos/woods.png"  class="autoResizeImage"></a>
		</td>
	</tr>

</table>
</div>
</body>
</html>