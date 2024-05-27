<?php
session_start();
ob_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

include "dao/pdo.php";
include "dao/danhmuc.php";
include "dao/sanpham.php";
include "dao/gio_hang.php";
include 'dao/user.php';
include 'dao/donhang.php';
$danh_muc = danhmuc_all(6); // danh mục ở trang home
$tongSanPham = tongSoSanPhamTrongGio(); // phần menu giỏ hàng ở header
 include "view/header.php";


// load data sản phẩm nhiều lượt xem
$dssp_best = get_dssp_view(4);
// load danh mục
if (!isset($_GET['page'])) {
    include "view/home.php";
} else {

    switch ($_GET['page']) {

        case 'products':
            $keyWord = '';
            $title_search = '';
            $content_dm = '';
            if (!isset($_GET['iddm'])) {
                $iddm = 0;
                $title_search = '';
                $content_dm = '';
            } else {
                $iddm = $_GET['iddm'];
                $title_search = get_thongtin_dm($iddm);   //Hàm lấy tiêu đề trang
                $content_dm = get_thongtin_dm_content($iddm);  //Hàm lấy nội dung (content) của danh mục
            }

            if (isset($_POST['timkiem'])) {
                $keyWord = $_POST['keyWord'];
                $title_search = 'Kết quả tìm kiếm cho : ' . $keyWord;
                // $content_dm='';
            }

            $all_sp = get_dssp($keyWord, $iddm, 30);
            include 'view/products.php';
            break;
            // END TRANG SẢN PHẨM



        case 'cart':
            // Giỏ hàng có sản phẩm
            $check_giohang = ''; // ko có sp = 'rỗng'
            $check_btn_thanh_toan = '<a href="index.php?page=checkout"><button class="add btn-primary mt-4">Thanh toán</button></a>';
            $check_btn_xoa = '<a href="index.php?page=cart&del=1"><button class="absolute-bottom ">Xóa tất cả</button></a>';

            // Giỏ hàng không có sản phẩm
            if ($_SESSION['cart'] == []) {
                $check_giohang = 'đang rỗng <i class="fa-solid fa-arrow-right"></i>';
                $check_btn_thanh_toan = '';
                // Thành nút quay lại trang chủ
                $check_btn_xoa = '<a href="index.php?page=products"><button class="add btn-primary margin-0">Mua hàng tại đây</button></a>';
            }

            if (isset($_GET['del']) && ($_GET['del'] == 1)) {
                unset($_SESSION['cart']);
                header('location: index.php?page=cart');
            } else {

                if (isset($_SESSION['cart'])) {
                    $tongDonHang = getTongDonHang();
                }
                include 'view/cart.php';
            }
            break;

        case 'del':
            if (isset($_GET['idsp']) && ($_GET['idsp'] >= 0)) {
                array_splice($_SESSION['cart'], $_GET['idsp'], 1);
                header('location: index.php?page=cart');
            }

            break;


        case 'addcart':
            // lấy dữ liêu từ form
            if (isset($_POST['themsp'])) {
                $idpro=$_POST['idpro'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = $_POST['soluong']; // Số lượng của sản phẩm 
                $thanhtien=(int)$price*(int)$soluong;
                $ktSoLuong=0;  // Biến kiểm số lượng nếu bằng 1 thì set sản phẩm bằng id của sản phẩm rồi cộng tiếp
                $i=0;
                foreach($_SESSION['cart'] as $item){
                    if($item['idpro']==$idpro){
                        $soluongNew=$soluong+$item['soluong'];
                        $_SESSION['cart'][$i]['soluong']=$soluongNew;
                        $ktSoLuong=1;
                        break;      
                    }
                    $i++;
                }
                if($ktSoLuong==0){

                    $sp = array("idpro" => $idpro, "name" => $name, "img" => $img, "price" => $price, "soluong" => $soluong, "thanhtien"=>$thanhtien);
                    array_push($_SESSION['cart'], $sp);
                }
                header('location: index.php?page=detail&idsp=' . $idpro . '  ');
            }
            // add vào giỏ hàng lưu session

            break;
            // END TRANG GIỎ HÀNG


        case 'checkout':
            if (isset($_SESSION['cart'])&& (count($_SESSION['cart'])>0)){
                $tongDonHang = getTongDonHang();
                include 'view/checkout.php';

            } else{

                header('location: index.php?page=cart');
            }
            break;

        case 'detail':
            $title_search = '';
            if (isset($_GET['idsp'])) {
                $id = $_GET['idsp'];
                $sp_chitiet = get_sp_chitiet($id);
                $iddm = $sp_chitiet['iddm'];
                $title_search = get_thongtin_dm($iddm); //cái này tự thêm
                $sp_lien_quan = get_dssp_lien_quan($iddm, $id, 8);
                include 'view/detail.php';
            } else {

                include 'view/home.php';
            }
            break;

            // trang đăng nhập
        case 'dangNhap':
            if(isset($_SESSION['user'])){
                include 'view/home.php';
            } else {

                include 'view/login.php';
            }
            break;

            //đăng nhập
        case 'login':
            if (isset($_POST['btn-login'])) {
                
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $kt = check_user($email, $pass);
                // kiểm tra đúng tài khoản và mật khẩu
                
                if($kt && $kt['role']!=1){
                    $_SESSION['user'] = $kt;
                    header('location: index.php?page=myaccount');

                }else  {
                    $thongBao='Thông tin đăng nhập không chính xác vui lòng kiểm tra lại';
                
                 }
            }
            if(isset($_SESSION['user']) ){
                include 'view/home.php';
            } else {

                include 'view/login.php';
            }
            
            break;




            

            // trang đăng ký
        case 'dangKy':
            if(isset($_SESSION['user'])){
                include 'view/home.php';
            } else {

                include 'view/signUp.php';
            }
            break;

            // đăng ký
        case 'signUp':
            if (isset($_POST['btn-signup'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $phone=$_POST['phone'];
                
                $kt_signUp_email=check_taikhoan_email($email);
                $kt_signUp_phone=check_taikhoan_phone($phone);
                
                // extract($kt_signUp);
                if($kt_signUp_email){
                    // so sánh dữ liệu trong database nếu trùng bắt đăng ký lại
                    $thongBao='Email đã tồn tại';
                    
                }
                else if($kt_signUp_phone){
                    $thongBao='Số điện thoại đã tồn tại';
                }
                 else{
                    // không tồn tại email đăng kí thành công
                    // lấy thông tin
                    $kt_signUp=user_insert($username, $pass, $email,$phone);
                    
                   header('location: index.php?page=login');
                }
            }
            if(isset($_SESSION['user'])){
                include 'view/home.php';
            } else {

                include 'view/signup.php';;
            }
            
            break;

            case 'logout':
                if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
                    unset($_SESSION['user']);
                }
                header('location: index.php');
                break;    

        case 'myaccount':
            if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
               
                include 'view/myaccount.php';
            }else {
                include 'view/login.php';
            }
            break;

            case 'confirm':
                if(isset($_SESSION['user'])&& (count($_SESSION['user']) > 0) ){
                    include 'view/myaccount_confirm.php';
                }else {
                    include 'view/home.php';
                   
                }
                break;


        case 'updateUser':
            if (isset($_POST['btn-update'])) {
                $username = $_POST['username'];
                
                $diachi=$_POST['diachi'];
                $role=0;
                $id=$_POST['id'];
                // so sánh dữ liệu trong database nếu trùng bắt đăng ký lại
                // lấy thông tin
                user_update($username,$diachi,$role,$id);
            }
            header('location: index.php?page=myaccount');
          
           
            break;

            case 'donhang':               
                $tongDonHang = getTongDonHang();
                if(isset($_SESSION['user'])) {
                    $iduser=$_SESSION['user']['id'] ;
            

                if(isset($_POST['btn-dathang'])){
                    $username=$_POST['username'];
                    $email=$_POST['email'];
                    $phone=$_POST['phone'];
                    $diachi=$_POST['diachi'];
                    $nguoinhan_ten=$_POST['nguoinhan_ten'];
                    $nguoinhan_phone=$_POST['nguoinhan_phone'];
                    $nguoinhan_diachi=$_POST['nguoinhan_diachi'];
                    $pttt=$_POST['pttt'];
                    $ngaymua=date('Y-m-d');
                   
                    // Tạo đơn hàng
                    $madonhang="Ipun".$iduser."-".date("His-dmY");
                    $total=getTongDonHang();
                    $ship=0;
                    $voucher=10000;
                    $tong_thanhtoan=(int)$total+(int)$ship-(int)$voucher;
                    $idbill=bill_insert_id($iduser,$madonhang,$username,$email,$phone,$diachi,$nguoinhan_ten,$nguoinhan_phone,$nguoinhan_diachi,$total,$ship,$voucher,$tong_thanhtoan,$pttt);
                    
                    foreach($_SESSION['cart'] as $item){
                        extract($item);
                        cart_insert($_SESSION['user']['id'],$idpro,$price,$name,$img,$ngaymua,$soluong,$thanhtien,$idbill);
                    }
                   $_SESSION['cart']=[];
                    header('location:index.php?page=ctDoHang&iddh&iddh='.$idbill);
                
                } 
                
                // $loadOneBill=loadOneBill($idbill);
                // $loadAllPro=loadOneCart($idbill);
              
            }else {header('location:index.php');}
            
                break;



            case 'w':
                $loadOneBill=loadOneBill(19);
                $loadAllPro=loadOneCart(19);
                include 'view/checkout_confirm.php'; 
                break;

            case 'mybill':
                // load tất cả đơnn hàng từ id của người dùng đã đăng nhập
                if(isset($_SESSION['user'])){

                    $list_Bill= loadAllBill($_SESSION['user']['id']);
                    include 'view/mydonhang.php';
                } else{

                    header('location:index.php?page=home');
                }
                break;

            case 'ctDoHang':
                if (isset($_GET['iddh']) && ($_GET['iddh']>0 )) {
                    $id = $_GET['iddh'];
                    $ctDongHang = loadOneBill($id);
                    $ctProBill_User= loadOneCart($id);
                    include 'view/mydonhang_one.php';
                } else{

                
                header('location: index.php?page=mybill');
                }
             break;

        default:
            include 'view/home.php';
            break;
    }
}

include 'view/footer.php';
