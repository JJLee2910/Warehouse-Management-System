-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 09:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `messages` mediumtext NOT NULL,
  `response` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `messages`, `response`) VALUES
(1, 'hi|hey|hy|hello|Hai', 'Hi I am WMS Online Chatbot how may I help you?'),
(2, 'how are you|how are you?', 'I am great :>, how about you?'),
(3, 'what can you do|what you do?|what is ur function?|?', 'I am Online assistant chatbot of WMS, I could provide you some details of our system :>'),
(4, 'What is ur name?|name?|whats ur name', 'I am Jerry, an Online Chatbot of WMS. What Can I help you? :>'),
(5, 'What is WMS|WMS|Whats WMS?', 'WMS is a web-based application designed to support and optimize warehouse functionality and distribution centre management'),
(6, 'Where is the warehouse located?|Location?|location|where yall located?|location', 'We located at Technology Park Malaysia, Bukit Jalil, Malaysia'),
(7, 'Operating hour|What is your operating hour?|hour?|hour|working hour?', 'Our working hour is from 9am to 9pm every Monday - Friday'),
(8, 'Contact us|contact number|how can i contact?|contact|Contact', 'Our contact Number is +603 1234 5678 or email us at wms.support@gmail.com'),
(9, 'Inventory size|size|spacing info|inventory sizing', 'Our inventory size is 100sqft per space'),
(10, 'Inventory limitation per account|account limitation|limitation', 'Users can only rent 1 spac100 sqft / 3 pallets ( 48\" x 40\") e per transaction. Spacing info are '),
(11, 'What can the Inventory store|what can we store?|store|', 'You can store the products, raw materials, work-in-process goods and finished goods'),
(12, 'Inventory price|price|cost|how much is the inventory?', 'The price of the inventory is RM850 per month per 100sqft'),
(13, 'What is inventory|whats inventory|wht is inventory', 'Inventory refers to the goods and materials that a business holds for the ultimate goal of resale, production or utilisation.'),
(14, 'Product assurance in the inventory', 'The product will store according to the customer space id and will secure with wrappers to prevent any scratches'),
(15, 'Delivery price|price for delivery|delivery charges|', 'The delivery price will be RM500 per trip'),
(16, 'Delivery distance|distance of delivery|', 'Our delivery service cover the entire Malaysia'),
(17, 'How fast will the delivery reach after booking|when the delivery can be settle?', 'The delivery will take around 5 to 7 days'),
(18, 'How much product can one delivery deliver|how many prodcuts can i deliver?|how heavy can the item deliver be?|weight|size of delivery', 'The delivery size is up to 5 tons'),
(19, 'What happened to the product after the delivery|what will happen to the product next', 'The product will store according to the customer space id and will secure with wrappers to prevent any scratches'),
(20, 'How to retrieve the product in the inventory|contact us|contact|how to contact you?|', 'You can call us at +603 1234 5678 or kindly email to wms.support@gmail.com'),
(21, 'How does the inventory rental works|how can i rent an inventory?|how to rent?|how rent?', '1. Select the available space id 2. Fill in your information 3. Choose needed space size 4. Choose your rental date 5. Book your inventory  6. Make payment'),
(22, 'Payment option|payment|', 'You can pay with PayPal, Debit/Credit cards'),
(23, 'How to discontinue rental?|how to stop rental?|how to stop rental|', 'Please visit us at Technology Park Malaysia, Bukit Jalil or Contact us on +603 1234 5678 / wms.support@gmail.com'),
(24, 'test', '?');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_info`
--

CREATE TABLE `delivery_info` (
  `Delivery_ID` int(11) NOT NULL,
  `IC_Number` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `Delivery_address` varchar(255) NOT NULL,
  `amount_of_stock` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_info`
--

INSERT INTO `delivery_info` (`Delivery_ID`, `IC_Number`, `status`, `date`, `Delivery_address`, `amount_of_stock`) VALUES
(1, '321', 'Shipping', '2022-02-09', '981 Jln Hulu Batu 7 1/2 Hulu Ampang', 20),
(2, '999', 'Shipping', '2022-02-02', ' 58 Jln 38 Kampung Cheras Baru', 23),
(3, '888', 'Shipping', '2022-02-10', '46B Jalan 5 Off Jalan Chan Sow Lin', 13),
(4, '777', 'Pending', '2022-03-08', 'Bukit Jalil', 12),
(6, '666', 'Shipping', '2022-03-30', 'Endah Parade, Taman Sri Endah, 57000 Kuala Lumpur', 44);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_info`
--

CREATE TABLE `inventory_info` (
  `spaceID` int(255) NOT NULL,
  `IC_Number` varchar(20) NOT NULL,
  `Full_Name` varchar(255) NOT NULL,
  `size` int(255) NOT NULL,
  `rent_per_month` varchar(255) NOT NULL,
  `rental_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory_info`
--

INSERT INTO `inventory_info` (`spaceID`, `IC_Number`, `Full_Name`, `size`, `rent_per_month`, `rental_date`) VALUES
(2, '321', 'Michell', 100, '850', '2022-02-15'),
(3, '999', 'Kingsley Ng', 100, '850', '2022-03-09'),
(4, '888', 'Tester1', 100, '850', '2022-02-12'),
(5, '777', 'tester 2', 100, '850', '2022-02-03'),
(6, '666', 'Tester 3', 100, '850', '2021-12-14'),
(7, '555', 'Tester 4', 100, '850', '2021-11-02'),
(11, '444', 'Tester 5', 100, '850', '2021-12-01'),
(12, '333', 'Tester 6', 100, '850', '2021-12-08'),
(14, '22', 'Tester 7', 100, '850', '2021-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `payment_id` int(11) NOT NULL,
  `IC_Number` varchar(255) NOT NULL,
  `Phone_Number` varchar(255) NOT NULL,
  `Delivery_address` varchar(255) NOT NULL,
  `booked_space_id` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `amount` mediumtext NOT NULL,
  `payment_purpose` text NOT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_info`
