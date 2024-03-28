<?php
function viewcart($del)
{
    $tong = 0;
    $i = 0;

    if ($del == 1) {
        $xoasp_th = '</th><th>';
        $xoasp_td1 = '<td></td>';


        $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xoa"></a></td> class=""';
    } else {
        $xoasp_th = '';
        // $xoasp_td= '';
        $xoasp_td1 = '';
    }
    echo '
<tr>
<th>Hình</th>
<th>sản Phẩm</th>
<th>Đơn Giá</th>
<th>Số Lượng</th>
<th>Thành Tiền</th>
<th>Thao tác</th>
' . $xoasp_th . '
</tr>
';
    foreach ($_SESSION['mycart'] as $cart) {
        $img_path = '';
        $image = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;

        if ($del == 1) {
            // $xoasp_th = '</th>Thao tác<th>';
            // $xoasp_td1 = '<td></td>';


            $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xoa" class="btn btn-success btn-sm"></a></td>';
        } else {
            // $xoasp_th = '';
            $xoasp_td = '';
            // $xoasp_td1 = '';
        }
        echo '
    
        <tr>

                        <td><img src="' . $image . '" alt="" height="80px"></td>
                        <td>' . $cart[1] . '</td>
                        <td>' . $cart[3] . '</td>
                        <td>' . $cart[4] . '</td>
                        <td>' . $ttien . '</td>
                        ' . $xoasp_td . '
                        </tr>';
        $i += 1;
    }
    echo '<tr>
                    <td colspan="4">Tổng đơn hàng</td>
                    <td>' . $tong . '</td>

                    ' . $xoasp_td1 . '

                    </tr>';
}

function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;


    echo '
<tr>
<th>Hình</th>
<th>sản Phẩm</th>
<th>Đơn Giá</th>
<th>Số Lượng</th>
<th>Thành Tiền</th>

</tr>
';
    foreach ($listbill as $cart) {
        $img_path = ''; // co the xoa
        $image = $img_path . $cart['img'];
        // $ttien = $cart['price'] * $cart['soluong'];
        $tong += $cart['thanhtien'];

        echo '
    
        <tr>

                        <td><img src="' . $image . '" alt="" height="80px"></td>
                        <td>' . $cart['name'] . '</td>
                        <td>' . $cart['price'] . '</td>
                        <td>' . $cart['soluong'] . '</td>
                        <td>' . $cart['thanhtien'] . '</td>
                        </tr>';
        $i += 1;
    }
    echo '<tr>
                    <td colspan="4">Tổng đơn hàng</td>
                    <td>' . $tong . '</td>
                    </tr>';
}






function tongdonhang()
{
    $tong = 0;

    foreach ($_SESSION['mycart'] as $cart) {
        $img_path = '';
        $image = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}


function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bil_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "SELECT * FROM bill WHERE id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}


function loadall_cart($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
//Dang chinh sua 

// function loadadll_bill($iduser)
// {
//     $sql = "SELECT * FROM bill WHERE iduser=" . $iduser;
//     $listbill = pdo_query($sql);
//     return $listbill;
// }

function loadall_bill($kyw = "", $iduser)
{
    $sql = "SELECT * FROM bill WHERE 1";
    if ($iduser > 0)  $sql .= " AND iduser=" . $iduser;
    if ($kyw != "")  $sql .= " AND like '%" . $kyw . "%'";
    $sql .= " ORDER BY id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function delete_bill($id)
{
    $sql = "DELETE FROM bill WHERE id=" . $_GET['id'];
    pdo_execute($sql);
}

function delete_cart($id)
{
    $sql = "DELETE FROM cart WHERE id=" . $_GET['id'];
    pdo_execute($sql);
}

function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = '<p class="badge badge-pill badge-secondary"> Đơn hàng mới </p>';
            break;
        case '1':
            $tt = '<p class="badge badge-pill badge-primary"> Đang xử lí </p>';
            break;
        case '2':
            $tt = '<p class="badge badge-pill badge-info"> Đang giao hàng</p>';
            break;
        case '3':
            $tt = '<p class="badge badge-pill badge-success"> Đã giao hàng </p>';
            break;
        default:
            $tt = '<p class="badge badge-pill badge-danger"> Đã hủy </p>';
            break;
    }
    return $tt;
}

function update_bill($id,$bill_name,$bil_address,$bill_tel,$bill_email,$bill_status) {
    $sql = "UPDATE bill SET bill_name='" .$bill_name. "',bil_address='".$bil_address."',bill_tel='".$bill_tel."',bill_email='".$bill_email."',bill_status='".$bill_status."'  WHERE id=" . $id;
    
    pdo_execute($sql);
}
