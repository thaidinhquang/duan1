<?php 
function loadall_thongke(){
$sql = "SELECT loai.ma_loai AS madm,loai.ten_loai AS tendm, count(hang_hoa.ma_hh) AS countsp, min(hang_hoa.don_gia) AS minprice,
max(hang_hoa.don_gia) AS maxprice, avg(hang_hoa.don_gia) AS avgprice FROM loai LEFT JOIN hang_hoa ON loai.ma_loai = hang_hoa.ma_loai GROUP BY loai.ma_loai ORDER BY loai.ma_loai desc";
$listtk=pdo_query($sql);
return $listtk;
}


function tong_doanh_thu(){
    $sql = "SELECT SUM(total)  FROM bill";
    $listdttong= pdo_query_value($sql);
    return $listdttong;
}
function tong_doanh_thu_thang(){
    $sql = "SELECT DATE_FORMAT(ngaydathang, '%Y-%m') AS thang, SUM(total) AS thang FROM bill GROUP BY thang";

    $listdtthang= pdo_query_value($sql);
    return  $listdtthang;
}
function tong_doanh_thu_ngay() {
    $sql = "SELECT DATE(ngaydathang) AS ngay, SUM(total) AS ngay
    FROM bill
    GROUP BY ngay";;
    $listdtngay= pdo_query_value($sql);
    return $listdtngay;
}
?>