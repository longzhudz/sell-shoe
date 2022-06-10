<?php 
session_start();
require '../modules/database.php';

require '../modules/function.php';

$func = new classFunc();

if(isset($_POST) && $_POST)
{
    $id = htmlspecialchars(trim($_POST['id']));
    
    $xoa = $func->delete_id_cart($id);
    
}
if(isset($error))
{
    print_r($error);
}
?>