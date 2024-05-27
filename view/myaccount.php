<?php
     if(isset($_SESSION['user'])&&(count($_SESSION['user'])>0))
     extract($_SESSION['user']);
     $user_info=get_user($id);
     extract($user_info);
    
?>
<main>
<?php if(isset($thongBao)) : ?>
  <div class="warning success bd-all">
   <?=$thongBao?>
    </div>
<?php endif; unset($thongBao);?>

<section class="" style="height: auto;">

    <div class="w-full padding-all-2rem">
    <a class="mt-6" href="index.php?page=mybill">Đơn hàng của tôi</a>
        <div class="login-box ">
  
            <h2>Thông tin tài khoản</h2>
      
          <div class="form">
          <label>Tên</label>
          <div class="input"><?=$username?></div>
          <span class="input-border"></span>
          </div>
       
          <!-- <div class="form mt-4">
          <label>Mật khẩu</label>
          <div class="input" ><?=$pass?></div>
          <span class="input-border"></span>
          </div> -->

          <div class="form mt-4">
          <label>Email</label>
          <div class="input"><?=$email?></div>
          <span class="input-border"></span>
          </div>

          <div class="form mt-4">
          <label>Số điện thoại</label>
          <div class="input"><?=$phone?></div>
          <span class="input-border"></span>
          </div>

          <div class="form mt-4">
          <label>Địa chỉ</label>
          <div class="input"><?=$diachi?></div>
          <span class="input-border"></span>
          </div>

          <input type="hidden" name="id" value="<?=$id?>">
          <a href="index.php?page=confirm"><button class=" add btn-primary mt-6" name=""><span>Điều chỉnh thông tin</span></button></a>
        </div>

        <a class="w-full flex-center" href="index.php?page=logout"><button class="add w-fit-content" name="btn-logout">Đăng Xuất</button></a>
    </div>


    
</section>
</main>