-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 04:55 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artech_computers`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `brand_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `cat_id`, `brand_name`, `brand_img`) VALUES
(1, 0, 'Samsung', 'c9.png'),
(3, 0, 'Lenovo', 'c3.png'),
(4, 0, 'Dell', 'c1.png'),
(5, 0, 'HP', 'c5.png'),
(6, 0, 'Apple', 'c3.png'),
(7, 0, 'Microsoft', 'c10.png'),
(8, 0, 'Acer', 'c2.jpg'),
(9, 0, 'Asus', 'c4.jpg'),
(10, 0, 'Sony', 'c6.png'),
(11, 0, 'Techno', 'c12.png'),
(12, 0, 'Infinix', 'c13.jpg'),
(13, 0, 'HTC', 'c17.png'),
(14, 0, 'Huawei', 'c18.png'),
(15, 0, 'Motorola', 'c16.png'),
(16, 0, 'Lexar', 'c21.jpg'),
(17, 0, 'Xbox', 'c19.png'),
(19, 0, 'Beats by dre', 'c22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `prod_id` int(11) NOT NULL,
  `ip_add` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Cat_ID` int(8) NOT NULL,
  `Cat_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Cat_ID`, `Cat_Name`) VALUES
(1, 'Laptops'),
(2, 'Phones'),
(3, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Msg_ID` int(8) NOT NULL,
  `Msg_Body` text NOT NULL,
  `msg_subject` varchar(100) NOT NULL,
  `msg_sender` varchar(50) NOT NULL,
  `msg_sender_email` varchar(100) NOT NULL,
  `Msg_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Msg_ID`, `Msg_Body`, `msg_subject`, `msg_sender`, `msg_sender_email`, `Msg_Time`) VALUES
(8, 'Please, I want to know if it is possible to buy a product and get it on the same day and any conditions attached to that.', 'Enquires', 'David Arthur', 'arthur.assan@gmail.com', '2017-04-29 23:49:18'),
(9, 'I bought an iPhone last week order Number 001212 It was supposed to arrive at my end today but its past 10 I havent heard from you', 'Product Delay', 'Bismark John', 'BJ@gmail.com', '2017-04-30 00:01:43'),
(10, 'Please I want to order something from your site but, The system is not responding for me to proceed with my orders.', 'Order Issues', 'Martha W.', 'mw@outlook.com', '2017-05-01 08:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(8) NOT NULL,
  `ord_date` datetime NOT NULL,
  `ord_name` varchar(100) NOT NULL,
  `ord_email` varchar(100) NOT NULL,
  `ord_add` varchar(100) NOT NULL,
  `ord_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `ord_date`, `ord_name`, `ord_email`, `ord_add`, `ord_contact`) VALUES
(1, '2017-05-03 08:51:06', 'test test', 'test@gmail.com', 'kumasi', '0000000000'),
(2, '2017-05-03 08:51:06', 'test test', 'test@gmail.com', 'kumasi', '0000000000'),
(3, '2017-05-03 09:00:08', 'David Arthur', 'assan.arthur@gmail.com', 'Accra', '0503564637'),
(4, '2017-05-03 09:03:25', 'David Arthur', 'assan.arthur@gmail.com', 'Accra', '0503564637'),
(5, '2017-05-03 09:05:08', 'David Arthur', 'assan.arthur@gmail.com', 'Accra', '0503564637'),
(6, '2017-05-03 09:09:20', 'David Arthur', 'assan.arthur@gmail.com', 'Accra', '0503564637'),
(7, '2017-05-03 09:11:26', 'David Arthur', 'assan.arthur@gmail.com', 'Accra', '0503564637'),
(8, '2017-05-03 09:12:32', 'David Arthur', 'assan.arthur@gmail.com', 'Accra', '0503564637'),
(9, '2017-05-03 09:21:27', 'David Arthur', 'assan.arthur@gmail.com', 'Accra', '0503564637'),
(10, '2017-05-03 09:21:57', 'David Arthur', 'assan.arthur@gmail.com', 'legon', '0503564637'),
(11, '2017-05-03 09:23:51', 'David Arthur', 'assan.arthur@gmail.com', 'legon', '0503564637'),
(12, '2017-05-03 10:17:58', 'David Arthur', 'assan.arthur@gmail.com', 'Nkawkaw', '+233503564637'),
(13, '2017-05-03 10:20:30', 'David Arthur', 'assan.arthur@gmail.com', 'accra', '+233503564637'),
(14, '2017-05-03 10:22:54', 'David Arthur', 'assan.arthur@gmail.com', 'accra', '+233503564637'),
(15, '2017-05-03 10:31:53', 'David Arthur', 'assan.arthur@gmail.com', 'Nkawkaw', '+233503564637'),
(16, '2017-05-03 10:33:49', 'David Arthur', 'assan.arthur@gmail.com', 'Nkawkaw', '+233503564637');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Prod_ID` int(8) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `Prod_Name` varchar(200) NOT NULL,
  `Prod_Price` double NOT NULL,
  `Prod_quantity` varchar(100) NOT NULL,
  `Prod_image` varchar(500) NOT NULL,
  `Prod_description` text NOT NULL,
  `Prod_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Prod_ID`, `cat_id`, `brand_id`, `Prod_Name`, `Prod_Price`, `Prod_quantity`, `Prod_image`, `Prod_description`, `Prod_keyword`) VALUES
