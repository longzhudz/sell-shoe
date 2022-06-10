<?php
class classRegister
{
    function check_user($username)
    {
        $sql = 'SELECT * FROM `member` where `username` = ?';
        return pdo_query_one($sql,$username);
    }
    function add_user($username, $password, $fullname,$email, $phone, $token)
    {
        $sql = 'INSERT INTO  `member`(`username`,`password`,`fullname`,`email`,`phone`,`token`) VALUES(?,?,?,?,?,?)';
        pdo_execute($sql,$username,$password,$fullname,$email,$phone,$token);
    }
}
?>