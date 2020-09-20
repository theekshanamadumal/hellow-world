-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2020 at 11:07 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `password1` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminpwrds`
--

INSERT INTO `adminpwrds` (`ID`, `password1`) VALUES
('834567987V', '$2y$10$lIe3EgQg/j0tKJrQKY5F0O4N6zPAM4uNdThuFZ13OAsRn9yhE3rda');

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE `passwords` (
  `ID` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`ID`, `password`) VALUES
('873456987V', '$2y$10$lIe3EgQg/j0tKJrQKY5F0O4N6zPAM4uNdThuFZ13OAsRn9yhE3rda'),
('834321098V', '$2y$10$b3EsalwO4SkkWEQbwymWEOXi6lRMDEbMIQBUtUHcRPziYW9rmrpYC'),
('955262622V', '$2y$10$NAGD8Ce89iRlkOhk2.rwE.sJ5f89z5p9QL.hJANz2aI.EgDNI4ojm'),
('965437977V', '$2y$10$i5f37V2ZYOuFN4fbgQJJ7e3BoTebWkCiZLI1OYMCt2O1j1rsdMG6K'),
('958709376V', '$2y$10$3nsoe.NxFya7SEpq/KoskO0FQBgtEZQdVUsXqjThMLrPIxXimxWta'),
('19705262622', '$2y$10$yb6pObqadjvbhZ3b3aUxK.QxFf7IXps4YPDGejHXamqqaJTu2Kpda'),
('756743111V', '$2y$10$oYU4pR6qdX6lZ1ukT7bACujs046Xcd.Ydz3xS5oJI6ELychXqd6hC'),
('915346789V', '$2y$10$uZQEhfpy1xvy7f7aE8t3heKw1VdEIPTmOVkiehwPD8EHi8tUp9Xu2'),
('805423987V', '$2y$10$aYcdEgPRyC1gaHA7YAegbO5r5eeOG7pZUa.EskNTusZG65HE7EOQS'),
('19842376123', '$2y$10$4nz/H9kzi37bfQ1K6wiWVuNA7mGm9cJhe.rSHxs8qQYSOvIBb3nPK');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `recordNo` int(12) NOT NULL,
  `recordType` int(11) NOT NULL,
  `recordName` varchar(50) NOT NULL,
  `userID` varchar(12) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`recordNo`, `recordType`, `recordName`, `userID`, `date`) VALUES
(1, 3, '0', '555555555555', '2020-09-02 00:00:00'),
(2, 5, '1', '555555555555', '2020-09-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `requestslist`
--

CREATE TABLE `requestslist` (
  `requestNo` int(20) NOT NULL,
  `requestId` int(10) NOT NULL,
  `userId` varchar(12) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL DEFAULT 'new',
  `description` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestslist`
--

