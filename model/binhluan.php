<?php

function insert_binhluan($noidung, $iduser, $ipdro, $ngay_bl)
{
    $sql = "INSERT INTO binh_luan(noidung,iduser,idpro,ngay_bl) values('$noidung','$iduser','$ipdro','$ngay_bl')";
    pdo_execute($sql);
}
function loadall_binhluan(){
    $sql = "SELECT * FROM binh_luan order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function delete_binhluan($id)
{
    $sql = "DELETE FROM binh_luan WHERE id=" . $_GET['id'];
    pdo_execute($sql);
}


function loadone_binhluan($id){
    $sql = "SELECT * FROM binh_luan WHERE id=" . $_GET['id'];
    $dm = pdo_query_one($sql);
    return $dm;
}

// function update_binhluan($id,$noidung){
//     $sql = "UPDATE binh_luan SET noidung='" . $noidung . "' WHERE id=" .$id;
//     pdo_execute($sql);
// }
?>


