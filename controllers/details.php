<?php 

require 'modules/details.php';

// Khởi tạo biến class 
$callClass = new ClassDetails();


// 
if(isset($_GET['slugproducts']))
{
    $info_products = $callClass->details($_GET['slugproducts']);
    
    if($info_products)
    {
        $img = explode('|',$info_products['img']);
        $size =explode('|',$info_products['size']);
        $callClass->updateVote($info_products['id']);
        require 'views/details.php';
    }
    else
    {
        header('location: /home.html');
    }
}
else
{
    header('location: /home.html');
}


?>