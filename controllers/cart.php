<?php 
    if(isset($_SESSION['giohang']))
    {
        $giohang = $_SESSION['giohang'];
        require 'views/cart.php';
    }
    else
    {
        require 'views/carttrong.php';
    }
?>