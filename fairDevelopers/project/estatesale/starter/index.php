
<?php
include ("connection.php");
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

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>
 <!--  <style type="text/css">
    .fixed-top{
      background-color: #344B66;
    }
  </style> -->



  <!--/header-->
  <style type="text/css">
    

   .w3l-index3{
}
 .carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.listing-img{
  padding-top:20px;
  padding-bottom:20px;
}
.carousel-caption {
    padding-top: 15em;
}
.text-center {
    text-align: center !important;
}

.carousel-caption p {
       font-size: 30px;
    color: #fff;
    line-height: 30px;
    margin-bottom: 15px;
    letter-spacing: 0;
}

.carousel-caption h2 {
    

            font-size: 40px;
    color: #fff;
    vertical-align: top;
    line-height: 60px;
    font-weight: 600;
  }



.carousel-caption  .demo a {
  position: absolute;
  bottom: 20px;
  left: 48%;
  z-index: 2;
  display: inline-block;
  transform: translate(0, 100%);
  color: #fff;
  letter-spacing: 1px;
  text-decoration: none;
  transition: opacity .3s;
  font-weight: 600; }

.carousel-caption  .demo a:hover {
  opacity: .5; }

.carousel-caption #bottom a {
  padding-top: 70px; }

.carousel-caption  #bottom a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  transform: rotate(-45deg);
  -webkit-animation: sdb05 1.5s infinite;
  animation: sdb05 1.5s infinite;
  box-sizing: border-box; }

.carousel-caption{
    transform: translateY(-70%);
    bottom: initial;
    top: 50%;
}

@media (max-width: 576px) {

.carousel-caption p {
       font-size: 25px;
    color: #fff;
    line-height: 30px;
    margin-bottom: 15px;
    letter-spacing: 0;
}

.carousel-caption h2 {
    

            font-size: 35px;
    color: #fff;
    vertical-align: top;
    line-height: 60px;
    font-weight: 600;
  }
}





  </style>

  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
        <h1>
          <a class="navbar-brand" href="index.php"> <span class="fa fa-home"></span>
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
              href="index.php">Home</a></li>
            <li class="nav-item active"><a class="nav-link"
              href="listing.php">Listing</a></li>
            <li class="nav-item active"><a class="nav-link"
              href="about.php">About Us</a></li>
              <li class="nav-item active"><a class="nav-link"
              href="services.php">Services</a></li>
              <li class="nav-item active"><a class="nav-link"
              href="contact.php">Contact Us</a></li>
      
          </ul>
      </nav>
    </div>
  </header>



















<section>
    
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="10000">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner text-center" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('assets/plotimages/na.jpg')">
        <div class="carousel-caption d-md-block">
          <p>It's great to be home!</p>
                        <h2>Find a property today</h2>
                        <section id="bottom" class="demo">
                        <a href="#bottom"><span></span>Scroll</a>
                    </section>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('assets/plotimages/ab.jpg')">
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('assets/plotimages/ac.jpg')">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</section>

<section class="w3l-index3" style="padding-top:70px" id="about">
    <div class="midd-w3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pr-lg-0">
                    <div class="w3l-left-img">
                    </div>
                </div>
                <div class="col-lg-7 pl-lg-0">
                    <div class="w3l-right-info">
                        <h6 class="title-small">Who we are</h6>
                        <p class="mt-4">We are Fair Developers, Chennai one of the most reputed firm of Real Estate, Building Construction, Renovation and Interior that aims to provide one-step solution and services to all kinds of your construction, building and designing services
                        </p>
                        <p class="mt-3">With the following points as our major aims and objectives, we strive towards bringing perfection in all kinds of services that we offer:</p>
                        <ul class="w3l-right-book w3l-right-book-grid mt-md-5 mt-4">
                            <li><span class="fa fa-check" aria-hidden="true"></span>Total focus on clients needs</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Cooperative approach</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Professionalism</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Integrity</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Problem solving ability</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Personalized services</li>
                        </ul>
                       <a href="about.php" class="btn btn-style btn-primary mt-5">Discover About Us</a>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
<div style="padding-top:70px"></div>

