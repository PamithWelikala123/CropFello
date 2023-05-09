-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 10:56 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cropfello`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `password` varchar(50) NOT NULL,
  `Admin_ID` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`password`, `Admin_ID`, `first_name`, `last_name`, `contact_no`) VALUES
('amal', 'amal@gmail.com', 'amal', 'perera', '0712345678'),
('kamal', 'kamal@gmail.com', 'kamal', 'perera', '7788');

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `bidding_number` varchar(100) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`bidding_number`, `post_id`, `buyer_id`, `amount`, `time`) VALUES
('01614e9f1360c8df243ab55278621417', 11, 2, 1260, '2023-04-28 12:55:53'),
('04372482a82fa19e89465b10c883f0bf', 9, 2, 550, '2023-04-26 20:22:24'),
('06ee5a41085077f985f0cce5fa40de51', 11, 2, 1250, '2023-04-28 12:15:17'),
('08a05e3796c5da4a77f3b0017e9e25cd', 11, 2, 1260, '2023-04-28 12:47:32'),
('0aa5f709f9dc93dd800f299fe9c90078', 10, 2, 600, '2023-05-01 21:51:30'),
('0ad8a9655a1891d16438d4ff1dc53023', 10, 2, 340, '2023-04-26 20:20:49'),
('0f65ef342f48ffa7276b2606d4af3e70', 10, 2, 650, '2023-05-01 21:55:00'),
('180ee7f970a7fb9bd04bbc784cdc7cf8', 10, 2, 530, '2023-05-01 19:46:26'),
('18af30ce44ea5affee8e08e9d69aa189', 11, 2, 1450, '2023-05-01 19:25:53'),
('18e83849a3d32d5b8f54d6cd435d0ed4', 9, 2, 830, '2023-05-01 21:51:46'),
('1d7994be371016955bbcf5fd2f2d97ee', 11, 2, 1260, '2023-04-28 12:53:59'),
('1e77b17c2e3161fbcc4f81563d64ca24', 10, 2, 600, '2023-04-26 20:16:03'),
('20d8a57360c514492367740824d84712', 10, 2, 100, '2023-04-26 20:20:22'),
('25463b6a99fa8acd374bad82a6ecf31e', 11, 2, 1580, '2023-05-01 19:42:23'),
('2d8219b07ff9c087579b414eb94ea73d', 11, 2, 1260, '2023-04-28 12:46:27'),
('2e98114204da338b5141fed88b9d87e2', 11, 2, 1150, '2023-04-26 18:17:14'),
('397bd12fd4607b50445e7df466fbcf84', 11, 2, 1260, '2023-04-28 13:10:33'),
('3b77fc63e544cd0b39fb7d9bff885fd0', 11, 2, 1530, '2023-05-01 19:38:27'),
('40cbd5f6652aaa960e53b405c1173d7d', 10, 2, 450, '2023-05-01 19:37:39'),
('44d1a96d71f266d980e8c7aa44d7776a', 11, 2, 1260, '2023-04-28 13:09:07'),
('4b6222da7ebac58b15aafd28895c996c', 10, 2, 550, '2023-05-01 21:51:06'),
('4dacfe72b5f918b997502a1269ab4e9b', 11, 2, 1400, '2023-05-01 18:51:15'),
('504cebec33966c446d289e493420fcfe', 11, 2, 1250, '2023-04-28 12:15:07'),
('51069a4d35e5a2f1f7cba4e93be0ff9b', 11, 2, 1230, '2023-04-28 12:21:36'),
('52f37519e5faa6ea32fe2d938917ae27', 11, 2, 1260, '2023-04-28 12:53:56'),
('5fdc9419ae0246d15f49cf8c0e51196d', 11, 2, 1260, '2023-04-28 12:53:21'),
('634088e062854689d70179139c9b2703', 10, 2, 380, '2023-05-01 19:30:21'),
('6610a6e80c3e19d1e5b27e5af609181e', 10, 2, 530, '2023-05-01 21:50:07'),
('69a8a5c3d0d4103aca04a22ae41b33ae', 11, 2, 1260, '2023-04-28 12:46:23'),
('6f3142606667fe1e35d9d25147050f17', 11, 2, 1260, '2023-04-28 12:44:44'),
('6fc32467691f7165fac60f95eee27808', 11, 2, 1480, '2023-05-01 19:29:58'),
('74aaf36fc9243bbc06a8d7c7ddc39122', 11, 2, 1260, '2023-04-28 12:58:25'),
('7a5cc0af4a81659f12ec1113e6c57eef', 11, 2, 1450, '2023-05-01 19:29:44'),
('800947793cc0431002918fb86a770df3', 10, 2, 530, '2023-05-01 21:49:54'),
('82f1c4af45d4e07101b9c8dca46d9aff', 10, 2, 480, '2023-05-01 19:38:13'),
('850ab0526bcb9a10aa88bd183de872ab', 11, 2, 1280, '2023-05-01 18:40:41'),
('89bb82d24168c5a19b230e043baad003', 11, 2, 1000, '2023-04-28 12:44:37'),
('89ebacb843e61a33e8ecc5f6f65fddc3', 11, 2, 1200, '2023-04-26 18:13:02'),
('8e3849125a80002232807d93d09dbee6', 11, 2, 1150, '2023-04-26 18:17:12'),
('943e0303c5c8848d29683d0029fdfbd9', 9, 2, 880, '2023-05-01 21:52:01'),
('96078df0ca1fd72d5dd6f149b0fd6e9e', 11, 2, 10, '2023-04-28 09:28:00'),
('9a987322d5db17f7ac6657d04f61f3cc', 11, 2, 1150, '2023-04-26 18:17:10'),
('9b7ca1e58f111fc9fabb9370c95fef68', 10, 2, 500, '2023-05-01 19:43:46'),
('9cd1a2a6bf1e8c4fc1d8b885b08aa969', 10, 2, 530, '2023-05-01 19:43:54'),
('9dd2ff4d04b76dd20f6eb594b87e94a3', 11, 2, 1100, '2023-04-26 18:13:36'),
('a8cba297d8b67fac97c1d0f5faff138f', 11, 2, 1260, '2023-04-28 12:47:29'),
('ac15552872b74af000c46887a10a4ffb', 11, 2, 1260, '2023-04-28 12:49:45'),
('ae06eca715afd83526bf026026935921', 7, 12, 250, '2023-05-01 18:37:01'),
('b056369ffbbc2d2e1a50b2a724ec9fe2', 11, 2, 1260, '2023-04-28 12:46:53'),
('b2679bf41c173616498d528b6ca34ca5', 10, 2, 630, '2023-05-01 21:53:14'),
('b40a336fdd8f3fdd0a0d21efd2981129', 11, 2, 1150, '2023-04-26 18:16:07'),
('b5acde0ed511091d1442752ee06087b3', 11, 2, 1500, '2023-05-01 19:33:01'),
('b7715902771204be4739fb06dd262f7f', 10, 2, 550, '2023-05-01 21:50:23'),
('b9756e291c89f7b9bc38da4a5928c45c', 10, 2, 800, '2023-04-26 20:16:23'),
('bc7c3f7d34301a692f44937ad02e7d72', 11, 2, 1000, '2023-04-26 18:40:45'),
('c346e40ac61a1a60d8ff7a1600013cf5', 11, 2, 1300, '2023-05-01 18:47:19'),
('c9844fc22eee34c97a1d7171e1986508', 11, 2, 1260, '2023-04-28 12:48:08'),
('cb279aa32cf88448fbdb07dec73465fc', 10, 2, 400, '2023-05-01 19:30:39'),
('cfff1a0f61d5ddce375decd22e3c4dde', 11, 2, 1150, '2023-04-26 18:17:25'),
('d15e4581fb89bcf1dda53c37eb53f22f', 10, 2, 340, '2023-04-26 20:22:01'),
('d4894a51a14d362d51733051c6a00b09', 10, 2, 500, '2023-04-26 20:17:34'),
('d4b718eb56dfb7e585501bc61eb4e38c', 11, 2, 1150, '2023-04-26 18:14:02'),
('d59b4083988d8b064a3fc053a1ea3228', 11, 2, 1340, '2023-05-01 18:49:11'),
('d9d57eebcc14392db16914812011fe01', 10, 2, 430, '2023-05-01 19:35:26'),
('dfb57afadbc71b53199ab5a77412ebea', 11, 2, 1260, '2023-04-28 12:47:39'),
('e561327e318d078d08ee012a3f6a564d', 11, 2, 1260, '2023-04-28 12:53:17'),
('e66ed5a43bca3af19087786ed4e827c9', 11, 2, 1380, '2023-05-01 18:50:34'),
('f845b093b88750fb59a9cdf2be010c9f', 9, 2, 900, '2023-05-01 22:15:57'),
('fa87613db9e407f3ab3a653ce1a09852', 11, 2, 1260, '2023-04-28 13:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `capacity`
--

CREATE TABLE `capacity` (
  `weight` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `capacity`
--

INSERT INTO `capacity` (`weight`) VALUES
('10000KG'),
('1000KG'),
('100KG'),
('2000KG'),
('200KG'),
('5000KG'),
('500KG'),
('50KG');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `location` varchar(1000) NOT NULL,
  `order_code` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`first_name`, `last_name`, `address`, `contact_number`, `id`, `longitude`, `latitude`, `location`, `order_code`) VALUES
('pamith', 'welikala', '30/1/A High level Road Meegoda', '771674022', 180, 80.01828950117186, 6.828959157721786, '', '7831219274c6fcef417e0c3af14120b0'),
('pamith', 'welikala', '30/1/A High level Road Meegoda', '771674022', 181, 80.01828950117186, 6.828959157721786, '', '400efd5b294c35c25df6d72f3f60febf');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `city_name`) VALUES
(1, 1, 'Hambantota'),
(2, 1, 'Mathara'),
(3, 2, 'Mumbai'),
(4, 2, 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `continents`
--

CREATE TABLE `continents` (
  `id` int(11) NOT NULL,
  `ContinentName` varchar(200) NOT NULL,
  `continent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `continents`
