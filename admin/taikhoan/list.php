<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Danh sách tài khoản </h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Mã TK</th>
                        <th>TEN DANG NHAP</th>
                        <th>MAT KHAU</th>
                        <th>EMAIL</th>
                        <th>DIA CHI</th>
                        <th>DIEN THOAI</th>
                        <th>VAI TRO</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk = "index.php?act=suatk&id=" . $id;
                        $xoatk = "index.php?act=xoatk&id=" . $id;
                        echo ' <tr>
        <td>' . $id . '</td>
        <td>' . $user . '</td>
        <td>' . $pass . '</td>
        <td>' . $email . '</td>
        <td>' . $address . '</td>
        <td>' . $tel . '</td>
        <td>' . $role . '</td>
        <td><a href="' . $suatk . '"><input type="button" value="Sửa" class="btn btn-warning btn-sm"></a> <a href="' . $xoatk . '"><input type="button" value="Xóa" class="btn btn-danger btn-sm"></a></td>
    </tr>';
                    }

                    ?>

                </table>
                <div class="rows">
                    <!-- <input type="button" class="btn btn-default" value="CHỌN TẮT CẢ">
                    <input type="button" class="btn btn-default" value="BỎ CHỌN TẤT CẢ">
                    <input type="button" class="btn btn-default" value="XÓA CÁC MỤC ĐÃ CHỌN"> -->


                </div>
            </div>
        </div>
    </div>
</div>
<br>