(1, 0, 0, 'iphone 7', 3472, '3', 'img/lp1.png', 'This is an Iphone', 'iphone apple phone '),
(17, 0, 0, 'Microsoft Surface', 2400, '5', 'img/lp5.png', 'This is a phone.', 'Microsoft phone'),
(18, 0, 0, 'Lenovo Yoga', 3500, '2', 'img/lp8.png', 'This is a laptop', 'lenovo laptop'),
(19, 0, 0, 'Xbox one', 3210, '3', 'img/tp2.png', 'console', 'xbox console'),
(20, 0, 0, 'Beats by dre', 600, '6', 'img/tp8.png', 'ear phones', 'beat by dre accessories ear phones'),
(21, 0, 0, 'Asus ZenBook ', 3700, '2', 'img/tp3.png', 'Asus Laptop', 'Asus Zenbook laptop'),
(22, 0, 0, 'MacBook Air', 3300, '4', 'img/lp2.png', 'MacBook Laptop', 'Apple MacBook laptop'),
(23, 0, 0, 'Samsung S7', 2147, '9', 'img/tp1.png', 'Samsung Phone', 'Samsung phone'),
(25, 0, 0, 'MacBook Pro', 5740, '2', 'img/tp11.png', 'This is an apple laptop', 'Apple laptop macbook pro '),
(26, 0, 0, 'Samsung Wireless Charger', 120, '5', 'img/tp6.png', 'This is a wireless charger', 'samsung wireless charger accessories\r\n'),
(27, 0, 0, 'xbox Controllers', 310, '2', 'img/sp3.png', 'This is an accessory for Xbox.', 'xbox controllers accessories'),
(28, 0, 0, 'wireless Charger', 100, '3', 'img/lp4.png', 'This is a wireless charger.', 'wireless charger'),
(32, 0, 0, 'Lumia 640LTE', 640, '5', 'img/tp12.png', 'This is a phone from microsoft.', 'Microsoft lumia phone'),
(33, 0, 0, 'Acer Aspire E5', 2600, '2', 'img/acerlp1.png', 'This is an Acer Laptop.', 'Acer Aspire laptop '),
(34, 0, 0, 'Huawei G9 Lite', 1200, '6', 'img/huaweip1.png', 'Huawei G9 Lite VNS-AL00 16GB 4G LTE Dual Sim (SIM-Lock) (Nur English) - Gold', 'Huawei phone '),
(35, 0, 0, 'Sony Laptop', 2987, '1', 'img/sonylp.png', 'Notebook ConversÃ­vel 2 Em 1 Multiflip', 'sony laptop'),
(36, 0, 0, 'Sony Headset', 157, '3', 'img/sonyhedset.png', ' SONY-h-ear-in-Wireless-Headset-MDR-EX750BT-Hi-Res-Earphone-Express-Ship', 'sony earphone headset accessories'),
(37, 0, 0, 'Sony Wireless Headset', 89, '6', 'img/sonyhedsetwls.png', 'Sony wireless headset.', 'sony earphone headset accessories'),
(38, 0, 0, 'Sony EarPins', 50, '10', 'img/sonyearpins.png', 'Sony MDR-EX750 High-Resolution Noise Cancelling In-Ear headphone.\r\n', 'sony earphone headset accessories earpins'),
(39, 0, 0, 'Sony Xperia ', 1603, '4', 'img/sonyexperia.png', 'Sony Xperia C5 Ultra Dual', 'sony phone xperia'),
(40, 0, 0, 'Lexar Flash Drive', 30, '50', 'img/lexarusb.png', '8GB flash drive.', 'pendrive accessories lexar'),
(41, 0, 0, 'Dell Xps', 3600, '3', 'img/dell xps 2015.png', 'Dell XPS  2015 15" inches touch screen 1TB HDD 6GB RAM ', 'Dell laptop xps '),
(42, 0, 0, 'HP Spectre 360', 3200, '2', 'img/hpspectre 360 15t..png', 'Hp Spectre 360 \r\n1TB SSD \r\n8GB RAM\r\nIntel core i7\r\n15" inches', 'HP spectre laptop '),
(43, 0, 0, 'Techno Phantom', 1100, '4', 'img/techno.png', 'This is a techno Phantom phone.', 'Techno phone phantom'),
(44, 0, 0, 'Infinix Hot 3', 1169, '6', 'img/infinix hot s.png', 'Display: 5.5" High Precision Display\r\nMemory: 16GB HDD, 2GB RAM\r\nCamera: 13MP Rear, 5MP Front\r\nOperating system: Android 6.0 Marshmallow\r\nProcessor: Quad-core\r\nBattery: 3000mAh Li-Ion', 'Phone infinix hot 3'),
(45, 0, 0, 'Techno Assan', 2300, '6', 'img/techno17.png', 'This is a techno phone', 'Techno phone '),
(46, 0, 0, 'Techno Phantom Z', 645, '5', 'img/technophz.png', 'This is a techno phone', 'Techno phone Phantom z'),
(47, 0, 0, 'HTC 02 Hero', 2410, '4', 'img/HTCO2Hero.png', 'HTC 02 Hero', 'HTC 02 Hero phone'),
(48, 0, 0, 'HTC Desire pro', 770, '5', 'img/htcdsr.png', 'HTC Desire pro', 'htc phone Desire pro'),
(49, 0, 0, 'Beats By Dre', 55, '10', 'img/bbdpwr.png', 'Beats By Dre Power ear phones', 'Accessories Beats by dre headset earpins'),
(50, 0, 0, 'Beats_Solo3', 185, '6', 'img/Slate_Marble_Surface_V56_Beats_Solo3_Rose_Gold_v2_600x.png', 'Slate_Marble_Surface_V56_Beats_Solo3_Rose_Gold_v2_600x', 'Beats by dre accessories solo3'),
(51, 0, 0, 'Beat Monster', 45, '6', 'img/beat monster.png', 'Beat Monster ear phones', 'Beat Monster accessories earpins headset'),
(52, 0, 0, 'Lexar Micro SD', 25, '10', 'img/lexarmicrosd.png', 'Lexar Micro SD 8GB Phantom III', 'Lexar Micro SD accessories '),
(53, 0, 0, 'Samsung Flash Drive', 50, '5', 'img/samsungflashdrive.png', 'Samsung Flash Drive 16 GB', 'Samsung Flash Drive accessories'),
(54, 0, 0, 'Lexar Jumpdrive', 95, '6', 'img/Lexar Jump drive.png', 'Lexar Jumpdrive 128 GB', 'Lexar jump drive  accessories '),
(55, 0, 0, 'Samsung USB', 35, '10', 'img/samsungusbcable.png', 'Samsung USB Cable', 'Samsung USB accessories'),
(56, 0, 0, 'Iphone USB', 40, '10', 'img/iphoneusbcab.png', 'iPhone USB Cable', 'iphone accessories USB cable'),
(57, 0, 0, 'Apple flashdrive', 50, '6', 'img/apple flash.png', '', 'Apple flashdrive accessories '),
(58, 0, 0, 'Motorola Moto Z DROID 3', 1123, '3', 'img/Motorola Moto Z DROID .png', 'Motorola Moto Z DROID', 'Motorola Moto z phone '),
(59, 0, 0, 'LG Gram ', 2400, '2', 'img/LG Unveils .png', ' LG Gram 15" inches', 'LG Gram laptop'),
(60, 0, 0, 'LG K10 LTE', 1500, '3', 'img/LG K10 LTE Dual SIM.png', 'LG K10 LTE Dual SIM', 'LG K10 phone LTE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(8) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DoB` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `level` tinyint(3) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `FirstName`, `LastName`, `Gender`, `DoB`, `Email`, `Password`, `Phone`, `level`) VALUES
(1, 'David', 'Arthur', 'male', '1995-04-11', 'assan.arthur@gmail.com', '120ghana', '+233503564637', 1),
(23, 'test', 'test', 'male', '2017-04-26', 'test@gmail.com', 'test', '0000000000', 0),
(26, 'Henry', 'Acquah', 'male', '0000-00-00', 'hacquah50@gmail.com', 'qwertyu1234', '0572059258', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Msg_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Prod_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Cat_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Msg_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Prod_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
