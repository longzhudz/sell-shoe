<?php 
session_start();
require '../modules/database.php';
require '../modules/login.php';

if(isset($_POST) && $_POST)
{
    $password = htmlspecialchars(trim($_POST['password']));
    $user = htmlspecialchars(trim($_POST['user']));
    $token = htmlspecialchars(trim($_POST['token']));
  
    $func = new classLogin();
    $info = $func->get_token_and_user($user,$token);

  //  $hashpass = password_hash($password, PASSWORD_BCRYPT);
    
    if($password == '' || $user ==''|| $token == '')
    {   
        $erro = 'Không bỏ trống thông tin'; 
    }
    elseif(strlen($password)< 6 || strlen($password) > 24)
    {
        $erro = 'Mật khẩu phải từ 6 đến 24 kí tự';
    }elseif(!$info){
        $erro = 'Tài khoản của bạn không tồn tại. Vui lòng kiểm tra lại';
    }
    else{
            $token = bin2hex(random_bytes(16));
            $hashpass = password_hash($password, PASSWORD_BCRYPT);
            $func->update_user_by_forget($token,$hashpass,$user);
            $erro = 'Bạn đã đổi mật khẩu thành công';
            
    }
    


}else{
    $erro = '404 Not Find';
}
if(isset($erro))
{
    echo $erro;
}


?>