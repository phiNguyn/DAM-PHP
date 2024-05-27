<?php
if(isset($_SESSION['user'])&&(count($_SESSION['user'])>0)){
  extract($_SESSION['user']);
  $html_account='<a href="index.php?page=myaccount" class="menu-span">
  <span><i class="fa-regular fa-user fa-xl"></i></span>
  <span style="margin-left: 0.5rem; display: inline;">'.$username.'</span>
</a>';
} else{
  $html_account='
  <a href="index.php?page=dangNhap" class="menu-span">
  <span><i class="fa-regular fa-user fa-xl"></i></span>
  <span style="margin-left: 0.5rem; display: inline;">Đăng nhập</span>
</a>
  ';
}

?>
<?php
$menu=menu(1);
  $html_nav='';
  foreach($menu as $item){
    extract($item);
    $html_nav.='
   
    <span><a href="index.php?page=products&iddm='.$id.'">'.$name.'</a></span>
  
        ';
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ipun</title>
    <link rel="stylesheet" href="view/css/index.css" />
    <link rel="stylesheet" href="view/css/base.css" />
    <link rel="stylesheet" href="view/css/reset.css" />
    <link rel="stylesheet" href="view/css/test.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Inter:wght@200;300;600&display=swap" rel="stylesheet">
    <!-- end font -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
  </head>

  <body>
  <div class="wrapper">
        <header class="header bt ">
        <div class="header-main relative">
          <div class="header-logo">
          <a href="index.php">
            <img src="view/img/IPUN.svg" alt="" />
          </a>
          </div>
          <nav class="nav bb">
            <div class="menu" title="Điều hướng">
             <?=$html_account?>
              <!-- <a href="index.php?page=dangNhap" class="menu-span">
                <span><i class="fa-regular fa-user fa-xl"></i></span>
                <span style="margin-left: 0.5rem; display: inline;">Đăng nhập</span>
              </a> -->
            </div>

            <div class="header-order">
              <div class="header-order_link"><a href="index.php?page=products">SẢN PHẨM</a></div>
              <div class="header-order_link cart">
                <a href="index.php?page=cart">
                  <span class="relative"><img src="view/img/cart.svg" alt=""></i><span class="sl"><?=$tongSanPham?></span></span>
                  <span style="margin-left: 5px;">Giỏ</span>
                </a>
              </div>
            </div>
          </nav>



        </div>
   
              <div class="slide grid-2 bb">
                <div class="flex slide-list">
                <?=$html_nav?>
                </div>
                    <!-- <span><a href="">Bánh Sinh nhật</a></span>
                    <span><a href="">Bánh nửa Entremet</a></span>
                    <span><a href="">Phụ kiện</a></span> -->
                  <form action="index.php?page=products" method="post" class="form-search">
                  <div class="form flex">
                  <input class="input" placeholder="Tìm kiếm ..." value="" name="keyWord" required="" type="text">
                  <button name="timkiem" type="submit"><i class="fa-solid fa-magnifying-glass fa-xl"></i></button>
                  <span class="input-border"></span>
                  </div>
                  </form>
              </div> 
          </header>