<?php
    $html_gio_hang=cart();
?>
      <main>
        <section class="grid-70-30">
            <!-- cart box chiễm 70% -->
            <div class="cart-box br"> 
                <!-- Kiểm tra giỏ hàng -->
            <h1 class="mt-4" style="text-align: center;">Giỏ hàng <?=$check_giohang?></h1>
                <?=$html_gio_hang?>
               
            </div>
            

            <!-- cart right chiễm 30% -->
            <div class="cart-right ">
               
                <div class="absolute-center">
                <h1>Tổng đơn hàng</h1>
                <div class="banhSN-content_h2 "><?=number_format($tongDonHang, 0, ",", ".")?> đ</div>
                <?=$check_btn_thanh_toan?>
                <!-- <a href="index.php?page=checkout"><button class="add margin-0">Thanh toán</button></a> -->

                </div>
                

            <?=$check_btn_xoa?>
            </div>
        </section>

      </main>