--

INSERT INTO `continents` (`id`, `ContinentName`, `continent_id`) VALUES
(1, 'Southern', 1),
(2, 'Eastern', 2);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `createbid`
--

CREATE TABLE `createbid` (
  `post_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `exp` date NOT NULL,
  `bid_end_date` date NOT NULL,
  `hours` int(11) NOT NULL DEFAULT 12,
  `minutes` int(11) NOT NULL DEFAULT 0,
  `day` text NOT NULL DEFAULT 'am',
  `initial_price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `amount_type` text NOT NULL,
  `bid_range` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` int(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `current_value` int(11) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'enable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district`) VALUES
(2, 'Ampara'),
(3, 'Anuradhapura'),
(4, 'Badulla'),
(5, 'Batticaloa'),
(6, 'Colombo'),
(7, 'Galle'),
(8, 'Gampaha'),
(9, 'Hambantota'),
(10, 'Jaffna'),
(11, 'Kalutara'),
(12, 'Kandy'),
(13, 'Kegalla'),
(14, 'Kilinochchi'),
(15, 'Kurunegala'),
(16, 'Mannar'),
(17, 'Matale'),
(18, 'Matara'),
(19, 'Monaragala'),
(20, 'Mullaitive'),
(21, 'Nuwara Eliya'),
(22, 'Polonnaruwa'),
(23, 'Puttalam'),
(24, 'Ratnapura'),
(25, 'Trincomalee'),
(26, 'Vavuniya');

