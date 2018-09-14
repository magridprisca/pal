-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2018 at 04:02 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pal_knowledge`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `content` text NOT NULL,
  `dateOfComment` datetime NOT NULL,
  `knowledgeID` varchar(20) NOT NULL,
  `userID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `discussID` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `discContent` text NOT NULL,
  `dateOfDiscuss` datetime NOT NULL,
  `userID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`discussID`, `topic`, `discContent`, `dateOfDiscuss`, `userID`) VALUES
(1, 'yeiyei', 'what  i think.', '2018-08-16 11:04:34', 'magrid'),
(9, 'pengelasan', 'i dont think anything', '2018-08-31 11:06:40', 'magrid'),
(10, 'pengelasan', 'bg', '2018-09-14 08:24:08', 'magrid');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `divisionID` varchar(10) NOT NULL,
  `divisionName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`divisionID`, `divisionName`) VALUES
('1', 'PEMBANGUNAN KAPAL'),
('11', 'DIVISI DESIGN'),
('12', 'DIVISI KAPAL NIAGA'),
('13', 'DIVISI KAPAL PERANG'),
('14', 'DIVISI KAPAL SELAM'),
('15', 'DIVISI PEMASARAN DAN PENJUALAN BANGKAP'),
('2', 'REKAYASA UMUM DAN HARKAN'),
('21', 'DIVISI REKAYASA UMUM DAN HARKAN'),
('22', 'DIVISI PEMELIHARAAN DAN PERBAIKAN'),
('23', 'DIVISI PENJUALAN REKUMHAR'),
('24', 'DIVISI JAMINAN KUALITAS'),
('25', 'DIVISI SUPPLY CHAIN'),
('3', 'KEUANGAN'),
('31', 'DIVISI PERBENDAHARAAN'),
('32', 'DIVISI AKUNTANSI'),
('33', 'DIVISI TEKNOLOGI INFORMASI'),
('4', 'SDM DAN UMUM'),
('41', 'DIVISI HCM DAN COMMAND MEDIA'),
('42', 'DIVISI KAWASAN');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

CREATE TABLE `knowledge` (
  `knowledgeID` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `category` tinyint(1) NOT NULL,
  `divisionID` varchar(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `fileType` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `dateOfUpload` datetime NOT NULL,
  `userID` varchar(30) NOT NULL,
  `totalRate` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`knowledgeID`, `title`, `type`, `category`, `divisionID`, `file`, `fileType`, `description`, `dateOfUpload`, `userID`, `totalRate`) VALUES
('1220180907101608', 'yang sekian', 0, 0, '12', 'assets/upload/12/3ece0562.mp4', 'video', 'ya allah', '2018-09-07 10:16:08', 'magrid', 0),
('1320180907095959', 'nahlooo', 0, 1, '13', 'assets/upload/13/3eda0564.mp4', 'video', 'akskals', '2018-09-07 09:59:59', 'magrid', 0),
('1320180907101956', 'video bts', 0, 0, '13', 'assets/upload/13/3e941f81.mp4', 'video', 'bias', '2018-09-07 10:19:56', 'magrid', 0),
('1420180901053006', 'pdf dulu', 0, 1, '14', 'assets/upload/14/20040418.pdf', 'pdf', 'ioya', '2018-09-01 05:30:06', 'magrid', 0),
('2120180901065350', 'desain', 0, 1, '21', 'assets/upload/21/3eda0564.mp4', 'video', 'a', '2018-09-01 06:53:50', 'magrid', 0),
('2520180831103650', 'coba yg video', 0, 1, '25', 'assets/upload/25/58310742.mp4', 'video', 'aaa', '2018-08-31 10:36:50', 'magrid', 0),
('3220180831103508', 'coba foto', 0, 1, '32', 'assets/upload/32/15060370.jpg', 'foto', 'coba yang foto', '2018-08-31 10:35:08', 'magrid', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `value` int(1) NOT NULL,
  `userID` varchar(30) NOT NULL,
  `knowledgeID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `replydiscussion`
--

CREATE TABLE `replydiscussion` (
  `replyID` int(11) NOT NULL,
  `replyContent` text NOT NULL,
  `dateOfReply` datetime NOT NULL,
  `UserID` varchar(30) NOT NULL,
  `discusID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replydiscussion`
--

INSERT INTO `replydiscussion` (`replyID`, `replyContent`, `dateOfReply`, `UserID`, `discusID`) VALUES
(1, 'yoke', '2018-08-17 00:00:00', 'magrid', 1),
(2, 'hoooke', '2018-08-17 00:00:00', 'magrid', 1),
(4, 'singgenah', '2018-08-31 11:07:17', 'magrid', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `divisionID` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userPhoto` varchar(50) NOT NULL,
  `authentication` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `name`, `password`, `divisionID`, `level`, `userEmail`, `userPhoto`, `authentication`) VALUES
('magrid', 'Magrid Prisca', 'fcacf366e100ec0f419f6a2c3999047df8328a4c', '33', 'admin', 'fkmagridpj@yahoo.com', 'assets/upload/users/DSC_0124.jpg', 0),
('wul', 'wulan', 'fcacf366e100ec0f419f6a2c3999047df8328a4c', '42', 'staff', 'wul', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `fk_user_comment` (`userID`),
  ADD KEY `fk_knowledge_comment` (`knowledgeID`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`discussID`),
  ADD KEY `fk_user_discuss` (`userID`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`divisionID`);

--
-- Indexes for table `knowledge`
--
ALTER TABLE `knowledge`
  ADD PRIMARY KEY (`knowledgeID`),
  ADD KEY `fk_division_knowledge` (`divisionID`),
  ADD KEY `fk_user_knowledge` (`userID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD KEY `fk_knowledge_rating` (`knowledgeID`),
  ADD KEY `fk_user_rating` (`userID`);

--
-- Indexes for table `replydiscussion`
--
ALTER TABLE `replydiscussion`
  ADD PRIMARY KEY (`replyID`),
  ADD UNIQUE KEY `replyID` (`replyID`),
  ADD KEY `fk_discussion_reply` (`discusID`),
  ADD KEY `fk_user_reply` (`UserID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`userEmail`),
  ADD KEY `fk_division_user` (`divisionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `discussID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `replydiscussion`
--
ALTER TABLE `replydiscussion`
  MODIFY `replyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_knowledge_comment` FOREIGN KEY (`knowledgeID`) REFERENCES `knowledge` (`knowledgeID`),
  ADD CONSTRAINT `fk_user_comment` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `discussion`
--
ALTER TABLE `discussion`
  ADD CONSTRAINT `fk_user_discuss` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `knowledge`
--
ALTER TABLE `knowledge`
  ADD CONSTRAINT `fk_division_knowledge` FOREIGN KEY (`divisionID`) REFERENCES `division` (`divisionID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_knowledge` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_knowledge_rating` FOREIGN KEY (`knowledgeID`) REFERENCES `knowledge` (`knowledgeID`),
  ADD CONSTRAINT `fk_user_rating` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `replydiscussion`
--
ALTER TABLE `replydiscussion`
  ADD CONSTRAINT `fk_reply_discussion` FOREIGN KEY (`discusID`) REFERENCES `discussion` (`discussID`),
  ADD CONSTRAINT `fk_user_reply` FOREIGN KEY (`UserID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_division_user` FOREIGN KEY (`divisionID`) REFERENCES `division` (`divisionID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
