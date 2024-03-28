<?php 
function insert_sanpham($ten_hh,$don_gia,$hinh,$mo_ta,$ma_loai){
    $sql = "INSERT INTO hang_hoa(ten_hh,don_gia,hinh,mo_ta,ma_loai) values('$ten_hh','$don_gia','$hinh','$mo_ta','$ma_loai')";
                pdo_execute($sql);
}
function delete_sanpham($ma_hh){
    $sql = "DELETE FROM hang_hoa WHERE ma_hh=" . $_GET['ma_hh'];
    pdo_execute($sql);
}


function loadall_hanghoa_home(){
    $sql = "SELECT * FROM hang_hoa where 1";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_hanghoa_top10(){
    $sql = "SELECT * FROM hang_hoa where 1 order by so_luot_xem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function loadall_sanpham($kyw="",$ma_loai=0){
    $sql = "SELECT * FROM hang_hoa where 1";
    if($kyw!=""){
        $sql.= " and ten_hh like '%".$kyw."%'";
    }
    if($ma_loai>0){
        $sql.= " and ma_loai like '%".$ma_loai."'";
    }
    $sql.=" order by ma_hh desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_ten_dm($ma_loai){
    if($ma_loai>0){
    $sql = "SELECT * FROM loai WHERE ma_loai=" . $ma_loai;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $ten_loai;
}else{
    return "";
}
}
function loadone_sanpham($ma_hh){
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh=" . $ma_hh;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($ma_hh,$ma_loai){
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai=".$ma_loai." AND ma_hh <> ".$ma_hh;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($ma_loai,$ten_hh,$ma_hh,$don_gia,$mo_ta,$hinh){
  if($hinh!="")
    $sql = "UPDATE hang_hoa SET ten_hh='" .$ten_hh. "',don_gia='".$don_gia."',hinh='".$hinh."',mo_ta='".$mo_ta."',ma_hh='".$ma_hh."' WHERE ma_hh=" .$ma_hh;
 
 else
    $sql = "UPDATE hang_hoa SET ten_hh='" .$ten_hh. "',don_gia='".$don_gia."',mo_ta='".$mo_ta."',ma_hh='".$ma_hh."'WHERE ma_hh=" .$ma_hh;

pdo_execute($sql);
}
