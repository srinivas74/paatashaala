<?php
include('connection.php');

if(isset($_GET['checkid']))
{
    $id = $_GET['checkid']; 
    $q1 = "update realestate_plots set is_deleted=true where id='$id'";
    if (function_exists('mysqli_query')) {
    $r=mysqli_query($conn,$q1) or die(mysqli_error($conn));
    }
    else{
    $r=mysql_query($q1) or die(mysql_error($conn));
    }
    if($r){
        header("location: viewplots.php");
    }
    else{
        header("location: updatePlots.php");
    }
 
}


?>