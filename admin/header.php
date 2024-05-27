<?php
 if(isset($_SESSION['admin'])&&(count($_SESSION['admin'])>0)){
  extract($_SESSION['admin']);
  $html_name_admin='<div class="user_name_admin"><b>Hello '.$username.'</b></div>';
  
 }else{
  $html_name_admin='';
 }
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="view/style.css" />
    <link rel="stylesheet" href="view/custom.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    

    <!-- <script src="view/app.js"></script> -->
  </head>
  <body>
    <nav>
      <div class="logo-name">
        <div class="logo-image">
          <!-- <img src="view/img/logo.png" alt="" width="250"> -->
        </div>

        <span class="logo_name">Ipun</span>
      </div>

      <div class="menu-items">
        <ul class="nav-links">
          <li>
            <a href="index.php?page=danhmuc">
            <i class="fa-solid fa-bars"></i>
              <span class="link-name">Quản lí danh mục</span>
            </a>
          </li>
          <li>
            <a href="index.php?page=user">
            <i class="fa-regular fa-user"></i>
              <span class="link-name">Quản lí tài khoản</span>
            </a>
          </li>
          <li>
            <a href="index.php?page=sanpham">
            <i class="fa-regular fa-folder"></i>
              <span class="link-name">Quản lí sản phẩm</span>
            </a>
          </li>
          <li>
            <a href="index.php?page=home">
            <i class="fa-regular fa-star"></i>
              <span class="link-name">Đơn hàng</span>
            </a>
          </li>
          <li>
            <a href="index.php?page=home">
            <i class="fa-regular fa-comment"></i>
              <span class="link-name">Bình Luận</span>
            </a>
          </li>
          <li>
            <a href="index.php?page=home">
              <i class="uil uil-share"></i>
              <span class="link-name">Share</span>
            </a>
          </li>
        </ul>

        <ul class="logout-mode">
          <li>
            <a href="index.php?page=logout">
            <i class="fa-solid fa-arrow-right-from-bracket fa-rotate-180"></i>
              <span class="link-name">Logout</span>
            </a>
          </li>

          <li class="mode">
            <a href="#">
              <i class="uil uil-moon"></i>
              <span class="link-name">Dark Mode</span>
            </a>

            <div class="mode-toggle">
              <span class="switch"></span>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <section class="dashboard">
          <div class="top">
            <i class="fa-solid fa-bars sidebar-toggle"></i>

              <form action="index.php?page=sanpham" method="post" class="search-box">
                <input placeholder="Tìm kiếm ..." value="" name="keyWord" required="" type="text">
                <button name="timkiem" type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>

              </form>

              <?=$html_name_admin?>

                  <!-- Logo: position: absolute -->
              <div class="box-avatar">
                <a href="index.php?page=home"><img src="../view/img/IPUN.svg" alt=""></a>
              </div>

          </div>

      <div class="dash-content">
        

      
      