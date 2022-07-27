-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 01:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse_458`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `usr_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_description`, `usr_id`) VALUES
(5, 'yogurt', 'high quality yogurt from bogura', 6),
(6, 'Industrial Rubber Hand Gloves', 'Feature: Waterproof, chemical resistance and durable\r\nType: Unlined & anti-skip\r\nColor: outside black, inside orange\r\nDifferent weights are available if you have a large quantity.\r\nColor: outside black, inside orange\r\nApplication: Widely used in light/hea', 7),
(7, 'Product details of 14 inch Laptop Keyboard Protector - Transparent', 'Laptop keyboard protector\r\nEasy to use\r\nStylish protection', 7),
(8, 'Jersey Printed Short Pant For Men', 'This product comes with very attractive design. The material used in it will meet your expectation and need also. Now with a new look it is even better than before and its quality will definitely meet your desire. So you may take this to bring smile and e', 7),
(9, '3D 09 Electric Cars Toy for Boys Girls with Lights', 'Material: Plastic\r\nBattery Operated, 3 Battteries\r\nNon-rechargeable Batteries', 7),
(10, 'ID Card Holder Vertical Metal Blue', 'Pattern Type: Solid\r\nUse: Business Card\r\nMaterial: Aluminum', 7),
(11, 'Anti-reflective sunglass for man', 'Gender: MEN\r\nBluecut glass\r\nDepartment Name: Adult\r\nCertification: None\r\nLenses Optical Attribute: UV400\r\nLenses Optical Attribute: Polarized\r\nLens Height: 48mm\r\nModel Number: BM8503\r\nLens Width: 58mm\r\nFunction: Polarized,UV400,Ultraviolet-proof,Anti radi', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `usr_id` int(5) NOT NULL,
  `user_name` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `contact` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`usr_id`, `user_name`, `email`, `contact`, `password`) VALUES
(6, 'Shoaib', 'Shoiab@gmail.com', '0158964714', '1234'),
(7, 'Imtiaz', 'imtiaz.atick07@gmail.com', '01861044941', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `usr_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
