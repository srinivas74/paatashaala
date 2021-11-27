<?php
include ("connection.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (function_exists('mysqli_query')) {
        $plotQuery = mysqli_query($conn, "select * from realestate_plots_images where id=id='$id' and is_deleted=false");
        $plotRow = mysqli_fetch_row($query);
    } else {
        $plotQuery = mysql_query("select * from realestate_plots_images where id=id='$id' and is_deleted=false");
        $plotRow = mysql_fetch_row($query);
    }
}
?>