-- --------------------------------------------------------

--
-- Table structure for table `dis_user`
--

CREATE TABLE `dis_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `final_bidding`
--

CREATE TABLE `final_bidding` (
  `post_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `bidding_number` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final_bidding`
--

INSERT INTO `final_bidding` (`post_id`, `buyer_id`, `amount`, `bidding_number`) VALUES
(9, 2, 0, 'f845b093b88750fb59a9cdf2be010c9f'),
(10, 2, 0, '0f65ef342f48ffa7276b2606d4af3e70');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `date` varchar(128) NOT NULL,
  `item` varchar(255) NOT NULL,
  `amount` varchar(128) NOT NULL,
  `fro` varchar(255) NOT NULL,
  `too` varchar(255) NOT NULL,
  `fee` int(30) NOT NULL,
  `vtype` varchar(128) NOT NULL,
  `quantity` int(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `buyer`, `date`, `item`, `amount`, `fro`, `too`, `fee`, `vtype`, `quantity`, `status`) VALUES
(1, 'Rushin', '2022-12-05', 'Banana', '1500', 'Tangalle', 'Ambalantota', 200, 'Lorry', 2, 2),
(3, 'Janith', '2020-3-5', 'mango', '200', 'gampaha', 'rathmalana', 20, 'bike', 4000, 2),
(4, 'Nadun', '2023-9-10', 'Pineapple', '2000KG', 'mirissa', 'mathara', 400, 'lorry', 2000, 1),
(5, 'Charith', '2024-9-6', 'Orange', '900KG', 'Katuwana', 'Walasmulla', 300, 'dimo batta', 10000, 1),
(7, 'Praneeth Jayarathne', '2023-06-10', 'Beet', '2000KG', 'Rathnapura', 'Colombo', 500, 'Lorray', 1000, 0),
(8, 'Pamith Welikala', '2023-01-12', 'Potato', '20000', 'Homagama', 'Polonnaruwa', 1000, 'Dimo Batta', 5000, 0),
(9, 'Dulashi Arunoda', '2023-02-05', 'Spinach', '1000', 'Walasmulla', 'Colombo', 700, 'Dimo Batta', 500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `post_id` int(11) DEFAULT NULL,
  `item_id` bigint(20) NOT NULL,
  `maximum_rental_price` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `del_fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`post_id`, `item_id`, `maximum_rental_price`, `name`, `type`, `del_fee`) VALUES
