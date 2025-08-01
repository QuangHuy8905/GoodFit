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
-- Table structure for table `huanluyenvien`
-- --------------------------------------------------------

CREATE TABLE `huanluyenvien` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `anh` VARCHAR(255) DEFAULT NULL,
  `ten` VARCHAR(100) NOT NULL,
  `gioitinh` ENUM('Nam', 'Nữ') NOT NULL,
  `noilamviec` VARCHAR(100) NOT NULL,
  `chuyenmon` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data for table `huanluyenvien`

INSERT INTO `huanluyenvien` (`anh`, `ten`, `gioitinh`, `noilamviec`, `chuyenmon`) VALUES
('img/hlv.png', 'Đinh Quang Huy', 'Nam', 'Bình Dương', 'HLV Fitness'),
('img/hlv1.jpg', 'Võ Trung Hiếu', 'Nam', 'HCM', 'HLV Yoga'),
('img/hlv2.jpg', 'Cao Nguyen', 'Nam', 'Đà Nẵng', 'Rider Fitness'),
('img/hlv3.jpg', 'Thuong Pham', 'Nam', 'Vĩnh Long', 'Personal Trainer'),
('img/hlv4.jpg', 'Đức Thành', 'Nam', 'HCM', 'Gymer'),
('img/hlv5.jpg', 'Nguyễn Tấn Huy', 'Nam', 'HCM', 'Gymer'),
('img/hlv6.jpg', 'Anh Van', 'Nữ', 'HCM', 'Personal Trainer'),
('img/hlv7.jpg', 'Dương Quốc Đẳng', 'Nam', 'HCM', 'Personal Trainer'),
('img/hlv8.jpg', 'Kit Ha', 'Nam', 'Quãng Ngãi', 'Personal Trainer'),
('img/hlv9.jpg', 'Bui Kim Long', 'Nam', 'HCM', 'HLV'),
('img/hlv10.jpg', 'Long Tran', 'Nam', 'Hải Phòng', 'Gymer'),
('img/hlv11.jpg', 'Trịnh Đình Nguyên', 'Nam', 'Vũng Tàu', 'Personal Trainer');




-- Set auto increment values
ALTER TABLE `sanpham` MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
ALTER TABLE `users` MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
ALTER TABLE `videos` MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE huanluyenvien ADD id INT AUTO_INCREMENT PRIMARY KEY FIRST;

COMMIT;
-- chi tiết hvl
CREATE TABLE chitiethlv (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_hlv INT NOT NULL,
  gioithieu TEXT,
  bangcap TEXT,
  noilamviec_chitiet TEXT,
  lienhe TEXT,
  FOREIGN KEY (id_hlv) REFERENCES huanluyenvien(id) ON DELETE CASCADE
);

INSERT INTO chitiethlv (id_hlv, gioithieu, bangcap, noilamviec_chitiet, lienhe) VALUES
(1, 'Tôi là Đinh Quang Huy, với hơn 5 năm kinh nghiệm huấn luyện thể hình.', 'HLV Quốc Gia, Level 1 Fitness', 'Phòng Gym Bình Dương Center – Thiết bị hiện đại, môi trường chuyên nghiệp.', 'Facebook: fb.com/dqhuy | Instagram: @dqhuyfit'),
(2, 'Võ Trung Hiếu chuyên về yoga trị liệu, hướng tới sức khỏe tinh thần.', 'Chứng chỉ Yoga Quốc tế, Đại học Thể dục Thể thao', 'Yoga House HCM – Không gian yên tĩnh và đậm chất thiền.', 'Facebook: fb.com/hieuyoga | Instagram: @hieuyoga'),
(3, 'Cao Nguyễn – HLV Rider Fitness trẻ trung, năng động, nhiều kinh nghiệm thi đấu.', 'Bằng Rider Fitness Châu Á', 'CLB Rider Đà Nẵng – chuyên về bài tập phối hợp đạp xe, sức bền.', 'Facebook: fb.com/caonguyen | Instagram: @ridernguyen'),
(4, 'Thuong Pham giúp bạn đạt được mục tiêu thể hình đúng khoa học.', 'Chứng chỉ PT quốc tế, Đại học TDTT', 'Gym Pro Vĩnh Long – Nơi đào tạo nhiều HLV chuyên nghiệp.', 'Facebook: fb.com/thuongpham | Instagram: @ptthuong'),
(5, 'Đức Thành là người đồng hành tận tâm với bạn trong hành trình fitness.', 'Cử nhân Thể thao, PT chứng nhận Level 2', 'HCM Gym Pro – Tập trung rèn luyện cá nhân.', 'Facebook: fb.com/thanhgym | Instagram: @thanhfit'),
(6, 'Nguyễn Tấn Huy giúp bạn xây dựng thể hình bền vững, khoa học.', 'PT nâng cao, chuyên về GYM tăng cơ', 'Fit Center HCM – chuyên sâu tập luyện cá nhân và nhóm nhỏ.', 'Facebook: fb.com/ntanhuy | Instagram: @ntanhuy'),
(7, 'Anh Văn – HLV nữ chuyên luyện tập cho phụ nữ sau sinh.', 'PT cho nữ, bằng chăm sóc sức khỏe phụ nữ', 'HCM Lady Gym – môi trường tập luyện riêng tư.', 'Facebook: fb.com/anhvanpt | Instagram: @anhvangym'),
(8, 'Dương Quốc Đẳng – người truyền cảm hứng luyện tập mỗi ngày.', 'PT quốc tế, dinh dưỡng học nâng cao', 'Team Star Gym HCM – Nơi gắn kết và đột phá.', 'Facebook: fb.com/ptdang | Instagram: @ptdangstar'),
(9, 'Kit Hà chuyên luyện tập hồi phục chức năng, thân thiện với người mới.', 'Chứng chỉ nâng cao GYM & rehab', 'Fitness Center Quảng Ngãi – trung tâm huấn luyện chuyên biệt.', 'Facebook: fb.com/kitha | Instagram: @kitha.fit'),
(10, 'Bùi Kim Long – hỗ trợ cá nhân hóa các giáo án tập luyện.', 'Fitness chuyên nghiệp, cử nhân Y học thể thao', 'HCM FitX – tập luyện cùng chuyên gia.', 'Facebook: fb.com/bkimlong | Instagram: @longfit'),
(11, 'Long Trần – Gắn bó với ngành thể hình hơn 7 năm.', 'Thạc sĩ Thể thao, PT nâng cao', 'Gym Hải Phòng – nổi bật với đội ngũ giảng viên.', 'Facebook: fb.com/longtran | Instagram: @longtrainer'),
(12, 'Trịnh Đình Nguyên – mang lại kết quả thực tế qua giáo án khoa học.', 'PT quốc tế, bằng kỹ thuật hình thể nâng cao', 'GoodBody Vũng Tàu – hàng trăm học viên tin tưởng.', 'Facebook: fb.com/nguyenpt | Instagram: @nguyen.goodfit');
