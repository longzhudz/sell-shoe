<?php 
//ini_set('display_errors',0);
 require 'admin_views/header.php';

 $categ = $func->tbl_slide();
 
 if(isset($_POST) && $_POST) {
        $name = $_POST['cate_name'];
        
        $status = $_POST['status'];
        $slug = $func->to_slug($name);
        if(isset($_FILES['img_cate']))
        {
            $file = $_FILES['img_cate'];
            $file_name = $file['name'];
            var_dump($file['type']);
            //if định dạng phải là file hình mới cho vô
            move_uploaded_file($file['tmp_name'],'../uploads/img/'.$file_name);
        }
        $query = $func->add_slide($name,$slug,$status,$file_name);
        header('location: ./quanlyslide.html');
    }
 require 'admin_views/quanlyslide.php';

 require 'admin_views/footer.php';
?>