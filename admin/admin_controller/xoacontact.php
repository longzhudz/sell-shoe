<?php 
//ini_set('display_errors',0);


 if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $get_id = $func->get_id_contact($id);
    $query = $func->delete_contact($id);
     header('location: ./contact.html');

}
 
?>