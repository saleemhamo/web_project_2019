-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2020 at 10:15 PM
-- Server version: 5.5.64-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c107dbschema_1170381`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `buyID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `name` varchar(20) NOT NULL,
  `cId` int(10) NOT NULL,
  `address` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `cardNumber` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`name`, `cId`, `address`, `email`, `telephone`, `password`, `dateOfBirth`, `cardNumber`) VALUES
('Saleem Hamo', 1, 'Ramallah', 'saleemhamo5@gmail.com', 597153799, 'saleemhamo', '0000-00-00', 1111),
('Mohammad Ahmad', 2, 'Ramallah', 'mohamad@gmail.com', 5994333, 'saleem', '0000-00-00', 0),
('Saleem Ahmad Hamo', 3, 'Ramallah', 'saleemhamo@gmail.com', 597153799, 'asdff', '0000-00-00', 0),
('Saleem Hamo', 4, 'Ramallah', 'saleemhamo55@gmail.com', 597153799, 'asasf', '0000-00-00', 0),
('Mohammad Ahmad', 5, 'Ramallah', '1170381@student.birzeit.edu', 597153799, 'wefgwg', '0000-00-00', 0),
('Saleem Hamo', 6, 'Ramallah', 'saleemhamo455@gmail.com', 597153799, 'saleee,,,', '1999-09-20', 0),
('Rami', 8, 'Ramallah', 'rami@gmail.com', 597153799, '12345', '2019-12-16', 0),
('mohammad abbas ', 9, 'kohav yokav ', 'mohammadabbs@gmail.com', 597305215, 'taksim', '2015-07-08', 0),
('mohammad abudayah', 10, 'Ramallah', 'mabudayah9@gmail.com', 599930630, 'pal2484981mh', '1999-02-12', 0),
('Abu Maher', 11, 'Birzeit', 'abumaher@abc.com', 599999999, 'abumaher', '2020-01-08', 1111);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `pid` int(11) NOT NULL,
  `figure` varchar(5) NOT NULL,
  `imageID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`pid`, `figure`, `imageID`) VALUES
(1, 'fig1', 1),
(1, 'fig2', 2),
(1, 'fig3', 3),
(2, 'fig1', 4),
(2, 'fig2', 5),
(2, 'fig3', 8),
(2, 'fig4', 9),
(3, 'fig1', 10),
(3, 'fig2', 11),
(3, 'fig3', 12),
(4, 'fig1', 13),
(4, 'fig2', 14),
(4, 'fig3', 15),
(5, 'fig1', 16),
(5, 'fig2', 17),
(5, 'fig3', 18),
(5, 'fig4', 19),
(6, 'fig1', 20),
(6, 'fig2', 21),
(6, 'fig4', 22),
(6, 'fig4', 23),
(7, 'fig1', 24),
(7, 'fig2', 25),
(7, 'fig3', 26),
(8, 'fig1', 27),
(8, 'fig2', 28),
(8, 'fig3', 29),
(9, 'fig1', 30),
(9, 'fig2', 31),
(9, 'fig3', 32),
(9, 'fig4', 33);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `senderName` varchar(20) NOT NULL,
  `senderEmail` varchar(35) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `name` varchar(20) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `size` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `pid` int(10) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `description`, `category`, `size`, `price`, `remarks`, `pid`, `quantity`) VALUES
('Deadsea Mud', 'Deadsea Mud', 'cosmetics', 100, 105, 'very good', 1, 10),
('Palestinian Dress', 'costumes', 'clothes', 50, 200, 'good', 2, 15),
('Decorations', 'Palestinian Dress', 'clothes', 50, 105, 'good', 3, 20),
('Olive Oil Soap', 'Olive Oil Soap', 'cosmetics', 50, 10, 'Excellent', 4, 100),
('Dried Figs', 'Dried Figs', 'food', 10, 105, 'good', 5, 50),
('Olive Oil', 'Olive Oil', 'food', 20, 90, 'very good', 6, 100),
('Pal Koufeya', 'Palestinian Koufeya', 'clothes', 50, 10, 'good', 7, 100),
('Molasses', 'Molasses', 'food', 24, 50, 'good', 8, 36),
('Embroideries', 'Embroideries', 'clothes', 50, 105, 'good', 9, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`buyID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`senderEmail`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
