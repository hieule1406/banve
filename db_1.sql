-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 06, 2017 lúc 07:31 PM
-- Phiên bản máy phục vụ: 10.1.22-MariaDB
-- Phiên bản PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chair`
--

CREATE TABLE `chair` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isShow` tinyint(1) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chair`
--

INSERT INTO `chair` (`id`, `name`, `price`, `content`, `isShow`, `created`, `updated`) VALUES
(1, 'A1', 60000, 'ghế A1', 1, '2003-07-17', '0000-00-00'),
(2, 'A2', 60000, 'ghế A2', 0, '2003-07-17', '0000-00-00'),
(3, 'A3', 60000, 'ghế A3', 0, '2003-07-17', '0000-00-00'),
(4, 'A4', 60000, 'ghế A4', 0, '2003-07-17', '0000-00-00'),
(5, 'A5', 70000, 'ghế A5', 1, '2003-07-17', '0000-00-00'),
(6, 'A6', 70000, 'ghế A6', 0, '2003-07-17', '0000-00-00'),
(7, 'A8', 60000, 'ghế A8', 1, '2003-07-17', '0000-00-00'),
(8, 'A9', 60000, 'ghế A9', 1, '2003-07-17', '0000-00-00'),
(9, 'B1', 60000, 'ghế B1', 1, '2003-07-17', '0000-00-00'),
(10, 'B2', 60000, 'ghế B2', 1, '2003-07-17', '0000-00-00'),
(11, 'B3', 60000, 'ghế B3', 0, '2003-07-17', '0000-00-00'),
(12, 'B4', 60000, 'ghế B4', 0, '2003-07-17', '0000-00-00'),
(13, 'B5', 70000, 'ghế B5', 1, '2003-07-17', '0000-00-00'),
(14, 'B6', 70000, 'ghế B6', 1, '2003-07-17', '0000-00-00'),
(15, 'B7', 60000, 'ghế B7', 1, '2003-07-17', '0000-00-00'),
(16, 'B8', 60000, 'ghế B8', 1, '2003-07-17', '0000-00-00'),
(17, 'B9', 60000, 'ghế B9', 1, '2003-07-17', '0000-00-00'),
(18, 'B10', 60000, 'ghế B10', 1, '2003-07-17', '0000-00-00'),
(19, 'A10', 60000, 'ghế A10', 1, '2006-07-17', '0000-00-00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chair`
--
ALTER TABLE `chair`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chair`
--
ALTER TABLE `chair`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
