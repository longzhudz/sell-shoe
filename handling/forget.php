<?php 
session_start();
require '../modules/database.php';
require_once '../modules/class.smtp.php';
require_once '../modules/class.phpmailer.php';
require '../modules/login.php';

$func = new classLogin();
if(isset($_POST) && $_POST)
{
    $email = htmlspecialchars(trim($_POST['email']));
    
    $info = $func->check_mail($email);

  //  $hashpass = password_hash($password, PASSWORD_BCRYPT);
    
    if(!$info)
    {
        $erro = 'Email của bạn không tồn tại. Vui lòng kiểm tra lại';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $erro = 'Email không đúng định dạng';
    }
    else{
        $title = 'LND SHOP - LẤY LẠI MẬT KHẨU CHO TÀI KHOẢN: '.$info['fullname'];
        
        $actual_link = "$_SERVER[HTTP_HOST]";
       
        $content = 'Xin chào member,
        Cảm ơn bạn đã quan tâm đến các sản phẩm tại cửa hàng của chúng tôi. Ai cũng có lúc quên mật khẩu thôi mà, bạn đừng lo lắng
        <br>
        Để lấy lại mật khẩu của bạn với email '.$info['email'].'<br>
        <a href="http://'.$actual_link.'/changepass/'.$info['token'].' ">Nhấp vào đây</a>';
        $nTo = '';
        $mTo = $info['email'];
        $info = $func->sendMail($title, $content, $nTo, $mTo,$diachicc='');
        $erro = 'Lấy lại mật khẩu thành công ! Vui lòng kiểm tra Mail';
        
    } 
    


}else{
    $erro = '404 Not Find';
}
if(isset($erro))
{
    echo $erro;
}


?>