<?php

	if($post_id==1){
		$category = 'Lifestyle'; $title = 'MISSING THE BAHAMAS'; $img = 'post_1.jpg';$amp_page='missing-the-bahamas.amp.html';
	} else if($post_id==2){
		$category = 'Travel'; $title = 'REVOLVE IN MEXICO'; $img = 'post_2.jpg';$amp_page='revolve-in-mexico.amp.html';
	} else if($post_id==3){
		$category = 'Travel'; $title = 'EXPLORING REDWOOD'; $img = 'post_3.jpg';$amp_page='exploring-redwood.amp.html';
	} else if($post_id==4){
		$category = 'Lifestyle'; $title = 'SPRING INSPIRATION'; $img = 'post_4.jpg';$amp_page='spring-inspiration.amp.html';
	} else if($post_id==5){
		$category = 'Travel'; $title = 'TRIP IN BRAZIL'; $img = 'post_6.jpg';$amp_page='trip-in-brazil.amp.html';
	} else if($post_id==6){
		$category = 'Travel'; $title = 'HAPPY LIFETIME'; $img = 'post_7.jpg';$amp_page='happy-lifetime.amp.html';
	} else {
		$title = 'HOME';
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title;?> | AMP Demo </title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  
  <link rel="amphtml" href="http://amp.quadzero.in/amp-pages/<?php echo $amp_page;?>" >
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:300,400%7COpen+Sans:400,400i,700%7CLibre+Baskerville:400i' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/sliders.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/spacings.css" />
  <link rel="stylesheet" href="css/animate.min.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body class="relative">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
      <div></div>
    </div>
  </div>

  <div class="main-wrapper oh">

    <header class="nav-type-1 transparent sticky-nav" style="margin-bottom: 50px;">
    
      <nav class="navbar navbar-fixed-top">
        <div class="navigation" style="background-color: #555;">
          <div class="container relative">

            <div class="row">

              <div class="navbar-header">
                <!-- Logo -->
                <div class="logo-container">
                  <div class="logo-wrap">
                    <a href="index.php">
                      <img class="logo" src="img/logo_light.png" alt="logo">
                    </a>
                  </div>
                </div>
                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button> -->
              </div> <!-- end navbar-header -->


              <div class="col-md-12 nav-wrap">
                <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                  
                  <ul class="nav navbar-nav">

                    <!-- <li class="dropdown active">
                      <a href="index.html">Home</a><i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="index.html">Classic</a></li>
                        <li><a href="index-2.html">Hero Slider</a></li>
                        <li><a href="index-3.html">Modern</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#">Pages</a><i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="blog-single.html">Single Post Sidebar</a>
                        </li>
                        <li>
                          <a href="blog-single-full-width.html">Single Post Full Width</a>
                        </li>
                        <li>
                          <a href="shortcodes.html">Shortcodes</a>
                        </li>
                        <li>
                          <a href="typography.html">Typography</a>
                        </li>
                        <li>
                          <a href="404.html">404</a>
                        </li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#">Categories</a><i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Travel</a></li>
                      </ul>
                    </li>

                    <li>
                      <a href="about.html">About</a>
                    </li>

                    <li>
                      <a href="contact.html">Contact</a>
                    </li>

                    <li id="mobile-search" class="hidden-lg hidden-md">
                      <form method="get" class="mobile-search">
                        <input type="search" class="form-control" placeholder="Search...">
                        <button type="submit" class="search-button">
                          <i class="icon icon_search"></i>
                        </button>
                      </form>
                    </li> -->
        
                  </ul> <!-- end menu -->
                </div> <!-- end collapse -->
              </div> <!-- end col -->

              <!-- side menu -->
              <div class="side-menu right hidden-sm hidden-xs">
                <div class="nav-inner menu-socials social-icons">
                  <div class="right">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
              </div> <!-- end side menu -->
          
            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
    </header>
