-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 02:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Accounts`
--

CREATE TABLE `Accounts` (
  `Id` int(11) NOT NULL,
  `Name` varchar(36) NOT NULL,
  `Mobile No.` bigint(10) NOT NULL,
  `Role` varchar(34) NOT NULL,
  `Location` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Accounts`
--

INSERT INTO `Accounts` (`Id`, `Name`, `Mobile No.`, `Role`, `Location`) VALUES
(1, 'Gopal sharma', 7875764653, 'CA', 'Delhi'),
(2, 'Vinita', 787665543, 'Cashier', 'Banglore'),
(3, 'Rashmika', 7654445623, 'Accountant', 'Delhi'),
(4, 'Bulbul sharma', 837438742, 'Cashier', 'Mumbai'),
(5, 'Niti', 7654445623, 'CA', 'Jaipur'),
(6, 'kalpna singh', 6757868878, 'Accountant', 'Delhi'),
(7, 'Anushka sharma', 7654445623, 'CA', 'Mumabi'),
(8, 'Mukesh Sharma', 8374387427, 'Cashier', 'Jaipur'),
(9, 'suman', 7654445623, 'Accountant', 'Mumabi'),
(10, 'Ankita', 787665543, 'Cashier', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `Clients`
--

CREATE TABLE `Clients` (
  `Id` int(14) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Mobile No.` bigint(10) NOT NULL,
  `Project` varchar(35) NOT NULL,
  `Location` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Clients`
--

INSERT INTO `Clients` (`Id`, `Name`, `Mobile No.`, `Project`, `Location`) VALUES
(1, 'Jennifer', 9846364534, 'E-commerce', 'Landon'),
(2, 'Vann lopez', 985747543, 'Porfolio', 'spain'),
(3, 'Babita Sharma', 7654445623, 'E-commerce', 'Delhi'),
(4, 'Vinita', 787665543, 'Porfolio', 'Delhi'),
(5, 'Pooja', 7654445623, 'portfolio', 'Mumabi'),
(6, 'Vinita', 985747543, 'E-commerce', 'Jaipur'),
(7, 'Niti', 76544456243, 'portfolio', 'Jaipur'),
(8, 'Vann lopez', 998765554, 'E-commerce', 'Delhi'),
(9, 'Anushka sharma', 7654445623, 'E-commerce', 'jaipur'),
(10, 'Anjali Sharma', 985747543, 'E-commerce', 'Jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `Devops_Developer`
--

CREATE TABLE `Devops_Developer` (
  `Id` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Mobile No.` bigint(10) NOT NULL,
  `Role` varchar(34) NOT NULL,
  `Location` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Devops_Developer`
--

INSERT INTO `Devops_Developer` (`Id`, `Name`, `Mobile No.`, `Role`, `Location`) VALUES
(1, 'Anushka sharma', 746378377, 'Docker', ''),
(2, 'Bulbul sharma', 787665543, 'Lando', 'Jaipur'),
(3, 'suman', 947377323, 'Docker', 'Mumabi'),
(4, 'Vinita', 9857475433, 'Lando', 'Jaipur'),
(5, 'vishkha sharma', 947377323, 'Docker', 'jaipur'),
(6, 'Vinay sukhla', 984776742, 'Docker', 'Banglore'),
(7, 'Abhishek', 98877676, 'lando', 'Jaipur'),
(8, 'Vinita', 787665543, 'Docker', 'Mumbai'),
(9, 'Anushka sharma', 7654445623, 'lando', 'Mumabi'),
(10, 'kalpna singh', 958848334, 'Docker', 'Jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Mobile No.` int(10) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`Id`, `Name`, `Mobile No.`, `Role`, `Location`) VALUES
(1, 'Nitin', 746378377, 'Software Engineer', 'Jaipur'),
(2, 'Manish', 985747543, 'Full stack Developer', 'Jaipur'),
(3, 'Suresh', 8685479, 'Network engineer', 'Jaipur'),
(4, 'Rajesh', 787665543, 'System Admin', 'Jaipur'),
(5, 'Rajiv', 8754738, 'Software Tester', 'Jaipur'),
(6, 'suman', 86757434, 'Senior HR', 'Jaipur'),
(7, 'Aditya yadav', 95783743, 'Senior Software Engineer', 'Delhi'),
(8, 'Vikash', 675786887, 'Android Developer', 'Delhi'),
(9, 'Vinay', 857472355, 'Web devloper', 'Jaipur'),
(10, 'yash sharma', 958848334, 'junior Developer', 'jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `Frontend_Developer`
--

CREATE TABLE `Frontend_Developer` (
  `Id` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Mobile No.` bigint(10) NOT NULL,
  `Role` varchar(34) NOT NULL,
  `Location` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Frontend_Developer`
--

INSERT INTO `Frontend_Developer` (`Id`, `Name`, `Mobile No.`, `Role`, `Location`) VALUES
(1, 'Jennifer', 746378377, 'Vue js', 'Delhi'),
(2, 'Anjali Sharma', 985747543, 'UI/UX deginer', 'Banglore'),
(3, 'suman', 947377323, 'Vue js', 'Mumabi'),
(4, 'Anjali Sharma', 985747543, 'Web Designer', 'Jaipur'),
(5, 'Niti', 746378377, 'React Js', 'Landon'),
(6, 'Mukesh Sharma', 985747543, 'UI/UX deginer', 'Mumbai'),
(7, 'suman', 947377323, 'React Js', ''),
(8, 'Ankita', 787665543, 'UI/UX deginer', 'Banglore'),
(9, 'manisha', 746378377, 'React Js', 'Delhi'),
(10, 'Vinita', 787665543, 'Web Designer', 'Banglore');

-- --------------------------------------------------------

--
-- Table structure for table `Full-stack_developer`
--

CREATE TABLE `Full-stack_developer` (
  `Id` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Mobile No.` bigint(10) NOT NULL,
  `Role` varchar(34) NOT NULL,
  `Location` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Full-stack_developer`
--

INSERT INTO `Full-stack_developer` (`Id`, `Name`, `Mobile No.`, `Role`, `Location`) VALUES
(1, 'Niti', 7654445623, 'Full Stack PHP', 'Jaipur'),
(2, 'Anjali Sharma', 6757868878, 'Full stack Python', 'Jaipur'),
(3, 'Abhishek', 947377323, 'Full Stack PHP', 'Mumabi'),
(4, 'Ankita', 787665543, 'Full stack java', 'Jaipur'),
(5, 'suman', 7654445623, 'Full Stack PHP', 'Mumabi'),
(6, 'Ankita', 985747543, 'Full stack Python', 'Mumbai'),
(7, 'Abhishek', 76544456, 'Full Stack PHP', 'jaipur'),
(8, 'Vinay sukhla', 6757868878, 'Full stack Python', 'Delhi'),
(9, 'Rahul sharma', 76544456243, 'Full Stack Python', 'Delhi'),
(10, 'kalpna singh', 987654545, 'Full stack java', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `HR`
--

CREATE TABLE `HR` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mobile No.` bigint(10) NOT NULL,
  `Role` varchar(12) NOT NULL,
  `Location` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `HR`
--

INSERT INTO `HR` (`Id`, `Name`, `Mobile No.`, `Role`, `Location`) VALUES
(1, 'Rashmika', 99876545, 'junior HR', 'Delhi'),
(2, 'Vinita', 99887665, 'Junior HR', 'Delhi'),
(3, 'Pooja', 98877676, 'HR ', 'Jaipur'),
(4, 'Ankita', 987654545, 'Senior HR', 'Delhi'),
(5, 'suman', 76544456, 'Junior HR', 'Delhi'),
(6, 'Anjali Sharma', 998765554, 'Senior HR', 'Jaipur'),
(7, 'Niti', 87765444, 'Senior HR', 'Mumabi'),
(8, 'kalpna singh', 987545443, 'Junior HR', 'Banglore'),
(9, 'Anushka sharma', 947377323, 'HR', 'Jaipur'),
(10, 'Vinita', 985747543, 'Junior HR', 'Jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `Sales`
--

CREATE TABLE `Sales` (
  `id` int(11) NOT NULL,
  `Name` varchar(14) NOT NULL,
  `Mobile NO.` bigint(10) NOT NULL,
  `Role` varchar(36) NOT NULL,
  `Location` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Sales`
--

INSERT INTO `Sales` (`id`, `Name`, `Mobile NO.`, `Role`, `Location`) VALUES
(1, 'vishkha sharma', 987346835, 'busniess developer', 'Jaipur'),
(2, 'Vinay sukhla', 984853985, 'Busniess analiser', 'Delhi'),
(3, 'Abhishek', 776544433, 'Bussniess developer', 'jaipur'),
(4, 'Bulbul sharma', 876654368, 'sales', 'Mumbai'),
(5, 'manisha ', 874665344, 'Bussniess developer', 'Jaipur'),
(6, 'kalpna singh', 984853985, 'Busniess analiser', 'Jaipur'),
(7, 'suman', 987346835, 'busniess developer', 'Jaipur'),
(8, 'Bulbul sharma', 876654368, 'Busniess analiser', 'Delhi'),
(9, 'vishkha sharma', 776544433, 'Bussniess developer', 'jaipur'),
(10, 'Ankita', 984853985, 'sales', 'Banglore');

-- --------------------------------------------------------

--
-- Table structure for table `Trainee`
--

CREATE TABLE `Trainee` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Mobile No.` bigint(10) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Trainee`
--

INSERT INTO `Trainee` (`Id`, `Name`, `Mobile No.`, `Role`, `Location`) VALUES
(1, 'Vinit', 759784434, 'Full-stack Trainee', 'Jaipur'),
(2, 'Himanshu sharma', 984776742, 'Python Trainee', 'Jaipur'),
(3, 'Aditya Dhar Divedi', 947377323, 'Java Trainee', 'Jaipur'),
(4, 'Lokesh saini', 876558890, 'Full stack trainee', 'Delhi'),
(5, 'Mansi Sharma', 86743439, 'PHP trainee ', 'Mumbai'),
(6, 'Mukesh', 837438742, '.Net Trainee', 'Jaipur'),
(7, 'Nikhil Gupta', 765454436, 'web developer trainee', 'jaipur'),
(8, 'Priya sharma', 98845833, 'Java trainee', 'Jaipur'),
(9, 'Vidya Sharma', 98766555, 'Full stack trainee', 'Delhi'),
(10, 'Gourav Aggrawal', 875453534, 'PhP Trainee', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `Trainers`
--

CREATE TABLE `Trainers` (
  `Id` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Mobile No.` bigint(15) NOT NULL,
  `Role` varchar(35) NOT NULL,
  `Location` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Trainers`
--

INSERT INTO `Trainers` (`Id`, `Name`, `Mobile No.`, `Role`, `Location`) VALUES
(1, 'Abhishek', 746378377, 'Java Trainer', 'Jaipur'),
(2, 'Vinita', 998765554, 'Phython trainer', 'Banglore'),
(3, 'Rashmika', 947377323, 'Javascript trainer', 'Delhi'),
(4, 'Ankita', 787665543, 'Java Script trainer', 'Jaipur'),
(5, 'Pooja', 7654445623, 'Java Trainer', 'jaipur'),
(6, 'Anjali Sharma', 985747543, 'Phython trainer', 'Delhi'),
(7, 'Rahul sharma', 746378377, 'Javascript trainer', 'Delhi'),
(8, 'Anjali Sharma', 787665543, 'Phython trainer', 'Jaipur'),
(9, 'Anushka sharma', 7654445634, 'Java Trainer', ''),
(10, 'Bulbul sharma', 9857475433, 'Phython trainer', 'Mumbai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Accounts`
--
ALTER TABLE `Accounts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Clients`
--
ALTER TABLE `Clients`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Devops_Developer`
--
ALTER TABLE `Devops_Developer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Frontend_Developer`
--
ALTER TABLE `Frontend_Developer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Full-stack_developer`
--
ALTER TABLE `Full-stack_developer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `HR`
--
ALTER TABLE `HR`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Sales`
--
ALTER TABLE `Sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Trainee`
--
ALTER TABLE `Trainee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Trainers`
--
ALTER TABLE `Trainers`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Accounts`
--
ALTER TABLE `Accounts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Clients`
--
ALTER TABLE `Clients`
  MODIFY `Id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Devops_Developer`
--
ALTER TABLE `Devops_Developer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Frontend_Developer`
--
ALTER TABLE `Frontend_Developer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Full-stack_developer`
--
ALTER TABLE `Full-stack_developer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Sales`
--
ALTER TABLE `Sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Trainers`
--
ALTER TABLE `Trainers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
