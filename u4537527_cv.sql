-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2020 at 04:50 PM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u4537527_cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_letter`
--

CREATE TABLE `application_letter` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `requirements` text NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_letter`
--

INSERT INTO `application_letter` (`id`, `user_id`, `requirements`, `company_name`, `date_created`) VALUES
(5, 3, 'Pas Photo 3x4;Ijazah SMK;CV;Copy KTP;Copy Kartu Keluarga;A;', 'PT. Bla Bla Bla', '2020-05-04 16:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `book_time` datetime NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assaign_days`
--

CREATE TABLE `assaign_days` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `hit` int(11) DEFAULT NULL,
  `is_featured` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `position` varchar(10) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `year` char(4) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `is_last_education` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `position`, `school_name`, `year`, `description`, `date_created`, `is_last_education`) VALUES
(1, 3, 'SMK', 'SMKN 1 Cianjur', '2016', '<p>123123</p>', '2020-05-04 12:14:38', ''),
(2, 3, 'SMP', 'SMPN 3 Cianjur', '2013', '<p>asdasd</p>', '2020-05-04 12:29:06', '1');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `orders` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `user_id`, `name`, `slug`, `date`, `details`, `company`, `parent_id`, `orders`, `status`) VALUES
(2, 3, 'IT', 'it', NULL, NULL, NULL, 0, 1, 1),
(3, 3, 'Staff', NULL, '2018-2019', '', 'CV. INDOGROUP', 2, 1, 1),
(4, 3, 'Development', NULL, '2019-2020', 'Toko Nuhun', 'TP. Mulia Sarana Abadi', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT 'free'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `package_id`, `name`, `details`, `image`, `thumb`, `type`) VALUES
(2, 1, 'Basic', 'Hanya Input data diri', NULL, NULL, 'free'),
(3, 2, 'Komplit', '<ol>\r\n\r\n<li>Pilih layuot design </li>\r\n<li>Atur Font untuk layout anda</li>\r\n<li> Atur Data kemampuan anda</li>\r\n<li>Atur data pendidikan anda</li>\r\n<li>Atur data pengalaman anda</li>\r\n<li>Atur portofolio anda</li>\r\n<li>Blog</li>\r\n<li>Atur janji</li>\r\n<li>Atur kontak anda agar bisa dihubungi</li>\r\n<li>Download CV anda dengan design yang menarik</li>\r\n<li>Surat Lamaran Generator</li>\r\n</ol>', NULL, NULL, 'free');

-- --------------------------------------------------------

--
-- Table structure for table `follower`
--

