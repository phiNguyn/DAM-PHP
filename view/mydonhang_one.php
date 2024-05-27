<!-- <?php
$html_AllBllPro_One_User='';
foreach($ctProBill_User as $item){
    extract($item);
    $html_AllBllPro_One_User.=
    '
    <tr>
                     <td class="td-img"><img src="view/img/'.$img.'" alt="" ></td>
                     <td>'.$name.'</td>
                     <td>'.number_format($price, 0, ",", ".").'đ</td>
                     <td>'.$soluong.'</td>
                     <td>'.number_format($thanhtien, 0, ",", ".").'đ</td>
                    </tr>
    ';
}
extract($ctDongHang);
?> -->

<main>
    <section class="">

        <!-- Thông tin của người mua -->
        <div class="cart-box padding-all-2rem">
            <h1 class="text-center">Thông tin người đặt hàng</h1>
            <!-- Trường hợp người mua hàng có tài khoản thì hiển thị thông tin này -->
            <div class="w-full mt-6 text-center">
                <table class="w-full" border=1>
                    <tr>
                        <th>Mã đơn hàng</th>    
                        <th>Tên</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Phương thức thanh toán</th>
                    </tr>

                    <tr>
                     <td><?=$madonhang?></td>
                     <td><?=$nguoidat_ten?></td>
                     <td><?=$nguoidat_phone?></td>
                     <td><?=$nguoidat_diachi?></td>
                     <td><?=$pttt?></td>
                    </tr>

                </table>


            </div>

            <h1 class="mt-6 text-center">Thông tin người nhận hàng</h1>
            <div class="w-full mt-6 text-center">
                <table class="w-full" border=1>
                    <tr>
                        <th>Người nhận</th>    
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Tổng tiền</th>
                        <th>Ship</th>
                        <th>Voucher</th>
                        <th>Tổng thanh toán</th>
                    </tr>

                    <tr>
                     <td><?=$nguoinhan_ten?></td>
                     <td><?=$nguoinhan_phone?></td>
                     <td><?=$nguoinhan_diachi?></td>
                     <td><?=number_format($total, 0, ",", ".")?>đ</td>
                     <td><?=number_format($ship, 0, ",", ".")?>đ</td>
                     <td><?=number_format($voucher, 0, ",", ".")?>đ</td>
                     <td><?=number_format($tong_thanhtoan, 0, ",", ".")?>đ</td>
                    </tr>

                </table>


            </div>





            <h1 class="mt-6 text-center">Thông Sản phẩm</h1>
            <div class="w-full mt-6 text-center">
                <table class="w-full" border=1>
                    <tr>
                        <th>Ảnh</th>    
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>

                    <?=$html_AllBllPro_One_User?>
                    
                </table>


            </div>

            
      




            <!-- end checkout-left -->

        </div>
        <!-- end checkout-left -->




                    <!-- Phần giỏ hành -->
                    <div class="cart-right bl">
                        <h1 class="text-center">Thông tin sản phẩm</h1>
                        <div class="absolute-center">
                    

                        </div>


                    </div>
                    <!-- Phần giỏ hành -->


    </section>

</main>