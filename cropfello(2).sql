-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 01:54 AM
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
(25, 11, 1, 'vegitable', '0000-00-00', 'KG    ', 600, 100, 20, 'KG', 17, '%', '30/1/A High level road Meegoda', 10504, 'Colombo', '63848231979f1.jpg', 'available'),
(26, 11, 2, 'vegitable', '2000-11-25', 'KG', 20000, 200, 50, 'KG', 20, '%', '38/1/A High level road Meegoda', 50687, 'Nuwara', '638482aaf3e32.jpg', 'vghghcfcghcgf'),
(27, 3, 3, 'fruit', '2000-07-20', 'KG', 50000, 1000, 100, 'KG', 25, '%', '30/1/A nuwara Road Gampaha', 90508, 'Katugasthota', '638483221a3a1.jpg', 'good apples'),
(28, 2, 4, 'fruit', '0000-00-00', 'kg', 600, 5, 20, 'KG', 15, '%', '30/1/A High level road kalubowila', 10509, 'waththegedara', '6384d86b4fd0b.jpg', 'dfdfdf'),
(30, 6, 0, 'vegitable', '0000-00-00', 'KG', 350, 1000, 100, 'KG', 30, '%', '34/5 nawala nuwaraeliya', 45698, 'NuwaraEliya', '6387fa702854c.jpeg', 'sdsdsdsdsdss'),
(31, 3, 5, 'vegitable', '0000-00-00', 'KG', 800, 900, 100, 'KG', 500, 'Rs', '90/5 galleRoad Colombo 10', 10908, 'Colombo', '6387fbd2da471.jpg', 'galle'),
(32, 5, 8, 'fruit', '0000-00-00', 'TREES', 10000, 80, 5, 'KG', 0, '%', '30/1/A High level road Meegoda', 60908, 'thissamaharama', '6387fcca0857e.jpeg', 'a good condition mango'),
(34, 11, 8, 'fruit', '0000-00-00', 'TREES', 800, 10, 1, 'KG', 5, '%', '30/9 madulawa road galle', 10908, 'galle', '6388007b3ca56.jpeg', 'ghgfhfhgfghfhg'),
(35, 3, 0, 'vegitable', '0000-00-00', 'KG', 80, 600, 100, 'KG', 27, '%', '60?15 flower Road Peradeniya', 90603, 'Peradeniya', '63880231b227d.jpeg', 'sdsdsdssds'),
(36, 6, 7, 'veg', '0000-00-00', '500', 500, 0, 40, '', 2, '', '', 0, '', '63880231b227d.jpeg', ''),
(37, 3, 3, 'friut', '2023-01-19', 'TREES', 10000, 5, 1, 'TREES', 9, '%', '30/9 madulawa road galle', 90807, 'haputhale', '639b543478bea.jpg', 'good Apples are Available'),
(38, 11, 6, 'vegitable', '2023-02-17', 'KG', 8000, 20, 200, 'KG', 5, '%', '40/5/A  polgasowita road piliyandala', 90763, 'homagma', '639b55784bf5e.jpg', 'a good raddish'),
(39, 2, 8, 'fruit', '2023-01-27', 'TREES', 9000, 10, 100, 'KG', 2, '%', '30/9 madulawa road galle', 20401, 'Mathara', '639baad46bc0c.jpeg', 'sdsadsdasd');

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
  `seller` tinyint(1) NOT NULL,
  `buyer` tinyint(1) NOT NULL,
  `deliver` tinyint(1) NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerd_user`
--

INSERT INTO `registerd_user` (`user_id`, `first_name`, `last_name`, `address`, `contact_number`, `email`, `password`, `postal_code`, `city`, `seller`, `buyer`, `deliver`, `token`) VALUES
(2, 'Pamith', 'Welikala', '30/1/A High level Road Meegoda', 771674022, 'pamithwelikala@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 10504, 'Colombo', 1, 0, 0, '2588'),
(3, 'Praneeth', 'Jayarathna', '40/1/B rathnapura Road Rathnapura', 776098615, 'praneeth@gmail.com', 'Pranneth', 78936, 'Rathnapura', 0, 1, 0, '6416'),
(4, 'sachin', 'umayangana', '50/2/A Kirulapana Road Nugegoda', 764138580, 'sachinumayangana@gmail.com', 'Sachin123', 69875, 'Nugegoda', 0, 0, 0, '4646'),
(5, 'vimukthi', 'dulnath', '55/1 palanwaththa kirulapana', 763204215, 'vimukthi@gmail.com', 'Dulnath', 54765, 'Kottawa', 0, 0, 0, '2853'),
(6, 'rushin', 'sandeepa', '80/5 Galle Road Hambanthota', 703329164, 'Rushin@gmail.com', 'rushin123', 25487, 'Hambanthota', 0, 0, 0, '0'),
(7, 'saneru', 'akarawita', '60/1/C high level road homagama', 770338069, 'saneruakarawita@gmail.com', 'Saneru123', 98798, 'Homagama', 0, 0, 0, ''),
(8, 'Dinuka', 'Ashan', '7/1/C highlevel Road Meegoda', 714872852, 'dinukaashan@gmail.com', 'Dinuka123', 14235, 'Godagama', 1, 0, 0, ''),
(9, 'pamith', 'Minthaka', '40/5/5 highlevel road rathnapura', 772776406, 'pamithrox@gmail.com', 'pamith', 97845, 'Colombo', 1, 0, 0, ''),
(10, 'menura', 'melaka', 'menura@gmail.com', 763714756, 'menura@gmail.com', '440952a1c7f1a17f1cf6c9e12563040f', 10504, 'homagama', 1, 0, 0, ''),
(11, 'pamith', 'welikala', '30/1/A High level Road Meegoda', 771674022, 'pamith@gmail.com', 'cadb142cf2ac4fe9aff072abd70f19da', 10504, 'colombo', 1, 0, 0, '');

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
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_item`
--

