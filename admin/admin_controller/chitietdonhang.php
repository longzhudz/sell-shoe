<?php 
//ini_set('display_errors',0);
 require 'admin_views/header.php'; 
 

 if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $get_id = $func->get_id_cart($id);
    $img = explode('|',$get_id['img']);
    
    $name = explode('|',$get_id['name']);
    
}
if(isset($_POST) && $_POST) {
    $status = $_POST['status'];
    $update = $func->update_status_cart($status,$id);
    header('location: ./donhang.html');
}

 require 'admin_views/chitietdonhang.php';

 require 'admin_views/footer.php';
?>