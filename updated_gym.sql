-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 10:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
('aashma', '12345678'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `advance_register`
--

CREATE TABLE `advance_register` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `age` varchar(55) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `program` varchar(30) NOT NULL,
  `trainer` varchar(25) NOT NULL,
  `training` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advance_register`
--

INSERT INTO `advance_register` (`id`, `name`, `username`, `email`, `password`, `age`, `contact`, `address`, `package`, `program`, `trainer`, `training`, `date`, `status`) VALUES
(2, 'Nikesh', 'Maharjan', '', '', '22', '', '', 'basic', 'cardiovascular', 'Mr.Robert', 'Monday[6pm-7pm]', '2022-06-01', 'UNVERIFIED'),
(3, 'fuchhu', 'fuchhu', '', '', '12', '', '', 'basic', 'yoga', '128', '', '2022-05-20', 'VERIFIED'),
(4, 'bruno', 'bruno', '', '', '2', '', '', 'premium', 'zumba-dance', ' aashma                  ', '', '2022-05-18', 'VERIFIED'),
(5, 'mooney', 'mooney', '', '', '21', '', '', 'basic', 'zumba-dance', ' ayush                   ', '', '2022-05-19', 'VERIFIED'),
(6, 'bruni bruno', 'bruno', '', '$2y$10$oV.duEQd1N9y0Ji40Uab1uhLclcVr9OcFdG063YjckQPOsO/xQI02', '2', '3216549877', 'bruno', 'basic', 'yoga', ' aashma                  ', '', '2022-05-28', 'UNVERIFIED'),
(7, 'brunoo', 'brunoo', 'brunoo@gmail.com', '$2y$10$eQjO43b7QrE7CL0YbNe/tOeWuCx36k3qU3B8A4d9tK0pUj7W1Fcgu', '2', '3211233211', 'brunoo', 'basic', 'yoga', ' aashma                  ', '', '2022-06-11', 'VERIFIED');

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
('4', 'Bishal', 'Thapa', '23', '2022-5-16', 'Absent'),
('1', 'Kushal', 'Rijal', '22', '2022-5-19', 'Present'),
('2', 'Nikesh', 'Maharjan', '23', '2022-5-19', 'Present'),
('3', 'Aashma', 'Lamichhane', '22', '2022-5-19', 'Present'),
('4', 'Bishal', 'Thapa', '23', '2022-5-19', 'Absent');

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
('nikesh', 'maharjan', 'nikesh@gmail.com', '$2y$10$yssSBP3m47ZOQXr2OzVixOGQ3nQbi.uOTCQTo.4GEZYvYxfLhijXW'),
('ashu', 'ashu', 'ashu@gmail.com', '$2y$10$UlXniMm04Dk9Ta5r/36VN.4g.f6khh.Jyq6uUFLuYiSW4DikyTvo6'),
('narayan ', 'naraan', 'narayan@gmail.com', '$2y$10$jfsqp95rwh3WFLbi8UT6FuXjmlYcjaSZtrbQg9XpLDAnNsEF0zGCe');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `name`, `email`, `contact`, `program`, `time`) VALUES
(121, 'Jean Shrestha', 'jean@gmail.com', '9800234567', '', ''),
(122, 'Rita Das', 'rita@gmail.com', '9812345678', '', ''),
(123, 'Robert Thapa', 'robert@gmail.com', '9823123243', '', ''),
(124, 'Kim Rai', 'kim@gmail.com', '9822221112', '', ''),
(125, 'ashumaa', 'asjumam@gmail.com', '3216546549', '', ''),
(126, 'ayush', 'ayush@gmail.com', '321654987', 'day', '12 pm: 2 pm'),
(127, 'ayush', 'ayush@gmail.com', '321654987', 'day', '12 pm: 2 pm'),
(128, 'aashma', 'aashma@gmail.com', '3216549897', 'yoga', '6pm:8pm'),
(129, 'aashma', 'aashma@gmail.com', '3216549897', 'yoga', '6pm:8pm');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(55) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`firstname`, `lastname`, `email`, `trainer_id`, `rating`) VALUES
('Nikesh', 'Maharjan', 'nikesh@gmail.com', 0, 0),
('kushal', 'rijal', 'kushal@gmail.com', 0, 0),
('ashma', 'ashma', 'ashma@gmail.com', 125, 2),
('ashma', 'ashma', 'ashma@gmail.com', 125, 2),
('ashma', 'ashma', 'ashma@gmail.com', 125, 2),
('aashmaa', 'aashmaa', 'ashu@gmail.com', 121, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advance_register`
--
ALTER TABLE `advance_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_table`
--
ALTER TABLE `member_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advance_register`
--
ALTER TABLE `advance_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
