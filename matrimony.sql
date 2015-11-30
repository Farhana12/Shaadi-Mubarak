-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2015 at 10:32 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`sno` int(10) NOT NULL,
  `matri_id` varchar(20) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `caste` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `language` varchar(30) NOT NULL,
  `education` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sno`, `matri_id`, `fname`, `lname`, `gender`, `age`, `caste`, `dob`, `religion`, `language`, `education`, `phone`, `email`, `password`, `photo`, `status`) VALUES
(1, 'REG1501', 'Keerthi', 'K', 'Bride', '23', 'vanniyar', '', 'Hindu', 'Tamil', 'Engineer', '9500590713', 'k@gmail.com', '123456', '', 1),
(2, 'REG1502', 'Abinaya', 'V', 'Bride', '21', 'vanniyar', '', 'Hindu', 'Tamil', 'IAS', '9443563358', 'a@gmail.com', '123456', '', 1),
(3, 'REG1503', 'Gowshik', 'K', 'Groom', '25', 'vanniyar', '', 'Hindu', 'Tamil', 'Engineer', '9500590713', 'g@gmail.com', '123456', '', 1),
(4, 'REG1504', 'Selva', 'K', 'Groom', '27', 'Naidu', '', 'Hindu', 'Tamil', 'IAS', '9487141776', 's@gmail.com', '123456', '', 1),
(8, 'REG1508', 'Tamil', 'Ellakiya', 'Bride', '25', 'Vanniyar', '', 'Hindu', 'Tamil', 'Engineer', '9500590713', 't@gmail.com', '12345', 'images/bride.jpg', 1),
(9, 'REG1509', 'Keerthi', 'K', '', '22', 'vanniyar', '', 'Hindu', 'Tamil', 'Medicine', '9443563358', 'arul@gmail.com', 'qwerty', 'images/6 (2).jpg', 1),
(11, 'REG15010', 'Archana', 'A', 'Bride', '25', 'Mudaliyar', '', 'Hindu', 'Malayalam', 'IAS', '9944478491', 'archana@gmail.com', '123456', 'images/4.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
