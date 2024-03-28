<div class="container-fluid">
<div class="text-center d-block  ">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="card bg-danger text-white">
                                    <div class="card-body">
                                        <h2 class="card-title">Tổng doanh thu</h2>
                                        <h4 class="card-subtitle text-white">
                                            <?= tong_doanh_thu() ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card bg-success text-white">
                                    <div class="card-body">
                                        <h2 class="card-title">Doanh thu tháng</h2>
                                        <h4 class="card-subtitle text-white">
                                            <?= tong_doanh_thu_thang() ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <h2 class="card-title">Doanh thu ngày</h2>
                                        <h4 class="card-subtitle text-white">
                                            <?= tong_doanh_thu_ngay() ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Thống kê</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th>Mã danh mục</th>
                            <th>tên danh mục</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thâp nhất</th>
                            <th>Giá trung bình</th>

                            <th></th>
                        </tr>
                        <?php
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            echo ' <tr>
        <td>' . $madm . '</td>
        <td>' . $tendm . '</td>
<td>' . $countsp . '</td>
        <td>' . $maxprice . '</td>
        <td>' . $minprice . '</td>
        <td>' . $avgprice . '</td>
    </tr>';
                        }

                        ?>

                    </table>
                    

                    <div class="rows">
                        <a href="index.php?act=bieudo"><input type="button" class="btn btn-default"
                                value="Xem Biểu Đồ"></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
