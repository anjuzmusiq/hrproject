-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 18, 2020 at 05:35 AM
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
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `application_no` int(4) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(600) NOT NULL,
  `mobile` double NOT NULL,
  `date_of_apply` date NOT NULL,
  `dob` date NOT NULL,
  `application_status` varchar(20) NOT NULL,
  `status` varchar(80) NOT NULL,
  PRIMARY KEY (`application_no`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application_no`, `f_name`, `l_name`, `gender`, `department`, `designation`, `nationality`, `marital_status`, `email`, `address`, `mobile`, `date_of_apply`, `dob`, `application_status`, `status`) VALUES
(2, 'Anjali', 'Soorej', 'female', 'accounts and finance', 'manager', 'indian', 'manager', '14@gmail.com', 'Flat no:6J Infra Vantage Appartments\r\nopposite CSEZ', 9633275944, '2020-03-02', '1999-10-02', 'selected', 'open'),
(3, 'Abhishek', 'Arun', 'male', 'product development', 'asst manager', 'indian', 'asst manager', 'imca-154@scmsgroup.org', 'tgtgtvyg', 9995885944, '2020-07-12', '1999-05-02', 'applied', 'open'),
(6, 'Ria', 'Joseph', 'female', 'sales and marketing', 'asst manager', 'iranian', 'manager', 'riajoseph@gmail.com', 'My house', 2890095555, '2027-04-09', '2004-06-23', 'rejected', 'open'),
(7, 'george', 'vincen', 'male', 'sales and marketing', 'manager', 'indian', 'manager', 'gmvk@gmail.com', 'cheranalloor', 8281465929, '2020-06-17', '1999-05-12', 'selected', 'open'),
(9, 'emmanuel', 'jacob', 'male', 'sales and marketing', 'asst manager', 'indian', 'manager', 'emmanuel@gmail.com', 'kalamassery', 8897098756, '2020-02-17', '1999-10-25', 'selected', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `complaint_id` int(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `email`, `subject`, `detail`) VALUES
(1, '13', 'plz change my working hours', 'night hours should be reduced'),
(2, 'mydhilysoorej@gmail.com', 'better working conditions', 'there should be sufficient facilities for employees to work'),
(3, 'gmvk@gmail.com', 'salary', 'please make sure that the salary slip is issued on date');

-- --------------------------------------------------------

--
-- Table structure for table `dd`
--

DROP TABLE IF EXISTS `dd`;
CREATE TABLE IF NOT EXISTS `dd` (
  `dd_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_id` int(11) NOT NULL,
  `desig_id` int(11) NOT NULL,
  `vacancy_status` varchar(20) NOT NULL,
  `last_date` date NOT NULL,
  PRIMARY KEY (`dd_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dd`
--

INSERT INTO `dd` (`dd_id`, `dept_id`, `desig_id`, `vacancy_status`, `last_date`) VALUES
(1, 1, 1, 'available', '2020-07-09'),
(2, 1, 2, 'available', '2020-07-09'),
(3, 1, 3, 'available', '2020-07-09'),
(4, 2, 1, 'available', '2020-07-09'),
(5, 2, 2, 'available', '2020-07-09'),
(6, 2, 3, 'available', '2020-07-09'),
(7, 3, 1, 'available', '2020-07-09'),
(8, 3, 2, 'available', '2020-07-09'),
(9, 3, 3, 'available', '2020-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` int(4) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(50) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'accounts and finance'),
(2, 'sales and marketing'),
(3, 'product development');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
CREATE TABLE IF NOT EXISTS `designation` (
  `desig_id` int(4) NOT NULL AUTO_INCREMENT,
  `desig_name` varchar(50) NOT NULL,
  PRIMARY KEY (`desig_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`desig_id`, `desig_name`) VALUES
(1, 'manager'),
(2, 'asst manager'),
(3, 'team leader');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(4) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(15) NOT NULL,
  `l_name` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobile` double NOT NULL,
  `salary` int(12) NOT NULL,
  `join_date` date NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(15) NOT NULL,
  `c_password` varchar(15) NOT NULL,
  `emp_status` varchar(15) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `f_name`, `l_name`, `gender`, `department`, `designation`, `email`, `address`, `mobile`, `salary`, `join_date`, `dob`, `password`, `c_password`, `emp_status`) VALUES
(1, 'abc', 'xy', 'female', 'product development', 'manager', '13@gmail.com', 'palarivattom ', 9995885940, 50000, '2019-10-31', '2020-02-15', 'emp4', 'emp4', 'working'),
(8, 'Anjali', 'Soorej', 'female', 'accounts and finance', 'Manager', 'anjalisoorej@gmail.com', 'infra vantage', 9544468755, 50000, '2005-05-05', '1999-10-02', '123', '123', 'working'),
(9, 'Mydhily', 'Soorej', 'female', 'research', 'manager', 'mydhilysoorej@gmail.com', ' csez p.o          ', 9633275944, 50000, '2017-04-24', '2005-05-18', 'saam123', 'saam123', 'working'),
(11, 'muhamed', 'roshan', 'male', 'product development', 'team leader', 'roshanshakeer7025@gmail.com', 'eramangalath(h)\r\nchendamangalam po\r\nkizhakkumpuram\r\nn paravur 683512', 7025736503, 200000, '2019-02-12', '1999-03-26', 'qwerty123', 'qwerty123', 'working'),
(10, 'Athul', 'T S', 'male', 'accounts and finance', 'manager', 'sanuchandra90@gmail.com', 'vytilla', 9447545213, 1000000, '2020-01-31', '1999-08-07', 'athulsajeev1#', 'athulsajeev1#', 'working'),
(19, 'george', 'vincen', 'male', 'sales and marketing', 'manager', 'gmvk@gmail.com', 'cheranalloor    ', 8281465929, 450000, '2020-06-18', '1999-05-12', 'kuta123', 'kuta123', 'working'),
(20, 'emmanuel', 'jacob', 'male', 'sales and marketing', 'asst manager', 'emmanuel@gmail.com', 'kalamassery ', 8897098756, 100000, '2020-07-01', '1999-10-25', 'emanu123', 'emanu123', 'working');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

DROP TABLE IF EXISTS `leaves`;
CREATE TABLE IF NOT EXISTS `leaves` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `days` int(5) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `l_status` varchar(25) NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`l_id`, `email`, `reason`, `days`, `from_date`, `to_date`, `l_status`) VALUES
(1, '13', 'cold', 2, '2020-03-02', '2020-03-04', 'approved'),
(2, 'mydhilysoorej@gmail.com', 'sister marriage', 6, '2005-05-02', '2005-05-08', 'approved'),
(3, 'mydhilysoorej@gmail.com', 'sister marriage', 4, '2027-08-05', '2027-08-09', 'applied'),
(4, 'mydhilysoorej@gmail.com', 'fever', 4, '2020-05-03', '2020-02-07', 'approved'),
(5, 'mydhilysoorej@gmail.com', 'fever', 4, '2027-05-12', '2027-05-16', 'approved'),
(6, 'mydhilysoorej@gmail.com', 'corona', 3, '2021-05-17', '2021-05-19', 'applied'),
(7, 'gmvk@gmail.com', 'fever', 3, '2020-06-19', '2020-06-21', 'approved'),
(8, 'gmvk@gmail.com', 'marriage', 1, '2020-07-12', '2020-07-12', 'approved'),
(9, 'emmanuel@gmail.com', 'fever', 2, '2020-07-23', '2020-07-23', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` varchar(16) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `type`) VALUES
('12@gmail.com', 'admin', 'admin'),
('13@gmail.com', 'emp', 'employee'),
('anjalisoorej@gmail.com', '123', 'employee'),
('mydhilysoorej@gmail.com', 'saam', 'employee'),
('sanuchandra90@gmail.com', 'athulsajeev1#', 'employee'),
('roshanshakeer7025@gmail.com', 'qwerty123', 'employee'),
('gmvk@gmail.com', 'kuta123', 'employee'),
('emmanuel@gmail.com', 'emanu123', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `sal_id` int(4) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `month` int(20) NOT NULL,
  `year` int(11) NOT NULL,
  `salary` float NOT NULL,
  `no_leave` int(11) NOT NULL,
  `da` float NOT NULL,
  `pf` float NOT NULL,
  `hra` float NOT NULL,
  `net_pay` float NOT NULL,
  `sal_status` varchar(20) NOT NULL,
  PRIMARY KEY (`sal_id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`sal_id`, `emp_id`, `month`, `year`, `salary`, `no_leave`, `da`, `pf`, `hra`, `net_pay`, `sal_status`) VALUES
