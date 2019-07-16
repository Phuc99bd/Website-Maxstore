-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 16, 2019 lúc 05:30 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `websitebanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accout`
--

CREATE TABLE `accout` (
  `USERNAME` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `PASSWORD` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `FULLNAME` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ROLE` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `accout`
--

INSERT INTO `accout` (`USERNAME`, `PASSWORD`, `FULLNAME`, `ROLE`) VALUES
('aaaa', 'aa', 'aa', 'admin'),
('admin', 'admin', 'Võ Công Phúc', 'Admin'),
('Heo', 'Heo', 'Heo', 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `idct` int(11) NOT NULL,
  `MADH` int(11) NOT NULL,
  `MASP` int(13) NOT NULL,
  `COUNT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`idct`, `MADH`, `MASP`, `COUNT`) VALUES
(6, 24, 2, 1),
(7, 24, 3, 1),
(8, 25, 2, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgiasanpham`
--

CREATE TABLE `danhgiasanpham` (
  `id` int(11) UNSIGNED NOT NULL,
  `FULLNAME` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `MASP` int(13) DEFAULT NULL,
  `Noidung` varchar(500) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Ngaythem` date DEFAULT NULL,
  `Chatluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgiasanpham`
--

INSERT INTO `danhgiasanpham` (`id`, `FULLNAME`, `MASP`, `Noidung`, `Ngaythem`, `Chatluong`) VALUES
(51, 'Phúc Võ Công', 1, 'aadwa', '2019-07-14', 4),
(85, 'Phúc Võ Công', 1, 'wqw', '2019-07-14', 5),
(86, 'daw', 1, 'dwaadwa', '2019-07-14', 1),
(87, 'Phúc Võ Công', 2, 'Good', '2019-07-14', 3),
(88, 'Phúc Võ Công', 5, 'hƯỞNG mặt cặc', '2019-07-15', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `MADH` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `TrangthaiDH` varchar(20) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Ngaydathang` date DEFAULT NULL,
  `GiatriDH` int(11) DEFAULT NULL,
  `Loinhan` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `TENKH` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `EMAIL` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `SDT` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `DIACHI` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`MADH`, `idkh`, `TrangthaiDH`, `Ngaydathang`, `GiatriDH`, `Loinhan`, `TENKH`, `EMAIL`, `SDT`, `DIACHI`) VALUES
(24, 25, '0', '2019-07-12', 329000, '', 'Phúc Võ Công', 'phuccog@gmail.com', '0383197989', '113/37/81 tổ 3 khu phố 6, Phường phú hòa'),
(25, 25, '0', '2019-07-13', 215000, '', 'Phúc Võ Công', 'phuccog@gmail.com', '0383197989', '113/37/81 tổ 3 khu phố 6, Phường phú hòa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `PASSWORD` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `FULLLNAME` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `EMAIL` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SDT` varchar(13) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Diachi` varchar(500) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`ID`, `USERNAME`, `PASSWORD`, `FULLLNAME`, `EMAIL`, `SDT`, `Diachi`) VALUES
(1, 'Huongheo', 'heo', 'Tr?n Thanh H??ng', 'huonglol@gmail.com', '032893821', NULL),
(4, '1724801030100', '11', 'daw', 'phuccog@gmail.com', '0383197989', '113/37/81 tổ 3 khu phố 6, Phường phú hòa'),
(25, 'cccc', '1', 'Phúc Võ Công', 'phuccog@gmail.com', '03831979893', '113/37/81 tổ 3 khu phố 6, Phường phú hòa'),
(32, 'aacs', '11', 'Phúc Võ Công', 'phuccog@gmail.com', '0383197989', '113/37/81 tổ 3 khu phố 6, Phường phú hòa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `idsp` int(11) NOT NULL,
  `Nameloaisp` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`idsp`, `Nameloaisp`) VALUES
(1, 'Chăm sóc sức khỏe và làm đẹp'),
(2, 'Xe & ghế'),
(3, 'Đồ dùng uống sữa & ăn đạm'),
(4, 'Đồ gia dụng'),
(7, 'Chăm sóc cá nhân'),
(8, 'Chăm sóc cơ thể'),
(9, 'Chăm sóc da mặt'),
(10, 'Trang điểm'),
(11, 'Thế giới cho bé'),
(12, 'Tả & Dụng cụ vệ sinh'),
(13, 'Đồ chơi thú nhồi bông'),
(15, 'Tin học và thiết bị số'),
(16, 'Máy tính và linh kiện máy tính'),
(17, 'Thiết bị âm thanh'),
(18, 'Thiết bị mạng và lưu trữ'),
(19, 'Thiết bị số'),
(20, 'Tivi - Thiết bị giải trí'),
(21, 'Điện thoại - Máy tính bảng'),
(22, 'Thời trang và phụ kiện'),
(23, 'Thời trang Nam'),
(24, 'Thời trang Nữ'),
(25, 'Bếp & Phòng ăn'),
(26, 'Trang trí nội thật & nhà cửa'),
(27, 'Tủ đựng'),
(28, 'Điện gia dụng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` int(13) NOT NULL,
  `TENSP` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GIA` int(13) NOT NULL,
  `SOLUONG` int(10) NOT NULL,
  `Image` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `idsp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `TENSP`, `GIA`, `SOLUONG`, `Image`, `idsp`) VALUES
(1, 'Bim Dán Sua Pommette - 56 Miếng', 550000, 200, 'bim-so-4-50x50.jpg', 12),
(2, 'Bộ 5 Hộp Đựng Giày Trong Suốt', 45000, 100, 'bo-5-hop-dung-giay-trong-suot-50x50.jpg', 4),
(3, 'Tủ Vải Đựng Giày Khung Thép 5 Tầng', 249000, 98, 'tu-giay-50x50.jpg', 4),
(4, 'Thảm Chùi Chân Hello Kitty Đáng Yêu', 82000, 100, 'tham-chui-chan-50x50.jpg', 1),
(5, 'Đèn Led Cảm Ứng Thông Minh EverBrite Sạc Bằng Năn', 82000, 100, 'den-chieu-sang-cam-ung-50x50.jpg', 2),
(6, 'Thảm Ghép Chống Trơn Trượt Sàn Nhà Tắm', 82000, 100, 'tham-chong-tron-50x50.jpg', 4),
(7, 'Chảo Đá Nướng Thịt Kiểu Hàn Quốc', 299000, 100, 'chao-nuong-hq-50x50.jpg', 4),
(18, 'Kem Tẩy Lông In Shower Comfort Hair Cream', 165000, 50, 'kem-tay-long-50x50.jpg', 1),
(19, 'Kem Tẩy Lông Veet Silk And Fresh Technology', 110000, 25, 'kem-tay-long-veet-50x50.jpg', 1),
(21, 'Kem dưỡng da tay Q10 hãng Kose Nhật', 120000, 50, 'kem-duong-da-tay-q10-50x50.jpg', 1),
(22, 'Kem Giữ Ẩm Và Bảo Vệ Da Dr.Sante 80ml', 159000, 45, 'kem-giu-am-50x50.jpg', 1),
(23, 'Kem Làm Trắng Kiểm Soát Dầu Và Ngăn Ngừa Mụn MILKY', 545000, 46, 'kem-lam-trang-da-50x50.jpg', 1),
(24, 'Dầu Gội Tắm Xả Suave Men 3in1 Shampoo', 165000, 43, 'dau-goi-men-50x50.jpg', 7),
(27, 'Sữa tắm Neutrogena Replenishing Shower Gel', 270000, 56, 'sua-tam-neutrogen-50x50.jpg', 7),
(28, 'Dầu dưỡng da Timeless Pure Squalane Oil', 170000, 50, 'dau-duong-da-timeless-pure-natural-serum-squalane-oil-50x50.png', 1),
(29, 'Serum Skinfood Black Sugar Perfect First Serum', 420000, 24, 'serum-duong-da-meditree-kakadu-plum-30g-50x50.jpg', 9),
(30, 'Kem Dưỡng Da Mặt Green Pharmacy 100ml', 100000, 54, 'kem-duong-da-mat-lam-trang-da-green-pharmacy-100ml-50x50.jpg', 9),
(31, 'Son môi Maybelline Color Show Lipstick 205 Red Sir', 189000, 46, '2a-500x515-50x50.jpg', 9),
(32, 'Mỹ phẩm xách tay SHISEIDO', 235000, 45, '4d-500x515-50x50.jpg', 10),
(33, 'Bộ mỹ phẩm trang điểm chuyên nghiệp', 653000, 66, '6a-500x515-50x50.jpg', 10),
(34, 'Ngũ Cốc Dinh Dưỡng Calbee Nhật Bản Túi 800g', 653000, 44, 'banh-ngu-coc-50x50.jpg', 11),
(35, 'Máy Hút Sữa Bằng Tay Jimmy Bear', 164000, 67, 'may-hut-su-bang-tay-50x50.jpg', 11),
(36, 'Bát Ăn Chia Ngăn Cho Bé', 500000, 46, 'bat-an-chia-ngan-50x50.jpg', 11),
(37, 'Bình Ủ Cháo Giữ Nhiệt Cao Cấp Inox 450ml', 130000, 44, 'binh-u-chao-50x50.jpg', 11),
(38, 'Vali Hình Xe Vespa Chòi Chân Royal Care - RC217', 695000, 47, 'vali-keo-50x50.jpg', 11),
(39, 'Giấy Ướt Chống Muỗi Wakodo 20 Tờ', 145000, 69, 'giay-uot-50x50.gif', 1),
(40, 'Bỉm Dán Số 3 Pommette - 60 Miếng', 490000, 24, 'bim-so-3-50x50.jpg', 12),
(41, 'Bỉm Dán Số 1 Pommette - 27 Miếng (Từ 2 Đến 5kg)', 250000, 26, 'bimdanso1pommette-50x50.jpg', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supportproduct`
--

CREATE TABLE `supportproduct` (
  `MASP` int(13) DEFAULT NULL,
  `Image2` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Image3` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Giasell` int(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `supportproduct`
--

INSERT INTO `supportproduct` (`MASP`, `Image2`, `Image3`, `Giasell`) VALUES
(1, 'bim-so-4-228x228.jpg', NULL, 500000),
(2, 'bo-5-hop-dung-giay-trong-suot-228x228.jpg', NULL, 40000),
(7, 'chao-nuong-hq-228x228.jpg', NULL, NULL),
(4, 'tham-chui-chan-228x228.jpg', NULL, NULL),
(6, 'tham-chong-tron-228x228.jpg', NULL, NULL),
(3, 'tu-giay-228x228.jpg', NULL, NULL),
(5, 'den-chieu-sang-cam-ung-228x228.jpg', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accout`
--
ALTER TABLE `accout`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`idct`),
  ADD KEY `MADH` (`MADH`),
  ADD KEY `MASP` (`MASP`);

--
-- Chỉ mục cho bảng `danhgiasanpham`
--
ALTER TABLE `danhgiasanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ss` (`MASP`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MADH`),
  ADD KEY `idkh` (`idkh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`idsp`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`),
  ADD UNIQUE KEY `TENSP` (`TENSP`),
  ADD KEY `idsp` (`idsp`);

--
-- Chỉ mục cho bảng `supportproduct`
--
ALTER TABLE `supportproduct`
  ADD UNIQUE KEY `MASP` (`MASP`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `idct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `danhgiasanpham`
--
ALTER TABLE `danhgiasanpham`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MADH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MASP` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MADH`) REFERENCES `donhang` (`MADH`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`);

--
-- Các ràng buộc cho bảng `danhgiasanpham`
--
ALTER TABLE `danhgiasanpham`
  ADD CONSTRAINT `ss` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`ID`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `loaisanpham` (`idsp`);

--
-- Các ràng buộc cho bảng `supportproduct`
--
ALTER TABLE `supportproduct`
  ADD CONSTRAINT `supportproduct_ibfk_1` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
