-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 02:24 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` varchar(200) NOT NULL,
  `login_id` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `active` int(2) NOT NULL,
  `role` int(3) NOT NULL,
  `createdon` date NOT NULL,
  `updatedon` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `login_id`, `password`, `designation`, `contact`, `active`, `role`, `createdon`, `updatedon`) VALUES
('ajish01', '102', 'a5390e4e98922faa547165c407e4c72a', 'admin', 9551976501, 1, 102, '2017-12-27', '2017-12-27'),
('anurag01', '103', 'd77d2953c546cb33e2d0bff4989f6aa2', 'employee', 9874563210, 1, 100, '2017-12-27', '2017-12-27'),
('abishek', '104', '850633661e947aff2ed9211ecef5e1cf', 'admin', 7894456123, 1, 102, '2017-12-27', '2017-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `email`) VALUES
(1, 'ajith', 'ajithbmwkumar'),
(2, 'ajish', 'ajithbmwkumar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` bigint(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `person` varchar(200) NOT NULL,
  `transport` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(200) NOT NULL,
  `idproof` varchar(200) NOT NULL,
  `idno` varchar(200) NOT NULL,
  `assettype` varchar(200) NOT NULL,
  `assetno` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `duration` int(2) NOT NULL,
  `arrangements` varchar(999) NOT NULL,
  `status` varchar(20) NOT NULL,
  `checkin` time NOT NULL,
  `checkout` time NOT NULL,
  `visit` varchar(200) NOT NULL,
  `scheduledby` varchar(200) NOT NULL,
  `createdon` date NOT NULL,
  `updatedon` date NOT NULL,
  `reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `name`, `contact`, `dob`, `email`, `purpose`, `person`, `transport`, `date`, `place`, `idproof`, `idno`, `assettype`, `assetno`, `time`, `type`, `duration`, `arrangements`, `status`, `checkin`, `checkout`, `visit`, `scheduledby`, `createdon`, `updatedon`, `reason`) VALUES
(1, 'AJITHKUMAR', 9381828207, '2016-11-30', 'ajithbmwkumar@gmail.com', 'meeting', 'ajish', 'CAR', '2017-12-28', 'chennai', 'DRIVING LICENSE', '1234567', 'PROJECTOR', '123456', '11:57', 'Scheduled visitor', 2, 'no', 'CONFIRMED', '00:00:00', '00:00:00', 'NOT VISITED', '102', '2017-12-28', '2017-12-28', ''),
(2, 'ajish', 7338895164, '2016-11-30', 'sheelavalavukonda@gmail.com', 'meeting', 'ajish', 'CAR', '2017-12-28', 'chennai', 'DRIVING LICENSE', '1234567', 'PROJECTOR', '123456', '11:58', 'Scheduled visitor', 1, 'no', 'CONFIRMED', '00:00:00', '00:00:00', 'NOT VISITED', '103', '2017-12-28', '2017-12-28', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
