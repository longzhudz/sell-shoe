<?php 
//ini_set('display_errors',0);
 
 require 'admin_views/header.php';
//Load số lượng user
 $loaduser = $func->loadUser();
 //Load số lượng sản phẩm
 $loadproducts =$func->loadProductsAdmin();
 //Load tổng doanh thu
 $loadtongtien = $func->loadTongTien();
 //Load số lượng ng mua
 $loadorderTong = $func->loadOrderTong();
 $loadorder = $func->loadOrder();
 $loaddondaxuli = $func->loadDaXuLi();
 $loaddondahuy = $func->loadDaHuy();
 //Doanh thu ngày
 $doanhthungay = $func->TongTien('day',date('Y-m-d',time()));
 //Doanh thu theo tháng
 //doanh thu thang
 $doanhthuthang = $func->TongTien('month',date('m',time()));
 //Thanh toán bằng tiền mặt

 $thanhtoanbangtienmat = $func->ThanhToanBy('2',date('Y-m-d',time()));
 
 $pro = $func->listHotPro();
 


 require 'admin_views/home.php';
 require 'admin_views/footer.php';
?>