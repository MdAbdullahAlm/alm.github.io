-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 07:46 AM
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
(5, 'sd', 'sd', 'as', 'ad', 'ads', '2324s', 'adf@gmail.com', 'Class 2', 'dsg', '', 'on', '', '2020-09-13 10:17:41');

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
(1, 'korim', 'Class 9', 4, 45, 56, 54, 54, 56, 32, 45, 58, 78, 54, 56, 34, 34, 56, 'df', 65, 'sx', 66, 'zs', 67, 'e', 43, '', '2020-09-16 11:44:41');

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
  `entryTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffinfo`
--

INSERT INTO `staffinfo` (`autoId`, `studentName`, `fatherName`, `motherName`, `presentAddress`, `permanentAddress`, `MobileNumber`, `email`, `file`, `userId`, `entryTime`) VALUES
(1, 'korim', 'rana', 'rohima', 'ctg', 'ctg', '0163434', 'korim@gmail.com', '', '', '2020-09-15 12:36:27'),
(2, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 6', 'df@fd', '', '', '2020-09-15 12:40:13');

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
(1, 'roji', 'rohim', 'rani', 'ctg', 'ctg', '0163434 6', 'korim@gmail.com', 0, 'Class 3', 'cl1.jpg', '', '2020-09-15 11:56:14'),
(2, 'roji', 'rohim', 'rani', 'ctg', 'ctg', '0163434 6', 'korim@gmail.com', 0, 'Class 3', 'cl1.jpg', '', '2020-09-15 11:57:45'),
(3, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 64432', 'alm@gmail.com', 0, 'Class 3', 'bg7.jpg', '', '2020-09-15 11:59:04'),
(4, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 64432', 'alm@gmail.com', 0, 'Class 3', 'bg7.jpg', '', '2020-09-15 12:07:54'),
(5, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 64432', 'alm@gmail.com', 0, 'Class 3', 'bg7.jpg', '', '2020-09-15 12:09:10'),
(6, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 64432', 'korim@gmail.com', 0, 'Class 3', 'cl1.jpg', '', '2020-09-15 12:10:31'),
(7, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 64432', 'korim@gmail.com', 0, 'Class 3', 'cl1.jpg', '', '2020-09-15 12:24:41'),
(8, 'korim a', 'rohims', 'rohimad', 'ctg', 'ctg', '0163434 64432', 'korim@gmail.com', 0, 'Class 3', 'cl1.jpg', '', '2020-09-15 12:27:20'),
(9, 'korim', 'rana', 'rohima', 'ctg', 'sd', '0163434 64432', 'df@fd', 0, '1', '', '', '2020-09-15 13:32:33'),
(10, 'korim', 'rana', 'rohima', 'ctg', 'sd', '0163434 64432', 'Class 2', 1, 'df@fd', '', '', '2020-09-15 13:34:11'),
(11, 'roji akter', 'rohims', 'rani', 'ctg', 'sd', '1335462', 'Class 3', 4, 'df@fd', '', '', '2020-09-15 13:34:51');

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
(1, 'korim', 'rohim', 'rohima', 'ctg', 'ctg', '0163434', 'alm@gmail.com', 'English 1st', 'bg6.jpg', '', '2020-09-15 12:39:24');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class1to5`
--
ALTER TABLE `class1to5`
  MODIFY `autoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class6to10`
--
ALTER TABLE `class6to10`
  MODIFY `autoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `autoId` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staffinfo`
--
ALTER TABLE `staffinfo`
  MODIFY `autoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `autoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbcontact`
--
ALTER TABLE `tbcontact`
  MODIFY `autoId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `autoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
