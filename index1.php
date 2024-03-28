<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "view/header.php";
include "model/cart.php";
include "global.php";

if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

$spnew = loadall_hanghoa_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_hanghoa_top10();

if ((isset($_GET["act"]) && $_GET["act"] != "")) {
    $act = $_GET["act"];
    switch ($act) {
        case 'sanpham':
            if ((isset($_POST['kyw']) && $_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if ((isset($_GET["ma_loai"]) && $_GET["ma_loai"] > 0)) {
                $ma_loai = $_GET['ma_loai'];
            } else {
                $ma_loai = 0;
            }
            $dssp = loadall_sanpham($kyw, $ma_loai);
            $tendm = load_ten_dm($ma_loai);
            include "view/sanpham.php";
            break;
        case 'sanphamct':
            if ((isset($_GET["ma_hh"]) && $_GET["ma_hh"] > 0)) {
                $id = $_GET['ma_hh'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $ma_loai);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'dangky':
            if ((isset($_POST["dangky"]) && $_POST["dangky"])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Da dang ki thanh cong. Vui long dang nhap de thuc hien chuc nang binh luan hoac dat hang";
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if ((isset($_POST["dangnhap"]) && $_POST["dangnhap"])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    // $thongbao = "Ban da dang nhap thanh cong";
                    $yourURL = "http://localhost/duan1/index.php?act=sanpham";
                    echo ("<script>location.href='$yourURL'</script>");
                } else {
                    $thongbao = "Tai khoan khong ton tai. Vui long kiem tra lai chuc nang";
                }
            }
            break;
        case 'edit_taikhoan':
            if ((isset($_POST["capnhat"]) && $_POST["capnhat"])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                $yourURL = "http://localhost/duan1/index.php?act=edit_taikhoan";
                echo ("<script>location.href='$yourURL'</script>");
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'quenmk':
            if ((isset($_POST["guiemail"]) && $_POST["guiemail"])) {
                $email = $_POST['email'];

                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mat khau cua ban la: " . $checkemail['pass'];
                } else {
                    $thongbao = "Email nay khong ton tai";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        case 'thoat':
            session_unset();
            $yourURL = "http://localhost/duan1/index.php";
            echo ("<script>location.href='$yourURL'</script>");
            break;
        case 'login':
            if(isset($_SESSION['user'])){
                $img_path = "";
                if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                    $ma_hh = $_POST['ma_hh'];
                    $ten_hh = $_POST['ten_hh'];
                    $hinh = $_POST['hinh'];
                    $don_gia = $_POST['don_gia'];
                    $soluong = 1;
                    $ttien = $soluong * $don_gia;
                    $spadd = [$ma_hh, $ten_hh, $hinh, $don_gia, $soluong, $ttien];
                    array_push($_SESSION['mycart'], $spadd);
                }
                include "view/cart/viewcart.php";
            }else{
                            echo '<div class = text-center><a href="">đăng nhập</a></div>';
            }
            break;
        case 'addtocart':
            $img_path = "";
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $ma_hh = $_POST['ma_hh'];
                $ten_hh = $_POST['ten_hh'];
                $hinh = $_POST['hinh'];
                $don_gia = $_POST['don_gia'];
                $soluong = 1;
                $ttien = $soluong * $don_gia;
                $spadd = [$ma_hh, $ten_hh, $hinh, $don_gia, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/cart/viewcart.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {

                unset($_SESSION['mycart'][$_GET['idcart']]);
                //    array_slice($_SESSION['mycart'],$_GET['idcart'],1);
                $yourURL = "http://localhost/duan1/index.php?act=addtocart";
                echo ("<script>location.href='$yourURL'</script>");
            } else {
                $_SESSION['mycart'] = [];
            }

            // $link_address = 'http://localhost/duan1/index.php?act=addtocart';
            // echo "<a href='$link_address'>Link</a>";

            //  header('Location:index.php?act=viewcart');
            break;
        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
