-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2016 at 08:22 PM
-- Server version: 5.1.72-community
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `productid` int(20) NOT NULL,
  `byuser` varchar(100) NOT NULL,
  `qty` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `productid`, `byuser`, `qty`) VALUES
(18, 1, 'neelam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE IF NOT EXISTS `cats` (
  `catdid` int(20) NOT NULL AUTO_INCREMENT,
  `catname` varchar(100) NOT NULL,
  `catdesc` varchar(100) NOT NULL,
  PRIMARY KEY (`catdid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`catdid`, `catname`, `catdesc`) VALUES
(1, 'Books', 'Enjoy reading your favourite books. Range From Reference books to Fictional books.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `deliveryaddress` varchar(1000) DEFAULT NULL,
  `productid` varchar(50) DEFAULT NULL,
  `byuser` varchar(50) DEFAULT NULL,
  `deliverystatus` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `totalamount` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `package` int(20) NOT NULL,
  `deliveryname` varchar(100) NOT NULL,
  `deliveryline2` varchar(20) NOT NULL,
  `deliveryphone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`deliveryaddress`, `productid`, `byuser`, `deliverystatus`, `id`, `totalamount`, `qty`, `package`, `deliveryname`, `deliveryline2`, `deliveryphone`) VALUES
('A-4 603,\r\nAcolade Society,\r\nKharadi,\r\nPune,\r\nMaharashtra\r\nIndia-411014', '2', 'akshat', 'Item is Delivered', 28, 225, 1, 25362086, 'Akshat Joshi', '411014', '9975485515'),
('Acolade Society,\r\nKharadi,\r\nPune,\r\nMH-INDIA', '1', 'akshat', 'Item is Delivered', 29, 390, 2, -70359272, 'Gyanesh Joshi', '411014', '7875758201'),
('Acolade Society,\r\nKharadi,\r\nPune,\r\nMH-INDIA', '2', 'akshat', 'Item is Delivered', 30, 225, 1, -70359272, 'Gyanesh Joshi', '411014', '7875758201'),
('a4 604', '1', 'akshat', 'Item is Shipped', 31, 195, 1, -573811701, 'Gyanesh Joshi', '245677', ''),
('a4 604', '2', 'akshat', 'Item is Shipped', 32, 225, 1, -573811701, 'Gyanesh Joshi', '245677', ''),
('A-4 603,\r\nAcolade,\r\nKharadi\r\nPune', '1', 'akshat', 'Item is Delivered', 33, 195, 1, -502935981, 'Gyanesh Joshi', '411014', '9975485515'),
('A-4 603,\r\nAcolade \r\nKharadi\r\nPune\r\nIndia\r\n', '1', 'akshat', 'Order Placed Successfully', 34, 195, 1, -227942230, 'Akshat joshi', '411014', '9923069360');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `imgurl` varchar(20) NOT NULL,
  `catid` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `instock` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `descr`, `imgurl`, `catid`, `price`, `instock`) VALUES
(1, 'ACK 5 In 1 - Great Freedom Fighters', ' The Great Freedom Fighters include Lokmanya Tilak, MK Gandhi, Veer Savarkar and more', 'ackgff.jpg', 1, 195, 19),
(2, 'S Chand - Physics for Class 9', 'Physics book for class 9 students', 'schandp.jpg', 1, 225, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `name`) VALUES
(4, 'akshat', 'akshat123', 'Akshat Joshi'),
(5, 'neelam', 'neelam', 'Neelam Joshi'),
(6, 'anupma123', 'anupma123', 'Anupma Joshi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
