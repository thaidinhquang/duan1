<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách hóa đơn</h5>
                    <!-- <div class="row"> -->
                        <!-- <div class="col-md-6 col-lg-2 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                    <h6 class="text-white">Đơn hàng mới</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                    <h6 class="text-white">Đơn hàng mới</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                    <h6 class="text-white">Đơn hàng mới</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                    <h6 class="text-white">Đơn hàng mới</h6>
                                </div>
                            </div>
                        </div> -->
                    <!-- </div> -->
                    <table class="table table-bordered">
                        <tr>
                            <th>MÃ ĐƠN HÀNG</th>
                            <th>KHÁCH HÀNG</th>
                            <th>Số lượng</th>
                            <th>GIÁ TRỊ ĐƠN HÀNG</th>
                            <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                            <th>NGÀY ĐẶT HÀNG</th>
                            <th>THAO TÁC</th>
                        </tr>
                        <?php
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $xoabill = "index.php?act=xoabill&id=" . $id;
                            $suabill = "index.php?act=suabill&id=" . $id;
                            $ctbill = "index.php?act=ctbill&id=" . $id;
                            $kh = $bill["bill_name"] . '
            <br> ' . $bill["bill_email"] . '
            <br> ' . $bill["bil_address"] . '
            <br> ' . $bill["bill_tel"];
                            $ttdh = get_ttdh($bill["bill_status"]);
                            $countsp = loadall_cart_count($bill['id']);
                            echo ' <tr>
        <td>' . $bill['id'] . '</td>
        <td>' . $kh . '</td>
        <td>' . $countsp . '</td>
        <td><strong>' . $bill['total'] . '</strong> VNĐ</td>
        <td>' . $ttdh . '</td>
        <td>' . $bill['ngaydathang'] . '</td>
        <td> <a href="' . $xoabill . '"><input type="button" value="Xóa" class="btn btn-warning btn-sm"></a>
              <a href="' . $suabill . '"> <input type="button" value="Sửa" class="btn btn-danger btn-sm"></a> <br> <br><a href="' . $ctbill . '"><input type="button" value="Chi tiet" class="btn btn-danger btn-sm"></a>
        </td>
    </tr>';
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <br>