<section class="w3l-bottom-grids"  id="steps">
   <div class="heading text-center mx-auto">
                <h3 class="title-big">Our Services</h3>
            </div>
    <div class="container py-lg-5 py-md-4 py-2">
     
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-4 col-md-6 grids-feature">
                <div class="area-box no-box-shadow">
                    <span class="fa fa-industry"></span>
                    <h4><a href="#feature" class="title-head">Real Estate</a></h4>
                    <p>Land / Building – Buying & Selling</p><p>
Layout Promoting & Marketing the property</p><p>
All the Land Legal aspect we will do</p><p>
Property Maintenance we will do </p><p>
Property Boundary and Survey the property we will do
</p>


                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                <div class="area-box no-box-shadow">
                    <span class="fa fa-home"></span>
                    <h4><a href="#feature" class="title-head">Building Construction</a></h4>
                    <p>We are one of the most-esteemed buildings construction company. We have earned this respect through the quality and long-lasting structures that we have developed over the years.</p>
                     <a href="services.php" class="more">More Services <span class="fa fa-long-arrow-right"></span> </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                <div class="area-box no-box-shadow">
                    <span class="fa fa-building-o"></span>
                    <h4><a href="#feature" class="title-head">Interior Services</a></h4>
                    <p>We also aim to provide fair renovation services, thereby refurbishing your furniture as well as interiors using all our expertise and technical skills. We have extended our renovation services in the following fields:</p>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<!--/header-->
<section class="locations-1" id="locations">
    <div class="locations py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="heading text-center mx-auto">
                <h3 class="title-big">Properties</h3>
            </div>
            <div class="row pt-md-5 pt-4">






