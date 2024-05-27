<!-- <?php
if(is_array($list_Bill)){
    $html_list_Bill='';
    $i=1;
    foreach($list_Bill as $item){
        extract($item);
        $html_list_Bill.='
        <tr>
        
        <td >'.$i.'</td>
        <td ><a title="Xem chi tiết đơn hàng" href="index.php?page=ctDoHang&iddh='.$id.'"> '.$madonhang.' </a></td>
        <td >'.$pttt.'</td>
        <td>'.number_format($tong_thanhtoan, 0, ",", ".").' đ</td>
        <td>Đang xử lý</td>
        <td >Shipper đang lấy hàng</td>
        <td ></td>
        </tr>
        ';
        $i++;
    } 
}

?> -->
<img src="" alt="">
<main>
    <section class="">
        <!-- Thông tin của người mua -->
        <div class="cart-box padding-all-2rem">
            <h1 class="text-center">Đơn hàng của tôi</h1>
            <!-- Trường hợp người mua hàng có tài khoản thì hiển thị thông tin này -->
            <div class="w-full mt-6 text-center">
                <table class=" w-full" border=1>
                    <tr>
                        <th>STT</th>
                        <th>Mã đơn hàng</th>    
                        <th>Phương thức thanh toán</th>
                        <th>Tổng tiền</th>
                        <th>Trang thái đơn hàng</th>
                        <th>Vận chuyển</th>
                        <th>Ảnh</th>
                    </tr>

                    <tr>
                      <?=$html_list_Bill?>
                    </tr>
                </table>


            </div>

           
      




            <!-- end checkout-left -->

        </div>
        <!-- end checkout-left -->




        <!-- Phần giỏ hành -->
        


    </section>

</main>