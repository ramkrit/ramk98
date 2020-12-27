-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 04:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeroartcreations`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userid` varchar(256) NOT NULL,
  `userpass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userid`, `userpass`) VALUES
(1, 'zeroartcreations@gmail.com', 'zero@2121@');

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE `image_gallery` (
  `id` int(11) NOT NULL,
  `category_id` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `code` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `date` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`id`, `category_id`, `title`, `size`, `code`, `image`, `date`) VALUES
(248, 'Geometric Drawings', 'testing five', '', '334i', 'IMG_20200910_082346_E.jpg', '15-10-2020 12:50:18 pm'),
(247, 'Geometric Drawings', 'testing four', '', '66789h', 'IMG_20200910_082324_E.jpg', '15-10-2020 12:49:50 pm'),
(246, 'Geometric Drawings', 'testing three', '', '2234DF', 'IMG_20200910_082257_E.jpg', '27-12-2020'),
(243, 'Geometric Drawings', 'test one', '', '0977y', 'E_IMG_20200805_085954.jpg', '15-10-2020 12:46:37 pm'),
(250, 'Geometric Drawings', 'testing two', '', '213h', 'IMG_20200910_082246.jpg', '15-10-2020 12:53:27 pm'),
(254, 'Acrylic Portraits', 'first ', '', '7768h', 'IMG_20200311_085354 (2).jpg', '15-10-2020 05:36:46 pm'),
(255, 'Acrylic Portraits', 'two', '', '8712k', 'IMG_20200910_082246.jpg', '15-10-2020 05:37:13 pm'),
(261, 'Digital Caricature', 'one', '', '110lj', 'carry1.jpg', '16-10-2020 03:53:18 pm'),
(262, 'Digital Caricature', 'two', '', '1620k', 'carry2.jpg', '16-10-2020 03:53:41 pm'),
(263, 'Digital Caricature', 'three', '', '9801l', 'carry3.jpg', '16-10-2020 03:54:07 pm'),
(264, 'Digital Caricature', 'four', '', '223df', 'carry4.jpg', '16-10-2020 03:54:36 pm'),
(265, 'Digital Caricature', 'five', '', '445y', 'carry5.jpg', '27-12-2020'),
(305, 'Oil Paintings', 'testing form my self checking', '66x22', 'rrt56', '00_logo.png', '27-12-2020'),
(267, 'Graphite Pencil Portraits', '', '', '4890hy', '03.jpg', '16-10-2020 04:09:58 pm'),
(268, 'Graphite Pencil Portraits', '', '', '890l', 'IMG_20200910_082409.jpg', '16-10-2020 04:10:34 pm'),
(272, 'Charcoal Portraits', 'one', '', '334f7', 'WhatsApp Image 2020-09-24 at 4.09.29 AM.jpg', '17-10-2020 11:01:47 am'),
(273, 'Charcoal Portraits', 'second', '', '58/74+6l', 'IMG_20200925_170520.jpg', '17-10-2020 11:02:13 am'),
(274, 'Decorative Items', 'First', '', 'fd44', '01.jpg', '17-10-2020 11:12:56 am'),
(321, 'Acrylic Portraits', 'WSDF', 'SDFS', 'SDF', 'c.jpg', '19-11-2020 08:15:36 am'),
(323, 'Acrylic Paintings', 'WSDF', 'SDFS', 'SDF', '_digital_mkt.png', '19-11-2020 08:18:05 am'),
(324, 'Oil Paintings', 'update testomgfdg', '556677', '334455667788', '38_1542985845.jpg', '26-12-2020'),
(331, 'Acrylic Portraits', 'testing form my self ', '88999*888', '77uuidxffcgnbgvfbgf', '00_downloa.jpg', '26-12-2020');

-- --------------------------------------------------------

--
-- Table structure for table `sold_art_work`
--

CREATE TABLE `sold_art_work` (
  `id` int(11) NOT NULL,
  `date` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `code` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sold_art_work`
--

INSERT INTO `sold_art_work` (`id`, `date`, `title`, `size`, `code`, `image`) VALUES
(5, '07-12-2020_35', 'ram', 'gdfdg', 'sdf', '07-12-2020_35Healthy vegetable food social media and instagram post template (1).jpg'),
(7, '07-12-2020_57', 'WSDF', 'SDFS', 'fghgjh', '07-12-2020_57Cost estimation for online grocery delivery app.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category`, `sub_category`) VALUES
(6, 'Portraits', 'Acrylic Portraits'),
(7, 'Portraits', 'Oil Portraits'),
(8, 'Portraits', 'Digital Portraits'),
(9, 'Portraits', 'Charcoal Portraits'),
(10, 'Portraits', 'Color Pencil Portraits'),
(11, 'Portraits', 'Ink Pen Portraits'),
(12, 'Portraits', 'Graphite Pencil Portraits'),
(13, 'Portraits', 'Pet Portraits'),
(14, 'Portraits', 'Lineart Portraits'),
(15, 'Drawings', 'T-Shirt design Drawings'),
(16, 'Drawings', 'Geometric Drawings'),
(17, 'Drawings', 'Floral design Drawings'),
(18, 'Drawings', 'Doodle Drawings'),
(19, 'Illustrations', 'Pencil Illustrations'),
(20, 'Illustrations', 'Acrylic Illustrations'),
(21, 'Illustrations', 'Digital Illustrations'),
(22, 'Illustrations', 'Ink Pen Illustrations'),
(24, 'Art & Crafts', 'Decorative Items'),
(25, 'Paintings', 'Acrylic Paintings'),
(26, 'Paintings', 'Oil Paintings'),
(28, 'Portraits', 'Digital Caricature'),
(45, 'Illustrations', 'ram testing updated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_gallery`
--
ALTER TABLE `image_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold_art_work`
--
ALTER TABLE `sold_art_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image_gallery`
--
ALTER TABLE `image_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT for table `sold_art_work`
--
ALTER TABLE `sold_art_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
