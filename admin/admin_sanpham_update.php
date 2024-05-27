<?php 
extract($sp_edit_func);


$html_option_dm='';
foreach($kq_op as $item){
  if($iddm==$item['id']){
    $selected="selected";
  }else{
    $selected ='';
  }
  $html_option_dm.= '<option '.$selected.'  value="'.$item['id'].'">'.$item['name'].'</option>';
}
?>
<?php if(isset($thanhCong)) : ?>
  <div class="warning1 success bd-all">
   <?=$thanhCong?>
    </div>
<?php endif; unset($thanhCong);?>

<?php if(isset($thongBao)) : ?>
  <div class="warning eror bd-all">
   <?=$thongBao?>
    </div>
<?php endif; unset($thongBao);?>

<div class="activity">
          <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text"></span>
          </div>

<form action="" method="post" enctype="multipart/form-data">
  <button name="btn-update-sp" type="submit" class="collapsible">Hoàn tất</button>
         
       <br> <br>
    <table border="1" class="activity-data">

            <tr class="data names ">
              <th class="data-title">Tên sản phẩm</th>
              <th class="data-title">Thành phần</th>
              <th class="data-title">Ảnh</th>
              <th class="data-title">Giá</th>
              <th class="data-title">Số lượng hàng</th>
              <th class="data-title">Lượt xem</th>
              <th class="data-title">Chuyên mục hot</th>
              <th class="data-title">Hiển thị sản phẩm</th>
              <th class="data-title">Loại Danh mục</th>
              
            </tr>

            
        <tr class="data names product">
        <th><input name="name" required="" type="text" class="w-full h-auto" value="<?=$name?>"></th>
        <th><input name="thanh_phan"  type="text" class="w-full h-auto" value="<?=$thanh_phan?>"></th>
        <th class="img-relative"><input name="img" type="file" class="w-full h-auto"><img src="../view/img/<?=$img?>" alt=""  ></th>
        <th><input name="price"  type="text" class="w-full h-auto" value="<?=$price?>"></th>
        <th><input name="soldout"  type="text" class="w-full h-auto "value="<?=$soldout?>" ></th>
        <th><input name="view" type="text" class="w-full h-auto" value="<?=$view?>"></th>
        <th><select name="bestseller" id="" class="w-full h-auto">
          <option name="bestseller" value="0" <?=($bestseller==0)?'selected': ''?>>Không</option>
          <option name="bestseller" value="1" <?=($bestseller==1)?'selected': ''?>>Có</option>
        </select></th>
        <th><select name="hienthi" id="" class="w-full h-auto">
          <option name="hienthi" value="0" <?=($hienthi==0)?'selected': ''?> >Không</option>
          <option name="hienthi" value="1" <?=($hienthi==1)?'selected': ''?> >Có</option>
        </select></th>
        <th><select name="iddm" id="" class="w-full h-auto" >
          <?=$html_option_dm?>
        </select></th>
        
        <input type="hidden" name="img" value="<?=$img?> ">
        <input type="hidden" name="id" value="<?=$id?>">
        </tr>
     
    </table>
</form>
</div>
