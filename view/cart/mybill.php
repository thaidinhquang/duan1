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
        if (is_array($listbill)) {
            foreach ($listbill as $bill) {
                extract($bill);
                $ttdh=get_ttdh($bill['bill_status']);
                $countsp=loadall_cart_count($bill['id']);
                echo '<tr>
        <td>DAM-' . $bill['id'] . '</td>
        <td>' . $bill['ngaydathang'] . '</td>
        <td>' . $countsp . '</td>
        <td>' . $bill['total'] . '</td>
        <td>' . $ttdh . '</td>
        </tr>';
            }
        }

        ?>

    </table>

</div>