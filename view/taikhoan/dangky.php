<div class="container m-auto">
    <article class="col-sm-9">
        <div class="panel panel-default form-group-lg">
            <div class="panel-heading"><h5>Đăng kí thành viên</h5></div>
            <div class="form-group ">
                <form action="index.php?act=dangky" class="form-group" method="post">
                <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="text-dark">Email *</label>
                                <input type="text" name="email" class="form-control" placeholder="First Name" required />
                            </div>
                            <div class="form-group">
                                <label class="text-dark">User *</label>
                                <input type="text" name="user" class="form-control" placeholder="First Name" required />
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="text-dark">Password *</label>
                                <input type="password" name="pass" class="form-control" placeholder="Password" required />
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Đăng ký" name="dangky"class="btn btn-md bg-dark text-light fs-md ft-medium">
                    <input type="reset" value="Nhập lại"class="btn btn-md  bg-dark text-light fs-md ft-medium">
                </form>
                <h5 class="text-primary">
                <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                ?>
                </h5>
            </div>
        </div>
    </article>
</div>