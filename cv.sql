-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 06:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `acid` int(11) NOT NULL,
  `comp-name` varchar(34) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `major` varchar(44) NOT NULL,
  `acdesc` text NOT NULL,
  `idkey` int(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `aid` int(11) NOT NULL,
  `adate` date NOT NULL,
  `adesc` varchar(135) NOT NULL,
  `idkey` int(45) NOT NULL,
  `awname` varchar(54) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contect`
--

CREATE TABLE `contect` (
  `cid` int(11) NOT NULL,
  `cname` varchar(135) NOT NULL,
  `cmission` varchar(135) NOT NULL,
  `caddress` varchar(135) NOT NULL,
  `cemail` varchar(135) NOT NULL,
  `cphone` varchar(135) NOT NULL,
  `cfacebook` varchar(135) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `birthdate` date NOT NULL,
  `cimg` varchar(445) NOT NULL,
  `idkey` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `eid` int(11) NOT NULL,
  `uname` varchar(43) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `major` varchar(56) NOT NULL,
  `GPA` int(11) NOT NULL,
  `idkey` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `exid` int(11) NOT NULL,
  `comp-name` varchar(43) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `major` varchar(54) NOT NULL,
  `expdesc` varchar(322) NOT NULL,
  `idkey` int(54) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `intrest`
--

CREATE TABLE `intrest` (
  `iid` int(11) NOT NULL,
  `iname` varchar(435) NOT NULL,
  `idkey` int(54) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `objective`
--

CREATE TABLE `objective` (
  `oid` int(11) NOT NULL,
  `odesc` varchar(123) NOT NULL,
  `idkey` int(54) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recommendation`
--

CREATE TABLE `recommendation` (
  `id` int(11) NOT NULL,
  `type` varchar(48) NOT NULL,
  `teacher` varchar(45) NOT NULL,
  `student` varchar(45) NOT NULL,
  `time` varchar(45) NOT NULL,
  `place` varchar(87) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `idkey` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(39) NOT NULL,
  `email` varchar(34) NOT NULL,
  `password` varchar(200) NOT NULL,
  `roll` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `roll`) VALUES
(90102, 'afghan', 'afghan@gmail.com', 'f086b5845e99b940d4049ed039c0f3f3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skile`
--

CREATE TABLE `skile` (
  `sid` int(11) NOT NULL,
  `shead` varchar(135) NOT NULL,
  `sper` varchar(135) NOT NULL,
  `sdesc` varchar(135) NOT NULL,
  `idkey` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wordtemplate`
--

CREATE TABLE `wordtemplate` (
  `id` int(11) NOT NULL,
  `wordfile` varchar(100) NOT NULL,
  `imgfile` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wordtemplate`
--

INSERT INTO `wordtemplate` (`id`, `wordfile`, `imgfile`, `description`) VALUES
(4140, '1643703741-fourth.docx', '1643703741-fourth.png', 'it you can download free and edit for your self  if you wan we try to provide many free template for you best regard '),
(27538, '1643703047-third.docx', '1643703047-third.png', 'it you can download free and edit for your self  if you wan we try to provide many free template for you best regard '),
(38596, '1643704134-sixeth.docx', '1643704134-sixeth.png', ''),
(45427, '1643702762-second.docx', '1643702762-second.png', 'it you can download free and edit for your self  if you wan we try to provide many free template for you best regard '),
(46777, '1643703954-fifth.docx', '1643703954-fifth.png', 'it you can download free and edit for your self  if you wan we try to provide many free template for you best regard '),
(61071, '1643702520-first.docx', '1643702520-first.png', 'it you can download free and edit for your self  if you wan we try to provide many free template for you best regard '),
(63124, '1643704387-seventh.docx', '1643704387-seventh.png', ''),
(68316, '1643704682-eghit.docx', '1643704682-eghith.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`acid`);

--
-- Indexes for table `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `contect`
--
ALTER TABLE `contect`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `intrest`
--
ALTER TABLE `intrest`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `objective`
--
ALTER TABLE `objective`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `recommendation`
--
ALTER TABLE `recommendation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skile`
--
ALTER TABLE `skile`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `wordtemplate`
--
ALTER TABLE `wordtemplate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `acid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98503;

--
-- AUTO_INCREMENT for table `award`
--
ALTER TABLE `award`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93085;

--
-- AUTO_INCREMENT for table `contect`
--
ALTER TABLE `contect`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92791;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96836;

--
-- AUTO_INCREMENT for table `intrest`
--
ALTER TABLE `intrest`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91921;

--
-- AUTO_INCREMENT for table `objective`
--
ALTER TABLE `objective`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98666;

--
-- AUTO_INCREMENT for table `recommendation`
--
ALTER TABLE `recommendation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66823;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100726;

--
-- AUTO_INCREMENT for table `skile`
--
ALTER TABLE `skile`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96267;

--
-- AUTO_INCREMENT for table `wordtemplate`
--
ALTER TABLE `wordtemplate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75057;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
