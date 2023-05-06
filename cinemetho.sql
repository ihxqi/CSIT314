-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 07:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemetho`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ticket_id` int(11) NOT NULL,
  `noOfTicket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `roomNo` int(11) NOT NULL,
  `cinema_avail` varchar(3) NOT NULL,
  `numOfSeats` int(50) NOT NULL,
  `seat_type` varchar(11) NOT NULL,
  `seat_price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loyaltypt`
--

CREATE TABLE `loyaltypt` (
  `LoyaltyPointID` int(11) NOT NULL,
  `LPamount` int(11) NOT NULL,
  `LPrewards` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `MovieID` int(10) NOT NULL,
  `MovieTitle` varchar(200) NOT NULL,
  `MovieDescription` varchar(500) NOT NULL,
  `MovieGenre` varchar(100) NOT NULL,
  `MovieLanguage` varchar(100) NOT NULL,
  `MovieDuration` varchar(50) NOT NULL,
  `MovieShowtime` varchar(100) NOT NULL,
  `MovieDate` date NOT NULL,
  `MPARating` varchar(20) NOT NULL,
  `MovieImage` varchar(200) NOT NULL,
  `MovieAction` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`MovieID`, `MovieTitle`, `MovieDescription`, `MovieGenre`, `MovieLanguage`, `MovieDuration`, `MovieShowtime`, `MovieDate`, `MPARating`, `MovieImage`, `MovieAction`) VALUES
(1, 'Dungeons & Dragons (English Sub) PG13', 'A charming thief and a band of unlikely adventurers undertake an epic heist to retrieve a lost relic, but things go dangerously awry when they run afoul of the wrong people. Dungeons & Dragons: Honor Among Thieves brings the rich world and playful spirit of the legendary roleplaying game to the big screen in a hilarious and action-packed adventure.', 'Action, Fantasy', 'English', '134 mins', '', '0000-00-00', 'PG13 - Some Violence', 'image/dnd.jpeg', 0),
(2, 'John Wick: Chapter 4', 'John Wick (Keanu Reeves) uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.', 'Action', 'English', '170 mins', '', '0000-00-00', 'M18 - Violence', 'image/johnwick4.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `payment_mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `report_name` varchar(100) NOT NULL,
  `report_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `profile`, `user_type`) VALUES
(2, 'Adam123', 'adam123@gmail.com', 'adam123', 'Student', 'user'),
(3, 'test3', 'test3@gmail.com', '202cb962ac59075b964b07152d234b70', 'Adult', 'user'),
(4, 'test2', 'test2@gmail.com', '202cb962ac59075b964b07152d234b70', 'Adult', 'user'),
(5, 'test11', 'test11@gmail.com', '202cb962ac59075b964b07152d234b70', 'Adult', 'user'),
(6, 'elaine', 'elaine@gmail.com', '202cb962ac59075b964b07152d234b70', 'Adult', 'user'),
(12, 'cinemaManager', 'staff1@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'cinemaManager'),
(13, 'reportManager', 'staff2@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'reportManager'),
(14, 'helpme', 'help@gmail.com', '202cb962ac59075b964b07152d234b70', 'Adult', 'user'),
(15, 'gg123', 'gg123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Adult', 'user'),
(16, 'test23', 'test23@gmail.com', '202cb962ac59075b964b07152d234b70', 'Adult', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`roomNo`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`MovieID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `roomNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `MovieID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
