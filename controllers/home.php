<?php 
require 'modules/home.php';


if ( !isset($_SESSION['id']) ) {
	$alert = '<script type="text/javascript">
 swal({   
    title: "Thông báo",
    html: true,
    text: "Hãy chung tay đẩy lùi dịch bệnh cùng Long Vưu & Duy Phạm",   
    showConfirmButton:true

});
</script>';
}

$newProducts = new classHome();

$list = $newProducts->listnewProducts();
$hot = $newProducts->listHot();
$slide = $newProducts->listSlide();
$slidebrand = $newProducts->listSlideBrand();

if(isset($_POST) && $_POST) {
    $name = htmlspecialchars(trim($_POST['name'])) ;
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $mess = htmlspecialchars(trim($_POST['mess']));
    $insert = $func->insert_contact($name,$email,$phone,$mess);
    header('location: /home.html');
}
else{
    $erro = '404 Not Find';
}



require 'views/home.php';
?>