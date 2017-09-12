<?php

session_start();

if (isset($_POST['submit'])) {

	include 'dbh.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error Handlers
	//Check if inputs are empty 

	if (empty($uid) || empty($pwd)) {
		header("Location: ../loginpage.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../loginpage.php?login=error");
			$_SESSION['error'] = "Incorrect username or password";
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				if ($row['user_pwd'] != $pwd) {
					header("Location: ../loginpage.php?login=error");
					exit();
				} elseif ($row['user_pwd'] == $pwd) {
					//log in user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}

	}

	} else {
		header("Location: ../loginpage.php?login=error");
		exit();
	}