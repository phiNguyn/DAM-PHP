<?php
extract($dm_edit_func);
?>
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
  <button type="submit" name="btn-updateDM" class="collapsible">Hoàn tất</button>
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
   
    <th><input name="name" required="" type="text" value="<?=$name?>" class="w-full h-auto"></th>
    <th class="img-relative"><input name="img" type="file" class="w-full h-auto"  > <img src="../view/img/<?=$img?>" alt="" width="100" ></th>
    <th><select name="home" id="" class="w-full">
      <option name="home" value="0" <?=($home==0)?'selected': ''?>>Không</option>
      <option name="home" value="1" <?=($home==1)?'selected': ''?>>Có</option>
    </select></th>
    <th><select name="stt" id="" class="w-full">
      <option name="stt"  value="0" <?=($stt==0)?'selected': ''?> >Không</option>
      <option name="stt" value="1"  <?=($stt==1)?'selected': ''?>>Có</option>
      

    </select></th>
    <th><input  name="mota" type="text" class="w-full h-auto" value="<?=$mota?>"></th>
    <th><input name="content" type="text" class="w-full h-auto" value="<?=$content?>"></th>
   
    
    <input type="hidden" name="img" value="<?=$img?> ">
        <input type="hidden" name="id" value="<?=$id?>">
  </tr>
  
</table>

</form>

</div>