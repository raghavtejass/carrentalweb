-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caab`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `bookedcar` ()  MODIFIES SQL DATA
DELETE from admin where v_id IN(SELECT c_id FROM personal)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `book_detail` ()  SELECT p.p_id,p.c_id,a.cname,p.date,p.pickup,b.total from personal p,admin a,booking b where p.c_id=a.v_id and p.p_id=b.book_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `v_id` int(222) NOT NULL,
  `cimage` varchar(222) NOT NULL,
  `cname` varchar(222) NOT NULL,
  `seat` varchar(222) NOT NULL,
  `price` varchar(222) NOT NULL,
  `comfort` varchar(222) NOT NULL,
  `fuel` varchar(222) NOT NULL,
  `gps` varchar(222) NOT NULL,
  `km` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`v_id`, `cimage`, `cname`, `seat`, `price`, `comfort`, `fuel`, `gps`, `km`) VALUES
(34, '5de482b596467.jpg', 'Swift Dzire ', '5', '3000', 'Economy', 'Petrol', 'No', '6'),
(35, '5de4831115403.jpg', 'Honda Jazz ', '5', '5000', 'Hatchback', 'Petrol', 'No', '7'),
(39, '5de60f3f6cc01.jpg', 'Maruti Swift ', '4', '2500', 'Economy', 'Petrol', 'Yes', '6'),
(40, '5f6dac2a83936.jpg', 'Duster ', '4', '5000', 'SUV', 'Diesel', 'Yes', '10'),
(41, '5fbf6e298d624.jpg', 'ertiga ', '6', '3000', 'SUV', 'Petrol', 'Yes', '15');

-- --------------------------------------------------------

--
-- Table structure for table `admin_dir`
--

CREATE TABLE `admin_dir` (
  `a_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_dir`
--

INSERT INTO `admin_dir` (`a_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(222) NOT NULL,
  `cost` int(222) NOT NULL,
  `days` int(222) NOT NULL,
  `total` int(222) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `cost`, `days`, `total`) VALUES
(136, 6000, 7, 42000),
(137, 8000, 5, 40000),
(138, 9000, 5, 45000);

--
-- Triggers `booking`
--
DELIMITER $$
CREATE TRIGGER `book_detail` BEFORE INSERT ON `booking` FOR EACH ROW set new.total=new.cost*new.days
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `Message` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `p_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `fname` varchar(222) NOT NULL,
  `lname` varchar(222) NOT NULL,
  `phone` int(222) NOT NULL,
  `code` int(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `pickup` varchar(222) NOT NULL,
  `date` varchar(15) NOT NULL,
  `days` int(222) NOT NULL,
  `costperday` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`p_id`, `c_id`, `fname`, `lname`, `phone`, `code`, `address`, `pickup`, `date`, `days`, `costperday`) VALUES
(136, 36, 'Srirama', 'M.T', 2147483647, 560043, 'No.21Gangothri1st cross', 'aces layout', '2020-12-14', 7, 6000),
(137, 37, 'Raghav', 'Tejas', 2147483647, 560043, '21, Gangothri, 1st Cross, Green Park Layout, Banaswadi,', 'spice garden', '2020-12-24', 5, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `Dfrom` varchar(222) NOT NULL,
  `Dto` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `time` varchar(222) NOT NULL,
  `adult` varchar(222) NOT NULL,
  `child` varchar(222) NOT NULL,
  `text` text NOT NULL,
  `pack` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `admin_dir`
--
ALTER TABLE `admin_dir`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `v_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `admin_dir`
--
ALTER TABLE `admin_dir`
  MODIFY `a_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `p_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
