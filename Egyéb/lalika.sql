-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 09:13 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lalika`
--

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `userId` varchar(128) NOT NULL,
  `cognitrive` varchar(128) NOT NULL,
  `openness` varchar(128) NOT NULL,
  `intellect` varchar(128) NOT NULL,
  `industriousness` varchar(128) NOT NULL,
  `orderliness` varchar(128) NOT NULL,
  `enthusiasm` varchar(128) NOT NULL,
  `assertiveness` varchar(128) NOT NULL,
  `politeness` varchar(128) NOT NULL,
  `compassion` varchar(128) NOT NULL,
  `volatility` varchar(128) NOT NULL,
  `withdrawal` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE `test1` (
  `userId` varchar(128) NOT NULL,
  `test1q1` varchar(128) NOT NULL,
  `test1q2` varchar(128) NOT NULL,
  `test1q3` varchar(128) NOT NULL,
  `test1q4` varchar(128) NOT NULL,
  `test1q5` varchar(128) NOT NULL,
  `test1q6` varchar(128) NOT NULL,
  `test1q7` varchar(128) NOT NULL,
  `test1q8` varchar(128) NOT NULL,
  `test1q9` varchar(128) NOT NULL,
  `test1q10` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test1`
--

INSERT INTO `test1` (`userId`, `test1q1`, `test1q2`, `test1q3`, `test1q4`, `test1q5`, `test1q6`, `test1q7`, `test1q8`, `test1q9`, `test1q10`) VALUES
('2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('4', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('5', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
('5', '2', '2', '1', '1', '1', '1', '1', '1', '1', '1'),
('5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('6', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('6', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('6', '1', '2', '3', '4', '5', '1', '2', '3', '4', '5'),
('7', '1', '2', '3', '4', '5', '1', '2', '3', '4', '5'),
('8', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('9', '3', '2', '4', '1', '5', '3', '4', '5', '2', '2'),
('12', '2', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
('19', '2', '1', '4', '5', '5', '2', '1', '5', '4', '5'),
('23', '2', '3', '4', '4', '4', '5', '4', '3', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `test2`
--

CREATE TABLE `test2` (
  `userId` varchar(128) NOT NULL,
  `test1q11` varchar(128) NOT NULL,
  `test1q12` varchar(128) NOT NULL,
  `test1q13` varchar(128) NOT NULL,
  `test1q14` varchar(128) NOT NULL,
  `test1q15` varchar(128) NOT NULL,
  `test1q16` varchar(128) NOT NULL,
  `test1q17` varchar(128) NOT NULL,
  `test1q18` varchar(128) NOT NULL,
  `test1q19` varchar(128) NOT NULL,
  `test1q20` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test2`
--

INSERT INTO `test2` (`userId`, `test1q11`, `test1q12`, `test1q13`, `test1q14`, `test1q15`, `test1q16`, `test1q17`, `test1q18`, `test1q19`, `test1q20`) VALUES
('2', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4'),
('4', '2', '2', '2', '3', '3', '4', '3', '2', '3', '3'),
('4', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
('5', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
('5', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
('5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('6', '1', '2', '3', '4', '5', '1', '2', '3', '4', '5'),
('7', '1', '2', '3', '4', '5', '4', '3', '2', '1', '2'),
('8', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('9', '3', '2', '3', '4', '2', '2', '1', '3', '3', '5'),
('12', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
('19', '5', '5', '5', '3', '1', '5', '5', '4', '3', '5');

-- --------------------------------------------------------

--
-- Table structure for table `test3`
--

CREATE TABLE `test3` (
  `userId` varchar(128) NOT NULL,
  `test1q21` varchar(128) NOT NULL,
  `test1q22` varchar(128) NOT NULL,
  `test1q23` varchar(128) NOT NULL,
  `test1q24` varchar(128) NOT NULL,
  `test1q25` varchar(128) NOT NULL,
  `test1q26` varchar(128) NOT NULL,
  `test1q27` varchar(128) NOT NULL,
  `test1q28` varchar(128) NOT NULL,
  `test1q29` varchar(128) NOT NULL,
  `test1q30` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test3`
--

INSERT INTO `test3` (`userId`, `test1q21`, `test1q22`, `test1q23`, `test1q24`, `test1q25`, `test1q26`, `test1q27`, `test1q28`, `test1q29`, `test1q30`) VALUES
('2', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
('4', '3', '3', '3', '3', '3', '3', '3', '3', '2', '3'),
('5', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
('5', '1', '2', '3', '4', '5', '5', '5', '5', '5', '5'),
('7', '5', '3', '1', '4', '2', '5', '3', '1', '4', '2'),
('8', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('9', '1', '4', '3', '5', '4', '3', '4', '3', '4', '5'),
('12', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `test4`
--

CREATE TABLE `test4` (
  `userId` varchar(128) NOT NULL,
  `test1q31` varchar(128) NOT NULL,
  `test1q32` varchar(128) NOT NULL,
  `test1q33` varchar(128) NOT NULL,
  `test1q34` varchar(128) NOT NULL,
  `test1q35` varchar(128) NOT NULL,
  `test1q36` varchar(128) NOT NULL,
  `test1q37` varchar(128) NOT NULL,
  `test1q38` varchar(128) NOT NULL,
  `test1q39` varchar(128) NOT NULL,
  `test1q40` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test4`
--

INSERT INTO `test4` (`userId`, `test1q31`, `test1q32`, `test1q33`, `test1q34`, `test1q35`, `test1q36`, `test1q37`, `test1q38`, `test1q39`, `test1q40`) VALUES
('4', '1', '1', '1', '1', '1', '1', '1', '1', '2', '3'),
('5', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4'),
('5', '3', '2', '2', '2', '2', '2', '3', '2', '2', '2'),
('7', '1', '2', '3', '4', '5', '5', '4', '3', '2', '1'),
('9', '3', '2', '5', '5', '5', '3', '2', '2', '4', '5'),
('12', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `test5`
--

CREATE TABLE `test5` (
  `userId` varchar(128) NOT NULL,
  `test1q41` varchar(128) NOT NULL,
  `test1q42` varchar(128) NOT NULL,
  `test1q43` varchar(128) NOT NULL,
  `test1q44` varchar(128) NOT NULL,
  `test1q45` varchar(128) NOT NULL,
  `test1q46` varchar(128) NOT NULL,
  `test1q47` varchar(128) NOT NULL,
  `test1q48` varchar(128) NOT NULL,
  `test1q49` varchar(128) NOT NULL,
  `test1q50` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test5`
--

INSERT INTO `test5` (`userId`, `test1q41`, `test1q42`, `test1q43`, `test1q44`, `test1q45`, `test1q46`, `test1q47`, `test1q48`, `test1q49`, `test1q50`) VALUES
('2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
('4', '5', '5', '5', '5', '5', '5', '5', '5', '4', '2'),
('5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5'),
('5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('7', '2', '1', '2', '3', '4', '5', '4', '5', '4', '3'),
('9', '4', '4', '5', '1', '3', '3', '3', '1', '3', '1'),
('12', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `test6`
--

CREATE TABLE `test6` (
  `userId` varchar(128) NOT NULL,
  `test1q51` varchar(128) NOT NULL,
  `test1q52` varchar(128) NOT NULL,
  `test1q53` varchar(128) NOT NULL,
  `test1q54` varchar(128) NOT NULL,
  `test1q55` varchar(128) NOT NULL,
  `test1q56` varchar(128) NOT NULL,
  `test1q57` varchar(128) NOT NULL,
  `test1q58` varchar(128) NOT NULL,
  `test1q59` varchar(128) NOT NULL,
  `test1q60` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test6`
--

INSERT INTO `test6` (`userId`, `test1q51`, `test1q52`, `test1q53`, `test1q54`, `test1q55`, `test1q56`, `test1q57`, `test1q58`, `test1q59`, `test1q60`) VALUES
('2', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5'),
('4', '2', '2', '2', '2', '2', '2', '2', '2', '2', '1'),
('5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '1'),
('7', '1', '3', '2', '4', '4', '3', '2', '3', '4', '4'),
('9', '2', '4', '3', '3', '1', '3', '2', '5', '5', '4'),
('12', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `test7`
--

CREATE TABLE `test7` (
  `userId` varchar(128) NOT NULL,
  `test1q61` varchar(128) NOT NULL,
  `test1q62` varchar(128) NOT NULL,
  `test1q63` varchar(128) NOT NULL,
  `test1q64` varchar(128) NOT NULL,
  `test1q65` varchar(128) NOT NULL,
  `test1q66` varchar(128) NOT NULL,
  `test1q67` varchar(128) NOT NULL,
  `test1q68` varchar(128) NOT NULL,
  `test1q69` varchar(128) NOT NULL,
  `test1q70` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test7`
--

INSERT INTO `test7` (`userId`, `test1q61`, `test1q62`, `test1q63`, `test1q64`, `test1q65`, `test1q66`, `test1q67`, `test1q68`, `test1q69`, `test1q70`) VALUES
('2', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4'),
('4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '2'),
('5', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
('5', '2', '2', '2', '2', '2', '2', '2', '2', '3', '3'),
('7', '1', '2', '2', '1', '2', '4', '3', '5', '3', '4'),
('9', '3', '2', '5', '4', '5', '2', '3', '1', '3', '4'),
('12', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `test8`
--

CREATE TABLE `test8` (
  `userId` varchar(128) NOT NULL,
  `test1q71` varchar(128) NOT NULL,
  `test1q72` varchar(128) NOT NULL,
  `test1q73` varchar(128) NOT NULL,
  `test1q74` varchar(128) NOT NULL,
  `test1q75` varchar(128) NOT NULL,
  `test1q76` varchar(128) NOT NULL,
  `test1q77` varchar(128) NOT NULL,
  `test1q78` varchar(128) NOT NULL,
  `test1q79` varchar(128) NOT NULL,
  `test1q80` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test8`
--

INSERT INTO `test8` (`userId`, `test1q71`, `test1q72`, `test1q73`, `test1q74`, `test1q75`, `test1q76`, `test1q77`, `test1q78`, `test1q79`, `test1q80`) VALUES
('2', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
('2', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
('2', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
('3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
('4', '3', '3', '3', '3', '3', '3', '3', '3', '4', '5'),
('5', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
('5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('7', '2', '3', '2', '5', '4', '5', '3', '2', '1', '2'),
('9', '2', '4', '3', '3', '5', '3', '2', '2', '4', '1'),
('12', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `test9`
--

CREATE TABLE `test9` (
  `userId` varchar(128) NOT NULL,
  `test1q81` varchar(128) NOT NULL,
  `test1q82` varchar(128) NOT NULL,
  `test1q83` varchar(128) NOT NULL,
  `test1q84` varchar(128) NOT NULL,
  `test1q85` varchar(128) NOT NULL,
  `test1q86` varchar(128) NOT NULL,
  `test1q87` varchar(128) NOT NULL,
  `test1q88` varchar(128) NOT NULL,
  `test1q89` varchar(128) NOT NULL,
  `test1q90` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test9`
--

INSERT INTO `test9` (`userId`, `test1q81`, `test1q82`, `test1q83`, `test1q84`, `test1q85`, `test1q86`, `test1q87`, `test1q88`, `test1q89`, `test1q90`) VALUES
('4', '1', '1', '1', '1', '1', '1', '1', '1', '2', '1'),
('5', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4'),
('5', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
('7', '1', '2', '3', '2', '3', '4', '5', '3', '2', '4'),
('9', '5', '3', '3', '2', '1', '1', '4', '4', '1', '4'),
('12', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `test10`
--

CREATE TABLE `test10` (
  `userId` varchar(128) NOT NULL,
  `test1q91` varchar(128) NOT NULL,
  `test1q92` varchar(128) NOT NULL,
  `test1q93` varchar(128) NOT NULL,
  `test1q94` varchar(128) NOT NULL,
  `test1q95` varchar(128) NOT NULL,
  `test1q96` varchar(128) NOT NULL,
  `test1q97` varchar(128) NOT NULL,
  `test1q98` varchar(128) NOT NULL,
  `test1q99` varchar(128) NOT NULL,
  `test1q100` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test10`
--

INSERT INTO `test10` (`userId`, `test1q91`, `test1q92`, `test1q93`, `test1q94`, `test1q95`, `test1q96`, `test1q97`, `test1q98`, `test1q99`, `test1q100`) VALUES
('2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('4', '5', '5', '5', '5', '5', '5', '5', '5', '3', '4'),
('5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('5', '3', '3', '3', '2', '2', '2', '2', '2', '2', '1'),
('7', '1', '2', '3', '1', '4', '5', '3', '4', '2', '3'),
('4', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('9', '1', '4', '2', '2', '4', '2', '5', '5', '3', '5'),
('12', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `test11`
--

CREATE TABLE `test11` (
  `userId` varchar(128) NOT NULL,
  `co1` varchar(128) NOT NULL,
  `co2` varchar(128) NOT NULL,
  `co3` varchar(128) NOT NULL,
  `co4` varchar(128) NOT NULL,
  `co5` varchar(128) NOT NULL,
  `co6` varchar(128) NOT NULL,
  `co7` varchar(128) NOT NULL,
  `co8` varchar(128) NOT NULL,
  `co9` varchar(128) NOT NULL,
  `co10` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test11`
--

INSERT INTO `test11` (`userId`, `co1`, `co2`, `co3`, `co4`, `co5`, `co6`, `co7`, `co8`, `co9`, `co10`) VALUES
('9', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('9', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('9', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('9', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
('9', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
('9', '5', '5', '5', '5', '5', '5', '5', '5', '1', '2'),
('9', '2', '2', '2', '2', '2', '2', '2', '2', '2', ''),
('10', 'd', 'c', 'b', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
('10', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
('10', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd'),
('10', 'b', 'b', 'b', 'a', 'a', 'a', 'a', 'a', 'b', 'a'),
('12', 'c', 'b', 'b', 'c', 'e', 'a', 'c', 'e', 'd', 'c'),
('4', 'e', 'e', 'a', 'a', 'a', 'a', 'a', 'a', 'b', 'b'),
('4', 'f', 'f', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
('4', 'a', 'd', 'b', 'e', 'c', 'f', 'a', 'd', 'b', 'e'),
('19', 'e', 'f', 'e', 'f', 'e', 'f', 'e', 'f', 'e', 'f'),
('20', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd'),
('20', 'c', 'f', 'e', 'c', 'b', 'e', 'f', 'b', 'c', 'c'),
('20', '0', 'd', 'd', 'd', 'd', 'd', 'e', 'e', 'f', 'f'),
('20', 'd', 'd', 'd', 'd', 'd', 'd', 'e', 'e', 'e', 'e'),
('20', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('20', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'a'),
('20', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('20', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('20', 'd', 'c', 'a', 'c', 'e', 'e', 'g', 'b', 'e', 'c'),
('4', 'a', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('20', 'b', 'd', 'e', 'f', 'c', 'b', 'e', 'f', 'a', 'b'),
('23', 'd', 'c', 'a', 'c', 'b', 'a', 'g', 'b', 'a', 'f'),
('23', 'f', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('23', 'd', 'c', 'a', 'c', 'e', 'e', 'g', 'b', 'e', 'c'),
('4', 'd', 'c', 'a', 'c', 'e', 'e', 'g', 'b', 'e', 'c'),
('4', 'f', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('4', 'e', 'e', 'e', 'f', 'e', 'e', 'g', 'b', 'e', 'c'),
('30', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('4', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('29', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('29', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `t_results`
--

CREATE TABLE `t_results` (
  `userId` varchar(128) NOT NULL,
  `t_openness` varchar(128) NOT NULL,
  `t_conscientiousness` varchar(128) NOT NULL,
  `t_extroversion` varchar(128) NOT NULL,
  `t_agreeableness` varchar(128) NOT NULL,
  `t_neuroticism` varchar(128) NOT NULL,
  `cognitrive` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_results`
--

INSERT INTO `t_results` (`userId`, `t_openness`, `t_conscientiousness`, `t_extroversion`, `t_agreeableness`, `t_neuroticism`, `cognitrive`) VALUES
('4', '33', '41', '37', '34', '28', ''),
('4', '33', '41', '37', '34', '28', ''),
('4', '33', '41', '37', '34', '28', ''),
('4', '33', '41', '37', '34', '28', ''),
('4', '33', '41', '37', '34', '28', ''),
('4', '33', '41', '37', '34', '28', ''),
('4', '33', '41', '37', '34', '28', ''),
('4', '33', '41', '37', '34', '28', ''),
('9', '55', '40', '26', '31', '34', ''),
('9', '55', '40', '26', '31', '34', ''),
('12', '32', '38', '44', '18', '29', ''),
('12', '80', '60', '50', '20', '0', ''),
('12', '100', '80', '60', '40', '20', '0'),
('4', '32', '43', '35', '26', '28', ''),
('4', '32', '43', '35', '26', '28', ''),
('20', '28', '46', '34', '20', '28', ''),
('20', '28', '46', '34', '20', '28', ''),
('23', '37', '46', '42', '21', '31', ''),
('23', '37', '46', '42', '21', '31', ''),
('23', '37', '46', '42', '21', '31', ''),
('23', '37', '46', '42', '21', '31', ''),
('23', '37', '46', '42', '21', '31', ''),
('23', '37', '46', '42', '21', '31', ''),
('23', '37', '46', '42', '21', '31', ''),
('4', '32', '43', '35', '26', '28', ''),
('4', '32', '43', '35', '26', '28', '0'),
('4', '32', '43', '35', '26', '28', '4'),
('30', '28', '46', '34', '20', '28', '0'),
('4', '32', '43', '35', '26', '28', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersVez_nev` varchar(128) NOT NULL,
  `usersKer_nev` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `userssex` varchar(128) NOT NULL,
  `usersphone_number` varchar(128) NOT NULL,
  `usersbirthday` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `usersEmail`, `usersVez_nev`, `usersKer_nev`, `usersPwd`, `userssex`, `usersphone_number`, `usersbirthday`) VALUES
(1, 'baltay.marton@gmail.com', 'Baltay', 'Márton', '$2y$10$ysPmpeF8V1TsH7d7nGh5qeK/Ezx5audbgR7EKZWaJVR2F1dAJnXXu', 'Ferfi', '06203971062', '8. 6. 1999'),
(2, 'thevanted1@gmail.com', 'Baltay', 'as', '$2y$10$QSd41D.UjhyuQAVyod7wieO/yQ3LpQL.GwDTB6mjMp5TVHmzOrWTa', 'Ferfi', '06203971062', '3. 6. 2021'),
(3, 'w@w.w', 'Baltay', 'Márton', '$2y$10$FVBP5eGZWK3o24GWy/Q3hOip9PSVdqfW/zOSnkfL89P3PKLIKezdy', 'Ferfi', 'q', '2. 6. 2021'),
(4, 'q@qq.com', 'Baltay', 'Márton', '$2y$10$Rr7vk8e99rETOiCfwjHvOel/yn1s/NQGwQODvAiIww4EfvpSUX33i', 'Ferfi', '06203971062', '10. 6. 2021'),
(5, 'balta.kolos@gmail.com', 'Baltay', 'Kolos', '$2y$10$hi8EurUZ.bDX2jCinlI2BOMxPU4Rq7iK8DJLqTBj40qKbBWeei8..', 'Ferfi', '06707704349', '15. 9. 2006'),
(6, 'q@qqq.com', 'Baltay', 'Márton', '$2y$10$zaDKuLw57Rk/5tf6RGmQS.OM3yZCuBKPQN6lEeJavjrkpGVJLfgGm', 'Ferfi', '36203971062', '1. 7. 2021'),
(7, 'k@k.k', 'Baltay', 'Márton', '$2y$10$RaAIvvzkgXm3Zjfi5IFEpeh4/A3JAmD1I3JQHBytQzy7MYqHIoLiq', 'Ferfi', '36203971062', '14. 7. 1988'),
(8, 'd@d.c', 'Baltay', 'Márton', '$2y$10$30.csmeNl7U2qqndz3tukOhpbRJZxBxz7uGi4IKaM2OSUAVmtiwBK', 'Ferfi', '203971062', '1. 7. 2021'),
(9, 'lena.lakatos@yahoo.com', 'Baltay', 'Lencsó', '$2y$10$yH5bpY9056oephaymW8b2.vniwqkjwsj1n028CfwOxPeG0bS0LOQS', 'Egyeb', '36203971062', '18. 9. 2006'),
(10, 'johnyy@j.j', 'Baltay', 'Márton', '$2y$10$cPM6dKJYnFJZ6.0hz.9NNegHwrvy0OhWOs/Hg32/cQlbGsVD.xesm', 'Ferfi', '2312312312', '6. 8. 2021'),
(11, 'q@dsfsd.com', 'Baltay', 'asd', '$2y$10$wxufiHra4oy2mR2zc8ilmeeR2xm69BjuZNxq7ckDcznaOIU5BFglC', 'Ferfi', 'asd', '5. 8. 2021'),
(12, 'marton.baltay@gmail.com', 'Baltay', 'Márton', '$2y$10$wB/hleBCx/GHgQOyJW0yxOXNLVaj.9YeOH.6DLW1R6m.QijHPWPki', 'Ferfi', '063203971062', '8. 6. 1999'),
(13, 'zsbaltay@grenke.hu', 'Baltay', 'Zsombor', '$2y$10$Es3SAOE/7eQn3Tn8Km8GFevKnYMsP5oEDQXfdzWF6ALfVhlPCecmG', 'Ferfi', '36305255202', '3. 12. 1973'),
(14, 'baltay.massrton@gmail.com', 'asdf', 'asdf', '$2y$10$.TYblt8sKGaT/7YYbs7.6OLUMTlCljyGabvVst8gwmleJU9rIJlfC', 'No', '+36203971062', '1. 9. 2021'),
(15, 'baltay.marton@gmasail.com', 'Baltay', 'Márton', '$2y$10$RSRKI5t9.8S8EPyCylJAH.Xb6r82AJSplT18Rojybitr21l83EYYG', 'Ferfi', '+36203971062', '2. 9. 2021'),
(16, 'qq@qq.com', 'Baltay', 'Márton', '$2y$10$9gZ3PJnwHRdiBK1kH0/99ulUF36XsY0uNQDBYzXKnrFl7acQo5VOG', 'Ferfi', '+36203971062', '2. 9. 2021'),
(17, 'qqq@qq.com', 'Baltay', 'Márton', '$2y$10$wgX3Wbx0Aafe2GgdK0tjIOJ9VhrWIWfZgGc9BTCefNgPbn1OCq1HK', 'Ferfi', '+36203971062', '9. 9. 2021'),
(18, 'qqqqq@qq.com', 'Baltay', 'asd', '$2y$10$XcvS1K2/RzCH37dY/UwPG.Nu4Pvj1044MjuGh7J31qpfchxDDAlVW', 'Ferfi', '+36203971062', '2. 9. 2021'),
(19, 'tutsekbenedek3@gmail.com', 'Tutsek', 'Benedek', '$2y$10$.JcDcoTLq56z1IWMsTA/EOpNvjeksejoqLeXHzZGwh19vGzIjUl7G', 'Ferfi', '0036305898638', '19. 5. 1999'),
(20, 'asdasd@gmail.com', 'Marcu', '', '$2y$10$hvvwTO.P.EdL5r4/uGBJK.Ge4Dc.ojMFyK2YzdJ1FT0Z5ER6IZ5g.', 'Ferfi', '', '8. 6. 1999'),
(21, 'asdasdasd@gasv.vom', 'asd', '', '$2y$10$d/t..UH4tYvmVsuMyLW4UOywQOm1p59oS4Ss89keAvQ6F7Pphl5sy', 'No', '', '8. 9. 2021'),
(22, 'aasdasd@asd.com', 'a', '', '$2y$10$OREytEYYSQqca4.WaQMR1.IFTMj0.ERSDmWAVpY7ej2Nuhc9dCOr.', 'No', '', '16. 9. 2021'),
(23, 'syluha.vince@gmai.com', 'Vinusnupus', '', '$2y$10$RfeZIrHq4SGMtS4Sa3cvB.W6jhGvR8KkvwjxiDV0b8LT5tfnhMNE6', 'Ferfi', '', '25. 10. 2001'),
(24, 'baltay.maarton@gmail.com', 'as', '', '$2y$10$WmRZwYZtme1.HgccDYB0vOXXxzhY8RYQFaz3YOr71l/obk0M2DOfO', 'No', '', '8. 10. 2021'),
(25, 'baltay.maasdasarton@gmail.com', 'as', '', '$2y$10$jXw0AyxCpbx4b3xh0WrqjejYitloxSxvD/77C764s7EScn/ObQ9YW', 'No', '', '7. 10. 2021'),
(26, 'baltay.maxbrtrton@gmail.com', 'as', '', '$2y$10$pmoa3a06CRMwCzUbeHwt.O02QmQAL91g45ZhEL3VZnyP9K851LuDi', 'Ferfi', '', '7. 10. 2021'),
(27, 'w@w.wa', 'Baltay', '', '$2y$10$ifm4ucffoPoNwXoC595QgeXCfmBp1/I/hjrfmIA3fwhCsXjqbZOym', 'No', '', '1. 10. 2021'),
(28, 'as@as.asas', 'Baltay', '', '$2y$10$HgB0m87Yp1BQO5KZnsVigOlkbp8Nrfperyew5O4AbLbqzHzXyH.Ke', 'Ferfi', '', '8. 10. 2021'),
(29, 'w@w.was', 'Baltay', '', '$2y$10$GdwF3ixQ2W8WWkXmao2dIe8ehn.qQ6Ky/T9NmDd4ptXdmKKcyxgtm', 'Ferfi', '', '8. 10. 2021'),
(30, 'as@as.as', 'as', '', '$2y$10$kLvenblTDk3LBFbl3XwRi.IdIIjFLu4PeO.QTFhlLiEQjcDU3tMMG', 'Ferfi', '', '8. 10. 2021');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `userId` int(11) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersVez_nev` varchar(128) NOT NULL,
  `usersKer_nev` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `userssex` varchar(128) NOT NULL,
  `usersphone_number` varchar(128) NOT NULL,
  `usersbirthday` varchar(128) NOT NULL,
  `registerTime` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
