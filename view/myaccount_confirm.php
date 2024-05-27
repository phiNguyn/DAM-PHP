<?php
     if(isset($_SESSION['user'])&&(count($_SESSION['user'])>0)){
     extract($_SESSION['user']);
     $user_info=get_user($id);
     extract($user_info);
     }
?>
<main>
    <section class="about" style="height: auto;">
        <div class="about-left padding-all-2rem">
    <div class="login-box bd-all">
  
      <h2>Tài khoản</h2>
      <form action="index.php?page=updateUser" method="post">
          <div class="form">
          <label>Tên</label>
          <input class="input" name="username" value="<?=$username?>" required="" type="text">
          <span class="input-border"></span>
          </div>
       
          <!-- <div class="form mt-4">
          <label>Mật khẩu</label>
          <div class="relative password-toggle">
            <input class="input" name="pass" value="<?=$pass?>" required="" type="password">
            
            <span class="icon">
              <img class="icon-eye " src="view/img/eye.svg" alt="">
              <img class="icon-eye is-active" src="view/img/eye-slash.svg" alt="">
            </span>
            <span class="input-border"></span>
          </div>
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
          <input class="input" name="diachi" value="<?=$diachi?>" placeholder="Trống"  type="text">
          <span class="input-border"></span>
          </div>

          <input type="hidden" name="id" value="<?=$id?>">
        <button class="add btn-primary mt-6" name="btn-update"><span>Lưu</span></button>
      </form>

     
    </div>

    <a href="index.php"><button class="add mt-6" name="btn-logout"><span>Về trang chủ</span></button></a>
        </div>
    </section>
</main>