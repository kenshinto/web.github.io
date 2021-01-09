-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 05, 2021 lúc 09:39 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ontap`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietvandon`
--

CREATE TABLE `chitietvandon` (
  `id` varchar(32) NOT NULL,
  `vandon` varchar(32) NOT NULL,
  `hanghoa_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietvandon`
--

INSERT INTO `chitietvandon` (`id`, `vandon`, `hanghoa_id`, `soluong`) VALUES
('DP079.1', 'DP079', 1, 12),
('HP659.1', 'HP659', 2, 15),
('PH799.1', 'PH799', 2, 12),
('QH212.1', 'QH212', 1, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `id` int(11) NOT NULL,
  `tenhh` varchar(255) NOT NULL,
  `hangsx_id` int(11) NOT NULL,
  `quycach` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`id`, `tenhh`, `hangsx_id`, `quycach`) VALUES
(1, 'Vinsmart pro', 1, 'Black'),
(2, 'IPhoneXSMax', 2, 'White');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsanxuat`
--

CREATE TABLE `hangsanxuat` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`id`, `ten`, `mota`) VALUES
(1, 'Vinsmart', 'VinGroup'),
(2, 'IPhone12', 'Apple');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `hovaten` varchar(255) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `hovaten`, `dienthoai`, `email`, `diachi`) VALUES
(1, 'Trần Duy Hưng', '0345029068', 'phong@gmail.com', 'Đằng Lâm, Hải Phòng'),
(2, 'Lê Thị Hoài Phương', '0977819294', 'phuong@gmail.com', 'Kiến An, Hải Phòng'),
(3, 'Nguyễn Hồng Phương', '0332003397', 'hongphuong@gmail.com', 'Lê Chân, Hải Phòng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `tendaydu` varchar(255) NOT NULL,
  `quyenhan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vandon`
--

CREATE TABLE `vandon` (
  `id` varchar(32) NOT NULL,
  `nhanvien_id` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `nguoinhan` varchar(255) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `diachi` text NOT NULL,
  `ngaygiaohang` datetime NOT NULL,
  `ghichu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vandon`
--

INSERT INTO `vandon` (`id`, `nhanvien_id`, `trangthai`, `nguoinhan`, `dienthoai`, `diachi`, `ngaygiaohang`, `ghichu`) VALUES
('DP079', 1, 0, 'Phùng Hoàng Đại', '0123456789', 'Kiến Thụy, Hải Phòng', '2021-01-06 00:00:00', 'hàng dễ vỡ'),
('HP659', 3, 0, 'Nguyễn Minh Phương', '0977819294', 'Kiến An', '2021-01-23 00:00:00', 'hàng dễ vỡ'),
('PH799', 3, 0, 'Nguyễn Minh Phương', '0977819294', 'Kiến An', '2021-01-29 00:00:00', 'hàng dễ vỡ'),
('QH212', 1, 0, 'Phùng Hoàng Đại', '033844774', 'Kiến Thụy, Hải Phòng', '2021-01-30 00:00:00', 'hàng dễ vỡ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietvandon`
--
ALTER TABLE `chitietvandon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hanghoa_id` (`hanghoa_id`),
  ADD KEY `vandon` (`vandon`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hangsx_id` (`hangsx_id`);

--
-- Chỉ mục cho bảng `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vandon`
--
ALTER TABLE `vandon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nhanvien_id` (`nhanvien_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietvandon`
--
ALTER TABLE `chitietvandon`
  ADD CONSTRAINT `chitietvandon_ibfk_1` FOREIGN KEY (`hanghoa_id`) REFERENCES `hanghoa` (`id`),
  ADD CONSTRAINT `chitietvandon_ibfk_2` FOREIGN KEY (`vandon`) REFERENCES `vandon` (`id`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`hangsx_id`) REFERENCES `hangsanxuat` (`id`);

--
-- Các ràng buộc cho bảng `vandon`
--
ALTER TABLE `vandon`
  ADD CONSTRAINT `vandon_ibfk_1` FOREIGN KEY (`nhanvien_id`) REFERENCES `nhanvien` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
