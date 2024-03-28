<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Danh sách loại hàng hóa</h5>
                <form action="index.php?act=listsp" method="post">
                    <h5 class="card-title">Nhập tên</h5>
                    <input class="form-control" type="text" name="kyw">
                    <br>
                    <h5 class="card-title">Lựa chọn</h5>
                    <select class="form-control"  name="ma_loai" id="">
                        <option  value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                        }
                        ?>
                    </select>
                    <br>
                    <input class="btn btn-warning form-control" type="submit" name="listok" id="" value="Tìm kiếm">
                    <br>
                    <br>
                </form>
                <table class="table table-bordered">
                    <!-- <input type="text" name="" id=""> -->

                    <tr>
                        <th  title="Field #2">Mã Sản Phẩm</th>
                        <th  title="Field #2">Tên Sản Phẩm</th>
                        <th  title="Field #3">Giá Sản phẩm</th>
                        <th  title="Field #3">Hình</th>
                        <th  title="Field #4">Mô Tả</th>
                        <th  title="Field #5">Lượt Xem</th> 
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&ma_hh=" . $ma_hh;
                        $xoasp = "index.php?act=xoasp&ma_hh=" . $ma_hh;

                        $hinhpath = "../upload/" . $hinh;
                        if (is_file($hinhpath)) {
                            $img = "<img src='" . $hinhpath . "' height='100px'>";
                        } else {
                            $img = "Không có hình";
                        }
                        echo ' <tr>
        <td>' . $ma_hh . '</td>
        <td>' . $ten_hh . '</td>
        <td>' . $don_gia . '</td>
        <td>' . $img . '</td>
        <td>' . $mo_ta . '</td>
        <td>' . $so_luot_xem . '</td>
        <td><a href="' . $suasp . '"><input type="button" value="Sửa" class="btn btn-warning btn-sm"></a> <a href="' . $xoasp . '"><input type="button" value="Xóa" class="btn btn-danger btn-sm"></a></td>
    </tr>';
                    }

                    ?>

                </table>
                <div class="rows">
                    <!-- <input type="button" class="btn btn-default" value="CHỌN TẮT CẢ">
                    <input type="button" class="btn btn-default" value="BỎ CHỌN TẤT CẢ">
                    <input type="button" class="btn btn-default" value="XÓA CÁC MỤC ĐÃ CHỌN"> -->
                    <a href="index.php?act=addsp"><input type="button" class="btn btn-warning btn-lg" value="NHẬP THÊM"></a>

                </div>
            </div>
        </div>
    </div>
</div>
<br>