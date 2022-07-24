-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 12:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc03w01_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(8) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pwd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `pwd`, `is_deleted`, `created_date`, `modified_date`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', 0, '2022-07-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(8) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `people` int(5) NOT NULL,
  `message` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `email`, `phone`, `date`, `time`, `people`, `message`, `is_deleted`, `created_date`, `modified_date`) VALUES
(1, 'laichimeng', 'laichimeng2001@gmail.com', '+60168721145', '0000-00-00', '00:00:', 4, 'testing', 1, '2022-07-24 07:40:03', NULL),
(2, 'laichimeng', 'laichimeng2001@gmail.com', '+60168721145', '0000-00-00', '00:00:', 4, 'testing', 1, '2022-07-24 07:42:00', NULL),
(3, 'laichimeng', 'laichimeng2001@gmail.com', '+60168721145', '26/04', '6.00', 4, 'testing', 1, '2022-07-24 07:45:49', NULL),
(4, 'laichimeng', 'laichimeng2001@gmail.com', '+60168721145', '26/04', '6.00', 4, 'testing', 0, '2022-07-24 07:45:50', NULL),
(5, 'laichimeng', 'laichimeng2001@gmail.com', '+60168721145', '26/04', '6.00', 4, 'testing', 0, '2022-07-24 07:46:54', NULL),
(6, 'laichimeng', 'laichimeng2001@gmail.com', '+60168721145', '26/04', '6.00', 4, 'testing', 1, '2022-07-24 07:47:47', NULL),
(7, 'tttest', 'tttestg2001@gmail.com', '+6000000000', '1970-01-01', '6:00:0', 69, 'sixnineparty', 1, '2022-07-24 10:55:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `insta` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`id`, `name`, `role`, `img`, `twitter`, `insta`, `linkedin`, `is_deleted`) VALUES
(1, 'dora', 'chef', 'assets\\img\\chefs\\chefs-1.jpg', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_date` date DEFAULT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mail`, `subject`, `message`, `created_date`, `is_deleted`) VALUES
(1, 'justin', 'justin@whatever', 'subject', 'message	text', NULL, 1),
(2, 'laichimeng', 'laichimeng2001@gmail.com', 'bruh', 'bruh bruh bruh', '2022-07-24', 0),
(3, 'weee~', 'AAA@gmail.com', 'weee~weee~', 'weee~weee~weee~weee~weee~', '2022-07-24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `path`, `is_deleted`) VALUES
(1, 'assets\\img\\gallery\\gallery-1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(8) NOT NULL,
  `menu_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'filter-starters / filter-salads / filter-specialty',
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_type`, `image`, `title`, `description`, `price`, `is_deleted`, `created_date`, `modified_date`) VALUES
(1, 'filter-starters', 'assets/img/menu/lobster-bisque.jpg', 'Lobster Bisque', 'Lorem, deren, trataro, filede, nerada', '5.95', 1, '2022-07-23 00:00:00', '2022-07-24 09:25:33'),
(2, 'filter-starters', 'assets/img/menu/bread-barrel.jpg', 'Bread nice', 'bread Bread BRead BREad BREAd BREAD', '6.95', 0, '2022-07-23 00:00:00', '2022-07-24 09:26:04'),
(3, 'filter-starters', 'assets/img/menu/cake.jpg', 'Crab Cake', 'A delicate crab cake served on a toasted roll with lettuce and tartar sauce', '7.95', 0, '2022-07-23 00:00:00', NULL),
(4, 'filter-salads', 'assets/img/menu/caesar.jpg', 'Caesar Selections', 'Lorem, deren, trataro, filede, nerada', '8.95', 0, '2022-07-23 00:00:00', NULL),
(5, 'filter-specialty', 'assets/img/menu/tuscan-grilled.jpg', 'Tuscan Grilled', 'Grilled chicken with provolone, artichoke hearts, and roasted red pesto', '9.95', 0, '2022-07-23 00:00:00', NULL),
(6, 'filter-starters', 'assets/img/menu/mozzarella.jpg', 'Mozzarella Stick', 'Lorem, deren, trataro, filede, nerada\r\n', '4.95', 0, '2022-07-23 00:00:00', NULL),
(7, 'filter-salads', 'assets/img/menu/greek-salad.jpg', 'Greek Salad', 'Fresh spinach, crisp romaine, tomatoes, and Greek olives', '9.95', 0, '2022-07-23 00:00:00', NULL),
(8, 'filter-salads', 'assets/img/menu/spinach-salad.jpg', 'Spinach Salad', 'Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette', '9.95', 0, '2022-07-23 00:00:00', NULL),
(9, 'filter-specialty', 'assets/img/menu/lobster-roll.jpg', 'Lobster Roll', 'Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll', '12.95', 0, '2022-07-23 00:00:00', NULL),
(10, 'filter-starters', '/assets/img/menu/bread-barrel.jpg', 'poop', 'bread Bread BRead BREad BREAd BREAD', '5.90', 0, '2022-07-24 09:26:46', '2022-07-24 09:27:08'),
(11, 'filter-starters', NULL, 'chris hemsworth', 'bread Bread BRead BREad BREAd BREAD', '5.90', 1, '2022-07-24 23:12:54', '2022-07-24 23:15:49'),
(12, 'filter-starters', NULL, 'chris hemsworth', 'bread Bread BRead BREad BREAd BREAD', '5.90', 1, '2022-07-24 23:16:13', '2022-07-24 23:17:52'),
(13, 'filter-starters', 'ERROR', 'chris hemsworth', 'bread Bread BRead BREad BREAd BREAD', '5.90', 1, '2022-07-24 23:18:08', '2022-07-24 23:22:39'),
(14, 'filter-starters', 'ERROR', 'peter griffin', 'bread Bread BRead BREad BREAd BREAD', '5.90', 1, '2022-07-24 23:23:31', '2022-07-24 23:23:55'),
(15, 'filter-starters', 'ERROR', 'pete', 'bread Bread BRead BREad BREAd BREAD', '5.90', 1, '2022-07-24 23:24:07', '2022-07-24 23:29:14'),
(16, 'filter-starters', 'https://cdn.britannica.com/92/215392-050-96A4BC1D/Australian-actor-Chris-Hemsworth-2019.jpg', 'chris', 'bread Bread BRead BREad BREAd BREAD', '8.60', 0, '2022-07-24 23:29:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `work` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `work`, `message`, `img`, `is_deleted`) VALUES
(1, 'puppy', 'woof', 'woof woof', 'assets\\img\\testimonials\\testimonials-1.jpg', 0),
(2, 'Authur', 'Devil slayer', 'good poop!', 'assets\\img\\testimonials\\testimonials-1.jpg', 1),
(3, 'loki', 'asgardian', 'meoq', 'assets\\img\\testimonials\\testimonials-4.jpg', 0),
(4, 'DEEmon Slayer', 'slay demon', 'weeeeee~', 'assets\\img\\testimonials\\testimonials-5.jpg', 0),
(5, 'REAL THOR', 'god of thunder', 'im REAL mighty', 'https://upload.wikimedia.org/wikipedia/en/thumb/3/3c/Chris_Hemsworth_as_Thor.jpg/220px-Chris_Hemsworth_as_Thor.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chef`
--
ALTER TABLE `chef`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