INSERT INTO `requestslist` (`requestNo`, `requestId`, `userId`, `date`, `status`, `description`) VALUES
(1, 2, '971650834v', '2020-09-01 00:00:00', 'finished', 'collect document on 05/07/2020 morning'),
(27, 5, '995262622V', '2020-09-01 00:00:00', 'pending', ''),
(26, 1, '995262622V', '2020-09-01 00:00:00', 'pending', ''),
(25, 1, '995262622V', '2020-09-01 00:00:00', 'finished', ''),
(13, 6, '777777777V', '2020-09-01 00:00:00', 'completed', 'collect on 07/07/2020 morning'),
(30, 13, '995262622V', '2020-09-01 00:00:00', 'pending', ''),
(16, 2, '971650834v', '2020-09-01 00:00:00', 'finished', NULL),
(15, 3, '971650834v', '2020-09-01 00:00:00', 'completed', 'collect documents'),
(17, 3, '971650834V', '2020-09-01 00:00:00', 'ongoing', ''),
(18, 3, '971650834V', '2020-09-01 00:00:00', 'new', ''),
(19, 6, '971650834V', '2020-09-01 00:00:00', 'completed', ''),
(24, 1, '995262622V', '2020-09-01 00:00:00', 'new', ''),
(21, 1, '1234', '2020-09-01 00:00:00', 'completed', ''),
(22, 1, '971650834V', '2020-09-01 00:00:00', 'new', ''),
(23, 1, '971650834V', '2020-09-01 00:00:00', 'ongoing', ''),
(38, 1, '873456987V', '2020-09-01 00:00:00', 'new', ''),
(37, 1, '873456987V', '2020-09-01 00:00:00', 'new', ''),
(36, 1, '873456987V', '2020-09-01 00:00:00', 'new', ''),
(33, 1, '995262622V', '2020-09-01 00:00:00', 'new', ''),
(34, 1, '995262622V', '2020-09-01 00:00:00', 'new', ''),
(35, 1, '995262622V', '2020-09-01 00:00:00', 'new', ''),
(39, 1, '873456987V', '2020-09-01 00:00:00', 'new', ''),
(40, 1, '873456987V', '2020-09-01 00:00:00', 'new', '');

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
(2, 1, 1, 1, 'type 2'),
(3, 1, 1, 1, 'type 3'),
(4, 1, 1, 1, 'type 4'),
(5, 1, 1, 0, 'type 5'),
(6, 1, 1, 1, 'type 6'),
(7, 1, 1, 1, 'type 7'),
(8, 1, 1, 1, 'type 8'),
(9, 1, 1, 0, 'type 9'),
(10, 1, 1, 0, 'type 10'),
(11, 1, 1, 1, 'type 11'),
(12, 1, 1, 0, 'type 12'),
(13, 1, 1, 1, 'type 13'),
(14, 1, 1, 1, 'type 14'),
(15, 0, 0, 1, 'type 15'),
(16, 0, 0, 1, 'type 16'),
(17, 0, 0, 1, 'type 17'),
(18, 1, 1, 1, 'type 18'),
(19, 1, 1, 0, 'type 19'),
(20, 1, 1, 0, 'type 20'),
(21, 1, 1, 0, 'type 21'),
(22, 1, 0, 0, 'type 22');

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
('873456987V', 'Aruni', 'Lakmali', '134/1,Nikaweratiya', '0711234987', 'aruni87@gmail.com', 'St Annes College', 'teacher'),
('834321098V', 'Ayodya', 'Erandi', '101,Gammedapitiya,Nikaweratiya', '0712345623', 'ayodya1983@gmail.com', 'St Annes College', 'Staff'),
('955262622V', 'Theekshana', 'Madhumal', 'Sisilasa,Bogahalanda,Moragollagama', '0711126345', 'madhumal95@gmail.com', 'Jayanthi Navodya Central college', 'Principal'),
('965437977V', 'Malithi', 'Lalanika', '130/2,Boraluwewa,Nikaweratiya', '0712345623', 'malithi1998@gmail.com', 'Kubukwewa Vidyalaya', 'teacher'),
('756743111V', 'Amara', 'Hewagama', '211/2,Pasgoda Road,Galgamuwa', '0717623001', 'amara9975@gmail.com', 'St Annes College', 'teacher'),
('19705262622', 'Sunil', 'Fernando', 'udahagewaththa,Makehelwala,Ambanpola', '0714567432', 'sunilfernando@gmail.com', 'Jayanthi Navodya Central college', 'Staff'),
('915346789V', 'Nimali', 'Gunawardhana', '23/1,Okewela,Padeniya', '0769713952', 'nimali987@gmail.com', 'Millagoda Maha Vidyalaya', 'Principal'),
('958709376V', 'Chirath', 'Lankara', '99/1,Temple Junction,Anamaduwa', '0712288013', 'lachirath96@gmail.com', 'Vijayaba  national college', 'teacher'),
('805423987V', 'Sarath', 'De silva', 'Muthusewana,Nihiluwa,Kobeigane', '0753487654', 'desarath@gmail.com', 'Millagoda Maha Vidyalaya', 'Staff'),
('19842376123', 'Piyal', 'wasantha', 'Kusum kade,Pallaththara,Bingiriya', '0781296743', 'piyalwasantha84@gmail.com', 'St Annes College', 'teacher');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `recordNo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
