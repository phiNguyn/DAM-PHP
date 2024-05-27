<?php
require_once 'pdo.php';

// function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES (?,?,?,?,?,?,?,?,?)";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta);
// }

// function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
// }

// function hang_hoa_delete($ma_hh){
//     $sql = "DELETE FROM hang_hoa WHERE  ma_hh=?";
//     if(is_array($ma_hh)){
//         foreach ($ma_hh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_hh);
//     }
// }
function getALLSP(){
  $sql="SELECT * FROM sanpham";
  return pdo_query($sql);
}

// dùng cho trang home.php
function get_dssp_new($limi){
    $sql = "SELECT * FROM sanpham ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}

// dùng cho trang home.php
function get_dssp_best($limi){
    $sql = "SELECT * FROM sanpham ORDER BY bestseller desc  limit ".$limi;
    return pdo_query($sql);
}

// dùng cho trang home.php
function get_dssp_view($limi){
    $sql = "SELECT * FROM sanpham ORDER BY view DESC limit ".$limi;
    return pdo_query($sql);
}

// dùng cho trang products.php
// SELECT sanpham.*,danhmuc.name as ten FROM sanpham inner join danhmuc on sanpham.iddm=danhmuc.id
function get_dssp($keyWord,$iddm,$limi){
    $sql = "SELECT * FROM sanpham where  1";
    
    if($iddm>0){
        $sql .=" AND iddm=".$iddm;
    }
    if($keyWord!=''){
      $sql .=" AND name like '%".$keyWord."%'  ";
    }
    $sql .= "  AND hienthi=1 ORDER BY id desc limit ".$limi;

    return pdo_query($sql);
}

// dùng cho trang detail.php
function get_sp_chitiet($id){
    $sql = "SELECT * FROM sanpham WHERE id=?";
    return pdo_query_one($sql,$id);
}

function get_dssp_lien_quan($iddm,$id,$limi){
    $sql = "SELECT * FROM sanpham where iddm=? and id<>? ORDER BY id desc limit ".$limi;
    return pdo_query($sql,$iddm,$id);
}
// dùng cho trang home.php
function show_dssp($dssp){
    $html_dssp='';
  foreach($dssp as $sp){
    extract($sp);
    $html_dssp .='
    <swiper-slide>
                                                    <a  href="index.php?page=detail&idsp='.$id.'" class="banh-ngon-list_item" >
                                                    <div class="ani"><span>'.$name.'</span><p>'.$thanh_phan.'</p></div>
                                                    <div class="banh-ngon-list_absolute">
                                                        <img  src="view/img/'.$img.'" alt="">
                                                      <span class="banh-ngon_link">Xem thêm</span>
                                                    </div>  
                                                  </a>
                                                </swiper-slide>
    ';
  }
  return $html_dssp;
}

// dùng cho trang products.php
function show_all_sp($all_sp){
    $html_show_all_sp='';
    foreach($all_sp as $sp){
        extract($sp);
        if($soldout==0){
          $html_soldout='Hết hàng';
        }else {
          $html_soldout='';
        }
        $html_show_all_sp.=
        '<a class="relative br bb banhSN-eat-link" href="index.php?page=detail&idsp='.$id.'">
        
        <div class="banhSN-eat-list">
          <div class="banhSN-eat-h2">'.$name.'</div>
          <!-- <div class="xem-them"><span>'.$html_soldout.'</span></div> -->
          <div class="banhSN-eat-name">'.$thanh_phan.'</div>
          <div class="banhSN-eat-prce">'.number_format($price, 0, ",", ".").' ₫</div>
        </div>
        <div class="banhSN-eat-img relative pb-100" >
          <div class="banhSN-eat-img-item">
            <img  src="view/img/'.$img.'" alt="">
          </div>
        </div>
    
        <div class="banhSN-eat-more"><span>Xem thêm</span></div>
    
      </a>';
      }
      return $html_show_all_sp;
}


// Hàm show sản phẩm ở phần admin
function show_all_sp_admin($admin_sanpham){
  $hinh='../'.PATH_IMG;
  $html_sanpham_admin='';
    $i=1;
    foreach($admin_sanpham as $item){
        extract($item);
        $html_sanpham_admin.='
        <tr class="data names">
        <th>'.$i.'</th>
        <th>'.$name.'</th>
        <th>'.$thanh_phan.'</th>
        <th><img src="'.$hinh.''.$item['img'].'" alt="" width="150"></th>
        <th>'.number_format($price, 0, ",", ".").' đ</th>
        <th>'.$soldout.'</th>
        <th>'.$view.'</th>
        <th>'.$bestseller.'</th>
        <!-- <th>'.$iddm.'</th> -->
        <th><a class="add" href="index.php?page=sanpham_edit&idpro='.$id.'">Sửa</a> --
         
         <a href="index.php?page=delPro&id='.$id.'">Xóa</a></th>
    </tr>
        ';
        $i++;
    }
    return $html_sanpham_admin;
}


// hàm show sản phẩm ở trang admin
function get_dssp_admin($keyWord,$iddm,$limi){
  $sql = "SELECT * FROM sanpham where  1";
  
  if($iddm>0){
      $sql .=" AND iddm=".$iddm;
  }
  if($keyWord!=''){
    $sql .=" AND name like '%".$keyWord."%'  ";
  }
  $sql .= "   ORDER BY id desc limit ".$limi;

  return pdo_query($sql);
}

function delete_pro($id){

    $sql = "DELETE FROM sanpham WHERE  id=?";
        pdo_execute($sql, $id);

}
// file hình theo id
function get_img($id){
  $sql="SELECT img FROM  sanpham WHERE id=?";
  $ten_file_hinh=pdo_query_one($sql,$id);
  extract($ten_file_hinh);
  return $img;
}

function check_name_sanpham($name){
  $sql="SELECT * FROM sanpham where name=?";
  return pdo_query_one($sql,$name);
}



// phần insert sản phẩm
function sanpham_insert($name,$img,$thanh_phan,$price,$soldout,$view,$bestseller,$hienthi,$iddm){
    $sql = "INSERT INTO sanpham(name,img,thanh_phan,price,soldout,view,bestseller,hienthi,iddm) VALUES (?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $name,$img,$thanh_phan,$price,$soldout,$view,$bestseller,$hienthi,$iddm);
}

function sanpham_update($name,$thanh_phan,$img,$price,$soldout,$view,$bestseller,$hienthi,$iddm,$id){
    $sql = "UPDATE sanpham SET name=?, thanh_phan=?, img=?, price=?, soldout=?, view=? , bestseller=?, hienthi=?, iddm=? WHERE id=?";
    pdo_execute($sql,$name,$thanh_phan,$img,$price,$soldout,$view,$bestseller,$hienthi,$iddm,$id);
}
// dung
// UPDATE sanpham SET name=?, thanh_phan=?, img=?, price=?, view=? , bestseller=?, hienthi=?, iddm=? WHERE id=?
// sai do id ko co =?
//UPDATE sanpham  SET name=?, thanh_phan=?, img=?, price=?, view=?, bestseller=?, hienthi=?, iddm=? WHERE id
function count_sanpham(){
  $sql="SELECT COUNT(*) FROM sanpham  ";
  return pdo_query_value($sql);
}

//


// function hang_hoa_exist($ma_hh){
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

// function hang_hoa_tang_so_luot_xem($ma_hh){
//     $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
//     pdo_execute($sql, $ma_hh);
// }

// function hang_hoa_select_top10(){
//     $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function hang_hoa_select_dac_biet(){
//     $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function hang_hoa_select_by_loai($ma_loai){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

// function hang_hoa_select_keyword($keyword){
//     $sql = "SELECT * FROM hang_hoa hh "
//             . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//             . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
//     return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
// }

// function hang_hoa_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }