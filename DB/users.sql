-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 22, 2022 at 05:11 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `token`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Access_token` varchar(700) NOT NULL,
  `Expires_in` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Access_token`, `Expires_in`) VALUES
(1, 'AQXb8gOagjpywdr_nN1MLdsTzvuxQdX9_u6ovRpnsK1VtiigG7hr0sntRltvcqK3u0CPC07pHu6-hJT7qaQ2nCRiQnklgeOU6uQzhsE7Ih5QuO6XUGVyGpOP82JyJp7gahkHYjR_OKl5Y_reM5K3n1WWjxsxZ8uilwrTFWvQbZ_1SyE99BAvjGSQ4pmJXgyU-6wCdQn7I1OnI9eMmZUck0W46VQ2jrQSGTKIYkhxmzh3FJLJJvRDTj-HB0OUtLo-3B5rqmcFeqk5RCkCTfyP1-I9FralLRqTCFkHsiGmV4nKqOBCkCMEObUCJWS6avuKwsO58tQyh79-Cvr0oeoSZ1OKTeqYWw', 234134);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
