-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2014 at 06:09 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thoitrangtre`
--

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
(7, 64, 5, '1890000', 3, 2014),
(6, 63, 2, '3250000', 3, 2014),
(4, 4, 2, '200000', 1, 2013),
(5, 4, 2, '250000', 1, 2013);

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
(2, 'Thời Trang Nữ', 0),
(3, 'Phụ Kiện Đẹp', 1);

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
  `TinhTrang` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'Chưa giao hàng',
  PRIMARY KEY (`idHoaDon`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`idHoaDon`, `idUser`, `ThoiGianDatHang`, `ThoiGianGiaoHang`, `TenKhachHang`, `SoCMND`, `SoDT`, `DiaChi`, `TenQuanHuyen`, `GhiChu`, `TinhTrang`) VALUES
(1, 1, '2014-06-01 00:00:00', '2014-06-18 00:00:00', 'Đặng Văn Hùng', '163057816', '0939543548', 'O4, Quang Trung, Gò Vấp', 'HCM', 'Quần Jean', 'Chưa giao hàng'),
(8, 8, '2014-06-29 06:22:00', NULL, 'hùng', '121446456', '123456', 'hcm', 'Quận 1', '', 'Chưa giao hàng');

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
(5, 2, 'Váy - Đầm Bobo1', 1);

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
  `idCL` int(255) NOT NULL DEFAULT '0',
  `TenSP` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL,
  `NgayCapNhat` date NOT NULL DEFAULT '0000-00-00',
  `Gia` int(15) NOT NULL,
  `UrlHinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoLanXem` int(15) DEFAULT '0',
  `SoLuongTonKho` int(15) DEFAULT '0',
  `SoLuongDaBan` int(15) DEFAULT '0',
  `AnHien` int(15) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idSP`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=69 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `idLoai`, `idCL`, `TenSP`, `MoTa`, `NgayCapNhat`, `Gia`, `UrlHinh`, `SoLanXem`, `SoLuongTonKho`, `SoLuongDaBan`, `AnHien`) VALUES
(1, 1, 1, 'Áo Sơ Mi Nam', '- Áo Sơ Mi Nam Thời Trang – Kiểu Dáng Tay Ngắn Trẻ Trung, Năng Động – Phối Màu Sắc Cá Tính – Cho Diện Mạo Phái Mạnh Thêm Chỉn Chu Nơi Công Sở.\r\nThiết kế form ôm nhẹ body còn mang đến cho phái mạnh sự tự tin với vẻ ngoài hoàn hảo, đầy cuốn hút.\r\n\r\n- Áo màu hồng nhạt, cổ và túi phối màu cách điệu tạo cho bạn nam một diện mạo mới trẻ trung.\r\n\r\n- Bạn có thể mix áo cùng các kiểu kaki, quần Âu lịch lãm đến công sở.\r\n- Xuất xứ: Việt Nam\r\n\r\n- Kiểu dáng: Áo sơ mi nam, tay ngắn\r\n\r\n- Trọng lượng: 180gr\r\n- Size: S, M, L\r\n', '2014-06-06', 120000, 's001.jpg', 442, 0, 14, 1),
(2, 1, 1, 'Áo Sơ Mi Nam SD 22 Larvana', '- Áo Sơ Mi Nam SD 22 Larvana – Thiết Kế Tinh Tế, Form Dáng Đẹp – Tạo Phong Cách Thời Trang Lịch Lãm, Nam Tính Cho Phái Mạnh.\r\n- Áo sơ mi nam thiết kế đơn giản với tay dài, cổ bẻ, mang đến cho phái mạnh vẻ lịch lãm, sang trọng.\r\n\r\n- Chất liệu vải kate cao cấp, có khả năng thấm hút mồ hôi cao, giúp người mặc luôn cảm thấy thoải mái, kể cả khi tham gia các hoạt động ngoài trời.\r\n\r\n- Form áo chuẩn, phù hợp với vóc dáng của người Việt Nam.\r\n\r\n- Màu kem trang nhã, nam tính, có thể kết hợp với quần tây hay quần jeans, kaki đều đẹp.\r\n Xuất xứ: Việt Nam\r\n\r\n- Trọng lượng: 280 gr\r\n\r\n- Kiểu dáng: Áo sơ mi nam tay dài, có 2 túi trước ngực.\r\n- Size: S, M.', '2014-06-06', 129000, 's002.jpg', 109, 70, 21, 1),
(3, 1, 1, 'Quần Jean Nam', 'Quần Jean Nam, kiểu dáng đẹp, phù hợp với lứa tuổi thanh thiếu niên', '2014-06-18', 125000, 's003.jpg', 1110, 0, 110, 1),
(4, 3, 2, 'QUần Áo Nữ BD', 'Đẹp, Sang Trọng HOT', '2014-06-18', 250000, 's003.jpg', 111, 10, 10, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `TenDangNhap`, `MatKhau`, `HoVaTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `TinhThanh`, `SoDT`, `SoCMND`, `NgayCapCMND`, `NoiCapCMND`, `PhanQuyen`) VALUES
(1, 'wunguyen', '123456789', 'Nguyễn Thanh Vũ', 'Nam', '25/08/1993', '39 Lý Thường KIệt - phường 10-quận Tân Bình', 'Thành phố Hồ Chí Min', '0974937210', '024243099', '23/02/2004', 'Thành phố Hồ Chí Minh', 1),
(2, 'thuquynh', '123456789', 'NguyễnThị Thu Quỳnh', 'Nữ', '13/10/1992', '277 Phạm Văn Bạch', 'Thành phố Hồ Chí Min', '01218484519', '024232089', '04/05/2008', 'Thành phố Hồ Chí Minh', 0),
(8, 'danghung1080', '123456', 'hùng', 'Nam', '', 'hcm', 'Quận 1', '123456', '121446456', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
