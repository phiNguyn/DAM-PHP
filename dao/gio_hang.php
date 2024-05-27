<?php
    // insert vào giỏ hàng
    function cart_insert($iduser,$idpro,$price,$name,$img,$ngaymua,$soluong,$thanhtien,$idbill){
        $sql = "INSERT INTO cart(iduser,idpro,price,name,img,ngaymua,soluong,thanhtien,idbill) VALUES (?,?,?, ?, ?, ?, ?, ?, ?)";
     return   pdo_execute($sql, $iduser,$idpro,$price,$name,$img,$ngaymua,$soluong,$thanhtien,$idbill);
    }

    function cart(){
        $html_gio_hang='';
        $i=0;
        foreach($_SESSION['cart'] as $sp){ 
           extract($sp);
           $tien_1sp=(INT)$price*(INT)$soluong;
            
            $html_gio_hang.= '
            <div class="cart-left  bb">
                    <img class="bd-all" src="view/img/'.$img.'" alt="" width="auto">
                    <div class="cart-left-content  bd-all">
                   
                         <a href="index.php?page=detail&idsp='.$idpro.'"><h1 class="">'.$name.'</h1></a>
                        
                    </div>
                    <span class="bd-all flex-center">'.number_format($price, 0, ",", ".").' đ </span>
                    <div  type="text" class=" flex-jus-center" min="1" max="5">'.$soluong.'</div>
                    <div class="flex">
                        <span class="flex-jus-center">
                            <button class="minus btn">-</button>
                            <button class="plus btn">+</button>
                        </span>
                    </div>
                    <div class="flex-center">'.number_format($tien_1sp, 0, ",", ".").' đ</div>
                    <button type="submit" class="btn-icon"><a href="index.php?page=del&idsp='.$i.'"d><i class="fa-regular fa-trash-can fa-2xl"></i></a></button>
                </div>
                
            ';
            $i++;
        }  
        
        return $html_gio_hang;

    }

    // tính tổng tiền sản phẩm
    function getTongDonHang(){
       $tong=0;
        foreach($_SESSION['cart'] as $sp){ 
           extract($sp);
           $tien_1sp=(INT)$price*(INT)$soluong;
           $tong+= $tien_1sp;
        } 
        return $tong;
    }

    // số sản phâm trong giỏ hàng ở phần menu header  
    function tongSoSanPhamTrongGio(){
        $tongSanPham=0;
        foreach($_SESSION['cart'] as $sp){
            extract($sp);
            $tongSanPham+=$soluong;
        }
        return $tongSanPham;
    }


    function gioHangCheckout(){
        $html_gioHangCheckout='';
        foreach($_SESSION['cart'] as $sp){
            extract($sp);
            $tien_1sp=(INT)$price*(INT)$soluong;
            $html_gioHangCheckout.='
            <div class="checkout-right-box  bb">
                            <div class="bd-all" style="margin-right: 20px;">
                                <img  src="view/img/'.$img.' " alt="" width="100">
                            </div>
                            <div>
                                <span class="checkout-right-name">'.$name.'</span> </br>
                                <span class=" checkout-right-sl">X '.$soluong.'</span>
                                
                            </div>
                            <span class="pay-price">'.number_format($tien_1sp, 0, ",", ".").' đ</span>
                    </div>
            ';
        }
        return $html_gioHangCheckout;
    }
   
?>