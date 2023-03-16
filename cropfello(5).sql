-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2023 at 06:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `buyerbidding`
--

CREATE TABLE `buyerbidding` (
  `post_id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `bidvalue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `capacity`
--

CREATE TABLE `capacity` (
  `weight` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `current_value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `createbid`
--

INSERT INTO `createbid` (`post_id`, `seller_id`, `item_id`, `item_type`, `exp`, `bid_end_date`, `hours`, `minutes`, `day`, `initial_price`, `amount`, `amount_type`, `bid_range`, `address`, `postal_code`, `city`, `image`, `buyer_id`, `current_value`) VALUES
(7, 2, 2, 'Vegitable', '2023-04-10', '2023-03-06', 6, 10, 'am', 200, 10, 'KG', 20, '30/2/A High level Road Meegoda', 10504, 'Colombo', '640adfff2bb28.jpg', NULL, 200),
(8, 2, 2, 'Vegitable', '2023-04-10', '2023-03-06', 6, 10, 'am', 200, 10, 'KG', 20, '30/2/A High level Road Meegoda', 10504, 'Colombo', '640ae04f2c4ef.jpg', NULL, 200);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(27, 4, 2, 'sdss');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `user_id`, `date`, `time`, `description`) VALUES
(26, 2, '2023-02-20', '16:58:35', 'You have accepted pamith welikala Request'),
(27, 2, '2023-02-20', '16:58:39', 'You have accepted Praneeth Jayarathna Request'),
(28, 2, '2023-02-21', '12:38:17', 'You have accepted Pamith Welikala Request');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postitem`
--

INSERT INTO `postitem` (`post_id`, `user_id`, `item_id`, `item_type`, `exp`, `unit`, `price`, `size`, `stock_size`, `stock_size1`, `discount`, `discount1`, `Address`, `postalcode`, `city`, `image`, `description`) VALUES
(25, 11, 1, 'vegitable', '0000-00-00', 'KG    ', 600, 100, 20, 'KG', 17, '%', '30/1/A High level road Meegoda', 10504, 'Colombo', '63848231979f1.jpg', 'available'),
(26, 11, 2, 'vegitable', '2000-11-25', 'KG', 20000, 200, 50, 'KG', 20, '%', '38/1/A High level road Meegoda', 50687, 'Nuwara', '638482aaf3e32.jpg', 'vghghcfcghcgf'),
(27, 3, 3, 'fruit', '2000-07-20', 'KG', 50000, 1000, 100, 'KG', 25, '%', '30/1/A nuwara Road Gampaha', 90508, 'Katugasthota', '638483221a3a1.jpg', 'good apples'),
(28, 2, 4, 'fruit', '0000-00-00', 'kg', 600, 5, 20, 'KG', 15, '%', '30/1/A High level road kalubowila', 10509, 'waththegedara', '6384d86b4fd0b.jpg', 'dfdfdf'),
(30, 6, 0, 'vegitable', '0000-00-00', 'KG', 350, 1000, 100, 'KG', 30, '%', '34/5 nawala nuwaraeliya', 45698, 'NuwaraEliya', '6387fa702854c.jpeg', 'sdsdsdsdsdss'),
(31, 3, 5, 'vegitable', '0000-00-00', 'KG', 800, 900, 100, 'KG', 5, '%', '90/5 galleRoad Colombo 10', 10908, 'Colombo', '6387fbd2da471.jpg', 'galle'),
(32, 5, 8, 'fruit', '0000-00-00', 'TREES', 10000, 80, 5, 'KG', 0, '%', '30/1/A High level road Meegoda', 60908, 'thissamaharama', '6387fcca0857e.jpeg', 'a good condition mango'),
(34, 11, 8, 'fruit', '0000-00-00', 'TREES', 800, 10, 1, 'KG', 5, '%', '30/9 madulawa road galle', 10908, 'galle', '6388007b3ca56.jpeg', 'ghgfhfhgfghfhg'),
(35, 3, 0, 'vegitable', '0000-00-00', 'KG', 80, 600, 100, 'KG', 27, '%', '60?15 flower Road Peradeniya', 90603, 'Peradeniya', '63880231b227d.jpeg', 'sdsdsdssds'),
(37, 3, 3, 'friut', '2023-01-19', 'TREES', 10000, 5, 1, 'TREES', 9, '%', '30/9 madulawa road galle', 90807, 'haputhale', '639b543478bea.jpg', 'good Apples are Available'),
(38, 11, 6, 'vegitable', '2023-02-17', 'KG', 8000, 20, 200, 'KG', 5, '%', '40/5/A  polgasowita road piliyandala', 90763, 'homagma', '639b55784bf5e.jpg', 'a good raddish'),
(39, 2, 8, 'fruit', '2023-01-27', 'TREES', 9000, 10, 100, 'KG', 2, '%', '30/9 madulawa road galle', 20401, 'Mathara', '639baad46bc0c.jpeg', 'sdsadsdasd'),
(41, 11, 2, 'Vegitable', '2023-03-11', 'TREES', 700, 1, 40, 'KG', 10, '%', '30/1/A high level Road meegoda', 10504, 'Colombo', '63f703544b6db.jpg', 'good qulity vegitables directly imported from Nuwara Eliya'),
(43, 6, 0, 'Vegitable', '2023-03-25', 'KG', 250, 1, 20, 'KG', 15, '%', '40/2 Jaffna Rd Jaffana 2', 14533, 'Jaffna', '63f705f62c2bd.jpeg', 'good qulity vegitables directly imported from India');

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
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Not Online'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registerd_user`
--

INSERT INTO `registerd_user` (`user_id`, `first_name`, `last_name`, `address`, `contact_number`, `email`, `password`, `postal_code`, `city`, `seller`, `buyer`, `deliver`, `token`, `image`, `description`, `status`) VALUES
(2, 'Pamith', 'Welikala', '30/1/A High Level Rd Meegoda', 771674022, 'pamithwelikala@gmail.com', 'cadb142cf2ac4fe9aff072abd70f19da', 10504, 'Colombo', 1, 0, 0, '6120', '63f9af41e8e6d.jpeg', '', 'Active Now'),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_item`
--

INSERT INTO `request_item` (`post_id`, `seller_id`, `item_id`, `amount`, `unit`, `date`, `address`, `postal_code`, `city`, `contact`, `approved`, `approved_userid`) VALUES
(7, 3, 7, 89, 'KG', '2022-12-23', '30/1/A High level road kalubowila', 90807, 'Colombo', 77968547, 0, 0),
(8, 5, 1, 90, 'KG', '2022-12-30', '30/1/A High level road Meegoda', 10504, 'colombo', 771674022, 0, 0),
(10, 3, 6, 30, 'KG', '2023-01-25', '50/1 galle Road colombo5', 30506, 'Colombo', 718333864, 0, 0),
(11, 3, 2, 80, 'KG', '2023-02-23', '30/1/A nuwara Road Gampaha', 30250, 'gampaha', 771674022, 1, 2),
(13, 11, 0, 1, 'KG', '2022-12-19', '90/5 galleRoad Colombo 10', 12345, 'colombo', 112750684, 1, 2),
(14, 4, 1, 2, 'KG', '2022-12-21', '50/1 galle Road colombo5', 1111, 'Colombo', 998765322, 0, 0),
(15, 5, 0, 1, 'KG', '2022-12-21', 'aolombo', 1111, 'colombo', 112345678, 0, 0),
(16, 11, 0, 1, 'KG', '2022-12-21', 'aolombo', 1111, 'colombo', 112345678, 0, 0),
(36, 12, 2, 300, 'Kg', '2023-02-17', '30/1/ a jdhbbdfbdfhdb', 67543, 'Homagama', 772776406, 0, 0),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`post_id`, `user_id`, `added_on`, `time`) VALUES
(34, 2, '2023-02-25', '11:56:24'),
(41, 2, '2023-03-08', '09:37:39'),
(43, 2, '2023-03-08', '17:15:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyerbidding`
--
ALTER TABLE `buyerbidding`
  ADD PRIMARY KEY (`post_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `capacity`
--
ALTER TABLE `capacity`
  ADD UNIQUE KEY `weight` (`weight`);

--
-- Indexes for table `createbid`
--
ALTER TABLE `createbid`
  ADD PRIMARY KEY (`post_id`);

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `postitem`
--
ALTER TABLE `postitem`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
-- Constraints for table `buyerbidding`
--
ALTER TABLE `buyerbidding`
  ADD CONSTRAINT `buyerbidding_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `createbid` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buyerbidding_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `registerd_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
