<?php 
//ini_set('display_errors',0);


 if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $get_id = $func->get_id_brandlist($id);
    $query = $func->delete_id_brand($id);
     header('location: ./quanlydanhmuc.html');

}
 
?>