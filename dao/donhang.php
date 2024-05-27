<?php
require_once 'pdo.php';



function bill_insert_id($iduser,$madonhang,$nguoidat_ten,$nguoidat_email,$nguoidat_phone,$nguoidat_diachi,$nguoinhan_ten,$nguoinhan_phone,$nguoinhan_diachi,$total,$ship,$voucher,$tong_thanhtoan,$pttt){
    $sql = "INSERT INTO bill(iduser,madonhang,nguoidat_ten,nguoidat_email,nguoidat_phone,nguoidat_diachi,nguoinhan_ten,nguoinhan_phone,nguoinhan_diachi,total,ship,voucher,tong_thanhtoan,pttt) VALUES ( ?,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
   return pdo_execute_id($sql,$iduser, $madonhang,$nguoidat_ten,$nguoidat_email,$nguoidat_phone,$nguoidat_diachi,$nguoinhan_ten,$nguoinhan_phone,$nguoinhan_diachi,$total,$ship,$voucher,$tong_thanhtoan,$pttt);
}

function loadOneBill($id){
    $sql="SELECT * FROM bill where id=? ";
    return  pdo_query_one($sql,$id);
}

function loadOneCart($idbill){
    $sql="SELECT * FROM cart WHERE idbill=?";
    return pdo_query($sql,$idbill);
}

// load tất cả đơn hàng của user ở trang mydonhang.php
function loadAllBill($iduser){
    $sql=" SELECT * FROM bill WHERE iduser=?";
    return pdo_query($sql,$iduser);
}

// load trang chi tiết đơn hàng của người dùng
function get_donhang_chitiet($iduser){
    $sql = "SELECT * FROM bill WHERE iduser=?";
    return pdo_query_one($sql,$iduser);
}

// load chi tiết tất cả sản phẩm đã đặt theo id đơn hàng
function get_pro_chitiet($iduser){
    $sql = "SELECT * FROM cart WHERE iduser=?";
    return pdo_query($sql,$iduser);
}

// tỏng số đơn hàng
 function count_donhang(){
    $sql="SELECT COUNT(*) FROM cart";
    return pdo_query_value($sql);
 }

 // thống kê trong đơn hàng
 function doanhthu(){
   return pdo_query("SELECT YEAR(ngaymua) as NAM, MONTH(ngaymua) as THANG, COUNT(DISTINCT iduser)  AS songuoimua, COUNT(idpro) as soluotmua,
   SUM(soluong) as soluong, SUM(thanhtien) as doanhthu
   FROM cart GROUP BY YEAR(ngaymua),MONTH(ngaymua);");
 }
?>

