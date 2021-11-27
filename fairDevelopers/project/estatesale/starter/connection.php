<?php
$mysql_hostname = "localhost";
$mysql_user = "cnu";
$mysql_password = "";
$mysql_database = "realestate";
$prefix = "";

if (function_exists('mysqli_connect')) {
    $conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
    $db = mysqli_select_db($conn, $mysql_database) or die("Could not select database");
} else {
    $conn = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
    $db = mysql_select_db($mysql_database, $conn) or die("Could not select database");
}
?>