INSERT INTO `request_item` (`post_id`, `seller_id`, `item_id`, `amount`, `unit`, `date`, `address`, `postal_code`, `city`, `contact`) VALUES
(7, 11, 7, 89, 'KG', '2022-12-23', '30/1/A High level road kalubowila', 90807, 'Colombo', 77968547),
(8, 1, 1, 90, 'KG', '2022-12-30', '30/1/A High level road Meegoda', 10504, 'colombo', 771674022),
(9, 2, 5, 60, 'KG', '2023-01-19', '40/5/A  polgasowita road piliyandala', 80907, 'kottawa', 112750684),
(10, 11, 6, 30, 'KG', '2023-01-25', '50/1 galle Road colombo5', 30506, 'Colombo', 718333864),
(11, 11, 2, 80, 'KG', '2023-02-23', '30/1/A nuwara Road Gampaha', 30250, 'gampaha', 771674022),
(12, 1, 4, 90, 'TREES', '2023-02-09', '60/59 muthuhenawaththa para nugegoda', 50302, 'Nuwara', 112750684),
(13, 11, 0, 1, 'KG', '2022-12-19', '90/5 galleRoad Colombo 10', 12345, 'colombo', 112750684),
(14, 4, 1, 2, 'KG', '2022-12-21', '50/1 galle Road colombo5', 1111, 'Colombo', 998765322),
(15, 5, 0, 1, 'KG', '2022-12-21', 'aolombo', 1111, 'colombo', 112345678),
(16, 11, 0, 1, 'KG', '2022-12-21', 'aolombo', 1111, 'colombo', 112345678);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postitem`
--
ALTER TABLE `postitem`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `registerd_user`
--
ALTER TABLE `registerd_user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `request_item`
--
ALTER TABLE `request_item`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `postitem`
--
ALTER TABLE `postitem`
  ADD CONSTRAINT `postitem_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
