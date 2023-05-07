-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 10:56 AM
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
  `MPARating` varchar(50) NOT NULL,
  `MovieImage` varchar(200) NOT NULL,
  `MovieCast` varchar(200) NOT NULL,
  `MovieDirector` varchar(100) NOT NULL,
  `MovieAction` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`MovieID`, `MovieTitle`, `MovieDescription`, `MovieGenre`, `MovieLanguage`, `MovieDuration`, `MovieShowtime`, `MovieDate`, `MPARating`, `MovieImage`, `MovieCast`, `MovieDirector`, `MovieAction`) VALUES
(1, 'Dungeons & Dragons (English Sub) PG13', 'A charming thief and a band of unlikely adventurers undertake an epic heist to retrieve a lost relic, but things go dangerously awry when they run afoul of the wrong people. Dungeons & Dragons: Honor Among Thieves brings the rich world and playful spirit of the legendary roleplaying game to the big screen in a hilarious and action-packed adventure.', 'Action, Fantasy', 'English', '134 mins', '7pm- 9pm', '2023-05-08', 'PG13 - Some Violence', '../image/dnd.jpeg', 'Chris Pine, Hugh Grant, Michelle Rodriguez, Sophia Lillis , Justice Smith, Rege- Jean Page', 'Jonathan M. Goldstein, John Francis Daley', 0),
(2, 'John Wick: Chapter 4', 'John Wick (Keanu Reeves) uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.', 'Action', 'English', '170 mins', '5pm-7pm', '2023-05-08', 'M18 - Violence', '../image/johnwick4.jpeg', '', '', 0),
(3, 'The Super Mario Bros. Movie&#40;English Sub&#41;', 'From Nintendo and Illumination comes a new animated film based on the world of Super Mario Bros.', 'Animation', 'English', '92 mins', '1pm-3pm', '2023-05-08', 'PG', '../image/mario.jpeg', '', '', 0),
(4, 'Suzume', 'As the skies turn red and the planet trembles, Japan stands on the brink of disaster. However, a determined teenager named Suzume sets out on a mission to save her country. Able to see supernatural forces that others cannot, it\'s up to her to close the mysterious doors that are spreading chaos across the land. A perilous journey awaits as the fate of Japan rests on her shoulders.', 'Anime', 'Japanese', '122 mins', '2pm', '2023-05-10', 'PG', '../image/suzume.jpeg', '', '', 0),
(5, 'Renfield', 'Evil doesn\'t span eternity without a little help.\r\n\r\nIn this modern monster tale of Dracula\'s loyal servant, Nicholas Hoult stars as Renfield, the tortured aide to history\'s most narcissistic boss, Dracula. Renfield is forced to procure his master\'s prey and do his every bidding, no matter how debased. But now, after centuries of servitude, Renfield is ready to see if there\'s a life outside the shadow of The Prince of Darkness. If only he can figure out how to end his codependency.', 'Comedy', 'English', '93 mins', '3pm', '2023-05-17', 'M18 - Violence and Gore', '../image/renfield.jpeg', '', '', 0),
(6, 'Guardians of the Galaxy Vol. 3', 'In Marvel Studios \"Guardians of the Galaxy Vol. 3\" our beloved band of misfits are looking a bit different these days. Peter Quill, still reeling from the loss of Gamora, must rally his team around him to defend the universe along with protecting one of their own. A mission that, if not completed successfully, could quite possibly lead to the end of the Guardians as we know them.', 'Sci-Fi', 'English', '150 mins', '5pm', '2023-05-18', 'PG13 - Some Violence and Coarse Language', '../image/gotg3.jpeg', '', '', 0);

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
(13, 'cinemaOwner', 'staff2@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'cinemaOwner'),
(14, 'helpme', 'help@gmail.com', '202cb962ac59075b964b07152d234b70', 'Adult', 'user'),
(15, 'gg123', 'gg123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Adult', 'user'),
(16, 'test23', 'test23@gmail.com', '202cb962ac59075b964b07152d234b70', 'Adult', 'user'),
(17, 'systemAdmin', 'systemAdmin@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'systemAdmin'),
(18, 'JohnGreen', 'johngreen@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Senior', 'user'),
(19, 'Adam', 'adam@gmail.com', '202cb962ac59075b964b07152d234b70', 'Adult', 'user'),
(22, 'alex123', 'alex123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Adult', 'user'),
(23, 'Adam1234', 'adam1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Child', 'user'),
(24, 'sc1234', 'sc1234@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Senior', 'user'),
(25, 'stu123', 'student@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Student', 'user');

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
  MODIFY `MovieID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
