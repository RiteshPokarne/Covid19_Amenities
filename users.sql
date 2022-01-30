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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `email`, `password`, `dt`) VALUES
(15, 'Tanmay_Vit', '', '$2y$10$njuRgROJgI.mBURINSZg1Oq.BaxLaQREyjhu5w3GN9KT/qe4mrQlC', '2021-05-31 12:38:52'),
(16, 'Ritesh_Vit', '', '$2y$10$JIl6lC5gbM2gZwwhLebcI.uwBYFwCYa0eRJWsUpMPPGvg5jbMZoYi', '2021-05-31 12:42:33'),
(17, 'Vinita', '', '$2y$10$ck5RvwXQB65et92zMv8P3e3bXAAj7a6aeZ1jfEZx5G1eTIdgx5QZ.', '2021-05-31 13:15:47'),
(18, 'Babarao_Pat', '', '$2y$10$qmUuf8RAxVi8V01rIjS9nOAgPr8Yb69dI3rT.AXNeYiX6umYrg0/y', '2021-06-01 10:57:10'),
(19, 'munna', '', '$2y$10$iwucKhY/WcPUGtUgIGpcYOS0VdtjzbmO71hDSZY2mAb01w/NDiH62', '2021-06-01 18:56:41'),
(20, 'pawan', '', '$2y$10$.rgk3Ix.WS7dl/gKzk0Cj.eQwnhauGYxv/D7FrMKYjo2a8N4mctUO', '2021-06-02 23:17:42'),
(21, 'Somesh', '', '$2y$10$/1DZrwg9NMi1Tslmi1x2FuyR97z5OF6Gz6y38GJA1EdnFKW5fnM5u', '2021-06-07 22:16:44'),
(22, 'Parikshit', '', '$2y$10$a2Lwy.t3uh0ZwMLvKEtOwe2C.954OlFNuHISvi2Ao4nks0HTQJF1S', '2021-06-12 20:48:34'),
(23, 'pune', '', '$2y$10$YqQnlP0PJ8fBhTdHq3HmL.eWC2uER67v4QZxI7FaYMv5Jxyjgprm2', '2021-06-13 09:20:45'),
(24, 'Jay', '', '$2y$10$mkLV7D0TYGZkb/c1QqBOye0H3lKAks0U0XOHXLrWF.JUSvO4rHqKS', '2021-06-18 10:05:29'),
(25, 'Piyush', '', '$2y$10$kO0LNiSSeJxHq3By0n.vUeaLYyjN9oBJuY1zJcVgRDMC.XH3hlkrC', '2021-06-25 22:31:55'),
(26, 'Vitpune', '', '$2y$10$bzuMbKSSAeAXx83srp4G/OQt1S9mTN5xLVjSMA887UJR9IZnGqB2.', '2021-06-27 23:51:57'),
(27, 'Vit123', '', '$2y$10$37mEMLdMQSnqecUXWoRepe3L2xCmwgY9AxdHjJzEvpWTsCFqZgkEi', '2021-06-28 23:42:50'),
(28, 'Vit1234', '', '$2y$10$6Bld6nHUm6p4mGZT5CqlVecqpNxqgrL52HETRm7idbcKSQ2S6.D1W', '2021-06-29 12:55:46'),
(29, 'Harsh', '', '$2y$10$HyrdCEpjl9Wscxtz7Y.XSuYbYlrzNYJ.cfWkIjuZqDb42A1cJPwli', '2021-07-06 23:45:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
