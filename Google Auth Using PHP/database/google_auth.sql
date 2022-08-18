-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 03:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `googleauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `google_auth`
--

CREATE TABLE `google_auth` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_lname` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `googlecode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `google_auth`
--

INSERT INTO `google_auth` (`user_id`, `user_fname`, `user_lname`, `user_email`, `username`, `password`, `googlecode`) VALUES
(1, 'Naseeb', 'Ahmed Mian', 'naseebahmed7263@gmail.com', 'naseebyt', '21232f297a57a5a743894a0e4a801fc3', 'NDHFWWTEDSHYUOL7'),
(2, 'Final', 'Test', 'finaltest@admin.com', 'final', '21232f297a57a5a743894a0e4a801fc3', 'W3CDYSAETL3KH7KE'),
(3, 'Death', 'Note', 'deathnote@abc.com', 'deathnote', '674f3c2c1a8a6f90461e8a66fb5550ba', 'BQYC7ENP4XU5DUID'),
(4, 'asd', 'asd', 'sadsad@xyz.com', 'saasf', '21232f297a57a5a743894a0e4a801fc3', 'TK3KZXH7EXBRZ4OP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `google_auth`
--
ALTER TABLE `google_auth`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `google_auth`
--
ALTER TABLE `google_auth`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
