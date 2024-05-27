<?php
if($title_search!='')  $title= $title_search; 
else $title='Sản Phẩm';

    $html_sanpham_admin=show_all_sp_admin($admin_sanpham);
?>
<?php if(isset($thanhCong)) : ?>
  <div class="warning1 success bd-all">
   <?=$thanhCong?>
    </div>
<?php endif; unset($thanhCong);?>


<div class="activity">
          <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text"><?=$title?></span>
          </div>

          <button class="collapsible"><a href="index.php?page=add-sanpham">Têm sản phẩm</a></button>
         
       <br> <br>
    <table border="1" class="activity-data">

            <tr class="data names">
              <th class="data-title">Stt</th>
              <th class="data-title">Tên sản phẩm</th>
              <th class="data-title">Thành phần</th>
              <th class="data-title">Ảnh</th>
              <th class="data-title">Giá</th>
              <th class="data-title">Tồn Kho</th>
              <th class="data-title">Lượt xem</th>
              <th class="data-title">Chuyên mục hot</th>
              <th class="data-title">Chức năng</th>
            </tr>

            
           <?=$html_sanpham_admin?>
     
    </table>
</div>
