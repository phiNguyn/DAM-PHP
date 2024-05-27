<?php
    $html_user_admin='';
    $i=1;
    foreach($admin_user as $item){
        extract($item);
        $html_user_admin.='
        <tr class="data-user">
        <th>'.$id.'</th>
        <th>'.$username.'</th>
        <th>'.$pass.'</th>
        <th>'.$phone.'</th>
        <th>'.$email.'</th>
        <th>'.$diachi.'</th>
        <th>'.$role.'</th>
        <th>
        <a href="admin.php?page=sua_user&id='.$id.'"><i class="fa-solid fa-gear fa-xl"></i></a> - 
        <a href="admin.php?page=xoa_user&id='.$id.'"><i class="fa-regular fa-trash-can fa-xl"></i></a>
        </th>
    </tr>
        ';
        $i++;
    }
    ?>
<div class="activity">
          <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text">Quản lí tài khoản: có <?=$count_user?> tài khoản khách hàng</span>
          </div>
          <button class="collapsible">Thêm sản phẩm</button> 
<div class="content">
  <br>
    <form class="form" action="admin.php?page=them_user" method="post">
        <input type="text" id="ten" placeholder="Ten" name="username">
        <input type="text" id="pass" placeholder="Mat khau" name="password">
        <input type="text" id="phone" placeholder="SDT" name="phone"> 
        <input type="email" id="email" placeholder="Mail" name="mail"> 
        <select placeholder="Chon loai user" name="loai_user">
            <option value="1">Admin</option>
            <option value="2" selected >User</option>
        </select> 
        <input type="submit" value="Thêm" name="add_user">
    
    </form>
</div>
<br>

    
    <table border="1" class="activity-data">

            <tr class="data-user">
              <th class="data-title">Stt</th>
              <th class="data-title">Tên</th>
              <th class="data-title">Mật khẩu</th>
              <th class="data-title">Số điện thoại</th>
              <th class="data-title">Mail</th>
              <th class="data-title">Địa chỉ</th>
              <th class="data-title">Loại user</th>
              <th class="data-title">Chức năng</th>
            </tr>

         
           

           
            <?=$html_user_admin?>
</table>

</div>