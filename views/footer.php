</div>
<hr style="width:100%">
 <footer class="page-footer font-small blue-grey lighten-5">

        <div class="footer-top">
        <div class="containerf">
    
            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center footer-row-top">
    
            <!-- Grid column -->
            <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                <h6 class="mb-0">Có thể kết nối đến mạng xã hội để liên hệ với chúng tôi!</h6>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-6 col-lg-7 text-center text-md-right">
    
                <!-- Facebook -->
                <a class="ic-mar fb-ic" href="https://www.facebook.com/longzhudz">
                <i class="fab fa-facebook-f white-text mr-4"> </i>
                </a>
                <!-- Twitter -->
                <a class="ic-mar tw-ic" href="#" >
                <i class="fab fa-twitter white-text mr-4"> </i>
                </a>
                <!-- Google +-->
                <a class="ic-mar gplus-ic" href="#">
                <i class="fab fa-google-plus-g white-text mr-4"> </i>
                </a>
                <!--Linkedin -->
                <a class="ic-mar li-ic" href="#">
                <i class="fab fa-linkedin-in white-text mr-4"> </i>
                </a>
                <!--Instagram-->
                <a class="ic-mar ins-ic" href="#">
                <i class="fab fa-instagram white-text"> </i>
                </a>
    
            </div>
            <!-- Grid column -->
    
            </div>
            <!-- Grid row-->
    
        </div>
        </div>
    
        <!-- Footer Links -->
        <div class="containerf text-center text-md-left mt-5">
    
        <!-- Grid row -->
        <div class="row mt-3 dark-grey-text">
    
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
    
            <!-- Content -->
            <h6 class="text-uppercase font-weight-bold">Đồ án cơ sở 2</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>Đây là mô hình MVC được thực hiện bởi Vưu Phước Long - Phạm Thanh Duy</p>
    
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
    
            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Sản phẩm</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <?php foreach($brandlist as $key => $value) { ?>
            <p>
                <a class="dark-grey-text" href="/products/<?=$value['slug']?>.html"><?=$value['name']?></a>
            </p>
            <?php }?>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
    
            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Useful links</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
                <a class="dark-grey-text" href="/">Trang chủ</a>
            </p>
            <p>
                <a class="dark-grey-text" href="/products/all.html">Mua sắm</a>
            </p>
            <p>
                <a class="dark-grey-text" href="/contact.html">Liên hệ</a>
            </p>
            <p>
                <a class="dark-grey-text" href="#!">Hỗ trợ</a>
            </p>
    
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
    
            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Liên hệ với chúng tôi</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
                <i class="fas fa-home mr-3"></i> Trường ĐH Nam Cần Thơ</p>
            <p>
                <i class="fas fa-envelope mr-3"></i> longzhudz@gmail.com</p>
            <p>
                <i class="fas fa-phone mr-3"></i> +84 945 119 242</p>
            <p>
                <i class="fas fa-print mr-3"></i> + Đang cập nhật</p>
    
            </div>
            <!-- Grid column -->
    
        </div>
        <!-- Grid row -->
    
        </div>
        <!-- Footer Links -->
    
        <!-- Copyright -->
        <div style="color: black !important;height: 40px; margin-top:20px; " class="footer-copyright text-center text-black-50 py-3">© 2021 Copyright:
        <a class="dark-grey-text footer-bottom" href="https://www.facebook.com/longzhudz"> Longzhu - DuyPham</a>
        </div>
        <!-- Copyright -->
    
    </footer>
  <!-- Footer -->
    <!--Đặt hàng -->
    <script type="text/javascript">
                    $(document).ready(function(){
                        $('.add-to-cards').click(function (e) { 
                            e.preventDefault();
                            var id = $(this).data('id');
                            var soluong;
                         if(!$('.qty-'+id).val())
                         {
                            soluong = 1;
                         }
                         else
                         {
                             soluong = $('.qty-'+id).val();}
                            $.ajax({
                                url: '/ajax/cart.php',
                                type: 'POST',
                                method: 'POST',
                                data: {id: id, soluong: soluong},
                            })
                            .done(function(result){
                                var obj = JSON.parse(result);
                                if(obj.messages =='done')
                                {
                                    swal("Xác nhận", "Đã thêm sản phẩm vào giỏ hàng", "success");
                                    $('#count-gio-hang').html(obj.soluong);
                                }
                                else{
                                    swal("Lỗi", result, "warning");
                                }
                            })
                            .fail(function(){
                                alert("Lỗi không xác định");
                            });
                         
                        
                    });
                });
                </script>
                

<script>
    let searchForm = document.querySelector('.search-form');

    document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    }

    let menu = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () => {
        menu.classList.toggle('bx-x');
        navbar.classList.toggle('active');
    }

    window.onscroll = () => {
        menu.classList.remove('bx-x');
        searchForm.classList.remove('active');

    }

 
    $(document).ready(function() {
        $('.navbar a.dropdown-toggle').on('click', function(e) {
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');
        if(!$parent.parent().hasClass('nav')) {
                $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
        }
        $('.nav li.open').not($(this).parents("li")).removeClass("open");
        return false;
        });
    });

</script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiperHome", {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
          autoplay: {
          delay: 2500,
          disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
            
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          breakpoints: {
          640: {
            slidesPerView: 1,
            el: ".swiper-wrapper",
          },
          768: {
            slidesPerView: 1,
            el: ".swiper-wrapper",
          },
          1024: {
            slidesPerView: 1,
            el: ".swiper-wrapper",
          },
        },
        });
    </script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        loop: true,
        
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        zoom: true,
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
    </script>
    <script>
      var swiper = new Swiper(".mySwiperBrand", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        autoplay: {
          delay: 1500,
          disableOnInteraction: false,
          },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 50,
          },
        },
      });
    </script>
</body>
</html>