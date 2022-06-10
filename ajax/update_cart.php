<?php 
session_start();
require '../modules/database.php';
require '../modules/function.php';
$pro = new classFunc();

    if(isset($_POST) && $_POST)
    {
        $rule = $_POST['rule'];
        if($rule == 0)
        {
            $id = htmlspecialchars($_POST['id']);
            $soluong = htmlspecialchars($_POST['soluong']);
            $_SESSION['giohang'][$id]['soluong'] = $soluong;
            $erro = json_encode(
                array(
                    'tong' => $pro->tong_bill($_SESSION['giohang'],1),
                    'soluong' => $pro->tong_bill($_SESSION['giohang'],2),
                )
            );
        }
        else if($rule == 1)
        {
            $id = htmlspecialchars($_POST['id']);
            unset($_SESSION['giohang'][$id]);
            
        }
    }
    else
    {
        $erro = 'Not Fount';
    }
    if(isset($erro))
    {
        print_r($erro);
    }

?>