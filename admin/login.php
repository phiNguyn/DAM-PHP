<?php
 
  
  include '../dao/pdo.php';
  include '../dao/user.php';
  if(isset($_POST['btn-login'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $user_admin=check_user($email,$pass);
    if(isset($user_admin) && (is_array($user_admin)) && (count($user_admin)>0)){
      
      if($user_admin['role']==1){
        $_SESSION['admin']=$user_admin;
        header('location: index.php');
      } else{ 
        $thongBao='Tài khoản không được quyền truy cập';
        
      }

    }else{
      $thongBao='Thông tin đăng nhập không chính xác vui lòng kiểm tra lại';
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/login.css">
    <link rel="stylesheet" href="view/custom.css">
    
</head>
<body>
<?php if(isset($thongBao)) : ?>
  <div class="warning eror bd-all">
   <?=$thongBao?>
    </div>
<?php endif; unset($thongBao);?>

<div class="login-box ">
      <img src="../view/img/logo.png" alt="" width="100%" class="text-center">
      <h2>Đăng Nhập</h2>
     
      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div class="form">
          <label>Email</label>
          <input class="input" name="email" type="email" required>
          <span class="input-border"></span>
          </div>
       
          <div class="form mt-4">
          <label>Mật khẩu</label>
          <input class="input" name="pass" required type="password">
          <span class="input-border"></span>
          </div>

          <button type="submit" class="add btn-primary mt-6" name="btn-login"><span>Đăng nhập</span></button>
      </form>
    </div>

</body>
    <!-- <script>
        function kiemTra(){
        var ten =document.getElementById("ten");
        var mk = document.getElementById("mk");
        
        if(ten.value==""){
            alert("Bạn chưa nhập tên");
            ten.focus();
            return false;
        }
        if(mk.value==""){
            alert("Bạn chưa nhập mật khẩu");
            mk.focus();
            return false;
        }
        else if(mk.value.length<8){
            alert("Mk qua ngan");
            mk.focus(); 
            return false;
        }
        
        else {

        
            return true ;
        }

        }
    </script> -->
</html>