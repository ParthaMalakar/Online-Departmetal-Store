-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 05:59 PM
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
-- Database: `rafi`
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
  `User_Type` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`Name`, `Age`, `National_ID`, `Password`, `Phone_Number`, `Email`, `DOB`, `User_Type`) VALUES
('partha', 12, '123', '14', '01753102575', 'pppp@gmail.com', '2022-09-01', 'Buyer'),
('partha', 25, '1237', '784', '01753102575', 'pppp@gmail.com', '2022-08-07', 'Buyer'),
('partha_Malakar', 3, '1245', '145', '01753102575', 'pppp@gmail.com', '2022-09-07', 'Buyer');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_problem`
--

CREATE TABLE `buyer_problem` (
  `Buyer_name` varchar(2000) NOT NULL,
  `National_ID` int(200) NOT NULL,
  `Problem_description` varchar(4000) NOT NULL,
  `Solution_From_Manager` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_problem`
--

INSERT INTO `buyer_problem` (`Buyer_name`, `National_ID`, `Problem_description`, `Solution_From_Manager`) VALUES
('ppp', 124, '147', 'aaaaaa');

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
('', '', 'rafi call dis', '', 4, 'Manager', 'Seller'),
('', '', '1237', '', 9, 'Manager', 'Seller'),
('', '', '', 'aerga', 123, 'Manager', 'Buyer'),
('', '', 'aerga', '', 417, 'Manager', 'Seller'),
('', '', '', 'aaaaaaa', 1237, 'Manager', 'Buyer'),
('', '', '', 'aerga', 1753102575, 'Manager', 'Buyer'),
('', '', '1237', '', 3, 'Manager', 'Seller'),
('', '', '', 'aerga', 123, 'Manager', 'Buyer'),
('', '', '', '1237', 1245, 'Manager', 'Buyer');

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
('Dan', 3, '1245', 1753102575, 'pppp@gmail.com', '2022-08-03', 'Seller', ''),
('qqqqq', 4, '1245', 1753102575, 'pppp@gmail.com', '2022-08-09', 'Seller', ''),
('adminaaaaa', 5, '145', 1753102575, 'pppp@gmail.com', '2022-08-02', 'Seller', ''),
('aaaa', 7, '14', 1753102575, 'pppp@gmail.com', '2022-08-01', 'Seller', ''),
('llll', 9, '12', 1753102575, 'pppp@gmail.com', '2022-08-02', 'Seller', ''),
('Danger', 24, '34', 171878, 'oliullahrafi@gmail.com', '2022-08-10', 'Seller', ''),
('partha', 123, '14', 1753102575, 'pppp@gmail.com', '2022-08-02', 'Seller', ''),
('Partheeea', 126, '1234', 1234, 'partha@gmail.com', '2022-08-03', 'Manager', '../img/MicrosoftTeams-image (172).png'),
('partha_Malakaroooo', 417, '14', 111, 'pppp@gmail.com', '2022-08-02', 'Seller', ''),
('Argho', 906, '90', 123456, '12@gmail.com', '2022-08-05', 'Seller', ''),
('we', 1212, 'lk', 0, 'oliullahrafi64@gmail.com', '2022-08-02', 'Seller', ''),
('apon', 20937, 'ppppp', 12, 'pppp@gmail.com', '2022-09-02', 'Seller', ''),
('test', 11111111, '142', 1753102575, 'pppp@gmail.com', '2022-08-04', 'Admin', ''),
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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `img` (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
