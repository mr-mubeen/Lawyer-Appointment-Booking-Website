-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 11:11 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyers`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `a_id` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `appoint_service` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `ClientID` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `c_contact` int(11) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ClientID`, `c_name`, `Email`, `City`, `c_contact`, `Gender`, `password`) VALUES
(3, 'mubeen', 'mubeen12@gmail.com', 'karachi', 134234, 'Male', 'mubeen'),
(4, 'Bilald', 'abc@gmail.com', 'lahore', 2147483647, 'male', 'bilal'),
(7, 'faraz', '4234@adas.com', 'karachi', 234234, 'Male', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(11) NOT NULL,
  `cont_name` varchar(50) NOT NULL,
  `ct_contact` int(11) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `cont_name`, `ct_contact`, `message`) VALUES
(1, 'zvf', 342424, 'gh'),
(2, 'zvf', 342424, 'gh'),
(3, 'zvf', 342424, 'gh');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `LawyerID` int(11) NOT NULL,
  `nic` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Specialization` varchar(50) NOT NULL,
  `Cases_done` int(11) NOT NULL,
  `Success_cases` int(11) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Services` varchar(50) NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`LawyerID`, `nic`, `Name`, `Specialization`, `Cases_done`, `Success_cases`, `Contact`, `Location`, `Services`, `image`) VALUES
(1, 2147483647, 'aHMED HASSAN', 'Criminal', 65, 45, 2147483647, 'Karachi', 'Criminal', 'case-img.jpg'),
(2, 2147483647, 'Fahad Ahmed', 'civil', 34, 27, 342424123, 'Lahore', 'Insurance ', 'comment-post-1.jpg'),
(3, 1283597235, 'Sarah', 'Family', 34, 23, 2147483647, 'Hyderabad', 'Criminal', 'author-img.jpg'),
(4, 896124763, 'SAAD', 'civil', 54, 43, 342424123, 'Multan', 'Criminal', 'comment-post-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `l_id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`l_id`, `location`) VALUES
(1, 'Karachi'),
(2, 'Hyderabad'),
(3, 'Lahore'),
(4, 'Multan');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `service` varchar(50) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `service`, `details`) VALUES
(1, 'Property', 'Here you may find information about family law in Pakistan. Our team of family lawyers best assist their clients in resolving family law.\r\nHere you may find information about family law in Pakistan. Our team of family lawyers best assist their clients in '),
(2, 'Criminal', 'The enforcement of criminal law should reflect the society’s disapprobation for criminal activity through apprehending.The enforcement of criminal law should reflect the society’s disapprobation for criminal activity through apprehending.'),
(3, 'Family', 'Family law (also called matrimonial law or the law of domestic relations) is an area of the law that deals with family matters and domestic relations.[1]Family law (also called matrimonial law or the law of domestic relations) is an area of the law that d'),
(5, 'Buisness', 'The corporate law of Pakistan has its roots in Partnership Act 1932, we need to develop many new areas of law especially tort law.Commercial law, also known as mercantile law or trade law, is the body of law that applies to the rights, relations, and cond'),
(6, 'Offense', 'A breach of law; a crime. An offense may consist of a felony or a misdemeanor. The term is used to indicate a violation of public rights as opposed to private ones. For example, murder is an offense whereas libel is not.'),
(7, 'civil', 'Civil law is a major branch of the law. In common law legal systems such as England and Wales and the United States, the term refers to non-criminal law. The law relating to civil wrongs and quasi-contracts is part of the civil law, as is law of property '),
(8, 'Insurance ', 'Insurance law is the practice of law surrounding insurance, including insurance policies and claims. It can be broadly broken into three categories - regulation of the business of insurance; regulation of the content of insurance policies, especially with'),
(9, 'Personal Injury', 'Personal injury law refers to the legal remedies and defenses involved in civil lawsuits brought as a result of wrongful conduct. In fact, the word \"tort\" comes from a Latin term meaning twist, wrong, or harm. ... Most personal injury cases are based on t'),
(10, 'Property', 'Property law is the area of law that governs the various forms of ownership in real property (land) and personal property. Property refers to legally protected claims to resources, such as land and personal property, including intellectual property.[1] Pr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ClientID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`LawyerID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `ClientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `LawyerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
