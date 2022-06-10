<?php 
//ini_set('display_errors',0);
 require 'admin_views/header.php'; 
 $categ = $func->tbl_brandlist();

 if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $get_id = $func->get_id_brandlist($id);

}
 if(isset($_POST) && $_POST) {


        $name = $_POST['cate_name'];
        $status = $_POST['status'];
        $slug = $func->to_slug($name);
        
        
        
            if(isset($_FILES['img_cate']))
            {
                $file = $_FILES['img_cate'];
                $file_name = $file['name'];
                if(empty($file_name))
                {
                    $file_name = $get_id['img'];
                }else
                {
                    move_uploaded_file($file['tmp_name'],'../uploads/img/'.$file_name);
                }
               
               
            }
            $query = $func->update_cate($name,$slug,$status,$file_name,$id);
            
            header('location: ./quanlydanhmuc.html');
        }
       
        
 require 'admin_views/suadanhmuc.php';

 require 'admin_views/footer.php';
?>