<?php 
if (isset($alert)) {
    echo $alert;
}

?>
    <!--<div>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                    <div class="slide-text"><h3 class="slide-h3">
                        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="5" >
                     
                            <a class="a-hover-slide" href="">Cam kết chính hãng</a>
                            <a class="a-hover-slide" href="">Giao hàng tận nơi</a>
                            <a class="a-hover-slide" href="">Thanh toán dưới mọi hình thức</a>
                            <a class="a-hover-slide" href="">Liên hệ: 0945 119 242</a> 
                            </marquee></h3>
                    </div>
                    <div class="slide-text-left">Có thể bạn quan tâm</div>
                    <div class="slide-text-before"></div>
                   
                    <div class="carousel-item active">
                        
                        <img class="slide-img" src="/uploads/img/slide3.jpg" class="d-block w-100" alt="...">
                       
                    </div>
                    
                    <div class="carousel-item">
                        <img class="slide-img" src="/uploads/img/slide4.jpg" class="d-block w-100" alt="...">
                    </div>
          
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> 
    End slide -->
         <!-- 
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">
                <div class="container">
                    <ul class="w3_short">
                        <li>
                            <a href="index.html">Trang chủ</a>
                            <i>|</i>
                        </li>
                        <li>Nike</li>
                    </ul>
                </div>
            </div>
        </div>//page -->
<!--Slide -->
<div class="swiperHome mySwiperHome">
        <div class="swiper-wrapper">
        <?php  foreach($slide as $key => $sl)  { ?>  
            <div  class="swiper-slide"><img src="/uploads/img/<?= $sl['img']?>" alt=""></div>     
        <?php }  ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
</div>
<!--Slide -->
<div class="content-products">
    <div class="container">
            <h3 class="h3">Sản phẩm mới </h3>
            <div class="row">
                <?php  foreach($list as $key => $new)  { 
                 $img = explode('|',$new['img']);
                 ?> 
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid3">
                        <div class="product-image3">
                            <a href="/details/<?= $new['slug']?>.html">
                                <img class="pic-1" src="<?= $img[0]?>">
                                <img class="pic-2" src="<?= $img[1]?>">
                            </a>
                            <ul class="social">
                                <li><a href="/details/<?= $new['slug']?>.html"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href='' class="add-to-cards" data-id= <?=$new['id'] ?>  ><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="/details/<?= $new['slug']?>.html"><?= $new['name'] ?></a></h3>
                            <div class="price">
                                <?= $new['pricesale']?> $
                                <span><?= $new['price'] ?> $</span>
                            </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star disable"></li>
                                <li class="fa fa-star disable"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php }?>
               
            </div>
        </div>
        <hr>
    <div class="container">
          <h3 class="h3">Nổi bật</h3>
          <div class="row">
              <?php foreach($hot as $key => $value) {
                 $img = explode('|',$value['img']);
                  
                   ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid3">
                        <div class="product-image3">
                            <a href="/details/<?= $value['slug']?>.html">
                        
                                <img class="pic-1" src="<?= $img[0]?>">
                                <img class="pic-2" src="<?= $img[1]?>">
                          
                            </a>
                            <ul class="social">
                                <li><a href="/details/<?= $value['slug']?>.html"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href='' class="add-to-cards" data-id= <?=$value['id'] ?>  ><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-hot-label">Hot</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href=""><?= $value['name'] ?></a></h3>
                            <div class="price">
                                <?= $value['pricesale']?> $
                                <span><?= $value['price'] ?> $</span>
                            </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star disable"></li>
                                <li class="fa fa-star disable"></li>
                            </ul>
                        </div>
                    </div>
                </div>
              <?php } ?>
          </div>
    </div>

    <!-- Swiper -->
    <div  class="swiper mySwiperBrand swiper-logo">
      <div  class="swiper-wrapper">
         <?php  foreach($slidebrand as $key => $new){?>
        <div class="swiper-slide"><img class="logo" src="/uploads/img/<?= $new['img']?>" alt=""></div>
        <?php }?>

      </div>
    </div>
    <div class="row">
            <div class="col-md-7">
                <iframe style="width:100%;height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3929.1180991455885!2d105.72089378137035!3d10.007102641268744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1630761086181!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
      
            <div class="col-md-5">
                <h4><strong>Liên hệ với chúng tôi</strong></h4>
              <form id="form-contact" method="POST" style="margin-top:30px">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" value="" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" value="" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control" name="phone" value="" placeholder="Phone">
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="mess" rows="3" placeholder="Message"></textarea>
                </div>
                <button class="btn btn-default" type="submit" id="btn-contact" name="button">
                    <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
                </button>
              </form>
            </div>
    </div>
</div>
