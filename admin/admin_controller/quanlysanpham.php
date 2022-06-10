<?php 
//ini_set('display_errors',0);
 require 'admin_views/header.php';

 $categ = $func->load_products();
 

 //Khai báo biến lấy id danh mục sản phẩm để load
 $catego = $func->tbl_brandlist();
 if(isset($_POST) && $_POST) {
        $name = $_POST['cate_name'];
        $status = $_POST['status'];
        $slug = $func->to_slug($name);
        $cate = $_POST['id_cate'];
        $price_sale = $_POST['price_sale'];
        $price = $_POST['price'];
        $text = $_POST['text'];
        $size = $_POST['size'];
        $quantity= $_POST['quantity'];
        $link = '../uploads/img/';
        $upload_img = '';
        /*
        if(isset($_FILES['img_cate']))
        {
            $file = $_FILES['img_cate'];
            $file_name = $file['name'];
            //if định dạng phải là file hình mới cho vô
            move_uploaded_file($file['tmp_name'],$link.$file_name);
            
        }*/
        if(isset($_FILES['img_cates']))
        {
            $file = $_FILES['img_cates'];
            $file_name = $file['name'];
         
            //if định dạng phải là file hình mới cho vô
           
                foreach($file_name as $key => $value)
                {
                    if(move_uploaded_file($file['tmp_name'][$key],$link.$value)){
                            $upload_img .= $link.$value.'|'; 
                            
                    }
                    else
                    {
                            echo 'Loi';
                    }
                } 
         
   
            //if thêm nhìu hình
           
            //var_dump($upload_img);
             //           die();
        }
        $query = $func->add_products($name,$slug,$status,$upload_img,$cate,$price_sale,$price,$text,$size,$quantity);
    
        header('location: ./quanlysanpham.html');
    }
 require 'admin_views/quanlysanpham.php';

 require 'admin_views/footer.php';
?>