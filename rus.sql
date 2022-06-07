-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 05:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_rus`
--

CREATE TABLE `admin_rus` (
  `a_id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_rus`
--

INSERT INTO `admin_rus` (`a_id`, `name`, `username`, `pass`) VALUES
(1, 'Admin 1', 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `feedback_name` varchar(25) NOT NULL,
  `feedback_msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Date`, `feedback_name`, `feedback_msg`) VALUES
('2022-01-13 16:05:06', 'Surendar', 'You have to improve more!!'),
('2022-01-13 16:06:54', 'Surendar', 'You doing great!!!'),
('2022-01-13 16:09:42', 'Surendarc', 'x bb'),
('2022-01-13 16:10:51', 'Surendar', 'fdger'),
('2022-01-13 16:11:56', 'Surendar', 'afwsfwg'),
('2022-01-14 06:43:40', 'Surendar', 'hi'),
('2022-01-14 06:44:50', 'Surendar', 'What is the problem?');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `help_name` varchar(30) NOT NULL,
  `Order_id` varchar(10) NOT NULL,
  `help_message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`Date`, `help_name`, `Order_id`, `help_message`) VALUES
('2022-01-13 15:54:26', 'Surendar', 'lp100101', 'hi'),
('2022-01-13 15:55:27', 'Surendar', 'lp100102', 'Hi I have serviced my laptop, Everuthing is fine. But cost is high .Please concentrate on this.'),
('2022-01-13 15:56:02', 'Surendar', 'lp100103', 'Good job'),
('2022-01-14 06:45:38', 'Surendar', 'lp1001010', 'good'),
('2022-01-14 06:47:18', 'Surendar', 'lp1001011', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `login_service`
--

CREATE TABLE `login_service` (
  `pre_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `service_id` int(11) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address_line` varchar(100) NOT NULL,
  `pincode` mediumint(6) NOT NULL,
  `device` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `problem` varchar(100) NOT NULL,
  `problem_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_service`
--

INSERT INTO `login_service` (`pre_date`, `service_id`, `full_name`, `email`, `phone`, `address_line`, `pincode`, `device`, `brand`, `problem`, `problem_desc`) VALUES
('2021-12-25 12:44:27', 1, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.', 600044, '4', 'df', '2', 'def'),
('2021-12-25 12:52:03', 2, 'Yasar A', 'abc@gmail.com', 9124456555, 'XYZ', 102330, '2', 'df', '2', 'ggr'),
('2021-12-29 19:28:52', 3, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.', 600044, '3', 'sefaffw', '3', 'khyfmjnd');

-- --------------------------------------------------------

--
-- Table structure for table `quick_service`
--

CREATE TABLE `quick_service` (
  `c_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qs_id` int(11) NOT NULL,
  `full_name` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address_line` varchar(100) NOT NULL,
  `pincode` mediumint(6) NOT NULL,
  `device` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `problem_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quick_service`
--

INSERT INTO `quick_service` (`c_date`, `qs_id`, `full_name`, `email`, `phone`, `address_line`, `pincode`, `device`, `brand`, `problem_desc`) VALUES
('0000-00-00 00:00:00', 1, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, '2', 'abc', 'def'),
('0000-00-00 00:00:00', 2, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, '2', 'abc', 'def'),
('0000-00-00 00:00:00', 3, 'Surendar S', 'imsurendars777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, '2', 'abc', 'def'),
('0000-00-00 00:00:00', 4, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'laptop', 'Dell', 'broken'),
('0000-00-00 00:00:00', 5, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'laptop', 'Dell', 'Sound Problem'),
('0000-00-00 00:00:00', 6, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'laptop', 'Hp', 'wifi problem'),
('0000-00-00 00:00:00', 7, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'Tv', 'Samsung', 'thrdch'),
('0000-00-00 00:00:00', 8, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'Power', 'Amaron', 'off'),
('0000-00-00 00:00:00', 9, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'Power', 'Amaron', 'off'),
('0000-00-00 00:00:00', 10, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'audio', 'Zebronics', 'bass'),
('0000-00-00 00:00:00', 11, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'laptop', 'Lenovo', 'aaa'),
('0000-00-00 00:00:00', 12, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'laptop', 'Lenovo', 'aaa'),
('0000-00-00 00:00:00', 13, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'audio', 'Zebronics', 'aaa'),
('0000-00-00 00:00:00', 14, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'audio', 'Boat', 'blast'),
('2022-01-11 20:38:02', 15, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'laptop', 'Lenovo', 'sa'),
('2022-01-11 20:39:22', 16, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'laptop', 'Lenovo', '44'),
('2022-01-11 20:42:30', 17, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'Power', 'Exide', 'aaa'),
('2022-01-11 21:36:51', 18, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'laptop', 'Lenovo', 'dzsd'),
('2022-01-11 21:37:19', 19, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'audio', 'Zebronics', 'ergsz'),
('2022-01-11 21:44:17', 20, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Power', 'Exide', 'dsc'),
('2022-01-11 21:45:31', 21, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'audio', 'Zebronics', 'vvs'),
('2022-01-11 21:46:47', 22, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'audio', 'Zebronics', 'sffv'),
('2022-01-11 21:59:09', 23, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'audio', 'Zebronics', 'dgb'),
('2022-01-11 22:00:01', 24, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Power', 'Exide', 'asc'),
('2022-01-11 22:02:09', 25, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'laptop', 'Sony', ' bf  fv'),
('2022-01-11 22:03:31', 26, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Power', 'Exide', 'dv'),
('2022-01-12 19:27:27', 27, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'laptop', 'Lenovo', 'sddf'),
('2022-01-12 19:31:18', 28, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'audio', 'Boat', 'dsv'),
('2022-01-12 19:32:19', 29, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'audio', 'Bose', 'sdsdv'),
('2022-01-12 19:32:54', 30, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Power', 'Exide', 'ffff'),
('2022-01-12 19:33:35', 31, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'audio', 'Zebronics', 'fsav'),
('2022-01-12 19:39:01', 32, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Tv', 'LG', 'rgdzr'),
('2022-01-12 19:39:01', 33, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'Tv', 'LG', 'rgdzr'),
('2022-01-12 19:39:56', 34, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Power', 'Exide', 'rgdzr'),
('2022-01-12 19:39:56', 35, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'Power', 'Exide', 'rgdzr'),
('2022-01-12 19:40:13', 36, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Power', 'Exide', 'dc'),
('2022-01-12 19:41:24', 37, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'audio', 'JBL', 'asdc'),
('2022-01-12 19:46:02', 38, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'audio', 'Zebronics', 'dzc'),
('2022-01-12 19:46:51', 39, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'audio', 'Zebronics', 'sdvz'),
('2022-01-12 19:47:45', 40, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'laptop', 'Lenovo', 'ae53ys'),
('2022-01-12 19:48:43', 41, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Power', 'Exide', 'sv'),
('2022-01-12 19:49:42', 42, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Power', 'Exide', 'dbz'),
('2022-01-12 19:56:57', 43, 'Shanmugam Krishnasamy', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'laptop', 'Lenovo', 'asc'),
('2022-01-12 19:57:25', 44, 'Shanmugam Krishnasamy', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.', 600044, 'audio', 'Zebronics', 'sdA'),
('2022-01-12 20:03:06', 45, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'audio', 'Zebronics', 'scs'),
('2022-01-12 20:06:40', 46, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'laptop', 'Lenovo', ';iu'),
('2022-01-12 20:06:54', 47, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'audio', 'Zebronics', 'vdds'),
('2022-01-12 20:07:52', 48, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'audio', 'Zebronics', 'dcc'),
('2022-01-12 20:08:24', 49, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Power', 'Exide', 'lcghnfgx'),
('2022-01-12 20:09:40', 50, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Tv', 'LG', 'dgg'),
('2022-01-12 20:10:29', 51, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Power', 'Exide', 'ads'),
('2022-01-12 20:10:48', 52, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Power', 'Exide', 'ssv'),
('2022-01-12 20:11:21', 53, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Power', 'Exide', 'dfxz'),
('2022-01-12 20:16:36', 54, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Power', 'Exide', 'da'),
('2022-01-12 20:17:10', 55, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'audio', 'Zebronics', 'fsav'),
('2022-01-12 20:20:00', 56, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Tv', 'LG', 'o;iu'),
('2022-01-12 20:20:26', 57, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Tv', 'LG', 'sv'),
('2022-01-13 20:04:21', 58, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\nNo11A/7', 600044, 'Power', 'Exide', 'zdv'),
('2022-01-13 20:11:17', 59, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'Power', 'Exide', 'adc'),
('2022-01-13 20:13:10', 60, 'Shanmugam Krishnasamy', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.', 600044, 'Power', 'Exide', 'qqq'),
('2022-01-13 20:20:23', 61, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'Tv', 'Philips', 'hhhh'),
('2022-01-13 20:22:15', 62, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'Power', 'Exide', 'dsz'),
('2022-01-13 20:23:03', 63, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'audio', 'Zebronics', 'CZ'),
('2022-01-13 20:23:18', 64, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'audio', 'Zebronics', 'dva'),
('2022-01-13 20:24:11', 65, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'audio', 'Zebronics', 'ccz '),
('2022-01-13 20:36:02', 66, 'Shanmugam Krishnasamy', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.', 600044, 'Tv', 'Samsung', 'dddd'),
('2022-01-14 11:36:22', 67, 'Surendar S', 'dhonisurendar777@gmail.com', 9176768096, 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.\r\nNo11A/7', 600044, 'laptop', 'Lenovo', 'sfv');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `r_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `passwd` varchar(15) NOT NULL,
  `address_line` varchar(200) NOT NULL,
  `pincode` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_date`, `r_id`, `first_name`, `last_name`, `email`, `phone`, `passwd`, `address_line`, `pincode`) VALUES
('2021-12-25 07:13:28', 1, 'Surendar', 'S', 'dhonisurendar777@gmail.com', 9176768096, 'Ab123456789', 'THANGAIYA STREET,GANDHI NAGAR,NAGALKENI,CHROMPET.', 600044),
('2021-12-25 07:21:33', 2, 'Yasar', 'A', 'abc@gmail.com', 9124456555, 'Ab123456789', 'XYZ', 102330);

-- --------------------------------------------------------

--
-- Table structure for table `select_device`
--

CREATE TABLE `select_device` (
  `device_id` int(11) NOT NULL,
  `device` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `problem` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `select_device`
--

INSERT INTO `select_device` (`device_id`, `device`, `brand`, `problem`) VALUES
(1, 'laptop', 'Lenovo', ''),
(2, 'laptop', 'Samsung', ''),
(3, 'laptop', 'Dell', ''),
(4, 'laptop', 'Acer', ''),
(5, 'laptop', 'Sony', ''),
(7, 'laptop', 'Hp', ''),
(8, 'laptop', 'Asus', ''),
(9, 'laptop', 'Toshiba', ''),
(10, 'laptop', 'Compaq', ''),
(11, 'laptop', 'Fujitsu', ''),
(18, 'TV', 'LG', ''),
(19, 'TV', 'Samsung', ''),
(20, 'TV', 'Panasonic', ''),
(21, 'TV', 'Sony', ''),
(22, 'TV', 'Toshiba', ''),
(23, 'TV', 'Philips', ''),
(24, 'TV', 'Kevin', ''),
(25, 'TV', 'Xaomi', ''),
(26, 'TV', 'Others', ''),
(28, 'Speaker', 'Zebronics', ''),
(29, 'Speaker', 'Intex', ''),
(30, 'Speaker', 'Boat', ''),
(31, 'Speaker', 'JBL', ''),
(32, 'Speaker', 'Bose', ''),
(33, 'Speaker', 'Philips', ''),
(34, 'Select_Device', 'Select Brand', ''),
(35, 'desktop', 'Lenovo', ''),
(36, 'desktop', 'Acer', ''),
(37, 'desktop', 'Samsung', ''),
(38, 'desktop', 'Dell', ''),
(39, 'desktop', 'HP', ''),
(40, 'desktop', 'Toshiba', ''),
(41, 'desktop', 'LG', ''),
(42, 'desktop', 'Others', ''),
(43, 'SMPS', 'Mercury', ''),
(44, 'SMPS', 'Zebronics', ''),
(45, 'SMPS', 'Dell', ''),
(46, 'SMPS', 'HP', ''),
(47, 'SMPS', 'Huntkey', ''),
(48, 'SMPS', 'Delta Electronics', ''),
(49, 'SMPS', 'Industrial PS', ''),
(50, 'SMPS', 'Mediacal PS', ''),
(51, 'SMPS', 'Others', ''),
(52, 'UPS', 'Numeric', ''),
(53, 'UPS', 'APC', ''),
(54, 'UPS', 'Microtek', ''),
(55, 'UPS', 'Zebronics', ''),
(56, 'UPS', 'V-Gaurd', ''),
(57, 'UPS', 'Intex', ''),
(58, 'Inverter', 'Luminous', ''),
(59, 'Inverter', 'Microtek', ''),
(60, 'Inverter', 'Numeric', ''),
(61, 'Inverter', 'APC', ''),
(62, 'Inverter', 'Exide', ''),
(63, 'Inverter', 'V-Gaurd', ''),
(64, 'Inverter', 'Everon', ''),
(65, 'Inverter', 'Accura', ''),
(66, 'Inverter', 'SF Sonic', ''),
(67, 'Inverter', 'Su-kam', ''),
(68, 'Inverter', 'Mahendra', ''),
(69, 'Inverter', 'Power Tech', ''),
(70, 'Inverter', 'Uni-Tech', ''),
(71, 'Inverter', 'Power Soft', ''),
(72, 'Inverter', 'Falcon', ''),
(73, 'Stabilizers', 'Microtek', ''),
(74, 'Stabilizers', 'V-Gaurd', ''),
(75, 'Stabilizers', 'Syscom', ''),
(76, 'Stabilizers', 'Everest', ''),
(77, 'Stabilizers', 'SYSPRO', ''),
(78, 'Stabilizers', 'Servomate ', ''),
(79, 'Stabilizers', 'Others ', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `v_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `t_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`v_id`, `name`, `t_status`) VALUES
(1, 'vendor 1', 'not assign'),
(3, 'Vendor 3', 'not assigned'),
(4, 'Vendor 4', 'not assigned'),
(6, 'Vendor 6', 'not assigned');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_rus`
--
ALTER TABLE `admin_rus`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `login_service`
--
ALTER TABLE `login_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `quick_service`
--
ALTER TABLE `quick_service`
  ADD PRIMARY KEY (`qs_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `select_device`
--
ALTER TABLE `select_device`
  ADD PRIMARY KEY (`device_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_rus`
--
ALTER TABLE `admin_rus`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_service`
--
ALTER TABLE `login_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quick_service`
--
ALTER TABLE `quick_service`
  MODIFY `qs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `select_device`
--
ALTER TABLE `select_device`
  MODIFY `device_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
