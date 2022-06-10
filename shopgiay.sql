-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 07, 2022 lúc 11:34 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopgiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brandlist`
--

CREATE TABLE `brandlist` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `brandlist`
--

INSERT INTO `brandlist` (`id`, `name`, `slug`, `status`, `img`) VALUES
(1, 'JORDAN', 'jordan', 0, 'logo-nike.jpg'),
(2, 'ADIDAS', 'adidas', 0, 'logo-adidas.jpg'),
(3, 'YEEZY', 'yeezy', 0, 'logo-yeezy.jpg'),
(4, 'OFF WHITE', 'off-white', 0, 'logo-offwhite.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `price` float NOT NULL,
  `soluong` int(15) NOT NULL,
  `user_buy` int(5) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `pay` varchar(155) NOT NULL,
  `info` text NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `name`, `img`, `price`, `soluong`, `user_buy`, `date`, `status`, `pay`, `info`, `date_time`) VALUES
(7, 'ADIDAS YEEZY BOOST 350 V2 \'LIGHT\'|ADIDAS WOMEN\'S SUPERSTAR METAL TOE W \"WHITE & BLACK\"|AIR JORDAN 1 MID GS \'WHITE LIGHT ARCTIC PINK\'|AIR JORDAN 1 MID WMNS \'WHITE WOLF GREY\'|', '/uploads/img/hinh14.jpg|/uploads/img/hinh9.jpg|/uploads/img/hinh8.jpg|/uploads/img/hinh7.jpg|', 1056, 4, 1, '2021-10-01 01:40:28', 2, '2', 'Vưu Phước Long\nSĐT : 0945119242\nGiao ở khóm 1 Thới Bình', '2021-11-05'),
(8, 'ADIDAS YEEZY BOOST 350 V2 \'LIGHT\'|ADIDAS WOMEN\'S SUPERSTAR METAL TOE W \"WHITE & BLACK\"|AIR JORDAN 1 MID GS \'WHITE LIGHT ARCTIC PINK\'|AIR JORDAN 1 MID WMNS \'WHITE WOLF GREY\'|', '/uploads/img/hinh14.jpg|/uploads/img/hinh9.jpg|/uploads/img/hinh8.jpg|/uploads/img/hinh7.jpg|', 1056, 4, 1, '2021-10-01 01:50:38', 1, '2', 'aaaaa', '2021-11-05'),
(9, 'ADIDAS YEEZY BOOST 350 V2 \'LIGHT\'|ADIDAS WOMEN\'S SUPERSTAR METAL TOE W \"WHITE & BLACK\"|AIR JORDAN 1 MID GS \'WHITE LIGHT ARCTIC PINK\'|AIR JORDAN 1 MID WMNS \'WHITE WOLF GREY\'|', '/uploads/img/hinh14.jpg|/uploads/img/hinh9.jpg|/uploads/img/hinh8.jpg|/uploads/img/hinh7.jpg|', 1056, 4, 1, '2021-10-01 01:52:09', 0, '2', 'aaaaa', '2021-11-05'),
(10, 'ADIDAS WOMEN\'S SUPERSTAR METAL TOE W \"WHITE & BLACK\"|', '/uploads/img/hinh9.jpg|', 149, 1, 1, '2021-10-02 09:39:08', 1, '2', 'aa', '2021-11-05'),
(11, 'AIR JORDAN 1 MID WMNS \'SYRACUSE\'|', '/uploads/img/hinh2.jpg|', 995, 5, 6, '2021-10-29 09:22:49', 0, '2', 'Vưu Phước Long sđt 0945119242 khóm 1', '2021-11-05'),
(12, 'ADIDAS ULTRA BOOST - HALO-WHITE-SEMI SOLAR SLIME|AIR JORDAN 1 MID GS \'WHITE LIGHT ARCTIC PINK\'|', '/uploads/img/hinh13.jpg|/uploads/img/hinh8.jpg|', 1761, 9, 1, '2021-11-05 11:27:00', 0, '2', 'abc xyz', '2021-11-05'),
(14, 'SOUTH PARK X ADIDAS CAMPUS 80 ‘TOWELIE’|AIR JORDAN 1 MID WMNS \'WHITE WOLF GREY\'|', '/uploads/img/hinh12.jpg|/uploads/img/hinh7.jpg|', 996, 4, 4, '2021-11-05 11:38:25', 0, '2', 'aaaaaaaaaaaaaaaaaaaaaa', '2021-11-05'),
(15, 'SOUTH PARK X ADIDAS CAMPUS 80 ‘TOWELIE’|AIR JORDAN 1 MID WMNS \'WHITE WOLF GREY\'|', '/uploads/img/hinh12.jpg|/uploads/img/hinh7.jpg|', 996, 4, 4, '2021-11-05 11:38:37', 0, '2', 'abcdddđ qweqwe ád', '2021-11-05'),
(23, 'AIR JORDAN 1 MID GS \'PASTEL\'|PHARRELL WILLIAMS X ADIDAS NMD HUMAN RACE TRAIL PALE NUDE|', '/uploads/img/hinh1.jpg|/uploads/img/hinh11.jpg|', 2692, 8, 6, '2021-11-20 02:09:22', 1, '2', 'Người nhận Vưu Phước Long, 0945119242, giao cho a Long Thới Bình Cà Mau', '2021-11-20'),
(24, 'SOUTH PARK X ADIDAS CAMPUS 80 ‘TOWELIE’|ADIDAS ULTRA BOOST - HALO-WHITE-SEMI SOLAR SLIME|', '/uploads/img/hinh12.jpg|/uploads/img/hinh13.jpg|', 388, 2, 1, '2021-11-23 08:52:17', 0, '2', 'rdgtregergerger', '2021-11-23'),
(25, 'AIR JORDAN 1 MID GS \'WHITE LIGHT ARCTIC PINK\'|', '/uploads/img/hinh8.jpg|', 309, 1, 7, '2021-11-23 08:57:31', 0, '2', 'chekc gửi mail', '2021-11-23'),
(26, 'AIR JORDAN 1 MID GS \'WHITE LIGHT ARCTIC PINK\'|AIR JORDAN 1 MID WMNS \'WHITE WOLF GREY\'|AIR JORDAN 1 MID GS \'TRIPLE WHITE\'|', '/uploads/img/hinh8.jpg|/uploads/img/hinh7.jpg|/uploads/img/hinh3.jpg|', 727, 3, 11, '2021-11-24 11:39:18', 1, '2', 'Vuu Phuoc Long dat hang', '2021-11-24'),
(27, 'AIR JORDAN 1 MID GS \'PASTEL\'|', '/uploads/img/hinh1.jpg|', 299, 1, 1, '2021-11-29 04:43:52', 0, '2', '123123', '2021-11-29'),
(29, 'ADIDAS ULTRA BOOST - HALO-WHITE-SEMI SOLAR SLIME|', '../uploads/img/13a.jpg|', 139, 1, 1, '2021-12-21 14:39:15', 0, '2', 'aaaaaaaa', '2021-12-21'),
(30, 'AIR JORDAN 1 MID WMNS \'WHITE WOLF GREY\'|', '../uploads/img/hinh7a.png|', 249, 1, 1, '2021-12-21 14:39:27', 1, '2', 'fffffff', '2021-12-21'),
(31, 'ADIDAS WOMEN\'S SUPERSTAR METAL TOE W |PHARRELL WILLIAMS X ADIDAS NMD HUMAN RACE TRAIL PALE NUDE|', '../uploads/img/9a.jpg|../uploads/img/11a.jpg|', 1195, 5, 1, '2021-12-22 07:33:55', 1, '2', 'gửi admin chút tiên mua bỉm sữa', '2021-12-22'),
(32, 'OFF-WHITE X CONVERSE CHUCK 70 STRIPE WHITE|', '../uploads/img/16a.jpg|', 315, 1, 1, '2021-12-22 07:57:14', 2, '2', 'long, khóm 1, 0945119242', '2021-12-22'),
(33, 'PHARRELL WILLIAMS X ADIDAS NMD HUMAN RACE TRAIL PALE NUDE|', '../uploads/img/11a.jpg|', 599, 1, 1, '2021-12-24 12:13:12', 0, '2', 'Long, khom 1 thi tran thoi binh ca mau, 012932913', '2021-12-24'),
(34, 'SOUTH PARK X ADIDAS CAMPUS 80 ‘TOWELIE’|PHARRELL WILLIAMS X ADIDAS NMD HUMAN RACE TRAIL PALE NUDE|ADIDAS YEEZY POWERPHASE |', '../uploads/img/12a.jpg|../uploads/img/11a.jpg|../uploads/img/10a.jpg|', 1298, 3, 1, '2021-12-25 07:44:50', 1, '2', 'ểwrwerwerwe', '2021-12-25'),
(35, 'OFF-WHITE X CONVERSE CHUCK 70 STRIPE WHITE|', '../uploads/img/16a.jpg|', 2835, 9, 6, '2022-02-23 03:02:48', 0, '2', 'fhhfhgfhfhf', '2022-02-23'),
(36, 'OFF-WHITE X NIKE DUNK LOW \'LOT 17 OF 50\'|', '../uploads/img/15a.png|', 599, 1, 1, '2022-02-23 03:03:22', 0, '2', 'aaaaaaaaaaaa', '2022-02-23'),
(37, 'OFF-WHITE X CONVERSE CHUCK 70 STRIPE WHITE|', '../uploads/img/16a.jpg|', 315, 1, 17, '2022-02-23 03:06:35', 0, '2', 'aaaaaaaaaaaaaaa', '2022-02-23'),
(38, 'SOUTH PARK X ADIDAS CAMPUS 80 ‘TOWELIE’|', '../uploads/img/12a.jpg|', 249, 1, 1, '2022-04-06 06:24:28', 0, '2', '12312312312', '2022-04-06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `img` varchar(255) NOT NULL,
  `cate` int(5) NOT NULL,
  `pricesale` float DEFAULT NULL,
  `price` float NOT NULL,
  `vote` int(5) DEFAULT 0,
  `text` varchar(255) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `img`, `cate`, `pricesale`, `price`, `vote`, `text`, `size`, `quantity`) VALUES
(2, 'AIR JORDAN 1 MID GS \'PASTEL\'', 'nike-air-jordan-1-mid-gs-pastel', 0, '/uploads/img/hinh1.jpg|/uploads/img/hinh1b.jpg|/uploads/img/hinh1c.jpg|/uploads/img/hinh1d.jpg|/uploads/img/hinh1e.jpg|/uploads/img/hinh1f.jpg|/uploads/img/hinh1g.jpg', 1, 279, 299, 7, 'Chưa có mô tả cho sản phẩm này', '36|37|38|39|40|41|42', 0),
(3, 'AIR JORDAN 1 MID WMNS \'SYRACUSE\' ', 'air-jordan-1-mid-wmns-syracuse', 0, '../uploads/img/hinh2.jpg|../uploads/img/hinh2b.jpg|../uploads/img/hinh2c.jpg|../uploads/img/hinh2d.jpg|../uploads/img/hinh2e.jpg|../uploads/img/hinh2f.jpg|../uploads/img/hinh2g.jpg|', 1, 159, 199, 33, 'Chưa có mô tả cho sản phẩm này', '36|37|38|39|40|41|42', 0),
(4, 'AIR JORDAN 1 MID GS \'TRIPLE WHITE\'', 'nike-air-jordan-1mid-gs-triple-white', 0, '/uploads/img/hinh3.jpg|/uploads/img/hinh3b.jpg|/uploads/img/hinh3c.jpg|/uploads/img/hinh3d.jpg', 1, 139, 169, 15, 'Chưa có mô tả cho sản phẩm này', '36|37|38|39|40|41|42', 0),
(6, 'AIR JORDAN 1 MID GS \'TROPICAL TWIST\'', 'air-jordan-1-mid-gs-tropical-twist', 0, '../uploads/img/hinh6a.jpg|../uploads/img/hinh6b.jpg|../uploads/img/hinh6c.jpg|../uploads/img/hinh6d.jpg|../uploads/img/hinh6e.jpg|', 1, 159, 189, 19, 'Chưa có mô tả cho sản phẩm này', '36|37|38|39|40|41|42', 20),
(7, 'AIR JORDAN 1 MID WMNS \'WHITE WOLF GREY\'', 'air-jordan-1-mid-wmns-white-wolf-grey', 0, '../uploads/img/hinh7a.png|../uploads/img/hinh7b.jpg|../uploads/img/hinh7c.jpg|../uploads/img/hinh7d.jpg|../uploads/img/hinh7e.jpg|../uploads/img/hinh7f.jpg|../uploads/img/hinh7g.jpg|', 1, 219, 249, 3, 'Chưa có mô tả cho sản phẩm này', '36|37|38|39|40|41|42', 0),
(8, 'AIR JORDAN 1 MID GS \'WHITE LIGHT ARCTIC PINK\'', 'air-jordan-1-mid-gs-white-light-arctic-pink', 0, '../uploads/img/8a.jpg|../uploads/img/8b.jpg|../uploads/img/8c.jpg|../uploads/img/8d.jpg|../uploads/img/8e.jpg|../uploads/img/8f.jpg|../uploads/img/8g.jpg|', 1, 299, 309, 18, 'Chưa có mô tả cho sản phẩm này', '36|37|38|39|40|41', 0),
(9, 'ADIDAS WOMEN\'S SUPERSTAR METAL TOE W ', 'adidas-womens-superstar-metal-toe-w', 0, '../uploads/img/9a.jpg|../uploads/img/9b.jpg|../uploads/img/9c.jpg|../uploads/img/9d.jpg|', 2, 119, 149, 8, 'Chưa có mô tả cho sản phẩm này', '36|37|38|39|40|41|42', 0),
(10, 'ADIDAS YEEZY POWERPHASE ', 'adidas-yeezy-powerphase', 0, '../uploads/img/10a.jpg|../uploads/img/10b.jpg|../uploads/img/10c.jpg|../uploads/img/10d.jpg|../uploads/img/10e.jpg|../uploads/img/10f.jpg|', 2, 449, 450, 4, 'Chưa có mô tả cho sản phẩm này', '36|37|38|39|40|41|42', 0),
(11, 'PHARRELL WILLIAMS X ADIDAS NMD HUMAN RACE TRAIL PALE NUDE', 'pharrell-williams-x-adidas-nmd-human-race-trail-pale-nude', 0, '../uploads/img/11a.jpg|../uploads/img/11b.jpg|../uploads/img/11c.jpg|../uploads/img/11d.jpg|../uploads/img/11f.jpg|../uploads/img/11g.jpg|', 2, 579, 599, 10, 'Chưa có mô tả cho sản phẩm này', '36|37|38|39|40|41|42', 0),
(12, 'SOUTH PARK X ADIDAS CAMPUS 80 ‘TOWELIE’', 'south-park-x-adidas-campus-80-towelie', 0, '../uploads/img/12a.jpg|../uploads/img/12b.jpg|../uploads/img/12c.jpg|../uploads/img/12d.jpg|', 2, 219, 249, 3, 'Chưa có mô tả cho sản phẩm này', '36|37|38|39|40|41|42', 0),
(13, 'ADIDAS ULTRA BOOST - HALO-WHITE-SEMI SOLAR SLIME', 'adidas-ultra-boost---halo-white-semi-solar-slime', 0, '../uploads/img/13a.jpg|../uploads/img/13b.jpg|../uploads/img/13c.jpg|../uploads/img/13d.jpg|', 2, 119, 139, 16, 'Chưa có mô tả cho sản phẩm này', '36|37|38|39|40|41|42', 0),
(14, 'ADIDAS YEEZY BOOST 350 V2 \'LIGHT\'', 'adidas-yeezy-boost-350-v2-light', 0, '../uploads/img/14a.png|../uploads/img/14b.jpg|../uploads/img/14c.jpg|../uploads/img/14d.jpg|', 3, 279.99, 349, 14, 'Chưa có mô tả cho sản phẩm này', '35|36|39', 0),
(51, 'OFF-WHITE X NIKE DUNK LOW \'LOT 17 OF 50\'', 'off-white-x-nike-dunk-low-lot-17-of-50', 0, '../uploads/img/15a.png|../uploads/img/15b.jpg|../uploads/img/15c.jpg|../uploads/img/15d.jpg|', 4, 499, 599, 1, 'Sản phẩm chất lượng', '36|38|40', 20),
(52, 'OFF-WHITE X CONVERSE CHUCK 70 STRIPE WHITE', 'off-white-x-converse-chuck-70-stripe-white', 0, '../uploads/img/16a.jpg|../uploads/img/16b.jpg|../uploads/img/16c.jpg|../uploads/img/16e.jpg|', 4, 299, 315, 1, 'Sản phẩm này đang khuyến mãi', '', 0),
(53, 'OFF-WHITE X NIKE AIR FORCE 1 VOLT', 'off-white-x-nike-air-force-1-volt', 0, '../uploads/img/17a.jpg|../uploads/img/17b.jpg|../uploads/img/17c.jpg|../uploads/img/17d.jpg|', 4, 250, 299, 2, 'Chưa có mô tả', '36|38|40', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `mess`) VALUES
(10, '1', 'longzhudz@gmail.com', '123', '123123'),
(24, '123123', 'longzhudz@gmail.com', '12312312312', '12312312'),
(39, 'Vưu Phước Long', 'longzhudz@gmail.com', '12312312', '11111111111111111111111111111111111111111111'),
(45, 'Vưu Phước Long', 'longzhudz@gmail.com', '123123', '12312312'),
(46, 'Vưu Phước Long', 'longzhudz@gmail.com', '123123', '12312312'),
(47, 'Vưu Phước Long', 'duy123@gmail.com', '213', 'khong'),
(50, 'ccccccccccc 2020', 'long@gmail.com', '12312', '12312312312312312'),
(51, '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `rules` tinyint(1) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `status`, `rules`, `token`) VALUES
(1, 'admin', '$2y$10$msde9H01nUK7JsdK5YcyI.6Ard/ZzHY0lVrMLHLrzvo8mxDtG.NzC', 'Long Vưu', 'longzhudz@gmail.com', '0945119242', 0, 1, '081fa16fca30336b66c08dc4897736f7'),
(4, 'admin2', '$2y$10$EDixEqYC9DHfrU6EWi5LuuRc.2ITHQDKT0bgzZQCqV8ZEqV5K9sKa', 'long', 'longne@gmail.com', '123123', 1, 0, '7ea7f47c535542a06eaf1c532aacf42a'),
(6, 'longzhudz@gmail.com', 'encrypted', 'Vưu Phước Long 26.01.00', 'longzhudz@gmail.com', 'null', 0, 0, 'ya29.a0ARrdaM8FqsVM73srMWJS_ljBWD3L6XsKjOiIs_rDDQOd61z3QwGoAbNoc2Ba4uee-0okbZ60NFonsa1B_5wEyOSYz9gRt41v6jpUH3HG32MDrNi7a8IJec8-0OqoAqSdpi7Tep5DVSysaaR6B-eJd7S02kNf'),
(7, 'admin9', '$2y$10$1WlX/WyGesgN6FTwyb8BpuF/dBHBcy3AYIspm5D3OweyicMrvXeuG', 'Long Đẹp trai', 'duy0984474519@gmail.com', '0545454', 0, 0, '9446b861625978ea81d95078b5f61e67'),
(11, 'longdeptrai', '$2y$10$6ws1CxYpZFCn3miSgkRm2uZQrkEamMY6iysr3A3SZBnlxpMS7.HTG', 'long dep trai 2020', 'longzhutb@gmail.com', '08954665', 0, 1, 'ff2192761d8522e6499ca51672bbbd75'),
(12, 'longdep1', '$2y$10$yVSgRxNRVA5RmL1UD/Feku8bEa2OEE4DKWe98/CcXc.iQbjyzW6IK', 'long 2021', 'longzhudz@gmail.com', '0945119242', 0, 0, '19fa4f48708a8c62b05f2b07738bbdf2'),
(13, 'taikhoan', '$2y$10$2VTXrCWQ7KHjFljvT4EFyeP18nHlynxJIxnVg.L.zu8q0grYYCcnG', 'tai khoan moi them', 'taikhoanmoi@gmail.com', '0942423413', 0, 0, 'e2051334d7d26091c30b3cde27f61176'),
(17, 'nhat123', '$2y$10$xcBfAmLurUorgoMrq7Us6u22CMY9i6am4pv8c.bvGRnY5XCrXndBe', 'nhat', 'phamminhnhat362@gmail.com', '0924124112', 0, 0, '8537b670fe2ec8c50e51157624ba8ea2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `name`, `slug`, `status`, `img`) VALUES
(1, 'Slide 14', 'slide-14', 0, 'slide1.jpg'),
(3, 'Slide 3', 'slide-3', 0, 'slide3.jpg'),
(4, 'slide 4', 'slide-4', 0, 'slide5.jpg'),
(6, 'sdfxdxvc', 'sdfxdxvc', 0, 'slide2.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brandlist`
--
ALTER TABLE `brandlist`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_member` (`user_buy`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_brandlist_cate` (`cate`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brandlist`
--
ALTER TABLE `brandlist`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_member` FOREIGN KEY (`user_buy`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `fk_brandlist_cate` FOREIGN KEY (`cate`) REFERENCES `brandlist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
