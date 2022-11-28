-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 06:51 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cId` int(255) NOT NULL,
  `pId` int(255) NOT NULL,
  `uName` varchar(255) NOT NULL,
  `pQty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cId`, `pId`, `uName`, `pQty`) VALUES
(1, 1, 'channa', 1),
(10, 17, 'channa', 1),
(14, 11, 'channa', 2),
(17, 7, 'user', 4),
(18, 14, 'hash', 1);

-- --------------------------------------------------------

--
-- Table structure for table `collection_table`
--

CREATE TABLE `collection_table` (
  `c_id` int(255) NOT NULL,
  `collection` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection_table`
--

INSERT INTO `collection_table` (`c_id`, `collection`) VALUES
(1, 'women'),
(2, 'men'),
(3, 'accessories');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pId` int(255) NOT NULL,
  `pName` varchar(255) NOT NULL,
  `pPrice` int(255) NOT NULL,
  `pQty` int(255) NOT NULL,
  `pCollection` varchar(255) NOT NULL,
  `pImg` varchar(255) NOT NULL,
  `pAImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pId`, `pName`, `pPrice`, `pQty`, `pCollection`, `pImg`, `pAImg`) VALUES
(1, 'pleated skirt', 4, 2, 'women', 'https://static.wixstatic.com/media/84770f_92ad288f7eb849c68652826216de56dc.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_92ad288f7eb849c68652826216de56dc.webp', 'https://static.wixstatic.com/media/84770f_8660c9c0527c4107869f4159281b3957.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_8660c9c0527c4107869f4159281b3957.webp'),
(2, 'Navy Suit', 14, 0, 'men', 'https://static.wixstatic.com/media/84770f_174a1833c8394bd1af133b4795f7e33b.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_174a1833c8394bd1af133b4795f7e33b.webp', 'https://static.wixstatic.com/media/84770f_aa82a8fc608f41ac82139564e5d10e93.jpg/v1/fill/w_625,h_625,al_c,q_85,usm_0.66_1.00_0.01/84770f_aa82a8fc608f41ac82139564e5d10e93.webp'),
(3, 'printed chiffon dress', 20, 2, 'women', 'https://static.wixstatic.com/media/84770f_8745e3f04d8e4662ba23b4d575602616.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_8745e3f04d8e4662ba23b4d575602616.webp', 'https://static.wixstatic.com/media/84770f_6d22d3fd17e74bd2948588ab408fd231.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_6d22d3fd17e74bd2948588ab408fd231.webp'),
(4, 'printed top', 19, 2, 'women', 'https://static.wixstatic.com/media/84770f_fd449a34dc724242b659cf1476e073dd.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_fd449a34dc724242b659cf1476e073dd.webp', 'https://static.wixstatic.com/media/84770f_c088c666b370405194b8dd2d12f248b3.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_c088c666b370405194b8dd2d12f248b3.webp'),
(5, 'Striped Mini Skirt', 18, 2, 'women', 'https://static.wixstatic.com/media/84770f_c4238cadc128447a90c5c4ec07cb8532.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_c4238cadc128447a90c5c4ec07cb8532.webp', 'https://static.wixstatic.com/media/84770f_315c3ab348104bcd83146532d72e2ef1.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_315c3ab348104bcd83146532d72e2ef1.webp'),
(6, 'Knee Length Dress', 13, 2, 'women', 'https://static.wixstatic.com/media/84770f_d9b51e08b51c43319cc6a36f808d7bf9.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_d9b51e08b51c43319cc6a36f808d7bf9.webp', 'https://static.wixstatic.com/media/84770f_0f5fb1bcf1ff442396a8cde48380693a.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_0f5fb1bcf1ff442396a8cde48380693a.webp'),
(7, 'Plaint White Shorts', 7, 2, 'women', 'https://static.wixstatic.com/media/84770f_8bba0cf04db947de8d9542f081e545ad.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_8bba0cf04db947de8d9542f081e545ad.webp', 'https://static.wixstatic.com/media/84770f_a93eaf951ab94858b7a2976d9489744e.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_a93eaf951ab94858b7a2976d9489744e.webp'),
(8, 'Chinese Shirt', 26, 0, 'women', 'https://static.wixstatic.com/media/84770f_685a7e84e1f6459592ea52b10d6ec70f.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_685a7e84e1f6459592ea52b10d6ec70f.webp', 'https://static.wixstatic.com/media/84770f_bdb4bcdcc06d4dcf94ad9181c12557be.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_bdb4bcdcc06d4dcf94ad9181c12557be.webp'),
(9, 'Straight Pant', 19, 0, 'women', 'https://static.wixstatic.com/media/84770f_2c647846e52d4b5d9cc3a6e1e8e38ba5.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_2c647846e52d4b5d9cc3a6e1e8e38ba5.webp', 'https://static.wixstatic.com/media/84770f_7fa958c8c2414423a3e585c5c27779b3.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_7fa958c8c2414423a3e585c5c27779b3.webp'),
(10, 'casual t-shirt', 18, 0, 'men', 'https://static.wixstatic.com/media/84770f_fa2cb753b49b43faa1e9b3da2e8f72c0.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_fa2cb753b49b43faa1e9b3da2e8f72c0.webp', 'https://static.wixstatic.com/media/84770f_b26b140c7de74e6a910e3ad516980681.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_b26b140c7de74e6a910e3ad516980681.webp'),
(11, 'Side Zip T-Shirt', 22, 0, 'men', 'https://static.wixstatic.com/media/84770f_ad69de0ded0845ecb2be4c325fc0d7b2.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_ad69de0ded0845ecb2be4c325fc0d7b2.webp', 'https://static.wixstatic.com/media/84770f_f9de83a5802c4c8fb60703dd1f706df4.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_f9de83a5802c4c8fb60703dd1f706df4.webp'),
(12, 'Pattern t-shirt', 13, 0, 'men', 'https://static.wixstatic.com/media/84770f_1720a41d8a7f4f51be2e910b346afb2d.jpg/v1/fill/w_625,h_625,al_c,q_85,usm_0.66_1.00_0.01/84770f_1720a41d8a7f4f51be2e910b346afb2d.webp', 'https://static.wixstatic.com/media/84770f_b4141d6d0e294322abc6e3906f6d5056.jpg/v1/fill/w_625,h_625,al_c,q_85,usm_0.66_1.00_0.01/84770f_b4141d6d0e294322abc6e3906f6d5056.webp'),
(13, 'Foldover Purse', 6, 0, 'accessories', 'https://static.wixstatic.com/media/84770f_86f6b8eadd0144ff8123a42842ae37a5.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_86f6b8eadd0144ff8123a42842ae37a5.webp', 'https://static.wixstatic.com/media/84770f_04708dcecb9446e89167e6ac4ca7ba82.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_04708dcecb9446e89167e6ac4ca7ba82.webp'),
(14, 'Handcraft Clutch', 5, 2, 'accessories', 'https://static.wixstatic.com/media/84770f_5a144aac1232446497775d71890dd188.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_5a144aac1232446497775d71890dd188.webp', 'https://static.wixstatic.com/media/84770f_775e9afa293b43f89eec9736b8c42d08.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_775e9afa293b43f89eec9736b8c42d08.webp'),
(15, 'Green Necklace', 2, 2, 'accessories', 'https://static.wixstatic.com/media/84770f_f8e77c4203dd40c19eb913ae3b4ccb1a.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_f8e77c4203dd40c19eb913ae3b4ccb1a.webp', 'https://static.wixstatic.com/media/84770f_dc75910eb7ab4aa782542c6af9770fd2.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_dc75910eb7ab4aa782542c6af9770fd2.webp'),
(16, 'black necklace', 12, 2, 'accessories', 'https://static.wixstatic.com/media/84770f_480159a712a64e04addd28ca090a5cb8.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_480159a712a64e04addd28ca090a5cb8.webp', 'https://static.wixstatic.com/media/84770f_dad2829a0b8148a78096aecefb5d84e9.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_dad2829a0b8148a78096aecefb5d84e9.webp'),
(17, 'Silver Ornament', 11, 0, 'accessories', 'https://static.wixstatic.com/media/84770f_e38be8301e254aeab5e032ecba6be649.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_e38be8301e254aeab5e032ecba6be649.webp', 'https://static.wixstatic.com/media/84770f_0c74978c768a4103b2cbc34f488ffd6d.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_0c74978c768a4103b2cbc34f488ffd6d.webp'),
(18, 'Grey belt', 29, 0, 'accessories', 'https://static.wixstatic.com/media/84770f_21d996d935eb4aa186fcf2431893cb5f.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_21d996d935eb4aa186fcf2431893cb5f.webp', 'https://static.wixstatic.com/media/84770f_7e554aae23ec4e3b8f0d5ed0603f2916.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_7e554aae23ec4e3b8f0d5ed0603f2916.webp'),
(19, 'Cateye Sunglasses', 49, 0, 'accessories', 'https://static.wixstatic.com/media/84770f_054a710970294c8a91eeea7d1b20f44d.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_054a710970294c8a91eeea7d1b20f44d.webp', 'https://static.wixstatic.com/media/84770f_119268614ecb4043b06bd1893ea3eb02.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_119268614ecb4043b06bd1893ea3eb02.webp'),
(20, 'Round sunglasses', 32, 0, 'accessories', 'https://static.wixstatic.com/media/84770f_3d58b9767c674b0f9c75805fe1e63a85.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_3d58b9767c674b0f9c75805fe1e63a85.webp', 'https://static.wixstatic.com/media/84770f_43f5bbf6c55b4e5a96386072e3f469b5.png/v1/fill/w_625,h_625,al_c,q_90,usm_0.66_1.00_0.01/84770f_43f5bbf6c55b4e5a96386072e3f469b5.webp');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `profile`, `number`, `address`, `password`, `cpassword`) VALUES
(1, 'abc', 'admin@admin.com', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtVwUoQz0A0BFEsRVq4gLh2KMy4l8RCY8ExP9cXDg4xgr1z1u3RmqLRvNLB-DMPNIuIeM&usqp=CAU', '', '', '$2y$10$H1NcHr5i5tTMfIVzyc7v4OWIDsQ29xsU809NVz8zc0CZKxtTbR9fK', '$2y$10$Bcun6P87FSp8yBr/N/nyYej5KtfjoviY/SyRI.qGNyUSiEzqmwwGG'),
(2, 'kemi', 'kemi2@kem2i.com', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtVwUoQz0A0BFEsRVq4gLh2KMy4l8RCY8ExP9cXDg4xgr1z1u3RmqLRvNLB-DMPNIuIeM&usqp=CAU', '', '', '$2y$10$.ItW3zWp.IFGCRxEr.j6muR/n3pH3shTxe6HCNL1ZNKhnQR5UJJUi', '$2y$10$gs5uoviZFPFhh7slQ5YsYO1kM5nm5cczhaZ0GC2PdpJGyWXMCFsaa'),
(3, 'channa', 'channa@gmail.com', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtVwUoQz0A0BFEsRVq4gLh2KMy4l8RCY8ExP9cXDg4xgr1z1u3RmqLRvNLB-DMPNIuIeM&usqp=CAU', '9876543210', '123,somewhere,something', '$2y$10$eV.EwS3lX6AySv2ytz9peOLd7nkySaxKa2QGbkYVAhEDzahVOCM9.', '$2y$10$tFhYBwZ52QuZheOo/P2W3Ok7I7tUkqY9rhAwHdaS4A3eOnnZGKtRG'),
(4, 'user', 'user@gmail.com', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtVwUoQz0A0BFEsRVq4gLh2KMy4l8RCY8ExP9cXDg4xgr1z1u3RmqLRvNLB-DMPNIuIeM&usqp=CAU', '', '', '$2y$10$grCluFz7RBLiI1eLwsvtsO7pG7oxIvf8NOsq/BNp9USYGaVQ3erva', '$2y$10$017O1K1mGmkKw.Ka78Qq6eMeWWh5h/SrZx30xg1vEh0k3/QQkS7V2'),
(5, 'hash', 'hash@email.com', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtVwUoQz0A0BFEsRVq4gLh2KMy4l8RCY8ExP9cXDg4xgr1z1u3RmqLRvNLB-DMPNIuIeM&usqp=CAU', '9874561230', 'somewhere', '', ''),
(6, 'John', 'John789@gmail.com', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtVwUoQz0A0BFEsRVq4gLh2KMy4l8RCY8ExP9cXDg4xgr1z1u3RmqLRvNLB-DMPNIuIeM&usqp=CAU', '', '', '$2y$10$dzGeyBKkkdmL8HZp.9dIle7q7Ffe5QXy0utqwn1LaG0rJewBWtrY6', '$2y$10$8C6/FT/iOhpu/sNym0g/Qeocdx/uPEO20m.3nhATR2tkMxGx6e9Ji');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `collection_table`
--
ALTER TABLE `collection_table`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pId`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `collection_table`
--
ALTER TABLE `collection_table`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
