<?php  
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<link rel="stylesheet" type="text/css" href="styles/animate.css">
<link rel="stylesheet" type="text/css" href="styles/hover.css">
<script type="text/javascript">
		$(document).ready(function() {
			$('.slideoutbtn').click(function(){
				$('.container').toggleClass('active');
				$('.slideoutbtn').toggleClass('toggle');
			})
		})
</script>
	<title>Login Page</title>
</head>
<body>
<header>
	<div class="container-login">
		<a href="index.php"><img src="pictures/shspnlogo.png" class="logo" alt="YOUR LOGO HERE"></a>
		<nav>
			<ul>
				<li><a href='index.php'>Home</a></li>
				<li><a href='aboutus.php'>About Us</a></li>
				<li><a href='contactus.php'>Contact Us</a></li>
			</ul>
		<button class="slideoutbtn">
			<span></span>
		</button>
		</nav>
	</div>
</header>

<div class="main-container">
		<div class="main-login">
			<?php
				if (isset($_SESSION['u_id'])) {
				echo '<form action="includes/logout.php" method="POST">
				<button type="submit" name="submit">Log Out</button></form>';
			} else {
				echo '<form action="includes/login.php" method="POST">
				<h2>Login</h2>
				<input type="text" name="uid" placeholder="Username">
				<input type="password" name="pwd" placeholder="Password">
				<button type="submit" name="submit">Login</button>
				</form>';
			}
			?>
		</div>
	</div>

<hr class="login-line">
</body>
</html>