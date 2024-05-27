<?php
$count = count_sanpham();
$count_dm = count_danhmuc();
$count_donhang = count_donhang();
?>
<div class="overview">
  <div class="title">
    <i class="uil uil-tachometer-fast-alt"></i>
    <span class="text">Dashboard</span>
  </div>

  <div class="boxes">
    <div class="box box1">
      <i class="uil uil-thumbs-up"></i>
      <span class="text">Số danh mục</span>
      <span class="number"><?= $count_dm ?></span>
    </div>
    <div class="box box2">
      <i class="uil uil-comments"></i>
      <span class="text">Số sản phẩm</span>
      <span class="number"><?= $count ?></span>
    </div>
    <div class="box box3">
      <i class="uil uil-share"></i>
      <span class="text">Số đơn hàng</span>
      <span class="number"><?= $count_donhang ?></span>
    </div>


  </div>
</div>

<!-- starrt -->
<div class="activity">
  
<br>

<div class="flex">
  <div>
  <h1>Biểu đồ thống kê sản phẩm theo danh mục</h1>
    <div id="myChart" style="width:100%; height:400px"></div>
    <table border="1"  class="activity-data text-end table">
    <thead>

      <tr >
        <th class="data-title text-start">Danh mục</th>
        <th class="data-title">Số lượng</th>
        <th class="data-title">Giá trung bình</th>
        <th class="data-title">Giá cao nhất</th>
        <th class="data-title">Giá thấp nhất</th>
    </thead>


    <tbody>
      <?php foreach ($thongke as $item) {
        extract($item);
        echo '<tr >
          <td class="text-start">' . $name . '</td>
          <td>'.$SOLUONG.'</td>
          <td>' .number_format($Trungbinh, 0, ",", ".")  . ' đ </td>
          <td>' .number_format($Giamax, 0, ",", ".")  . ' đ</td>
          <td>' .number_format($Giamin, 0, ",", ".")  . ' đ</td>
        </tr>';
      } ?>


    </tbody>



  </table>
  </div>

  <div>
  <h1>Biểu đồ thống kê doanh thu theo tháng</h1>
    <div id="myChart2" style="width:100%; height:400px"></div>
    <table border="1"  class="activity-data text-end table">
    <thead>

      <tr>
        <th class="data-title text-start">Tháng/Năm</th>
        <th class="data-title">Số người mua</th>
        <th class="data-title">Số lượt mua</th>
        <th class="data-title">Số lượng</th>
        <th class="data-title">Doanh thu</th>
    </thead>


    <tbody>
      <?php foreach ($doanhthu as $item) {
        extract($item);
        echo '<tr >
          <td class="text-start">' . $NAM . '/'.$THANG.'</td>
          <td>'.$songuoimua.'</td>
          <td>' .$soluotmua. '  </td>
          <td>' .$soluong. ' </td>
          <td>' .number_format($doanhthu, 0, ",", ".")  . ' đ</td>
        </tr>';
      } ?>


    </tbody>
  </table>


    
  </div>

  
</div>
  <br> <br>
  


  <h1>Doanh thu</h1>
  

</div>
<!-- end -->


</table>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Your Function
function drawChart() {
  // Set Data
const data = google.visualization.arrayToDataTable([
  ['Chủ đề', 'Số lượng'],
  <?php foreach($thongke as $item){
    echo  " ['".$item['name']."',".$item['SOLUONG']."]," ;


  }?>
 
]);

// Set Options
const options = {
  title:'Thống kê sản phẩm ',
  is3D:true
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);


// Set Data
const data2 = google.visualization.arrayToDataTable([
  ['Chủ đề', 'Số lượng'],
  <?php foreach($thongke as $item){
    extract($item);
    echo  " ['".$name."',".$SOLUONG."]," ;
  //  echo "['".$THANG."/".$NAM."', ".$doanhthu."],";


  }?>
]);

// Set Options
const options2 = {
  title: 'World Wide Wine Production'
};

// Draw
const chart2 = new google.visualization.ColumnChart(document.getElementById('myChart2'));
chart2.draw(data2, options2);
}

</script>

<br>