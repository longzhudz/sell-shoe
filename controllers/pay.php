<?php 
    if(!isset($_SESSION['id']))
    {
        echo '<script>
            alert("Bạn chưa đăng nhập, vui lòng đăng nhập để đặt hàng");
            location.href = "/login.html"
        </script>';
    }else
    {
        if(isset($_SESSION['giohang']))
            {
                $giohang = $_SESSION['giohang'];
                require 'views/pay.php';
            }
            else
            {
                header('location: /cart.html');
            }
    }

?>