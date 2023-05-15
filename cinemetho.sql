-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 03:17 PM
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
-- Database: `cinemetho`
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
  `roomNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `userBooked`, `QRCode`, `bookingDate`, `seatNo`, `roomNo`) VALUES
(1, 26, '../Images/Scantopay.png', '2023-05-09', 1, 1),
(2, 26, '../Images/Scantopay.png', '2023-05-01', 3, 2),
(3, 26, '../Images/Scantopay.png', '2023-05-01', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `roomNo` int(11) NOT NULL,
  `roomCapacity` varchar(3) NOT NULL,
  `movieShowtime` varchar(11) NOT NULL,
  `roomStatus` varchar(100) NOT NULL,
  `movieShowDate` date NOT NULL,
  `movie_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`roomNo`, `roomCapacity`, `movieShowtime`, `roomStatus`, `movieShowDate`, `movie_id`) VALUES
(1, '40', '7pm', 'Active', '2023-05-09', 1),
(2, '30', '6pm', 'Active', '2023-05-01', 2);

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
(3, 1, 1, 2);

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
  `comboStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fnb`
--

INSERT INTO `fnb` (`comboID`, `comboName`, `comboImg`, `comboPrice`, `comboQuantity`, `comboStatus`) VALUES
(1, 'Combo A: Finger Snacks', '../cinemetho/Images/combo1.jpg', 14, 50, 'Active'),
(2, 'Combo B: Couple snacks', '../cinemetho/Images/combo2.jpg', 30, 20, 'Active'),
(3, 'Combo C: Popcorns\r\n\r\n', '../cinemetho/Images/combo3.jpg', 10, 30, 'Active');

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
(1, 'Dungeons & Dragons (English Sub) PG13', 'A charming thief and a band of unlikely adventurers undertake an epic heist to retrieve a lost relic, but things go dangerously awry when they run afoul of the wrong people. Dungeons & Dragons: Honor Among Thieves brings the rich world and playful spirit of the legendary roleplaying game to the big screen in a hilarious and action-packed adventure.', 'Action, Fantasy', 'English', '134 mins', 'PG13 - Some Violence', '../Images/dnd.jpeg', 'Chris Pine, Hugh Grant, Michelle Rodriguez, Sophia Lillis , Justice Smith, Rege- Jean Page', 'Jonathan M. Goldstein, John Francis Daley', 'Active'),
(2, 'John Wick: Chapter 4', 'John Wick (Keanu Reeves) uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.', 'Action', 'English', '170 mins', 'M18 - Violence', '../Images/johnwick4.jpeg', 'Donnie Yen , Scott Adkins, Keanu Reeves, Laurence Fishburne , Bill Skarsgard, Lance Reddick, Hiroyuki Sanada', 'Chad Stahelski', 'Active'),
(3, 'The Super Mario Bros. Movie&#40;English Sub&#41;', 'From Nintendo and Illumination comes a new animated film based on the world of Super Mario Bros.', 'Animation', 'English', '92 mins', 'PG', '../Images/mario.jpeg', 'Jack Black, Seth Rogen, Chris Pratt, Keegan Michael Key, Charlie Day , Anya Taylor-Joy, Michael Jelenic, Fred Armisen, Kevin Michael Richardson, Sebastian Maniscalco', 'Aaron Horvath', 'Active'),
(4, 'Suzume', 'As the skies turn red and the planet trembles, Japan stands on the brink of disaster. However, a determined teenager named Suzume sets out on a mission to save her country. Able to see supernatural forces that others cannot, it\'s up to her to close the mysterious doors that are spreading chaos across the land. A perilous journey awaits as the fate of Japan rests on her shoulders.', 'Anime', 'Japanese', '122 mins', 'PG', '../Images/suzume.jpeg', 'Nanoka Hara, Hokuto Matsumura, Eri Fukatsu', 'Makoto Shinkai', 'Active'),
(5, 'Renfield', 'Evil doesn\'t span eternity without a little help.\r\n\r\nIn this modern monster tale of Dracula\'s loyal servant, Nicholas Hoult stars as Renfield, the tortured aide to history\'s most narcissistic boss, Dracula. Renfield is forced to procure his master\'s prey and do his every bidding, no matter how debased. But now, after centuries of servitude, Renfield is ready to see if there\'s a life outside the shadow of The Prince of Darkness. If only he can figure out how to end his codependency.', 'Comedy', 'English', '93 mins', 'M18 - Violence and Gore', '../Images/renfield.jpeg', 'Nicholas Hoult, Nicolas Cage, Awkwafina, Ben Schwartz, Adrian Martinez', 'Chris McKay', 'Active'),
(6, 'Guardians of the Galaxy Vol. 3', 'In Marvel Studios \"Guardians of the Galaxy Vol. 3\" our beloved band of misfits are looking a bit different these days. Peter Quill, still reeling from the loss of Gamora, must rally his team around him to defend the universe along with protecting one of their own. A mission that, if not completed successfully, could quite possibly lead to the end of the Guardians as we know them.', 'Sci-Fi', 'English', '150 mins', 'PG13 - Some Violence and Coarse Language', '../Images/gotg3.jpeg', 'Bradley Cooper, Vin Diesel, Zoe Saldana, Chris Pratt, Dave Bautista , Karen Gillan', 'James Gunn', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(10) NOT NULL,
  `ticket_price` int(100) NOT NULL,
  `ticket_cust_profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `ticket_price`, `ticket_cust_profile`) VALUES
(1, 5, 'Senior Citizen(Above 65yo)'),
(2, 7, 'Student'),
(3, 4, '	\r\nChild(Below 8yo)'),
(4, 12, '	\r\nAdult');

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
(3, 1, 2, 2);

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
(12, 'cinemaManager', 'cinemaManager@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Cinema Manager', '2023-05-07', 'Active'),
(13, 'cinemaOwner', 'cinemaOwner@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'Cinema Owner', '2023-05-07', 'Active'),
(17, 'userAdmin', 'userAdmin@gmail.com', '1253208465b1efa876f982d8a9e73eef', '', 'User Admin', '2023-05-07', 'Active'),
(26, 'JohnGreen', 'johngreen@gmail.com', '792a62cd83eb4226d2564062e0c17697', 'Student', 'Customer', '2023-05-07', 'Active'),
(27, 'AdamWhite', 'adamwhite123@gmail.com', 'a1Bz20ydqelm8m1wql8e4736afc2dc319d59c2cbd5e64c21b6', 'Senior Citizen(Above 65yo)', 'Customer', '2023-05-07', 'Active'),
(28, 'Lisa1234', 'lisa1234@hotmail.com', '77424d0dd227f0ef8eecb54da4252be8', 'Child(Below 8yo)', 'Customer', '2023-05-07', 'Active'),
(29, 'Mary00', 'mary00@gmail.com', 'a1Bz20ydqelm8m1wql81dc9bdb52d04dc20036dbd8313ed055', 'Adult', 'User Admin', '2023-05-07', 'Active'),
(30, 'Mary01', 'mary01@gmail.com', '94cfc6afee347a9aa2bde465402f8a79', 'Adult', 'Customer', '2023-05-07', 'Active'),
(37, 'test2', 'test2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Adult', 'Customer', '0000-00-00', 'Active'),
(45, 'cinemaOwner1', 'cinemaOwner1@gmail.com', 'a1Bz20ydqelm8m1wql760c0d63da5d52af25d1c6175b094ae7', '', 'Cinema Owner', '0000-00-00', 'Active'),
(46, 'cinemaManager123', 'cinemaManager12@gmail.com', 'a1Bz20ydqelm8m1wql760c0d63da5d52af25d1c6175b094ae7', '', 'Cinema Manager', '0000-00-00', 'Active'),
(47, 'useradmin22', 'useradmin2@gmail.com', 'a1Bz20ydqelm8m1wqlec6a6536ca304edf844d1d248a4f08dc', '', 'User Admin', '0000-00-00', 'Active'),
(48, 'cinemaOwner123', 'cinemaOwner123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Cinema Owner', '0000-00-00', 'Active'),
(49, 'cinemaManager1234', 'cinemaManager1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Cinema Manager', '0000-00-00', 'Active'),
(50, 'bbt1234', 'bbt123@gmail.com', 'a1Bz20ydqelm8m1wql81dc9bdb52d04dc20036dbd8313ed055', '', 'User Admin', '0000-00-00', 'Active'),
(51, 'testCinemaManager', 'testCinemaManager1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Cinema Manager', '0000-00-00', 'Active');

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
(2, 'Cinema Manager1', 'Active'),
(3, 'User Admin', 'Active'),
(4, 'Customer', 'Active'),
(5, 'test', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `userBooked` (`userBooked`),
  ADD KEY `fk_RoomNo` (`roomNo`);

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
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `roomNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `combobooked`
--
ALTER TABLE `combobooked`
  MODIFY `comboBooked_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fnb`
--
ALTER TABLE `fnb`
  MODIFY `comboID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticketbooked`
--
ALTER TABLE `ticketbooked`
  MODIFY `ticketBooked_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `userProfile_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_RoomNo` FOREIGN KEY (`roomNo`) REFERENCES `cinema` (`roomNo`),
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
  ADD CONSTRAINT `fk_combo_id` FOREIGN KEY (`combo_id`) REFERENCES `fnb` (`ComboID`);

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
