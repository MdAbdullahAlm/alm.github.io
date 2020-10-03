-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 02:42 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alm`
--

-- --------------------------------------------------------

--
-- Table structure for table `class1to5`
--

CREATE TABLE `class1to5` (
  `autoId` int(11) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `fatherName` varchar(111) NOT NULL,
  `motherName` varchar(211) NOT NULL,
  `presentAddress` varchar(211) NOT NULL,
  `permanentAddress` varchar(211) NOT NULL,
  `MobileNumber` varchar(211) NOT NULL,
  `class` varchar(211) NOT NULL,
  `previousSchool` varchar(211) NOT NULL,
  `email` varchar(221) NOT NULL,
  `file` varchar(211) NOT NULL,
  `teamService` varchar(211) NOT NULL,
  `userId` varchar(211) NOT NULL,
  `entryTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class1to5`
--

INSERT INTO `class1to5` (`autoId`, `studentName`, `fatherName`, `motherName`, `presentAddress`, `permanentAddress`, `MobileNumber`, `class`, `previousSchool`, `email`, `file`, `teamService`, `userId`, `entryTime`) VALUES
(1, '0', '0', '0', '0', '0', '163434', '0', '0', '0', '0', '0', '0', '0000-00-00 00:00:00'),
(2, 'korim', 'rohim', 'rohima', 'ctg', 'ctg', '0163434', 'korim@gmail.com', 'Class 3', 'cda school', '', 'on', '', '2020-09-10 17:50:18'),
(3, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 6', 'korim@gmail.com', 'Class 3', 'cda school a', 'bg1.jpg', '', '', '2020-09-10 17:51:48'),
(4, 'roji akter', 'rana', 'rani', 'ctg', 'ctg', '0163434 64432', 'korim@gmail.com', 'Class 3', 'cda school a', 'bg4.jpg', 'on', '', '2020-09-12 17:49:44'),
(5, 'sd', 'sd', 'as', 'ad', 'ads', '2324s', 'adf@gmail.com', 'Class 2', 'dsg', '', 'on', '', '2020-09-13 10:17:41'),
(6, 'korim dfdf', 'sdaghf', 'dfs', 'hjfhgfzd', 'dsfhb', '01634344543432', 'dfdsfadf@fdfere', 'Class 3', 'cda school lol', '', 'on', '', '2020-09-17 17:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `class6to10`
--

CREATE TABLE `class6to10` (
  `autoId` int(11) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `fatherName` varchar(111) NOT NULL,
  `motherName` varchar(211) NOT NULL,
  `presentAddress` varchar(211) NOT NULL,
  `permanentAddress` varchar(211) NOT NULL,
  `MobileNumber` varchar(211) NOT NULL,
  `class` varchar(211) NOT NULL,
  `previousSchool` varchar(211) NOT NULL,
  `email` varchar(221) NOT NULL,
  `file` varchar(211) NOT NULL,
  `teamService` varchar(211) NOT NULL,
  `userId` varchar(211) NOT NULL,
  `entryTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class6to10`
--

INSERT INTO `class6to10` (`autoId`, `studentName`, `fatherName`, `motherName`, `presentAddress`, `permanentAddress`, `MobileNumber`, `class`, `previousSchool`, `email`, `file`, `teamService`, `userId`, `entryTime`) VALUES
(1, 'roji', 'rana', 'rani', 'ctg', 'ctg', '1335462', 'korim@gmail.com', '', 'cda school', 'award.jpg', 'on', '', '2020-09-12 17:38:18'),
(2, 'roji akter', 'rana', 'fgd', 'df', 'sd', '0163434', 'korim@gmail.com', '', 'cda school a', 'bg7.jpg', 'on', '', '2020-09-12 17:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `creategroup`
--

CREATE TABLE `creategroup` (
  `autoId` int(33) NOT NULL,
  `MainGroup` varchar(222) NOT NULL,
  `CGroup` varchar(222) NOT NULL,
  `UserIp` varchar(222) NOT NULL,
  `entryTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creategroup`
--

INSERT INTO `creategroup` (`autoId`, `MainGroup`, `CGroup`, `UserIp`, `entryTime`) VALUES
(1, 'Income', 'Salary', 'localhost:8888', '2020-09-22 11:20:27'),
(2, 'Liabilities', 'School Salary', 'localhost:8888', '2020-09-22 11:22:17'),
(3, 'All', 'add', 'localhost:8888', '2020-09-22 11:22:23'),
(4, 'All', 'dfsdfgvgr', 'localhost:8888', '2020-09-22 11:22:28'),
(5, 'All', 'Salary', 'localhost:8888', '2020-09-22 11:24:05'),
(6, 'Liabilities', 'dfsdfgvgrfjhk', 'localhost:8888', '2020-09-22 11:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `createledger`
--

CREATE TABLE `createledger` (
  `autoId` int(33) NOT NULL,
  `MainGroup` varchar(222) NOT NULL,
  `CGroup` varchar(222) NOT NULL,
  `CLedger` varchar(250) NOT NULL,
  `crAmount` bigint(255) NOT NULL,
  `drAmount` bigint(255) NOT NULL,
  `opYear` year(4) NOT NULL,
  `UserIp` varchar(222) NOT NULL,
  `entryTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `createledger`