CREATE TABLE `follower` (
  `id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follower`
--

INSERT INTO `follower` (`id`, `follower_id`, `action_id`, `status`, `created_at`) VALUES
(1, 2, 1, 1, '2020-05-04 12:43:17'),
(2, 3, 1, 1, '2020-05-04 12:43:18'),
(3, 4, 3, 1, '2020-05-05 10:50:14'),
(4, 5, 3, 1, '2020-05-05 10:50:16');

-- --------------------------------------------------------

--
-- Table structure for table `google_ads`
--

CREATE TABLE `google_ads` (
  `id` int(11) NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `ad_type` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `code` mediumtext DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `thumb` varchar(500) DEFAULT NULL,
  `img_url` varchar(500) DEFAULT NULL,
  `is_open_new_window` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `max_impressions` int(11) DEFAULT NULL,
  `max_clicks` int(11) DEFAULT NULL,
  `banner_categories` int(11) DEFAULT NULL,
  `sections` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `google_fonts`
--

CREATE TABLE `google_fonts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `google_fonts`
--

INSERT INTO `google_fonts` (`id`, `name`, `slug`) VALUES
(1, 'Poppins', 'poppins'),
(2, 'Lato', 'lato'),
(3, 'Lobster', 'lobster'),
(4, 'Bree Serif', 'bree-serif'),
(5, 'Cabin', 'cabin'),
(6, 'Cookie', 'cookie'),
(7, 'Montserrat', 'montserrat'),
(8, 'Ubuntu', 'ubuntu'),
(9, 'Raleway', 'raleway'),
(10, 'Roboto', 'roboto'),
(11, 'Nunito', 'nunito'),
(12, 'Molengo', 'molengo'),
(13, 'Sarabun', 'sarabun'),
(14, 'Open Sans', 'open-sans'),
(15, 'Source Sans Pro', 'source-sans-pro'),
(16, 'PT Sans', 'pt-sans'),
(17, 'Noto Sans', 'noto-sans'),
(18, 'Roboto Mono', 'roboto-mono'),
(19, 'Muli', 'muli'),
(20, 'Arimo', 'arimo'),
(21, 'Fira Sans', 'fira-sans'),
(22, 'Noto Serif', 'noto-serif'),
(23, 'Work Sans', 'work-sans'),
(24, 'Quicksand', 'quicksand'),
(25, 'Dosis', 'dosis'),
(26, 'Rubik', 'rubik'),
(27, 'Oxygen', 'oxygen'),
(28, 'Hind', 'hind'),
(29, 'Josefin Sans', 'josefin-sans'),
(30, 'Noto Sans KR', 'noto-sans-kr'),
(31, 'Libre Franklin', 'libre-franklin'),
(32, 'Nunito Sans', 'nunito-sans'),
(33, 'Karla', 'karla'),
(34, 'Hind Siliguri', 'hind-siliguri'),
(35, 'Mukta Malar', 'mukta-malar'),
(36, 'Merriweather Sans', 'merriweather-sans'),
(37, 'Kanit', 'kanit'),
(38, 'Questrial', 'questrial'),
(39, 'Comfortaa', 'comfortaa'),
(40, 'Maven Pro', 'maven-pro'),
(41, 'Signika', 'signika'),
(42, 'Noto Sans TC', 'noto-sans-tc'),
(43, 'Varela Round', 'varela-round'),
(44, 'Akronim', 'akronim');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT 0.00,
  `bill_type` varchar(255) DEFAULT NULL,
  `is_special` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `slug`, `price`, `bill_type`, `is_special`) VALUES
(1, 'Free', 'free', 0.00, 'yearly', 0),
(2, 'Pro', 'pro', 10000.00, 'yearly', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `details` longtext CHARACTER SET utf8 DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `details`, `status`, `created_at`) VALUES
(1, 'testste', 'setset', '<p>setsetsetsets</p>\r\n', NULL, '2020-05-02 12:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `puid` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package` varchar(255) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `puid`, `user_id`, `package`, `amount`, `status`, `created_at`) VALUES
(1, '669074971', 5, 'pro', NULL, 'pending', '2020-05-05 13:35:45'),
(2, '1586881791', 3, 'pro', NULL, 'pending', '2020-05-05 14:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_category`
--

CREATE TABLE `portfolio_category` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_services`
--

CREATE TABLE `product_services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `site_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8 DEFAULT NULL,
  `footer_about` text CHARACTER SET utf8 DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `pagination_limit` int(11) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `google_analytics` mediumtext DEFAULT NULL,
  `site_color` varchar(255) DEFAULT NULL,
  `site_font` varchar(255) DEFAULT NULL,
  `layout` int(11) DEFAULT NULL,
  `about_info` text DEFAULT NULL,
  `ind_code` varchar(255) DEFAULT NULL,
  `purchase_code` varchar(255) DEFAULT NULL,
  `enable_captcha` int(11) NOT NULL DEFAULT 0,
  `enable_registration` int(11) NOT NULL,
  `enable_paypal` int(11) NOT NULL DEFAULT 0,
  `captcha_site_key` varchar(255) DEFAULT NULL,
  `captcha_secret_key` varchar(255) DEFAULT NULL,
  `paypal_email` varchar(255) DEFAULT NULL,
  `version` varchar(255) NOT NULL DEFAULT 'v1.1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_title`, `favicon`, `logo`, `keywords`, `description`, `footer_about`, `admin_email`, `mobile`, `copyright`, `pagination_limit`, `facebook`, `instagram`, `twitter`, `linkedin`, `google_analytics`, `site_color`, `site_font`, `layout`, `about_info`, `ind_code`, `purchase_code`, `enable_captcha`, `enable_registration`, `enable_paypal`, `captcha_site_key`, `captcha_secret_key`, `paypal_email`, `version`) VALUES
(1, 'Iniaku.me', 'Cara Mudah kelola Berkas Pekerjaan', 'uploads/thumbnail/iniakume_-_ico_thumb-54x54.png', 'uploads/medium/iniakume_-_web_medium-134x87.png', 'resume,cv,vcard,gratis,cepat,kerja', 'Cara Mudah kelola Berkas Pekerjaan', 'IFD - Infutura Development Resume Generator', 'rizkihardinas@gmail.com', '0895634648446', 'Infutura Development  © 2020 All rights reserved.', 0, 'https://www.facebook.com/rizkihardinas.tk', 'https://instagram.com/hardinase', '', 'linkedin', '', '', '', 0, 'SW52YWxpZCBMaWNlbnNlIEtleQ==', 'raz0r', 'nulled', 0, 1, 0, '6Ld0SpcUAAAAAFpKkQaTwbENLukNG_hMpPpckHT9', '6Ld0SpcUAAAAAAj-48ToNW4ceBXTdEIOxyhtPMtM', 'yourpaypal@gmail.com', 'v1.4');

-- --------------------------------------------------------

--
-- Table structure for table `site_contacts`
--

CREATE TABLE `site_contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `skill_level` int(11) DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `orders` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `name`, `slug`, `skill_level`, `parent_id`, `orders`, `status`) VALUES
(1, 3, 'Programming', 'programming', NULL, 0, 1, 1),
(2, 3, 'PHP', NULL, 60, 1, 1, 1),
(3, 3, 'Java', NULL, 50, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `slider_order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `tag_slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_birth` datetime NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(100) DEFAULT 'user',
  `account_type` varchar(255) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT 'registered',
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kodepos` char(6) NOT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `envato` varchar(255) DEFAULT NULL,
  `upwork` varchar(255) DEFAULT NULL,
  `fiverr` varchar(255) DEFAULT NULL,
  `freelancer` varchar(255) DEFAULT NULL,
  `site_color` varchar(255) DEFAULT '3e24be',
  `site_font` varchar(500) DEFAULT 'poppins',
  `layouts` varchar(255) NOT NULL DEFAULT 'style1',
  `free_layouts` varchar(255) DEFAULT 'style1',
  `image` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `about_me` varchar(5000) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `available_days` varchar(255) DEFAULT NULL,
  `google_analytics` text DEFAULT NULL,
  `enable_portfolio` int(11) DEFAULT NULL,
  `enable_blog` int(11) DEFAULT NULL,
  `enable_service` int(11) NOT NULL DEFAULT 1,
  `enable_appointment` int(11) NOT NULL DEFAULT 1,
  `enable_followers` int(11) NOT NULL DEFAULT 0,
  `hit` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `date_birth`, `designation`, `slug`, `email`, `user_name`, `password`, `role`, `account_type`, `user_type`, `phone`, `address`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `kodepos`, `skype`, `whatsapp`, `facebook`, `twitter`, `linkedin`, `instagram`, `envato`, `upwork`, `fiverr`, `freelancer`, `site_color`, `site_font`, `layouts`, `free_layouts`, `image`, `thumb`, `status`, `about_me`, `cv`, `available_days`, `google_analytics`, `enable_portfolio`, `enable_blog`, `enable_service`, `enable_appointment`, `enable_followers`, `hit`, `created_at`) VALUES
(1, NULL, '0000-00-00 00:00:00', NULL, 'rizki', 'rizkihardinas@gmail.com', 'rizki', '$2y$10$yiUJ9nRpC.BClGNVt8Bruemug7wrMY9lzfA8Amlczy8FvHXmDMs82', 'admin', NULL, 'registered', NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3e24be', 'poppins', 'style1', 'style1', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 0, '2020-05-02 06:29:40'),
(2, 'Resti Meliani', '0000-00-00 00:00:00', 'Posisi', 'resti', 'resti.meliani1998@gmail.com', 'resti', '$2y$10$cqi7uqvfAloASGzzKBTnG.l2xxlTwSEex2RPu.jyvQsjg0uQP6iYy', 'user', 'free', 'registered', '123123123', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', 'style1', 'style1', NULL, 'assets/front/images/avatar.png', 1, 'asdasdasd123123', NULL, NULL, '', 0, 0, 0, 0, 0, 3, '2020-05-02 05:37:14'),
(3, 'My Project', '0000-00-00 00:00:00', '', 'rs', 'akangagan@gmail.com', 'rs', '$2y$10$cqi7uqvfAloASGzzKBTnG.l2xxlTwSEex2RPu.jyvQsjg0uQP6iYy', 'user', 'pro', 'registered', '0895634648446', '', 'JAWA BARAT', '3203', 'CIANJUR', 'SOLOKPANDAN', '43214', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '3e24be', '', 'style1', 'style1', 'uploads/medium/garpu_bayi_medium-264x237.jpg', 'uploads/thumbnail/garpu_bayi_thumb-150x134.jpg', 1, 'R', NULL, NULL, '', 0, 0, 1, 1, 0, 3, '2020-05-02 05:38:39'),
(4, 'Willy Setiawan', '0000-00-00 00:00:00', 'Designer & Digital Marketing', 'wilgan', 'willysetiawan7@gmail.com', 'wilgan', '$2y$10$HDer50kHwhv64hXHJ/PzLOSp3PtJ9ZqALRiIH/LINQL2LlidzQGki', 'user', 'free', 'registered', '089503800600', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', 'style1', 'style1', 'uploads/medium/face_hand_medium-639x800.jpg', 'uploads/thumbnail/face_hand_thumb-119x150.jpg', 1, 'me vs everybody', NULL, NULL, '', 0, 0, 0, 0, 0, 2, '2020-05-04 00:22:02'),
(5, 'Hardinas', '0000-00-00 00:00:00', NULL, 'hardinas', 'hardinas@gmail.com', 'hardinas', '$2y$10$cqi7uqvfAloASGzzKBTnG.l2xxlTwSEex2RPu.jyvQsjg0uQP6iYy', 'user', 'pro', 'registered', NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3e24be', 'poppins', 'style1', 'style1', NULL, 'assets/front/images/avatar.png', 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 1, '2020-05-04 06:10:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_letter`
--
ALTER TABLE `application_letter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assaign_days`
--
ALTER TABLE `assaign_days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follower`
--
ALTER TABLE `follower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_ads`
--
ALTER TABLE `google_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_fonts`
--
ALTER TABLE `google_fonts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_services`
--
ALTER TABLE `product_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_contacts`
--
ALTER TABLE `site_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_letter`
--
ALTER TABLE `application_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assaign_days`
--
ALTER TABLE `assaign_days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `follower`
--
ALTER TABLE `follower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `google_ads`
--
ALTER TABLE `google_ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `google_fonts`
--
ALTER TABLE `google_fonts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_services`
--
ALTER TABLE `product_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_contacts`
--
ALTER TABLE `site_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
