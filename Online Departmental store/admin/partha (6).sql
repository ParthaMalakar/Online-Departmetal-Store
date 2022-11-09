-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 07:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `partha`
--

-- --------------------------------------------------------

--
-- Table structure for table `blockbuyer`
--

CREATE TABLE `blockbuyer` (
  `Name` varchar(2000) NOT NULL,
  `Age` int(200) NOT NULL,
  `National_ID` varchar(14) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Phone_Number` varchar(13) NOT NULL,
  `Email` varchar(2200) NOT NULL,
  `DOB` date NOT NULL,
  `User_Type` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blockbuyer`
--

INSERT INTO `blockbuyer` (`Name`, `Age`, `National_ID`, `Password`, `Phone_Number`, `Email`, `DOB`, `User_Type`) VALUES
('partha', 54, '11111111111111', '147', '01753102575', 'pppp@gmail.com', '2022-07-31', 'Buyer');

-- --------------------------------------------------------

--
-- Table structure for table `block_list`
--

CREATE TABLE `block_list` (
  `Name` varchar(200) NOT NULL,
  `ID` int(200) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Phone_Number` int(200) NOT NULL,
  `Email` text NOT NULL,
  `DOB` date NOT NULL,
  `User_Type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `block_list`
--

INSERT INTO `block_list` (`Name`, `ID`, `Password`, `Phone_Number`, `Email`, `DOB`, `User_Type`) VALUES
('Danger12', 123, '1234', 1753102575, 'pppp@gmail.com', '2022-08-03', 'Seller'),
('test148888', 12, '147', 1753102575, 'pppp@gmail.com', '2022-08-02', 'Seller');

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
  `User_Type` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`Name`, `Age`, `National_ID`, `Password`, `Phone_Number`, `Email`, `DOB`, `User_Type`) VALUES
('test', 245, '11111', '12347', '01753102575', 'pppp@gmail.com', '2022-08-09', 'Buyer'),
('partha', 6, '1111111111', '14789', '01753102575', 'pppp@gmail.com', '2022-08-07', 'Buyer'),
('partha', 2, '1111114', '1245', '01753102575', 'pppp@gmail.com', '2022-08-14', 'Buyer'),
('partha', 12, '123', '14', '01753102575', 'pppp@gmail.com', '2022-09-01', 'Buyer'),
('partha', 25, '1237', '784', '01753102575', 'pppp@gmail.com', '2022-08-07', 'Buyer'),
('test', 54, '1237000', '145', '4', 'pppp@gmail.com', '2022-09-01', 'Buyer'),
('partha_Malakar', 3, '1245', '145', '01753102575', 'pppp@gmail.com', '2022-09-07', 'Buyer'),
('Danger12', 478, '14785', '1478', '01753102575', 'pppp@gmail.com', '2022-08-30', 'Buyer'),
('test', 3, '20', '147', '01753102575', 'pppp@gmail.com', '2022-08-18', 'Buyer'),
('Danger12', 1478, '81010', '1478', '01753102575', 'pppp@gmail.com', '2022-08-16', 'Buyer');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(200) NOT NULL,
  `Product_Name` varchar(2000) NOT NULL,
  `Product_Price` int(100) NOT NULL,
  `Product_Made_In` varchar(3000) NOT NULL,
  `Entry_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `img` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `ID`, `Password`, `Phone_Number`, `Email`, `DOB`, `User_Type`, `img`) VALUES
('test44', 20, 'aaa', 1753102575, 'pppp@gmail.com', '2022-08-29', 'Seller', ''),
('partha', 24, '1478', 1753102575, 'pppp@gmail.com', '2022-08-01', 'Seller', ''),
('Partha Malakar', 1237, '14', 1753102575, 'pppp@gmail.com', '2022-08-24', 'Admin', ''),
('test', 12378, '147852', 1753102575, 'pppp@gmail.com', '2022-08-01', 'Seller', ''),
('test', 11111444, '112', 1753102575, 'pppp@gmail.com', '2022-08-02', 'Manager', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`National_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
