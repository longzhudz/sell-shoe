<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
// require database
require 'modules/database.php';

// file function sử dụng chung
require 'modules/function.php';

$func = new classFunc();
if(isset($_SESSION['id']))
{
	$info = $func->get_info($_SESSION['id']);
}


// Gọi header
include 'controllers/header.php';

// xử lý trung tâm
if(isset($_GET['ctrl'])){

// biến ctrl
$ctrl = $_GET['ctrl'];

$file = 'controllers/'.$ctrl.'.php';

	if ( file_exists($file)) {
		include $file;
	}else{
		include 'controllers/home.php';
	}

}else{
	include 'controllers/home.php';
}

// Gọi footer
include 'views/footer.php';

?>
