
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

<link rel="stylesheet" href="assets/css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>
  <style type="text/css">
    .fixed-top{
       background-color: #1A2B40;
    }
      .w3l-index3{
}

.listing-img{
  padding-top:20px;
  padding-bottom:20px;
}


.list-bullets {
    list-style: none;
}

.list-bullets li {
    display: flex;
    align-items: center;
}

.list-bullets li::before {
    content: '';
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #5784d7;
    border: 2px solid #8fb3f5;
    display: block;
    margin-right: 1rem;
}
.accordion-button::after {
      background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
      transform: scale(.7) !important;
      padding-left: 25px;

    padding-top: 16px;
    padding-bottom: 16px;
    transition: all 500ms ease;
     -webkit-transition: all 0.4s linear;
    -o-transition: all 0.4s linear;
    transition: all 0.4s linear;
    }
    .accordion-button:not(.collapsed)::after {
      background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
      padding-left: 25px;
    padding-top: 16px;
    padding-bottom: 16px;
    transition: all 500ms ease;
     -webkit-transition: all 0.4s linear;
    -o-transition: all 0.4s linear;
    transition: all 0.4s linear;

    }




/* Accordion Box Css */
.accordion-box {
    position: relative;
    display: block;
}
.accordion-box .accordion-item{
    position: relative;
    display: block;
    background: #ffffff;
    border: 1px solid #ebebeb;
    margin-bottom: 20px;
}
.accordion-box .accordion.marginbottom0{
    margin-bottom: 0;
}
.accordion-box .accordion .accord-btn {
    position: relative;
    display: block;
    cursor: pointer;
    padding-left: 25px;
    padding-right: 60px;
    padding-top: 16px;
    padding-bottom: 16px;
    transition: all 500ms ease;
}
.accordion-box .accordion .accord-btn h4 {
    color: #031f4b;
    font-size: 16px;
    line-height: 26px;
    font-weight: 500;
    transition: all 500ms ease;
}
.accordion-box .accordion .accord-btn::after {
    font-family: "Flaticon";
    position: absolute;
    content: "\f104";
    top: 50%;
    right: 25px;
    color: #0098ff;
    font-size: 16px;
    line-height: 20px;
    font-weight: 600;
    text-align: center;
    transform: translateY(-50%);
    transition: all 500ms ease 0s;
}
.accordion-box .accordion .accord-btn.active{
    -webkit-transition: all 0.4s linear;
    -o-transition: all 0.4s linear;
    transition: all 0.4s linear;
}
.accordion-box .accordion .accord-btn.active h4 {
    color: #0098ff;
}
.accordion-box .accordion .accord-btn.active:after{
    color: #031f4b;
    content: "\f105";
}

.accordion-box .accordion .accord-content {
    position: relative;
    display: block;
    padding-left: 25px;
    padding-right: 60px;
    padding-bottom: 19px;
    display: none;
}
.accordion-box .accordion .accord-content.collapsed {
    display: block;
}
.accordion-box .accordion .accord-content p {
    color: #777777;
    font-size: 14px;
    line-height: 30px;
    font-weight: 400;
    margin: 0;
}

/***
=============================================
    Faq Content Area Css
=============================================
***/
.faq-content-area{
    position: relative;
    display: block;
    padding: 50px 0 85px;
}
.faq-content-area .layer-outer{
    position: absolute;
    top: 200px;
    left: 0;
    right: 0;
    bottom: 0;
    background-attachment: scroll;
    background-position: center top;
    background-repeat: no-repeat;
    background-size: auto;
    opacity: .60;
}



.faq-content-box-style2 .accordion-box .accordion .accord-btn {
    padding-left: 30px;
    padding-right: 60px;
    padding-top: 21px;
    padding-bottom: 21px;
}
.faq-content-box-style2 .accordion-box .accordion .accord-btn h4 {
    font-size: 18px;
    line-height: 26px;
}
.faq-content-box-style2 .accordion-box .accordion .accord-content p {
    font-size: 16px;
    line-height: 30px;
}
.faq-content-box-style2 .accordion-box .accordion .accord-content {
    padding-left: 30px;
    padding-right: 60px;
    padding-bottom: 24px;
}


