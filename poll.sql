-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2012 at 06:25 AM
-- Server version: 5.1.63
-- PHP Version: 5.3.2-1ubuntu4.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `cand_id` int(100) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `about` varchar(255) NOT NULL,
  `votecount` int(255) NOT NULL,
  PRIMARY KEY (`cand_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cand_id`, `fullname`, `position`, `about`, `votecount`) VALUES
(1, 'JOHN MICHAEL KALEMBE', 'president', 'I was Tanzania one in my advanced level, also a member of student parliament.', 2),
(2, 'SUZAN JOHN', 'president', 'am a lady of success', 0),
(3, 'JULIUS SAMWEL', 'vice', 'am very good in governance', 0),
(4, 'MICHAEL SANGA', 'vice', 'am a pilot in governance', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rank` varchar(80) NOT NULL DEFAULT 'student',
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`login_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `rank`, `status`) VALUES
(17, 'ifm', '0aeb58794c29d040e7da234b563a7574', 'student', 'ACTIVE'),
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `qn_id` int(255) NOT NULL AUTO_INCREMENT,
  `display_name` varchar(255) NOT NULL,
  `cand_id` int(10) NOT NULL,
  `qn` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  PRIMARY KEY (`qn_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `questions`
--


-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stud_id` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yos` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'NOTVOTED'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `firstname`, `lastname`, `username`, `course`, `yos`, `status`) VALUES
('2020', 'Hamisi', 'Ally', 'ifm', 'BCS', '2', 'VOTED');
