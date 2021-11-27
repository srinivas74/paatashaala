<?php
include("connection.php");
	include("session.php");
?>








<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Estate sale - Real Estate Category Bootstrap Responsive Website
  Template - Listing : W3layouts</title>

<!-- google fonts -->
<link
  href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap"
  rel="stylesheet">

  <!-- bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>
<main style="
    min-height: 85vh;
">
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
        <h1>
          <a class="navbar-brand" href="admin.php"> <span class="fa fa-home"></span>
            FAIR DEVELOPERS
          </a>
        </h1>
        <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index.html">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button"
          data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span> <span
            class="navbar-toggler-icon fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-lg-5 mr-auto">
            <li class="nav-item active"><a class="nav-link"
              href="admin.php">Home</a></li>
            <li class="nav-item active"><a class="nav-link"
              href="viewplots.php">View Plots</a></li>
            <li class="nav-item active"><a class="nav-link"
              href="updatePlots.php">Update Plots</a></li>
            <li class="nav-item active"><a class="nav-link"
              href="listing.php">View Images</a></li>
            <li class="nav-item active"><a class="nav-link"
              href="updatePlotsImages.php">Update Images</a></li>
            </li>
          </ul>
         <ul class="nav navbar-nav navbar-right">
            <li style="align-content: center">
              <button type="submit" class="btn btn-outline-danger" data-toggle="modal"
                data-target="#exampleModalCenterLogout">Logout
              </button>
            </li>
          </ul>
      
      </nav>
    </div>
  </header>


<div class="modal fade" id="exampleModalCenterLogout" tabindex="-1"
                role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Are you
                        sure want to logout ?</h5>
                      <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary"
                        data-dismiss="modal">No</button>
                      <button type="button" class="btn btn-success">
                        <a style="color: white" href="logout.php">Yes</a>
                      </button>
                    </div>
                  </div>
                </div>
              </div>




<style type="text/css">


  
.masthead {
  position: relative;
  width: 100%;
  height: auto;
  min-height: 35rem;
  padding: 15rem 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 75%, #000 100%), url("assets/plotimages/a8.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
}
.masthead h1, .masthead .h1 {
  font-family: "Varela Round", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 1.9rem;
  line-height: 1.9rem;
  background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0));
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
          background-clip: text;
}
.masthead h2, .masthead .h2 {
  max-width: 20rem;
  font-size: 1rem;
}
@media (min-width: 768px) {
  .masthead h1, .masthead .h1 {
    font-size: 4rem;
    line-height: 4rem;
  }
}
@media (min-width: 992px) {
  .masthead {
    height: 100vh;
    padding: 0;
  }
  .masthead h1, .masthead .h1 {
    font-size: 3.5rem;
    line-height: 3.5rem;
  }
  .masthead h2, .masthead .h2 {
    max-width: 30rem;
    font-size: 1.25rem;
  }
}

</style><!-- 
<section class="w3l-breadcrumb">
  <div class="container">
    <ul class="breadcrumbs-custom-path">
      <li><a href="admin.php">Home</a></li>
    </ul>
  </div>
</section>
 -->

 <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Welcome Admin</h1>
                        <br>
                        <a class="btn btn-outline-info" href="listing.php">Get Started</a>
                    </div>
                </div>
            </div>
        </header>

<?php
include ("footer.php");

?>

<?php
include ("javascriptScripts.php");

?>
