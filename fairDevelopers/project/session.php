<?php
session_start();
include ('connection.php');

$user_check=$_SESSION['login_user'];
$query = mysqli_query($conn,"select * from realestate_credentials where  username='$user_check'");
$rows = mysqli_num_rows($query);
if ($rows == 0) {

	mysqli_close($conn); 
	header('Location: login.php'); 
}

?>