(107, 1, 7, 2020, 50000, 0, 10000, 3500, 25000, 81500, 'issued'),
(55, 9, 6, 2020, 50000, 3, 10000, 3500, 25000, 81500, 'issued'),
(56, 19, 6, 2020, 450000, 3, 90000, 31500, 225000, 733500, 'issued'),
(106, 10, 7, 2020, 1000000, 0, 200000, 70000, 500000, 1630000, 'issued'),
(37, 1, 1, 2000, 50000, 1, 10000, 3500, 25000, 81500, 'issued'),
(38, 11, 1, 2000, 200000, 0, 40000, 14000, 100000, 326000, 'issued'),
(39, 9, 1, 2000, 50000, 0, 10000, 3500, 25000, 81500, 'issued'),
(36, 10, 1, 2000, 1000000, 0, 200000, 70000, 500000, 1630000, 'issued'),
(35, 8, 1, 2000, 50000, 0, 10000, 3500, 25000, 81500, 'issued'),
(51, 8, 6, 2020, 50000, 0, 10000, 3500, 25000, 81500, 'issued'),
(52, 10, 6, 2020, 1000000, 3, 200000, 70000, 500000, 1630000, 'issued'),
(53, 1, 6, 2020, 50000, 3, 10000, 3500, 25000, 81500, 'issued'),
(54, 11, 6, 2020, 200000, 3, 40000, 14000, 100000, 326000, 'issued'),
(108, 11, 7, 2020, 200000, 0, 40000, 14000, 100000, 326000, 'issued'),
(109, 9, 7, 2020, 50000, 0, 10000, 3500, 25000, 81500, 'issued'),
(110, 19, 7, 2020, 450000, 1, 90000, 31500, 225000, 733500, 'issued'),
(111, 20, 7, 2020, 100000, 2, 20000, 7000, 50000, 163000, 'issued'),
(105, 8, 7, 2020, 50000, 0, 10000, 3500, 25000, 81500, 'issued');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
