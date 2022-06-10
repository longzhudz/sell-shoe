<?php 
session_start();
require '../modules/database.php';
require '../modules/products.php';
$pro = new classProducts();

if(isset($_POST) && $_POST)
{
    
        $id = htmlspecialchars($_POST['id']);
        $soluong = htmlspecialchars($_POST['soluong']);

        $info = $pro->productsById($id);
        $img = explode('|',$info['img']);
        $item = array(  
            'id' => $id,
            'name' => $info['name'],
            'img' => $img[0],
            'price' => $info['price'],
            'soluong' => $soluong,
        );

        if(isset($_SESSION['giohang'][$id])){

            $_SESSION['giohang'][$id]['soluong'] += $soluong;

        }else{
            $_SESSION['giohang'][$id] = $item;
        }
        $makeojb = array(
            'messages' => 'done',
            'soluong' => count($_SESSION['giohang']),
        );
        $erro = json_encode($makeojb);
    

}else{
    $erro = '404 Not Find';
}
if(isset($erro))
{
    echo $erro;
}

?>