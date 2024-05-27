<?php
session_start();
if(isset($_SESSION['admin'])&&($_SESSION['admin']['role'])==1){



    include '../dao/pdo.php';
    include '../dao/danhmuc.php';
    include '../dao/sanpham.php';
    include '../dao/user.php';
    include '../dao/donhang.php';
    include '../view/global.php';
    
    include 'header.php';
   
    if(!isset($_GET['page'])){
        $thongke=thongke();
        $doanhthu=doanhthu();
        include "home.php";
    }else{
        switch($_GET['page']){
            case 'danhmuc' :
              
                $danh_muc=admin_dm();
                $doanhthu=doanhthu();
                include 'danhmuc.php';
                break;


         case 'add-dm':
            if(isset($_POST['btn-themDM'])){
                $name=$_POST['name'];
                $home=$_POST['home'];
                $stt=$_POST['stt'];
                $mota=$_POST['mota'];
                $content=$_POST['content'];
                $kt_name_dm=check_name_dm($name);
                // lệnh lấy ảnh
                if(isset($_FILES['img']['name'])&& $_FILES['img']['name']!=""){
                   
                    $target_file = "../".PATH_IMG.basename($_FILES['img']['name']); 
                    move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
                    $img=basename($_FILES['img']['name']);
                } else {
                    $img ="";
                }
                

                if ($kt_name_dm){
                    $thongBao='Tên Danh mục đã bị trùng vui lòng điền tên khác';
                } else {
                    danhmuc_insert($name,$img,$home,$stt,$mota,$content);
                    $thanhCong='Đã thêm danh mục';
                }
            }
            include 'add_dm.php';
            break; 
            
        

        case 'danhmuc_edit':
           
            $id=$_GET['id'];
          
            if(isset($_POST['btn-updateDM'])){
                $name=$_POST['name'];
                $home=$_POST['home'];
                $stt=$_POST['stt'];
                $mota=$_POST['mota'];
                $content=$_POST['content'];
                $img=$_POST['img'];
                $kt_name_dm=check_name_dm($name);
                // lệnh lấy ảnh
                if(isset($_FILES['img']['name'])&& $_FILES['img']['name']!=""){
                    
                    if(file_exists($img)){
                        unlink($img);
                    }

                
                $target_file ="../".PATH_IMG.basename($_FILES['img']['name']); 
                move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
                $img=basename($_FILES['img']['name']);
                }
                

                if ($kt_name_dm && $kt_name_dm['id'] !=$id){
                    $thongBao='Tên sản phẩm đã bị trùng vui lòng điền tên khác';
                } else {
                    danhmuc_update($id,$name,$img,$home,$stt,$mota,$content);
                    $thanhCong='Thay đổi thành công';
                }
            }
            $dm_edit_func=danhmuc_select_by_id($id);
            include 'admin_dm_update.php';
        break;

        



            // xóa danh mục
        case 'deldm':
            if(isset($_GET['id']) &&($_GET['id'])>0){
                $id=$_GET['id'];

                $ten_file_hinh="../".PATH_IMG.get_img_dm($id);
                if(file_exists($ten_file_hinh)){
                    unlink($ten_file_hinh);
                }
                delete_dm($id);

            }
                
                $danh_muc=admin_dm();
            
            //   header('location:index.php?page=danhmuc');
            break;

            // kết thúc phần danh mục của admin

            
// Bắt đầu phần user của admin

        case 'user':
            $admin_user=user_select_all();
            $count_user=count_user();
            include 'admin_user.php';
            break; 
            
            
// bắt đầu phần sản phẩm của admin        

       case 'sanpham' :
        
        $keyWord='';
            $title_search='';
            if(!isset($_GET['iddm'])){
                $iddm=0;
                $title_search='';
            }else {
                $iddm=$_GET['iddm']; 
                $title_search=get_thongtin_dm($iddm);   //Hàm lấy tiêu đề trang
            }

            if(isset($_POST['timkiem'])){
                $keyWord=$_POST['keyWord'];
                $title_search='Kết quả tìm kiếm cho : ' .$keyWord;
                // $content_dm='';
            }
        $admin_sanpham=get_dssp_admin($keyWord,$iddm,30);
        include 'admin_sanpham.php';
        break;
        // kết thúc phần show sản phẩm admin

            // phần thêm sản phẩm
        case 'add-sanpham':
            if(isset($_POST['btn-addSP'])){
                $name=$_POST['name'];
                $thanh_phan=$_POST['thanh_phan'];
                $price=$_POST['price'];
                $soldout=$_POST['soldout'];
                $view=$_POST['view'];
                $bestseller=$_POST['bestseller'];
                $hienthi=$_POST['hienthi'];
                $iddm=$_POST['iddm'];
                
                $kt_name_sanpham=check_name_sanpham($name);
                if ($kt_name_sanpham){
                    $thongBao='Tên sản phẩm đã bị trùng vui lòng điền tên khác';
                } else {
                     // lệnh lấy ảnh
                if(isset($_FILES['img']['name'])&& $_FILES['img']['name']!=""){
                   
                    $target_file ="../".PATH_IMG.basename($_FILES['img']['name']); 
                    move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
                    $img=basename($_FILES['img']['name']);
                } else {
                    $img ="";
                }
                    sanpham_insert($name,$img,$thanh_phan,$price,$soldout,$view,$bestseller,$hienthi,$iddm);
                    $thanhCong='Đã thêm sản phẩm thành công ';
                }
            }
            // lấy tên của danh mục
           
            // truyền tên của danh mục vào đê hiện thị
            $kq_op=admin_dm();
            include 'admin_sanpham_add.php';
            break;

        // bắt đầu phần xóa sản phẩm của admin
        case 'delPro':
            if(isset($_GET['id']) && ($_GET['id']>0) ){
                $id=$_GET['id'];
                $ten_file_hinh="../".PATH_IMG.get_img($id);
                if(file_exists($ten_file_hinh)){
                    unlink($ten_file_hinh);
                }
                delete_pro($id);
                $thanhCong="Đã xóa sản phẩm";
            }
           header('location:index.php?page=sanpham');
            break;

        case 'sanpham_edit':
            $id=$_GET['idpro'];
            if(isset($_POST['btn-update-sp'])){
               
                $name=$_POST['name'];
                $thanh_phan=$_POST['thanh_phan'];
                $price=$_POST['price'];
                $soldout=$_POST['soldout'];
                $view=$_POST['view'];
                $bestseller=$_POST['bestseller'];
                $hienthi=$_POST['hienthi'];
                $iddm=$_POST['iddm'];
                $img=$_POST['img'];
                $kt_name_sanpham=check_name_sanpham($name);
                if(isset($_FILES['img']['name'])&& $_FILES['img']['name']!=""){
                    
                    if(file_exists($img)){
                        unlink($img);
                    }

                
                $target_file ="../".PATH_IMG.basename($_FILES['img']['name']); 
                move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
                $img=basename($_FILES['img']['name']);
                }

                if ($kt_name_sanpham && $kt_name_sanpham['id'] !=$id){
                    $thongBao='Tên sản phẩm đã bị trùng vui lòng điền tên khác';
                } else {
                    sanpham_update($name,$thanh_phan,$img,$price,$soldout,$view,$bestseller,$hienthi,$iddm,$id); 
                    $thanhCong='Cập nhật thành công ';
                }

            }

              // lấy tên của danh mục
            
              // truyền tên của danh mục vào đê hiện thị
              $kq_op=admin_dm();
              // lấy 1 sản phẩm
            $sp_edit_func=get_sp_chitiet($id);
            include 'admin_sanpham_update.php';
            break;

            



        case 'logout' :
            if (isset($_SESSION['admin']) && (count($_SESSION['admin']) > 0)) {
                unset($_SESSION['admin']);
            }
            header('location: login.php');
            break;


        default:
        $thongke=thongke();
        $doanhthu=doanhthu();
        include 'home.php';
        break;








       }

     }
    include 'footer.php';

    } else{
        include 'login.php';
    }
?>