<?php
    if (function_exists('mysqli_fetch_array')) {
        $nquery=mysqli_query($conn, "select * from `realestate_plots_images`  where is_deleted=false order by id desc LIMIT 6");
        while ($row = mysqli_fetch_array($nquery)) {
             $arr = array(
                "id" => $row["id"],
                "image" => '../../assets/plotimages/' . $row["image"],
                "facing" => str_replace(" ", "*#*", $row["facing"]),
                "map" => str_replace(" ", "*#*", $row["map"]),
                "configuration" => str_replace(" ", "**", $row["configuration"]),
                "locality" => str_replace(" ", "*#*", $row["locality"]),
                "area" => str_replace(" ", "*#*", $row["area"]),
                "transaction" => str_replace(" ", "*#*", $row["transaction"]),
                "status" => str_replace(" ", "*#*", $row["status"]),
                "plotname" => str_replace(" ", "*#*", $row["plot_name"]),
                "price" => str_replace(" ", "*#*", $row["price"])
            );

            $jsonRow = json_encode($arr);
            echo ' <div class="col-lg-4 col-md-6 listing-img">
<div data-toggle="modal" data-target="#basicExampleModal"  data-row=' . $jsonRow . '>
                        <div class="box16">' . ' <img src="../../assets/plotimages/' . $row["image"] . '" alt="" class="img-fluid">' . '
                            <div class="box-content">
                                <h3 class="title">RS.' . $row["price"] . '</h3>
                                 <span class="post">' . $row["plot_name"] .'
                            </div><!-- box-content  -->
                        </div><!-- box16 -->
                 
                </div><!-- modal  -->
                   

</div><!-- col-lg-4 col-md-6 listing-img  -->



 <div
      class="modal fade"
      id="basicExampleModal"
      tabindex="-1"
      aria-labelledby="exampleModal1Label"
      aria-hidden="true"
    >
     <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
<h4 class="plot-name">' . $row["plot_name"] . '</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
</div><!-- model header -->
<div class="modal-body">
<div class="row">


              <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">



      <img class="plotimage d-block w-100" src="../../assets/plotimages/' . $row["image"] . '" >







              </div>

 <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 ">  

<div class="grey-bg container-fluid">
    <div class="row">


      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Build up area</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="area">' . $row["area"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>



      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Average price for square feet</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="price">' . $row["price"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>



      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Possession status</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="status">' . $row["status"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>



      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Locality</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="locality">' . $row["locality"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>



      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Map</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="map">' . $row["map"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Configuration</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="configuration">' . $row["configuration"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>



      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Facing</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="facing">' . $row["facing"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>



      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Transaction</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="transaction">' . $row["transaction"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>


 




      </div>
  </div>




</div>
</div><!-- row-->

        </div><!-- model body -->
      </div><!-- model content -->
    </div><!-- model dialog -->

    </div><!-- model fade -->



';
        }
    } else {
        include ('mysqlversionindex.php');
    }
    ?>
    





            </div>
        </div>
    </div>
</section>


<section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
        <div class="container pb-lg-5 pb-md-4 pb-2">
            <div class="row">
                <div class="col-lg-5 pr-lg-0">
                    <div class="w3l-left-img1">
                    </div>
                </div>
                <div class="col-lg-7 pl-lg-0">
                    <div class="w3l-right-info">
                        <h6 class="title-small">Our clients</h6>
                        <div class="client-grid">
                            <div class="client-title">
                                <h3 class="title-big">We value client relationships</h3>
                            </div>
                            <div class="clients-info">
                                <h3 class="title-big">45,200</h3>
                                <p>Satisfied customers</p>
                            </div>
                        </div>

                        <div class="w3l-clients" id="testimonials">
                            <div id="owl-demo1" class="owl-carousel owl-theme mt-4 pt-2 mb-4">
                                <div class="item">
                                    <div class="testimonial-content">
                                        <div class="testimonial">
                                            <div class="testi-des">
                                                <div class="peopl align-self">
                                                    <h4>John wilson</h4>
                                                    <p class="indentity">Communication executive</p>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <q>OMG! I cannot believe that I have got a property new private house after
                                                    getting villa. It was very comfortable. I can't say enough about Real Estate</q>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-content">
                                        <div class="testimonial">
                                            <div class="testi-des">
                                                <div class="peopl align-self">
                                                    <h4>Julia sakura</h4>
                                                    <p class="indentity">Digital Marketer</p>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <q>OMG! I cannot believe that I have got a property new private house after
                                                    getting villa. It was very comfortable. I can't say enough about Real Estate</q>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-content">
                                        <div class="testimonial">
                                            <div class="testi-des">
                                                <div class="peopl align-self">
                                                    <h4>John wilson</h4>
                                                    <p class="indentity">Web Developer</p>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <q>OMG! I cannot believe that I have got a property new private house after
                                                    getting villa. It was very comfortable. I can't say enough about Real Estate</q>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-content">
                                        <div class="testimonial">
                                            <div class="testi-des">
                                                <div class="peopl align-self">
                                                    <h4>Julia sakura</h4>
                                                    <p class="indentity">Digital Marketer</p>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <q>OMG! I cannot believe that I have got a property new private house after
                                                    getting villa. It was very comfortable. I can't say enough about Real Estate</q>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#agents" class="btn btn-style btn-primary mt-5">Contact our agents</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- //bottom-grids-->
    </section>

<!--  //News section -->
 <!-- footers 20 -->

<?php
include ("footer.php");

?>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>


<?php
include ("javascriptScripts.php");

?>

<script>
$('#basicExampleModal').on('show.bs.modal', function (event) {
   var button = $(event.relatedTarget)
   var plot= button.data('row')
  var modal = $(this)
  modal.find('.plot-name').html((plot.plotname).replace("*#*", " "))
  modal.find('.area').html((plot.area).replace("*#*", " "))
  modal.find('.price').html((plot.price).replace("*#*", " "))
  modal.find('.status').html((plot.status).replace("*#*", " "))
  modal.find('.locality').html((plot.locality).replace("*#*", " "))
  modal.find('.map').html((plot.map).replace("*#*", " "))
  modal.find('.configuration').html((plot.configuration).replace("*#*", " "))
  modal.find('.facing').html((plot.facing).replace("*#*", " "))
  modal.find('.transaction').html((plot.transaction).replace("*#*", " "))
  modal.find('.plotimage').attr("src",plot.image)
  modal.find('.deleteImage').attr("href","deleteplotImages.php?checkid="+plot.id+"&filename="+plot.image)
})

</script>
