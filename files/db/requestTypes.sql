-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 11:28 AM
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
-- Table structure for table `requesttypes`
--

CREATE TABLE `requesttypes` (
  `requestId` int(10) NOT NULL,
  `principal` tinyint(1) DEFAULT NULL,
  `teacher` tinyint(1) DEFAULT NULL,
  `staff` tinyint(1) DEFAULT NULL,
  `details` varchar(200) CHARACTER SET utf8 COLLATE utf8_sinhala_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requesttypes`
--

INSERT INTO `requesttypes` (`requestId`, `principal`, `teacher`, `staff`, `details`) VALUES
(1, 1, 1, 1, 'විදේශ නිවාඩු සේවාව'),
(2, 1, 1, 1, 'සේවයෙන් විශ්‍රාම ගැන්වීමේ සේවාව'),
(3, 1, 1, 1, 'විශ්‍රාම පූර්ව නිවාඩු'),
(4, 1, 1, 1, 'විශ්‍රාම  ගොනුව ප්‍රා‍දේශීය ලේකම් කාර්යාලය වෙත යැවීමේ සේවාව'),
(5, 1, 1, 0, 'ගුරු සේවයෙන් මුදා හැරීමේ සේවාව'),
(6, 1, 1, 1, 'නිවාඩු'),
(7, 1, 1, 1, 'පරිවාස කාලය අවසානයේ තනතුර ස්ථිර කිරීමේ සේවාව'),
(8, 1, 1, 1, 'ගුරු සේවා කාලය ඒකාබද්ධ කිරීමේ සේවාව'),
(9, 1, 1, 0, 'වැන්දඹු හා අනත් දරු විශ්‍රාම වැටුප් අංක ලබා ගැනීමේ සේවාව'),
(10, 1, 1, 0, 'පශ්චාත් උපාධි අධ්‍යාපන ඩිප්ලෝමා පාඨමාලා ගාස්තුවෙන් අඩක් ආපසු ගෙවීමේ සේවාව'),
(11, 1, 1, 1, 'ගුරු සේවයේ උසස්වීම් නිර්දේශ කිරීමේ සේවාව'),
(12, 1, 1, 0, 'ගුරු සේවයේ උසස්වීම් නිර්දේශ කිරීමේ සේවාව'),
(13, 1, 1, 1, 'අග්‍රහාර ඉල්ලීම් නිර්දේශ කිරීමේ සේවාව'),
(14, 1, 1, 1, 'වැටුප් ණය ගෙවීමේ සේවාව'),
(15, 0, 0, 1, '5 ශ්‍රෙණියේ ශිෂ්‍යාධාර ගෙවීම'),
(16, 0, 0, 1, 'පාසල් ළමුන්ට දිවා ආහාර සදහා වූ පෝෂණ වවුචර්'),
(17, 0, 0, 1, 'ශිෂ්‍ය කාර්ය දර්ශනයේ දෙවැනි පිටපත සදහා අනුමැතිය ලබාදීම'),
(18, 1, 1, 1, 'සාමාන්‍ය වැටුප් විස්තරයක් ලබාගැනීම'),
(19, 1, 1, 0, 'පාසැල් ගොඩනැගිලි, ක්‍රීඩාපිටි ප්‍රජා අවශ්‍යතා සදහා ලබාදීම'),
(20, 1, 1, 0, 'චාරිකා'),
(21, 1, 1, 0, 'ඡායාරූප සහතික කිරීම'),
(22, 1, 0, 0, 'පාසැල් ගොඩනැගිලි අවශ්‍යතා නිර්දේශ කර අනුමැතිය ඉදිරිපත් කිරීම');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
