<?php 
session_start();
require 'vendor/autoload.php';
require '../modules/database.php';
require '../modules/login.php';
$login = new classLogin();

$client = $login->google_make_client();

$service = new Google_Service_Oauth2($client);
if (isset($_GET['code'])) {
	$info = $client->authenticate($_GET['code']);
	if(isset($info['error'])){
		echo $info['error_description'];
	}else{
		$token = $info['access_token'];
		//info google account
		$user = $service->userinfo->get();
		$getInfo = $login->check_user($user->email);

		if (!$getInfo) {
			$action = $login->add_user('encrypted', $user->name,$user->email, 'null', $token);
			$_SESSION['id'] = $action['id'];
			header('location: /home.html');
		}else{
			$_SESSION['id'] = $getInfo['id'];
			header('location: /home.html');
		}
	}
}else{
	echo "Bad Request";
}


?>