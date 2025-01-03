-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th1 03, 2025 lúc 03:26 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlkh_tester_aht`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`) VALUES
(1, 'Nguyễn Văn An', 'nguyen.an@example.com', 'Số 12, Đường Lê Lợi, Quận 1, TP.HCM, Việt Nam'),
(2, 'Trần Thị Bích', 'tran.bich@example.com', 'Số 45, Đường Nguyễn Trãi, Quận 5, TP.HCM, Việt Nam'),
(3, 'Phạm Minh Quân', 'pham.quan@example.com', 'Số 78, Đường Trường Chinh, Quận Tân Bình, TP.HCM, Việt Nam'),
(4, 'Lê Thuỳ Linh', 'le.linh@example.com', 'Số 23, Đường Lý Thường Kiệt, Quận 10, TP.HCM, Việt Nam'),
(5, 'Vũ Thành Công', 'vu.cong@example.com', 'Số 56, Đường Phan Đăng Lưu, Quận Phú Nhuận, TP.HCM, Việt Nam'),
(6, 'Đặng Thị Mai', 'dang.mai@example.com', 'Số 89, Đường Lạc Long Quân, Quận 11, TP.HCM, Việt Nam');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
