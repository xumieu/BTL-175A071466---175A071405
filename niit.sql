-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 30, 2021 lúc 01:18 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `niit`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `Id` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_contact`
--

INSERT INTO `tbl_contact` (`Id`, `hoten`, `sdt`, `email`, `noidung`) VALUES
(1, 'Hoàng Thị Mai Loan', '123456', 'loanhtm@wru.vn', ''),
(2, 'Vũ Xuân Trường', '14785269', 'truong@gmail.com', 'Khóa học lập trình Web PHP');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khoahoc`
--

CREATE TABLE `tbl_khoahoc` (
  `Id` int(10) UNSIGNED NOT NULL,
  `tenkhoahoc` text NOT NULL,
  `hinhanh` text NOT NULL,
  `ngaykhaigiang` varchar(255) NOT NULL,
  `thoiluong` varchar(255) NOT NULL,
  `thoigian` varchar(255) NOT NULL,
  `lichhoc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_khoahoc`
--

INSERT INTO `tbl_khoahoc` (`Id`, `tenkhoahoc`, `hinhanh`, `ngaykhaigiang`, `thoiluong`, `thoigian`, `lichhoc`) VALUES
(1, 'Khóa học lập trình Web nâng cao', 'https://bizweb.dktcdn.net/thumb/large/100/278/960/products/khoa-hoc-lap-trinh-java-web-nang-cao.jpg?v=1528453057077', 'Liên Hệ', '50 giờ', 'Buổi tối', '3 buổi/tuần'),
(2, 'Khóa học Lập trình web ASP.NET\r\n', 'https://bizweb.dktcdn.net/thumb/large/100/278/960/products/asp-net.jpg?v=1527655754890', 'Liên hệ', '42 giờ', '18:00 - 20:00', '3 buổi/tuần'),
(3, 'Khóa học Internet of Things với Raspberry Pi', 'https://bizweb.dktcdn.net/thumb/large/100/278/960/products/iot-b1da8b2b-9fc8-42bf-b83e-414c4b1acd82.jpg?v=1527655636053', 'Liên hệ', '36 giờ', '18:00 - 21:00', 'Thứ 2 - 4 hoặc 3 -5'),
(4, 'Khóa học Automation Testing với Selenium', 'https://bizweb.dktcdn.net/thumb/large/100/278/960/products/auto.jpg?v=1527655593303', 'Liên hệ', '42 giờ', '18:00 - 20:00', '3 buổi/tuần'),
(5, 'Khóa học Tester & QA', 'https://bizweb.dktcdn.net/thumb/large/100/278/960/products/tester.jpg?v=1527655518577', 'Liên hệ', '44 giờ', '18:00 - 20:00', 'Thứ 3 -5'),
(6, 'Khóa đào tạo Java web 4.0', 'https://bizweb.dktcdn.net/thumb/large/100/278/960/products/java.jpg?v=1527655492913', 'Liên hệ', '92 giờ', '18:00 - 21:00', 'Thứ 2 - 6 hoặc 3 - 5'),
(7, 'Khoá học Lập trình PHP Doanh nghiệp 4.0', 'https://bizweb.dktcdn.net/thumb/large/100/278/960/products/php.jpg?v=1527655473077', 'Liên hệ', '93 giờ', '18:00 - 21:00', 'Thứ 2 - 6 hoặc 3 - 5'),
(8, 'Khoá học Lập trình Android với ứng dụng thực tế  ', 'https://bizweb.dktcdn.net/thumb/large/100/278/960/products/android.jpg?v=1527655384857', 'Liên hệ', '56 giờ', '19:30 - 21:30', 'Thứ 3 - 5 - 7 ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tintuc`
--

CREATE TABLE `tbl_tintuc` (
  `postid` int(10) NOT NULL,
  `tieude` varchar(255) DEFAULT NULL,
  `hinhanh` varchar(100) DEFAULT NULL,
  `mota` varchar(255) DEFAULT NULL,
  `tacgia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_tintuc`
--

INSERT INTO `tbl_tintuc` (`postid`, `tieude`, `hinhanh`, `mota`, `tacgia`) VALUES
(5, 'Khai giảng khóa Begin Robot cho các Kỹ sư Robot tương lai', 'tintuc_sukien_KhaiGiang.jpg', 'Ngày 01/07 vừa qua NIIT ICT Hà Nội đã khai giảng khóa học Begin Robot dành cho các kỹ sư Robot tương lai...', 'LH'),
(6, 'Khóa học Lập trình web với HTML5, CSS3 - FREE 28, 29/06', 'tintuc_sukien_Laptrinhweb.jpg', 'Ngày 28, 29/06 vừa qua NIIT - ICT Hà Nội đã triển khai thành công khóa học HTML5, CSS3 cho các bạn học viên, sinh viên.', 'LH'),
(7, 'Bảo vệ cuối khóa lớp Tester & QA - Tháng 06/2018', 'tintuc_sukien_Tester.jpg', 'Ngày 28/6 vừa qua là buổi học cuối cùng của lớp Tester & QA và cũng là buổi bảo và sản phẩm cuối khóa.', 'LH'),
(8, 'Thực hành', 'khoahoc_android.jpg', 'Thực hành', 'LH');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` int(10) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `username`, `password`, `email`, `fullname`, `role`) VALUES
(20, 'admin', '123456', 'admin@gmail.com', 'Hoàng Loan', 'admin'),
(21, '0824', '123456', 'lv@gmail.com', 'Lưu Vũ', 'user'),
(22, '0909', '123456', 'duong@gmail.com', 'Hoàng Dương', 'user'),
(23, '0302', '123456', 'hientk@gmai.com', 'Triệu Hiền', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `tbl_khoahoc`
--
ALTER TABLE `tbl_khoahoc`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD PRIMARY KEY (`postid`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_khoahoc`
--
ALTER TABLE `tbl_khoahoc`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `postid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
