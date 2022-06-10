<?php 
session_start();
require '../modules/database.php';
require '../modules/login.php';

if(isset($_POST) && $_POST)
{
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
  
    $login = new classLogin();
    $info = $login->check_user($username);

  //  $hashpass = password_hash($password, PASSWORD_BCRYPT);
    
    if(!$info)
    {
        $erro = 'Tài khoản của bạn không tồn tại. Vui lòng kiểm tra lại';
    }else{
        $checkpass = password_verify($password, $info['password']);
        if(empty($username) || empty($password))
        {
            $erro = 'Vui lòng nhập đầy đủ thông tin';
        }else if(strlen($username) < 5 || strlen($password) > 16)
        {
            $erro = 'Tài khoản phải là 5 - 16 kí tự';
        }
        else if(!$checkpass)
        {
            $erro = 'Sai mật khẩu';
        }else if($info['status'] != 0)
        {
            $erro = 'Tài khoản của bạn đã bị khóa';
        }else{
            $hash_pass = password_hash($password,PASSWORD_BCRYPT);
            $login -> update_pass($username,$hash_pass);
            $_SESSION['id'] = $info['id'];
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