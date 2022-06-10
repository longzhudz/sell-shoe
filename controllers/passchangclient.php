<?php 

if (isset($_SESSION['id'])) {
	require 'handling/vendor/autoload.php';
	require 'modules/login.php';
	$login = new classLogin();
    $info = $login->check_id($_SESSION['id']);
	$authUrl = $login->createUrlGoogle();
	require 'views/passchangclient.php';
}else{
    header('location: /home.html');
}

?>