-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 09:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpline`
--

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(100) NOT NULL,
  `District` varchar(255) NOT NULL,
  `Control_Room` varchar(255) NOT NULL,
  `Women_Child` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `District`, `Control_Room`, `Women_Child`) VALUES
(1, 'Ahmednagar,Maharashtra', '0241-2323844 / 2416132', '0241-1091 / 1098'),
(2, 'Akola,Maharashtra', '0724-2435500 / 2445333', '9881576199'),
(3, 'Amravati,Maharashtra', '0721-2551000', '0721- 103 / 1091'),
(4, 'Aurangabad,Maharashtra', '0240-2240500', '0240-1098 / 1091'),
(5, 'Beed,Maharashtra', '0244-2222333', '1098 / 1091'),
(6, 'Bhandara,Maharashtra', '7184-252400', '9422831083'),
(7, 'Buldhana,Maharashtra', '7262-242400', '9767228166'),
(8, 'Chandrapur,Maharashtra', '7172-251200', '8300822507'),
(9, 'Dhule,Maharashtra', '2562-288211', '9765536657'),
(10, 'Gadchiroli,Maharashtra', '7132-222100', '9579015690'),
(11, 'Gondia,Maharashtra', '7182-236100', '9423343408'),
(12, 'Hingoli,Maharashtra', '02456-220232 / 222560', '1091 / 1098'),
(13, 'Jalgaon,Maharashtra', '0257-2223333 /2220800 ', '1091 / 1098'),
(14, 'Jalna,Maharashtra', '2482-224833 / 1077', '9175120734'),
(15, 'Kolhapur,Maharashtra', '0231-2667533 / 2545473', '9767086308'),
(16, 'Latur,Maharahtra', '2382-242296 / 246803', '8308792706'),
(17, 'Mumbai,Maharashtra', '022-22621855 / 26400231', '9594997853'),
(18, 'Nagpur,Maharashtra', '0712-2561620 / 2567021 / 0712-2551866 / 18002333764 ', '9028562533'),
(19, 'Nanded,Maharashtra', '02462-233577 / 235077', '8856939981'),
(20, 'Nandurbar,Maharashtra', '2564-210100 / 210006 / 210234', '1091 / 1098'),
(21, 'Nashik,Maharashtra', '0253-2598011 / 2317151', '1091 / 1098'),
(22, 'Osmanabad,Maharashtra', '2472-222700 / 224444', '7385748769'),
(23, 'Palghar,Maharashtra', '2525-297004 / 297474', '1091 / 1098'),
(24, 'Parbhani,Maharashtra', '2452-220100 /  02452-222 425', '9765781409'),
(25, 'Pune,Maharashtra', '020-25657171 / 26127394', '9767502284'),
(26, 'Raigad,Maharashtra', '2141-222100 / 222066 ', '1091 / 1098'),
(27, 'Ratnagiri,Maharahtra', '2352-222222 / 155399 / 222233', '9970381195'),
(28, 'Sangli,Maharashtra', '0233-2672100 / 2600500', '8792684133'),
(29, 'Satara,Maharashtra', '02162-238644 / 233833', '9552825567'),
(30, 'Sindhudurg,Maharashtra', '2362-228200 / 228883', '9637083408'),
(31, 'Solapur,Maharashtra', '0217-2732000 / 2723473', '9420489337'),
(32, 'Thane,Maharashtra', '022-27571503 / 25301740 /  18001205282', '9029486259'),
(33, 'Wardha,Maharashtra', '7152-232500', '9764383480'),
(34, 'Washim,Maharashtra', '7252-234834 / 234669', '9689721321'),
(35, 'Yavatmal,Maharashtra', '7232-256700 / 244276', '9921994550'),
(36, 'India', '1123978046', '1091 / 1098');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
