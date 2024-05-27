<?php
if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
  $username = $_SESSION['user']['username'];
  $email = $_SESSION['user']['email'];
  $phone = $_SESSION['user']['phone'];
  $diachi = $_SESSION['user']['diachi'];
  $btn_dathang = ' <div class="w-full flex-center">Bằng việc bấm xác nhận đặt hàng, đơn hàng của bạn sẽ đặt thành công và chờ giao hàng</div>
  <div class="w-full flex-center"><button type="submit" name="btn-dathang" class="add mt-6 btn-primary" style="width:fit-content">Xác nhận đặt hàng</button></div> <br>
 
  ';
} else {
  $username = '';
  $email = '';
  $phone = '';
  $diachi = '';
  $btn_dathang = ' <div class="w-full flex-center"><a href="index.php?page=login" class="add mt-6 btn-primary" style="width:fit-content">Đăng nhập để mua hàng</a></div>';
}
$html_gioHangCheckout = gioHangCheckout();
?>
<!-- start main -->
<main>
  <!-- Phần thông tin giỏ hàng -->
  <form action="index.php?page=donhang" method="post" class="pay grid-2 bb">

    <!-- Thông tin của người mua -->
    <div class="checkout-left">


      <h1>Thông tin người đặt hàng</h1>
      <!-- Form nhập thông tin của người mua -->
      <div class="form">
        <input title="Điền họ tên" class="input" placeholder="Họ tên" name="username" value="<?= $username ?>" required="" type="text">
        <span class="input-border"></span>
      </div>

      <div class=" mt-6 grid-60-30-gap">
        <div class="form">
          <input class="input" placeholder="Email" name="email" value="<?= $email ?>" required="" type="text">
          <span class="input-border"></span>
        </div>
        <div class="form ">
          <input class="input" placeholder="Số điện thoại" name="phone" value="<?= $phone ?>" required="" type="number">
          <span class="input-border"></span>
        </div>
      </div>

      <div class="form mt-6">
        <input class="input" placeholder="Địa chỉ" value="<?= $diachi ?>" name="diachi" required="" type="text">
        <span class="input-border"></span>
      </div>
      <!-- <div class="gap-50px mt-6 grid-2">
                        <div class="">
                          <select name="" id="">
                            <option selected value="">Tỉnh / Thành Phố</option>
                            <option value="">Hồ Chí Minh</option>
                          </select>
                         
                        </div>

                        
                        <div class="">
                          <select name="" id="">
                            <option selected value="">Quận / Huyện</option>
                            <option value="">Quận 12</option>
                          </select>
                         
                        </div>
                        
                      </div>
                          
                      <div class="mt-6">
                        <select name="" id="">
                          <option selected value="">Phường / Xã</option>
                          <option value="">Tân Chánh Hiệp</option>
                        </select>
                      </div> -->

      <div class="mt-6"></div>
      <span class="mt-6" id="btn-thaydoi" style="cursor:pointer">Thay đổi thông tin</span>

      <div class="mt-4" id="ttNhanHang" style="display: none;"> <span style="cursor:pointer" class="close w-fit-content add mt-6 btn-primary">&times;</span>
        <h1>Thông tin người nhận hàng</h1>
        <div class=" mt-6 grid-60-30-gap">
          <div class="form">
            <input class="input" placeholder="Họ tên" name="nguoinhan_ten" value="" type="text">
            <span class="input-border"></span>
          </div>
          <div class="form ">
            <input class="input" placeholder="Số điện thoại" name="nguoinhan_phone" value="" type="number">
            <span class="input-border"></span>
          </div>
        </div>

        <!-- Ngày giao -->

        <!-- Ngày giao -->

        <div class="form mt-6">
          <input class="input" placeholder="Địa chỉ" name="nguoinhan_diachi" value="" type="text">
          <span class="input-border"></span>
        </div>
      </div>




      <script>
        const linkNhanHang = document.getElementById("ttNhanHang");
        var span = document.getElementsByClassName("close")[0];

        const btnDatHang = document.getElementById("btn-thaydoi");
        btnDatHang.onclick = function() {
          linkNhanHang.style.display = "block";
        };
        span.onclick = function() {
          linkNhanHang.style.display = "none";
        }
      </script>
      <!-- end checkout-left -->

    </div>
    <!-- end checkout-left -->




    <!-- Phần giỏ hành -->
    <div class="checkout-right bl ">
      <h1>Giỏ hàng</h1>

      <?= $html_gioHangCheckout ?>
      <!-- Phần sản phẩm -->





      <!-- Phần tính tổng đơn hàng -->
      <div class="tong grid-2">

        <span>Tổng</span> <span><?= number_format($tongDonHang, 0, ",", ".") ?> đ</span>
      </div>

      <div class="padding-all-2rem"> <span>Phương thức thanh toán</span> <br>
        <div class="mt-6">
          <input type="radio" name="pttt" value="Tiền Mặt" checked> Tiền Mặt <br>
          <input type="radio" name="pttt" value="Ví điện tử"> Ví điện tử <br>
          <input type="radio" name="pttt" value="Chuyển khoản"> Chuyển khoản <br>
          <input type="radio" name="pttt" value="Thanh toán online"> Thanh toán online <br>
        </div>
      </div>


      <?= $btn_dathang ?>

      <!--end checkout-right bl  -->
    </div>
    <!--end checkout-right bl  -->

  </form>

</main> <!-- end main -->