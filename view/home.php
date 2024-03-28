<!-- ============================ Hero Banner End ================================== -->

<!-- ========================= Category Style ========================== -->
<section class="middle">
	<div class="container">
		<div class="row no-gutters exlio_gutters">

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
				<div class="single_cats">
					<a href="#" class="cards card-overflow card-scale">
						<div class="bg-image" style="background:url(assets/img/offer-1.png)no-repeat;"></div>
						<div class="ct_body">
							<div class="ct_body_caption left">
								<div class="p-5 d-flex align-items-center justify-content-center circle theme-bg text-center">
									<h2 class="m-0 ft-bold lh-1 text-light text-upper position-absolute">50%<span class="d-block fs-sm">Off</span></h2>
								</div>
							</div>
							<div class="ct_footer left">
								<span class="stretched-link fs-md">Shop For Women's <i class="ti-arrow-circle-right"></i></span>
							</div>
						</div>
					</a>
				</div>

			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
				<div class="single_cats">
					<a href="#" class="cards card-overflow card-scale">
						<div class="bg-image" style="background:url(assets/img/offer-2.png)no-repeat;"></div>
						<div class="ct_body">
							<div class="ct_body_caption left">
								<div class="p-5 d-flex align-items-center justify-content-center circle theme-bg text-center">
									<h2 class="m-0 ft-bold lh-1 text-light text-upper position-absolute">40%<span class="d-block fs-sm">Off</span></h2>
								</div>
							</div>
							<div class="ct_footer left">
								<span class="stretched-link fs-md">Shop For Men's <i class="ti-arrow-circle-right"></i></span>
							</div>
						</div>
					</a>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- ============================ Category Style =============================== -->
<!-- <div class="panel panel-default">
    <div class="panel-footer">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw">
            <input type="submit" name="timkiem" value="Tim kiem">
        </form>
    </div>
</div> -->

<!-- ======================= Products Lists ======================== -->
<section class="space min pt-0">
	<div class="container">
			<ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<a class="nav-link" href="#mens" id="mens-tab" data-toggle="tab" role="tab" aria-controls="mens" aria-selected="false">
						<?php
						foreach ($dsdm as $ds) {
							extract($ds);


							$linkdm = "index.php?act=sanpham&ma_loai=" . $ma_loai;
							echo '<a href="' . $linkdm . '" class="col-xs-6 col-md-4">' . $ten_loai . '</a>';
						}
						?>
					</a>
				</li>
			</ul>
		<div class="row">
			<?php
			$i = 0;
			foreach ($spnew as $sp) {
				extract($sp);
				$hinh = $img_path . $hinh;
				if (($i == 2) || ($i == 5) || ($i == 8)) {
					$mr = "";
				} else {
					$mr = "mr";
				}
				// chi tiet san pham
				$linksp = "index.php?act=sanphamct&ma_hh=" . $ma_hh;
				echo '<div class="col-md-4"' . $mr . '">
                            <div class="thumbnail text-center">
                                <a class="card-img-top d-block overflow-hidden"  href="' . $linksp . '">
                                    <img class="img-thumbnail" src="' . $hinh . '">
                                </a>
								<div class="elis_rty">
                                <div class="ft-bold text-dark fs-sm">
                                    <span lass="ft-bold text-dark fs-sm">$ ' . $don_gia . ' </span>
                                    <p>
									<h5 class="fs-md mb-0 lh-1 mb-1">
									<a href="' . $linksp . '">' . $ten_hh . '</a></h5> 
                                    </p>
                                </div>
								</div>
                            </div>
							<form action="index.php?act=login" method="post">
							<input type="hidden" name="ma_hh" value="' . $ma_hh . '">
							<input type="hidden" name="ten_hh" value="' . $ten_hh . '">
							<input type="hidden" name="hinh" value="' . $hinh . '">
							<input type="hidden" class="" name="don_gia" value="' . $don_gia . '">
							<input type="submit" name="addtocart" class="btn btn-block custom-height bg-dark mb-2" value="Add to card">
						</form>
							
                            </div>';


				$i += 1;
			}
			?>
		</div>
	</div>
</section>
<!-- 
<form action="index.php?act=addtocart" method="post">
	<input type="hidden" name="id" value="'.$id.'">
	<input type="hidden" name="name" value="'.$name.'">
	<input type="hidden" name="hinh" value="'.$hinh.'">
	<input type="hidden" name="price" value="'.#price.'">
	<input type="submit" name="addtocart" value="Add To Cart">
</form> -->

<!-- ======================= Deals of The Day ====================== -->
<section class="bg-cover" style="background:url(assets/img/bg.jpg) no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12">

				<div class="deals_wrap text-center">
					<h4 class="ft-medium">Get up to -40% Off</h4>
					<h2 class="ft-bold">Only Summer Collections</h2>
					<div id="countdown" class="mt-5">
						<ul>
							<li><span id="days"></span>days</li>
							<li><span id="hours"></span>Hours</li>
							<li><span id="minutes"></span>Minutes</li>
							<li><span id="seconds"></span>Seconds</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- ======================= Deals of The Day ====================== -->

