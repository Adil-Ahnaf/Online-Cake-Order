-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 08:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `Cake_id` int(255) NOT NULL,
  `Cake_Name` varchar(255) NOT NULL,
  `Cake_Catagory` int(255) NOT NULL,
  `Cake_Price` int(255) NOT NULL,
  `Cake_size` float(2,1) NOT NULL,
  `image` blob DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`Cake_id`, `Cake_Name`, `Cake_Catagory`, `Cake_Price`, `Cake_size`, `image`) VALUES
(101, 'White Delax', 1, 1000, 4.0, 0x77686974652064656c61782e6a7067),
(102, 'White Rose', 1, 700, 2.0, 0x776869746520726f73652e6a7067),
(103, 'Dark Forest', 1, 800, 2.0, 0x6461726b20666f726573742e6a7067),
(104, 'White Forest', 1, 900, 3.0, 0x776869746520666f726573742e6a7067),
(401, 'Chees Cake', 4, 450, 1.0, 0x63686565732063616b652e6a7067),
(402, 'Chocolate Cake', 4, 500, 1.5, 0x63686f636f6c6174652063616b652e6a7067),
(403, 'Coffee Cake', 4, 600, 1.5, 0x636f666665652063616b652e6a7067),
(404, 'Lemon Cake', 4, 600, 1.5, 0x6c656d6f6e2063616b652e6a7067),
(201, 'Chocolate Mousse', 2, 750, 2.0, 0x63686f636f6c617465206d6f757373652e6a7067),
(202, 'Red Velvet', 2, 750, 2.0, 0x72656420726f73652e6a7067),
(203, 'Kids Special', 2, 700, 2.0, 0x6b696e6473207370656369616c2e6a7067),
(301, 'Chocolate Christmas ', 3, 800, 2.0, 0x43686f636f6c617465206368726973746d61732e6a7067),
(302, 'Christmas Snow', 3, 850, 3.0, 0x4368726973746d617320736e6f772e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `Catagory_Id` int(255) NOT NULL,
  `Catagory_Name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`Catagory_Id`, `Catagory_Name`) VALUES
(1, 'Anniversary Cake'),
(2, 'Birthday Cake'),
(3, 'Christmas Cake'),
(4, 'Regular Cake');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(200) NOT NULL,
  `Cake_id` int(255) DEFAULT NULL,
  `Customer_Id` int(255) DEFAULT NULL,
  `Contact_Number` int(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Order_date` char(15) DEFAULT NULL,
  `order_status` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `Cake_id`, `Customer_Id`, `Contact_Number`, `Address`, `Order_date`, `order_status`) VALUES
(15, 103, 5, 1833333333, 'Dhanmondi-15,Satmosjid Road,House-12', '2018-05-07', 0),
(14, 101, 3, 1755555555, 'Satarkul,Badda notun bazar,Dhaka', '2018-05-05', 0),
(13, 103, 4, 1956565656, 'Mirpur-2,Road No-12,House:2', '2018-05-04', 0),
(16, 201, 3, 1755555555, 'Satarkul,Badda notun bazar', '2018-05-07', 0),
(17, 203, 3, 1689898989, 'Satarkul,Badda notun bazar,Dhaka', '2018-05-09', 0),
(18, 401, 4, 1956565656, 'Mirpur-2,Road No-12,House:2', '2018-05-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_Id` int(255) NOT NULL,
  `Order_Id` int(255) NOT NULL,
  `Customer_Id` int(255) NOT NULL,
  `Cake_Id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Report_Id`, `Order_Id`, `Customer_Id`, `Cake_Id`) VALUES
(1, 1, 3, 101),
(2, 2, 4, 201),
(3, 3, 3, 101),
(4, 4, 4, 102),
(5, 5, 3, 103),
(6, 6, 5, 202),
(18, 14, 3, 101),
(17, 13, 4, 103),
(16, 18, 4, 401);

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`Id`, `Name`, `Username`, `email`, `Password`) VALUES
(1, 'Adil Ahnaf', 'admin', 'avi96bd@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Shadin Saha', 'admin', 'shadin123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Md. Rakibul', 'rakib', 'rakib333@yahoo.com', '310dcbbf4cce62f762a2aaa148d556bd'),
(4, 'Mr. Mithu', 'mithu', 'mithu444@gmail.com', '550a141f12de6341fba65b0ad0433500'),
(5, 'Akas ahmed', 'akas', 'akas777@yahoo.com', 'f1c1592588411002af340cbaedd6fc33'),
(6, 'Sakib All', 'Sakib', 'sakib123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'Tom', 'Tom', 'tom123@gmail.com', '5caf72868c94f184650f43413092e82c'),
(8, 'Alam', 'alam', 'alam12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'James', 'james', 'james@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`Cake_id`),
  ADD KEY `Cake_Catagory` (`Cake_Catagory`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`Catagory_Id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `Cake_id` (`Cake_id`),
  ADD KEY `Customer_Id` (`Customer_Id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Report_Id`),
  ADD KEY `Order_Id` (`Order_Id`),
  ADD KEY `Customer_Id` (`Customer_Id`),
  ADD KEY `Cake_Id` (`Cake_Id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `Report_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
