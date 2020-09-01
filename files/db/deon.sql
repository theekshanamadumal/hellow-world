-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 11:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deon`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpwrds`
--

CREATE TABLE `adminpwrds` (
  `ID` varchar(12) NOT NULL,
  `password1` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminpwrds`
--

INSERT INTO `adminpwrds` (`ID`, `password1`) VALUES
('1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE `passwords` (
  `ID` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`ID`, `password`) VALUES
('12121212', '111'),
('123456789v', '111'),
('4444444444V', '111'),
('971650834V', '12'),
('111111', '45'),
('787878', '1221'),
('456456', '121212'),
('78787878', '122112'),
('987654321', '111'),
('5959', '59'),
('2222222', '12'),
('55555556', '56'),
('656565655', '123'),
('123123123V', '123456'),
('12', '12'),
('45', '45'),
('56', '56'),
('78', '78'),
('789', '789'),
('000000000V', ''),
('000000000001', '1111'),
('777777777V', '12'),
('1234', '1234'),
('121212124v', '12');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `recordNo` int(12) NOT NULL,
  `recordType` int(11) NOT NULL,
  `recordName` varchar(50) NOT NULL,
  `userID` varchar(12) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `requestslist`
--

CREATE TABLE `requestslist` (
  `requestNo` int(20) NOT NULL,
  `requestId` int(10) NOT NULL,
  `userId` varchar(12) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'new',
  `description` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestslist`
--

INSERT INTO `requestslist` (`requestNo`, `requestId`, `userId`, `date`, `status`, `description`) VALUES
(1, 2, '971650834v', '2020-09-01', 'completed', 'collect document on 05/07/2020 morning'),
(4, 5, '971650834v', '2020-09-01', 'new', 'new req'),
(10, 3, '971650834v', '2020-09-01', 'pending', 'collect document on 05/07/2020 morning'),
(12, 4, '3333333v', '2020-09-01', 'on going', 'sent to the head office'),
(13, 6, '777777777V', '2020-09-01', 'completed', 'collect on 07/07/2020 morning'),
(6, 4, '777777777V', '2020-09-01', 'new', 'new req'),
(11, 2, '971650834v', '2020-09-01', 'ongoing', NULL),
(16, 2, '971650834v', '2020-09-01', 'pending', NULL),
(15, 3, '971650834v', '2020-09-01', 'ongoing', NULL),
(17, 3, '971650834V', '2020-09-01', 'new', ''),
(18, 3, '971650834V', '2020-09-01', 'new', ''),
(19, 6, '971650834V', '2020-09-01', 'completed', ''),
(20, 7, '971650834V', '2020-09-01', 'new', ''),
(21, 1, '1234', '2020-09-01', 'pending', ''),
(22, 1, '971650834V', '2020-09-01', 'new', ''),
(23, 1, '971650834V', '2020-09-01', 'new', '');

-- --------------------------------------------------------

--
-- Table structure for table `requesttypes`
--

CREATE TABLE `requesttypes` (
  `requestId` int(10) NOT NULL,
  `principal` tinyint(1) DEFAULT NULL,
  `teacher` tinyint(1) DEFAULT NULL,
  `staff` tinyint(1) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requesttypes`
--

INSERT INTO `requesttypes` (`requestId`, `principal`, `teacher`, `staff`, `details`) VALUES
(1, 1, 1, 1, 'type 1'),
(5, 1, 1, 1, 'type 5'),
(3, 1, 1, 1, 'type 3'),
(2, 1, 1, 1, 'type 2'),
(4, 1, 1, 1, 'type 4'),
(6, 1, 1, 1, 'type 6'),
(7, 1, 1, 1, 'type 7'),
(8, 1, 1, 1, 'type 8'),
(9, 1, 1, 1, 'type 9'),
(10, 1, 1, 1, 'type 10'),
(11, 1, 1, 1, 'type 11'),
(12, 1, 1, 1, 'type 12'),
(13, 1, 1, 1, 'type 13'),
(14, 1, 1, 1, 'type 14'),
(15, 1, 1, 1, 'type 15'),
(16, 1, 1, 1, 'type 16');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `ID` varchar(12) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `second_name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `telephone` varchar(12) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `school` varchar(100) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`ID`, `first_name`, `second_name`, `address`, `telephone`, `email`, `school`, `occupation`) VALUES
('971650834V', 'theekshana', 'madumal', 'nikaweratiya', '773137660', 'theekshana.18@cse.mrt.ac.lk', 'ST annes collage', 'teacher'),
('4444444444V', 'saman', 'silva', 'padaviya', '773137660', 'theekshanamadumal@gmail.com', 'ST annes collage', 'teacher'),
('123456789v', 'm', 'n', 'nm', '773137660', 'theekshana.1@cse.mrt.ac.lk', 'ST annes collage', 'teacher'),
('111111', 'h', '', 'j', '456', 'ghfhf', 'ghfhgfh', 'Principal'),
('444444', 'df', 'fd', 'dfdf', '565656', 'hgfhfh', 'sfddfsfd', 'teacher'),
('787878', 'q', '', 'dddd', '78888', 'qwqwqw', 'wqwqwq', 'teacher'),
('987654321', 'sadun', 'gimhan', 'unagolla', '', '', 'unagolla MMV', 'teacher'),
('123123123V', 'kalum', 'pathiraja', 'padaviya', '0714545852', 'dfdsfdsfdsf@fgfgfdg.bnm', 'shri pura mmv', 'Staff'),
('000000000V', 'kapila', 'undukapuchcha', '', '', '', '', 'teacher'),
('000000000001', 'lakila', 'undukapuchcha', '', '', '', '', 'teacher'),
('1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('121212124v', 'sura', 'saradiyel', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminpwrds`
--
ALTER TABLE `adminpwrds`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`recordNo`),
  ADD UNIQUE KEY `Record Number` (`recordNo`);

--
-- Indexes for table `requestslist`
--
ALTER TABLE `requestslist`
  ADD PRIMARY KEY (`requestNo`);

--
-- Indexes for table `requesttypes`
--
ALTER TABLE `requesttypes`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
