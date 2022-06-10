<?php 
session_start();
require '../modules/database.php';
require '../modules/register.php';

if(isset($_POST) && $_POST)
{
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $fullname = htmlspecialchars(trim($_POST['fullname']));
    $confirm = htmlspecialchars(trim($_POST['confirm']));

  
    $register = new classRegister();
    $info = $register->check_user($username);

  //  $hashpass = password_hash($password, PASSWORD_BCRYPT);
    // $checkpass = password_verify($password, $info['password']);
    if($info)
    {
        $erro = 'Tài khoản của bạn đã tồn tại. Vui lòng đăng ký tài khoản khác';
    }else{
        if(empty($username) || empty($password) || empty($fullname) || empty($phone) || empty($email) || empty($confirm))
        {
            $erro = 'Vui lòng nhập đầy đủ thông tin';
        }else if(strlen($username) < 5 || strlen($password) > 16)
        {
            $erro = 'Tài khoản phải là 5 - 16 kí tự';
        }else if($password != $confirm)
        {
            $erro = 'Mật khẩu xác nhận không chính xác';
        }

        else{
            $hashpass = password_hash($password, PASSWORD_BCRYPT);
            $token = bin2hex(random_bytes(16));
            $register->add_user($username,$hashpass,$fullname,$email,$phone,$token);
            $info_last = $register->check_user($username);
            $_SESSION['id'] = $info_last['id'];
            $erro = 'done';
        }
        
    }
    


}else{
    $erro = '404 Not Find';
}
if(isset($erro))
{
    echo $erro;
}


?>