<?php
session_start();
ob_start();

if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
}

if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/cart.php";
    include "../model/thongke.php";

    require "../global.php";

    include "header.php";
    extract($_REQUEST);
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                // kiểm tra người dùng có click vào add hay ko
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $ten_loai = $_POST['ten_loai'];
                    if ($ten_loai == "") {
                        $errors['name'] = "Tên không được để trống";
                    } else {
                        insert_danhmuc($ten_loai);
                        $thongbao = "Thêm thành công";
                    }
                }
                include "loai/add.php";
                break;
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include "loai/list.php";
                break;
            case 'xoadm':
                if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                    delete_danhmuc($_GET['ma_loai']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "loai/list.php";
                break;
            case 'suadm':
                if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {

                    $dm = loadone_danhmuc($_GET['ma_loai']);
                }
                include "loai/update.php";
                break;
            case 'updatedm':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $ten_loai = $_POST['ten_loai'];
                    $ma_loai = $_POST['ma_loai'];
                    if ($ten_loai == "") {
                        $errors['name'] = "Tên không được để trống";
                    } else {
                        update_danhmuc($ma_loai, $ten_loai);
                        $thongbao = "Cập nhật thành công";
                    }
                }
                $listdanhmuc = loadall_danhmuc();
                include "loai/update.php";
                break;
            case 'suatk':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                    $dm = loadone_taikhoan($_GET['id']);
                }
                include "taikhoan/update.php";
                break;
            case 'updatetk':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    update_taikhoan($id, $user, $pass, $email, $address, $tel);
                    $thongbao = "Cập nhật thành công";
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;



                //    control sản phẩm

            case 'addsp':
                // kiểm tra người dùng có click vào add hay ko
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $ma_loai = $_POST['ma_loai'];
                    $ten_hh = $_POST['ten_hh'];
                    $don_gia = $_POST['don_gia'];
                    $mo_ta = $_POST['mo_ta'];

                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);


                    insert_sanpham($ten_hh, $don_gia, $hinh, $mo_ta, $ma_loai);
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if (isset($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $ma_loai = $_POST['ma_loai'];
                } else {
                    $kyw = "";
                    $ma_loai = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw, $ma_loai);

                include "sanpham/list.php";
                break;

            case 'xoasp':
                if (isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)) {
                    delete_sanpham($_GET['ma_hh']);
                }
                $listsanpham = loadall_sanpham("", 0);
                // $listsanpham = pdo_query($sql);
                include "sanpham/list.php";
                break;

            case 'suasp':
                if (isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)) {

                    $sanpham = loadone_sanpham($_GET['ma_hh']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $ma_loai = $_POST['ma_loai'];
                    $ma_hh = $_POST['ma_hh'];
                    $ten_hh = $_POST['ten_hh'];
                    $don_gia = $_POST['don_gia'];
                    $mo_ta = $_POST['mo_ta'];

                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);

                    update_sanpham($ma_loai, $ten_hh, $ma_hh, $don_gia, $mo_ta, $hinh);
                    $thongbao = "Cập nhật thành công";
                }

                $listsanpham = loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;
            case 'updatebill':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $bill_status = $_POST['bill_status'];

                    $id = $_POST['id'];
                    $bill_name = $_POST['bill_name'];
                    $bil_address = $_POST['bil_address'];
                    $bill_tel = $_POST['bill_tel'];
                    $bill_email = $_POST['bill_email'];
                    //    $bill_pttt=$_POST['bill_pttt'];
                    //    $ttdh=get_ttdh($bill['bill_status']);
                    //    $bill_status=get_ttdh($bill['bill_status']);
                    update_bill($id, $bill_name, $bil_address, $bill_tel, $bill_email, $bill_status);

                    //     $thongbao = "Cập nhật thành công";
                }
                // $listbill = loadall_bill($kyw, $bill['bill_status']);
                $listbill = loadall_bill("", 0);
                // echo '12323';
                include "bill/listbill.php";
                break;
            case 'suabill':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $idbill = $_GET['id'];
                    $bill = loadone_bill($idbill);
                }
                include "bill/update.php";
                break;
            case 'dskh':
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'xoatk':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'dsbl':
                $listbinhluan = loadall_binhluan();
                include "binhluan/list.php";
                break;
            case 'suabl':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                    $binhluan = loadone_binhluan($_GET['id']);
                }
                $binhluan = loadall_binhluan();
                include "binhluan/update.php";
                break;

            case 'xoabl':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_binhluan($_GET['id']);
                }
                $sql = "SELECT * FROM binh_luan";
                $listbinhluan = pdo_query($sql);
                include "binhluan/list.php";
                break;
            case 'listbill':
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                $listbill = loadall_bill($kyw, 0);
                include "bill/listbill.php";
                break;
            case 'ctbill':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $bill = loadone_bill($_GET['id']);
                    $listthongke = loadall_thongke();
                }
                include "ctbill/list.php";
                break;
            case 'xoabill':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_bill($_GET['id']);
                }
                $sql = "SELECT * FROM bill";
                $listbill = pdo_query($sql);
                include "bill/listbill.php";
                break;
            case 'thongke':
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                $listbill = loadall_bill($kyw, 0);
                $listthongke = loadall_thongke();
                include "thongke/list.php";
                break;
            case 'bieudo':
                $listthongke = loadall_thongke();
                include "thongke/bieudo.php";
                break;
            case 'thoat':
                if (isset($_SESSION['role'])) unset($_SESSION['role']);
                header('location: login.php');
                break;
            default:
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                $listbill = loadall_bill($kyw, 0);
                $listthongke = loadall_thongke();
                include "thongke/list.php";
                break;
        }
    } else {
        if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
            $kyw = $_POST['kyw'];
        } else {
            $kyw = "";
        }
        $listbill = loadall_bill($kyw, 0);
        $listthongke = loadall_thongke();
        include "thongke/list.php";
        include "home.php";
    }
    include "footer.php";
} else {
    header('location: login.php');
}
