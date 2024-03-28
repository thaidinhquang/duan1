<section class="middle">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <?php
                extract($onesp);
                $hinh = $img_path . $hinh;
                echo '<img class="img-thumbnail" src ="' . $hinh . '"><br>';
                ?>
            </div>
            <!-- bắt đầu -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="prd_details">

                    <div class="prt_01 mb-1"><span class="text-purple bg-light-purple rounded py-1">Tên trang phục</span></div>
                    <div class="prt_02 mb-3">
                        <h2 class="ft-bold mb-1"><?= $ten_hh  ?></h2>
                        <div class="text-left">
                            <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="small">(412 Reviews)</span>
                            </div>
                            <div class="elis_rty"><span class="ft-bold theme-cl fs-lg mr-2"><?= $don_gia ?></span><span class="ft-regular text-light bg-success py-1 px-2 fs-sm">In Stock</span></div>
                        </div>
                    </div>

                    <div class="prt_03 mb-4">
                        <p><?= $mo_ta ?></p>
                    </div>
                    <div class="prt_05 mb-4">
                        <div class="form-row mb-7">
                            <div class="col-12 col-lg">
                                <!-- Submit -->
                                <!--  Bắt đầu làm button giỏ hàng -->
                                <?php
                                echo '
                                <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="ma_hh" value="' . $ma_hh . '">
                                    <input type="hidden" name="ten_hh" value="' . $ten_hh . '">
                                    <input type="hidden" name="hinh" value="' . $hinh . '">
                                    <input type="hidden" name="don_gia" value="' . $don_gia . '">
                                    <input type="submit" name="addtocart" class="btn btn-block custom-height bg-dark mb-2" value="Add to card">
                                </form>
                               ' ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- kết thúc -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            $(document).ready(function() {

                $("#binhluan").load("view/binhluan/binhluanform.php", {
                    idpro: <?= $ma_hh ?>
                });
            });
        </script>
        <div  class="" id="binhluan"></div>
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Sản phẩm cùng loại</div>
            <div class="panel-body">
                <?php
                foreach ($sp_cung_loai as $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $linksp = "index.php?act=sanphamct&ma_hh" . $ma_hh;
                    echo '<li><a href="' . $linksp . '">' . $ten_hh . '</a></li>';
                }
                ?>
            </div>
        </div>
    </div>
</section>