<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['login_submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "";
    } else {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = stripslashes($username);
        $password = stripslashes($password);
        if (function_exists('mysqli_query')) {

            $username = mysqli_real_escape_string($conn, $username);
            $password = mysqli_real_escape_string($conn, $password);

            $query = mysqli_query($conn, "select * from realestate_credentials where password='$password' AND username='$username'");
            $nrows = mysqli_num_rows($query);
            $row = mysqli_fetch_assoc($query);
        } else {
            $username = mysql_real_escape_string($username);
            $password = mysql_real_escape_string($password);

            $query = mysql_query("select * from realestate_credentials where password='$password' AND username='$username'");
            $nrows = mysql_num_rows($query);
            $row = mysql_fetch_assoc($query);
        }

        if ($nrows == 1 && $row['usertype'] == "admin") {
            $_SESSION['login_user'] = $username; // Initializing Session
            header("location: admin.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }

        if (function_exists('mysqli_close')) {
            mysqli_close($conn);
        } else {
            mysql_close($conn);
        }
    }
}
?>