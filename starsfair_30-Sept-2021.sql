-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 30, 2021 at 01:20 PM
-- Server version: 5.7.35-0ubuntu0.18.04.1
-- PHP Version: 7.0.33-26+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starsfair`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance_request`
--

CREATE TABLE `balance_request` (
  `req_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `comment` text,
  `type` enum('1','2') DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Panding','Confirm') NOT NULL DEFAULT 'Panding',
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bnk_id` int(11) NOT NULL,
  `b_name` varchar(155) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bnk_id`, `b_name`, `time`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(1, 'Islami Bank Bangladesh Limited', '2017-01-08 17:23:32', '2019-10-09 19:50:25', 0, '2019-10-09 19:50:25', 0),
(2, 'Sonali Bank', '2017-01-08 17:24:14', '2019-10-09 19:50:25', 0, '2019-10-09 19:50:25', 0),
(3, 'DBBL', '2017-01-08 17:24:14', '2019-10-09 19:50:25', 0, '2019-10-09 19:50:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `perent_id` int(11) NOT NULL,
  `cat_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pro_id` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `perent_id`, `cat_name`, `pro_id`, `time`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(5, 11, 'Notice', '', '2019-10-06 23:07:00', '2019-10-09 19:51:07', 0, '2019-10-09 19:51:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`, `date`) VALUES
