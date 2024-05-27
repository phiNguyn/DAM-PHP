<?php
  $html_show_all_sp=show_all_sp($all_sp);
  
  if($title_search!='')  $title= $title_search; 
  else $title='Sản Phẩm';

  if($content_dm!='') $content = $content_dm;
  else $content_dm;

  // foreach($all_sp as $sp){
  //   extract($sp);
  //   $html_san_pham.=
  //   '<a class="relative br bb banhSN-eat-link" href="index.php?page=detail&idsp='.$id.'">

  //   <div class="banhSN-eat-list">
  //     <div class="banhSN-eat-h2">'.$name.'</div>
  //     <div class="banhSN-eat-name">'.$thanh_phan.'</div>
  //     <div class="banhSN-eat-prce">'.number_format($price, 0, ",", ".").' ₫</div>
  //   </div>

  //   <div class="banhSN-eat-img relative pb-100" >
  //     <div class="banhSN-eat-img-item">
  //       <img src="view/img/'.$img.'" alt="">
  //     </div>
  //   </div>

  //   <div class="banhSN-eat-more"><span>Xem thêm</span></div>

  // </a>';
  // }

  
  
?>

<main>
        <!-- start main -->
        <section class="mb-0-5px" >
        <div class="banhSN">  <!--Bánh SINH NHẬT-->
            <div class="banhSN-content">
            <h2 class="banhSN-content_h2"><?=$title?></h2>
                <div class="banhSN-content_text">
                    <span><?=$content?></span>
                </div>
            </div>
          </div>
          
          

          <div class="banhSN-eat grid-3 bt"> 
           <?=$html_show_all_sp?>
           
            <!-- <a class="relative br bb banhSN-eat-link" href="">

              <div class="banhSN-eat-list">
                <div class="banhSN-eat-h2">Secret Garden</div>
                <div class="banhSN-eat-name">Xoài, Lá dứa & Phô mai</div>
                <div class="banhSN-eat-prce">590.000 ₫</div>
              </div>

              <div class="banhSN-eat-img relative pb-100" >
                <div class="banhSN-eat-img-item">
                  <img src="view/img/sp1.png" alt="">
                </div>
              </div>

              <div class="banhSN-eat-more"><span>Xem thêm</span></div>

            </a>

             -->
            
           
            
            
          </div>

        </section>

        

        



        <!-- end main -->

      </main>