<!-- ======================= Customer Review ======================== -->
<section>
	<div class="container">

		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec_title position-relative text-center">
					<h2 class="off_title">Testimonials</h2>
					<h3 class="ft-bold pt-3">Client Reviews</h3>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
				<div class="reviews-slide px-3">

					<!-- single review -->
					<div class="single_review">
						<div class="sng_rev_thumb">
							<figure><img src="assets/img/team-1.jpg" class="img-fluid circle" alt="" /></figure>
						</div>
						<div class="sng_rev_caption text-center">
							<div class="rev_desc mb-4">
								<p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
							</div>
							<div class="rev_author">
								<h4 class="mb-0">Mark Jevenue</h4>
								<span class="fs-sm">CEO of Addle</span>
							</div>
						</div>
					</div>

					<!-- single review -->
					<div class="single_review">
						<div class="sng_rev_thumb">
							<figure><img src="assets/img/team-2.jpg" class="img-fluid circle" alt="" /></figure>
						</div>
						<div class="sng_rev_caption text-center">
							<div class="rev_desc mb-4">
								<p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
							</div>
							<div class="rev_author">
								<h4 class="mb-0">Henna Bajaj</h4>
								<span class="fs-sm">Aqua Founder</span>
							</div>
						</div>
					</div>

					<!-- single review -->
					<div class="single_review">
						<div class="sng_rev_thumb">
							<figure><img src="assets/img/team-3.jpg" class="img-fluid circle" alt="" /></figure>
						</div>
						<div class="sng_rev_caption text-center">
							<div class="rev_desc mb-4">
								<p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
							</div>
							<div class="rev_author">
								<h4 class="mb-0">John Cenna</h4>
								<span class="fs-sm">CEO of Plike</span>
							</div>
						</div>
					</div>

					<!-- single review -->
					<div class="single_review">
						<div class="sng_rev_thumb">
							<figure><img src="assets/img/team-4.jpg" class="img-fluid circle" alt="" /></figure>
						</div>
						<div class="sng_rev_caption text-center">
							<div class="rev_desc mb-4">
								<p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
							</div>
							<div class="rev_author">
								<h4 class="mb-0">Madhu Sharma</h4>
								<span class="fs-sm">Team Manager</span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- ======================= Customer Review ======================== -->

<!-- ======================= Instagram Start ============================ -->
<section class="p-0">
	<div class="container-fluid p-0">

		<div class="row no-gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec_title position-relative text-center">
					<span class="fs-md ft-bold theme-cl">@mahak_71</span>
					<h3 class="ft-bold lh-1">From Instagram</h3>
				</div>
			</div>
		</div>

		<div class="row no-gutters">

			<div class="col">
				<div class="_insta_wrap">
					<div class="_insta_thumb">
						<a href="javascript:void(0);" class="d-block"><img src="assets/img/i-1.png" class="img-fluid" alt="" /></a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="_insta_wrap">
					<div class="_insta_thumb">
						<a href="javascript:void(0);" class="d-block"><img src="assets/img/i-2.png" class="img-fluid" alt="" /></a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="_insta_wrap">
					<div class="_insta_thumb">
						<a href="javascript:void(0);" class="d-block"><img src="assets/img/i-3.png" class="img-fluid" alt="" /></a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="_insta_wrap">
					<div class="_insta_thumb">
						<a href="javascript:void(0);" class="d-block"><img src="assets/img/i-7.png" class="img-fluid" alt="" /></a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="_insta_wrap">
					<div class="_insta_thumb">
						<a href="javascript:void(0);" class="d-block"><img src="assets/img/i-8.png" class="img-fluid" alt="" /></a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="_insta_wrap">
					<div class="_insta_thumb">
						<a href="javascript:void(0);" class="d-block"><img src="assets/img/i-4.png" class="img-fluid" alt="" /></a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="_insta_wrap">
					<div class="_insta_thumb">
						<a href="javascript:void(0);" class="d-block"><img src="assets/img/i-5.png" class="img-fluid" alt="" /></a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="_insta_wrap">
					<div class="_insta_thumb">
						<a href="javascript:void(0);" class="d-block"><img src="assets/img/i-6.png" class="img-fluid" alt="" /></a>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>
<!-- ======================= Instagram Start ============================ -->

<!-- ============================= Customer Features =============================== -->
<section class="px-0 py-3 br-top">
	<div class="container">
		<div class="row">

			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				<div class="d-flex align-items-center justify-content-start py-2">
					<div class="d_ico">
						<i class="fas fa-shopping-basket theme-cl"></i>
					</div>
					<div class="d_capt">
						<h5 class="mb-0">Free Shipping</h5>
						<span class="text-muted">Capped at $10 per order</span>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				<div class="d-flex align-items-center justify-content-start py-2">
					<div class="d_ico">
						<i class="far fa-credit-card theme-cl"></i>
					</div>
					<div class="d_capt">
						<h5 class="mb-0">Secure Payments</h5>
						<span class="text-muted">Up to 6 months installments</span>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				<div class="d-flex align-items-center justify-content-start py-2">
					<div class="d_ico">
						<i class="fas fa-shield-alt theme-cl"></i>
					</div>
					<div class="d_capt">
						<h5 class="mb-0">15-Days Returns</h5>
						<span class="text-muted">Shop with fully confidence</span>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				<div class="d-flex align-items-center justify-content-start py-2">
					<div class="d_ico">
						<i class="fas fa-headphones-alt theme-cl"></i>
					</div>
					<div class="d_capt">
						<h5 class="mb-0">24x7 Fully Support</h5>
						<span class="text-muted">Get friendly support</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- ======================= Customer Features ======================== -->


<!-- ============================ Footer Start ================================== -->