(NULL, 14, 100, 'mango', 'fruit', 100),
(NULL, 15, 500, 'apple', 'fruit', 50),
(NULL, 16, 200, 'carrot', 'vegetable', 150),
(NULL, 17, 80, 'beans', 'vegetable', 50),
(NULL, 18, 300, 'brinjol', 'vegetable', 250);

-- --------------------------------------------------------

--
-- Table structure for table `item1`
--

CREATE TABLE `item1` (
  `id` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `mrp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item1`
--

INSERT INTO `item1` (`id`, `name`, `type`, `mrp`) VALUES
(3, 'mango', 'fruit', 200),
(4, 'pumpkin', 'vegetable', 300),
(5, 'papaw', 'fruit', 250),
(6, 'egg plant', 'vegetable', 80),
(7, 'banana', 'fruit', 100),
(8, 'beans', 'vegetable', 220);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 11, 2, 'hi'),
(2, 2, 11, 'hi'),
(3, 11, 2, 'Hello'),
(4, 11, 2, 'Hello'),
(5, 11, 2, 'innawada'),
(6, 2, 12, 'adooo'),
(7, 12, 2, 'kohomda'),
(8, 12, 2, 'innawa suuda'),
(9, 2, 12, 'thada thada'),
(12, 2, 12, 'adooo'),
(13, 2, 12, 'ada use birthday ne ?'),
(14, 12, 2, 'set na mm asa na ubata'),
(15, 12, 2, ':('),
(16, 2, 12, 'hi'),
(17, 12, 2, 'hi'),
(18, 12, 2, 'huthhoo'),
(19, 2, 12, 'adoooo'),
(20, 12, 2, 'hi'),
(21, 12, 2, 'huthooo'),
(22, 3, 2, 'lk'),
(23, 12, 2, 'hi'),
(24, 12, 2, 'huthooo'),
(25, 12, 2, 'hi'),
(26, 12, 2, 'gay monty'),
(27, 4, 2, 'sdss'),
(28, 6, 2, 'adooo'),
(29, 6, 2, 'kohomada mata patta kamalii'),
(30, 5, 2, 'adoooo'),
(31, 2, 12, 'hiiiiii'),
(32, 12, 2, 'jijij'),
(33, 2, 12, 'ririririr'),
(34, 6, 2, 'adooo'),
(35, 6, 2, 'hiiii'),
(36, 4, 2, 'ghg'),
(37, 5, 2, 'dfdfd'),
(38, 2, 12, 'hii'),
(39, 12, 2, 'hondai'),
(40, 12, 2, 'hiii'),
(41, 12, 2, 'hiiiiiiiiiiiiiiiiiiiii'),
(42, 3, 2, 'huthooooooooooooooo'),
(43, 3, 2, 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `user_id`, `date`, `time`, `description`) VALUES
(26, 2, '2023-02-20', '16:58:35', 'You have accepted pamith welikala Request'),
(27, 2, '2023-02-20', '16:58:39', 'You have accepted Praneeth Jayarathna Request'),
(28, 2, '2023-02-21', '12:38:17', 'You have accepted Pamith Welikala Request');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `buy_id` bigint(20) NOT NULL,
  `order_code` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `del_price` int(11) NOT NULL,
  `qua` int(11) NOT NULL,
  `tot` int(11) NOT NULL,
  `distance` int(11) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `contact_number` varchar(10) DEFAULT NULL,
  `del_id` bigint(20) DEFAULT NULL,
  `post_id` bigint(20) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `del_method` varchar(100) NOT NULL,
  `cart` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `exp` date NOT NULL,
  `placed_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `buy_id`, `order_code`, `price`, `del_price`, `qua`, `tot`, `distance`, `city`, `contact_number`, `del_id`, `post_id`, `unit`, `item_name`, `del_method`, `cart`, `image`, `exp`, `placed_on`) VALUES
(347, 2, '7831219274c6fcef417e0c3af14120b0', 300, 0, 1, 300, 72, NULL, NULL, NULL, 62, 'KG', 'beans', 'pickup', 0, '6459e5d31fe23.jpg', '2023-05-12', '2023-05-09'),
(348, 2, '400efd5b294c35c25df6d72f3f60febf', 300, 500, 1, 800, 72, NULL, NULL, NULL, 62, 'KG', 'beans', 'delper', 0, '6459e5d31fe23.jpg', '2023-05-12', '2023-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `postitem`
--

CREATE TABLE `postitem` (
  `post_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `item_id` bigint(100) NOT NULL,
  `item_type` varchar(100) NOT NULL,
  `exp` date NOT NULL,
  `unit` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `stock_size` int(11) NOT NULL,
  `stock_size1` varchar(10) NOT NULL,
  `discount` int(11) NOT NULL,
  `discount1` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `platitude` double NOT NULL,
  `plongitude` double NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `sold_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postitem`
