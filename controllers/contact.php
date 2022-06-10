<?php 
require 'views/contact.php';
if(isset($_POST) && $_POST) { 
    $name = htmlspecialchars(trim($_POST['namec'])) ;
    $email = htmlspecialchars(trim($_POST['emailc']));
    $phone = htmlspecialchars(trim($_POST['phonec']));
    $mess = htmlspecialchars(trim($_POST['messc']));
    $insert = $func->insert_contact($name,$email,$phone,$mess);
    header('location: /contact.html');
}
else{
    $erro = '404 Not Find';
}



?>