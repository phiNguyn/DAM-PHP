 <main>
 
 <?php if(isset($thongBao)) : ?>
  <div class="warning eror bd-all">
   <?=$thongBao?>
    </div>
<?php endif; unset($thongBao);?>
<section class="about" style="height: auto;">
<div class="about-left padding-top-bottom">



    <div class="login-box bd-all">
  
      <h2>Đăng Nhập</h2>
      
      <form action="index.php?page=login" method="post">
        <div class="form">
          <label>Email</label>
          <input class="input" name="email" required="" type="email">
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

          <button type="submit" class="add btn-primary mt-6" id="btn-login" name="btn-login"><span>Đăng nhập</span></button>
      </form>
     <div>
      <h3 class="mt-6 text-center">Chưa có tài khoản?</h3>
       <a class="add mt-6" href="index.php?page=dangKy">Đăng Ký</a>
       
     </div>
     <a class=" text-center mt-6" href="">Quên mật khẩu?</a>
    </div>
   
</div>


        </section>
 </main>