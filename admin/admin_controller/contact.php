<?php 
//ini_set('display_errors',0);
 require 'admin_views/header.php';

 $categ = $func->load_contact();
 

 require 'admin_views/contact.php';

 require 'admin_views/footer.php';
?>