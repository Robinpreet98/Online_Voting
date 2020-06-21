-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2015 at 10:34 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voters`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `fullname`, `gender`, `email`, `contactno`, `address`, `usertype`) VALUES
('balraj', '12', 'balraj singh', 'male', 'balrajwadala1313@gmail.com', '9888041196', 'H.No.114,Raj Avenue near gayatri mandir,Asr.', 'admin'),
('robin', '1234', 'robinpreet singh', 'male', 'robinpreetsingh472@gmail.com', '8437603262', 'H No.83,Village Santu Nangal,P.O.Chetanpura,Asr.', 'admin'),
('vinay', '123', 'vinay aggarwal', 'male', 'vijayagg1993@gmail.com', '8559029830', 'H no.23,Gali no.10 S.U.S. Colony,Asr', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `cand_id` int(6) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `cphoto` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `haddress` varchar(250) NOT NULL,
  `oaddress` varchar(250) NOT NULL,
  `pphoto` varchar(100) NOT NULL,
  `party` varchar(30) NOT NULL,
  `const` int(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `count` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cand_id`, `cname`, `fname`, `cphoto`, `email`, `mob`, `haddress`, `oaddress`, `pphoto`, `party`, `const`, `state`, `count`) VALUES
(1, 'vinay', 'Sh.Guru Parsad', 'images\\candidate\\vinay.jpg', 'vijayagg1993@gmail.com', 8559029830, 'H.No.23,Gali No.10,S.U.S. Colony,Asr.', 'H.No.23,Gali No.10,S.U.S. Colony,Asr.', 'images/party/AAP.jpg', 'AAP', 1239, 'Punjab', 0),
(2, 'Robin', 'S.Jagjit singh', 'images\\candidate\\robin.jpg', 'robinpreetsingh472@gmail.com', 8437603262, 'H.no.83,vill.santu nangal,p.o. chatenpura,Asr', 'H.no.83,vill.santu nangal,p.o. chatenpura,Asr', 'images/party/Congress.jpg', 'Congress', 1241, 'Punjab', 0),
(3, 'Balraj', 'S.Baldev singh', 'images\\candidate\\balraj.jpg', 'balrajwadala1313@gmail.com', 9888041196, 'H.No.114,Raj Avenue near gayatri mandir,Asr.', 'H.No.114,Raj Avenue near gayatri mandir,Asr.', 'images/party/SAD.jpg', 'SAD', 1242, 'Punjab', 0);

-- --------------------------------------------------------

--
-- Table structure for table `constituency`
--

CREATE TABLE IF NOT EXISTS `constituency` (
  `const_id` int(10) NOT NULL,
  `const_name` varchar(150) NOT NULL,
  `population` int(10) NOT NULL,
  `wards` varchar(200) NOT NULL,
  `state` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1245 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constituency`
--

INSERT INTO `constituency` (`const_id`, `const_name`, `population`, `wards`, `state`) VALUES
(1239, 'AAP', 22000, 'ward1', 'Delhi'),
(1240, 'BSP', 20000, 'ward2', 'Uttar Pradesh'),
(1241, 'Congress', 11000, 'ward3', 'Uttaranchal'),
(1242, 'SAD', 10000, 'ward4', 'Punjab'),
(1243, 'BJP', 23000, 'ward5', 'Himachal Pradesh'),
(1244, 'SJP', 21000, 'ward6', 'Uttar Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `const_login`
--

CREATE TABLE IF NOT EXISTS `const_login` (
  `id` int(10) NOT NULL,
  `const_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `off_name` varchar(50) NOT NULL,
  `mob_no` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `const_login`
--

INSERT INTO `const_login` (`id`, `const_id`, `email`, `off_name`, `mob_no`, `password`) VALUES
(1, 1239, 'balrajwadala1313@gmail.com', 'Balraj Singh', 9888041196, '123'),
(2, 1239, 'robinpreetsingh472@gmail.com', 'Robin gill', 8437608262, '123'),
(3, 1239, 'vijayagg1993@gmail.com', 'Vinay', 8559029830, '123');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`email`, `password`, `first_name`, `last_name`, `mobileno`, `address`, `country`) VALUES
('vijayagg1993@gmail.com', '123', 'vinay', 'aggarwal', '8559029830', 'Asr', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE IF NOT EXISTS `voter` (
  `vid` int(10) NOT NULL,
  `adhaar` bigint(12) NOT NULL,
  `electno` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `s_pin` varchar(15) NOT NULL,
  `pin1` varchar(6) NOT NULL,
  `pin2` varchar(10) NOT NULL,
  `cand_id` int(10) NOT NULL,
  `date_vote` varchar(20) NOT NULL,
  `time_vote` varchar(20) NOT NULL,
  `off_login` varchar(30) NOT NULL,
  `const_id` int(10) NOT NULL,
  `check` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`vid`, `adhaar`, `electno`, `name`, `fname`, `reason`, `mobile_no`, `email`, `s_pin`, `pin1`, `pin2`, `cand_id`, `date_vote`, `time_vote`, `off_login`, `const_id`, `check`) VALUES
(4, 123456798453, '1235', 'balraj', 'S.Baldev singh', 'Asr.', 9888041196, 'balrajwadala1313@gmail.com', '12345', '45728H', '', 0, '', '', '1', 0, ''),
(7, 123456789123, '1236', 'Vinay', 'Sh.Guru Parsad', 'Asr.', 8559029830, 'vijayagg1993@gmail.com', '12345', 'HY156A', '', 0, '', '', '1', 0, ''),
(8, 321654987321, '1237', 'Robin', 'S.Jagjit singh', 'Asr.', 8437603262, 'robinpreetsingh472@gmail.com', '12345', 'CEAW8Q', '', 0, '', '', '1', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`cand_id`), ADD KEY `const` (`const`);

--
-- Indexes for table `constituency`
--
ALTER TABLE `constituency`
  ADD PRIMARY KEY (`const_id`);

--
-- Indexes for table `const_login`
--
ALTER TABLE `const_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`) COMMENT '50';

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`vid`), ADD KEY `const_id` (`const_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `cand_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `constituency`
--
ALTER TABLE `constituency`
  MODIFY `const_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1245;
--
-- AUTO_INCREMENT for table `const_login`
--
ALTER TABLE `const_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `vid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
