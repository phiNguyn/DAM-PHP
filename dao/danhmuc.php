<?php
require_once 'pdo.php';

// /**
//  * Thêm loại mới
//  * @param String $ten_danhmuc là tên loại
//  * @throws PDOException lỗi thêm mới
//  */
// function danhmuc_insert($ten_danhmuc){
//     $sql = "INSERT INTO danhmuc(ten_danhmuc) VALUES(?)";
//     pdo_execute($sql, $ten_danhmuc);
// }
// /**
//  * Cập nhật tên loại
//  * @param int $ma_danhmuc là mã loại cần cập nhật
//  * @param String $ten_danhmuc là tên loại mới
//  * @throws PDOException lỗi cập nhật
//  */
// function danhmuc_update($ma_danhmuc, $ten_danhmuc){
//     $sql = "UPDATE danhmuc SET ten_danhmuc=? WHERE ma_danhmuc=?";
//     pdo_execute($sql, $ten_danhmuc, $ma_danhmuc);
// }
// /**
//  * Xóa một hoặc nhiều loại
//  * @param mix $ma_danhmuc là mã loại hoặc mảng mã loại
//  * @throws PDOException lỗi xóa
//  */
// function danhmuc_delete($ma_danhmuc){
//     $sql = "DELETE FROM danhmuc WHERE ma_danhmuc=?";
//     if(is_array($ma_danhmuc)){
//         foreach ($ma_danhmuc as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_danhmuc);
//     }
// }
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
// hiển thị phần thông tin danh mục ở trang chủ
function danhmuc_all($limit){
    $sql = "SELECT * FROM danhmuc where home=1 ORDER BY id desc limit ".$limit;
    return pdo_query($sql);
}

function menu($stt){
  $sql = "SELECT * FROM danhmuc where stt=? order by id desc";
  return pdo_query($sql,$stt);
}

function show_dm($danh_muc){
    $html_danhmuc='';
  foreach($danh_muc as $sp){
    extract($sp);
    $html_danhmuc.='
    <li class="product-item bt br">
                      <a href="index.php?page=products&iddm='.$id.'">
                      <h2 class="product-item_type">'.$name.'</h2> 
                      <p class="product-text">'.$mota.'</p>
                      <img src="view/img/'.$img.'" alt="">
                      <span>Xem tất cả</span>

                    </a>

                  </li>
    ';
  }
  return $html_danhmuc;
}
 // lấy ra tên danh mục ở phần danh sách sản phẩm
function get_thongtin_dm($id){
  $sql="SELECT name  FROM danhmuc where id=?";
  return pdo_query_value($sql,$id);
  
}
function get_thongtin_dm_content($id){
  $sql="SELECT content  FROM danhmuc where id=?";
  return pdo_query_value($sql,$id);
  
}




// function title_func($name){
//     $sql = "SELECT * FROM sanpham where name=?";
//     return pdo_query($sql,$name);
// }
// /**
//  * Truy vấn một loại theo mã
//  * @param int $ma_danhmuc là mã loại cần truy vấn
//  * @return array mảng chứa thông tin của một loại
//  * @throws PDOException lỗi truy vấn
//  */
// function danhmuc_select_by_id($ma_danhmuc){
//     $sql = "SELECT * FROM danhmuc WHERE ma_danhmuc=?";
//     return pdo_query_one($sql, $ma_danhmuc);
// }
// /**
//  * Kiểm tra sự tồn tại của một loại
//  * @param int $ma_danhmuc là mã loại cần kiểm tra
//  * @return boolean có tồn tại hay không
//  * @throws PDOException lỗi truy vấn
//  */
// function danhmuc_exist($ma_danhmuc){
//     $sql = "SELECT count(*) FROM danhmuc WHERE ma_danhmuc=?";
//     return pdo_query_value($sql, $ma_danhmuc) > 0;
// }


// Phần admin

function admin_dm(){
  $sql="SELECT * FROM danhmuc ";
  return pdo_query($sql);
}

function show_admin_dm($danh_muc){
  $hinh='../'.PATH_IMG;
  $html_danhmuc_admin='';
  $i=1;
  foreach($danh_muc as $item){
      extract($item);
      $html_danhmuc_admin.='
      <tr class="data-danhmuc">
      <th>'.$i.'</th>
      <th><img src="'.$hinh.''.$img.'" alt="" width="50"></th>
      <th><a href="index.php?page=sanpham&iddm='.$id.'">'.$name.'</a></th>
      <th>'.$home.'</th>
      <th>'.$stt.'</th>
      <th>'.$mota.'</th>
      <th>'.$content.'</th>
      <th><a  href="index.php?page=danhmuc_edit&id='.$id.'">Sửa </a>--
      <a  class="xoa" href="index.php?page=deldm&id='.$id.'  "> Xóa</a>
      </th>
    
  </tr>
      ';
      $i++;
  }
  return $html_danhmuc_admin;
}

// lấy ảnh để xóa
function get_img_dm($id){
  $sql="SELECT img FROM  danhmuc WHERE id=?";
  $ten_file_hinh=pdo_query_one($sql,$id);
  extract($ten_file_hinh);
  return $img;
}

function delete_dm($id){
  if(quanhe($id)){
    echo '<h2>Đây là khóa ngoại ko được xóa</h2>';
   
  } else {
   
    $sql="DELETE FROM danhmuc WHERE id=?";
    pdo_execute($sql,$id);
  
  }

}

// kiểm tra khóa ngoại
function quanhe($iddm){ 
  $sql=" SELECT * FROM sanpham where iddm=".$iddm;
  $productlist= pdo_query($sql);
  return count($productlist);
}

// thêm danh mục
function danhmuc_insert($name,$img,$home,$stt,$mota,$content){
    $sql = "INSERT INTO danhmuc(name,img,home,stt,mota,content) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql, $name,$img,$home,$stt,$mota,$content);
}

// check cùng tên danh mục
function check_name_dm($name){
  $sql=" SELECT * FROM danhmuc where name=?";
 return pdo_query_one($sql,$name);
}

function danhmuc_select_by_id($id){
    $sql = "SELECT * FROM danhmuc WHERE id=?";
    return pdo_query_one($sql, $id);
}

function danhmuc_update($id,$name,$img,$home,$stt,$mota,$content){
    $sql = "UPDATE danhmuc SET name=?, img=?, home=?, stt=?, mota=?, content=? WHERE id=?";
    pdo_execute($sql, $name,$img,$home,$stt,$mota,$content,$id);
}

// số danh mục 
function count_danhmuc(){
  $sql="SELECT COUNT(*) FROM danhmuc ";
  return pdo_query_value($sql);
}

// thống kê theo danh mục
function thongke(){
  return pdo_query("SELECT dm.id, dm.name, COUNT(sp.id) AS SOLUONG, AVG(sp.price) AS Trungbinh, MAX(sp.price) AS Giamax, MIN(sp.price) AS Giamin
  FROM danhmuc dm LEFT JOIN sanpham sp on dm.id=sp.iddm GROUP BY dm.id, dm.name");
}

