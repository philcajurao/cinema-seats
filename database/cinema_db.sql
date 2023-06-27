-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 12:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usename` varchar(30) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `usename`, `contact`, `password`) VALUES
(5, 'markcoco@gmail.com', 'cocoMark', '09616259849', '12345678910'),
(11, 'coco3@gmail.com', 'coco3', '09123456789', '12345678910');

-- --------------------------------------------------------

--
-- Table structure for table `adminaccount`
--

CREATE TABLE `adminaccount` (
  `id` int(255) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminaccount`
--

INSERT INTO `adminaccount` (`id`, `user`, `email`, `password`) VALUES
(10, 'admin32', 'admin32@gmail.com', '125125125125');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` int(255) NOT NULL,
  `receipt` varchar(255) NOT NULL,
  `user` varchar(50) NOT NULL,
  `movie` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `reservationFee` varchar(50) NOT NULL,
  `total` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `receipt`, `user`, `movie`, `price`, `reservationFee`, `total`, `date`) VALUES
(118, '61f08e63312b8', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(119, '61f08e66c0fd9', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(120, '61f08e67a1619', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(121, '61f08e683a071', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(122, '61f08e68bac73', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(123, '61f08e697e531', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(124, '61f08e6a41ed1', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(125, '61f08e6b074b1', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(126, '61f08e6b9d970', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(127, '61f08e6fd9090', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(128, '61f08e7137745', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(129, '61f08e725f43e', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(130, '61f08e734da59', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(131, '61f08e744e372', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(132, '61f08e754025f', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(133, '61f08e76346e5', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(134, '61f08e7728d3b', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(135, '61f08e7818a62', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(136, '61f08e78f1f3f', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(137, '61f08e79e18c0', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(138, '61f08e7acec65', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(139, '61f08e7bc6ba4', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(140, '61f08e7cbb8c6', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(141, '61f08e7dadb10', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(142, '61f08e7ea20ed', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(143, '61f08e7f9d554', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(144, '61f08e8089b33', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(145, '61f08e8186b1b', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(146, '61f08e8275363', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(147, '61f08e836d787', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(148, '61f08e84603d9', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(149, '61f08e8554ccc', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(150, '61f08e863d112', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(151, '61f08e8729b2e', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:57 '),
(152, '61f08e880fdab', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:58 '),
(153, '61f08e88f0701', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:58 '),
(154, '61f08e89e6950', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:58 '),
(155, '61f08e8adbc76', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:58 '),
(156, '61f08e8bcc42c', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:58 '),
(157, '61f08e8cb08c6', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:58 '),
(158, '61f08e8da112f', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:58 '),
(159, '61f08e8e96b3e', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:58 '),
(160, '61f08e8f8721b', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:58 '),
(161, '61f08e9072f8a', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:58 '),
(162, '61f08e91592f5', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:58 '),
(165, '61f08ea841c4e', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:58 '),
(166, '61f08eb549b62', 'coco3', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jan 26 2022 | 00:58 '),
(168, '62413b01ef699', '', 'Eternals', '350.00', '20.00', '370', 'Monday, Mar 28 2022 | 06:35 '),
(169, '62413b66c13a4', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:36 '),
(170, '62413b6f84c80', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(171, '62413b728cd4d', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(172, '62413b7484d17', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(173, '62413b760a0ca', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(174, '62413b779c62e', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(175, '62413b7a9698c', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(176, '62413b7cf2488', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(177, '62413b866ff48', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(178, '62413b884c9d8', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(179, '62413b8a02bc7', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(180, '62413b8bd3dc3', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(181, '62413b8da8fb4', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(182, '62413b8fdbb70', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(183, '62413b91914ed', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(184, '62413b94ce19e', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(185, '62413b96aed32', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(186, '62413b98b4bae', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(187, '62413b9a5316c', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(188, '62413b9bf3454', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(189, '62413b9da76da', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(190, '62413b9f5f22b', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(191, '62413ba10525b', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(192, '62413ba2c6ca5', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(193, '62413ba488396', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(194, '62413ba7a5a9e', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:37 '),
(195, '62413ba978cde', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(196, '62413bab2e8b0', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(197, '62413bace2537', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(198, '62413baead9f4', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(199, '62413bb02cd19', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(200, '62413bb1ad9df', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(201, '62413bb31cdf6', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(202, '62413bb45d915', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(203, '62413bb5b59a9', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(204, '62413bb72eea6', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(205, '62413bba02088', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(206, '62413bbb9e5b7', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(207, '62413bbd1d836', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(208, '62413bbed6fb3', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(209, '62413bc0755d2', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(210, '62413bc1b7d62', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(211, '62413bc4dd155', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(212, '62413bc663ebf', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(213, '62413bc817c99', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(216, '62413bce819ce', 'cocoMark', 'Escape Room', '600.00', '20.00', '620', 'Monday, Mar 28 2022 | 06:38 '),
(219, '6244646c2a8f0', 'cocoMark', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Mar 30 2022 | 16:08 '),
(220, '62446477b11b4', 'cocoMark', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Mar 30 2022 | 16:08 '),
(221, '6492d072b0667', 'cocoMark', 'Venom: Let There Be Carnage', '550.00', '20.00', '570', 'Wednesday, Jun 21 2023 | 12:26 ');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `userid` int(255) NOT NULL,
  `movie` varchar(100) NOT NULL,
  `cardname` varchar(70) NOT NULL,
  `credit` varchar(20) NOT NULL,
  `expmonth` varchar(10) NOT NULL,
  `expyear` int(4) NOT NULL,
  `cvv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`userid`, `movie`, `cardname`, `credit`, `expmonth`, `expyear`, `cvv`) VALUES
(3, '', '0', '123123123', 'asda', 1231, 123),
(3, 'Red Notice', '0', '111', 'September', 2020, 123),
(3, 'Luca', 'Phil Pogi', '111', 'Yea', 2020, 123),
(3, 'Eternals', 'Phil nga', '111-222-333-444', 'Year', 1231, 123123),
(3, 'Red Notice', 'Phil', '11111111', 'asda', 123, 123),
(3, 'Red Notice', 'Phil', '123123123-123123', 'asda', 123, 123),
(3, '', '', '', '', 0, 0),
(3, '', '', '', '', 0, 0),
(3, '', '', '', '', 0, 0),
(3, '', '', '', '', 0, 0),
(3, '', '', '', '', 0, 0),
(3, '', '', '', '', 0, 0),
(3, '', '', '', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminaccount`
--
ALTER TABLE `adminaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `adminaccount`
--
ALTER TABLE `adminaccount`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
