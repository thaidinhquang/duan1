<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Thêm mới hàng hóa </h5>
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">

                    <label for="">Danh Mục</label>
                    <select name="ma_loai" id="">
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                        }
                        ?>

                    </select>


                    <br>
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="ten_hh">
                     
                    <br> 
                    <label for="">Giá sản phẩm</label>
                    <input type="text" name="don_gia">

                    <br>
                    <label for="">Hình ảnh</label>
                    <input type="file" name="hinh">

                    <br>
                    <label for="">Mô tả</label>
                    <br>
                    <textarea name="mo_ta" id="" cols="30" rows="10"></textarea>
                    <br>


                    <input type="submit" name="themmoi" class="btn btn-default" value="Thêm mới" id="">
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
                </form>
            </div>
        </div>
    </div>
</div>