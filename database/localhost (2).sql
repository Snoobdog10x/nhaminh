-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 23, 2021 lúc 03:49 PM
-- Phiên bản máy phục vụ: 10.3.31-MariaDB-0+deb10u1
-- Phiên bản PHP: 7.3.31-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `epiz_30240223_nhaminh`
--
DROP DATABASE IF EXISTS `epiz_30240223_nhaminh`;
CREATE DATABASE IF NOT EXISTS `epiz_30240223_nhaminh` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `epiz_30240223_nhaminh`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `CustomerOrder`
--

CREATE TABLE IF NOT EXISTS `CustomerOrder` (
  `ID` varchar(20) NOT NULL,
  `CustomerName` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `PhoneNumber` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Date` date NOT NULL,
  `Total` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ItemOrder`
--

CREATE TABLE IF NOT EXISTS `ItemOrder` (
  `ID` varchar(20) NOT NULL,
  `PhoneCom` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `PhoneModel` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `ID` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `fullname` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `type` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`ID`(50))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ID` text COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'product id',
  `name` text COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'product name',
  `price` decimal(10,0) NOT NULL COMMENT 'product price',
  `image` text COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'product image',
  `smallimage` text COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'smallimage',
  `type` text COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'productype',
  PRIMARY KEY (`ID`(20))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ID`, `name`, `price`, `image`, `smallimage`, `type`) VALUES