.question-form{
    position: relative;
    display: block;
    padding-top: 80px;
}
.question-form form input[type="text"],
.question-form form input[type="email"],
.question-form form textarea{
    position: relative;
    display: block;
    background: #ffffff;
    border: 1px solid #dddddd;
    width: 100%;
    height: 60px;
    margin-bottom: 20px;
    padding: 0 25px;
    color: #777777;
    font-size: 14px;
    font-weight: 400;
    border-radius: 7px;
    transition: all 500ms ease;
    font-family: 'Roboto', sans-serif;
}
.question-form form textarea{
    height: 150px;
    padding: 15px 25px;
}
.question-form form button {
    width: 200px;
    margin: 0 auto;
    display: block;
}
.sec-title {
    position: relative;
    display: block;
}
.sec-title h3{
    color: #0098ff;
    font-size: 18px;
    line-height: 26px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .01em;
    font-family: 'Roboto', sans-serif;
}
.sec-title h2{
    color: #777777;
    font-size: 36px;
    line-height: 48px;
    font-weight: 400;
    text-transform: capitalize;
    margin: 14px 0 0;
}
.sec-title h2 span{
    color: #031f4b;
    font-weight: 700;
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
            </li>
             <li class="nav-item active"><a class="nav-link"
              href="services.php">Services</a></li>
              <li class="nav-item active"><a class="nav-link"
              href="contact.php">Contact Us</a></li>
          </ul>
      </nav>
    </div>
  </header>




  <!--/header-->
 
<!--/header-->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about pt-5">
        <div class="container pt-lg-5 py-3">
        </div>
    </div>
</section>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span>Services</li>
        </ul>
    </div>
</section>





<!--Start Faq content Area-->
<section class="faq-content-area">
    <div class="layer-outer float-bob-y" style="background-image: url(assets/plotimages/faq-content-area-bg.png)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="faq-content-box-style2">
                    <div class="sec-title text-center">
                        <!-- <h3>Look Here</h3> -->
                        <h2>Here are some of our Services</h2>
                    </div>
                    <div class="m-4">
<div class="accordion-box">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Real Estate</button>                  
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
  


     <ul class="list-bullets">
                        <li class="mb-2">Land / Building – Buying & Selling.</li>
                        <li class="mb-2">Layout Promoting & Marketing the property.</li>
                        <li class="mb-2">All the Land Legal aspect we will do.</li>
                        <li class="mb-2">Property Maintenance we will do. </li>
                        <li class="mb-2">Property Boundary and Survey the property we will do.</li>
                    </ul>
<br>
<p>Your have to register your Land for buying & selling to our company we have visit the site and verify all the document and we have nominal charges for Registration.</p>
<p>We have to approach our Clients directly.</p>
<p>We have all over Tamil nadu Customer data base of the Buying & selling.</p>
<p>We have deal with our registered client only.</p>
<p>The Property finalise the customer we will charge service charges both end.</p>
<p>All the legal aspect the property, Property survey & document preparation we will do.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Building Construction</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                   <p>We are one of the most-esteemed buildings construction company. We have earned this respect through the quality and long-lasting structures that we have developed over the years.</p>
                   <p>One of the secrets behind our success is our ability to understand our client’s need. Customer satisfaction is our first priority and we therefore strive to ensure that all our client’s specifications are achieved.</p>
                   <br>
                   <p>We proved a wide range of buildings construction depending on the specifications given. Some of our services include:</p>
                   <br>
                    
                    <ul class="list-unstyled list ">
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-building mr-3 text-primary"></i>Building of bungalows.</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-home mr-3 text-primary"></i>Building of houses.</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-industry mr-3 text-primary"></i>Construction of factories.</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-align-justify mr-3 text-primary"></i>Building of shop lots. </li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-university mr-3 text-primary"></i>building of landed houses.</li>
                    </ul>
            
            <p>We can implement any structural design provided by the client. Our architects also offer the best structural designs. We therefore can get a detailed description of what the client wants, make a design of the structure and then construct it.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Renovation Services</button>                     
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>We also aim to provide fair renovation services, thereby refurbishing your furniture as well as interiors using all our expertise and technical skills. We have extended our renovation services in the following fields:
                </div>
            </div>
        </div>



        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">Project Management</button>                     
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>Our services of project management make sure to review all the work that we are serving upon all our clients and customers. The project management services that we provide cover the activities such as review of all work drawings as well as specifications, approval of all the materials, supervision of the operation carried out by our team as well as a timely inspection at the job site in order to make sure that all our functions and services are carried out as per the specifications.</p>
                    <br>
                    <p>Our structures are made by a team of talented and highly-trained building professionals under the supervision of certified engineers. Our professional has diverse skills including foundation and groundwork, precast construction services, architectural services, public works, infrastructures, interior designs among other skills. Our workforce is driven by a set of core values some of which are integrity and accountability. These core values give our workforce a sense of responsibility and self-drive.</p>
                    <br>
                    <p>Effective construction requires the use of machines. We understand this and we have state-of-the-art machinery to aid in the construction of any structure. Some of these include long formworks and shoring, excavators among other essential construction equipment. These equipment’s help us to effectively follow our timeline and to complete all the substructures and eventually the whole building in a time.</p>
                </div>
            </div>
        </div>




        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive">Office Furniture</button>                     
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>Our services of built-in furniture for your house or workplace are not only as per the recent trends of furniture, but the same complies with all the standards of superiority in terms of their quality as well as overall performance. We provide consultation as well as offer all kinds of solutions to the best suit for all your home as well as office needs. From providing Luxurious Presidential office set to a variety of Executive stations and furniture for your homes – we serve anything and everything as according to the needs as well as preference of all our customers.</p>
                </div>
            </div>
        </div>





        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix">Space Optimization</button>                     
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>We at KYP Builders help you to figure out the apt square footage which is necessary to run your business. We also assist you as to the evaluation of the spaces that you are considering for either leasing or purchasing for your own business. Our service of space optimization makes sure that we provide you with the best consultation and advice.</p>
                </div>
            </div>
        </div>




        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven">Budget Development</button>                     
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>One of the best things that we have associated ourselves is the flexibility in terms of budget. The services that we provide aren’t merely designed for a particular set of budget and thus we are flexible enough to work in all kinds of budgets, big or small. We also aid you in determining an accurate budget for the construction as well as renovation services. We work in all kinds of budgets and for all kinds of building as well as designing purposes.</p>
                </div>
            </div>
        </div>



        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight">After Sales Service</button>                     
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>We are a team of technically knowledgeable, competent as well as well-trained personnel who altogether serve to our existing customers at their best. We are always ready to fetch the after sale assistance whenever and wherever required by our clients.</p>
                </div>
            </div>
        </div>


         <div class="accordion-item">
            <h2 class="accordion-header" id="headingNine">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseNine">Interior Services</button>                     
            </h2>
            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p class="mt-3"><span class="fa fa-check" style="color: green" aria-hidden="true"></span> Design and prototype using Sketch up Rendering and AutoCAD for an excellent output prior to building the products.</p>
                    <p  class="mt-3"><span class="fa fa-check" style="color: green" aria-hidden="true"></span> Produced in different types of plywood & Veneer based on the Customer specification and requirement.</p>
                    <p class="mt-3"><span class="fa fa-check" style="color: green" aria-hidden="true"></span> Finished with Laminate, Acrylic, PU Coat & Polish as desired by the customer.</p>
                    <br>
                    <h4 class="mb-3">Design Proposal</h4>

     <ul class="list-bullets">
                        <li class="mb-3">Space planning interior space as per the initial questionnaire and space analysis.</li>
                        <li class="mb-3">Identifying the client identity and incorporating this into design presentation.</li>
                        <li class="mb-3">Interior suggestions to work within your environment.</li>
                        <li class="mb-3">Lighting solutions to work with your design, enhancing the final layout.</li>
                        <li class="mb-3">3D Renderings and designs to give you an idea of the look and feel of your new home/office.</li>
                    </ul>

                     <h4 class="mb-3">Home Interior</h4>

                     <ul class="list-unstyled list " style="
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 0 20px;">
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Interior Design & Decoration</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Gypsum Partition/ wooden & False Ceiling</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Wall Cladding & Wall Decorative Painting & Wall Paper</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Lightings</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Foyer (Foyer Console / Shoe rack)</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Moulder Kitchen / Accessories </li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Bedroom Furniture,Kids Room Furniture and Study Room Furniture</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Wardrobe & Cupboard Covering & Loft covering)</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Dining Tables & Crockery Unit</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Hall – Divider /TV Unit & Showcase</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>DHome Theatre (Acoustic & Sound Proofing)</li>
                    </ul>

                     <h4 class="mb-3">Office Interior</h4>

                     <ul class="list-unstyled list " style="
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 0 20px;">
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Partitions (Full Height / Half height)</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>False Celling – Gypsum / Grid </li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Workstation ( Half & Full Height )</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Manager cabin </li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Conference Table</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>File Storage</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Display Rack</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Ready Made Furniture</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Data Cabling</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>CCTV Camera</li>
                        <li class="mb-3 d-flex align-items-center"><i class="fa fa-asterisk mr-3 text-primary"></i>Landscaping & Others</li>
                    </ul>

                </div>
            </div>
        </div>




    </div>
  </div>
</div>
                </div>
            </div>

        </div>





    </div>
</section>
<!--End Faq content Area-->



<!-- //stats -->
<?php
include ("footer.php");

?>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
 
<script src="assets/css/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>


  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>

<!-- jQuery and Bootstrap JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- owlcarousel -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for blog post slider -->
<script>
  $(document).ready(function () {
    $('.owl-blog').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        480: {
          items: 1,
          nav: true
        },
        700: {
          items: 1,
          nav: true
        },
        1090: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for blog post slider -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      nav: false,
      margin: 50,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        736: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- MENU-JS -->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
 <script>
function myFunction() {
  var elmnt = document.getElementById("steps");
  elmnt.scrollIntoView();
}
</script>
<!-- //MENU-JS -->

<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>