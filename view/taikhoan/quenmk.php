<div class="container">
    <div class="row">
        <article class="col-sm-9">
            <div class="panel panel-default form-group-lg">
                <div class="panel-heading"><h5>Quên mật khẩu</h5></div>
                <div class="panel-body ">
                    <form action="index.php?act=quenmk" method="post">
                        <div class="form-group">
                            <label class="text-dark">Email *</label>
                            <input type="text" name="email" class="form-control" placeholder="First Name" required />
                        </div>
                        <input type="submit" value="Gửi" name="guiemail" class="btn btn-md bg-dark text-light fs-md ft-medium">
                        <input type="reset" value="Nhập lại" class="btn btn-md bg-dark text-light fs-md ft-medium">
                    </form>
                    <h5 class="text-primary">
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        }
                        ?>
                    </h5>
                </div>
            </div>
        </article>
    </div>
</div>