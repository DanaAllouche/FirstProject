-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 06:42 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `b_id` varchar(255) NOT NULL,
  `booksname` varchar(50) NOT NULL,
  `authorname` varchar(50) NOT NULL,
  `copies` varchar(20) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `booksname`, `authorname`, `copies`, `file_name`, `path`) VALUES
('CSCI50', 'Programming', 'mhanna author', '12', 'CSCI50.pdf', 'ebooks/CSCI50.pdf'),
('CSCI02', 'Business', 'Test Author', '12', 'CSCI02.pdf', 'ebooks/CSCI02.pdf'),
('CSCI03', 'MIS', 'Test Author', '12', 'CSCI03.pdf', 'ebooks/CSCI03.pdf'),
('CSCI31', 'Java', 'Test Author', '12', 'CSCI31.pdf', 'ebooks/CSCI31.pdf'),
('BIO005', 'BIO', 'Test Author4', '12', 'BIO005.pdf', 'ebooks/BIO005.pdf'),
('BIO006', 'BIO', 'Test Author', '12', 'BIO006.pdf', 'ebooks/BIO006.pdf'),
('PHY008', 'PHY', 'Test Author 2', '10', 'PHY008.pdf', 'ebooks/PHY008.pdf'),
('CSCI09', 'Culture', 'hima haj', '12', 'CSCI09.pdf', 'ebooks/CSCI09.pdf'),
('BIO010', 'BIO', 'Test Author', '10', 'BIO010.pdf', 'ebooks/BIO010.pdf'),
('BIO013', 'BIO', 'Test Author 3', '12', 'BIO013.pdf', 'ebooks/BIO013.pdf'),
('PHY001', 'PHY', 'Test Author 01', '12', 'PHY001.pdf', 'ebooks/PHY001.pdf'),
('CSCI4', 'Java', 'Test Author', '12', 'CSCI4.pdf', 'ebooks/CSCI4.pdf'),
('CSCI40', 'Java', 'Test Author 5', '12', 'CSCI40.pdf', 'ebooks/CSCI40.pdf'),
('MEC55', 'MEC', 'Test Author', '10', 'MEC55.pdf', 'ebooks/MEC55.pdf'),
('CSCI3', 'OOP', 'mhanna AL', '10', 'CSCI3.pdf', 'ebooks/CSCI3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student_book`
--

CREATE TABLE `student_book` (
  `emailid` varchar(200) NOT NULL,
  `book_1_id` varchar(100) NOT NULL,
  `book_1` varchar(100) NOT NULL,
  `recive_date_1` varchar(100) NOT NULL,
  `submisson_date_1` varchar(100) NOT NULL,
  `book_2_id` varchar(100) DEFAULT NULL,
  `book_2` varchar(100) DEFAULT NULL,
  `recive_date_2` varchar(100) DEFAULT NULL,
  `submisson_date_2` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_book`
--

INSERT INTO `student_book` (`emailid`, `book_1_id`, `book_1`, `recive_date_1`, `submisson_date_1`, `book_2_id`, `book_2`, `recive_date_2`, `submisson_date_2`) VALUES
('lama@gmail.com', 'CSCI250', 'Programming', '6-04-2021', '21-04-2021', 'CSCI300', 'Java', '6-04-2021', '21-04-2021'),
('rewa@gmail.com', 'CSCI300', 'Java', '30-09-2021', '', 'CSCI350', 'Programming', '30-09-2021', NULL),
('marita@gmail.com', 'CSCI400', 'OOP', '19-04-2021', '30-04-2021', 'CSCI300', 'Java', '19-04-2021', '30-04-2021'),
('mariam@gmail.com', 'CSCI50', 'Programming', '18-01-2021', '', 'CSCI50', 'Programming', '18-01-2021', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'student',
  `gender` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `roll`, `type`, `gender`, `name`, `emailid`, `password`) VALUES
(1, '00100', 'admin', 'f', 'dana', 'dana@gmail.com', 'dana1'),
(2, '1110011', 'admin', 'm', 'fadi', 'fadi@gmail.com', 'fadi'),
(3, '1110012', 'student', 'f', 'lama', 'lama@gmail.com', 'lama'),
(4, '1110013', 'student', 'f', 'rewa haj', 'rewa@gmail.com', 'rewa123'),
(5, '1110014', 'student', 'm', 'ahmad mm', 'ahmad@gmail.com', 'ahmad123'),
(6, '1110015', 'student', 'm', 'jad all', 'jad@gmail.com', '123'),
(7, '1110016', 'student', 'm', 'jihad as', 'jihad@gmail.com', 'jihad123'),
(8, '1110017', 'student', 'f', 'marita ami', 'marita@gmail.com', '123'),
(9, '1110018', 'student', 'f', 'jani ar', 'jani@gmail.com', 'jani123'),
(10, '1110019', 'student', 'm', 'assi hr', 'assi@gmail.com', 'assi123'),
(11, '1110010', 'student', 'f', 'mariam', 'mariam@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `b_id` (`b_id`);

--
-- Indexes for table `student_book`
--
ALTER TABLE `student_book`
  ADD PRIMARY KEY (`emailid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
