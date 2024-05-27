<?php 
extract($sp_chitiet);
if($soldout==0){
  
  $het_hang='<span class="add btn-primary">Hết hàng</span>';
} else  {
  $het_hang='<button type="submit" class="add btn-primary" name="themsp"><span>Thêm vào giỏ • '.number_format($price, 0, ",", ".").' đ</span></button>';
}
  $html_sp_lien_quan=show_dssp($sp_lien_quan);

?>

          <!-- start main -->
          <main>
            <section class="relative grid-2 detail">
                        <div class="detail-left br">
                            <div class="relative detail-left-item">
                              <img src="view/img/<?=$img?>" alt="" id="anh">
                            </div>
                            <div class="detail-left-album bt bb br">
                            <img onclick="chonAnh(this)" src="view/img/cake-2.png" alt="">
                            <img onclick="chonAnh(this)"  src="view/img/<?=$img?>" alt="">
                            <img onclick="chonAnh(this)" src="view/img/<?=$img?>" alt="">
                            <img onclick="chonAnh(this)" src="view/img/<?=$img?>" alt="">
                            <img onclick="chonAnh(this)" src="view/img/<?=$img?>" alt=""> 
                            </div>
                        </div>
              

                
                <div class="detai-right">
                  <div class="detai-right-tag">
                    <a href=""><?=$title_search?></a>
                  </div>
                  <h1> <?=$name?> </h1>
                  <form action="index.php?page=addcart" method="post">
                    
                  <div class="detai-right-btn">
                  
                          <span class="flex mr-4" >
                            <div  class="btn flex-center">-</div>
                            <select name="soluong" id="" >
                              <option value="1" name="soluong" selected >1</option>
                              <option value="2" name="soluong">2</option>
                              <option value="3" name="soluong">3</option>
                              <option value="4" name="soluong">4</option>
                            </select>
                            <!-- <input  name="soluong" class="number" type="number" value="1" min="1" max="5"> -->
                            <div class="btn flex-center">+</div>
                          </span>
                   
                    
                    <input type="hidden" name="img" value="<?=$img?>">  
                    <input type="hidden" name="name" value="<?=$name?>">  
                    <input type="hidden" name="price" value="<?=$price?>">  
                    <input type="hidden" name="idpro" value="<?=$id?>"> 
                    <?=$het_hang?> 
                    <!-- <button type="submit" class="add btn-primary" name="themsp"><span>Thêm vào giỏ • <?=number_format($price, 0, ",", ".")?> đ</span></button> -->
                    </form>     
                  </div>

                  <div class="detai-right-content">
                    <span class="detai-right-content-text"> <?=$thanh_phan?> </span>
                    <span class="">
                      <p>Một chiếc bánh tươi mát với lớp mousse làm từ xoài tươi có vị ngọt thanh, Secret Garden trở nên thú vị hơn bởi sự kết hợp của lớp bạt bánh có hương lá dứa tươi và lớp kem phô mai - cream cheese thơm ngậy.</p>
                      <p>Vẻ ngoài lấp lánh được phủ bởi lớp tráng gương màu xanh bơ và cánh bướm trắng độc đáo từ sô-cô-la nguyên chất, Secret Garden mang thông điệp về sự lãng mạn & tinh thần tự do.</p>
                    </span>
                  </div>

                  <div class="des1 des bt-100">
                    <h3>cảm giác bánh</h3>
                    <div>
                      <span>Nhiệt đới</span>
                      <span>Ngọt thanh</span>
                      <span>Chua nhẹ</span>
                    </div>
                  </div>

                  <div class="des2 des bt-100">
                    <h3>Cấu trúc vị bánh</h3>
                    <ul>
                      <li>Lớp 01: Phủ tráng gương bóng</li>
                      <li>Lớp 02: Kem mousse xoài tươi</li>
                      <li>Lớp 03: Bạt bánh lá dứa mềm</li>
                      <li>Lớp 04: Mứt xoài tươi nấu tay</li>
                      <li>Lớp 05: Kem phô-mai creamcheese</li>
                      <li>Lớp 06: Bạt bánh lá dứa mềm</li>
                    </ul>
                  </div>

                  <div class="des3 des bt-100">
                    <h3>Kích thước</h3>
                    <span>
                      <p>Đường kính: 18cm | Chiều cao: 5cm</p>
                      <p>Dành cho 5-10 người ăn</p>
                    </span>
                  </div>

                  <div class="des2 des bt-100">
                    <h3>PHỤ KIỆN TẶNG KÈM</h3>
                    <ul>
                      <li>01 Chiếc nến sinh nhật</li>
                      <li>01 Bộ đĩa và dĩa dành cho 10 người</li>
                      <li>01 Dao cắt bánh</li>
                    </ul>
                  </div>

                  <div class="des2 des bt-100">
                    <h3>HƯỚNG DẪN SỬ DỤNG</h3>
                    <ul>
                      <li>Luôn giữ bánh trong hộp kín & bảo quản trong ngăn mát tủ lạnh</li>
                      <li>Không nên để bánh ở nhiệt độ phòng quá 30 phút (Bánh sẽ bị chảy)</li>
                      <li>Sử dụng trong vòng 03 ngày</li>
                    </ul>
                  </div>

                </div>
            </section>

            <section class="bt bb propose">
              <div class="propose-con"> 
                <h2>Có thể bạn sẻ thích</h2>
                  <swiper-container
                          class="mySwiper "
                          pagination="true"
                          pagination-clickable="true"
                          slides-per-view="4"
                          space-between="20"
                        >
                        <?=$html_sp_lien_quan?>
                      </swiper-container>
              </div>
            </section>

          </main>    <!-- end main -->
    

    

    