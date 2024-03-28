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
            foreach ($dssp as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&ma_hh" . $ma_hh;
                $hinh = $img_path . $hinh;
                if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                $linksp = "index.php?act=sanphamct&ma_hh=" . $ma_hh;
                echo '<div class="col-md-4"' . $mr . '">
                            <div class="thumbnail text-center">
                                <a class="card-img-top"  href="#">
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
                            <form action="index.php?act=addtocart" method="post">
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
            <!-- ... -->
        </div>
    </div>
</section>