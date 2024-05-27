-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 12:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wd18313`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(6) NOT NULL,
  `iduser` int(6) NOT NULL DEFAULT 0,
  `madonhang` varchar(50) NOT NULL,
  `nguoidat_ten` varchar(50) NOT NULL,
  `nguoidat_email` varchar(50) NOT NULL,
  `nguoidat_phone` varchar(20) NOT NULL,
  `nguoidat_diachi` varchar(100) NOT NULL,
  `nguoinhan_ten` varchar(50) DEFAULT NULL,
  `nguoinhan_diachi` varchar(100) DEFAULT NULL,
  `nguoinhan_phone` varchar(20) DEFAULT NULL,
  `total` int(9) NOT NULL,
  `ship` int(6) NOT NULL DEFAULT 0,
  `voucher` int(6) NOT NULL DEFAULT 0,
  `tong_thanhtoan` int(9) NOT NULL,
  `pttt` varchar(30) NOT NULL COMMENT '0: COD; 1: CK; 2: ví điện tử'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `madonhang`, `nguoidat_ten`, `nguoidat_email`, `nguoidat_phone`, `nguoidat_diachi`, `nguoinhan_ten`, `nguoinhan_diachi`, `nguoinhan_phone`, `total`, `ship`, `voucher`, `tong_thanhtoan`, `pttt`) VALUES
(16, 46, 'Ipun46-113141-13102023', 'Hoof1', 'Hoof1@gmail.com', '0000000001', 'tân  chánh hiệp', '', '', '', 1190000, 0, 10000, 1180000, 'Tiền Mặt'),
(17, 46, 'Ipun46-121859-13102023', 'Nguyễn Phi Nguyễn', 'phinguyenq12@gmail.com', '0775183622', '285/33/11 Tân Chánh Hiệp 10, quận 12', 'Dương', ' Tân Chánh Hiệp 10, quận 12', '0764572117', 900000, 0, 10000, 890000, 'Tiền Mặt'),
(18, 46, 'Ipun46-191436-13102023', 'Hoof1 đơn hàng 3 test', 'phinguyenq12@gmail.com', '0775183622', 'Thành phố Sài Gòn', '', '', '', 1685000, 0, 10000, 1675000, 'Tiền Mặt'),
(19, 39, 'Ipun39-045124-14102023', 'Dương Phi ', 'a@gmail.com', '0764572117', 'Tân Chánh Hiệp Quận 12 TPHCM', 'Phi Nguyễn', 'Tân Chánh Hiệp 10', '0775183622', 3455000, 0, 10000, 3445000, 'Tiền Mặt'),
(21, 46, 'Ipun46-064237-15102023', 'Hoof1', 'Hoof1@gmail.com', '0000000001', 'tân  chánh hiệp', '', '', '', 330000, 0, 10000, 320000, 'Tiền Mặt'),
(22, 46, 'Ipun46-064446-15102023', 'Hoof1', 'Hoof1@gmail.com', '0000000001', 'tân  chánh hiệp', '', '', '', 320000, 0, 10000, 310000, 'Tiền Mặt'),
(23, 39, 'Ipun39-103813-15102023', 'Dương Phi ', 'a@gmail.com', '0775183622', 'Tân Chánh Hiệp Quận 12 TPHCM', '', '', '', 290000, 0, 10000, 280000, 'Tiền Mặt'),
(24, 39, 'Ipun39-104106-15102023', 'Dương Phi ', 'a@gmail.com', '0775183622', 'Tân Chánh Hiệp Quận 12 TPHCM', '', '', '', 330000, 0, 10000, 320000, 'Tiền Mặt'),
(25, 39, 'Ipun39-104306-15102023', 'Dương Phi ', 'a@gmail.com', '0775183622', 'Tân Chánh Hiệp Quận 12 TPHCM', '', '', '', 320000, 0, 10000, 310000, 'Tiền Mặt'),
(26, 39, 'Ipun39-104421-15102023', 'Dương Phi ', 'a@gmail.com', '0775183622', 'Tân Chánh Hiệp Quận 12 TPHCM', '', '', '', 320000, 0, 10000, 310000, 'Ví điện tử'),
(27, 46, 'Ipun46-111018-15102023', 'Hoof1', 'Hoof1@gmail.com', '0000000001', 'tân  chánh hiệp', '', '', '', 260000, 0, 10000, 250000, 'Tiền Mặt'),
(28, 46, 'Ipun46-111245-15102023', 'Hoof1', 'Hoof1@gmail.com', '0000000001', 'tân  chánh hiệp', '', '', '', 0, 0, 10000, -10000, 'Tiền Mặt'),
(29, 46, 'Ipun46-111438-15102023', 'Hoof1', 'Hoof1@gmail.com', '0000000001', 'tân  chánh hiệp', '', '', '', 320000, 0, 10000, 310000, 'Tiền Mặt'),
(30, 44, 'Ipun44-000646-16102023', 'Nguyễn Phi Nguyễn', 'asd@gmail.com', '0123456789', 'tân  chánh hiệp', '', '', '', 560000, 0, 10000, 550000, 'Tiền Mặt');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(9) NOT NULL,
  `iduser` int(6) NOT NULL,
  `idpro` int(6) NOT NULL,
  `price` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(30) NOT NULL,
  `ngaymua` date DEFAULT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(6) NOT NULL,
  `idbill` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `price`, `name`, `img`, `ngaymua`, `soluong`, `thanhtien`, `idbill`) VALUES
(12, 46, 14, 430000, 'Roll in Love', 'sp14.png', '2023-10-16', 2, 860000, 16),
(13, 46, 24, 330000, 'Vanicherry', 'bn8.png', '2023-10-01', 1, 330000, 16),
(14, 46, 18, 300000, 'Chocories', 'bn2.png', '2023-10-04', 1, 300000, 17),
(15, 46, 8, 600000, 'Choco Therapy', 'sp8.png', '2023-10-06', 1, 600000, 17),
(16, 46, 10, 590000, 'Orient Scent', 'sp10.png', '2023-10-26', 1, 590000, 18),
(17, 46, 13, 430000, 'All Yours', 'sp13.png', '2023-09-11', 1, 430000, 18),
(18, 46, 7, 665000, 'Beloved Darling', 'sp7.png', '2023-10-28', 1, 665000, 18),
(19, 39, 23, 290000, 'Pamacheese', 'bn7.png', '2023-08-09', 1, 290000, 19),
(20, 39, 7, 665000, 'Beloved Darling', 'sp7.png', '2023-10-07', 1, 665000, 19),
(21, 39, 2, 500000, 'Daisy Sparkle', 'sp2.png', '2023-10-07', 5, 500000, 19),
(22, 46, 24, 330000, 'Vanicherry', 'bn8.png', '2023-10-22', 1, 330000, 21),
(23, 46, 20, 320000, 'O’grey', 'bn4.png', '2023-10-28', 1, 320000, 22),
(24, 39, 23, 290000, 'Pamacheese', 'bn7.png', '2023-10-25', 1, 290000, 23),
(25, 39, 24, 330000, 'Vanicherry', 'bn8.png', '2023-10-20', 1, 330000, 24),
(26, 39, 19, 320000, 'Lycoberry', 'bn3.png', '2023-10-16', 1, 320000, 25),
(27, 39, 19, 320000, 'Lycoberry', 'bn3.png', '2023-10-07', 1, 320000, 26),
(28, 46, 22, 260000, 'Cocofee', 'bn6.png', '2023-10-07', 1, 260000, 27),
(30, 46, 19, 320000, 'Lycoberry', 'bn3.png', '2023-10-10', 1, 320000, 29),
(31, 44, 21, 270000, 'Mangopaco', 'bn5.png', '2023-10-16', 1, 270000, 30),
(32, 44, 23, 290000, 'Pamacheese', 'bn7.png', '2023-10-16', 1, 290000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(4) NOT NULL,
  `img` varchar(30) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `home` tinyint(1) NOT NULL DEFAULT 0,
  `stt` tinyint(1) NOT NULL DEFAULT 0,
  `mota` varchar(50) DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `img`, `name`, `home`, `stt`, `mota`, `content`) VALUES
(1, 'cake-1.png ', 'Bánh sinh nhật', 1, 1, 'Bánh dành cho 5-10 người ăn', ''),
(2, 'cake-2.png', 'Bánh nửa Entremet', 1, 1, 'Bánh cho 2-5 người ăn', ''),
(19, 'cake-3.png   ', 'Phụ kiện', 1, 1, '', ''),
(20, 'avatar.jpg ', 'Nguyễn', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `thanh_phan` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `price` int(6) NOT NULL,
  `view` int(9) NOT NULL DEFAULT 0,
  `bestseller` tinyint(1) NOT NULL DEFAULT 0,
  `soldout` int(4) NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT 1,
  `iddm` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `thanh_phan`, `img`, `price`, `view`, `bestseller`, `soldout`, `hienthi`, `iddm`) VALUES
(1, 'Secret Garden', 'Xoài, Lá dứa & Phô mai', 'sp1.png', 400000, 0, 1, 0, 1, 1),
(2, 'Daisy Sparkle', 'Dừa, Xoài & Chanh leo', 'sp2.png', 500000, 0, 1, 0, 1, 1),
(3, 'Lily’s Valley', 'Vani, Anh đào & Dâu tây', 'sp3.png', 450000, 0, 1, 0, 1, 1),
(4, 'A Little Grace', 'Trà Earlgrey, Cam & Sô-cô-la', 'sp4.png', 500000, 90, 1, 0, 1, 1),
(5, 'Be in Blossom', 'Vải, Phúc bồn tử & Dừa', 'sp5.png', 490000, 120, 1, 0, 1, 1),
(6, 'A Gentle Blend', 'Cà phê & Cốt dừa', 'sp6.png', 520000, 56, 1, 0, 1, 1),
(7, 'Beloved Darling', 'Sô-cô-la, Dâu rừng & Vani', 'sp7.png', 665000, 99, 1, 0, 1, 1),
(8, 'Choco Therapy', 'Sô-cô-la & Sô-cô-la', 'sp8.png', 600000, 200, 1, 0, 1, 1),
(9, 'One Sunny Day', 'Dừa, Xoài & Chanh leo', 'sp9.png', 585000, 45, 1, 0, 1, 1),
(10, 'Orient Scent', 'Xoài, Lá dứa & Phô mai', 'sp10.png', 590000, 90, 1, 0, 1, 1),
(11, 'Whisper White', 'Trà Earlgrey, Cam & Sô-cô-la', 'sp11.png', 610000, 60, 1, 0, 1, 1),
(12, 'Heart to Heart', 'Sô-cô-la, Dâu rừng & Vani', 'sp12.png', 400000, 20, 1, 0, 1, 1),
(13, 'All Yours', 'Vani, Anh đào & Dâu tây', 'sp13.png', 430000, 35, 1, 0, 1, 1),
(14, 'Roll in Love', 'Sô-cô-la, Dâu rừng & Vani', 'sp14.png', 430000, 40, 1, 0, 1, 1),
(17, 'Chocochoco', 'Sô-cô-la & Sô-cô-la', 'bn1.png', 350000, 100, 0, 0, 1, 2),
(18, 'Chocories', 'Chocories', 'bn2.png', 300000, 69, 0, 0, 1, 2),
(19, 'Lycoberry', 'Vải, Phúc bồn tử & Dừa', 'bn3.png', 320000, 20, 1, 0, 1, 2),
(20, 'O’grey', 'Trà Earlgrey, Cam & Sô-cô-la', 'bn4.png', 320000, 30, 0, 0, 1, 2),
(21, 'Mangopaco', 'Dừa, Xoài & Chanh leo', 'bn5.png', 270000, 234, 1, 0, 1, 2),
(22, 'Cocofee', 'Cà phê & Cốt dừa', 'bn6.png', 260000, 130, 1, 0, 1, 2),
(23, 'Pamacheese', 'Xoài, Lá dứa & Phô mai', 'bn7.png', 290000, 190, 1, 0, 1, 2),
(24, 'Vanicherry', 'Vani, Anh đào & Dâu tây', 'bn8.png ', 330000, 190, 1, 10, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `diachi` text DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `pass`, `phone`, `diachi`, `role`) VALUES
(1, 'admin', 'ng@gmail.com', '22042004', '08', '', 1),
(2, 'Nguyễn Phi Nguyễn', 'phinguyen@gmail.com', '22042004', '0775183622', 'tân chánh hiệp', 1),
(39, 'Dương Phi ', 'a@gmail.com', '123456', '0775183622', 'Tân Chánh Hiệp Quận 12 TPHCM', 0),
(40, 'dương phi 2', 'dddddddddddddddd@gmail.com', '123456', '23', 'tphcm', 0),
(42, 'duong', 'duongphi@gmail.com', '123456', '0775183622', 'Tân Chánh Hiệp Quận 12 TPHCM', 0),
(43, 'Phi Nguyễn', 'phinguyen2204@gmail.com', '123456', '0775183622', 'Tân Chánh Hiệp Quận 12 TPHCM', 0),
(44, 'Nguyễn Phi Nguyễn', 'asd@gmail.com', '12345676', '0123456789', 'tân  chánh hiệp', 0),
(45, 'Hoof', 'hoof@gmail.com', 'guest85', '0000000000', 'Quan 12', 0),
(46, 'Hoof1', 'Hoof1@gmail.com', 'guest54', '0000000001', 'tân  chánh hiệp', 0),
(47, 'Định', 'dinh@gmail.com', '1234', '077123456', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_bill` (`idbill`),
  ADD KEY `fk_cart_sp` (`idpro`),
  ADD KEY `fk_cart_user` (`iduser`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_dm` (`iddm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_loaiuser` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `fk_cart_sp` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `fk_cart_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sp_dm` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
