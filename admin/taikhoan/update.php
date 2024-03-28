<?php
if (is_array($dm)) {
    extract($dm);
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
                    <h5 class="card-title">Cập nhật tài khoản </h5>
                    <form action="index.php?act=updatetk" method="post">
                        <br>
                        <input type="text" name="user" value="<?php if (isset($user) && ($user != "")) echo $user; ?>"> user
                        <br>
                        <input type="password" name="pass" value="<?php if (isset($pass) && ($pass != "")) echo $pass; ?>"> pass
                        <br>
                        <input type="email" name="email" value="<?php if (isset($email) && ($email != "")) echo $email; ?>"> email
                        <br>
                        <input type="text" name="address" value="<?php if (isset($address) && ($address != "")) echo $address; ?>"> address
                        <br>
                        <input type="text" name="tel" value="<?php if (isset($tel) && ($tel != "")) echo $tel; ?>"> tel
                        <br>
                        <input type="text" name="role" value="<?php if (isset($role) && ($role != "")) echo $role; ?>"> role
                        <br>
                        <br>
                        <input type="hiden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                        <br>
                        <br>
                        <input type="submit" name="capnhat" class="btn btn-default" value="Cập nhật" id="">
                        <input type="reset" name="" class="btn btn-default" value="nhập lại" id="">
                        <a href="index.php?act=listtk"><input type="button" class="btn btn-default" value="Danh sách"></a>
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
</div>