<?php 
session_start();
require '../modules/database.php';
//include gửi mail
include '../modules/class.phpmailer.php';
include '../modules/class.smtp.php';
   
require '../modules/function.php';
require '../modules/products.php';
$products = new classProducts();
$function = new classFunc();

if(isset($_POST) && $_POST)
{
    $hinhthuc = htmlspecialchars(trim($_POST['hinhthuc']));
    $thongtin = htmlspecialchars(trim($_POST['thongtin']));
    if(empty($hinhthuc) || empty($thongtin))
    {
        $error = "Không bỏ trống thông tin";
    }else
    {
        $giohang = $_SESSION['giohang'];
        $name = '';
        $img = '';
        $coin = $function->tong_bill($giohang,1);
        $soluong = $function->tong_bill($giohang,2);
        $userbuy = $_SESSION['id'];
        $info = $function->get_info($userbuy);
        $date_time = date('Y-m-d',time());
       foreach($giohang as $key => $value)
       {
            $name .= $value['name'].'|';
            $img .= $value['img'].'|';
            
       }
       $products->add_giohang($name,$img,$coin,$soluong,$userbuy,$hinhthuc,$thongtin,$date_time);
       $last_id = $products->get_last_id_giohang();
       $title = 'Shop LND, Thông tin hóa đơn số :  #'.$last_id[0]['id'];
       $content = 'Xin chào bạn <strong> '.$info['fullname'].'</strong> <br style="background-color:white"> Cám ơn bạn đã đặt hàng ở cửa hàng của chúng tôi với số lượng là <strong> ' .$soluong. '</strong> sản phẩm.
       Giá tiền là: <strong>'.$coin.' $</strong>. Mọi chi tiết vui lòng liên hệ: 0945 119 242 hoặc fb.com/longzhudz <br> Xin cảm ơn !';
       $test = $function->sendMail($title, $content, $info['fullname'], $info['email'],'');
       if($test == 1)
       {
        $error = 'done';
       }
       else
       {
           $error = 'Vui lòng kiểm tra lại email của bạn';
       }
    
    }
}
if(isset($error))
{
    print_r($error);
}
?>