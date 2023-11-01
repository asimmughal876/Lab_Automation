-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 09:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin12');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(11) NOT NULL,
  `cont_name` varchar(250) NOT NULL,
  `cont_email` varchar(250) NOT NULL,
  `cont_mess` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cpri`
--

CREATE TABLE `cpri` (
  `cpri_id` int(11) NOT NULL,
  `cpri_name` varchar(50) NOT NULL,
  `cpri_email` varchar(50) NOT NULL,
  `cpri_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cpri`
--

INSERT INTO `cpri` (`cpri_id`, `cpri_name`, `cpri_email`, `cpri_password`) VALUES
(1, 'CPRI', 'cpri@gmail.com', 'aptech');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_desc` text NOT NULL,
  `prod_price` varchar(255) NOT NULL,
  `prod_image` varchar(500) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `prod_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_desc`, `prod_price`, `prod_image`, `prod_qty`, `prod_status`) VALUES
(1, 'Beaker', 'Beakers can be used to hold liquid or as a container for reactions.', '$20', 'Beaker.jpg', 4, 6),
(2, 'Test tube', 'A test tube is defined as a small, long plastic cylinder with one open end used to store, mix, or hold liquids, bodily fluids, bacteria, or chemicals.', '$20', 'test tubes.jpg', 25, 6),
(5, 'Petri dish', 'A petri dish is a flat, shallow dish made of glass or plastic with a suitable lid.', '$30', 'petri dish.jpg', 30, 0),
(6, 'Graduated cylinder', 'Graduated cylinders are long, slender vessels used for measuring the volumes of liquids.', '$15', 'graduated cylinder.jpg', 40, 6);

-- --------------------------------------------------------

--
-- Table structure for table `testedproducts`
--

CREATE TABLE `testedproducts` (
  `tested_id` int(11) NOT NULL,
  `tested_prod_id` int(11) NOT NULL,
  `tested_tester_id` int(11) NOT NULL,
  `tested_testing_type` int(11) NOT NULL,
  `tested_comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testedproducts`
--

INSERT INTO `testedproducts` (`tested_id`, `tested_prod_id`, `tested_tester_id`, `tested_testing_type`, `tested_comment`) VALUES
(1, 1, 1, 7, 'Test Pass'),
(16, 6, 1, 7, 'Test Pass'),
(18, 2, 1, 7, 'Test Pass');

-- --------------------------------------------------------

--
-- Table structure for table `tester`
--

CREATE TABLE `tester` (
  `tester_id` int(11) NOT NULL,
  `tester_name` varchar(100) NOT NULL,
  `tester_email` varchar(255) NOT NULL,
  `tester_password` varchar(255) NOT NULL,
  `tester_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tester`
--

INSERT INTO `tester` (`tester_id`, `tester_name`, `tester_email`, `tester_password`, `tester_description`) VALUES
(1, 'Asim', 'asim@gmail.com', 'asim123', 'Testers evaluate computer or web applications by conducting manual and automated tests.'),
(3, 'Saif', 'saif@gmail.com', 'saif123', 'Testers evaluate computer or web applications by conducting manual and automated tests.'),
(7, 'Aliyan', 'aliyan@gmail.com', 'aliyan123', 'Testers evaluate computer or web applications by conducting manual and automated tests.');

-- --------------------------------------------------------

--
-- Table structure for table `testingtype`
--

CREATE TABLE `testingtype` (
  `testing_id` int(11) NOT NULL,
  `testing_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testingtype`
--

INSERT INTO `testingtype` (`testing_id`, `testing_name`) VALUES
(7, 'Earth Continuity Test.'),
(8, 'Insulation Resistance Test.'),
(9, 'Leakage Test.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`admin_email`,`admin_password`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `cpri`
--
ALTER TABLE `cpri`
  ADD PRIMARY KEY (`cpri_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `testedproducts`
--
ALTER TABLE `testedproducts`
  ADD PRIMARY KEY (`tested_id`),
  ADD KEY `Foreign Key` (`tested_prod_id`),
  ADD KEY `tested_tester_id` (`tested_tester_id`),
  ADD KEY `tested_testing_tyoe` (`tested_testing_type`);

--
-- Indexes for table `tester`
--
ALTER TABLE `tester`
  ADD PRIMARY KEY (`tester_id`),
  ADD UNIQUE KEY `unique_mail` (`tester_email`);

--
-- Indexes for table `testingtype`
--
ALTER TABLE `testingtype`
  ADD PRIMARY KEY (`testing_id`),
  ADD UNIQUE KEY `unique_name` (`testing_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cpri`
--
ALTER TABLE `cpri`
  MODIFY `cpri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testedproducts`
--
ALTER TABLE `testedproducts`
  MODIFY `tested_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tester`
--
ALTER TABLE `tester`
  MODIFY `tester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testingtype`
--
ALTER TABLE `testingtype`
  MODIFY `testing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `testedproducts`
--
ALTER TABLE `testedproducts`
  ADD CONSTRAINT `testedproducts_ibfk_1` FOREIGN KEY (`tested_testing_type`) REFERENCES `testingtype` (`testing_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
