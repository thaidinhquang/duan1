<div class="container">
    <div class="text-center d-block mb-5">
        <h2>Cảm ơn quý khách đặt hàng</h2>
    </div>
    <?php
    if (isset($bill) && (is_array($bill))) {
        extract($bill);
    }
    ?>
    <h5 class="mb-4 ft-medium">Thông tin Đơn hàng</h5>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mã đơn hàng:</h5>
                    <p><?= $bill['id']; ?>.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ngày đặt hàng:</h5>
                    <p><?= $bill['ngaydathang']; ?>.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tổng đơn hàng:</h5>
                    <p><?= $bill['total']; ?>.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Phương thức thanh toán:</h5>
                    <p><?= $bill['bill_pttt']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h5 class="mb-4 ft-medium">Thông tin người mua</h5>
    <div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Người đặt hàng:</h5>
                    <p><?= $bill['bill_name']; ?>.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Địa chỉ:</h5>
                    <p><?= $bill['bil_address']; ?>.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Email:</h5>
                    <p><?= $bill['bill_email'] ?>.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Điện thoại:</h5>
                    <p><?= $bill['bill_tel'] ?></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
    <h5 class="mb-4 ft-medium">Chi tiết giỏ hàng</h5>
    <div>
        <div>
            <table class="table  table-dark">

                <?php
                bill_chi_tiet($billct);
                ?>
            </table>
        </div>
    </div>
</div>