<?php 
//ini_set('display_errors',0);
 //require 'admin_views/header.php'; 
 //$load = $func->don_hang();

 if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $get_id = $func->get_id_cart($id);
  //  $img = explode('|',$get_id['img']);
    
  //  $name = explode('|',$get_id['name']);
  $delete = $func->delete_id_cart($id);
  header('location: ./donhang.html');
}
//if(isset($_POST) && $_POST) {
    
    
//}

 //require 'admin_views/donhang.php';

// require 'admin_views/footer.php';
?>