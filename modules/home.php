<?php 
/**
 * Products Class
 */
class classHome
	{
	function listnewProducts(){
		return pdo_query('SELECT * FROM `categories` WHERE  `status` = 0 ORDER BY `id` DESC LIMIT 12');
	}
	function listSlide()
	{
		return pdo_query('SELECT * FROM `slide` WHERE  `status` = 0');
	}
	function listHot()
	{
		return pdo_query('SELECT * FROM `categories` ORDER BY `vote` DESC LIMIT 8');
	}
	function listSlideBrand()
	{
		return pdo_query('SELECT * FROM `brandlist` WHERE `status` = 0');
	}
	function insert_contact($name,$email,$phone,$mess)
        {
            $sql = 'INSERT INTO `contact`(`name`,`email`,`phone`,`mess`) VALUES(?,?,?,?)';
            pdo_execute($sql,$name,$email,$phone,$mess);
        }
}
?>