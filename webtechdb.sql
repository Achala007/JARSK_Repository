-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2016 at 04:47 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtechdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `prodId` int(3) NOT NULL,
  `itemName` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `unitPrice` int(5) NOT NULL,
  `Quantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`prodId`, `itemName`, `category`, `unitPrice`, `Quantity`) VALUES
(2, 'RedBull Energy Drink', 'Nutritional', 295, 200),
(3, 'Gatorade Energy Drink', 'Nutritional', 300, 100),
(4, 'Gold Standard Whey Protein', 'Nutritional', 5500, 15),
(5, 'Superior Amino Tabs', 'Nutritional', 6000, 150),
(6, 'Monster Energy Drink', 'Nutritional', 420, 30),
(7, 'Creatine', 'Nutritional', 2300, 80),
(8, 'Joy Stick', 'Bats', 8000, 7),
(9, 'Watch Dogs', 'Bats', 2300, 4),
(10, 'Spartan Bat', 'Bats', 10000, 50),
(11, 'Gaming set', 'Bats', 21000, 13),
(12, 'GM Bat', 'Bats', 11000, 29),
(13, 'Adidas Bat', 'Bats', 14000, 4),
(14, 'Gaming-Mouse', 'Tshirts', 2100, 100),
(15, 'Sniper 2', 'Tshirts', 2000, 44),
(16, 'Pakistan Tshirt', 'Tshirts', 1200, 30),
(17, 'West Indies Tshirt', 'Tshirts', 1500, 5),
(18, 'England Tshirt', 'Tshirts', 1100, -1),
(19, 'India Tshirt', 'Tshirts', 900, 65),
(20, 'Premiere Leather Ball', 'Equipments', 450, 200),
(21, 'Chisthi Leather Ball', 'Equipments', 300, 100),
(22, 'Kookabura Batting Gloves', 'Equipments', 1500, 16),
(23, 'Dead Island', 'Equipments', 2000, 70),
(24, 'Adidas Helmet', 'Equipments', 4000, 5),
(25, 'SG Helmet', 'Equipments', 2500, 75),
(26, 'Gray Nicholl''s Pads', 'Others', 2350, 55),
(27, 'Sri Lankan Flag Sticker', 'Others', 10, 1000),
(28, 'Australian Flag Sticker', 'Others', 8, 500),
(29, 'South African Flag Sticker', 'Others', 10, 195),
(30, 'Adidas Cricket Boots', 'Others', 20000, 35),
(31, 'Sri Lankan Cap', 'Others', 450, 150);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `prodId` int(3) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`prodId`, `quantity`) VALUES
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trackorder`
--

CREATE TABLE `trackorder` (
  `Quantity` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Price` int(30) NOT NULL,
  `Total` int(30) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `OrderId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trackorder`
--

INSERT INTO `trackorder` (`Quantity`, `Name`, `Price`, `Total`, `UserName`, `OrderId`) VALUES
(1, 'Sniper 2', 2000, 2000, '', 793),
(1, 'Joy Stick', 8000, 8000, '', 793),
(1, 'Watch Dogs', 2300, 2300, '', 793),
(1, 'Gaming set', 21000, 21000, '', 793);

-- --------------------------------------------------------

--
-- Table structure for table `webtechusers`
--

CREATE TABLE `webtechusers` (
  `UsersUN` varchar(20) NOT NULL,
  `UsersPwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webtechusers`
--

INSERT INTO `webtechusers` (`UsersUN`, `UsersPwd`) VALUES
('admin', 'ranmal');

-- --------------------------------------------------------

--
-- Table structure for table `webtechusers2`
--

CREATE TABLE `webtechusers2` (
  `UsersFullName` varchar(20) NOT NULL,
  `UsersLastname` varchar(20) NOT NULL,
  `UsersEmail` varchar(20) NOT NULL,
  `UsersGender` varchar(20) NOT NULL,
  `UsersComment` varchar(120) NOT NULL,
  `UsersRate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webtechusers2`
--

INSERT INTO `webtechusers2` (`UsersFullName`, `UsersLastname`, `UsersEmail`, `UsersGender`, `UsersComment`, `UsersRate`) VALUES
('fyyug', 'gg', 'gkjgk@GMAIL.COM', 'male', 'dDD', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`prodId`);

--
-- Indexes for table `webtechusers`
--
ALTER TABLE `webtechusers`
  ADD PRIMARY KEY (`UsersUN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
