<?php 
/**
 * Products Class
 */
class classProducts
{
	
	// tìm kiếm sản phẩm
	function searchProduct($timkiem){
		$sql='SELECT * FROM `categories` WHERE `name` LIKE "%" ? "%"';
		return pdo_query($sql,$timkiem);
	}
// List categogries

function listCategogries($cate=''){
	if($cate == '')
	{
		return pdo_query('SELECT * FROM `brandlist` WHERE  `status` = 0');
	}
	else
	{
		$sql = 'SELECT * FROM `brandlist` WHERE `status` = 0 AND `slug` = ?';
		return pdo_query($sql,$cate);
	}
}

// List Product by id categogries
function listProductsByIdCate($id,$name=''){
	if($name==''){
		$sql = 'SELECT * FROM `categories` WHERE `status` = 0 AND `cate` = ?';
		return pdo_query($sql,$id);
	}else{
		$sql = 'SELECT * FROM `categories` WHERE `status` = 0 AND `cate` = ? AND `name` LIKE ?';
		return pdo_query($sql,$id,$name);
	}
}
function productsById($id){
	$sql = 'SELECT * FROM `categories` WHERE `status` = 0 AND `id` = ?';
	return pdo_query_one($sql,$id);
}
//add giỏ hàng
function add_giohang($name,$img,$price,$soluong,$user_buy,$hinhthuc,$info,$date_time)
{
	$sql = 'INSERT INTO `cart`(`name`,`img`,`price`,`soluong`,`user_buy`,`pay`,`info`,`date_time`)VALUES(?,?,?,?,?,?,?,?)';
	pdo_execute($sql,$name,$img,$price,$soluong,$user_buy,$hinhthuc,$info,$date_time);
}
//get last id giỏ hàng
function get_last_id_giohang()
{
	return pdo_query('SELECT * FROM `cart` ORDER BY `id` DESC LIMIT 1');
}
}
?>