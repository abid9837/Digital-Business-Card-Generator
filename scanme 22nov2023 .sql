-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 04:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scanme`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `emails` varchar(100) NOT NULL,
  `passwors` varchar(100) NOT NULL,
  `imgs` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `role`, `emails`, `passwors`, `imgs`) VALUES
(1, 'admin', 'abidurrahman9837@gmail.com', 'abid1234', ''),
(2, 'editor', 'abid@gmail.com', 'abid1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `create_cards`
--

CREATE TABLE `create_cards` (
  `id` int(11) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `user_uid` int(11) NOT NULL,
  `templete_uid` varchar(100) NOT NULL,
  `link_number` int(100) NOT NULL,
  `payment_code` varchar(30) NOT NULL,
  `payment_number` varchar(15) NOT NULL,
  `payment_status` varchar(40) NOT NULL,
  `QR_src` varchar(500) NOT NULL,
  `QR_visit` varchar(200) NOT NULL,
  `QE_image_name` varchar(100) NOT NULL,
  `payment_date` varchar(30) NOT NULL,
  `payment_expire_date` varchar(30) NOT NULL,
  `user_img` varchar(400) NOT NULL,
  `user_name` text NOT NULL,
  `user_location` varchar(100) NOT NULL,
  `user_short_title` varchar(100) NOT NULL,
  `user_short_des` varchar(500) NOT NULL,
  `user_website_link` varchar(200) NOT NULL,
  `user_email_link` varchar(70) NOT NULL,
  `user_facebook_link` varchar(200) NOT NULL,
  `user_instagram_link` varchar(200) NOT NULL,
  `user_twiter_link` varchar(200) NOT NULL,
  `user_Linkedin_link` varchar(500) NOT NULL,
  `user_telegram_link` varchar(500) NOT NULL,
  `user_youtube_link` varchar(500) NOT NULL,
  `user_mobile` text NOT NULL,
  `user_2nd_number` varchar(15) NOT NULL,
  `user_whatsapp` varchar(15) NOT NULL,
  `inline_social_icons` varchar(300) NOT NULL,
  `bottom_btn` varchar(200) NOT NULL,
  `color_scema` varchar(200) NOT NULL,
  `company_logo` varchar(1000) NOT NULL,
  `department` varchar(100) NOT NULL,
  `user_color_all_field` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `create_cards`
--

INSERT INTO `create_cards` (`id`, `created_date`, `user_uid`, `templete_uid`, `link_number`, `payment_code`, `payment_number`, `payment_status`, `QR_src`, `QR_visit`, `QE_image_name`, `payment_date`, `payment_expire_date`, `user_img`, `user_name`, `user_location`, `user_short_title`, `user_short_des`, `user_website_link`, `user_email_link`, `user_facebook_link`, `user_instagram_link`, `user_twiter_link`, `user_Linkedin_link`, `user_telegram_link`, `user_youtube_link`, `user_mobile`, `user_2nd_number`, `user_whatsapp`, `inline_social_icons`, `bottom_btn`, `color_scema`, `company_logo`, `department`, `user_color_all_field`) VALUES
(27, '', 1, '1', 1, 'Agdsgftgf', '01840249837', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/my%20qr/?id=MQ==', 'http://localhost/sacnme/my%20qr/?id=MQ==', 'My qr code MQ==.jpg', '2023-11-14', '2023-12-14', '86343065-869a-4e20-8e66-260d931c9e31_hd (2).jpg', 'NUsrat Jahan', '', 'dev', '', 'nusrat.com', 'nusrat@gmail.com', 'fv.com', 'insta.com', '', '', '', '', '01840249837', '', '', 'N;', 'a:2:{i:0;s:7:\"hire me\";i:1;s:1:\"#\";}', '', '', '', ''),
(28, '', 1, '1', 2, 'JVSHG35UHUG', '0172498365', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/my%20qr/?id=Mg==', 'http://localhost/sacnme/my%20qr/?id=Mg==', 'My qr code Mg==.jpg', '2023-11-10', '2023-12-12', 'Untitled-design-(15).png', 'Karina', '', 'Nurse', '', 'www.google.com', 'karina@gmail.com', 'dhj.fb.com', 'fjfjfj.insta.com', '', '', '', '', '013687678645', '', '', 'N;', 'a:2:{i:0;s:10:\"contact me\";i:1;s:11:\"contact.com\";}', '', '', '', ''),
(29, '', 5, '1', 3, 'AJVD545HFY', '017249838', 'on-hold', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/my%20qr/?id=Mw==', 'http://localhost/sacnme/my%20qr/?id=Mw==', 'My qr code Mw==.jpg', '2023-11-05', '2023-11-12', '86343065-869a-4e20-8e66-260d931c9e31_hd (2).jpg', 'Nusrat Jahan', '', 'dev', '', 'website.com', 'nusrat@gmail.com', 'fb.com', 'insta.com', '', '', '', '', '01840249837', '', '', 'N;', 'a:2:{i:0;s:11:\"hire me now\";i:1;s:6:\"me.com\";}', '', '', '', ''),
(30, '', 6, '1', 4, 'asdfghjk', '23456789', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/my%20qr/?id=NA==', 'http://localhost/sacnme/my%20qr/?id=NA==', 'My qr code NA==.jpg', '2023-11-13', '2023-12-13', 'man-doing-online-chatting-while.png', 'Md. Riazul Islam', '', 'WebDeveloper', '', 'gfhhjk.com', 'user4rc@gmail.com', 'dfghjk.fb.com', 'fjkk.inta.com', '', '', '', '', '01318485039', '', '', 'N;', 'a:2:{i:0;s:11:\"contcact me\";i:1;s:1:\"#\";}', '', '', '', ''),
(43, '2023-11-14', 1, '1', 5, 'Ajhfkdh3rges', '01728479032', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/My-QR/?id=NQ==', 'http://localhost/sacnme/My-QR/?id=NQ==', 'My qr code NQ==.jpg', '2023-11-14', '2023-12-14', 'Login-page-character1.png', 'nusaibaqewrt', '', 'nusaiba', '', 'nusaiba.com', 'nu@gmail.com', 'kyjthrgf', 'etdyu', '', '', '', '', '031647794130', '', '', 'N;', 'a:2:{i:0;s:6:\"jythgf\";i:1;s:6:\"kjhgfd\";}', '', '', '', ''),
(45, '2023-11-14', 7, '1', 7, 'AJGDJGJ46464', '01840249837', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/my%20qr/?id=Nw==', 'http://localhost/sacnme/my%20qr/?id=Nw==', 'My qr code Nw==.jpg', '2023-11-14', '2023-12-14', 'payment_5626395.png', 'maliha rahman', '', 'abid', '', 'hsgvfugad', 'srdt@gmail.com', 'dryjdtmdgh', 'wryseyh', '', '', '', '', '05484121545', '', '', 'N;', 'a:2:{i:0;s:7:\"love me\";i:1;s:5:\"#abid\";}', '', '', '', ''),
(53, '2023-11-16', 1, '3', 8, 'adfjbsadjbsajd', '018702542', 'on-hold', '', '', '', '2023-11-16', '2023-12-16', 'abd 33.jpg', 'q', '', 'q', 'q', 'q', 'q@gmail.com', '', '', '', '', '', '', 'q', '', '', 'a:3:{i:0;s:13:\"facebook_icon\";i:1;s:11:\"twiter_icon\";i:2;s:4:\"none\";}', 'a:2:{i:0;s:1:\"q\";i:1;s:1:\"q\";}', '', '', '', ''),
(57, '2023-11-16', 1, '1', 12, 'fgh', '01700000000', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/My-QR/?id=MTI=', 'http://localhost/sacnme/My-QR/?id=MTI=', 'My qr code MTI=.jpg', '2023-11-16', '2023-12-16', '398226244_282675974757362_4376346654595459679_n.jpg', 'abidur rahman', '', 'dev', '', 'www.com', 'abidurrahman9837@gmail.com', 'ddd', 'ddd', '', '', '', '', '01840249837', '', '', 'a:1:{i:0;s:4:\"none\";}', 'a:2:{i:0;s:7:\"hire me\";i:1;s:1:\"#\";}', '', '', '', ''),
(58, '2023-11-16', 1, '3', 13, 'asd', '01840249832', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/My-QR/?id=MTM=', 'http://localhost/sacnme/My-QR/?id=MTM=', 'My qr code MTM=.jpg', '2023-11-16', '2023-12-16', '394568868_713804903985639_4385655575044052998_n.jpg', 'Mim Islam', '', 'nurse', 'hello i am mim a nurse. i always ready to help you', 'mim.com', 'mim@gmail.com', '', '', '', '', '', '', '01840249832', '', '', 'a:3:{i:0;s:13:\"facebook_icon\";i:1;s:12:\"youtube_icon\";i:2;s:4:\"none\";}', 'a:2:{i:0;s:9:\"visit now\";i:1;s:1:\"@\";}', '', 'Should-your-hospital-invest-in-a.png', 'eden nursing home', ''),
(59, '2023-11-16', 1, '3', 14, 'ASfghhjTY', '01318485039', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/My-QR/?id=MTQ=', 'http://localhost/sacnme/My-QR/?id=MTQ=', 'My qr code MTQ=.jpg', '2023-11-16', '2023-12-16', '346074058_1548075076010818_6217600017185527366_n.jpg', 'Abidur Rahman', '', 'Web Developer', 'I am senior web developer in Kaizen IT LTD since 2019.', 'upkork.com', 'abid456@gmail.com', '', '', '', '', '', '', '01840249832', '', '', 'a:4:{i:0;s:13:\"facebook_icon\";i:1;s:13:\"whatsapp_icon\";i:2;s:13:\"telegram_icon\";i:3;s:4:\"none\";}', 'a:2:{i:0;s:10:\"Contact me\";i:1;s:18:\"upwork.adid345.com\";}', '', 'upwork-icon-2048x608-o3vqgs7j.png', 'Kaizen IT LTD', ''),
(60, '2023-11-16', 1, '1', 15, 'SDFGHJJyhghjF', '01537879686', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/My-QR/?id=MTU=', 'http://localhost/sacnme/My-QR/?id=MTU=', 'My qr code MTU=.jpg', '2023-11-16', '2023-12-16', 'upwork-icon-2048x608-o3vqgs7j.png', 'Md Riazul Islam', '', 'Web Developer', '', 'https://facebook.com ', 'user4rc@gmail.com', 'https://facebook.bluebird009.com', 'https://riazul.insta.com', '', '', '', '', '01318485039', '', '', 'a:1:{i:0;s:4:\"none\";}', 'a:2:{i:0;s:7:\"Hire me\";i:1;s:17:\"https://fiver.com\";}', '', '', '', ''),
(66, '2023-11-16', 1, '6', 21, 'jhcgjsdjs', '01400121547', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/My-QR/?id=MjE=', 'http://localhost/sacnme/My-QR/?id=MjE=', 'My qr code MjE=.jpg', '2023-11-16', '2023-12-16', '86343065-869a-4e20-8e66-260d931c9e31_hd (2).jpg', 'nusrat jahan', '', 'designer', 'hello i am nusrat a nurse', 'website nei', 'abidurrahman9837@gmail.com', ' 	  jhcgjsdjs', '', '', '', '', '', '01840249837', '', '', 'a:2:{i:0;s:13:\"facebook_icon\";i:1;s:4:\"none\";}', 'a:2:{i:0;s:2:\"ok\";i:1;s:1:\"#\";}', '', 'My qr code OA==.jpg', 'nusrsing', '#7a0525'),
(76, '2023-11-25', 1, '7', 31, '0147', '0147', 'on-hold', '', '', '', '2023-11-25', '2023-12-25', 'My qr code QR123531 MjE=.jpg', 'wd', '', 'ef', 'thk', 'uygy', 'mtu@gmail.com', '', '', '', '', '', '', 'tk', 'mtyu', '', 'a:4:{i:0;s:13:\"whatsapp_icon\";i:1;s:13:\"Linkedin_icon\";i:2;s:12:\"youtube_icon\";i:3;s:4:\"none\";}', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}', '', 'My qr code QR123531 MjE=.jpg', 'yrt', '#007780'),
(82, '2023-11-27', 1, '6', 35, '', '', 'pending', '', '', '', '', '', 'My qr code QR123531 MjE=.jpg', 'wd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'a:3:{i:0;s:13:\"facebook_icon\";i:1;s:11:\"twiter_icon\";i:2;s:4:\"none\";}', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}', '', 'My qr code QR123531 MjA=.jpg', '', '#2ac4cf'),
(83, '2023-11-28', 1, '6', 36, '', '', 'pending', '', '', '', '', '', '86343065-869a-4e20-8e66-260d931c9e31_hd (2) (1).jpg', 'etr ewt r', '', ' reheth', '', '', '', '', '', '', '', '', '', '', '', '', 'a:3:{i:0;s:13:\"telegram_icon\";i:1;s:12:\"youtube_icon\";i:2;s:4:\"none\";}', 'a:2:{i:0;s:4:\"rgr \";i:1;s:0:\"\";}', '', 'My qr code QR123531 MzA=.jpg', '', '#007780'),
(84, '2023-11-28', 1, '6', 37, '', '', 'pending', '', '', '', '', '', '86343065-869a-4e20-8e66-260d931c9e31_hd (2) (1).jpg', 'etr ewt r', '', ' reheth', '', '', '', '', '', '', '', '', '', '', '', '', 'a:3:{i:0;s:13:\"telegram_icon\";i:1;s:12:\"youtube_icon\";i:2;s:4:\"none\";}', 'a:2:{i:0;s:4:\"rgr \";i:1;s:0:\"\";}', '', 'My qr code QR123531 MzA=.jpg', '', '#E81D1D');

-- --------------------------------------------------------

--
-- Table structure for table `create_qr_code`
--

CREATE TABLE `create_qr_code` (
  `id` int(11) NOT NULL,
  `user_uid` varchar(100) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `payment_code` varchar(30) NOT NULL,
  `payment_number` varchar(15) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `QR_src` varchar(100) NOT NULL,
  `QR_visit` varchar(100) NOT NULL,
  `QE_image_name` varchar(500) NOT NULL,
  `payment_date` varchar(20) NOT NULL,
  `payment_expire_date` varchar(20) NOT NULL,
  `templete_name` varchar(100) NOT NULL,
  `link_number` int(11) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `title_color` varchar(30) NOT NULL,
  `theme_color` varchar(30) NOT NULL,
  `body_img` varchar(500) NOT NULL,
  `message_txt` varchar(700) NOT NULL,
  `Subtext` varchar(20) NOT NULL,
  `Facebook_username` varchar(300) NOT NULL,
  `follower` varchar(100) NOT NULL,
  `Instagram_username` varchar(300) NOT NULL,
  `Twitter_Username` varchar(300) NOT NULL,
  `Pinterest_Username` varchar(300) NOT NULL,
  `Linkedin_Username` varchar(300) NOT NULL,
  `Whatsapp_number` varchar(300) NOT NULL,
  `Youtube_channel` varchar(300) NOT NULL,
  `Snapchat_channel` varchar(300) NOT NULL,
  `Tiktok_channel` varchar(300) NOT NULL,
  `Website_URL` varchar(300) NOT NULL,
  `btn_1` varchar(500) NOT NULL,
  `btn_2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `create_qr_code`
