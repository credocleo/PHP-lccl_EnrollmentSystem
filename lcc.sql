-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2015 at 09:02 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `co_course_id` int(30) NOT NULL,
  `co_courses` varchar(100) NOT NULL,
  `co_course_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prospectus`
--

CREATE TABLE IF NOT EXISTS `prospectus` (
  `per_cmo` varchar(50) NOT NULL,
  `major_in` varchar(50) NOT NULL,
  `prospectus_course` varchar(100) NOT NULL,
  `prospectus_sy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prospectus_subjects`
--

CREATE TABLE IF NOT EXISTS `prospectus_subjects` (
  `ps_prospectus_id` int(30) NOT NULL,
  `ps_subject_id` int(30) NOT NULL,
  `ps_year_level` varchar(30) NOT NULL,
  `ps_sem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id_number` int(20) NOT NULL,
  `student_last_name` varchar(50) NOT NULL,
  `student_first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `prospectus_course` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `home_tellno` varchar(20) NOT NULL,
  `city_address` varchar(100) NOT NULL,
  `cell_no` varchar(20) NOT NULL,
  `boarding_address` varchar(100) NOT NULL,
  `boarding_cel_no` varchar(20) NOT NULL,
  `provincial_address` varchar(100) NOT NULL,
  `provincial_tel_no` varchar(20) NOT NULL,
  `email_address` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `civil_status` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `name_of_spouse_if_married` varchar(50) NOT NULL,
  `name_of_employer_if_working` varchar(50) NOT NULL,
  `employer_address` varchar(100) NOT NULL,
  `employer_cel_no` varchar(20) NOT NULL,
  `fathers_name` varchar(50) NOT NULL,
  `fathers_occupation` varchar(50) NOT NULL,
  `father_educ_attainment` varchar(50) NOT NULL,
  `mothers_name` varchar(50) NOT NULL,
  `mothers_occupation` varchar(50) NOT NULL,
  `mother_educ_attainment` varchar(50) NOT NULL,
  `guardians_name` varchar(50) NOT NULL,
  `guardian_occupation` varchar(50) NOT NULL,
  `guardians_address` varchar(100) NOT NULL,
  `guardians_cel_no` varchar(20) NOT NULL,
  `guardian_educ_attainment` varchar(50) NOT NULL,
  `guardian_relationship` varchar(50) NOT NULL,
  `grades_to_be_sent_to` varchar(50) NOT NULL,
  `grades_to_sent_address` varchar(100) NOT NULL,
  `grades_cel_no` varchar(20) NOT NULL,
  `elementary` varchar(50) NOT NULL,
  `elementary_sy` varchar(20) NOT NULL,
  `elementary_address` varchar(100) NOT NULL,
  `high_school` varchar(50) NOT NULL,
  `high_school_sy` varchar(20) NOT NULL,
  `high_school_address` varchar(100) NOT NULL,
  `college` varchar(50) NOT NULL,
  `college_sy` varchar(50) NOT NULL,
  `college_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int(30) NOT NULL,
  `subject_description` varchar(50) NOT NULL,
  `subject_units` varchar(20) NOT NULL,
  `subject_lec_hours` varchar(20) NOT NULL,
  `subject_lab_hours` varchar(20) NOT NULL,
  `subject_pre_req` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `teacher_id_num` int(20) NOT NULL,
  `t_last_name` varchar(50) NOT NULL,
  `t_first_name` varchar(50) NOT NULL,
  `t_middle_name` varchar(50) NOT NULL,
  `t_date_of_birth` date NOT NULL,
  `t_place_of_birth` varchar(100) NOT NULL,
  `t_home_address` varchar(100) NOT NULL,
  `t_home_tellno` varchar(20) NOT NULL,
  `t_city_address` varchar(100) NOT NULL,
  `t_cell_no` varchar(20) NOT NULL,
  `t_boarding_address` varchar(100) NOT NULL,
  `t_boarding_cel_no` varchar(20) NOT NULL,
  `t_provincial_address` varchar(100) NOT NULL,
  `t_provincial_tel_no` varchar(20) NOT NULL,
  `t_nationality` varchar(20) NOT NULL,
  `t_religion` varchar(20) NOT NULL,
  `t_civil_status` varchar(20) NOT NULL,
  `t_gender` varchar(20) NOT NULL,
  `t_email_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `account_type` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
