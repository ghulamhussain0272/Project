-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2019 at 12:49 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entertainment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(100) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'abc', '123');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(100) NOT NULL,
  `movie_name` varchar(200) NOT NULL,
  `movie_image` varchar(200) NOT NULL,
  `movie_link` varchar(300) NOT NULL,
  `movie_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_image`, `movie_link`, `movie_year`) VALUES
(133, 'Robot2.0', 'robot2.o.jpg', 'https://www.youtube.com/watch?v=_qOl_7qfPOM', '2019'),
(134, 'Once Upon A Time in Mumbai Doobara', 'once_upon.jpg', 'https://www.youtube.com/watch?v=dj9UXzyDsOA', '2013'),
(137, 'Pirates of the caribbean on strange tides', 'pirates.jpg', 'https://www.youtube.com/watch?v=KR_9A-cUEJc', '2010'),
(138, 'John Wick', 'johnwick.jpeg', 'https://www.youtube.com/watch?v=C0BMx-qxsP4	', '2014'),
(140, 'simbha', 'simbha.jpg', 'https://www.youtube.com/watch?v=PtFY3WHztZc	', '2019'),
(141, 'ABCD', 'abcd.jpg', 'https://www.youtube.com/watch?v=BYmhI0SzRHY	', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `user_Id` int(100) NOT NULL,
  `user_Firstname` varchar(200) NOT NULL,
  `user_Lastname` varchar(200) NOT NULL,
  `user_Email` varchar(200) NOT NULL,
  `user_Password` varchar(200) NOT NULL,
  `user_Birthday` varchar(200) NOT NULL,
  `user_Gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user_Id`, `user_Firstname`, `user_Lastname`, `user_Email`, `user_Password`, `user_Birthday`, `user_Gender`) VALUES
(2, 'Ghulam', 'Hussain', 'ghulamhussain365@yahoo.com', '1234', '14-08-2019', 'male'),
(3, 'Fareha', 'anjum', 'abcd', '123', '14-08-2019', 'female'),
(5, 'Shezad', 'Miraj', 'sh', '12', '14-08-2019', 'male'),
(7, 'asad', 'iqbal', 'asadiqbal12@gmail.com', '1234', '14/02/2019', 'male'),
(9, 'Danial ', 'sheikh', 'dani@gmail.com', '12345', '20/12/2000', 'male'),
(10, 'Fareha', 'iqbal', 'abcd@gmail.com', '12', '14/08/2019', 'female'),
(14, 'ali', ' musa', 'alimusa365', '12', '20/12/2000', 'male'),
(17, 'Fareha', 'iqbal', 'ghulamhussain365@yahoo.com', '12', '14/02/2019', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `user_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
