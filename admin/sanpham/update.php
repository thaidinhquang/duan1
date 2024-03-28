<?php
if (is_array($sanpham)) {
    extract($sanpham);
  
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
    $img = "<img src='" . $hinhpath . "' height='100px'>";
} else {
    $img = "Không có hình";
}

?>
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cập nhật hàng hóa </h5>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <label for="">Danh mục</label>
                    <select name="ma_loai" id="">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            if ($ma_loai == $ma_hh) $s = "selected";
                            else $s = "";
                            echo '<option value="' . $ma_loai . '" ' . $s . '>' . $ten_loai . '</option>';
                        }
                        ?>
                    </select>

                    <br>
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="ten_hh" value="<?= $ten_hh ?>">

                    <br>
                    <label for="">Giá sản phẩm</label>
                    <input type="text" name="don_gia" value="<?= $don_gia ?>">

                    <br>
                    <label for="">Hình ảnh</label>
                    <input type="file" name="hinh">
                    <br>
                    <?= $img ?>

                    <br>
                    <label for="">Mô tả</label>
                    <textarea type="text" name="mo_ta" cols="30" rows="10"><?= $mo_ta ?></textarea>
                    <br>

                    <input type="hidden" name="ma_hh" id="" value="<?= $ma_hh ?>">
                    <input type="submit" name="capnhat" class="btn btn-default" value="Cập nhật" id="">
                    <input type="reset" name="" class="btn btn-default" value="nhập lại" id="">
                    <a href="index.php?act=listsp"><input type="button" class="btn btn-default" value="Danh sách"></a>
                    <br>
                    <br>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                    <br>
                </form>s
            </div>
        </div>
    </div>
</div>