-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 04:44 PM
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
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `fees` varchar(200) NOT NULL,
  `timing` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `first_name`, `last_name`, `course`, `gender`, `fees`, `timing`, `contact`, `dob`, `email`, `age`, `city`) VALUES
(1, 'sameer', 'khan', 'web', 'male', '2500', '8to9', '54534543', '1/1/1', 'sameer@gmail.com', '20', 'karachi'),
(2, 'ali', 'hasan', 'cit', 'male', '3000', '8to9', '42323', '2/2/2', 'ali@gmail.com', '22', 'lahore'),
(3, 'asad', 'khan', 'dit', 'male', '3000', '8to9', '42323', '2/2/2', 'asad@gmail.com', '18', 'islamabad'),
(4, 'Alveera', 'Shahid', 'web', 'female ', '2000', '8to9', '0875', '18 dec 2004', 'alveerashahid@gmail.com', '19', 'karachi\r\n'),
(5, 'neha', 'azam', 'web', 'female ', '2000', '8to9', '2345678', '31/5/2004', 'neha@gmail.com', '20', 'karachi'),
(6, 'alishba', 'Shahid', 'graphic design', 'female ', '2000', '8to9', '23456', '1/1/2007', 'alishbashahid@gmail.com', '17', 'multan'),
(7, 'azhan', 'Shahid', 'cit', 'male', '2000', '7to8', '56789', '27/7/2010', 'azhan@gmail.com', '25', 'gujrawala'),
(8, 'ashhal', 'ahmed', 'web', 'male', '2500', '6to7', '123456', '25/1/2005', 'ashhal@gmail.com', '20', 'karachi'),
(9, 'laiba', 'ahmed', 'dit', 'female ', '2500', '6to7', '2345678', '1/12/2009', 'laiba@gmail.com', '23', 'hyderabad'),
(10, 'basit', 'mazhar', 'graphic design', 'male', '2300', '5to6', '45678', '20/7/2000', 'basitmazhar@gmail.com', '24', 'islamabad'),
(11, 'shayan', 'ali', 'cit', 'male', '2000', '6to7', '23456', '30/5/2010', 'shayanali@gmail.com', '24', 'lahore'),
(12, 'yumna', 'ali', 'web', 'female ', '2300', '5to6', '087545', '15 /10/ 2003', 'yumnaali@gmail.com', '26', 'lahore'),
(13, 'yashfa', 'akbar', 'graphic design', 'female ', '2000', '8to9', '08755', '15 /10/ 2003', 'yashfa@gmail.com', '23', 'quetta'),
(14, 'raza', 'murtaza', 'cit', 'male', '2500', '7to8', '087507', '1/12/2004', 'raza@gmail.com', '25', 'islamabad'),
(15, 'fatima', 'khan', 'web', 'female ', '2500', '8to9', '09876', '29/7/2001', 'fatima@gmail.com', '27', 'karachi'),
(16, 'hunais', 'majid', 'dit', 'male', '2700', '7to8', '087456', '31/10/2002', 'hunais@gmail.com', '30', 'quetta'),
(17, 'fabiha', 'sajid', 'web', 'female ', '2500', '8to9', '87654', '3/9/2011', 'fabiha@gmail.com', '25', 'hyderabad'),
(18, 'jazib', 'chand', 'graphic design', 'male', '2500', '7to8', '345987', '8/11/2003', 'jazibchand@gmail.com', '24', 'gujrawala'),
(19, 'arham', 'mirza', 'dit', 'male', '2200', '6to7', '65478', '30/6/2011', 'arhamirza@gmail.com', '26', 'hyderabad'),
(20, 'kiran', 'azhar', 'web', 'female ', '3000', '8to9', '065432', '11/11/2001', 'kirankhan@gmail.com', '29', 'kashmir'),
(21, 'shumaila', 'faisal', 'graphic design', 'female ', '2000', '6to7', '349812', '17/9/2001', 'shumaila@gmail.com', '26', 'swat'),
(22, 'aliyan', 'faisal', 'cit', 'male', '2000', '5to6', '239856', '7/11/2011', 'aliyanfaisal@gmail.com', '19', 'lahore'),
(23, 'armish', 'khan', 'dit', 'female ', '2500', '5to6', '547890', '16 /1/ 2002', 'armish@gmail.com', '21', 'multan'),
(24, 'hashir', 'mazhar', 'web', 'male', '3000', '8to9', '92340', '30 /10/ 2010', 'hashir@gmail.com', '25', 'kashmir'),
(25, 'yusra', 'khan', 'web', 'female ', '2500', '8to9', '89234', '25/12/2002', 'yusra@gmail.com', '25', 'hyderabad'),
(26, 'hassan', 'ahmed', 'graphic design', 'male', '2000', '7to8', '45906', '30 /1/ 2002', 'hassan@gmail.com', '23', 'islamabad'),
(27, 'saba', 'talha', 'cit', 'female ', '2000', '5to6', '16702', '20/10/2001', 'saba@gmail.com', '23', 'kashmir'),
(28, 'Hoorain', 'Ali', 'graphic design', 'female', '2300', '7to8', '78345', '7/7/7', 'hoorain@gmail.com', '23', 'karachi'),
(29, 'yasmeen', 'bhutto', 'cit', 'female', '2300', '7to8', '10453', '5/5/2000', 'yasmeen@gmail.com', '22', 'lahore'),
(30, 'inshal', 'khan', 'web', 'male', '2000', '8to9', '032489', '25/12/2000', 'inshal@gmail.com', '24', 'karachi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
