-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2016 at 07:04 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `judgetable`
--

CREATE TABLE IF NOT EXISTS `judgetable` (
  `ID` bigint(20) NOT NULL,
  `judgeNo` bigint(20) DEFAULT NULL,
  `Lang` varchar(200) DEFAULT NULL,
  `FileName` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judgetable`
--

INSERT INTO `judgetable` (`ID`, `judgeNo`, `Lang`, `FileName`) VALUES
(1, 2, 'C++', 'code.cpp'),
(2, 2, 'C++', 'code.cpp'),
(3, 2, 'C++', 'code.cpp'),
(4, 2, 'C++', 'code.cpp'),
(5, 2, 'C++', 'code.cpp'),
(7, 1, 'C++', 'code.cpp'),
(8, 1, 'C++', 'code.cpp'),
(9, 1, 'C++', 'code.cpp'),
(10, 1, 'C++', 'code.cpp'),
(12, 1, 'C', 'code.c'),
(13, 1, 'C++', 'code.cpp'),
(14, 1, 'C', 'code.c'),
(15, 2, 'C', 'code.c');

-- --------------------------------------------------------

--
-- Table structure for table `submitteddata`
--

CREATE TABLE IF NOT EXISTS `submitteddata` (
  `ID` bigint(20) NOT NULL,
  `submitTime` varchar(200) DEFAULT NULL,
  `userName` varchar(200) DEFAULT NULL,
  `Problem` varchar(200) DEFAULT NULL,
  `Lang` varchar(200) DEFAULT NULL,
  `Verdict` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submitteddata`
--

INSERT INTO `submitteddata` (`ID`, `submitTime`, `userName`, `Problem`, `Lang`, `Verdict`) VALUES
(1, '2016-03-27 23:12:04', 'user1', 'Problem D', 'C++', 'Accepted'),
(2, '2016-03-27 23:13:01', 'user1', 'Problem E', 'C++', 'Wrong Answer'),
(3, '2016-03-27 23:20:23', 'user1', 'Problem E', 'C++', 'Wrong Answer'),
(4, '2016-03-27 23:22:47', 'user1', 'Problem E', 'C++', 'Accepted'),
(5, '2016-03-27 23:23:25', 'user1', 'Problem F', 'C++', 'Accepted'),
(7, '2016-03-27 23:27:10', 'user1', 'Problem A', 'C++', 'Accepted'),
(8, '2016-03-27 23:27:44', 'user1', 'Problem B', 'C++', 'Accepted'),
(9, '2016-03-27 23:28:15', 'user1', 'Problem C', 'C++', 'Accepted'),
(10, '2016-03-27 23:29:11', 'user1', 'Problem C', 'C++', 'Accepted'),
(12, '2016-03-27 23:32:48', 'user1', 'Problem C', 'C', 'Accepted'),
(13, '2016-03-27 23:40:53', 'user1', 'Problem C', 'C++', 'Wrong Answer'),
(14, '2016-03-27 23:41:17', 'user1', 'Problem C', 'C', 'Wrong Answer'),
(15, '2016-03-27 23:42:34', 'user1', 'Problem F', 'C', 'Wrong Answer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `teacher` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `userName`, `Password`, `teacher`) VALUES
(1, 'admin', 'admin', 2),
(2, 'user1', 'user1', 0),
(3, 'user2', 'user2', 0),
(4, 'user3', 'user3', 0),
(5, 'user4', 'user4', 0),
(6, 'user5', 'user5', 0),
(7, 'user6', 'user6', 0),
(8, 'user7', 'user7', 0),
(9, 'Judge1', 'Judge1', 1),
(10, 'Judge2', 'Judge2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `judgetable`
--
ALTER TABLE `judgetable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `submitteddata`
--
ALTER TABLE `submitteddata`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `submitteddata`
--
ALTER TABLE `submitteddata`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
