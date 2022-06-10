<?php 

require '../modules/database.php';
require '../modules/function.php';
require '../modules/home.php';

if(isset($_POST) && $_POST) {
    $name = htmlspecialchars(trim($_POST['name'])) ;
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $mess = htmlspecialchars(trim($_POST['mess']));
    $func = new classFunc();
    $insert = $func->insert_contact($name,$email,$phone,$mess);
    
    header('location: /home.html');
}
else{
    $erro = '404 Not Find';
}
if(isset($erro))
{
    echo $erro;
}


?>