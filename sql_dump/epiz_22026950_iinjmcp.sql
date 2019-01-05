-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql210.epizy.com
-- Generation Time: Jun 18, 2018 at 08:45 AM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_22026950_iinjmcp`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `census_id` int(11) NOT NULL,
  `visitor_id` int(11) NOT NULL,
  `time` varchar(15) NOT NULL,
  `date` date DEFAULT NULL,
  `designation` varchar(15) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`attendance_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `census`
--

CREATE TABLE IF NOT EXISTS `census` (
  `census_id` int(11) NOT NULL AUTO_INCREMENT,
  `census_first_name` varchar(50) NOT NULL DEFAULT '',
  `census_middle_name` varchar(50) NOT NULL DEFAULT '',
  `census_last_name` varchar(50) NOT NULL DEFAULT '',
  `census_ext_name` varchar(10) NOT NULL,
  `census_gender` varchar(10) NOT NULL,
  `census_phone` varchar(25) NOT NULL DEFAULT '',
  `census_birthday` date NOT NULL,
  `census_congregation` varchar(25) NOT NULL,
  `census_country` varchar(25) NOT NULL,
  `census_designation` varchar(15) NOT NULL,
  `census_profile` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `church_status` int(11) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`census_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `census`
--

INSERT INTO `census` (`census_id`, `census_first_name`, `census_middle_name`, `census_last_name`, `census_ext_name`, `census_gender`, `census_phone`, `census_birthday`, `census_congregation`, `census_country`, `census_designation`, `census_profile`, `status`, `church_status`, `created_date`, `update_time`) VALUES
(1, 'Redentor', 'Cabanding', 'Lucas', '', 'Male', '09988612241', '1979-05-02', 'Cabanatuan', 'Philippines', 'Pastor', 'uploads/f3686dd6ffcba559a4da098e8f7c3609.jpg', 1, 1, '2018-06-17 09:12:17', '0000-00-00 00:00:00'),
(2, 'Mahjelene', 'Villanueva', 'Lucas', '', 'Female', '09364005989', '1981-11-08', 'Cabanatuan', 'Philippines', 'Deaconess', 'uploads/4a31a96ae5d7057b55563a38d926d398.jpg', 1, 1, '2018-06-18 06:33:41', '0000-00-00 00:00:00'),
(3, 'Rhomeena Celyn', 'Villanueva', 'Lucas', '', 'Female', '09757202298', '2005-04-21', 'Cabanatuan', 'Philippines', 'Member', 'uploads/ef2e1a61a7ba9e1076f0ecc5fa7ca5a6.jpg', 1, 1, '2018-06-18 06:33:56', '0000-00-00 00:00:00'),
(4, 'Anicka Claudette', 'Villanueva', 'Lucas', '', 'Female', '09359603203', '2006-09-17', 'Cabanatuan', 'Philippines', 'Member', 'uploads/55f3c3d49cd034a924e310152db4224d.jpg', 1, 1, '2018-06-18 06:34:18', '0000-00-00 00:00:00'),
(5, 'Alecxander Shawn', 'Villanueva', 'Lucas', '', 'Male', '09364005989', '2009-04-28', 'Cabanatuan', 'Philippines', 'Member', 'uploads/86c673c5ee56485330eea386e46b7b60.jpg', 1, 1, '2018-06-18 06:34:24', '0000-00-00 00:00:00'),
(6, 'Romeo', 'Sobremonte', 'Lucas', '', 'Male', '09988611018', '1942-04-04', 'Cabanatuan', 'Philippines', 'Pastor', 'uploads/0a1a22c38e35a5aeedb88274d9b5208d.png', 1, 1, '2018-06-18 06:34:35', '0000-00-00 00:00:00'),
(7, 'Felomina', 'Cabanding', 'Lucas', '', 'Female', '09988611018', '1944-08-10', 'Cabanatuan', 'Philippines', 'Deaconess', 'uploads/3d8b92eee480afc869c4a25c0bfdb9ea.jpg', 1, 1, '2018-06-18 06:34:47', '0000-00-00 00:00:00'),
(8, 'Ariel', 'Cabanding', 'Lucas', '', 'Male', '09071581073', '1976-12-14', 'Cabanatuan', 'Philippines', 'Member', 'uploads/b272637f066c4442216811366b1955aa.png', 1, 1, '2018-06-18 06:35:26', '0000-00-00 00:00:00'),
(9, 'Mary Jane', 'Galvez', 'Lucas', '', 'Female', '09363633878', '1986-05-20', 'Cabanatuan', 'Philippines', 'Member', 'uploads/c5dd1fe57ddd51dc86f17a9ccee63538.jpg', 1, 1, '2018-06-18 06:35:45', '0000-00-00 00:00:00'),
(10, 'Cherry Ann', 'Lucas', 'Astrero', '', 'Female', '09753220667', '1995-08-11', 'Cabanatuan', 'Philippines', 'Member', 'uploads/e0dac82ec1214f637e962a42b2ec2bff.jpg', 1, 1, '2018-06-18 06:35:04', '0000-00-00 00:00:00'),
(11, 'Kaycee', 'Galvez', 'Lucas', '', 'Male', '09071581073', '2001-05-14', 'Cabanatuan', 'Philippines', 'Member', 'uploads/54d7a032ac531583714a842521bd4973.jpg', 1, 1, '2018-06-18 06:36:01', '0000-00-00 00:00:00'),
(12, 'Shanea Janelle ', 'Galvez', 'Lucas', '', 'Female', '09363633878', '2011-09-23', 'Cabanatuan', 'Philippines', 'Member', 'uploads/51cafecdb9c0e11f9f29451ec239a03e.jpg', 1, 1, '2018-06-18 06:36:14', '0000-00-00 00:00:00'),
(13, 'Charles Miguel', 'Galvez', 'Lucas', '', 'Male', '09071581073', '2013-04-09', 'Cabanatuan', 'Philippines', 'Member', 'uploads/d10f643dab2ca2f00d64c0a9e2e02068.jpg', 1, 1, '2018-06-18 06:36:28', '0000-00-00 00:00:00'),
(14, 'Maricris', 'Ramos', 'Lugod', '', 'Female', '09212677427', '1979-06-03', 'Cabanatuan', 'Philippines', 'Member', 'uploads/f5b34626f6e6de9026d794c5059c826a.jpg', 1, 1, '2018-06-18 06:36:40', '0000-00-00 00:00:00'),
(15, 'Rodel', 'B.', 'Lugod', '', 'Male', '09499968736', '1963-01-12', 'Cabanatuan', 'Philippines', 'Member', 'uploads/12031545d2a308ea5959eee539ba74fb.png', 1, 1, '2018-06-18 06:36:52', '0000-00-00 00:00:00'),
(16, 'Ernest Mari', 'Ramos', 'Lugod', '', 'Male', '09212677427', '2007-10-04', 'Cabanatuan', 'Philippines', 'Member', 'uploads/9b4d798e8e61e9e14c8884e6aac17f16.jpg', 1, 1, '2018-06-18 06:33:28', '0000-00-00 00:00:00'),
(17, 'Angelica', 'Hipolito', 'Lucas', '', 'Female', '09153869874', '2000-06-28', 'Cabanatuan', 'Philippines', 'Member', 'uploads/09ca3e21cba50d6d97a07d97210f10ea.jpg', 1, 1, '2018-06-18 06:37:08', '0000-00-00 00:00:00'),
(18, 'Rudy', 'Hipolito', 'Lucas', '', 'Male', '09153869874', '1998-10-17', 'Cabanatuan', 'Philippines', 'Member', 'uploads/71370fe1d7d13cb2c5a814308b294044.jpg', 1, 1, '2018-06-18 06:37:29', '0000-00-00 00:00:00'),
(19, 'Angelyn', 'Hipolito', 'Lucas', '', 'Female', '09153869874', '2007-12-06', 'Cabanatuan', 'Philippines', 'Member', 'uploads/ba7cb617f87d9d4caad4de6f9e00520c.jpg', 1, 1, '2018-06-18 06:37:48', '0000-00-00 00:00:00'),
(20, 'Angelito', 'Sobremonte', 'Lucas', '', 'Male', '09153869874', '1946-10-22', 'Cabanatuan', 'Philippines', 'Member', 'uploads/f5d04f8b2b2962428a8ce993049c2244.png', 1, 1, '2018-06-18 06:38:54', '0000-00-00 00:00:00'),
(21, 'Annaliza', 'Hipolito', 'Lucas', '', 'Female', '09153869874', '1970-04-16', 'Cabanatuan', 'Philippines', 'Member', 'uploads/80728901367095f382f327430496be2c.jpg', 1, 1, '2018-06-18 06:39:18', '0000-00-00 00:00:00'),
(22, 'Angielou Rhealee', 'Vizconde', 'Lucas', '', 'Female', '09056367459', '1995-01-14', 'Cabanatuan', 'Philippines', 'Member', 'uploads/ff93fea8614da62ecf03e4dc4b97f7bd.jpg', 1, 1, '2018-06-18 06:39:37', '0000-00-00 00:00:00'),
(23, 'Angela', 'Vizconde', 'Lucas', '', 'Female', '09056367459', '2001-11-25', 'Cabanatuan', 'Philippines', 'Member', 'uploads/8020521736e0bf501584192e24a5fef6.jpg', 1, 1, '2018-06-18 06:40:00', '0000-00-00 00:00:00'),
(24, 'Rommel', 'Burnot', 'Lucas', '', 'Male', '09059434213', '1977-02-20', 'Cabanatuan', 'Philippines', 'Member', 'uploads/39bf6b3695bcfa11ba234a0eca5c059b.png', 1, 1, '2018-06-18 06:40:18', '0000-00-00 00:00:00'),
(25, 'Ivy Kristine', 'Reyes', 'Lucas', '', 'Female', '09059434213', '1982-04-04', 'Cabanatuan', 'Philippines', 'Member', 'uploads/f0a3d835ac2d98c3d0a10b69e58b6f9a.jpg', 1, 1, '2018-06-18 06:40:42', '0000-00-00 00:00:00'),
(26, 'Krischelle', 'Reyes', 'Lucas', '', 'Female', '09059434213', '2003-09-17', 'Cabanatuan', 'Philippines', 'Member', 'uploads/c3de6e809353b305623aa1145d2b72e4.jpg', 1, 1, '2018-06-18 06:41:04', '0000-00-00 00:00:00'),
(27, 'Krizzen ', 'Reyes', 'Lucas', '', 'Male', '00000000000', '2008-08-26', 'Cabanatuan', 'Philippines', 'Member', 'uploads/c99aadb4e81546c75352d8a9f3139681.jpg', 1, 1, '2018-06-18 06:41:40', '0000-00-00 00:00:00'),
(28, 'Rolando', 'Ramos', 'Eugenio', '', 'Male', '09994747188', '1970-03-15', 'Homestead', '', 'Pastor', 'uploads/dcc9c90be7c89814ea58ff93a470c8b1.jpg', 1, 1, '2018-06-16 06:06:03', '0000-00-00 00:00:00'),
(29, 'Amelia', 'Bartolome', 'Eugenio', '', 'Female', '09356025441', '1973-04-12', 'Homestead', '', 'Deaconess', 'uploads/fa91a7830cfc7677cc281f6707b6420a.jpg', 1, 1, '2018-06-16 06:08:43', '0000-00-00 00:00:00'),
(30, 'Allysa Gale', 'Bartolome', 'Eugenio', '', 'Female', '09355925032', '1995-04-12', 'Homestead', '', 'Deaconess', 'uploads/b41cdc5096e97bacdd6f3a5c2b4aeee9.jpg', 1, 1, '2018-06-16 06:11:02', '0000-00-00 00:00:00'),
(31, 'Czaryna Ann', 'Bartolome', 'Eugenio', '', 'Female', '00000000000', '1997-11-04', 'Homestead', '', 'Deaconess', 'uploads/115fa805b6971746eeee5af68ef56b10.jpg', 1, 1, '2018-06-16 06:12:49', '0000-00-00 00:00:00'),
(32, 'Abner', 'Ramos', 'Eugenio', '', 'Male', '00000000000', '1968-11-19', 'Homestead', '', 'Member', 'uploads/b88ac301a0b4e507e658e0faad0955e0.png', 1, 1, '2018-06-16 06:14:27', '0000-00-00 00:00:00'),
(33, 'Aizza', 'Rivera', 'Eugenio', '', 'Female', '00000000000', '1987-11-14', 'Homestead', '', 'Deaconess', 'uploads/93a5033705ac110598e1651c76ae5fe6.jpg', 1, 1, '2018-06-16 06:15:19', '0000-00-00 00:00:00'),
(34, 'Arvin', 'Marcelo', 'Eugenio', '', 'Male', '00000000000', '1999-07-07', 'Homestead', '', 'Member', 'uploads/9269c3a1e08f3a08647308209edc04f0.jpg', 1, 1, '2018-06-16 06:16:18', '0000-00-00 00:00:00'),
(35, 'Clarita', 'Marcelo', 'Eugenio', '', 'Female', '00000000000', '1969-06-20', 'Homestead', '', 'Member', 'uploads/bd64f3dd835678b2f7947005a0d76a79.jpg', 1, 1, '2018-06-16 06:17:29', '0000-00-00 00:00:00'),
(36, 'Christine', 'Rivera', 'Eugenio', '', 'Female', '00000000000', '2005-06-12', 'Homestead', '', 'Member', 'uploads/61218da158de40a6b6f3a1869f1098bc.jpg', 1, 1, '2018-06-16 06:18:37', '0000-00-00 00:00:00'),
(37, 'Dana Mariya', 'Manuel', 'Eugenio', '', 'Female', '00000000000', '2001-03-05', 'Homestead', '', 'Deaconess', 'uploads/607ea8fffd6255a450e6e081879b8c58.jpg', 1, 1, '2018-06-16 06:19:30', '0000-00-00 00:00:00'),
(38, 'Elvira', 'Manuel', 'Eugenio', '', 'Female', '09166082608', '1969-02-22', 'Homestead', '', 'Member', 'uploads/62ff4c9457e7a2da054f0ede95a616a4.jpg', 1, 1, '2018-06-16 06:21:11', '0000-00-00 00:00:00'),
(39, 'Eufrocina', 'Ramos', 'Eugenio', '', 'Female', '00000000000', '1938-11-10', 'Homestead', '', 'Deaconess', 'uploads/89c8430ab409e992535d88e657c89bed.jpg', 1, 1, '2018-06-16 06:22:05', '0000-00-00 00:00:00'),
(40, 'Lucila', 'Ramos', 'Eugenio', '', 'Female', '00000000000', '1941-10-30', 'Homestead', '', 'Member', 'uploads/cd15bfdce0142e711e6d90fc6675629b.jpg', 1, 1, '2018-06-16 06:23:14', '0000-00-00 00:00:00'),
(41, 'Conrado', 'Bernardo', 'Calica', '', 'Male', '09753921778', '1961-01-17', 'Homestead', '', 'Pastor', 'uploads/9e745453b5d639ed77f80526067c83f7.jpg', 1, 1, '2018-06-16 06:26:47', '0000-00-00 00:00:00'),
(42, 'Antonio', 'De Leon', 'Calica', '', 'Male', '00000000000', '1935-06-13', 'Homestead', '', 'Member', 'uploads/5ef4dc8a7740c143a4d233f32b6c903d.png', 1, 1, '2018-06-16 06:28:01', '0000-00-00 00:00:00'),
(43, 'Najim', 'Marcelo', 'Eugenio', '', 'Male', '00000000000', '1998-04-19', 'Homestead', '', 'Member', 'uploads/00e4bd96c65bd4967a6ca520071595b6.jpg', 1, 1, '2018-06-16 06:29:52', '0000-00-00 00:00:00'),
(44, 'Novelito', 'Ramos', 'Eugenio', '', 'Male', '09361815131', '1978-11-09', 'Homestead', '', 'Pastor', 'uploads/1f5083799ca6ce9f85f24f3ab6573aa4.png', 1, 1, '2018-06-16 06:31:18', '0000-00-00 00:00:00'),
(45, 'Onica Paula', 'Manuel', 'Eugenio', '', 'Female', '00000000000', '2006-05-14', 'Homestead', '', 'Member', 'uploads/9749f6783c7d8120ff94225c146d2853.jpg', 1, 1, '2018-06-16 06:32:37', '0000-00-00 00:00:00'),
(46, 'Raul', 'Ramos', 'Eugenio', '', 'Male', '00000000000', '1966-04-25', 'Homestead', '', 'Member', 'uploads/1b8e7956cedef139436aebfa774654db.png', 1, 1, '2018-06-16 06:33:57', '0000-00-00 00:00:00'),
(47, 'Roland Jullien', 'Bartolome', 'Eugenio', '', 'Male', '00000000000', '2009-10-14', 'Homestead', '', 'Member', 'uploads/dffc37e593667123b2baef7c7b608705.jpg', 1, 1, '2018-06-16 06:35:15', '0000-00-00 00:00:00'),
(48, 'Clarice', 'Ramos', 'Candelaria', '', 'Female', '00000000000', '1989-10-30', 'Homestead', '', 'Member', 'uploads/24d589936ae5f0f11050957b79972c57.jpg', 1, 1, '2018-06-16 06:37:07', '0000-00-00 00:00:00'),
(49, 'Celestino', 'Estrella', 'Candelaria', '', 'Male', '00000000000', '1955-05-19', 'Homestead', '', 'Member', 'uploads/58f829fa95fb6391d8f5debc51aaa2cf.png', 1, 1, '2018-06-16 06:38:12', '0000-00-00 00:00:00'),
(50, 'Eryl', 'Ramos', 'Candelaria', '', 'Male', '00000000000', '1986-02-11', 'Homestead', '', 'Pastor', 'uploads/5b6e50ba6a240b7b452e3e5e96839854.png', 1, 1, '2018-06-16 06:39:14', '0000-00-00 00:00:00'),
(51, 'Lualhati', 'Ramos', 'Candelaria', '', 'Female', '00000000000', '1958-12-31', 'Homestead', '', 'Member', 'uploads/488cc2444fbf370049c2e676c69093a2.jpg', 1, 1, '2018-06-16 06:40:16', '0000-00-00 00:00:00'),
(52, 'Alejandro', 'A', 'Del Valle', '', 'Male', '00000000000', '1936-05-03', 'Homestead', '', 'Member', 'uploads/adf74db55c2a87c2e0f94e66848fd740.png', 1, 1, '2018-06-16 06:41:32', '0000-00-00 00:00:00'),
(53, 'Alexander', 'Ramos', 'Del Valle', '', 'Male', '00000000000', '1979-12-07', 'Homestead', '', 'Member', 'uploads/f84504c4349a8f9efbbc9f8f9822558b.png', 1, 1, '2018-06-16 06:42:33', '0000-00-00 00:00:00'),
(54, 'Leticia', 'Ramos', 'Del Valle', '', 'Female', '00000000000', '1946-07-10', 'Homestead', '', 'Member', 'uploads/3566e7a11161d5c62725c72b59866a8f.jpg', 1, 1, '2018-06-16 06:44:33', '0000-00-00 00:00:00'),
(55, 'Rowena Alexis', 'B', 'Del Valle', '', 'Female', '00000000000', '2004-03-13', 'Homestead', '', 'Member', 'uploads/32991f4ef32f7160b0203184f3a89ce0.jpg', 1, 1, '2018-06-16 06:45:56', '0000-00-00 00:00:00'),
(56, 'Rowena', 'B', 'Del Valle', '', 'Female', '00000000000', '1979-11-29', 'Homestead', '', 'Member', 'uploads/ad72c5011393c91f634035fdfd124fed.jpg', 1, 1, '2018-06-16 06:46:57', '0000-00-00 00:00:00'),
(57, 'Alexandria', 'Eugenio', 'Manuel', '', 'Female', '00000000000', '2001-11-09', 'Homestead', '', 'Member', 'uploads/940a90ba259708bd6ce0877aff25f81c.jpg', 1, 1, '2018-06-16 06:49:59', '0000-00-00 00:00:00'),
(58, 'Francis', 'Eugenio', 'Manuel', '', 'Male', '00000000000', '1985-10-13', 'Homestead', '', 'Member', 'uploads/cbbbf7ad6419401355eace0ea1890d2e.png', 1, 1, '2018-06-16 06:51:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) DEFAULT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('283487518aae8466c99698c6e476d293', '2.50.141.184', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 1529307588, 'a:2:{s:9:"user_data";s:0:"";s:10:"flexi_auth";a:7:{s:15:"user_identifier";s:15:"admin@admin.com";s:7:"user_id";s:1:"1";s:5:"admin";b:1;s:5:"group";a:1:{i:3;s:12:"Master Admin";}s:10:"privileges";a:11:{i:1;s:10:"View Users";i:2;s:16:"View User Groups";i:3;s:15:"View Privileges";i:4;s:18:"Insert User Groups";i:5;s:17:"Insert Privileges";i:6;s:12:"Update Users";i:7;s:18:"Update User Groups";i:8;s:17:"Update Privileges";i:9;s:12:"Delete Users";i:10;s:18:"Delete User Groups";i:11;s:17:"Delete Privileges";}s:22:"logged_in_via_password";b:1;s:19:"login_session_token";s:40:"1c1eac91a79519196e52387c60a54ec1dda12606";}}'),
('a9d414bd57710e0642aa3ca97b124410', '110.54.240.205', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0', 1529308094, 'a:2:{s:9:"user_data";s:0:"";s:10:"flexi_auth";a:7:{s:15:"user_identifier";s:15:"admin@admin.com";s:7:"user_id";s:1:"1";s:5:"admin";b:1;s:5:"group";a:1:{i:3;s:12:"Master Admin";}s:10:"privileges";a:11:{i:1;s:10:"View Users";i:2;s:16:"View User Groups";i:3;s:15:"View Privileges";i:4;s:18:"Insert User Groups";i:5;s:17:"Insert Privileges";i:6;s:12:"Update Users";i:7;s:18:"Update User Groups";i:8;s:17:"Update Privileges";i:9;s:12:"Delete Users";i:10;s:18:"Delete User Groups";i:11;s:17:"Delete Privileges";}s:22:"logged_in_via_password";b:1;s:19:"login_session_token";s:40:"c00966f00eca2b1a67c7daa3237005a7cb0f1f5c";}}'),
('7d9479afc4f13c14d32004961a71db66', '173.252.84.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1529301955, 'a:2:{s:9:"user_data";s:0:"";s:10:"flexi_auth";a:7:{s:15:"user_identifier";b:0;s:7:"user_id";b:0;s:5:"admin";b:0;s:5:"group";b:0;s:10:"privileges";b:0;s:22:"logged_in_via_password";b:0;s:19:"login_session_token";b:0;}}'),
('032f1bf30b963c70f156189ac7b1ebab', '2.50.141.184', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 1529322796, 'a:2:{s:9:"user_data";s:0:"";s:10:"flexi_auth";a:7:{s:15:"user_identifier";s:15:"admin@admin.com";s:7:"user_id";s:1:"1";s:5:"admin";b:1;s:5:"group";a:1:{i:3;s:12:"Master Admin";}s:10:"privileges";a:11:{i:1;s:10:"View Users";i:2;s:16:"View User Groups";i:3;s:15:"View Privileges";i:4;s:18:"Insert User Groups";i:5;s:17:"Insert Privileges";i:6;s:12:"Update Users";i:7;s:18:"Update User Groups";i:8;s:17:"Update Privileges";i:9;s:12:"Delete Users";i:10;s:18:"Delete User Groups";i:11;s:17:"Delete Privileges";}s:22:"logged_in_via_password";b:1;s:19:"login_session_token";s:40:"941ab4f9afa79e657df39880a6c9188da64c3572";}}');

-- --------------------------------------------------------

--
-- Table structure for table `congregation`
--

CREATE TABLE IF NOT EXISTS `congregation` (
  `congregation_id` int(11) NOT NULL AUTO_INCREMENT,
  `congregation` varchar(25) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`congregation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `congregation`
--

INSERT INTO `congregation` (`congregation_id`, `congregation`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Bagting', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(2, 'Pinagbayanan', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(3, 'Mapaet', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(4, 'Popolon', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(5, 'Communal', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(6, 'Kalikid', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(7, 'Cabanatuan', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(8, 'Homestead', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(9, 'Cabucbucan', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(10, 'San Jose', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(11, 'Munoz', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(12, 'Carmen', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(13, 'Marawa', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(14, 'Tagumpay', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(15, 'Sta. Maria', 1, '2018-05-24 09:43:00', '0000-00-00 00:00:00'),
(16, 'Marikina', 1, '2018-05-24 09:55:03', '0000-00-00 00:00:00'),
(17, 'Singapore', 1, '2018-05-24 09:55:03', '0000-00-00 00:00:00'),
(19, 'Abroad', 0, '2018-06-16 06:58:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=246 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People''s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People''s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `demo_user_address`
--

CREATE TABLE IF NOT EXISTS `demo_user_address` (
  `uadd_id` int(11) NOT NULL AUTO_INCREMENT,
  `uadd_uacc_fk` int(11) NOT NULL DEFAULT '0',
  `uadd_alias` varchar(50) NOT NULL DEFAULT '',
  `uadd_recipient` varchar(100) NOT NULL DEFAULT '',
  `uadd_phone` varchar(25) NOT NULL DEFAULT '',
  `uadd_company` varchar(75) NOT NULL DEFAULT '',
  `uadd_address_01` varchar(100) NOT NULL DEFAULT '',
  `uadd_address_02` varchar(100) NOT NULL DEFAULT '',
  `uadd_city` varchar(50) NOT NULL DEFAULT '',
  `uadd_county` varchar(50) NOT NULL DEFAULT '',
  `uadd_post_code` varchar(25) NOT NULL DEFAULT '',
  `uadd_country` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`uadd_id`),
  UNIQUE KEY `uadd_id` (`uadd_id`),
  KEY `uadd_uacc_fk` (`uadd_uacc_fk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `demo_user_address`
--

INSERT INTO `demo_user_address` (`uadd_id`, `uadd_uacc_fk`, `uadd_alias`, `uadd_recipient`, `uadd_phone`, `uadd_company`, `uadd_address_01`, `uadd_address_02`, `uadd_city`, `uadd_county`, `uadd_post_code`, `uadd_country`) VALUES
(1, 4, 'Home', 'Joe Public', '0123456789', '', '123', '', 'My City', 'My County', 'My Post Code', 'My Country'),
(2, 4, 'Work', 'Joe Public', '0123456789', 'Flexi', '321', '', 'My Work City', 'My Work County', 'My Work Post Code', 'My Work Country');

-- --------------------------------------------------------

--
-- Table structure for table `demo_user_profiles`
--

CREATE TABLE IF NOT EXISTS `demo_user_profiles` (
  `upro_id` int(11) NOT NULL AUTO_INCREMENT,
  `upro_uacc_fk` int(11) NOT NULL DEFAULT '0',
  `upro_company` varchar(50) NOT NULL DEFAULT '',
  `upro_first_name` varchar(50) NOT NULL DEFAULT '',
  `upro_last_name` varchar(50) NOT NULL DEFAULT '',
  `upro_phone` varchar(25) NOT NULL DEFAULT '',
  `upro_newsletter` tinyint(1) NOT NULL DEFAULT '0',
  `upro_birthday` date NOT NULL,
  `upro_congregation` varchar(15) NOT NULL,
  `upro_designation` varchar(15) NOT NULL,
  PRIMARY KEY (`upro_id`),
  UNIQUE KEY `upro_id` (`upro_id`),
  KEY `upro_uacc_fk` (`upro_uacc_fk`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `demo_user_profiles`
--

INSERT INTO `demo_user_profiles` (`upro_id`, `upro_uacc_fk`, `upro_company`, `upro_first_name`, `upro_last_name`, `upro_phone`, `upro_newsletter`, `upro_birthday`, `upro_congregation`, `upro_designation`) VALUES
(1, 1, '', 'John', 'Admin', '0123456789', 0, '0000-00-00', '0', ''),
(2, 2, '', 'Jim', 'Moderator', '0123465798', 0, '0000-00-00', '0', ''),
(3, 3, '', 'Joe', 'Public', '0123456789', 0, '0000-00-00', '0', ''),
(4, 6, '', 'IINJ', 'MCP', '01234567879', 0, '1923-08-24', '0', ''),
(5, 7, '', 'Jobin', 'Blancaflor', '0567527698', 0, '1993-08-31', '0', ''),
(6, 8, '', 'Jobin', 'Blancaflor', '0567527698', 0, '1993-08-31', '0', ''),
(7, 9, '', 'Jobin', 'Blancaflor', '0567527698', 0, '2018-05-08', 'San Jose', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
  `designation_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(25) NOT NULL,
  `abbreviation` varchar(10) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`designation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation`, `abbreviation`, `created_date`, `update_date`) VALUES
(1, 'Pastor', 'PTR', '2018-05-27 09:04:35', '0000-00-00 00:00:00'),
(2, 'SKC', 'SKC', '2018-05-27 09:05:11', '0000-00-00 00:00:00'),
(3, 'Member', 'KAP', '2018-05-27 09:05:57', '0000-00-00 00:00:00'),
(4, 'Diaconesa', 'DSA', '2018-05-27 09:04:36', '0000-00-00 00:00:00'),
(5, 'KKC', 'KKC', '2018-05-27 09:05:11', '0000-00-00 00:00:00'),
(6, 'SBC', 'SBC', '2018-05-27 09:05:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pastoral_academy`
--

CREATE TABLE IF NOT EXISTS `pastoral_academy` (
  `pastoral_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` text NOT NULL,
  `congregation` varchar(25) NOT NULL,
  `phone` int(15) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pastoral_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pastoral_academy`
--

INSERT INTO `pastoral_academy` (`pastoral_id`, `full_name`, `congregation`, `phone`, `created_date`) VALUES
(1, '0', '0', 0, '2018-06-09 06:55:34'),
(2, '0', '0', 0, '2018-06-09 06:57:39'),
(3, 'John Dela Cruz', '0', 2147483647, '2018-06-09 08:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE IF NOT EXISTS `user_accounts` (
  `uacc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uacc_group_fk` smallint(5) unsigned NOT NULL DEFAULT '0',
  `uacc_email` varchar(100) NOT NULL DEFAULT '',
  `uacc_username` varchar(15) NOT NULL DEFAULT '',
  `uacc_password` varchar(60) NOT NULL DEFAULT '',
  `uacc_ip_address` varchar(40) NOT NULL DEFAULT '',
  `uacc_salt` varchar(40) NOT NULL DEFAULT '',
  `uacc_activation_token` varchar(40) NOT NULL DEFAULT '',
  `uacc_forgotten_password_token` varchar(40) NOT NULL DEFAULT '',
  `uacc_forgotten_password_expire` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `uacc_update_email_token` varchar(40) NOT NULL DEFAULT '',
  `uacc_update_email` varchar(100) NOT NULL DEFAULT '',
  `uacc_active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `uacc_suspend` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `uacc_fail_login_attempts` smallint(5) NOT NULL DEFAULT '0',
  `uacc_fail_login_ip_address` varchar(40) NOT NULL DEFAULT '',
  `uacc_date_fail_login_ban` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Time user is banned until due to repeated failed logins',
  `uacc_date_last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `uacc_date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`uacc_id`),
  UNIQUE KEY `uacc_id` (`uacc_id`),
  KEY `uacc_group_fk` (`uacc_group_fk`),
  KEY `uacc_email` (`uacc_email`),
  KEY `uacc_username` (`uacc_username`),
  KEY `uacc_fail_login_ip_address` (`uacc_fail_login_ip_address`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`uacc_id`, `uacc_group_fk`, `uacc_email`, `uacc_username`, `uacc_password`, `uacc_ip_address`, `uacc_salt`, `uacc_activation_token`, `uacc_forgotten_password_token`, `uacc_forgotten_password_expire`, `uacc_update_email_token`, `uacc_update_email`, `uacc_active`, `uacc_suspend`, `uacc_fail_login_attempts`, `uacc_fail_login_ip_address`, `uacc_date_fail_login_ban`, `uacc_date_last_login`, `uacc_date_added`) VALUES
(1, 3, 'admin@admin.com', 'admin', '$2a$08$lSOQGNqwBFUEDTxm2Y.hb.mfPEAt/iiGY9kJsZsd4ekLJXLD.tCrq', '2.50.141.184', 'XKVT29q2Jr', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-06-18 07:53:20', '2011-01-01 00:00:00'),
(2, 2, 'moderator@moderator.com', 'moderator', '$2a$08$q.0ZhovC5ZkVpkBLJ.Mz.O4VjWsKohYckJNx4KM40MXdP/zEZpwcm', '0.0.0.0', 'ZC38NNBPjF', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2012-04-10 21:58:02', '2011-08-04 16:49:07'),
(3, 1, 'public@public.com', 'public', '$2a$08$GlxQ00VKlev2t.CpvbTOlepTJljxF2RocJghON37r40mbDl4vJLv2', '::1', 'CDNFV6dHmn', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-05-27 07:35:54', '2011-09-15 12:24:45'),
(6, 1, 'admin@iinjmcp.com', 'iinjmcp', '$2a$08$6h9tELe73iXbJe0xxLuQ5O3aiT9BEtbZMhvLQK10Lrx6KSnLsDh4i', '::1', 'VxzFfYZq4t', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-05-24 13:08:48', '2018-05-24 13:07:59'),
(7, 1, 'jobin@iinjmcp.com', 'jobin', '$2a$08$EDZIVcp8Trpc9KfG7/MpSu2TkxmU8SlomqvkZxyVsBLJXw.dRMA3S', '::1', '4gHgrSdcpc', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-05-27 09:39:55', '2018-05-27 09:39:53'),
(8, 1, 'jobin2@iinjmcp.com', 'jobin2', '$2a$08$3NDH59Jd2Zdp7R.Kdg.OF.JLVlc3aQ0ChJHVZZz6m1G9TAZYoPtwu', '::1', 'yZ8sDf6MxC', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-05-27 09:50:59', '2018-05-27 09:50:57'),
(9, 1, 'join@iinjmcp.com', 'join', '$2a$08$wIc3hPjwP4pX7gUS6nEhiuYgxr50PDizRY/YHT9.WaMglF/ZTIZ/i', '::1', 'vwy6HBg682', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-05-27 10:02:44', '2018-05-27 10:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `ugrp_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `ugrp_name` varchar(20) NOT NULL DEFAULT '',
  `ugrp_desc` varchar(100) NOT NULL DEFAULT '',
  `ugrp_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ugrp_id`),
  UNIQUE KEY `ugrp_id` (`ugrp_id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`ugrp_id`, `ugrp_name`, `ugrp_desc`, `ugrp_admin`) VALUES
(1, 'Public', 'Public User : has no admin access rights.', 0),
(2, 'Moderator', 'Admin Moderator : has partial admin access rights.', 1),
(3, 'Master Admin', 'Master Admin : has full admin access rights.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_login_sessions`
--

CREATE TABLE IF NOT EXISTS `user_login_sessions` (
  `usess_uacc_fk` int(11) NOT NULL DEFAULT '0',
  `usess_series` varchar(40) NOT NULL DEFAULT '',
  `usess_token` varchar(40) NOT NULL DEFAULT '',
  `usess_login_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`usess_token`),
  UNIQUE KEY `usess_token` (`usess_token`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login_sessions`
--

INSERT INTO `user_login_sessions` (`usess_uacc_fk`, `usess_series`, `usess_token`, `usess_login_date`) VALUES
(1, '', '941ab4f9afa79e657df39880a6c9188da64c3572', '2018-06-18 07:53:31'),
(1, '', '1c1eac91a79519196e52387c60a54ec1dda12606', '2018-06-18 03:39:48'),
(1, '', 'c00966f00eca2b1a67c7daa3237005a7cb0f1f5c', '2018-06-18 03:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_privileges`
--

CREATE TABLE IF NOT EXISTS `user_privileges` (
  `upriv_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `upriv_name` varchar(20) NOT NULL DEFAULT '',
  `upriv_desc` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`upriv_id`),
  UNIQUE KEY `upriv_id` (`upriv_id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user_privileges`
--

INSERT INTO `user_privileges` (`upriv_id`, `upriv_name`, `upriv_desc`) VALUES
(1, 'View Users', 'User can view user account details.'),
(2, 'View User Groups', 'User can view user groups.'),
(3, 'View Privileges', 'User can view privileges.'),
(4, 'Insert User Groups', 'User can insert new user groups.'),
(5, 'Insert Privileges', 'User can insert privileges.'),
(6, 'Update Users', 'User can update user account details.'),
(7, 'Update User Groups', 'User can update user groups.'),
(8, 'Update Privileges', 'User can update user privileges.'),
(9, 'Delete Users', 'User can delete user accounts.'),
(10, 'Delete User Groups', 'User can delete user groups.'),
(11, 'Delete Privileges', 'User can delete user privileges.');

-- --------------------------------------------------------

--
-- Table structure for table `user_privilege_groups`
--

CREATE TABLE IF NOT EXISTS `user_privilege_groups` (
  `upriv_groups_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `upriv_groups_ugrp_fk` smallint(5) unsigned NOT NULL DEFAULT '0',
  `upriv_groups_upriv_fk` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`upriv_groups_id`),
  UNIQUE KEY `upriv_groups_id` (`upriv_groups_id`) USING BTREE,
  KEY `upriv_groups_ugrp_fk` (`upriv_groups_ugrp_fk`),
  KEY `upriv_groups_upriv_fk` (`upriv_groups_upriv_fk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user_privilege_groups`
--

INSERT INTO `user_privilege_groups` (`upriv_groups_id`, `upriv_groups_ugrp_fk`, `upriv_groups_upriv_fk`) VALUES
(1, 3, 1),
(3, 3, 3),
(4, 3, 4),
(5, 3, 5),
(6, 3, 6),
(7, 3, 7),
(8, 3, 8),
(9, 3, 9),
(10, 3, 10),
(11, 3, 11),
(12, 2, 2),
(13, 2, 4),
(14, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_privilege_users`
--

CREATE TABLE IF NOT EXISTS `user_privilege_users` (
  `upriv_users_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `upriv_users_uacc_fk` int(11) NOT NULL DEFAULT '0',
  `upriv_users_upriv_fk` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`upriv_users_id`),
  UNIQUE KEY `upriv_users_id` (`upriv_users_id`) USING BTREE,
  KEY `upriv_users_uacc_fk` (`upriv_users_uacc_fk`),
  KEY `upriv_users_upriv_fk` (`upriv_users_upriv_fk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user_privilege_users`
--

INSERT INTO `user_privilege_users` (`upriv_users_id`, `upriv_users_uacc_fk`, `upriv_users_upriv_fk`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 2, 1),
(13, 2, 2),
(14, 2, 3),
(15, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE IF NOT EXISTS `visitor` (
  `visitor_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` text NOT NULL,
  `from_congregation` varchar(25) NOT NULL,
  `visited_congregation` varchar(25) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`visitor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