--

INSERT INTO `postitem` (`post_id`, `user_id`, `item_id`, `item_type`, `exp`, `unit`, `price`, `size`, `stock_size`, `stock_size1`, `discount`, `discount1`, `Address`, `district`, `city`, `location`, `platitude`, `plongitude`, `image`, `description`, `sold_on`) VALUES
(62, 3, 17, 'vegetable', '2023-05-12', 'KG', 300, 1, 16, 'KG', 10, '%', 'flower road, rathnapura', 'Ratnapura', 'rathnapura', 'P9RW+X7 Ratnapura, Sri Lanka', 6.742398018002325, 80.39572082812501, '6459e5d31fe23.jpg', 'good stuff', NULL),
(63, 2, 14, 'fruit', '2023-05-26', 'KG', 500, 2, 24, 'KG', 5, '%', 'maligawatta road, maradana', 'Colombo', 'colombo', 'Maradana, Colombo, Sri Lanka', 6.922409099999999, 79.8660836, '6459ea55097e8.jpg', 'patta mango', NULL),
(65, 2, 18, 'vegetable', '2023-05-31', 'KG', 400, 2, 10, 'KG', 10, '%', 'yaka wanguwa, matara', '', 'Matara', '43 New Ln, Matara, Sri Lanka', 5.9503138464007925, 80.55303270957032, '6459f59515928.jpg', 'patta brinjol', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registerd_user`
--

CREATE TABLE `registerd_user` (
  `user_id` bigint(20) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `address` text NOT NULL,
  `contact_number` int(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(255) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `platitude` double NOT NULL,
  `plongitude` double NOT NULL,
  `seller` tinyint(1) DEFAULT 0,
  `buyer` tinyint(1) NOT NULL DEFAULT 0,
  `deliver` tinyint(1) NOT NULL DEFAULT 0,
  `token` varchar(50) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT '63f8dac81529e.jpg 	',
  `description` longtext DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Not Online'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerd_user`
--

INSERT INTO `registerd_user` (`user_id`, `first_name`, `last_name`, `address`, `contact_number`, `email`, `password`, `city`, `district`, `location`, `platitude`, `plongitude`, `seller`, `buyer`, `deliver`, `token`, `image`, `description`, `status`) VALUES
(2, 'pamith', 'welikala', '30/1/A High level Road Meegoda', 771674022, 'pamithwelikala@gmail.com', 'cadb142cf2ac4fe9aff072abd70f19da', 'nugegoda', '', 'R2H9+H8 Homagama, Sri Lanka', 6.828959157721786, 80.01828950117186, 1, 0, 0, '6120', '6455eea514bd7.jpg', '', 'Active Now'),
(3, 'Praneeth', 'Jayarathna', '40/1/B rathnapura Road Rathnapura', 776098615, 'praneeth@gmail.com', 'Pranneth', 'Rathnapura', '', '', 0, 0, 0, 1, 0, '6416', '63f8dac81529e.jpg', '', 'Not Online'),
(4, 'sachin', 'umayangana', '50/2/A Kirulapana Road Nugegoda', 764138580, 'sachinumayangana@gmail.com', 'Sachin123', 'Nugegoda', '', '', 0, 0, 0, 1, 0, '4646', '63f8dac81529e.jpg', '', 'Not Online'),
(5, 'vimukthi', 'dulnath', '55/1 palanwaththa kirulapana', 763204215, 'vimukthi@gmail.com', 'Dulnath', 'Kottawa', '', '', 0, 0, 0, 1, 0, '2853', '63f8dac81529e.jpg', '', 'Not Online'),
(6, 'rushin', 'sandeepa', '80/5 Galle Road Hambanthota', 703329164, 'Rushin@gmail.com', 'rushin123', 'Hambanthota', '', '', 0, 0, 0, 1, 1, '0', '63f8dac81529e.jpg', '', 'Not Online'),
(7, 'saneru', 'akarawita', '60/1/C high level road homagama', 770338069, 'saneruakarawita@gmail.com', 'Saneru123', 'Homagama', '', '', 0, 0, 0, 0, 0, '', '63f8dac81529e.jpg', '', 'Not Online'),
(8, 'Dinuka', 'Ashan', '7/1/C highlevel Road Meegoda', 714872852, 'dinukaashan@gmail.com', 'Dinuka123', 'Godagama', '', '', 0, 0, 1, 0, 0, '', '63f8dac81529e.jpg', '', 'Not Online'),
(9, 'pamith', 'Minthaka', '40/5/5 highlevel road rathnapura', 772776406, 'pamithrox@gmail.com', 'pamith', 'Colombo', '', '', 0, 0, 1, 0, 0, '', '63f8dac81529e.jpg', '', 'Not Online'),
(10, 'menura', 'melaka', 'menura@gmail.com', 763714756, 'menura@gmail.com', '440952a1c7f1a17f1cf6c9e12563040f', 'homagama', '', '', 0, 0, 1, 0, 0, '', '63f8dac81529e.jpg', '', 'Not Online'),
(11, 'ramith', 'welikala', 'flower road, rathnapura', 771674022, 'pamith@gmail.com', 'cadb142cf2ac4fe9aff072abd70f19da', 'colombo', '', '', 0, 0, 1, 0, 0, '', '63f9af41e8e6d.jpeg', '', 'Not Online'),
(12, 'Saneru', ' Udana', 'Hande inne Hande', 770338069, 'abc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'kahatagasdigiliya', '', '', 0, 0, 1, 0, 0, NULL, '63f8dac81529e.jpg 	', '', 'Not Online');

-- --------------------------------------------------------

--
-- Table structure for table `reported_deliverers`
--

CREATE TABLE `reported_deliverers` (
  `id` int(11) NOT NULL,
  `buyer_id` bigint(20) NOT NULL,
  `deliverer_id` bigint(20) NOT NULL,
  `reason` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reported_deliverers`
--

INSERT INTO `reported_deliverers` (`id`, `buyer_id`, `deliverer_id`, `reason`) VALUES
(1, 8, 9, 'very bad'),
(2, 3, 6, 'very naughty');

-- --------------------------------------------------------

--
-- Table structure for table `reported_sellers`
--

CREATE TABLE `reported_sellers` (
  `id` int(11) NOT NULL,
  `buyer_id` bigint(20) NOT NULL,
  `seller_id` bigint(20) NOT NULL,
  `reason` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reported_sellers`
--

INSERT INTO `reported_sellers` (`id`, `buyer_id`, `seller_id`, `reason`) VALUES
(1, 4, 10, 'bad bad'),
(2, 2, 5, 'poor goods');

-- --------------------------------------------------------

--
-- Table structure for table `request_item`
--

CREATE TABLE `request_item` (
  `post_id` bigint(20) NOT NULL,
  `seller_id` bigint(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `platitude` double NOT NULL,
  `plongitude` double NOT NULL,
  `contact` int(11) NOT NULL,
  `approved` int(1) NOT NULL DEFAULT 0,
  `approved_userid` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_item`
--

INSERT INTO `request_item` (`post_id`, `seller_id`, `item_id`, `amount`, `unit`, `date`, `address`, `city`, `location`, `platitude`, `plongitude`, `contact`, `approved`, `approved_userid`) VALUES
(10, 3, 15, 30, 'KG', '2023-01-25', '50/1 galle Road colombo5', 'Colombo', '', 0, 0, 718333864, 0, 0),
(11, 2, 16, 80, 'KG', '2023-02-23', '30/1/A nuwara Road Gampaha', 'gampaha', '', 0, 0, 771674022, 1, 2),
(13, 11, 17, 1, 'KG', '2022-12-19', '90/5 galleRoad Colombo 10', 'colombo', '', 0, 0, 112750684, 1, 2),
(14, 4, 18, 2, 'KG', '2022-12-21', '50/1 galle Road colombo5', 'Colombo', '', 0, 0, 998765322, 0, 0),
(16, 11, 14, 1, 'KG', '2022-12-21', 'aolombo', 'colombo', '', 0, 0, 112345678, 0, 0),
(39, 12, 16, 400, 'KG', '2023-03-11', '50/5 padukka Rd Madulawa', 'padukka', '', 0, 0, 718333864, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `vnumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `cnum` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_requestitem`
--

CREATE TABLE `user_requestitem` (
  `user_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `disprove` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_requestitem`
--

INSERT INTO `user_requestitem` (`user_id`, `post_id`, `disprove`) VALUES
(2, 39, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`name`) VALUES
('Lorry'),
('Motocycle'),
('Three Wheel'),
('Van');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle1`
--

CREATE TABLE `vehicle1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle1`
--

INSERT INTO `vehicle1` (`id`, `name`, `cost`) VALUES
(1, 'lorry', 100),
(2, 'van', 50);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `post_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `added_on` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`post_id`, `user_id`, `added_on`, `time`) VALUES
(58, 2, '2023-05-07', '23:55:34'),
(62, 2, '2023-05-09', '20:39:43'),
(65, 12, '2023-05-09', '21:15:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`bidding_number`);

--
-- Indexes for table `capacity`
--
ALTER TABLE `capacity`
  ADD UNIQUE KEY `weight` (`weight`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_code` (`order_code`(768));

--
-- Indexes for table `createbid`
--
ALTER TABLE `createbid`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `district` (`district`);

--
-- Indexes for table `dis_user`
--
ALTER TABLE `dis_user`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `final_bidding`
--
ALTER TABLE `final_bidding`
  ADD PRIMARY KEY (`post_id`,`buyer_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `item1`
--
ALTER TABLE `item1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `con2` (`buy_id`),
  ADD KEY `con24` (`del_id`),
  ADD KEY `buy_con` (`contact_number`),
  ADD KEY `buy_addre` (`order_code`(768)),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `unit` (`unit`),
  ADD KEY `del_method` (`del_method`),
  ADD KEY `cart` (`cart`),
  ADD KEY `image` (`image`),
  ADD KEY `exp` (`exp`),
  ADD KEY `placed_on` (`placed_on`);

--
-- Indexes for table `postitem`
--
ALTER TABLE `postitem`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `item_fk` (`item_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_type` (`item_type`);

--
-- Indexes for table `registerd_user`
--
ALTER TABLE `registerd_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `reported_deliverers`
--
ALTER TABLE `reported_deliverers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `con8` (`buyer_id`),
  ADD KEY `con9` (`deliverer_id`);

--
-- Indexes for table `reported_sellers`
--
ALTER TABLE `reported_sellers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `con10` (`buyer_id`),
  ADD KEY `con11` (`seller_id`);

--
-- Indexes for table `request_item`
--
ALTER TABLE `request_item`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_requestitem`
--
ALTER TABLE `user_requestitem`
  ADD PRIMARY KEY (`user_id`,`post_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `vehicle1`
--
ALTER TABLE `vehicle1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`post_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `createbid`
--
ALTER TABLE `createbid`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `item1`
--
ALTER TABLE `item1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- AUTO_INCREMENT for table `postitem`
--
ALTER TABLE `postitem`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `registerd_user`
--
ALTER TABLE `registerd_user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reported_deliverers`
--
ALTER TABLE `reported_deliverers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reported_sellers`
--
ALTER TABLE `reported_sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request_item`
--
ALTER TABLE `request_item`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle1`
--
ALTER TABLE `vehicle1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dis_user`
--
ALTER TABLE `dis_user`
  ADD CONSTRAINT `con4` FOREIGN KEY (`id`) REFERENCES `district` (`id`),
  ADD CONSTRAINT `con5` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `postitem`
--
ALTER TABLE `postitem`
  ADD CONSTRAINT `con1` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `con2` FOREIGN KEY (`user_id`) REFERENCES `registerd_user` (`user_id`),
  ADD CONSTRAINT `con3` FOREIGN KEY (`item_type`) REFERENCES `item` (`type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reported_deliverers`
--
ALTER TABLE `reported_deliverers`
  ADD CONSTRAINT `con8` FOREIGN KEY (`buyer_id`) REFERENCES `registerd_user` (`user_id`),
  ADD CONSTRAINT `con9` FOREIGN KEY (`deliverer_id`) REFERENCES `registerd_user` (`user_id`);

--
-- Constraints for table `reported_sellers`
--
ALTER TABLE `reported_sellers`
  ADD CONSTRAINT `con10` FOREIGN KEY (`buyer_id`) REFERENCES `registerd_user` (`user_id`),
  ADD CONSTRAINT `con11` FOREIGN KEY (`seller_id`) REFERENCES `registerd_user` (`user_id`);

--
-- Constraints for table `user_requestitem`
--
ALTER TABLE `user_requestitem`
  ADD CONSTRAINT `user_requestitem_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registerd_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_requestitem_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `request_item` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
