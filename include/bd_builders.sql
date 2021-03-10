-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 09:15 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_builders`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE `job_posts` (
  `job` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `description` text NOT NULL,
  `deadline` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(40) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_posts`
--

INSERT INTO `job_posts` (`job`, `type`, `title`, `company`, `email`, `location`, `phone`, `description`, `deadline`, `date`, `time`, `p_id`) VALUES
('20000', 'Full Time', 'Junior Software Engineer', 'Habibi Technology', 'zmemon046@gmail.com', 'Sylhet', 1521327534, 'There is a circular going on for Junior software engineer in our company. Please do leave your CV and Apply.\r\n\r\n		  ', '30.01.2020', '19.01.2020', '01:05:48 am', 32),
('Negotiable', 'Freelance', 'Kamla', 'Hunululu Tech.', 'kamrulh@gmail.com', 'Rongpur', 1521327534, 'There is a job for the kamla post in our company. Feel free to apply.		  ', '26.02.2020', '19.01.2020', '01:06:28 am', 33),
('15000', 'Part Time', 'Ward Boy', 'North East Medical College', 'zmemon046@gmail.com', 'Sylhet', 1711376460, '		There is a post for ward boy section in our medical . Drop your CV and apply.		  ', '01.02.2020', '19.01.2020', '01:07:24 am', 34),
('Negotiable', 'Temporary', 'Office Assistant', 'Tahmina Traders', 'polash@gmail.com', 'Dhaka', 1777888999, 'There is a job for the post of office boy in our company . Apply for selection.		  ', '02.02.2020', '19.01.2020', '01:08:22 am', 36),
('Negotiable', 'Full Time', 'Junior Software Engineer', 'Hunululu', 'zmemon046@gmail.com', 'Dhaka', 1711376460, 'There is vacancy going on for Junior Software Engineering post in our company. Feel free to apply.		  ', '26.02.2020', '19.01.2020', '01:09:56 am', 37),
('15000', 'Full Time', 'Cleaner', 'Ajob company', 'ajob@gamil.com', 'Rajshahi', 1547554545, 'Amader aikhane akjon cleaner lagbe.				  ', '20.01.2020', '19.01.2020', '01:11:52 am', 41),
('20000', 'Temporary', 'Kamla', 'Habibi Telecom', 'habibi@gmai.com', 'Chattagram', 1521321555, 'There is a job vacancy for kamla in our company.				  ', '02.02.2020', '19.01.2020', '01:38:15 am', 42);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `pass`, `user_id`, `location`, `name`) VALUES
('emon@gmail.com', 'zamai', 'emon046', 'Dhaka', 'Zahid Mahmud'),
('hajsdjk@gmail.com', 'sdf', 'asif', 'syl', 'asdfaasdfas'),
('shahanahmed668@gmail.com', '123', 'shahan', 'syl', 'ABUSHAHAN'),
('zzz@gmail.com', 'sss', 'zady', 'Dhaka', 'qq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
