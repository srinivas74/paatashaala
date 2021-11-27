<?php
include ('connection.php');
if (isset($_GET['checkid'])) {
    $id = $_GET['checkid'];
    $q1 = "update realestate_plots_images set is_deleted=true where id='$id'";
    if (function_exists('mysqli_query')) {
        $r = mysqli_query($conn, $q1) or die(mysqli_error($conn));
        if ($r) {
            $getimage = mysqli_query($conn, "select image from `realestate_plots_images`  where id='$id'");
            unlink("assets/plotimages/" . mysqli_fetch_array($getimage)['image']);
            header("location: listing.php");
        } else {
            header("location: updatePlotsImages.php");
        }
    } else {
        $r = mysql_query($q1) or die(mysql_error($conn));
        if ($r) {
            $getimage = mysql_query("select image from `realestate_plots_images`  where id='$id'");
            unlink("assets/plotimages/" . mysql_fetch_array($getimage)['image']);
            header("location: listing.php");
        } else {
            header("location: updatePlotsImages.php");
        }
    }
}

?>