-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2025 at 08:39 AM
-- Server version: 9.2.0
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goodfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` int NOT NULL,
  `anh` varchar(255) NOT NULL,
  `mota` text,
  `in_cart` tinyint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `gia`, `anh`, `mota`, `in_cart`) VALUES
(3, 'Bộ Tạ Tay', 999000, 'img/sanpham2.jpg', 'Bộ tạ tay đa năng phù hợp cho người mới bắt đầu và tập luyện tại nhà.', 0),
(4, 'Áo Thun Gym', 350000, 'img/ao1.jpg', 'Áo thun thể thao thoáng mát, co giãn 4 chiều, phù hợp mọi hoạt động.', 1),
(5, 'Tạ Đơn 10kg', 250000, 'img/tadon10kg.jpg', 'Tạ đơn cao su 10kg giúp luyện tập cơ bắp hiệu quả.', 0),
(6, 'Dây Kháng Lực', 120000, 'img/daykhaclucc.jpg', 'Dây đàn hồi kháng lực, phù hợp tập tay và chân.', 0),
(7, 'Ghế Tập Tạ', 800000, 'img/ghetapta.jpg', 'Ghế ngả lưng đa năng dùng tập tạ tại nhà.', 0),
(8, 'Thảm Yoga', 180000, 'img/thamyoga.jpg', 'Thảm tập yoga chống trượt, kích thước tiêu chuẩn.', 0),
(9, 'Quần Tập Gym Nam', 220000, 'img/quantapgym.jpg', 'Quần thể thao co giãn, thấm hút mồ hôi tốt.', 0),
(10, 'Áo Ba Lỗ Gym', 190000, 'img/aobalo.jpg', 'Áo ba lỗ tập gym, chất liệu nhẹ và mát.', 0),
(11, 'Bóng Tập Gym Ball', 250000, 'img/bongtap.jpg', 'Bóng yoga dùng cho các bài tập core và căng cơ.', 0),
(12, 'Găng Tay Tập Gym', 150000, 'img/gangtapgym.jpg', 'Găng tay chống trượt giúp bảo vệ tay khi nâng tạ.', 1),
(13, 'Dây Nhảy Thể Lực', 90000, 'img/daynhay.jpg', 'Dây nhảy điều chỉnh độ dài, dùng tăng sức bền.', 1),
(14, 'Máy Tập Bụng Mini', 500000, 'img/maytapbung.jpg', 'Máy hỗ trợ gập bụng và tập cơ core.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(8, 'ledat16042005@gmail.com', '$2y$10$vCyq4DxslsoijqO20cDtr.RRWKwpbHoBxeYSxMB0YrM4Ho9Oon3ji'),
(9, 'quangdat ', '$2y$10$guOmcVRUjSAbvIhAknelJeFZbH4XMe8pVTSCCEL0DmfkgFDbiLKAq'),
(10, 'pnhu7085@gmail.com', '$2y$10$yOcrnfYdk9fRXZa8LzvMPeQ./H/47QUpYzStJPi1wo55rdRRPBymi'),
(11, 'QUANG', '$2y$10$QKwfXHXCH/Jrw7KCjxIUOO2pRldWgfCPjxibTuWkVY8sTVOca3mMm'),
(12, 'QUANG DAT', '$2y$10$KSjBu9jMFqWfh4ZH6ooRd.shHZX6pNR9EMQ1Dv894Z/.ULjhgB2V6'),
(13, 'HUY', '$2y$10$09D1DIM.l3t6hd.M1ZHhVumMFYbif..L48Pi.XgbhbXd6noiMUNlG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
