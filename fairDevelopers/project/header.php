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

<main style="
    min-height: 85vh;
  background-image: url(assets/plotimages/faq-content-area-bg.png)
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
              href="login.php">Home</a></li>
						<li class="nav-item active"><a class="nav-link"
							href="viewplots.php">View Plots</a></li>
						<li class="nav-item active"><a class="nav-link"
							href="updatePlots.php">Update Plots</a></li>
						<li class="nav-item active"><a class="nav-link"
							href="viewPlots.php">View Images</a></li>
						<li class="nav-item active"><a class="nav-link"
							href="updatePlots.php">Update Images</a></li>
						</li>
					</ul>
					
			
			</nav>
		</div>
	</header>
	<!--/header-->

	<section class="w3l-about-breadcrumb">
		<div class="breadcrumb-bg breadcrumb-bg-about pt-5">
			<div class="container pt-lg-5 py-3"></div>
		</div>
	</section>
	


 
	
	<script src="assets/js/jquery-3.3.1.min.js"></script>

    	<script>
document.documentElement.setAttribute('data-theme', 'light');
</script>
	<!-- theme switch js (light and dark)-->

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
	<!-- //MENU-JS -->

	<!-- bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>