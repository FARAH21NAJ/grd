-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2023 at 11:59 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purehelth`
--

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `center_phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `typetreat` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `incure_phone` varchar(255) NOT NULL,
  `location_city` varchar(255) NOT NULL,
  `location_country` varchar(255) NOT NULL,
  `location_street` varchar(255) NOT NULL,
  `location_state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `center_staff`
--

CREATE TABLE `center_staff` (
  `center_phone` varchar(255) NOT NULL,
  `satff` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_cmpany`
--

CREATE TABLE `insurance_cmpany` (
  `insur_phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_phone` varchar(255) NOT NULL,
  `DateBirth` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `snn` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `medical_photo` varchar(255) NOT NULL,
  `midication` varchar(255) NOT NULL,
  `medical_history` varchar(255) NOT NULL,
  `insur_ph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_phone`, `DateBirth`, `fname`, `lname`, `gender`, `age`, `snn`, `pass`, `medical_photo`, `midication`, `medical_history`, `insur_ph`) VALUES
('0776543211', '2000-07-06', 'adel', 'amjad', 'male', '23', '1234554321', '123456', '', '', '', ''),
('0781231234', '2006-06-07', 'tala', 'ahmad', 'female', '17', '1234567894', 'tala123', '', '', '', ''),
('0786135942', '2003-06-18', 'sara', 'ahmad', 'female', '20', '0987654321', 'sara1234', '', '', '', ''),
('0791212121', '2006-07-05', 'sami', 'tareq', 'male', '20', '1212121212', 'sami123', '', '', '', ''),
('0791234564', '', 'a', 'b', 'male', '22', '123456789', '12345678', '', '', '', ''),
('0798765432', '2008-07-06', 'sara', 'amjad', 'female', '20', '3456789', 'sara123', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `physiotherapy`
--

CREATE TABLE `physiotherapy` (
  `physiotherapy_phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `experince` varchar(255) NOT NULL,
  `appiontmen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `physiotherapy`
--

INSERT INTO `physiotherapy` (`physiotherapy_phone`, `password`, `fname`, `lname`, `gender`, `age`, `experince`, `appiontmen`) VALUES
('0771111111', '1234512345', 'Ahmad', 'Abdullah', 'male', '35', 'chronic_diseases', '0000-00-00'),
('0772222222', '12345678', 'Ali', 'Majed', 'male', '30', 'musculoskeletal', '0000-00-00'),
('0773333333', '121212', 'Sally', 'Mohammed', 'female', '32', 'Sports_physio', '0000-00-00'),
('0774444444', '234432', 'Sara', 'Omar', 'female', '34', 'Neurological', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tool`
--

CREATE TABLE `tool` (
  `tool_id` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `function` varchar(255) NOT NULL,
  `availablity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `treat`
--

CREATE TABLE `treat` (
  `patient_phone_number` varchar(255) NOT NULL,
  `physiotherapy_phone` varchar(255) NOT NULL,
  `appointment` varchar(255) NOT NULL,
  `location_city` varchar(255) NOT NULL,
  `location_state` varchar(255) NOT NULL,
  `location_country` varchar(255) NOT NULL,
  `location_street` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `use1`
--

CREATE TABLE `use1` (
  `toolid` varchar(255) NOT NULL,
  `center_ph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `use2`
--

CREATE TABLE `use2` (
  `tool_num` varchar(255) NOT NULL,
  `physiotherapy_ph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `work_on`
--

CREATE TABLE `work_on` (
  `physiotherapy_phone22` varchar(255) NOT NULL,
  `center_phone22` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`center_phone`),
  ADD KEY `con3` (`incure_phone`);

--
-- Indexes for table `center_staff`
--
ALTER TABLE `center_staff`
  ADD KEY `con33` (`center_phone`);

--
-- Indexes for table `insurance_cmpany`
--
ALTER TABLE `insurance_cmpany`
  ADD PRIMARY KEY (`insur_phone`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_phone`);

--
-- Indexes for table `physiotherapy`
--
ALTER TABLE `physiotherapy`
  ADD PRIMARY KEY (`physiotherapy_phone`);

--
-- Indexes for table `tool`
--
ALTER TABLE `tool`
  ADD PRIMARY KEY (`tool_id`);

--
-- Indexes for table `treat`
--
ALTER TABLE `treat`
  ADD KEY `con` (`patient_phone_number`),
  ADD KEY `con1` (`physiotherapy_phone`);

--
-- Indexes for table `use1`
--
ALTER TABLE `use1`
  ADD KEY `del3` (`toolid`),
  ADD KEY `del4` (`center_ph`);

--
-- Indexes for table `use2`
--
ALTER TABLE `use2`
  ADD KEY `del1` (`tool_num`),
  ADD KEY `del2` (`physiotherapy_ph`);

--
-- Indexes for table `work_on`
--
ALTER TABLE `work_on`
  ADD PRIMARY KEY (`physiotherapy_phone22`,`center_phone22`),
  ADD KEY `con5` (`center_phone22`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `center`
--
ALTER TABLE `center`
  ADD CONSTRAINT `con3` FOREIGN KEY (`incure_phone`) REFERENCES `insurance_cmpany` (`insur_phone`);

--
-- Constraints for table `center_staff`
--
ALTER TABLE `center_staff`
  ADD CONSTRAINT `con33` FOREIGN KEY (`center_phone`) REFERENCES `center` (`center_phone`);

--
-- Constraints for table `treat`
--
ALTER TABLE `treat`
  ADD CONSTRAINT `con1` FOREIGN KEY (`physiotherapy_phone`) REFERENCES `physiotherapy` (`physiotherapy_phone`);

--
-- Constraints for table `use1`
--
ALTER TABLE `use1`
  ADD CONSTRAINT `del3` FOREIGN KEY (`toolid`) REFERENCES `tool` (`tool_id`),
  ADD CONSTRAINT `del4` FOREIGN KEY (`center_ph`) REFERENCES `center` (`center_phone`);

--
-- Constraints for table `use2`
--
ALTER TABLE `use2`
  ADD CONSTRAINT `del1` FOREIGN KEY (`tool_num`) REFERENCES `tool` (`tool_id`),
  ADD CONSTRAINT `del2` FOREIGN KEY (`physiotherapy_ph`) REFERENCES `physiotherapy` (`physiotherapy_phone`);

--
-- Constraints for table `work_on`
--
ALTER TABLE `work_on`
  ADD CONSTRAINT `con4` FOREIGN KEY (`physiotherapy_phone22`) REFERENCES `physiotherapy` (`physiotherapy_phone`),
  ADD CONSTRAINT `con5` FOREIGN KEY (`center_phone22`) REFERENCES `center` (`center_phone`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */; 
CREATE TABLE `app_book1` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `date` date NOT NULL, -- Add the Date column
  `time_slot` varchar(10) NOT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT '0',
  `color` varchar(255) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

CREATE TABLE `app_book2` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `date` date NOT NULL, -- Add the Date column
  `time_slot` varchar(10) NOT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT '0',
  `color` varchar(255) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `app_book3` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `date` date NOT NULL, -- Add the Date column
  `time_slot` varchar(10) NOT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT '0',
  `color` varchar(255) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

CREATE TABLE `app_book4` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `date` date NOT NULL, -- Add the Date column
  `time_slot` varchar(10) NOT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT '0',
  `color` varchar(255) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