--

INSERT INTO `payment_info` (`payment_id`, `IC_Number`, `Phone_Number`, `Delivery_address`, `booked_space_id`, `date`, `amount`, `payment_purpose`, `status`) VALUES
(1, '22', '999', '58 Jln 38 Kampung Cheras Baru', '-', '2022-03-16', '500', 'Book Delivery', 'Pending'),
(2, '321', '123', '-', '2', '2022-03-16', '850', 'Book Space', 'Pending'),
(5, '333', '4321', '-', '3', '2022-03-09', '850', 'Book Space', 'Pending'),
(7, '444', '9999', 'Bukit Jalil', '-', '2022-03-08', '500', 'Book Delivery', 'Pending'),
(8, '555', '123', 'sungai long', '-', '2022-04-08', '500', 'Book Delivery', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `IC_Number` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_Number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`IC_Number`, `role`, `username`, `password`, `name`, `Email`, `Phone_Number`) VALUES
('00033', 'Customer', 'Nic', 'd6b0ab7f1c8ab8f514db9a6d85de160a', 'Nicholas Soon', 'laisiSoon@mail.com', '5125'),
('0033445566', 'Customer', 'test12', 'e99a18c428cb38d5f260853678922e03', 'Tester 12', 'test12@mail.com', '9899'),
('011119-10-6677', 'Customer', 'john', 'e99a18c428cb38d5f260853678922e03', 'john Cena', '@mail.com', '012312321'),
('021029-10-0033', 'Admin', 'JJ Lee', 'e99a18c428cb38d5f260853678922e03', 'Lee Jang Jhin', 'jangjhinL@yahoo.com', '011-1635 2880'),
('021234', 'Customer', 'JY', 'd6b0ab7f1c8ab8f514db9a6d85de160a', 'Aw Jun Yuan', 'junyuan@mail.com', '012345'),
('032132', 'Customer', 'Ali', 'e99a18c428cb38d5f260853678922e03', 'Ali Bakar', 'ali@gmail.com', '9999'),
('22', 'Customer', 'test7', 'e99a18c428cb38d5f260853678922e03', 'Tester 7', 'test7@mail.com', '000'),
('321', 'Customer', 'michelle', 'e99a18c428cb38d5f260853678922e03', 'Michell', 'michelle@mail.com', '999'),
('321456', 'Admin', 'admin', 'd6b0ab7f1c8ab8f514db9a6d85de160a', 'WMS Admin', 'wms_admin@gmail.com', '999'),
('333', 'Customer', 'test6', 'e99a18c428cb38d5f260853678922e03', 'Tester 6', 'test6@mail.com', '000'),
('444', 'Customer', 'test5', 'e99a18c428cb38d5f260853678922e03', 'Tester 5', 'test5@mail.com', '000'),
('555', 'Customer', 'test4', 'e99a18c428cb38d5f260853678922e03', 'Tester 4', 'test4@mail.com', '000'),
('666', 'Customer', 'test3', 'e99a18c428cb38d5f260853678922e03', 'tester 3', 'test3@mail.com', '000'),
('777', 'Customer', 'test2', 'e99a18c428cb38d5f260853678922e03', 'tester 2', 'test2@mail.com', '000'),
('88777', 'Customer', 'test11', 'e99a18c428cb38d5f260853678922e03', 'tester 11', 'test11@mail.com', '123213'),
('888', 'Customer', 'test1', 'e99a18c428cb38d5f260853678922e03', 'Tester1', 'test1@mail.com', '000'),
('999', 'Customer', 'Kings', 'e99a18c428cb38d5f260853678922e03', 'Kingsley Ng', 'kingsley@gmail.com', '000');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse_info`
--

CREATE TABLE `warehouse_info` (
  `spaceID` int(255) NOT NULL,
  `price_per_month` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `space_info` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warehouse_info`
--

INSERT INTO `warehouse_info` (`spaceID`, `price_per_month`, `availability`, `space_info`) VALUES
(1, '850', 'Available', 100),
(2, '850', 'Rented', 100),
(3, '850', 'Rented', 100),
(4, '850', 'Rented', 100),
(5, '850', 'Rented', 100),
(6, '850', 'Rented', 100),
(7, '850', 'Rented', 100),
(8, '850', 'Available', 100),
(9, '850', 'Available', 100),
(10, '850', 'Available', 100),
(11, '850', 'Rented', 100),
(12, '850', 'Rented', 100),
(13, '850', 'Available', 100),
(14, '850', 'Rented', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_info`
--
ALTER TABLE `delivery_info`
  ADD PRIMARY KEY (`Delivery_ID`);

--
-- Indexes for table `inventory_info`
--
ALTER TABLE `inventory_info`
  ADD PRIMARY KEY (`spaceID`),
  ADD KEY `IC_Number` (`IC_Number`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `IC_Number` (`IC_Number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IC_Number`);

--
-- Indexes for table `warehouse_info`
--
ALTER TABLE `warehouse_info`
  ADD PRIMARY KEY (`spaceID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `delivery_info`
--
ALTER TABLE `delivery_info`
  MODIFY `Delivery_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory_info`
--
ALTER TABLE `inventory_info`
  ADD CONSTRAINT `inventory_info_ibfk_1` FOREIGN KEY (`IC_Number`) REFERENCES `users` (`IC_Number`);

--
-- Constraints for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD CONSTRAINT `payment_info_ibfk_1` FOREIGN KEY (`IC_Number`) REFERENCES `users` (`IC_Number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
