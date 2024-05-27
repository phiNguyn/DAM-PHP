<main>
<section class="about" style="height: auto;">
<!-- start div about-left -->
<div class="about-left padding-top-bottom">
<!-- start div about-left -->
<?php if(isset($thongBao)) : ?>
  <div class="warning eror bd-all">
   <?=$thongBao?>
    </div>
<?php endif; unset($thongBao);?>
    <div class="login-box bd-all">
      
  
      <h2>Đăng Ký</h2>
      
      <form action="index.php?page=signUp" method="post">
        <div class="form">
          <label>Họ tên</label>
          <input class="input" name="username" required="" type="text">
          <span class="input-border"></span>
        </div>
       
        <div class="form mt-4">
          <label>Email</label>
          <input class="input" name="email" placeholder="Dùng để đăng nhập"   required="" type="email">
          <span class="input-border"></span>
        </div>

        <div class="form mt-4">
          <label>Số điện thoại</label>
          <input class="input" name="phone"  required="" type="number">
          <span class="input-border"></span>
        </div>

        

        <div class="form mt-4">
          <label>Mật khẩu</label>
          <div class="relative password-toggle">
            <input class="input" name="pass" required="" type="password">
            <span class="icon">
              <img class="icon-eye " src="view/img/eye.svg" alt="">
              <img class="icon-eye is-active" src="view/img/eye-slash.svg" alt="">
            </span>
            <span class="input-border"></span>
          </div>
          </div>

          

        <button type="submit" class="add btn-primary mt-6" name="btn-signup"><span>Đăng Ký</span></button>
      </form>

     
    </div>
<!-- end div about-left -->
</div>
<!-- end div about-left -->

        </section>
 </main>