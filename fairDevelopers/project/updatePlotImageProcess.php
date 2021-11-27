<?php
include('connection.php');

if(isset($_POST['submit_plot_images']))
{
    $plotName = $_POST['plotNameI'];
	$area = $_POST['areaI'];
	$price = $_POST['priceI'];
	$status = $_POST['statusI'];
	$locality = $_POST['localityI'];
	$map= $_POST['mapI'];
	$configuration = $_POST['configurationI'];
	$facing = $_POST['facingI'];
	$transaction = $_POST['transactionI'];
	$filename = $_FILES["imageI"]["name"];
	$tempname = $_FILES["imageI"]["tmp_name"];
	$folder = "assets/plotimages/".$filename;
	if (!file_exists($target_file)) {
	    move_uploaded_file($tempname, $folder);
	}


    $q1 = "insert into realestate_plots_images(plot_name,area, price, status, locality, map, configuration, facing, transaction,image) values ('$plotName','$area','$price','$status','$locality','$map','$configuration','$facing','$transaction','$filename')";
    if(function_exists('mysqli_query')){
    $r=mysqli_query($conn,$q1) or die(mysqli_error($conn));
    }
    else{
        $r=mysql_query($q1) or die(mysql_error($conn));
    }
    if($r){
        header("location: listing.php");
    }
    else{
        header("location: updatePlotsImages.php");
    }

}


?>