<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="dropzone.css">
<link href="alloy-editor/assets/alloy-editor-ocean-min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="styles/animate.css">
<link rel="stylesheet" type="text/css" href="styles/hover.css">
<script type="text/javascript" src="dropzone.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="alloy-editor/alloy-editor-all-min.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$('.slideoutbtn').click(function(){
				$('.container').toggleClass('active');
				$('.slideoutbtn').toggleClass('toggle');
			})
		})
</script>

<script type="text/javascript">
		function myFunction() {
							var xr = new XMLHttpRequest();
							var url= "text/saveAboutUs1.php";
							var text = document.getElementById("aboutus1").innerHTML;
							var vars = "newText="+text;
							
							xr.open("POST",url, true);
							xr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
							xr.send(vars);
							}
	</script>

	<title>About Us</title>
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

<section class="first" id="first">
	<?php 
		if (isset($_SESSION['u_id'])) { # Checking if user is logged in
			echo "<form action='uploadaboutus.php' class='dropzone'> 
				<div class='fallback'>
					<input type='file' name='file'>
				</div>
				</form>";
			# If they are logged in, the dropzone upload system block will display and let users upload pictures
		} else {
					# if the user is not logged in, the last uploaded image will be displayed.

					$conn = mysqli_connect("localhost", "Admin", "WestH1ll", "photos"); # connecting to database
					$sql = "select * from aboutus1 where id=(select max(id) from aboutus1)"; # choosing the last uploaded image in the database
					$result = mysqli_query($conn, $sql); # establishing connection

					if ($row = mysqli_fetch_row($result))
					{

						echo '<div class="img-container"><img class="image1 fadeIn animated" src="data:image;base64,'.$row[2].' "></div>';
						# displaying image
					}

					mysqli_close($conn);

			}
			?>

	<div class="main-wrapper" id="aboutus1" <?php if (isset($_SESSION['u_id'])) {echo "onblur='myFunction()' style='width:60%'";}?> >
		<div class="main-wrapper-text1"><?php include ("text/aboutus1.txt"); ?></div> 
	</div>
</section>

<?php if (isset($_SESSION['u_id'])) {echo "<script src='edit/editor.js'></script>";}?>

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


<?php if (isset($_SESSION['u_id'])) {echo "<script src='edit/aboutusedit1.js'></script>";}?>

</body>
