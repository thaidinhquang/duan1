<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Danh sách bình luận </h5>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Nội dung</th>
                        <th>IDuser</th>
                        <th>IDpro</th>
                        <th>Ngày Bình Luận</th>

                        <th></th>
                    </tr>
                    <?php
                    foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);
                        $suabl = "index.php?act=suabl&id=" . $id;
                        $xoabl = "index.php?act=xoabl&id=" . $id;
                        echo ' <tr>
        <td>' . $id . '</td>
        <td>' . $noidung . '</td>
        <td>' . $iduser . '</td>
        <td>' . $idpro . '</td>
        <td>' . $ngay_bl . '</td>
        <td> <a href="' . $xoabl . '"><input type="button" value="Xóa" class="btn btn-danger btn-sm"></a></td>
    </tr>';
                    }

                    ?>

                </table>
                <div class="rows">
                    <input type="button" class="btn btn-warning btn-lg" value="XÓA CÁC MỤC ĐÃ CHỌN">

                </div>
            </div>
        </div>
    </div>
</div>
<br>