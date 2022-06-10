<?php
 $id = $_GET['id'];
 $delete = $func->delete_member($id);
 header('location: ./quanlymember.html');

?>