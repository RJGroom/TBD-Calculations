-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 02:23 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `date` date NOT NULL,
  `author` text NOT NULL,
  `article` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`title`, `subtitle`, `date`, `author`, `article`, `id`) VALUES
('Here is Blog Post One', 'this is the subtitle', '2019-04-02', 'Groom, Ryan', 'Here is my first blog post. This will contain information about budgeting, and useful tips for our webpage visitors.', 1),
('Blog Title two', 'Here is a subtitle', '2019-04-03', 'Ryan Groom', 'This is my second article!', 2),
('HERE IS POST THREE', 'Subtitle', '2019-04-03', 'Jonah Downs', 'Hey everybody, here is my third blog post!!!!!!!!!!!!!', 3),
('NEW POST', 'here is the fourth', '2019-04-04', 'Eric', 'Here is the most recent post!', 4),
('How to Manage your Money', 'for beginners', '2019-04-04', 'Ryan Groom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan tortor posuere ac ut consequat. Quam viverra orci sagittis eu volutpat. Vitae elementum curabitur vitae nunc sed velit dignissim sodales ut. Fermentum iaculis eu non diam phasellus. Tortor vitae purus faucibus ornare suspendisse sed nisi. A pellentesque sit amet porttitor eget dolor morbi. Nisl rhoncus mattis rhoncus urna. Quis hendrerit dolor magna eget. Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Dolor purus non enim praesent. Vehicula ipsum a arcu cursus vitae congue. Amet risus nullam eget felis eget. Porta non pulvinar neque laoreet suspendisse interdum consectetur. Neque ornare aenean euismod elementum nisi quis eleifend quam. Ut aliquam purus sit amet luctus venenatis lectus. Non diam phasellus vestibulum lorem sed risus ultricies tristique.', 5),
('Here is budgeting advice', 'This is the subtitle', '2019-04-04', 'Eric Ritchey', 'This is the most recent post to the database', 6),
('Here is a title', 'Ghani', '2019-04-04', 'Ryan Groom', 'Write article here Write article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article hereWrite article here', 7),
('YEET', 'SWAG', '2019-04-09', 'Ryan Groom', 'Bloggy McblogBlog Bloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlogBloggy McblogBlog', 8);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ContactName` varchar(40) NOT NULL,
  `ContactEmail` varchar(60) NOT NULL,
  `ContactComment` varchar(1000) NOT NULL,
  `ContactId` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ContactName`, `ContactEmail`, `ContactComment`, `ContactId`) VALUES
('Jim Beam', 'jimbeam@buttsex.info', 'Please delete your site pls', 9);

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
('jonah_downs', 5000, 500, 400, 100, 300, 200, 100, 100, 100, 300, 300, 400, 200, 100, 100, 700, 200, 100, 1800, 1800),
('NewUser', 1000, 1000, 500, 400, 100, 200, 100, 400, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 0, 0),
('ritchey_rich', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ryan_groom', 4000, 1000, 500, 500, 500, 300, 200, 300, 300, 100, 100, 50, 100, 30, 200, 400, 200, 100, 1120, 1120),
('newUser2', 60000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60000, 60000),
('dd', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('bigFatAsshole', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('dfd', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('dfdkdffd', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('fsdasdf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('eric', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('my', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('fuck', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('please', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('will', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('this', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('imran_ghani', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `spending`
--

CREATE TABLE `spending` (
  `username` varchar(25) NOT NULL,
  `januarySpending` int(11) NOT NULL,
  `februarySpending` int(11) NOT NULL,
  `marchSpending` int(11) NOT NULL,
  `aprilSpending` int(11) NOT NULL,
  `maySpending` int(11) NOT NULL,
  `juneSpending` int(11) NOT NULL,
  `julySpending` int(11) NOT NULL,
  `augustSpending` int(11) NOT NULL,
  `septemberSpending` int(11) NOT NULL,
  `octoberSpending` int(11) NOT NULL,
  `novemberSpending` int(11) NOT NULL,
  `decemberSpending` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spending`
--

INSERT INTO `spending` (`username`, `januarySpending`, `februarySpending`, `marchSpending`, `aprilSpending`, `maySpending`, `juneSpending`, `julySpending`, `augustSpending`, `septemberSpending`, `octoberSpending`, `novemberSpending`, `decemberSpending`) VALUES
('jonah_downs', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ritchey_rich', 0, 0, 0, 50, 0, 0, 0, 0, 0, 0, 0, 0),
('ryan_groom', 40, 50, 30, 190, 40, 50, 32, 34, 52, 21, 42, 50);

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
('the_room', 'ohhimark', 7, 0, 'Tommy', 'Wisseau', 'wisseau@tommy.gov'),
('', '', 9, 0, '', '', ''),
('tingle', 'tingle', 10, 0, 'Tingle', 'Man', 'tingle@tingle.ting'),
('newUser2', 'lll', 11, 0, 'John', 'Doe', 'dfhgjsdk'),
('will', 'not', 21, 0, 'this', 'work', 'maybe'),
('this', 'not', 22, 0, 'this', 'work', 'maybe'),
('imran_ghani', 'COSC473', 23, 0, 'Imrahn', 'Ghani', 'ghani@iup.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ContactId`);

--
-- Indexes for table `spending`
--
ALTER TABLE `spending`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ContactId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
