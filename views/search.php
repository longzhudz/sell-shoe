<div class="container">
          <h3 class="h3">Sản phẩm liên quan : <?=$name?></h3>
          <div class="row">
              <?php foreach($funcSearch as $key => $value) {
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
