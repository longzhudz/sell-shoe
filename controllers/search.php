<?php
include 'modules/products.php';
$products = new classProducts();
if(isset($_GET['timkiem']))
{
     $name = $_GET['timkiem'];
     $funcSearch = $products->searchProduct($name);

     require 'views/search.php';
}
else{
   header('locaiton: /home.html');
}


?>