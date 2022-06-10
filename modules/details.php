<?php
class ClassDetails
{
    function details($slug)
	{
		$sql = 'SELECT * FROM `categories` where `status`= 0 and `slug` = ?';
		return pdo_query_one($sql,$slug);
	}
	function updateVote($id)
	{
		$sql = 'UPDATE `categories` SET `vote` = `vote` + 1 WHERE `id` = ?';
		pdo_execute($sql,$id);
	}
}
?>