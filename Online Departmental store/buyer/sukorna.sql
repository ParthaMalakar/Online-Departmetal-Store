-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 08:37 PM
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
-- Database: `sukorna`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `Name` varchar(2000) NOT NULL,
  `Age` int(200) NOT NULL,
  `National_ID` varchar(14) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Phone_Number` varchar(13) NOT NULL,
  `Email` varchar(2200) NOT NULL,
  `DOB` date NOT NULL,
  `User_Type` varchar(4000) NOT NULL,
  `img` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`Name`, `Age`, `National_ID`, `Password`, `Phone_Number`, `Email`, `DOB`, `User_Type`, `img`) VALUES
('partha', 12, '123', '14', '01753102575', 'pppp@gmail.com', '2022-09-01', 'Buyer', '../img/download.jpg'),
('partha', 25, '1237', '784', '01753102575', 'pppp@gmail.com', '2022-08-07', 'Buyer', ''),
('partha_Malakar', 3, '1245', '145', '01753102575', 'pppp@gmail.com', '2022-09-07', 'Buyer', ''),
('Masiat', 21, '244957134', '11200', '01717486677', 'masiat.shah.42937@gmail.com', '2001-02-11', 'buyer', ''),
('Sukorna', 21, '244957138', '20000', '01717486678', 'ma.shah.42937@gmail.com', '2001-02-13', 'buyer', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Product_ID` int(200) NOT NULL,
  `Product_Name` varchar(2000) NOT NULL,
  `Product_Price` varchar(1000) NOT NULL,
  `Product_Made_In` varchar(3000) NOT NULL,
  `Entry_Date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Product_ID`, `Product_Name`, `Product_Price`, `Product_Made_In`, `Entry_Date`) VALUES
(124, 'pppp', '2457', 'nnnn', '12'),
(124, 'pp44', '41001', 'yyyyyy', '2022-08-08'),
(124, 'pp44', '41001', 'yyyyyy', '2022-08-08'),
(124, 'pp44', '41001', 'yyyyyy', '2022-08-08'),
(124, 'qqqq', '4100', 'qqq', '2022-08-02'),
(124, 'qqqq', '4100', 'qqq', '2022-08-02'),
(124, 'qqqq', '4100', 'qqq', '2022-08-02'),
(111, 'lipgel', '300', 'italy', '2022-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `Admin` varchar(1000) NOT NULL,
  `Manager` varchar(1000) NOT NULL,
  `Seller` varchar(1000) NOT NULL,
  `Buyer` varchar(1000) NOT NULL,
  `S_NO` int(200) NOT NULL,
  `Massage_Send` varchar(2000) NOT NULL,
  `Massage_for` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`Admin`, `Manager`, `Seller`, `Buyer`, `S_NO`, `Massage_Send`, `Massage_for`) VALUES
('', '', 'aerga', '', 3, 'Buyer', 'Seller'),
('aerga', '', '', '', 2042908, 'Manager', 'Admin'),
('aerga', '', '', '', 20429081, 'Buyer', 'Admin'),
('aerga', '', '', '', 20429084, 'Buyer', 'Admin'),
('1237', '', '', '', 20429081, 'Buyer', 'Admin'),
('1245', '', '', '', 20429081, 'Buyer', 'Admin'),
('24', '', '', '', 20429081, 'Buyer', 'Admin'),
('', '', 'lm l ', '', 3, 'Buyer', 'Seller');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(200) NOT NULL,
  `Product_Name` varchar(2000) NOT NULL,
  `Product_Price` int(100) NOT NULL,
  `Product_Made_In` varchar(3000) NOT NULL,
  `Entry_Date` date NOT NULL,
  `Review` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Product_Price`, `Product_Made_In`, `Entry_Date`, `Review`) VALUES
(111, 'lipgel', 300, 'italy', '2022-08-07', ''),
(112, 'lipoil', 380, 'italy', '2022-08-08', ''),
(122, 'lipstick', 700, 'Bangladesh', '2022-08-03', ''),
(123, 'pinklipstick', 750, 'Bangladesh', '2022-08-03', ''),
(124, 'qqqq', 4100, 'qqq', '2022-08-02', 'm;m;mm'),
(333, 'nailpolish', 230, 'india', '2022-08-01', ''),
(444, ' blacknailpolish', 235, 'india', '2022-08-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_ID` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_ID`) VALUES
('123456789'),
('1223497'),
('12345678'),
('12345'),
('111111');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(200) NOT NULL,
  `ID` int(200) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Phone_Number` int(200) NOT NULL,
  `Email` text NOT NULL,
  `DOB` date NOT NULL,
  `User_Type` varchar(1000) NOT NULL,
  `img` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `ID`, `Password`, `Phone_Number`, `Email`, `DOB`, `User_Type`, `img`) VALUES
('Danger1221', 3, '1245', 1753102575, 'pppp@gmail.com', '2022-08-03', 'Seller', ''),
('qqqqq', 4, '1245', 1753102575, 'pppp@gmail.com', '2022-08-09', 'Seller', ''),
('admin', 5, '145', 1753102575, 'pppp@gmail.com', '2022-08-02', 'Seller', ''),
('aaaa', 7, '14', 1753102575, 'pppp@gmail.com', '2022-08-01', 'Seller', ''),
('llll', 9, '12', 1753102575, 'pppp@gmail.com', '2022-08-02', 'Seller', ''),
('Danger', 24, '34', 171878, 'oliullahrafi@gmail.com', '2022-08-10', 'Seller', ''),
('partha', 123, '14', 1753102575, 'pppp@gmail.com', '2022-08-02', 'Seller', ''),
('Partheeea', 126, '1234', 1234, 'partha@gmail.com', '2022-08-03', 'Manager', '../img/MicrosoftTeams-image (171).png'),
('partha_Malakaroooo', 417, '14', 111, 'pppp@gmail.com', '2022-08-02', 'Seller', ''),
('Argho', 906, '90', 123456, '12@gmail.com', '2022-08-05', 'Seller', ''),
('we', 1212, 'lk', 0, 'oliullahrafi64@gmail.com', '2022-08-02', 'Seller', ''),
('sanzida', 2042, '20429', 1717486677, 'nas.gmail.com', '2022-08-03', 'buyer', ''),
('apon', 20937, 'ppppp', 12, 'pppp@gmail.com', '2022-09-02', 'Seller', ''),
('test', 11111111, '142', 1753102575, 'pppp@gmail.com', '2022-08-04', 'Seller', ''),
('PARTHA...', 20429081, '137', 1753102575, 'partha@gmail.com', '2022-08-02', 'Admin', ''),
('Danger12', 2147483647, '14257', 1753102575, 'pppp@gmail.com', '2022-08-01', 'Seller', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`National_ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD KEY `S_NO` (`S_NO`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `img` (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
