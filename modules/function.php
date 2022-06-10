<?php 

    class classFunc
    {
        function user_ac()
        {
            return 'SELECT * FROM `member` where `status` = 0';
        }
        //brand list menu
        function brandlist()
        {
		    return pdo_query('SELECT * FROM `brandlist` WHERE  `status` = 0');
        }
        //Bảng brand
        function tbl_brandlist()
        {
		    return pdo_query('SELECT * FROM `brandlist`');
        }
        //Bảng Slide
        function tbl_slide()
        {
		    return pdo_query('SELECT * FROM `slide`');
        }
        //Bảng products
        
        function load_products()
        {
            return pdo_query('SELECT * FROM `categories`');
        }
        //Bảng Đơn hàng
        function don_hang()
        {
            return pdo_query('SELECT * FROM `cart`');
        }
        //Contact Liên hệ với shop
        function insert_contact($name,$email,$phone,$mess)
        {
            $sql = 'INSERT INTO `contact`(`name`,`email`,`phone`,`mess`) VALUES(?,?,?,?)';
            pdo_execute($sql,$name,$email,$phone,$mess);
        }
       //Load sản phẩm bán chạy
       function listHotPro()
        {
            return pdo_query('SELECT * FROM `categories` ORDER BY `vote` DESC');
        }
        /*
        function load_products()
        {
            $sql =  'SELECT categories.*, brandlist.name AS 'name_cate' FROM categories JOIN brandlist ON categories.cate = brandlist.id';

        }*/

         //get info by id 
        function get_info($id)
        {
            $sql = 'SELECT * FROM `member` WHERE `id` = ?';
            return pdo_query_one($sql,$id);
        }
        function tong_bill($data,$rule)
        {
            $all = 0;
            foreach($data as $key => $value)
            {
                if($rule == 1)
                {
                    $all += $value['price']*$value['soluong'];
                }
                else
                {
                    $all += $value['soluong'];
                }
            }
            return $all;
        }
        //gửi mail
        function sendMail($title, $content, $nTo, $mTo,$diachicc=''){
            $nFrom = 'LND Shop';
            $mFrom = 'longbangiay1@gmail.com';  //dia chi email cua ban 
            $mPass = 'Kendi123';       //mat khau email cua ban
            $mail             = new PHPMailer();
            $body             = $content;
            $mail->IsSMTP(); 
            $mail->CharSet   = "utf-8";
            $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
            $mail->SMTPAuth   = true;                    // enable SMTP authentication
            $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
            $mail->Host       = "smtp.gmail.com";        
            $mail->Port       = 465;
            $mail->Username   = $mFrom;  // GMAIL username
            $mail->Password   = $mPass;               // GMAIL password
            $mail->SetFrom($mFrom, $nFrom);
            //chuyen chuoi thanh mang
            $ccmail = explode(',', $diachicc);
            $ccmail = array_filter($ccmail);
            if(!empty($ccmail)){
                foreach ($ccmail as $k => $v) {
                    $mail->AddCC($v);
                }
            }
            $mail->Subject    = $title;
            $mail->MsgHTML($body);
            $address = $mTo;
            $mail->AddAddress($address, $nTo);
            $mail->addreplyto('info@freetuts.net', 'Freetuts.net');
            if(!$mail->Send()) {
                return 0;
            } else {
                return 1;
            }
        }
        
        //******************** ADMIN ***********************
        //Load số lượng khách hàng đăng ký tài khoản
        function loadUser()
        {
		    return pdo_query_value('SELECT COUNT(*) FROM `member` WHERE  `status` = 0');
        }
        //Load tổng số sản phẩm đã thêm
        function loadProductsAdmin()
        {
		    return pdo_query_value('SELECT COUNT(*) FROM `categories`');
        }
        //Load tổng số tiền của shop
        function loadTongTien()
        {
            return pdo_query_value('SELECT SUM(`price`) FROM `cart` WHERE `status` = 0');
        }
        //Load khách order sản phẩm
        function loadOrderTong()
        {
		    return pdo_query_value('SELECT COUNT(*) FROM `cart`');
        }
        function loadOrder()
        {
		    return pdo_query_value('SELECT COUNT(*) FROM `cart` WHERE  `status` = 0');
        }
        function loadDaXuLi()
        {
		    return pdo_query_value('SELECT COUNT(*) FROM `cart` WHERE  `status` = 1');
        }
        function loadDaHuy()
        {
		    return pdo_query_value('SELECT COUNT(*) FROM `cart` WHERE  `status` = 2');

        }
       
        //Tổng doanh thu
        function TongTien($key,$action)
        {
            if ($key == 'day') {
                $sql = 'SELECT SUM(price) FROM cart where date_time = ? and status = 1';
                return pdo_query_value($sql,$action);
            }else if($key =='month'){
                $sql = 'SELECT SUM(price) FROM cart where MONTH(date_time) = ? and status = 1';
                return pdo_query_value($sql,$action);
            }
        }
        function ThanhToanBy($key,$action)
        {
            $sql = 'SELECT SUM(`price`) FROM `cart` WHERE `pay` = ? AND `date_time` = ?';
            return pdo_query_value($sql,$key,$action);
        }
        //Load đơn hàng đã bán và chưa xử lý.
        function load_status_don_chuaxuli()
        {  
            return pdo_query('SELECT * FROM `cart` WHERE `status` = 0');   
        }
        





        //Admin Quản lý danh mục
        //Thêm danh mục
        function add_cate($name,$slug,$status,$img)
        {
            $sql = 'INSERT INTO `brandlist`(`name`,`slug`,`status`,`img`) VALUES(?,?,?,?)';
            pdo_execute($sql,$name,$slug,$status,$img);
        }
        //Sửa danh mục lấy giá trị id để GET
        function update_cate($id,$name,$slug,$status,$img)
        {
            $sql = 'UPDATE `brandlist` SET `name` = ?,`slug` = ?,`status`=?,`img`=? where `id` = ?';
            pdo_execute($sql,$id,$name,$slug,$status,$img);
        }
        function get_id_brandlist($id)
	    {
            $sql = 'SELECT * FROM `brandlist` WHERE `id` = ?';
            return pdo_query_one($sql,$id);
	    }
        //Xóa danh mục
        function delete_id_brand($id)
        {
            $sql = 'DELETE FROM `brandlist` WHERE `id` = ?';
            pdo_execute($sql,$id);
        }
        //Quản lý Slide
        //Thêm slide
        function add_slide($name,$slug,$status,$img)
        {
            $sql = 'INSERT INTO `slide`(`name`,`slug`,`status`,`img`) VALUES(?,?,?,?)';
            pdo_execute($sql,$name,$slug,$status,$img);
        }
        //Sửa slide lấy giá trị id để GET
        function update_slide($id,$name,$slug,$status,$img)
        {
            $sql = 'UPDATE `slide` SET `name` = ?,`slug` = ?,`status`=?,`img`=? where `id` = ?';
            pdo_execute($sql,$id,$name,$slug,$status,$img);
        }
        function get_id_slide($id)
	    {
            $sql = 'SELECT * FROM `slide` WHERE `id` = ?';
            return pdo_query_one($sql,$id);
	    }
        //Xóa slide
        function delete_id_slide($id)
        {
            $sql = 'DELETE FROM `slide` WHERE `id` = ?';
            pdo_execute($sql,$id);
        }
        //Quản lý sản phẩm
        //Thêm sản phẩm
        function add_products($name,$slug,$status,$upload_img,$cate,$price_sale,$price,$text,$size,$quantity)
        {
            $sql = 'INSERT INTO `categories`(`name`,`slug`,`status`,`img`,`cate`,`pricesale`,`price`,`text`,`size`,`quantity`) VALUES(?,?,?,?,?,?,?,?,?,?)';
            pdo_execute($sql,$name,$slug,$status,$upload_img,$cate,$price_sale,$price,$text,$size,$quantity);
        }
        function get_id_pro($id)
	    {
            $sql = 'SELECT * FROM `categories` WHERE `id` = ?';
            return pdo_query_one($sql,$id);
	    }
        //Sửa sản phẩm
        function update_pro($id,$name,$slug,$status,$upload_img,$cate,$price_sale,$price,$text,$size,$quantity)
        {
            $sql = 'UPDATE `categories` SET `name` = ?,`slug` = ?,`status`= ?,`img`= ?,`cate`= ?,`pricesale`=?,`price`=?,`text`=?,`size`=?,`quantity`=? where `id` = ?';
            pdo_execute($sql,$id,$name,$slug,$status,$upload_img,$cate,$price_sale,$price,$text,$size,$quantity);
        }
        // Xóa sản phẩm
        function delete_id_pro($id)
        {
            $sql = 'DELETE FROM `categories` WHERE `id` = ?';
            pdo_execute($sql,$id);
        }
        //Lấy id đơn hàng
        function get_id_cart($id)
	    {
            $sql = 'SELECT * FROM `cart` WHERE `id` = ?';
            return pdo_query_one($sql,$id);
	    }
        //Sửa trạng thái đơn
        function update_status_cart($id,$status)
        {
            $sql = 'UPDATE `cart` SET `status` = ? where `id` = ?';
            pdo_execute($sql,$id,$status);
        }
        //Xóa đơn hàng
        function delete_id_cart($id)
        {
            $sql = 'DELETE FROM `cart` WHERE `id` = ?';
            pdo_execute($sql,$id);
        }
        //Quản lý member
        //Show thành viên
        function show_member()
        {
            return pdo_query('SELECT * FROM `member`');
        }
        //Lấy id khách hàng
        function get_id_member($id)
	    {
            $sql = 'SELECT * FROM `member` WHERE `id` = ?';
            return pdo_query_one($sql,$id);
	    }
        //Sửa quyền ng dùng
        function update_member($id,$status,$rules)
        {
            $sql = 'UPDATE `member` SET `status` = ?,`rules` = ? WHERE `id` = ?';
            pdo_execute($sql,$id,$status,$rules);
        }
        //Xoá người dùng
        function delete_member($id)
        {
            $sql = 'DELETE FROM `member` WHERE `id` = ?';
            pdo_execute($sql,$id);
        }
        //Contact
        //Load liên hệ
        function load_contact()
        {
            return pdo_query('SELECT * FROM `contact`');
        } 
        //Lấy id contact
        function get_id_contact($id)
	    {
            $sql = 'SELECT * FROM `contact` WHERE `id` = ?';
            return pdo_query_one($sql,$id);
	    }
        //Xóa contact
        function delete_contact($id)
        {
            $sql = 'DELETE FROM `contact` WHERE `id` = ?';
            pdo_execute($sql,$id);
        }
        //tìm kiếm
        function search($search)
        {
            $sql = 'SELECT * FROM `categories` WHERE `name` LIKE ? ';
            return pdo_query($sql,$search);
        }
        
        //Tạo giá trị slug
        function to_slug($str) {
            $str = trim(mb_strtolower($str));
            $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
            $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
            $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
            $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
            $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
            $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
            $str = preg_replace('/(đ)/', 'd', $str);
            $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
            $str = preg_replace('/([\s]+)/', '-', $str);
            return $str;
        }
        
        
	

    }
    
   

?>