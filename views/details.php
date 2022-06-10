<div class="container">
         <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">
                <div class="container">
                    <ul class="w3_short">
                        <li>
                            <a href="/home.html">Trang chủ</a>
                            <i>|</i>
                        </li>
                       
                        <li><a href="">Sản phẩm</a></li>
                     
                    </ul>
                </div>
            </div>
        </div>
          <div class="heading-section">
            <h2>Chi tiết sản phẩm</h2>
          </div>
          <div class="row">
         
            <div class="col-md-6">
              <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                <div class="swiper-wrapper">
              <?php for($i=0;$i < count($img) - 1; $i++) {  ?>
                        <div class="swiper-slide">
                          <div class="swiper-zoom-container">
                            <img  src="<?= $img[$i]?>" />
                          </div>
                        </div>
              <?php }  ?>
                </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              </div>
              <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper">
        <?php for($i=0;$i < count($img) - 1; $i++) {  ?>
                  <div class="swiper-slide">
                    <img  src="<?= $img[$i]?>" />
                  </div>
        <?php }  ?>
              </div>
             </div>
            </div>
            
            <?php {  ?>
            <div class="col-md-6">
              <div class="product-dtl">
                <div class="product-info">
                  <div class="product-name"><?= $info_products['name']?></div>
                  <div class="reviews-counter">
                <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" checked/>
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4"/>
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2"/>
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1"/>
                    <label for="star1" title="text">1 star</label>
                  </div>
                <span>3 Reviews</span>
              </div>
                  <div class="product-price-discount">Giá chỉ: <span><?= $info_products['pricesale']?>$</span><span class="line-through"><?= $info_products['price']?>$</span></div>
                </div>
                <p><?= $info_products['text']?></p>
                <div style="padding: 0px !important" class="row">
                  <div class="col-md-6">
                    <label for="size">Size</label>
                <select id="size" name="size" class="form-control">
                <?php for($i=0;$i < count($size); $i++) {  ?>
                  <option><?= $size[$i]?></option>
                  <?php }?>
                </select>
                  </div>
                  
                </div>
                <div class="product-count">
                  <label for="size">Số lượng</label>
                  <form action="#" class="display-flex">
                  <div class="qtyminus">-</div>
                  <input type="text" name="quantity" value="1" class="qty-<?=$info_products['id']?>">
                  <div class="qtyplus">+</div>
              </form>
              <button class="round-black-btn add-to-cards" data-id='<?= $info_products['id']?>'>
                Đặt hàng ngay
              </button>
              <button class="round-black-btn"><a href="">Mua ngay</a></button>
                </div>
              </div>
            </div>
            <?php }  ?>
          </div>
          
          <div class="product-info-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (0)</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
            <?= $info_products['text']?>
            </div>
            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
              <div class="review-heading">REVIEWS</div>
              <p class="mb-20">There are no reviews yet.</p>
              <form class="review-form">
                  <div class="form-group">
                    <label>Your rating</label>
                    <div class="reviews-counter">
                  <div class="rate">
                      <input type="radio" id="star5" name="rate" value="5" />
                      <label for="star5" title="text">5 stars</label>
                      <input type="radio" id="star4" name="rate" value="4" />
                      <label for="star4" title="text">4 stars</label>
                      <input type="radio" id="star3" name="rate" value="3" />
                      <label for="star3" title="text">3 stars</label>
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" title="text">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" title="text">1 star</label>
                  </div>
                </div>
              </div>
                  <div class="form-group">
                    <label>Your message</label>
                    <textarea class="form-control" rows="10"></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" name="" class="form-control" placeholder="Name*">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" name="" class="form-control" placeholder="Email Id*">
                      </div>
                    </div>
                  </div>
                  <button class="round-black-btn">Submit Review</button>
                </form>
            </div>
        </div>
      </div>
    </div>