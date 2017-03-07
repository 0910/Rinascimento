<?php
  $dirname = "images/products/";
  $images = glob($dirname."*.jpg");
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rinascimento Canada</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="wemakenoise.co" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	
	<div id="page">
     <nav class="nav" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-xs-4 text-left">
            <div id="fh5co-logo">
              <a href="index.html">
                <img src="images/logo.png"/>
              </a>
            </div>
          </div>
          <div class="col-xs-8 text-right menu-1">
            <ul class="menu--shylock">
              <li class="menu__item"><a class="menu__link" href="index.html">Home</a></li>
              <li class="menu__item--curent active"><a class="menu__link" href="products.html">Products</a></li>
              <li class="menu__item"><a class="menu__link" href="lookbook.html">Lookbook</a></li>
              <li class="menu__item"><a class="menu__link" href="stores.html">Store Locator</a></li>
              <li class="menu__item"><a class="menu__link" href="#fh5co-services">Online Shop</a></li>
            </ul>
          </div>
        </div>
        
      </div>
    </nav> 
		<aside>
      <div class="section-cover" style="background-image: url(images/products.jpg);">
        <div class="vcenter">
            <div class="container">
              <span>spring / Summer 2017</span>
              <h2>Products</h2>
              <p>Scroll Down to Discover</p>
            </div>
        </div>
		  	</div>
      </div>
		</aside>

		<div id="product-section" style="padding-top: 60px;">
			<div class="container">
				<div class="row">
          <div class="col-md-4">
            <a class=" filter" data-filter="all">All</a>
          </div>
          <div class="col-md-4">
            <a class=" filter" data-filter=".tops">Tops</a>
          </div>
          <div class="col-md-4">
            <a class=" filter" data-filter=".blouses">Blouses</a>
          </div>
				</div>
				<div class="row">
          <div class="col-md-4">
            <a class=" filter" data-filter=".jackets">Jackets & Sweaters</a>
          </div>
          <div class="col-md-4">
            <a class=" filter" data-filter=".dresses">Dresses</a>
          </div>
          <div class="col-md-4">
            <a class=" filter" data-filter=".skirts">Skirts</a>
          </div>
				</div>
				<div class="row">
          <div class="col-md-4">
            <a class="last-filter  filter" data-filter=".pants">Pants</a>
          </div>
				</div>
				<div class="row products">
          <div class="container-mix">
            <?php foreach($images as $image) {
                echo '<div class="col-md-4 prod mix tops">
                        <div class="product" style="background-image: url('.$image.');">
                          <a href="#" class="view">
                            <i class="icon-plus"></i>
                          </a>
                        </div>';
            }?>
				</div>
			</div>
		</div>

		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
              <a href="index.html">
                <img src="images/logo-b.png"/>
              </a>
						</div>
						<div class="col-md-8">
              <div class="hidden-xs">
                <ul class="menu--shylock text-right">
                  <li class="menu__item--curent active"><a class="menu__link" href="index.html">Home</a></li>
                  <li class="menu__item"><a class="menu__link" href="#fh5co-project">Products</a></li>
                  <li class="menu__item"><a class="menu__link" href="#fh5co-services">Lookbook</a></li>
                  <li class="menu__item"><a class="menu__link" href="#fh5co-blog">Store Locator</a></li>
                  <li class="menu__item"><a class="menu__link" href="#fh5co-services">Online Shop</a></li>
                </ul>
              </div>
						</div>
          </div>
          <div class="row">
						<div class="col-md-6">
							<p>Copyright 2016 Rinascimento. All Rights Reserved. Made with <i class="icon-heart3"></i> by <a href="http://wemakenoise.co/" target="_blank">Noise</a></p>
						</div>
            <div class="col-md-6 text-center">
              <p class="social-icon pull-right">
                <a href="#"><i class="icon-twitter2"></i></a>
                <a href="#"><i class="icon-facebook2"></i></a>
                <a href="#"><i class="icon-instagram"></i></a>
                <a href="#"><i class="icon-dribbble2"></i></a>
                <a href="#"><i class="icon-youtube"></i></a>
              </p>
            </div>
          </div>
				</div>
			</div>
		</footer>
	
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/jquery.swipebox.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/main.js"></script>
  <script>
    $(function(){
      var mixer = mixitup('.container-mix');
    });
  </script>
	</body>
</html>

