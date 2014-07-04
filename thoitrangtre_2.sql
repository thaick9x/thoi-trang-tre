-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2014 at 02:02 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thoitrangtre`
--
CREATE DATABASE IF NOT EXISTS `thoitrangtre` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `thoitrangtre`;

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `idHoaDon` int(255) NOT NULL,
  `idSP` int(255) NOT NULL,
  `SoLuong` int(255) NOT NULL,
  `Gia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ThangXuatHD` int(11) NOT NULL,
  `NamHD` int(11) NOT NULL,
  PRIMARY KEY (`idHoaDon`,`idSP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`idHoaDon`, `idSP`, `SoLuong`, `Gia`, `ThangXuatHD`, `NamHD`) VALUES
(3, 4, 5, '1890000', 3, 2014),
(2, 3, 2, '3250000', 3, 2014),
(1, 1, 2, '200000', 1, 2013),
(1, 2, 2, '250000', 1, 2013),
(4, 4, 1, '160000', 6, 2014),
(5, 4, 1, '160000', 6, 2014),
(5, 2, 1, '129000', 6, 2014);

-- --------------------------------------------------------

--
-- Table structure for table `chungloaisanpham`
--

CREATE TABLE IF NOT EXISTS `chungloaisanpham` (
  `idCL` int(255) NOT NULL AUTO_INCREMENT,
  `TenCL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AnHien` int(255) NOT NULL,
  PRIMARY KEY (`idCL`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `chungloaisanpham`
--

INSERT INTO `chungloaisanpham` (`idCL`, `TenCL`, `AnHien`) VALUES
(1, 'Thời Trang Nam', 1),
(2, 'Thời Trang nữ', 1),
(3, 'Phụ Kiện', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `idHoaDon` int(255) NOT NULL AUTO_INCREMENT,
  `idUser` int(255) NOT NULL DEFAULT '0',
  `ThoiGianDatHang` datetime DEFAULT NULL,
  `ThoiGianGiaoHang` datetime DEFAULT NULL,
  `TenKhachHang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoCMND` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `SoDT` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TenQuanHuyen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GhiChu` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `idTinhTrang` int(11) DEFAULT '1',
  PRIMARY KEY (`idHoaDon`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`idHoaDon`, `idUser`, `ThoiGianDatHang`, `ThoiGianGiaoHang`, `TenKhachHang`, `SoCMND`, `SoDT`, `DiaChi`, `TenQuanHuyen`, `GhiChu`, `idTinhTrang`) VALUES
(1, 1, '2014-06-01 00:00:00', '2014-06-18 00:00:00', 'Đặng Văn Hùng', '163057816', '0939543548', 'O4, Quang Trung, Gò Vấp', 'HCM', 'Quần Jean', 1),
(2, 8, '2014-06-29 06:22:00', '2014-07-03 00:00:00', 'hùng', '121446456', '123456', 'hcm', 'Quận 1', '', 3),
(3, 8, '2014-06-30 06:23:00', '2014-07-05 00:00:00', 'hùng', '121446456', '123456', 'hcm', 'Quận 1', '', 2),
(4, 8, '2014-06-30 06:54:00', '2014-07-05 00:00:00', 'hùng', '121446456', '123456', 'hcm', 'Quận 1', '', 4),
(5, 8, '2014-06-30 06:10:00', '2014-07-05 00:00:00', 'hùng', '121446456', '123456', 'hcm', 'Quận 1', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `idLoai` int(255) NOT NULL AUTO_INCREMENT,
  `idCL` int(255) NOT NULL,
  `TenLoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AnHien` int(255) NOT NULL,
  PRIMARY KEY (`idLoai`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=57 ;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`idLoai`, `idCL`, `TenLoai`, `AnHien`) VALUES
(1, 1, 'Áo Nam', 1),
(2, 1, 'Quần Nam', 1),
(3, 2, 'Áo Nữ', 1),
(4, 2, 'Quần Nữ', 1),
(5, 2, 'Váy- Đầm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE IF NOT EXISTS `nhacungcap` (
  `idNCC` int(11) NOT NULL AUTO_INCREMENT,
  `TenNCC` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idQH` int(11) NOT NULL,
  `ThongTin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AnHien` int(1) NOT NULL,
  PRIMARY KEY (`idNCC`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `quanhuyen`
--

CREATE TABLE IF NOT EXISTS `quanhuyen` (
  `idQH` int(255) NOT NULL AUTO_INCREMENT,
  `TenQuanHuyen` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idQH`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `quanhuyen`
--

INSERT INTO `quanhuyen` (`idQH`, `TenQuanHuyen`) VALUES
(1, 'Quận 1'),
(2, 'Quận 2'),
(3, 'Quận 3'),
(4, 'Quận 4'),
(5, 'Quận 5'),
(6, 'Quận 6'),
(7, 'Quận 7'),
(8, 'Quận 8'),
(9, 'Quận 9'),
(10, 'Quận 10'),
(11, 'Quận 11'),
(12, 'Quận 12'),
(13, 'Bình Thạnh'),
(14, 'Gò Vấp'),
(15, 'Tân Bình'),
(16, 'Bình Tân'),
(17, 'Tân Phú'),
(18, 'Phú Nhuận'),
(19, 'Thủ Đức'),
(20, 'Bình Chánh'),
(21, 'Cần Giờ'),
(22, 'Củ Chi'),
(23, 'Hóc Môn'),
(24, 'Nhà Bè');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `idSP` int(255) NOT NULL AUTO_INCREMENT,
  `idLoai` int(255) NOT NULL DEFAULT '0',
  `TenSP` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idNCC` int(11) NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL,
  `NgayCapNhat` date NOT NULL DEFAULT '0000-00-00',
  `Gia` int(15) NOT NULL,
  `UrlHinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoLanXem` int(15) DEFAULT '0',
  `SoLuongTonKho` int(15) DEFAULT '0',
  `SoLuongDaBan` int(15) DEFAULT '0',
  `AnHien` int(15) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idSP`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=163 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `idLoai`, `TenSP`, `idNCC`, `MoTa`, `NgayCapNhat`, `Gia`, `UrlHinh`, `SoLanXem`, `SoLuongTonKho`, `SoLuongDaBan`, `AnHien`) VALUES
(1, 3, 'Áo Sơ Mi Nam', 0, '<p>\r\n	- &Aacute;o Sơ Mi Nam Thời Trang &ndash; Kiểu D&aacute;ng Tay Ngắn Trẻ Trung, Năng Động &ndash; Phối M&agrave;u Sắc C&aacute; T&iacute;nh &ndash; Cho Diện Mạo Ph&aacute;i Mạnh Th&ecirc;m Chỉn Chu Nơi C&ocirc;ng Sở. Thiết kế form &ocirc;m nhẹ body c&ograve;n mang đến cho ph&aacute;i mạnh sự tự tin với vẻ ngo&agrave;i ho&agrave;n hảo, đầy cuốn h&uacute;t. - &Aacute;o m&agrave;u hồng nhạt, cổ v&agrave; t&uacute;i phối m&agrave;u c&aacute;ch điệu tạo cho bạn nam một diện mạo mới trẻ trung. - Bạn c&oacute; thể mix &aacute;o c&ugrave;ng c&aacute;c kiểu kaki, quần &Acirc;u lịch l&atilde;m đến c&ocirc;ng sở. - Xuất xứ: Việt Nam - Kiểu d&aacute;ng: &Aacute;o sơ mi nam, tay ngắn - Trọng lượng: 180gr - Size: S, M, L</p>\r\n<p>\r\n	da sua lan 2</p>\r\n', '2014-06-06', 120000, 's001.jpg', 463, 120, 14, 1),
(2, 1, 'Áo Sơ Mi Nam SD 22 Larvana', 0, '- Áo Sơ Mi Nam SD 22 Larvana – Thiết Kế Tinh Tế, Form Dáng Đẹp – Tạo Phong Cách Thời Trang Lịch Lãm, Nam Tính Cho Phái Mạnh.\n- Áo sơ mi nam thiết kế đơn giản với tay dài, cổ bẻ, mang đến cho phái mạnh vẻ lịch lãm, sang trọng.\n\n- Chất liệu vải kate cao cấp, có khả năng thấm hút mồ hôi cao, giúp người mặc luôn cảm thấy thoải mái, kể cả khi tham gia các hoạt động ngoài trời.\n\n- Form áo chuẩn, phù hợp với vóc dáng của người Việt Nam.\n\n- Màu kem trang nhã, nam tính, có thể kết hợp với quần tây hay quần jeans, kaki đều đẹp.\n Xuất xứ: Việt Nam\n\n- Trọng lượng: 280 gr\n\n- Kiểu dáng: Áo sơ mi nam tay dài, có 2 túi trước ngực.\n- Size: S, M.', '2014-06-06', 129000, 's002.jpg', 134, 70, 21, 1),
(3, 1, 'Quần Jean Nam', 0, 'Quần Jean Nam, kiểu dáng đẹp, phù hợp với lứa tuổi thanh thiếu niên', '2014-06-18', 125000, 's003.jpg', 1037, 0, 110, 1),
(4, 4, 'Quần Jean nữ', 0, '<p>\r\n	Jean đẹp, sang trọng, ph&ugrave; hợp với nhiều lứa tuổi</p>\r\n<p>\r\n	sua ne</p>\r\n<p>\r\n	sua lan 2</p>\r\n<p>\r\n	sua lan 3</p>\r\n', '2014-06-04', 1600000, 's003.jpg', 46, 90, 5, 1),
(5, 5, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(6, 5, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(7, 5, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(8, 5, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(9, 5, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(10, 4, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(11, 4, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(12, 4, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(13, 3, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(14, 3, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(15, 3, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(16, 3, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(17, 4, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(18, 4, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(19, 2, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(20, 2, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(21, 2, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(22, 2, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(23, 2, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(24, 2, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(25, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(26, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(27, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(28, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(29, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(30, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(31, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(32, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(33, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(34, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(35, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(36, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(37, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(38, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(39, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(40, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(41, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(42, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(43, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(44, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(45, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(46, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(47, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(48, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(49, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(50, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(51, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(52, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(53, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(54, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(55, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(56, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(57, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(58, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(59, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(60, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(61, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(62, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(63, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(64, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(65, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(66, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(67, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(68, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(69, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(70, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(71, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(72, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(73, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(74, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(75, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(76, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(77, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(78, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(79, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(80, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(81, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(82, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(83, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(84, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(85, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(86, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(87, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(88, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(89, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(90, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(91, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(92, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(93, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(94, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(95, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(96, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(97, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1),
(98, 1, 'thai', 0, 'sp cua thai', '2014-07-01', 1000000, 's001.jpg', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE IF NOT EXISTS `tinhtrang` (
  `idTinhTrang` int(11) NOT NULL AUTO_INCREMENT,
  `TinhTrang` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idTinhTrang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`idTinhTrang`, `TinhTrang`) VALUES
(1, 'Xem'),
(2, 'Chưa giao hàng'),
(3, 'Hoàn tất'),
(4, 'Hủy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(255) NOT NULL AUTO_INCREMENT,
  `TenDangNhap` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `HoVaTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgaySinh` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TinhThanh` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `SoCMND` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `NgayCapCMND` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NoiCapCMND` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PhanQuyen` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `TenDangNhap`, `MatKhau`, `HoVaTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `TinhThanh`, `SoDT`, `SoCMND`, `NgayCapCMND`, `NoiCapCMND`, `PhanQuyen`) VALUES
(1, 'wunguyen', '25f9e794323b453885f5181f1b624d', 'Nguyễn Thanh Vũ', 'Nam', '25/08/1993', '39 Lý Thường KIệt - phường 10-quận Tân Bình', 'Thành phố Hồ Chí Min', '0974937210', '024243099', '23/02/2004', 'Thành phố Hồ Chí Minh', 1),
(2, 'thuquynh', '25f9e794323b453885f5181f1b624d', 'NguyễnThị Thu Quỳnh', 'Nữ', '13/10/1992', '277 Phạm Văn Bạch', 'Thành phố Hồ Chí Min', '01218484519', '024232089', '04/05/2008', 'Thành phố Hồ Chí Minh', 0),
(9, 'thai', '1aafcfcd9efdd2e7ac43e80ce77bba', 'Chu Quang Thái', 'Nam', NULL, '123 abc F1 Q2', 'TPHCM', '0984993100', '023456789', NULL, NULL, 1),
(15, 'danghung1080', 'e10adc3949ba59abbe56e057f20f88', 'hùng', 'Nam', '', 'hcm', 'Quận 1', '123456', '121446456', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
