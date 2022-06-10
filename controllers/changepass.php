<?php 

if (isset($_SESSION['id'])) {
	
	header('location: /home.html');
	
}else{
    if(!isset($_GET['token']))
    {
        header('location: /home.html');
    }
    else
    {
        require 'modules/login.php';
        $func = new classLogin();
        $info = $func->check_token($_GET['token']);
        if(!$info)
        {
            header('location: /home.html');
        }
        else
        {
            require 'views/changepass.php';
        }
       

    }
}

?>