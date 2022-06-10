<?php 
if (!isset($_SESSION['id'])) {
	require 'views/register.php';
}else{
    header('location: /home.html');
}

?>