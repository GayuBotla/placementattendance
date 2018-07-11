-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2018 at 12:01 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mobile` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `date`, `mobile`, `status`) VALUES
(1, 'tester', 'tester@gmail.com', '1234', '2018-05-21 21:14:24', 7731879694, 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_list`
--

CREATE TABLE `company_list` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_list`
--

INSERT INTO `company_list` (`id`, `name`, `date`, `updated_on`, `status`) VALUES
(1, 'salesforce', '2018-06-22', '2018-06-11 17:51:35', 0),
(3, 'Capgemini', '2018-05-26', '2018-06-04 18:04:40', 0),
(7, 'TCS', '2018-05-23', '2018-06-07 18:41:52', 0),
(8, 'ibm', '2018-06-12', '2018-06-11 17:51:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `rollno` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `percentage` float NOT NULL,
  `cmpny_id` varchar(200) NOT NULL,
  `cmpny_name` varchar(100) DEFAULT NULL,
  `attended_on` varchar(200) NOT NULL,
  `attended_status` int(11) NOT NULL DEFAULT '0',
  `selected_studs` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `name`, `college`, `branch`, `percentage`, `cmpny_id`, `cmpny_name`, `attended_on`, `attended_status`, `selected_studs`) VALUES
(1, '15P31A1204', 'Gayathri', 'ACET', 'IT', 80, '1', 'salesforce', '12-06-2018 01:06:13', 1, 1),
(2, '15P31A1227', 'Divya', 'ACET', 'IT', 80, '7', 'TCS', '26-05-2018 00:05:33', 1, 1),
(3, '15P31A1239', 'Sirisha', 'ACET', 'IT', 80, '2', 'Testing', '', 0, 0),
(4, '15P31A1222', 'Anvitha', 'ACET', 'IT', 80, '3', 'Capgemini', '', 1, 1),
(7, '123', 'tester', 'ACET', 'cse', 80, '4', 'Capgemini', '', 1, 0),
(13, '123', 'tester', 'ACET', 'cse', 80, '9', 'salesforce', '', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_list`
--
ALTER TABLE `company_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_list`
--
ALTER TABLE `company_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
