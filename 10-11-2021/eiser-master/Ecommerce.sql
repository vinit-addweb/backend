-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2021 at 01:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `pro_id` bigint(20) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `sub_catagory` varchar(20) NOT NULL,
  `pro_description` text NOT NULL,
  `pro_price` double(10,2) NOT NULL,
  `pro_color` varchar(50) NOT NULL,
  `pro_img` text NOT NULL,
  `status` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`pro_id`, `pro_name`, `sub_catagory`, `pro_description`, `pro_price`, `pro_color`, `pro_img`, `status`) VALUES
(2, 'Puma', 'Shoes', 'blue shoes', 900.00, 'Blue', 'images/n4.jpg', 1),
(3, 'Women Silver, Grey Heels Sandal', 'Heels', 'Its amazing product just go for it', 1000.00, 'black', 'images/m-product-10.jpg', 1),
(4, 'Nova', 'Hair', 'A hairdryer is an essential styling device to dry your hair post-shower or style them like a diva in the comfort of your home without having to visit a salon.', 469.00, 'Grey', 'images/dryer.jpg', 1),
(14, 'Unisex Black Phase Laptop Backpack', 'Bag', 'Black backpack\r\nNon-Padded haul loop\r\n1 main compartment with zip closure\r\nPadded back\r\nZip Pocket', 779.00, 'Black', 'images/pumabag.jpg', 1),
(15, 'Realme Black Buds Wireless 2 Neo Bluetooth Headphone', 'Wireless Buds ', 'Enjoy an immersive audio experience while listening to music with the realme Buds Wireless 2 Neo Earphones.\r\nFeaturing 11.2mm Bass Boost driver with 3 EQ presets you can choose from realme', 469.00, 'Green ', 'images/earphonr.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clothing`
--

CREATE TABLE `clothing` (
  `pro_id` bigint(11) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `sub_catagory` varchar(20) NOT NULL,
  `pro_description` text NOT NULL,
  `pro_price` double(10,2) NOT NULL,
  `pro_color` varchar(50) NOT NULL,
  `pro_img` text NOT NULL,
  `categories_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothing`
--

INSERT INTO `clothing` (`pro_id`, `pro_name`, `sub_catagory`, `pro_description`, `pro_price`, `pro_color`, `pro_img`, `categories_id`, `status`) VALUES
(4, 'Men Navy Red & white Striped Polo Collar T-shirt', 'T-Shirt', 'Blue printed casual shirt, has a mandarin collar collar, button placket, long sleeves, curved hem', 350.00, 'Blue', 'images/tshirt.jpg', 0, 1),
(5, 'Girls Black Blazer Dress', 'Blazer', ' Black solid blazer dress  Shirt collar  Long, regular sleeves  Above knee length in straight Button closure', 700.00, 'black', 'images/girlsblazer.jpg', 0, 0),
(6, 'Men Navy Red & white Striped Polo Collar T-shirt', 'T-shirt', 'Fashion trends come and go, but a few manage to break the cycle and earn wardrobe-essential status. A basic, if you will. New Basics resurface year after year, and outfits wouldnt be the same without them. These pieces are tried-and-true wardrobe staples and act as the foundation to every good look.', 1199.00, 'Blue', 'images/tshirt.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `pro_id` bigint(11) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `sub_catagory` varchar(20) NOT NULL,
  `pro_description` text NOT NULL,
  `pro_price` double(10,2) NOT NULL,
  `pro_color` varchar(50) NOT NULL,
  `pro_img` text NOT NULL,
  `status` tinyint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`pro_id`, `pro_name`, `sub_catagory`, `pro_description`, `pro_price`, `pro_color`, `pro_img`, `status`) VALUES
(2, 'Samsung', 'Microwave', '28L : Suitable for large families   Convection: Can be used for baking along with grilling, reheating, defrosting and cooking ', 11590.00, 'Black', 'images/microwave.jpg', 1),
(3, 'Amazon Fire TV Stick (3rd Gen, 2021) with all-new Alexa Voice Remote (includes TV and app controls), HD streaming device', 'Remote', 'Latest generation of our best-selling Fire TV device - 50% more powerful than the 2nd generation for fast streaming in Full HD. Includes Alexa Voice Remote with power and volume buttons.Less clutter, more control - All-new Alexa Voice Remote (3rd Gen) lets you use your voice to search and launch shows across apps.', 3999.00, 'black', 'images/remote.webp', 1),
(4, 'Lenovo IdeaPad Slim 1 Intel Celeron N4020 11.6 inch (29.46cm) HD Thin & Light Laptop (4GB/256 GB SSD/Windows 10/MS Office) 81VT0071IN (Platinum Grey/1.2Kg)', 'Laptop', 'The Lenovo IdeaPad 1 is your daily computing companion. Not only does this affordable laptop deliver amazing performance with an Intel Celeron processor, but it also features 256 GB M.2 PCIe SSD storage and a 11.6-inch HD display for great productivity. Browse the internet, stream your favorite shows, chat with family,', 25000.00, 'Platinum Grey', 'images/laptop.webp', 1),
(5, 'Amazon ALL-NEW ECHO DOT (4TH GEN) Wired Smart speaker ( Black )', 'AMAZON ECHO DOT', 'Echo Dot 4th gen comes in a refreshed design and delivers loud, crisp sound with powerful bass\r\nStream millions of songs - from apps like Amazon Prime Music, Spotify, JioSaavn, Gaana, Apple Music and Hungama Music.', 4000.00, 'Black', 'images/echodot.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_Id` bigint(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_Id`, `Name`, `Mobile`, `Email`, `password`) VALUES
(1, 'vinit', 7597844434, 'vinit4d@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clothing`
--
ALTER TABLE `clothing`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `pro_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clothing`
--
ALTER TABLE `clothing`
  MODIFY `pro_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `pro_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_Id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
