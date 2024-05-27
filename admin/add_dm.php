<?php
?>
<a onclick='confirm("Bạn chắc chứ")' href="">sss</a>
<div class="activity">
  <div class="title">
    <i class="uil uil-clock-three"></i>
    <span class="text">Thêm danh mục mới</span>
  </div>

  <?php if(isset($thongBao)) : ?>
  <div class="warning eror bd-all">
   <?=$thongBao?>
    </div>
<?php endif; unset($thongBao);?>

<?php if(isset($thanhCong)) : ?>
  <div class="warning1 success bd-all">
   <?=$thanhCong?>
    </div>
<?php endif; unset($thanhCong);?>


  <form action="" method="post" enctype="multipart/form-data">
  <button type="submit" name="btn-themDM" class="collapsible">Hoàn tất</button>
  <br> <br>
  <table border="1" class="activity-data">

    <tr class="data-danhmuc-add">
      
      <th class="data-title">Tên danh mục</th>
      <th class="data-title">Ảnh</th>
      <th class="data-title">Hiển thị trang chủ</th>
      <th class="data-title">Hiển thị ở Menu</th>
      <th class="data-title">Mô tả</th>
      <th class="data-title">nội dung</th>
      
    </tr>



  <tr class="data-danhmuc-add">
   
    <th><input name="name" required="" type="text" class="w-full h-auto"></th>
    <th><input name="img" type="file" class="w-full h-auto"></th>
    <th><select name="home" id="" class="w-full">
      <option name="home" selected  value="0">Không</option>
      <option name="home" value="1">Có</option>
    </select></th>
    <th><select name="stt" id="" class="w-full">
      <option name="stt" value="0">Không</option>
      <option name="stt" value="1">Có</option>
      

    </select></th>
    <th><input name="mota" type="text" class="w-full h-auto"></th>
    <th><input name="content" type="text" class="w-full h-auto"></th>
   
    
 
  </tr>
  
</table>

</form>

</div>