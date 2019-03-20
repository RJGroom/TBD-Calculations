-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2019 at 05:23 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbgcalcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `username` varchar(25) NOT NULL,
  `primaryIncome` int(20) NOT NULL,
  `secondaryIncome` int(20) NOT NULL,
  `housing` int(20) NOT NULL,
  `loans` int(20) NOT NULL,
  `healthInsurance` int(20) NOT NULL,
  `transportation` int(20) NOT NULL,
  `cellphoneBill` int(20) NOT NULL,
  `groceries` int(20) NOT NULL,
  `clothing` int(20) NOT NULL,
  `gas` int(20) NOT NULL,
  `electric` int(20) NOT NULL,
  `water` int(20) NOT NULL,
  `cableInternet` int(20) NOT NULL,
  `monthlySubscriptions` int(20) NOT NULL,
  `miscellaneous` int(20) NOT NULL,
  `primarySavings` int(20) NOT NULL,
  `emergencyFunds` int(20) NOT NULL,
  `vacationFunds` int(20) NOT NULL,
  `excessFunds` int(20) NOT NULL,
  `leftoverExcessFunds` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`username`, `primaryIncome`, `secondaryIncome`, `housing`, `loans`, `healthInsurance`, `transportation`, `cellphoneBill`, `groceries`, `clothing`, `gas`, `electric`, `water`, `cableInternet`, `monthlySubscriptions`, `miscellaneous`, `primarySavings`, `emergencyFunds`, `vacationFunds`, `excessFunds`, `leftoverExcessFunds`) VALUES
('jonah_downs', 4000, 1000, 400, 100, 300, 200, 100, 100, 100, 100, 300, 400, 200, 100, 100, 300, 200, 100, 1900, 1900),
('NewUser', 1000, 1000, 500, 400, 100, 200, 100, 400, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 0, 0),
('ritchey_rich', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ryan_groom', 4000, 1000, 500, 500, 500, 300, 200, 300, 300, 100, 100, 50, 100, 30, 200, 400, 200, 100, 1120, 1120);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id` int(5) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `fName` varchar(15) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `id`, `isAdmin`, `fName`, `lName`, `email`) VALUES
('jonah_downs', 'password', 1, 1, 'Jonah', 'Downs', 'jonah.c.downs@gmail.com'),
('ritchey_rich', 'animetitties', 4, 1, 'Eric', 'Ritchey', ''),
('ryan_groom', 'epicfortnitekill', 6, 1, 'Ryan', 'Groom', 'RJGroomy@yahoo.com'),
('NewUser', 'password', 21, 0, 'Jim', 'Johnson', 'JJ@Gmail,gov');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
