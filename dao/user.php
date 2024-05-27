<?php
require_once 'pdo.php';

function user_insert($username,$pass,$email,$phone){
    $sql = "INSERT INTO user(username,pass,email,phone) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, $username,$pass,$email,$phone);
}

// them tai khoan cua khach hang chua tao
function user_insert_id($username,$pass,$email,$phone,$diachi){
    $sql = "INSERT INTO user(username,pass,email,phone,diachi) VALUES (?, ?, ?, ?,?)";
 return  pdo_execute_id($sql, $username,$pass,$email,$phone,$diachi);
}

function user_update($username,$diachi,$role,$id){
    $sql = "UPDATE user SET username=?, diachi=? ,role=? WHERE id=?";
    pdo_execute($sql,$username,$diachi,$role,$id);
}


function user_select_all(){
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}

    // hàm kiểm tra đằng nhập
function check_user($email,$pass){
    $sql="SELECT * FROM user where email=? and  pass=? ";
    return pdo_query_one($sql,$email,$pass);
    
}



function get_user($id){
    $sql="SELECT * FROM user where id=? ";
    return pdo_query_one($sql,$id);
}


// phần check đăng ký người dùng
function check_taikhoan_email($email){
    $sql="SELECT * FROM user where email=?   ";
    return pdo_query_one($sql,$email);
}

function check_taikhoan_phone($phone){
    $sql="SELECT * FROM user where phone=?   ";
    return pdo_query_one($sql,$phone);
}

/// tổng số tài khoản
function count_user(){
    $sql="SELECT COUNT(*) FROM user where role=0    ";
  return  pdo_query_value($sql);
}







// function user_select_by_id($ma_kh){
//     $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);
// }

// function user_exist($ma_kh){
//     $sql = "SELECT count(*) FROM khach_hang WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// // Hàm kiểm tra vai trò người dùng
// function user_select_by_role($role){
//     $sql = "SELECT * FROM user WHERE role=?";
//     return pdo_query($sql, $role);
// }

// function user_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }