-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 01:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
  `order_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Dumping data for table `createbid`
--

INSERT INTO `createbid` (`post_id`, `seller_id`, `item_id`, `item_type`, `exp`, `bid_end_date`, `hours`, `minutes`, `day`, `initial_price`, `amount`, `amount_type`, `bid_range`, `address`, `postal_code`, `city`, `image`, `buyer_id`, `current_value`, `status`) VALUES
(7, 2, 2, 'Vegitable', '2023-08-10', '2023-08-06', 6, 10, 'am', 200, 10, 'KG', 20, '30/2/A High level Road Meegoda', 10504, 'Colombo', '640adfff2bb28.jpg', 12, 250, 'enable'),
(9, 12, 8, 'Fruit', '2023-04-10', '2023-04-04', 3, 25, 'pm', 450, 20, 'KG', 20, 'NO 30/1/A , HIGH LEVEL ROAD', 10504, 'MEEGODA', '6433ade3069fe.jpeg', 2, 900, 'enable'),
(10, 12, 1, 'vegitable', '2023-06-12', '2023-05-22', 4, 15, 'pm', 200, 1, 'KG', 20, 'NO 30/1/A , HIGH LEVEL ROAD', 10504, 'MEEGODA', '6433b0cd552e1.jpg', 2, 650, 'enable'),
(11, 12, 5, 'vegitable', '2023-05-21', '2023-05-10', 7, 15, 'pm', 300, 10, 'KG', 20, 'NO 30/1/A , HIGH LEVEL ROAD', 10504, 'MEEGODA', '6433ca6e00233.jpg', 2, 1580, 'enable');

-- --------------------------------------------------------

--
-- Table structure for table `final_bidding`
--

CREATE TABLE `final_bidding` (
  `post_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `bidding_number` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final_bidding`
--

INSERT INTO `final_bidding` (`post_id`, `buyer_id`, `bidding_number`) VALUES
(9, 2, 'f845b093b88750fb59a9cdf2be010c9f'),
(10, 2, '0f65ef342f48ffa7276b2606d4af3e70');

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
  `post_id` int(11) NOT NULL,
  `item_id` bigint(20) NOT NULL,
  `maximum_rental_price` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`post_id`, `item_id`, `maximum_rental_price`, `name`, `type`) VALUES
(0, 0, 200, 'Brinjol', 'Vegitable'),
(1, 1, 100, 'Carrot', 'vegitable'),
(2, 2, 200, 'Beans', 'vegitable'),
(3, 3, 50, 'Apple', 'friut'),
(4, 4, 200, 'Pinnaple', 'fruit'),
(5, 5, 100, 'Cabbage', 'vegitable'),
(6, 6, 50, 'Raddish', 'vegitable'),
(7, 7, 20, 'Lemon', 'fruit'),
(8, 8, 50, 'Mango', 'fruit');

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
  `address` varchar(700) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `del_price` int(11) DEFAULT NULL,
  `qua` int(11) NOT NULL,
  `tot` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `contact_number` varchar(10) DEFAULT NULL,
  `del_id` bigint(20) DEFAULT NULL,
  `postal_code` varchar(100) DEFAULT NULL,
  `post_id` bigint(20) DEFAULT NULL,
  `unit` varchar(10) NOT NULL,
  `item_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `postalcode` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postitem`
--

INSERT INTO `postitem` (`post_id`, `user_id`, `item_id`, `item_type`, `exp`, `unit`, `price`, `size`, `stock_size`, `stock_size1`, `discount`, `discount1`, `Address`, `postalcode`, `city`, `image`, `description`) VALUES
(25, 11, 1, 'vegitable', '0000-00-00', 'KG    ', 600, 100, 200, 'KG', 17, '%', '30/1/A High level road Meegoda', 10504, 'Colombo', '63848231979f1.jpg', 'available'),
(26, 11, 2, 'vegitable', '2000-11-25', 'KG', 20000, 200, 500, 'KG', 20, '%', '38/1/A High level road Meegoda', 50687, 'Nuwara', '638482aaf3e32.jpg', 'vghghcfcghcgf'),
(27, 3, 3, 'fruit', '2000-07-20', 'KG', 50000, 1000, 1000, 'KG', 25, '%', '30/1/A nuwara Road Gampaha', 90508, 'Katugasthota', '638483221a3a1.jpg', 'good apples'),
(28, 2, 4, 'fruit', '0000-00-00', 'kg', 600, 5, 20, 'KG', 15, '%', '30/1/A High level road kalubowila', 10509, 'waththegedara', '6384d86b4fd0b.jpg', 'dfdfdf'),
(30, 6, 0, 'vegitable', '0000-00-00', 'KG', 350, 1000, 1000, 'KG', 30, '%', '34/5 nawala nuwaraeliya', 45698, 'NuwaraEliya', '6387fa702854c.jpeg', 'sdsdsdsdsdss'),
(31, 3, 5, 'vegitable', '0000-00-00', 'KG', 800, 900, 1000, 'KG', 5, '%', '90/5 galleRoad Colombo 10', 10908, 'Colombo', '6387fbd2da471.jpg', 'galle'),
(32, 5, 8, 'fruit', '0000-00-00', 'TREES', 10000, 80, 500, 'KG', 0, '%', '30/1/A High level road Meegoda', 60908, 'thissamaharama', '6387fcca0857e.jpeg', 'a good condition mango'),
(34, 11, 8, 'fruit', '0000-00-00', 'TREES', 800, 10, 100, 'KG', 5, '%', '30/9 madulawa road galle', 10908, 'galle', '6388007b3ca56.jpeg', 'ghgfhfhgfghfhg'),
(35, 3, 0, 'vegitable', '0000-00-00', 'KG', 80, 600, 1000, 'KG', 27, '%', '60?15 flower Road Peradeniya', 90603, 'Peradeniya', '63880231b227d.jpeg', 'sdsdsdssds'),
(37, 3, 3, 'friut', '2023-01-19', 'TREES', 10000, 5, 10, 'TREES', 9, '%', '30/9 madulawa road galle', 90807, 'haputhale', '639b543478bea.jpg', 'good Apples are Available'),
(38, 11, 6, 'vegitable', '2023-02-17', 'KG', 8000, 20, 200, 'KG', 5, '%', '40/5/A  polgasowita road piliyandala', 90763, 'homagma', '639b55784bf5e.jpg', 'a good raddish'),
(39, 2, 8, 'fruit', '2023-01-27', 'TREES', 9000, 10, 100, 'KG', 2, '%', '30/9 madulawa road galle', 20401, 'Mathara', '639baad46bc0c.jpeg', 'sdsadsdasd'),
(41, 11, 2, 'Vegitable', '2023-03-11', 'TREES', 700, 1, 40, 'KG', 10, '%', '30/1/A high level Road meegoda', 10504, 'Colombo', '63f703544b6db.jpg', 'good qulity vegitables directly imported from Nuwara Eliya'),
(43, 6, 0, 'Vegitable', '2023-03-25', 'KG', 250, 1, 20, 'KG', 15, '%', '40/2 Jaffna Rd Jaffana 2', 14533, 'Jaffna', '63f705f62c2bd.jpeg', 'good qulity vegitables directly imported from India'),
(44, 6, 6, 'vegitable', '2023-04-14', 'KG', 80, 40, 400, 'KG', 70, '%', '30/1/A High level road Maththegoda', 10479, 'Godagama', '643ef5a1b28c6.png', '');

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
  `postal_code` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
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

INSERT INTO `registerd_user` (`user_id`, `first_name`, `last_name`, `address`, `contact_number`, `email`, `password`, `postal_code`, `city`, `seller`, `buyer`, `deliver`, `token`, `image`, `description`, `status`) VALUES
(2, 'Pamith', 'Welikala', '30/2/A High level Road Meegoda', 771674022, 'pamithwelikala@gmail.com', 'cadb142cf2ac4fe9aff072abd70f19da', 10504, 'Colombo', 1, 0, 0, '6120', '63f8dac81529e.jpg', 'Buyers are responsible for purchasing goods for a company to use or sell in their own business. This position requires extensive research and the ability to negotiate contracts with suppliers, manage an inventory, evaluate quality goods, and stick within a budget. Since these individuals work in a range of sectors, from fashion and technology to food and industry, Buyers must understand the unique needs of their particular employer. ', 'Active Now'),
(3, 'Praneeth', 'Jayarathna', '40/1/B rathnapura Road Rathnapura', 776098615, 'praneeth@gmail.com', 'Pranneth', 78936, 'Rathnapura', 0, 1, 0, '6416', '63f8dac81529e.jpg', '', 'Not Online'),
(4, 'sachin', 'umayangana', '50/2/A Kirulapana Road Nugegoda', 764138580, 'sachinumayangana@gmail.com', 'Sachin123', 69875, 'Nugegoda', 0, 1, 0, '4646', '63f8dac81529e.jpg', '', 'Not Online'),
(5, 'vimukthi', 'dulnath', '55/1 palanwaththa kirulapana', 763204215, 'vimukthi@gmail.com', 'Dulnath', 54765, 'Kottawa', 0, 1, 0, '2853', '63f8dac81529e.jpg', '', 'Not Online'),
(6, 'rushin', 'sandeepa', '80/5 Galle Road Hambanthota', 703329164, 'Rushin@gmail.com', 'rushin123', 25487, 'Hambanthota', 0, 1, 1, '0', '63f8dac81529e.jpg', '', 'Not Online'),
(7, 'saneru', 'akarawita', '60/1/C high level road homagama', 770338069, 'saneruakarawita@gmail.com', 'Saneru123', 98798, 'Homagama', 0, 0, 0, '', '63f8dac81529e.jpg', '', 'Not Online'),
(8, 'Dinuka', 'Ashan', '7/1/C highlevel Road Meegoda', 714872852, 'dinukaashan@gmail.com', 'Dinuka123', 14235, 'Godagama', 1, 0, 0, '', '63f8dac81529e.jpg', '', 'Not Online'),
(9, 'pamith', 'Minthaka', '40/5/5 highlevel road rathnapura', 772776406, 'pamithrox@gmail.com', 'pamith', 97845, 'Colombo', 1, 0, 0, '', '63f8dac81529e.jpg', '', 'Not Online'),
(10, 'menura', 'melaka', 'menura@gmail.com', 763714756, 'menura@gmail.com', '440952a1c7f1a17f1cf6c9e12563040f', 10504, 'homagama', 1, 0, 0, '', '63f8dac81529e.jpg', '', 'Not Online'),
(11, 'ramith', 'welikala', '30/1/A High level Road Meegoda', 771674022, 'pamith@gmail.com', 'cadb142cf2ac4fe9aff072abd70f19da', 10504, 'colombo', 1, 0, 0, '', '63f9af41e8e6d.jpeg', '', 'Not Online'),
(12, 'Saneru', ' Udana', 'Hande inne Hande', 770338069, 'abc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 69, 'kahatagasdigiliya', 1, 0, 0, NULL, '63f8dac81529e.jpg 	', '', 'Not Online');

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
  `postal_code` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `contact` int(11) NOT NULL,
  `approved` int(1) NOT NULL DEFAULT 0,
  `approved_userid` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_item`
--

INSERT INTO `request_item` (`post_id`, `seller_id`, `item_id`, `amount`, `unit`, `date`, `address`, `postal_code`, `city`, `contact`, `approved`, `approved_userid`) VALUES
(7, 2, 7, 89, 'KG', '2022-12-23', '30/1/A High level road kalubowila', 90807, 'Colombo', 77968547, 0, 0),
(10, 3, 6, 30, 'KG', '2023-01-25', '50/1 galle Road colombo5', 30506, 'Colombo', 718333864, 0, 0),
(11, 2, 2, 80, 'KG', '2023-02-23', '30/1/A nuwara Road Gampaha', 30250, 'gampaha', 771674022, 1, 2),
(13, 11, 0, 1, 'KG', '2022-12-19', '90/5 galleRoad Colombo 10', 12345, 'colombo', 112750684, 1, 2),
(14, 4, 1, 2, 'KG', '2022-12-21', '50/1 galle Road colombo5', 1111, 'Colombo', 998765322, 0, 0),
(15, 2, 0, 1, 'KG', '2022-12-21', 'aolombo', 1111, 'colombo', 112345678, 0, 0),
(16, 11, 0, 1, 'KG', '2022-12-21', 'aolombo', 1111, 'colombo', 112345678, 0, 0),
(36, 2, 2, 300, 'Kg', '2023-02-17', '30/1/ a jdhbbdfbdfhdb', 67543, 'Homagama', 772776406, 0, 0),
(38, 12, 5, 400, 'KG', '2023-03-11', '50/5 padukka Rd Madulawa', 56789, 'padukka', 718333864, 0, 0),
(39, 12, 5, 400, 'KG', '2023-03-11', '50/5 padukka Rd Madulawa', 56789, 'padukka', 718333864, 0, 0);

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
  `cnum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `vnumber`, `email`, `password_hash`, `cnum`) VALUES
(0, 'rushin', 'sandeepana', 'xyz-3020', 'ru@gmail.com', '$2y$10$85dYG0jibULm20yEH.t3cu5cHsgiDYbs5TkHQTlfxbvsi8UNkxgAO', ''),
(0, 'Jana', 'Hesha', 'ABC-2910', 'jana@gmail.com', '$2y$10$RuBqmUOvTfO.HAeZgHSSset3mRuAk1vbFCBfz5D3wcIUm72Ffsnmi', ''),
(0, 'rushin', 'sandeepana', 'ABC-2010', 'rs@gmail.com', '$2y$10$zrtpsJJ1q89Z81YNU0hX0.fLGRzEtUy1er24UJoTgM6ShM5idZS2O', '0706632221'),
(0, 'wqedwq', 'eqwrdewr', 'ABC-2910', 'rs@gmail.com', '$2y$10$DGhPqeMbAM4uwDV.wnZmZOhqziNTIPtpCaPxws24.o/AYCSp5ojXa', '0706632221');

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
(2, 38, 1),
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
(31, 2, '2023-04-14', '16:49:58'),
(34, 2, '2023-02-25', '11:56:24'),
(41, 2, '2023-03-08', '09:37:39');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `createbid`
--
ALTER TABLE `createbid`
  ADD PRIMARY KEY (`post_id`);

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
  ADD PRIMARY KEY (`item_id`);

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
  ADD KEY `postal_code` (`postal_code`),
  ADD KEY `buy_con` (`contact_number`),
  ADD KEY `buy_addre` (`address`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `unit` (`unit`);

--
-- Indexes for table `postitem`
--
ALTER TABLE `postitem`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `item_fk` (`item_id`);

--
-- Indexes for table `registerd_user`
--
ALTER TABLE `registerd_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `request_item`
--
ALTER TABLE `request_item`
  ADD PRIMARY KEY (`post_id`);

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
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`post_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `createbid`
--
ALTER TABLE `createbid`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `postitem`
--
ALTER TABLE `postitem`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `registerd_user`
--
ALTER TABLE `registerd_user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `request_item`
--
ALTER TABLE `request_item`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `postitem`
--
ALTER TABLE `postitem`
  ADD CONSTRAINT `postitem_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
