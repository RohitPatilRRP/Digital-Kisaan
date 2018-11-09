-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 12:40 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_kisan`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `user_id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`user_id`, `chat_id`, `name`, `msg`, `status`) VALUES
(1, 37, 'rakesh', 'I want to replace the Fertilizer which I bought from shop :123', 1),
(3, 41, 'Rohit', 'sure sir', 1);

-- --------------------------------------------------------

--
-- Table structure for table `farmerdetails`
--

CREATE TABLE `farmerdetails` (
  `farmerid` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `aadhar` int(10) NOT NULL,
  `jandhan` int(10) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date_now` date NOT NULL,
  `pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmerdetails`
--

INSERT INTO `farmerdetails` (`farmerid`, `username`, `password`, `email`, `phone`, `aadhar`, `jandhan`, `location`, `date_now`, `pincode`) VALUES
(1, 'rakesh', '123', 'rakesh@gmail.com', 2147483647, 1524635879, 2147483647, 'Belgaon, Maharashtra, India', '2000-05-01', '123456'),
(2, 'Rohit', '123', 'rohit@gmail.com', 2147483647, 2147483647, 1254698755, 'Panvel, Navi Mumbai, Maharashtra, India', '1995-10-10', '123123'),
(3, 'Anand', '123', 'aditya.thaokar1@gmail.com', 12312312, 3434234, 214134, 'Nagpur, Maharashtra, India', '1233-03-31', '12356643'),
(4, 'pratiksha', '123', 'pratiksha@gmail.com', 2147483647, 1524635879, 23423, 'Nashik, Maharashtra, India', '1987-10-31', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `sender`, `message`) VALUES
(1, 'rohit@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `sprice` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `mdate` date NOT NULL,
  `edate` date NOT NULL,
  `img` varchar(200) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `owner` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `sprice`, `quantity`, `mdate`, `edate`, `img`, `currency`, `country`, `location`, `payment`, `contact`, `owner`) VALUES
(1, 'Pesticides', '       good                         ', 100, 20, '2018-02-11', '2018-02-11', 'uploaded_imgs/Kisaanlogo.png', 'Rupees', 'India', 'Nerul, Goa, India', 'Credit Card', 'Email,Whatsapp', 'aditya.mailbox@gmail.com'),
(2, 'Animal Feeds', '      Good for cattles                          ', 120, 3, '2018-12-01', '2018-02-12', 'uploaded_imgs/44034-O3VJA2.jpg', 'Rupees', 'India', 'Bhandara, Maharastra', 'Credit Card', 'Email', 'aditya.mailbox@gmail.com'),
(3, 'Vegetative Plating Material', '  cdsv                              ', 700, 45, '2018-02-16', '2018-02-16', 'uploaded_imgs/Yash Puthran.jpg', 'Rupees', 'India', 'Thane, Maharashtra, India', 'On Delivery', 'Email,Whatsapp,In-ap', 'ab@cd.com'),
(4, 'Bio Pesticides', 'Very effective on rodents                       ', 741, 52, '2018-02-16', '2018-02-16', 'uploaded_imgs/IMG-20180130-WA0029.jpg', 'Dollars', 'India', 'VFW Parkway, Boston, MA, USA', 'Credit Card', 'Email', 'ab@cd.com'),
(5, 'Fertilizers', 'Plant fertilizer                                 ', 289, 5, '2018-02-08', '2018-02-16', 'uploaded_imgs/Plant Fertilizer - KERALA Product.jpg', 'Rupees', 'India', 'Varanasi, Uttar Pradesh, India', 'On Delivery', 'Email,Whatsapp', 'rakesh@gmail.com'),
(6, 'Fertilizers', 'Plant Fertilizer - KERALA Product                             ', 458, 5, '2018-02-14', '2018-04-19', 'uploaded_imgs/Plant Fertilizer - KERALA Product3.webp', 'Rupees', 'India', 'Bekasi, West Java, Indonesia', 'On Delivery', 'Whatsapp', 'rakesh@gmail.com'),
(7, 'Fertilizers', 'Plant Fertilizer - KERALA Product                                ', 752, 10, '2018-02-16', '2018-12-05', 'uploaded_imgs/Plant Fertilizer - KERALA Product4.webp', 'Rupees', 'India', 'Warangal, Telangana, India', 'On Delivery', 'Email,Whatsapp', 'rakesh@gmail.com'),
(8, 'Pesticides', 'Nutree Neem powder                                ', 550, 5, '2018-02-11', '2018-07-17', 'uploaded_imgs/Agro Plus AM003_3 Pesticide.jpg', 'Rupees', 'India', 'Bhopal, Madhya Pradesh, India', 'On Delivery', 'Email', 'rakesh@gmail.com'),
(9, 'Pesticides', 'Nutree Neem powder                                ', 450, 4, '2018-01-10', '2018-09-20', 'uploaded_imgs/Nutree Neem powder.jpg', 'Rupees', 'India', 'Chhattisgarh, India', 'On Delivery', 'Email', 'rakesh@gmail.com'),
(10, 'Pesticides', 'Nutree Neem powder                                ', 120, 1, '2018-02-06', '2018-09-05', 'uploaded_imgs/41GibSgRabL._AC_SR160,160_.jpg', 'Rupees', 'India', 'Nirmal, Telangana, India', 'On Delivery', 'Email', 'rakesh@gmail.com'),
(11, 'Vegetative Plating Material', 'Plant Growth fertilizer , MicroBooster Micronutrient                                ', 421, 4, '2018-02-16', '2018-02-27', 'uploaded_imgs/41axlBD+5DL.jpg', 'Rupees', 'India', 'Manbazar, West Bengal, India', 'On Delivery', 'Email,Whatsapp', 'rakesh@gmail.com'),
(12, 'Bio Pesticides', 'CG Hydroponic & Soil Nutrient Blend - NPK 600ml                                ', 650, 4, '2018-02-16', '2018-06-08', 'uploaded_imgs/51-ZLfOm5jL._SX450_.jpg', 'Rupees', 'India', 'Nagpur, Maharashtra, India', 'On Delivery', 'Email', 'rakesh@gmail.com'),
(13, 'Bio Pesticides', 'Nutrivate Arka Vegetable Special                                ', 850, 5, '2018-02-16', '2018-05-09', 'uploaded_imgs/download.webp', 'Rupees', 'India', 'Warangal, Telangana, India', 'On Delivery', 'Email', 'rakesh@gmail.com'),
(14, 'Bio Pesticides', 'Grorich Plus Micronutrients/Plant Growth Promoters 250ml                                ', 250, 1, '2018-02-12', '2018-05-22', 'uploaded_imgs/31pIG6mLxoL.jpg', 'Dollars', 'India', 'Warangal, Telangana, India', 'On Delivery', 'Email,Whatsapp', 'rakesh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `modalid`
--

CREATE TABLE `modalid` (
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salerdetails`
--

CREATE TABLE `salerdetails` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `aadhar` int(10) NOT NULL,
  `shopid` int(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date_now` date NOT NULL,
  `pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salerdetails`
--

INSERT INTO `salerdetails` (`id`, `username`, `password`, `email`, `phone`, `aadhar`, `shopid`, `location`, `date_now`, `pincode`) VALUES
(3, 'Rohit', '1234', 'rohit@gmail.com', 2147483647, 3212, 123, 'Pune, Maharashtra, India', '1998-01-01', '124423'),
(4, 'Sushant', '1234', 'sushant@gmail.com', 21231231, 42312, 321, 'Jalgaon, Maharashtra, India', '1996-12-31', '123423'),
(5, 'sandeep', '1234', 'sandeep@gmail.com', 2147483647, 374646, 47858, 'Sanpada, Navi Mumbai, Maharashtra, India', '1975-12-31', '213412'),
(2, 'Arnab', 'zxcv', 'ab@cd.com', 414141414, 12121212, 4777, 'Ahmadnagar, Anand Nagar, Ahmednagar, Maharashtra', '2018-01-30', '14222'),
(1, 'Aditya ', '1234', 'aditya.mailbox@gmail.com', 2147483647, 1524635879, 986574859, 'Nerul, Navi Mumbai, Maharashtra, India', '1975-05-03', '410206');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `farmerid` int(100) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `farmerid`, `creation_date`) VALUES
(9, 1, '2018-02-17'),
(10, 1, '2018-02-17'),
(11, 1, '2018-02-17'),
(12, 1, '2018-02-17'),
(13, 1, '2018-02-18'),
(14, 1, '2018-02-18'),
(15, 1, '2018-02-18'),
(16, 1, '2018-02-18'),
(17, 1, '2018-02-18'),
(18, 1, '2018-02-18'),
(19, 1, '2018-02-18'),
(20, 1, '2018-02-18'),
(21, 1, '2018-02-18'),
(22, 1, '2018-02-18'),
(23, 1, '2018-02-23'),
(24, 1, '2018-02-23'),
(25, 1, '2018-02-23'),
(26, 2, '2018-02-23'),
(27, 2, '2018-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `id` int(100) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` int(200) NOT NULL,
  `product_quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`id`, `order_id`, `product_name`, `product_price`, `product_quantity`) VALUES
(7, 9, 'Bio Pesticides', 850, 1),
(8, 9, 'Bio Pesticides', 250, 1),
(9, 10, 'Animal Feeds', 12, 1),
(10, 10, 'Bio Pesticides', 741, 1),
(11, 10, 'Bio Pesticides', 650, 1),
(12, 11, 'Bio Pesticides', 741, 1),
(13, 11, 'Bio Pesticides', 650, 1),
(14, 11, 'Vegetative Plating Material', 421, 1),
(15, 11, 'Vegetative Plating Material', 700, 1),
(16, 12, 'Bio Pesticides', 741, 1),
(17, 12, 'Bio Pesticides', 650, 1),
(18, 13, 'Bio Pesticides', 650, 1),
(19, 13, 'Animal Feeds', 12, 22),
(20, 14, 'Bio Pesticides', 250, 1),
(21, 14, 'Fertilizers', 289, 1),
(22, 14, 'Pesticides', 450, 1),
(23, 14, 'Vegetative Plating Material', 700, 1),
(24, 15, 'Pesticides', 450, 1),
(25, 16, 'Animal Feeds', 12, 1),
(26, 16, 'Bio Pesticides', 741, 2),
(27, 16, 'Bio Pesticides', 650, 1),
(28, 17, 'Animal Feeds', 12, 1),
(29, 18, 'Animal Feeds', 12, 1),
(30, 18, 'Bio Pesticides', 741, 12),
(31, 19, 'Bio Pesticides', 741, 10),
(32, 20, 'Animal Feeds', 12, 1),
(33, 21, 'Vegetative Plating Material', 421, 1),
(34, 22, 'Bio Pesticides', 650, 12),
(35, 23, 'Fertilizers', 458, 2),
(36, 23, 'Pesticides', 100, 1),
(37, 23, 'Bio Pesticides', 741, 1),
(38, 24, 'Bio Pesticides', 250, 1),
(39, 25, 'Animal Feeds', 120, 1),
(40, 26, 'Bio Pesticides', 741, 1),
(41, 27, 'Animal Feeds', 120, 2),
(42, 27, 'Bio Pesticides', 741, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `farmerdetails`
--
ALTER TABLE `farmerdetails`
  ADD PRIMARY KEY (`farmerid`),
  ADD UNIQUE KEY `id` (`farmerid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salerdetails`
--
ALTER TABLE `salerdetails`
  ADD PRIMARY KEY (`aadhar`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `farmerdetails`
--
ALTER TABLE `farmerdetails`
  MODIFY `farmerid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `salerdetails`
--
ALTER TABLE `salerdetails`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
