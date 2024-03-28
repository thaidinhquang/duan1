<?php
if (is_array($bill)) {
    extract($bill);
}
$ttdh = get_ttdh($bill["bill_status"]);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mã đơn hàng: </h5>
                    <h5 class="card-title"><?= $bill['id'] ?></h5>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <h5 class="card-title">Tên tài khoản</h5>
                        <h5 class="card-title"><?= $bill["bill_name"] ?></h5>

                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <h5 class="card-title">Số lượng: </h5>
                        <h5 class="card-title"><?= $countsp = loadall_cart_count($bill['id']); ?></h5>

                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <h5 class="card-title">Giá tiền: </h5>
                        <h5 class="card-title">Số: <?= $bill['total'] ?></h5>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <h5 class="card-title">Trạng thái đơn hàng: </h5>
                        <h5 class="card-title"><?= $ttdh; ?></h5>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <h5 class="card-title">Ngày đặt hàng:</h5>
                        <h5 class="card-title"><?= $bill['ngaydathang'] ?></h5>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <h5 class="card-title">Tổng doanh thu:</h5>
                        <h5 class="card-title"> <?=  ($bill["bill_status"] == '4') ? (tong_doanh_thu() - $bill['total']) : tong_doanh_thu(); ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <table class="table table-dark">
        <tr>
            <th>Mã đơn hàng</th>
            <th>ngày đặt hàng</th>
            <th>số lượng</th>

            <th>đơn giá</th>
            <th>Trạng thái đơn hàng</th>
        </tr>
        <?php
        $ttdh = get_ttdh($bill['bill_status']);
        $countsp = loadall_cart_count($bill['id']);
        echo '<tr>
        <td>DAM-' . $bill['id'] . '</td>
        <td>' . $bill['ngaydathang'] . '</td>
        <td>' . $countsp . '</td>
        <td>' . $bill['total'] . '</td>
        <td>' . $ttdh . '</td>
        </tr>';
        ?>

    </table>

</div>