-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 10:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemetho2`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `userBooked` int(10) NOT NULL,
  `QRCode` varchar(100) NOT NULL,
  `bookingDate` date NOT NULL,
  `seatNo` int(10) NOT NULL,
  `roomNo` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL,
  `ticket_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `userBooked`, `QRCode`, `bookingDate`, `seatNo`, `roomNo`, `movie_id`, `ticket_id`) VALUES
(1, 4, '../Images/Scantopay.png', '2023-05-09', 1, 1, 1, 2),
(2, 4, '../Images/Scantopay.png', '2023-05-01', 3, 2, 2, 2),
(3, 4, '../Images/Scantopay.png', '2023-05-01', 4, 2, 2, 2),
(4, 4, '../Images/Scantopay.png', '2023-05-01', 4, 2, 2, 2),
(5, 5, '../Images/Scantopay.png', '2023-05-12', 2, 1, 1, 1),
(6, 6, '../Images/Scantopay.png', '2023-05-13', 1, 1, 1, 3),
(7, 6, '../Images/Scantopay.png', '2023-05-13', 2, 1, 1, 4),
(8, 6, '../Images/Scantopay.png', '2023-05-13', 3, 1, 1, 1),
(9, 6, '../Images/Scantopay.png', '2023-05-13', 4, 1, 1, 2),
(10, 7, '../Images/Scantopay.png', '2023-05-14', 1, 1, 1, 3),
(11, 7, '../Images/Scantopay.png', '2023-05-14', 2, 5, 5, 4),
(12, 7, '../Images/Scantopay.png', '2023-05-14', 3, 1, 1, 1),
(13, 7, '../Images/Scantopay.png', '2023-05-14', 4, 6, 6, 2),
(14, 8, '../Images/Scantopay.png', '2023-05-15', 1, 7, 7, 3),
(15, 8, '../Images/Scantopay.png', '2023-05-15', 2, 8, 8, 4),
(16, 8, '../Images/Scantopay.png', '2023-05-15', 3, 1, 1, 1),
(17, 8, '../Images/Scantopay.png', '2023-05-15', 4, 1, 1, 2),
(18, 9, '../Images/Scantopay.png', '2023-05-16', 1, 1, 1, 3),
(19, 9, '../Images/Scantopay.png', '2023-05-16', 2, 1, 1, 4),
(20, 9, '../Images/Scantopay.png', '2023-05-16', 3, 1, 1, 1),
(21, 9, '../Images/Scantopay.png', '2023-05-16', 4, 1, 1, 2),
(22, 14, '../Images/Scantopay.png', '2023-05-17', 1, 10, 10, 1),
(23, 14, '../Images/Scantopay.png', '2023-05-17', 2, 10, 10, 2),
(24, 14, '../Images/Scantopay.png', '2023-05-17', 3, 10, 10, 3),
(25, 14, '../Images/Scantopay.png', '2023-05-17', 4, 10, 10, 4),
(26, 15, '../Images/Scantopay.png', '2023-05-18', 1, 11, 11, 1),
(27, 15, '../Images/Scantopay.png', '2023-05-18', 2, 11, 11, 2),
(28, 15, '../Images/Scantopay.png', '2023-05-18', 3, 11, 11, 3),
(29, 15, '../Images/Scantopay.png', '2023-05-18', 4, 11, 11, 4),
(30, 16, '../Images/Scantopay.png', '2023-05-19', 1, 11, 11, 1),
(31, 16, '../Images/Scantopay.png', '2023-05-19', 2, 11, 11, 2),
(32, 16, '../Images/Scantopay.png', '2023-05-19', 3, 11, 11, 3),
(33, 16, '../Images/Scantopay.png', '2023-05-19', 4, 11, 11, 4),
(34, 17, '../Images/Scantopay.png', '2023-05-20', 1, 12, 12, 1),
(35, 17, '../Images/Scantopay.png', '2023-05-20', 2, 12, 12, 2),
(36, 17, '../Images/Scantopay.png', '2023-05-20', 3, 12, 12, 3),
(37, 17, '../Images/Scantopay.png', '2023-05-20', 4, 12, 12, 4),
(38, 18, '../Images/Scantopay.png', '2023-05-21', 1, 12, 12, 1),
(39, 18, '../Images/Scantopay.png', '2023-05-21', 2, 12, 12, 2),
(40, 18, '../Images/Scantopay.png', '2023-05-21', 3, 12, 12, 3),
(41, 18, '../Images/Scantopay.png', '2023-05-21', 4, 12, 12, 4),
(42, 19, '../Images/Scantopay.png', '2023-05-22', 1, 13, 13, 1),
(43, 19, '../Images/Scantopay.png', '2023-05-22', 2, 13, 13, 2),
(44, 19, '../Images/Scantopay.png', '2023-05-22', 3, 13, 13, 3),
(45, 19, '../Images/Scantopay.png', '2023-05-22', 4, 13, 13, 4),
(46, 20, '../Images/Scantopay.png', '2023-05-23', 1, 13, 13, 1),
(47, 20, '../Images/Scantopay.png', '2023-05-23', 2, 13, 13, 2),
(48, 20, '../Images/Scantopay.png', '2023-05-23', 3, 13, 13, 3),
(49, 20, '../Images/Scantopay.png', '2023-05-23', 4, 13, 13, 4),
(50, 21, '../Images/Scantopay.png', '2023-05-24', 1, 14, 14, 1),
(51, 21, '../Images/Scantopay.png', '2023-05-24', 2, 14, 14, 2),
(52, 21, '../Images/Scantopay.png', '2023-05-24', 3, 14, 14, 3),
(53, 21, '../Images/Scantopay.png', '2023-05-24', 4, 14, 14, 4),
(54, 19, '../Images/Scantopay.png', '2023-05-22', 4, 13, 13, 4),
(55, 20, '../Images/Scantopay.png', '2023-05-23', 1, 13, 13, 1),
(56, 20, '../Images/Scantopay.png', '2023-05-23', 2, 13, 13, 2),
(57, 20, '../Images/Scantopay.png', '2023-05-23', 3, 13, 13, 3),
(58, 20, '../Images/Scantopay.png', '2023-05-23', 4, 13, 13, 4),
(59, 21, '../Images/Scantopay.png', '2023-05-24', 1, 14, 14, 1),
(60, 21, '../Images/Scantopay.png', '2023-05-24', 2, 14, 14, 2),
(61, 21, '../Images/Scantopay.png', '2023-05-24', 3, 14, 14, 3),
(62, 21, '../Images/Scantopay.png', '2023-05-24', 4, 14, 14, 4),
(63, 22, '../Images/Scantopay.png', '2023-05-25', 1, 14, 14, 1),
(64, 22, '../Images/Scantopay.png', '2023-05-25', 2, 14, 14, 2),
(65, 22, '../Images/Scantopay.png', '2023-05-25', 3, 14, 14, 3),
(66, 22, '../Images/Scantopay.png', '2023-05-25', 4, 14, 14, 4),
(67, 23, '../Images/Scantopay.png', '2023-05-26', 1, 14, 14, 1),
(68, 23, '../Images/Scantopay.png', '2023-05-26', 2, 14, 14, 2),
(69, 23, '../Images/Scantopay.png', '2023-05-26', 3, 14, 14, 3),
(70, 23, '../Images/Scantopay.png', '2023-05-26', 4, 14, 14, 4),
(71, 24, '../Images/Scantopay.png', '2023-05-27', 1, 15, 15, 1),
(72, 24, '../Images/Scantopay.png', '2023-05-27', 2, 15, 15, 2),
(73, 24, '../Images/Scantopay.png', '2023-05-27', 3, 15, 15, 3),
(74, 24, '../Images/Scantopay.png', '2023-05-27', 4, 15, 15, 4),
(75, 25, '../Images/Scantopay.png', '2023-05-28', 1, 15, 15, 1),
(76, 25, '../Images/Scantopay.png', '2023-05-28', 2, 15, 15, 2),
(77, 25, '../Images/Scantopay.png', '2023-05-28', 3, 15, 15, 3),
(78, 25, '../Images/Scantopay.png', '2023-05-28', 4, 15, 15, 4),
(79, 26, '../Images/Scantopay.png', '2023-05-29', 1, 15, 15, 1),
(80, 26, '../Images/Scantopay.png', '2023-05-29', 2, 15, 15, 2),
(81, 27, '../Images/Scantopay.png', '2023-05-30', 1, 16, 16, 1),
(82, 27, '../Images/Scantopay.png', '2023-05-30', 2, 16, 16, 2),
(83, 27, '../Images/Scantopay.png', '2023-05-30', 3, 16, 16, 3),
(84, 27, '../Images/Scantopay.png', '2023-05-30', 4, 16, 16, 4),
(85, 28, '../Images/Scantopay.png', '2023-05-31', 1, 16, 16, 1),
(86, 28, '../Images/Scantopay.png', '2023-05-31', 2, 16, 16, 2),
(87, 28, '../Images/Scantopay.png', '2023-05-31', 3, 16, 16, 3),
(88, 28, '../Images/Scantopay.png', '2023-05-31', 4, 16, 16, 4),
(89, 29, '../Images/Scantopay.png', '2023-06-01', 1, 16, 16, 1),
(90, 29, '../Images/Scantopay.png', '2023-06-01', 2, 16, 16, 2),
(91, 29, '../Images/Scantopay.png', '2023-06-01', 3, 16, 16, 3),
(92, 29, '../Images/Scantopay.png', '2023-06-01', 4, 16, 16, 4),
(93, 30, '../Images/Scantopay.png', '2023-06-02', 1, 17, 17, 1),
(94, 30, '../Images/Scantopay.png', '2023-06-02', 2, 17, 17, 2),
(95, 30, '../Images/Scantopay.png', '2023-06-02', 3, 17, 17, 3),
(96, 30, '../Images/Scantopay.png', '2023-06-02', 4, 17, 17, 4),
(97, 31, '../Images/Scantopay.png', '2023-06-03', 1, 17, 17, 1),
(98, 31, '../Images/Scantopay.png', '2023-06-03', 2, 17, 17, 2),
(99, 31, '../Images/Scantopay.png', '2023-06-03', 3, 17, 17, 3),
(100, 31, '../Images/Scantopay.png', '2023-06-03', 4, 17, 17, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `roomNo` int(11) NOT NULL,
  `roomCapacity` varchar(3) NOT NULL,
  `movieShowtime` varchar(11) NOT NULL,
  `roomStatus` varchar(100) NOT NULL DEFAULT 'Active',
  `movieShowDate` date NOT NULL,
  `movie_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`roomNo`, `roomCapacity`, `movieShowtime`, `roomStatus`, `movieShowDate`, `movie_id`) VALUES
(1, '40', '7pm', 'Active', '2023-05-09', 1),
(2, '30', '6pm', 'Active', '2023-05-01', 2),
(3, '30', '3pm', 'Active', '2023-08-01', 3),
(4, '40', '7pm', 'Active', '2023-08-02', 4),
(5, '20', '9pm', 'Active', '2023-08-03', 5),
(6, '10', '1pm', 'Active', '2023-05-09', 1),
(7, '10', '3pm', 'Active', '2023-05-01', 3),
(8, '50', '3pm', 'Inactive', '2023-05-09', 3),
(9, '200', '1pm', 'Inactive', '2023-05-10', 2),
(10, '50', '1pm', 'Inactive', '2023-05-11', 1),
(11, '10', '1pm', 'Inactive', '2023-05-13', 3),
(12, '30', '3pm', 'Inactive', '2023-05-14', 4),
(13, '40', '7pm', 'Inactive', '2023-05-15', 5),
(14, '20', '9pm', 'Inactive', '2023-05-16', 6),
(15, '30', '6pm', 'Inactive', '2023-05-17', 7),
(16, '10', '1pm', 'Inactive', '2023-05-18', 8),
(17, '10', '3pm', 'Inactive', '2023-05-19', 9),
(18, '50', '3pm', 'Inactive', '2023-05-20', 10),
(19, '200', '1pm', 'Inactive', '2023-05-21', 11),
(20, '50', '1pm', 'Inactive', '2023-05-22', 12),
(21, '10', '1pm', 'Inactive', '2023-05-23', 13),
(22, '30', '3pm', 'Inactive', '2023-05-24', 14),
(23, '40', '7pm', 'Inactive', '2023-05-25', 15),
(24, '20', '9pm', 'Inactive', '2023-05-26', 16),
(25, '30', '6pm', 'Inactive', '2023-05-27', 17),
(26, '10', '1pm', 'Inactive', '2023-05-28', 18),
(27, '10', '3pm', 'Inactive', '2023-05-29', 19),
(28, '50', '3pm', 'Inactive', '2023-05-30', 20),
(29, '200', '1pm', 'Inactive', '2023-05-31', 21),
(30, '50', '1pm', 'Inactive', '2023-06-01', 22),
(31, '10', '1pm', 'Inactive', '2023-06-02', 23),
(32, '30', '3pm', 'Inactive', '2023-06-03', 24),
(33, '40', '7pm', 'Inactive', '2023-06-04', 25),
(34, '20', '9pm', 'Inactive', '2023-06-05', 26),
(35, '30', '6pm', 'Inactive', '2023-06-06', 27),
(36, '10', '1pm', 'Inactive', '2023-06-07', 28),
(37, '10', '3pm', 'Inactive', '2023-06-08', 29),
(38, '50', '3pm', 'Inactive', '2023-06-09', 30),
(39, '200', '1pm', 'Inactive', '2023-06-10', 31),
(40, '50', '1pm', 'Inactive', '2023-06-11', 32),
(41, '10', '1pm', 'Inactive', '2023-06-12', 33),
(42, '30', '3pm', 'Inactive', '2023-06-13', 34),
(43, '40', '7pm', 'Inactive', '2023-06-14', 35),
(44, '20', '9pm', 'Inactive', '2023-06-15', 36),
(45, '30', '6pm', 'Inactive', '2023-06-16', 37),
(46, '10', '1pm', 'Inactive', '2023-06-17', 38),
(47, '10', '3pm', 'Inactive', '2023-06-18', 39),
(48, '50', '3pm', 'Inactive', '2023-06-19', 40),
(49, '200', '1pm', 'Inactive', '2023-06-20', 41),
(50, '50', '1pm', 'Inactive', '2023-06-21', 42),
(51, '10', '1pm', 'Inactive', '2023-06-22', 43),
(52, '30', '3pm', 'Inactive', '2023-06-23', 44),
(53, '40', '7pm', 'Inactive', '2023-06-24', 45),
(54, '20', '9pm', 'Inactive', '2023-06-25', 46),
(55, '30', '6pm', 'Inactive', '2023-06-26', 47),
(56, '10', '1pm', 'Inactive', '2023-06-27', 48),
(57, '10', '3pm', 'Inactive', '2023-06-28', 49),
(58, '50', '3pm', 'Inactive', '2023-06-29', 50),
(59, '200', '1pm', 'Inactive', '2023-06-30', 51),
(60, '50', '1pm', 'Inactive', '2023-07-01', 52),
(61, '10', '1pm', 'Inactive', '2023-07-02', 53),
(62, '30', '3pm', 'Inactive', '2023-07-03', 54),
(63, '40', '7pm', 'Inactive', '2023-07-04', 55),
(64, '20', '9pm', 'Inactive', '2023-07-05', 56),
(65, '30', '6pm', 'Inactive', '2023-07-06', 57),
(66, '10', '1pm', 'Inactive', '2023-07-07', 58),
(67, '10', '3pm', 'Inactive', '2023-07-08', 59),
(68, '50', '3pm', 'Inactive', '2023-07-09', 60),
(69, '200', '1pm', 'Inactive', '2023-07-10', 61),
(70, '50', '1pm', 'Inactive', '2023-07-11', 62),
(71, '10', '1pm', 'Inactive', '2023-07-12', 63),
(72, '30', '3pm', 'Inactive', '2023-07-13', 64),
(73, '40', '7pm', 'Inactive', '2023-07-14', 65),
(74, '20', '9pm', 'Inactive', '2023-07-15', 66),
(75, '30', '6pm', 'Inactive', '2023-07-16', 67),
(76, '10', '1pm', 'Inactive', '2023-07-17', 68),
(77, '10', '3pm', 'Inactive', '2023-07-18', 69),
(78, '50', '3pm', 'Inactive', '2023-07-19', 70),
(79, '200', '1pm', 'Inactive', '2023-07-20', 71),
(80, '50', '1pm', 'Inactive', '2023-07-21', 72),
(81, '10', '1pm', 'Inactive', '2023-07-22', 73),
(82, '30', '3pm', 'Inactive', '2023-07-23', 74),
(83, '40', '7pm', 'Inactive', '2023-07-24', 75),
(84, '20', '9pm', 'Inactive', '2023-07-25', 76),
(85, '30', '6pm', 'Inactive', '2023-07-26', 77),
(86, '10', '1pm', 'Inactive', '2023-07-27', 78),
(87, '10', '3pm', 'Inactive', '2023-07-28', 79),
(88, '50', '3pm', 'Inactive', '2023-07-29', 80),
(89, '200', '1pm', 'Inactive', '2023-07-30', 81),
(90, '50', '1pm', 'Inactive', '2023-07-31', 82),
(91, '30', '3pm', 'Active', '2023-08-01', 3),
(92, '40', '7pm', 'Active', '2023-08-02', 4),
(93, '20', '9pm', 'Active', '2023-08-03', 5),
(94, '30', '6pm', 'Active', '2023-08-04', 6),
(95, '10', '1pm', 'Active', '2023-08-05', 7),
(96, '10', '3pm', 'Active', '2023-08-06', 8),
(97, '50', '3pm', 'Inactive', '2023-08-07', 9),
(98, '200', '1pm', 'Active', '2023-08-08', 10),
(99, '50', '1pm', 'Active', '2023-08-09', 11),
(100, '10', '1pm', 'Active', '2023-08-10', 12);

-- --------------------------------------------------------

--
-- Table structure for table `combobooked`
--

CREATE TABLE `combobooked` (
  `comboBooked_id` int(10) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `comboQuantity` int(10) NOT NULL DEFAULT 1,
  `combo_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `combobooked`
--

INSERT INTO `combobooked` (`comboBooked_id`, `booking_id`, `comboQuantity`, `combo_id`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 2),
(3, 1, 1, 2),
(4, 1, 1, 1),
(5, 2, 1, 2),
(6, 3, 1, 3),
(7, 4, 1, 4),
(8, 5, 1, 5),
(9, 6, 1, 6),
(10, 7, 1, 7),
(11, 8, 1, 8),
(12, 9, 1, 9),
(13, 10, 1, 10),
(14, 11, 1, 11),
(15, 12, 1, 12),
(16, 13, 1, 13),
(17, 14, 1, 14),
(18, 15, 1, 15),
(19, 16, 1, 16),
(20, 17, 1, 17),
(21, 18, 1, 18),
(22, 19, 1, 19),
(23, 20, 1, 20),
(24, 21, 1, 21),
(25, 22, 1, 22),
(26, 23, 1, 23),
(27, 24, 1, 24),
(28, 25, 1, 25),
(29, 26, 1, 26),
(30, 27, 1, 27),
(31, 28, 1, 28),
(32, 29, 1, 29),
(33, 30, 1, 30),
(34, 31, 1, 31),
(35, 32, 1, 32),
(36, 33, 1, 33),
(37, 34, 1, 34),
(38, 35, 1, 35),
(39, 36, 1, 36),
(40, 37, 1, 37),
(41, 38, 1, 38),
(42, 39, 1, 39),
(43, 40, 1, 40),
(44, 41, 1, 41),
(45, 42, 1, 42),
(46, 43, 1, 43),
(47, 44, 1, 44),
(48, 45, 1, 45),
(49, 46, 1, 46),
(50, 47, 1, 47),
(51, 48, 1, 48),
(52, 49, 1, 49),
(53, 50, 1, 50),
(54, 51, 1, 51),
(55, 52, 1, 52),
(56, 53, 1, 53),
(57, 54, 1, 54),
(58, 55, 1, 55),
(59, 56, 1, 56),
(60, 57, 1, 57),
(61, 58, 1, 58),
(62, 59, 1, 59),
(63, 60, 1, 60),
(64, 61, 1, 61),
(65, 62, 1, 62),
(66, 63, 1, 63),
(67, 64, 1, 64),
(68, 65, 1, 65),
(69, 66, 1, 66),
(70, 67, 1, 67),
(71, 68, 1, 68),
(72, 69, 1, 69),
(73, 70, 1, 70),
(74, 71, 1, 71),
(75, 72, 1, 72),
(76, 73, 1, 73),
(77, 74, 1, 74),
(78, 75, 1, 75),
(79, 76, 1, 76),
(80, 77, 1, 77),
(81, 78, 1, 78),
(82, 79, 1, 79),
(83, 80, 1, 80),
(84, 81, 1, 81),
(85, 82, 1, 82),
(86, 83, 1, 83),
(87, 84, 1, 84),
(88, 85, 1, 85),
(89, 86, 1, 86),
(90, 87, 1, 87),
(91, 88, 1, 88),
(92, 89, 1, 89),
(93, 90, 1, 90),
(94, 91, 1, 91),
(95, 92, 1, 92),
(96, 93, 1, 93),
(97, 94, 1, 94),
(98, 95, 1, 95),
(99, 96, 1, 96),
(100, 97, 1, 97);

-- --------------------------------------------------------

--
-- Table structure for table `fnb`
--

CREATE TABLE `fnb` (
  `comboID` int(10) NOT NULL,
  `comboName` varchar(200) NOT NULL,
  `comboImg` varchar(200) NOT NULL,
  `comboPrice` int(50) NOT NULL,
  `comboQuantity` int(2) NOT NULL,
  `comboStatus` varchar(100) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fnb`
--

INSERT INTO `fnb` (`comboID`, `comboName`, `comboImg`, `comboPrice`, `comboQuantity`, `comboStatus`) VALUES
(1, 'Combo A: Finger Snacks', '../cinemetho/Images/combo1.jpg', 14, 50, 'Active'),
(2, 'Combo B: Couple snacks', '../cinemetho/Images/combo2.jpg', 30, 20, 'Active'),
(3, 'Combo C: Popcorns', '../cinemetho/Images/combo3.jpg', 10, 30, 'Active'),
(4, 'Combo D: Movie Night Special', '../cinemetho/Images/combo4.jpg', 25, 40, 'Inactive'),
(5, 'Combo E: Family Treat', '../cinemetho/Images/combo5.jpg', 35, 15, 'Inactive'),
(6, 'Combo F: Sweet Delight', '../cinemetho/Images/combo6.jpg', 12, 25, 'Inactive'),
(7, 'Combo G: Nacho Supreme', '../cinemetho/Images/combo7.jpg', 18, 35, 'Inactive'),
(8, 'Combo H: Cold Beverages', '../cinemetho/Images/combo8.jpg', 8, 50, 'Inactive'),
(9, 'Combo I: Gourmet Snacks', '../cinemetho/Images/combo9.jpg', 20, 30, 'Inactive'),
(10, 'Combo J: Healthy Bites', '../cinemetho/Images/combo10.jpg', 15, 45, 'Inactive'),
(11, 'Combo K: Pizza Feast', '../cinemetho/Images/combo11.jpg', 22, 25, 'Inactive'),
(12, 'Combo L: Ice Cream Delight', '../cinemetho/Images/combo12.jpg', 10, 30, 'Inactive'),
(13, 'Combo M: Kids Special', '../cinemetho/Images/combo13.jpg', 12, 20, 'Inactive'),
(14, 'Combo N: Savory Treat', '../cinemetho/Images/combo14.jpg', 16, 40, 'Inactive'),
(15, 'Combo O: Refreshing Sips', '../cinemetho/Images/combo15.jpg', 6, 55, 'Inactive'),
(16, 'Combo P: Hot Dogs Galore', '../cinemetho/Images/combo16.jpg', 9, 35, 'Inactive'),
(17, 'Combo Q: Mexican Fiesta', '../cinemetho/Images/combo17.jpg', 20, 30, 'Inactive'),
(18, 'Combo R: Chocolate Lovers', '../cinemetho/Images/combo18.jpg', 12, 25, 'Inactive'),
(19, 'Combo S: Classic Snacks', '../cinemetho/Images/combo19.jpg', 15, 40, 'Inactive'),
(20, 'Combo T: Veggie Delight', '../cinemetho/Images/combo20.jpg', 10, 50, 'Inactive'),
(21, 'Combo U: Cheesy Delight', '../cinemetho/Images/combo21.jpg', 18, 25, 'Inactive'),
(22, 'Combo V: Fresh Pops', '../cinemetho/Images/combo22.jpg', 8, 30, 'Inactive'),
(23, 'Combo W: BBQ Bonanza', '../cinemetho/Images/combo23.jpg', 22, 40, 'Inactive'),
(24, 'Combo X: Carnival Treats', '../cinemetho/Images/combo24.jpg', 14, 35, 'Inactive'),
(25, 'Combo Y: Crunchy Munchies', '../cinemetho/Images/combo25.jpg', 12, 45, 'Inactive'),
(26, 'Combo Z: Icy Blasts', '../cinemetho/Images/combo26.jpg', 6, 60, 'Inactive'),
(27, 'Combo AA: Party Platter', '../cinemetho/Images/combo27.jpg', 25, 30, 'Inactive'),
(28, 'Combo AB: Movie Marathon', '../cinemetho/Images/combo28.jpg', 30, 15, 'Inactive'),
(29, 'Combo AC: Tangy Twists', '../cinemetho/Images/combo29.jpg', 16, 35, 'Inactive'),
(30, 'Combo AD: Fresh Sips', '../cinemetho/Images/combo30.jpg', 10, 40, 'Inactive'),
(31, 'Combo AE: All-Time Favorites', '../cinemetho/Images/combo31.jpg', 20, 20, 'Inactive'),
(32, 'Combo AF: Nutty Delights', '../cinemetho/Images/combo32.jpg', 12, 25, 'Inactive'),
(33, 'Combo AG: Spicy Surprise', '../cinemetho/Images/combo33.jpg', 15, 30, 'Inactive'),
(34, 'Combo AH: Warm Treats', '../cinemetho/Images/combo34.jpg', 8, 40, 'Inactive'),
(35, 'Combo AI: Picnic Pack', '../cinemetho/Images/combo35.jpg', 18, 50, 'Inactive'),
(36, 'Combo AJ: Caramel Indulgence', '../cinemetho/Images/combo36.jpg', 10, 35, 'Inactive'),
(37, 'Combo AK: Sundae Special', '../cinemetho/Images/combo37.jpg', 12, 30, 'Inactive'),
(38, 'Combo AL: Seafood Feast', '../cinemetho/Images/combo38.jpg', 25, 20, 'Inactive'),
(39, 'Combo AM: Cheesy Delights', '../cinemetho/Images/combo39.jpg', 20, 40, 'Inactive'),
(40, 'Combo AN: Snack Attack', '../cinemetho/Images/combo40.jpg', 16, 35, 'Inactive'),
(41, 'Combo AO: Gourmet Goodies', '../cinemetho/Images/combo41.jpg', 12, 45, 'Inactive'),
(42, 'Combo AP: Tropical Treats', '../cinemetho/Images/combo42.jpg', 8, 60, 'Inactive'),
(43, 'Combo AQ: Choco Blast', '../cinemetho/Images/combo43.jpg', 14, 30, 'Inactive'),
(44, 'Combo AR: Classic Mix', '../cinemetho/Images/combo44.jpg', 10, 25, 'Inactive'),
(45, 'Combo AS: Tangy Crunch', '../cinemetho/Images/combo45.jpg', 16, 35, 'Inactive'),
(46, 'Combo AT: Healthy Pack', '../cinemetho/Images/combo46.jpg', 12, 40, 'Inactive'),
(47, 'Combo AU: Popcorn Lovers', '../cinemetho/Images/combo47.jpg', 6, 50, 'Inactive'),
(48, 'Combo AV: Veggie Treats', '../cinemetho/Images/combo48.jpg', 15, 30, 'Inactive'),
(49, 'Combo AW: Sweet Sensations', '../cinemetho/Images/combo49.jpg', 10, 20, 'Inactive'),
(50, 'Combo AX: Pizza Paradise', '../cinemetho/Images/combo50.jpg', 18, 35, 'Inactive'),
(51, 'Combo AY: Movie Binge', '../cinemetho/Images/combo51.jpg', 14, 40, 'Inactive'),
(52, 'Combo AZ: Fresh Delights', '../cinemetho/Images/combo52.jpg', 12, 25, 'Inactive'),
(53, 'Combo BA: Spicy Treats', '../cinemetho/Images/combo53.jpg', 8, 30, 'Inactive'),
(54, 'Combo BB: Choco Delight', '../cinemetho/Images/combo54.jpg', 16, 35, 'Inactive'),
(55, 'Combo BC: Gourmet Selection', '../cinemetho/Images/combo55.jpg', 10, 50, 'Inactive'),
(56, 'Combo BD: Refreshing Combo', '../cinemetho/Images/combo56.jpg', 12, 20, 'Inactive'),
(57, 'Combo BE: Nacho Mania', '../cinemetho/Images/combo57.jpg', 25, 30, 'Inactive'),
(58, 'Combo BF: Snack Platter', '../cinemetho/Images/combo58.jpg', 20, 25, 'Inactive'),
(59, 'Combo BG: Berry Blast', '../cinemetho/Images/combo59.jpg', 14, 40, 'Inactive'),
(60, 'Combo BH: Creamy Delights', '../cinemetho/Images/combo60.jpg', 10, 35, 'Inactive'),
(61, 'Combo BI: BBQ Madness', '../cinemetho/Images/combo61.jpg', 16, 20, 'Inactive'),
(62, 'Combo BJ: Movie Night Combo', '../cinemetho/Images/combo62.jpg', 12, 30, 'Inactive'),
(63, 'Combo BK: Crunchy Bites', '../cinemetho/Images/combo63.jpg', 6, 45, 'Inactive'),
(64, 'Combo BL: Deluxe Snacks', '../cinemetho/Images/combo64.jpg', 18, 35, 'Inactive'),
(65, 'Combo BM: Sweet Tooth', '../cinemetho/Images/combo65.jpg', 14, 30, 'Inactive'),
(66, 'Combo BN: Popcorn Paradise', '../cinemetho/Images/combo66.jpg', 10, 50, 'Inactive'),
(67, 'Combo BO: Savory Goodness', '../cinemetho/Images/combo67.jpg', 12, 25, 'Inactive'),
(68, 'Combo BP: Cheese Lovers', '../cinemetho/Images/combo68.jpg', 8, 40, 'Inactive'),
(69, 'Combo BQ: Movie Munchies', '../cinemetho/Images/combo69.jpg', 16, 30, 'Inactive'),
(70, 'Combo BR: Fresh Popsicles', '../cinemetho/Images/combo70.jpg', 10, 35, 'Inactive'),
(71, 'Combo BS: Burger Combo', '../cinemetho/Images/combo71.jpg', 14, 20, 'Inactive'),
(72, 'Combo BT: Choco Indulgence', '../cinemetho/Images/combo72.jpg', 12, 30, 'Inactive'),
(73, 'Combo BU: Healthy Snacks', '../cinemetho/Images/combo73.jpg', 8, 45, 'Inactive'),
(74, 'Combo BV: Tangy Delights', '../cinemetho/Images/combo74.jpg', 16, 35, 'Inactive'),
(75, 'Combo BW: Veggie Platter', '../cinemetho/Images/combo75.jpg', 10, 25, 'Inactive'),
(76, 'Combo BX: Ice Cream Combo', '../cinemetho/Images/combo76.jpg', 12, 40, 'Inactive'),
(77, 'Combo BY: Family Pack', '../cinemetho/Images/combo77.jpg', 6, 50, 'Inactive'),
(78, 'Combo BZ: Classic Combo', '../cinemetho/Images/combo78.jpg', 15, 30, 'Inactive'),
(79, 'Combo CA: Tangy Twist', '../cinemetho/Images/combo79.jpg', 10, 40, 'Inactive'),
(80, 'Combo CB: Crunchy Mix', '../cinemetho/Images/combo80.jpg', 18, 20, 'Inactive'),
(81, 'Combo CC: Movie Marathon Pack', '../cinemetho/Images/combo81.jpg', 14, 30, 'Inactive'),
(82, 'Combo CD: Healthy Indulgence', '../cinemetho/Images/combo82.jpg', 12, 35, 'Inactive'),
(83, 'Combo CE: Spicy Popcorn', '../cinemetho/Images/combo83.jpg', 8, 50, 'Inactive'),
(84, 'Combo CF: Sweet Combo', '../cinemetho/Images/combo84.jpg', 16, 25, 'Inactive'),
(85, 'Combo CG: Gourmet Snacks', '../cinemetho/Images/combo85.jpg', 10, 30, 'Inactive'),
(86, 'Combo CH: Refreshing Delight', '../cinemetho/Images/combo86.jpg', 12, 40, 'Inactive'),
(87, 'Combo CI: Nacho Platter', '../cinemetho/Images/combo87.jpg', 25, 35, 'Inactive'),
(88, 'Combo CJ: Snack Attack Combo', '../cinemetho/Images/combo88.jpg', 20, 30, 'Inactive'),
(89, 'Combo CK: Berry Bonanza', '../cinemetho/Images/combo89.jpg', 14, 50, 'Inactive'),
(90, 'Combo CL: Creamy Treats', '../cinemetho/Images/combo90.jpg', 10, 25, 'Inactive'),
(91, 'Combo CM: BBQ Combo', '../cinemetho/Images/combo91.jpg', 16, 35, 'Inactive'),
(92, 'Combo CN: Movie Night Special', '../cinemetho/Images/combo92.jpg', 12, 40, 'Inactive'),
(93, 'Combo CO: Crunchy Snacks', '../cinemetho/Images/combo93.jpg', 6, 30, 'Inactive'),
(94, 'Combo CP: Deluxe Platter', '../cinemetho/Images/combo94.jpg', 18, 45, 'Inactive'),
(95, 'Combo CQ: Choco Delicacy', '../cinemetho/Images/combo95.jpg', 14, 35, 'Inactive'),
(96, 'Combo CR: Popcorn Combo', '../cinemetho/Images/combo96.jpg', 10, 50, 'Inactive'),
(97, 'Combo CS: Savory Mix', '../cinemetho/Images/combo97.jpg', 12, 20, 'Inactive'),
(98, 'Combo CT: Cheesy Delights', '../cinemetho/Images/combo98.jpg', 8, 30, 'Inactive'),
(99, 'Combo CU: Movie Snacks', '../cinemetho/Images/combo99.jpg', 16, 35, 'Inactive'),
(100, 'Combo CV: Fresh Delicacies', '../cinemetho/Images/combo100.jpg', 10, 40, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(10) NOT NULL,
  `movieTitle` varchar(200) NOT NULL,
  `movieSynopsis` varchar(500) NOT NULL,
  `movieGenre` varchar(100) NOT NULL,
  `movieLanguage` varchar(100) NOT NULL,
  `movieDuration` varchar(50) NOT NULL,
  `mpaRating` varchar(50) NOT NULL,
  `movieImage` varchar(200) NOT NULL,
  `movieCast` varchar(200) NOT NULL,
  `movieDirector` varchar(100) NOT NULL,
  `movieStatus` varchar(100) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movieTitle`, `movieSynopsis`, `movieGenre`, `movieLanguage`, `movieDuration`, `mpaRating`, `movieImage`, `movieCast`, `movieDirector`, `movieStatus`) VALUES
(1, 'Dungeons & Dragons (English Sub) PG13', 'A charming thief and a band of unlikely adventurers undertake an epic heist to retrieve a lost relic, but things go dangerously awry when they run afoul of the wrong people. Dungeons ', 'Action, Fantasy', 'English', '134', 'PG13 - Some Violence', '../Images/dnd.jpeg', 'Chris Pine, Hugh Grant, Michelle Rodriguez, Sophia Lillis , Justice Smith, Rege- Jean Page', 'Jonathan M. Goldstein, John Francis Daley', 'Active'),
(2, 'John Wick: Chapter 4', 'John Wick (Keanu Reeves) uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.', 'Action', 'English', '170 mins', 'M18 - Violence', '../Images/johnwick4.jpeg', 'Donnie Yen , Scott Adkins, Keanu Reeves, Laurence Fishburne , Bill Skarsgard, Lance Reddick, Hiroyuki Sanada', 'Chad Stahelski', 'Active'),
(3, 'The Super Mario Bros. Movie&#40;English Sub&#41;', 'From Nintendo and Illumination comes a new animated film based on the world of Super Mario Bros.', 'Animation', 'English', '92 mins', 'PG', '../Images/mario.jpeg', 'Jack Black, Seth Rogen, Chris Pratt, Keegan Michael Key, Charlie Day , Anya Taylor-Joy, Michael Jelenic, Fred Armisen, Kevin Michael Richardson, Sebastian Maniscalco', 'Aaron Horvath', 'Active'),
(4, 'Suzume', 'As the skies turn red and the planet trembles, Japan stands on the brink of disaster. However, a determined teenager named Suzume sets out on a mission to save her country. Able to see supernatural forces that others cannot, it\'s up to her to close the mysterious doors that are spreading chaos across the land. A perilous journey awaits as the fate of Japan rests on her shoulders. ', 'Anime', 'Japanese', '122', 'PG', '../Images/suzume.jpeg', 'Nanoka Hara, Hokuto Matsumura, Eri Fukatsu', 'Makoto Shinkai', 'Active'),
(5, 'Renfield', 'Evil doesn\'t span eternity without a little help.\r\n\r\nIn this modern monster tale of Dracula\'s loyal servant, Nicholas Hoult stars as Renfield, the tortured aide to history\'s most narcissistic boss, Dracula. Renfield is forced to procure his master\'s prey and do his every bidding, no matter how debased. But now, after centuries of servitude, Renfield is ready to see if there\'s a life outside the shadow of The Prince of Darkness. If only he can figure out how to end his codependency.', 'Comedy', 'English', '93 mins', 'M18 - Violence and Gore', '../Images/renfield.jpeg', 'Nicholas Hoult, Nicolas Cage, Awkwafina, Ben Schwartz, Adrian Martinez', 'Chris McKay', 'Active'),
(6, 'Guardians of the Galaxy Vol. 3', 'In Marvel Studios Guardians of the Galaxy Vol. 3 our beloved band of misfits are looking a bit different these days. Peter Quill, still reeling from the loss of Gamora, must rally his team around him to defend the universe along with protecting one of their own. A mission that, if not completed successfully, could quite possibly lead to the end of the Guardians as we know them.    ', 'Sci-Fi', 'English', '150 mins', 'PG13 - Some Violence and Coarse Language', '../Images/gotg3.jpeg', 'Bradley Cooper, Vin Diesel, Zoe Saldana, Chris Pratt, Dave Bautista , Karen Gillan', 'James Gunn', 'Active'),
(7, 'Avengers: Secret Wars', 'The Avengers have faced many foes, but this time they must come together to fight an enemy they never expected - themselves. When a mysterious new threat arises, the Avengers find themselves caught in a web of deceit, betrayal, and mind-bending challenges. With their powers and loyalties tested, the fate of the universe hangs in the balance. Avengers: Secret Wars is a thrilling and action-packed chapter in the Marvel Cinematic Universe.', 'Action, Adventure, Sci-Fi', 'English', '160 mins', 'PG13 - Some Violence', '../Images/avengers_secret_wars.jpeg', 'Robert Downey Jr., Chris Evans, Scarlett Johansson, Mark Ruffalo, Chris Hemsworth, Jeremy Renner, Tom Holland, Benedict Cumberbatch, Chadwick Boseman, Brie Larson', 'Russo Brothers', 'Inactive'),
(8, 'Fast & Furious 10', 'Vin Diesel returns as Dominic Toretto in the next chapter of the Fast & Furious saga. In this action-packed film, Dom and his crew face their most formidable enemy yet, a skilled assassin who also happens to be Dom\'s estranged brother. With high-speed chases, epic stunts, and heart-stopping action, Fast & Furious 10 takes the franchise to new heights.', 'Action, Crime, Thriller', 'English', '140 mins', 'PG13 - Some Violence and Coarse Language', '../Images/fast_furious_10.jpeg', 'Vin Diesel, Michelle Rodriguez, Tyrese Gibson, Ludacris, Charlize Theron, Helen Mirren', 'Justin Lin', 'Inactive'),
(9, 'Jurassic World: Dominion', 'Return to Isla Nublar and witness the final chapter of the Jurassic World saga. In Jurassic World: Dominion, dinosaurs roam the Earth once again, but this time they are facing a new threat - themselves. As the original Jurassic Park characters and new faces collide, the fate of humanity hangs in the balance. Get ready for an epic conclusion to one of the most beloved franchises of all time.', 'Action, Adventure, Sci-Fi', 'English', '160 mins', 'PG13 - Some Violence', '../Images/jurassic_world_dominion.jpeg', 'Chris Pratt, Bryce Dallas Howard, Laura Dern, Sam Neill, Jeff Goldblum', 'Colin Trevorrow', 'Inactive'),
(10, 'Mission: Impossible 8', 'Tom Cruise returns as Ethan Hunt in the eighth installment of the Mission: Impossible franchise. In this action-packed film, Hunt and his team face their most dangerous mission yet, battling against a global threat that could bring the world to its knees. With jaw-dropping stunts and mind-bending twists, Mission: Impossible 8 is a thrilling ride from start to finish.', 'Action, Adventure, Thriller', 'English', '150 mins', 'PG13 - Some Violence and Coarse Language', '../Images/mission_impossible_8.jpeg', 'Tom Cruise, Rebecca Ferguson, Simon Pegg, Ving Rhames, Vanessa Kirby', 'Christopher McQuarrie', 'Inactive'),
(11, 'The Matrix Resurrections', 'Neo (Keanu Reeves) is back in this highly anticipated continuation of The Matrix series. Set in a world where reality and illusion are indistinguishable, Neo must once again navigate the matrix and face new challenges. With mind-bending action sequences and thought-provoking themes, The Matrix Resurrections redefines what it means to be human.', 'Action, Sci-Fi', 'English', '160 mins', 'PG13 - Some Violence', '../Images/matrix_resurrections.jpeg', 'Keanu Reeves, Carrie-Anne Moss, Yahya Abdul-Mateen II, Jessica Henwick, Jonathan Groff', 'Lana Wachowski', 'Inactive'),
(12, 'Spider-Man: No Way Home', 'Tom Holland returns as Peter Parker/Spider-Man in this highly anticipated sequel. When Peter\'s identity as Spider-Man is revealed, he must navigate a dangerous new world where friends become enemies and allies become adversaries. With the multiverse in chaos, Spider-Man: No Way Home is a thrilling and emotional journey that will leave audiences on the edge of their seats.', 'Action, Adventure, Sci-Fi', 'English', '150 mins', 'PG13 - Some Violence', '../Images/spiderman_no_way_home.jpeg', 'Tom Holland, Zendaya, Jacob Batalon, Benedict Cumberbatch, Tobey Maguire, Andrew Garfield', 'Jon Watts', 'Inactive'),
(13, 'Black Panther: Wakanda Forever', 'The legacy of Wakanda lives on in this highly anticipated sequel. As the nation mourns the loss of their king, new threats emerge that could tear the kingdom apart. With T\'Challa\'s sister, Shuri, at the helm, the fate of Wakanda hangs in the balance. Black Panther: Wakanda Forever is a celebration of culture, strength, and the power of unity.', 'Action, Adventure, Drama', 'English', '160 mins', 'PG13 - Some Violence', '../Images/black_panther_wakanda_forever.jpeg', 'Letitia Wright, Danai Gurira, Winston Duke, Lupita Nyong\'o, Angela Bassett', 'Ryan Coogler', 'Inactive'),
(14, 'The Flash', 'Ezra Miller returns as Barry Allen/The Flash in this electrifying standalone film. When Barry discovers the ability to travel through time, he must use his newfound powers to save his mother and prevent a catastrophic event. With a mix of heart, humor, and high-speed action, The Flash is a must-see for fans of the Scarlet Speedster.', 'Action, Adventure, Fantasy', 'English', '140 mins', 'PG13 - Some Violence', '../Images/the_flash.jpeg', 'Ezra Miller, Michael Keaton, Ben Affleck, Sasha Calle, Billy Crudup', 'Andy Muschietti', 'Inactive'),
(15, 'Doctor Strange in the Multiverse of Madness', 'Benedict Cumberbatch returns as Doctor Strange in this mind-bending sequel. When the fabric of reality is torn apart, Doctor Strange must team up with Scarlet Witch to restore balance and prevent the multiverse from collapsing. With stunning visuals and mind-bending twists, Doctor Strange in the Multiverse of Madness is a journey into the unknown.', 'Action, Adventure, Fantasy', 'English', '160 mins', 'PG13 - Some Violence', '../Images/doctor_strange_multiverse_of_madness.jpeg', 'Benedict Cumberbatch, Elizabeth Olsen, Chiwetel Ejiofor, Rachel McAdams, Benedict Wong', 'Sam Raimi', 'Inactive'),
(16, 'Fantastic Beasts: The Secrets of Dumbledore', 'Return to the wizarding world in this magical adventure. As Albus Dumbledore delves into the secrets of his past, Newt Scamander must confront a dangerous new threat that could plunge the wizarding world into chaos. With creatures, spells, and a dash of mischief, Fantastic Beasts: The Secrets of Dumbledore is a spellbinding journey.', 'Adventure, Family, Fantasy', 'English', '150 mins', 'PG', '../Images/fantastic_beasts_secrets_of_dumbledore.jpeg', 'Eddie Redmayne, Jude Law, Johnny Depp, Katherine Waterston, Ezra Miller', 'David Yates', 'Inactive'),
(17, 'Thor: Love and Thunder', 'Chris Hemsworth returns as the God of Thunder in this epic adventure. When a new threat emerges, Thor must team up with Jane Foster, who now possesses the power of Thor, to save the universe. With thunderous action and a dose of humor, Thor: Love and Thunder is a cosmic rollercoaster ride.', 'Action, Adventure, Comedy', 'English', '160 mins', 'PG13 - Some Violence', '../Images/thor_love_and_thunder.jpeg', 'Chris Hemsworth, Natalie Portman, Tessa Thompson, Christian Bale, Taika Waititi', 'Taika Waititi', 'Inactive'),
(18, 'Aquaman and the Lost Kingdom', 'Jason Momoa returns as Arthur Curry/Aquaman in this highly anticipated sequel. As Aquaman explores the mysteries of the Lost Kingdom, he must confront a new enemy who threatens to unleash chaos on the surface world. With breathtaking underwater visuals and thrilling action, Aquaman and the Lost Kingdom dives deeper into the depths of Atlantis.', 'Action, Adventure, Fantasy', 'English', '150 mins', 'PG13 - Some Violence', '../Images/aquaman_lost_kingdom.jpeg', 'Jason Momoa, Amber Heard, Patrick Wilson, Yahya Abdul-Mateen II, Nicole Kidman', 'James Wan', 'Inactive'),
(19, 'Shazam! Fury of the Gods', 'Zachary Levi returns as the lovable superhero Shazam in this electrifying sequel. When new threats emerge, Shazam and his superhero family must harness their powers to protect the world from destruction. With a mix of heart and humor, Shazam! Fury of the Gods is a lightning-fast adventure.', 'Action, Adventure, Comedy', 'English', '140 mins', 'PG13 - Some Violence', '../Images/shazam_fury_of_the_gods.jpeg', 'Zachary Levi, Asher Angel, Jack Dylan Grazer, Helen Mirren, Lucy Liu', 'David F. Sandberg', 'Inactive'),
(20, 'The Batman', 'Robert Pattinson dons the cape and cowl in this dark and gritty take on the Dark Knight. Set in a noir-inspired Gotham City, The Batman explores Bruce Wayne\'s detective skills as he unravels a web of corruption and faces off against iconic villains. With atmospheric visuals and intense action, The Batman is a thrilling reinvention of the legendary superhero.', 'Action, Crime, Drama', 'English', '150 mins', 'PG13 - Some Violence and Coarse Language', '../Images/the_batman.jpeg', 'Robert Pattinson, Zoë Kravitz, Paul Dano, Colin Farrell, Jeffrey Wright', 'Matt Reeves', 'Inactive'),
(21, 'Indiana Jones 5', 'Harrison Ford returns as the legendary archaeologist Indiana Jones in this long-awaited sequel. Set in the 1960s, Indy embarks on a new adventure that takes him around theglobe in search of a mythical artifact. With thrilling action, ancient mysteries, and Harrison Fords iconic charm, Indiana Jones 5 is a nostalgic and exciting journey.', 'Action, Adventure', 'English', '160 mins', 'PG13 - Some Violence', '../Images/indiana_jones_5.jpeg', 'Harrison Ford, Phoebe Waller-Bridge, Mads Mikkelsen, Thomas Kretschmann', 'James Mangold', 'Inactive'),
(22, 'Star Wars: Rogue Squadron', 'Buckle up and get ready for an adrenaline-fueled ride in a galaxy far, far away. Star Wars: Rogue Squadron takes audiences on a high-flying adventure with a new generation of starfighter pilots. As they battle against the remnants of the Empire, the fate of the galaxy hangs in the balance. With spectacular dogfights and thrilling heroics, Star Wars: Rogue Squadron is a must-see for Star Wars fans.', 'Action, Adventure, Sci-Fi', 'English', '150 mins', 'PG13 - Some Violence', '../Images/star_wars_rogue_squadron.jpeg', 'To be announced', 'Patty Jenkins', 'Inactive'),
(23, 'The Expendables 4', 'Sylvester Stallone leads an all-star cast in the fourth installment of The Expendables franchise. This time, the team of elite mercenaries faces their deadliest mission yet, as they go up against a ruthless arms dealer. With explosive action and a cast of action movie icons, The Expendables 4 delivers non-stop thrills.', 'Action, Adventure, Thriller', 'English', '140 mins', 'PG13 - Some Violence and Coarse Language', '../Images/expendables_4.jpeg', 'Sylvester Stallone, Jason Statham, Jet Li, Dolph Lundgren, Randy Couture, Terry Crews, 50 Cent', 'Scott Waugh', 'Inactive'),
(24, 'Wonder Woman 3', 'Gal Gadot returns as the iconic superhero Wonder Woman in the third installment of the Wonder Woman series. Set in a new era, Diana Prince must face her greatest challenge yet, as she comes up against formidable foes and grapples with her own inner demons. With strength, courage, and compassion, Wonder Woman 3 continues the inspiring journey of a true hero.', 'Action, Adventure, Fantasy', 'English', '160 mins', 'PG13 - Some Violence', '../Images/wonder_woman_3.jpeg', 'Gal Gadot, Chris Pine, Pedro Pascal', 'Patty Jenkins', 'Inactive'),
(25, 'Mission: Impossible 8', 'Ethan Hunt (Tom Cruise) returns for another high-stakes mission in the eighth installment of the Mission: Impossible franchise. Joined by his team, Hunt faces his most dangerous adversary yet as they race against time to prevent a global catastrophe. With jaw-dropping stunts and heart-pounding suspense, Mission: Impossible 8 delivers non-stop action.', 'Action, Adventure, Thriller', 'English', '150 mins', 'PG13 - Some Violence', '../Images/mission_impossible_8.jpeg', 'Tom Cruise, Rebecca Ferguson, Simon Pegg, Ving Rhames, Vanessa Kirby', 'Christopher McQuarrie', 'Inactive'),
(26, 'Mad Max: The Wasteland', 'Return to the post-apocalyptic wasteland in this highly anticipated sequel. Mad Max: The Wasteland follows Max Rockatansky as he navigates the dangerous and lawless desert in search of redemption. With adrenaline-fueled action and stunning visuals, Mad Max: The Wasteland is a thrilling continuation of the iconic franchise.', 'Action, Adventure, Sci-Fi', 'English', '140 mins', 'PG13 - Some Violence', '../Images/mad_max_the_wasteland.jpeg', 'Tom Hardy, Charlize Theron', 'George Miller', 'Inactive'),
(27, 'The Matrix Resurrections', 'Neo (Keanu Reeves) is back in this highly anticipated continuation of The Matrix series. Set in a world where reality and illusion are indistinguishable, Neo must once again navigate the matrix and face new challenges. With mind-bending action sequences and thought-provoking themes, The Matrix Resurrections redefines what it means to be human.', 'Action, Sci-Fi', 'English', '160 mins', 'PG13 - Some Violence', '../Images/matrix_resurrections.jpeg', 'Keanu Reeves, Carrie-Anne Moss, Yahya Abdul-Mateen II, Jessica Henwick, Jonathan Groff', 'Lana Wachowski', 'Inactive'),
(28, 'Spider-Man: No Way Home', 'Tom Holland returns as Peter Parker/Spider-Man in this highly anticipated sequel. When Peters identity as Spider-Man is revealed, he must navigate a dangerous new world where friends become enemies and allies become adversaries. With the multiverse in chaos, Spider-Man: No Way Home is a thrilling and emotional journey that will leave audiences on the edge of their seats.', 'Action, Adventure, Sci-Fi', 'English', '150 mins', 'PG13 - Some Violence', '../Images/spiderman_no_way_home.jpeg', 'Tom Holland, Zendaya, Jacob Batalon, Benedict Cumberbatch, Tobey Maguire, Andrew Garfield', 'Jon Watts', 'Inactive'),
(29, 'Black Panther: Wakanda Forever', 'The legacy of Wakanda lives on in this highly anticipated sequel. As the nation mourns the loss of their king, new threats emerge that could tear the kingdom apart. With TChallas sister, Shuri, at the helm, the fate of Wakanda hangs in the balance. Black Panther: Wakanda Forever is a celebration of culture, strength, and the power of unity.', 'Action, Adventure, Drama', 'English', '160 mins', 'PG13 - Some Violence', '../Images/black_panther_wakanda_forever.jpeg', 'Letitia Wright, Danai Gurira, Winston Duke, Lupita Nyongo, Angela Bassett', 'Ryan Coogler', 'Inactive'),
(30, 'The Flash', 'Ezra Miller returns as Barry Allen/The Flash in this electrifying standalone film. When Barry discovers the ability to travel through time, he must use his newfound powers to save his mother and prevent a catastrophic event. With a mix of heart, humor, and high-speed action, The Flash is a must-see for fans of the Scarlet Speedster.', 'Action, Adventure, Fantasy', 'English', '140 mins', 'PG13 - Some Violence', '../Images/the_flash.jpeg', 'Ezra Miller, Michael Keaton, Ben Affleck, Sasha Calle, Billy Crudup', 'Andy Muschietti', 'Inactive'),
(31, 'Doctor Strange in the Multiverse of Madness', 'Benedict Cumberbatch returns as the Sorcerer Supreme in this mind-bending sequel. As the fabric of reality unravels, Doctor Strange must navigate the multiverse and confront dark forces that threaten existence. With mind-bending visuals and mystical battles, Doctor Strange in the Multiverse of Madness is a journey into the unknown.', 'Action, Adventure, Fantasy', 'English', '160 mins', 'PG13 - Some Violence', '../Images/doctor_strange_multiverse_of_madness.jpeg', 'Benedict Cumberbatch, Elizabeth Olsen, Rachel McAdams, Chiwetel Ejiofor, Benedict Wong', 'Sam Raimi', 'Inactive'),
(32, 'Jurassic World: Dominion', 'Return to Isla Nublar in this thrilling conclusion to the Jurassic World trilogy. As dinosaurs roam freely, humans must confront their coexistence with these prehistoric creatures. With epic battles and stunning visuals, Jurassic World: Dominion takes audiences on an adventure millions of years in the making.', 'Action, Adventure, Sci-Fi', 'English', '160 mins', 'PG13 - Some Violence', '../Images/jurassic_world_dominion.jpeg', 'Chris Pratt, Bryce Dallas Howard, Laura Dern, Jeff Goldblum, Sam Neill', 'Colin Trevorrow', 'Inactive'),
(33, 'Mad Max: The Wasteland', 'Tom Hardy returns as the iconic post-apocalyptic hero, Max Rockatansky, in this highly anticipated sequel. Set in a desolate wasteland, Max must navigate a dangerous world ruled by ruthless warlords. With high-octane action and breathtaking visuals, Mad Max: The Wasteland is a thrilling ride into the chaos of the future.', 'Action, Adventure, Sci-Fi', 'English', '150 mins', 'PG13 - Some Violence', '../Images/mad_max_the_wasteland.jpeg', 'Tom Hardy', 'George Miller', 'Inactive'),
(34, 'Avatar 3', 'James Cameron continues his epic Avatar saga with the third installment of the series. As the conflict between the Navi and human forces escalates, new alliances are formed, and the battle for Pandora reaches its climax. With stunning visuals and immersive storytelling, Avatar 3 expands the horizons of cinematic experience.', 'Action, Adventure, Fantasy', 'English', '160 mins', 'PG13 - Some Violence', '../Images/avatar_3.jpeg', 'To be announced', 'James Cameron', 'Inactive'),
(35, 'Fast & Furious 10', 'Buckle up for the tenth chapter in the high-octane Fast & Furious saga. Dominic Toretto (Vin Diesel) and his crew reunite for another adrenaline-fueled adventure that takes them across the globe. With fast cars, daring heists, and heart-stopping action, Fast & Furious 10 is a wild ride you dont want to miss.', 'Action, Adventure, Crime', 'English', '150 mins', 'PG13 - Some Violence', '../Images/fast_and_furious_10.jpeg', 'Vin Diesel, Michelle Rodriguez, Tyrese Gibson, Chris', 'F. Gary Gray', 'Inactive'),
(36, 'Blade', 'Prepare for a new take on the iconic vampire hunter in this highly anticipated reboot. Blade, portrayed by Mahershala Ali, prowls the night, hunting down the undead and protecting humanity from the forces of darkness. With stylish action and a fresh perspective, Blade is a thrilling return to the world of vampires.', 'Action, Horror', 'English', '140 mins', 'PG13 - Some Violence and Gore', '../Images/blade.jpeg', 'Mahershala Ali', 'Bassam Tariq', 'Inactive'),
(37, 'Ant-Man and the Wasp: Quantumania', 'Paul Rudd and Evangeline Lilly return as the dynamic duo in this action-packed sequel. As Scott Lang and Hope Van Dyne continue their adventures as Ant-Man and the Wasp, they must confront new threats and unravel the mysteries of the quantum realm. With humor, heart, and mind-bending action, Ant-Man and the Wasp: Quantumania is a small-scale adventure with big consequences.', 'Action, Adventure, Comedy', 'English', '150 mins', 'PG13 - Some Violence', '../Images/antman_wasp_quantumania.jpeg', 'Paul Rudd, Evangeline Lilly, Michael Douglas, Michelle Pfeiffer', 'Peyton Reed', 'Inactive'),
(38, 'The Incredibles 3', 'Pixars beloved superhero family returns for another thrilling adventure. As the Parr family faces new challenges, they must band together to save the day and prove that heroes are always stronger together. With heartwarming moments and exhilarating action, The Incredibles 3 continues the legacy of this super-powered family.', 'Animation, Action, Adventure', 'English', '140 mins', 'PG', '../Images/incredibles_3.jpeg', 'To be announced', 'Brad Bird', 'Inactive'),
(39, 'The Chronicles of Narnia: The Silver Chair', 'Return to the magical world of Narnia in this long-awaited adaptation of C.S. Lewiss beloved novel. As Eustace Scrubb and his classmate Jill Pole embark on a perilous journey, they must face their fears and fulfill their destiny. With enchanting creatures and epic battles, The Chronicles of Narnia: The Silver Chair is a fantastical adventure for all ages.', 'Adventure, Fantasy', 'English', '160 mins', 'PG', '../Images/narnia_silver_chair.jpeg', 'To be announced', 'Joe Johnston', 'Inactive'),
(40, 'Halloween Ends', 'Michael Myers returns for the final chapter in this iconic horror franchise. Set years after the events of the previous film, Halloween Ends pits Myers against his ultimate nemesis, Laurie Strode, in a deadly confrontation. With suspenseful thrills and a chilling conclusion, Halloween Ends brings the saga of Michael Myers to a terrifying end.', 'Horror, Thriller', 'English', '140 mins', 'M18 - Violence and Gore', '../Images/halloween_ends.jpeg', 'Jamie Lee Curtis, Judy Greer, Andi Matichak', 'David Gordon Green', 'Inactive'),
(41, 'Fantastic Beasts and Where to Find Them 4', 'J.K. Rowlings magical world expands with the fourth installment of the Fantastic Beasts series. As Newt Scamander continues his adventures, he uncovers new mysteries and encounters extraordinary creatures. With wizarding wonders and captivating storytelling, Fantastic Beasts and Where to Find Them 4 invites audiences to delve deeper into the wizarding world.', 'Adventure, Family, Fantasy', 'English', '150 mins', 'PG', '../Images/fantastic_beasts_4.jpeg', 'Eddie Redmayne, Jude Law, Johnny Depp, Ezra Miller', 'David Yates', 'Inactive'),
(42, 'Indiana Jones 5', 'Harrison Ford dons the fedora once again in this long-awaited sequel to the Indiana Jones series. Set in the 1960s, Indy embarks on a globe-trotting adventure in search of a mythical artifact. With thrilling action, ancient mysteries, and Harrison Fords iconic charm, Indiana Jones 5 is a nostalgic and exciting journey.', 'Action, Adventure', 'English', '160 mins', 'PG13 - Some Violence', '../Images/indiana_jones_5.jpeg', 'Harrison Ford', 'James Mangold', 'Inactive'),
(43, 'The Expendables 4', 'The ultimate action ensemble returns for another explosive mission in The Expendables 4. Led by Sylvester Stallone, this star-studded cast of action icons reunites for one last adventure. With high-octane thrills and jaw-dropping stunts, The Expendables 4 is a must-see for fans of old-school action.', 'Action, Adventure, Thriller', 'English', '150 mins', 'PG13 - Some Violence', '../Images/expendables_4.jpeg', 'Sylvester Stallone, Jason Statham, Arnold Schwarzenegger, Dolph Lundgren', 'To be announced', 'Inactive'),
(44, 'The Witcher: Blood Origin', 'Return to the world of The Witcher in this highly anticipated prequel series. Set long before the events of the main series, Blood Origin explores the origins of the first Witcher and the events that shaped the world. With supernatural creatures and epic battles, The Witcher: Blood Origin is a dark and thrilling fantasy adventure.', 'Action, Adventure, Drama', 'English', '60 mins (per episode)', 'PG13 - Some Violence', '../Images/witcher_blood_origin.jpeg', 'To be announced', 'Declan de Barra', 'Inactive'),
(45, 'The Conjuring: The Devil Made Me Do It', 'The chilling Conjuring series continues with this haunting chapter. Based on a true story, The Devil Made Me Do It follows paranormal investigators Ed and Lorraine Warren as they confront a demonic presence that possesses a young man. With spine-tingling scares and supernatural suspense, The Conjuring: The Devil Made Me Do It will keep you on the edge of your seat.', 'Horror, Mystery, Thriller', 'English', '120 mins', 'M18 - Violence and Gore', '../Images/conjuring_devil_made_me_do_it.jpeg', 'Patrick Wilson, Vera Farmiga', 'Michael Chaves', 'Inactive'),
(46, 'Captain Marvel 2', 'Brie Larson returns as Carol Danvers/Captain Marvel in this highly anticipated sequel. Joined by a new generation of heroes, Captain Marvel must confront a powerful enemy that threatens the universe. With cosmic battles and heroic camaraderie, Captain Marvel 2 is a thrilling addition to the Marvel Cinematic Universe.', 'Action, Adventure, Sci-Fi', 'English', '150 mins', 'PG13 - Some Violence', '../Images/captain_marvel_2.jpeg', 'Brie Larson, Teyonah Parris, Iman Vellani, Zawe Ashton', 'Nia DaCosta', 'Inactive'),
(47, 'Deadpool 3', 'Ryan Reynolds returns as the Merc with a Mouth in this highly anticipated sequel. With his irreverent humor and penchant for mayhem, Deadpool takes on new challenges and encounters unexpected allies. With outrageous action and meta-comedy, Deadpool 3 pushes the boundaries of the superhero genre.', 'Action, Adventure, Comedy', 'English', '140 mins', 'M18 - Violence, Language, Sexual References', '../Images/deadpool_3.jpeg', 'Ryan Reynolds', 'David Leitch', 'Inactive'),
(48, 'Sherlock Holmes 3', 'Robert Downey Jr. and Jude Law reprise their roles as Sherlock Holmes and Dr. John Watson in this long-awaited sequel. Set in a new era of mystery and intrigue, Holmes and Watson must solve their most challenging case yet. With deductive reasoning and thrilling escapades, Sherlock Holmes 3 is a masterful detective tale.', 'Action, Adventure, Mystery', 'English', '160 mins', 'PG13 - Some Violence', '../Images/sherlock_holmes_3.jpeg', 'Robert Downey Jr., Jude Law', 'Dexter Fletcher', 'Inactive'),
(49, 'The Flash', 'Ezra Miller returns as the Scarlet Speedster in this electrifying superhero adventure. With his superhuman speed, Barry Allen must navigate the complexities of time travel and face off against formidable foes. With lightning-fast action and a compelling storyline, The Flash delivers a high-energy thrill ride.', 'Action, Adventure, Fantasy', 'English', '140 mins', 'PG13 - Some Violence', '../Images/the_flash.jpeg', 'Ezra Miller', 'Andy Muschietti', 'Inactive'),
(50, 'Mortal Kombat 2', 'Get ready for the next round of brutal martial arts battles in Mortal Kombat 2. Based on the iconic video game franchise, this sequel pits the Earthrealm warriors against new adversaries from Outworld. With bone-crushing fights and iconic fatalities, Mortal Kombat 2 is a bloody and visceral spectacle.', 'Action, Adventure, Fantasy', 'English', '150 mins', 'M18 - Violence and Gore', '../Images/mortal_kombat_2.jpeg', 'To be announced', 'Simon McQuoid', 'Inactive'),
(51, 'Transformers: Rise of the Beasts', 'The Transformers saga continues with an epic new chapter. Set in the 1990s, Rise of the Beasts introduces new Autobots, Decepticons, and Maximals as they battle for the fate of Earth. With stunning visual effects and robot action, Transformers: Rise of the Beasts is a thrilling entry in the beloved franchise.', 'Action, Adventure, Sci-Fi', 'English', '160 mins', 'PG13 - Some Violence', '../Images/transformers_rise_of_the_beasts.jpeg', 'To be announced', 'Steven Caple Jr.', 'Inactive'),
(52, 'The Matrix 4', 'Return to the simulated reality of The Matrix in this long-awaited sequel. Keanu Reeves and Carrie-Anne Moss reprise their roles as Neo and Trinity, embarking on a new mind-bending adventure. With cutting-edge visuals and philosophical themes, The Matrix 4 pushes the boundaries of perception and reality.', 'Action, Sci-Fi', 'English', '150 mins', 'PG13 - Some Violence', '../Images/matrix_4.jpeg', 'Keanu Reeves, Carrie-Anne Moss', 'Lana Wachowski', 'Inactive'),
(53, 'Aquaman and the Lost Kingdom', 'Jason Momoa returns as the Atlantean hero in this highly anticipated sequel. As Arthur Curry/Aquaman, he dives deeper into the mysteries of Atlantis and confronts ancient threats. With breathtaking underwater visuals and epic battles, Aquaman and the Lost Kingdom takes audiences on a thrilling underwater adventure.', 'Action, Adventure, Fantasy', 'English', '160 mins', 'PG13 - Some Violence', '../Images/aquaman_lost_kingdom.jpeg', 'Jason Momoa, Amber Heard, Patrick Wilson, Yahya Abdul-Mateen II', 'James Wan', 'Inactive'),
(54, 'Wakanda Forever', 'The Marvel Cinematic Universe continues to explore the kingdom of Wakanda in this highly anticipated sequel. As the nation mourns the loss of their king, they must defend Wakanda from new threats and navigate the challenges of leadership. With powerful performances and groundbreaking storytelling, Wakanda Forever is a celebration of Wakandan culture and heroism.', 'Action, Adventure, Sci-Fi', 'English', '150 mins', 'PG13 - Some Violence', '../Images/wakanda_forever.jpeg', 'To be announced', 'Ryan Coogler', 'Inactive'),
(55, 'Avatar 2', 'Return to the enchanting world of Pandora in this long-awaited sequel. Directed by James Cameron, Avatar 2 continues the epic saga of Jake Sully and Neytiri as they embark on a new adventure and face new dangers. With groundbreaking visuals and a captivating story, Avatar 2 transports audiences to a mesmerizing alien landscape.', 'Action, Adventure, Fantasy', 'English', '180 mins', 'PG13 - Some Violence', '../Images/avatar_2.jpeg', 'Sam Worthington, Zoe Saldana, Sigourney Weaver', 'James Cameron', 'Inactive'),
(56, 'The Batman', 'Robert Pattinson dons the cape and cowl in this gritty reboot of the Dark Knight. Set in a noir-inspired Gotham City, The Batman follows a younger Bruce Wayne as he uncovers corruption and faces off against iconic villains. With atmospheric visuals and a compelling take on the iconic character, The Batman offers a fresh and exciting new chapter in the Batman mythos.', 'Action, Crime, Drama', 'English', '150 mins', 'PG13 - Some Violence', '../Images/the_batman.jpeg', 'Robert Pattinson, Paul Dano, Zoë Kravitz, Colin Farrell', 'Matt Reeves', 'Inactive'),
(57, 'Jurassic World: Dominion', 'Return to Isla Nublar for the thrilling conclusion of the Jurassic World saga. In Dominion, dinosaurs roam the earth alongside humans, leading to a clash between two worlds. With jaw-dropping dinosaur encounters and an epic showdown, Jurassic World: Dominion delivers the ultimate prehistoric adventure.', 'Action, Adventure, Sci-Fi', 'English', '180 mins', 'PG13 - Some Violence', '../Images/jurassic_world_dominion.jpeg', 'Chris Pratt, Bryce Dallas Howard, Jeff Goldblum, Laura Dern, Sam Neill', 'Colin Trevorrow', 'Inactive'),
(58, 'Black Panther: Wakanda Forever', 'The legacy of Black Panther lives on in this highly anticipated sequel. As Wakanda faces new challenges, the mantle of the Black Panther is taken up by a new hero. With powerful themes and a celebration of African culture, Black Panther: Wakanda Forever pays tribute to the late Chadwick Boseman and continues the groundbreaking legacy of the first film.', 'Action, Adventure, Drama', 'English', '150 mins', 'PG13 - Some Violence', '../Images/black_panther_wakanda_forever.jpeg', 'To be announced', 'Ryan Coogler', 'Inactive'),
(59, 'Mission: Impossible 8', 'Tom Cruise returns as Ethan Hunt in the eighth installment of the Mission: Impossible franchise. Joined by his team of skilled agents, Hunt faces his most dangerous mission yet. With breathtaking stunts and intense espionage, Mission: Impossible 8 delivers the adrenaline-pumping thrills that fans have come to expect.', 'Action, Adventure, Thriller', 'English', '160 mins', 'PG13 - Some Violence', '../Images/mission_impossible_8.jpeg', 'Tom Cruise, Rebecca Ferguson, Ving Rhames, Simon Pegg', 'Christopher McQuarrie', 'Inactive'),
(60, 'Sherlock Holmes 4', 'Robert Downey Jr. and Jude Law reunite for another thrilling adventure as Sherlock Holmes and Dr. John Watson. Set in Victorian-era London, Holmes and Watson must unravel a web of mysteries and outsmart cunning adversaries. With their brilliant minds and unbreakable bond, Sherlock Holmes 4 is a captivating detective tale.', 'Action, Adventure, Mystery', 'English', '160 mins', 'PG13 - Some Violence', '../Images/sherlock_holmes_4.jpeg', 'Robert Downey Jr., Jude Law', 'Guy Ritchie', 'Inactive'),
(61, 'Fast & Furious 10', 'Vin Diesel and the Fast family return for the tenth installment of the high-octane franchise. Filled with adrenaline-fueled car chases and gravity-defying stunts, Fast & Furious 10 takes the action to new levels. With a star-studded cast and a story that brings the saga to a thrilling conclusion, Fast & Furious 10 is a must-see for fans of the series.', 'Action, Crime, Thriller', 'English', '160 mins', 'PG13 - Some Violence', '../Images/fast_furious_10.jpeg', 'Vin Diesel, Michelle Rodriguez, Tyrese Gibson, Charlize Theron', 'Justin Lin', 'Inactive'),
(62, 'Indiana Jones 5', 'Harrison Ford returns as the legendary archaeologist in the fifth installment of the Indiana Jones franchise. Joined by a new generation of adventurers, Indiana Jones embarks on a globe-trotting journey filled with ancient mysteries and perilous challenges. With swashbuckling action and iconic artifacts, Indiana Jones 5 continues the legacy of the beloved series.', 'Action, Adventure', 'English', '150 mins', 'PG13 - Some Violence', '../Images/indiana_jones_5.jpeg', 'Harrison Ford', 'James Mangold', 'Inactive'),
(63, 'The Expendables 4', 'The ultimate action ensemble returns for another explosive mission in The Expendables 4. Led by Sylvester Stallone, this star-studded cast of action icons reunites for one last adventure. With high-octane thrills and jaw-dropping stunts, The Expendables 4 is a must-see for fans of old-school action.', 'Action, Adventure, Thriller', 'English', '150 mins', 'PG13 - Some Violence', '../Images/expendables_4.jpeg', 'Sylvester Stallone, Jason Statham, Arnold Schwarzenegger, Dolph Lundgren', 'To be announced', 'Inactive'),
(64, 'The Witcher: Blood Origin', 'Return to the world of The Witcher in this highly anticipated prequel series. Set long before the events of the main series, Blood Origin explores the origins of the first Witcher and the events that shaped the world. With supernatural creatures and epic battles, The Witcher: Blood Origin is a dark and thrilling fantasy adventure.', 'Action, Adventure, Drama', 'English', '60 mins (per episode)', 'PG13 - Some Violence', '../Images/witcher_blood_origin.jpeg', 'To be announced', 'Declan de Barra', 'Inactive'),
(65, 'The Conjuring: The Devil Made Me Do It', 'The chilling Conjuring series continues with this haunting chapter. Based on a true story, The Devil Made Me Do It follows paranormal investigators Ed and Lorraine Warren as they confront a demonic presence that possesses a young man. With spine-tingling scares and supernatural suspense, The Conjuring: The Devil Made Me Do It will keep you on the edge of your seat.', 'Horror, Mystery, Thriller', 'English', '120 mins', 'M18 - Violence and Gore', '../Images/conjuring_devil_made_me_do_it.jpeg', 'Patrick Wilson, Vera Farmiga', 'Michael Chaves', 'Inactive'),
(66, 'Captain Marvel 2', 'Brie Larson returns as Carol Danvers/Captain Marvel in this highly anticipated sequel. Joined by a new generation of heroes, Captain Marvel must confront a powerful enemy that threatens the universe. With cosmic battles and heroic camaraderie, Captain Marvel 2 is a thrilling addition to the Marvel Cinematic Universe.', 'Action, Adventure, Sci-Fi', 'English', '150 mins', 'PG13 - Some Violence', '../Images/captain_marvel_2.jpeg', 'Brie Larson', 'Nia DaCosta', 'Inactive'),
(67, 'Blade', 'The vampire hunter Blade makes his triumphant return in this highly anticipated reboot. With a new actor stepping into the iconic role, Blade takes on the undead in a gritty and stylish reimagining. With intense action and a dark supernatural world, Blade brings a fresh take on the classic character.', 'Action, Horror', 'English', '120 mins', 'M18 - Violence and Gore', '../Images/blade.jpeg', 'To be announced', 'Stacy Osei-Kuffour', 'Inactive'),
(68, 'Fantastic Beasts 4', 'Return to the wizarding world in the fourth installment of the Fantastic Beasts series. Set in the magical realm of J.K. Rowlings imagination, Fantastic Beasts 4 follows Newt Scamander and his allies as they face new magical creatures and dark forces. With enchanting visuals and captivating storytelling, Fantastic Beasts 4 expands the Harry Potter universe.', 'Adventure, Family, Fantasy', 'English', '150 mins', 'PG', '../Images/fantastic_beasts_4.jpeg', 'Eddie Redmayne, Jude Law, Johnny Depp', 'To be announced', 'Inactive'),
(69, 'Mad Max: Furiosa', 'Enter the post-apocalyptic wasteland once again in this exhilarating prequel to Mad Max: Fury Road. Furiosa explores the origin story of the iconic character as she navigates a world of chaos and survival. With high-octane car chases and dystopian action, Mad Max: Furiosa is a thrilling ride into the heart of the Mad Max universe.', 'Action, Adventure, Sci-Fi', 'English', '160 mins', 'M18 - Violence and Gore', '../Images/mad_max_furiosa.jpeg', 'Anya Taylor-Joy, Chris Hemsworth', 'George Miller', 'Inactive'),
(70, 'Hocus Pocus 2', 'The Sanderson sisters are back in this long-awaited sequel to the beloved Halloween classic. Joined by a new generation of witches, Hocus Pocus 2 brings back the magic, mischief, and mayhem that made the original film a cult favorite. With spellbinding fun and a dose of nostalgia, Hocus Pocus 2 is a bewitching Halloween adventure.', 'Comedy, Family, Fantasy', 'English', '120 mins', 'PG', '../Images/hocus_pocus_2.jpeg', 'Bette Midler, Sarah Jessica Parker, Kathy Najimy', 'Anne Fletcher', 'Inactive'),
(71, 'The Suicide Squad 2', 'The Suicide Squad returns for another dangerous mission in this action-packed sequel. Led by Amanda Waller, a new team of antiheroes is sent on a deadly assignment. With irreverent humor and explosive action, The Suicide Squad 2 pushes the boundaries of the superhero genre.', 'Action, Adventure, Comedy', 'English', '140 mins', 'M18 - Violence, Coarse Language, Sexual References', '../Images/suicide_squad_2.jpeg', 'Margot Robbie, Idris Elba, John Cena, Viola Davis', 'James Gunn', 'Inactive'),
(72, 'The Addams Family 3', 'Join the kooky and spooky Addams family in their third animated adventure. Gomez, Morticia, and their eccentric children find themselves on a hilarious and macabre journey. With creepy fun and heartwarming moments, The Addams Family 3 is a delightfully ghoulish treat for the whole family.', 'Animation, Comedy, Family', 'English', '90 mins', 'PG', '../Images/addams_family_3.jpeg', 'To be announced', 'Greg Tiernan, Conrad Vernon', 'Inactive'),
(73, 'Pacific Rim: Uprising', 'The epic battle between Kaiju and Jaegers rages on in this thrilling sequel to Pacific Rim. Set years after the events of the first film, Uprising follows a new generation of pilots as they face a resurrected threat. With giant robots and monstrous creatures, Pacific Rim: Uprising delivers epic sci-fi action.', 'Action, Adventure, Sci-Fi', 'English', '120 mins', 'PG13 - Some Violence', '../Images/pacific_rim_uprising.jpeg', 'John Boyega, Scott Eastwood, Cailee Spaeny', 'Steven S. DeKnight', 'Inactive'),
(74, 'Zootopia 2', 'Return to the vibrant animal metropolis of Zootopia in this highly anticipated sequel. Judy Hopps and Nick Wilde team up once again to solve a new mystery that threatens their harmonious city. With clever humor and a message of inclusivity, Zootopia 2 is a heartwarming animated adventure for all ages.', 'Animation, Adventure, Comedy', 'English', '110 mins', 'PG', '../Images/zootopia_2.jpeg', 'Ginnifer Goodwin, Jason Bateman', 'Byron Howard, Jared Bush', 'Inactive'),
(75, 'The Matrix 4', 'Neo and Trinity return in this mind-bending continuation of The Matrix series. Directed by Lana Wachowski, The Matrix 4 explores new realms of reality and pushes the boundaries of perception. With groundbreaking visuals and philosophical themes, The Matrix 4 is a highly anticipated chapter in the iconic franchise.', 'Action, Sci-Fi', 'English', '150 mins', 'PG13 - Some Violence', '../Images/matrix_4.jpeg', 'Keanu Reeves, Carrie-Anne Moss, Yahya Abdul-Mateen II', 'Lana Wachowski', 'Inactive'),
(76, 'Spider-Man: No Way Home', 'Tom Holland swings back into action as Spider-Man in this highly anticipated sequel. Joined by familiar faces from different dimensions, Spider-Man must confront powerful enemies and face the consequences of tampering with the multiverse. With thrilling action and surprising twists, Spider-Man: No Way Home is a web-slinging adventure that will leave audiences in awe.', 'Action, Adventure, Sci-Fi', 'English', '160 mins', 'PG13 - Some Violence', '../Images/spiderman_no_way_home.jpeg', 'Tom Holland, Zendaya, Benedict Cumberbatch', 'Jon Watts', 'Inactive'),
(77, 'Doctor Strange in the Multiverse of Madness', 'Benedict Cumberbatch returns as the Sorcerer Supreme in this mind-bending sequel. Joined by Scarlet Witch, Doctor Strange must navigate the treacherous multiverse and face mystical threats. With mind-bending visuals and supernatural suspense, Doctor Strange in the Multiverse of Madness delves into the darkest corners of the Marvel Cinematic Universe.', 'Action, Adventure, Fantasy', 'English', '150 mins', 'PG13 - Some Violence', '../Images/doctor_strange_multiverse_of_madness.jpeg', 'Benedict Cumberbatch, Elizabeth Olsen', 'Sam Raimi', 'Inactive'),
(78, 'Avatar 3', 'Continue the journey to the breathtaking world of Pandora in the third installment of the Avatar saga. Directed by James Cameron, Avatar 3 expands the epic story and takes audiences on another immersive adventure. With stunning visuals and a compelling narrative, Avatar 3 is a cinematic experience like no other.', 'Action, Adventure, Fantasy', 'English', '180 mins', 'PG13 - Some Violence', '../Images/avatar_3.jpeg', 'Sam Worthington, Zoe Saldana, Sigourney Weaver', 'James Cameron', 'Inactive'),
(79, 'Sherlock Holmes 3', 'Robert Downey Jr. and Jude Law reunite as the dynamic detective duo in this long-awaited sequel. Sherlock Holmes 3 follows the brilliant detective and his loyal companion as they unravel a new mystery in Victorian London. With sharp wit and thrilling investigations, Sherlock Holmes 3 brings the iconic characters back to the big screen.', 'Action, Adventure, Mystery', 'English', '140 mins', 'PG13 - Some Violence', '../Images/sherlock_holmes_3.jpeg', 'Robert Downey Jr., Jude Law', 'Dexter Fletcher', 'Inactive'),
(80, 'Mission: Impossible 8', 'Tom Cruise returns as Ethan Hunt in the eighth installment of the Mission: Impossible franchise. Packed with thrilling stunts and high-stakes espionage, Mission: Impossible 8 takes the action to new heights. With a star-studded cast and jaw-dropping set pieces, Mission: Impossible 8 is a must-see for fans of the series.', 'Action, Adventure, Thriller', 'English', '150 mins', 'PG13 - Some Violence', '../Images/mission_impossible_8.jpeg', 'Tom Cruise, Rebecca Ferguson, Ving Rhames, Simon Pegg', 'Christopher McQuarrie', 'Inactive'),
(81, 'Shrek 5', 'Everyones favorite ogre is back in this highly anticipated sequel. Shrek 5 continues the hilarious and heartwarming adventures of Shrek, Fiona, and their lovable companions. With witty humor and a touch of fairy tale magic, Shrek 5 is an animated delight for audiences of all ages.', 'Animation, Adventure, Comedy', 'English', '100 mins', 'PG', '../Images/shrek_5.jpeg', 'Mike Myers, Eddie Murphy, Cameron Diaz', 'To be announced', 'Inactive'),
(82, 'Jurassic World: Dominion', 'Return to Isla Nublar for the epic conclusion of the Jurassic World saga. Jurassic World: Dominion brings together beloved characters from the original Jurassic Park trilogy and the new generation of dinosaur experts. With awe-inspiring dinosaurs and thrilling action, Jurassic World: Dominion is a prehistoric adventure that will leave you breathless.', 'Action, Adventure, Sci-Fi', 'English', '170 mins', 'PG13 - Some Violence', '../Images/jurassic_world_dominion.jpeg', 'Chris Pratt, Bryce Dallas Howard, Laura Dern, Sam Neill', 'Colin Trevorrow', 'Inactive'),
(83, 'Sonic the Hedgehog 2', 'Sonic is back in this highly anticipated sequel to the hit film. Joined by his loyal friends, Sonic must face new challenges and stop Dr. Robotnik from obtaining ultimate power. With fast-paced action and iconic characters, Sonic the Hedgehog 2 is a thrilling adventure for fans of all ages.', 'Action, Adventure, Comedy', 'English', '120 mins', 'PG', '../Images/sonic_the_hedgehog_2.jpeg', 'Ben Schwartz, Jim Carrey, James Marsden', 'Jeff Fowler', 'Inactive'),
(84, 'The Flash', 'Ezra Miller returns as the Scarlet Speedster in this electrifying standalone film. The Flash explores the multiverse and introduces audiences to different versions of the beloved superhero. With high-speed action and a compelling story, The Flash brings the iconic DC character to life in a new and exciting way.', 'Action, Adventure, Fantasy', 'English', '140 mins', 'PG13 - Some Violence', '../Images/the_flash.jpeg', 'Ezra Miller, Michael Keaton', 'Andy Muschietti', 'Inactive'),
(85, 'Indiana Jones 5', 'Harrison Ford dusts off his fedora and bullwhip for another thrilling adventure as Indiana Jones. Directed by James Mangold, Indiana Jones 5 takes audiences on a globe-trotting quest filled with danger and ancient mysteries. With iconic action sequences and Harrison Ford reprising his iconic role, Indiana Jones 5 is a must-see for fans of the franchise.', 'Action, Adventure', 'English', '160 mins', 'PG13 - Some Violence', '../Images/indiana_jones_5.jpeg', 'Harrison Ford', 'James Mangold', 'Inactive'),
(86, 'The Chronicles of Narnia: The Silver Chair', 'Return to the magical world of Narnia in this long-awaited adaptation of The Silver Chair. Packed with fantastical creatures and epic battles, The Chronicles of Narnia: The Silver Chair follows a new group of heroes on a perilous journey. With enchanting storytelling and breathtaking visuals, The Silver Chair brings C.S. Lewiss beloved characters to life.', 'Adventure, Family, Fantasy', 'English', '130 mins', 'PG', '../Images/narnia_silver_chair.jpeg', 'To be announced', 'Joe Johnston', 'Inactive'),
(87, 'Ghostbusters: Afterlife', 'The Ghostbusters are back in this nostalgic sequel that pays homage to the original films. Set in a small town, Ghostbusters: Afterlife follows a new generation of Ghostbusters as they uncover supernatural secrets. With a blend of comedy and supernatural thrills, Ghostbusters: Afterlife captures the spirit of the beloved franchise.', 'Action, Comedy, Fantasy', 'English', '130 mins', 'PG13 - Some Violence', '../Images/ghostbusters_afterlife.jpeg', 'Finn Wolfhard, Paul Rudd, Carrie Coon', 'Jason Reitman', 'Inactive'),
(88, 'The Incredibles 3', 'Join the Parr family for another extraordinary adventure in The Incredibles 3. Picking up where the previous films left off, The Incredibles 3 follows the superpowered family as they face new villains and challenges. With Pixars signature animation and heartfelt storytelling, The Incredibles 3 is a thrilling superhero saga for all ages.', 'Animation, Action, Adventure', 'English', '110 mins', 'PG', '../Images/incredibles_3.jpeg', 'To be announced', 'Brad Bird', 'Inactive'),
(89, 'Kung Fu Panda 4', 'Po the panda returns in this highly anticipated sequel to the Kung Fu Panda franchise. Joined by his friends, Po must master new techniques and face powerful enemies to protect the Valley of Peace. With stunning animation and martial arts action, Kung Fu Panda 4 is an epic adventure that will leave audiences cheering.', 'Animation, Action, Adventure', 'English', '100 mins', 'PG', '../Images/kung_fu_panda_4.jpeg', 'Jack Black, Angelina Jolie, Jackie Chan', 'To be announced', 'Inactive');
INSERT INTO `movie` (`movie_id`, `movieTitle`, `movieSynopsis`, `movieGenre`, `movieLanguage`, `movieDuration`, `mpaRating`, `movieImage`, `movieCast`, `movieDirector`, `movieStatus`) VALUES
(90, 'The Batman', 'Robert Pattinson dons the cape and cowl in this dark and gritty reboot of the Batman franchise. Directed by Matt Reeves, The Batman explores the detective side of the iconic superhero as he unravels a web of corruption in Gotham City. With a stellar cast and a fresh take on the Dark Knight, The Batman promises a thrilling and atmospheric superhero film.', 'Action, Crime, Drama', 'English', '140 mins', 'PG13 - Some Violence', '../Images/the_batman.jpeg', 'Robert Pattinson, Zoë Kravitz, Paul Dano, Colin Farrell', 'Matt Reeves', 'Inactive'),
(91, 'Black Panther: Wakanda Forever', 'Marvel Studios pays tribute to the late Chadwick Boseman in this highly anticipated sequel. Black Panther: Wakanda Forever continues the story of the legendary superhero and explores the depths of Wakanda. With a blend of action, drama, and cultural significance, Black Panther: Wakanda Forever is a film that will leave a lasting impact.', 'Action, Adventure, Drama', 'English', '150 mins', 'PG13 - Some Violence', '../Images/black_panther_wakanda_forever.jpeg', 'To be announced', 'Ryan Coogler', 'Inactive'),
(92, 'The Lion King 2', 'Return to the Pride Lands in this sequel to the beloved animated classic. The Lion King 2 follows Simba and Nalas daughter as she embarks on her own journey and discovers the importance of family and courage. With breathtaking animation and unforgettable music, The Lion King 2 is a heartfelt continuation of the timeless story.', 'Animation, Adventure, Drama', 'English', '120 mins', 'PG', '../Images/lion_king_2.jpeg', 'To be announced', 'Jon Favreau', 'Inactive'),
(93, 'Fantastic Beasts and Where to Find Them 3', 'Continue the magical journey in the third installment of the Fantastic Beasts series. Set in the wizarding world created by J.K. Rowling, Fantastic Beasts and Where to Find Them 3 introduces new creatures, characters, and mysteries. With a mix of adventure and magic, Fantastic Beasts 3 expands the wizarding universe.', 'Adventure, Family, Fantasy', 'English', '140 mins', 'PG13 - Some Violence', '../Images/fantastic_beasts_3.jpeg', 'Eddie Redmayne, Jude Law, Johnny Depp', 'David Yates', 'Inactive'),
(94, 'Captain Marvel 2', 'Brie Larson returns as the powerful Carol Danvers in this highly anticipated sequel. Captain Marvel 2 takes audiences on a cosmic adventure as Carol teams up with familiar faces and faces new threats. With thrilling action and a strong female hero, Captain Marvel 2 continues to expand the Marvel Cinematic Universe.', 'Action, Adventure, Sci-Fi', 'English', '130 mins', 'PG13 - Some Violence', '../Images/captain_marvel_2.jpeg', 'Brie Larson, Teyonah Parris', 'Nia DaCosta', 'Inactive'),
(95, 'Fast & Furious 10', 'Buckle up for the tenth installment of the high-octane Fast & Furious franchise. Fast & Furious 10 reunites familiar faces and delivers adrenaline-pumping car chases and explosive action. With a legacy spanning two decades, Fast & Furious 10 is a must-see for fans of the series.', 'Action, Adventure, Crime', 'English', '140 mins', 'PG13 - Some Violence', '../Images/fast_and_furious_10.jpeg', 'Vin Diesel, Michelle Rodriguez, Tyrese Gibson', 'Justin Lin', 'Inactive'),
(96, 'The Little Mermaid', 'Dive into a magical underwater world in this live-action adaptation of The Little Mermaid. Based on the classic fairy tale, The Little Mermaid follows a young mermaid who dreams of exploring the human world. With enchanting music and breathtaking visuals, The Little Mermaid is a timeless story of love and self-discovery.', 'Adventure, Drama, Family', 'English', '120 mins', 'PG', '../Images/little_mermaid.jpeg', 'Halle Bailey, Jonah Hauer-King', 'Rob Marshall', 'Inactive'),
(97, 'Aladdin 2', 'Return to Agrabah in this sequel to the live-action adaptation of Aladdin. Aladdin 2 continues the adventures of Aladdin, Jasmine, and the Genie as they encounter new challenges and uncover secrets of the past. With vibrant musical numbers and a touch of Disney magic, Aladdin 2 is a captivating continuation of the beloved story.', 'Adventure, Family, Fantasy', 'English', '130 mins', 'PG', '../Images/aladdin_2.jpeg', 'Mena Massoud, Naomi Scott, Will Smith', 'Guy Ritchie', 'Inactive'),
(98, 'Avatar 4', 'James Cameron expands the world of Pandora in the fourth installment of the Avatar franchise. Avatar 4 delves deeper into the alien planet and explores new territories and creatures. With groundbreaking visuals and immersive storytelling, Avatar 4 continues to push the boundaries of cinematic technology.', 'Action, Adventure, Fantasy', 'English', '180 mins', 'PG13 - Some Violence', '../Images/avatar_4.jpeg', 'Sam Worthington, Zoe Saldana, Sigourney Weaver', 'James Cameron', 'Inactive'),
(99, 'Sherlock Holmes 3', 'Robert Downey Jr. and Jude Law reunite as the dynamic detective duo in this long-awaited sequel. Sherlock Holmes 3 follows the brilliant detective and his loyal companion as they unravel a new mystery in Victorian London. With sharp wit and thrilling investigations, Sherlock Holmes 3 brings the iconic characters back to the big screen.', 'Action, Adventure, Mystery', 'English', '140 mins', 'PG13 - Some Violence', '../Images/sherlock_holmes_3.jpeg', 'Robert Downey Jr., Jude Law', 'Dexter Fletcher', 'Inactive'),
(100, 'Mission: Impossible 8', 'Tom Cruise returns as Ethan Hunt in the eighth installment of the Mission: Impossible franchise. Packed with thrilling stunts and high-stakes espionage, Mission: Impossible 8 takes the action to new heights. With a star-studded cast and jaw-dropping set pieces, Mission: Impossible 8 is a must-see for fans of the series.', 'Action, Adventure, Thriller', 'English', '150 mins', 'PG13 - Some Violence', '../Images/mission_impossible_8.jpeg', 'Tom Cruise, Rebecca Ferguson, Ving Rhames, Simon Pegg', 'Christopher McQuarrie', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(10) NOT NULL,
  `ticket_price` int(100) NOT NULL,
  `ticket_cust_profile` varchar(100) NOT NULL,
  `ticket_status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `ticket_price`, `ticket_cust_profile`, `ticket_status`) VALUES
(1, 5, 'Senior Citizen(Above 65yo)', 'Active'),
(2, 7, 'Student', 'Active'),
(3, 4, 'Child(Below 8yo)', 'Active'),
(4, 12, 'Adult', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `ticketbooked`
--

CREATE TABLE `ticketbooked` (
  `ticketBooked_id` int(10) NOT NULL,
  `ticketQuantity` int(10) NOT NULL,
  `ticket_id` int(10) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticketbooked`
--

INSERT INTO `ticketbooked` (`ticketBooked_id`, `ticketQuantity`, `ticket_id`, `booking_id`) VALUES
(1, 1, 2, 1),
(2, 1, 2, 1),
(3, 1, 2, 2),
(4, 1, 1, 5),
(5, 1, 1, 8),
(6, 1, 1, 12),
(7, 1, 1, 16),
(8, 1, 1, 20),
(9, 1, 1, 22),
(10, 1, 1, 26),
(11, 1, 1, 30),
(12, 1, 1, 34),
(13, 1, 1, 38),
(14, 1, 1, 42),
(15, 1, 1, 46),
(16, 1, 1, 50),
(17, 1, 1, 55),
(18, 1, 1, 59),
(19, 1, 1, 63),
(20, 1, 1, 67),
(21, 1, 1, 71),
(22, 1, 1, 75),
(23, 1, 1, 79),
(24, 1, 1, 81),
(25, 1, 1, 85),
(26, 1, 1, 89),
(27, 1, 1, 93),
(28, 1, 1, 97),
(29, 1, 2, 1),
(30, 1, 2, 2),
(31, 1, 2, 3),
(32, 1, 2, 4),
(33, 1, 2, 9),
(34, 1, 2, 13),
(35, 1, 2, 17),
(36, 1, 2, 21),
(37, 1, 2, 23),
(38, 1, 2, 27),
(39, 1, 2, 31),
(40, 1, 2, 35),
(41, 1, 2, 39),
(42, 1, 2, 43),
(43, 1, 2, 47),
(44, 1, 2, 51),
(45, 1, 2, 56),
(46, 1, 2, 60),
(47, 1, 2, 64),
(48, 1, 2, 68),
(49, 1, 2, 72),
(50, 1, 2, 76),
(51, 1, 2, 80),
(52, 1, 2, 82),
(53, 1, 2, 86),
(54, 1, 2, 90),
(55, 1, 2, 94),
(56, 1, 2, 98),
(57, 1, 3, 6),
(58, 1, 3, 10),
(59, 1, 3, 14),
(60, 1, 3, 18),
(61, 1, 3, 24),
(62, 1, 3, 28),
(63, 1, 3, 32),
(64, 1, 3, 36),
(65, 1, 3, 40),
(66, 1, 3, 44),
(67, 1, 3, 48),
(68, 1, 3, 52),
(69, 1, 3, 57),
(70, 1, 3, 61),
(71, 1, 3, 65),
(72, 1, 3, 69),
(73, 1, 3, 73),
(74, 1, 3, 77),
(75, 1, 3, 83),
(76, 1, 3, 87),
(77, 1, 3, 91),
(78, 1, 3, 95),
(79, 1, 3, 99),
(80, 1, 4, 7),
(81, 1, 4, 11),
(82, 1, 4, 15),
(83, 1, 4, 19),
(84, 1, 4, 25),
(85, 1, 4, 29),
(86, 1, 4, 33),
(87, 1, 4, 37),
(88, 1, 4, 41),
(89, 1, 4, 45),
(90, 1, 4, 49),
(91, 1, 4, 53),
(92, 1, 4, 54),
(93, 1, 4, 58),
(94, 1, 4, 62),
(95, 1, 4, 66),
(96, 1, 4, 70),
(97, 1, 4, 74),
(98, 1, 4, 78),
(99, 1, 4, 84),
(100, 1, 4, 88),
(101, 1, 4, 92),
(102, 1, 4, 96),
(103, 1, 4, 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cust_profile` varchar(50) NOT NULL,
  `user_profile` varchar(100) NOT NULL DEFAULT 'Customer',
  `login_date` date NOT NULL,
  `user_status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `cust_profile`, `user_profile`, `login_date`, `user_status`) VALUES
(1, 'cinemaManager', 'cinemaManager@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Cinema Manager', '2023-05-20', 'Active'),
(2, 'cinemaOwner', 'cinemaOwner@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Cinema Owner', '2023-05-20', 'Active'),
(3, 'userAdmin', 'userAdmin@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'User Admin', '2023-05-21', 'Active'),
(4, 'JohnGreen', 'johngreen@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(5, 'JaneDoe', 'janedoe@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(6, 'MarkSmith', 'marksmith@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(7, 'EmilyJohnson', 'emilyjohnson@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(8, 'DavidWilson', 'davidwilson@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(9, 'SarahBrown', 'sarahbrown@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(10, 'MichaelJones', 'michaeljones@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(11, 'JenniferDavis', 'jenniferdavis@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(12, 'ChristopherMoore', 'christophermoore@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(13, 'JessicaTaylor', 'jessicataylor@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(14, 'MatthewAnderson', 'matthewanderson@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(15, 'AmandaThomas', 'amandathomas@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(16, 'DanielLee', 'daniellee@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(17, 'LaurenHarris', 'laurenharris@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(18, 'JamesClark', 'jamesclark@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(19, 'OliviaKing', 'oliviaking@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(20, 'AndrewMiller', 'andrewmiller@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(21, 'SophiaWhite', 'sophiawhite@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(22, 'BenjaminYoung', 'benjaminyoung@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(23, 'GraceHall', 'gracehall@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(24, 'DavidGarcia', 'davidgarcia@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(25, 'ChloeMartinez', 'chloemartinez@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(26, 'DanielRobinson', 'danielrobinson@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(27, 'EmmaLopez', 'emmalopez@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(28, 'AlexanderHernandez', 'alexanderhernandez@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(29, 'MadisonGonzalez', 'madisongonzalez@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(30, 'SebastianPerez', 'sebastianperez@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(31, 'SofiaTorres', 'sofiatorres@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(32, 'RyanRamirez', 'ryanramirez@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(33, 'AvaFlores', 'avaflores@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(34, 'JoseGutierrez', 'josegutierrez@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(35, 'MiaCruz', 'miacruz@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(36, 'NoahSullivan', 'noahsullivan@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(37, 'PenelopeWalker', 'penelopewalker@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(38, 'EthanHill', 'ethanhill@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(39, 'ElizabethBaker', 'elizabethbaker@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(40, 'WilliamPrice', 'williamprice@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(41, 'VictoriaWard', 'victoriaward@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(42, 'AlexanderYoung', 'alexanderyoung@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(43, 'GraceLewis', 'gracelewis@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(44, 'OliverHall', 'oliverhall@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(45, 'CamilaRamirez', 'camilaramirez@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(46, 'HenryParker', 'henryparker@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(47, 'LiamGonzalez', 'liamgonzalez@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(48, 'NatalieTurner', 'natalieturner@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(49, 'SophiaGarcia', 'sophiagarcia@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(50, 'ElijahMartinez', 'elijahmartinez@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(51, 'ScarlettAdams', 'scarlettadams@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(52, 'LoganCook', 'locookgan@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(53, 'LucyHoward', 'lucyhoward@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(54, 'JaydenWard', 'jaydenward@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(55, 'AveryStewart', 'averystewart@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(56, 'CarterMorales', 'cartermorales@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(57, 'GraceAllen', 'graceallen@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(58, 'HenryPowell', 'henrypowell@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(59, 'JuliaCarter', 'juliacarter@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(60, 'GabrielHarris', 'gabrielharris@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(61, 'SofiaJenkins', 'sofiajenkins@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(62, 'JonathanLong', 'jonathanlong@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(63, 'ScarlettFoster', 'scarlettfoster@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(64, 'DanielFlores', 'danielflores@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(65, 'MatthewBell', 'matthewbell@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(66, 'AudreyCruz', 'audreycruz@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(67, 'AndrewBarnes', 'andrewbarnes@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(68, 'EmilySimmons', 'emilysimmons@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(69, 'JackTurner', 'jackturner@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(70, 'OliviaWard', 'oliviaward@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(71, 'LoganAlexander', 'loganalexander@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(72, 'AvaBaker', 'avabaker@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(73, 'SamuelPrice', 'samuelprice@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(74, 'CharlotteFoster', 'charlottefoster@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(75, 'JacksonCruz', 'jacksoncruz@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(76, 'SophiaJenkins', 'sophiajenkins@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(77, 'DanielTurner', 'danielturner@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(78, 'MilaHarris', 'milaharris@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(79, 'HenryBarnes', 'henrybarnes@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(80, 'LiamSimmons', 'liamsimmons@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(81, 'BenjaminAlexander', 'benjaminalexander@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(82, 'ChloeBaker', 'chloebaker@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(83, 'MichaelPrice', 'michaelprice@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(84, 'AbigailFoster', 'abigailfoster@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(85, 'DavidCruz', 'davidcruz@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(86, 'EmilyJenkins', 'emilyjenkins@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(87, 'JamesLong', 'jameslong@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(88, 'MadisonFoster', 'madisonfoster@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(89, 'DanielAdams', 'danieladams@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(90, 'SofiaWard', 'sofiaward@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(91, 'JosephBell', 'josephbell@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(92, 'AvaMorales', 'avamorales@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(93, 'LoganAllen', 'loganallen@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(94, 'OliviaPowell', 'oliviapowell@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(95, 'WilliamCarter', 'williamcarter@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(96, 'SophiaHarris', 'sophiaharris@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(97, 'MasonJenkins', 'masonjenkins@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active'),
(98, 'IsabellaTurner', 'isabellaturner@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-21', 'Active'),
(99, 'EthanAlexander', 'ethanalexander@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-20', 'Active'),
(100, 'MiaBaker', 'miabaker@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Customer', '2023-05-20', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `userProfile_ID` int(10) NOT NULL,
  `upName` varchar(100) NOT NULL,
  `profile_status` varchar(100) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`userProfile_ID`, `upName`, `profile_status`) VALUES
(1, 'Cinema Owner', 'Active'),
(2, 'Cinema Manager', 'Active'),
(3, 'User Admin', 'Active'),
(4, 'Customer', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `userBooked` (`userBooked`),
  ADD KEY `fk_RoomNo` (`roomNo`),
  ADD KEY `fk_movie_id` (`movie_id`),
  ADD KEY `fk_booking_ticket` (`ticket_id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`roomNo`),
  ADD KEY `fk_movieID` (`movie_id`);

--
-- Indexes for table `combobooked`
--
ALTER TABLE `combobooked`
  ADD PRIMARY KEY (`comboBooked_id`),
  ADD KEY `fk_booking_id` (`booking_id`),
  ADD KEY `fk_combo_id` (`combo_id`);

--
-- Indexes for table `fnb`
--
ALTER TABLE `fnb`
  ADD PRIMARY KEY (`comboID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `ticketbooked`
--
ALTER TABLE `ticketbooked`
  ADD PRIMARY KEY (`ticketBooked_id`),
  ADD KEY `fk_ticket_id` (`ticket_id`),
  ADD KEY `fk_ticketbooked_booking` (`booking_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`userProfile_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `roomNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `combobooked`
--
ALTER TABLE `combobooked`
  MODIFY `comboBooked_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `fnb`
--
ALTER TABLE `fnb`
  MODIFY `comboID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ticketbooked`
--
ALTER TABLE `ticketbooked`
  MODIFY `ticketBooked_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `userProfile_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_RoomNo` FOREIGN KEY (`roomNo`) REFERENCES `cinema` (`roomNo`),
  ADD CONSTRAINT `fk_booking_ticket` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`ticket_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_movie_id` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`),
  ADD CONSTRAINT `userBooked` FOREIGN KEY (`userBooked`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `cinema`
--
ALTER TABLE `cinema`
  ADD CONSTRAINT `fk_movieID` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`);

--
-- Constraints for table `combobooked`
--
ALTER TABLE `combobooked`
  ADD CONSTRAINT `fk_booking_id` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`),
  ADD CONSTRAINT `fk_combo_id` FOREIGN KEY (`combo_id`) REFERENCES `fnb` (`comboID`);

--
-- Constraints for table `ticketbooked`
--
ALTER TABLE `ticketbooked`
  ADD CONSTRAINT `fk_ticket_id` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`ticket_id`),
  ADD CONSTRAINT `fk_ticketbooked_booking` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
