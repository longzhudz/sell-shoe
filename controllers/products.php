<?php 
require 'modules/products.php';
// Khởi tạo biến class 
$products = new classProducts();
// 
if(isset($_GET['categories']))
{
    if($products->listCategogries($_GET['categories']))
    {
        $listcate = $products->listCategogries($_GET['categories']);
    }else
    {
        $listcate = $products->listCategogries();
    }
}else
{
    $listcate = $products->listCategogries();
}



require 'views/products.php';
?>