--

INSERT INTO `createledger` (`autoId`, `MainGroup`, `CGroup`, `CLedger`, `crAmount`, `drAmount`, `opYear`, `UserIp`, `entryTime`) VALUES
(2, 'Liabilities', 'School Salary', 'b', 10, 110, 2020, 'localhost:8888', '2020-09-22 11:22:17'),
(3, 'All', 'add', 'c', 212, 25, 2020, 'localhost:8888', '2020-09-22 11:22:23'),
(4, 'All', 'dfsdfgvgr', 'd', 33, 0, 2020, 'localhost:8888', '2020-09-22 11:22:28'),
(5, 'All', 'Salary', 'e', 55, 1, 2020, 'localhost:8888', '2020-09-22 11:24:05'),
(6, 'Liabilities', 'dfsdfgvgrfjhk', 'f', 54, 23, 2020, 'localhost:8888', '2020-09-22 11:31:42'),
(7, 'Assets', 't', 'g', 35, 32, 2020, 'localhost:8888', '2020-09-22 11:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `examschdeule`
--

CREATE TABLE `examschdeule` (
  `autoId` int(100) NOT NULL,
  `ExamName` varchar(250) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Buget` int(211) NOT NULL,
  `Liability by` varchar(211) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `userIp` varchar(221) NOT NULL,
  `entryTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examschdeule`
--

INSERT INTO `examschdeule` (`autoId`, `ExamName`, `StartDate`, `EndDate`, `Buget`, `Liability by`, `mobile`, `userIp`, `entryTime`) VALUES
(1, '1s tarm', '2020-09-01', '2020-09-29', 5000, 'alm', '0163434', '', '2020-09-15 13:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `programinfo`
--

CREATE TABLE `programinfo` (
  `autoId` int(100) NOT NULL,
  `programName` varchar(250) NOT NULL,
  `Place` varchar(250) NOT NULL,
  `SchdeuleDate` date NOT NULL,
  `Buget` int(211) NOT NULL,
  `Liability by` varchar(211) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `userIp` varchar(221) NOT NULL,
  `entryTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programinfo`
--

INSERT INTO `programinfo` (`autoId`, `programName`, `Place`, `SchdeuleDate`, `Buget`, `Liability by`, `mobile`, `userIp`, `entryTime`) VALUES
(1, 'alm birthday', 'ctg', '2020-10-07', 100, 'alm', '0163434', '', '2020-09-15 13:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `autoId` int(250) NOT NULL,
  `Student_Name` varchar(250) NOT NULL,
  `Class` varchar(250) NOT NULL,
  `Roll` int(100) NOT NULL,
  `B1rst` int(211) NOT NULL,
  `B2rst` int(211) NOT NULL,
  `E1rst` int(211) NOT NULL,
  `E2rst` int(221) NOT NULL,
  `Mrst` int(222) NOT NULL,
  `Rrst` int(222) NOT NULL,
  `ssrst` int(222) NOT NULL,
  `srst` int(222) NOT NULL,
  `Irst` int(222) NOT NULL,
  `Biology` int(222) NOT NULL,
  `Physics` int(222) NOT NULL,
  `chemistry` int(222) NOT NULL,
  `HigerMath` int(222) NOT NULL,
  `Art` int(111) NOT NULL,
  `exs1` varchar(111) NOT NULL,
  `exs1rst` int(111) NOT NULL,
  `exs2` varchar(111) NOT NULL,
  `exs2rst` int(111) NOT NULL,
  `exs3` varchar(111) NOT NULL,
  `exs3rst` int(111) NOT NULL,
  `exs4` varchar(111) NOT NULL,
  `exs4rst` int(111) NOT NULL,
  `userIp` varchar(111) NOT NULL,
  `entryTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`autoId`, `Student_Name`, `Class`, `Roll`, `B1rst`, `B2rst`, `E1rst`, `E2rst`, `Mrst`, `Rrst`, `ssrst`, `srst`, `Irst`, `Biology`, `Physics`, `chemistry`, `HigerMath`, `Art`, `exs1`, `exs1rst`, `exs2`, `exs2rst`, `exs3`, `exs3rst`, `exs4`, `exs4rst`, `userIp`, `entryTime`) VALUES
(1, 'korim', 'Class 9', 4, 45, 56, 54, 54, 56, 32, 45, 58, 78, 54, 56, 34, 34, 56, 'df', 65, 'sx', 66, 'zs', 67, 'e', 43, '', '2020-09-16 11:44:41'),
(2, 'korim', 'Class 2', 1, 45, 56, 54, 54, 56, 32, 45, 58, 78, 54, 56, 34, 34, 56, 'df', 65, 'sx', 66, 'zs', 67, 'e', 43, '', '2020-09-21 12:04:59'),
(3, 'roji', 'Class 2', 7, 45, 56, 54, 54, 56, 32, 45, 58, 78, 54, 56, 34, 34, 56, 'df', 65, 'sx', 66, 'zs', 67, 'e', 43, '', '2020-09-21 13:08:21'),
(4, 'md Alm', 'Class 9', 8, 45, 56, 54, 54, 56, 32, 45, 58, 78, 54, 56, 34, 34, 56, 'df', 65, 'sx', 66, 'zs', 67, 'e', 43, '', '2020-09-21 13:08:56'),
(5, 'roji akter', 'Class 2', 9, 45, 56, 54, 54, 56, 32, 45, 58, 78, 54, 56, 34, 34, 56, 'df', 65, 'sx', 66, 'zs', 67, 'e', 43, '', '2020-09-21 13:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `staffinfo`
--

CREATE TABLE `staffinfo` (
  `autoId` int(11) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `fatherName` varchar(111) NOT NULL,
  `motherName` varchar(211) NOT NULL,
  `presentAddress` varchar(211) NOT NULL,
  `permanentAddress` varchar(211) NOT NULL,
  `MobileNumber` varchar(211) NOT NULL,
  `email` varchar(221) NOT NULL,
  `file` varchar(211) NOT NULL,
  `userId` varchar(211) NOT NULL,
  `entryTime` datetime NOT NULL,
  `Category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffinfo`
--

INSERT INTO `staffinfo` (`autoId`, `studentName`, `fatherName`, `motherName`, `presentAddress`, `permanentAddress`, `MobileNumber`, `email`, `file`, `userId`, `entryTime`, `Category`) VALUES
(1, 'korim', 'rana', 'rohima', 'ctg', 'ctg', '0163434', 'korim@gmail.com', '', '', '2020-09-15 12:36:27', ''),
(2, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 6', 'df@fd', '', '', '2020-09-15 12:40:13', ''),
(3, 'fdf', 'sdf', 'sd', 'sdf', 'sdf', '8765', 'ds@hg', '', '', '2020-09-20 11:57:36', 'ffsd'),
(4, '$userName', '$Father', '$Mother', '$PresentAddress', '$PermanentAddress', '$MobileNumber', '$email', '$fileToUpload', '$userIp', '2020-09-20 11:59:00', '$Category'),
(5, 'fs', 'sdf', 'fsad', 'sdgvf', 'sdgfdhgd', '3545', 'fsgajdrgz@dfhfjs', '', '', '2020-09-20 12:00:17', 'fadsfhgj'),
(6, 't', 'fyh', 'fgj', 'sdf', 'ryhtj', '65634232', 'fd@fghgj', '', '', '2020-09-20 13:17:42', 'fdhjn'),
(7, 'dh', 'dfhnh', 'dfhbv', 'adfaghfj', 'fdhngjv', '45435', 'fggfh@gjhdkjtgj', '', '', '2020-09-20 13:18:14', 'dfgbjhfg'),
(8, 'sdgfdhfhbfdhnffffff', 'fdhfhbfdhnfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'fdhfhbfdhnffffffffffffffffffffwsfsgffffffffffffffffffffffffffffffffffffffffffffffffffff', 'fdhfhbfdhnffffffhfhbfdhnfffffffff', 'fdhfhbfdhnffffffhfhbfdhnfffffffff', '35657898675643', 'vnmgdfxhdh@fhjgljhk', '', '', '2020-09-20 13:19:41', 'xgtfjhkhjkjhhhhhhhhhhhhh'),
(9, 'sdgfdhfhbfdhnffffff', 'fdhfhbfdhnfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'fdhfhbfdhnffffffffffffffffffffwsfsgffffffffffffffffffffffffffffffffffffffffffffffffffff', 'fdhfhbfdhnffffffhfhbfdhnfffffffff', 'fdhfhbfdhnffffffhfhbfdhnfffffffff', '35657898675643', 'vnmgdfxhdh@fhjgljhk', '', '', '2020-09-20 13:46:04', 'xgtfjhkhjkjhhhhhhhhhhhhh'),
(10, 'sdgfdhfhbfdhnffffff', 'fdhfhbfdhnfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'fdhfhbfdhnffffffffffffffffffffwsfsgffffffffffffffffffffffffffffffffffffffffffffffffffff', 'fdhfhbfdhnffffffhfhbfdhnfffffffff', 'fdhfhbfdhnffffffhfhbfdhnfffffffff', '35657898675643', 'vnmgdfxhdh@fhjgljhk', '', '', '2020-09-20 13:47:14', 'xgtfjhkhjkjhhhhhhhhhhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `autoId` int(11) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `fatherName` varchar(111) NOT NULL,
  `motherName` varchar(211) NOT NULL,
  `presentAddress` varchar(211) NOT NULL,
  `permanentAddress` varchar(211) NOT NULL,
  `MobileNumber` varchar(211) NOT NULL,
  `class` varchar(211) NOT NULL,
  `Cl_Roll` int(250) NOT NULL,
  `email` varchar(221) NOT NULL,
  `file` varchar(211) NOT NULL,
  `userId` varchar(211) NOT NULL,
  `entryTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`autoId`, `studentName`, `fatherName`, `motherName`, `presentAddress`, `permanentAddress`, `MobileNumber`, `class`, `Cl_Roll`, `email`, `file`, `userId`, `entryTime`) VALUES
(1, 'roji', 'rohim', 'rani', 'ctg', 'ctg', '0163434 6', 'Class 3', 0, 'korim@gmail.com ', 'cl1.jpg', '', '2020-09-15 11:56:14'),
(2, 'roji', 'rohim', 'rani', 'ctg', 'ctg', '0163434 6', 'Class 3', 0, 'korim@gmail.com', 'cl1.jpg', '', '2020-09-15 11:57:45'),
(3, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 64432', 'Class 3', 0, 'alm@gmail.com', 'bg7.jpg', '', '2020-09-15 11:59:04'),
(4, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 64432', 'Class 4', 0, 'gff@gfh', 'bg7.jpg', '', '2020-09-15 12:07:54'),
(5, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 64432', 'Class 3', 0, 'alm@gmail.com', 'bg7.jpg', '', '2020-09-15 12:09:10'),
(6, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 64432', 'Class 4', 0, 'sfdg@dg', 'cl1.jpg', '', '2020-09-15 12:10:31'),
(7, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 64432', 'Class 4', 0, ' korim@gmail.com', 'cl1.jpg', '', '2020-09-15 12:24:41'),
(8, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 64432', 'Class 2', 0, 'korim@gmail.com', 'cl1.jpg', '', '2020-09-15 12:27:20'),
(9, 'korim', 'rana', 'rohima', 'ctg', 'sd', '0163434 64432', 'class 2', 0, '', '', '', '2020-09-15 13:32:33'),
(10, 'korim', 'rana', 'rohima', 'ctg', 'sd', '0163434 64432', 'Class 2', 1, 'df@fd', '', '', '2020-09-15 13:34:11'),
(11, 'roji akter', 'rohims', 'rani', 'ctg', 'sd', '1335462', 'Class 3', 4, 'df@fd', '', '', '2020-09-15 13:34:51'),
(12, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 5', 2, 'dlfs', 'd', '3534', '2020-09-19 12:50:18'),
(13, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 5', 3, 'dlfs', 'd', '3534', '2020-09-19 12:50:35'),
(14, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 5', 4, 'dlfs', 'd', '3534', '2020-09-19 12:50:51'),
(15, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 5', 5, 'dlfs', 'd', '3534', '2020-09-19 12:51:08'),
(16, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 5', 6, 'dlfs', 'd', '3534', '2020-09-19 12:51:22'),
(17, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 5', 7, 'dlfs', 'd', '3534', '2020-09-19 12:51:52'),
(18, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 5', 8, 'dlfs', 'd', '3534', '2020-09-19 12:52:06'),
(19, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 5', 9, 'dlfs', 'd', '3534', '2020-09-19 12:52:21'),
(20, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 5', 10, 'dlfs', 'd', '3534', '2020-09-19 12:52:39'),
(21, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 6', 1, 'dlfs', 'd', '3534', '2020-09-19 12:52:59'),
(22, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 6', 2, 'dlfs', 'd', '3534', '2020-09-19 12:53:14'),
(23, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 6', 3, 'dlfs', 'd', '3534', '2020-09-19 12:53:27'),
(24, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 6', 4, 'dlfs', 'd', '3534', '2020-09-19 12:54:15'),
(25, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 6', 5, 'dlfs', 'd', '3534', '2020-09-19 12:54:28'),
(26, 'ake', 'df', 'fdg', 'fd', 'dgd', '453', 'Class 6', 6, 'dlfs', 'd', '3534', '2020-09-19 12:54:46'),
(27, 'korim', 'rana', 'rohimad', 'df', 'sd', '0163434 64432', 'Class 6', 7, 'df@fd', '', '', '2020-09-19 12:56:19'),
(28, 'alm birthday', 'rohims', 'rohimad', 'ctg', 'sd', '01634344543432', 'Class 6', 8, 'alm@gmail.com', '', '', '2020-09-19 12:56:39'),
(29, 'roji', 'rohims', 'rohimad', 'df', 'sd', '01634344543432', 'Class 6', 9, 'df@fd', '', '', '2020-09-19 12:56:58'),
(30, 'alm birthday', 'rana', 'rohima', 'df', 'sd', '01634344543432', 'Class 6', 10, 'alm@gmail.com', '', '', '2020-09-19 12:57:15'),
(31, 'alm birthday', 'rohim', 'rohimad', 'ctg', 'sd', '1335462', 'Class 7', 1, 'korim@gmail.com', '', '', '2020-09-19 12:57:37'),
(32, 'korim', 'rana', 'rohima', 'ctg', 'ctg', '1335462', 'Class 7', 2, 'df@fd', '', '', '2020-09-19 12:57:54'),
(33, 'as', 'df', 'dfgb', 'sdf', 'sfv', '75634', 'Class 7', 3, 'df@fd', '', '', '2020-09-19 12:58:17'),
(34, 'f', 'd', 'ad', 'dg', 'as', '832', 'Class 7', 4, 'df@fd', '', '', '2020-09-19 12:58:42'),
(35, 'korim a', 'rohim', 'rohimad', 'df', 'sd', '0163434 6', 'Class 7', 5, '5dgfg@dge', '', '', '2020-09-19 12:59:06'),
(36, '', '', '', '', '', '', 'Class 1', 0, '', '', '', '2020-09-23 10:45:53'),
(37, '', '', '', '', '', '', '', 0, '', '', '', '2020-09-28 16:57:49'),
(38, 'loki', 'lokes', 'loksi', 'ctg', 'ctg', '', 'Class 1', 0, '', '', '', '2020-09-29 10:40:34'),
(39, 'dkfd', 'dsf', 'sdf', 'fa', 'df', 'fds', 'Class 8', 0, 'dsg@dgfd', '', '', '2020-09-29 10:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbcontact`
--

CREATE TABLE `tbcontact` (
  `autoId` int(100) NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `Comment` varchar(500) NOT NULL,
  `entryTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbcontact`
--

INSERT INTO `tbcontact` (`autoId`, `User_Name`, `email`, `Comment`, `entryTime`) VALUES
(1, 'md Alm', 'alm@gmail.com', 'I am first in the comment section.', '2020-09-13 10:43:15'),
(2, 'korim', 'korim@gmail.com', 'sfdsa', '2020-09-13 10:45:59'),
(3, 'korim@gmail.com', '', '', '2020-09-13 10:50:37'),
(4, '', 'korim@gmail.com', '', '2020-09-13 10:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbledgeropeningbalance`
--

CREATE TABLE `tbledgeropeningbalance` (
  `autoId` int(111) NOT NULL,
  `MainGroup` varchar(500) NOT NULL,
  `CGroup` varchar(500) NOT NULL,
  `ledgerId` varchar(250) NOT NULL,
  `drAmount` bigint(255) NOT NULL,
  `crAmount` bigint(255) NOT NULL,
  `OpYear` year(4) NOT NULL,
  `userName` varchar(222) NOT NULL,
  `userIp` varchar(222) NOT NULL,
  `entryTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbledgeropeningbalance`
--

INSERT INTO `tbledgeropeningbalance` (`autoId`, `MainGroup`, `CGroup`, `ledgerId`, `drAmount`, `crAmount`, `OpYear`, `userName`, `userIp`, `entryTime`) VALUES
(2, 'All', 'School Salary', 'b', 0, 20, 2020, 'alm', '10101010', '2020-09-28 16:19:51'),
(4, 'Liabilities', 'dg', 'd', 0, 20, 2020, 'alm', '10101010', '2020-09-28 16:20:30'),
(5, 'Liabilities', 'dsg', 'e', 60, 0, 2020, 'alm', '10101010', '2020-09-28 16:22:06'),
(6, 'Assets', 'School Salary', 'f', 0, 30, 2020, 'alm', '10101010', '2020-09-28 16:22:23'),
(7, 'Assets', 'jfg', 'g', 90, 0, 2020, 'alm', '10101010', '2020-09-28 16:22:35'),
(13, 'Liabilities', 'School Salary', 'b', 2, 201, 2019, '', 'localhost:8888', '2020-09-29 11:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `tblogininfo`
--

CREATE TABLE `tblogininfo` (
  `autoId` int(100) NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `UserIp` varchar(100) NOT NULL,
  `entryTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblogininfo`
--

INSERT INTO `tblogininfo` (`autoId`, `User_Name`, `Password`, `UserIp`, `entryTime`) VALUES
(1, 'alm', 'sa', '00200010', '2020-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbreginfo`
--

CREATE TABLE `tbreginfo` (
  `autoId` int(100) NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `RePassword` varchar(100) NOT NULL,
  `UserIp` varchar(100) NOT NULL,
  `entryTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbreginfo`
--

INSERT INTO `tbreginfo` (`autoId`, `User_Name`, `email`, `Password`, `RePassword`, `UserIp`, `entryTime`) VALUES
(1, 'alm', 'alm108187@gamil.com', 'sa', 'sa', '000000010', '2020-09-10 13:09:58'),
(2, 'korim', 'korim@gmail.com', '123', '123', '', '2020-09-10 13:16:19');

-- --------------------------------------------------------

--
-- Table structure for table `teacherinfo`
--

CREATE TABLE `teacherinfo` (
  `autoId` int(11) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `fatherName` varchar(111) NOT NULL,
  `motherName` varchar(211) NOT NULL,
  `presentAddress` varchar(211) NOT NULL,
  `permanentAddress` varchar(211) NOT NULL,
  `MobileNumber` varchar(211) NOT NULL,
  `class` varchar(211) NOT NULL,
  `email` varchar(221) NOT NULL,
  `file` varchar(211) NOT NULL,
  `userId` varchar(211) NOT NULL,
  `entryTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherinfo`
--

INSERT INTO `teacherinfo` (`autoId`, `studentName`, `fatherName`, `motherName`, `presentAddress`, `permanentAddress`, `MobileNumber`, `class`, `email`, `file`, `userId`, `entryTime`) VALUES
(1, 'korim', 'rohim', 'rohima', 'ctg', 'ctg', '0163434', 'alm@gmail.com', 'English 1st', 'bg6.jpg', '', '2020-09-15 12:39:24'),
(2, 'alm birthday', 'rana', 'rohima', 'df', 'ctg', '01634344543432', 'English 2nd', 'alm@gmail.com', '', '', '2020-09-20 10:54:14'),
(3, 'roji', 'rohims', 'rohima', 'hjfhgfzd', 'ctg', '75634', 'Relagion', 'dfdsfadf@fdfere', '', '', '2020-09-20 10:54:33'),
(4, 'alm birthday', 'rohims', 'rani', 'ctg', 'ctg', '0163434 64432', 'Vice Principal', 'df@fd', '', '', '2020-09-20 10:54:50'),
(5, 'korim a', 'rohim', 'rani', 'df', 'ctg', '0163434 6', 'S.S', 'alm@gmail.com', '', '', '2020-09-20 10:55:06'),
(6, 'roji akter', 'rohim', 'rohimad', 'ctg', 'ctg', '75634', 'Math', '5dgfg@dge', '', '', '2020-09-20 10:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `voucher1`
--

CREATE TABLE `voucher1` (
  `autoId` int(250) NOT NULL,
  `voucherNo` varchar(222) NOT NULL,
  `date` datetime NOT NULL,
  `ledgerId` varchar(222) NOT NULL,
  `Narration` varchar(500) NOT NULL,
  `drAmount` bigint(255) NOT NULL,
  `crAmount` bigint(255) NOT NULL,
  `voucherType` varchar(300) NOT NULL,
  `transactionWith` varchar(300) NOT NULL,
  `costId` varchar(222) NOT NULL,
  `chqClear` int(111) NOT NULL,
  `attachBill` varchar(500) NOT NULL,
  `attachChequBill` varchar(500) NOT NULL,
  `UserIp` varchar(222) NOT NULL,
  `userName` varchar(222) NOT NULL,
  `entryTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voucher1`
--

INSERT INTO `voucher1` (`autoId`, `voucherNo`, `date`, `ledgerId`, `Narration`, `drAmount`, `crAmount`, `voucherType`, `transactionWith`, `costId`, `chqClear`, `attachBill`, `attachChequBill`, `UserIp`, `userName`, `entryTime`) VALUES
(2, '2', '2020-09-28 16:13:24', 'b', 'wfg', 0, 20, 'hjg', 'hm', '1', 1, '0', '0', '101010', 'alm', '2020-09-28 16:13:24'),
(3, '3', '2020-09-28 16:13:56', 'c', 'wfg', 300, 0, 'hjg', 'hm', '1', 1, '0', '0', '101010', 'alm', '2020-09-28 16:13:56'),
(4, '4', '2020-09-28 16:14:13', 'd', 'wfg', 0, 10, 'hjg', 'hm', '1', 1, '0', '0', '101010', 'alm', '2020-09-28 16:14:13'),
(5, '5', '2020-09-28 16:14:32', 'e', 'wfg', 510, 0, 'hjg', 'hm', '1', 1, '0', '0', '101010', 'alm', '2020-09-28 16:14:32'),
(6, '6', '2020-09-28 16:14:56', 'f', 'wfg', 0, 210, 'hjg', 'hm', '1', 1, '0', '0', '101010', 'alm', '2020-09-28 16:14:56'),
(7, '7', '2020-09-28 16:15:26', 'g', 'wfg', 0, 120, 'hjg', 'hm', '1', 1, '0', '0', '101010', 'alm', '2020-09-28 16:15:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class1to5`
--
ALTER TABLE `class1to5`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `class6to10`
--
ALTER TABLE `class6to10`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `creategroup`
--
ALTER TABLE `creategroup`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `createledger`
--
ALTER TABLE `createledger`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `examschdeule`
--
ALTER TABLE `examschdeule`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `programinfo`
--
ALTER TABLE `programinfo`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `staffinfo`
--
ALTER TABLE `staffinfo`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `tbcontact`
--
ALTER TABLE `tbcontact`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `tbledgeropeningbalance`
--
ALTER TABLE `tbledgeropeningbalance`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `tblogininfo`
--
ALTER TABLE `tblogininfo`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `tbreginfo`
--
ALTER TABLE `tbreginfo`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `teacherinfo`
--
ALTER TABLE `teacherinfo`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `voucher1`
--
ALTER TABLE `voucher1`
  ADD PRIMARY KEY (`autoId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class1to5`
--
ALTER TABLE `class1to5`
  MODIFY `autoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `class6to10`
--
ALTER TABLE `class6to10`
  MODIFY `autoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `creategroup`
--
ALTER TABLE `creategroup`
  MODIFY `autoId` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `createledger`
--
ALTER TABLE `createledger`
  MODIFY `autoId` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `examschdeule`
--
ALTER TABLE `examschdeule`
  MODIFY `autoId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `programinfo`
--
ALTER TABLE `programinfo`
  MODIFY `autoId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `autoId` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staffinfo`
--
ALTER TABLE `staffinfo`
  MODIFY `autoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `autoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbcontact`
--
ALTER TABLE `tbcontact`
  MODIFY `autoId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbledgeropeningbalance`
--
ALTER TABLE `tbledgeropeningbalance`
  MODIFY `autoId` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblogininfo`
--
ALTER TABLE `tblogininfo`
  MODIFY `autoId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbreginfo`
--
ALTER TABLE `tbreginfo`
  MODIFY `autoId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacherinfo`
--
ALTER TABLE `teacherinfo`
  MODIFY `autoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `voucher1`
--
ALTER TABLE `voucher1`
  MODIFY `autoId` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
