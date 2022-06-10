<div  class="products">
    <div class="container-fluid">
        <div class="row">     
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">
                <div class="container">
                    <ul class="w3_short">
                        <li>
                            <a href="/home.html">Trang chủ</a>
                            <i>|</i>
                        </li>
                        <?php  
                        foreach ($listcate as $key => $value) { ?>
                    
                        <li><a href=""><?= $value['name'] ?></a></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
            <div id="admin-sidebar" class="col-md-2 p-x-0 p-y-3">
                <section class="card">
                    <article class="card-group-item">
                        <header class="card-header">
                            <h6 class="title">Brand </h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                            <form>
                            <?php foreach($brandlist as $key => $value) { ?>
                                <label class="form-check">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-label">
                                  <a href="/products/<?=$value['slug']?>.html"><?=$value['name']?></a>
                                  </span>
                                </label> <!-- form-check.// -->
                                <?php }?>
                                <!-- form-check.// -->
                            </form>
                
                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- card-group-item.// -->
                    <!--
                    <article class="card-group-item">
                        <header class="card-header">
                            <h6 class="title">Choose type </h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                            <label class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadio" value="">
                              <span class="form-check-label">
                                Sản phẩm mới
                              </span>
                            </label>
                            <label class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadio" value="">
                              <span class="form-check-label">
                                Sản phẩm hot
                              </span>
                            </label>
                            <label class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadio" value="">
                              <span class="form-check-label">
                                Lựa chọn khác
                              </span>
                              
                            </label>
                            <div class="btn-sidebar"><button class="btn-click">Click</button></div>
                            </div>
                        </div>
                    </article> -->
                </section> <!-- card.// -->
                
            </div> <!-- /#admin-sidebar -->
            <div id="admin-main-control" class="col-md-10 p-x-3 p-y-1">
<?php  
    foreach ($listcate as $key => $value) { ?>
        <section margin: 2rem 0px;>          
        <div class="container-pro">
          <h3 class="h3"><?= $value['name'] ?></h3>
          <div class="row">
          <?php 
            if(isset($_GET['product']))
              {
              $list = $products->listProductsByIdCate($value['id'], '%'.$_GET['product'].'%');

              }
            else{
              $list = $products->listProductsByIdCate($value['id']);
            }
                     foreach ($list as $stt => $lc) {
                      $img = explode('|',$lc['img']); ?>
              <div class="col-md-3 col-sm-6">
                  <div class="product-grid9">
                      <div class="product-image9">
                          <a href="/details/<?= $lc['slug']?>.html">
                              <img class="pic-1" src="<?= $img[0] ?>">
                              <img class="pic-2" src="<?= $img[1] ?>">
                          </a>
                          <a href="/details/<?= $lc['slug']?>.html" class="fa fa-search product-full-view"></a>
                      </div>
               

                      <div class="product-content">
                          <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                          </ul>
                          <h3 class="title"><a href="/details/<?= $lc['slug']?>.html"><?= $lc['name'] ?></a></h3>
                          <a class="add-to-cart" href="/details/<?= $lc['slug']?>.html">VIEW PRODUCTS</a>
                          <div class="price">
                                <?= $lc['pricesale']?> $
                                <span><?= $lc['price'] ?> $</span>
                            </div>
                      </div>
                  </div>
              </div> <?php } ?>   
          </div>
        </div><hr>
        </section>   
<?php } ?>     
            </div> <!-- /#admin-main-control -->
        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
</div>