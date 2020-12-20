-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2020 at 08:21 PM
-- Server version: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_multiplelogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(64) NOT NULL,
  `email_user` varchar(64) NOT NULL,
  `password_user` varchar(256) NOT NULL,
  `level_user` int(1) NOT NULL,
  `image_user` varchar(64) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name_user`, `email_user`, `password_user`, `level_user`, `image_user`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', '$2y$10$LHgHI5mTCUkhrN5D42t25.yQU9NlrzS.wHekiO29y699LVzAe2MVS', 1, '1.jpg', NULL, NULL),
(3, 'user', 'user@gmail.com', '$2y$10$LnLhE13ZgHyKy6Jq8IYvU.87q36uCsGFIB7jI9TYBwctl/BDHHDa2', 2, '2.jpg', NULL, NULL),
(4, 'member', 'member@gmail.com', '$2y$10$zzW74w4UX1E0Uca7nyYU..uKAfs7.VhWfzvO54mNHB7h57ifCNzWC', 3, '2.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
