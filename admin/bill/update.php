<?php

  if (isset($bill) && (is_array($bill))) {
    extract($bill);
    }
?>
<div class="row float-none">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1>CẬP NHẬT DANH SÁCH BILL</h1>
                <form action="index.php?act=updatebill" method="post">
                    <br>
                    <input type="text" name="bill_name" value="<?= $bill['bill_name'];?>"> Khách hàng
                    <br>
                    <input type="text" name="bil_address" value="<?= $bill['bil_address']; ?>"> Địa chỉ
                    <br>
                    <input type="text" name="bill_tel" value="<?= $bill['bill_tel']; ?>"> Số điện thoại
                    <br>
                    <input type="text" name="bill_email" value="<?= $bill['bill_email']; ?>"> Email
                    <br>
                    <input type="hidden" name="id" id="" value="<?= $bill['id']  ?>">
                    <select name="bill_status" id="">
                        <option value="0" selected>Đơn hàng mới</option>
                        <option value="1">Đang xử lí</option>
                        <option value="2">Đang giao hàng</option>
                        <option value="3">Đã giao hàng </option>
                        <option value="4">Đã hủy </option>
                         


                       
                    </select>
                    <br>
                    <input type="submit" name="capnhat" class="btn btn-default" value="Cập nhật" id="">
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
