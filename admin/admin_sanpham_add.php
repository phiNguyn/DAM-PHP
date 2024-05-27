<?php
$html_option_dm='';
foreach($kq_op as $item){
 
  $html_option_dm.= '<option  value="'.$item['id'].'">'.$item['name'].'</option>';
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
  <button name="btn-addSP" type="submit" class="collapsible">Thêm sản phẩm</button>
         
       <br> <br>
    <table border="1" class="activity-data">

            <tr class="data names">
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

            
        <tr class="data names">
        <th><input name="name" required="" type="text" class="w-full h-auto"></th>
        <th><input name="thanh_phan"  type="text" class="w-full h-auto"></th>
        <th><input name="img" required="" type="file" class="w-full h-auto"></th>
        <th><input name="price" required="" type="text" class="w-full h-auto"></th>
        <th><input name="soldout" required="" type="text" class="w-full h-auto"></th>
        <th><input name="view" required="" type="text" class="w-full h-auto"></th>
        <th><select name="bestseller" id="" class="w-full h-auto">
          <option name="bestseller" value="0">Không</option>
          <option name="bestseller" value="1">Có</option>
        </select></th>
        <th><select name="hienthi" id="" class="w-full h-auto">
          <option name="hienthi" value="0">Không</option>
          <option name="hienthi" value="1">Có</option>
        </select></th>
        <th><select name="iddm" id="" class="w-full h-auto" >
          <?=$html_option_dm?>
        </select></th>
        
        
        </tr>
     
    </table>
</form>
</div>
