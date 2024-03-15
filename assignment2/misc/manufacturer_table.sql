-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 15, 2024 at 01:31 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HTTP5225`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_table`
--

CREATE TABLE `manufacturer_table` (
  `id` int(11) NOT NULL,
  `manufacturer_name` varchar(30) NOT NULL,
  `imageURL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturer_table`
--

INSERT INTO `manufacturer_table` (`id`, `manufacturer_name`, `imageURL`) VALUES
(1, 'Ducati', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Ducati_red_logo.svg/300px-Ducati_red_logo.svg.png'),
(2, 'KTM', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/KTM-Logo.svg/440px-KTM-Logo.svg.png'),
(3, 'Aprillia', 'https://upload.wikimedia.org/wikipedia/commons/5/54/Aprilialogo.png'),
(4, 'Honda', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh1HThXddilKbNmfwLaoLQ8caa8jB-e6MTHg&usqp=CAU'),
(5, 'Yamaha', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/Yamaha_Motor_Logo_%28full%29.svg/500px-Yamaha_Motor_Logo_%28full%29.svg.png'),
(8, 'BMW Motorrad', 'https://i.pinimg.com/originals/18/01/e3/1801e3be1854ca4107e143fe0f996ea8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer_table`
--
ALTER TABLE `manufacturer_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer_table`
--
ALTER TABLE `manufacturer_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
