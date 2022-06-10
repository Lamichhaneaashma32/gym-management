-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 12:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_name` varchar(30) NOT NULL,
  `Admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_name`, `Admin_password`) VALUES
('aashma', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `advance_register`
--

CREATE TABLE `advance_register` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` varchar(55) NOT NULL,
  `package` varchar(255) NOT NULL,
  `program` varchar(30) NOT NULL,
  `trainer` varchar(25) NOT NULL,
  `training` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advance_register`
--

INSERT INTO `advance_register` (`firstname`, `lastname`, `age`, `package`, `program`, `trainer`, `training`, `date`) VALUES
('Kushal', 'Rijal', '22', 'premium', 'weight-lifting', 'Mr.Kim', 'Sunday[7am-8am]', '2022-06-01'),
('Nikesh', 'Maharjan', '22', 'basic', 'cardiovascular', 'Mr.Robert', 'Monday[6pm-7pm]', '2022-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` varchar(30) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `attendance` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `firstname`, `lastname`, `age`, `date`, `attendance`) VALUES
('1', 'Kushal', 'Rijal', '22', '2022-5-16', 'Present'),
('2', 'Nikesh', 'Maharjan', '23', '2022-5-16', 'Present'),
('3', 'Aashma', 'Lamichhane', '22', '2022-5-16', 'Absent'),
('4', 'Bishal', 'Thapa', '23', '2022-5-16', 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `basic_register`
--

CREATE TABLE `basic_register` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `package` varchar(30) NOT NULL,
  `trainer` varchar(30) NOT NULL,
  `training` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_register`
--

INSERT INTO `basic_register` (`firstname`, `lastname`, `age`, `package`, `trainer`, `training`, `date`) VALUES
('Asha', 'Sharma', '21', 'zumba-dance', 'Miss Rita', 'Wednesday[4pm-6pm]', '2022-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `member_table`
--

CREATE TABLE `member_table` (
  `id` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_table`
--

INSERT INTO `member_table` (`id`, `firstname`, `lastname`, `age`) VALUES
('1', 'Kushal', 'Rijal', '22'),
('2', 'Nikesh', 'Maharjan', '23'),
('3', 'Aashma', 'Lamichhane', '22'),
('4', 'Bishal', 'Thapa', '23');

-- --------------------------------------------------------

--
-- Table structure for table `premium_register`
--

CREATE TABLE `premium_register` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` varchar(30) NOT NULL,
  `package` varchar(40) NOT NULL,
  `trainer` varchar(50) NOT NULL,
  `training` varchar(255) NOT NULL,
  `date` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premium_register`
--

INSERT INTO `premium_register` (`firstname`, `lastname`, `age`, `package`, `trainer`, `training`, `date`) VALUES
('Bishal', 'Thapa', '23', 'cardiovascular', 'Mr.Robert', 'Sunday[7am-8am]', '2022-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Fname`, `Lname`, `email`, `password`) VALUES
('kushal', 'rijal', 'kushal@gmail.com', '$2y$10$RaAIeGYczaj0AHZvY1vZa.rrw3Hn60FkRHG9pc87AkHgrmltUP3de'),
('nikesh', 'maharjan', 'nikesh@gmail.com', '$2y$10$yssSBP3m47ZOQXr2OzVixOGQ3nQbi.uOTCQTo.4GEZYvYxfLhijXW');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
   PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `name`, `email`, `contact`) VALUES
('121', 'Jean Shrestha', 'jean@gmail.com', '9800234567'),
('122', 'Rita Das', 'rita@gmail.com', '9812345678'),
('123', 'Robert Thapa', 'robert@gmail.com', '9823123243'),
('124', 'Kim Rai', 'kim@gmail.com', '9822221112');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(55) NOT NULL,
  `equipment` varchar(55) NOT NULL,
  `trainers` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`firstname`, `lastname`, `email`, `equipment`, `trainers`) VALUES
('Nikesh', 'Maharjan', 'nikesh@gmail.com', 'Excellent', 'Bad'),
('kushal', 'rijal', 'kushal@gmail.com', 'Excellent', 'Average');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_table`
--
ALTER TABLE `member_table`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
