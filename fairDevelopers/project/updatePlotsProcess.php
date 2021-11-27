<?php
include ('connection.php');

if (isset($_POST['submit_bookslot'])) {
    $plotName = $_POST['plotName'];
    $area = $_POST['area'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $locality = $_POST['locality'];
    $map = $_POST['map'];
    $configuration = $_POST['configuration'];
    $facing = $_POST['facing'];
    $transaction = $_POST['transaction'];
    $q1 = "insert into realestate_plots(plot_name,area, price, status, locality, map, configuration, facing, transaction) values ('$plotName','$area','$price','$status','$locality','$map','$configuration','$facing','$transaction')";

    if (function_exists('mysqli_query')) {
        $r = mysqli_query($conn, $q1) or die(mysqli_error($conn));
    } else {
        $r = mysql_query($q1) or die(mysql_error($conn));
    }
    if ($r) {
        header("location: viewplots.php");
    } else {
        header("location: updatePlots.php");
    }
}

?>