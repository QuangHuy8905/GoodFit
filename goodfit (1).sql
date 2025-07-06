-- phpMyAdmin SQL Dump
-- Database: `goodfit`

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------
-- Table structure for table `sanpham`
-- --------------------------------------------------------

CREATE TABLE `sanpham` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) NOT NULL,
  `gia` int NOT NULL,
  `anh` varchar(255) NOT NULL,
  `mota` text,
  `in_cart` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data for table `sanpham`

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
-- Table structure for table `users`
-- --------------------------------------------------------

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data for table `users`

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(8, 'ledat16042005@gmail.com', '$2y$10$vCyq4DxslsoijqO20cDtr.RRWKwpbHoBxeYSxMB0YrM4Ho9Oon3ji'),
(9, 'quangdat ', '$2y$10$guOmcVRUjSAbvIhAknelJeFZbH4XMe8pVTSCCEL0DmfkgFDbiLKAq'),
(10, 'pnhu7085@gmail.com', '$2y$10$yOcrnfYdk9fRXZa8LzvMPeQ./H/47QUpYzStJPi1wo55rdRRPBymi'),
(11, 'QUANG', '$2y$10$QKwfXHXCH/Jrw7KCjxIUOO2pRldWgfCPjxibTuWkVY8sTVOca3mMm'),
(12, 'QUANG DAT', '$2y$10$KSjBu9jMFqWfh4ZH6ooRd.shHZX6pNR9EMQ1Dv894Z/.ULjhgB2V6'),
(13, 'HUY', '$2y$10$09D1DIM.l3t6hd.M1ZHhVumMFYbif..L48Pi.XgbhbXd6noiMUNlG');

-- --------------------------------------------------------
-- Table structure for table `videos`
-- --------------------------------------------------------

CREATE TABLE `videos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tacgia` VARCHAR(255),
  `tieude` VARCHAR(255) NOT NULL,
  `thumbnail` VARCHAR(255),
  `video_url` VARCHAR(255) NOT NULL,
  `luotxem` INT DEFAULT 0,
  `thoigian` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data for table `videos`

INSERT INTO `videos` (`tacgia`, `tieude`, `thumbnail`, `video_url`, `luotxem`, `thoigian`) VALUES
("SHINPHAMM", "10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM", "img/video1.png", "https://www.youtube.com/watch?v=REwT4IjE_eY&t=698s", 11000000, '2020-07-01'),
("NGUYEN HIEU YOGA", "Yoga cơ bản tại nhà - Bài 1: kéo dãn", "img/anh3.jpg", "https://www.youtube.com/watch?v=JUZ_6Yh9eUw", 29000000, '2016-07-01'),
("VIET THUY EROBIS", "20 PHÚT AEROBIC GIẢM MỠ TOÀN THÂN... | BÀI 6", "img/anh5.jpg", "https://www.youtube.com/watch?v=eHnwaqhR11U", 19000000, '2019-07-01'),
("TUNG PHAO DUNG", "15 Phút Cardio ĐỐT MỠ THỪA Toàn Thân...", "img/anh7.jpg", "https://www.youtube.com/watch?v=GyvdcXgzxCE", 3100000, '2020-07-01'),
("GYM CHANGE 72", "10 Minutes of Visual Power & Beats – 6-Pack Energy", "img/anh8.png", "https://www.youtube.com/watch?v=muDIuysxOxU", 77, CURRENT_DATE - INTERVAL 13 DAY),
("SCULPTZONE", "20 MIN HIIT TABATA...Burn 400 Calories", "img/anh9.jpg", "https://www.youtube.com/watch?v=qiPWEgO-bJc", 537000000, CURRENT_DATE - INTERVAL 4 MONTH),
("EMI WONG", "FIX & SLIM YOUR BACK...in 10 minutes ~ Emi", "img/anh10.jpg", "https://www.youtube.com/watch?v=riS89biXH7E", 28000000, '2022-07-01'),
("GYMDAYROI", "8 Phút Tập Luyện GIẢM MỠ BẮP TAY...", "img/anh11.jpg", "https://www.youtube.com/watch?v=RkvZpXcF-jo", 7900000, '2020-07-01'),
("QUYEN NGUYEN", "XOAY HÈ KHÁC LẠ, HƯỚNG DẪN CHẬM...", "img/anh12.jpg", "https://www.youtube.com/watch?v=QjC-LvggQAw", 46000000, '2020-07-01'),
("KOCHAN-THU HON", "30p tổng hợp Tái Sinh,bài số 52", "img/anh13.jpg", "https://www.youtube.com/watch?v=v9PDbF-Av2g", 114000000, CURRENT_DATE - INTERVAL 2 MONTH),
("MILESTON", "20 PHÚT TẬP LUYỆN TOÀN THÂN...", "img/anh14.jpg", "https://www.youtube.com/watch?v=wIynl3at0Rs", 3500000, '2020-07-01'),
("x DATIFFN", "20 Minute Full Body Workout (No Equipment)", "img/anh15.jpg", "https://www.youtube.com/watch?v=Yu20j5jGHTc", 3100000, '2022-07-01');


-- --------------------------------------------------------

-- Set auto increment values
ALTER TABLE `sanpham` MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
ALTER TABLE `users` MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
ALTER TABLE `videos` MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

COMMIT;