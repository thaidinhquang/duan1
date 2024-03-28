<?php
if (isset($dm)) {

    extract($dm);
}
?>
<div class="row float-none">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
                <form action="index.php?act=updatedm" method="post">
                    <br>
                    <input type="text" name="ten_loai" value="<?php if (isset($ten_loai) && ($ten_loai != "")) echo $ten_loai; ?>"> Tên loại
                    <br>
                    <span style="color:red">
                        <?= $errors['name'] ?? '' ?>
                    </span>
                    <br>
                    <input type="hiden" name="ma_loai" value="<?php if (isset($ma_loai) && ($ma_loai > 0)) echo $ma_loai; ?>">
                    <br>
                    <br>
                    <input type="submit" name="capnhat" class="btn btn-default" value="Cập nhật" id="">
                    <input type="reset" name="" class="btn btn-default" value="nhập lại" id="">
                    <a href="index.php?act=listdm"><input type="button" class="btn btn-default" value="Danh sách"></a>
                    <br><br>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>