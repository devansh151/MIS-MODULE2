-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2013 at 08:56 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_details`
--

CREATE TABLE IF NOT EXISTS `academic_details` (
  `sr` int(2) NOT NULL,
  `rollno` int(9) NOT NULL,
  `semester` int(1) NOT NULL,
  `exam` varchar(10) NOT NULL,
  `credit` int(3) NOT NULL,
  `egp` int(3) NOT NULL,
  `gpa` float NOT NULL,
  `result` varchar(4) NOT NULL,
  `total_credits` int(3) NOT NULL,
  `total_egp` int(3) NOT NULL,
  `cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_details`
--

INSERT INTO `academic_details` (`sr`, `rollno`, `semester`, `exam`, `credit`, `egp`, `gpa`, `result`, `total_credits`, `total_egp`, `cgpa`) VALUES
(1, 205112009, 3, 'Nov 2013', 19, 0, 0, '', 19, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admission_details`
--

CREATE TABLE IF NOT EXISTS `admission_details` (
  `rollno` int(9) NOT NULL,
  `father` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `doa` date NOT NULL,
  `religion` varchar(20) NOT NULL,
  `catagory` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(11) NOT NULL,
  `bloodgroup` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_details`
--

INSERT INTO `admission_details` (`rollno`, `father`, `mother`, `doa`, `religion`, `catagory`, `gender`, `dob`, `nationality`, `bloodgroup`, `status`) VALUES
(205112009, 'Satish Khanwalkar', 'Kalpana Khanwalkar', '2012-07-16', 'Hindu', 'General', 'Male', '1990-01-04', 'Indian', 'O+', 'hosteler');

-- --------------------------------------------------------

--
-- Table structure for table `course_reg`
--

CREATE TABLE IF NOT EXISTS `course_reg` (
  `course` varchar(100) NOT NULL,
  `credits` int(3) NOT NULL,
  `slot` int(1) NOT NULL,
  `accepted` int(1) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `semester` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feereceipt_details`
--

CREATE TABLE IF NOT EXISTS `feereceipt_details` (
  `rollno` int(9) NOT NULL,
  `sr` int(2) NOT NULL,
  `semester` int(1) NOT NULL,
  `challan_date` date NOT NULL,
  `rec_no` varchar(20) NOT NULL,
  `rec_date` date NOT NULL,
  `dd_no` varchar(10) NOT NULL,
  `dd_date` date NOT NULL,
  `dd_amt` int(5) NOT NULL,
  `cash_amt` int(5) NOT NULL,
  `total_amt` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fee_details`
--

CREATE TABLE IF NOT EXISTS `fee_details` (
  `rollno` int(9) NOT NULL,
  `semester` int(1) NOT NULL,
  `hostelpaid` int(5) NOT NULL,
  `tutionpaid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` int(9) NOT NULL,
  `password` int(9) NOT NULL,
  `log_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `log_status`) VALUES
(205112009, 205112009, 1),
(205112019, 205112019, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE IF NOT EXISTS `mess` (
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stud_id` int(5) NOT NULL,
  `rollno` int(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `semester` int(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `batch` int(4) NOT NULL,
  `year` int(1) NOT NULL,
  `hostel` varchar(50) NOT NULL,
  `room` int(3) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `rollno`, `name`, `branch`, `semester`, `email`, `batch`, `year`, `hostel`, `room`, `address`) VALUES
(17568, 205112009, 'Devansh Khanwalkar', 'Master Of Computer Application', 3, 'devansh151@gmail.com', 2015, 2, 'Aquamarine-A', 49, ''),
(17659, 205112019, 'Mayura Bakshi', 'computer applications', 3, 'mayurabakshi2@gmail.com', 2015, 2, 'opal-E', 98, '');

-- --------------------------------------------------------

--
-- Table structure for table `stud_attendance`
--

CREATE TABLE IF NOT EXISTS `stud_attendance` (
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
