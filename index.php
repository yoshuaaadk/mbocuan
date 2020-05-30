<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Mbocuan Project</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
        include 'data.php';
        //echo "<p>".$sta."</p>";
        ?>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	<!-- header fixed -->
	<div class="wrap_header fixed-header2 trans-0-4">
		<!-- Logo -->
		<a href="index.html" class="logo">
			<img src="images/icons/mbocuan-logo.png" alt="IMG-LOGO">
		</a>

		<!-- Menu -->
		<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li class="sale-noti">
						<a href="#">Home</a>
						<!--SUB MENU-->
						<!-- <ul class="sub_menu">
							<li><a href="index.html">Homepage V1</a></li>
							<li><a href="home-02.html">Homepage V2</a></li>
							<li><a href="home-03.html">Homepage V3</a></li>
						</ul> -->
					</li>

					<li>
						<a href="whatsnew.php">What's New</a>
					</li>

					<li>
						<a href="product.php">Men</a>
					</li>

					<li>
						<a href="product.php">Collection</a>
					</li>

					<li>
						<a href="contact.php">Services</a>
					</li>

					<li>
						<a href="about.php">About</a>
					</li>

					<!-- <li>
						<a href="contact.php">Contact</a>
					</li> -->
				</ul>
			</nav>
        </div>

		<!-- Header Icon -->
		<div class="header-icons">
			<a href="about.php" class="header-wrapicon1 dis-block">
				<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
			</a>

			<span class="linedivide1"></span>

			<div class="header-wrapicon2">
				<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
				<span class="header-icons-noti">0</span>

				<!-- Header cart noti -->
				<!-- <div class="header-cart header-dropdown">
					<ul class="header-cart-wrapitem">
						<li class="header-cart-item">
							<div class="header-cart-item-img">
								<img src="images/item-cart-01.jpg" alt="IMG">
							</div>

							<div class="header-cart-item-txt">
								<a href="#" class="header-cart-item-name">
									White Shirt With Pleat Detail Back
								</a>

								<span class="header-cart-item-info">
									1 x $19.00
								</span>
							</div>
						</li>

						<li class="header-cart-item">
							<div class="header-cart-item-img">
								<img src="images/item-cart-02.jpg" alt="IMG">
							</div>

							<div class="header-cart-item-txt">
								<a href="#" class="header-cart-item-name">
									Converse All Star Hi Black Canvas
								</a>

								<span class="header-cart-item-info">
									1 x $39.00
								</span>
							</div>
						</li>

						<li class="header-cart-item">
							<div class="header-cart-item-img">
								<img src="images/item-cart-03.jpg" alt="IMG">
							</div>

							<div class="header-cart-item-txt">
								<a href="#" class="header-cart-item-name">
									Nixon Porter Leather Watch In Tan
								</a>

								<span class="header-cart-item-info">
									1 x $17.00
								</span>
							</div>
						</li>
					</ul>

					<div class="header-cart-total">
						Total: $75.00
					</div>

					<div class="header-cart-buttons">
						<div class="header-cart-wrapbtn">
							
							<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
								View Cart
							</a>
						</div>

						<div class="header-cart-wrapbtn">
							
							<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
								Check Out
							</a>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>

	<!-- top noti -->
	<div class="flex-c-m size22 bg0 s-text21 pos-relative">
		Release Soon!
		<a href="product.php" class="s-text22 hov6 p-l-5">
			See Product
		</a>

		<button class="flex-c-m pos2 size23 colorblack eff3 trans-0-4 btn-romove-top-noti">
			<i class="fa fa-remove fs-13" aria-hidden="true"></i>
		</button>
	</div>

	<!-- Header -->
	<header class="header2">
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<!-- Logo2 -->
				<a href="index.html" class="logo2">
					<img src="images/icons/mbocuan-logo.png" alt="IMG-LOGO">
				</a>

				<div class="topbar-child2">
					<span class="topbar-email">
						mbocuan@gmail.com
					</span>

					<!-- <div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>USD</option>
							<option>EUR</option>
						</select>
					</div> -->

					<!--  -->
					<a href="about.php" class="header-wrapicon1 dis-block m-l-30">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2 m-r-13">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<!-- <div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>

			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li class="sale-noti">
								<a href="#">Home</a>
								<!-- <ul class="sub_menu">
									<li><a href="index.html">Homepage V1</a></li>
									<li><a href="home-02.html">Homepage V2</a></li>
									<li><a href="home-03.html">Homepage V3</a></li>
								</ul> -->
							</li>

							<li>
								<a href="whatsnew.php">What's New</a>
							</li>

							<li>
								<a href="product.php">Men</a>
							</li>

							<li>
								<a href="product.php">Collection</a>
							</li>

							<li>
								<a href="contact.php">Services</a>
							</li>

							<li>
								<a href="about.php">About</a>
							</li>

							<!-- <li>
								<a href="contact.php">Contact</a>
							</li> -->
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">

				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="images/icons/mbocuan-logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="about.php" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu">
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							New Project Coming Soon!
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								mbocuan@gmail.com
							</span>

							<!-- <div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div> -->
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="#">Home</a>
						<!-- <ul class="sub-menu">
							<li><a href="index.html">Homepage V1</a></li>
							<li><a href="home-02.html">Homepage V2</a></li>
							<li><a href="home-03.html">Homepage V3</a></li>
						</ul> 
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i> -->
					</li>

					<li class="item-menu-mobile">
						<a href="whatsnew.php">What's New</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.php">Men</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.php">Collection</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.php">Services</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.php">About</a>
					</li>

					<!-- <li class="item-menu-mobile">
						<a href="contact.php">Contact</a>
					</li> -->
				</ul>
			</nav>
		</div>
	</header>

	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/main-photo-mbocuan.jpg);">
					<div class="layer-item-slick1">
						<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
							<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22"
								data-appear="fadeInUp">
								Mbocuan Project
							</h2>
				
							<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="fadeInDown">
								New Collection Releases
							</span>
				
							<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
								<!-- Button -->
								<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="item-slick1 item2-slick1" style="background-image: url(images/master-slide-06.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="rollIn">
							Leather Bags
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="lightSpeedIn">
							New Collection 2018
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							
							<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div> -->

				<!-- <div class="item-slick1 item3-slick1" style="background-image: url(images/master-slide-02.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="rotateInDownLeft">
							Leather Bags
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="rotateInUpRight">
							New Collection 2018
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							
							<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div> -->

			</div>
		</div>
	</section>

	<!-- Banner -->
	<!-- <div class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-05.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Sunglasses
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-03.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Watches
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-10.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Bags
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->


	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					Our Products
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#new-releases" role="tab">New Releases</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#featured" role="tab">Featured</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#sale" role="tab">Sale</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">Top Rate</a>
					</li> -->
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-35">
					<!-- - -->
					<div class="tab-pane fade show active" id="new-releases" role="tabpanel">
						<div class="row">
							<!-- <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="images/item-02.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Herschel supply co 25l
										</a>

										<span class="block2-price m-text6 p-r-5">
											$75.00
										</span>
									</div>
								</div>
							</div> -->

							<!-- <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/item-08.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Denim jacket blue
										</a>

										<span class="block2-price m-text6 p-r-5">
											$92.50
										</span>
									</div>
								</div>
							</div> -->

							<!-- <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/item-10.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Coach slim easton black
										</a>

										<span class="block2-price m-text6 p-r-5">
											$165.90
										</span>
									</div>
								</div>
							</div> -->

							<!-- <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img src="images/item-06.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Herschel supply co 25l
										</a>

										<span class="block2-price m-text6 p-r-5">
											$75.00
										</span>
									</div>
								</div>
							</div> -->

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/tshirt-front-white.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="location.href = 'product-detail-white-tshirt.php';">
													See Details
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											<?php echo $nama_tshirt_putih; ?>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<?php echo $harga_tshirt; ?>
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/tshirt-front-black.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="location.href = 'product-detail-black-tshirt.php';">
													See Details
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											<?php echo $nama_tshirt_hitam; ?>
										</a>

										<span class="block2-price m-text6 p-r-5">
                                        <?php echo $harga_tshirt; ?>
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/tshirt-front-red.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="location.href = 'product-detail-red-tshirt.php';">
													See Details
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
										<?php echo $nama_tshirt_merah; ?>
										</a>

										<span class="block2-price m-text6 p-r-5">
                                        <?php echo $harga_tshirt; ?>
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/tshirt-front-gray.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="location.href = 'product-detail-gray-tshirt.php';">
													See Details
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
										<?php echo $nama_tshirt_abu; ?>
                                        </a>
                                        <span class="block2-price m-text6 p-r-5">
                                        <?php echo $harga_tshirt; ?>
										</span>

										<!-- <span class="block2-oldprice m-text7 p-r-5">
											$29.50
										</span> -->
                                        <!-- package if discount -->
										<!-- <span class="block2-newprice m-text8 p-r-5">
											$15.90
										</span> -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- FEATURED TAB -->
					<!-- <div class="tab-pane fade" id="featured" role="tabpanel">
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img src="images/item-07.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Frayed denim shorts
										</a>

										<span class="block2-oldprice m-text7 p-r-5">
											$29.50
										</span>

										<span class="block2-newprice m-text8 p-r-5">
											$15.90
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="images/item-01.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Herschel supply co 25l
										</a>

										<span class="block2-price m-text6 p-r-5">
											$75.00
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/item-14.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Denim jacket blue
										</a>

										<span class="block2-price m-text6 p-r-5">
											$92.50
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="images/item-06.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Herschel supply co 25l
										</a>

										<span class="block2-price m-text6 p-r-5">
											$75.00
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img src="images/item-11.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Frayed denim shorts
										</a>

										<span class="block2-oldprice m-text7 p-r-5">
											$29.50
										</span>

										<span class="block2-newprice m-text8 p-r-5">
											$15.90
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="images/item-12.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Herschel supply co 25l
										</a>

										<span class="block2-price m-text6 p-r-5">
											$75.00
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/item-15.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Denim jacket blue
										</a>

										<span class="block2-price m-text6 p-r-5">
											$92.50
										</span>
									</div>
								</div>
							</div>
						</div>
					</div> -->

					<!-- SALE TAB -->
					<!--<div class="tab-pane fade" id="sale" role="tabpanel">
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
							
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img src="images/item-01.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												 <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Herschel supply co 25l
										</a>

										<span class="block2-price m-text6 p-r-5">
											$75.00
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img src="images/item-14.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Denim jacket blue
										</a>

										<span class="block2-price m-text6 p-r-5">
											$92.50
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img src="images/item-06.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Herschel supply co 25l
										</a>

										<span class="block2-price m-text6 p-r-5">
											$75.00
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img src="images/item-08.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Denim jacket blue
										</a>

										<span class="block2-price m-text6 p-r-5">
											$92.50
										</span>
									</div>
								</div>
							</div>
						</div>
					</div> -->

					<!-- TOP RATE TAB -->
					<!-- <div class="tab-pane fade" id="top-rate" role="tabpanel">
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="images/item-02.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Herschel supply co 25l
										</a>

										<span class="block2-price m-text6 p-r-5">
											$75.00
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/item-03.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Denim jacket blue
										</a>

										<span class="block2-price m-text6 p-r-5">
											$92.50
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/item-05.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Coach slim easton black
										</a>

										<span class="block2-price m-text6 p-r-5">
											$165.90
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img src="images/item-07.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Frayed denim shorts
										</a>

										<span class="block2-oldprice m-text7 p-r-5">
											$29.50
										</span>

										<span class="block2-newprice m-text8 p-r-5">
											$15.90
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/item-10.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Coach slim easton black
										</a>

										<span class="block2-price m-text6 p-r-5">
											$165.90
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img src="images/item-11.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Frayed denim shorts
										</a>

										<span class="block2-oldprice m-text7 p-r-5">
											$29.50
										</span>

										<span class="block2-newprice m-text8 p-r-5">
											$15.90
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="images/item-12.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Herschel supply co 25l
										</a>

										<span class="block2-price m-text6 p-r-5">
											$75.00
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/item-15.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Denim jacket blue
										</a>

										<span class="block2-price m-text6 p-r-5">
											$92.50
										</span>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>


	<!-- Banner video -->
	<section class="parallax0 parallax100" style="background-image: url(images/grayscale-cloting-hang.jpg);">
		<div class="overlay0 p-t-190 p-b-200">
			<div class="flex-col-c-m p-l-15 p-r-15">
				<span class="m-text9 p-t-45 fs-20-sm">
					Made with
				</span>

				<h3 class="l-text1 fs-35-sm">
					Passion
				</h3>

				<span class="btn-play s-text4 hov5 cs-pointer p-t-25" data-toggle="modal" data-target="#modal-video-01">
					<i class="fa fa-play" aria-hidden="true"></i>
					Play Video
				</span>
			</div>
		</div>
	</section>


	<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<!-- <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-02.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								T-shirt
							</a>
						</div>
					</div>

					
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-05.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								
							</a>
						</div>
					</div>
				</div> -->

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!--block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/tshirt_categoryfix.jpg" alt="IMG-BENNER" style="filter: brightness(80%);">

						<div class="block1-wrapbtn w-size2">

							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								T-Shirt
							</a>
						</div>
					</div>


					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/whatnew_ok.jpg" alt="IMG-BENNER" style="filter: brightness(80%);">

						<div class="block1-wrapbtn w-size2">

							<a href="whatsnew.php" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								What's New
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">

					<div class="block1 hov-img-zoom pos-relative m-b-30" >
						<img src="images/men_categoryfix.jpg" alt="IMG-BENNER" style="filter: brightness(80%);">

						<div class="block1-wrapbtn w-size2">

							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Men
							</a>
						</div>
					</div>


					<div class="block2 wrap-pic-w pos-relative m-b-30">
						<img src="images/icons/bg-01.jpg" alt="IMG">

						<div class="block2-content sizefull ab-t-l flex-col-c-m">
							<h4 class="m-text4 t-center w-size3 p-b-8">
								Story?
							</h4>

							<p class="t-center w-size4">
								We'd like to please you with our new water-proof collection.
							</p>

							<div class="w-size2 p-t-25">

								<a href="about.php" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
									Look
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Blog -->
	<!-- <section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Our Blog
				</h3>
			</div>

			<div class="row">
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-01.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									Black Friday Guide: Best Sales & Discount Codes
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span>

							<p class="s-text8 p-t-16">
								Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-02.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									The White Sneakers Nearly Every Fashion Girls Own
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 18, 2017</span>

							<p class="s-text8 p-t-16">
								Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-03.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									New York SS 2018 Street Style: Annina Mislin
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 2, 2017</span>

							<p class="s-text8 p-t-16">
								Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula porttitor. Fusce sit amet maximus nunc
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<!-- Instagram -->
	<!-- <section class="instagram p-t-20">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			<h3 class="m-text5 t-center">
				@ follow us on Instagram
			</h3>
		</div>

		<div class="flex-w">
			
			<div class="block4 wrap-pic-w">
				<img src="images/gallery-03.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			
			<div class="block4 wrap-pic-w">
				<img src="images/gallery-07.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			
			<div class="block4 wrap-pic-w">
				<img src="images/gallery-09.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			
			<div class="block4 wrap-pic-w">
				<img src="images/gallery-13.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			<div class="block4 wrap-pic-w">
				<img src="images/gallery-15.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>
		</div>
	</section> -->

	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					New Outstanding Technology
				</h4>

				<span class="s-text11 t-center">
					Waterproof tech on your clothes
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					Quick Respond
				</h4>

				<span class="s-text11 t-center">
					Several standby-admin that serve your needs on our social media
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Store Opening
				</h4>

				<span class="s-text11 t-center">
					Shop open from Monday to Sunday
				</span>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Any questions? Let us know in our social media below or call us on (+62) 81 9909 90990
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="product.php" class="s-text7">
							Men
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							T Shirt
						</a>
					</li>

					<!-- <li class="p-b-9">
						<a href="#" class="s-text7">
							Dresses
						</a>
					</li> -->

					<!-- <li class="p-b-9">
						<a href="#" class="s-text7">
							Sunglasses
						</a>
					</li> -->
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="whatsnew.php" class="s-text7">
							What's New
						</a>
					</li>

					<li class="p-b-9">
						<a href="about.php" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="contact.php" class="s-text7">
							Services
						</a>
					</li>

					<!-- <li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li> -->
				</ul>
			</div>

			<!-- <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div> -->

			<!-- <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div> -->
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/Nt8ZrWY2Cmk?rel=0&amp;showinfo=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		/*$('.block2-btn-addcart').each(function(){
		/	var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		}); */

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "Thank you for your rate!", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
