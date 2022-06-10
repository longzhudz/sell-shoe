<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
     <!-- drop down -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <!-- end drop down  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->


   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity=" sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" type="text/css" href="/public/css/main.css"/>
    
    <title>LND | Online Sneaker Shop |</title>
</head>
<body> 
    
<header class="header">
    <div class="bx bx-menu" id="menu-icon"></div>
    <a href="/" class="logo"> <span>LND </span>SNEAKER</a>

    <ul class="nav navbar-nav navbar">
        <li class="active"><a href="/">Trang chủ</a></li>
        <li><a href="/aboutus.html" target="_blank">Giới thiệu</a></li>
        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm <b class="caret"></b></a>
            <ul class="dropdown-menu">
            <?php foreach($brandlist as $key => $value) { ?>
               <li><a href="/products/<?=$value['slug']?>.html"><?=$value['name']?></a></li>
               <li class="divider"></li>
            <?php }?>
                <li><a href="/products/all.html">Tất cả sản phẩm</a></li>
           </ul>
       </li>
       <li><a href="/contact.html" target="_blank">Liên hệ</a></li>
  
    </ul>

    <div class="header-item-right">
        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>     
            <a href="/cart.html" class="fas fa-shopping-cart" id="count-gio-hang" >
            <?php 
                if(isset($_SESSION['giohang'])) {
                    echo count($_SESSION['giohang']); }
                else{
                    echo 0;};  
                ?>
            </a>
        </div>   
        
        <?php if(!isset($_SESSION['id'])) { ?> 
        <div class="header-btn">
            <a href="/register.html" class="sign-up">Đăng ký</a>
            <a href="/login.html" class="sign-in">Đăng nhập</a>
        </div> 
        <?php }else{ ?>
            <?php if($info['rules'] == 0) { ?> 
        <div class="icons">
            <a href="#" class="fas fa-user dropdown-toggle" href="" data-toggle="dropdown"></a>
            <ul class="dropdown-menu dropdown-menu-user">
                <li><a href="#">Chào: <?= $info['fullname'] ?><span class="fas fa-user pull-right"></span></a></li>
                <li class="divider"></li>
                <li><a href="#">Cài đặt<span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                <li class="divider"></li>
                <li><a href="#">Liên hệ trực tuyến <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
                <li class="divider"></li>
                <li><a href="passchangclient.html">Đổi mật khẩu<span class="glyphicon glyphicon-heart pull-right"></span></a></li>
                <li class="divider"></li>
                <li><a href="/logout.html">Đăng xuất <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
            </ul>
        </div>
        <?php }elseif($info['rules'] == 1){ ?>
            <div class="icons">
            <a href="#" class="fas fa-user dropdown-toggle" href="" data-toggle="dropdown"></a>
            <ul class="dropdown-menu dropdown-menu-user">
                <li><a href="#">Chào: <?= $info['fullname'] ?><span class="fas fa-user pull-right"></span></a></li>
                <li class="divider"></li>
                <li><a href="/admin">Admin<span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                <li class="divider"></li>
                <li><a href="passchangclient.html">Đổi mật khẩu <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
                <li class="divider"></li>
                <li><a href="#">Chế độ tối<span class="glyphicon glyphicon-heart pull-right"></span></a></li>
                <li class="divider"></li>
                <li><a href="/logout.html">Đăng xuất <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
            </ul>
        </div>
        <?php } ?>
        <?php } ?>
    </div>
    

    <form class="search-form" id="form-search">
        <input type="search" name="timkiem" placeholder="Nhập giày bạn muốn tìm..." id="search-box">
        <button type="submit" for="search-box" class="fas fa-search">tìm kiếm</button>
    </form>
<script>
$(document).ready(function () {
    $('#form-search').submit(function (e) { 
        e.preventDefault();
        let timkiem = $('input[name="timkiem"]').val();
        window.location= `/index.php?ctrl=search&timkiem=${timkiem}`;
        
    });
});

</script>

</header>
<div style="margin-top:120px">