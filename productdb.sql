-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 08:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('Rishabh', 'rvstowrn@gmail.com', 'First Message'),
('Rishabh Verma', 'rd6767@srmist.edu.in', 'message'),
('Rishabh', 've@gmail.com', 'third message');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`name`, `email`, `username`, `password`) VALUES
('rishabh', 'rvstowrn@gmail.com', 'rvstowrn', 'Pass@4488'),
('Shubham', 'shubham@gmail.com', 'shubham', 'Pass@4488'),
('sachin', 'sachin@gmail.com', 'sachin', 'Pass@4488');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `imglink` varchar(1000) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `name`, `imglink`, `description`) VALUES
('160399710621099461815f9b0db2b2255', 'Nike air pro', '160399710621099461815f9b0db2b2255', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum '),
('16039971104389724155f9b0db6b6497', 'Nike air pro', '16039971104389724155f9b0db6b6497', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum '),
('160399711710879374185f9b0dbd14d55', 'Nike air pro', '160399711710879374185f9b0dbd14d55', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum '),
('160400103012518416375f9b1d06b0e0d', 'New Product', '160400103012518416375f9b1d06b0e0d', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum ');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `fname` varchar(1000) NOT NULL,
  `lname` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `product_id` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`fname`, `lname`, `email`, `phone`, `address`, `product_id`) VALUES
('Rishabh', 'Verma', 'rvstowrn@gmail.com', '7903994122', 'MIG-54', '160399710621099461815f9b0db2b2255');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
