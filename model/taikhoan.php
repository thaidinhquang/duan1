<?php
function loadall_taikhoan(){
    $sql = "SELECT * FROM taikhoan";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan($email, $user, $pass)
{
    $sql = "INSERT INTO taikhoan(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user."' AND pass='" . $pass ."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkuser1($user,$pass){
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user."' AND pass='" . $pass ."'";
    $sp = pdo_query($sql);
    if(count($sp)>0) return $sp[0]['role'];
    else return 0;
}
function checkuser2($user,$pass){
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user."' AND pass='" . $pass ."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email){
    $sql = "SELECT * FROM taikhoan WHERE email='" . $email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$user,$pass,$email,$address,$tel){
      $sql = "UPDATE taikhoan SET user='" .$user. "', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' WHERE id=" .$id;
      pdo_execute($sql);
}
function delete_taikhoan($id){
    $sql = "DELETE FROM taikhoan WHERE id=" . $id;
    pdo_execute($sql);
}
function loadone_taikhoan($id){
    $sql = "SELECT * FROM taikhoan WHERE id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

?>