-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 09:33 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mclacmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Type` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Type`, `username`, `password`) VALUES
(0, 'admin', 'eHpNIB8b5iZNutaqamM2bg==mAVn4iIhw0drFbdfTkrWgPw9HYRVAmMF01r+zLihp00='),
(2, 'pubcomm', '5V1P/XjEJtCd+ZX1COX+5g==pR0usCEPrSuCZblgzQ2IGMiAdd18KiHS95g6kdZL61k='),
(1, 'memcomm', 'Klof5MLGmpfU8H7orr2hoQ==eXi9V7JY9zoJys+zLUqj6INW8hlQRVaSa/2hauVpHbc=');

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Date` date NOT NULL,
  `ImagePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`ID`, `Title`, `Description`, `Date`, `ImagePath`) VALUES
(0, 'Lazada DevFest 2018 Champions!', 'Congratulations to our MCL-ACM Members and their coach, Prof. Khristian G. Kikuchi, for placing as the Champion of the Lazada DevFest 2018!\r\n', '2018-11-06', 'ANN0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Date` date DEFAULT NULL,
  `Details` varchar(5000) DEFAULT NULL,
  `HasView` int(1) NOT NULL,
  `ImagePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`ID`, `Title`, `Description`, `Date`, `Details`, `HasView`, `ImagePath`) VALUES
(0, 'MCL ACM CodeX Programming Workshop', 'MCL ACM CodeX Programming Workshop held last October 18, 2018', '2018-10-18', '', 0, ''),
(1, 'MCL ACM CodeX Programming Challenge', 'MCL ACM CodeX Programming Challenge held last October 19, 2018', '2018-01-19', '', 0, ''),
(3, 'Activity 3', 'Activity', '2020-02-14', NULL, 1, 'ACT1.jpg'),
(5, 'Activity 4', 'Activity ', '2019-10-31', NULL, 0, 'ACT0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `activity_images`
--

CREATE TABLE `activity_images` (
  `ID` int(11) NOT NULL,
  `Filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Details` varchar(1000) NOT NULL,
  `PostDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`ID`, `Title`, `Details`, `PostDate`) VALUES
(0, 'Lazada DevFest 2018 Champions!', 'Congratulations to our MCL-ACM Members and their coach, Prof. Khristian G. Kikuchi, for placing as the Champion of the Lazada DevFest 2018!\r\n', '2018-11-13 02:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `Filename` varchar(255) NOT NULL,
  `Extension` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Filename`, `Extension`) VALUES
('000', '.jpg'),
('001', '.jpg'),
('002', '.jpg'),
('003', '.jpg'),
('004', '.jpg'),
('005', ''),
('006', ''),
('007', '.jpg'),
('008', '.jpg'),
('009', '.png'),
('011', '.jpg'),
('ANN0', '.jpg'),
('ACH0', '.jpg'),
('ACT0', '.jpg'),
('ACT1', '.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` varchar(3) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `MiddleInitial` varchar(1) DEFAULT NULL,
  `Suffix` varchar(3) DEFAULT NULL,
  `Program` varchar(6) NOT NULL,
  `Committee` varchar(22) NOT NULL,
  `Role` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `FirstName`, `LastName`, `MiddleInitial`, `Suffix`, `Program`, `Committee`, `Role`) VALUES
('000', 'Khristian', 'Kikuchi', '', '', '', 'Executive', 'Sponsor'),
('001', 'John', 'Disonglo', '', '', 'BSIT', 'Executive', 'Chair'),
('002', 'John Noel', 'Corpuz', '', '', 'BSIT', 'Executive', 'Vice Chair'),
('003', 'Angelo', 'Alvarez', '', '', 'BSIT', 'Executive', 'Secretary'),
('004', 'Allan', 'Daraman', '', 'Jr', 'BSIT', 'Membership', 'Chair'),
('005', 'Gwyneth', 'Escarda', NULL, NULL, 'BSIT', 'Finance', 'Chair'),
('006', 'Jeffrey', 'France', NULL, NULL, 'BSIT', 'Publicity', 'Chair'),
('007', 'Genald Christian', 'Manloctao', 'N', '', 'BSCS', 'Research & Development', 'Chair'),
('008', 'Jereh', 'Tejano', '', '', 'BSIT', 'Research & Development', 'Member'),
('009', 'Arviejhay', 'Alejandro', '', '', 'BSIT', 'Research & Development', 'Member'),
('011', 'Russel', 'Mañalac', '', '', 'BSIT', 'Finance', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `activity_images`
--
ALTER TABLE `activity_images`
  ADD PRIMARY KEY (`ID`,`Filename`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
