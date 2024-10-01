-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2024 at 12:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldept`
--

CREATE TABLE `tbldept` (
  `deptcode` varchar(10) NOT NULL,
  `deptname` varchar(20) NOT NULL,
  `deptlocation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldept`
--

INSERT INTO `tbldept` (`deptcode`, `deptname`, `deptlocation`) VALUES
('CSE01', 'c s e', 'engg'),
('ECE013', 'ECE00002', 'ENGG');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `studentcode` varchar(10) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `dateofbirth` varchar(12) NOT NULL,
  `deptcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`studentcode`, `studentname`, `dateofbirth`, `deptcode`) VALUES
('001', 'RAJU', '12-10-2010', 'CSE01'),
('002', 'Arun', '2024-08-08', 'CSE01');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`username`, `password`, `email`) VALUES
('vsm01', 'f303843e3c94cfbb5d3bc57fa95b75bb', 'a@g.com'),
('vsm02', '83d8a49f860e128b622268ab2b36c9eb', 'a@goo.com'),
('vsm03', '9074e8951728671a90483af6a741297d', 'a@a.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldept`
--
ALTER TABLE `tbldept`
  ADD PRIMARYKEY (`deptcode`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARYKEY (`studentcode`),
  ADD KEY `dept_student_P_F` (`deptcode`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARYKEY (`username`,`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD CONSTRAINT `dept_student_P_F` FOREIGN KEY (`deptcode`) REFERENCES `tbldept` (`deptcode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
