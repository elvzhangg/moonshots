-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 03:37 AM
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
-- Database: `moonshot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_type` int(1) NOT NULL,
  `admin_added_date` varchar(30) NOT NULL,
  `admin_added_by` varchar(20) NOT NULL,
  `admin_deleted_date` varchar(30) NOT NULL,
  `admin_deleted_by` varchar(20) NOT NULL,
  `admin_status` tinyint(1) NOT NULL,
  `admin_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_type`, `admin_added_date`, `admin_added_by`, `admin_deleted_date`, `admin_deleted_by`, `admin_status`, `admin_deleted`) VALUES
(1, 'MayanthaJ', 't@t.com', 'c5fe25896e49ddfe996db7508cf00534', 1, '2017-09-11 09:37:13pm', '', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_logged`
--

CREATE TABLE `admin_logged` (
  `admin_logged_id` int(11) NOT NULL,
  `admin_logged_admin` varchar(20) NOT NULL,
  `admin_logged_time` varchar(30) NOT NULL,
  `admin_logged_type` varchar(5) NOT NULL,
  `admin_logged_device` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_logged`
--

INSERT INTO `admin_logged` (`admin_logged_id`, `admin_logged_admin`, `admin_logged_time`, `admin_logged_type`, `admin_logged_device`) VALUES
(1, '$adminID', '$createdDate', 'i', ''),
(2, '1', '2017-11-04 02:32:00am', 'o', ''),
(3, '1', '2017-11-04 02:32:10am', 'i', ''),
(4, '1', '2017-11-04 09:45:46am', 'i', ''),
(5, '1', '2017-11-11 04:01:19am', 'i', ''),
(6, '1', '2017-11-11 04:10:32am', 'i', ''),
(7, '1', '2017-11-11 08:29:10am', 'o', ''),
(8, '1', '2017-11-11 08:29:38am', 'i', ''),
(9, '1', '2017-11-11 08:39:27am', 'i', ''),
(10, '1', '2017-11-25 07:47:32am', 'i', ''),
(11, '1', '2017-11-25 08:07:24am', 'o', ''),
(12, '1', '2017-11-25 08:07:26am', 'i', ''),
(13, '1', '2017-11-25 08:42:37am', 'o', ''),
(14, '1', '2017-11-25 08:43:03am', 'i', ''),
(15, '1', '2017-11-27 10:31:50pm', 'i', ''),
(16, '1', '2017-11-28 07:11:25am', 'o', ''),
(17, '1', '2017-11-28 07:11:26am', 'i', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customers_id` int(11) NOT NULL,
  `customers_fname` varchar(100) NOT NULL,
  `customers_lname` varchar(100) NOT NULL,
  `customers_email` varchar(100) NOT NULL,
  `customers_registered_date` varchar(20) NOT NULL,
  `customers_country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customers_id`, `customers_fname`, `customers_lname`, `customers_email`, `customers_registered_date`, `customers_country`) VALUES
(1, 'mj', 'Jayawardena', 't@t.com', '2017-11-27 07:43:53p', 'BHS'),
(2, 'mj', 'Jayawardena', 'st@t.com', '2017-11-27 07:46:08p', 'AUS'),
(3, 'mj', 'Jayawardena', 'std@t.com', '2017-11-27 07:46:16p', 'AUS'),
(4, 'mj', 'Jayawardena', 'std@t.comd', '2017-11-27 07:46:22p', 'AUS'),
(5, 'mj', 'Jayawardena', 'stdd@t.comd', '2017-11-27 07:46:29p', 'AGO'),
(6, 'mj', 'mj', 'mpjayawardena@gmail.com', '2017-11-27 08:00:09p', 'ARG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_logged`
--
ALTER TABLE `admin_logged`
  ADD PRIMARY KEY (`admin_logged_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin_logged`
--
ALTER TABLE `admin_logged`
  MODIFY `admin_logged_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
