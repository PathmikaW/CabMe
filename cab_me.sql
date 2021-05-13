-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2020 at 05:47 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cab_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin_1', '123'),
(4, 'ucsc', 'ucsc'),
(5, 'Admin_7', '852'),
(6, 'gg', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `car_type` varchar(10) NOT NULL,
  `car_number` varchar(8) NOT NULL,
  `max_passenger` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `username`, `password`, `contact_no`, `car_type`, `car_number`, `max_passenger`) VALUES
(1, 'Driver_1', '123', '0771234567', 'Tuk', 'WP-1930', 3),
(2, 'Driver_2', '456', '0711234567', 'Zip', 'WP-8520', 4),
(3, 'Driver_3', '789', '0781234567', 'Tuk', 'WP-7852', 3),
(4, 'Driver_4', '852', '0721234567', 'XL', 'WP-7510', 8);

-- --------------------------------------------------------

--
-- Table structure for table `ride`
--

DROP TABLE IF EXISTS `ride`;
CREATE TABLE IF NOT EXISTS `ride` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `driver` int(11) NOT NULL,
  `ride_details` int(11) NOT NULL,
  `is-assigned` int(11) NOT NULL,
  `is-booked` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ride`
--

INSERT INTO `ride` (`id`, `user`, `driver`, `ride_details`, `is-assigned`, `is-booked`) VALUES
(1, 1, 1, 1283127492, 1, 1),
(2, 1, 0, 1277721798, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ride_details`
--

DROP TABLE IF EXISTS `ride_details`;
CREATE TABLE IF NOT EXISTS `ride_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pickup` varchar(50) NOT NULL,
  `dropoff` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `car_type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1283127493 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ride_details`
--

INSERT INTO `ride_details` (`id`, `pickup`, `dropoff`, `time`, `car_type`) VALUES
(74508677, 'jhgbj', 'kjhfg', '10:59', 'Tuk'),
(802500033, 'kjhgf', 'kjhgf', '10:20', 'Tuk'),
(1044043748, 'liuytr', 'iuyt', '04:56', 'Tuk'),
(1277721798, 'kuyt', 'kjyf', '10:19', 'Zip'),
(1283127492, 'kjhgfd', 'jhgfd', '10:45', 'Zip');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `contact_no`) VALUES
(1, 'LOL', '123', '123456789'),
(2, 'User_2', '456', '0114567890'),
(3, 'User_3', '789', '0112345852'),
(4, 'fghjk', '123', '456123'),
(5, 'Driver_4', '852', '0711234567'),
(6, 'jkdjkj', '852', '852'),
(7, 'lkjhg', '852', '852'),
(8, 'kjhgcx', '852', '852'),
(9, 'Driver_5', '852', '0771234567'),
(10, 'jhgf', '123', '025874255'),
(11, 'kgf', '852', '85214789'),
(12, 'jhgfds', '852', '3654654'),
(13, 'User_1', '123', '0771234567'),
(14, 'TM', '123', '01541'),
(15, 'www', '111', '026622');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
