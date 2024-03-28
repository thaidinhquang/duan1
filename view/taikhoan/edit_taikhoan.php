<div class="container m-auto">
    <article class="col-sm-9">
        <div class="panel panel-default form-group-lg">
            <div class="panel-heading"><h3>Cập nhật tài khoản</h3></div>
            <div class="panel-body ">
                <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    Email
                    <input type="email" name="email" value="<?=$email?>" class="form-control">
                    <br>
                    <br>
                    User
                    <input type="text" name="user" value="<?=$user?>"class="form-control">
                    <br>
                    <br>
                    Password
                    <input type="password" name="pass" value="<?=$pass?>"class="form-control">
                    <br>
                    <br>
                    Dia Chi
                    <input type="text" name="address" value="<?=$address?>"class="form-control">
                    <br>
                    <br>
                    Điện thoại
                    <input type="text" name="tel" value="<?=$tel?>"class="form-control">
                    <br>
                    <br>
                    <input type="hidden" name="id" value="<?=$id?>"class="form-control">
                    <input type="submit" value="Cập nhật" name="capnhat" class="btn btn-md bg-dark text-light fs-md ft-medium">
                    <input type="reset" value="Nhập lại" class="btn btn-md bg-dark text-light fs-md ft-medium">
                </form>
                <h2 class="text-primary">
                <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                ?>
                </h2>
            </div>
        </div>
    </article>
</div>