--

INSERT INTO `create_qr_code` (`id`, `user_uid`, `created_date`, `payment_code`, `payment_number`, `payment_status`, `QR_src`, `QR_visit`, `QE_image_name`, `payment_date`, `payment_expire_date`, `templete_name`, `link_number`, `logo`, `Title`, `title_color`, `theme_color`, `body_img`, `message_txt`, `Subtext`, `Facebook_username`, `follower`, `Instagram_username`, `Twitter_Username`, `Pinterest_Username`, `Linkedin_Username`, `Whatsapp_number`, `Youtube_channel`, `Snapchat_channel`, `Tiktok_channel`, `Website_URL`, `btn_1`, `btn_2`) VALUES
(4, '', '', '', '', '', '', '', '', '', '', '', 2, '5602732.png', '', '#91e01a', '', '86343065-869a-4e20-8e66-260d931c9e31_hd (2).jpg', '5y urtudrty ydydru dydyd yjytutyi fyuktudt6u dyjdhjytej ftyjtri 7tydyj dytjftykftukfukftyjdtyj', 'gre thyrydrt', '1', '', '2', '3', '4', '5', '6', '7', '8', '9', '10', '', ''),
(5, '', '', '', '', '', '', '', '', '', '', '', 3, '5602732.png', '', '#91e01a', '', '86343065-869a-4e20-8e66-260d931c9e31_hd (2).jpg', '5y urtudrty ydydru dydyd yjytutyi fyuktudt6u dyjdhjytej ftyjtri 7tydyj dytjftykftukfukftyjdtyj', 'gre thyrydrt', '1', '', '2', '3', '4', '5', '6', '7', '8', '9', '10', '', ''),
(6, '', '', '', '', '', '', '', '', '', '', 'social media.templete.php', 4, '5602732.png', '', '#91e01a', '', '86343065-869a-4e20-8e66-260d931c9e31_hd (2).jpg', '5y urtudrty ydydru dydyd yjytutyi fyuktudt6u dyjdhjytej ftyjtri 7tydyj dytjftykftukfukftyjdtyj', 'gre thyrydrt', '', '', '2', '', '4', '5', '6', '', '8', '9', '10', '', ''),
(7, '', '', '', '', '', '', '', '', '', '', 'social media.templete.php', 5, '5602732.png', 'abidrgery', '#91e01a', '', '86343065-869a-4e20-8e66-260d931c9e31_hd (2).jpg', '5y urtudrty ydydru dydyd yjytutyi fyuktudt6u dyjdhjytej ftyjtri 7tydyj dytjftykftukfukftyjdtyj', 'gre thyrydrt', '', '', '2', '3', '4', '5', '6', '7', '8', '9', '10', '', ''),
(8, '', '', '7568768', '012757', 'on-hold', '', '', '', '2023-11-24', '2023-12-24', 'social media.templete.php', 6, '', 'as', '#19d726', '', 'SOCIAL-MEDIA 11-24-2023.png', 'ss', 'is ', 's', '', 's', 's', '', '', '', '', '', 's', '', '', ''),
(9, '1', '', '2154544', '1548', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/My-QR//1/id=Nw==', 'http://localhost/sacnme/My-QR//1/?id=Nw==', 'My qr code QR123531 Nw==.jpg', '2023-11-24', '2023-12-24', 'social media.templete.php', 7, 'pexels-garvin-st-villier-3972755.jpg', 'a', '#006e8a', '', 'gradient-black-background-with-c.jpg', 'asds', 'efewsgwertre', 'be e', '', 'e', 'e', 'e', 'e', 'e', '', 'e', '', '', '', ''),
(10, '1', '2023-11-24', 'wetw34t35y5', '018402498754', 'on-hold', '', '', '', '2023-11-24', '2023-12-24', 'social media.templete.php', 8, 'Login-page-character1.png', 'a', '#9d3939', '', '398226244_282675974757362_4376346654595459679_n.jpg', 'aaaa', 'a', 'a', '', 'a', 'a', '', '', '', '', 'a', '', '', '', ''),
(13, '1', '2023-11-25', '015', '015', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/qr-code%20page/MY-', 'http://localhost/sacnme/qr-code%20page/MY-QR?id=MTE=', 'My qr code QR123531 MTE=.jpg', '2023-11-25', '2023-12-25', 'social media.templete.php', 11, '', 'ef', '#c03939', '', 'wepik-export-20231024214833T75l.png', 'dfsd', 'dsgds', 'd', '', 'd', '', '', '', '', '', '', 'd', '', '', ''),
(14, '1', '2023-11-25', '012', '012', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/qr-code%20page/MY-', 'http://localhost/sacnme/qr-code%20page/MY-QR?qr_link=MTI=', 'My qr code QR123531 MTI=.jpg', '2023-11-25', '2023-12-25', 'social media.templete.php', 12, '', 'ds', '#000000', '', '', 'c', 'c', 'c', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '1', '2023-11-25', '013', '013', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/qr-code%20page/MY-', 'http://localhost/sacnme/qr-code%20page/MY-QR?qr_link=MTM=', 'My qr code QR123531 MTM=.jpg', '2023-11-25', '2023-12-25', 'social media.templete.php', 13, 'gradient-black-background-with-c.jpg', '', '#000000', '', '', '', '', '', '', '', '', '', '', '', 'a', '', '', '', '', ''),
(16, '1', '2023-11-25', '0154', '0154', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/qr-code%20page/MY-', 'http://localhost/sacnme/qr-code%20page/MY-QR?qr_link=MTQ=', 'My qr code QR123531 MTQ=.jpg', '2023-11-25', '2023-12-25', 'social media.templete.php', 14, 'logo-v2.png', 'abid store', '#d83131', '', 'pexels-garvin-st-villier-3972755.jpg', 'abid has a store and in this store you ca find a lots of card', 'car bazar', '@', '', '@', '', '', '@', '', '', '', '', '', '', ''),
(18, '1', '2023-11-25', 'a1b1c1', '0185745487', 'on-hold', '', '', '', '2023-11-25', '2023-12-25', 'social media.templete.php', 16, 'FVRR_BIG-9a067792.png', 'Abidur Rahman', '#d40c6d', '', 'abid.jpg', 'Hello there I&#039;m Abidur Rahman a web developer. Experience full stack web developer', 'web developer', 'https://www.facebook.com/im.abid1234', '', 'https://www.facebook.com/im.abid1234', 'https://www.facebook.com/im.abid1234', '', '', '+8801840249837', 'https://www.facebook.com/im.abid1234', 'https://www.facebook.com/im.abid1234', '', 'https://www.facebook.com/im.abid1234', '', ''),
(20, '1', '2023-11-25', '01487', '01487', 'on-hold', '', '', '', '2023-11-25', '2023-12-25', 'website qr.templete.php', 18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '1', '2023-11-25', '0181', '0181', 'on-hold', '', '', '', '2023-11-25', '2023-12-25', 'website qr.templete.php', 19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://getbootstrap.com/docs/5.0/forms/overview/', '', ''),
(22, '1', '2023-11-25', '1', '1', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/qr-code%20page/MY-', 'http://localhost/sacnme/qr-code%20page/MY-QR?qr_link=MjA=', 'My qr code QR123531 MjA=.jpg', '2023-11-25', '2023-12-25', 'website qr.templete.php', 20, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://getbootstrap.com/docs/5.0/forms/overview/', '', ''),
(23, '8', '2023-11-25', '40', '40', 'on-hold', '', '', '', '2023-11-26', '2023-12-26', '', 21, '', 'Research lab aid at Dhaka ', '', '', '', 'lorem50mdbfjdbv', 'scientists club', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, '8', '2023-11-25', '02', '02', 'on-hold', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/qr-code%20page/MY-', 'http://localhost/sacnme/qr-code%20page/MY-QR?qr_link=MjM=', 'My qr code QR123531 MjM=.jpg', '2023-11-25', '2023-11-25', 'landing.page.templete.php', 23, '', 'Student of the year medel', '#e60000', '#0cc2c6', '394568868_713804903985639_4385655575044052998_n.jpg', '5y urtudrty ydydru dydyd yjytutyi fyuktudt6u dyjdhjytej ftyjtri 7tydyj dytjftykftukfukftyjdtyj', 'brilliant student', '', '', '', '', '', '', '', '', '', '', '', 'a:2:{i:0;s:6:\"link 1\";i:1;s:1:\"#\";}', 'a:2:{i:0;s:6:\"link 2\";i:1;s:4:\"?a=a\";}'),
(27, '8', '2023-11-26', '5', '4', 'on-hold', '', '', '', '2023-11-26', '2023-12-26', 'website qr.templete.php', 25, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://getbootstrap.com/docs/5.0/forms/overview/', '', ''),
(28, '8', '2023-11-27', '20', '20', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/qr-code%20page/MY-', 'http://localhost/sacnme/qr-code%20page/MY-QR?qr_link=MjY=', 'My qr code QR123531 MjY=.jpg', '2023-11-27', '2024-11-26', 'PDF.templete.php', 26, '', '', '', '', 'Doc-1.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '8', '2023-11-27', '', '', 'pending', '', '', '', '', '', 'facebook page.templete.php', 27, 'teenagers-are-standing-thinking.png', 'Hello this is abid page', '', '', 'abid.jpg', '', '', 'https://www.facebook.com/im.abid1234/', '100K', '', '', '', '', '', '', '', '', '', '', ''),
(30, '8', '2023-11-27', '', '', 'pending', '', '', '', '', '', 'facebook page.templete.php', 28, 'teenagers-are-standing-thinking.png', 'Hello this is abid page', '', '', 'abid.jpg', '', '', 'https://www.facebook.com/im.abid1234/', '100K', '', '', '', '', '', '', '', '', '', '', ''),
(31, '1', '2023-11-28', '', '', 'pending', '', '', '', '', '', 'landing.page.templete.php', 29, '', 'asasa', '#000000', '#A3F707', '86343065-869a-4e20-8e66-260d931c9e31_hd (2) (1).jpg', 'sfsf', 'saasad', '', '', '', '', '', '', '', '', '', '', '', 'a:2:{i:0;s:4:\"fwfs\";i:1;s:1:\"s\";}', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}'),
(32, '1', '2023-11-28', '', '', 'pending', '', '', '', '', '', 'landing.page.templete.php', 30, '', 'asasa', '#dd1d1d', '#A3F707', '86343065-869a-4e20-8e66-260d931c9e31_hd (2) (1).jpg', 'sfsf', 'saasad', '', '', '', '', '', '', '', '', '', '', '', 'a:2:{i:0;s:4:\"fwfs\";i:1;s:1:\"s\";}', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}'),
(33, '1', '2023-11-28', '', '', 'pending', '', '', '', '', '', 'landing.page.templete.php', 31, '', '', '#F707F3', '#1DF707', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}'),
(34, '1', '2023-11-28', '', '', 'pending', '', '', '', '', '', 'landing.page.templete.php', 32, '', 'rgserhfdgjj', '#F707F3', '#1DF707', '', '', 'hkgdh', '', '', '', '', '', '', '', '', '', '', '', 'a:2:{i:0;s:1:\"s\";i:1;s:1:\"s\";}', 'a:2:{i:0;s:0:\"\";i:1;s:0:\"\";}'),
(35, '1', '2023-11-28', '', '', 'pending', '', '', '', '', '', 'social media.templete.php', 33, 'My qr code QR123531 MzA=.jpg', 'r yetueryiet7yktueketuk', '#F70707', '', '', '', '', 'sfwet', '', '', '', '', '', '', '', '', 'dthetr', '', '', ''),
(36, '1', '2023-11-28', '', '', 'pending', '', '', '', '', '', 'social media.templete.php', 34, 'My qr code QR123531 MzA=.jpg', 'r yetueryiet7yktueketuk', '#FFFFFF', '', '', '', '', 'sfwet', '', '', '', '', '', '', '', '', 'dthetr', '', '', ''),
(37, '8', '2023-11-28', '23', '23', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/qr-code%20page/MY-', 'http://localhost/sacnme/qr-code%20page/MY-QR?qr_link=MzU=', 'My qr code QR123531 MzU=.jpg', '2023-11-28', '2023-12-28', 'SMS.templete.php', 35, '', '', '', '', '', 'text me now', '', '', '', '', '', '', '', '01840249837', '', '', '', '', '', ''),
(38, '1', '2023-12-03', '', '', 'pending', '', '', '', '', '', 'Image.templete.php', 36, '', '', '', '', '4161BoDqu3L._AC_SX466_.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '1', '2023-12-05', '123', '123', 'active', 'https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=http://localhost/sacnme/qr-code%20page/MY-', 'http://localhost/sacnme/qr-code%20page/MY-QR?qr_link=Mzc=', 'My qr code QR123531 Mzc=.jpg', '2023-12-05', '2024-12-04', 'website qr.templete.php', 37, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/phpmyadmin/index.php?route=/table/structure&amp;db=scanme&amp;table=users_account', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `templetes`
--

CREATE TABLE `templetes` (
  `id` int(11) NOT NULL,
  `temp_name` varchar(100) NOT NULL,
  `temp_inputs` varchar(500) NOT NULL,
  `temp_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `templetes`
--

INSERT INTO `templetes` (`id`, `temp_name`, `temp_inputs`, `temp_img`) VALUES
(1, 'card 1', 'a:9:{i:0;s:7:\"userImg\";i:1;s:8:\"userName\";i:2;s:10:\"shortTitle\";i:3;s:12:\"mobileNumber\";i:4;s:5:\"email\";i:5;s:11:\"websiteLink\";i:6;s:13:\"InstagramLink\";i:7;s:12:\"FacebookLink\";i:8;s:12:\"bottomButton\";}', 'Screenshot (122).png'),
(6, 'templete 2', 'a:12:{i:0;s:20:\"user_color_all_field\";i:1;s:12:\"Company_Logo\";i:2;s:7:\"userImg\";i:3;s:8:\"userName\";i:4;s:10:\"shortTitle\";i:5;s:10:\"department\";i:6;s:14:\"user_short_des\";i:7;s:12:\"mobileNumber\";i:8;s:5:\"email\";i:9;s:11:\"websiteLink\";i:10;s:10:\"socialIcon\";i:11;s:12:\"bottomButton\";}', 'Screenshot (135).png'),
(7, 'templete 3', 'a:12:{i:0;s:20:\"user_color_all_field\";i:1;s:12:\"Company_Logo\";i:2;s:7:\"userImg\";i:3;s:8:\"userName\";i:4;s:10:\"shortTitle\";i:5;s:10:\"department\";i:6;s:14:\"user_short_des\";i:7;s:12:\"mobileNumber\";i:8;s:15:\"user_2nd_number\";i:9;s:5:\"email\";i:10;s:11:\"websiteLink\";i:11;s:10:\"socialIcon\";}', 'Screenshot (144).png'),
(8, 'templete ', 'a:11:{i:0;s:20:\"user_color_all_field\";i:1;s:12:\"Company_Logo\";i:2;s:7:\"userImg\";i:3;s:8:\"userName\";i:4;s:10:\"shortTitle\";i:5;s:10:\"department\";i:6;s:8:\"location\";i:7;s:12:\"mobileNumber\";i:8;s:5:\"email\";i:9;s:11:\"websiteLink\";i:10;s:10:\"socialIcon\";}', 'Screenshot (147).png');

-- --------------------------------------------------------

--
-- Table structure for table `users_account`
--

CREATE TABLE `users_account` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `emails` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `passwords` varchar(30) NOT NULL,
  `imgs` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_account`
--

INSERT INTO `users_account` (`id`, `full_name`, `emails`, `phone`, `passwords`, `imgs`) VALUES
(1, 'Abidur Rahman', 'abid@gmail.com', '01840249837', 'abid1234567', 'abid.jpg'),
(4, 'tanvir', 't771173@gnail.com', '01725465891', '1234567890', 'Login-page-character1.png'),
(5, 'Riajul Islam', 'riajul@gmail.com', '01728479038', 'riajul1234', 'happy-smiling-young-man-avatar-3.png'),
(6, 'Md. Riazul Islam', 'user4rc@gmail.com', '01318485039', 'talha', 'man-doing-online-chatting-while.png'),
(7, 'maliha rahman', 'maliha@gmail.com', '0197979741', 'maliha1234', '86343065-869a-4e20-8e66-260d931c9e31_hd (2).jpg'),
(8, 'abid', 'abid@gmail.com', '011111111111', '123456', '86343065-869a-4e20-8e66-260d931c9e31_hd (2).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_cards`
--
ALTER TABLE `create_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_qr_code`
--
ALTER TABLE `create_qr_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templetes`
--
ALTER TABLE `templetes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_account`
--
ALTER TABLE `users_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `create_cards`
--
ALTER TABLE `create_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `create_qr_code`
--
ALTER TABLE `create_qr_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `templetes`
--
ALTER TABLE `templetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_account`
--
ALTER TABLE `users_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