('2c3dbfc5ce5a38b7ac2a3c0f0099e956', '192.168.0.107', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 1633007672, 'a:3:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:9:\"logged_in\";i:1;}', '2021-09-30 13:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `comm_agent`
--

CREATE TABLE `comm_agent` (
  `gen_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `purpose` text,
  `sale_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `percent` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comm_incentive`
--

CREATE TABLE `comm_incentive` (
  `ins_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `purpose` int(11) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `percent` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comm_matching`
--

CREATE TABLE `comm_matching` (
  `match_com_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `purpose` text,
  `t_id` int(11) DEFAULT NULL,
  `amount` double NOT NULL,
  `percent` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comm_other`
--

CREATE TABLE `comm_other` (
  `comm_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `purpose` int(11) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `percent` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comm_spot`
--

CREATE TABLE `comm_spot` (
  `spot_com_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `purpose` text,
  `sale_id` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comm_star`
--

CREATE TABLE `comm_star` (
  `star_com_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `purpose` int(11) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `percent` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comm_stockist`
--

CREATE TABLE `comm_stockist` (
  `gen_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `purpose` text,
  `sale_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `percent` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comm_yearly`
--

CREATE TABLE `comm_yearly` (
  `yearly_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `purpose` int(11) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `percent` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `dwn_id` int(11) NOT NULL,
  `cat_id` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `file` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`dwn_id`, `cat_id`, `title`, `description`, `file`, `time`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(72, '5', 'It is my pleasure to welcome everyone to our Stars Fair BD web site.', '<p><strong>It is my pleasure to welcome everyone to our Stars Fair BD web site</strong></p>\r\n', 'f_dwn_1476354171.pdf', '2016-10-13 10:22:51', '2019-10-09 20:31:30', 0, '2019-10-09 20:31:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `global_settings`
--

CREATE TABLE `global_settings` (
  `id` int(11) NOT NULL,
  `title` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `global_settings`
--

INSERT INTO `global_settings` (`id`, `title`, `value`, `date`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(1, 'site_title', 'Stars Fair BD', '2019-08-20 05:07:45', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(2, 'gen_email', 'contact@starsfairbd.com', '2019-08-20 05:07:45', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(3, 'form_email', 'info@starsfairbd.com', '2019-08-20 05:07:45', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(4, 'contact_email', 'contact@starsfairbd.com', '2019-08-20 05:07:45', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(5, 'religion', '{\"1\":\"Islam\", \"2\":\"Hindu\", \"3\":\"Chirtian\", \"4\":\"Budhith\"}', '0000-00-00 00:00:00', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(6, 'blood_group', '{\"1\":\"A+\", \"2\":\"A-\", \"3\":\"B+\", \"4\":\"B-\", \"5\":\"AB+\", \"6\":\"AB-\", \"7\":\"O+\", \"8\":\"O-\"}', '0000-00-00 00:00:00', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(7, 'sex', '{\"1\":\"Male\", \"2\":\"Female\"}', '0000-00-00 00:00:00', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(8, 'relationship', '{\"1\":\"Brother\", \"2\":\"Daughter\", \"3\":\"Father\", \"4\":\"Granddaughter\", \"5\":\"Grandfather\", \"6\":\"Grandmother\", \"7\":\"Grandson\", \"8\":\"Husband\", \"9\":\"Mother\", \"10\":\"Sister\", \"11\":\"Son\", \"12\":\"Wife\"}', '0000-00-00 00:00:00', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(9, 'agent_commission', '8', '2019-10-09 06:13:20', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(10, 'matching_commission', '25', '2019-08-20 04:10:55', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(11, 'sponsor_commission', '40', '2019-10-09 15:42:41', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(12, 'star_commission', '0.40', '2017-03-04 04:30:18', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(13, 'yearly_commission', '0.40', '2017-03-04 04:30:18', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(14, 'insentive_commission', '1.00', '2019-02-17 11:24:15', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(15, 'dellar_commission', '0.04', '2017-03-04 04:30:18', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(16, 'stockist_commission', '1.10', '2017-04-18 05:13:14', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(17, 'well_care', '0.05', '2017-03-04 04:32:33', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(18, 'leader_code', '0.40', '2017-03-04 04:32:33', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(19, 'district_roalty', '0.04', '2017-03-04 04:32:33', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(20, 'subdistrict_roalty', '0.04', '2017-03-04 04:32:33', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(21, 'union_roalty', '0.06', '2017-03-04 04:32:33', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(22, 'ward_roalty', '0.08', '2017-03-04 04:32:33', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(23, 'company_commission', '3.59', '2017-03-04 04:32:33', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(24, 'min_matching_point', '100', '2017-04-18 06:07:31', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(26, 'per_day_matching', '24', '2019-10-16 14:55:57', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(27, 'registration_amount', '260', '2019-10-14 06:04:14', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(28, 'PM_ID', 'U17444837', '2019-03-27 08:14:02', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(29, 'min_amount_load_PM', '0.01', '2019-04-11 05:55:00', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(30, 'min_amount_load_nagad', '2700', '2019-04-04 05:20:12', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(31, 'doller_rate', '90', '2019-04-04 05:20:16', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(32, 'min_withdraw_amount_nagad', '30', '2019-04-04 05:20:20', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(33, 'PM_account_id', '5671593', '2019-03-27 08:14:02', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(34, 'PM_account_pass', 'j7204255', '2019-03-27 08:14:02', '2019-10-09 20:32:12', 0, '2019-10-09 20:32:12', 0),
(35, 'active_amount', '360', '2019-10-15 06:20:14', '2019-10-15 12:20:14', NULL, '2019-10-15 12:20:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history_balance`
--

CREATE TABLE `history_balance` (
  `history_blns_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `type` enum('DR','CR') DEFAULT NULL,
  `purpose` text,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_balance_admin`
--

CREATE TABLE `history_balance_admin` (
  `history_blns_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `type` enum('DR','CR') DEFAULT NULL,
  `purpose` text,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_balance_agent`
--

CREATE TABLE `history_balance_agent` (
  `history_blns_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `type` enum('DR','CR') DEFAULT NULL,
  `purpose` text,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_point`
--

CREATE TABLE `history_point` (
  `history_point_add` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `lpoint` longtext,
  `rpoint` longtext,
  `current_left_point` longtext COMMENT 'rest of point after adding or removing or flushing',
  `current_right_point` longtext COMMENT 'rest of point after adding or removing or flushing',
  `current_balance` longtext COMMENT 'present balance after action execution',
  `current_commission` longtext COMMENT 'present commission after action execution',
  `type` enum('Add','Deduct','Flush') DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `history_transection`
--

CREATE TABLE `history_transection` (
  `history_ads_view_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `purpose` text,
  `amount` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_transection_nagad`
--

CREATE TABLE `history_transection_nagad` (
  `history_trans_nagad_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `nagad_number` varchar(155) DEFAULT NULL,
  `transection_num` text,
  `sender_phone` varchar(155) DEFAULT NULL,
  `status` enum('Approved','Pending','Canceled') NOT NULL DEFAULT 'Pending',
  `amount` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_transection_pm`
--

CREATE TABLE `history_transection_pm` (
  `history_trans_pm_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `payee_account` varchar(155) DEFAULT NULL,
  `payment_units` varchar(155) DEFAULT NULL,
  `payment_batch_num` varchar(155) DEFAULT NULL,
  `payer_account` varchar(155) DEFAULT NULL,
  `payment_id` varchar(155) NOT NULL,
  `cust_num` varchar(155) DEFAULT NULL,
  `amount` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_withdraw_nagad`
--

CREATE TABLE `history_withdraw_nagad` (
  `history_withdraw_nagad_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `nagad_number` varchar(155) DEFAULT NULL,
  `transection_num` text,
  `sender_phone` varchar(155) DEFAULT NULL,
  `status` enum('Approved','Pending','Canceled') NOT NULL DEFAULT 'Pending',
  `amount` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_withdraw_pm`
--

CREATE TABLE `history_withdraw_pm` (
  `history_withdraw_pm_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `payee_account` varchar(155) DEFAULT NULL,
  `payment_units` varchar(155) DEFAULT NULL,
  `payment_batch_num` varchar(155) DEFAULT NULL,
  `payer_account` varchar(155) DEFAULT NULL,
  `payment_id` varchar(155) DEFAULT NULL,
  `amount` float NOT NULL,
  `status` enum('Approved','Pending','Canceled') NOT NULL DEFAULT 'Approved',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `lo_id` int(11) NOT NULL,
  `per_id` int(11) NOT NULL,
  `name` varchar(99) DEFAULT NULL,
  `type` varchar(5) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`lo_id`, `per_id`, `name`, `type`, `time`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(1, 0, 'Dhaka', 'div', '2016-12-27 16:17:08', '2019-10-09 20:37:35', 0, '2019-10-09 20:37:35', 0),
(2, 0, 'Khulna', 'div', '2016-12-27 16:23:13', '2019-10-09 20:37:35', 0, '2019-10-09 20:37:35', 0),
(3, 0, 'Sylhet', 'div', '2016-12-27 16:26:08', '2019-10-09 20:37:35', 0, '2019-10-09 20:37:35', 0),
(4, 0, 'Rajshahi', 'div', '2017-01-08 10:19:59', '2019-10-09 20:37:35', 0, '2019-10-09 20:37:35', 0),
(5, 2, 'Jessore', 'dis', '2017-01-08 11:18:52', '2019-10-09 20:37:35', 0, '2019-10-09 20:37:35', 0),
(7, 2, 'Shatkhira', 'dis', '2017-01-08 12:08:43', '2019-10-09 20:37:35', 0, '2019-10-09 20:37:35', 0),
(8, 2, 'Narail', 'dis', '2017-01-08 12:18:08', '2019-10-09 20:37:35', 0, '2019-10-09 20:37:35', 0),
(9, 5, 'Avayanogor', 'tha', '2017-01-08 13:03:53', '2019-10-09 20:37:35', 0, '2019-10-09 20:37:35', 0),
(10, 9, 'Ward 4', 'ward', '2017-01-08 13:29:32', '2019-10-09 20:37:35', 0, '2019-10-09 20:37:35', 0),
(11, 0, 'Chittagong', 'div', '2017-01-12 12:48:02', '2019-10-09 20:37:35', 0, '2019-10-09 20:37:35', 0),
(12, 2, 'Khulna', 'dis', '2017-01-12 12:49:58', '2019-10-09 20:37:35', 0, '2019-10-09 20:37:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(11) NOT NULL,
  `email` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `f_name` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `l_name` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `add_1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `add_2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `city` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nid` int(55) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `photo` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `balance` int(155) DEFAULT NULL,
  `status` enum('Active','Inactive') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Active',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `email`, `username`, `pass`, `f_name`, `l_name`, `add_1`, `add_2`, `city`, `nid`, `phone`, `photo`, `reg_date`, `balance`, `status`, `time`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(1, 'imranertaza12@gmail.com', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Syed', 'Imran', 'Noapara', 'Jessore', 'Khulna', 0, 1924329315, '', '0000-00-00', 0, 'Active', '0000-00-00 00:00:00', '2019-10-09 20:37:59', 0, '2019-10-09 20:37:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menufacture`
--

CREATE TABLE `menufacture` (
  `men_id` int(11) NOT NULL,
  `brand_name` varchar(155) NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menufacture`
--

INSERT INTO `menufacture` (`men_id`, `brand_name`, `logo`, `time`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(1, 'Molla', '', '2017-02-11 04:41:50', '2019-10-09 20:38:35', 0, '2019-10-09 20:38:35', 0),
(3, 'habib', '', '2019-03-02 05:49:26', '2019-10-09 20:38:35', 0, '2019-10-09 20:38:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `cat_id` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `temp` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_title` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_des` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `f_image` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_type` enum('page','post','video','analyses') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `cat_id`, `temp`, `page_title`, `slug`, `short_des`, `page_description`, `f_image`, `page_type`, `time`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(19, '5', '', 'Test', '', 'Test', '<p>Test</p>\r\n', '', 'post', '0000-00-00 00:00:00', '2019-10-09 20:39:15', 0, '2019-10-09 20:39:15', 0),
(20, '5', '', 'New post for testing category', '', 'New post for testing category', '<p>New post for testing category</p>\r\n', 'f_post_1416899675.jpg', 'post', '0000-00-00 00:00:00', '2019-10-09 20:39:15', 0, '2019-10-09 20:39:15', 0),
(21, '5', '', 'Test for the image', '', 'Test for the image', '<p><input alt=\"\" src=\"http://localhost/dnationsoft_cms/assets/ckeditor/plugins/w3bdeveloper_uimages/media_files/graphic-design.jpg\" style=\"height:283px; width:376px\" type=\"image\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Test work post here&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', 'post', '0000-00-00 00:00:00', '2019-10-09 20:39:15', 0, '2019-10-09 20:39:15', 0),
(22, '', '', 'Tet', '', 'Test', '<p>Test</p>\r\n', 'f_post_1416899839.jpg', 'post', '0000-00-00 00:00:00', '2019-10-09 20:39:15', 0, '2019-10-09 20:39:15', 0),
(23, '', '', 'Test', '', 'sefdsdf', '<p>Tre</p>\r\n', 'f_post_1416899961.jpg', 'post', '0000-00-00 00:00:00', '2019-10-09 20:39:15', 0, '2019-10-09 20:39:15', 0),
(25, '', '', 'Test', '', 'dfsadfasdf', '<p>test</p>\r\n', 'f_post_1417101112.jpg', 'post', '0000-00-00 00:00:00', '2019-10-09 20:39:15', 0, '2019-10-09 20:39:15', 0),
(81, '', '0', 'Contact Us', 'contact-us', 'Contact Us', '<p>Phone: 01715047856</p>\n\n<p>Email: contact@starsfairbd.com</p>\n', '', 'page', '0000-00-00 00:00:00', '2019-10-09 20:39:15', 0, '2019-10-09 20:39:15', 0),
(100, '', 'home.php', 'Welcome to our Stars Fair BD.', 'home', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans; font-size:11px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n\r\n<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans; font-size:11px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '', 'page', '0000-00-00 00:00:00', '2019-10-09 20:39:15', 0, '2019-10-09 20:39:15', 0),
(101, '', 'download.php', 'Notice', 'notice', 'Notice', '<p>Notice</p>\r\n', '', 'page', '0000-00-00 00:00:00', '2019-10-09 20:39:15', 0, '2019-10-09 20:39:15', 0),
(107, '', 'gallery.php', 'Gallery', 'gallery', 'Gallery page', '<p>Gallery page details</p>\r\n', '', 'page', '0000-00-00 00:00:00', '2019-10-09 20:39:15', 0, '2019-10-09 20:39:15', 0),
(108, '', '0', 'About Us', 'about-us', 'Very soon some about us content will be added here.', '&lt;p&gt;Very soon some about us content will be added here.&lt;/p&gt;\r\n', '', 'page', '2017-01-09 06:37:13', '2019-10-09 20:39:15', 0, '2019-10-09 20:39:15', 0),
(109, '', '0', 'Marketing Plan', 'marketing-plan', 'Marketing Plan content will be available here', '&lt;p&gt;Marketing Plan content will be available here.&lt;/p&gt;\r\n', '', 'page', '2017-01-09 06:38:10', '2019-10-09 20:39:15', 0, '2019-10-09 20:39:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `ID` bigint(20) NOT NULL,
  `group_id` int(11) NOT NULL,
  `permKey` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `permName` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`ID`, `group_id`, `permKey`, `permName`, `date`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(1, 1, 'dashboard', 'Dashboard', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(2, 2, 'page_list', 'Page List', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(3, 2, 'edit_page', 'Edit Page', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(4, 2, 'delete_page', 'Delete Page', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(5, 2, 'add_page', 'Add Page', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(7, 3, 'category_list', 'Category List', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(8, 3, 'add_category', 'Add Category', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(9, 3, 'edit_category', 'Edit Category', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(10, 3, 'delete_category', 'Delete Category', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(14, 4, 'user_list', 'User List', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(15, 4, 'add_user', 'Add User', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(16, 4, 'edit_user', 'Edit User', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(17, 5, 'user_role_list', 'User Role List', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(18, 5, 'add_role', 'Add Role', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(19, 5, 'edit_role', 'Edit Role', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(20, 6, 'add_permission', 'Add Permission', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(21, 6, 'permission_list', 'Permission List', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(22, 7, 'menu', 'Menu', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(23, 7, 'general_settings', 'General Settings', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(24, 4, 'delete_user', 'Delete User', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(25, 5, 'delete_role', 'Delete Role', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(26, 2, 'add_post', 'Add Post', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(27, 2, 'edit_post', 'Edit Post', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(28, 2, 'delete_post', 'Delete Post', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(29, 2, 'post_list', 'Post List', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(30, 2, 'std_list', 'Student List', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(31, 2, 'delete_std', 'Delete Student', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(32, 2, 'edit_std', 'Edit Student', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(33, 2, 'add_std', 'Add Student', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(38, 9, 'tec_list', 'Teacher List', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(39, 9, 'delete_tec', 'Delete Teacher', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(40, 9, 'edit_tec', 'Edit Teacher', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(41, 9, 'add_tec', 'Add Teacher', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(42, 10, 'add_download', 'Add Download', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(43, 10, 'edit_download', 'Edit Download', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(44, 10, 'download_list', 'Download List', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(45, 10, 'delete_download', 'Delete Download', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(60, 7, 'slider', 'Slider', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(61, 7, 'gallery', 'Gallery', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(62, 7, 'delete_slider', 'Delete Slider', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(63, 12, 'man_commitee_list', 'Managing Commitee List', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(64, 12, 'add_com_member', 'Add Commitee Member', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(65, 12, 'edit_com_member', 'Edit Commitee Member', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0),
(66, 12, 'delete_com_member', 'Delete Commitee Member', '0000-00-00 00:00:00', '2019-10-09 20:39:47', 0, '2019-10-09 20:39:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pins`
--

CREATE TABLE `pins` (
  `pin_id` int(11) NOT NULL,
  `pin` varchar(155) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('unused','used') NOT NULL DEFAULT 'unused',
  `createdBy` int(11) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `name` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) UNSIGNED DEFAULT NULL,
  `quantity` int(11) UNSIGNED DEFAULT NULL,
  `quality` enum('1','2','3','4') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(155) DEFAULT NULL,
  `men_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `filter_id` int(11) DEFAULT NULL,
  `colors` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `size` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `discount` int(11) DEFAULT NULL,
  `special` tinyint(1) DEFAULT NULL,
  `main_image` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `additional_images` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `status` enum('Active','Inactive') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Active',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `point`, `name`, `price`, `quantity`, `quality`, `model`, `men_id`, `cat_id`, `filter_id`, `colors`, `description`, `size`, `discount`, `special`, `main_image`, `additional_images`, `status`, `time`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(126, 100, 'Xtra Clean a Toxin Solution', 625, 10, '1', 'FB2', 0, 0, 250, '7', '', '500g', 0, 1, 'f_pro_1486289825.jpg', '', 'Active', '2017-02-05 10:17:05', '2019-10-09 20:40:46', 0, '2019-10-09 20:40:46', 0),
(127, 100, 'T-Shirt (2 piece)', 660, 10, '1', 'TP1', 0, 0, 240, '0', '', '', 0, 1, 'f_pro_1486300940.jpg', '', 'Active', '2017-02-05 13:22:20', '2019-10-09 20:40:46', 0, '2019-10-09 20:40:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_cat`
--

CREATE TABLE `product_cat` (
  `cat_id` int(11) NOT NULL,
  `perent_id` int(11) NOT NULL,
  `cat_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_id` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_cat`
--

INSERT INTO `product_cat` (`cat_id`, `perent_id`, `cat_name`, `pro_id`, `time`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(1, 0, 'Salt', '', '2017-02-11 04:41:38', '2019-10-09 20:41:05', 0, '2019-10-09 20:41:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID` bigint(20) NOT NULL,
  `roleName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID`, `roleName`, `role_description`, `date`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(1, 'Administrators', 'Admin can edit everything', '0000-00-00 00:00:00', '2019-10-09 20:41:44', 0, '2019-10-09 20:41:44', 0),
(2, 'Manager', 'Manager can manage all editors', '0000-00-00 00:00:00', '2019-10-09 20:41:44', 0, '2019-10-09 20:41:44', 0),
(3, 'Editor', 'Test editor', '0000-00-00 00:00:00', '2019-10-09 20:41:44', 0, '2019-10-09 20:41:44', 0),
(4, 'Agent', 'Agent', '0000-00-00 00:00:00', '2019-10-09 20:41:44', 0, '2019-10-09 20:41:44', 0),
(5, 'Stockist', 'Stockist', '0000-00-00 00:00:00', '2019-10-09 20:41:44', 0, '2019-10-09 20:41:44', 0),
(6, 'General Member', 'General Member', '0000-00-00 00:00:00', '2019-10-09 20:41:44', 0, '2019-10-09 20:41:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role_perms`
--

CREATE TABLE `role_perms` (
  `ID` bigint(20) NOT NULL,
  `roleID` bigint(20) NOT NULL,
  `permID` bigint(20) NOT NULL,
  `value` tinyint(1) NOT NULL DEFAULT '0',
  `addDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_perms`
--

INSERT INTO `role_perms` (`ID`, `roleID`, `permID`, `value`, `addDate`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(96, 1, 1, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(97, 1, 2, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(98, 1, 3, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(99, 1, 4, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(100, 1, 5, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(101, 1, 6, 0, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(102, 1, 7, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(103, 1, 8, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(104, 1, 9, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(105, 1, 10, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(106, 1, 11, 0, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(107, 1, 12, 0, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(108, 1, 13, 0, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(109, 1, 14, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(110, 1, 15, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(111, 1, 16, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(112, 1, 17, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(113, 1, 18, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(114, 1, 19, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(115, 1, 20, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(116, 1, 21, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(117, 1, 22, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(118, 1, 23, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(119, 2, 1, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(120, 2, 2, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(121, 2, 3, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(122, 2, 4, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(123, 2, 5, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(124, 2, 6, 0, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(125, 2, 7, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(126, 2, 8, 0, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(127, 2, 9, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(128, 2, 10, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(129, 2, 11, 0, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(130, 2, 12, 0, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(131, 2, 13, 0, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(132, 2, 22, 0, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(133, 2, 14, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(134, 6, 1, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(135, 6, 6, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(136, 2, 15, 0, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(137, 3, 1, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(138, 3, 2, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(139, 3, 3, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(140, 3, 4, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(141, 3, 5, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(142, 3, 6, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(143, 3, 7, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(144, 3, 8, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(145, 3, 9, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(146, 3, 10, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(147, 3, 11, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(148, 3, 12, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(149, 3, 13, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(150, 3, 22, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(151, 1, 24, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(152, 1, 25, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(153, 1, 26, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(154, 1, 27, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(155, 1, 28, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(156, 1, 29, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(157, 1, 30, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(158, 1, 31, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(159, 1, 32, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(160, 1, 33, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(161, 1, 34, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(162, 1, 35, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(163, 1, 36, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(164, 1, 37, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(165, 1, 38, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(166, 1, 39, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(167, 1, 40, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(168, 1, 41, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(169, 1, 44, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(170, 1, 42, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(171, 1, 43, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(172, 1, 45, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(173, 1, 46, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(174, 1, 47, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(175, 1, 48, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(176, 1, 49, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(177, 1, 50, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(178, 1, 51, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(179, 1, 52, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(180, 1, 53, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(181, 1, 54, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(182, 1, 55, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(183, 1, 56, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(184, 1, 57, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(185, 1, 58, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(186, 1, 59, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(187, 1, 60, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(188, 1, 61, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(189, 1, 62, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(190, 1, 63, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(191, 1, 64, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(192, 1, 65, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(193, 1, 66, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(194, 1, 67, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(195, 1, 68, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(196, 1, 69, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(197, 1, 70, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(198, 1, 71, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(199, 1, 72, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(200, 1, 73, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(201, 1, 74, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(202, 4, 1, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(203, 4, 30, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(204, 4, 31, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(205, 4, 33, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(206, 4, 27, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(207, 5, 1, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(208, 5, 5, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(209, 5, 4, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(210, 5, 3, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(211, 5, 2, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(213, 6, 63, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(214, 6, 64, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(215, 6, 65, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0),
(216, 6, 66, 1, '0000-00-00 00:00:00', '2019-10-09 20:42:29', 0, '2019-10-09 20:42:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(11) NOT NULL,
  `inv_id` int(11) DEFAULT NULL,
  `u_id` int(11) NOT NULL,
  `spon_id` int(11) DEFAULT NULL,
  `agent_id` int(11) NOT NULL,
  `pro_info` text COLLATE utf16_unicode_ci,
  `amount` int(155) NOT NULL,
  `status` enum('Pending','Completed','Canceled') COLLATE utf16_unicode_ci NOT NULL DEFAULT 'Pending',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_stockist`
--

CREATE TABLE `sales_stockist` (
  `sale_id` int(11) NOT NULL,
  `inv_id` int(11) NOT NULL,
  `stockist_id` int(11) DEFAULT NULL,
  `pro_info` text COLLATE utf16_unicode_ci,
  `amount` int(155) NOT NULL,
  `status` enum('Pending','Completed','Canceled') COLLATE utf16_unicode_ci NOT NULL DEFAULT 'Pending',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider_gallery`
--

CREATE TABLE `slider_gallery` (
  `sl_id` int(11) NOT NULL,
  `name` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('gallery','slider') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'gallery',
  `status` enum('Active','Inactive') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Active',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_gallery`
--

INSERT INTO `slider_gallery` (`sl_id`, `name`, `image`, `type`, `status`, `time`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(80, 'sdff', 'f_gallery_1476354533.jpg', 'gallery', 'Active', '2016-10-13 10:28:53', '2019-10-09 20:43:44', 0, '2019-10-09 20:43:44', 0),
(81, 'sfdsdfs', 'f_gallery_1476354543.jpg', 'gallery', 'Active', '2016-10-13 10:29:03', '2019-10-09 20:43:44', 0, '2019-10-09 20:43:44', 0),
(82, '1st', 'f_gallery_1482678908.jpg', 'slider', 'Active', '2016-12-25 15:15:08', '2019-10-09 20:43:44', 0, '2019-10-09 20:43:44', 0),
(83, '2nd', 'f_gallery_1482678931.jpg', 'slider', 'Active', '2016-12-25 15:15:31', '2019-10-09 20:43:44', 0, '2019-10-09 20:43:44', 0),
(84, '3rd', 'f_gallery_1482678949.jpg', 'slider', 'Active', '2016-12-25 15:15:49', '2019-10-09 20:43:44', 0, '2019-10-09 20:43:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stockist_product`
--

CREATE TABLE `stockist_product` (
  `sp_id` int(11) NOT NULL,
  `stockist_id` int(11) NOT NULL,
  `pro_info` text COLLATE utf16_unicode_ci,
  `last_amount` int(155) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stockist_products_2`
--

CREATE TABLE `stockist_products_2` (
  `sp_id` int(11) NOT NULL,
  `pro_id` int(155) NOT NULL,
  `stockist_id` int(155) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `name` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(30) NOT NULL DEFAULT '1',
  `status` enum('Active','Inactive') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Active',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transection_blns`
--

CREATE TABLE `transection_blns` (
  `trans_blns_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `purpose` text,
  `type` enum('Receive','Send') NOT NULL,
  `amount` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE `tree` (
  `t_id` int(155) NOT NULL,
  `u_id` int(155) NOT NULL,
  `pr_id` int(155) NOT NULL,
  `ref_id` text,
  `spon_id` int(11) NOT NULL,
  `l_t` int(155) DEFAULT NULL,
  `r_t` int(155) DEFAULT NULL,
  `agent_id` int(11) NOT NULL,
  `d_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`t_id`, `u_id`, `pr_id`, `ref_id`, `spon_id`, `l_t`, `r_t`, `agent_id`, `d_time`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(1, 1, 0, '0', 0, 0, 11, 0, '2017-04-25 08:28:06', '2019-10-09 20:45:57', 0, '2019-10-09 20:45:57', 0),
(11, 11, 1, '1', 1, 0, 0, 10, '2019-10-15 12:18:26', '2019-10-09 20:45:57', 0, '2019-10-09 20:45:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) NOT NULL,
  `username` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `f_name` varchar(55) NOT NULL,
  `l_name` varchar(55) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `phn_no` int(55) DEFAULT NULL,
  `nid` int(55) DEFAULT NULL,
  `photo` varchar(155) DEFAULT NULL,
  `father` varchar(100) DEFAULT NULL,
  `mother` varchar(100) DEFAULT NULL,
  `religion` int(11) DEFAULT NULL,
  `blood` int(11) DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  `division` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `upozila` int(11) DEFAULT NULL,
  `union` int(11) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL,
  `nominee` varchar(100) DEFAULT NULL,
  `relationship` int(11) DEFAULT NULL,
  `nom_dob` date DEFAULT NULL,
  `bank_name` int(11) DEFAULT NULL,
  `account_no` varchar(155) DEFAULT NULL,
  `balance` double UNSIGNED DEFAULT NULL,
  `OP_game_balance` int(11) DEFAULT NULL,
  `commission` float UNSIGNED DEFAULT NULL,
  `point` int(155) DEFAULT NULL,
  `pr_point` int(155) DEFAULT NULL,
  `lpoint` int(11) DEFAULT NULL,
  `rpoint` int(11) DEFAULT NULL,
  `tl_left_matching` int(11) DEFAULT NULL,
  `tl_right_matching` int(11) DEFAULT NULL,
  `type` enum('1','2','3','4') NOT NULL DEFAULT '4',
  `status` enum('Active','Inactive','Banded') NOT NULL DEFAULT 'Active',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `password`, `f_name`, `l_name`, `address1`, `address2`, `phn_no`, `nid`, `photo`, `father`, `mother`, `religion`, `blood`, `sex`, `division`, `district`, `upozila`, `union`, `post`, `nominee`, `relationship`, `nom_dob`, `bank_name`, `account_no`, `balance`, `OP_game_balance`, `commission`, `point`, `pr_point`, `lpoint`, `rpoint`, `tl_left_matching`, `tl_right_matching`, `type`, `status`, `time`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(1, 'admin', 'imran@dnationsoft.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'StarsFair', 'International LTD', 'ddfgsdfg', 'dfgdfgsg', 45435353, 3453453, '', 'dfgfgs', 'dfgdfg', 0, 0, 0, 0, 0, 0, 0, '', '', 0, NULL, 0, '', 40000, 0, 0, 5, 0, 0, 100, NULL, NULL, '1', 'Active', '2019-10-13 22:14:17', '2019-10-09 20:46:32', 0, '2019-10-09 20:46:32', 0),
(10, 'agent01', 'jubayerahmed5073@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'jubayer', 'Jubayer', 'sylhet', '', 1715525073, 2558, '', '', '', 0, 0, 0, 2, 0, 0, 0, '', '', 0, NULL, 0, '', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2', 'Active', '2016-12-28 18:00:22', '2019-10-09 20:46:32', 0, '2019-10-09 20:46:32', 0),
(11, 'u-sf01', 'jubayerahmed5073@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'jubayer', 'Jubayer', 'sylhet', '', 1715525073, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', 0, NULL, 0, '', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '4', 'Inactive', '2016-12-28 18:18:02', '2019-10-09 20:46:32', 0, '2019-10-09 20:46:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_role_id` int(11) NOT NULL,
  `userID` int(20) NOT NULL,
  `roleID` bigint(20) NOT NULL,
  `addDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_role_id`, `userID`, `roleID`, `addDate`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(1, 1, 1, '0000-00-00 00:00:00', '2019-10-09 20:47:02', 0, '2019-10-09 20:47:02', 0),
(2, 10, 4, '0000-00-00 00:00:00', '2019-10-09 20:47:02', 0, '2019-10-09 20:47:02', 0),
(3, 11, 6, '0000-00-00 00:00:00', '2019-10-09 20:47:02', 0, '2019-10-09 20:47:02', 0),
(4, 12, 6, '0000-00-00 00:00:00', '2019-10-09 20:47:02', 0, '2019-10-09 20:47:02', 0),
(5, 13, 6, '0000-00-00 00:00:00', '2019-10-09 20:47:02', 0, '2019-10-09 20:47:02', 0),
(6, 14, 5, '0000-00-00 00:00:00', '2019-10-09 20:47:02', 0, '2019-10-09 20:47:02', 0),
(7, 15, 5, '0000-00-00 00:00:00', '2019-10-09 20:47:02', 0, '2019-10-09 20:47:02', 0),
(8, 16, 6, '0000-00-00 00:00:00', '2019-10-09 20:47:02', 0, '2019-10-09 20:47:02', 0),
(10, 18, 6, '2019-10-13 05:10:17', '2019-10-13 11:52:17', NULL, '2019-10-13 11:52:17', NULL),
(12, 20, 6, '2019-10-13 05:10:57', '2019-10-13 11:59:57', NULL, '2019-10-13 11:59:57', NULL),
(13, 21, 6, '2019-10-13 06:10:38', '2019-10-13 12:02:38', NULL, '2019-10-13 12:02:38', NULL),
(14, 22, 6, '2019-10-13 06:10:26', '2019-10-13 12:04:26', NULL, '2019-10-13 12:04:26', NULL),
(15, 23, 6, '2019-10-13 06:10:24', '2019-10-13 12:06:24', NULL, '2019-10-13 12:06:24', NULL),
(16, 24, 6, '2019-10-13 00:10:58', '2019-10-13 18:47:58', NULL, '2019-10-13 18:47:58', NULL),
(17, 25, 6, '2019-10-13 00:10:07', '2019-10-13 18:50:07', NULL, '2019-10-13 18:50:07', NULL),
(18, 26, 6, '2019-10-13 00:10:14', '2019-10-13 18:51:14', NULL, '2019-10-13 18:51:14', NULL),
(19, 27, 6, '2019-10-13 00:10:27', '2019-10-13 18:52:27', NULL, '2019-10-13 18:52:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `w3bdeveloper_media`
--

CREATE TABLE `w3bdeveloper_media` (
  `id` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `path` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `thumbnailPath` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `fileName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `w3bdeveloper_media`
--

INSERT INTO `w3bdeveloper_media` (`id`, `type`, `path`, `thumbnailPath`, `fileName`, `date`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(3, 'image', 'media_files/alpin.jpg', 'media_files/alpin.jpg', 'alpin.jpg', '2014-11-22 15:06:54', '2019-10-09 20:47:24', 0, '2019-10-09 20:47:24', 0),
(4, 'image', 'media_files/contact_with_man.jpg', 'media_files/contact_with_man.jpg', 'contact_with_man.jpg', '2014-11-22 15:07:05', '2019-10-09 20:47:24', 0, '2019-10-09 20:47:24', 0),
(5, 'image', 'media_files/total_products.jpg', 'media_files/total_products.jpg', 'total_products.jpg', '2014-11-22 15:14:24', '2019-10-09 20:47:24', 0, '2019-10-09 20:47:24', 0),
(6, 'image', 'media_files/graphic-design.jpg', 'media_files/graphic-design.jpg', 'graphic-design.jpg', '2014-11-22 15:32:15', '2019-10-09 20:47:24', 0, '2019-10-09 20:47:24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `widget`
--

CREATE TABLE `widget` (
  `w_id` int(11) NOT NULL,
  `title` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `image` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `b_code` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widget`
--

INSERT INTO `widget` (`w_id`, `title`, `description`, `image`, `b_code`, `time`, `createdDtm`, `updatedBy`, `updatedDtm`, `deleted`) VALUES
(6, 'Important Links', '<ul>\r\n	<li><a href=\"http://localhost/starsfair/web_v2/details/page/land-history.html#\" style=\"box-sizing: border-box; color: rgb(0, 0, 0); text-decoration: none; font-size: 12px; background: transparent;\">&nbsp;Boards</a></li>\r\n	<li><a href=\"http://localhost/starsfair/web_v2/details/page/land-history.html#\" style=\"box-sizing: border-box; color: rgb(0, 0, 0); outline: 0px; font-size: 12px; background: transparent;\">&nbsp;Natinoal Univercity</a></li>\r\n	<li><a href=\"http://localhost/starsfair/web_v2/details/page/land-history.html#\" style=\"box-sizing: border-box; color: rgb(0, 0, 0); text-decoration: none; font-size: 12px; background: transparent;\">&nbsp;Govt site1</a></li>\r\n	<li><a href=\"http://localhost/starsfair/web_v2/details/page/land-history.html#\" style=\"box-sizing: border-box; color: rgb(0, 0, 0); text-decoration: none; font-size: 12px; background: transparent;\">&nbsp;Govt site2</a></li>\r\n	<li><a href=\"http://localhost/starsfair/web_v2/details/page/land-history.html#\" style=\"box-sizing: border-box; color: rgb(0, 0, 0); text-decoration: none; font-size: 12px; background: transparent;\">&nbsp;Govt site3</a></li>\r\n</ul>\r\n', '0', 'Important link', '0000-00-00 00:00:00', '2019-10-09 20:47:50', 0, '2019-10-09 20:47:50', 0),
(7, 'নোটিস', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\n', '0', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '0000-00-00 00:00:00', '2019-10-09 20:47:50', 0, '2019-10-09 20:47:50', 0),
(8, 'About Us', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\n', '0', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '2016-07-24 11:53:46', '2019-10-09 20:47:50', 0, '2019-10-09 20:47:50', 0),
(9, 'Contact Us', '<p>Phone: 01715047856\r\n', '0', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '2016-07-24 11:57:05', '2019-10-09 20:47:50', 0, '2019-10-09 20:47:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `withdrow_request_agent`
--

CREATE TABLE `withdrow_request_agent` (
  `req_id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `form` int(11) NOT NULL,
  `amount` float NOT NULL,
  `charge` float DEFAULT NULL,
  `payable` float DEFAULT NULL,
  `status` enum('pending','confirm','cancel') NOT NULL DEFAULT 'pending',
  `req_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `confirm_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `withdrow_req_match`
--

CREATE TABLE `withdrow_req_match` (
  `req_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `to` int(11) NOT NULL,
  `form` int(11) NOT NULL,
  `amount` double NOT NULL,
  `charge` double DEFAULT NULL,
  `payable` double DEFAULT NULL,
  `status` enum('pending','confirm','cancel') NOT NULL DEFAULT 'pending',
  `req_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `confirm_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `withdrow_req_sponsor`
--

CREATE TABLE `withdrow_req_sponsor` (
  `req_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `to` int(11) NOT NULL,
  `form` int(11) NOT NULL,
  `amount` float NOT NULL,
  `charge` float DEFAULT NULL,
  `payable` float DEFAULT NULL,
  `status` enum('pending','confirm','cancel') NOT NULL DEFAULT 'pending',
  `req_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `confirm_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance_request`
--
ALTER TABLE `balance_request`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bnk_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `perent_id` (`perent_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `comm_agent`
--
ALTER TABLE `comm_agent`
  ADD PRIMARY KEY (`gen_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `sale_id` (`sale_id`);

--
-- Indexes for table `comm_incentive`
--
ALTER TABLE `comm_incentive`
  ADD PRIMARY KEY (`ins_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `comm_matching`
--
ALTER TABLE `comm_matching`
  ADD PRIMARY KEY (`match_com_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `comm_other`
--
ALTER TABLE `comm_other`
  ADD PRIMARY KEY (`comm_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `comm_spot`
--
ALTER TABLE `comm_spot`
  ADD PRIMARY KEY (`spot_com_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `sale_id` (`sale_id`);

--
-- Indexes for table `comm_star`
--
ALTER TABLE `comm_star`
  ADD PRIMARY KEY (`star_com_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `comm_stockist`
--
ALTER TABLE `comm_stockist`
  ADD PRIMARY KEY (`gen_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `sale_id` (`sale_id`);

--
-- Indexes for table `comm_yearly`
--
ALTER TABLE `comm_yearly`
  ADD PRIMARY KEY (`yearly_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`dwn_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `global_settings`
--
ALTER TABLE `global_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_balance`
--
ALTER TABLE `history_balance`
  ADD PRIMARY KEY (`history_blns_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `history_balance_admin`
--
ALTER TABLE `history_balance_admin`
  ADD PRIMARY KEY (`history_blns_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `history_balance_agent`
--
ALTER TABLE `history_balance_agent`
  ADD PRIMARY KEY (`history_blns_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `history_point`
--
ALTER TABLE `history_point`
  ADD PRIMARY KEY (`history_point_add`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `history_transection`
--
ALTER TABLE `history_transection`
  ADD PRIMARY KEY (`history_ads_view_id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `history_transection_nagad`
--
ALTER TABLE `history_transection_nagad`
  ADD PRIMARY KEY (`history_trans_nagad_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `history_transection_pm`
--
ALTER TABLE `history_transection_pm`
  ADD PRIMARY KEY (`history_trans_pm_id`),
  ADD KEY `receiver_id` (`receiver_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `history_withdraw_nagad`
--
ALTER TABLE `history_withdraw_nagad`
  ADD PRIMARY KEY (`history_withdraw_nagad_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `history_withdraw_pm`
--
ALTER TABLE `history_withdraw_pm`
  ADD PRIMARY KEY (`history_withdraw_pm_id`),
  ADD KEY `receiver_id` (`receiver_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`lo_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `menufacture`
--
ALTER TABLE `menufacture`
  ADD PRIMARY KEY (`men_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `permKey` (`permKey`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `pins`
--
ALTER TABLE `pins`
  ADD PRIMARY KEY (`pin_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `men_id` (`men_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `filter_id` (`filter_id`);

--
-- Indexes for table `product_cat`
--
ALTER TABLE `product_cat`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `perent_id` (`perent_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `roleName` (`roleName`);

--
-- Indexes for table `role_perms`
--
ALTER TABLE `role_perms`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `roleID_2` (`roleID`,`permID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `inv_id` (`inv_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `spon_id` (`spon_id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `sales_stockist`
--
ALTER TABLE `sales_stockist`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `inv_id` (`inv_id`),
  ADD KEY `stockist_id` (`stockist_id`);

--
-- Indexes for table `slider_gallery`
--
ALTER TABLE `slider_gallery`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `stockist_product`
--
ALTER TABLE `stockist_product`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `stockist_id` (`stockist_id`);

--
-- Indexes for table `stockist_products_2`
--
ALTER TABLE `stockist_products_2`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `stockist_id` (`stockist_id`);

--
-- Indexes for table `transection_blns`
--
ALTER TABLE `transection_blns`
  ADD PRIMARY KEY (`trans_blns_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `pr_id` (`pr_id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_role_id`),
  ADD KEY `userID` (`userID`),
  ADD KEY `roleID` (`roleID`);

--
-- Indexes for table `w3bdeveloper_media`
--
ALTER TABLE `w3bdeveloper_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget`
--
ALTER TABLE `widget`
  ADD PRIMARY KEY (`w_id`);

--
-- Indexes for table `withdrow_request_agent`
--
ALTER TABLE `withdrow_request_agent`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `withdrow_req_match`
--
ALTER TABLE `withdrow_req_match`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `withdrow_req_sponsor`
--
ALTER TABLE `withdrow_req_sponsor`
  ADD PRIMARY KEY (`req_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balance_request`
--
ALTER TABLE `balance_request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bnk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comm_agent`
--
ALTER TABLE `comm_agent`
  MODIFY `gen_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comm_matching`
--
ALTER TABLE `comm_matching`
  MODIFY `match_com_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comm_other`
--
ALTER TABLE `comm_other`
  MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comm_spot`
--
ALTER TABLE `comm_spot`
  MODIFY `spot_com_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comm_star`
--
ALTER TABLE `comm_star`
  MODIFY `star_com_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comm_stockist`
--
ALTER TABLE `comm_stockist`
  MODIFY `gen_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comm_yearly`
--
ALTER TABLE `comm_yearly`
  MODIFY `yearly_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `dwn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `global_settings`
--
ALTER TABLE `global_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `history_balance`
--
ALTER TABLE `history_balance`
  MODIFY `history_blns_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history_balance_admin`
--
ALTER TABLE `history_balance_admin`
  MODIFY `history_blns_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history_balance_agent`
--
ALTER TABLE `history_balance_agent`
  MODIFY `history_blns_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history_point`
--
ALTER TABLE `history_point`
  MODIFY `history_point_add` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history_transection`
--
ALTER TABLE `history_transection`
  MODIFY `history_ads_view_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history_transection_nagad`
--
ALTER TABLE `history_transection_nagad`
  MODIFY `history_trans_nagad_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history_transection_pm`
--
ALTER TABLE `history_transection_pm`
  MODIFY `history_trans_pm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history_withdraw_nagad`
--
ALTER TABLE `history_withdraw_nagad`
  MODIFY `history_withdraw_nagad_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history_withdraw_pm`
--
ALTER TABLE `history_withdraw_pm`
  MODIFY `history_withdraw_pm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `lo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menufacture`
--
ALTER TABLE `menufacture`
  MODIFY `men_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `pins`
--
ALTER TABLE `pins`
  MODIFY `pin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `product_cat`
--
ALTER TABLE `product_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `role_perms`
--
ALTER TABLE `role_perms`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales_stockist`
--
ALTER TABLE `sales_stockist`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slider_gallery`
--
ALTER TABLE `slider_gallery`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `stockist_product`
--
ALTER TABLE `stockist_product`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stockist_products_2`
--
ALTER TABLE `stockist_products_2`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transection_blns`
--
ALTER TABLE `transection_blns`
  MODIFY `trans_blns_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `t_id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `w3bdeveloper_media`
--
ALTER TABLE `w3bdeveloper_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `widget`
--
ALTER TABLE `widget`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `withdrow_request_agent`
--
ALTER TABLE `withdrow_request_agent`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `withdrow_req_match`
--
ALTER TABLE `withdrow_req_match`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `withdrow_req_sponsor`
--
ALTER TABLE `withdrow_req_sponsor`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `balance_request`
--
ALTER TABLE `balance_request`
  ADD CONSTRAINT `balance_request_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `users` (`ID`);

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`perent_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `comm_agent`
--
ALTER TABLE `comm_agent`
  ADD CONSTRAINT `comm_agent_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comm_agent_ibfk_2` FOREIGN KEY (`gen_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comm_agent_ibfk_3` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`sale_id`) ON UPDATE CASCADE;

--
-- Constraints for table `comm_incentive`
--
ALTER TABLE `comm_incentive`
  ADD CONSTRAINT `comm_incentive_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comm_incentive_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `tree` (`t_id`) ON UPDATE CASCADE;

--
-- Constraints for table `comm_matching`
--
ALTER TABLE `comm_matching`
  ADD CONSTRAINT `comm_matching_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comm_matching_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `tree` (`t_id`) ON UPDATE CASCADE;

--
-- Constraints for table `comm_other`
--
ALTER TABLE `comm_other`
  ADD CONSTRAINT `comm_other_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comm_other_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `tree` (`t_id`) ON UPDATE CASCADE;

--
-- Constraints for table `comm_spot`
--
ALTER TABLE `comm_spot`
  ADD CONSTRAINT `comm_spot_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comm_spot_ibfk_2` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`sale_id`) ON UPDATE CASCADE;

--
-- Constraints for table `comm_star`
--
ALTER TABLE `comm_star`
  ADD CONSTRAINT `comm_star_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comm_star_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `tree` (`t_id`) ON UPDATE CASCADE;

--
-- Constraints for table `comm_stockist`
--
ALTER TABLE `comm_stockist`
  ADD CONSTRAINT `comm_stockist_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comm_stockist_ibfk_2` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`sale_id`) ON UPDATE CASCADE;

--
-- Constraints for table `comm_yearly`
--
ALTER TABLE `comm_yearly`
  ADD CONSTRAINT `comm_yearly_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comm_yearly_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `tree` (`t_id`) ON UPDATE CASCADE;

--
-- Constraints for table `history_balance`
--
ALTER TABLE `history_balance`
  ADD CONSTRAINT `history_balance_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `history_point`
--
ALTER TABLE `history_point`
  ADD CONSTRAINT `history_point_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `history_transection`
--
ALTER TABLE `history_transection`
  ADD CONSTRAINT `history_transection_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `history_transection_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `history_transection_nagad`
--
ALTER TABLE `history_transection_nagad`
  ADD CONSTRAINT `history_transection_nagad_ibfk_1` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `history_transection_pm`
--
ALTER TABLE `history_transection_pm`
  ADD CONSTRAINT `history_transection_pm_ibfk_1` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `history_withdraw_nagad`
--
ALTER TABLE `history_withdraw_nagad`
  ADD CONSTRAINT `history_withdraw_nagad_ibfk_1` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `history_withdraw_pm`
--
ALTER TABLE `history_withdraw_pm`
  ADD CONSTRAINT `history_withdraw_pm_ibfk_1` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`ID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
