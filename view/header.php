<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themezhub.net/kumo-demo-2/kumo/home-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 09:31:09 GMT -->

<head>
	<meta charset="utf-8" />
	<meta name="author" content="Themezhub" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Kumo- Fashion eCommerce HTML Template</title>

	<!-- Custom CSS -->
	<link href="assets/css/styles.css" rel="stylesheet">
	<script src="view/js/jquery.min.js"></script>

	<script src="view/js/bootstrap.min.js"></script>

	<link href="view/css/jquery-ui.min.css" rel="stylesheet" />
	<script src="view/js/jquery-ui.min.js"></script>

</head>

<body>

	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader"></div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		<!-- Start Navigation -->
		<div class="header header-transparent dark-text">
			<div class="container">
				<nav id="navigation" class="navigation navigation-landscape">
					<div class="nav-header">
						<a class="nav-brand" href="#">
							<img src="assets/img/logo.png" class="logo" alt="" />
						</a>
						<div class="nav-toggle"></div>
						<div class="mobile_nav">
							<ul>
								<li>
									<a href="#" onclick="openSearch()">
										<i class="lni lni-search-alt"></i>
									</a>
								</li>
								<li>
									<a href="#" data-toggle="modal" data-target="#login">
										<i class="lni lni-user"></i>
									</a>
								</li>
								<li>
									<a href="#" onclick="openWishlist()">
										<i class="lni lni-heart"></i><span class="dn-counter">2</span>
									</a>
								</li>
								<li>
									<a href="#" onclick="openCart()">
										<i class="lni lni-shopping-basket"></i><span class="dn-counter">0</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="nav-menus-wrapper" style="transition-property: none;">
						<ul class="nav-menu">

							<li><a href="#">Home</a>
								<ul class="nav-dropdown nav-submenu">
									<li><a href="index.php">Home</a></li>
								</ul>
							</li>

							<li><a href="javascript:void(0);">Product</a>
								<ul class="nav-dropdown nav-submenu">
								<li><a href="index.php?act=sanpham">Products</a></li>
									<li><a href="index.php?act=sanpham&ma_loai=53">MENS</a></li>
									<li><a href="index.php?act=sanpham&ma_loai=54">WOMENS</a></li>
									<li><a href="index.php?act=sanpham&ma_loai=55">KIDS</a></li>
									
								</ul>
							</li>

						</ul>
						<form action="index.php?act=sanpham" method="post">
						<ul class="nav-menu nav-menu-social align-to-right">
							<li>
								<!-- End Modal -->
								<!-- Tim kiem san pham -->
								<div class="input-group">				
										<input type="text" name="kyw" id="form1" class="form-control" />
									<button type="submit" class="btn btn-outline-secondary btn-sm"  name="timkiem">
										<i class="fas fa-search"></i>
									</button>
								</div>
								<!-- end Tim kiem san pham -->
								<!-- Search -->
							</li>
							</form>
							<li>
								<a href="#" data-toggle="modal" data-target="#login">
									<i class="lni lni-user"></i>
								</a>
							</li>
							<li>
								<a href="#" onclick="openWishlist()">
									<i class="lni lni-heart"></i><span class="dn-counter">2</span>
								</a>
							</li>
							<li>
								<a href="#" onclick="openCart()">
									<i class="lni lni-shopping-basket"></i><span class="dn-counter">3</span>
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->

		<!-- ============================ Hero Banner  Start================================== -->
		<div class="home-slider margin-bottom-0">

			<!-- Slide -->
			<div data-background-image="assets/img/banner-18.png" class="item">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="home-slider-container">

								<!-- Slide Title -->
								<div class="home-slider-desc">
									<div class="home-slider-title mb-4">
										<h5 class="theme-cl fs-md ft-ragular mb-0">Save up to 60% off</h5>
										<h1 class="mb-1 ft-bold lg-heading">The Best Deals<br>of The Year</h1>
										<span class="trending">There's nothing like trend</span>
									</div>

									<a href="#" class="btn stretched-link borders">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
								</div>
								<!-- Slide Title / End -->

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide -->
			<div data-background-image="assets/img/banner-19.png" class="item">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="home-slider-container">

								<!-- Slide Title -->
								<div class="home-slider-desc">
									<div class="home-slider-title mb-4">
										<h5 class="fs-md ft-ragular mb-0">Mega Sale</h5>
										<h1 class="mb-1 ft-bold lg-heading">Get up to 50% off<br>Black Friday</h1>
										<span class="trending">There's nothing like trend</span>
									</div>

									<a href="#" class="btn stretched-link borders">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
								</div>
								<!-- Slide Title / End -->

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide -->
			<div data-background-image="assets/img/banner-20.png" class="item">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="home-slider-container">

								<!-- Slide Title -->
								<div class="home-slider-desc">
									<div class="home-slider-title mb-4">
										<h5 class="theme-cl fs-sm ft-ragular mb-0">Super Sale</h5>
										<h1 class="mb-1 ft-bold lg-heading">Online<br>Fashion Shop</h1>
										<span class="trending">There's nothing like trend</span>
									</div>

									<a href="#" class="btn stretched-link borders">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
								</div>
								<!-- Slide Title / End -->

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>