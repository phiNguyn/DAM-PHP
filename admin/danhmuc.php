<?php
    $html_danhmuc_admin=show_admin_dm($danh_muc);
    
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
            <span class="text">Quản lí danh mục</span>
          </div>
          
          <button class="collapsible"><a href="index.php?page=add-dm">Thêm danh mục</a></button>
                   
    <br> <br>
    <table border="1" class="activity-data">

            <tr class="data-danhmuc">
              <th class="data-title">Stt</th>
              <th class="data-title">Ảnh</th>
              <th class="data-title">Tên danh mục</th>
              <th class="data-title">Hiển thị trang chủ</th>
              <th class="data-title">Thứ tự hiển thị</th>
              <th class="data-title">Mô tả</th>
              <th class="data-title">nội dung</th>
              <th class="data-title">Chức năng</th>
            </tr>

          
           

            
            <?=$html_danhmuc_admin?>
    </table>

    <div id="myChart2" style="width:100%; height:400px"></div>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Your Function
function drawChart() {
// Set Data
const data2 = google.visualization.arrayToDataTable([
  ['Tháng/Năm', 'Doanh Thu '],
  <?php foreach($doanhthu as $item){
    extract($item);
    echo "  ['".$THANG."/".$NAM."', ".$doanhthu." ],";
    
  }?>
]);

// Set Options
const options2 = {
  title: 'Biểu đồ doanh thu các tháng '
};

// Draw
const chart2 = new google.visualization.ColumnChart(document.getElementById('myChart2'));
chart2.draw(data2, options2);
}
</script>
</div>

