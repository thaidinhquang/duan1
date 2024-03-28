<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Thêm mới loại hàng hóa </h5>
                <form action="index.php?act=adddm" method="post">
                    <br>
                    <label for="">Mã Loại</label>
                    <input type="text" name="maloai" disabled>
                    <br>
                    <label for="">Tên Loại</label>
                    <input type="text" name="ten_loai">
                    <span style="color:red">
                        <?= $errors['name'] ?? '' ?>
                    </span>
                    <br>
                    <br>
                    <input type="submit" name="themmoi" class="btn btn-default" value="Thêm mới" id="">
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