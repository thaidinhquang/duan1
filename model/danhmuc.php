<?php 
function insert_danhmuc($ten_loai){
    $sql = "INSERT INTO loai(ten_loai) values('$ten_loai')";
                pdo_execute($sql);
}
function delete_danhmuc($ma_loai){
    $sql = "DELETE FROM loai WHERE ma_loai=" . $_GET['ma_loai'];
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql = "SELECT * FROM loai";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($ma_loai){
    $sql = "SELECT * FROM loai WHERE ma_loai=" . $_GET['ma_loai'];
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($ma_loai,$ten_loai){
    $sql = "UPDATE loai SET ten_loai='" . $ten_loai . "' WHERE ma_loai=" . $ma_loai;
    
    pdo_execute($sql);
}
?>
