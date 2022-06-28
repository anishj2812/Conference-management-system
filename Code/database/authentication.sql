-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 03:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Password`) VALUES
('admin@1.com', 'admin1'),
('admin@2.com', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE `conference` (
  `id` int(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`id`, `topic`, `deadline`) VALUES
(2, 'Maths', '2022-04-15'),
(5, 'Social', '2022-04-29'),
(6, 'Eco', '2022-03-09'),
(7, 'DBMS', '2022-04-30'),
(8, 'jskks', '2022-04-29'),
(10, 'Economics', '2022-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `User_id` int(50) NOT NULL,
  `conference_id` int(50) NOT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Passwd` varchar(50) DEFAULT NULL,
  `review_status` varchar(100) DEFAULT 'not submitted',
  `report` varchar(1000) DEFAULT NULL,
  `submission_status` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`User_id`, `conference_id`, `Fname`, `Lname`, `Email`, `Passwd`, `review_status`, `report`, `submission_status`) VALUES
(1, 2, 'ANISH', 'JAIN', 'anishj69@gmail.com', 'am', 'submitted', 'https://drive.google.com/file/d/1zyiYGz9xoUsQOMKXjcx4QT4VuHKk63-a/view', '2022-03-30'),
(2, 2, 'HS', 'ssmn', 'namansethi92@gmail.com', 'sjj', 'accepted', 'https://drive.google.com/file/d/1zyiYGz9xoUsQOMKXjcx4QT4VuHKk63-a/view', '2022-03-29'),
(3, 2, 'Manoj ', 'Jain', 'manoj123@gmail.com', 'manoj123', 'submitted', 'https://drive.google.com/file/d/1zyiYGz9xoUsQOMKXjcx4QT4VuHKk63-a/view', NULL),
(4, 2, 'kewal', 'god', 'kewal@gmail.com', 'kg123', 'submitted', 'https://drive.google.com/file/d/1PufmBhyjRNkelXe94CveChRnSfdV-mU8/view?usp=sharing', '2022-04-13'),
(5, 2, 'Urgayn', 'Nurboo', 'urgyan12@gmail.com', 'urgyan123', 'rejected', '', NULL),
(12, 6, 'Trisha', 'M', 'trisha@gmail.com', 'tm', 'submitted', 'https://drive.google.com/file/d/1zyiYGz9xoUsQOMKXjcx4QT4VuHKk63-a/view', '2022-03-30'),
(14, 2, 'Rohit', 'burnwal', 'rohit@gmail.com', 'rb', 'not submitted', NULL, NULL),
(15, 5, 'Dev', 'Jain', 'dev@gmail.com', 'dev1', 'submitted', 'https://drive.google.com/file/d/1PufmBhyjRNkelXe94CveChRnSfdV-mU8/view?usp=sharing', '2022-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `currentconference`
--

CREATE TABLE `currentconference` (
  `con_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currentconference`
--

INSERT INTO `currentconference` (`con_id`) VALUES
(8);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `Name` varchar(50) NOT NULL,
  `Pdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`Name`, `Pdf`) VALUES
('Kewal', 'https://drive.google.com/file/d/1zyiYGz9xoUsQOMKXjcx4QT4VuHKk63-a/view?usp=sharing'),
('ANISH', 'https://drive.google.com/file/d/1zyiYGz9xoUsQOMKXjcx4QT4VuHKk63-a/view'),
('Dj', 'https://drive.google.com/file/d/1PufmBhyjRNkelXe94CveChRnSfdV-mU8/view?usp=sharing'),
('Urgyan', 'https://drive.google.com/drive/folders/1WN3_GJexTGcOqRQdCnhQNkMfDyfEJuu6'),
('ANISH', 'https://drive.google.com/drive/folders/1WN3_GJexTGcOqRQdCnhQNkMfDyfEJuu6');

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `Conference_id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`Conference_id`, `First_Name`, `Last_Name`, `Email`, `Password`) VALUES
(2, 'Raj', 'Jack', 'raj3@gmail.com', 'aj'),
(2, 'Raj', 'Jack', 'raj3@gmail.com', 'aj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conference`
--
ALTER TABLE `conference`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `User_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
