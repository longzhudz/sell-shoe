<?php 
//ini_set('display_errors',0);
 //require 'admin_views/header.php'; 
 //$categ = $func->tbl_slide();

 if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $get_id = $func->get_id_slide($id);
    $query = $func->delete_id_slide($id);
    header('location: ./quanlyslide.html');
}
 //if(isset($_POST) && $_POST) {
 //       $name = $_POST['cate_name'];
        
  //      $status = $_POST['status'];
  //      $slug = $func->to_slug($name);
  //      if(isset($_FILES['img_cate']))
   //     {
    //        $file = $_FILES['img_cate'];
     //       $file_name = $file['name'];
    //        move_uploaded_file($file['tmp_name'],'../uploads/img/'.$file_name);
     //   }
      
        
 //   }
 //require 'admin_views/xoaslide.php';

 //require 'admin_views/footer.php';
?>