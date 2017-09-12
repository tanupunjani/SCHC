<?php

$dbServername = "localhost"; /*Server name when created*/
$dbUsername = "Admin"; /*Admin username when sever is created*/
$dbPassword = "WestH1ll"; /*Server password when server is created*/
$dbName = "loginsystem"; /*SQL database name*/

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
	echo 'Not connected!';
} else {
	echo "connected to database";}
