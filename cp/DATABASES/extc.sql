-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 01:24 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `extc`
--

-- --------------------------------------------------------

--
-- Table structure for table `extc_colleges`
--

CREATE TABLE `extc_colleges` (
  `ecid` int(20) NOT NULL,
  `ecname` varchar(200) NOT NULL,
  `hsc` float NOT NULL,
  `jee` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extc_colleges`
--

INSERT INTO `extc_colleges` (`ecid`, `ecname`, `hsc`, `jee`) VALUES
(1, 'extc test 1', 22, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `extc_colleges`
--
ALTER TABLE `extc_colleges`
  ADD PRIMARY KEY (`ecid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `extc_colleges`
--
ALTER TABLE `extc_colleges`
  MODIFY `ecid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
