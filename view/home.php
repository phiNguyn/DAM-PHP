<?php
$html_danhmuc=show_dm($danh_muc);

$html_dssp_best=show_dssp($dssp_best);

// $html_danhmuc='';
  // foreach($danh_muc as $sp){
  //   extract($sp);
  //   $html_danhmuc.='
  //   <li class="product-item br">
  //                     <a href="index.php?page=products">
  //                     <h2 class="product-item_type">'.$name.'</h2> 
  //                     <p class="product-text">'.$mota.'</p>
  //                     <img src="view/img/'.$img.'" alt="">
  //                     <span>Xem tất cả</span>

  //                   </a>

  //                 </li>
  //   ';
  // }

  // $html_dssp_best='';
  // foreach($dssp_best as $sp){
  //   extract($sp);
  //   $html_dssp_best .='
  //   <a title="Lượt xem: '.$view.'" href="index.php?page=detail&idsp='.$id.'" class="banh-ngon-list_item">
  //   <div class="ani"><span>'.$name.'</span><p>'.$thanh_phan.'</p></div>
  //   <div class="banh-ngon-list_absolute">
  //       <img  src="view/img/'.$img.'" alt="">
  //     <span class="banh-ngon_link">Xem thêm</span>
  //   </div>  
  // </a>
  //   ';
  // }

  
?>


<main>
        <section class="banner">
            <img class="banner-img-absolute" src="https://lafuong.com/_next/image?url=%2FLF_Cover.webp&w=3840&q=75" alt="">
          <div class="all-products-link bd-all">
              <a href="index.php?page=products"><span>TẤT CẢ SẢN PHẨM</span></a>
          </div>
        </section>

        <section class="about relative bt">
          <div class="about-left">
            <span class="about-left_text">IPUN LÀ</span>
            <h2 class="about-left_h2">Lựa chọn lý tưởng cho bánh ngọt chuẩn Pháp</h2>
            <p class="about-left_p">Dành nhiều tình cảm đặc biệt cho bánh ngọt Pháp, chúng tôi quyết tâm tạo nên thương hiệu Ipun Pastry để mang tới cho mọi người một trải nghiệm thưởng thức bánh thật tinh tế và tận tâm.</p>
            <p class="about-left_p">Hãy một lần nếm thử bánh của Ipun để cảm nhận những tình cảm và nỗ lực của chúng tôi, tất cả nằm ở sự hoà quyện của hương vị và kết cấu đặc biệt trong từng chiếc bánh.</p>
            <a class="about-left_link"href="#">VỀ IPUN</a>
          </div>
          <div class="about-right bl"><img src="view/img/about-banh.png" alt=""></div>
        </section>
        <div class="products  bb">
          
              <ul class="product grid-3">
              <?=$html_danhmuc?>
              
                   
                   
              </ul>
        </div>

        <section class="noibat">
          <div class="mota">
            <h2 class="mota-h2">Sản phẩm</h2>
            <p class="mota-nd_p mt-4">Sản phẩm đặc trưng của Ipun Pastry là bánh Entremet – dòng bánh lạnh cao cấp nhất của Pháp, với sự hài hòa của các tầng hương vị và kết cấu đặc biệt trong từng chiếc bánh.</p>
            <div class="mota-link mt-6">
              <a class="index.php?page=products" href="index.php?page=products">XEM TẤT CẢ</a>
            </div>
          </div>

         
            <ul class="banh-ngon-list grid-4">
              <?=$html_dssp_best?>
            </ul>
        </section>

        <section class="about bt flex-revertse">
          <div class="about-left ">
            <h2 class="about-left_h2">Sự sáng tạo đến từ những hương vị tự nhiên</h2>
            <p class="about-left_p">Từ vải và dâu rừng, trà Earl Grey và cam hay xoài và lá dứa.., những chiếc bánh Entremet của Ipun là sự kết hợp sáng tạo của nhiều tầng hương vị tự nhiên và mới lạ. Dù bạn là ai, chúng tôi mong rằng, bạn sẽ luôn tìm được chiếc bánh phù hợp với khẩu vị của riêng mình tại Ipun.</p>
            <a class="about-left_link"href="index.php?page=products">XEM SẢN PHẨM</a>
          </div>
          <div class="about-right br"><img src="view/img/sangtao1.png" alt=""></div>
        </section>

        <section class="about bt  ">
          <div class="about-left">
            <h2 class="about-left_h2">Không chỉ là chiếc bánh, mà là một món quà</h2>
            <p class="about-left_p">Bánh của Ipun không dành để ăn một mình, vì chúng tôi tin rằng mỗi chiếc bánh được gửi đi đều là món quà mà bạn có thể sẻ chia với những người quan trọng.</p>
            <p class="about-left_p">Từ chiếc hộp, cây nến, tấm bưu thiệp hay cách chúng tôi trao tới bạn tận tay món quà ấy, đều sẽ được Ipun chuẩn bị thật chu đáo.</p>
            <a class="about-left_link"href="#">CÁCH ĐẶT BÁNH</a>
          </div>
          <div class="about-right bl"><img src="view/img/monqua1.png" alt=""></div>
        </section>

        
      </main>