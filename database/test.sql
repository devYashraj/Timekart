-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 05:37 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `uname` varchar(20) NOT NULL,
  `pwd` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`uname`, `pwd`) VALUES
('admin123', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `prodName` varchar(20) NOT NULL,
  `prodBrand` varchar(10) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `addr` text NOT NULL,
  `phno` varchar(10) NOT NULL,
  `qty` varchar(5) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`prodName`, `prodBrand`, `uname`, `name`, `addr`, `phno`, `qty`, `date`) VALUES
('Titan Knight', 'Titan', 'steve123', 'Steve Rogers', '16-AA, Maple Heights,Wanworie,Pune', '7777777777', '2', '07-02-23 16:21:31'),
('Garmin Venue', 'Garmin', 'steve123', 'Steve Rogers', '16-AA, Maple Heights,Wanworie,Pune', '7777777777', '1', '07-02-23 20:22:48'),
('Garmin Forerunner', 'Garmin', 'steve123', 'Steve Rogers', '16-AA, Maple Heights,Wanworie,Pune', '7777777777', '1', '07-02-23 20:22:48'),
('Garmin Music', 'Garmin', 'steve123', 'Steve Rogers', '16-AA, Maple Heights,Wanworie,Pune', '7777777777', '1', '07-02-23 20:22:48'),
('Garmin Sentinel', 'Garmin', 'steve123', 'Steve Rogers', '16-AA, Maple Heights,Wanworie,Pune', '7777777777', '1', '07-02-23 20:22:48'),
('Garmin Instinct', 'Garmin', 'steve123', 'Steve Rogers', '16-AA, Maple Heights,Wanworie,Pune', '7777777777', '1', '07-02-23 20:22:48'),
('Rado Captain Cook', 'Rado', 'smithaadmane1', 'Smitha Admane', 'flat no 17 sagar enclave , ,pune', '9922350566', '1', '07-02-23 21:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prodId` varchar(10) DEFAULT NULL,
  `prodName` varchar(20) DEFAULT NULL,
  `prodBrand` varchar(10) DEFAULT NULL,
  `stock` varchar(10) DEFAULT NULL,
  `sold` varchar(20) DEFAULT NULL,
  `srno` varchar(5) DEFAULT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prodId`, `prodName`, `prodBrand`, `stock`, `sold`, `srno`, `price`) VALUES
('tissot1', 'Tissot Heritage', 'Tissot', 'in', '1', 'tis1', '53500'),
('tissot2', 'Tissot Visodate', 'Tissot', 'in', '1', 'tis2', '130000'),
('tissot3', 'Tissot Flamingo', 'Tissot', 'in', '1', 'tis3', '35000'),
('tissot4', 'Tissot T-Lady', 'Tissot', 'in', '1', 'tis4', '29500'),
('tissot5', 'Tissot PRX', 'Tissot', 'in', '1', 'tis5', '28000'),
('tissot6', 'Tissot Chrono', 'Tissot', 'in', '1', 'tis6', '122000'),
('titan1', 'Titan Swamp', 'Titan', 'in', '1', 'tat1', '9999'),
('titan2', 'Titan Rust', 'Titan', 'in', '1', 'tat2', '8999'),
('titan3', 'Titan Sparrow', 'Titan', 'in', '1', 'tat3', '5999'),
('titan4', 'Titan Elite', 'Titan', 'in', '1', 'tat4', '4999'),
('titan5', 'Titan Knight', 'Titan', 'in', '3', 'tat5', '12999'),
('titan6', 'Titan Treasure', 'Titan', 'in', '1', 'tat6', '10999'),
('rado1', 'Rado HyperChrome', 'Rado', 'in', '1', 'rad1', '105200'),
('rado2', 'Rado Captain Cook', 'Rado', 'in', '2', 'rad2', '425900'),
('rado3', 'Rado Chronograph', 'Rado', 'in', '1', 'rad3', '125300'),
('rado4', 'Rado Centrix', 'Rado', 'in', '1', 'rad4', '101900'),
('rado5', 'Rado Square', 'Rado', 'in', '1', 'rad5', '230500'),
('rado6', 'Rado Secret', 'Rado', 'in', '1', 'rad6', '225500'),
('fossil1', 'Fossil Prime', 'Fossil', 'in', '1', 'fos1', '9500'),
('fossil2', 'Fossil Spartan', 'Fossil', 'in', '1', 'fos2', '10500'),
('fossil3', 'Fossil Snapdragon', 'Fossil', 'in', '1', 'fos3', '24500'),
('fossil4', 'Fossil Mist', 'Fossil', 'in', '1', 'fos4', '8500'),
('fossil5', 'Fossil Jacqueline', 'Fossil', 'in', '1', 'fos5', '6500'),
('fossil6', 'Fossil Daisy', 'Fossil', 'in', '1', 'fos6', '15500'),
('casio1', 'Casio Commando', 'Casio', 'in', '1', 'cas1', '25000'),
('casio2', 'Casio Samurai', 'Casio', 'in', '1', 'cas2', '20500'),
('casio3', 'Casio Master', 'Casio', 'in', '1', 'cas3', '15500'),
('casio4', 'Casio Bravo', 'Casio', 'in', '1', 'cas4', '35500'),
('casio5', 'Casio Jasmine', 'Casio', 'in', '1', 'cas5', '16500'),
('casio6', 'Casio Eagle', 'Casio', 'in', '1', 'cas6', '21500'),
('garmin1', 'Garmin Venue', 'Garmin', 'in', '2', 'gar1', '25500'),
('garmin2', 'Garmin Forerunner', 'Garmin', 'in', '2', 'gar2', '35500'),
('garmin3', 'Garmin Music', 'Garmin', 'in', '2', 'gar3', '25500'),
('garmin4', 'Garmin Lily', 'Garmin', 'in', '1', 'gar4', '19500'),
('garmin5', 'Garmin Sentinel', 'Garmin', 'in', '2', 'gar5', '35500'),
('garmin6', 'Garmin Instinct', 'Garmin', 'in', '2', 'gar6', '45500');

-- --------------------------------------------------------

--
-- Table structure for table `smithaadmane1cart`
--

CREATE TABLE `smithaadmane1cart` (
  `prodId` varchar(10) DEFAULT NULL,
  `prodName` varchar(20) DEFAULT NULL,
  `prodBrand` varchar(20) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `qty` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `steve123cart`
--

CREATE TABLE `steve123cart` (
  `prodId` varchar(10) DEFAULT NULL,
  `prodName` varchar(20) DEFAULT NULL,
  `prodBrand` varchar(20) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `qty` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) DEFAULT NULL,
  `phno` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `addr` text DEFAULT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `pwd` char(32) DEFAULT NULL,
  `sq1` varchar(20) DEFAULT NULL,
  `sq2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `phno`, `email`, `addr`, `uname`, `pwd`, `sq1`, `sq2`) VALUES
('Kal Wardin', '7777777777', 'fdgd@edsf', 'asd,sefs', 'sfssef12', 'a3dcb4d229de6fde0db5686dee47145d', 'asdasdasd', 'asdasdasd'),
('TestA TestB', '2342342341', 'test@test.com', '20- G, Gokuldham, Koregaon East,Mumbai', 'testuname1', '2c9341ca4cf3d87b9e4eb905d6a3ec45', 'White', 'Spiderman'),
('Steve Rogers', '7777777777', 'steve@gmail.com', '16-AA, Maple Heights, Wanworie,Pune', 'steve1234', '569a3826e632a8f96b3a6d53c6ee86f4', 'silver', 'captainame'),
('Steve Rogers', '7777777777', 'steve@gmail.com', '16-AA, Maple Heights,Wanworie,Pune', 'steve123', 'f5bb0c8de146c67b44babbf4e6584cc0', 'blue', 'captainame'),
('Smitha Admane', '9922350566', 'abcd2@123', 'flat no 17 sagar enclave , ,pune', 'smithaadmane1', 'e81d79de8bf9909afbf297f65676d101', 'blue', 'baghi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
