-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 01:23 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comps`
--

-- --------------------------------------------------------

--
-- Table structure for table `comps_colleges`
--

CREATE TABLE `comps_colleges` (
  `ccid` int(20) NOT NULL,
  `ccname` varchar(200) NOT NULL,
  `hsc` float NOT NULL,
  `jee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comps_colleges`
--

INSERT INTO `comps_colleges` (`ccid`, `ccname`, `hsc`, `jee`) VALUES
(1, 'testcollege', 30, 50),
(2, 'comps test 1', 99, 99),
(3, 'comps test 2', 20, 20),
(4, 'comps test 5', 50, 96);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comps_colleges`
--
ALTER TABLE `comps_colleges`
  ADD PRIMARY KEY (`ccid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comps_colleges`
--
ALTER TABLE `comps_colleges`
  MODIFY `ccid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
