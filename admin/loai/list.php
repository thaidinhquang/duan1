<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Danh sách loại hàng hóa </h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&ma_loai=" . $ma_loai;
                        $xoadm = "index.php?act=xoadm&ma_loai=" . $ma_loai;
                        echo ' <tr>
        <td>' . $ma_loai . '</td>
        <td>' . $ten_loai . '</td>
        <td><a href="' . $suadm . '"><input type="button" value="Sửa" class="btn btn-warning btn-sm"></a> <a href="' . $xoadm . '"><input type="button" value="Xóa" class="btn btn-danger btn-sm"></a></td>
    </tr>';
                    }

                    ?>

                </table>
                <div class="rows">
                    <a href="index.php?act=adddm"><input type="button"  class="btn btn-warning btn-lg" value="NHẬP THÊM"></a>

                </div>
            </div>
        </div>
    </div>
</div>
<br>