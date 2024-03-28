<div class="container">
    <div>
        <form action="index.php?act=billconfirm" method="post">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="text-center d-block mb-5">
                        <h2>Thông tin đặt hàng</h2>
                    </div>
                </div>
            </div>
            <div>
                <h5 class="mb-4 ft-medium">Billing Details</h5>
                <?php
                if (isset($_SESSION['user'])) {
                    $name = $_SESSION['user']['user'];
                    $address = $_SESSION['user']['address'];
                    $email = $_SESSION['user']['email'];
                    $tel = $_SESSION['user']['tel'];
                } else {
                    $name = "";
                    $address = "";
                    $email = "";
                    $tel = "";
                }
                ?>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="text-dark">First Name *</label>
                            <input type="text" name="name" class="form-control" placeholder="First Name" value="<?= $name ?>" />
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Address *</label>
                            <input type="text" name="address" class="form-control" placeholder="First Name" value="<?= $address ?>" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="text-dark">Email *</label>
                            <input type="text" name="email" class="form-control" placeholder="email" value="<?= $email ?>" />
                        </div>

                        <div class="form-group">
                            <label class="text-dark">Điện thoại *</label>
                            <input type="text" name="tel" class="form-control" placeholder="First Name" value="<?= $tel ?>" />
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- <div class="form-check">
        <h3>Phương thức thanh toán</h3>
        <table class="table">
            <tr>
                <td><input class="form-check-input"  type="radio" value="1" name="pttt"/><label for="#">Trả tiền khi nhận hàng</label></td>
                <td><input class="form-check-input"  type="radio" value="2" name="pttt" /><label for="#">Chuyển khoản ngân hàng</label></td>
                <td><input class="form-check-input"  type="radio" value="3" name="pttt" /><label for="#">Thanh toán online</label></td>
            </tr>
        </table>
    </div> -->
    <h5 class="mb-4 ft-medium">Phương thức thanh toán</h5>
    <table class="table">
        <tr>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pttt" id="flexRadioDefault1" value="1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Trả tiền khi nhận hàng
                    </label>
                </div>
            </td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pttt" id="flexRadioDefault2" value="2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Chuyển khoản ngân hàng
                    </label>
                </div>
            </td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pttt" id="flexRadioDefault3" value="3">
                    <label class="form-check-label" for="flexRadioDefault3">
                        Thanh toán online
                    </label>
                </div>
            </td>
        </tr>
    </table>

    <div>
        <h5 class="mb-4 ft-medium">Thông tin giỏ hàng</h5>
        <table class="table table-dark">
            <!-- <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr> -->
            <?php
            viewcart(0);
            ?>
        </table>
    </div>
    <a href=""><input type="submit" name="dongydathang" id="" value="Đồng ý đăt hàng" class="btn btn-dark mb-5"></a>

</div>
</form>