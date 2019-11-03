-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2016 at 06:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieticketbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `theatre_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `seats` varchar(15) NOT NULL,
  `amount` int(11) NOT NULL,
  `time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `theatre_id`, `movie_id`, `seats`, `amount`, `time`) VALUES
(7, 15, 1, 1, '2,3,4', 300, 1),
(8, 16, 1, 1, '74,75', 200, 1),
(9, 17, 1, 1, '71,72,70', 300, 1),
(11, 19, 1, 1, '8,9', 200, 1),
(12, 20, 1, 1, '16,17', 200, 1),
(13, 21, 1, 1, '11,12', 200, 1),
(14, 22, 1, 1, '26,27', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `synopsis` varchar(100) NOT NULL,
  `formats` varchar(30) NOT NULL,
  `lang` varchar(10) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `name`, `genre`, `synopsis`, `formats`, `lang`, `image`) VALUES
(1, 'flying jatt', 'comedy', 'superhero story', '2D,3D', 'hindi', 'flyingjatt.jpg'),
(2, 'Fan', 'thriller', 'fan becomes enemy', '2D', 'hindi', 'Fan.jpg'),
(3, 'Baar baar dekho', 'Romance/Drama', 'What would you do if you could see the future of your relationship? Look out for the test of time!', '2D ', 'Hindi', 'Baarbaardekho.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `booking_id` int(11) NOT NULL,
  `card_no` int(11) NOT NULL,
  `card_name` varchar(30) NOT NULL,
  `expiry_month` int(11) NOT NULL,
  `expiry_year` int(11) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`booking_id`, `card_no`, `card_name`, `expiry_month`, `expiry_year`, `cvv`) VALUES
(7, 123, 'Sagar prabhu', 1, 13, 123),
(8, 123, 'Sagar prabhu', 1, 13, 123),
(9, 123, 'Sagar prabhu', 1, 13, 123),
(11, 123, 'yash shah', 1, 13, 123),
(12, 123, 'Sagar prabhu', 1, 13, 123),
(13, 123, 'Sagar prabhu', 1, 13, 123),
(14, 123, 'Sagar prabhu', 1, 13, 123);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `stars` int(11) NOT NULL,
  `text` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `theatre_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`theatre_id`, `name`, `address`, `phone`, `image`) VALUES
(1, 'carnival cinemas kandivali', 'kandivali(E),mumbai.', 2677779, 'carnival_kan.png'),
(2, 'carnival cinemas andheri', 'andheri(E),mumbai.', 287002233, 'carnival_an.png');

-- --------------------------------------------------------

--
-- Table structure for table `theatre_movie`
--

CREATE TABLE `theatre_movie` (
  `id` int(11) NOT NULL,
  `theatre_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `time` int(11) NOT NULL DEFAULT '1',
  `seats` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatre_movie`
--

INSERT INTO `theatre_movie` (`id`, `theatre_id`, `movie_id`, `time`, `seats`) VALUES
(1, 1, 1, 1, '[11,16]'),
(2, 1, 2, 2, '[3,11,34]'),
(3, 2, 1, 1, '[2,3]'),
(4, 2, 3, 2, '[45]'),
(5, 1, 3, 3, '[22,33]');

-- --------------------------------------------------------

--
-- Table structure for table `unreg_user`
--

CREATE TABLE `unreg_user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unreg_user`
--

INSERT INTO `unreg_user` (`user_id`, `fname`, `lname`, `email`) VALUES
(20, 'sagar', 'prabhu', 'sagarprabhu3@gmail.com'),
(21, 'sagar', 'prabhu', 'sagarprabhu3@gmail.com'),
(22, 'sagar', 'prabhu', 'sagarprabhu3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `logged` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `phone`, `email`, `pass`, `logged`) VALUES
(1, 'sagar', 'prabhu', 879555, 'sam123@gmail.com', 'sam123', 1),
(2, 'yash', 'shah', 996824661, 'yashshah123@gmail.com', 'yashshah123', 0),
(4, 'rohan', 'sheth', 88916733, 'rohan123@gmail.com', 'rohan123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`user_id`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`theatre_id`);

--
-- Indexes for table `theatre_movie`
--
ALTER TABLE `theatre_movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theatre_id` (`theatre_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `unreg_user`
--
ALTER TABLE `unreg_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `theatre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `theatre_movie`
--
ALTER TABLE `theatre_movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `unreg_user`
--
ALTER TABLE `unreg_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`),
  ADD CONSTRAINT `review_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `theatre_movie`
--
ALTER TABLE `theatre_movie`
  ADD CONSTRAINT `theatre_movie_ibfk_1` FOREIGN KEY (`theatre_id`) REFERENCES `theatre` (`theatre_id`),
  ADD CONSTRAINT `theatre_movie_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