('MC_001', 'MC_001', '69000', 'IMG/MAUCHU/IMG/MC_IMG- (1).jpg', 'IMG/MAUCHU/SMALL_IMG/MC_SMALL_IMG- (1).jpg', 'mauchu'),
('MC_002', 'MC_002', '69000', 'IMG/MAUCHU/IMG/MC_IMG- (2).jpg', 'IMG/MAUCHU/SMALL_IMG/MC_SMALL_IMG- (2).jpg', 'mauchu'),
('MC_003', 'MC_003', '69000', 'IMG/MAUCHU/IMG/MC_IMG- (3).jpg', 'IMG/MAUCHU/SMALL_IMG/MC_SMALL_IMG- (3).jpg', 'mauchu'),
('MC_004', 'MC_004', '69000', 'IMG/MAUCHU/IMG/MC_IMG- (4).jpg', 'IMG/MAUCHU/SMALL_IMG/MC_SMALL_IMG- (4).jpg', 'mauchu'),
('MC_005', 'MC_005', '69000', 'IMG/MAUCHU/IMG/MC_IMG- (5).jpg', 'IMG/MAUCHU/SMALL_IMG/MC_SMALL_IMG- (5).jpg', 'mauchu'),
('MC_006', 'MC_006', '69000', 'IMG/MAUCHU/IMG/MC_IMG- (6).jpg', 'IMG/MAUCHU/SMALL_IMG/MC_SMALL_IMG- (6).jpg', 'mauchu'),
('MK_KD_001', 'MK_KD_001', '69000', 'IMG/MAUKHUNG_KHUNGDON/IMG/MK_KD_IMG- (1).jpg', 'IMG/MAUKHUNG_KHUNGDON/SMALL_IMG/MK_KD_SMALL_IMG- (1).jpg', 'khungdon'),
('MK_KD_002', 'MK_KD_002', '69000', 'IMG/MAUKHUNG_KHUNGDON/IMG/MK_KD_IMG- (2).jpg', 'IMG/MAUKHUNG_KHUNGDON/SMALL_IMG/MK_KD_SMALL_IMG- (2).jpg', 'khungdon'),
('MK_KD_003', 'MK_KD_003', '69000', 'IMG/MAUKHUNG_KHUNGDON/IMG/MK_KD_IMG- (3).jpg', 'IMG/MAUKHUNG_KHUNGDON/SMALL_IMG/MK_KD_SMALL_IMG- (3).jpg', 'khungdon'),
('MK_KD_004', 'MK_KD_004', '69000', 'IMG/MAUKHUNG_KHUNGDON/IMG/MK_KD_IMG- (4).jpg', 'IMG/MAUKHUNG_KHUNGDON/SMALL_IMG/MK_KD_SMALL_IMG- (4).jpg', 'khungdon'),
('MK_KD_005', 'MK_KD_005', '69000', 'IMG/MAUKHUNG_KHUNGDON/IMG/MK_KD_IMG- (5).jpg', 'IMG/MAUKHUNG_KHUNGDON/SMALL_IMG/MK_KD_SMALL_IMG- (5).jpg', 'khungdon'),
('MK_KD_006', 'MK_KD_006', '69000', 'IMG/MAUKHUNG_KHUNGDON/IMG/MK_KD_IMG- (6).jpg', 'IMG/MAUKHUNG_KHUNGDON/SMALL_IMG/MK_KD_SMALL_IMG- (6).jpg', 'khungdon'),
('MK_KL_002', 'MK_KL_002', '69000', 'IMG/MAUKHUNG_KHUNGLUOI/IMG/MK_KL_IMG- (2).jpg', 'IMG/MAUKHUNG_KHUNGLUOI/SMALL_IMG/MK_KL_SMALL_IMG- (2).jpg', 'khungluoi'),
('MK_KL_003', 'MK_KL_003', '69000', 'IMG/MAUKHUNG_KHUNGLUOI/IMG/MK_KL_IMG- (3).jpg', 'IMG/MAUKHUNG_KHUNGLUOI/SMALL_IMG/MK_KL_SMALL_IMG- (3).jpg', 'khungluoi'),
('MK_KL_004', 'MK_KL_004', '69000', 'IMG/MAUKHUNG_KHUNGLUOI/IMG/MK_KL_IMG- (4).jpg', 'IMG/MAUKHUNG_KHUNGLUOI/SMALL_IMG/MK_KL_SMALL_IMG- (4).jpg', 'khungluoi'),
('MK_KL_005', 'MK_KL_005', '69000', 'IMG/MAUKHUNG_KHUNGLUOI/IMG/MK_KL_IMG- (5).jpg', 'IMG/MAUKHUNG_KHUNGLUOI/SMALL_IMG/MK_KL_SMALL_IMG- (5).jpg', 'khungluoi'),
('MK_KL_006', 'MK_KL_006', '69000', 'IMG/MAUKHUNG_KHUNGLUOI/IMG/MK_KL_IMG- (6).jpg', 'IMG/MAUKHUNG_KHUNGLUOI/SMALL_IMG/MK_KL_SMALL_IMG- (6).jpg', 'khungluoi'),
('MK_KL_007', 'MK_KL_007', '69000', 'IMG/MAUKHUNG_KHUNGLUOI/IMG/MK_KL_IMG- (7).jpg', 'IMG/MAUKHUNG_KHUNGLUOI/SMALL_IMG/MK_KL_SMALL_IMG- (7).jpg', 'khungluoi'),
('MK_KL_008', 'MK_KL_008', '69000', 'IMG/MAUKHUNG_KHUNGLUOI/IMG/MK_KL_IMG- (8).jpg', 'IMG/MAUKHUNG_KHUNGLUOI/SMALL_IMG/MK_KL_SMALL_IMG- (8).jpg', 'khungluoi'),
('MK_KL_009', 'MK_KL_009', '69000', 'IMG/MAUKHUNG_KHUNGLUOI/IMG/MK_KL_IMG- (9).jpg', 'IMG/MAUKHUNG_KHUNGLUOI/SMALL_IMG/MK_KL_SMALL_IMG- (9).jpg', 'khungluoi'),
('MK_KL_010', 'MK_KL_010', '69000', 'IMG/MAUKHUNG_KHUNGLUOI/IMG/MK_KL_IMG- (10).jpg', 'IMG/MAUKHUNG_KHUNGLUOI/SMALL_IMG/MK_KL_SMALL_IMG- (10).jpg', 'khungluoi'),
('MK_KL_011', 'MK_KL_011', '69000', 'IMG/MAUKHUNG_KHUNGLUOI/IMG/MK_KL_IMG- (11).jpg', 'IMG/MAUKHUNG_KHUNGLUOI/SMALL_IMG/MK_KL_SMALL_IMG- (11).jpg', 'khungluoi'),
('MK_KL_012', 'MK_KL_012', '69000', 'IMG/MAUKHUNG_KHUNGLUOI/IMG/MK_KL_IMG- (12).jpg', 'IMG/MAUKHUNG_KHUNGLUOI/SMALL_IMG/MK_KL_SMALL_IMG- (12).jpg', 'khungluoi'),
('MK_LK_001', 'MK_LK_001', '69000', 'IMG/MAUKHUNG_KHUNGLUOI/IMG/MK_KL_IMG- (1).jpg', 'IMG/MAUKHUNG_KHUNGLUOI/SMALL_IMG/MK_KL_SMALL_IMG- (1).jpg', 'khungluoi'),
('TRANGCHU_001', 'TRANGCHU_001', '69000', 'IMG/TRANGCHU/IMG/TRANGCHU_IMG- (1).jpg', 'IMG/TRANGCHU/SMALL_IMG/TRANGCHU_SMALL_IMG- (1).jpg', 'trangchu'),
('TRANGCHU_002', 'TRANGCHU_002', '69000', 'IMG/TRANGCHU/IMG/TRANGCHU_IMG- (2).jpg', 'IMG/TRANGCHU/SMALL_IMG/TRANGCHU_SMALL_IMG- (2).jpg', 'trangchu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `ID` text COLLATE utf8_unicode_ci NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`(255))
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`ID`, `type`, `image`) VALUES
('﻿MC_SLIDER_01', 'mauchu', 'IMG/MAUCHU/SLIDER/MC_SLIDER- (1).jpg'),
('MC_SLIDER_02', 'mauchu', 'IMG/MAUCHU/SLIDER/MC_SLIDER- (2).jpg'),
('MK_KD_SLIDER_01', 'khungdon', 'IMG/MAUKHUNG_KHUNGDON/SLIDER/MK_KD_SLIDER- (1).jpg'),
('MK_KL_SLIDER_01', 'khungluoi', 'IMG/MAUKHUNG_KHUNGLUOI/SLIDER/MK_KL_SLIDER- (1).jpg'),
('TRANGCHU_01', 'trangchu', 'IMG/TRANGCHU/SLIDER/TRANGCHU- (1).jpg'),
('TRANGCHU_02', 'trangchu', 'IMG/TRANGCHU/SLIDER/TRANGCHU- (2).jpg'),
('TRANGCHU_03', 'trangchu', 'IMG/TRANGCHU/SLIDER/TRANGCHU- (3).jpg'),
('TRANGCHU_04', 'trangchu', 'IMG/TRANGCHU/SLIDER/TRANGCHU- (4).jpg'),
('TRANGCHU_05', 'trangchu', 'IMG/TRANGCHU/SLIDER/TRANGCHU- (5).jpg'),
('TRANGCHU_06', 'trangchu', 'IMG/TRANGCHU/SLIDER/TRANGCHU- (6).jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `type` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`type`(255))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`type`) VALUES
('khungdon'),
('khungluoi'),
('mauchu'),
('trangchu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
