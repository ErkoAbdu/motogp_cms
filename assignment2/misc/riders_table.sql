-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 20, 2024 at 11:21 PM
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
-- Table structure for table `riders_table`
--

CREATE TABLE `riders_table` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `team` varchar(50) DEFAULT NULL,
  `manufacturer_id` int(11) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `imageURL` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `riders_table`
--

INSERT INTO `riders_table` (`id`, `fname`, `lname`, `team`, `manufacturer_id`, `nationality`, `imageURL`) VALUES
(1, 'Francesco', 'Bagnaia', 'Ducati Lenovo Team', 1, 'Italy', 'https://cdn-8.motorsport.com/images/mgl/6AEjG1G6/s400/francesco-bagnaia-ducati-team.webp'),
(2, 'Enea', 'Bastianini', 'Ducati Lenovo Team', 1, 'Italy', 'https://cdn-4.motorsport.com/images/mgl/6l9Xvb10/s600/enea-bastianini-ducati-team.webp'),
(3, 'Aleix', 'Espargaro', 'Aprilia Racing', 3, 'Spain', 'https://cdn-1.motorsport.com/images/mgl/0RrVnBO0/s600/aleix-espargaro-aprilia-racing-1.webp'),
(4, 'Maverick', 'Vinales', 'Aprilia Racing', 3, 'Spain', 'https://cdn-9.motorsport.com/images/mgl/2jXnZAg6/s600/maverick-vinales-aprilia-racin-1.webp'),
(5, 'Joan', 'Mir', 'Repsol Honda Team', 4, 'Spain', 'https://cdn-9.motorsport.com/images/mgl/0rG3dkd2/s600/joan-mir-repsol-honda-team.webp'),
(6, 'Luca', 'Marini', 'Repsol Honda Team', 4, 'Italy', 'https://cdn-9.motorsport.com/images/mgl/6zQegBLY/s600/luca-marini-repsol-honda-team.webp'),
(7, 'Jack', 'Miller', 'Red Bull KTM Factory Racing', 2, 'Australia', 'https://cdn-2.motorsport.com/images/mgl/6b7knZn0/s600/jack-miller-red-bull-ktm-facto-1.webp'),
(8, 'Brad', 'Binder', 'Red Bull KTM Factory Racing', 2, 'South Africa', 'https://cdn-2.motorsport.com/images/mgl/68yNAvD0/s600/brad-binder-red-bull-ktm-facto-1.webp'),
(9, 'Marc', 'Marquez', 'Gresini Racing MotoGP', 1, 'Spain', 'https://cdn-1.motorsport.com/images/mgl/0rG37m52/s600/marc-marquez-gresini-racing.webp'),
(10, 'Alex', 'Marquez', 'Gresini Racing MotoGP', 1, 'Spain', 'https://cdn-8.motorsport.com/images/mgl/68yrKZx0/s600/alex-marquez-gresini-racing.webp'),
(11, 'Jorge', 'Martin', 'Prima Pramac Racing', 1, 'Spain', 'https://cdn-5.motorsport.com/images/mgl/6AEAknD6/s600/jorge-martin-pramac-racing-1.webp'),
(12, 'Franco', 'Morbidelli', 'Prima Pramac Racing', 1, 'Italy', 'https://cdn-1.motorsport.com/images/mgl/2wBV1Lb0/s600/franco-morbidelli-yamaha-facto-1.webp'),
(13, 'Fabio', 'di Giannantonio', 'Mooney VR46 Racing Team', 1, 'Italy', 'https://cdn-3.motorsport.com/images/mgl/0qXxG7Q6/s600/fabio-di-giannantonio-vr46-rac.webp'),
(14, 'Marco', 'Bezzechi', 'Mooney VR46 Racing Team', 1, 'Italy', 'https://cdn-5.motorsport.com/images/mgl/2QzqEKmY/s600/marco-bezzecchi-vr46-racing-te.webp'),
(15, 'Miguel', 'Oliveira', 'Trackhouse Racing', 3, 'Portugal', 'https://cdn-1.motorsport.com/images/mgl/6D1QAJ70/s600/miguel-oliveira-rnf-racing-1.webp'),
(16, 'Raul', 'Fernandez', 'Trackhouse Racing', 3, 'Spain', 'https://cdn-5.motorsport.com/images/mgl/2jXnLPp6/s600/raul-fernandez-rnf-racing-1.webp'),
(17, 'Agusto', 'Fernandez', 'Tech3 GASGAS Factory Racing', 2, 'Spain', 'https://cdn-1.motorsport.com/images/mgl/254gALn0/s600/augusto-fernandez-gasgas-facto-1.webp'),
(18, 'Pedro', 'Acosta', 'Tech3 GASGAS Factory Racing', 2, 'Spain', 'https://cdn-4.motorsport.com/images/mgl/0mb1Amk2/s600/pedro-acosta-tech3-gasgas-fact.webp'),
(19, 'Johann', 'Zarco', 'LCR Honda Castrol/Idemitsu', 4, 'France', 'https://cdn-3.motorsport.com/images/mgl/6l9yZQx0/s600/johann-zarco-pramac-racing-1.webp'),
(20, 'Takaaki', 'Nakagami', 'LCR Honda Castrol/Idemitsu', 4, 'Japan', 'https://cdn-9.motorsport.com/images/mgl/0rGynXG2/s600/takaaki-nakagami-lcr-honda-1.webp'),
(21, 'Fabio', 'Quartararo', 'Monster Energy Yamaha MotoGP', 5, 'France', 'https://cdn-6.motorsport.com/images/mgl/YP3wdKQ2/s600/fabio-quartararo-yamaha-factor.webp'),
(22, 'Alex', 'Rins', 'Monster Energy Yamaha MotoGP', 5, 'Spain', 'https://cdn-1.motorsport.com/images/mgl/2wBdQGM0/s600/alex-rins-yamaha-factory-racin.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `riders_table`
--
ALTER TABLE `riders_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manufacturer_id` (`manufacturer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `riders_table`
--
ALTER TABLE `riders_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `riders_table`
--
ALTER TABLE `riders_table`
  ADD CONSTRAINT `riders_table_ibfk_1` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer_table` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
